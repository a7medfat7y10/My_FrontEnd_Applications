<?php 

    //functions must be in function.php


    //function to select all from login_details and fetch last_activity
    //it returns me the last activity time for the user and i will compare it with the current time stamp to check online
    function fetch_user_last_activity($user_id, $connect)
    {
        //selecting the last activity with the greater value 
        $query = "
            SELECT * FROM login_details 
            WHERE user_id = '$user_id' 
            ORDER BY last_activity DESC 
            LIMIT 1
        ";
        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        foreach($result as $row)
        {
            return $row['last_activity'];
        }
    }



    //function to get username by id of the user
    function get_user_name($user_id, $connect) {
        $query = "SELECT username FROM login WHERE user_id = '$user_id'";
        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        foreach($result as $row)
        {
        return $row['username'];
        }
    }

    //function to show the single chat history messages
    function fetch_user_chat_history($from_user_id, $to_user_id, $connect) {
        
        $query = "
            SELECT * FROM chat_message 
            WHERE
                (from_user_id = '".$from_user_id."' 
                AND to_user_id = '".$to_user_id."') 
            OR 
                (from_user_id = '".$to_user_id."' 
                AND to_user_id = '".$from_user_id."') 
            ORDER BY timestamp DESC
        "; //select the message from and to the two users

        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(); //has all the messages between the two users

        $output = '<ul class="list-unstyled">';
            foreach($result as $row) {
                    $user_name = '';
                //check if the id of the id of the sender  = the id from the sender in database
                //to print the name of the message sender beside it
                $dynamic_background = '';
                $chat_message = '';
                if($row["from_user_id"] == $from_user_id) {
                    //for the sender
                    //if status = 2 the message is deleted
                    if($row["status"] == '2') {
                        $chat_message = '<em>This message has been removed</em>';
                        $user_name = '<b class="text-success">You</b>';
                    } else {
                        //for status  0,1 
                        $chat_message = $row['chat_message'];
                        $user_name = '<button type="button" class="btn btn-danger btn-xs remove_chat" id="'.$row['chat_message_id'].'">x</button>&nbsp;<b class="text-success">You</b>';
                    }
                    $dynamic_background = 'background-color:#ffe6e6;';
                } else {
                    //for the reciever
                    //if status = 2 the message is deleted
                    if($row["status"] == '2') {
                        $chat_message = '<em>This message has been removed</em>';
                    } else {
                        //for status  0,1
                        $chat_message = $row["chat_message"];
                    }
                    $user_name = '<b class="text-danger">'.get_user_name($row['from_user_id'], $connect).'</b>';
                    $dynamic_background = 'background-color:#ffffe6;';
                }
                $output .= '
                <li style="border-bottom:1px dotted #ccc;padding-top:8px; padding-left:8px; padding-right:8px;'.$dynamic_background.'">
                <p>'.$user_name.' - '.$chat_message.'
                    <div align="right">
                    - <small><em>'.$row['timestamp'].'</em></small>
                    </div>
                </p>
                </li>
                ';
            }
            $output .= '</ul>';
            $query = "
            UPDATE chat_message 
            SET status = '0' 
            WHERE from_user_id = '".$to_user_id."' 
            AND to_user_id = '".$from_user_id."' 
            AND status = '1'
            ";
            $statement = $connect->prepare($query);
            $statement->execute();
            return $output;
    }


    //function to use in fetch_user to get notification 
    function count_unseen_message($from_user_id, $to_user_id, $connect) {
        $query = "
            SELECT * FROM chat_message 
            WHERE from_user_id = '$from_user_id' 
            AND to_user_id = '$to_user_id' 
            AND status = '1'
        ";
        $statement = $connect->prepare($query);
        $statement->execute();
        $count = $statement->rowCount();
        $output = '';
        if($count > 0) {
            $output = '<span class="label label-success">'.$count.'</span>';
        }
        return $output;
    }
    
    //function to fetch the is_type variable
    function fetch_is_type_status($user_id, $connect)
    {
        $query = "
        SELECT is_type FROM login_details 
        WHERE user_id = '".$user_id."' 
        ORDER BY last_activity DESC 
        LIMIT 1
        "; 
        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $output = '';
        foreach($result as $row) {
            if($row["is_type"] == 'yes') {
                $output = ' - <small><em><span class="text-muted">Typing...</span></em></small>';
            }
        }
        return $output;
    }


    //group chat
    function fetch_group_chat_history($connect) {
    $query = "
        SELECT * FROM chat_message 
        WHERE to_user_id = '0'  
        ORDER BY timestamp DESC
    ";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $output = '<ul class="list-unstyled">';
    foreach($result as $row) {
        $user_name = '';
        $chat_message = '';
        $dynamic_background = '';
        
        if($row['from_user_id'] == $_SESSION['user_id']) {
            if($row["status"] == '2') {
                $chat_message = '<em>This message has been removed</em>';
                $user_name = '<b class="text-success">You</b>';
            } else {
                $chat_message = $row['chat_message'];
                $user_name = '<button type="button" class="btn btn-danger btn-xs remove_chat" id="'.$row['chat_message_id'].'">x</button>&nbsp;<b class="text-success">You</b>';
            }
            $dynamic_background = 'background-color:#ffe6e6;';
        }
        else {
            if($row["status"] == '2') {
                $chat_message = '<em>This message has been removed</em>';
            } else {
                $chat_message = $row['chat_message'];
            }
            $user_name = '<b class="text-danger">'.get_user_name($row['from_user_id'], $connect).'</b>';
            $dynamic_background = 'background-color:#ffffe6;';
            }
            $output .= '
            <li style="border-bottom:1px dotted #ccc;padding-top:8px; padding-left:8px; padding-right:8px;'.$dynamic_background.'">
            <p>'.$user_name.' - '.$chat_message.' 
                <div align="right">
                - <small><em>'.$row['timestamp'].'</em></small>
                </div>
            </p>
            
            </li>
            ';
    }
    $output .= '</ul>';
    return $output;
    }
