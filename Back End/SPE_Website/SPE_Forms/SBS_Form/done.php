<?php
		include "connect.php" ;
		$ok = "no";
		if ($_SERVER["REQUEST_METHOD"] == 'POST') {
			$name       = isset($_POST['name']) ? $_POST['name'] : "" ;
			$university = isset($_POST['university']) ? $_POST['university'] : "" ;
			$faculty    = isset($_POST['faculty']) ? $_POST['faculty'] : "" ;
			$department = isset($_POST['department']) ? $_POST['department'] : "" ;
			$level      = isset($_POST['level']) ? $_POST['level'] : "" ;
			$mobile     = isset($_POST['mobile']) ? $_POST['mobile'] : "" ;
			$gmail      = isset($_POST['gmail']) ? $_POST['gmail'] : "" ;
			$uniemail   = isset($_POST['uniemail']) ? $_POST['uniemail'] : "" ;
			$face       = isset($_POST['face']) ? $_POST['face'] : "" ;
			$q0 		    = isset($_POST['q0']) ? $_POST['q0'] : "" ;
			$q1 		    = isset($_POST['q1']) ? $_POST['q1'] : "" ;
			$q2 		    = isset($_POST['q2']) ? $_POST['q2'] : "" ;
			$q3 		    = isset($_POST['q3']) ? $_POST['q3'] : "" ;
			$q4 		    = isset($_POST['q4']) ? $_POST['q4'] : "" ;
			$q5 		    = isset($_POST['q5']) ? $_POST['q5'] : "" ;
			$q6 		    = isset($_POST['q6']) ? $_POST['q6'] : "" ;
			$q7 		    = isset($_POST['q7']) ? $_POST['q7'] : "" ;
			$q8 		    = isset($_POST['q8']) ? $_POST['q8'] : "" ;
			
			$stmt = $con->prepare('INSERT INTO  applicants(name,university,faculty,department,level,mobile,gmail,uniemail,face, q0 ,q1, q2, q3, q4, q5, q6, q7, q8, status , date ,emailed )
			VALUES ( :zname, :zuniversity, :zfaculty, :zdepartment, :zlevel, :zmobile, :zgmail, :zuniemail, :zface, :zq0,:zq1, :zq2, :zq3, :zq4, :zq5, :zq6, :zq7, :zq8, :zstatus, :zdate, :zemailed)');
			$stmt->execute(array( "zname"=>$name, "zuniversity"=> $university, "zfaculty"   =>$faculty, "zdepartment"=>$department, "zlevel" =>$level, "zmobile" =>$mobile, "zgmail" =>$gmail, "zuniemail" =>$uniemail, "zface" =>$face, "zq0"=>$q0 ,"zq1" => $q1, "zq2"=>$q2, "zq3"=>$q3, "zq4"=>$q4, "zq5"=>$q5, "zq6"=>$q6, "zq7"=>$q7, "zq8"=>$q8, "zstatus"=>"", "zdate"=> Date('d m Y'), "zemailed"=>""));
			$count = $stmt->rowCount();
	
			if ($count > 0) {
				//echo "Thank You, We Recieved Your Registration";
				//header("refresh:2;url=formx.php?done=ok");
				//echo "<div class='alert alert-success'>Thank You, We Recieved Your Registration</div>";
				//header("url=index.php?done=ok");
				//exit();
				$ok = "ok";
				header("refresh:10;url=index.php");
			}
		}
?>       
<!DOCTYPE html>
<html>
	<head>
		<!--   meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
		<title>SPE Suez | Recruitment Form </title>
		<link rel="shortcut icon"  href="img/logo1.png">
		<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body>
		<div class="lay">
			<div class="lay2">
				<div class="container"><br><br><br>
					<div class="row center-all" style="margin-bottom: 0;">
						<div class="col m12 s12 center">
							<div class="center white-text">
								<img src="img/logo2.png" width="35%" alt="">
								<img src="img/recruit.png" width="80%" alt="">
								<h4>Thank You, We Recieved Your Registration</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="js/jquery-3.2.1.js"></script>
		<script src="js/materialize.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
