<?php

include_once('db.php');
$user = $_GET['n'];
$post = $_GET['p'];
$stmt = $con->prepare("INSERT INTO 
                            posts(user, postText, time)
                        VALUES (?, ?, now() ) ");
$stmt->execute([$user,$post]);

$stmt2 = $con->prepare("SELECT * FROM posts ORDER BY id DESC");
$stmt2->execute();
$rows = $stmt2->fetchAll();
foreach($rows as $row) {
?>
<div class="card" >
    <div class="icon" style="text-align: right">
            <i class="fa fa-edit fa fa-2x action" ></i>
            <i class="fa fa-close fa fa-2x action"></i>
    </div>
    <h3><?php echo $row['user']; ?></h3>
    <small><i class="fa fa-history fa-lg"></i> <?php echo $row['time']; ?></small><br>
    <br>
    <p>
        <?php echo $row['postText']; ?>
    </p>
</div>
<br>
<?php }
?>

