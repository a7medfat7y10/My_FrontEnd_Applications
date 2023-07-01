<?php
$back='';
include "../init.php";
?>


<div class="contact-background"></div>
<div class="container">
    <div class="row">
        <div class="contact-page main-padding">
            <div class="contact-words text-center mb-5">
                <h2 class="beside-lines">Contact Us and Feedback</h2>
            </div>
            <div class="text-left">
                <p class="lead"> &#8828; EEGS is here to provide you with more information, answer any questions you may have and create an effective solution for your instructional needs</p>
                <p class="lead"> &#8828; Do you have some feedback? Or an issue that you think the Student Association Board should deal with? Or just a thought you think the Board should know about? <u>Please</u>  contact us!</p>
                <p class="lead"> &#8828; Don't forget that you are always very welcome to talk to us in EEGS.</p>
            </div>
            <?php
                $form='../';
            include  '../' .$tpl . 'form.php'; ?>
        </div>
    </div>
</div>
<?php
include $pagesback . $tpl . "footer.php";
?>