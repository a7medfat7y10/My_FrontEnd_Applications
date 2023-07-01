
<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-nav" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="dashboard.php" style="font-size: 23px;font-weight:bold">
        <img src="<?php echo $img ?>library.jpg" class="img-fluid" alt="Take the right track" style="display:inline-block; width: 41px; height: 36px; position: relative; top: -6px;"/>
         Admin</a>
    </div>
    <div class="collapse navbar-collapse" id="app-nav">
      <ul class="nav navbar-nav navbar-right">
        <li ><a href="books.php?do=view">Books</a></li>
        <li ><a href="members.php">Members </a></li>
        <li><a href="../index.php">Visit Library </a></li>
        <li><a href="members.php?do=Edit&userid=<?php echo $_SESSION['ID']; ?>">Edit Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
      
    </div>
  </div>
</nav>