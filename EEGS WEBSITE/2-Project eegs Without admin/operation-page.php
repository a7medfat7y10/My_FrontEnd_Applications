<?php
$back='';
include "../init.php";
?>




    <!-- #################### Start Hero Area #################### -->
    <section class="operation-area text-center" id="home"></section>
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
                            <h2>Operation Committees</h2>
                        </div>
                    </div>
                    <div class="committees-content">
                    <p>DP: it's the link between character's members and the students in the university 
                    In this committee the members do every ground publicity about all events we do in our chapter 
                        <br>
                        <br>
                    Logistics: All events require organization and  our members do it and our events include (opening, outing, general meetings, technical events, non-technical events,........)</p>
                    </div>
                </div>
                <!-- -------------------------------
                    [End Info Area]
                --------------------------------- -->
            </div>
            <!--End main parts-->











            <!--start aside -->
            <aside class="col-md-3 col-12">
                <?php include $pagesback . $tpl . 'sidebar.php'; ?>
            </aside>
            <!--End aside -->

        </div>
    </div>
    <!-- #################### End Columns #################### -->


<?php
include $pagesback . $tpl . "footer.php";
?>