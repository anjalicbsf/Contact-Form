<link rel="stylesheet" href="../assests/css/style.css">
<script src="../assests/js/jquery-2.2.0.js"></script>
<script type="text/javascript" src="../assests/js/admin.js"></script>
<?php 
    require 'databse-connection.php'; 
    echo 
    "<div class='table_parent table_del'>
    <table class='record_table'>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Contact_Number</th>
    <th>Location</th>
    <th>Actions</th>
    </tr>"
    ;
    $sql = 'SELECT * FROM contact_form_input';

    foreach ($db->query($sql) as $row){
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['Email'] . "</td>";
        echo "<td>" . $row['Contact_number'] . "</td>";  
        echo "<td>" . $row['Location'] . "</td>";
        echo "<td><a href= 'javascript:void(0);' onclick='deleteUser( " . $row['id'] . " );'>delete</a></td>";
    }

      echo "</tr>";
      echo "</table>";
      echo "</div>";
?>