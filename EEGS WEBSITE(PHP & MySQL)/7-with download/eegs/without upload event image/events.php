<?php
    
///Event Page
ob_start();

$pageTitle = 'Events';

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

    


    
    //View event page
    if($do == 'single-event') {

        $eventid = filter_var($_GET['eventid'], FILTER_SANITIZE_NUMBER_INT);

        $stmt = $con->prepare("SELECT * FROM events WHERE event_id = ?");
        $stmt->execute(array($eventid));
        $row = $stmt->fetch();
        $count = $stmt->rowCount();

        //if there is an event with the id 
        if ($count > 0) {


            if (isset($_GET['eventid']) && is_numeric($eventid) && $eventid != '') { ?>

                <div class="event-page">
                    <div class="container main-padding">
                        <div class="title text-center">
                            <h2 class="heading"><?php echo $row['event_title']; ?></h2>
                             <hr style="max-width: 100px;border:solid 1.5px #226131;">
                    <p style="text-align: center;"></p>
                        </div>
                        <div class="event_image text-center " >
                            <img src="<?php echo $img . 'events-images/' . $row['event_image_path']; ?>" alt="event"
                                 class="img-fluid img-responsive" >
                        </div>
                        <div class="event_time_inst">
                            <p>Time: <strong><?php echo $row['event_time']; ?></strong></p>
                            <p>Instructor: <strong><?php echo $row['event_instructor']; ?></strong></p>
                        </div>
                        <div class="event_des">
                            <p><strong>Some Details:</strong></p>
                            <p class="ml-5"><?php echo $row['event_description']; ?></p>
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
                $stmt = $con->prepare("SELECT * FROM events ORDER BY event_time DESC");
                //execute the statement
                $stmt->execute();
                //assign all the data to avariable
                $rows = $stmt->fetchAll();

                if (! empty($rows)) {
                ?>
                <h1 class="text-center">Manage Events page</h1>
                    <div class="container">
                        <div class="table-responsive">
                        <table class="main-table events manage-members text-center table table-bordered">
                                <tr>
                                    <td>#ID</td>
                                    <td>Image</td>
                                    <td >Title</td>
                                    <td>Description</td>
                                    <td>Instructor</td>
                                    <td>Date</td>
                                    <td>Control</td>
                                </tr>
                                <?php
                                    foreach($rows as $row) {
                                        echo "<tr>";
                                            echo "<td>" . $row['event_id'] . "</td>";
                                            echo "<td>";
                                                if (empty($row['event_image_path'])) {
                                                    echo '<img src="layout/images/events-images/1.jpg" alt="" />';
                                                } else{
                                                    echo "<img src='layout/images/events-images/" . $row['event_image_path'] ."' alt='' />";
                                                }
                                            echo "</td>";
                                            echo "<td><a href='events.php?do=single-event&eventid=" . $row['event_id'] . "'>" . $row['event_title'] ."</a</td>";
                                            echo "<td style='font-size:11px; width:30%'>" . $row['event_description'] ."</td>";
                                            echo "<td>" . $row['event_instructor'] ."</td>";
                                            echo "<td>" . $row['event_time'] . "</td>";
                                            echo  "<td>
                                                    <a href='events.php?do=Edit&eventid=" . $row['event_id'] . "' class='btn btn-success'><i class='fa fa-edit'></i> Edit</a>
                                                    <a href='events.php?do=Delete&eventid=" . $row['event_id'] . "' class='btn btn-danger confirmation'><i class='fa fa-close'></i> Delete</a>";
                                            echo "</td>";
                                        echo "</tr>";
                                    }
                                ?>
                            </table>
                        </div>
                        <a href = "events.php?do=Add" class="add btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Add New Event</a>
                    </div>
            <?php } else {
                echo '<div class="container">';
                    echo '<div class="alert alert-info">There is no records to show </div>';
                    echo '<a href = "events.php?do=Add" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Add New Event</a>';    
                echo '</div>';
            } ?>




    


<?php

    } elseif ($do == 'Add') { ?> 
                    <h1 class="text-center">Add New Event</h1>
  
                    <div class="container">
                        <form class="form-horizontal" action="events.php?do=Insert" method="POST" enctype="multipart/form-data">
                            <!--start title-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label col-md-push-2">Event Title</label>
                                <div class="col-sm-10 col-md-6 col-md-push-2 ">
                                    <input type="text" name="title" class="form-control" required='required' placeholder='Add Event Title'/>
                                </div>
                            </div>
                            <!--start description-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label col-md-push-2">Event Descriotion</label>
                                <div class="col-sm-10 col-md-6 col-md-push-2">
                                    <input type="text" name="desc" class="form-control" required='required' placeholder='Add Event Description' />
                                </div>
                            </div>
                            <!--start instructor-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label col-md-push-2">Event Instructor</label>
                                <div class="col-sm-10 col-md-6 col-md-push-2">
                                    <input type="text" name="instructor" class="form-control" required='required' placeholder='Add Event Instructor' />
                                </div>
                            </div>
                            <!--start time-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label col-md-push-2">Event Time</label>
                                <div class="col-sm-10 col-md-6 col-md-push-2">
                                    <input type="date" name="time" class=" form-control" required='required'/>
                                </div>
                            </div>
                            <!--start image path-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label col-md-push-2">Event Image Name</label>
                                <div class="col-sm-10 col-md-6 col-md-push-2">
                                    <input type="text" name="img" class="form-control"  placeholder="Please remember adding the image to layout and layout in admin " required='required'  />
                                </div>
                            </div>
                            <!-- Add button-->
                            <div class="form-group form-group-lg">
                                <div class="col-sm-offset-6 ">
                                    <input  type="submit" value="Add Event" class="btn btn-success btn-lg add-event" />
                                </div>
                            </div>
                        </form>
                    </div>
          <?php
        
    } else if ($do == 'Insert') {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    echo '<h1 class="text-center">Insert New Event</h1>';

                    echo '<div class="container">';
                        $title = $_POST['title'];
                        $desc = $_POST['desc'];
                        $instructor = $_POST['instructor'];
                        $time = $_POST['time'];
                        $img = $_POST['img'];
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
                        if(empty($img) ) {
                            $formErrors[] = '<div class="alert alert-danger"> Please Add Image Path</div>';
                        }
                        if(empty($time) ) {
                            $formErrors[] = '<div class="alert alert-danger"> Date Cant Be empty</div>';
                        }
                        

                        foreach ($formErrors as $error) {
                            echo $error ;
                        }

                        //check if no errors proceed the update
                        if (empty($formErrors)) {
                                //Insert info from form to  database 
                                $stmt = $con->prepare("INSERT INTO 
                                                            events(event_title, event_description, event_instructor, event_time, event_image_path)
                                                        VALUES (?, ?, ?, ?,? ) ");
                                $stmt->execute([$title, $desc, $instructor, $time, $img]);
                                
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
      
        $eventid = isset($_GET['eventid']) && is_numeric($_GET['eventid']) ? intval($_GET['eventid']) : 0; //check the number of userid for the user that i get from database
                                                                                                        // by session['ID'] and echo it in the url and get it by get method
            //select all the data about the userid
            $stmt = $con->prepare("SELECT * FROM events WHERE event_id = ? LIMIT 1 "); 
            $stmt->execute(array($eventid));
        
            //fetch"جلب" all the record from database
            $row = $stmt->fetch();  //array contain the record data
            $count = $stmt->rowCount(); //check count of records in database

                if($count > 0) { ?>

                    <h1 class="text-center">Edit Members</h1>

                    <div class="container">
                        <form class="form-horizontal" action="events.php?do=Update" method="POST">
                            
                            <input type = "hidden" name="eventid" value="<?php echo $eventid; ?>" />
                            <!-- Start title-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label col-md-push-2">Event Title</label>
                                <div class="col-sm-10 col-md-6 col-md-push-2 ">
                                    <input type="text" name="title" class="form-control" 
                                           value="<?php echo $row['event_title']; ?>"/>
                                </div>
                            </div>
                            <!--start description-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label col-md-push-2">Event Descriotion</label>
                                <div class="col-sm-10 col-md-6 col-md-push-2">
                                    <textarea type="text" name="desc" class="form-control" style="height:250px"   ><?php echo $row['event_description']; ?></textarea>
                                </div>
                            </div>
                            <!--start instructor-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label col-md-push-2">Event Instructor</label>
                                <div class="col-sm-10 col-md-6 col-md-push-2">
                                    <input type="text" name="instructor" class="form-control"  value="<?php echo $row['event_instructor']; ?>" />
                                </div>
                            </div>
                            <!--start time-->
                            
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label col-md-push-2">Event Time</label>
                                <div class="col-sm-10 col-md-6 col-md-push-2">
                                    <?php $date = $row['event_time'];   ?>
                                    <input type="date" name="time" class=" form-control" value="<?php echo $date?>" />
                                    
                                </div>
                            </div>
                            <!--start image path-->
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label col-md-push-2">Event Image Name</label>
                                <div class="col-sm-10 col-md-6 col-md-push-2">
                                    <input type="text" name="img" class="form-control"  value="<?php echo $row['event_image_path'] ?>"   />
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
    
        echo '<h1 class="text-center">Update Event</h1>';

                echo '<div class="container">';

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $id = $_POST['eventid']; //from the hidden input field
                    $title = $_POST['title'];
                    $desc = $_POST['desc'];
                    $time = $_POST['time'];
                    $instructor = $_POST['instructor'];
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
                    if(empty($instructor) ) {
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
                            $stmt = $con->prepare("UPDATE events SET event_title = ?, event_description = ?, event_instructor = ?, event_time = ?, event_image_path = ?  WHERE event_id = ? ");
                            $stmt->execute(array($title,$desc ,$instructor, $time, $img, $id));
                            $theMsg = '<div class="alert alert-success">' . $stmt->rowCount() . ' Record Updated</div>';
                            redirectHome($theMsg , 'back');
                        
                    }
                    
                } else {
                    $theMsg = '<div class="alert alert-danger">Sorry Cannot Browse Directly</div>' ;
                    redirectHome($theMsg);
                }
                echo '</div>';
        
    } elseif ($do == 'Delete') {
        
        echo "<h1 class='text-center'>Delete Event</h1>";
                echo "<div class='container'>";
                    $eventid = isset($_GET['eventid']) && is_numeric($_GET['eventid']) ? intval($_GET['eventid']) : 0; //check the number of userid for the user that i get from database
                                                                                                            // by session['ID'] and echo it in the url and get it by get method
                    //select all the data about the userid
                    /* We can replace it by the check item function---> 
                    $stmt = $con->prepare("SELECT * FROM users WHERE UserID = ? LIMIT 1 "); 
                    $stmt->execute(array($userid));
                
                    $count = $stmt->rowCount(); //check count of records in database
                    */
                    $check = checkItem('event_id','events' , $eventid);
                        if($check > 0) { 
                            $stmt = $con->prepare("DELETE FROM events WHERE event_id = :zevent ");
                            $stmt->bindParam(":zevent", $eventid);
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