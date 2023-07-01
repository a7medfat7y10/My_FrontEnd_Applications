<?php
    $do = '' ;
    if(isset($_GET['do'])) {
        $do = $_GET['do'] ;
    } else {
        $do = 'Manage' ; 
    }

    if($do == 'Manage') {
        echo 'Welcome You Are In Manage Category Page' ;
        echo '<a href="page.php?do=Add">Add New Category +</a>';
    } else if ($do == 'Add') {
        echo 'Welcome You Are In Add Page';
    } else if ($do == 'Insert') {
        echo 'Welcome You Are In Insert Page';
    } else {
        echo 'Error There Is No Page With this name';
    }