function validate() {
    console.log('validate ');


    var vusername = document.getElementById('admin-username').value;
    var vpassword = document.getElementById('admin-password').value
    console.log="in validate";


   
 		if ( vusername == "anjali" && vpassword == "anjalic"){
			
			return true;
		
			}else{
				document.getElementById("err_field").innerHTML = "*Incorrect username or password";
		
			return false;}
		
		}	
			

			