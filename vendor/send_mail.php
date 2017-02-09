
<?php
//echo "You have logged in successfully";
// echo '<pre>'. print_r($_POST).'</pre>';

//if ($_SERVER["REQUEST_METHOD"]==POST){

$pass="Milind@156";
$mname=$_POST["name"];
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
$mail->addAddress($_POST["email"]);  


$mail->isHTML(true);  


//$bodyContent = 'This is the <b>simple email</b> sent from localhost using PHP ';
//$bodyContent='This file contains  <h3 style="color:red;">AUDI CAR</h3> image as attachment';
$bodyContent="Hello....$mname.<br>
You have logged in successfully!!!<br>
Have a nice day.";
$mail->Subject = 'Email from Localhost';
$mail->Body    = $bodyContent;


//$mail->addAttachment('C:\Users\vrunda\Desktop\audi.png'); 


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'You have logged in successfully';}






$varname=$_POST["name"] ;
$varemail=$_POST["email"];
$varnumber=$_POST["number"];
$varlocation=$_POST["location"];


$link = PDO('localhost', 'root', '');

if (!$link) {
            die('Could not connect: ' . $link->errorInfo());
            }
echo 'Connected successfully';





	$sql = "INSERT INTO contact_form_input (Name,Email,Contact_number,Location) VALUES ( '$varname','$varemail','$varnumber','$varlocation )";
      
//    // mysql_select_db('contat_form');
//    // $retval = mysql_query( $sql, $link );
   
//    // if(! $retval ) {
//    //    die('Could not enter data: ' . mysql_error());
//    // }
   
//    echo "Entered data successfully\n";
   
//    mysql_close($link);
//}
?>