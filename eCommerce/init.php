<?php
    // error reporting off
    ini_set('display_errors', 'off');
    error_reporting('0');
    //Error reporting turning on 
    // ini_set('display_errors', 'On');
    // error_reporting('E_All');

    //file must be included on all files has connect of database and 
    //has language file and header and navbar
    include 'connect.php';

    //Routes
    $sessionuser = '';
    if(isset($_SESSION['user'])) {
        $sessionuser = $_SESSION['user'];
    }

    $tpl = 'includes/templates/';
    $css = 'layout/css/';
    $js = 'layout/js/';
    $lang = 'includes/languages/';

    //include the important files
    include 'includes/functions/functions.php';
    include $lang . 'english.php';
    include $tpl . 'header.php'; 
  
