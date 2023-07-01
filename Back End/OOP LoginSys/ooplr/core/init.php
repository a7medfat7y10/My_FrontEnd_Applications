<?php
//This file will include all classes and functions and config and sessions to be used in any page


//starting session in all pages
session_start();
//
$GLOBALS['config'] = array (
    'mysql' => array (
        'host' => 'localhost',
        'username' => 'id11784674_ahmedfathy',
        'password' => 'amf71074',
        'db' =>'id11784674_lr'
    ),
    'remember' => array(
        'cookie_name' => 'hash',
        'cookie_expiry' => 604800
    ),
    'session' => array (
        'session_name' => 'user', 
        'token_name' => 'token'
    )
);
//include all classes
spl_autoload_register(function ($class) {
    require_once 'classes/' . $class . '.php';
});
//include functions
require_once 'functions/sanitize.php';

if (Cookie::exists(Config::get('remember/cookie_name')) && !Session::exists(Config::get('sessiin/session_name'))) {
    $hash = Cookie::get(Config::get('remember/cookie_name'));
    $hashCheck = DB::getInstance()->get('users_session', array('hash', '=', $hash));

    if($hashCheck->count()) {
        $user = new User($hashCheck->first()->user_id);
        $user->login();
    }
}