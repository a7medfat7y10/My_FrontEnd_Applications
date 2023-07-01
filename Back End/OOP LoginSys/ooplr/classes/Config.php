<?php
class Config {

    //method static called get()
    //used like this: Config::get(mysql/host)
    //u enter a path from the init page and it explode it into an array

    public static function get ($path = null) {
        if($path) {
            $config =$GLOBALS['config'];
            $path = explode('/', $path);
        
            //after entering a path and take the array and loop for each word 
            //check if mysql is in the $GLOBALS['config'] in init page
            //if it isset it gives back the host=> localhost
            foreach($path as $bit) {
                if (isset($config[$bit])) {
                    $config = $config[$bit];
                }
            }

            return $config;
        }

        return false;
    }
}