<?php
    ob_start();
    session_start();
    $pageTitle = 'Login';

    if(isset($_SESSION['user'])) {
    header('Location: index.php'); //redirect to dashboard page
    }

    include 'init.php';

    //check if user come from http request
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        //login page 
        if (isset($_POST['login'])) {
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $hashedPass = sha1($pass);
            //first user as admin we add his data to the database directly then
            
            //check if the user exist in database with pdo
            $stmt = $con->prepare("SELECT  UserID, Username, Password FROM users WHERE Username = ? AND Password = ? "); //as i did in database 1 for admin 0 for user
            
            $stmt->execute(array($user, $hashedPass));
            
            $get = $stmt->fetch();
            
            //fetch"جلب" all the record from database
            $count = $stmt->rowCount(); //check count of records in database 0 if nothing updated
            
            //if count > 0 this means the database contain record about this username
            if($count > 0) {
            $_SESSION['user'] = $user; //register-create session name 
            $_SESSION['uid'] = $get['UserID']; //register-create session user id
            
            header('Location: index.php'); //redirect to dashboard page
            exit();
            }
        
        } else {
            //sikgn up page
            $formErrors = array();

            $username = $_POST['username'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];
            $email = $_POST['email'];
            //validate username
            if (isset($username)) {
                $filteredUser = filter_var($username, FILTER_SANITIZE_STRING);
                if(strlen($filteredUser) < 4) {
                    $formErrors[] = 'username must be larger than four characters';
                }

            }
            //validate password
            if (isset($password) && isset($password2)) {
                //must check empty before hashing the pass because the empty pass has hash pass
                if(empty($password)) {
                    $formErrors[] = 'Sorry Password Cant Be Empty';
                }
                
                if(sha1($password) !== sha1($password2) ) {
                    $formErrors[] = 'Sorry Password dont match';
                }

            }
            
            if (isset($email)) {
                $filteredEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
                if(filter_var($filteredEmail, FILTER_VALIDATE_EMAIL) != true) {
                    $formErrors[] = 'This Email is not valid';
                }

            }

            //check if no errors proceed the user add
            if (empty($formErrors)) {

                //check existence of the username 
                $check = checkItem ("Username", "users", $username);


                if ($check == 1) {
                    $formErrors[] = 'user is already exist';
                } else {
            
                    //Insert info from form to  database 
                    $stmt = $con->prepare("INSERT INTO 
                                                users(Username, Password, Email, FullName, RegStatus ,Date )
                                            VALUES (?, ?, ?, ' ',  0 , now() ) ");
                    $stmt->execute(array($username, sha1($password), $email));
                    $succesMsg = 'User Added Successfully';
                }
            }


        }
    } 

   
?>

<div class="container login-page">
    <h1 class="text-center">
        <span class="log selected" data-class="login">Login</span> | <span class="sign"  data-class="signup">Signup</span> 
    </h1>
    <!--login form-->
    <form class="login" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <input class="form-control" type="text" name="username" autocomplete="off" placeholder="Type your username" required />
        <input class="form-control" type="password" name="password" autocomplete="new-password" placeholder="Type your password"/>
        <input class="btn btn-primary btn-block" type="submit" name="login" value="Login"  />
    </form>
    <!--signup form-->
    <form class="signup" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="input-container">
            <input pattern=".{4,8}" title="Username must be between 4 and 8 characters"
             class="form-control" type="text" name="username" autocomplete="off" placeholder="Type your username" required/>   
        </div>
        <div class="input-container">
            <input class="form-control" type="password" name="password" autocomplete="new-password" placeholder="Type your password" required/>
        </div>
        <div class="input-container">
            <input class="form-control" type="password" name="password2" autocomplete="new-password" placeholder="Re-Enter Your password" required/>
        </div>
        <div class="input-container">
            <input class="form-control" type="email" name="email" placeholder="Type your Valid Email" required/>    
        </div>
        <input class="btn btn-success btn-block" type="submit" name="signup" value="SignUp"  />
    </form>

    <div class="the-errors text-center">
        <?php
            if(!empty($formErrors)) {
                foreach($formErrors as $error) {
                    echo $error . '<br/>';
                }
            }
            if (isset($succesMsg)) {
                echo '<div class="alert alert-success">'.  $succesMsg .'</div>' ;
            }
        ?>
    </div>
</div>

<?php 
    include $tpl . 'footer.php';
    ob_end_flush();    
?>