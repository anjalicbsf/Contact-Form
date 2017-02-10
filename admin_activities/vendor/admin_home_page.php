<?php


echo '<link rel="stylesheet" type="text/css" href="assests/css/style.css">';

$varname=$_POST["admin_username"];

echo '<div class="home_page_heading">'.'Welcome'.$varname.'</div>';

  echo '<html>
  		
		<body class="admin_home_background">
		<form name="myForm" action="display_record.php" method="POST">
		    <div class="admin_view_record_button"><input type="submit" name="View all Records" background: transparent;></div>
		</form>
		</body>
		
		</html>
		';

	