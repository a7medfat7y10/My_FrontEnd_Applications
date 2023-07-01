<?php
    ob_start();
    $pageTitle = 'Members';

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
                //to get the pending members for the non activated members
                $query = '';

                if (isset($_GET['page']) && $_GET['page'] == 'Pending') {
                    $query = 'AND RegStatus = 0';
                }
                //select all users except admin
                $stmt = $con->prepare("SELECT * FROM users WHERE GroupID != 1 $query ORDER BY UserID DESC");
                //execute the statement
                $stmt->execute();
                //assign all the data to avariable
                $rows = $stmt->fetchAll();

                if (! empty($rows)) {
                ?>
                <h1 class="text-center">Manage Members page</h1>
                    <div class="container">
                        <div class="table-responsive">
                            <table class="main-table manage-members text-center table table-bordered">
                                <tr>
                                    <td>#ID</td>
                                    <td>Avatar</td>
                                    <td>Username</td>
                                    <td>Email</td>
                                    <td>FullName</td>
                                    <td>Registered Date</td>
                                    <td>Control</td>
                                </tr>
                                <?php
                                    foreach($rows as $row) {
                                        echo "<tr>";
                                            echo "<td>" . $row['UserID'] . "</td>";
                                            //upload avatar ----4 show it in manage table
                                            echo "<td>";
                                                if (empty($row['avatar'])) {
                                                    echo '<img src="uploads/avatars/img.jpg" alt="" />';
                                                } else{
                                                    echo "<img src='uploads/avatars/" . $row['avatar'] ."' alt='' />";
                                                }
                                            echo "</td>";

                                            echo "<td>" . $row['Username'] ."</td>";
                                            echo "<td>" . $row['Email'] ."</td>";
                                            echo "<td>" . $row['FullName'] ."</td>";
                                            echo "<td>" . $row['Date'] . "</td>";
                                        echo  "<td>
                                                    <a href='members.php?do=Edit&userid=" . $row['UserID'] . "' class='btn btn-success'><i class='fa fa-edit'></i> Edit</a>
                                                    <a href='members.php?do=Delete&userid=" . $row['UserID'] . "' class='btn btn-danger confirmation'><i class='fa fa-close'></i> Delete</a>";
                                                    if ($row['RegStatus'] == 0) {
                                                       echo "<a href='members.php?do=Activate&userid=" . $row['UserID'] . "' class='btn btn-info activate'><i class='fa fa-check'></i> Activate</a>";          
                                                    }                                                             

                                                echo "</td>";
                                        echo "</tr>";
                                    }
                                ?>
                                
                            </table>
                        </div>
                        <a href = "members.php?do=Add" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Add New Member</a>
                    </div>
            <?php } else {
                echo '<div class="container">';
                    echo '<div class="alert alert-info">There is no records to show </div>';
                    echo '<a href = "members.php?do=Add" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Add New Member</a>';    
                echo '</div>';
            } ?>
<?php // =======================================================================================================================================?>
    <?php   } elseif ($do == 'Add') { 

    //Add page And Insert ?>
                <h1 class="text-center">Add New Members</h1>

                    
                    <div class="container">
                        <form class="form-horizontal" action="members.php?do=Insert" method="POST" enctype="multipart/form-data">
                            <!--start username-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-10 col-md-4">
                                    <input type="text" name="username" class="form-control"  autocomplete="off" required='required' placeholder='Username to login into shop'/>
                                </div>
                            </div>
                            <!--start fullname-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">FullName</label>
                                <div class="col-sm-10 col-md-4">
                                    <input type="text" name="full" class="form-control" required='required' placeholder='Enter Full name' />
                                </div>
                            </div>
                            <!--start Email-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10 col-md-4">
                                    <input type="email" name="email"  class="form-control" required='required' placeholder='Enter valid Email' />
                                </div>
                            </div>
                            <!--start Password-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10 col-md-4">
                                    <input type="password" name="password" class="password form-control" autocomplete="new-password" placeholder="Password must be complex" required='required'/>
                                    <i class="show-password fa fa-eye" ></i>
                                </div>
                            </div>
                            <!--start avatar-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Use Avatar</label>
                                <div class="col-sm-10 col-md-4">
                                    <input type="file" name="avatar" class="form-control" required='required'  />
                                </div>
                            </div>
                            <!-- Add button-->
                            <div class="form-group form-group-lg">
                                <div class="col-sm-offset-2 col-sm-10 ">
                                    <input type="submit" value="Add Member" class="btn btn-primary btn-lg" />
                                </div>
                            </div>


                        </form>
                    </div>

    <?php //============================================================
            } else if ($do == 'Insert') { //get data from form and put it into database
    //Insert Page for Add new members
                
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    echo '<h1 class="text-center">Insert New Member</h1>';

                    echo '<div class="container">';

                        //Upload Avatar -----1
                        $avatarName = $_FILES['avatar']['name'];
                        $avatarType = $_FILES['avatar']['type'];
                        $avatarTmp = $_FILES['avatar']['tmp_name'];
                        $avatarSize = $_FILES['avatar']['size'];

                        $avatarAllowedExtension = array("jpeg", "jpg", "png" , "gif");
                        $avatarExtension = strtolower(end(explode('.', $avatarName)));
                        //--------------------------

                        $user = $_POST['username'];
                        $email = $_POST['email'];
                        $name = $_POST['full'];
                        $pass = $_POST['password'];
                        $hashPass = sha1( $_POST['password']);
                        //validate the form
                        $formErrors = array();
                        if(strlen($user) < 4 ) {
                            $formErrors[] = '<div class="alert alert-danger"> Username Cant Be Less Than 4 Characters</div>';
                        }
                        if(empty($user) ) {
                            $formErrors[] = '<div class="alert alert-danger"> Username Cant Be empty</div>';
                        }
                        if(empty($pass) ) {
                            $formErrors[] = '<div class="alert alert-danger"> Password Cant Be empty</div>';
                        }
                        if(empty($name) ) {
                            $formErrors[] = '<div class="alert alert-danger"> FullName Cant Be empty</div>';
                        }
                        if(empty($email) ) {
                            $formErrors[] = '<div class="alert alert-danger"> Email Cant Be empty</div>';
                        }
                        //avatar upload errors ------2
                        if (!empty($avatarName) && ! in_array($avatarExtension , $avatarAllowedExtension)) {
                            $formErrors[] = '<div class="alert alert-danger"> This Extension Is Not Allowed</div>';
                        }
                        if(empty($avatarName)) {
                            $formErrors[] = '<div class="alert alert-danger"> Avatar is required</div>';
                        }
                        if ($avatarSize > 4194304 ) {
                            $formErrors[] = '<div class="alert alert-danger"> Size Must be less than 4MB</div>';
                        } 
                        //-----------------------------

                        foreach ($formErrors as $error) {
                            echo $error ;
                        }

                        //check if no errors proceed the update
                        if (empty($formErrors)) {
                            
                            //upload avatar ---3
                            $avatar = rand(0, 100000000000) . '_' . $avatarName;
                            move_uploaded_file($avatarTmp , 'uploads\avatars\\' . $avatar );
                            //-----------------------

                            //check existence of the username 
                            $check = checkItem ("Username", "users", $user);
                            
                            if ($check == 1) {
                                $theMsg = "<div class='alert alert-danger'> This username is already used before</div>";
                                redirectHome($theMsg , 'back');
                            } else {
                        
                                //Insert info from form to  database 
                                $stmt = $con->prepare("INSERT INTO 
                                                            users(Username, Password, Email, FullName, RegStatus ,Date, avatar )
                                                        VALUES (?, ?, ?, ?,1 , now(), ? ) ");
                                $stmt->execute([$user, $hashPass, $email, $name, $avatar]);
                                $theMsg = '<div class="alert alert-success">' . $stmt->rowCount() . ' Record Inserted</div>';
                                redirectHome($theMsg, 'back');
                            }
                        }
                        
                } else {
                    echo '<div class="container">';
                    $theMsg = '<div class="alert alert-danger"> Sorry Cannot Browse Directly</div>' ;
                    redirectHome ($theMsg);
                    echo '</div>';
                }
                echo '</div>';
//===============================================================================================================================================
            } else if ($do == 'Edit') { 
    //Edit Page And update
            
            $userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0; //check the number of userid for the user that i get from database
                                                                                                        // by session['ID'] and echo it in the url and get it by get method
            //select all the data about the userid
            $stmt = $con->prepare("SELECT * FROM users WHERE UserID = ? LIMIT 1 "); 
            $stmt->execute(array($userid));
        
            //fetch"جلب" all the record from database
            $row = $stmt->fetch();  //array contain the record data
            $count = $stmt->rowCount(); //check count of records in database

                if($count > 0) { ?>

                    <h1 class="text-center">Edit Members</h1>

                    <div class="container">
                        <form class="form-horizontal" action="members.php?do=Update" method="POST">
                            <input type = "hidden" name="userid" value="<?php echo $userid; ?>" />
                            <!--start username-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-10 col-md-4">
                                    <input type="text" name="username" class="form-control" value="<?php echo $row['Username']; ?>" autocomplete="off" required='required'/>
                                </div>
                            </div>
                            <!--start fullname-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">FullName</label>
                                <div class="col-sm-10 col-md-4">
                                    <input type="text" name="full" value="<?php echo $row['FullName']; ?>" class="form-control" required='required' />
                                </div>
                            </div>
                            <!--start Email-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10 col-md-4">
                                    <input type="email" name="email" value="<?php echo $row['Email']; ?>" class="form-control" required='required'/>
                                </div>
                            </div>
                            <!--start Password-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10 col-md-4">
                                <input type="hidden" name="oldpassword" value="<?php echo $row['Password']; ?> " />
                                    <input type="password" name="newpassword" class="form-control" autocomplete="new-password" placeholder="********" />
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
                    $id = $_POST['userid']; //from the hidden input field
                    $user = $_POST['username'];
                    $email = $_POST['email'];
                    $name = $_POST['full'];

                    //password trick
                    $pass = '';
                    if (empty($_POST['newpassword'])) {
                        $pass = $_POST['oldpassword'];
                    } else {
                        $pass = sha1($_POST['newpassword']);
                    }

                    //validate the form
                    $formErrors = array();
                    if(strlen($user) < 4 ) {
                        $formErrors[] = '<div class="alert alert-danger"> Username Cant Be Less Than 4 Characters</div>';
                    }
                    if(empty($user) ) {
                        $formErrors[] = '<div class="alert alert-danger"> Username Cant Be empty</div>';
                    }
                    if(empty($name) ) {
                        $formErrors[] = '<div class="alert alert-danger"> FullName Cant Be empty</div>';
                    }
                    if(empty($email) ) {
                        $formErrors[] = '<div class="alert alert-danger"> Email Cant Be empty</div>';
                    }


                    foreach ($formErrors as $error) {
                        echo $error ;
                    }

                    //check if no errors proceed the update
                    if (empty($formErrors)) {
                        $stmt2 = $con->prepare("SELECT * FROM users WHERE Username = ? AND UserID != ?"); //not equal to prevent everyone except this user to use the name
                        $stmt2->execute(array($user, $id));
                        $count = $stmt2->rowCount();

                        if($count == 1) {

                            echo 'Sorry This user exists';
                            redirectHome($theMsg , 'back');
                            
                        } else {

                            //update database with this info
                            $stmt = $con->prepare("UPDATE users SET Username = ?, Email = ?, FullName = ?, Password = ?  WHERE UserID = ? ");
                            $stmt->execute(array($user, $email, $name, $pass, $id));
                            $theMsg = '<div class="alert alert-success">' . $stmt->rowCount() . ' Record Updated</div>';
                            redirectHome($theMsg , 'back');
                        }
                    }
                    
                } else {
                    $theMsg = '<div class="alert alert-danger">Sorry Cannot Browse Directly</div>' ;
                    redirectHome($theMsg);
                }
                echo '</div>';
//================================================================================================================================================
            } else if ($do == 'Delete') {
                echo "<h1 class='text-center'>Delete Member</h1>";
                echo "<div class='container'>";
                    $userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0; //check the number of userid for the user that i get from database
                                                                                                            // by session['ID'] and echo it in the url and get it by get method
                    //select all the data about the userid
                    /* We can replace it by the check item function---> 
                    $stmt = $con->prepare("SELECT * FROM users WHERE UserID = ? LIMIT 1 "); 
                    $stmt->execute(array($userid));
                
                    $count = $stmt->rowCount(); //check count of records in database
                    */
                    $check = checkItem('userid','users' , $userid);
                        if($check > 0) { 
                            $stmt = $con->prepare("DELETE FROM users WHERE UserID = :zuser ");
                            $stmt->bindParam(":zuser", $userid);
                            $stmt->execute();

                            $theMsg = '<div class="alert alert-success">' . $stmt->rowCount() . ' Record Deleted</div>';
                            redirectHome($theMsg);
                        }else {
                            $theMsg = '<div class="alert alert-danger">This Id Is Not Exist</div>';
                            redirectHome($theMsg);
                        }
                echo "</div>";

            } else if($do == 'Activate') {
                echo "<h1 class='text-center'>Activate Member</h1>";
                echo "<div class='container'>";
                    $userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0; //check the number of userid for the user that i get from database
                                                                                                            // by session['ID'] and echo it in the url and get it by get method
                    //select all the data about the userid
                    /* We can replace it by the check item function---> 
                    $stmt = $con->prepare("SELECT * FROM users WHERE UserID = ? LIMIT 1 "); 
                    $stmt->execute(array($userid));
                
                    $count = $stmt->rowCount(); //check count of records in database
                    */
                    $check = checkItem('userid','users' , $userid);
                        if($check > 0) { 
                            $stmt = $con->prepare("UPDATE users SET RegStatus= 1 WHERE UserID = ?");
                            $stmt->execute(array($userid));

                            $theMsg = '<div class="alert alert-success">' . $stmt->rowCount() . ' Record Activated</div>';
                            redirectHome($theMsg);
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