<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login System</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
       <header>
            <div>
            <?php 
                if (isset($_SESSION['userId'])) {
                    echo '
                    <!--logout button form-->
                    <form action="includes/logout.inc.php" method="post">
                        <button type="submit" name="logout-submit">LogOut</button>
                    </form>';
                } else {
                    echo '
                    <!--login form-->
                    <form action="includes/login.inc.php" method="post">
                        <input type="text" name="mailuid" placeholder="UserName/E-mail..">
                        <input type="password" name="pwd" placeholder="Password..">
                        <button type="submit" name="login-submit">Login</button>
                    </form>
    
                    <!--signup button-->
                    <a href="signup.php">Signup</a>';
                }
            ?>  

                
            
            </div>
       </header> 
