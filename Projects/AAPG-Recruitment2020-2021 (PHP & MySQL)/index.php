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

</head>
<body>
    <div class="back-photo">
        <!--Mobile Header-->
        <div class="mobile-header visible-xs hidden-sm" style="margin-bottom: 80px;text-align: center"> 
            <img src="images/logo-mobile_2.jpg" class="logo-mobile visible-xs hidden-sm" style="z-index: -1">
            <div class="online-mobile hidden-sm hidden-md hidden-lg visible-xs">
                <p class="text-online" >AAPG Online Recruitment</p>
                <p class="text-campaign"><h3 style="display:inline-block; color: yellow; font-size:25px; font-weight: bold" class="slogan font writing-jam mb-4"></h3><span style="color:yellow; " class="flashy-slashy">|</span></p>
            </div>
        </div>
    
        <div class="clear-both"></div>
    
        <div class="left">
            <div class="online-recruit">
                Online Recruitment
            </div>
            <div class="campaign"><h3 style="display:inline-block" class="slogan font writing-jam mb-4"></h3><span style="font-size: 45px;" class="flashy-slashy">|</span></div>
            <img class="joe" src="images/Asset 1@4x.png" alt="">
        </div>
        <div class="right">
            <h1  class="hidden-xs heading"> <span><img class="logo" src="images/Logo.png" alt="Logo"></span> AAPG</h1>
            <!--start form-->
            <div class="form">
                <form id="recruit" method="POST" action="data.php">
                    <!--Start of Tap 1 ***************************************************************** -->
                   <div id="tap1">                                             
                       <div class="form-group" style="position: relative">
                           <label class="" for="name"><i class="far fa-user"></i> Full Name...</label>
                           <input class="form-control" type="text" id="name" name="Name" onkeyup="preventSC(this)" required/>
                           <span class="validation" id="validname" style="color:red;"></span>				    
                       </div>
                       <br>
                       <div class="form-group" style="position: relative">
                           <label class="" for="faculty"><i class="fas fa-graduation-cap"></i> Faculty...</label>
                           <input class="form-control" type="text" id="faculty" name="faculty" onkeyup="preventSC(this)" required/>
                           <span class="validation" id="validfaculty"  style="color:red; "></span>
                       </div>
                       <br>
                       <div class="form-group" style="position: relative">
                           <label class="" for="Depart"><i class="fas fa-user-graduate"></i> Department...</label>
                           <input class="form-control" type="text" id="Depart" name="Depart" onkeyup="preventSC(this)" required/>
                           <span class="validation" id="validdepart" style="color:red; "></span>
                       </div>
                       <br>
                       <div class="form-group" style="position: relative">
                           <label for="academic" style="font-size:16px"><i class="fas fa-user-graduate"></i> Academic Year </label>
                               <select class="form-control" id="academic" name="Academic" style="display: block;" required/>
                                   <option value="">Choose...</option>
                                   <option value="prep">Prep</option>
                                   <option value="first">First</option>
                                   <option value="second">Second</option>
                                   <option value="third">Third</option>
                                   <option value="forth">Forth</option>
                               </select>
                           
                           <span class="validation" id="validacademic" style="color:red; "></span>
                       </div>
                       <br>
                       <div class="form-group" style="position: relative">
                           <label class="" for="phone"><i class="fas fa-mobile-alt"></i> Phone Number...</label>
                           <input class="form-control" type="number" name="Telephone" id="phone" onblur="phoneVal();" required/>
                           <span class="validation" id="validPhone" style="color:red; "></span>
                       </div>
                       <br>
                       <div class="form-group" style="position: relative">
                           <label class="" for="email"><i class="fas fa-envelope"></i> Email...</label>
                           <input class="form-control" type="email" name="EMail" id="email" onblur=" emailVal();" required/>
                           <span class="validation" id="validemail" style="color:red; "></span>
                       </div>
                       <br>
                       <div class="form-group" style="position: relative">
                           <label class="" for="facebook"><i class="fab fa-facebook-square"></i> Facebook Profile Link...</label>
                           <input class="form-control" type="url" id="facebook" name="Profile" onblur=" facebookVal();" required/>
                           <span class="validation" id="validfacebook" style="color:red;"></span>
                       </div><br>
                       
                       
                   </div>
                    <!--End of Tap 1 ********************************************************************* -->
   
   
   
   
                    <!-- Start of Tap 2 ********************************************************************* -->
                   <div id="tap2">
                       <div class="form-group">
                           <div class="alert-danger" style="padding: 5px">Please Note: You Cannot Choose the same Committe in both fields</div>
                           <label  style="font-size:16px">Choose Your Committee 1 </label>
                                   <select class="form-control" name="committee1" id="committee1" style="display: block;" onblur="commVal();">
                                           <option value="None">Choose Your Committee</option>
                                           <option value="Academy El Gamaa" >Academy El Gama'a</option>
                                           <option value="Academy Petrol">Academy Petrol</option>
                                           <option value="Media">Media</option>
                                           <option value="Social Media">Social Media</option>
                                           <option value="IT">IT</option>
                                           <option value="Public Relation">Public Relations</option>
                                           <option value="Magazine">Magazine</option>
                                           <option value="Direct Publicity">Direct Publicity</option>
                                           <option value="Operation Committee">Operations Committee</option>
                                           <option value="Human Resource">Human Resources</option>
                                   </select>
                           
                           <span id="comm1" style="color:red;"></span>
                       </div>
                       <br>
                       <div class="form-group">
                           <label style="font-size:16px">Choose Your Committee 2 </label>
                                   <select class="form-control" name="committee2" id="committee2" style="display: block;" onblur="commVal();">
                                           <option value="None">Choose Your Committee</option>
                                           <option value="Academy El Gamaa" >Academy El Gama'a</option>
                                           <option value="Academy Petrol">Academy Petrol</option>
                                           <option value="Media">Media</option>
                                           <option value="Social Media">Social Media</option>
                                           <option value="IT">IT</option>
                                           <option value="Public Relation">Public Relations</option>
                                           <option value="Magazine">Magazine</option>
                                           <option value="Direct Publicity">Direct Publicity</option>
                                           <option value="Operation Committee">Operations Committee</option>
                                           <option value="Human Resource">Human Resources</option>
                                   </select>
                           
                           <span id="comm2" style="color:red;"></span>
                       </div>
                       <br>
                       <div class="question">-Why are you interested in being part of AAPG?<br>and why did you choose the primary/secondary committee?</div>
                       <div class="form-group">
                           <textarea class="form-control" type="text" rows= "3" id="field9" name="field9" placeholder="Write Your Answer..." onkeyup="preventSC(this)" required/></textarea>
                       </div>
                       <span id="validfield9" style="color:red;
    display: block;
    margin-top: 14px;
    margin-bottom: -15px;
"></span>
                       <br>
                       <div class="question">-What are your volunteering experience?</div>
                       <div class="form-group">
                           <textarea class="form-control" type="text" rows= "3" id="field10" name="field10" placeholder="Write Your Answer..." onkeyup="preventSC(this)" required/></textarea>
                       </div>	
                       <span id="validfield10" style="color:red;
    display: block;
    margin-top: 14px;
    margin-bottom: -15px;
"></span>				
                   </div>
                    <!--End of Tap 2 ************************************************************************* -->
   
   
   
   
   
   
                    <!--Start of Tap 3  ***********************************************************************-->
                   <div id="tap3">
                       <div class="question">-You are a team leader and one of your members isn't meeting standards, What action would you take?</div>
                       <div class="form-group">
                              <select class="form-control" name="chooone" style="display: block; " required/>
                                   <option value="">Choose Your Answer...</option>
                                   <option value="Fire the member">Fire the member</option>
                                   <option value="Deliver an officical warning">Deliver an officical warning</option>
                                   <option value="Hold a meeting to discuss the problem with the other members.">Hold a meeting to discuss the problem with the other members.</option>
                                   <option value="Cover for the member and talk to him internally with no official actions."> Cover for the member and talk to him internally with no official actions.</option>
                               </select>
                               <span id="ansOne"></span>
                       </div>
                       <br>
                       <div class="question">-You are a committee member and you found out that your academic grades are dropping because you are always overwhelmed with too many tasks. What would you do?</div>
                       <div class="form-group">
                             <select class="form-control" name="chootwo" style="display: block; " required/>
                                       <option value="">Choose Your Answer...</option>
                                       <option value="Complain to your head and ask him/her to go easier on you.">Complain to your head and ask him/her to go easier on you. </option>
                                       <option value="Try harder to manage your time but still maintain your committee performance. ">Try harder to manage your time but still maintain your committee performance. </option>
                                       <option value="Quit the committee and focus on your studies.">Quit the committee and focus on your studies. </option>
                                       <option value="Pay less attention to deadlines and tasks because you need to study.">Pay less attention to deadlines and tasks because you need to study. </option>
                            </select>
                       </div>
                       <br>
                       <div class="question">
                       -In your opinion, to make the most of student activities, you would rather:
                       </div>
                       <div class="form-group">
                             <select class="form-control" name="choothree" style="display: block; " required/>
                                       <option value="">Choose Your Answer...</option>
                                       <option value="Join all student chapters you can at the same time.">Join all student chapters you can at the same time.</option>
                                       <option value="Join only one student chapter and keep re-positioning among all committees inside that chapter.">Join only one student chapter and keep re-positioning among all committees inside that chapter. </option>
                                       <option value="Join only one committee in only one student chapter and get to know its technicality more deeply.">Join only one committee in only one student chapter and get to know its technicality more deeply. </option>
                            </select>
                       </div>
                       <br>
                       <div class="question">
                       -Your opinion matters to us, and your concerns are our priority. So, tell us what you think...
                       </div>
                       <div class="form-group">
                           <textarea class="form-control" type="text" rows= "3" id="feedback" name="feedback" placeholder="Feedback..." onkeyup="preventSC(this)"></textarea>
                       </div>
                       <div class="form-group">
                           <input class="btn btn-block" type="submit" value="Submit" id="submit">
                       </div>
                   </div>
                    <!--End of Tap 3 ***************************************************************************--> <!--End  it here the comment-->
               </form>
               
                <div class="footer">
                    <button class="pagination-1 btn" id="btn1" onclick="fPage();academicVal()">
                        1
                    </button>
                    <button class="pagination-2 btn" id="btn2" onclick="sPage(); emailVal();">
                        2
                    </button>
                    <button class="pagination-3 btn" id="btn3" onclick="tPage();commVal();">
                        3
                    </button>
                </div>
            </div>
            <!--end form-->
        </div>
    </div>






<!-- jquery library -->
<script src="js/jquery-3.2.0.min.js"></script>
<!-- bootstrap library -->
<script src="js/bootstrap.min.js"></script>
<!-- Main JavaScript File -->
<script src="js/MyJSFunc.js"></script>
</body>
</html>