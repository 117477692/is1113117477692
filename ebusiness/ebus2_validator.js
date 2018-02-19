/* global $ */

function validateDetails(){
    
    var pin;
    
    pin = document.getElementById("user_pin").value;
    
    if (pin==""){
        alert("Please enter your PIN");
        } else if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
        }else{
        validateDetails2();
    }
        
function validateDetails2(){       
    var card;
    
    card = document.getElementById("user_card").value;
    
    if (card==""){
        alert("Please enter your card number");
    }else if (String(card).length<16){
        alert("Please make sure your card number is accurate");
    }else{
        enablebtnPurchase();
        }
}


function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}
}
