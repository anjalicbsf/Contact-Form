<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
<?php include 'assets\css\style.php'; ?>

<h1 class='heading'>Sign up form for student</h1>
<p class="desc"> Fill all fields with valid details and submit.</p><br><br>

<form  name="form" action="vendor/send_mail.php" method="POST">
 <div id="myForm"></div>
<div align="center" class="label">Name :<input type="text" name="name" size="20" class="inputbox"></div><br><br>

<div align="center" class="label">Email :<input type="text" name="email" size="20" class="inputbox"></div><br><br>

<div align="center" class="label">Contact Number :<input type="text" name="number" size="20" class="inputbox"></div><br><br>

<div align="center" class="label">Location :<input type="text" name="location" size="20" class="inputbox"></div><br><br>

<div align="center"> <input type="submit" name="submit" onclick="return(validate());"></div>
	

</form>
<script type="application/javascript" src="include\form_validation_trial.js"></script>

</body>
</html>