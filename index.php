<?php
session_start();
if(isset($_SESSION['success'])){
    echo $_SESSION['success'];
    $msg=$_SESSION['success'];
    session_destroy();
}

?>
<html>
<head>
    <title>Home page</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Extra+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <script type="text/javascript" src="include/form_valid.js"></script>
  
     
</head>



<body>
    <div class="wrap">
        <div class="heading">
            <h1>Sign up form</h1>
           <!--  <p> Fill all fields with valid details and submit.</p> -->
            <hr>
        </div>
        <table class="table_css">
            <form name="form" action="vendor/send_mail.php" method="POST">

                <div id="myForm"></div>

                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                        <input type="text" name="name" size="20">
                    </td>
                    <td class="error_msg">
                        <div id="fname"></div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Email</label>
                    </td>
                    <td>
                        <input type="text" name="email" size="20">
                    </td>
                    <td class="error_msg">
                        <div id="femail"></div>
                    </td>
                </tr>


                <tr>
                    <td>
                        <label>Contact Number</label>
                    </td>
                    <td>
                        <input type="text" name="contact_number" size="20">
                    </td>
                    <td class="error_msg">
                        <div id="fnumber"></div>
                    </td>
                </tr>


                <tr>
                    <td>
                        <label>Location</label>
                    </td>
                    <td>
                        <input type="text" name="location" size="20">
                    </td>
                    <td class="error_msg">
                        <div id="flocation"></div>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" id="index_submit">
                        <input type="submit" name="submit" onclick="return(validate());">
                    </td>
                </tr>


        </table>
        
    </div>
    </form>


</body>

</html>

                
     