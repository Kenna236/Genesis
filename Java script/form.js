
function user_check(user){  
    // var uresult = document.form1.user.value;
    valuser = /[a-zA-Z0-9]/
   
 
     if(user.value.match(valuser)){
        alert("correct")
        return true
     }else{
        alert("incorrect")
        return false
    }

}

function user_check_length(){
    var uresult = document.form1.user.value;
    
    if(uresult.length > 24){
        alert("Cannot exceed 24")
    }

}
document.getElementById("email").addEventListener("blur"
,checkEmail);
function ValidateEmail()
{
    if(document.getElementById("email1").value.
    indexOf("@")== -1)
    {
        alert("incorrect email")
    }
    
}
function ValidatePhone(phone){
    
    var ValPhone = (0-9);
    if(phone.value.match(ValPhone)){
        alert("valid Phone number!")
        // document.form1.email.focus();
        return true;
        // if (!email.value.trim()) {

        // }
    }else{
        alert("invalid phone number")
        // document.form1.email.focus();
        return false;
    }
}

function CheckLength(phone) {
    if(phone.value.length !=11){
        alert("invalid phone number")
    }else{
        ValidatePhone(phone);
    }
    function ValidatePhone(phone){
    
        var ValPhone = (0-9);
        if(phone.value.match(ValPhone)){
            alert("valid Phone number!")
            // document.form1.email.focus();
            return true;
            // if (!email.value.trim()) {
    
            // }
        }else{
            alert("invalid phone number")
            // document.form1.email.focus();
            return false;
        }
    }
}



