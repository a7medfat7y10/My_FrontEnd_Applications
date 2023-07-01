<?php
$dsn = 'mysql:host=localhost;dbname=Spe_task';
$user = 'root';
$pass = '';
$options = array(
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try{
	$db  = new PDO($dsn, $user , $pass , $options);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$Name=$_POST['Name'];
		$faculty=$_POST['faculty'];
		$Depart=$_POST['Depart'];
		$Academic=$_POST['Academic'];
		$Telephone=$_POST['Telephone'];
		$EMail=$_POST['EMail'];
		$Profile=$_POST['Profile'];
		$feedback=$_POST['feedback'];
		
	}

	$q = "INSERT INTO `Spe_recruit_2` (`id`, `Name`, `EMail`, `Telephone`,`faculty` , `Academic` , `Depart` , `Profile` , `feedback`) VALUES (NULL, '$Name', '$EMail', '$Telephone' , '$faculty' , '$Academic' , '$Depart' , '$Profile' , '$feedback')";
	$db->exec($q);
}
catch(PDOException $e) {
	echo 'Failed' . $e->getMessage();
};
?>	


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <!-- IE Meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPE Form</title>
    <!-- Bootstrap library -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- normalize library  for good reset-->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- font-awesome icons library -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Main Css File -->
    <link rel="stylesheet" href="css/Style.css">
    <!-- to Edit in Bootstrap Css File -->
    <link rel="stylesheet" href="css/BootstrapEdits.css">
    
    <!-- to open Html5 Elements in Internet Expolrer -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- <link rel="icon" href="images/Logo.png" /> -->

	<style type="text/css">
	*{
		margin:0px;
		padding: 0px;
	}
	body{
		background-color: #FFF ;
	}
	.container {
		background-color: blue;
		color: #FFF;
		font-weight: bold;
		border-radius: 10px ;
		margin: auto;
		width: 30%;
		padding: 20px;
		margin-top: 200px;
		text-align: center;
		font-size: 30px;
}
	
@media (max-width: 667px) {
	.container{
		width: 80% !important;
		margin-top: 150px;
	}
}
	
	
	</style>
	</head>
<body>
	<div class="container">
		<p style="margin:10px; font-size:22px">Successfully Sent! <br> <br> Thank You!</p>
	</div>
</body>
</html>