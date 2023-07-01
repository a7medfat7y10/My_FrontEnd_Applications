<?php

//ajax recieving the is_type variable by post method and use it to show typing..

include('database_connection.php');

session_start();

$query = "
UPDATE login_details 
SET is_type = '".$_POST["is_type"]."' 
WHERE login_details_id = '".$_SESSION["login_details_id"]."'
";

$statement = $connect->prepare($query);

$statement->execute();
