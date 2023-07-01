<?php

//poll.php

include('connect.php');
session_start();
$user = $_SESSION['user_id'];
if(isset($_SESSION['user_id'])) {
    if(!isset($_SESSION['voted'])){
        if(isset($_POST["poll_option"])) {
            $query = "
                INSERT INTO election_poll 
                (options, user_id) VALUES (?, ?)
            ";
            $data = array(
                $_POST["poll_option"], $user
            );
            $statement = $con->prepare($query);
            $statement->execute($data);
            $_SESSION['voted'] = 'yes';
        }
    }
    else {
        if(isset($_POST["poll_option"])) {
            $query = "
            UPDATE election_poll SET options=? WHERE user_id=?
            ";
            $data = array(
                $_POST["poll_option"], $user
            );
            $statement = $con->prepare($query);
            $statement->execute($data);
    
    
            // $query2 = "
            // DELETE * FROM tbl_poll WHERE options = 'uncounted'
            // ";
            // $statement2 = $con->prepare($query2);
            // $statement2->execute();
        }
    }
}

