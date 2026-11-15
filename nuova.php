<?php
//la nuova veste ora è index.php: i vecchi collegamenti a nuova.php arrivano lì, con gli stessi parametri
$q=isset($_SERVER['QUERY_STRING'])?$_SERVER['QUERY_STRING']:'';
header('Location: index.php'.($q!==''?'?'.$q:''),true,302);
exit;
?>
