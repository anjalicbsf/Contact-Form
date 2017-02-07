<!DOCTYPE html>
<html>
<head>
	<title>Send mail with user input</title>
	<style>
		.error{
			color: red;
		}
		.title{
			color: blue;
			font-weight: 400;
		}
	</style>
</head>
<body>

<?php

$email=$emailErr="";

if ($_SERVER["REQUEST_METHOD"]==POST){
									if (empty($_POST["email"])) 
										{
											$emailErr="Email is required";
										}	
									else{
											$email=test_input($_POST["email"]);
											 if (!filter_var($email, FILTER_VALIDATE_EMAIL))
												{
													$emailErr="Enter email in example@abc.xyz  format";
												}
										}

										if (empty($_POST["message"]))
											{
  											   $message= "";
  											} 
  										else{
    											$message = test_input($_POST["message"]);
 											}
									}

function test_input($data)
				{
				$data=trim($data);
				$data=stripslashes($data);
				$data=htmlspecialchars($data);
				return $data;
				}

		
?>
<h3>Sample contact form with validation</h3>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<span class="title">Email </span><input type="text" name="email">
	<span class="error">*<?php echo "$emailErr";  ?></span><br><br>
	<span class="title">Write your message:</span> <textarea name="message" rows="5" cols="30"></textarea><br><br>

	<input type="submit" name="submit" value="submit">
</form


<?php

if ($_SERVER["REQUEST_METHOD"]==POST){

$pass="Milind@156";
require_once 'libs/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                
$mail->Host = 'smtp.gmail.com';                  
$mail->SMTPAuth = true;                        
$mail->Username = $email;          
$mail->Password = $pass; 
$mail->SMTPSecure = 'tls';                         
$mail->Port = 587;                                 

$mail->setFrom($email, 'Anjali Chavan',0);
$mail->addReplyTo($email, 'Anjali Chavan');
$mail->addAddress($email);  


$mail->isHTML(true);  


//$bodyContent = 'This is the <b>simple email</b> sent from localhost using PHP ';
//$bodyContent='This file contains  <h3 style="color:red;">AUDI CAR</h3> image as attachment';
$bodyContent=$message;
$mail->Subject = 'Email from Localhost';
$mail->Body    = $bodyContent;


$mail->addAttachment('C:\Users\vrunda\Desktop\audi.png'); 


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
}
?>



</body>
</html>