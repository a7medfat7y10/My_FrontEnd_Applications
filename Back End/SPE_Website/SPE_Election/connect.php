<?php


    $dns     = 'mysql:host=localhost;dbname=spes9317_db;charset=utf8mb4';
	$userdb  = 'spes9317_it';
	$passdb  = 'SPESuez2020';
	$option  = array( PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' );






    // $dns = 'mysql:host=localhost;dbname=election';
    // $userdb = 'root';
    // $passdb = '';
    // $option = array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8' );
    

    try{
        $con = new PDO($dns, $userdb, $passdb, $option);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e){
        echo 'failed to connect ' .  $e->getMessage();
    }