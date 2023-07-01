<?php 
if(isset($_POST['login-submit'])) {

    require "dbh.inc.php";

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];
    

    //check validate of fields data
    if (empty($mailuid) || empty($password) ) {
        header("Location: ../index.php?error=emptyfields");
        exit();
    }
    else {              
        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;"; //two ? require  ss down
        $stmt = mysqli_stmt_init($conn);
        //check if the statement works with the database
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt , "ss", $mailuid, $mailuid);   //here
            mysqli_stmt_execute($stmt);
           //check pass
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                if($pwdCheck == false) {
                    header("Location: ../index.php?error=wrongpwd");
                    exit();
                }
                else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];

                    header("Location: ../index.php?login=success");
                    exit();
                }
                else {
                    header("Location: ../index.php?error=wrongpwd");
                    exit();
                }
            }
        }
    }
}
else {
    header("Location: ../index.php");
    exit();
}
