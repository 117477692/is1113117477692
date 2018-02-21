/* global $ */

    var argSubTotal;
    var argVat;
    var argDiscount;
    var argTotal;

function calcSub(){
    
      if(document.getElementById('salesforce').checked) {
    argSubTotal = 100;
    calcDisVatTotal();
    
} else if(document.getElementById('aws').checked) {
   argSubTotal = 300;
    calcDisVatTotal();
    
} else if(document.getElementById('gmail').checked) {
    argSubTotal = 400;
    calcDisVatTotal();
    
} else {
    argSubTotal = 200;
    
}
calcDisVatTotal();
}

 function calcDisVatTotal(parmSubTotal){
   
    
     if(document.getElementById('salesforce').checked) {
    argDiscount = 100 * 0.05;
    argVat = (100 - argDiscount) * 0.10;
    argTotal = ((100 - argDiscount) + argVat);
    
 } else if(document.getElementById('aws').checked) { 
     argDiscount = 300 * 0.05;
    argVat = (300 - argDiscount) * 0.10;
    argTotal = ((300 - argDiscount) + argVat);
    
 } else if(document.getElementById('gmail').checked) {
     argDiscount = 400 * 0.05;
    argVat = (400 - argDiscount) * 0.10;
    argTotal = ((400 - argDiscount) + argVat);
 } else {  
     argDiscount = 400 * 0.05;
    argVat = (400 - argDiscount) * 0.10;
    argTotal = ((400 - argDiscount) + argVat);
 }
display(argSubTotal, argVat, argDiscount, argTotal)
}

function display(parm1, parm2, parm3, parm4){
    document.getElementById("subtotal").value = parm1;
    document.getElementById("vat").value = parm2;
    document.getElementById("discount").value = parm3;
    document.getElementById("total").value = parm4;
    
    enablebtnProceed();
}

function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}
function disablebtnProceed(){
    $('#btnProceed').prop('disabled', true);
}
