<?php
//echo "You have logged in successfully";
// echo '<pre>'. print_r($_POST).'</pre>';

//if ($_SERVER["REQUEST_METHOD"]==POST){

$pass="Milind@156";
require_once 'vendor/libs/PHPMailer/PHPMailerAutoload.php';

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
$mail->addAddress($_POST["email"]);  


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
    echo 'Message has been sent';}
//}
?>