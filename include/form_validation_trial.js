function validate(){
	console.log('validate');
	return false;

	var vname = document.form.name.value;
	var vemail = document.form.email.value;
	var vnumber = document.form.number.value;
	var vlocation = document.form.location.value;
	var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
	var numberRegex=/^\d{10}$/;
	var locationRegex=/^[A-Za-z]/;
	var errorFlag = false;
	var errorMsg = '';
	
	 if( vname == "" )
	   {
	     
		errorFlag = true;
		errorMsg += "Enter the name!";
		document.getElementById("myForm").innerHTML="Enter valid name";
		console.log(errorMsg);
		
	   }
	
	    
	   if (vemail == "" )
	 {
	
		errorFlag = true;
		errorMsg += "Enter the email";
		document.getElementById("myForm").innerHTML=errorMsg;
		console.log(errorMsg);
	  }else if(!emailRegex.test(vemail)){
	
		errorFlag = true;
		errorMsg +=  "Enter the valid email";
		document.getElementById("myForm").innerHTML=errorMsg;
		//console.log(errorMsg);

	  }


	  if (vnumber=="" )
	 {
	 
		errorFlag = true;
		errorMsg += "Enter the number";
		document.getElementById("myForm").innerHTML=errorMsg;
		//console.log(errorMsg);

	  }else if(!numberRegex.test(vnumber)){
	
		errorFlag = true;
		errorMsg += "Enter the valid number";
		document.getElementById("myForm").innerHTML=errorMsg;
		//console.log(errorMsg);
	  }

	   if( vlocation == "" )
	   {
	
		errorFlag = true;
		errorMsg +="Enter the location";
		document.getElementById("myForm").innerHTML=errorMsg;
		//console.log(errorMsg);
	   }else if(!locationRegex.test(vlocation)){
	
		errorFlag = true;
		errorMsg += "Enter the valid location";
		document.getElementById("myForm").innerHTML=errorMsg;
		//console.log(errorMsg);
	}


	if( errorFlag ) {
		
		//console.log(errorMsg);
		return false;
	}
	     
}