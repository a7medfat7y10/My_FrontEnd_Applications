<?php
    ///Book Page
    ob_start();
    include "init.php";


    $do = filter_var($_GET['do'], FILTER_SANITIZE_STRING);



    //View book page
    if($do == 'single-book') {

        $bookid = filter_var($_GET['bookid'], FILTER_SANITIZE_NUMBER_INT);

        $stmt = $con->prepare("SELECT * FROM books WHERE book_id = ?");
        $stmt->execute(array($bookid));
        $row = $stmt->fetch();
        $count = $stmt->rowCount();

        //if there is an book with the id 
        if ($count > 0) {


            if (isset($_GET['bookid']) && is_numeric($bookid) && $bookid != '') { ?>

                <div class="event-page">
                    <div class="container main-padding">
                        <div class="title text-center">
                            <h2 class="heading"><?php echo $row['book_title']; ?></h2>
                             <hr style="max-width: 100px;border:solid 1.5px #226131;">
                    <p style="text-align: center;"></p>
                        </div>
                        <div class="event_image text-center">
                            <img src="<?php echo $img . 'books-images/' . $row['book_image_path']; ?>" alt="book"
                                 class="img-fluid">
                        </div>
                        <div class="event_time_inst">
                            <p>Time: <strong><?php echo $row['publish_time']; ?></strong></p>
                            <p>Author: <strong><?php echo $row['book_author']; ?></strong></p>
                        </div>
                        <div class="event_des">
                            <p>Some Details:</p>
                            <p class="ml-5"><?php echo $row['book_description']; ?></p>
                        </div>
                    </div>
                </div>


                <?php
            } else {
                header('location: index');
                exit();
            }


        } else {
            header("location: index");
            exit();
        }
    }elseif ($do == 'view') { ?>
    <?//show all books page?>


      <section class="event-area main-padding" id="event">
                <div class="container">
                    <div class="text-center mb-5">
                        <h2 class="heading">Books</h2>
                           <hr style="max-width: 100px;border:solid 1.5px #226131;">
                    <p style="text-align: center;"> <img src="<?php echo $img?>EEGS_Blue.png" style="position: relative;width:25px;height: 35px;margin-top: -65px;background-color: #ffffff;"></p>
                    </div>
                    <div class="event-boxs">
                        <div class="row">
                            <?php
                                $stmt=$con->prepare("SELECT * FROM books ORDER BY publish_time DESC");
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
                                                        <h6>Time: <strong><?php echo $row['publish_time']; ?></strong></h6>
                                                    </div>
                                                    <div class="event-instructor">
                                                        <h6>Author: <strong><?php echo $row['book_author']; ?></strong></h6>
                                                    </div>
                                                </div>
                                                <div class="event-VM">
                                                    <a href="book.php?do=single-book&bookid=<?php echo $row['book_id']; ?>" class="btn btn-success">View Book</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                  
                            <?php
                                }else{
                                    echo "<div class='text-center w-100'>";
                                        echo "<div class='alert alert-success'>There is no Books to show</div>";
                                    echo "</div>";
                                }
                            ?>
                        </div>

                    </div>
                </div>
            </section>

<?php

    }
    ?>






<?php include $tpl . "footer.php"; ?>
