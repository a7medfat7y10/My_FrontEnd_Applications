<?php
include "init.php";
?>




    <!-- #################### Start Hero Area #################### -->
    <section class="media-area text-center" id="home"></section>
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
                            <h2>Media Committees</h2>
                        </div>
                    </div>
                    <div class="committees-content">
                        <p>One of marketing segment committees that is consist of six members working on two different things</p>
                        <ul>
                            <li> Facebook page designs
                                That include events, technical and non-technical posts </li>
                            <li>offline designs as t-shirt, tickets,..... .
                                Inside this committee you can learn how to use graphic design programs</li>
                        </ul>
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