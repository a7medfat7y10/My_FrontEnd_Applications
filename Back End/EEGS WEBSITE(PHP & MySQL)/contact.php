<?php
include "init.php";
?>


<div class="contact-background"></div>
<div class="container">
    <div class="row">
        <div class="contact-page contact-Area main-padding">
            <div class="contact-words text-center mb-5">
                <h2 class="heading">Contact Us and Feedback</h2>
                 <hr style="max-width: 100px;border:solid 1.5px #226131;">
                    <p style="text-align: center;"> <img src="<?php echo $img?>EEGS_Blue.png" style="position: relative;width:25px;height: 35px;margin-top: -65px;background-color: #ffffff;"></p>
            </div>
            <div class="text-left">
                <p class="lead"> &#8828; EEGS is here to provide you with more information, answer any questions you may have and create an effective solution for your instructional needs</p>
                <p class="lead"> &#8828; Do you have some feedback? Or an issue that you think the Student Association Board should deal with? Or just a thought you think the Board should know about? <u>Please</u>  contact us!</p>
                <p class="lead"> &#8828; Don't forget that you are always very welcome to talk to us in EEGS.</p>
            </div>
            <?php
            include $tpl . 'form.php'; ?>
        </div>
    </div>
</div>
<?php
include  $tpl . "footer.php";
?>