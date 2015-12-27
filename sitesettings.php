<?php

// Get requested language 
$lang = !isset($_REQUEST["lang"]) ? "en" : $_REQUEST["lang"] ;

// Load language specific files
$msg_file =  "i18n/messages-".$lang.".php"; 
require_once($msg_file) ;

$logo = "images/logo38_222_$lang.png" ;

$url = $_SERVER['PHP_SELF']; 
$url_parts = explode('/', $url) ;
$url_basePage = strtolower(end($url_parts));
?>