<?php 
session_start();
  if(isset($_POST['submit'])) {
      require 'databse-connection.php';  
      $user= $_POST['admin_username'];
      $pass= md5($_POST['admin_password']);
  }

  $sql = 'SELECT * FROM admin_user_input WHERE username="'.$user.'" AND pass="'.$pass.'"';
  $result = $db->query($sql);
      if($row = $result->fetch(PDO::FETCH_ASSOC)){
            foreach ($db->query($sql) as $r){
                $admin_fullname= $r['fullname'];
            }
            $_SESSION['admin_fullname'] =$admin_fullname;
            $_SESSION['test_id']=session_id();
            header("Location: http://localhost/anjali/Contact-Form/admin/vendor/admin_home_page.php");
        }else{ 
              $_SESSION['admin_success'] = "<span class='admin_err_msg'>*Username or password is incorrect!</span>";
              header("Location: http://localhost/anjali/Contact-Form/admin/");
        } 
                      
               
                     
