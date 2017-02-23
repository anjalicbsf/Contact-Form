<?php
 session_start();
 if (!(isset($_SESSION['test_id']))) {
	 	header("Location: http://localhost/anjali/Contact-Form/admin/index.php");
	}
	 	
 // }
	// if (!((isset($_SESSION['test_id']))AND(isset($_SESSION['admin_fullname'])))) {
	//  	header("Location: http://localhost/anjali/Contact-Form/admin/index.php");
	//  	echo "in";
	// }
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<!-- 	Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	<!-- Jquery -->
	<script src="../assests/js/jquery-3.1.1.min.js"></script>

	<!-- Javascript -->
	<script type="text/javascript" src="../include/jquery-format.js"></script>
	<script type="text/javascript" src="../include/admin_dash_menu.js"></script>
	<script src="../assests/js/admin.js"></script>

	<!-- 	CSS -->
	<link rel="stylesheet" href="../assests/css/style_dashboard.css">
	<link rel="stylesheet" href="../assests/font-awesome/css/font-awesome.min.css">
	<script>

	$(document).ready(function(){
    $(".nav-parent").click(function(){
        $(".nav-children").toggleClass("nav-expanded");
    								});
		});

    </script>

</head>
<body>
<div class="wrap">
<div class="sub_wrap">
<header class="header"> <!-- Header start -->
	<div class="logo-container">
		<img src="https://brainstormforce.files.wordpress.com/2014/08/latest-to-use.png?w=549" alt="company-logo" class="logo">
	</div>	
	<div id="userbox" class="userbox open">
		<a href="#" data-toggle="dropdown" aria-expanded="true">
			<figure class="profile-picture">
				<img src="../assests/images/user-icon-girl.jpg" alt="user profile photo" class="image-circle">
			</figure>
			<div class="profile-info">
				
				<span class="name">
				<?php
                        if(isset($_SESSION['admin_fullname'])){
							$admin_name=$_SESSION['admin_fullname'];
                         	echo $admin_name;
                         }      
                ?>
               	</span>
				<span class="role">administrator</span>
			</div>
			<i class="fa custom-caret" id="dropdown-sign"></i>
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
							<a role="menuitem" tabindex="-1" href="log-out.php"><i class="fa fa-power-off"></i> Logout</a>
						</li>
				</ul>
		</div>
	</div>
</header><!--  Header end -->
<div class="content-blck">
<aside  id="sidebar-left" class="sidebar-left"> <!--start left side bar  -->
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
					<li class="nav-parent" >
						<a>
							<i class="fa fa-table" aria-hidden="true"></i>
							<span id="tables">Tables</span>
						</a>
						<ul class="nav nav-children">
						 	<!-- <a href="#" onclick="loadDoc();"> -->
								  <li><button onclick="loadDoc()" class="view-button">
								 
								    View</button>

								</li>
						 <!-- 	</a>  -->

						</ul>
					</li>
				</ul>
			</div>
		</div>
</aside> <!-- end of side bar -->
<section class="content-body"> <!-- Start right content screen -->
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
	<div class="view-table" id="view-table">
	
	</div>
	<div class="widget-summary-box" id="widget-summary-box">
	
				<div class="block col11">
					<div class="widget-block-panel col11-panel">
						<div class="widget-block-icon">
							<div class="icon-base col11-icon">
								<i class="fa fa-life-ring icon" aria-hidden="true"></i>
							</div>
						</div>
						<div class=" widget-block-desc">
							<h4 class="desc-title">Support Questions</h4>
							<strong class="desc-amount">1284</strong>
							<div class="widget-desc-footer"></div>
						</div>

					</div>
				</div>
				<div class="block col12">
					<div class="widget-block-panel col12-panel">
						<div class="widget-block-icon">
							<div class="icon-base col12-icon">
								<i class="fa fa-usd icon" aria-hidden="true"></i>	
							</div>
							<div class="icon-surface"></div>
						</div>
						<div class=" widget-block-desc">
								<h4 class="desc-title">Total Profit</h4>
								<strong class="desc-amount">$ 14,840.4</strong>
								<div class="widget-desc-footer"></div>
						</div>
					</div>
				</div>
		
				<div class="block col21">
					<div class="widget-block-panel col21-panel">
						<div class="widget-block-icon">
							<div class="icon-base col col21-icon">
								<i class="fa fa-shopping-cart icon" aria-hidden="true"></i>
							</div>
							<div class="icon-surface"></div>
						</div>
						<div class=" widget-block-desc">
								<h4 class="desc-title">Today's Orders</h4>
								<strong class="desc-amount">40</strong>
								<div class="widget-desc-footer"></div>
						</div>
					</div>
				</div>
				<div class="block col22">
					<div class="widget-block-panel col22-panel">
						<div class="widget-block-icon">
							<div class="icon-base col22-icon">
								<i class="fa fa-user icon" aria-hidden="true"></i>
							</div>
							<div class="icon-surface"></div>
						</div>
						<div class=" widget-block-desc">
								<h4 class="desc-title">Today's Visitors</h4>
								<strong class="desc-amount">3765</strong>
								<div class="widget-desc-footer"></div>
						</div>
					</div>
				</div>
	</div>		
</section><!-- End right content screen -->
</div>
</table> 
</div>
</div>
</body>
</html>	