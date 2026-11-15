/* Salmastro - service worker della pagina iniziale (index.php)
 * Conserva sul telefono la pagina, i suoi file e i testi già letti o scaricati in anticipo,
 * così l'app si apre anche senza rete. Con la rete si legge sempre dal sito (prima la rete, poi la copia).
 * Il sito classico (classica.php) non passa di qui. */
'use strict';
var STATICO = 'salmastro-statico-1';
var TESTI = 'salmastro-testi-1';

self.addEventListener('install', function (e) {
  e.waitUntil(caches.open(STATICO).then(function (c) {
    return c.addAll(['./', 'manifest.json', 'icone/icona-192.png', 'icone/apple-touch-icon.png']);
  }).then(function () { return self.skipWaiting(); }));
});
self.addEventListener('activate', function (e) {
  e.waitUntil(caches.keys().then(function (ks) {
    return Promise.all(ks.filter(function (k) { return k !== STATICO && k !== TESTI; }).map(function (k) { return caches.delete(k); }));
  }).then(function () { return self.clients.claim(); }));
});

function oggiLocale() {
  var d = new Date();
  return d.getFullYear() + ('0' + (d.getMonth() + 1)).slice(-2) + ('0' + d.getDate()).slice(-2);
}
// chiave della copia di giorno.php: conta solo giorno e celebrazione scelta (l'ora proposta la ricalcola la pagina)
function chiaveGiorno(url) {
  var q = url.searchParams;
  return new URL('giorno.php?today=' + (q.get('today') || oggiLocale()) + '&festa=' + (q.get('festa') || ''), self.registration.scope).href;
}
// prima la rete; senza rete la copia, segnata con l'intestazione X-Salmastro-Copia
function reteOCopia(req, chiave, cache) {
  return fetch(req).then(function (r) {
    if (r.ok) { var copia = r.clone(); caches.open(cache).then(function (c) { c.put(chiave, copia); }); }
    return r;
  }).catch(function () {
    return caches.open(cache).then(function (c) { return c.match(chiave); }).then(function (r) {
      if (!r) return Response.error();
      var h = new Headers(r.headers); h.set('X-Salmastro-Copia', '1');
      return r.blob().then(function (b) { return new Response(b, { status: 200, headers: h }); });
    });
  });
}

// la pagina chiede di togliere i testi dei giorni passati
self.addEventListener('message', function (e) {
  var oggi = e.data && e.data.pulisci;
  if (!/^\d{8}$/.test(oggi || '')) return;
  caches.open(TESTI).then(function (c) {
    return c.keys().then(function (ks) {
      ks.forEach(function (k) {
        var t = new URL(k.url).searchParams.get('today') || new URL(k.url).searchParams.get('param[today]');
        if (t && /^\d{8}$/.test(t) && t < oggi) c.delete(k);
      });
    });
  });
});

self.addEventListener('fetch', function (e) {
  var req = e.request, url = new URL(req.url);
  if (url.origin !== location.origin) return;
  var scope = new URL(self.registration.scope);
  var percorso = url.pathname.slice(scope.pathname.length);

  // la pagina iniziale (con qualunque giorno nell'indirizzo)
  if (req.mode === 'navigate') {
    if (percorso === '' || percorso === 'index.php') e.respondWith(reteOCopia(req, './', STATICO));
    return;
  }
  // testi delle ore chiesti dalla pagina nuova (il sito classico usa load.php senza questa intestazione)
  if (percorso === 'load.php' && req.method === 'POST' && req.headers.get('X-Salmastro') === '1') {
    e.respondWith(req.clone().text().then(function (corpo) {
      return reteOCopia(req, new URL('load.php?' + corpo, scope).href, TESTI);
    }));
    return;
  }
  if (req.method !== 'GET') return;
  if (percorso === 'giorno.php') { e.respondWith(reteOCopia(req, chiaveGiorno(url), TESTI)); return; }
  if (percorso === 'anno.php') { e.respondWith(reteOCopia(req, url.href, TESTI)); return; }
  // file della pagina: hanno la versione nell'indirizzo, quindi la copia vale finché non cambiano
  if (/^(nuova|fonts|icone)\//.test(percorso) || percorso === 'manifest.json') {
    e.respondWith(caches.open(STATICO).then(function (c) {
      return c.match(req).then(function (r) {
        if (r) return r;
        return fetch(req).then(function (n) {
          if (n.ok) {
            // la versione nuova di un file prende il posto della vecchia
            c.keys().then(function (ks) {
              ks.forEach(function (k) { var u = new URL(k.url); if (u.pathname === url.pathname && u.search !== url.search) c.delete(k); });
            });
            c.put(req, n.clone());
          }
          return n;
        });
      });
    }));
  }
});
