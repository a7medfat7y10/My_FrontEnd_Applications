<?php
ob_start();
include('connect.php');
session_start();

if(isset($_SESSION['user_id'])) {
    header('Location: index.php'); //redirect to dashboard page
}

//check if user come from http request
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //login page 
    if (isset($_POST['login'])) {
        $user_id = $_POST['id'];
        //first user as admin we add his data to the database directly then
        
        //check if the user exist in database with pdo
        $stmt = $con->prepare("SELECT  id FROM election_users WHERE id = ? "); //as i did in database 1 for admin 0 for user
        
        $stmt->execute(array($user_id));
        
        $get = $stmt->fetch();
        
        //fetch"جلب" all the record from database
        $count = $stmt->rowCount(); //check count of records in database 0 if nothing updated
        
        //if count > 0 this means the database contain record about this username
        if($count > 0) {
            $_SESSION['user_id'] = $get['id']; //register-create session user id
        
            header('Location: index.php'); //redirect to dashboard page
        exit();
        }
    
    } 
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

<div class="container login-page">
    <h1 class="text-center">
        <span class="log selected" data-class="login">Election Login</span> 
    </h1>
    <!--login form-->
    <form class="login" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <input class="form-control" type="text" name="id" autocomplete="off" placeholder="Enter your ID" required />
        <input class="btn btn-primary btn-block" type="submit" name="login" value="Login"  />
    </form>
</div>

<?php 
ob_end_flush();    
?>