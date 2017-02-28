<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Sign up form</title>

    <!-- Style css -->
    <link rel="stylesheet" href="../assests/css/style.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- Javascript -->
    <script type="text/javascript" src="../include/admin-signup-validate.js"></script>

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
                        // echo "<a href='../index.php'>Sign in</a> ";
                    }   
                        
                        unset($_SESSION['signup_msg']);
                ?>
        </div>
               
        <div class="signup-screen">
            <div class="title-container">
                <div class="heading">New User Sign Up</div>
            </div>
            <div class="signup-login-pannel">
                <table border="0" class="signup-table">
                    <tr>
                        <form method="POST" action="connectivity-sign-up.php">
                        <td>
                            <input type="text" name="name" id="name" placeholder="Name" >
                        </td>
                    </tr>
                    <tr>
                        <td class="error_msg">
                            <div id="fname"></div>
                            <div id="ename"></div>
                        </td>  
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="email" id="email" placeholder="Email">
                        </td>
                    </tr>
                    <tr>
                        <td class="error_msg">
                            <div id="femail"></div>
                        </td>  
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="user" id="user" placeholder="Username">
                        </td>
                        
                    </tr>
                    <tr>
                       <td class="error_msg">
                            <div id="fuser"></div>
                        </td> 
                    </tr>
                    <tr>
                        <td>
                            <input type="password" name="pass" id="pass" placeholder="Password">
                        </td>
                        
                    </tr>
                    <tr>
                       <td class="error_msg">
                            <div id="fpass"></div>
                        </td> 
                    </tr>
                    <tr>
                        <td>
                            <input type="password" name="cpass" id="cpass" placeholder="Confirm Password">
                        </td>  
                    </tr>  
                    <tr>
                        <td class="error_msg">
                            <div id="fcpass"></div>
                            <div id="test"></div>
                        </td>  
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="signup-button">
                                <input id="button" type="submit" name="submit" value="Sign Up" onclick="return(validate());">
                            </div>    
                        </td>
                    </tr>
                    </form>
                </table>
            </div>
        </div>
        <div class="go-signin">
                     <p>Already a user?  <a href='../index.php'>Sign in</a></p>
        </div>
</body>

</html>