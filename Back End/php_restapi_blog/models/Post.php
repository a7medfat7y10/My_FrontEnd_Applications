<?php 
Class Post {
    //DB
    private $conn;
    private $table = 'posts';

    //Post properties
    public $id;
    public $category_id;
    public $category_name;
    public $title;
    public $body;
    public $author;
    public $created_at;

    public function __construct($db) {
        $this->conn = $db;
    }

    //Get POsts
    public function read() {
        //create query
        $query = 'SELECT c.name as category_name ,
            p.id,
            p.category_id,
            p.title,
            p.body,
            p.author,
            p.created_at
            From
            ' . $this->table . ' p
            LEFT JOIN
            categories c ON p.category_id = c.id
            ORDER By 
            p.created_at DESC';
        
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    //Get Single Post 
    public function read_single() {
        $query = 'SELECT c.name as category_name ,
            p.id,
            p.category_id,
            p.title,
            p.body,
            p.author,
            p.created_at
            From
            ' . $this->table . ' p
            LEFT JOIN
            categories c ON p.category_id = c.id
            WHERE
            p.id = ?
            LIMIT 0,1';
        
        //Prepare statement
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, $this->id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->title = $row['title'];
        $this->body = $row['body'];
        $this->author = $row['author'];
        $this->category_id = $row['category_id'];
        $this->category_name = $row['category_name'];
        
    }

    //Create Post
    public function create() {
        //Create query
        $query = 'INSERT INTO ' . $this->table . 'SET
            title = :title,
            body = :body,
            author = :author,
            category_id = :category_id';

        $stmt = $this->conn->prepare($query);

        //clean data
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->body = htmlspecialchars(strip_tags($this->body));
        $this->author = htmlspecialchars(strip_tags($this->author));
        $this->category_id = htmlspecialchars(strip_tags($this->category_id));
        

        //Bind Data
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':title', $this->body);
        $stmt->bindParam(':title', $this->author);
        $stmt->bindParam(':title', $this->category_id);

        //Execute Query
        if($stmt->execute()) {
            return true;
        }
        printf("Error: %s.\n", $stmt->error);
        
        return false;
    }


    //Update Post
    public function update() {
        //Create query
        $query = 'UPDATE ' . $this->table . 'SET
            title = :title,
            body = :body,
            author = :author,
            category_id = :category_id
            WHERE
            id = :id
            ';

        $stmt = $this->conn->prepare($query);

        //clean data
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->body = htmlspecialchars(strip_tags($this->body));
        $this->author = htmlspecialchars(strip_tags($this->author));
        $this->category_id = htmlspecialchars(strip_tags($this->category_id));
        $this->id = htmlspecialchars(strip_tags($this->id));
        

        //Bind Data
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':body', $this->body);
        $stmt->bindParam(':author', $this->author);
        $stmt->bindParam(':category_id', $this->category_id);
        $stmt->bindParam(':id', $this->id);

        //Execute Query
        if($stmt->execute()) {
            return true;
        }
        printf("Error: %s.\n", $stmt->error);
        
        return false;
    }



    //DElete Post 
    public function delete() {
        //create query
        $query = 'DELETE FROM ' . $this->table . ' WHERE id = :id ';
        //prepare stmt
        $stmt = $this->conn->prepare($query);

        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(':id', $this->id);

        if($stmt->execute()) {
            return true;
        }
        printf("Error: %s.\n", $stmt->error);
        
        return false;
    }
}