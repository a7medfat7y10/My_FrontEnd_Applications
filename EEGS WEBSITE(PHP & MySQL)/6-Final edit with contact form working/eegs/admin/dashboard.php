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
                <h1>EEGS Admin Dashboard</h1>
                <div class="row">
                    <div class="col-md-4">

                        <div class="stat st-members">
                            <i class="fa fa-users"></i>
                            <div class="info">
                                Total Members
                                <span><a href="members.php"><?php echo countItems('UserID','users'); ?></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat st-pending">
                           <i class="fa fa-user-plus"></i>
                           <div class="info">
                                Pending Members
                                <span><a href="members.php?do=Manage&page=Pending">
                                    <?php echo checkItem("RegStatus", "users", 0) ; ?>
                                </a></span>
                           </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat st-items">
                            <i class="fa fa-tag"></i>
                            <div class="info">
                                Our Events
                                <span><a href="events.php?do=view"><?php echo countItems('event_id','events'); ?></a></span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <?php 
                    $numUsers = 4; //number of users used to be shown in latest members
                    $latestUsers = getLatest("*", "users", "UserID" , $numUsers);
                    
                            ?>
        <div class="latest">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            
                            <div class="panel-heading">
                                <i class="fa fa-users"></i> Latest <?php echo $numUsers; ?> Registred Users
                                <span class="toggle-info pull-right">
                                    <i class="fa fa-plus fa-lg"></i>
                                </span>
                            </div>
                            
                            <div class="panel-body">
                                <ul class="list-unstyled latest-users">
                                <?php 
                                    if(! empty($latestUsers)) {
                                        foreach ($latestUsers as $user) {
                                            echo '<li>';
                                                echo $user['Username'];
                                                echo '<a href="members.php?do=Edit&userid=' . $user['UserID'] .'">';  
                                                    echo '<span class="btn btn-success pull-right">';
                                                        echo '<i class="fa fa-edit"></i>Edit';
                                                        if ($user['RegStatus'] == 0) {
                                                            echo "<a href='members.php?do=Activate&userid=" . $user['UserID'] . "' class='btn btn-info activate pull-right'><i class='fa fa-check'></i> Activate</a>";          
                                                         } 
                                                    echo '</span>';
    
                                                echo '</a>';
                                            echo '</li>';
                                        } 
                                    }else {
                                        echo 'There is no users to show';
                                    }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-tag"></i> Latest Events
                                <span class="toggle-info pull-right">
                                    <i class="fa fa-plus fa-lg"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                
                                <ul class="list-unstyled latest-users events">
                                <?php
                                $stmt = $con->prepare("SELECT * FROM events ORDER BY event_time DESC LIMIT 5");
                                $stmt->execute();
                                $rows = $stmt->fetchAll();
                                if (!empty($rows)) {
                                    foreach ($rows as $row) {
                                        ?>
                                        <li >
                                            <a class="title" href="events.php?do=single-event&eventid=<?php echo $row['event_id']; ?>">
                                                <?php echo  $row['event_title']; ?>
                                            </a>
                                            <a href="events.php?do=Edit&eventid= <?php echo $row['event_id'] ?> ">
                                                <span class="btn btn-success pull-right">
                                                    <i class="fa fa-edit"></i> Edit
                                                </span>
                                            </a>
                                            <a href="events.php?do=Delete&eventid= <?php echo $row['event_id'] ?> ">
                                                <span class="btn btn-danger pull-right">
                                                    <i class="fa fa-close fa-fw"></i> Delete
                                                </span>
                                            </a>

                                        </li>
                                    <?php
                                        }
                                } else {
                                    echo "There is no events to show";
                                }
                                    ?>
                                
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        

        <section class="copyright text-center">
        <div class="container">
            <p>&copy; Designed and Developed By <span>EEGS SUSC</span> IT Team <?php echo date("Y");?></p>
            
        </div>
        
        </section>
        <?php

        include $tpl . 'footer.php'; //include footer
    } else{
        header('Location: index.php'); //if he has not logged in redirect to log in page
        exit();
    }
    ob_end_flush();
    ?>