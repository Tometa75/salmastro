<?php
//NUOVA VESTE - colore liturgico della celebrazione (Ordinamento generale del Messale Romano, n. 346)
//Legge la mappa del calendario senza modificarla. Restituisce: verde, viola, rosaceo, bianco, rosso.

class ColoreLiturgico {

    //celebrazioni del calendario che non seguono la regola generale
    static $eventi=array(
        'PAL'=>'rosso',     //Domenica delle Palme
        'SS5'=>'rosso',     //Venerdì Santo
        'PEN'=>'rosso',     //Pentecoste
        '0629a'=>'rosso',   //Santi Pietro e Paolo
        '0914a'=>'rosso',   //Esaltazione della Santa Croce
        '1226a'=>'rosso',   //Santo Stefano
        '1228a'=>'rosso',   //Santi Innocenti
        'AV3'=>'rosaceo',   //III domenica di Avvento (Gaudete)
        'QU4'=>'rosaceo'    //IV domenica di Quaresima (Laetare)
    );

    static function tempo($map) {
        $c=$map['tempo']['codice'];
        if ($c=='O') return 'verde';
        if ($c=='A' || $c=='Q') return 'viola';
        return 'bianco';
    }

    //santi della tendina: dal comune e dal titolo
    static function santo($f) {
        $c=isset($f['comune'])?$f['comune']:'';
        $t=$f['titolo'];
        if ($c=='DEF') return 'viola';
        if (stripos($t,'Conversione di San Paolo')!==false || stripos($t,'Cattedra di San Pietro')!==false) return 'bianco';
        if ($c=='martire' || $c=='martiri' || $c=='apostoli') return 'rosso';
        if (stripos($t,'martir')!==false || stripos($t,'evangelista')!==false) return 'rosso';
        return 'bianco';
    }

    //$map: la mappa del giorno (per la pagina del giorno quella di Litio, con le celebrazioni spostate)
    //$festa: la celebrazione scelta nella tendina, se c'è
    static function giorno($map,$festa='') {

        $tempo=self::tempo($map);

        if ($festa!='' && isset($map['festa'][$festa])) {
            $f=$map['festa'][$festa];
            //in Quaresima e dal 17 dicembre le memorie si celebrano con il colore del giorno
            $md=substr($map['today'],4,4);
            if (($f['tipo']=='M' || $f['tipo']=='R') && ($map['tempo']['codice']=='Q' || ($map['tempo']['codice']=='A' && $md>='1217' && $md<='1224'))) return $tempo;
            return self::santo($f);
        }

        foreach ($map['evento'] as $k=>$e) {
            if (isset(self::$eventi[$k])) return self::$eventi[$k];
            //solennità e feste del Signore, della Madonna e dei santi: bianco
            if ($e['tipo']=='S' || preg_match('/^\d{4}[a-z]$/',$k)) return 'bianco';
            break;
        }

        if ($map['rocho']) return 'rosso';
        return $tempo;
    }
}
?>
