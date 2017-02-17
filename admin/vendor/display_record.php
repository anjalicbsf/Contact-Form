<link rel="stylesheet" href="../assests/css/style.css">
<?php


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

    echo 
    "<table class='record_table'>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Contact_Number</th>
    <th>Location</th>
    </tr>"
    ;
    $sql = 'SELECT * FROM contact_form_input';

    foreach ($db->query($sql) as $row)
    {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Email'] . "</td>";
    echo "<td>" . $row['Contact_number'] . "</td>";  
    echo "<td>" . $row['Location'] . "</td>";
    }

  echo "</tr>";
  echo "</table>";
  echo "</div>";


      
    