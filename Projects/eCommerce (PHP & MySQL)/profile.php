<?php
    session_start();
    $pageTitle = 'Profile';
    include 'init.php';

    if(isset($_SESSION['user'])) {
        $getUser = $con->prepare("SELECT * FROM users WHERE Username = ?");
        $getUser->execute(array($sessionuser));
        $info = $getUser->fetch();
?>
    <h1 class="text-center">My Profile</h1>
    <div class="information block">
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">My Information</div>
                <div class="panel-body">
                    <ul class="list-unstyled">
                        <li>
                            <i class="fa fa-unlock-alt fa-fw"></i>
                            <span>Login Name</span> : <?php echo $info['Username'] ?>  
                        </li>
                        <li>
                            <i class="fa fa-envelope-o fa-fw"></i>
                            <span>Email</span> : <?php echo $info['Email'] ?> 
                        </li> 
                        <li>
                            <i class="fa fa-user fa-fw"></i>
                            <span>Full Name</span> : <?php echo $info['FullName'] ?>  
                        </li>
                        <li>
                            <i class="fa fa-calendar fa-fw"></i>
                            <span>Register Date</span> : <?php echo $info['Date'] ?>  
                        </li>
                        <li>
                            <i class="fa fa-tags fa-fw"></i>
                            <span>Favourite Category</span> : 
                        </li>
                    </ul>
                    <a href="#" class="btn btn-default">Edit Information</a>
                </div>
            </div>
        </div>
    </div>
    <div id="myads" class="my-ads block">
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">My Items</div>
                <div class="panel-body">
                    <?php 
                        if(!empty(getItems('Member_ID', $info['UserID']))) {
                            echo '<div class="row">';
                            foreach (getItems('Member_ID', $info['UserID'], 2 ) as $item) { //2 to show approved and not approved items
                                echo '<div class="col-sm-6 col-md-3">';
                                    echo '<div class="thumbnail item-box">';
                                    if ($item['Approve'] == 0) {
                                        echo '<span class="waiting-approval">Waiting Approval</span>';
                                    }
                                        echo '<span class="price-tag"> $' . $item ['Price']  . '</span>';
                                        echo '<img class="img-responsive" src="img.jpg" alt="" />';
                                        echo '<div calss="caption">';
                                            echo '<h3><a href="items.php?itemid=' . $item['Item_ID'] .'">' .  $item['Name'] . '</a></h3>';
                                            echo '<p>' .  $item['Description'] . '</p>';
                                            echo '<div class="date">' . $item['Add_Date'] . '</div>';
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                            }
                            echo '</div>';
                        } else {
                            echo 'There is no ads to show, create <a href="newad.php">New Ad</a>' ;
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
    <div class="my-comments block">
        <div class="container">
            <div class="panel panel-primary">

                <div class="panel-heading">My Latest Comments</div>
                <div class="panel-body">
                    <?php 
                        $stmt = $con->prepare("SELECT
                        comment
                        FROM
                        comments
                        WHERE 
                        user_id = ?");
                        //execute the statement
                        $stmt->execute(array($info['UserID']));
                        //assign all the data to avariable
                        $comments = $stmt->fetchAll();
                        if(! empty($comments)) {
                            foreach ($comments as $comment) {
                                echo '<p>' . $comment['comment'] . '</p> <hr>';
                                
                            }
                        } else {
                            echo 'There is no comments to show';
                        }

                    ?>
                </div>
            </div>
        </div>
    </div>

<?php
    } else {
        header('Location: login.php');
        exit();
    }
    include $tpl . 'footer.php';    
?>