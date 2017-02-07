<?php
require_once 'libs/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                
$mail->Host = 'smtp.gmail.com';                  
$mail->SMTPAuth = true;                        
$mail->Username = 'anjalic@bsf.io';          
$mail->Password = 'Milind@156'; 
$mail->SMTPSecure = 'tls';                         
$mail->Port = 587;                                 

$mail->setFrom('anjalic@bsf.io', 'Anjali Chavan',0);
$mail->addReplyTo('anjalic@bsf.io', 'Anjali Chavan');
$mail->addAddress('anjalic@bsf.io');  


$mail->isHTML(true);  


$bodyContent = 'This is the <b>simple email</b> sent from localhost using PHP ';
$bodyContent='This file contains  <h3 style="color:red;">AUDI CAR</h3> image as attachment';
$mail->Subject = 'Email from Localhost';
$mail->Body    = $bodyContent;


$mail->addAttachment('C:\Users\vrunda\Desktop\audi.png'); 


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>