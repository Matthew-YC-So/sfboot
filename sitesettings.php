<?php

// Get requested language 
$lang = !isset($_REQUEST["lang"]) ? "en" : $_REQUEST["lang"] ;

// Load language specific files
$msg_file =  "i18n/messages-".$lang.".php"; 
require_once($msg_file) ;


?>