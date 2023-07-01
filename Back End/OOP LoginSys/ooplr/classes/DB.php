<?php
class DB {
    //property for  part one
    private static $_instance = null;
    //properties for part two
    private $_pdo,
            $_query,
            $_error = false,
            $_results,
            $_count = 0;
    //connect database
    //method to execute when instantiation to connect database
    private function __construct() {
        try {
            $this->_pdo = new PDO('mysql:host=' . Config::get('mysql/host') . ';dbname=' . Config::get('mysql/db'), Config::get('mysql/username') , Config::get('mysql/password')  );
        }catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    //part one (craete object[instantiate] when not created [when $_instance = null])
    public static function getInstance() {
        if (!isset(self::$_instance)) {
            self::$_instance = new DB(); 
        }
        return self::$_instance;
    }
    //part two [execute statements]
    public function query($sql, $params = array()) {
        $this->_error = false;
        if($this->_query = $this->_pdo->prepare($sql)) {
            $x = 1;
            if(count($params)) {
                foreach ($params as $param) {
                    $this->_query->bindValue($x, $param);
                    $x++ ;
                }
            }

            if($this->_query->execute()) {
                $this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
                $this->_count = $this->_query->rowCount();
            } else {
                $this->_error = true;
            }
        }
        return $this; //to enable chaining
    }

    //part three
    //method to execute an action like SELECT * FROM $table WHERE ----
    public function action($action , $table, $where = array()) {
        //check if $where contain 3 elements
        if(count($where) === 3) {
            $operators = array('=', '>', '<' , '<=', '>=' );

            $field = $where[0];
            $operator = $where[1];
            $value = $where[2];

            //check if the operator is correct and use the method query to execute
            if(in_array($operator, $operators)) {
                $sql = "{$action} FROM {$table} WHERE {$field} {$operator} ?";
                //if there is no error to query
                if(!$this->query($sql, array($value))->error()) {
                    return $this;
                }
            }
        }
        return false;
    }

    //use action() method to shortcut for get and delete 
    public function get($table, $where) {
        return $this->action('SELECT *', $table, $where);
    }
    public function delete($table, $where) {
        return $this->action('DELETE', $table, $where);
    }


    //get results
    public function results() {
        return $this->_results;
    }
    public function first() {
        return $this->resuts()[0];
    }

    //insert video 10
    public function insert($table, $fields = array( )) {
        if (count($fields)) {
            $keys = array_keys($fields); //the keys of the associative array
            $values = '';
            $x = 1;

            foreach($fields as $field) {
                $values .= '?';
                if($x < count($fields) ) {
                    $values .= ', ';
                }
                $x++;
            }
        
            $seperator = "' ,'";
            $sql = "INSERT INTO " . $table . "('" . implode($seperator , $keys) . "') VALUES ({$values}) " ;
            // echo $sql;
            if (!$this->query($sql, $fields)->error()) {
                return true;
            }
        }

        return false;
    }

    //update
    public function update($table, $id, $fields) {
        $set = '';
        $x = 1;
        
        foreach($fields as $name => $value) {
            $set .= "{$name} = ?";
            if($x < count($fields)) {
                $set .= ' ,';
            }
            $x++;
        }

        $sql = "UPDATE {$table} SET {$set} WHERE id = {$id} ";
        //echo $sql;
        if(!$this->query($sql, $fields)->error()) {
            return true;
        }
        return false;
    }

    //from part two
    //get error
    public function error() {
        return $this->_error;
    }
    //from part three
    //get count
    public function count() {
        return $this->_count;
    }
}