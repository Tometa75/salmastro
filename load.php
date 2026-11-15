<?php
//include (__DIR__.'/../baseline.php');
include ('baseline.php');
require_once (SITE_ROOT.'/classi/salmastro.php');

$post=(isset($_POST['param']) && is_array($_POST['param']))?$_POST['param']:array();

//i parametri vengono accettati solo se validi (vedi mainFunc::param_today e param_config)
$param=array(
    "today"=>mainFunc::param_today(isset($post['today'])?$post['today']:''),
    "config"=>mainFunc::param_config(isset($post['config'])?$post['config']:array())
);

//echo __DIR__;
//echo json_encode($_REQUEST);

//if (isset($_REQUEST['param'])) $param['today']=$_REQUEST['param']['today'];
//(else die('NO DATA');

$sal=new Salmastro($param);
$sal->build();

$sal->load();

?>