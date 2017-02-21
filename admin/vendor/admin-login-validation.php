<?php 

echo "in admin login validation";
	require 'databse-connection.php';  
	$user= $_POST['val'];
	$pass=$_POST['val2'];
  echo $user;
  echo $pass;

 $sql = 'SELECT * FROM admin_user_input WHERE username="'.$user.'"'; 
 // $sql = 'SELECT * FROM admin_user_input WHERE username="'.$user.'" AND pass="'.$pass.'"';
$result = $db->query($sql);
if($row = $result->fetch(PDO::FETCH_ASSOC)){
                     
                       // require 'admin_home_page.php'; 
                        echo "matched";
                       include 'admin_home_page.php';
                       echo "matched";
                         
                        } else
                        { 
                            echo "not matched";
                        } 
                     
                
                     
     
     // $result->execute();
   //  $rs=array();
   //  $rs=$result;
   // print_r($result);
   //      if($row = $result->fetch(PDO::FETCH_ASSOC)){
   //            return true;
   //            echo "true";

   //          }else{ 
   //                  return false;
   //                  echo "false";
   //                } 

 
// die();
 
 // echo 
 //    "<table class='record_table'>
 //    <tr>
 //    <th>ID</th>
 //    <th>Name</th>
 //    <th>Email</th>
 //    <th>Contact_Number</th>
 //    <th>Location</th>
 //    </tr>"
 //    ;
    

 //    foreach ($db->query($sql) as $row)
 //    {
 //    echo "<tr>";
 //    echo "<td>" . $row['ID'] . "</td>";
 //    echo "<td>" . $row['fullname'] . "</td>";
 //    echo "<td>" . $row['username'] . "</td>";
 //    echo "<td>" . $row['email'] . "</td>";  
 //    echo "<td>" . $row['pass'] . "</td>";
 //    }

 //  echo "</tr>";
 //  echo "</table>";
   
               
                     
