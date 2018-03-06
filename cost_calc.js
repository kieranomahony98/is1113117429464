/* global $ */

function calcSub(){   //creating a function called calcsub
    
    var argSubTotal;//creating a varible
    
    if(document.getElementById('salesforce').checked){ //opening if statements 
      argSubTotal = 100;
    }
    if(document.getElementById('gmail').checked){
      argSubTotal = 400;
    }
    if(document.getElementById('aws').checked){
        argSubTotal= 300;
    }
    if(document.getElementById('cloud9').checked){
        argSubTotal= 200;
    }

    calcDisVatTotal(argSubTotal);//passing variable to next function calcDisVatTotal
    
}
function calcDisVatTotal(parmSubTotal){ //opening a function called calcDisVatTotal
  var num1, num2, discount, vat, totalPrice; //declaring my variables
  num1 = .05 //assigning value to num1
  discount = parmSubTotal * num1; //assigning a value to discount
  document.getElementById("discount").value = discount; //assainging value of a text box as discount
  num2 = parmSubTotal - discount; //assigning to num2
  vat = num2 * .1; //assigning to vat
  totalPrice = parmSubTotal-(discount + vat); //assigning value total price
  display(parmSubTotal,discount,vat,totalPrice);// passing variables to function called display

}

function display(parm1,parm2,parm3,parm4){ //creating a function called display
  document.getElementById("subtotal").value = parm1; //assigning value to text boxes
  document.getElementById("discount").value = parm2;
  document.getElementById("vat").value = parm3;
  document.getElementById("total").value = parm4
  enablebtnProceed(); // enabling the proceed button
}


function enablebtnProceed(){//creating a function called enablebtnProceed
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed(){//creating a function called disablebtnProceed
    $('#btnProceed').prop('disabled', true);
}



