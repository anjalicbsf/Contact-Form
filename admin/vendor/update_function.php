<?php 
	require 'databse-connection.php'; 
	$varname=$_POST['Name'];
	$varemail=$_POST['Email'];
	$varconact_no=$_POST['Contact_number'];
	$varlocation=$_POST['Location'];

	 $sql_update ="UPDATE contact_form_input SET Name='$varname',Email='$varemail',Contact_number='$varconact_no',Location='$varlocation' where id=" . $_POST['id'];
	
	 $response = $db->query($sql_update);
	 if($response) {
	 	$result['status'] = 'true';
	 } else {
	 	$result['status'] = "false";
	 }
	 echo json_encode($result);
	 die();


	






