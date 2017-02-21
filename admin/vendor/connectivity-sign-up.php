<?php

    //  global $db;
    // $dsn = 'mysql:host=127.0.0.1;dbname=contact_form'; 
    // $username = 'root'; 
    // $pwd=''; 

    // try {
    //     $db = new PDO($dsn, $username, $pwd);
    //   echo "connected";
    // }
    // catch (PDOException $e) {
    //     $error_message = $e->getMessage();
    //     echo "this is displayed because an error was found";
    //     exit();
    // }
    require 'databse-connection.php';    
    if(isset($_POST['submit'])){
                      SignUp(); 
                     echo "in submit";
                  }

    function NewUser() { 
        global $db;
        $fullname = $_POST['name']; 
        $userName = $_POST['user']; 
        $email = $_POST['email']; 
        $password = $_POST['pass']; 
        $query = "INSERT INTO admin_user_input (fullname,username,email,pass) VALUES ('$fullname','$userName','$email',md5('$password')";
        $result=$db->query($query);
       
        // $data = ($result->execute()) or die(errorInfo()); 
        if( $result) { 
            echo "YOUR REGISTRATION IS COMPLETED..."; 
        } 
    }


    function SignUp() { 
        global $db;
        echo "in signup";
        if(!empty($_POST['user'])){
                echo "checkkkk";
                    $sql="SELECT * FROM admin_user_input WHERE username = '$_POST[user]' AND pass = '$_POST[pass]'";
                    $result = $db->query($sql);
                    // $result->execute();

                   
                    // or die($db->errorInfo())
                     if(!$row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo "newuser";
                         newuser();
                        } else
                        { 
                            echo "...YOU ARE ALREADY REGISTERED USER...";
                        } 
                    } 
                }
                     


