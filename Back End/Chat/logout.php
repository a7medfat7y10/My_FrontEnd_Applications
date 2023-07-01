<?php

//logout.php
include('database_connection.php');

session_start();

//to change back offline when logout
$id  = $_SESSION['user_id'];
$query = "DELETE FROM login_details WHERE user_id = '$id' "; 
$statement = $connect->prepare($query);
$statement->execute();

session_destroy();

header('location:login.php');

?>