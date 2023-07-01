<?php 
    //check for method post
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //assign variables
        $user =filter_var( $_POST['username'],FILTER_SANITIZE_STRING);
        $mail =filter_var(  $_POST['email'] ,FILTER_SANITIZE_EMAIL);
        $phone =filter_var(  $_POST['phone'] ,FILTER_SANITIZE_NUMBER_INT);
        $msg = filter_var( $_POST['message'],FILTER_SANITIZE_STRING);;

        //creating errors array
        $formErrors = array();
        if(strlen($user) <= 3) {
            $formErrors[] = 'username mustbe larger than three chars';
        }
        if(strlen($msg) <= 10) {
            $formErrors[] = 'message must be larger than ten chars';
        }
    }
    //mail the data if no errors found after uploading your site
        // $myEmail = 'ahmedfathy.1074@gmail.com';
        // $subject = 'contct form';
        // $headers = 'from:' . $mail . '\r\n';
        if (empty($formErrors)) {
            // mail($myEmail , $subject ,$msg ,  $headers );

             $user = '';
             $mail = '';
             $phone = '';
             $msg = '';

            $success = '<div class="alert alert-success">We have Recieved Your Message</div>';
        }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- IE Meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BootStrap Start</title>
    <!-- Bootstrap library -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- normalize library  for good reset-->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- font-awesome icons library -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Main Css File -->
    <link rel="stylesheet" href="./css/Style.css/~">

    <!-- to open Html5 Elements in Internet Expolrer -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->



    <style>
                .contact-form {
            max-width: 500px;
            margin:20px auto
        }
        .contact-form input,textarea {
            margin-bottom: 10px
        }
        .contact-form input{
            padding-left:30px
        }

        .contact-form textarea{
            height:150px !important
        }
        .contact-form  input:not([type='submit']) +i 
        {
            height:0;
            float:left;
            position: relative;
            top: -35px;
            left: 5px;
            color:#999
        }
        .contact-form .send-msg {
            display:block;
            position: relative;
            top:-35px;
            left:5px;
            color:#FFF
        }
        .contact-form .form-group {
            position:relative
        }
        .contact-form .asterisk {
            height:0;
            font-size:22px;
            position:absolute;
            right:10px;
            top:6px;
        }
        .contact-form .custom-alert{
            padding:5px 10px;
            display:none
        }
    </style>
</head>


<body>
    <div class="container">
        <h2 class="text-center">Contact Us</h2>
        
        
        <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <?php if(! empty($formErrors)){ ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?php
                    foreach($formErrors as $error) {
                        echo $error . '<br>';
                    } ?>
                </div>
        <?php } ?>
        <?php if (isset($success) ){echo $success;} ?>



            <div class="form-group">
                <input class="form-control username" type="text" name="username" placeholder="Enter UserName" value="<?php if(isset($user)){echo $user;} ?>" />
                <i class="fa fa-user fa-lg fa-fw"></i>
                <span class="asterisk">*</span>
                <div class="alert alert-danger custom-alert">
                'username mustbe larger than three chars'   
                </div>
            </div>
            
            <div class="form-group">
                <input class="form-control email" type="email" name="email" placeholder="Enter Valid Email" value="<?php if(isset($mail)){echo $mail;} ?>" />
                <i class="fa fa-envelope fa-lg fa-fw"></i>
                <span class="asterisk">*</span>
                <div class="alert alert-danger custom-alert">
                'Email cant be empty'   
                </div>
            </div>
            
            <input class="form-control" type="text" name="phone" placeholder="Enter Your Phone Number" value="<?php if(isset($phone)){echo $phone;} ?>"/>
            <i class="fa fa-phone fa-lg fa-fw"></i>
            <div class="form-group">
                <textarea class="form-control message" placeholder="Your Message!" name='message'  ><?php if(isset($msg)){echo $msg;} ?></textarea>
                <span class="asterisk">*</span>
                <div class="alert alert-danger custom-alert">
                    'message must be larger than then chars'   
                </div>
            </div>
            <input class="btn btn-primary " type="submit" value="Send Message"/>
            <i class="fa fa-send fa-lg fa-fw send-msg"></i>

        </form>
    </div>





<!-- jquery library -->
<script src="js/jquery-1.11.3.min"></script>
<!-- bootstrap library -->
<script src="js/bootstrap.min.js"></script>
<!-- Main JavaScript File -->
<script src="js/MyJSFunc.js"></script>
    <script>
        $(function () {
            'use strict';
            var userError = true,
                emailError = true,
                msgError = true;


            



            $('.username').blur(function (){
                if($(this).val().lenght < 4) {
                    $(this).css('border', '1px solid #F00');
                    $(this).parent().find('.custom-alert').fadeIn(200);
                    $(this).parent().find('.asterisk').fadeIn(100);
                    userError = true;
                } else {
                    $(this).css('border', '1px solid #080');
                    $(this).parent().find('.custom-alert').fadeOut(200);
                    $(this).parent().find('.asterisk').fadeOut(100);
                    userError = false;
                }
                
            });


            $('.email').blur(function (){
                if($(this).val() == '') {
                    $(this).css('border', '1px solid #F00');
                    $(this).parent().find('.custom-alert').fadeIn(200);
                    $(this).parent().find('.asterisk').fadeIn(100);
                    emailError = true;
                } else {
                    $(this).css('border', '1px solid #080');
                    $(this).parent().find('.custom-alert').fadeOut(200);
                    $(this).parent().find('.asterisk').fadeOut(100);
                    emailError = false;
                }
                
            });

            $('.message').blur(function (){
                if($(this).val() .length < 11) {
                    $(this).css('border', '1px solid #F00');
                    $(this).parent().find('.custom-alert').fadeIn(200);
                    $(this).parent().find('.asterisk').fadeIn(100);
                    msgError = true;
                } else {
                    $(this).css('border', '1px solid #080');
                    $(this).parent().find('.custom-alert').fadeOut(200);
                    $(this).parent().find('.asterisk').fadeOut(100);
                    msgError = false;
                }
            });


            $('.contact-form').submit(function (e) {
            if (userError === true || emailError === true || msgError === true) {
                e.preventDefault();
                $('.username , .email , .message ').blur();
            }
            })
    </script>
</body>
</html>