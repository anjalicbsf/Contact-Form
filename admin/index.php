<!DOCTYPE html>
<html>

<head>
    <title>Admin login page</title>

    <link rel="stylesheet" type="text/css" href="./assests/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script type="text/javascript" src="include/admin_validation.js"></script>

</head>

<body class="wrap">
	<div class="sub-wrap">

        <div class="headbar col-2"><!-- Header start -->
            <div class="logo-container">
                    <img src="https://brainstormforce.files.wordpress.com/2014/08/latest-to-use.png?w=549" alt="company-logo" class="logo">
            </div>  
        </div>
        <div class="login-screen">
         <div class="title-container">
             <div class="heading">Admin Login Form</div>
         </div>
         <div class="login-pannel">
             <form name="form" method="POST" action="vendor/admin_home_page.php">
                <div class="Username-box">
                    <input type="text"  id="admin-username" name="admin-username" placeholder="Username" size=20>
                    
                </div>
                <div class="Password-box">
                    <input type="Password" id="admin-password" name="admin-password" placeholder="Password" size="20">
                     
                </div>
                <div class="submit-box">
                    <input  type="submit"  value="Log In" name="submit" onclick="return (validate())">
                </div>
                <div id="err_field"></div>
            </form>
         </div>
         
         </div>
         <div class="bottom-bar">
            <div class="text-block">New User? 
                 <div class="signup-link"><a href="vendor/sign-up.php">Sign up</a></div>here
            </div>
         </div>
     
       <!--  <div class="login_screen col-2">
			<div class="heading">
                <h1>Admin Login Form</h1>
            </div>

             <table class="table_css">
                <form name="form" method="POST" action="vendor/admin_home_page.php">
                   
                    <tr>
                        <td><div class="error_msg">
                            <div id="err_field"></div>
                            </div>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="admin_username" placeholder="Username" size=20>
                        </td>

                    </tr>
                     <tr>
                        <td>
                            <label>Password</label>
                        </td>
                    </tr> -->
                   <!--  <tr>
                        <td>
                            <input type="Password" name="admin_password" placeholder="Password" size="20">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="submit_button">
                                <input  type="submit"  value="Log In" name="submit" onclick="return (validate())">
                            </div>
                        </td>

                     </tr>


 

            </table>

            </form>
         </div> --> 
    </div> 
</body>

</html>