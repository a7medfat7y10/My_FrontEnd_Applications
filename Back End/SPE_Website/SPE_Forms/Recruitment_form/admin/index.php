<?php
include "connect.php";
session_start();
if (isset($_SESSION['user'])) {
		header("location: welcome.php?do=manage");
}
?>
<!DOCTYPE html>
<html>
	<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
		<title>SPE Form</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body style="background: #f1f1f1">
		<div class="container log-page text-center"><br>
			<div class="row justify-content-center">
				<div class="col-md-7">
					<h2 class="text-center">SPE Form</h2><br>
					<br><br>
				</div>
				<div class="col-md-7">
					<form class="col-md-6 m-auto" action="" method="POST">
						<h3 class="text-muted text-center">Login Form </h3>
						<input class="form-control" type="text" name="user" placeholder="username">
						<input class="form-control" type="password" name="pass" placeholder="password">
						<button type="submit" class="btn btn-success" onClick="login()">submit</button>
					</form>
					<p></p>
				</div>
			</div>
		</div>


		<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script>
			function login() {

				var user  = $('input[name=user]').val();
				var pass  = $('input[name=pass]').val();

				$.post(
					"all.php",
					{
						req:"login",
						u: user,
						p: pass
					}).done(function(data){
						$('p').html(data);
						$('input').val("");
					})
			}
			
			/*************************************** */	
			$('form').submit(function(e){
				e.preventDefault();
			})
   		</script>
	</body>
</html>
