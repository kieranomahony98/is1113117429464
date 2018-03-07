/* global $ */


function validateDetails(){
    
    var pin,firstname,lastname,email,atpos,dotpos;
    
    pin = document.getElementById("user_pin").value;
    firstname = document.getElementById("user_name").value;
    lastname = document.getElementById("last_name").value;
    email = document.getElementById("user_Email").value;
    atpos = email.indexOf("@");
    dotpos = email.lastIndexOf(".");
    
    if (pin==""){
        alert("Please enter your PIN");
        disablebtnPurchase();
        document.getElementById('user_pin').style.borderColor = "red";
    }
    else if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
        document.getElementById('user_pin').style.borderColor = "red";
        disablebtnPurchase();
    }
    else if (firstname==""){
        alert("Please enter a valid first name");
        document.getElementById('user_name').style.borderColor = "red";
        disablebtnPurchase();
    }
    else if (lastname==""){
        alert("Please enter a valid last name");
        lastname.style.border = "1px solid #5e6e66";
        document.getElementById('last_name').style.borderColor = "red";
        disablebtnPurchase();
    }
    else if  (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
        alert("Not a valid e-mail address");
        document.getElementById('user_Email').style.borderColor = "red";
        disablebtnPurchase();
        
    }
    else {
        enablebtnPurchase()
    }
}

function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}
function changecolor(){
            document.body.style.color = "red";

}