<?php
 $varname=$_POST["name"] ;
 $varemail=$_POST["email"];
 $conact_no=$_POST["contact_number"];
 $varlocation=$_POST["location"];



	$dsn = 'mysql:host=127.0.0.1;dbname=contact_form'; 
    $username = 'root'; 
    $pwd=''; 

    try {
        $db = new PDO($dsn, $username, $pwd);
      //  echo "connected";
    }
    catch (PDOException $e) {
        $error_message = $e->getMessage();
        //echo "this is displayed because an error was found";
        exit();
	}

 	 $sql ="INSERT INTO contact_form_input(Name,Email,Contact_number,Location)VALUES ('$varname','$varemail','$conact_no','$varlocation')";

    $db->exec($sql);

      
