
<link rel="stylesheet" href="../assests/css/style.css">


 <?php


// session_start();

    $dsn = 'mysql:host=127.0.0.1;dbname=contact_form'; 
    $username = 'root'; 
    $pwd=''; 

    try {
        $db = new PDO($dsn, $username, $pwd);

      //echo "connected";
    }
    catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "this is displayed because an error was found";
        exit();
    }

    $result = $db->query('SELECT * FROM contact_form_input');
    $result->execute();

     // $data = array();    
     // $data=$result->fetch(PDO::FETCH_ASSOC);


     // while ($row = $result->fetch()) {
     //        $data[] = array('id' => $row['id'], 'Name' => $row['Name'], 'Email' => $row['Email'], 'Contact_number'=> $row['Contact_number'],'Location'=> $row['Location'] );
     //    }



$rs=array();

while ($row=$result->fetch(PDO::FETCH_ASSOC)) {
    $row_array['id'] = $row['id'];
    $row_array['Name'] = $row['Name'];
    $row_array['Email'] = $row['Email'];
      $row_array['Contact_number'] = $row['Contact_number'];
        $row_array['Location'] = $row['Location'];


    array_push($rs,$row_array);
}

echo json_encode($rs);
    //    $_SESSION['table_array'] = $data;
    // header("Location: admin_home_page.php");
 
    ?>


      
   