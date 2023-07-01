<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php getTitle();?></title>
        <link rel="stylesheet" href="<?php echo $css ; ?>bootstrap.css">
        <!-- normalize library  for good reset-->
        <link rel="stylesheet" href="<?php echo $css ; ?>normalize.css">
        <!-- font-awesome icons library -->
        <link rel="stylesheet" href="<?php echo $css ; ?>font-awesome.min.css">
        <!-- Main Css File -->
        <link rel="stylesheet" href="<?php echo $css ; ?>front.css?v=<?php echo time(); ?>">
    </head>
    <body>
      
        <div class="upper-bar">
            <div class="container text-right">
            <?php 
            if(isset($_SESSION['user'])) { ?>
                
                <img class="my-image img-thumbnail img-circle" src="img.jpg" alt="" />
                <div class="btn-group my-info pull-right">
                  <span class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <?php echo $sessionuser ?>
                    <span class="caret"></span>
                  </span>
                  <ul class="dropdown-menu">
                    <li><a href="profile.php">My Profile</a></li>
                    <li><a href="newad.php">New Item</a></li>
                    <li><a href="profile.php#myads">My Items</a></li>
                    <li><a href="logout.php">Logout</a></li>
                  </ul>
                </div>
              <?php 
                $userStatus = checkUserStatus($sessionuser);

                if($userStatus == 1 ) {
                  //user not activated
                }
            } else { ?>
                <a href="login.php"><span class="pull-right">Login/SignUp</span></a>  
              <?php } ?>
            </div>
        </div>
            
        <nav class="navbar navbar-inverse">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-nav" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">Homepage</a>
            </div>
            <div class="collapse navbar-collapse" id="app-nav">
              <ul class="nav navbar-nav navbar-right">
                <?php 
                  $allCats = getAllFromUltimate("*", "categories", "WHERE parent = 0", "", "ID", "ASC");
                  foreach($allCats as $cat ) {
                      echo '<li><a href="categories.php?pageid=' . $cat['ID'] . '">' . $cat['Name'] . '</a></li>';
                  }
                ?>


              </ul>
              
            </div>
          </div>
        </nav>
   