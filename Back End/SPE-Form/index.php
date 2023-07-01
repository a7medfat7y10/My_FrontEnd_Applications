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

</head>
<body>
    <div class="back-photo">
        <h1 style="text-align:center; font-weight:bold" >Spe-Recruitment</h1>
        <div class="right">
            <!--start form-->
            <div class="form">
                <form id="recruit" method="POST" action="successful.php">
                    <!--Start of Tap 1 ***************************************************************** -->                                   
                       <div class="form-group" style="position: relative">
                           <label class="" for="name"><i class="far fa-user"></i> Full Name</label>
                           <input class="form-control" type="text" id="name" name="Name" onkeyup="preventSC(this)" required/>
                           <span class="validation" id="validname" style="color:red;"></span>				    
                       </div>
                       <br>
                       <div class="form-group" style="position: relative">
                           <label class="" for="faculty"><i class="fas fa-graduation-cap"></i> Faculty</label>
                           <input class="form-control" type="text" id="faculty" name="faculty" onkeyup="preventSC(this)" required/>
                           <span class="validation" id="validfaculty"  style="color:red; "></span>
                       </div>
                       <br>
                       <div class="form-group" style="position: relative">
                           <label class="" for="Depart"><i class="fas fa-user-graduate"></i> Department</label>
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
                           <label class="" for="phone"><i class="fas fa-mobile-alt"></i> Phone Number</label>
                           <input class="form-control" type="number" name="Telephone" id="phone" onblur="phoneVal();" required/>
                           <span class="validation" id="validPhone" style="color:red; "></span>
                       </div>
                       <br>
                       <div class="form-group" style="position: relative">
                           <label class="" for="email"><i class="fas fa-envelope"></i> Email</label>
                           <input class="form-control" type="email" name="EMail" id="email" onblur=" emailVal();" required/>
                           <span class="validation" id="validemail" style="color:red; "></span>
                       </div>
                       <br>
                       <div class="form-group" style="position: relative">
                           <label class="" for="facebook"><i class="fab fa-facebook-square"></i> Facebook Profile </label>
                           <input class="form-control" type="url" id="facebook" name="Profile" onblur=" facebookVal();" required/>
                           <span class="validation" id="validfacebook" style="color:red;"></span>
                       </div><br>
                       
                       
                       

                       <div class="question">
                       -Free Space
                       </div>
                       <div class="form-group">
                           <textarea class="form-control" type="text" rows= "3" id="feedback" name="feedback" placeholder="Feedback..." onkeyup="preventSC(this)"></textarea>
                       </div>
                       <div class="form-group">
                           <input class="btn btn-block" type="submit" value="Submit" id="submit">
                       </div>
                </form>

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