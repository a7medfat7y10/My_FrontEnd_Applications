<?php
$dsn = 'mysql:host=localhost;dbname=aapgsue1_aapgsue1';
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
		$committee1=$_POST['committee1'];
		$committee2=$_POST['committee2'];
		$field9=$_POST['field9'];
		$field10=$_POST['field10'];
		$chooone=$_POST['chooone'];
		$chootwo=$_POST['chootwo'];
		$choothree=$_POST['choothree'];
		$feedback=$_POST['feedback'];
		
	}

	$q = "INSERT INTO `applicants` (`id`, `Name`, `EMail`, `Telephone`,`faculty` , `Academic` , `Depart` , `Profile` , `committee1`, `committee2` , `field9` , `field10` , `chooone` , `chootwo` , `choothree` , `feedback`) VALUES (NULL, '$Name', '$EMail', '$Telephone' , '$faculty' , '$Academic' , '$Depart' , '$Profile' , '$committee1' , '$committee2' , '$field9' , '$field10' , '$chooone' , '$chootwo' , '$choothree' , '$feedback')";
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
    <title>AAPG-Recruitment 2020/2021</title>
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

    <link rel="icon" href="images/Logo.png" />

	<style type="text/css">
	*{
		margin:0px;
		padding: 0px;
	}
	body{
		background-color: #FFF ;
	}
	.container {
		background-color: #BA1F1D;
		color: #FFF;
		font-weight: bold;
		border-radius: 10px ;
		margin: auto;
		width: 35%;
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
		<div>
			<img src="images/Logo.png" alt="" style="width: 100px">
		</div>
		<p style="margin-bottom:10px">You Have Submitted Successfully! </p>
		<p style="margin:10px; font-size:22px">Thank You!</p>
	</div>
</body>
</html>