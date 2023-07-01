<?php 

    //Get All From Function Ultimate to be used instead of the old version and getcat or getitems function
    function getAllFromUltimate($field, $table, $where = NULL, $and = NULL, $orderfield, $ordering = "DESC") {
        global $con;
        $getAll = $con->prepare("SELECT $field FROM $table $where $and ORDER BY $orderfield $ordering ");
        $getAll->execute();
        $all = $getAll->fetchAll();
        return $all;
    }


    //function for set the title in the pages index and dashboard and others
    function getTitle() {
        global $pageTitle;
        if(isset($pageTitle)) {
            echo $pageTitle;

        } else {
            echo 'Default';
        }
    }


    /*
    //Home Redirect Function  v1
    function redirectHome($errorMsg, $seconds = 3) {
        echo "<div class='alert alert-danger '>$errorMsg</div>";
        echo "<div class='alert alert-info '>You will be redirected to home page after $seconds Seconds</div>";
        header("refresh:$seconds;url=index.php");
        exit();
    } 
    */

    //Home Redirect Function  v1
    function redirectHome($theMsg, $url=null, $seconds = 3) {
        
        if ($url === null) {
            $url = 'index.php';
        } else {
            if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] !== '') {
                $url = $_SERVER['HTTP_REFERER'];
                $link = 'previous page';
            } else{
                $url = 'index.php';
                $link = "homepage";
            }
        } 
       
        echo $theMsg;
        echo "<div class='alert alert-info '>You will be redirected to" .  $link . " after" . $seconds . " Seconds</div>";
        header("refresh:$seconds;url=$url");
        exit();
    } 


    //Check Item Exist or not 
    function checkItem ($select, $from, $value) {
        global $con;

        $statement = $con->prepare("SELECt $select FROM $from WHERE $select = ?");
        $statement->execute(array($value));
        $count = $statement->rowCount();
        return $count;

    }


    //count number of items functions
    //countItems
    function countItems($item, $table) {
        global $con;
        $stmt2 = $con->prepare("SELECT COUNT($item) FROM $table");
        $stmt2->execute();
        return $stmt2->fetchColumn();
    }

    //get latest function 
    //used to get the latest users for example
    function getLatest($select, $table, $order, $limit = 5){
        global $con;
        $getStmt = $con->prepare("SELECT $select FROM $table ORDER BY $order DESC LIMIT $limit");
        $getStmt->execute();
        $rows = $getStmt->fetchAll();
        return $rows;
    }
