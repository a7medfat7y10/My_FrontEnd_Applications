<?php

    $dsn = 'mysql:host=localhost:3306;dbname=eegssusc_eegssusc';
    $user = 'eegssusc_eegs';
    $pass = ')otptI5]8-]L';
    $option = array(
        PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'
    );

    try{
        $con = new PDO($dsn, $user, $pass, $option);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e){
        echo 'failed to connect ' .  $e->getMessage();
    }