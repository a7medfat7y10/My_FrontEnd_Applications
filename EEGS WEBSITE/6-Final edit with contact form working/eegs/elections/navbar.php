<nav style="background-color:#1A2334;" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../index.php"><img src="layout/images/EEGS.png" width="100px" style="position: relative;top: -15px;
"> </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="../index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="../about.php">About</a></li>
        <li><a href="../InSite.php">InSite</a></li>
        <li><a href="../contact.php">Contact</a></li>
        <?php
          if(isset($_SESSION['user_id'])){
            echo '<li><a href="../elections/logout.php">Logout</a></li>';
          } 
        ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>