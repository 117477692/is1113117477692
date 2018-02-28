/* global $ */
// function to validate Details of pin
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
        // function to validate details of card 
function validateDetails2(){       
    var card;
    
    card = document.getElementById("user_card").value;
    
    if (card==""){
        alert("Please enter your card number");
    }else if (String(card).length<16){
        alert("Please make sure your card number is accurate");
    }else{
        validateDetails3();
        }
}
// function to validate details of cvv
function validateDetails3(){
    var cvv;
    
    cvv = document.getElementById("user_cvv").value;
    
    if (cvv==""){
        alert("Please enter your card CVV");
    }else if (String(cvv).length<3){
        alert("Please make sure your card CVV number is accurate");
    }else{
        enablebtnPurchase();
        }
    
}
// enabling the purchase button
function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}
}
