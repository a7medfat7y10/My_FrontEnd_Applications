<?php 
session_start();
include 'init.php';

?>


<div class="container text-center">
    <div class="row">
        <?php 
        if (isset($_GET['name'])) {
            $tag = $_GET['name'];
            echo '<h1 >' . $tag . '</h1>';
            $tagItems = getAllFromUltimate("*", "items", "WHERE tags LIKE '%$tag%'", "AND Approve = 1", "Item_ID");
            foreach ($tagItems as $item) {
                echo '<div class="col-sm-6 col-md-3">';
                    echo '<div class="thumbnail item-box">';
                        echo '<span class="price-tag">' . $item ['Price']  . '</span>';
                        echo '<img class="img-responsive" src="img.jpg" alt="" />';
                        echo '<div calss="caption">';
                            echo '<h3><a href="items.php?itemid=' . $item['Item_ID'] .'">' .  $item['Name'] . '</a></h3>';
                            echo '<p>' .  $item['Description'] . '</p>';
                            echo '<div class="date">' . $item['Add_Date'] . '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
        } else {
            echo 'You Must Add page id';
        }
    ?>
    </div>
</div>


<?php include $tpl . 'footer.php';?>