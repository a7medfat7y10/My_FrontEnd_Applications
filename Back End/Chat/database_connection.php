<?php
    //to connect database using pdo
    $dsn = 'mysql:host=localhost;dbname=chat*;charset=utf8mb4'; //utfmbf_bin to accept emojis
    $user = 'root';
    $pass = '';

    try {
        $connect = new PDO ($dsn, $user, $pass);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    catch(PDOException $e) {
        echo 'failed to connect' . $e->getMessage();
    }


include 'includes/functions/functions.php';