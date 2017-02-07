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
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->isHTML(true);  


$bodyContent = 'This is the simple email sent from localhost using PHP ';

$mail->Subject = 'Email from Localhost';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>
