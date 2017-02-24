<?php 
echo $_POST['user_id'];
$delID=$_POST['user_id'];
require 'databse-connection.php'; 
$sql_del = 'DELETE FROM contact_form_input WHERE id="'.$delID.'"';
$db->query($sql_del);




