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
<div class="content-blck">
<aside  id="sidebar-left" class="sidebar-left">
		<div class="sidebar-header">
			<div class="sidebar-title">
					Navigation
			</div>
			<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed"  data-fire-event="sidebar-left-toggle">
					<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
			</div>
		</div>
		<div class="sidebar-content">
			<div class="sidebar-menu">
				<ul class="nav-main">
					<li class="nav-active">
						<a href="admin_home_page.php">
							<i class="fa fa-home" aria-hidden="true"></i>
							<span>Dashboard</span>
						</a>
					</li>
					<li class="nav-parent"></li>
				</ul>
			</div>
		</div>
</aside> <!-- end of side bar -->
<section class="content-body">
	<header class="page-header">
						<h2>Dashboard</h2>
						<div class="right-wrapper">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Dashboard</span></li>
							</ol>
						</div>
	</header>
	<div class="widget-summary-box">
			<div class="admin-block">
				Test-1
			</div>
			<div class="admin-block">
				Test-1
			</div>
			<div class="admin-block">
				Test-1
			</div>
			<div class="admin-block">
				Test-1
			</div>
	</div>		
</section>
</div>
</table> 
</div>
</div>
</body>
</html>	