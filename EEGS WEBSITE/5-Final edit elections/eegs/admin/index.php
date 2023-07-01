<?php 
    session_start();
    $noNavbar = '' ; //navbar will not appear
    $pageTitle = 'Login';
    if(isset($_SESSION['Username'])) {
        header('Location: dashboard.php');
        exit();
        //redirect to dashboard page
    }


    include 'init.php';
    

    //check if user come from http request
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $hashedPass = sha1($password);
        //first user as admin we add his data to the database directly then
        //check if the user exist in database with pdo
        $stmt = $con->prepare("SELECT UserID, Username, Password FROM users WHERE Username = ? AND Password = ? AND GroupID = 1 LIMIT 1"); //as i did in database 1 for admin 0 for user
        $stmt->execute(array($username, $hashedPass));

        //fetch"جلب" all the record from database
        $row = $stmt->fetch();  //array contain the record data
        $count = $stmt->rowCount(); //check count of records in database 0 if nothing updated
        //if count > 0 this means the database contain record about this username
        if($count > 0) {
            $_SESSION['Username'] = $username; //register-create session name
            $_SESSION['ID'] = $row['UserID']; //register session id 
            header('Location: dashboard.php'); //redirect to dashboard page
            exit();
        }
    }

?>
    <div class="container">
        <div class="row">
            <form class=" col-sm-4 col-sm-offset-4 login " style="margin-top:15%"  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST"> <!--data to the same page-->
                <h1 class="text-center">Admin Login</h1>
                <input class="user form-control" type="text" name="user" placeholder="Username" autocomplete="off" />
                <input class="pass form-control" type="password" name="pass" placeholder="Password" autocomplete="new-password" />
                <input class="logbtn btn btn-primary btn-block" type="submit" value="Login"/>
            </form>
        </div>
    </div>

<?php include $tpl . 'footer.php'; ?>