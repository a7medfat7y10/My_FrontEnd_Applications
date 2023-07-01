<?php
    ob_start();
    session_start();
    if(isset($_SESSION['user'])) {
    $pageTitle = 'Homepage';
    include 'init.php';
    ?>
    


    <div class="container text-center">
        <div class="row">
            <?php 
            foreach (getAllFrom('items', 'Item_ID', 'WHERE Approve = 1') as $item) {
                echo '<div class="col-sm-6 col-md-3">';
                    echo '<div class="thumbnail item-box">';
                        echo '<span class="price-tag"> $' . $item ['Price']  . '</span>';
                        echo '<img class="img-responsive" src="img.jpg" alt="" />';
                        echo '<div calss="caption">';
                            echo '<h3><a href="items.php?itemid=' . $item['Item_ID'] .'">' .  $item['Name'] . '</a></h3>';
                            echo '<p>' .  $item['Description'] . '</p>';
                            echo '<div class="date">' . $item['Add_Date'] . '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
        ?>
        </div>
    </div>


<?php

    include $tpl . 'footer.php';  
    } else {
        header('Location: login.php');
        exit();
    }  
    ob_end_flush();
?>