<?php
    session_start();
    require 'databse-connection.php'; 
    if(isset($_POST['submit'])){
        SignUp(); 
    }

    function NewUser(){ 
        global $db;
        $fullname = $_POST['name']; 
        $userName = $_POST['user']; 
        $email = $_POST['email']; 
        $get_password = $_POST['pass']; 
        $set_password=md5($get_password);
        // echo $set_password;
        $query = "INSERT INTO admin_user_input (fullname,username,email,pass) VALUES ('" . $fullname . "','" . $userName . "','" . $email . "','" . $set_password . "')";
        $result=$db->query($query);
        if( $result) {
                $_SESSION['signup_msg'] = "<span class='admin_signup_msg'>YOUR REGISTRATION IS COMPLETED!</span>"; 
                require '../assests/admin_send_mail.php';
                // header("Location: http://localhost/anjali/Contact-Form/admin/vendor/sign-up.php");
       } 
    }   


    function SignUp(){ 
        global $db;
        // echo "in signup";

        if(!empty($_POST['user'])){
                $get_new_password=$_POST['pass']; 
                $set_new_password=md5($get_new_password);
                $set_user=$_POST['user'];

                $sql="SELECT * FROM admin_user_input WHERE username = '".$set_user."' AND pass = '".$set_new_password."'";
                $result = $db->query($sql);
                if(!$row = $result->fetch(PDO::FETCH_ASSOC)){
                    // echo "newuser";
                    newuser();
                } else{ 
                    $_SESSION['signup_msg'] = "<span class='signup_warning'>*YOU ARE ALREADY A REGISTERED USER!</span>";
                    header("Location: http://localhost/anjali/Contact-Form/admin/vendor/sign-up.php");
                  } 
        }else{
            $_SESSION['signup_msg'] = "<span class='signup_warning'>*FIELDS CAN NOT BE EMPTY!</span>";
            header("Location: http://localhost/anjali/Contact-Form/admin/vendor/sign-up.php");
        }
    }
                     


