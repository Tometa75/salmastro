/* Salmastro - nuova veste
 * Dati del giorno: giorno.php (JSON). Testi delle ore: load.php, lo stesso del sito classico,
 * trasformato qui in HTML pulito (titoli, antifone, versetti, segni come testo).
 * Calendario: anno.php (JSON). Nessuna libreria esterna. */
(function () {
  'use strict';

  var root = document.documentElement;
  var $ = function (id) { return document.getElementById(id); };

  // ---------------------------------------------------------------- stato
  var st = {
    today: '', ora: '', festa: '', gruppo: '', scelta: false,
    ctx: 'solo', inv: '0', scala: 1, tema: 'auto',
    alt: {}, bvm: null
  };
  var G = null;            // dati del giorno (giorno.php)
  var richiesta = 0;       // per scartare le risposte vecchie

  function leggiPref() {
    try {
      var s = JSON.parse(localStorage.getItem('salmastro') || '{}');
      ['ctx', 'inv', 'scala', 'tema'].forEach(function (k) { if (s[k] != null) st[k] = s[k]; });
    } catch (e) {}
  }
  function salvaPref() {
    try { localStorage.setItem('salmastro', JSON.stringify({ ctx: st.ctx, inv: st.inv, scala: st.scala, tema: st.tema })); } catch (e) {}
  }

  // ---------------------------------------------------------------- utilità
  function esc(s) { return String(s).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;'); }
  function toast(msg) {
    var t = $('toast'); t.textContent = msg; t.hidden = false;
    clearTimeout(toast._t); toast._t = setTimeout(function () { t.hidden = true; }, 3000);
  }
  function getJSON(url) {
    return fetch(url, { credentials: 'same-origin', cache: 'no-store' }).then(function (r) {
      if (!r.ok) throw new Error('HTTP ' + r.status);
      return r.json();
    });
  }
  function postTesto(param) {
    var b = new URLSearchParams();
    b.append('param[today]', param.today);
    Object.keys(param.config).forEach(function (k) { b.append('param[config][' + k + ']', param.config[k]); });
    return fetch('load.php', { method: 'POST', body: b, credentials: 'same-origin', cache: 'no-store' }).then(function (r) {
      if (!r.ok) throw new Error('HTTP ' + r.status);
      return r.text();
    });
  }
  // colori liturgici (Messale, n. 346); il bianco si vede come oro, perché su fondo chiaro sparirebbe
  var COL = { verde: '#68b368', viola: '#7b4bb3', rosaceo: '#e39ab4', bianco: '#d4b25c', rosso: '#d23b2f' };
  var NOMECOL = { verde: 'Verde', viola: 'Viola', rosaceo: 'Rosaceo', bianco: 'Bianco', rosso: 'Rosso' };
  function coloreTempo(codice) { return codice === 'O' ? 'verde' : (codice === 'A' || codice === 'Q') ? 'viola' : 'bianco'; }


  // ---------------------------------------------------------------- conversione dei testi
  var SEGNI = {
    'asterisk.png': ['m', '*'], 'asterisk2.png': ['m', '*'], 'cross.png': ['m', '†'],
    'v.png': ['vr', '℣'], 'r.png': ['vr', '℟'], 'trattino.png': ['tr', '–'], 'ant.png': ['vr', 'Ant.']
  };
  var RE_SALMO = /^(\(di seguito\)\s*)?(Salmo \d+(?: [AB](?=\s|$))?|Cantico (?:AT|NT) \d+ \([^)]*\))\s*(.*)$/;
  var RE_EVANG = /^(Cantico d[^()]+?)\s*\((.*)\)$/;

  function nomeImg(src) { return (src || '').split('/').pop().split('?')[0]; }
  function testo(el) { return el.textContent.replace(/\s+/g, ' ').trim(); }
  function stile(el) { return (el.getAttribute('style') || '').replace(/\s/g, '').toLowerCase(); }
  function ha(el, c) { return el.classList && el.classList.contains(c); }

  function riga(div) {
    var s = stile(div), cls = ['v'];
    if (ha(div, 'salLatino')) cls.push('la');   // latino: lo stile lo dà il blocco
    else {
      if (s.indexOf('padding-left:30px') >= 0) cls.push('r');
      if (s.indexOf('#705103') >= 0) cls.push('b');
      if (s.indexOf('italic') >= 0) cls.push('it');
    }
    var pre = '', post = '', corpo = '';
    div.childNodes.forEach(function (c) {
      if (c.nodeType === 3) { corpo += esc(c.nodeValue); return; }
      if (c.nodeType !== 1) return;
      if (c.tagName === 'IMG') {
        var g = SEGNI[nomeImg(c.getAttribute('src'))];
        if (!g) return;
        if (ha(c, 'salTextCapo')) pre += '<span class="' + g[0] + '">' + g[1] + '</span> ';
        else post += ' <span class="' + g[0] + '">' + g[1] + '</span>';
      } else corpo += ' ' + esc(testo(c)) + ' ';
    });
    corpo = corpo.replace(/\s+/g, ' ').trim().replace(/\s\*\s/g, ' <span class="m">*</span> ');
    if (!corpo && !pre) return '';
    return '<div class="' + cls.join(' ') + '">' + pre + corpo + post + '</div>';
  }
  function strofa(blk) {
    var out = '';
    var la = false;
    Array.prototype.forEach.call(blk.children, function (d) { if (ha(d, 'salTextBody')) { out += riga(d); if (ha(d, 'salLatino')) la = true; } });
    return out ? (la ? '<div class="st latino" lang="la">' : '<div class="st">') + out + '</div>' : '';
  }
  function titolo(t) {
    var c = t.cloneNode(true);
    c.querySelectorAll('div').forEach(function (d) { d.remove(); });
    var seg = false;
    c.querySelectorAll('span').forEach(function (sp) { if (stile(sp).indexOf('0.8em') >= 0) { sp.remove(); seg = true; } });
    var x = testo(c);
    if (seg) x = '(di seguito) ' + x;
    var m = RE_SALMO.exec(x);
    if (m) {
      return '<h3 class="ps">' + (m[1] ? '<span class="seg">di seguito</span>' : '') +
        '<span class="pn">' + esc(m[2]) + '</span>' + (m[3] ? '<span class="psub">' + esc(m[3]) + '</span>' : '') + '</h3>';
    }
    m = RE_EVANG.exec(x);
    if (m) return '<h2>' + esc(m[1]) + '<span class="sub">' + esc(m[2]) + '</span></h2>';
    return x ? '<h2>' + esc(x) + '</h2>' : '';
  }
  function antifona(div) {
    var lab = div.querySelector('.salAntifona'), t = div.querySelector('.salAntifona2');
    var l = lab ? testo(lab) : 'Ant.';
    if (l === 'ant.') l = 'Ant.';
    var tx = esc(t ? testo(t) : '').replace(/ \/ /g, ' <span class="m">/</span> ');
    return '<p class="ant"><span class="al">' + esc(l) + '</span> ' + tx + '</p>';
  }

  function nodo(n, out) {
    if (n.nodeType !== 1) return;
    var tag = n.tagName, id = n.id || '', s = stile(n);
    if (tag === 'AUDIO' || tag === 'SCRIPT' || tag === 'STYLE') return;
    if (!n.className && n.querySelector('audio') && !n.querySelector('.salResBlock')) return;
    if (ha(n, 'salResBlockTitle')) { out.push(titolo(n)); return; }
    if (ha(n, 'salAntifona') || n.querySelector(':scope > .salAntifona')) { out.push(antifona(n)); return; }
    if (ha(n, 'salTextBlock')) {
      if (!n.querySelector('.salTextBody') && testo(n)) { out.push('<p class="nota">' + esc(testo(n)) + '</p>'); return; }
      out.push(strofa(n)); return;
    }
    if (ha(n, 'salAltScelta')) {
      var b = '';
      n.querySelectorAll('.salAltBtn').forEach(function (x) {
        var m = /salAlt\('(\w+)',\s*(\d+)\)/.exec(x.getAttribute('onclick') || '');
        if (!m) return;
        var c = x.cloneNode(true), nota = c.querySelector('.salAltNota'), nt = nota ? testo(nota) : '';
        if (nota) nota.remove();
        var on = ha(x, 'salAltSel');
        b += '<button type="button" class="opt" data-alt="' + m[1] + '" data-i="' + m[2] + '" aria-pressed="' + on + '">' +
          '<span class="ot">' + esc(testo(c)) + '</span><span class="on2">' + esc(nt) + '</span></button>';
      });
      out.push('<div class="scelta" role="group" aria-label="Scegli">' + b + '</div>');
      return;
    }
    var m = /^salmastro_salalt_(\w+)_(\d+)$/.exec(id);
    if (m) {
      out.push('<div class="altblk" data-alt="' + m[1] + '" data-i="' + m[2] + '"' + (s.indexOf('display:none') >= 0 ? ' hidden' : '') + '>');
      Array.prototype.forEach.call(n.children, function (c) { nodo(c, out); });
      out.push('</div>');
      return;
    }
    var bvm = Array.prototype.filter.call(n.children, function (c) { return /bvm\(/.test(c.getAttribute('onclick') || ''); });
    if (bvm.length) {
      var bb = '';
      bvm.forEach(function (x) {
        var k = /bvm\('(\d+)'\)/.exec(x.getAttribute('onclick'));
        if (k) bb += '<button type="button" class="opt" data-bvm="' + k[1] + '" aria-pressed="false"><span class="ot">' + esc(testo(x)) + '</span></button>';
      });
      out.push('<div class="scelta bvm" role="group" aria-label="Scegli l’antifona">' + bb + '</div>');
      return;
    }
    m = /^salmastro_bvm_(\d+)$/.exec(id);
    if (m) {
      out.push('<div class="bvmblk" data-bvm="' + m[1] + '"' + (s.indexOf('display:none') >= 0 ? ' hidden' : '') + '>');
      Array.prototype.forEach.call(n.children, function (c) { nodo(c, out); });
      out.push('</div>');
      return;
    }
    if (s.indexOf('color:brown') >= 0) { out.push('<p class="nota">' + esc(testo(n)) + '</p>'); return; }
    if (ha(n, 'salResBlock')) {
      out.push('<section>');
      Array.prototype.forEach.call(n.children, function (c) { nodo(c, out); });
      out.push('</section>');
      return;
    }
    // contenitore sconosciuto: si scende nei figli; il testo sciolto non va perso
    Array.prototype.forEach.call(n.childNodes, function (c) {
      if (c.nodeType === 3 && c.nodeValue.trim()) out.push('<p class="nota">' + esc(c.nodeValue.trim()) + '</p>');
      else nodo(c, out);
    });
  }

  function converti(html) {
    var doc = new DOMParser().parseFromString('<div id="r">' + html + '</div>', 'text/html');
    var r = doc.getElementById('r');
    // avvisi PHP (solo in sviluppo): restano visibili in cima
    var avvisi = [];
    r.querySelectorAll('b').forEach(function (b) { if (/^(Warning|Notice|Deprecated|Fatal error)$/.test(b.textContent)) avvisi.push(testo(b.parentNode).slice(0, 300)); });
    var out = [];
    Array.prototype.forEach.call(r.childNodes, function (c) { nodo(c, out); });
    var box = document.createElement('div');
    box.innerHTML = out.join('').replace(/<section><\/section>/g, '');
    var fatto = false;
    Array.prototype.forEach.call(box.children, function (sec) {
      if (sec.tagName !== 'SECTION') return;
      var h2 = sec.querySelector(':scope > h2'), primo = sec.firstElementChild;
      if (!primo) return;
      if (primo.tagName === 'P' && primo.classList.contains('ant') && h2) {   // cantico evangelico
        sec.insertBefore(h2, primo); sec.className = 'evang'; return;
      }
      if (!fatto && !h2 && sec.querySelector('h3.ps')) {
        var nh = document.createElement('h2'); nh.textContent = 'Salmodia';
        sec.insertBefore(nh, primo); sec.className = 'salmodia'; fatto = true; return;
      }
      if (h2 && /^(Lettura breve|Orazione)/.test(h2.textContent)) sec.className = 'prosa';
    });
    var h = box.innerHTML;
    if (avvisi.length) h = '<div class="stato">' + avvisi.map(esc).join('<br>') + '</div>' + h;
    return h;
  }
  window.SalmastroConverti = converti;   // per le prove

  // ---------------------------------------------------------------- ore
  var GRUPPI = [
    { g: 'lod', n: 'Lodi' }, { g: 'ter', n: 'Terza' }, { g: 'ses', n: 'Sesta' },
    { g: 'non', n: 'Nona' }, { g: 'ves', n: 'Vespri' }, { g: 'com', n: 'Compieta' }
  ];
  function oreDelGruppo(g) { return G ? G.ore.filter(function (o) { return o.gruppo === g; }) : []; }
  function principale(g) {
    var l = oreDelGruppo(g), p = l.filter(function (o) { return o.codice.indexOf('|') < 0; });
    return (p[0] || l[0] || {}).codice || '';
  }
  function trovaOra(k) { for (var i = 0; G && i < G.ore.length; i++) if (G.ore[i].codice === k) return G.ore[i]; return null; }

  var oreEl = $('ore');
  GRUPPI.forEach(function (x) {
    var b = document.createElement('button');
    b.type = 'button'; b.className = 'ora'; b.dataset.g = x.g; b.textContent = x.n;
    b.addEventListener('click', function () {
      var k = principale(x.g);
      if (!k) return;
      var cambia = st.gruppo !== x.g;
      st.ora = k; st.gruppo = x.g; st.scelta = true; aggiornaUrl(true); caricaTesto();
      if (cambia) window.scrollTo({ top: 0 });
    });
    oreEl.appendChild(b);
  });
  function disegnaOre() {
    var oggi = G.today === G.oggi;
    oreEl.querySelectorAll('.ora').forEach(function (b) {
      var g = b.dataset.g;
      b.disabled = !oreDelGruppo(g).length;
      b.setAttribute('aria-current', g === st.gruppo ? 'true' : 'false');
      var ades = oggi && G.adesso === g;
      b.classList.toggle('adesso', ades);
      if (ades) b.title = 'L’ora di adesso'; else b.removeAttribute('title');
    });
  }

  // ---------------------------------------------------------------- testata
  function disegnaTestata() {
    $('giorno-txt').textContent = G.data;
    $('giornata').textContent = G.titolo;
    document.title = G.titolo + ' · Liturgia delle ore benedettina';
    root.style.setProperty('--tempo', COL[coloreTempo(G.tempo.codice)]);
    root.style.setProperty('--giorno', COL[G.colore] || COL[coloreTempo(G.tempo.codice)]);
    var det = '<span class="tempo">' + esc(G.tempo.nome) + '</span>';
    if (G.anno) det += '<span>Anno ' + esc(G.anno) + '</span>';
    if (G.settimana !== '' && G.settimana != null) det += '<span>Settimana ' + esc(G.settimana) + '</span>';
    if (G.salterio) det += '<span>' + esc(G.salterio) + ' settimana del salterio</span>';
    $('dettagli').innerHTML = det;

    var altre = [];
    G.eventi.slice(1).forEach(function (e) { altre.push('<span class="ev">' + esc(e.titolo) + '</span>'); });
    G.feste.forEach(function (f) { if (!f.scegli) altre.push('<span>Non si celebra: ' + esc(f.titolo) + '</span>'); });
    $('altre').innerHTML = altre.join(''); $('altre').hidden = !altre.length;

    var v = $('vigilia');
    v.hidden = !G.vigilia.length;
    v.textContent = G.vigilia.length ? 'Vigilia: ' + G.vigilia.join(', ') : '';

    var opz = [{ v: '', t: G.titoloCalendario, s: 'come da calendario' }];
    G.feste.forEach(function (f) {
      if (!f.scegli) return;
      var m = /^(.*?)\s*\((.*)\)\s*$/.exec(f.titolo);
      opz.push({ v: f.codice, t: m ? m[1] : f.titolo, s: m ? m[2].charAt(0).toLowerCase() + m[2].slice(1) : '' });
    });
    G.alternative.forEach(function (a) { opz.push({ v: a.codice, t: a.titolo, s: a.nota }); });
    var cel = $('opz-festa');
    cel.innerHTML = opz.map(function (o) {
      return '<button type="button" data-v="' + esc(o.v) + '" aria-pressed="' + (o.v === st.festa) + '">' + esc(o.t) + (o.s ? '<small>' + esc(o.s) + '</small>' : '') + '</button>';
    }).join('');
    $('celebra').hidden = opz.length < 2;

    $('classica').href = 'index.php' + (G.today !== G.oggi ? '?today=' + G.today : '');
  }
  $('opz-festa').addEventListener('click', function (e) {
    var b = e.target.closest('button'); if (!b) return;
    if (b.dataset.v === st.festa) return;
    st.festa = b.dataset.v; aggiornaUrl(true); caricaGiorno();
  });

  // ---------------------------------------------------------------- caricamento
  function caricaGiorno() {
    var id = ++richiesta;
    var q = new URLSearchParams();
    if (st.today) q.set('today', st.today);
    q.set('festa', st.festa || '');
    if (st.ora) q.set('ora', st.ora);
    $('testo').classList.add('carica');
    return getJSON('giorno.php?' + q.toString()).then(function (g) {
      if (id !== richiesta) return;
      G = g; st.today = g.today;
      // l'ora: quella scelta se c'è ancora, altrimenti la stessa ora del giorno, altrimenti quella proposta
      if (!trovaOra(st.ora)) st.ora = st.gruppo ? principale(st.gruppo) : '';
      if (!st.ora) st.ora = g.ora;
      st.gruppo = (trovaOra(st.ora) || {}).gruppo || '';
      disegnaTestata();
      aggiornaUrl(false);
      return caricaTesto();
    }).catch(function () {
      if (id !== richiesta) return;
      errore('Non riesco a leggere i dati del giorno.', caricaGiorno);
    });
  }
  function caricaTesto() {
    var id = ++richiesta;
    ferma();
    disegnaOre();
    disegnaTestaOra();
    $('testo').classList.add('carica');
    return postTesto({
      today: st.today,
      config: { ora: st.ora, festa: st.festa || '', inv: st.inv === '1' ? 1 : 0, mix: 0, contesto: st.ctx }
    }).then(function (html) {
      if (id !== richiesta) return;
      disegnaTesto(converti(html));
    }).catch(function () {
      if (id !== richiesta) return;
      errore('Non riesco a caricare il testo dell’ora.', caricaTesto);
    });
  }
  function errore(msg, riprova) {
    var t = $('testo'); t.classList.remove('carica');
    t.innerHTML = '<div class="stato">' + esc(msg) + ' Controlla la connessione.<button type="button" id="riprova">Riprova</button></div>';
    $('riprova').addEventListener('click', riprova);
  }

  // ---------------------------------------------------------------- intestazione dell'ora (Invitatorio, varianti)
  function disegnaTestaOra() {
    var box = $('testa-ora'), h = '';
    var o = trovaOra(st.ora), varianti = oreDelGruppo(st.gruppo);
    if (varianti.length > 1) {
      h += '<div class="varianti"><span class="ora-tit">Scegli</span><div class="seg" role="group" aria-label="Scegli l’ora">' +
        varianti.map(function (v) { return '<button type="button" data-k="' + esc(v.codice) + '" aria-pressed="' + (v.codice === st.ora) + '">' + esc(v.titolo) + '</button>'; }).join('') +
        '</div></div>';
    } else if (o) {
      h += '<div class="ora-tit">' + esc(o.titolo) + '</div>';
    }
    if (st.gruppo === 'lod') {
      h += '<div class="inv-bar"><span>Inizia con l’Invitatorio<small>Si dice quando le Lodi sono la prima preghiera del giorno.</small></span>' +
        '<button type="button" class="interr" id="inv-sw" role="switch" aria-label="Invitatorio" aria-checked="' + (st.inv === '1') + '"></button></div>';
    }
    box.innerHTML = h;
    box.querySelectorAll('.varianti button').forEach(function (b) {
      b.addEventListener('click', function () { st.ora = b.dataset.k; st.scelta = true; aggiornaUrl(true); caricaTesto(); });
    });
    var sw = $('inv-sw');
    if (sw) sw.addEventListener('click', function () {
      st.inv = st.inv === '1' ? '0' : '1'; salvaPref(); caricaTesto().then(function () { var s = $('inv-sw'); if (s) s.focus(); });
    });
  }

  // ---------------------------------------------------------------- testo
  var ICONA = '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>';
  function disegnaTesto(html) {
    var t = $('testo');
    t.innerHTML = html;
    t.classList.remove('carica');
    var idx = [];
    t.querySelectorAll('section').forEach(function (s, i) {
      var h = s.querySelector('h2');
      s.id = 'p' + (i + 1);
      if (!h) return;
      var nome = h.childNodes[0] ? h.childNodes[0].textContent : h.textContent;
      idx.push({ id: s.id, n: nome });
      var b = document.createElement('button'); b.type = 'button'; b.className = 'ascolta';
      b.innerHTML = ICONA + 'Ascolta'; b.setAttribute('aria-label', 'Ascolta: ' + nome);
      b.addEventListener('click', function () { leggiSezione(s, nome); });
      var sub = h.querySelector('.sub');
      if (sub) h.insertBefore(b, sub); else h.appendChild(b);
    });
    t.querySelectorAll('h3.ps').forEach(function (h) {
      var b = document.createElement('button'); b.type = 'button'; b.className = 'ascolta';
      var nome = (h.querySelector('.pn') || h).textContent;
      b.innerHTML = ICONA + 'Ascolta il salmo'; b.setAttribute('aria-label', 'Ascolta: ' + nome);
      b.addEventListener('click', function () { leggiSalmo(h, nome); });
      h.appendChild(b);
    });
    // cantico a scelta (settimane alterne)
    t.querySelectorAll('.scelta:not(.bvm)').forEach(function (g) {
      var bs = g.querySelectorAll('.opt'), gr = bs[0] && bs[0].dataset.alt;
      if (st.alt[gr] != null) mostraAlt(gr, st.alt[gr]);
      bs.forEach(function (b) { b.addEventListener('click', function () { st.alt[gr] = b.dataset.i; mostraAlt(gr, b.dataset.i); }); });
    });
    // antifone mariane
    var bvm = t.querySelectorAll('.scelta.bvm .opt');
    if (bvm.length) {
      var vis = t.querySelector('.bvmblk:not([hidden])');
      var k = st.bvm || (vis && vis.dataset.bvm) || bvm[0].dataset.bvm;
      if (!t.querySelector('.bvmblk[data-bvm="' + k + '"]')) k = vis ? vis.dataset.bvm : bvm[0].dataset.bvm;
      mostraBvm(k);
      bvm.forEach(function (b) { b.addEventListener('click', function () { st.bvm = b.dataset.bvm; mostraBvm(b.dataset.bvm); }); });
    }
    var o = trovaOra(st.ora);
    $('indice').innerHTML = '<div class="et">' + esc(o ? o.titolo : '') + '</div>' +
      idx.map(function (x) { return '<a href="#' + x.id + '" data-salta="' + x.id + '">' + esc(x.n) + '</a>'; }).join('');
  }
  $('indice').addEventListener('click', function (e) {
    var a = e.target.closest('a[data-salta]'); if (!a) return;
    e.preventDefault(); var el = $(a.dataset.salta); if (el) el.scrollIntoView();
  });
  function mostraAlt(g, i) {
    var t = $('testo');
    t.querySelectorAll('.altblk[data-alt="' + g + '"]').forEach(function (d) { d.hidden = d.dataset.i !== String(i); });
    t.querySelectorAll('.scelta .opt[data-alt="' + g + '"]').forEach(function (b) { b.setAttribute('aria-pressed', b.dataset.i === String(i) ? 'true' : 'false'); });
  }
  function mostraBvm(k) {
    var t = $('testo');
    t.querySelectorAll('.bvmblk').forEach(function (d) { d.hidden = d.dataset.bvm !== String(k); });
    t.querySelectorAll('.scelta.bvm .opt').forEach(function (b) { b.setAttribute('aria-pressed', b.dataset.bvm === String(k) ? 'true' : 'false'); });
  }

  // ---------------------------------------------------------------- indirizzo (si può salvare o mandare il link)
  function aggiornaUrl(nuovo) {
    if (!G) return;
    var q = new URLSearchParams();
    if (st.today && st.today !== G.oggi) q.set('today', st.today);
    if (st.ora && st.scelta) q.set('ora', st.ora);
    if (st.festa) q.set('festa', st.festa);
    var u = location.pathname + (q.toString() ? '?' + q.toString() : '');
    try { history[nuovo ? 'pushState' : 'replaceState']({ s: 1 }, '', u); } catch (e) {}
  }
  function daUrl() {
    var q = new URLSearchParams(location.search);
    st.today = q.get('today') || '';
    st.ora = q.get('ora') || '';
    st.festa = q.get('festa') || '';
    st.gruppo = st.ora ? st.ora.slice(0, 3) : '';
    st.scelta = !!st.ora;
  }
  window.addEventListener('popstate', function () { daUrl(); caricaGiorno(); });

  function vaiAlGiorno(tag) {
    st.today = tag; st.festa = ''; st.alt = {};
    if (st.gruppo) st.ora = '';           // si tiene la stessa ora, nella forma giusta per il nuovo giorno
    aggiornaUrlProvvisorio(tag);
    caricaGiorno();
  }
  function aggiornaUrlProvvisorio(tag) {
    var q = new URLSearchParams(); q.set('today', tag);
    try { history.pushState({ s: 1 }, '', location.pathname + '?' + q.toString()); } catch (e) {}
  }
  $('prec').addEventListener('click', function () { if (G) vaiAlGiorno(G.prec); });
  $('succ').addEventListener('click', function () { if (G) vaiAlGiorno(G.succ); });

  // ---------------------------------------------------------------- opzioni
  var bo = $('btn-opz'), po = $('opzioni');
  bo.addEventListener('click', function () { var a = po.hidden; po.hidden = !a; bo.setAttribute('aria-expanded', a ? 'true' : 'false'); });
  function seg(id, chiave, dopo) {
    var g = $(id);
    function agg() { g.querySelectorAll('button').forEach(function (b) { b.setAttribute('aria-pressed', b.dataset.v === String(st[chiave]) ? 'true' : 'false'); }); }
    g.addEventListener('click', function (e) { var b = e.target.closest('button'); if (!b) return; st[chiave] = b.dataset.v; agg(); salvaPref(); dopo(); });
    agg();
  }
  function applicaTema() { if (st.tema === 'auto') root.removeAttribute('data-theme'); else root.setAttribute('data-theme', st.tema); }
  var SCALE = [0.85, 0.92, 1, 1.1, 1.2, 1.35, 1.5, 1.7];
  function applicaScala() { root.style.setProperty('--scala', st.scala); $('perc').textContent = Math.round(st.scala * 100) + '%'; }
  function passo(d) {
    var i = SCALE.indexOf(Number(st.scala)); if (i < 0) i = 2;
    i = Math.max(0, Math.min(SCALE.length - 1, i + d)); st.scala = SCALE[i]; applicaScala(); salvaPref();
  }
  $('meno').addEventListener('click', function () { passo(-1); });
  $('piu').addEventListener('click', function () { passo(1); });

  // canto gregoriano di sottofondo (lo stesso file del sito classico)
  var audio = null;
  $('musica').addEventListener('click', function () {
    var b = this;
    if (!audio) { audio = new Audio('img/greg.mp3'); audio.loop = true; audio.volume = 0.3; audio.preload = 'none'; }
    if (audio.paused) {
      audio.play().then(function () { b.setAttribute('aria-pressed', 'true'); b.textContent = 'In ascolto · Ferma'; })
        .catch(function () { toast('Il browser non ha fatto partire il canto.'); });
    } else { audio.pause(); b.setAttribute('aria-pressed', 'false'); b.textContent = 'Ascolta'; }
  });

  // ---------------------------------------------------------------- calendario liturgico
  var MESI = ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'];
  var GS = ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'];
  var MESI3 = ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'];
  var foglio = $('foglio'), lista = $('cal-lista'), annoCal = 0, annoCaricato = 0, ultimoFuoco = null;
  function disegnaCal(dati) {
    var h = '', mese = -1, visti = {}, leg = '';
    dati.giorni.forEach(function (d) {
      var m = parseInt(d[0].slice(4, 6), 10) - 1;
      if (m !== mese) { mese = m; h += '<div class="mese" data-m="' + m + '">' + MESI[m] + '</div>'; }
      var righe = '';
      d[7].forEach(function (e) { righe += '<span class="ev">' + esc(e[0]) + '</span>'; });
      d[8].forEach(function (f) { righe += '<span class="fs-' + esc(f[1]) + '">' + esc(f[0]) + '</span>'; });
      var tempo = d[6] ? '' : d[3];
      if (d[5] !== '' && d[5] != null) tempo += (tempo ? ' · ' : '') + 'settimana ' + d[5];
      righe += '<span class="t">' + esc(tempo) + '</span>';
      var cl = 'gg' + (d[1] === 0 ? ' dom' : '') + (G && d[0] === G.oggi ? ' oggi' : '') + (G && d[0] === G.today && G.today !== G.oggi ? ' scelto' : '');
      h += '<button type="button" class="' + cl + '" data-tag="' + d[0] + '">' +
        '<span class="n"><b>' + parseInt(d[0].slice(6), 10) + '</b><small>' + GS[d[1]] + '</small><i style="background:' + (COL[d[9]] || COL.verde) + '" title="' + (NOMECOL[d[9]] || '') + '"></i></span>' +
        '<span class="c">' + righe + '</span></button>';
      var k = d[9];
      if (k && !visti[k]) { visti[k] = 1; }
    });
    if (dati.anno < 2100) h += '<button type="button" class="anno-dopo" data-anno="' + (dati.anno + 1) + '">Continua con il ' + (dati.anno + 1) + '</button>';
    ['verde', 'viola', 'rosaceo', 'bianco', 'rosso'].forEach(function (k) { if (visti[k]) leg += '<span><i style="background:' + COL[k] + '"></i>' + NOMECOL[k] + '</span>'; });
    lista.innerHTML = h; $('legenda').innerHTML = leg;
    $('cal-mesi').innerHTML = MESI3.map(function (n, i) { return '<button type="button" data-m="' + i + '" aria-label="' + MESI[i] + '">' + n + '</button>'; }).join('');
    annoCaricato = dati.anno;
    meseVisibile();
  }
  // il mese che si sta guardando: nel titolo e nella barra dei mesi
  function altezzaCap() { var c = foglio.querySelector('.cap'); var a = c ? c.offsetHeight : 120; foglio.style.setProperty('--cap', (a + 8) + 'px'); return a; }
  function meseVisibile() {
    var lim = foglio.getBoundingClientRect().top + altezzaCap() + 12, m = 0;
    lista.querySelectorAll('.mese').forEach(function (x) { if (x.getBoundingClientRect().top <= lim) m = parseInt(x.dataset.m, 10); });
    if (annoCaricato === annoCal) $('cal-tit').textContent = MESI[m] + ' ' + annoCal;
    $('cal-mesi').querySelectorAll('button').forEach(function (b) {
      var on = b.dataset.m === String(m);
      b.setAttribute('aria-current', on ? 'true' : 'false');
      if (on && b.scrollIntoView && b.offsetParent) { var n = b.parentNode; n.scrollLeft = Math.max(0, b.offsetLeft - n.offsetWidth / 2 + b.offsetWidth / 2); }
    });
  }
  var rafMese = 0;
  foglio.addEventListener('scroll', function () { if (!rafMese) rafMese = requestAnimationFrame(function () { rafMese = 0; meseVisibile(); }); });
  $('cal-mesi').addEventListener('click', function (e) {
    var b = e.target.closest('button'); if (!b) return;
    var x = lista.querySelector('.mese[data-m="' + b.dataset.m + '"]'); if (!x) return;
    altezzaCap();
    foglio.scrollTop += x.getBoundingClientRect().top - foglio.getBoundingClientRect().top - altezzaCap() - 4;
  });
  function caricaAnno(anno, poi) {
    annoCal = anno;
    $('cal-tit').textContent = 'Calendario ' + anno;
    if (annoCaricato === anno) { if (poi) poi(); meseVisibile(); return; }
    lista.innerHTML = '<div class="stato">Carico il calendario…</div>';
    getJSON('anno.php?anno=' + anno).then(function (d) { if (annoCal === anno) { disegnaCal(d); if (poi) poi(); } })
      .catch(function () { lista.innerHTML = '<div class="stato">Non riesco a caricare il calendario.</div>'; });
  }
  function centra(tag) { var el = lista.querySelector('.gg[data-tag="' + tag + '"]'); if (el) el.scrollIntoView({ block: 'center' }); }
  function apriCal() {
    if (!G) return;
    ultimoFuoco = document.activeElement;
    foglio.hidden = false; document.body.style.overflow = 'hidden';
    annoCaricato = 0;   // ridisegna per segnare il giorno scelto
    caricaAnno(parseInt(G.today.slice(0, 4), 10), function () { centra(G.today); });
    $('cal-chiudi').focus({ preventScroll: true });
  }
  function chiudiCal() { foglio.hidden = true; document.body.style.overflow = ''; if (ultimoFuoco) ultimoFuoco.focus(); }
  $('btn-cal').addEventListener('click', apriCal);
  $('giorno').addEventListener('click', apriCal);
  $('cal-chiudi').addEventListener('click', chiudiCal);
  $('cal-oggi').addEventListener('click', function () {
    var a = parseInt(G.oggi.slice(0, 4), 10);
    caricaAnno(a, function () { centra(G.oggi); });
  });
  $('anno-prec').addEventListener('click', function () { if (annoCal > 1999) caricaAnno(annoCal - 1, function () { lista.parentNode.parentNode.scrollTop = 0; }); });
  $('anno-succ').addEventListener('click', function () { if (annoCal < 2100) caricaAnno(annoCal + 1, function () { lista.parentNode.parentNode.scrollTop = 0; }); });
  document.addEventListener('keydown', function (e) { if (e.key === 'Escape' && !foglio.hidden) chiudiCal(); });
  lista.addEventListener('click', function (e) {
    var a = e.target.closest('.anno-dopo');
    if (a) { caricaAnno(parseInt(a.dataset.anno, 10), function () { foglio.scrollTop = 0; }); return; }
    var b = e.target.closest('.gg'); if (!b) return;
    chiudiCal();
    if (b.dataset.tag !== G.today) { vaiAlGiorno(b.dataset.tag); window.scrollTo({ top: 0 }); }
  });

  // ---------------------------------------------------------------- lettura ad alta voce
  var synth = window.speechSynthesis, coda = [], pos = 0, inPausa = false, lettura = 0;
  var barra = $('barra');
  function pulisci(el) {
    var c = el.cloneNode(true);
    c.querySelectorAll('.m, .vr, .tr, .al, .ascolta').forEach(function (x) { x.remove(); });
    return c.textContent.replace(/\s+/g, ' ').trim();
  }
  function righe(nodi) {
    var out = [];
    nodi.forEach(function (n) { if (n.closest('[hidden]')) return; var t = pulisci(n); if (t) out.push({ el: n, t: t }); });
    return out;
  }
  function voce() { var vs = (synth && synth.getVoices()) || []; return vs.filter(function (v) { return /^it/i.test(v.lang); })[0] || null; }
  function avvia(lista, titolo) {
    if (!synth || typeof SpeechSynthesisUtterance === 'undefined') { toast('Questo browser non sa leggere ad alta voce.'); return; }
    ferma();
    coda = lista; pos = 0; lettura++;
    $('barra-cosa').textContent = 'In ascolto: ' + titolo;
    $('barra-pausa').textContent = 'Pausa';
    barra.hidden = false; inPausa = false;
    prossima(lettura);
  }
  function prossima(id) {
    if (id !== lettura) return;
    document.querySelectorAll('.leggo').forEach(function (x) { x.classList.remove('leggo'); });
    if (pos >= coda.length) { ferma(); return; }
    var r = coda[pos];
    r.el.classList.add('leggo');
    var rect = r.el.getBoundingClientRect();
    if (rect.top < 80 || rect.bottom > window.innerHeight - 90) r.el.scrollIntoView({ block: 'center' });
    var u = new SpeechSynthesisUtterance(r.t); u.lang = 'it-IT'; u.rate = 0.95;
    var v = voce(); if (v) u.voice = v;
    u.onend = function () { pos++; prossima(id); };
    u.onerror = function () { if (id === lettura) { pos++; prossima(id); } };
    synth.speak(u);
  }
  function ferma() {
    lettura++;
    if (synth) synth.cancel();
    document.querySelectorAll('.leggo').forEach(function (x) { x.classList.remove('leggo'); });
    barra.hidden = true;
  }
  function leggiSezione(sec, nome) { avvia(righe(sec.querySelectorAll('.v:not(.la), p.ant')), nome); }
  function leggiSalmo(h, nome) {
    var nodi = [], n = h.nextElementSibling;
    while (n && !n.matches('h3.ps') && !(n.matches('p.ant') && nodi.length && n.nextElementSibling && n.nextElementSibling.matches('h3.ps'))) {
      if (n.matches('.st')) n.querySelectorAll('.v').forEach(function (v) { nodi.push(v); });
      else if (n.matches('p.ant')) nodi.push(n);
      n = n.nextElementSibling;
    }
    avvia(righe(nodi), nome);
  }
  $('barra-pausa').addEventListener('click', function () {
    if (!synth) return;
    if (inPausa) { synth.resume(); inPausa = false; this.textContent = 'Pausa'; }
    else { synth.pause(); inPausa = true; this.textContent = 'Riprendi'; }
  });
  $('barra-stop').addEventListener('click', ferma);

  // ---------------------------------------------------------------- avvio
  leggiPref(); applicaTema(); applicaScala();
  seg('opz-ctx', 'ctx', function () { caricaTesto(); });
  seg('opz-tema', 'tema', applicaTema);
  daUrl();
  caricaGiorno();
})();
