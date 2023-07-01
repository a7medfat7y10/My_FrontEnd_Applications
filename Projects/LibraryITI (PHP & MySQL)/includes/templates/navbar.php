<header>
<nav class="navbar navbar-expand-lg custom-nav">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="<?php echo $img ?>library.jpg" class="img-fluid" alt="Library" style="width:70px !important"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <i class="nav-icon icon-basic-home"></i>
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <i class="nav-icon icon-basic-todo"></i>
                  <a href="book.php?do=view" class="nav-link">Books</a>
                </li>
                <li class="nav-item" >
                    <i class="nav-icon icon-basic-info"></i>
                    <a href="#" class="nav-link pr-2" data-scroll="#">About Us</a>
                </li>
                <li class="nav-item" >
                    <i class="nav-icon icon-basic-message-multiple"></i>
                    <a href="#" class="nav-link pr-2" data-scroll="contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</header>
