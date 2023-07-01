<?php
////Home Page
include "init.php"; //including header and navbar
?>

<div class="container-fluid">
    <h2 class="text-center"><!--Home--></h2>

    <div class="row">
            <!--Start main parts-->
            <form method="GET" class="search col-lg-6 " style="margin:auto; border: none"> 
                <input id="search" type="text" class="form-control" placeholder="Search The Book You Want" name="search">
                <input type="submit" value="search" class="btn" style="background-color: #1A2334; color: #FFF; margin-left:46%; margin-top: 4px">
            </form>
    </div>


    <div class="row">
        <?php
            if(isset($_GET['search'])) {
                $stmt=$con->prepare("SELECT * FROM books WHERE book_title LIKE '%" . $_GET['search'] .  "%' ");
                $stmt->execute();
                $rows = $stmt->fetchAll();
                $count= $stmt->rowCount();
                if($count > 0) {
                    foreach ($rows as $row) { ?>
                    <div class="col-12">
                        <div class="col-lg-6 col-12 mb-5" style="margin:auto">
                            <div class="single-event">
                                <div class="event-img">
                                    <img src="<?php echo $bookimg . $row['book_image_path']; ?>"
                                            class="img-fluid" alt="book"/>
                                </div>
                                <div class="cnt">
                                
                                    <div class="event-name">
                                        <h3><?php echo $row['book_title'] ?></h3>
                                    </div>
                                    <div class="event-time">
                                        <h6>Time: <?php echo $row['publish_time']; ?></h6>
                                    </div>
                                    <div class="event-instructor">
                                        <h6>Author: <?php echo $row['book_author']; ?></h6>
                                    </div>
                                </div>
                                <div class="event-VM">
                                    <a href="book.php?do=single-book&bookid=<?php echo $row['book_id']; ?>" class="btn btn-success">View Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
            <?php
                }
                else{
                    echo "<div class='text-center w-100'>";
                        echo "<div class='alert alert-success'>There is no Books to show</div>";
                    echo "</div>";
                }
            } else { ?>

                
                <div class="col-12">
                    <!--start book Area-->
                    <section class="event-area main-padding" id="event">
                        <div class="container">
                            <div class="text-center mb-5">
                                <h2 class="heading">Latest Books</h2>
                            </div>
                            <div class="event-boxs">
                                <div class="row">
                                    <?php
                                        $stmt=$con->prepare("SELECT * FROM books ORDER BY publish_time DESC LIMIT 3");
                                        $stmt->execute();
                                        $rows = $stmt->fetchAll();
                                        $count= $stmt->rowCount();
                                        if($count > 0) {
                                            foreach ($rows as $row) { ?>
                                            <div class="col-lg-4 col-12 mb-5">
                                                <div class="single-event">
                                                    <div class="event-img">
                                                        <img src="<?php echo $bookimg . $row['book_image_path']; ?>"
                                                            class="img-fluid" alt="book"/>
                                                    </div>
                                                    <div class="cnt">
                                                    
                                                        <div class="event-name">
                                                            <h3><?php echo $row['book_title'] ?></h3>
                                                        </div>
                                                        <div class="event-time">
                                                            <h6>Time: <?php echo $row['publish_time']; ?></h6>
                                                        </div>
                                                        <div class="event-instructor">
                                                            <h6>Author: <?php echo $row['book_author']; ?></h6>
                                                        </div>
                                                    </div>
                                                    <div class="event-VM">
                                                        <a href="book.php?do=single-book&bookid=<?php echo $row['book_id']; ?>" class="btn btn-success">View Book</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        
                                            <div class="col-lg-12">
                                                    
                                        
                                                <div class="button"  style="text-align: center;">
                                                    <a class="btn btn-success"  href="book.php?do=view">Show More</a>
                                                </div>
                                            </div>
                                    <?php
                                        }else{
                                            echo "<div class='text-center w-100'>";
                                                echo "<div class='alert alert-success'>There is no Evens to show</div>";
                                            echo "</div>";
                                        }
                                    ?>
                                </div>

                            </div>
                        </div>
                    </section>
                    <!--End book Area-->                    
                </div>


        <?php
            }
        ?>

        
        <!--End main parts-->
    </div>
</div>
<!-- ------------------------------------------------------------------------------------- -->
<!--Start Footer -->
<?php include $tpl . 'footer.php'; //including footer?>
<!--End Footer -->