<?php
// Fuso orario: "oggi" e l'ora proposta seguono l'ora italiana anche su un server in UTC
date_default_timezone_set('Europe/Rome');

// Errori PHP: visibili solo in sviluppo (sito aperto da localhost), nascosti in produzione.
// Per vederli anche altrove, mettere $salDebug = true;
$salHost = preg_replace('/:\d+$/', '', isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '');
$salDebug = in_array($salHost, array('localhost', '127.0.0.1', '[::1]'), true);
error_reporting(-1);
ini_set('display_errors', $salDebug ? '1' : '0');
ini_set('log_errors', '1');

//define ('SITE_ROOT',$_SERVER['DOCUMENT_ROOT'].'/github/salmastro');
define ('SITE_ROOT',$_SERVER['DOCUMENT_ROOT'].dirname($_SERVER['PHP_SELF']));

include_once (SITE_ROOT.'/classi/main_func.php');

if (isset($_SERVER['HTTPS']) &&
    ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
    isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
    $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
  $protocol = 'https://';
}
else {
  $protocol = 'http://';
}

define ('SITE_URL',$protocol.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']));


?>