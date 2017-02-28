function validate() {
    var vname = document.form.name.value;
    var vemail = document.form.email.value;
    var vnumber = document.form.contact_number.value;
    var vlocation = document.form.location.value;
    var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
    var numberRegex = /^\d{10}$/;
    var locationRegex = /^[A-Za-z]/;
    var errorFlag = false;
    var errorMsg = '';
    
    if (vname == "")    {     
        errorFlag = true;
        errorMsg = "*Enter the name!";
        document.getElementById("fname").innerHTML = errorMsg;
        return false;
	}
    document.getElementById("fname").innerHTML = "";

           
    if (vemail == "")  {
        errorFlag = true;
        errorMsg = "*Enter the email!";
        document.getElementById("femail").innerHTML = errorMsg;
        return false;
    } else if (!emailRegex.test(vemail)) {
        errorFlag = true;
        errorMsg = "*Enter the valid email!";
        document.getElementById("femail").innerHTML = errorMsg;
        return false;
    }
    document.getElementById("femail").innerHTML = "";



      
    if (vnumber == "")  { 
        errorFlag = true;
        errorMsg = "*Enter the number!";
        document.getElementById("fnumber").innerHTML = errorMsg;
        return false;
    } else if (!numberRegex.test(vnumber)) {
        errorFlag = true;
        errorMsg = "*Enter the valid number!";
        document.getElementById("fnumber").innerHTML = errorMsg;
        return false;  
    }
    document.getElementById("fnumber").innerHTML = "";


    if (vlocation == "")    {
        errorFlag = true;
        errorMsg = "*Enter the location!";
        document.getElementById("flocation").innerHTML = errorMsg;
        return false;
    }else if (!locationRegex.test(vlocation)) {
        errorFlag = true;
        errorMsg = "*Enter the valid location!";
        document.getElementById("flocation").innerHTML = errorMsg;
        return false;
    }
    document.getElementById("flocation").innerHTML = "";

    if (errorFlag) {
        return false;
    }
    return true;     
}