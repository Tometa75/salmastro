<?php
//NUOVA VESTE - dati del giorno in JSON (testata, celebrazioni, ore)
//Legge le classi del sito senza modificarle: gli stessi calcoli che fanno Salmastro::drawHead e Litio::drawHead
include ('baseline.php');
require_once (SITE_ROOT.'/classi/calendario.php');
require_once (SITE_ROOT.'/classi/litio.php');

//serve solo a leggere le fasce orarie delle ore, che in Litio sono protette
class LitioGiorno extends Litio {
    function fasce() {
        return $this->base;
    }
}

$req=(isset($_POST['param']) && is_array($_POST['param']))?$_POST['param']:$_GET;

$today=mainFunc::param_today(isset($req['today'])?$req['today']:'');
if ($today=='') $today=date('Ymd');
$config=mainFunc::param_config(isset($req['config'])?$req['config']:$req);

$cal=new Calendario($today);
$map=$cal->getMap();
$temp=new Calendario(date('Ymd',strtotime('+1 day',mainFunc::gab_tots($today))));
$vig=$temp->getMap();
unset($temp);

$litio=new LitioGiorno($map,$vig,$config);

$giorni=array('Domenica','Lunedì','Martedì','Mercoledì','Giovedì','Venerdì','Sabato');
$mesi=array('','gennaio','febbraio','marzo','aprile','maggio','giugno','luglio','agosto','settembre','ottobre','novembre','dicembre');
$romani=array(1=>'I',2=>'II',3=>'III',4=>'IV');

$ts=mainFunc::gab_tots($today);
$wd=(int)$map['weekDay'];

$res=array(
    "today"=>$today,
    "oggi"=>date('Ymd'),
    "prec"=>date('Ymd',strtotime('-1 day',$ts)),
    "succ"=>date('Ymd',strtotime('+1 day',$ts)),
    "giorno"=>$giorni[$wd],
    "data"=>$giorni[$wd].' '.((int)substr($today,6,2)).' '.$mesi[(int)substr($today,4,2)].' '.substr($today,0,4),
    "weekDay"=>$wd,
    "tempo"=>array(
        "codice"=>$map['tempo']['codice'],
        "nome"=>(array_key_exists('PEN',$map['evento']))?'Pentecoste':$map['tempo']['nome'],
        "colore"=>$map['tempo']['colore']
    ),
    "rosso"=>$map['rocho']?true:false,
    "anno"=>$map['anno'],
    "settimana"=>$map['settimana'],
    "salterio"=>isset($romani[$map['quarto']])?$romani[$map['quarto']]:'',
    "eventi"=>array(),
    "feste"=>array(),
    "alternative"=>array(),
    "vigilia"=>array(),
    "festa"=>isset($config['festa'])?$config['festa']:'',
    "ore"=>array(),
    "ora"=>''
);

//l'evento del giorno visto da Litio: se si è scelta una celebrazione spostata, è quella
foreach ($litio->map['evento'] as $k=>$e) $res['eventi'][]=array("codice"=>$k,"titolo"=>$e['titolo'],"tipo"=>$e['tipo']);

//le stesse voci della tendina "Scegli una memoria..."
foreach ($map['festa'] as $k=>$f) {
    $res['feste'][]=array("codice"=>$k,"titolo"=>$f['titolo'],"tipo"=>$f['tipo'],"scegli"=>($f['tipo']!='X'));
}
if (isset($map['alternative'])) {
    foreach ($map['alternative'] as $k=>$a) $res['alternative'][]=array("codice"=>$k,"titolo"=>$a['titolo'],"nota"=>$a['nota']);
}

//vigilia: come Salmastro::writeRicorrenza, solo feste e solennità di domani
foreach ($vig['evento'] as $k=>$e) {
    if ($e['tipo']=='F' || $e['tipo']=='S') $res['vigilia'][]=$e['titolo'];
}

//titolo del giorno: l'evento, altrimenti il giorno della settimana
$feriale=$giorni[$wd].($map['settimana']!=''?' della '.$map['settimana'].'ª settimana':'');
$res['titolo']=(count($res['eventi'])>0)?$res['eventi'][0]['titolo']:$feriale;
//la celebrazione che il calendario mette in questo giorno, prima di ogni scelta
$res['titoloCalendario']=$feriale;
foreach ($map['evento'] as $e) { $res['titoloCalendario']=$e['titolo']; break; }

//ore del giorno, già calcolate da Litio (Primi/Secondi Vespri, celebrazioni spostate)
foreach ($litio->map['actual'] as $k=>$a) {
    $res['ore'][]=array("codice"=>$k,"titolo"=>$a['titolo'],"gruppo"=>substr($k,0,3));
}

//ora proposta: stessa regola di Litio::drawHead (ora scelta, altrimenti la fascia oraria di adesso)
$tnow=date('H:i');
$def='';
$oraSel=$litio->config['oraKey'];
if ($oraSel!='' && strpos($oraSel,'|')===false) $oraSel=$litio->config['ora'];
if ($oraSel!='' && !isset($litio->map['actual'][$oraSel])) {
    $def=substr($oraSel,0,3);
    $oraSel='';
}
if ($oraSel=='' && $def=='') {
    foreach ($litio->fasce() as $kb=>$ob) {
        if ($tnow>=$ob['i'] && $tnow<=$ob['f']) {
            $def=substr($kb,0,3);
            break;
        }
    }
}
if ($oraSel!='') $res['ora']=$oraSel;
else {
    foreach ($litio->map['actual'] as $k=>$a) {
        if (strpos($k,'|')===false && $def==substr($k,0,3)) {
            $res['ora']=$k;
            break;
        }
    }
}
if ($res['ora']=='' && count($res['ore'])>0) $res['ora']=$res['ore'][0]['codice'];
//l'ora di adesso (per il puntino), indipendente dalla scelta
$res['adesso']='';
foreach ($litio->fasce() as $kb=>$ob) {
    if ($tnow>=$ob['i'] && $tnow<=$ob['f']) {
        $res['adesso']=substr($kb,0,3);
        break;
    }
}

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');
echo json_encode($res,JSON_UNESCAPED_UNICODE);
?>
