<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $image = $_FILES['work'];
        
        $image_name = $_FILES['work']['name'];
        $image_type = $_FILES['work']['type'];
        $image_temp = $_FILES['work']['tmp_name'];
        $image_size = $_FILES['work']['size'];
        $image_error = $_FILES['work']['error'];
        
        $allowed_exet = array('jpg', 'gif', 'png', 'jepg' );

        if($image_error[0] == 4) {
            echo '<div>No file chosen</div>';
        } else {
            $files_count = count($image_name);
            for ($i=0 , $i<$files_count , $i++) {
            
            $errors = array();

            $img_exet = strtolower(end(explode('.', $image_name)));

            if ($image_size[$i] > 20000){
                $errors[] = '<div>error uploading large size</div>';

            }

            if (! in_array($img_exet[$i] , $allowed_exet)) {
                $errors[] = '<div>error uploading not image</div>';
            }

            if (empty($errors)) {
                echo '<div style="background-color:#EEE ; padding:10px ; margin-bottom:20px" >';
                
                    move_uploaded_file($image_temp[$i] , $_SERVER['DOCUMENT_ROOT'] . '\upload\up\\' . $image_name[$i] );
                    echo 'file'. ($i +1) .'uploaded';

                echo '</div>';

            }else {
                echo '<div style="background-color:#EEE ; padding:10px ; margin-bottom:20px" >';

                    echo 'errors for file number' . ($i + 1);
                    foreach($errors as $error) {
                        echo 'error';
                    }

                echo '</div>';
            }
        }
        
        
        
        
        

        
           
        //     if ($image_size > 20000){
        //     $errors[] = '<div>error uploading large size</div>';
        //     }

        // }
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
    <input type="file" name="work[]" multiple="multiple" value="">
    <input type="submit" name="" value="upload">
  </form>  
</body>
</html>