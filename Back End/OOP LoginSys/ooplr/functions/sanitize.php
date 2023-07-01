<?php 

//escape function to sanitize data that will be stored when going in 
function escape ($string) {
    return htmlentities($string, ENT_QUOTES, 'UTF-8');
}