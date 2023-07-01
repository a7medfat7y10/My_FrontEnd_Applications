<?php
    //file must be included on all files has connect of database and 
    //has language file and header and navbar
    error_reporting(0);
    include 'connect.php';

    //Routes

    $tpl = 'includes/templates/';
    $css = 'layout/css/';
    $js = 'layout/js/';
    $lang = 'includes/languages/';
    $bookimg = 'layout/images/books-images/';
    $img   = 'layout/images/';

    //include the important files
    include 'includes/functions/functions.php';
    include $lang . 'english.php';
    include $tpl . 'header.php'; 
    //include navbar on all pages except the page with $noNavbar variable 
    if (!isset($noNavbar)) {
        include $tpl . 'navbar.php'; 
    }
