<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>
<?php

// $varname=$_POST["name"] ;
// $varemail=$_POST["email"];
// $vargender=$_POST["gender"];
// $varnumber=$_POST["number"];
// $varcomment=$_POST["comment"];


$link = mysql_connect('localhost', 'root', '');

if (!$link) {
            die('Could not connect: ' . mysql_error());
            }
echo 'Connected successfully';

//echo $varname;



// $sql = 'INSERT INTO user_input '.
//       '(Name,Email,Number,Gender,Comment) '.
//       //'VALUES ('$varname','$email',$number,'$gender','$comment')';
//       'VALUES ('varname','varemail',8888888888,'male','varcomment')';


    $sql = 'INSERT INTO user_input '.
      '(Name,Email,Number,Gender,Comment) '.
      'VALUES ( "guest", "XYZ", 2000, "male","helloooooo" )';
      
   mysql_select_db('anjali');
   $retval = mysql_query( $sql, $link );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   
   echo "Entered data successfully\n";
   
   mysql_close($link);


 ?>
</body>
</html>