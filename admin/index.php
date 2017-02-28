<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin login page</title>

    <!-- style -->
    <link rel="stylesheet" type="text/css" href="./assests/css/style.css">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- jquery -->
    <script src="assests/js/jquery-3.1.1.min.js"></script>

    <!-- javascript -->
    <script type="text/javascript" src="include/admin_validation.js"></script>
  <!--   <script type="text/javascript" src="include/admin_dash_menu.js"></script> -->
</head>
<body class="wrap">
	<div class="sub-wrap">
    <!-- Header start -->
        <div class="headbar col-2">
            <div class="logo-container">
                    <img src="https://brainstormforce.files.wordpress.com/2014/08/latest-to-use.png?w=549" alt="company-logo" class="logo">
            </div>  
        </div>
    <!-- Header end -->
    <!-- Login screen strat -->
        <div class="admin-screen-parent">
        <div class="login-screen">
        <div class="title-container">
             <div class="heading">Admin Login </div>
        </div>
        <div class="login-pannel">
             <form name="form" method="POST" action="vendor/admin-login-validation.php" class="login-form">
                    <div class="form-group">
                        <div class="col-12">
                            <div class="form-material floating" id="form-material_user">
                                <input id="admin-username" class="form-control" type="text"  name="admin_username" onblur="check_content(this)">
                                <label for="admin-username">Username</label>
                            </div>
                        </div>
                    </div>
                     <div class="form-group">
                        <div class="col-22">
                            <div class="form-material floating" id="form-material_pass">
                                <input id="admin-password" class="form-control" type="Password"  name="admin_password" onblur="check_content(this)">
                                <label for="admin-password">Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="submit-box">
                        <input  type="submit" value="Sign in" name="submit" >
                    </div>
                     <div class=" signin_error_msg ">
                        <?php
                        if(isset($_SESSION['admin_success'])){
                            $msg=$_SESSION['admin_success'];
                            echo $_SESSION['admin_success'];
                            }
                            unset($_SESSION['admin_success']);
                        ?>
                    </div>
            </form>
         </div>
         
         </div>

         <div class="bottom-bar">
            <div class="text-block">New User?</div>
             <div class="signup-link"><a href="vendor/sign-up.php">Sign up</a></div>
         </div>
         </div>

         <!-- Login screen end -->
         
    </div> 
</body>

</html>