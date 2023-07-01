<?php
    ob_start();
    //the page after logging in
    session_start(); //continue session of logging in
    
    if(isset($_SESSION['Username'])) { //if the user logged in already

        $pageTitle = 'Dashboard';

        include 'init.php'; //init has header and navbar
        ?>
        <div class="home-stats">
            <div class="container  text-center">
                <h1>Library Admin Dashboard</h1>
                <div class="row">
                    <div class="col-md-6">

                        <div class="stat st-members">
                            <i class="fa fa-users"></i>
                            <div class="info">
                                Total Admins
                                <span><a href="members.php"><?php echo countItems('UserID','users'); ?></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="stat st-items">
                            <i class="fa fa-tag"></i>
                            <div class="info">
                                Books
                                <span><a href="books.php?do=view"><?php echo countItems('book_id','books'); ?></a></span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    
        <?php

        include $tpl . 'footer.php'; //include footer
    } else{
        header('Location: index.php'); //if he has not logged in redirect to log in page
        exit();
    }
    ob_end_flush();
    ?>