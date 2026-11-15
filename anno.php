<?php
//NUOVA VESTE - calendario liturgico di un anno in JSON (gli stessi dati di litcal.php)
include ('baseline.php');
require_once (SITE_ROOT.'/classi/calendario.php');

$req=(isset($_POST['param']) && is_array($_POST['param']))?$_POST['param']:$_GET;

$anno=(isset($req['anno']) && is_string($req['anno']) && preg_match('/^\d{4}$/',$req['anno']))?(int)$req['anno']:(int)date('Y');
if ($anno<1999) $anno=1999;
if ($anno>2100) $anno=2100;

$cal=new Calendario($anno.'0101');

//ogni giorno: [data, giorno della settimana, codice tempo, nome tempo, colore, settimana, rosso, eventi, feste]
$giorni=array();
$t=mktime(12,0,0,1,1,$anno);
while ((int)date('Y',$t)==$anno) {
    $tag=date('Ymd',$t);
    $m=$cal->buildMap($tag);
    $ev=array();
    foreach ($m['evento'] as $e) $ev[]=array($e['titolo'],$e['tipo']);
    $fe=array();
    foreach ($m['festa'] as $f) $fe[]=array($f['titolo'],$f['tipo']);
    $giorni[]=array($tag,(int)$m['weekDay'],$m['tempo']['codice'],$m['tempo']['nome'],$m['tempo']['colore'],$m['settimana'],$m['rocho']?1:0,$ev,$fe);
    $t=strtotime('+1 day',$t);
}

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: public, max-age=86400');
echo json_encode(array("anno"=>$anno,"giorni"=>$giorni),JSON_UNESCAPED_UNICODE);
?>
