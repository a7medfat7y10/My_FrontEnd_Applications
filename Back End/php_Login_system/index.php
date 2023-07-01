<?php 
require "header.php";
?>

    <main>
        <?php 
            if (isset($_SESSION['userId'])) {
                echo '<p>You are logged in!</p>';
            } else {
                echo '<p>You are logged Out!</p>';
            }
        ?>
      
    </main>


<?php 
require "footer.php";
?>