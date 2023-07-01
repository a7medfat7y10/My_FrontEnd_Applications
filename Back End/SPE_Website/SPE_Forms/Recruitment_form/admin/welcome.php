<?php
	include "connect.php" ;
	session_start();
	$do = isset($_GET['do']) ? $_GET['do'] :"manage";
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Recruitment Panel</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/all.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body onload="server('fetch')">
		<div class="container">
			<div id="delete"><div id="json"></div></div>
			<div id="view">
				<div id="accept"></div>
				<div id="reject"></div>
				<div id="mail"></div>
				<div id="mailcheck"></div>
			</div><br><?php
      if (isset($_SESSION['user'])) { 
				/*========================== Manage Page ===========================*/
				if ($do == "manage" ) { ?>
					<div class="row">
					    <div class="col-12">
							<h2 class="text-center">Applicants</h2><br>
							<div class="row">
								<div class="col-md-3">
									<a class="btn btn-outline-primary"   href="welcome.php?do=add">Add New</a>
									<a class="btn btn-outline-secondary" href="welcome.php?do=logout">Logout</a>
								</div>
								<div class="col-md-8">
									<form>
										<div class="row">
											<div class="col-4">
												<select class="custom-select" width="30px" name="fetch" id="inlineFormCustomSelectPref">
													<option value="" selected >All</option>
													<option value="'Web'">Web development</option>
													<option value="'Android'">Android App</option>
 									  				<option value="'Social'">Social media</option>
													<option value="'media'">Multimedia</option>
													<option value="'Offline'">Offline marketing</option>
 		  											<option value="'Academy'">Academy</option>
													<option value="'Energy'">Energy4me</option>
													<option value="'Logic'">Logistics</option>
													<option value="'Extra'">Extracurricular</option>
 												  	<option value="'mEditing'">Magazine Editing</option>
													<option value="'mDesign'">Magazine Design</option>
 												  	<option value="'HRM'">Human Resources Management (HRM)</option>
													<option value="'HRD'">Human Resources Development (HRD)</option>
													<option value="'BD'">Business Development (BD)</option>
													<option value="'IR'">international Relations (IR)</option>
													<option value="'OC'">organizing committee (OC)</option>
												</select>
											</div>
											<div class="col-3">
												<select class="custom-select" width="30px" name="fetch2" id="inlineFormCustomSelectPref">
													<option value="" selected >All</option>
													<option value="'accepted'">Accepted</option>
													<option value="'rejected'">Rejected</option>
												</select>
											</div>
											<div class="col-5">
												<button class="btn btn-outline-info" onclick="server('fetch')">Fetch</button>
												<a class="btn btn-outline-secondary"  href="apps.json" download>Json File</a>
												<a class="btn btn-outline-success"  href="Applicants.xls" download>Excel Sheet</a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div id="fetch" class="col-12"></div>
					<?php
					/*========================== Edit Page ===========================*/
        }elseif ($do == "edit") {
					$id = isset($_GET['id']) ? $_GET['id'] : 0 ;
					$stmt = $con->prepare('SELECT * FROM recruit_applicants WHERE id = ? LIMIT 1');
					$stmt->execute(array($id));
					$applicant = $stmt->fetch();?>
					<div id="edit"></div>
					<h2 class="text-center">Edit Applicant</h2><br>
					<a class="btn btn-danger" href="welcome.php">Back</a><br><br>
				
					<form  action="" method="POST">
						<input class="form-control" type="text" name="name"       value="<?php echo $applicant['name'] ;?>" 	    placeholder="Name" >
						<input class="form-control" type="text" name="university" value="<?php echo $applicant['university'] ;?>" placeholder="University" >
						<input class="form-control" type="text" name="faculty"    value="<?php echo $applicant['faculty'] ;?>" 	  placeholder="Faculty" >
						<input class="form-control" type="text" name="department" value="<?php echo $applicant['department'] ;?>" placeholder="department" >
						<input class="form-control" type="text" name="level"			value="<?php echo $applicant['level'] ;?>" 		 	placeholder="level" >
						<input class="form-control" type="text" name="mobile"		  value="<?php echo $applicant['mobile'] ;?>" 	 	placeholder="mobile" >
						<input class="form-control" type="text" name="gmail"		  value="<?php echo $applicant['gmail'] ;?>" 	    placeholder="gmail" >
						<input class="form-control" type="text" name="uniemail"	  value="<?php echo $applicant['uniemail'] ;?>"   placeholder="uniemail" >
						<input class="form-control" type="text" name="face"			  value="<?php echo $applicant['face'] ;?>" 		  placeholder="face" >
						
						<select class="custom-select my-1 mr-sm-2" name="q0" id="inlineFormCustomSelectPref">
							<option <?php if ($applicant['q0'] == ''){ echo "selected";} ?> value="1" >Which committee do you want to join?</option>
							<option  <?php if ($applicant['q0'] == 'Web'){ echo "selected";} ?> value="Web">Web development</option>
							<option  <?php if ($applicant['q0'] == 'Android'){ echo "selected";} ?> value="Android">Android App</option>
							<option  <?php if ($applicant['q0'] == 'Social'){ echo "selected";} ?> value="Social">Social media</option>
							<option  <?php if ($applicant['q0'] == 'media'){ echo "selected";} ?> value="media">Multimedia</option>
							<option  <?php if ($applicant['q0'] == 'Offline'){ echo "selected";} ?> value="Offline">Offline marketing</option>
							<option  <?php if ($applicant['q0'] == 'Academy'){ echo "selected";} ?> value="Academy">Academy</option>
							<option  <?php if ($applicant['q0'] == 'Energy'){ echo "selected";} ?> value="Energy">Energy4me</option>
							<option  <?php if ($applicant['q0'] == 'Logic'){ echo "selected";} ?> value="Logic">Logistics</option>
							<option  <?php if ($applicant['q0'] == 'Extra'){ echo "selected";} ?> value="Extra">Extracurricular</option>
							<option  <?php if ($applicant['q0'] == 'mEditing'){ echo "selected";} ?> value="mEditing">Magazine Editing</option>
							<option  <?php if ($applicant['q0'] == 'mDesign'){ echo "selected";} ?> value="mDesign">Magazine Design</option>
							<option  <?php if ($applicant['q0'] == 'HRM'){ echo "selected";} ?> value="HRM">Human Resources Management (HRM)</option>
							<option  <?php if ($applicant['q0'] == 'HRD'){ echo "selected";} ?> value="HRD">Human Resources Development (HRD)</option>
							<option  <?php if ($applicant['q0'] == 'BD'){ echo "selected";} ?> value="BD">Business Development (BD)</option>
							<option  <?php if ($applicant['q0'] == 'IR'){ echo "selected";} ?> value="IR">international Relations (IR)</option>
							<option  <?php if ($applicant['q0'] == 'OC'){ echo "selected";} ?> value="OC">organizing committee (OC)</option>
						</select>
						<select class="custom-select my-1 mr-sm-2" name="q1" id="inlineFormCustomSelectPref">
							<option <?php if ($applicant['q1'] == ''){ echo "selected";} ?> value="1" >Which committee do you want to join?</option>
							<option <?php if ($applicant['q1'] == 'Web'){ echo "selected";} ?> value="Web">Web development</option>
							<option <?php if ($applicant['q1'] == 'Android'){ echo "selected";} ?> value="Android">Android App</option>
							<option <?php if ($applicant['q1'] == 'Social'){ echo "selected";} ?> value="Social">Social media</option>
							<option <?php if ($applicant['q1'] == 'media'){ echo "selected";} ?> value="media">Multimedia</option>
							<option <?php if ($applicant['q1'] == 'Offline'){ echo "selected";} ?> value="Offline">Offline marketing</option>
							<option <?php if ($applicant['q1'] == 'Academy'){ echo "selected";} ?> value="Academy">Academy</option>
							<option <?php if ($applicant['q1'] == 'Energy'){ echo "selected";} ?> value="Energy">Energy4me</option>
							<option <?php if ($applicant['q1'] == 'Logic'){ echo "selected";} ?> value="Logic">Logistics</option>
							<option <?php if ($applicant['q1'] == 'Extra'){ echo "selected";} ?> value="Extra">Extracurricular</option>
							<option <?php if ($applicant['q1'] == 'mEditing'){ echo "selected";} ?> value="mEditing">Magazine Editing</option>
							<option <?php if ($applicant['q1'] == 'mDesign'){ echo "selected";} ?> value="mDesign">Magazine Design</option>
							<option <?php if ($applicant['q1'] == 'HRM'){ echo "selected";} ?> value="HRM">Human Resources Management (HRM)</option>
							<option <?php if ($applicant['q1'] == 'HRD'){ echo "selected";} ?> value="HRD">Human Resources Development (HRD)</option>
							<option <?php if ($applicant['q1'] == 'BD'){ echo "selected";} ?> value="BD">Business Development (BD)</option>
							<option <?php if ($applicant['q1'] == 'IR'){ echo "selected";} ?> value="IR">international Relations (IR)</option>
							<option <?php if ($applicant['q1'] == 'OC'){ echo "selected";} ?> value="OC">organizing committee (OC)</option>
						</select>

		
						<textarea class="form-control" type="text" name="q2" value="" placeholder="Why did you choose this committee?" ><?php echo $applicant['q2']; ?></textarea>
						<textarea class="form-control" type="text" name="q3" value="" placeholder="What do you know about the responsibilities of the committee you are applying for?"><?php echo $applicant['q3']; ?></textarea>
						<textarea class="form-control" type="text" name="q4" value="" placeholder="Who invited you to join SPE Suez?(Please write his/her name) ?"><?php echo $applicant['q4']; ?></textarea>
						<textarea class="form-control" type="text" name="q5" value="" placeholder="Do you have previous experience to apply for volunteering work? If you have,please explain it in detail"><?php echo $applicant['q5']; ?></textarea>
						<textarea class="form-control" type="text" name="q6" value="" placeholder="Why are you applying for SPE Suez Student Chapter ?" ><?php echo $applicant['q6']; ?></textarea>
						<textarea class="form-control" type="text" name="q7" value="" placeholder="Do you think that you will benefit from joining SPE and how ?"><?php echo $applicant['q7']; ?></textarea>
						<textarea class="form-control" type="text" name="q8" value="" placeholder="Open Space"><?php echo $applicant['q8']; ?></textarea>
						<textarea class="form-control" type="text" name="comment" value="" placeholder="Comment"><?php echo $applicant['comment']; ?></textarea>
						
						<button  onclick="server('edit', <?php echo $applicant['id'] ;?>)" class="btn btn-success">Edit</button>
					</form>
					<?php
					/*========================== Add Page ===========================*/
				}elseif ($do == "add") {?>
					<div id="add"></div>
					<h2 class="text-center">Add New Applicant</h2><br>
					<a class="btn btn-primary" href="welcome.php">Back</a><br><br>
					<div id="add"></div>
					<form id='addform' action="" method="POST">
						<input class="form-control"   type="text"    name="name"       placeholder="Name">
						<input class="form-control"   type="text"    name="university" placeholder="University" >
						<input class="form-control"   type="text"    name="faculty"    placeholder="Faculty">
						<input class="form-control"   type="text"    name="department" placeholder="department">
						<input class="form-control"   type="text"    name="level"			 placeholder="level">
						<input class="form-control"   type="text"    name="mobile"		 placeholder="mobile">
						<input class="form-control"   type="text"    name="gmail"			 placeholder="gmail" >
						<input class="form-control"   type="text"    name="uniemail"	 placeholder="uniemail">
						<input class="form-control"   type="text"    name="face"			 placeholder="face">

						<select class="custom-select my-1 mr-sm-2" name="q0" id="inlineFormCustomSelectPref">
							<option value="" >Which committee do you want to join?(First Desire)</option>
							<option value="Web">Web development</option>
							<option value="Android">Android App</option>
							<option value="Social">Social media</option>
							<option value="media">Multimedia</option>
							<option value="Offline">Offline marketing</option>
							<option value="Academy">Academy</option>
							<option value="Energy">Energy4me</option>
							<option value="Logic">Logistics</option>
							<option value="Extra">Extracurricular</option>
							<option value="mEditing">Magazine Editing</option>
							<option value="mDesign">Magazine Design</option>
							<option value="HRM">Human Resources Management (HRM)</option>
							<option value="HRD">Human Resources Development (HRD)</option>
							<option value="BD">Business Development (BD)</option>
							<option value="IR">international Relations (IR)</option>
							<option value="OC">organizing committee (OC)</option>
						</select>
						<select class="custom-select my-1 mr-sm-2" name="q1" id="inlineFormCustomSelectPref">
							<option value="" >Which committee do you want to join?(Seconed Desire)</option>
							<option value="Web">Web development</option>
							<option value="Android">Android App</option>
							<option value="Social">Social media</option>
							<option value="media">Multimedia</option>
							<option value="Offline">Offline marketing</option>
							<option value="Academy">Academy</option>
							<option value="Energy">Energy4me</option>
							<option value="Logic">Logistics</option>
							<option value="Extra">Extracurricular</option>
							<option value="mEditing">Magazine Editing</option>
							<option value="mDesign">Magazine Design</option>
							<option value="HRM">Human Resources Management (HRM)</option>
							<option value="HRD">Human Resources Development (HRD)</option>
							<option value="BD">Business Development (BD)</option>
							<option value="IR">international Relations (IR)</option>
							<option value="OC">organizing committee (OC)</option>
						</select>
						
						<textarea class="form-control"   type="text"    name="q2"				 placeholder="Why did you choose this committee?" ></textarea>
						<textarea class="form-control"   type="text"    name="q3"				 placeholder="What do you know about the responsibilities of the committee you are applying for?"></textarea>
						<textarea class="form-control"   type="text"    name="q4"				 placeholder="Who invited you to join SPE Suez?(Please write his/her name)?"></textarea>
						<textarea class="form-control"   type="text"    name="q5"				 placeholder="Do you have previous experience to apply for volunteering work? If you have,please explain it in detail"></textarea>
						<textarea class="form-control"   type="text"    name="q6"				 placeholder="Why are you applying for SPE Suez Student Chapter ?" ></textarea>
						<textarea class="form-control"   type="text"    name="q7"				 placeholder="Do you think that you will benefit from joining SPE and how ?"></textarea>
						<textarea class="form-control"   type="text"    name="q8"				 placeholder="Open Space"></textarea>
						
						<button type="submit" class="btn btn-success" onClick="server('add')">submit</button>
					</form>
					<?php
				/*========================== view Page ===========================*/
				}elseif ($do == "view") {?>
					<div class="row">
						<div class="col-12">
							<h2 class="text-center">Applicant</h2><br>
						</div>
					</div><?php
					$ques = ["#ID","Full Name",'University','Faculty','Department',
					"Academic Year","Mobile Number","G-mail","University email",
						'Facebook Link',
						"Which committee do you want to join?first",
						"Which committee do you want to join?second",
						"Why did you choose this committee?",
						"What do you know about the responsibilities of the committee you are applying for? (Be specific)",
						"Who invited you ?",
						"Do you have previous experience to apply for volunteering work? If you have,please explain it in detail",
						"Why are you applying for SPE Suez Student Chapter ?",
						"Do you think that you will benefit from joining SPE and how ?",
						"Open Space","Status","Time","Respond","comment"];

					$id = isset($_GET['id']) ? $_GET['id'] : 0 ;
					$stmt = $con->prepare('SELECT * FROM recruit_applicants WHERE id = ? LIMIT 1');
					$stmt->execute(array($id));
					$applicant = $stmt->fetch();

					$count = $stmt->rowCount();

					
					if ($count > 0) {

						?>
						<div class="row">
							<div class="col-12">
								<a class="btn btn-danger" href="welcome.php">Back</a>
								<button onclick="server('accept', <?php echo $applicant['id'] ;?>)" class="btn btn-outline-success">Acception</button>
								<button onclick="server('reject', <?php echo $applicant['id'] ;?>)" class="btn btn-outline-danger">Rejection</button>
								<button type="submit" class="btn btn-outline-info" onClick="server('mailcheck',<?php echo $applicant['id'] ;?>)">Send Email</button>
								<a class="btn btn-success" href='welcome.php?do=edit&id=<?php echo $applicant['id'] ;?>'><i class="fa fa-user-edit"></i></a>
								<button  onclick="server('delete',<?php echo $applicant['id'] ;?>)" class="btn btn-danger"><i class="fa fa-user-times"></i></button>
							</div>
						</div>
						<br>
						<table class="main-table text-center table table-bordered">	<?php
							for ($i = 0 ;$i < 23; $i++){ ?>
								<tr>
									<th width="40%"><?php echo $ques[$i] ;?></th>
									<td><?php  
											if ($applicant[$i] === $applicant["face"] && $ques[$i] ==="Facebook Link"){
												?> <a class="btn" href="<?php echo $applicant[$i] ;?>"><?php echo $applicant[$i] ;?></a> <?php
											}else {
												echo $applicant[$i] ;
											}	?>
									</td>
								</tr>	<?php
							}?>
						</table><br>

						<div class="row">
							<div class="col-12">
								<a class="btn btn-danger" href="welcome.php">Back</a>
								<button onclick="server('accept', <?php echo $applicant['id'] ;?>)" class="btn btn-outline-success">Acception</button>
								<button onclick="server('reject', <?php echo $applicant['id'] ;?>)" class="btn btn-outline-danger">Rejection</button>
								<button type="submit" class="btn btn-outline-info" onClick="server('mailcheck',<?php echo $applicant['id'] ;?>)">Send Email</button>
								<a class="btn btn-success" href='welcome.php?do=edit&id=<?php echo $applicant['id'] ;?>'><i class="fa fa-user-edit"></i></a>
								<button  onclick="server('delete',<?php echo $applicant['id'] ;?>)" class="btn btn-danger"><i class="fa fa-user-times"></i></button>
							</div>
						</div>
						<br>
						
						<div class="row justify-content-center">
							<div class="col-md-8">
								<form method="POST" class="bg-light" style="padding:30px">
									<label  class="text-info" for="">From</label>
									<input    class="form-control" type="text"  name="mailname"     value="HRM Committee SPE SU SC'21" placeholder="From">
									<label  class="text-info" for="">To</label>
									<input    class="form-control" type="email" name="mailemail"    value="<?php echo $applicant['gmail'] ;?>" placeholder="To" >
									<label  class="text-info" for="">Subject</label>
									<input    class="form-control" type="text"  name="mailsubject"  value="[SPE SU SC] Application Filtration Result" placeholder="Subject">								
									<label  class="text-info" for="">Massage</label>
									<select  class="custom-select my-1 mr-sm-2" name="typemassage"  id="inlineFormCustomSelectPref">
										<option value="" disabled selected>Type of thr Massage</option>
										<option value="accept">Acception Massage</option>
										<option value="reject">Rejection Massage</option>
										<option value="normal">Custom Massage</option>
									</select> 
									<br>
									<textarea class="form-control" type="text"  name="mailcontent" rows="15" placeholder="Content" disabled >Custom Massage</textarea>
									<p id="massage"></p>
									<button type="submit" class="btn btn-outline-info" onClick="server('mail',<?php echo $applicant['id'] ;?>)">Send Email</button>
								</form>
								<br><br><br><br>
							</div>
						</div>
						<?php

					}else {
						// setTimeout(function(){ window.location.href = 'welcome.php'; }, 2000);
						header("Location: welcome.php");
					}

				/*========================== Logout Page ===========================*/	
				}elseif ($do == "logout") {
					session_start();
					session_unset();
					session_destroy();
					header('location:index.php');
					exit();
				}
			/*========================== no session===========================*/
			}else{/* no session */
					echo "<div class='alert alert-danger'>Something is fulse ( You must be logged)</div>";
					// exit();
					header("refresh:2;url=index.php");
					//header('location: index.php');
			} ?>
		</div>
		<script src="js/jquery-3.2.1.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/all.min.js"></script>
		<script src="js/main.js"></script>

		<script>
			function server(req, id , select) {

				if(req == undefined ){
					req = "";
				};
					
				var fetch  		= 	$('select[name=fetch]').val();
				var fetch2		= 	$('select[name=fetch2]').val();

				var name       	= 	$('input[name=name]').val();
				var university 	= 	$('input[name=university]').val();
				var faculty    	= 	$('input[name=faculty]').val();
				var department 	= 	$('input[name=department]').val();
				var level      	= 	$('input[name=level]').val();
				var mobile     	= 	$('input[name=mobile]').val();
				var gmail      	= 	$('input[name=gmail]').val();
				var uniemail   	= 	$('input[name=uniemail]').val();
				var face       	= 	$('input[name=face]').val();
				var q0 = 	$('select[name=q0]').val();
				var q1 = 	$('select[name=q1]').val();
				var q2 = 	$('textarea[name=q2]').val();
				var q3 = 	$('textarea[name=q3]').val();
				var q4 = 	$('textarea[name=q4]').val();
				var q5 = 	$('textarea[name=q5]').val();
				var q6 = 	$('textarea[name=q6]').val();
				var q7 = 	$('textarea[name=q7]').val();
				var q8 = 	$('textarea[name=q8]').val();

				var comment 	= $('textarea[name=comment]').val();
				
				var mailname    = $('input[name=mailname]').val();
				var mailemail   = $('input[name=mailemail]').val();
				var mailsubject = $('input[name=mailsubject]').val();
				var typemassage = $('select[name=typemassage]').val();

				var mailcontent = $('textarea[name=mailcontent]').val();

				if(req == 'delete'){
					var a = window.confirm("Deleting Applicant,Are You Sure ?!");
					if(a == false){
						id = "";
					}
				}

				if(req == 'mailcheck'){
					var a = window.confirm("This does not send Email,It Mark only, Okay ?!");
					if(a == false){
						id = "";
					}
				}


			var str = window.location.search ;
			var doView = str.startsWith("?do=view");
			console.log(doView);


				$.post("all.php",{

					fe:         fetch,
					fe2:        fetch2,
					req:        req,

					id:         id,
					name:       name,
					university: university,
					faculty:    faculty,
					department: department,
					level:      level,

					mobile:       mobile,
					gmail:        gmail,
					uniemail:     uniemail,
					face:         face,

					q0:  q0,
					q1:  q1,
					q2:  q2,
					q3:  q3,
					q4:  q4,
					q5:  q5,
					q6:  q6,
					q7:  q7,
					q8:  q8,
					comment:  comment,

					mailname:    mailname,
					mailemail:   mailemail,
					mailsubject: mailsubject,
					mailcontent: mailcontent,
					typemassage: typemassage





				}).done(function(data){
					if (req == 'add') { $("#addform input").val('');}
					$('#'+ req+'').html(data);
					$('.alert').delay(2000).slideUp(500);
					if (req == 'delete') {
						if( doView ){ setTimeout(function(){ window.location.href = 'welcome.php'; }, 2000);}
						server('fetch');
					}
				})
			}
			/*************************************** */
			var accept_massage = "Dear Applicant,<br><br> &nbsp;&nbsp;&nbsp; We hope you are doing well. <strong>Congratulations</strong>, you have passed the first step of the recruitment process. The next step is the interview, you will be informed by the date of the interview very soon.<br><br> &nbsp;&nbsp;&nbsp;Take into account to prepare well for the interview.  This video may help you to know how to pass the interview successfully: https://youtu.be/YwWMhi9uPu0 <br><br> &nbsp;&nbsp;&nbsp;You also can find out more information about SPE SU SC, our products and achievements by visiting our website: https://www.spesusc.com/ <br> Thanks in advance and Good Luck!<br><br> <strong>Kind Regards,<br> SPE SU SC'21 HRM</strong>";
			var reject_massage =  "Dear Applicant,<br><br> &nbsp;&nbsp;&nbsp; We hope you are doing well. Thank you for your interest in joining SPE Suez University Student Chapter. <b> We appreciate the time you have invested in filling the Registration Form.<br><br> &nbsp;&nbsp;&nbsp; Unfortunately,</b> we regret to inform you that you <span style='color:red'> were not selected to pass to the next stage of the recruitment process.</span> We would like to note that the competition for joining SPE SU SC  is always strong and that we often have to make difficult choices between many high caliber candidates.<br><br> &nbsp;&nbsp;&nbsp; We want to tell you that it is not the end, SPE SU SC is full of challenges and opportunities that suit you.  You can apply in the upcoming recruitment if you think you can  recover your points of weaknesses and capitalize on your strengths. Thank you and best luck in your future endeavors.<br><br> Best Regards,<br> <strong>SPE SU SC'21 HRM</strong>";
			var custom_massage = "Dear Applicant,\n\n\t We hope you are doing well. Congratulations, you have passed the first step of the recruitment process.\n\n\tThe next step is the interview, you will be informed by the date of the interview very soon. Take into account to prepare well for the interview. This video may help you to know how to pass the interview successfully: https://youtu.be/YwWMhi9uPu0 \n\n\tYou also can find out more information about SPE SU SC, our products and achievements by visiting our website: https://www.spesusc.com/  \nThanks in advance and Good Luck!\n\nKind Regards,\nSPE SU SC'21 HRM";
			
			
			$('select[name=typemassage]').change(function() {
				if ($('select[name=typemassage]').val() == 'normal') {
					$('textarea[name=mailcontent]').removeAttr("disabled");
					$('textarea[name=mailcontent]').slideDown();
					$('textarea[name=mailcontent]').val(custom_massage);
					$('p#massage').slideUp();
				}else{
					$('textarea[name=mailcontent]').attr("disabled","disabled").slideUp();
					$('p#massage').slideDown();
					if ($('select[name=typemassage]').val() == 'accept') {
						$('p#massage').html(accept_massage);
					}
					if ($('select[name=typemassage]').val() == 'reject') {
						$('p#massage').html(reject_massage);
					}
				}
			});
			/*************************************** */
			$('form').submit(function(e){
				e.preventDefault();
			});
		</script>
	</body>
</html>
