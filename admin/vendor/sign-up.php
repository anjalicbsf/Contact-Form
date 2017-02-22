<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Sign up form</title>

    <link rel="stylesheet" href="../assests/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

</head>

<body class="wrap">
    <div class="sub-wrap">

        <div class="headbar col-2">
            <!-- Header start -->
            <div class="logo-container">
                <img src="https://brainstormforce.files.wordpress.com/2014/08/latest-to-use.png?w=549" alt="company-logo" class="logo">
            </div>
        </div>
         <div class="signup_msg">
                <?php
                    if(isset($_SESSION['signup_msg'])){
                        $msg=$_SESSION['signup_msg'];
                        echo $_SESSION['signup_msg'];
                    }
                        session_destroy();
                ?>
        </div>
                
        <div class="signup-screen">
            <div class="title-container">
                <div class="heading">New User Login Form</div>
            </div>
            <div class="login-pannel">
                <table border="0" class="signup-table">
                    <tr>
                        <form method="POST" action="connectivity-sign-up.php">
                        <td>Name</td>
                        <td>
                            <input type="text" name="name">
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <input type="text" name="email">
                        </td>
                    </tr>
                    <tr>
                        <td>UserName</td>
                        <td>
                            <input type="text" name="user">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <input type="password" name="pass">
                        </td>
                    </tr>
                    <tr>
                        <td>Confirm Password </td>
                        <td>
                            <input type="password" name="cpass">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input id="button" type="submit" name="submit" value="Sign-Up">
                        </td>
                    </tr>
                    </form>
                </table>


            </div>
</body>

</html>