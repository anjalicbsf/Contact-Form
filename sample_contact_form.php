<!DOCTYPE html>
<html>
<head>
	<title>Basic_form</title>
	<style>
		.error{
				color: red;
			  }
		body{
				background-color: powderblue;
			}
		.title{
				color: blue;
				font-family: arial;
				font-weight: 400;

			}	
	  
	</style>
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
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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


		<?php
			echo "<h2>Your Input:</h2>";
			echo "Name-$name";
			echo "<br>";
			echo "Email Id-$email";
			echo "<br>";
			echo "Contact number-$number";
			echo "<br>";
			echo "Gender-$gender";
			echo "<br>";
			echo "Comment-$comment";
		?>


	</form>
</body>
</html>