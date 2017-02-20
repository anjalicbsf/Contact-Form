<?php


    $dsn = 'mysql:host=127.0.0.1;dbname=contact_form'; 
    $username = 'root'; 
    $pwd=''; 

    try {
        $db = new PDO($dsn, $username, $pwd);
      echo "connected";
    }
    catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "this is displayed because an error was found";
        exit();
    }
    if(isset($_POST['submit'])){
                      SignUp(); 
                     echo "in submit";
                  }

    function NewUser() { 
        $fullname = $_POST['name']; 
        $userName = $_POST['user']; 
        $email = $_POST['email']; 
        $password = $_POST['pass']; 
        $query = "INSERT INTO admin_user_input (fullname,username,email,pass) VALUES ('$fullname','$userName','$email','$password')";
        $result=$db->query($query);
       
        $data = ($result->execute()) or die(errorInfo()); 
        if($data) { 
            echo "YOUR REGISTRATION IS COMPLETED..."; 
        } 
    }


    function SignUp() { 
        
        echo "in signup";
        if(!empty($_POST['user'])){echo "checkkkk";
                    $sql="SELECT * FROM websiteusers WHERE userName = '$_POST[user]' AND pass = '$_POST[pass]'";
                    $result =$db->query($sql);
                    
                     if(!$row = FETCH_ASSOC($result) or die(errorInfo())){
                        echo "newuser";
                         newuser();
                        } else
                        { 
                            echo "...YOU ARE ALREADY REGISTERED USER...";
                        } 
                    } 
                }
                     


