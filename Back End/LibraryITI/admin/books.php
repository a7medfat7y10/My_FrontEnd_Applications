<?php
    
///Book Page
ob_start();

$pageTitle = 'Books';

session_start(); //continue session of logging in
if(isset($_SESSION['Username'])) { //if the user logged in already 
    include "init.php";
    // Check for get method
            $do = '' ;
            if(isset($_GET['do'])) {
                $do = filter_var($_GET['do'], FILTER_SANITIZE_STRING);
            } else {
                $do = 'view' ; 
            }

    


    
    //View book page
    if($do == 'single-book') {

        $bookid = filter_var($_GET['bookid'], FILTER_SANITIZE_NUMBER_INT);

        $stmt = $con->prepare("SELECT * FROM books WHERE book_id = ?");
        $stmt->execute(array($bookid));
        $row = $stmt->fetch();
        $count = $stmt->rowCount();

        //if there is an book with the id 
        if ($count > 0) {


            if (isset($_GET['bookid']) && is_numeric($bookid) && $bookid != '') { ?>

                <div class="event-page">
                    <div class="container main-padding">
                        <div class="title text-center">
                            <h2 class="heading"><?php echo $row['book_title']; ?></h2>
                             <hr style="max-width: 100px;border:solid 1.5px #226131;">
                    <p style="text-align: center;"></p>
                        </div>
                        <div class="event_image text-center " >
                            <img src="<?php echo $img . 'books-images/' . $row['book_image_path']; ?>" alt="book"
                                 class="img-fluid img-responsive" >
                        </div>
                        <div class="event_time_inst">
                            <p>Time: <strong><?php echo $row['publish_time']; ?></strong></p>
                            <p>Author: <strong><?php echo $row['book_author']; ?></strong></p>
                        </div>
                        <div class="event_des">
                            <p><strong>Some Details:</strong></p>
                            <p class="ml-5"><?php echo $row['book_description']; ?></p>
                        </div>
                    </div>
                </div>


                <?php
            } else {
                header('location: index');
                exit();
            }


        } else {
            header("location: index");
            exit();
        }
        //-----------------------------------------------------------------------------
    }elseif ($do == 'view') { 
    


                //to get the pending members for the non activated members
                
                //select all users except admin
                $stmt = $con->prepare("SELECT * FROM books ORDER BY publish_time DESC");
                //execute the statement
                $stmt->execute();
                //assign all the data to avariable
                $rows = $stmt->fetchAll();

                if (! empty($rows)) {
                ?>
                <h1 class="text-center">Manage Library page</h1>
                    <div class="container">
                        <div class="table-responsive">
                            <table class="main-table events manage-members text-center table table-bordered">
                                <tr>
                                    <td>#ID</td>
                                    <td>Image</td>
                                    <td >Title</td>
                                    <td>Description</td>
                                    <td>Author</td>
                                    <td>Date</td>
                                    <td>Control</td>
                                </tr>
                                <?php
                                    foreach($rows as $row) {
                                        echo "<tr>";
                                            echo "<td>" . $row['book_id'] . "</td>";
                                            echo "<td>";
                                                if (empty($row['book_image_path'])) {
                                                    echo '<img src="layout/images/books-images/1.jpg" alt="" />';
                                                } else{
                                                    echo "<img src='layout/images/books-images/" . $row['book_image_path'] ."' alt='' />";
                                                }
                                            echo "</td>";
                                            echo "<td><a href='books.php?do=single-book&bookid=" . $row['book_id'] . "'>" . $row['book_title'] ."</a</td>";
                                            echo "<td style='font-size:11px; width:30%'>" . $row['book_description'] ."</td>";
                                            echo "<td>" . $row['book_author'] ."</td>";
                                            echo "<td>" . $row['Publish_time'] . "</td>";
                                            echo  "<td>
                                                    <a href='books.php?do=Edit&bookid=" . $row['book_id'] . "' class='btn btn-success'><i class='fa fa-edit'></i> Edit</a>
                                                    <a href='books.php?do=Delete&bookid=" . $row['book_id'] . "' class='btn btn-danger confirmation'><i class='fa fa-close'></i> Delete</a>";
                                            echo "</td>";
                                        echo "</tr>";
                                    }
                                ?>
                            </table>
                        </div>
                        <a href = "books.php?do=Add" class="add btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Add New Book</a>
                    </div>
            <?php } else {
                echo '<div class="container">';
                    echo '<div class="alert alert-info">There is no records to show </div>';
                    echo '<a href = "books.php?do=Add" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Add New Book</a>';    
                echo '</div>';
            } ?>




    


<?php

    } elseif ($do == 'Add') { ?> 
                    <h1 class="text-center">Add New Book</h1>
  
                    <div class="container">
                        <form class="form-horizontal" action="books.php?do=Insert" method="POST" enctype="multipart/form-data">
                            <!--start title-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label col-md-push-2">Book Title</label>
                                <div class="col-sm-10 col-md-6 col-md-push-2 ">
                                    <input type="text" name="title" class="form-control" required='required' placeholder='Add Book Title'/>
                                </div>
                            </div>
                            <!--start description-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label col-md-push-2">Book Descriotion</label>
                                <div class="col-sm-10 col-md-6 col-md-push-2">
                                    <input type="text" name="desc" class="form-control" required='required' placeholder='Add Book Description' />
                                </div>
                            </div>
                            <!--start Author-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label col-md-push-2">Book Author</label>
                                <div class="col-sm-10 col-md-6 col-md-push-2">
                                    <input type="text" name="author" class="form-control" required='required' placeholder='Add Book Author' />
                                </div>
                            </div>
                            <!--start time-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label col-md-push-2">Publish Time</label>
                                <div class="col-sm-10 col-md-6 col-md-push-2">
                                    <input type="date" name="time" class=" form-control" required='required'/>
                                </div>
                            </div>
                            
                            

                            <!--start avatar-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label col-md-push-2">Use Avatar</label>
                                <div class="col-sm-10 col-md-6 col-md-push-2">
                                    <input type="file" name="avatar" class="form-control" required='required'  />
                                </div>
                            </div>
                            <!-- Add button-->
                            <div class="form-group form-group-lg">
                                <div class="col-sm-offset-6 ">
                                    <input  type="submit" value="Add Book" class="btn btn-success btn-lg add-event" />
                                </div>
                            </div>
                        </form>
                    </div>
          <?php
        
    } else if ($do == 'Insert') {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    echo '<h1 class="text-center">Insert New Book</h1>';

                    echo '<div class="container">';
                        //Upload Avatar -----1
                        $avatarName = $_FILES['avatar']['name'];
                        $avatarType = $_FILES['avatar']['type'];
                        $avatarTmp = $_FILES['avatar']['tmp_name'];
                        $avatarSize = $_FILES['avatar']['size'];

                        $avatarAllowedExtension = array("jpeg", "jpg", "png" , "gif");
                        $avatarExtension = strtolower(end(explode('.', $avatarName)));
                        //--------------------------

                        
                        $title = $_POST['title'];
                        $desc = $_POST['desc'];
                        $author = $_POST['author'];
                        $time = $_POST['time'];
                        //validate the form
                        $formErrors = array();
                        if(strlen($title) < 4 ) {
                            $formErrors[] = '<div class="alert alert-danger"> Title Cant Be Less Than 4 Characters</div>';
                        }
                        if(empty($title) ) {
                            $formErrors[] = '<div class="alert alert-danger"> Title Cant Be empty</div>';
                        }
                        if(empty($desc) ) {
                            $formErrors[] = '<div class="alert alert-danger"> Description Cant Be empty</div>';
                        }
                        
                        if(empty($time) ) {
                            $formErrors[] = '<div class="alert alert-danger"> Date Cant Be empty</div>';
                        }
                        

                        foreach ($formErrors as $error) {
                            echo $error ;
                        }

                        //check if no errors proceed the update
                       //check if no errors proceed the update
                       if (empty($formErrors)) {

                        //upload avatar ---3
                        $avatar = rand(0, 100000000000) . '_' . $avatarName;
                        move_uploaded_file($avatarTmp , 'layout\images\books-images\\' . $avatar );
                        //-----------------------

                        //Insert info from form to  database 
                        $stmt = $con->prepare("INSERT INTO 
                                                    books(book_title, book_description, book_author, publish_time, book_image_path)
                                                VALUES (?, ?, ?, ?,?) ");
                        $stmt->execute([$title, $desc, $author, $time, $avatar]);
                        
                        $theMsg = '<div class="alert alert-success">' . $stmt->rowCount() . ' Record Inserted</div>';
                        redirectHome($theMsg, 'back');
                }
                        
                

                        

                        
                        
                } else {
                    echo '<div class="container">';
                    $theMsg = '<div class="alert alert-danger"> Sorry Cannot Browse Directly</div>' ;
                    redirectHome ($theMsg);
                    echo '</div>';
                }
                echo '</div>';
        
    } elseif ($do == 'Edit') {
      
        $bookid = isset($_GET['bookid']) && is_numeric($_GET['bookid']) ? intval($_GET['bookid']) : 0; //check the number of userid for the user that i get from database
                                                                                                        // by session['ID'] and echo it in the url and get it by get method
            //select all the data about the userid
            $stmt = $con->prepare("SELECT * FROM books WHERE book_id = ? LIMIT 1 "); 
            $stmt->execute(array($bookid));
        
            //fetch"جلب" all the record from database
            $row = $stmt->fetch();  //array contain the record data
            $count = $stmt->rowCount(); //check count of records in database

                if($count > 0) { ?>

                    <h1 class="text-center">Edit Books</h1>

                    <div class="container">
                        <form class="form-horizontal" action="books.php?do=Update" method="POST">
                            
                            <input type = "hidden" name="bookid" value="<?php echo $bookid; ?>" />
                            <!-- Start title-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label col-md-push-2">Book Title</label>
                                <div class="col-sm-10 col-md-6 col-md-push-2 ">
                                    <input type="text" name="title" class="form-control" 
                                           value="<?php echo $row['book_title']; ?>"/>
                                </div>
                            </div>
                            <!--start description-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label col-md-push-2">Book Descriotion</label>
                                <div class="col-sm-10 col-md-6 col-md-push-2">
                                    <textarea type="text" name="desc" class="form-control" style="height:250px"   ><?php echo $row['book_description']; ?></textarea>
                                </div>
                            </div>
                            <!--start Author-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label col-md-push-2">Book Author</label>
                                <div class="col-sm-10 col-md-6 col-md-push-2">
                                    <input type="text" name="author" class="form-control"  value="<?php echo $row['book_author']; ?>" />
                                </div>
                            </div>
                            <!--start time-->
                            
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label col-md-push-2">Book Time</label>
                                <div class="col-sm-10 col-md-6 col-md-push-2">
                                    <?php $date = $row['publish_time'];   ?>
                                    <input type="date" name="time" class=" form-control" value="<?php echo $date?>" />
                                    
                                </div>
                            </div>
                            <!--start image path-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label col-md-push-2">Book Image Name</label>
                                <div class="col-sm-10 col-md-6 col-md-push-2">
                                    <input type="text" name="img" class="form-control"  value="<?php echo $row['book_image_path'] ?>"   />
                                </div>
                            </div>
                            <!-- Add button-->
                            <div class="form-group form-group-lg">
                                <div class="col-sm-offset-6  ">
                                    <input  type="submit" value="Save" class="btn btn-success btn-lg edit-event" />
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
        
    } elseif ($do == 'Update') {
    
        echo '<h1 class="text-center">Update Book</h1>';

                echo '<div class="container">';

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $id = $_POST['bookid']; //from the hidden input field
                    $title = $_POST['title'];
                    $desc = $_POST['desc'];
                    $time = $_POST['time'];
                    $author = $_POST['author'];
                    $img = $_POST['img'];

                    

                    //validate the form
                    $formErrors = array();
                    if(strlen($title) < 4 ) {
                        $formErrors[] = '<div class="alert alert-danger"> Title Cant Be Less Than 4 Characters</div>';
                    }
                    if(empty($title) ) {
                        $formErrors[] = '<div class="alert alert-danger"> Title Cant Be empty</div>';
                    }
                    if(empty($img) ) {
                        $formErrors[] = '<div class="alert alert-danger"> Image Path Cant Be empty</div>';
                    }
                    if(empty($author) ) {
                        $formErrors[] = '<div class="alert alert-danger"> Insructor Cant Be empty</div>';
                    }
                    if(empty($desc) ) {
                        $formErrors[] = '<div class="alert alert-danger"> Description Cant Be empty</div>';
                    }


                    foreach ($formErrors as $error) {
                        echo $error ;
                    }

                    //check if no errors proceed the update
                    if (empty($formErrors)) {
                        

                            //update database with this info
                            $stmt = $con->prepare("UPDATE books SET book_title = ?, book_description = ?, book_author = ?, publish_time = ?, book_image_path = ?  WHERE book_id = ? ");
                            $stmt->execute(array($title,$desc ,$author, $time, $img, $id));
                            $theMsg = '<div class="alert alert-success">' . $stmt->rowCount() . ' Record Updated</div>';
                            redirectHome($theMsg , 'back');
                        
                    }
                    
                } else {
                    $theMsg = '<div class="alert alert-danger">Sorry Cannot Browse Directly</div>' ;
                    redirectHome($theMsg);
                }
                echo '</div>';
        
    } elseif ($do == 'Delete') {
        
        echo "<h1 class='text-center'>Delete Book</h1>";
                echo "<div class='container'>";
                    $bookid = isset($_GET['bookid']) && is_numeric($_GET['bookid']) ? intval($_GET['bookid']) : 0; //check the number of userid for the user that i get from database
                                                                                                            // by session['ID'] and echo it in the url and get it by get method
                    //select all the data about the userid
                    /* We can replace it by the check item function---> 
                    $stmt = $con->prepare("SELECT * FROM users WHERE UserID = ? LIMIT 1 "); 
                    $stmt->execute(array($userid));
                
                    $count = $stmt->rowCount(); //check count of records in database
                    */
                    $check = checkItem('book_id','books' , $bookid);
                        if($check > 0) { 
                            $stmt = $con->prepare("DELETE FROM books WHERE book_id = :zbook ");
                            $stmt->bindParam(":zbook", $bookid);
                            $stmt->execute();

                            $theMsg = '<div class="alert alert-success">' . $stmt->rowCount() . ' Record Deleted</div>';
                            redirectHome($theMsg);
                        }else {
                            $theMsg = '<div class="alert alert-danger">This Id Is Not Exist</div>';
                            redirectHome($theMsg);
                        }
                echo "</div>";
        
    }
    include $tpl . 'footer.php'; //include footer

    } else{
        header('Location: index.php'); //if he has not logged in redirect to log in page
        exit();
    }
    ob_end_flush();
?>