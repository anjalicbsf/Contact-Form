<!DOCTYPE html>
<html>

<head>
    <title>Admin login page</title>

    <link rel="stylesheet" type="text/css" href="./assests/css/style.css">
    <script type="text/javascript" src="include/admin_validation.js"></script>

</head>

<body class="admin_login_background">
	<div class="wrap">
        <div class="sidebar col-2">
        </div>
        
        <div class="login_screen col-2">
			<div class="heading">
                <h1>Admin Login Form</h1>
            </div>

             <table class="table_css">
                <form name="form" method="POST" action="vendor/admin_home_page.php">
                    <!-- <tr>
                        <td>
                            <label>Username</label>
                        </td>
                    </tr> -->
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
                    <!-- <tr>
                        <td>
                            <label>Password</label>
                        </td>
                    </tr> -->
                    <tr>
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
         </div>
    </div> 
</body>

</html>