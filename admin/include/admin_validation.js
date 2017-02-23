function check_content(field){
            console.log('in js');
            console.log(field.name);

            if (field.name=="admin_username"){
            	var form_class=  document.getElementById("form-material_user");
            	form_class.className = "form-material floating";
            	if (field.value == '') {
                	form_class.className = "form-material floating";
            	}else{ 
                        form_class.className += "label";
                        var temp2=form_class.className;
                      	console.log(temp2);
                      }

            }else{
            	if (field.name=="admin_password") {
            		var form_class=  document.getElementById("form-material_pass");
            		form_class.className = "form-material floating";
					if (field.value == ''){
                		form_class.className = "form-material floating";
           			}else{ 
	                        form_class.className += "label";
	                        var temp2=form_class.className;
	                      	console.log(temp2);
                        }
            	}
            }
}


$( document ).ready(function() {
	$('.form-submit').click(SignIn);
	function SignIn() { 
 	 	console.log('validate ');
		var adusername= $('#admin-username').val(); 
		var adpass= $('#admin-password').val();	
		//  console.log(adusername);
		// console.log(adpass);    	
		$.ajax({		  
				type: 'post',
				url: 'vendor/admin-login-validation.php',
				data : {val:adusername,val2:adpass},
				success: function(data) {
					// console.log(data);
				},
					    // error: function(data) {
					    //    // console.log('error');
					    // },
		});
    }
});	

	  