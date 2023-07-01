<?php
include "init.php";
?>




    <!-- #################### Start Hero Area #################### -->
    <section class="it-area text-center" id="home"></section>
    <!-- #################### End Hero Area #################### -->



    <!-- #################### Start Columns ####################-->
    <div class="container-fluid">
        <div class="row">
            <!--Start main parts-->
            <div class="col-md-9 col-12">
                <!-- -------------------------------
                    [Start Info Area]
                --------------------------------- -->
                <div class="info-area main-padding">
                    <div class="text-center">
                        <div class="beside-lines text-center mb-5">
                            <h2>IT Committees</h2>
                        </div>
                    </div>
                    <div class="committees-content">
                        <p>
                            IT Committee is very important in any organization. it helps in building a website for the organization.
                            So, Here in EEGS, We will teach the members how to built a website for scratch. by learning some of program language
                            Like 
                            <br>
                            HTML 
                            <br>
                            CSS 
                            <br>
                            Javascript and its libraries like jQuery
                            <br>
                            After learing these language. you will able to built a complete and responsive website.
                            <br>
                            So we are here, <b>Join us</b>
                        </p>
                    </div>
                </div>
                <!-- -------------------------------
                    [End Info Area]
                --------------------------------- -->
            </div>
            <!--End main parts-->











            <!--start aside -->
            <aside class="col-md-3 col-12">
                <?php include $tpl . 'sidebar.php'; ?>
            </aside>
            <!--End aside -->

        </div>
    </div>
    <!-- #################### End Columns #################### -->


<?php
include $tpl . "footer.php";
?>