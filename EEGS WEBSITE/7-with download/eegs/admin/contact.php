<?php
    ob_start();
    //the page after logging in
    session_start(); //continue session of logging in
    
    if(isset($_SESSION['Username'])) { //if the user logged in already

        $pageTitle = 'Contact';

        include 'init.php'; //init has header and navbar


        $stmt = $con->prepare("SELECT * FROM contact  ORDER BY date DESC");
                //execute the statement
                $stmt->execute();
                //assign all the data to avariable
                $rows = $stmt->fetchAll();

                if (! empty($rows)) {
                ?>
                    <h1 align='center'>Messages</h1>
                    <div class="container">
                        <div class="row">
                            <?php
                            foreach($rows as $row) { ?>

                            <div class="thumbnail col-sm-6 col-sm-offset-3" style="padding:2%;border:1px solid #EEE;margin-bottom:2%;background-color: #1a2334;color: #FFF;">
                                <div class="text-center">
                                    <span style="color:#1e7e34">Date:</span> <?php echo $row['date'];?>
                                </div>
                                <div class="text-center">
                                    <span style="color:#1e7e34">Name:</span> <?php echo $row['fullname'];?>
                                </div>
                                <div class="text-center">
                                    <span style="color:#1e7e34">E-Mail:</span> <?php echo $row['email'];?>
                                </div>
                                <div class="text-center">
                                    <span style="color:#1e7e34">Subject:</span> <?php echo $row['subject'];?>
                                </div>
                                <div class="text-center">
                                    <span style="color:#1e7e34">Message:</span> <?php echo $row['message'];?>
                                </div>
                            </div>        
                            <?php }?>
                        </div>
                    </div>
        
                        
                    

                    
            <?php } else {
                echo '<div class="container">';
                    echo '<h1>Messages </h1>';    
                    echo '<div class="alert alert-info">There is no Messages to show </div>';    
                echo '</div>';
            } ?>

        


        <?php


        include $tpl . 'footer.php'; //include footer
    } else{
        header('Location: index.php'); //if he has not logged in redirect to log in page
        exit();
    }
    ob_end_flush();
    ?>