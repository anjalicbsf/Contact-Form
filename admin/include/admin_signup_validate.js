function validate() {
    console.log('validate');


    var vname = document.getElementById("name").value;
    var vemail = document.getElementById("email").value;
    var vuser= document.getElementById("user").value;
    var vpass =document.getElementById("pass").value;
    var vcpass =document.getElementById("cpass").value;
    var nameRegex=/^([A-Z][a-z]*((\s)))+[A-Z][a-z]*$/;
    var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
    var errorFlag = false;
    var errorMsg = '';

     
    if (vname == "")    {     
        errorFlag = true;
        // console.log('vaname');
        errorMsg = "*Enter the name!";
        document.getElementById("fname").innerHTML = errorMsg;
        //console.log(errorMsg);
        return false;
    }
// 	}else if(!nameRegex.test(vname)){
//         errorFlag = true;
//         console.log('here');
//         errorMsg = "*Enter first and last name!";
//         document.getElementById("fname").innerHTML = errorMsg;
//         return false;
// }
    document.getElementById("fname").innerHTML = "";
    // document.getElementById("ename").innerHTML = "";
   

           
    if (vemail == "")  {
        errorFlag = true;
        errorMsg = "*Enter the email!";
        document.getElementById("femail").innerHTML = errorMsg;
        return false;
        //console.log(errorMsg);
          
    } else if (!emailRegex.test(vemail)) {

        errorFlag = true;
        errorMsg = "*Enter the valid email!";
        document.getElementById("femail").innerHTML = errorMsg;
        //console.log(errorMsg);
        return false;

          
    }
    document.getElementById("femail").innerHTML = "";



    if (vuser == "")    {     
        errorFlag = true;
        errorMsg = "*Enter the username!";
        document.getElementById("fuser").innerHTML = errorMsg;
        //console.log(errorMsg);
        return false;
    }
    document.getElementById("fuser").innerHTML = "";


  if (vpass == "")    {     
        errorFlag = true;
        errorMsg = "*Enter the password!";
        document.getElementById("fpass").innerHTML = errorMsg;
        //console.log(errorMsg);
        return false;
    }
    document.getElementById("fpass").innerHTML = "";

    if (vcpass == "")    {     
        errorFlag = true;
        errorMsg = "*Re enter the password!";
        document.getElementById("fcpass").innerHTML = errorMsg;
        //console.log(errorMsg);
        return false;
    }else if(!(vcpass==vpass)){
        console.log("here");
        errorFlag = true;
        errorMsg = "*Password does not match!";
        document.getElementById("passtest").innerHTML = errorMsg;
        // console.log(errorMsg);
    }
    document.getElementById("fcpass").innerHTML = "";
    document.getElementById("passtest").innerHTML = "";






    if (errorFlag) {

        //console.log(errorMsg);
        return false;
    }
    return true;     
}