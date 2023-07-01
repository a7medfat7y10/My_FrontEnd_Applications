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
				header("refresh:1;url=done.php");
			}
		}
?>       
<!DOCTYPE html>
<html>
	<head>
		<!--   meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
		<title>SPE Suez | Recruitment Form</title>
		<link rel="shortcut icon"  href="img/logo1.png">
		<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body>
		<div class="lay">
			<div class="lay2 center-all">
				<div class="container">
					<div class="row center-all" style="margin-bottom: 0;">
						<div class="main-div">
							<div class="col m6 s12 center">
								<div class="left-div center center-all4 white-text">
									<img src="img/logo2.png" width="35%" alt="">
									<img src="img/recruit.png" width="80%" alt="">
								</div>
							</div>
							<div class="col m6 s12">
								<div class="white right-div center-all center">
									<form  id="forms" method='POST' action="<?php ?>">
										
										<!-- 1 "tab" for each step in the form: -->
										<div class="tab left-align">
											<br><br>
											<h6 class="teal-text"> Please, read the following very carefully.</h6>
											<p>Application filling tips:</p>
											<p>
												1- Read the questions very carefully, think about them, then type your answer. <br>
												2- Make sure your answer is clear as possible as you can. <br>
												3- Take all the time you need to answer the questions, your answers represent you!
											</p>
											<p>Note that: <br> If you are currently an Executive Board or High Board member at another Student Chapter in Suez University, you're not allowed to join SPE Suez.</p>
											<p>Before register please read our ethics and rules to know our system:</p>
											<p>For any inquiries, do not hesitate to contact us on: <br> <a href="mailto:hrmcommittee.spesusc.2021@gmail.com"> hrmcommittee.spesusc.2021@gmail.com </a> </p>
											<p>Thanks in advance!</p>
										</div>
										<div class="tab">
											<h5 class="teal-text"> Personal Data</h5>
											<div class="input-field">
												<input oninput="this.className =''" name="name" id="name" type="text" class="validate">
												<label for="name">Full Name</label>
											</div>
											<div class="input-field">
												<input oninput="this.className =''" name="mobile" id="mobile" type="number" class="validate">
												<label for="mobile">Mobile-Number</label>
											</div>
											<div class="input-field">
												<input oninput="this.className =''" name="gmail" id="gmail" type="email" class="validate">
												<label for="gmail">G-mail</label>
											</div>
											<!-- <div class="input-field">
												<input  name="uniemail" id="uniemail" type="email">
												<label for="uniemail">University Email</label>
											</div> -->
											<div class="input-field">
												<input oninput="this.className =''" name="face" id="face" type="url" class="validate">
												<label for="face">Facebook Account Link</label>
											</div>
										</div>

										<!-- 2 "tab" for each step in the form: -->
										<div class="tab">
											<h5 class="teal-text"> Personal Data</h5>
											<div class="input-field">
												<input oninput="this.className =''" name="university" id="university" type="text" class="validate">
												<label for="university">University</label>
											</div>
											<div class="input-field">
												<input oninput="this.className =''" name="faculty" id="faculty" type="text" class="validate">
												<label for="faculty">Faculty</label>
											</div>
											<div class="input-field">
												<input oninput="this.className =''" name="department" id="department" type="text" class="validate">
												<label for="department">Department</label>
											</div>
											<div class="input-field">
												<input oninput="this.className =''" name="level" id="level" type="text" class="validate">
												<label for="level">Academic Year</label>
											</div>
										</div>

										<!-- 3 "tab" for each step in the form: -->
										<div class="tab">
											<h5 class="teal-text"> About Committee</h5>

											<div class="input-field">
												<select name="q0" class="browser-default validate" >
													<option value="" disabled selected>Which committee do you want to join?</option>												
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
											</div>

											<!-- <div class="input-field">
												<select name="q1" class="browser-default">
													<option value="" disabled selected>Which committee do you want to join?(Seconed Desire)</option>										
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
											</div> -->

											<div class="input-field">
												<textarea class="materialize-textarea validate" oninput="this.className='materialize-textarea validate'" name="q2" id="q2"></textarea>
												<label for="q2">Why did you choose this committee?</label>
											</div>
											<div class="input-field">
												<textarea class="materialize-textarea validate long-q" oninput="this.className='materialize-textarea long-q validate'" name="q3" id="q3"></textarea>
												<label for="q3">What do you know about the responsibilities of the committee you are applying for? (Be specific)</label>
											</div>
											 <div class="input-field">
												<textarea class="materialize-textarea validate" oninput="this.className='materialize-textarea validate'" name="q4" id="q4"></textarea>
												<label for="q4">Who invited you to join SPE Suez?</label>
											</div> 
										</div>

										<!-- 4 "tab" for each step in the form: -->
										<div class="tab">
											<h5 class="teal-text"> About SPE</h5>
											<div class="input-field">
												<textarea class="materialize-textarea validate long-q" oninput="this.className='materialize-textarea long-q validate'" name="q5" id="q5"></textarea>
												<label for="q5">Do you have previous experience to apply for volunteering work? If you have,please explain it in detail</label>
											</div>
											<div class="input-field">
												<textarea class="materialize-textarea validate" oninput="this.className='materialize-textarea validate'" name="q6" id="q6"></textarea>
												<label for="q6">Why are you applying for SPE Suez Student Chapter ?</label>
											</div>
											<div class="input-field">
												<textarea class="materialize-textarea validate" oninput="this.className='materialize-textarea validate'" name="q7" id="q7"></textarea>
												<label for="q7">Do you think that you will benefit from joining SPE and how ?</label>
											</div>
											<div class="input-field">
												<textarea class="materialize-textarea" oninput="this.className='materialize-textarea'" name="q8" id="q8"></textarea>
												<label for="q8">Open Space</label>
											</div>
										</div>							
										
										<div style="overflow:auto;">
											<div style="float:right;">
											<button class="btn" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
											<button class="btn" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
											</div>
										</div>
										
										<!-- Circles which indicates the steps of the form: -->
										<div style="text-align:center;margin-top:15px;">
											<span class="step"></span>
											<span class="step"></span>
											<span class="step"></span>
											<span class="step"></span>
											<span class="step"></span>
										</div>

									</form>						
									<?php if ( $ok == "ok") { echo "<p class='msg-success teal white-text center'>Thank You, We Recieved Your Registration</p>";}?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="js/jquery-3.2.1.js"></script>
		<script src="js/materialize.min.js"></script>
		<script src="js/main.js"></script>
		<script>
				
			var currentTab = 0; // Current tab is set to be the first tab (0)
			showTab(currentTab); // Display the current tab
			function showTab(n) {
				// This function will display the specified tab of the form ...
				var x = document.getElementsByClassName("tab");
				 x[n].style.display = "block";
				// ... and fix the Previous/Next buttons:
				if (n == 0) {
					document.getElementById("prevBtn").style.display = "none";
				} else {
					document.getElementById("prevBtn").style.display = "inline";
				}
				if (n == (x.length - 1)) {
					document.getElementById("nextBtn").innerHTML = "Submit";
					$("#nextBtn").setAttr
				} else {
					document.getElementById("nextBtn").innerHTML = "Next";
				}
				// ... and run a function that displays the correct step
				indicator:fixStepIndicator(n)
			}

			function nextPrev(n) {
				// This function will figure out which tab to display
				var x = document.getElementsByClassName("tab");
				// Exit the function if any field in the current tab is invalid:
				if (n == 1 && !validateForm()) return false;
				// Hide the current tab:
				x[currentTab].style.display = "none";
				// Increase or decrease the current tab by 1:
				currentTab = currentTab + n;
				// if you have reached the end of the form... :
				if (currentTab >= x.length) {
				//...the form gets submitted:
					document.getElementById("forms").submit();
					return false;
				}
				// Otherwise, display the correct tab:
				showTab(currentTab);
			}
			function validateForm() {
				// This function deals with validation of the form fields
				var x, y, i, valid = true;
				x = document.getElementsByClassName("tab");
				y = x[currentTab].getElementsByClassName('validates');                          // .getElementsByTagName("input");
				// A loop that checks every input field in the current tab:
				for (i = 0; i < y.length; i++) {
					// If a field is empty...
					if (y[i].value == "") {
					// add an "invalid" class to the field:
					y[i].className += " invalid";
					// and set the current valid status to false:
					valid = false;
					}
				}
				// If the valid status is true, mark the step as finished and
				valid:
				if (valid) {document.getElementsByClassName("step")[currentTab].className += " finish";}
				return valid; // return the valid status
			}

			function fixStepIndicator(n) {
				// This function removes the "active" class of all steps...
				var i, x = document.getElementsByClassName("step");
				for (i = 0; i < x.length; i++) {
				x[i].className = x[i].className.replace(" active", "");
				}
				//... and adds the "active" class to the current step:
				x[n].className += " active";
			}


			/***************************************** */
			$('select[name=q0]').change(function() {
					var sq0 = $('select[name=q0]').val(); 
					$('select[name=q1] option').removeAttr("disabled")
					$('select[name=q1] option[value='+ sq0 +']').attr("disabled","disabled")
					$('select[name=q1] option[value=""]').attr("disabled","disabled")
			});

		</script>
	</body>
</html>
