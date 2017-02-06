<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
		$name=$email=$gender=$comment=$number="";
		$nameErr=$emailErr=$genderErr=$commentErr=$numberErr="";

		if ($_SERVER["REQUEST_METHOD"]==POST){
												if (empty($_POST["name"])) 
													{
														$nameErr="Name is required";
													}
												else{  
														$name=test_input($_POST["name"]);
														if (preg_match("/^[a-zA-Z ]*$/",$name)==false)
														{
															$nameErr="Only letters and white spaces are allowed";
														}
													}	


												 if (empty($_POST["email"])) 
													{
														$emailErr="Email is required";
												 	}	
												else{
														$email=test_input($_POST["email"]);
														 if (!filter_var($email, FILTER_VALIDATE_EMAIL))
														 {
															$emailErr="Enter email in example@abc.xyz  format"	;	
														 }
													}



													

												if (empty($_POST["gender"])) 
													{
  														 $genderErr = "Gender is required";
  													} 
  												else{
   														 $gender = test_input($_POST["gender"]);
 													}
													
												if (empty($_POST["comment"]))
													{
  													  $comment = "";
  													} 
  												else{
    														$comment = test_input($_POST["comment"]);
 													}

 												if (empty($_POST["number"]))
 													{
 														$numberErr="Contact number is required";
 													}
 												else{
 														$number=test_input($_POST["number"]);
 														if ((preg_match("/([7-9]{9})/", $number)==false)) 
 														 {
 															$numberErr="Enter correct number.";
 														 }
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
	<form method="POST" action="connection_for_contact_form.php">
		 <span class="title">Name</span> <input type="text" name="name" >
		<span class="error">*<?php echo "$nameErr"; ?></span><br><br>

		<span class="title">Email </span><input type="text" name="email">
		<span class="error">*<?php echo "$emailErr";  ?></span><br><br>

		<span class="title">Contact number </span><input type="text" name="number">
		<span class="error">*<?php echo "$numberErr";  ?></span><br><br>

		<span class="title">Gender:</span><br>
		<input type="radio" name="gender"  value="Female">Female;
		<input type="radio" name="gender" value="Male">Male;
		<span class="error">* <?php echo "$genderErr";?></span><br><br>


		<span class="title">Comment:</span> <textarea name="comment" rows="5" cols="30"></textarea><br><br>

		<input type="submit" name="submit" value="submit">
		</form>



	
<!-- <?php 
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';

$sql = 'INSERT INTO user_input '.
      '(Name,Email,Number,Gender,Comment) '.
      'VALUES ( "$name", "$email", "$number", "$gender","$comment")';
      
   mysql_select_db('anjali');
   $retval = mysql_query( $sql, $link );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   
   echo "Entered data successfully\n";
   
   mysql_close($link);

?> -->

</body>

</html>