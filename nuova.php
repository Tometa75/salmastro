<?php
//NUOVA VESTE - pagina di prova accanto a index.php (che resta com'è)
//I testi arrivano da load.php, i dati del giorno da giorno.php, il calendario da anno.php
include ('baseline.php');
$v=function($f) { return @filemtime(SITE_ROOT.'/'.$f); };
?><!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>Liturgia delle ore benedettina</title>
    <meta name="description" content="La Liturgia delle Ore secondo il rito monastico benedettino, giorno per giorno.">
    <meta name="theme-color" content="#fbfaf6" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#171512" media="(prefers-color-scheme: dark)">
    <link rel="preload" href="fonts/Literata/Literata.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="nuova/stile.css?v=<?php echo $v('nuova/stile.css'); ?>">
    <script>
        //tema scelto dall'utente prima del disegno, per non far lampeggiare la pagina
        try { var t = JSON.parse(localStorage.getItem('salmastro') || '{}').tema; if (t === 'light' || t === 'dark') document.documentElement.setAttribute('data-theme', t); } catch (e) {}
    </script>
</head>
<body>

<div class="pagina">
    <div class="bordo" aria-hidden="true"></div>
    <span class="nastro" aria-hidden="true"></span>

    <header class="testata">
        <div class="riga1">
            <span class="marchio">Liturgia delle ore benedettina</span>
            <span class="btns">
                <button class="btn-opz" id="btn-cal" type="button" aria-label="Calendario liturgico">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><rect x="3.5" y="5" width="17" height="15" rx="2"/><path d="M3.5 10h17M8 3v4M16 3v4"/></svg>
                    <span class="lbl">Calendario</span>
                </button>
                <button class="btn-opz" id="btn-opz" type="button" aria-expanded="false" aria-controls="opzioni" aria-label="Opzioni">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M4 6h10M18 6h2M4 12h4M12 12h8M4 18h12M20 18h0"/><circle cx="16" cy="6" r="2"/><circle cx="10" cy="12" r="2"/><circle cx="18" cy="18" r="2"/></svg>
                    <span class="lbl">Opzioni</span>
                </button>
            </span>
        </div>
        <div class="data">
            <button class="freccia" type="button" id="prec" aria-label="Giorno precedente"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 5l-7 7 7 7"/></svg></button>
            <button class="giorno" type="button" id="giorno" aria-label="Scegli un altro giorno dal calendario"><span id="giorno-txt">&nbsp;</span></button>
            <button class="freccia" type="button" id="succ" aria-label="Giorno successivo"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 5l7 7-7 7"/></svg></button>
        </div>
        <h1 class="giornata" id="giornata">&nbsp;</h1>
        <div class="dettagli" id="dettagli"></div>
        <div class="altre" id="altre" hidden></div>
        <div class="vigilia" id="vigilia" hidden></div>
        <div class="celebra" id="celebra" hidden>
            <span class="et">Celebra</span>
            <div class="seg" id="opz-festa" role="group" aria-label="Celebra"></div>
        </div>

        <div class="opzioni" id="opzioni" hidden>
            <div class="gruppo">
                <span class="et">Chi prega</span>
                <div class="seg" id="opz-ctx" role="group" aria-label="Chi prega">
                    <button type="button" data-v="solo" aria-pressed="true">Da solo</button>
                    <button type="button" data-v="comune" aria-pressed="false">In comunità</button>
                    <button type="button" data-v="prete" aria-pressed="false">Con il sacerdote</button>
                </div>
                <span class="nota-opz">Cambia la conclusione dell'ora (benedizione e congedo).</span>
            </div>
            <div class="gruppo">
                <span class="et">Grandezza del testo</span>
                <div class="dim">
                    <button type="button" id="meno" aria-label="Testo più piccolo">A−</button>
                    <output id="perc" aria-live="polite">100%</output>
                    <button type="button" id="piu" aria-label="Testo più grande">A+</button>
                </div>
            </div>
            <div class="gruppo">
                <span class="et">Aspetto</span>
                <div class="seg" id="opz-tema" role="group" aria-label="Aspetto">
                    <button type="button" data-v="auto" aria-pressed="true">Automatico</button>
                    <button type="button" data-v="light" aria-pressed="false">Chiaro</button>
                    <button type="button" data-v="dark" aria-pressed="false">Scuro</button>
                </div>
            </div>
            <div class="gruppo">
                <span class="et">Canto gregoriano di sottofondo</span>
                <div class="musica">
                    <button type="button" id="musica" aria-pressed="false">Ascolta</button>
                </div>
            </div>
        </div>
    </header>
</div>

<nav class="ore-wrap" aria-label="Ore del giorno">
    <div class="ore" id="ore"></div>
</nav>

<aside class="indice" id="indice" aria-label="Parti dell'ora"></aside>

<div class="pagina">
    <div id="testa-ora"></div>
    <main id="testo" lang="it" aria-live="polite"></main>
    <footer class="piede">
        Liturgia delle ore benedettina, v0.9.3 · <a href="index.php" id="classica">Versione classica</a>
    </footer>
</div>

<div class="barra" id="barra" hidden>
    <div class="in">
        <span class="cosa" id="barra-cosa">In ascolto</span>
        <button type="button" id="barra-pausa">Pausa</button>
        <button type="button" id="barra-stop">Ferma</button>
    </div>
</div>

<div class="foglio" id="foglio" role="dialog" aria-modal="true" aria-labelledby="cal-tit" hidden>
    <div class="in">
        <div class="cap">
            <span class="anni">
                <button type="button" id="anno-prec" aria-label="Anno precedente"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 5l-7 7 7 7"/></svg></button>
                <h2 id="cal-tit">Calendario</h2>
                <button type="button" id="anno-succ" aria-label="Anno successivo"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 5l7 7-7 7"/></svg></button>
            </span>
            <span style="display:flex;gap:6px">
                <button type="button" class="chiudi" id="cal-oggi">Oggi</button>
                <button type="button" class="chiudi" id="cal-chiudi">Chiudi</button>
            </span>
        </div>
        <div class="legenda" id="legenda"></div>
        <div id="cal-lista"></div>
    </div>
</div>
<div class="toast" id="toast" role="status" hidden></div>

<script src="nuova/app.js?v=<?php echo $v('nuova/app.js'); ?>"></script>
</body>
</html>
