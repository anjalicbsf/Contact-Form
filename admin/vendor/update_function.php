
<script src="../assests/js/jquery-2.2.0.js"></script>
<script type="text/javascript" src="../include/admin_dash_menu.js"></script>



<?php 

require 'databse-connection.php'; 
if(isset($_POST['sub']))
{
	$varname=$_POST['Name'];
	$varemail=$_POST['Email'];
	$varconact_no=$_POST['Contact_number'];
	$varlocation=$_POST['Location'];
	// $varname=$_POST['formDetails']['name'];
	// $varemail=$_POST['formDetails']['Email'];
	// $varconact_no=$_POST['formDetails']['Contact-number'];
	// $varlocation=$_POST['formDetails']['Location'];

	 $sql_update ="UPDATE contact_form_input SET Name='$varname',Email='$varemail',Contact_number='$varconact_no',Location='$varlocation'";
	
	 $db->query($sql_update);
	 // require 'update_record.php';

	  echo "<script>show_update();</script>";
	
}





