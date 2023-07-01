<?php


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       $user = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
       $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
       $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
       $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
       $formError = [];
       if (strlen($user) < 3) {
           $formError[] = 'please Enter Correct Full Name';
       }
       if (strlen($subject) < 3) {
           $formError[] = 'Please, Enter Correct subject';
       }
       if (strlen($message) < 3) {
           $formError[] = 'Please Enter Correct Message';
       }

       if (isset($formError)) {
           foreach($formError as $error) {
               echo '<div class="alert alert-danger">';
               echo $error;
               echo "</div>";
           }
       }

       $headers = 'From :' . $email . '\r\n';
       $eegsEmail = 'AbdalrahmanAlmesery92460@gmail.com';
       $sub = 'Contact Form';


    if(empty($formError)) {
        mail($eegsEmail, $sub, $message, $headers);
        echo '<div class="mt-4 mb-4 alert text-center alert-success">Message Send Successfully <br> We Will Contact You Soon</div>';
        $user = '';
        $message = '';
        $email = '';
        $subject = '';
    }


    }

?>
<div class="form-page">
    <form method="post"  action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <div class="input-name">
            <input type="text" name="username" placeholder="Type Your Full Name..." required>
        </div>
        <div class="input-email">
            <input type="email" name="email" placeholder="Type Your Email..." required>
        </div>
        <div class="input-subject">
            <input type="text" name="subject" placeholder="Type Your Subject..." required>
        </div>

        <div class="input-message">
            <textarea name="message" placeholder="Type Your Message" required></textarea>
        </div>
        <button type="submit" class="btn btn-success ">Send</button>
    </form>
</div>
