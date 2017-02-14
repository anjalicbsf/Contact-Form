function validate() {
    console.log('validate ');


    var vusername = document.form.admin_username.value;
    var vpassword = document.form.admin_password.value;
    //var errorMsg = '';
  // var errorFlag=false;


  //   if (vusername == ""){     
  //       errorFlag = true;
  //       errorMsg = "*Enter the username!";
  //       document.getElementById("fname").innerHTML = errorMsg;
  //       //console.log(errorMsg);
  //       return false;
		// }elseif(vusername == "anjalic"){
		// document.getElementById("err_field").innerHTML = "";
 	// 	}document.getElementById("fname").innerHTML = "*Enter correct username!";

   
 		if ( vusername == "anjalic" && vpassword == "anjalic"){
			
			return true;
		
			}else{
				document.getElementById("err_field").innerHTML = "Incorrect username or password";
		
			return false;}
		
		}	
			

			