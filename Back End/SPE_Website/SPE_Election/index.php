<?php
    include('connect.php');
    session_start();

    if(!isset($_SESSION['user_id']) ) {
        header('Location: login.php'); //redirect to login page
    }
        //first user as admin we add his data to the database directly then
        $user_id = $_SESSION['user_id'];
        //check if the user exist in database with pdo
        $stmt = $con->prepare("SELECT  * FROM election_poll WHERE user_id = ? "); //as i did in database 1 for admin 0 for user
        
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

        <style>
            /* Customize the label (the container) */
label.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
label.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
}
.yn {
    display: inline-block;
    /* background-color: #1a232e; */
    background-color: #205132;
    width: 100%;
    color: #FFF;
    text-align: center;
    border-radius: 6px;
}
.yn2 {
    display: inline-block;
    /* background-color: #1a232e; */
    background-color: #b61b1b;
    width: 100%;
    color: #FFF;
    text-align: center;
    border-radius: 6px;
}
.btn {
    /* background-color: #205132; */
    background-color: #1a232e;
    width:30% !important;
    margin:auto;
    color:#FFF
} 
.btn:hover {
    /* background-color: #1a232e; */
    background-color: #1a232e;
    color:#FFF
}
form {
      text-align: -o-center;
      text-align: center;
      text-align: -webkit-center;
}
        </style>
    </head>  
    <body>  
        <?php include('navbar.php'); ?>
        <div class="container">  
            <br/><br/>
            <h1 align="center">President Elections</h1>
            <div class="row">
                <div class="col-sm-12">
                    <div style="margin-bottom:10px"  >
                        <img class="img-circle img-responsive" src="alaa.jpeg" width="20%" style="margin:auto; min-width: 200px">

                          <h3 align="center">Mr.Youssef ElDemairy</h3>
                    </div>
                    <form method="post" id="poll_form" class="col-md-6 col-md-offset-3 row" >
                        <div class="radio" style="min-width:150px;max-width: 250px">
                            <label class="container"> <span class="yn">Yes</span>
                                <input type="radio" name="poll_option" class="poll_option" value="Yes" /> 
                                <span class="checkmark"></span> 
                            </label>
                        </div>
                        <div class="radio" style="min-width:150px;max-width: 250px">
                            <label class="container"> <span class="yn2">No</span>
                                <input type="radio" name="poll_option" class="poll_option" value="No" /> 
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <input type="submit" name="poll_button" id="poll_button" class="btn btn-block" style="color:#FFF" value="Vote" />
                    </form>
                </div>
                <div class="col-sm-12" >
                    <div id="poll_result">
                        
                    </div>
                </div>
            </div>
        </div>
         <br/><br/><br/>
        <section class="copyright text-center">
          <div class="container">
              <p>&copy; Designed and Developed By <span>SPE SUSC</span> IT Team <?php echo date("Y");?></p>
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
                                $("form").slideUp();
                               // window.location = 'show.php';
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