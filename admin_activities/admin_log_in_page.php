<!DOCTYPE html>
<html>
<head>
	<title>Admin login page</title>
	<link rel="stylesheet" type="text/css" href="assests/css/style.css"> 
	<script type="text/javascript" src="include/admin_validation.js"></script>

</head>
<body>
	<div class="login_box">
		<div class="heading">
			<h1>Admin Login Form</h1>
		</div>

		<table class="table_css">

			<form name="form" method="POST" action="vendor/admin_home_page.php" >

			<tr>
				<td><label>Username</label></td>
			</tr>
			<tr>
				<td><input type="text" name="admin_username"></td>
				
			</tr>
			<tr>
				<td><label>Password</label></td>
			</tr>
			<tr>
				<td><input type="Password" name="admin_password"></td>
			</tr>
			<tr>
				<td>
				<div class="submit_circle">
				<input type="submit" name="submit" onclick="return (validate())" >
				</div>
				</td>

			</tr>
			<tr>
				<td>
                    <div id="fname"></div>
                 </td></td>
			</tr>
			</div>
			

		</table>

		</form>
	
</body>
</html>