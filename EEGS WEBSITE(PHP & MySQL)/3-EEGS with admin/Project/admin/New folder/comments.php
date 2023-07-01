<?php
    ob_start();
    $pageTitle = 'Comments';

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

//========================================================================================================================================
    // set pages
            if($do == 'Manage') { 
                //select all users except admin
                $stmt = $con->prepare("SELECT
                                            comments.*, items.Name AS Item_Name, users.Username AS Member
                                        FROM
                                            comments
                                        INNER JOIN 
                                            items
                                        ON
                                            items.Item_ID = comments.item_id
                                        INNER JOIN
                                            users
                                        ON
                                            users.UserID = comments.user_id");
                //execute the statement
                $stmt->execute();
                //assign all the data to avariable
                $comments = $stmt->fetchAll();
                if(! empty($comments)) {
                ?>
                <h1 class="text-center">Manage Comments </h1>
                    <div class="container">
                        <div class="table-responsive">
                            <table class="main-table text-center table table-bordered">
                                <tr>
                                    <td>#ID</td>
                                    <td>Comment</td>
                                    <td>Item Name</td>
                                    <td>User Name</td>
                                    <td>Added Date</td>
                                    <td>Control</td>
                                </tr>
                                <?php
                                    
                                        foreach($comments as $comment) {
                                            echo "<tr>";
                                                echo "<td>" . $comment['c_id'] . "</td>";
                                                echo "<td>" . $comment['comment'] ."</td>";
                                                echo "<td>" . $comment['Item_Name'] ."</td>";
                                                echo "<td>" . $comment['Member'] ."</td>";
                                                echo "<td>" . $comment['comment_date'] . "</td>";
                                            echo  "<td>
                                                        <a href='comments.php?do=Edit&comid=" . $comment['c_id'] . "' class='btn btn-success'><i class='fa fa-edit'></i> Edit</a>
                                                        <a href='comments.php?do=Delete&comid=" . $comment['c_id'] . "' class='btn btn-danger confirmation'><i class='fa fa-close'></i> Delete</a>";
                                                        if ($comment['status'] == 0) {
                                                           echo "<a href='comments.php?do=Approve&comid=" . $comment['c_id'] . "' class='btn btn-info activate'><i class='fa fa-check'></i> Approve</a>";          
                                                        }                                                             
    
                                                    echo "</td>";
                                            echo "</tr>";
                                        }
                                    
                                ?>
                                
                            </table>
                        </div>
                    </div> 
                    <?php
                        } else {
                            echo '<div class="container">';
                                echo '<div class="alert alert-info">There is no comments to show </div>';    
                            echo '</div>'; 
                        }                              
                    ?>
 <?php   
//===============================================================================================================================================
            } else if ($do == 'Edit') { 
    //Edit Page And update
            
            $comid = isset($_GET['comid']) && is_numeric($_GET['comid']) ? intval($_GET['comid']) : 0; //check the number of userid for the user that i get from database
                                                                                                        // by session['ID'] and echo it in the url and get it by get method
            //select all the data about the userid
            $stmt = $con->prepare("SELECT * FROM comments WHERE c_id = ? "); 
            $stmt->execute(array($comid));
        
            //fetch"جلب" all the record from database
            $row = $stmt->fetch();  //array contain the record data
            $count = $stmt->rowCount(); //check count of records in database

                if($count > 0) { ?>

                    <h1 class="text-center">Edit Comment</h1>

                    <div class="container">
                        <form class="form-horizontal" action="comments.php?do=Update" method="POST">
                            <input type = "hidden" name="comid" value="<?php echo $comid; ?>" />
                            <!--start comment-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Comment</label>
                                <div class="col-sm-10 col-md-4">
                                    <textarea class="form-control" name="comment"><?php echo $row['comment'] ?></textarea>
                                </div>
                            </div>
                            <!-- Save button-->
                            <div class="form-group form-group-lg">
                                <div class="col-sm-offset-2 col-sm-10 ">
                                    <input type="submit" value="Save" class="btn btn-primary btn-lg" />
                                </div>
                            </div>


                        </form>
                    </div>
        <?php   } else { //if there is no id 
                    echo '<div class="container">';
                    $theMsg = '<div class="alert alert-danger"> THere is no such id</div>' ;
                    redirectHome ($theMsg);
                    echo '</div>';                
                }
    //=======================================================================================
    //update page for edit
            } elseif ($do == 'Update') {
                echo '<h1 class="text-center">Update Member</h1>';

                echo '<div class="container">';

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $comid = $_POST['comid']; //from the hidden input field
                    $comment = $_POST['comment'];
                    
                        //update database with this info
                        $stmt = $con->prepare("UPDATE comments SET comment = ? WHERE c_id = ? ");
                        $stmt->execute(array($comment, $comid));
                        $theMsg = '<div class="alert alert-success">' . $stmt->rowCount() . ' Record Updated</div>';
                        redirectHome($theMsg , 'back');
                    
                    
                } else {
                    $theMsg = '<div class="alert alert-danger">Sorry Cannot Browse Directly</div>' ;
                    redirectHome($theMsg);
                }
                echo '</div>';
//================================================================================================================================================
            } else if ($do == 'Delete') {
                echo "<h1 class='text-center'>Delete Comment</h1>";
                echo "<div class='container'>";
                    $userid = isset($_GET['comid']) && is_numeric($_GET['comid']) ? intval($_GET['comid']) : 0; //check the number of userid for the user that i get from database
                                                                                                            // by session['ID'] and echo it in the url and get it by get method
                    //select all the data about the userid
                    /* We can replace it by the check item function---> 
                    $stmt = $con->prepare("SELECT * FROM users WHERE UserID = ? LIMIT 1 "); 
                    $stmt->execute(array($userid));
                
                    $count = $stmt->rowCount(); //check count of records in database
                    */
                    $check = checkItem('c_id','comments' , $comid);
                        if($check > 0) { 
                            $stmt = $con->prepare("DELETE FROM comments WHERE c_id = :zcomment ");
                            $stmt->bindParam(":zcomment", $comid);
                            $stmt->execute();

                            $theMsg = '<div class="alert alert-success">' . $stmt->rowCount() . ' Record Deleted</div>';
                            redirectHome($theMsg , 'back');
                        }else {
                            $theMsg = '<div class="alert alert-danger">This Id Is Not Exist</div>';
                            redirectHome($theMsg);
                        }
                echo "</div>";

            } else if($do == 'Approve') {
                echo "<h1 class='text-center'>Approve Comment</h1>";
                echo "<div class='container'>";
                    $comid = isset($_GET['comid']) && is_numeric($_GET['comid']) ? intval($_GET['comid']) : 0; //check the number of userid for the user that i get from database
                                                                                                            // by session['ID'] and echo it in the url and get it by get method
                    //select all the data about the userid
                    /* We can replace it by the check item function---> 
                    $stmt = $con->prepare("SELECT * FROM users WHERE UserID = ? LIMIT 1 "); 
                    $stmt->execute(array($userid));
                
                    $count = $stmt->rowCount(); //check count of records in database
                    */
                    $check = checkItem('c_id','comments' , $comid);
                        if($check > 0) { 
                            $stmt = $con->prepare("UPDATE comments SET status= 1 WHERE c_id = ?");
                            $stmt->execute(array($comid));

                            $theMsg = '<div class="alert alert-success">' . $stmt->rowCount() . ' Record Activated</div>';
                            redirectHome($theMsg,'back');
                        }else {
                            $theMsg = '<div class="alert alert-danger">This Id Is Not Exist</div>';
                            redirectHome($theMsg);
                        }
                echo "</div>";
            }
//
    include $tpl . 'footer.php'; //include footer

    } else{
        header('Location: index.php'); //if he has not logged in redirect to log in page
        exit();
    }
    ob_end_flush();
    ?>