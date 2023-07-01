<?php

include('database_connection.php'); //includes the connect and functions

session_start();

if(!isset($_SESSION['user_id']))
{
 header('location:login.php');
}
?>

<html>  
    <head>  
        <title>Chat Application using PHP Ajax Jquery</title>  
        <!--jquery ui for the dialog-->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!--bootstrap 3-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!--emoji library-->
        <link rel="stylesheet" href="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.css">
        <link rel="stylesheet" href="layout/css/chat.css">
        
        <!-- Jquery-->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <!--jquery ui for the dialog-->
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!--emoji library-->
        <script src="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.js"></script>
        <!--Jquery Ajax Form Plugin-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
        <script src="layout/js/chat.js"></script>
    </head>  
    <body>  
        <div class="container " style="padding:0">
            <br />
    
            <div class="" style="height:40px;margin-top:0;padding-right:15px;padding-left:15px">
                <div class="chat" style="display:inline;float:left ; font-size:20;font-weight:bold">CHAT!</div>
                <div align="right">
                    <a class="btn btn-danger btn-xs" style=" display: inline;float: right;" href="logout.php" >Logout</a></p>  
                </div>
            </div>
            <br />
            <div class="row" style="margin-bottom:30px">
                <div class="col-sm-12" style="margin-bottom:30px">
                    <p align="center">
                        <h3 align="center" style="color: #847272;">Welcome to our Chat App <span style="font-weight:bold;color: #685c5c;font-size: 19px;"><?php echo $_SESSION['username']; ?></span> </h3>
                        <br>
                          
                </div>
                <br>
                <br>
                <div align="center" class="col-sm-12">
                    <input type="hidden" id="is_active_group_chat_window" value="no" />
                    <button type="button" name="group_chat" id="group_chat" class="btn btn-warning btn-sm">Group Chat</button>
                </div>
            </div>

            <!--For the single chat-->
            <div class="table-responsive">
                <!-- this will have the ajax fetch_user.php to be shown here -->
                <div id="user_details"></div> 
                <!-- this will have the chat dynamic box-->
                <div id="user_model_details"></div>
            </div>
        </div>
        <!--For the group chat Dynamic box-->
        <div id="group_chat_dialog" title="Group Chat Window">
            <div id="group_chat_history" style="height:400px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;">
            </div>
            <div class="form-group">
                <!--<textarea name="group_chat_message" id="group_chat_message" class="form-control"></textarea>!-->
                <div class="chat_message_area">
                    <div id="group_chat_message" contenteditable class="form-control">

                    </div>
                    <div class="image_upload">
                        <form id="uploadImage" method="post" action="upload.php">
                            <label for="uploadFile"><img src="layout/images/upload.png" /></label>
                            <input type="file" name="uploadFile" id="uploadFile" accept=".jpg, .png" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="form-group" align="right">
                <button type="button" name="send_group_chat" id="send_group_chat" class="btn btn-info">Send</button>
            </div>
        </div>

    </body>  
</html>  