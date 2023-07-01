<?php

include "connect.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$req    	= isset($_POST['req']) ? $_POST['req'] :"error";
$fetch    = isset($_POST['fe']) ? $_POST['fe'] :"";
$fetch2    = isset($_POST['fe2']) ? $_POST['fe2'] :"";
$id 		  = isset($_POST['id']) ? $_POST['id'] : 0 ;

if( $fetch !== "") { $fetch = "WHERE q0 = " . $fetch ; if( $fetch2 !== "" ){ $fetch2 = " AND status = " . $fetch2; } }else{ if( $fetch2 !== "" ){  $fetch2 = " WHERE status = " . $fetch2;  } }

$name       = isset($_POST['name']) ? $_POST['name'] : "" ;
$university = isset($_POST['university']) ? $_POST['university'] : "" ;
$faculty    = isset($_POST['faculty']) ? $_POST['faculty'] : "" ;
$department = isset($_POST['department']) ? $_POST['department'] : "" ;
$level      = isset($_POST['level']) ? $_POST['level'] : "" ;
$mobile     = isset($_POST['mobile']) ? $_POST['mobile'] : "" ;
$gmail      = isset($_POST['gmail']) ? $_POST['gmail'] : "" ;
$uniemail   = isset($_POST['uniemail']) ? $_POST['uniemail'] : "" ;
$face       = isset($_POST['face']) ? $_POST['face'] : "" ;
$q0 		  = isset($_POST['q0']) ? $_POST['q0'] : "" ;
$q1 		  = isset($_POST['q1']) ? $_POST['q1'] : "" ;
$q2 		  = isset($_POST['q2']) ? $_POST['q2'] : "" ;
$q3 		  = isset($_POST['q3']) ? $_POST['q3'] : "" ;
$q4 		  = isset($_POST['q4']) ? $_POST['q4'] : "" ;
$q5 		  = isset($_POST['q5']) ? $_POST['q5'] : "" ;
$q6 		  = isset($_POST['q6']) ? $_POST['q6'] : "" ;
$q7 		  = isset($_POST['q7']) ? $_POST['q7'] : "" ;
$q8 		  = isset($_POST['q8']) ? $_POST['q8'] : "" ;
$comment 	= isset($_POST['comment']) ? $_POST['comment'] : "" ;



$mailname 		= isset($_POST['mailname']) ? $_POST['mailname'] : "" ;
$mailemail 		= isset($_POST['mailemail']) ? $_POST['mailemail'] : "" ;
$mailsubject 	= isset($_POST['mailsubject']) ? $_POST['mailsubject'] : "" ;
$typemassage 	= isset($_POST['typemassage']) ? $_POST['typemassage'] : "" ;
$mailcontent 	= isset($_POST['mailcontent']) ? $_POST['mailcontent'] : "" ;

session_start();

/**************************************************** */
/******************** login ************************* */
/**************************************************** */

if ($req == "login") {
	if (!isset($_SESSION['user'])) {
		if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
			$user = $_POST['u'];
			$pass = $_POST['p'];
			if ($user == 'hrmanager' && $pass == 'hrmanager2020') {
				$_SESSION["user"] = "spe";
				?>
				<script>window.location.href = 'welcome.php';</script>
				<?php
				// header("url:welcome.php");
			}else {
				echo "<div class='alert alert-danger'>Password is invalide </div>";
			}
		}
	}
}
/**************************************************** */
/******************** fetch ************************* */
/**************************************************** */
if ($req == "fetch") {
	$stmt = $con->prepare("SELECT * FROM applicants  $fetch $fetch2 ");
	$stmt->execute();
	$rows = $stmt->fetchAll();
	?>
	<table class="main-table text-center table table-bordered">
		<tr>
			<th>#Id</th>
			<th>Name</th>
			<th>University</th>
			<th>Faculty</th>
			<th>Committie</th>
			<th>Committie2</th>
			<th>Actions</th>
			<th>status</th>
			<th>Respond</th>
		</tr>	<?php
		foreach ($rows as $row ){  ?>
			<tr>
				<td><?php echo $row['id'] ;?></td>
				<td><?php echo $row['name'] ;?></td>
				<td><?php echo $row['university'] ;?></td>
				<td><?php echo $row['faculty'] ;?></td>
				<td><?php echo $row['q0'] ;?></td>
				<td><?php echo $row['q1'] ;?></td>
				<td>
					<a class="btn btn-success" href='welcome.php?do=edit&id=<?php echo $row['id'] ;?>'><i class="fa fa-user-edit"></i></a>
					<button  onclick="server('delete',<?php echo $row['id'] ;?>)" class="btn btn-danger"><i class="fa fa-user-times"></i></button>
					<a onclick="server('view',<?php echo $row['id'] ;?>)"  href='welcome.php?do=view&id=<?php echo $row['id'] ;?>' class="btn btn-info"><i class="fa fa-user"></i></a>
				</td>
				<td><?php echo $row['status'] ;?></td>
				<td><?php echo $row['emailed'] ;?></td>
			</tr><?php
		}	?>
	</table>  <?php 
	/*  json file */ 
	$json_data = array();
      foreach ($rows as $row) {
        $json_arrey['Id'] = $row['id'];
        $json_arrey['Name'] = $row['name'];
        $json_arrey['University'] = $row['university'];
        $json_arrey['Faculty'] = $row['faculty'];
        $json_arrey['department'] = $row['department'];
        $json_arrey['level'] = $row['level'];
        $json_arrey['mobile'] = $row['mobile'];
        $json_arrey['gmail'] = $row['gmail'];
        $json_arrey['uniemail'] = $row['uniemail'];
        $json_arrey['face'] = $row['face'];
        $json_arrey['committiee1'] = $row['q0'];
        $json_arrey['committiee2'] = $row['q1'];
        $json_arrey['why_committiee'] = $row['q2'];
        $json_arrey['committee_responsibilities'] = $row['q3'];
        $json_arrey['What_skills'] = $row['q4'];
        $json_arrey['volunteering_experience'] = $row['q5'];
        $json_arrey['Why_applying_SPE'] = $row['q6'];
        $json_arrey['benefit_joining_SPE'] = $row['q7'];
        $json_arrey['Open_Space'] = $row['q8'];
        $json_arrey['Status'] = $row['status'];
        $json_arrey['Time'] = $row['date'];
        $json_arrey['Respond'] = $row['emailed'];
        $json_arrey['comment'] = $row['comment'];
        array_push($json_data,$json_arrey);
      }
      file_put_contents("apps.json", json_encode($json_data));
	
}
/**************************************************** */
/******************** add *************************** */
/**************************************************** */
if ($req == "add") {

	$stmt = $con->prepare('INSERT INTO  applicants(name,university,faculty,department,level,mobile,gmail,uniemail,face, q0 ,q1, q2, q3, q4, q5, q6, q7, q8, status , date ,emailed )
	VALUES ( :zname, :zuniversity, :zfaculty, :zdepartment, :zlevel, :zmobile, :zgmail, :zuniemail, :zface, :zq0,:zq1, :zq2, :zq3, :zq4, :zq5, :zq6, :zq7, :zq8, :zstatus, :zdate, :zemailed)');
	$stmt->execute(array( "zname"=>$name, "zuniversity"=> $university, "zfaculty"   =>$faculty, "zdepartment"=>$department, "zlevel" =>$level, "zmobile" =>$mobile, "zgmail" =>$gmail, "zuniemail" =>$uniemail, "zface" =>$face, "zq0" => $q0 ,"zq1" => $q1, "zq2"=>$q2, "zq3"=>$q3, "zq4"=>$q4, "zq5"=>$q5, "zq6"=>$q6, "zq7"=>$q7, "zq8"=>$q8, "zstatus"=>"", "zdate"=> Date('d m Y'), "zemailed"=>""));
	$count = $stmt->rowCount();

	
	if ($count > 0) {
		echo "<div class='alert alert-success'>Applicant Added </div>";
		exit();
	}
}

/**************************************************** */
/********************** delete ********************** */
/**************************************************** */
if ($req == "delete") {
	$stmt = $con->prepare('DELETE FROM applicants WHERE id = ?');
	$stmt->execute(array($id));
	$count = $stmt->rowCount();

	if ($count > 0) {
		echo "<div class='alert alert-danger'>Applicant deleted </div>";
		exit();
	}
}
/**************************************************** */
/********************** edit ********************** */
/**************************************************** */
if ($req == "edit") {

	$stmt = $con->prepare('UPDATE applicants SET name=?,university=?,faculty=?,department=?,level=?,mobile=?,gmail=?,	uniemail=?,face=?, q0 =?,q1=?,q2=?,q3=?,q4=?,q5=?,q6=?,q7=?,q8=?,comment=?  WHERE id = ?');
	$stmt->execute(array(  $name,$university, $faculty, $department, $level, $mobile, $gmail,  $uniemail, $face, $q0, $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8,$comment,$id));
	$count = $stmt->rowCount();

	if ($count > 0) {
		echo "<div class='alert alert-success'>Applicant Updated</div>";
		exit();
	}
}


/**************************************************** */
/********************** accept ********************** */
/**************************************************** */
if ($req == "accept") {

	$stmt = $con->prepare('UPDATE applicants SET status=? WHERE id = ?');
	$stmt->execute(array( "Accepted" , $id));
	$count = $stmt->rowCount();

	if ($count > 0) {
		echo "<div class='alert alert-success'>Applicant Accepted</div>";
		//exit();
	}
}

/**************************************************** */
/********************** reject ********************** */
/**************************************************** */
if ($req == "reject") {

	$stmt = $con->prepare('UPDATE applicants SET status=? WHERE id = ?');
	$stmt->execute(array( "Rejected" , $id));
	$count = $stmt->rowCount();

	if ($count > 0) {
		echo "<div class='alert alert-danger'>Applicant Rejected</div>";
		//exit();
	}
}
/**************************************************** */
/***************** Email check ********************** */
/**************************************************** */
if ($req == "mailcheck") {

	$stmt = $con->prepare('UPDATE applicants SET emailed=? WHERE id = ?');
	$stmt->execute(array( "Email sent" , $id));
	$count = $stmt->rowCount();

	if ($count > 0) {
		echo "<div class='alert alert-success'>Email Checked Only</div>";
		//exit();
	}
}
/**************************************************** */
/***************** Email  ********************** */
/**************************************************** */
if ($req == "mail") {

	require 'src/PHPMailer.php';
	require 'src/Exception.php';
	require 'src/SMTP.php';

	$accept_massage = "Dear Applicant,<br><br> &nbsp;&nbsp;&nbsp; We hope you are doing well. <strong>Congratulations</strong>, you have passed the first step of the recruitment process. The next step is the interview, you will be informed by the date of the interview very soon.<br><br> &nbsp;&nbsp;&nbsp;Take into account to prepare well for the interview.  This video may help you to know how to pass the interview successfully: https://youtu.be/YwWMhi9uPu0 <br><br> &nbsp;&nbsp;&nbsp;You also can find out more information about SPE SU SC, our products and achievements by visiting our website: https://www.spesusc.com/ <br> Thanks in advance and Good Luck!<br><br> <strong>Kind Regards,<br> SPE SU SC'21 HRM</strong>";
		
	$reject_massage = "Dear Applicant,<br><br> &nbsp;&nbsp;&nbsp; We hope you are doing well. Thank you for your interest in joining SPE Suez University Student Chapter. <b> We appreciate the time you have invested in filling the Registration Form.<br><br> &nbsp;&nbsp;&nbsp; Unfortunately,</b> we regret to inform you that you <span style='color:red'> were not selected to pass to the next stage of the recruitment process.</span> We would like to note that the competition for joining SPE SU SC  is always strong and that we often have to make difficult choices between many high caliber candidates.<br><br> &nbsp;&nbsp;&nbsp; We want to tell you that it is not the end, SPE SU SC is full of challenges and opportunities that suit you.  You can apply in the upcoming recruitment if you think you can  recover your points of weaknesses and capitalize on your strengths. Thank you and best luck in your future endeavors.<br><br> Best Regards,<br> <strong>SPE SU SC'21 HRM</strong>";

	if ($typemassage == "accept") {
		$mailcontent = $accept_massage ;
	}elseif($typemassage == "reject"){
		$mailcontent = 	$reject_massage ;
	}
	 
	$ourmail = "hrmcommittee.spesusc.2021@gmail.com";

	$mail = new PHPMailer(true);
	try {

			$mail->isSMTP();                                    // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';                   // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                             // Enable SMTP authentication
			$mail->Username = 'hrmcommittee.spesusc.2021@gmail.com';            // SMTP username
			$mail->Password = '-----';                      // SMTP password
			$mail->SMTPSecure = 'tls';                          // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;  

			//Recipients

			$mail->setFrom($ourmail , $mailname );
			$mail->addAddress($mailemail);                      // Name is optional
			$mail->isHTML(true);    
			$mail->addReplyTo($ourmail , $mailname );

			$mail->Subject = $mailsubject;
			$mail->Body    = $mailcontent;

			$mail->send();
			echo "<div class='alert alert-success'>Email Sent</div>";

			$stmt = $con->prepare('UPDATE applicants SET emailed=? WHERE id = ?');
			$stmt->execute(array( "Email sent" , $id));
			$count = $stmt->rowCount();
		
			if ($count > 0) {
				echo "<div class='alert alert-success'>Email Sent and Checked</div>";
				//exit();
			}

	} catch (Exception $e) {
			echo "<div class='alert alert-success'>Email could not be sent{$mail->ErrorInfo}</div>";
	}

}


?>

