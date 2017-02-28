<?php
		$pass="Milind@156";
		$mname=$_POST['name'];
		$memail=$_POST['email']; 
		require_once '../vendor/libs/PHPMailer/PHPMailerAutoload.php';

		$mail = new PHPMailer;

		$mail->isSMTP();                                
		$mail->Host = 'smtp.gmail.com';                  
		$mail->SMTPAuth = true;                        
		$mail->Username = "anjalic@bsf.io";          
		$mail->Password = $pass; 
		$mail->SMTPSecure = 'tls';                         
		$mail->Port = 587;                                 

		$mail->setFrom("anjalic@bsf.io", 'Anjali Chavan',0);
		$mail->addReplyTo("anjalic@bsf.io", 'Anjali Chavan');
		$mail->addAddress($memail);  


		$mail->isHTML(true);  

		$bodyContent="Hello....$mname.<br>
		You have signed up successfully!!!<br>
		Have a nice day.";
		$mail->Subject = 'Email from Localhost';
		$mail->Body    = $bodyContent;
		if(!$mail->send()) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			header("Location: http://localhost/anjali/Contact-Form/admin/vendor/sign-up.php");
		   
		} 
		die();
?>