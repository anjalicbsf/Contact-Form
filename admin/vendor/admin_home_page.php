<link rel="stylesheet" href="../assests/css/style_dashboard.css">

<!-- <?php
$varname=$_POST["admin_username"];
?> -->

<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	<script type="text/javascript" src="../include/admin_dash_menu.js"></script>

</head>
<body>
<div class="wrap">
<div class="sub_wrap">
<div class="side_bar">
	<div class="welcome_box">Welcome</div>
	<div class="menu_background">
	<div class="menu_list">
	<p> Dashboard</p>
	<p onclick="openNav()">Record</p>

	<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <a href="display_record.php" >View</a>
		  <a href="#">Update</a>
	</div>

	</div>
</div>

</div>
<div class="admin_screen">
	<div class="head_bar"></div>
	<div class="content_area"></div>
</div>

</div>
</body>
</html>

 
	