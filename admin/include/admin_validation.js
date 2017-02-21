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
					    error: function(data) {
					       // console.log('error');
					    },
					});
       		}
                   
});		  