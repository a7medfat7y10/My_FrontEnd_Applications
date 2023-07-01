<?php

//ajax recieving data (to user id) fetch_user_chat_history jquery  function from index.php 
//then we will use this id sent by post to execute the php function  fetch_user_chat_history in database_connection



include('database_connection.php');

session_start();

echo fetch_user_chat_history($_SESSION['user_id'], $_POST['to_user_id'], $connect);


