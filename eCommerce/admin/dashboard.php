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
                <h1>Dashboard</h1>
                <div class="row">
                    <div class="col-md-3">

                        <div class="stat st-members">
                            <i class="fa fa-users"></i>
                            <div class="info">
                                Total Members
                                <span><a href="members.php"><?php echo countItems('UserID','users'); ?></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
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
                    <div class="col-md-3">
                        <div class="stat st-items">
                            <i class="fa fa-tag"></i>
                            <div class="info">
                                Total Items
                                <span><a href="items.php"><?php echo countItems('Item_ID','items'); ?></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat st-comments">
                            <i class="fa fa-comments"></i>
                            <div class="info">
                                Total Comments
                                <span><a href="comments.php"><?php echo countItems('c_id','comments'); ?></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php 
                    $numUsers = 4; //number of users used to be shown in latest members
                    $latestUsers = getLatest("*", "users", "UserID" , $numUsers);
                    $numItems = 4; //number of latest items
                    $latestItems = getLatest("*", 'items' , 'Item_ID', $numItems);
                            ?>
        <div class="latest">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
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
                                                            echo "<a href='members.php?do=Activate&userid=" . $user['UserID'] . "' class='btn btn-info activate pull-right'><i class='fa fa-close'></i> Activate</a>";          
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
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-tag"></i> Latest Items
                                <span class="toggle-info pull-right">
                                    <i class="fa fa-plus fa-lg"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                            <ul class="list-unstyled latest-users">
                                <?php 
                                    if(! empty($latestItems)) {
                                        foreach ($latestItems as $item) {
                                            echo '<li>';
                                                echo $item['Name'];
                                                echo '<a href="items.php?do=Edit&itemid=' . $item['Item_ID'] .'">';  
                                                    echo '<span class="btn btn-success pull-right">';
                                                        echo '<i class="fa fa-edit"></i>Edit';
                                                        if ($item['Approve'] == 0) {
                                                            echo "<a href='items.php?do=Approve&itemid=" . $item['Item_ID'] . "' class='btn btn-info activate pull-right'><i class='fa fa-check'></i> Approve</a>";          
                                                         } 
                                                    echo '</span>';
    
                                                echo '</a>';
                                            echo '</li>';
                                        }
                                    } else {
                                        echo 'There is No Record To show ';
                                    }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            
                            <div class="panel-heading">
                                <i class="fa fa-users"></i> Latest Comments
                                <span class="toggle-info pull-right">
                                    <i class="fa fa-plus fa-lg"></i>
                                </span>
                            </div>
                            
                            <div class="panel-body">
                                <?php 
                                    $stmt = $con->prepare("SELECT
                                    comments.*,  users.Username AS Member
                                FROM
                                    comments
                                INNER JOIN
                                    users
                                ON
                                    users.UserID = comments.user_id
                                ORDER BY c_id DESC
                                    ");
                                //execute the statement
                                $stmt->execute();
                                //assign all the data to avariable
                                $comments = $stmt->fetchAll();
                                if(! empty($comments)) {
                                    foreach ($comments as $comment) {
                                        echo '<div class="comment-box">';
                                            echo '<span class="member-name">';
                                                echo '<a style="text-decoration:none;color:#555" href="members.php?do=Edit&userid=' . $comment['user_id'] . '"> ' . $comment['Member'] . '</a>'; 
                                            echo '</span>';
                                            echo '<p class="member-comment">' . $comment['comment'] . '</p>';
                                            echo "
                                                <a href='comments.php?do=Edit&comid=" . $comment['c_id'] . "' class='btn btn-success'><i class='fa fa-edit'></i> Edit</a>
                                                <a href='comments.php?do=Delete&comid=" . $comment['c_id'] . "' class='btn btn-danger confirmation'><i class='fa fa-close'></i> Delete</a>";
                                                if ($comment['status'] == 0) {
                                                    echo "<a href='comments.php?do=Approve&comid=" . $comment['c_id'] . "' class='btn btn-info activate'><i class='fa fa-check'></i> Approve</a>";          
                                                }       
                                        
                                        echo '</div>';
                                    }
                                } else {
                                    echo 'There is no comments to show';
                                }
                                
                                ?>
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