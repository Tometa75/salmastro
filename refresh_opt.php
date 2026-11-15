<?php
//include (__DIR__.'/../baseline.php');
include ('baseline.php');
require_once(SITE_ROOT.'/classi/calendario.php');
require_once(SITE_ROOT.'/core/calendario/calnav.php');

$post=(isset($_POST['param']) && is_array($_POST['param']))?$_POST['param']:array();

//i parametri vengono accettati solo se validi
$today=mainFunc::param_today(isset($post['today'])?$post['today']:'');
if ($today=='') $today=date('Ymd');

$risoluzione=(isset($post['risoluzione']) && in_array($post['risoluzione'],array('Y','M','W','D'),true))?$post['risoluzione']:'D';

$conf=(isset($post['config']) && is_array($post['config']))?$post['config']:array();
$config=array(
    "index"=>(isset($conf['index']) && is_string($conf['index']) && preg_match('/^\w{1,30}$/',$conf['index']))?$conf['index']:'salmastro',
    "range_i"=>'19990101',
    "range_f"=>'21001231'
);
foreach (array('range_i','range_f') as $k) {
    if (isset($conf[$k]) && mainFunc::param_today($conf[$k])!='') $config[$k]=$conf[$k];
}

$cal=new Calendario($today);
$calnav=new calnav($risoluzione,$today,$config,array(),$cal);

$calnav->drawOpt();

//echo json_encode($param);

?>