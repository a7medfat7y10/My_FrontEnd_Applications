$(document).ready(function(){

    fetch_user();

    //every five secs will refresh updating last activity time and refresh fetching users data
    setInterval(function(){
        update_last_activity();
        fetch_user();
        update_chat_history_data();
        fetch_group_chat_history();
    }, 5000);


    //fetch users data 
    function fetch_user() {
        $.ajax({
            url:"fetch_user.php",
            method:"POST",
            success:function(data){
                $('#user_details').html(data);
            }
        })
    }


    //updating last activity time to now
    function update_last_activity() {
        $.ajax({
            url:"update_last_activity.php",
            success:function() {

            }
        })
    }


    //making the chat box and use chat dialog ui plugin in jquery
    function make_chat_dialog_box(to_user_id, to_user_name) {

        var modal_content = '<div id="user_dialog_' + to_user_id +
                            '" class="user_dialog" title="You have chat with '+to_user_name+'">';//the header of the chat

            modal_content += '<div style="height:400px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;" class="chat_history" data-touserid="'+to_user_id+'" id="chat_history_'+to_user_id+'">';
                modal_content += fetch_user_chat_history(to_user_id);
            modal_content += '</div>'; //the div that will display the chat history messages
        
            modal_content += '<div class="form-group">';
            
                modal_content += '<textarea name="chat_message_'+to_user_id+'" id="chat_message_'+to_user_id+'" class="form-control chat_message"></textarea>';
                //text area contain the message that u will send
            
            modal_content += '</div><div class="form-group" align="right">';//div to contain send button
                modal_content+= '<button type="button" name="send_chat" id="'+to_user_id+'" class="btn btn-info send_chat">Send</button></div></div>';
                //the send button of the message

        //append the header and the history area and message area and send button to the parent #user_model_details in index.php page
        $('#user_model_details').html(modal_content);
    }
    //when clicking on start chat button beside the user
    $(document).on('click', '.start_chat', function() {

        var to_user_id = $(this).data('touserid');
        var to_user_name = $(this).data('tousername');
        
        make_chat_dialog_box(to_user_id, to_user_name);
        
        //using jquery dialog ui chat plugin
        $("#user_dialog_" + to_user_id).dialog({
            autoOpen:false,
            width:400
        });
        $('#user_dialog_' + to_user_id).dialog('open');
        //trigger the emoji library
        $('#chat_message_'+to_user_id).emojioneArea({ //emojioneArea
            pickerPosition:"top",
            toneStyle: "bullet"
        });
    });


    //send message
    //when clicking on send after writing a message to send it
    $(document).on('click', '.send_chat', function() {

        var to_user_id = $(this).attr('id');
        var chat_message = $('#chat_message_'+to_user_id).val();

        $.ajax({
            url:"insert_chat.php",
            method:"POST",
            data:{to_user_id:to_user_id, chat_message:chat_message},
            success:function(data)
            {
                //when success clear the textarea and print messages in #chat_history_.. 
                //$('#chat_message_'+to_user_id).val('');
                var element = $('#chat_message_'+to_user_id).emojioneArea();
                element[0].emojioneArea.setText('');
                $('#chat_history_'+to_user_id).html(data);
            }
        })
    });

    //fetch the chat history for the reciever
    function fetch_user_chat_history(to_user_id) {
        $.ajax({
            url:"fetch_user_chat_history.php",
            method:"POST",
            data:{to_user_id: to_user_id},
            success:function(data){
                $('#chat_history_'+to_user_id).html(data);
            }
        })
    }
    //this function will be executed each fuve seconds to update the chat history
    //it uses the previous function to fetch the chat history when the sender changes
    function update_chat_history_data() {
        $('.chat_history').each(function(){
            var to_user_id = $(this).data('touserid');
            fetch_user_chat_history(to_user_id);
        });
    }
    //close dialog box
    $(document).on('click', '.ui-button-icon', function(){
        $('.user_dialog').dialog('destroy').remove();
    });


//These functions to show if the user you message is typing
    //The text area(.chat_message) when focus it will send the variable is_type = yes
    $(document).on('focus', '.chat_message', function(){
        var is_type = 'yes';
        $.ajax({
            url:"update_is_type_status.php",
            method:"POST",
            data:{is_type: is_type},
            success:function()
            {

            }
        })
    });
    //The text area(.chat_message) when blur it will send the variable is_type = no
    $(document).on('blur', '.chat_message', function(){
    var is_type = 'no';
        $.ajax({
            url:"update_is_type_status.php",
            method:"POST",
            data:{is_type: is_type},
            success:function() {
                
            }
        })
    });

    

//Group chat 
    $('#group_chat_dialog').dialog({
        autoOpen:false,
        width:400
    });
    //make the dialog trigger for group chat
    $('#group_chat').click(function(){
        //when clicking on group chat button 
        $('#group_chat_dialog').dialog('open');
        //chang the default value of input from no make it yes
        $('#is_active_group_chat_window').val('yes'); //the hidden input
        //after making value yes use the function
        fetch_group_chat_history();
    });
    $('#send_group_chat').click(function(){
        var chat_message = $('#group_chat_message').html();
        var action = 'insert_data';
        if(chat_message != '') {
            $.ajax({
                url:"group_chat.php",
                method:"POST",
                data:{chat_message: chat_message, action: action},
                success:function(data) {
                    $('#group_chat_message').html('');
                    $('#group_chat_history').html(data);
                }
            })
        }
    });
    //function used when we click on the group chat button it checks if the value of the hidden input yes
    //it will send the data gto group_chat which will fetch the history group chat
    function fetch_group_chat_history() {
        var group_chat_dialog_active = $('#is_active_group_chat_window').val();
        var action = "fetch_data";
        if(group_chat_dialog_active == 'yes') {
            $.ajax({
                url:"group_chat.php",
                method:"POST",
                data:{action: action},
                success:function(data)
                {
                    $('#group_chat_history').html(data);
                }
            })
        }
    }


    //upload image in chat group
    //when we change the image in file tag by iploading
    $('#uploadFile').on('change', function(){

        $('#uploadImage').ajaxSubmit({
            //display the uploaded image in this tag
            target: "#group_chat_message",
            resetForm: true
        });
    });
    


    

    //remove chat for both  single chat and group chat
    $(document).on('click', '.remove_chat', function(){
        var chat_message_id = $(this).attr('id');
        if(confirm("Are you sure you want to remove this chat?")) {
            //if the confirm return true (yes)
            $.ajax({
                url:"remove_chat.php",
                method:"POST",
                data:{chat_message_id:chat_message_id},
                success:function(data) {
                    update_chat_history_data();
                }
            })
        }
    });

});