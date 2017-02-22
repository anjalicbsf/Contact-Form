<?php 
session_start();
if(isset($_POST['submit'])) {
    require 'databse-connection.php';  
    $user= $_POST['admin_username'];
	 // $pass=$_POST['admin_password'];
    $pass= md5($_POST['admin_password']);
}

$sql = 'SELECT * FROM admin_user_input WHERE username="'.$user.'" AND pass="'.$pass.'"';
$result = $db->query($sql);
    if($row = $result->fetch(PDO::FETCH_ASSOC)){
        // require 'admin_home_page.php'; 
        foreach ($db->query($sql) as $r){
          $admin_fullname= $r['fullname'];
          // echo $admin_fullname;
        }
        $test_id="o30jam6peehrkor6mh83tis3u1";
        $_SESSION['admin_fullname'] =$admin_fullname;
        $_SESSION['dumy_id']=$test_id;
        header("Location: http://localhost/anjali/Contact-Form/admin/vendor/admin_home_page.php");
    }else{ 
          $_SESSION['admin_success'] = "<span class='admin_err_msg'>*Username or password is incorrect!</span>";
          header("Location: http://localhost/anjali/Contact-Form/admin/");
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
   
               
                     
