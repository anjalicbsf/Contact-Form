<link rel="stylesheet" href="../assests/css/style.css">




    <div class='admin_display_page'><div class='admin_record_table_title'>Here is the record of all students</div>

   <?php   $dsn = 'mysql:host=127.0.0.1;dbname=contact_form'; 
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
    ?>

   
    <table class='record_table'>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Contact_Number</th>
    <th>Location</th>
    </tr>
    
    <?php  $sql = 'SELECT * FROM contact_form_input';

    foreach ($db->query($sql) as $row)
    {
?>
    <tr>
    <td>."<?php $row['id'] ?>".</td>
    <td>."<?php $row['Name']?>".</td>
    <td>."<?php $row['Email']?>".</td>
    <td>."<?php $row['Contact_number']?>".</td>
    <td>."<?php $row['Location']?>".</td>
    }

 </tr>
  </table>
  </div>


      
    