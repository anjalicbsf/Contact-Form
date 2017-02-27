<script type="text/javascript" src="../include/admin_dash_menu.js"></script>
<link rel="stylesheet" href="../assests/css/style.css">
<?php
if(isset($_GET['update']))
{
	$updateID=$_GET['update'];
	echo "hello";
	echo $updateID;
	require 'databse-connection.php'; 
	$sql_update = 'SELECT * FROM contact_form_input WHERE id="'.$updateID.'"';

	foreach ($db->query($sql_update) as $row)
	{
	echo "<form name='updateform' method='post' action='update_function.php'>";
	echo "<table align='center' class='update_form'>";
	echo"<tr>";
	echo"<td>Update Information</td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td> <input type='hidden' name='id' id='id' value='{$row['0']}'>";
	echo"<tr>";
	echo"<td>Name : <input type='text' name='Name' id='Name' value='{$row['1']}'>";
	echo"<tr>";
	echo"<td>Email : <input type='text' name='Email' id='Email' value='{$row['2']}'>";
	echo"<tr>";
	echo"<td>Contact-number : <input type='text' name='Contact_number' id='Contact_number' value='{$row['3']}'>";
	echo"</tr>";
	echo"<tr>";
	echo"<td>Location : <input type='text' name='Location' id='Location' value='{$row['4']}'>";
	echo"<tr>";
	echo "<td><input type='submit' name='sub' value='submit' id='update_submit'>";
	echo "<table>";
	echo "</form>";
	
	}


}

?>