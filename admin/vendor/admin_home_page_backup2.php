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
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<script type="text/javascript" src="../include/jquery-format.js"></script>
	<script type="text/javascript" src="../include/admin_dash_menu.js"></script>
	<link rel="stylesheet" href="../assests/css/style_dashboard.css">
	<link rel="stylesheet" href="../assests/font-awesome/css/font-awesome.min.css">
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
<header class="header"> <!-- start:header -->
	<div class="logo-container">
		<img src="https://brainstormforce.files.wordpress.com/2014/08/latest-to-use.png?w=549" alt="company-logo" class="logo">
	</div>	
	<div id="userbox" class="userbox open">
		<a href="#" data-toggle="dropdown" aria-expanded="true">
			<figure class="profile-picture">
				<img src="../assests/images/user-icon-girl.jpg" alt="user profile photo" class="image-circle">
			</figure>
			<div class="profile-info">
				<span class="name">Anjali Chavan</span>
				<span class="role">administrator</span>
			</div>
			<i class="fa custom-caret"></i>
		</a>
		<div class="dropdown-menu">
				<ul class="list">
						<li class="divider"></li>
						<li>
							<a role="menuitem" tabindex="-1" href="#"><i class="fa fa-user"></i> My Profile</a>
						</li>
						<li>
							<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
						</li>
						<li>
							<a role="menuitem" tabindex="-1" href="#"><i class="fa fa-power-off"></i> Logout</a>
						</li>
				</ul>
		</div>
	</div>
</header>

<aside  id="sidebar-left" class="sidebar-left">
	<!-- <div class="welcome_box">Welcome</div>
	<div class="menu_background">
	<div class="menu_list" id="nav"> -->
	<!-- <a href="#admin-data"> Dashboard</a> -->
	<!-- <ul>
	<li><a href="javascript: void(0)" id="showdiv" class="dashboard-sidebar">Dashboard</a></li>

	<li><p onclick="openNav()">Record</p></li>
		<ul>
		<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <a href="display_record.php">View</a>
		  <a href="#">Update</a>
		</div>
		</ul>
	</ul>
	</div>


</div> -->

	<div class="sidebar-header">
			<div class="sidebar-title">
					Navigation
			</div>
			<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
			
	</div>
</aside>
<!-- <div class="admin-screen" id="admin-data">
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
		<div class="widget-summary-box">
			<div class="documents">
				<div class="doc-img"></div>
				<div class="doc-desc"></div>
			</div>
			<div class="today-order">
				<div class="order-img"></div>
			</div>
			<div class="total-profit">
				<div class="profit-img"></div>
			</div>
			<div class="messages">
				<div class="msg-img"></div>
			</div>

 
		</div>
	</div>
	</div> -->
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