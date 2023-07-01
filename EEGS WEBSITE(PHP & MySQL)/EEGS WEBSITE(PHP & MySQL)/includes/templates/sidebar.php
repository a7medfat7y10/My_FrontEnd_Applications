
<div class="sidebar">
    <!--Start about EEGS International-->
    <section class="about-area mt-5 mb-5">
        <div class="container">
            <div class="text-center mb-3">
                <h4 class="heading">EEGS International</h4>
          <hr style="max-width: 100px;border:solid 1.5px #226131;">
                    <p style="text-align: center;"> <img src="<?php echo $img?>EEGS_Blue.png" style="position: relative;width:25px;height: 35px;margin-top: -65px;background-color: #ffffff;"></p>
            </div>
            <div class="content">
                <P>
                    The Environmental and Engineering Geophysical Society (EEGS) is an applied scientific organization founded in 1992.
                    EEGS is incorporated in the State of Colorado as a not-for-profit corporation and has approximately 650 members.
                </P>
            </div>
        </div>
    </section>

    <!--End about about EEGS International-->

    <!--Start about about EEGS Suez -->
    <section class="about-area mb-5">
        <div class="container">
            <div class="text-center mb-3">
                <h4 class="heading">EEGS SC SU</h4>
                   <hr style="max-width: 100px;border:solid 1.5px #226131;">
                    <p style="text-align: center;"> <img src="<?php echo $img?>EEGS_Blue.png" style="position: relative;width:25px;height: 35px;margin-top: -65px;background-color: #ffffff;"></p>
	<div class="row">
            </div>
            <div class="content">
                <P>
                    EEGS Suez University Student Chapter is considered as the first internationally approved student chapter of its kind in MENA region (the Middle East and North Africa region).
                </P>
            </div>
        </div>
    </section>
    <!--End about about EEGS Suez -->

    <!-- Start Events -->
    <section class="events_links">
        <div class="container">
            <div class="title text-center">
                <h4 class="heading">Events</h4>
                   <hr style="max-width: 100px;border:solid 1.5px #226131;">
                    <p style="text-align: center;"> <img src="<?php echo $img?>EEGS_Blue.png" style="position: relative;width:25px;height: 35px;margin-top: -65px;background-color: #ffffff;"></p>
            </div>
            <div class="links">
                <ul class="list-unstyled">
                    <?php
                        $stmt = $con->prepare("SELECT * FROM events ORDER BY event_time DESC LIMIT 10");
                        $stmt->execute();
                        $rows = $stmt->fetchAll();

                        foreach ($rows as $row) {
                            ?>
                            <li class="mt-2 mb-2"><a href="event.php?do=single-event&eventid=<?php echo $row['event_id']; ?>"><?php echo $row['event_title']; ?></a></li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
    </section>
</div>
