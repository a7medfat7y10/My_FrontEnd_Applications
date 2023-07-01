<?php
//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/Post.php';

//Instantiate DB and Connect 
$database = new Database();
$db = $database->connect();

//Instantiate blog post object
$post = new Post($db);

//Blog post query
$result = $post->read();

$num = $result->rowCount();

if($num > 0) {
    //Post array
    $post_arr = array();
    $posts_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $post_item = array(
            'id' => $id,
            'title' => $title,
            'body' => html_entity_decode($body),
            'author' => $author,
            'category_id' => $category_id,
            'category_name' => $category_name
        );

        //Push to the data in post_arr
        array_push($post_arr['data'], $post_item);

        //Turn to JSON
        echo json_encode($post_arr);
    }
} else {
    echo json_encode(
        array('message' => 'No Posts Found')
    );
}
