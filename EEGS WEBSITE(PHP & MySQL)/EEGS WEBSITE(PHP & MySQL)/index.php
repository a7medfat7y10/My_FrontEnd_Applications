<?php
include "init.php";
?>

<!--Start Hero Area-->
<section class="hero-area" id="home">
    <div class="hero-slider owl-carousel owl-theme">
         <div class="item">
            <div class="single-item">
                <div class="bg-image" data-image="slider.jpg"></div>
            </div>
        </div>
        <div class="item">
            <div class="single-item">
                <div class="bg-image" data-image="slider01.jpg"></div>
            </div>
        </div>
        
    <!--
        <div class="item">
            <div class="single-item">
                <div class="bg-image" data-image="slider03.JPG"></div>
            </div>
        </div>
        <div class="item">
            <div class="single-item">
                <div class="bg-image" data-image="slider04.jpg"></div>
            </div>
        </div>
        <div class="item">
            <div class="single-item">
                <div class="bg-image" data-image="slider05.JPG"></div>
            </div>
        </div>
        <div class="item">
            <div class="single-item">
                <div class="bg-image" data-image="slider06.JPG"></div>
            </div>
        </div> --->
        
    </div>
</section>
<!--End Hero Area-->

<section>
<!--Start Box -->
<?php include $tpl . 'box.php'; ?>
<!--End Box -->
</section>

<div class="container-fluid">
    <div class="row">
        <!--Start main parts-->
        <div class="col-md-9 col-12">
            <!--start event Area-->


            <section class="event-area main-padding" id="event">
                <div class="container">
                    <div class="text-center mb-5">
                        <h2 class="heading">Latest Events</h2>
                    </div>
                    <div class="event-boxs">
                        <div class="row">
                            <?php
                                $stmt=$con->prepare("SELECT * FROM events ORDER BY event_time DESC LIMIT 3");
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
                                                    <h6>Time: <?php echo $row['event_time']; ?></h6>
                                                </div>
                                                <div class="event-instructor">
                                                    <h6>Instructor: <?php echo $row['event_instructor']; ?></h6>
                                                </div>
                                            </div>
                                            <div class="event-VM">
                                                <a href="event.php?do=single-event&eventid=<?php echo $row['event_id']; ?>" class="btn btn-success">View Event</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                
                                    <div class="col-lg-12">
                                            
                                
                                        <div class="button"  style="text-align: center;">
                                            <a class="btn btn-success"  href="event.php?do=view">Show More</a>
                                        </div>
                                    </div>
                            <?php
                                }else{
                                    echo "<div class='text-center w-100'>";
                                        echo "<div class='alert alert-success'>There is no Evens to show</div>";
                                    echo "</div>";
                                }
                            ?>
                        </div>

                    </div>
                </div>
            </section>
            <!--End event Area-->

<hr style="max-width: 1000px;border:solid 1.5px #226131;">
<p style="text-align: center;">
</p>

            <!--Start Committees Area-->
            <section class="committees-area main-padding">
                <div class="container">
                    <div class="text-center mb-5">
                        <h2 class="heading">Committees</h2>
                    </div>
                    <div class="row">
                         <div class="col-lg-3 col-md-4 col-6 mt-3">
                            <div class="single-committee">
                                <a class="front" href="#popup1">
                                    <img src="<?php echo $img?>committees/ac-01.png" class="img-fluid" alt="academy-committee" title="Click Here"/>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 mt-3">
                            <div class="single-committee">
                                <a class="front" href="#popup2">
                                    <img src="<?php echo $img?>committees/hr-01.png" class="img-fluid" alt="hr-committee" title="Click Here"/>
                                </a>
                            </div>
                        </div>
                  <div class="col-lg-3 col-md-4 col-6 mt-3">
                            <div class="single-committee">
                                <a class="front" href="#popup3">
                                    <img src="<?php echo $img?>committees/pr-01.png" class="img-fluid" alt="pr-committees" title="Click Here"/>
                                </a>
                            </div>
                        </div>
                      <div class="col-lg-3 col-md-4 col-6 mt-3">
                            <div class="single-committee">
                                <a class="front" href="#popup4">
                                    <img src="<?php echo $img?>committees/op-01.png" class="img-fluid" alt="operation-committee" title="Click Here"/>
                                </a>
                            </div>
                        </div>
                     <div class="col-lg-3 col-md-4 col-6 mt-3">
                            <div class="single-committee">
                                <a class="front" href="#popup5">
                                    <img src="<?php echo $img?>committees/sm-01.png" class="img-fluid" alt="social-media-committee" title="Click Here"/>
                                </a>
                            </div>
                        </div>
                    <div class="col-lg-3 col-md-4 col-6 mt-3">
                            <div class="single-committee">
                                <a class="front" href="#popup6">
                                    <img src="<?php echo $img?>committees/media-01.png" class="img-fluid" alt="media-committee" title="Click Here"/>
                                </a>
                            </div>
                        </div>
                  <div class="col-lg-3 col-md-4 col-6 mt-3">
                            <div class="single-committee">
                                <a class="front" href="#popup7">
                                    <img src="<?php echo $img?>committees/it-01.png" class="img-fluid" alt="it-committee" title="Click Here"/>
                                </a>
                            </div>
                        </div>       <div class="col-lg-3 col-md-4 col-6 mt-3">
                            <div class="single-committee">
                                <a class="front" href="#popup8">
                                    <img src="<?php echo $img?>committees/mag-01.png" class="img-fluid" alt="magazine-committee" title="Click Here"/>
                                </a>
                            </div>
                        </div> 
                    </div>
                </div>
            </section>
            <!--End Committees Area-->

<hr style="max-width: 1000px;border:solid 1.5px #226131;">
<p style="text-align: center;">
</p>

            <!--Start EEGS Hight Borad Area-->
            <section class="eegs-hb-area main-padding">
                <div class="container">
                    <div class="text-center mb-5">
                        <h2 class="heading">EEGS High Borad</h2>
                    </div>
                    <div class="images">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-6 mt-3">
                                <img src="<?php echo $img ?>heigh-borad/President.png" class="img-fluid" alt="event-1"/>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 mt-3">
                                <img src="<?php echo $img ?>heigh-borad/Vice1.png" class="img-fluid" alt="event-1"/>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 mt-3">
                                <img src="<?php echo $img ?>heigh-borad/Vice2.png" class="img-fluid" alt="event-1"/>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 mt-3">
                                <img src="<?php echo $img ?>heigh-borad/Marketing.png" class="img-fluid" alt="event-1"/>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 mt-3">
                                <img src="<?php echo $img ?>heigh-borad/HR.png" class="img-fluid" alt="event-1"/>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 mt-3">
                                <img src="<?php echo $img ?>heigh-borad/Treasures.png" class="img-fluid" alt="event-1"/>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 mt-3">
                                <img src="<?php echo $img ?>heigh-borad/Technical.png" class="img-fluid" alt="event-1"/>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 mt-3">
                                <img src="<?php echo $img ?>heigh-borad/Operations.png" class="img-fluid" alt="event-1"/>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End EEGS Hight Borad Area-->

<hr style="max-width: 1000px;border:solid 1.5px #226131;">
<p style="text-align: center;">
</p>

            <!--Start Contact Us Area-->
            <section class="contact-Area main-padding" id="contact">
                <div class="container">
                    <div class="text-center mb-5">
                        <h2 class="heading">Contact Us and Feedback</h2>
                    </div>
                    <div class="title">
                        <p>Do you have some feedback? Or an issue that you think the Student Association Board should deal with? Or just a thought you think the Board should know about? <u>Please</u>  contact us!</p>
                        <p>Don't forget that you are always very welcome to talk to us in EEGS.</p>
                    </div>
                    <?php
                    include $tpl . 'form.php'?>
                </div>
            </section>
            <!--End Contact Us Area-->
            
        </div>
        <!--End main parts-->
        
        <!--start aside -->
        <aside class="col-md-3 col-12 p-0">
            <?php include $tpl . 'homesidebar.php'; ?>
        </aside>
        
        <!--End aside -->
    </div>
</div>

<!--Start Footer -->
<?php include $tpl . 'footer.php'; ?>
<!--End Footer -->