<?php 
    session_start(); 
?>
<html>
<head>
    <title>Home page</title>

    <!-- Style css -->
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Extra+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">

    <!-- Javascript -->
    <script type="text/javascript" src="include/form-valid.js"></script>

</head>
<body>
    <div class="wrap_parent">
    <!-- Form starts here -->
        <div class="heading"> 
            <h1>Sign up form</h1>
            <p> Fill all fields with valid details and submit.</p>
        </div>
        <div class="wrap">
            <h3>Sign up now</h3>
            <table class="table_css">
                <form name="form" action="vendor/send-mail.php" method="POST">
                    <div id="myForm"></div>
                    <tr>
                        <td>
                            <label>Name</label>
                        </td>
                        <td>
                            <input type="text" name="name" size="20">
                        </td>
                    </tr>
                    <tr>
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
                    </tr>
                     <tr>
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

                    </tr>
                    <tr>
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

                    </tr>
                    <tr>
                        <td class="error_msg">
                            <div id="flocation"></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" id="index_submit">
                            <input type="submit" name="submit" onclick="return(validate());">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="success_msg">
                                <?php 
                                    if(isset($_SESSION[ 'success'])){ 
                                        echo $_SESSION[ 'success']; 
                                        $msg=$_SESSION[ 'success']; 
                                        session_destroy(); 
                                    } 
                                ?>
                            </div>
                        </td>
                    </tr>
            </table>
        </div>
        </form>
        <!-- Form ends here -->
    </div>    
</body>
</html>