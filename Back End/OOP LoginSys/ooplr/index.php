<?php 
require_once 'core/init.php';

//echo Config::get('mysql/host'); ====> localhost

//$user = DB::getInstance(); ======> connect database

// $user = DB::getInstance()->query("SELECT username FROM users WHERE username = ?" , array('ahmed'));
// if(!$user->count()) {
//     echo 'No user';
// } else {
//     echo 'OK' ;
// }



// $userget = DB::getInstance()->get('users', array('username', '=', 'ahmed'));
// if(!$userget->count()) {
//     echo 'No user';
// } else {
//     echo $userget->results()[0]->username;
// }


/*this doesnot work video 10 */
// $userInsert = DB::getInstance()->insert('users', array(
//     'username' => 'ahmed',
//     'password' => '1255768687',
//     'salt' => 'salt'
// ));


// $userupdate = DB::getInstance()->update('users', 1 , array(
//     'username' => 'mahmoud'
// ));



//flashing
if(Session::exists('home')) {
    echo '<p>' . Session::flash('home') . '</p>';
}

// echo Session::get(Config::get('session/session_name'));

$user = new User();
if($user->isLoggedIn()) {
    ?>
    <p>Hello <a href="#"> <?php echo escape($user->data()->username); ?> </a></p>

    <ul>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <?php
} else {
    echo '<p>You Need To <a href="login.php"> Login</a> Or <a href="register.php"> Register</a></p>';
}