<?php 
    include_once('db.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- IE Meta-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Mobile Meta-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Facebook system</title>
        <!-- Bootstrap library -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <!-- normalize library  for good reset-->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- font-awesome icons library -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Main Css File -->
        <link rel="stylesheet" href="css/Style.css">
        <!-- to Edit in Bootstrap Css File -->
        <link rel="stylesheet" href="css/BootstrapEdits.css">
        <!-- to open Html5 Elements in Internet Expolrer -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body >
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h1 class="text-center" >Facebook Post System</h1>
                    <div class="card">
                        <form class="form-inline">
                            <div class="input-field">
                                <label for="post-text">Write Something Here</label>
                                <br>                                <br>

                                <textarea class="textarea form-control" id="post-text"></textarea>
    
                            </div>
                            <input type="submit" value="POST" class="btn btn-primary" disabled >
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div id="posts-container " class="posts-container col-md-10 col-md-offset-1 ">
                    
                </div>
            </div>
        </div>



        <!-- jquery library -->
        <script src="js/jquery-1.11.3.min.js"></script>
        <!-- bootstrap library -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Main JavaScript File -->
        <script src="js/MyJSFunc.js"></script>
        <script>
            $(function() {
                $('.textarea').on('keyup',function() {
                    if (($('.textarea').val()) !== "") {
                        $('input[type="submit"]').prop('disabled', false);
                    }else{
                        $('input[type="submit"]').prop('disabled', true);
                    }
                })
                $(window).on('load', function () {
                    $.ajax({
                        url: "server.php",
                        type: "GET",
                        success: function(data) {
                        $(".posts-container").html(data);
                        }
                    }) 
                })  
                var user = 'Ahmed';
                var p = $('.textarea').val();

                $('input[type="submit"]').on('click' , function (a) {
                    a.preventDefault();
                    $.ajax({
                        url: "add.php?n=" + user + "&p=" + post ,
                        type: "GET",
                        success: function(data) {
                        $(".posts-container").html(data);
                        }
                    }) 
                    
                }) 
                
            })
        </script>
    </body>
</html>