<?php
    include('connect.php');
    session_start();

    if(!isset($_SESSION['user_id']) ) {
        header('Location: login.php'); //redirect to login page
    }
        //first user as admin we add his data to the database directly then
        $user_id = $_SESSION['user_id'];
        //check if the user exist in database with pdo
        $stmt = $con->prepare("SELECT  * FROM tbl_poll WHERE user_id = ? "); //as i did in database 1 for admin 0 for user
        
        $stmt->execute(array($user_id));
        
        $get = $stmt->fetch();
        
        //fetch"جلب" all the record from database
        $count = $stmt->rowCount();
        if($count > 0) {
            $_SESSION['voted'] = 'yes';
        }


?>
<html>  
    <head>  
        <title>President Elections</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <link rel="stylesheet" href="layout/css/style.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>  
    <body>  
        <?php include('navbar.php'); ?>
        <div class="container">  
            <br />  
            <br />
           <br />
            <h2 align="center">President Elections</h2><br />
            <h3>Vote Now</h3>
            <div class="row">
                <div class="col-sm-6">
                    <form method="post" id="poll_form">
                        
                            <br />
                        <div class="radio">
                            <label><h4><input type="radio" name="poll_option" class="poll_option" value="Ahmed" /> Ahmed </h4></label>
                        </div>
                        <div class="radio">
                            <label><h4><input type="radio" name="poll_option" class="poll_option" value="Mohamed" /> Mohamed </h4></label>
                        </div>
                        <br />
                        <input type="submit" name="poll_button" id="poll_button" class="btn btn-primary" value="Vote" />
                    </form>
                    <br />
                </div>
                <div class="col-sm-6">
                    <br />
                    <br />
                    <br />
                    <div id="poll_result">
                        
                    </div>
                </div>
            </div>
        </div>
        <section class="copyright text-center">
        <div class="container">
            <p>&copy; Designed and Developed By <span>EEGS SUSC</span> IT Team <?php echo date("Y");?></p>
            
        </div>
        
        </section>



        <script>  
            $(document).ready(function(){
                

                //to show the data coming from the fetch poll and put it in the #poll_result
                setInterval(function(){
                    fetch_poll_data();
                }, 2000);
                

                function fetch_poll_data()
                {
                    $.ajax({
                        url:"fetch_poll_data.php",
                        method:"POST",
                        success:function(data)
                        {
                            $('#poll_result').html(data);
                        }
                        })  
                }
                
                $('#poll_form').on('submit', function(event){
                    event.preventDefault();
                    var poll_option = '';
                    //check if the  radio checked
                    $('.poll_option').each(function(){
                        if($(this).prop("checked")) {
                            poll_option = $(this).val();
                            document.cookie = "username=Vote; expires=Thu, 9 April 2020 12:00:00 UTC; path=/";
                        }
                    });
                    if(poll_option != '') {
                        $('#poll_button').attr("disabled", "disabled");
                        var form_data = $(this).serialize();
                        $.ajax({
                            url:"poll.php",
                            method:"POST",
                            data:form_data,
                            success:function(data)
                            {
                                $('#poll_form')[0].reset();
                                $('#poll_button').attr('disabled', false);
                                fetch_poll_data();
                                
                                alert("Poll Submitted Successfully");
                            }
                        });
                    }
                    else {
                        alert("Please Select Option");
                    }
                });
            });  
        </script>
    </body>  
</html>