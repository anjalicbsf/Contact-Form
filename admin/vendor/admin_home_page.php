<!-- 
<?php
// session_start();
// echo "hello out";

?> -->


<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	<script type="text/javascript" src="../include/jquery-format.js"></script>
	<script type="text/javascript" src="../include/admin_dash_menu.js"></script>
	<link rel="stylesheet" href="../assests/css/style_dashboard.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
    	$("#showdiv").click(function () {
       $("#hiddendiv").show();             
    	});
  		});
	</script>

</head>
<body>
<div class="wrap">
<div class="sub_wrap">
<div class="side_bar">
	<div class="welcome_box">Welcome</div>
	<div class="menu_background">
	<div class="menu_list" id="nav">
	<!-- <a href="#admin-data"> Dashboard</a> -->
	<a href="javascript: void(0)" id="showdiv" class="dashboard-sidebar">Dashboard</a>

	<p onclick="openNav()">Record</p>

	<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <a href="display_record.php">View</a>
		  <a href="#">Update</a>
	</div>

	</div>
</div>

</div>
<div class="admin-screen" id="admin-data">
	<div class="head_bar">
		Anjali Chavan
	</div>
	<div class="content_area" id="hiddendiv">
		<div class="dashboard">
		<h3>Dashboard</h3>
		<div class="social-media-box">
			<div class="box-inside"></div>
		</div>
		<div class="economy-box">
			<div class="dollar-section"></div>
			<div class="dollar-section-2">
		</div>
		</div>
	</div>
<!-- 	
 <table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Contat_number</th>
        <th>Location</th>
    </tr> -->
 <!--   <?php 


 	 // print_r(array_column($table_info, 'Email'));

//  	 foreach ($table_info as $key => $value) {
//     echo "$key = $value\n";
// }

    // foreach($table_info('Email') as $row) { 
    // 	echo $table_info;
    // 	echo $row;}

       // echo "<tr>";
       //  echo "<td>" . $row['id'] . "</td>";
       //  echo "<td>" . $row['Name'] . "</td>";
       //  echo "<td>" . $row['Email'] . "</td>";
       //  echo "<td>" . $row['Contact_number'] . "</td>";  
       //  echo "<td>" . $row['Location'] . "</td>";

 // if(isset($_SESSION['table_array'])){
 //   				$msg="hello in";
 //       			echo $msg;
 //     		  	$table_info=array();
 //    			 $table_info=$_SESSION['table_array'];
 // 				 // print_r ($table_info);
 //   				print('<table>');
	// 			for($i = 0; $i < count($table_info); $i++) {
 //   				 print('<tr>');
 //   				 for($ii = 0; $ii < count($table_info[$i]); $ii++) {
 //       				 print("<td>{$table_info[$i][$ii]}</td>");
 //    				}
 //   					 print('</tr>');
	// 				}
	// 				print('</table>');
   		

	
 //     session_destroy(); }
    ?> -->
</table> 
</div>
</div>
</body>
</html>	