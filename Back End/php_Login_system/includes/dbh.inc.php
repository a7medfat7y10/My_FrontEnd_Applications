
<?php 
//this file is database handler
$servername ="localhost";
$dBUsername ="root";
$dBPassword = "";
$dBName = "loginsystem";
//connect database
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
if (!$conn) {
    die("Connection Failed".mysqli_connect_error());
}