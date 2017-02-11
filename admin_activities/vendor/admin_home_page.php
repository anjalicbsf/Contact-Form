<link rel="stylesheet" href="../assests/css/style.css">

<?php
$varname=$_POST["admin_username"];

echo '<div class="admin_home_page_heading">'.'Welcome'. '&nbsp;' .'&nbsp;' .'&nbsp;' .$varname.'</div>';

  echo '<html>
  		
		<body class="admin_home_background">
		<form name="myForm" action="display_record.php" method="POST">
		    <div class="admin_view_record_button"><input type="submit" name="View all Records" value="View Record"></div>
		</form>
		</body>
		
		</html>
		';

	