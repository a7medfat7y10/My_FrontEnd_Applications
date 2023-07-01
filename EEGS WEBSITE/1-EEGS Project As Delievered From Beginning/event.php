<?php
    ob_start();
    include "init.php";


    $do = filter_var($_GET['do'], FILTER_SANITIZE_STRING);




    if($do == 'single-event') {

        $eventid = filter_var($_GET['eventid'], FILTER_SANITIZE_NUMBER_INT);

        $stmt = $con->prepare("SELECT * FROM events WHERE event_id = ?");
        $stmt->execute(array($eventid));
        $row = $stmt->fetch();
        $count = $stmt->rowCount();


        if ($count > 0) {


            if (isset($_GET['eventid']) && is_numeric($eventid) && $eventid != '') { ?>

                <div class="event-page">
                    <div class="container main-padding">
                        <div class="title text-center">
                            <h2 class="heading"><?php echo $row['event_title']; ?></h2>
                             <hr style="max-width: 100px;border:solid 1.5px #226131;">
                    <p style="text-align: center;"></p>
                        </div>
                        <div class="event_image text-center">
                            <img src="<?php echo $img . 'events-images/' . $row['event_image_path']; ?>" alt="event"
                                 class="img-fluid">
                        </div>
                        <div class="event_time_inst">
                            <p>Time: <strong><?php echo $row['event_time']; ?></strong></p>
                            <p>Instructor: <strong><?php echo $row['event_instructor']; ?></strong></p>
                        </div>
                        <div class="event_des">
                            <p>Some Details:</p>
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
    }elseif ($do == 'view') { ?>



      <section class="event-area main-padding" id="event">
                <div class="container">
                    <div class="text-center mb-5">
                        <h2 class="heading">Our Events</h2>
                           <hr style="max-width: 100px;border:solid 1.5px #226131;">
                    <p style="text-align: center;"> <img src="<?php echo $img?>EEGS_Blue.png" style="position: relative;width:25px;height: 35px;margin-top: -65px;background-color: #ffffff;"></p>
                    </div>
                    <div class="event-boxs">
                        <div class="row">
                            <?php
                                $stmt=$con->prepare("SELECT * FROM events ORDER BY event_time DESC");
                                $stmt->execute();
                                $rows = $stmt->fetchAll();
                                $count= $stmt->rowCount();
                                if($count > 0) {
                                    foreach ($rows as $row) { ?>
                                    <div class="col-lg-4 col-12 mb-5">
                                        <div class="single-event">
                                            <div class="event-img">
                                                <img src="<?php echo $eventimg . $row['event_image_path']; ?>"
                                                     class="img-fluid" alt="Saknafta Event"/>
                                            </div>
                                            <div class="cnt">
                                                <div class="event-name">
                                                    <h3><?php echo $row['event_title'] ?></h3>
                                                </div>
                                                <div class="event-time">
                                                    <h6>Time: <strong><?php echo $row['event_time']; ?></strong></h6>
                                                </div>
                                                <div class="event-instructor">
                                                    <h6>Instructor: <strong><?php echo $row['event_instructor']; ?></strong></h6>
                                                </div>
                                            </div>
                                            <div class="event-VM">
                                                <a href="event.php?do=single-event&eventid=<?php echo $row['event_id']; ?>" class="btn btn-success">View Event</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                  
                            <?php
                                }else{
                                    echo "<div class='text-center w-100'>";
                                        echo "<div class='alert alert-success'>There is no Events to show</div>";
                                    echo "</div>";
                                }
                            ?>
                        </div>

                    </div>
                </div>
            </section>

<?php

    }
    ?>






<?php include $tpl . "footer.php"; ?>
