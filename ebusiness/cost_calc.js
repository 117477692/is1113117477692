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
    argVat = 10;
    argDiscount = 5;
    argTotal = ((100 + 10) - 5);
    
 } else if(document.getElementById('aws').checked) { 
    argVat = 300 * 0.10;
    argDiscount = 300 * 0.05;
    argTotal = ((300 + argVat) - argDiscount);
    
 } else if(document.getElementById('gmail').checked) {
    argVat = 250 * 0.10;
    argDiscount = 250 * 0.05;
    argTotal = ((250 + argVat) - argDiscount);
 } else {  
    argVat = 200 * 0.10;
    argDiscount = 200 * 0.05;
    argTotal = ((200 + argVat) - argDiscount);
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
