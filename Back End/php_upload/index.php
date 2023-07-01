<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $image = $_FILES['work'];
        
        $image_name = $_FILES['work']['name'];
        $image_type = $_FILES['work']['type'];
        $image_temp = $_FILES['work']['tmp_name'];
        $image_size = $_FILES['work']['size'];
        $image_error = $_FILES['work']['error']; 
        
        if (empty($errors)) {
            move_uploaded_file($image_temp , $_SERVER['DOCUMENT_ROOT'] . '\upload\up\\' . $image_name );
            echo 'uploaded';
        }else {
            foreach($errors as $error) {
                echo 'error';
            }
        }
        $allowed_exet = array('jpg', 'gif', 'png', 'jepg' );
        $img_exet = strtolower(end(explode('.', $image_name)));
        

        if ($image_error == 4){
            $errors[] = '<div>no file uploaded</div>';
        }else{
            if (! in_array($img_exet , $allowed_exet)) {
                $errors[] = '<div>error uploading not image</div>';
            }
            if ($image_size > 20000){
            $errors[] = '<div>error uploading large size</div>';
            }

        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <form method="post" action="" enctype="multipart/form-data">
    <input type="file" name="work" value="">
    <input type="submit" name="" value="upload">
  </form>  
</body>
</html>