<?php

//ajax

include('database_connection.php');

session_start();

//updating last_activity to now in database
$query = "
    UPDATE login_details 
    SET last_activity = now() 
    WHERE login_details_id = '".$_SESSION["login_details_id"]."'
";

$statement = $connect->prepare($query);

$statement->execute();

