<?php

//ajax


//fetch_user.php
//fetch all other users except me
include('database_connection.php');

session_start();
//select all user except me
$query = "
SELECT * FROM login 
WHERE user_id != '".$_SESSION['user_id']."' 
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();



foreach($result as $row) {
    //get status using the function we made in the database_connection.php
    //make a variable $status which wull contain the online or offline
    $status = '';
    //make a variable that contain the unix time in seconds minus 10 seconds
    //strtotime — Parse about any English textual datetime description into a Unix timestamp
    $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
    //turning that timestamp into the date
    $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
    //use the function
    //it returns me the last activity time for the user and i will compare it with the current time stamp to check online
    $user_last_activity = fetch_user_last_activity($row['user_id'], $connect);
    //check if the time user last activity is larger than current time 
    //that means the user is online 
    

    
    
    if($user_last_activity > $current_timestamp) {
        $status = '<span class="label label-success">Online</span>';
    } else {
        $status = '<span class="label label-danger">Offline</span>';
    }

    //we will give the button 'start_chat' class start_chat and 
    //data-touserid = id of the user that i want to message
    //dat-tousername = username of the user i want to message
    ?>


                <div class="col-sm-3">
                    <div class="thumbnail">
                        <div class="caption text-center" onclick="location.href='#'">
                            <div class="position-relative">
                                <img src="layout/images/cartoon_avatar.png" style="width:72px;height:72px;" />
                            </div>
                            <h4 id="thumbnail-label" style="font-weight:bold">
                                <?php echo $row['username']; ?> 
                                <?php echo count_unseen_message($row['user_id'], $_SESSION['user_id'], $connect); ?> 
                                <?php echo fetch_is_type_status($row['user_id'], $connect) ; ?>
                            </h4>
                            <p><?php echo $status; ?></p>
                        </div>
                        <div class="caption card-footer text-center">
                            <?php
                                echo
                                '<button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$row['user_id'].'" data-tousername="'.$row['username'].'">
                                    Message
                                </button>';
                            ?>
                        </div>
                    </div>
                </div>


    <?php
}






