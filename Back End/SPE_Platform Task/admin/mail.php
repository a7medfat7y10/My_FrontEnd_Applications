<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'src/PHPMailer.php';
    require 'src/Exception.php';
    require 'src/SMTP.php';

    
        
    $mailname ="our name";
    $mailemail ="ahmedhimdan828@gmail.com";
    $mailsubject ="our subject";
    $mailcontent ="our content";

		
		$ourmail = "hrmcommittee.spesusc.2021@gmail.com";

			// Instantiation and passing `true` enables exceptions
		$mail = new PHPMailer(true);

		try {
				//Server settings
				$mail->SMTPDebug = 2;                    
				
				
				// $mail->isSMTP();                                    // Set mailer to use SMTP
				// $mail->Host = 'form.spesusc.com';                   // Specify main and backup SMTP servers
				// $mail->SMTPAuth = true;                             // Enable SMTP authentication
				// $mail->Username = 'hr@form.spesusc.com';            // SMTP username
				// $mail->Password = 'hrspe2020';                      // SMTP password
				// $mail->SMTPSecure = 'SSL';                          // Enable TLS encryption, `ssl` also accepted
				// $mail->Port = 290;  



				
				$mail->isSMTP();                                    // Set mailer to use SMTP
				$mail->Host = 'smtp.gmail.com';                   // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                             // Enable SMTP authentication
				$mail->Username = 'hrmcommittee.spesusc.2021@gmail.com';            // SMTP username
				$mail->Password = 'hrm20202021';                      // SMTP password
				$mail->SMTPSecure = 'tls';                          // Enable TLS encryption, `ssl` also accepted
				$mail->Port = 587;  

















				//Recipients
	

				$mail->setFrom($ourmail , $mailname );
				$mail->addAddress($mailemail);                      // Name is optional
				$mail->isHTML(true);    
				$mail->addReplyTo($ourmail , $mailname );

				$mail->Subject = $mailsubject;
				$mail->Body    = $mailcontent;
				// Attachments
				//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
				//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
				$mail->send();
				echo 'Message has been sent';
		} catch (Exception $e) {
				echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}