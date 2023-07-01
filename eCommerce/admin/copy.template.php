<?php
    ob_start();
    $pageTitle = 'Categories';

    session_start(); //continue session of logging in
    //main if condition must be true to continue
    if(isset($_SESSION['Username'])) { //if the user logged in already 

    include 'init.php'; //init has header and navbar
            // Check for get method
            $do = '' ;
            if(isset($_GET['do'])) {
                $do = $_GET['do'] ;
            } else {
                $do = 'Manage' ; 
            }
//-------------------------------------------------------------------------------
            if($do == 'Manage') { 

            } elseif ($do == 'Add') { 

            } else if ($do == 'Insert') { 
            
            } else if ($do == 'Edit') { 
            
            } elseif ($do == 'Update') {

            } else if ($do == 'Delete') {

            }
//----------------------------------------------------------------------------------
    include $tpl . 'footer.php'; //include footer

    } else{
        header('Location: index.php'); //if he has not logged in redirect to log in page
        exit();
    }
    ob_end_flush();
?>