<?php
    global $db;
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