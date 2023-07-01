<?php 
require "header.php";
?>

    <main>
        <div>
            <h1>SignUp</h1>
            <?php
                if(isset($_GET['error']) ) {
                    if($_GET['error'] == "emptyfields") {
                        echo '<P>Fill all fields</P>';
                    }
                    else if($_GET['error'] == "invalidemailuid") {
                        echo '<P>Invalid Username and Email</P>';
                    }
                    else if($_GET['error'] == "invaliduid") {
                        echo '<P>Invalid Username </P>';
                    }
                    else if($_GET['error'] == "invalidemail") {
                        echo '<P>Invalid Email</P>';
                    }
                    else if($_GET['error'] == "passwordcheck") {
                        echo '<P>Password not Match</P>';
                    }
                    else if($_GET['error'] == "usertaken") {
                        echo '<P>Username is already taken</P>';
                    }
                }
                else if($_GET['signup'] == "success") {
                    echo '<P>SignUp successfully</P>';
                }
            ?>
            <!--sign up form-->
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="text" name="mail" placeholder="E-mail">
                <input type="password" name="pwd" placeholder="password">
                <input type="password" name="pwd-repeat" placeholder="ReEnter password">
                <button type="submit" name="signup-submit">SignUp</button>
            </form>
        </div>
    </main>


<?php 
require "footer.php";
?>