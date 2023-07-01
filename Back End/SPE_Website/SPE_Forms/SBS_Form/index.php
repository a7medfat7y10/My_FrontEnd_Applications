<?php
		// include "connect.php" ;
		 $ok = "on";
		$count = 1;
		// if ($_SERVER["REQUEST_METHOD"] == 'POST') {
		// 	$name       = isset($_POST['name']) ? $_POST['name'] : "" ;
		// 	$university = isset($_POST['university']) ? $_POST['university'] : "" ;
		// 	$faculty    = isset($_POST['faculty']) ? $_POST['faculty'] : "" ;
		// 	$department = isset($_POST['department']) ? $_POST['department'] : "" ;
		// 	$level      = isset($_POST['level']) ? $_POST['level'] : "" ;
		// 	$mobile     = isset($_POST['mobile']) ? $_POST['mobile'] : "" ;
		// 	$gmail      = isset($_POST['gmail']) ? $_POST['gmail'] : "" ;
		// 	$uniemail   = isset($_POST['uniemail']) ? $_POST['uniemail'] : "" ;
		// 	$face       = isset($_POST['face']) ? $_POST['face'] : "" ;
		//   $q0 		    = isset($_POST['q0']) ? $_POST['q0'] : "" ;
		// 	$q1 		    = isset($_POST['q1']) ? $_POST['q1'] : "" ;
		// 	$q2 		    = isset($_POST['q2']) ? $_POST['q2'] : "" ;
		// 	$q3 		    = isset($_POST['q3']) ? $_POST['q3'] : "" ;
		// 	$q4 		    = isset($_POST['q4']) ? $_POST['q4'] : "" ;
		// 	$q5 		    = isset($_POST['q5']) ? $_POST['q5'] : "" ;
		// 	$q6 		    = isset($_POST['q6']) ? $_POST['q6'] : "" ;
		// 	$q7 		    = isset($_POST['q7']) ? $_POST['q7'] : "" ;
		// 	$q8 		    = isset($_POST['q8']) ? $_POST['q8'] : "" ;
			
		// 	$stmt = $con->prepare('INSERT INTO  applicants(name,university,faculty,department,level,mobile,gmail,uniemail,face, q0 ,q1, q2, q3, q4, q5, q6, q7, q8, status , date ,emailed )
		// 	VALUES ( :zname, :zuniversity, :zfaculty, :zdepartment, :zlevel, :zmobile, :zgmail, :zuniemail, :zface, :zq0,:zq1, :zq2, :zq3, :zq4, :zq5, :zq6, :zq7, :zq8, :zstatus, :zdate, :zemailed)');
		// 	$stmt->execute(array( "zname"=>$name, "zuniversity"=> $university, "zfaculty"   =>$faculty, "zdepartment"=>$department, "zlevel" =>$level, "zmobile" =>$mobile, "zgmail" =>$gmail, "zuniemail" =>$uniemail, "zface" =>$face, "zq0"=>$q0 ,"zq1" => $q1, "zq2"=>$q2, "zq3"=>$q3, "zq4"=>$q4, "zq5"=>$q5, "zq6"=>$q6, "zq7"=>$q7, "zq8"=>$q8, "zstatus"=>"", "zdate"=> Date('d m Y'), "zemailed"=>""));
		// 	$count = $stmt->rowCount();
	
			if ($count > 0) {
				//echo "Thank You, We Recieved Your Registration";
				//header("refresh:2;url=formx.php?done=ok");
				//echo "<div class='alert alert-success'>Thank You, We Recieved Your Registration</div>";
				//header("url=index.php?done=ok");
				//exit();
				$ok = "ok";
			//	header("refresh:2;url=done.php");
			}
	//	}
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
					<?php if ( $ok == "ok") { echo "<p class='msg-success white-text center'>Thank You, We Recieved Your Registration</p>";}?>
								
					</div>
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
										<!--  tab 1  -->
										<div class="tab left-align"> 
											<div><br>
											<h5 class="teal-text"> SPE Business Summit- SBS ||</h5>
											Before registering, please read the following notes and rules of our conference: <br><br>

											SPE Business Summit is a two-day event where you discover the latest developments in your field, hear inspiring keynotes from leaders, or rub elbows with other professionals.<br><br>

											SPE Business Summit where you can:<br>
											》Meet your mentors.<br>
											》Participate in workshops.<br>
											》Attend many sessions and talks about different topics and fields.<br>
											You will receive by the end of the SBS Conference a certificate of your participation and attendance.<br><br>

											• Date: 8th and 9th of Jan 2021<br>
											• Venue: Career 180 Platform<br><br>

											</div>
										</div>
										<!--  tab 2  -->
										<div class="tab left-align">
											<div><br>
											 Career 180 Platform<br>
											 <li>Rules:</li>
											 
											 <ul>
												<li> Please do not forget to click submit after completing the form and make sure that all choices and information are correct before submitting.</li>
												<li> The attendees must carry their identity card, ticket, and conference ID.</li>
												<li> Don't be late for the event more than 30 minutes of the event starting.</li>
												<li> All attendees help our organizers to keep the event safe and calm without any problems.</li>
												<li> Please stay tuned for participation selection for the available workshops and do not oppose to our filtration process.</li>
											 </ul>

											• Notes:<br>
											- SPE Business Summit is a great opportunity to gain more knowledge about these topics, You must benefit from it well. <br>

											</div>
										</div>
										<!--  tab 3  -->
										<div class="tab left-align">
											<div>
												<h6 class="teal-text">For registration steps:</h6>
											  
												》To book your seat #online through payme: <br><br>
												1- Fill out this form. <br>
												2- Open the link of payme in the form. <br>
												3- Choose the package. <br>
												4- Choose how many you need from this package. <br>
												5- Choose payment method: fawry.<br>
												 <a href="https://www.paymestore.co"></a>https://www.paymestore.co/............... <br><br>
												6- Proceed to payment.<br>
												7- Create account on payme.<br>
												8- You will receive a code.<br>
												9- Go to the nearest fawry machine <br>
												10- Pay your ticket with the code using fawry pay service.

											</div>
										</div>
										<!--  tab 4  -->
										<div class="tab left-align">
											<div><br>
											》To book your seat #offline: <br><br>
												1- Fill out this form. <br>
												2- Then, contact us through: <br><br>
												-Suez University: <br><br>
												Mr. Helal Yousry: <br>
												0101 880 1256 <br> <br>

												Mr. Mahmoud Shahawy: <br>
												0101 055 2346 <br><br>

												- If you have any inquiries, do not hesitate to contact us on:  <br>
												SPE Suez University Email: spesusc2021@gmail.com <a href="mailto:spesusc2021@gmail.com">spesusc2021@gmail.com</a> <br>
											</div>
										</div>
										<!--  1 "tab" for each step in the form:  -->
										<div class="tab">
											<h5 class="teal-text"> Personal Data</h5>
											<div class="input-field">
												<input oninput="this.className =''" name="name" id="name" type="text" class="validate">
												<label for="name">Full Name</label>
												<p class="small">Note that this is the name that will be in the attendance certificate.</p>
											</div>
											<div class="input-field">
												<input oninput="this.className =''" name="mobile" id="mobile" type="number" class="validate">
												<label for="mobile">Mobile-Number</label>
											</div>
											<div class="input-field">
												<input oninput="this.className =''" name="gmail" id="gmail" type="email" class="validate">
												<label for="gmail">G-mail</label>
											</div>
											<div class="input-field">
												<input  name="uniemail" id="uniemail" type="email">
												<label for="uniemail">Age</label>
											</div> 
											<div class="input-field">
												<input oninput="this.className =''" name="face" id="face" type="url" class="validate">
												<label for="face">Facebook Account Link</label>
											</div>
											<div class="input-field">
												<select name="q0" class="browser-default validate" >
													<option value="" disabled selected>Gender</option>												
													<option value="Web">Male</option>
													<option value="Android">Female</option>
												</select>
											</div><br>
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
											<div class="input-field">
												<input oninput="this.className =''" name="Profession" id="Profession" type="text" class="validate">
												<label for="Profession">Profession</label>
											</div>
										</div>

										<!-- 3 "tab" for each step in the form: -->
										<div class="tab">
											<h6 class="teal-text"> Package & Payment Method Section</h6>
											<div class="input-field">
												<select name="q0" class="browser-default validate" >
													<option value="" disabled selected>Package </option>		
													<option value="Package V 100 L.E">Package V 100 L.E ( 2 Days Attendance + Certificate + Transportation from Suez + Breakfast + Lunch )</option>
													<option value="Package Y 75  L.E">Package Y 75  L.E ( 2 Days Attendance + Certificate + Full access of workshops)</option>
													<option value="Package Z 50  L.E">Package Z 50  L.E (2 Days Attendance + Certificate )</option>
												</select>
											</div>
											<div class="input-field">
												<select name="q1" class="browser-default validate" >
													<option value="" disabled selected>Payment Methods </option>		
													<option value="Helal"  >Contact SPE Suez University through (Phone Numbers): Mr. Helal Yousry - 0101 880 1256</option>
													<option value="Shahawy">Contact SPE Suez University through (Phone Numbers): Mr. Mahmoud Shahawy: 0101 055 2346</option>
													<option value="Payme">Payme Story</option>
												</select>
											</div>
											<hr>
											<div class="input-field left-align">
												<p>Sign Up for Career 180 to attend the Virtual Talks on SBS ||.</p>
												<p class="small">  Here the link of the registration: <a href="https://career-180.com/register">https://career-180.com/register</a></p>
												<p>
													<label>
														<input type="checkbox" class="filled-in" />
														<span>Done</span>
													</label>
												</p>
											</div>
											<hr>
											<div class="input-field left-align">
												<p>By submitting this form, you are confirming your attendance to the conference and commitment.</p>
												<p>
													<label>
														<input type="checkbox" class="filled-in"  />
														<span>I Agree</span>
													</label>
												</p>
											</div>
										</div>

										<!--  "End tabs"  -->
													
										
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
											<span class="step"></span>
											<span class="step"></span>
										</div>

									</form>						
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
