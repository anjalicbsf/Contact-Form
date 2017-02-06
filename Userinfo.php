<!DOCTYPE html>
<html>
<head>
	<title>User info</title>
</head>
<body>
<h2>Your Input</h2>
<?php 

$name=$email=$gender=$comment="";
$name=$_POST["name"];
echo "Name:$name";

$email=$_POST["email"];
echo "Email:&email";

$gender=$_POST["gender"];
echo "Gender:$gender";

$comment=$_POST["comment"];
echo "comment:$comment";






 ?>
</body>
</html>