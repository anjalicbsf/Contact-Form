<?php
	session_start();
	$pass="Milind@156";
	$mname= ( isset( $_POST["name"] ) ) ? $_POST["name"] : '';
	$memail=(isset($_POST["email"])) ? $_POST["email"] : '';
	require_once 'libs/PHPMailer/PHPMailerAutoload.php';

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
	You have submitted details successfully!!!<br>
	Have a nice day.";
	$mail->Subject = 'Email from Localhost';
	$mail->Body    = $bodyContent;
	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		require_once ('insert_data.php');
		$_SESSION['success'] = "You have submitted details successfully!!!";
		header("Location: http://localhost/anjali/Contact-Form");
	   } 
	die();
?>