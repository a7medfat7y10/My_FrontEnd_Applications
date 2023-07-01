<?php

//recieving ajax data (id of the message u want to delete)

include('database_connection.php');

if(isset($_POST["chat_message_id"])) {
    $query = "
        UPDATE chat_message 
        SET status = '2' 
        WHERE chat_message_id = '".$_POST["chat_message_id"]."'
    ";
    $statement = $connect->prepare($query);
    $statement->execute();
}

