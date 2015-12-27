<?php
$supportedLangs = array('en', 'zh');
$languages = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
$lang_accept_main = "en";
foreach($languages as $lang_accept)
{
    if(in_array(substr($lang_accept, 0, 2), $supportedLangs))
    {
        // Set the page locale to the first supported language found
        $lang_accept_main = substr($lang_accept, 0, 2);
        break;
    }
}

// Get requested language 
$lang = !isset($_REQUEST["lang"]) ? $lang_accept_main : $_REQUEST["lang"] ;

// Load language specific files
$msg_file =  "i18n/messages-".$lang.".php"; 
require_once($msg_file) ;

$logo = "images/logo38_222_$lang.png" ;

$url = $_SERVER['PHP_SELF']; 
$url_parts = explode('/', $url) ;
$url_basePage = strtolower(end($url_parts));
?>