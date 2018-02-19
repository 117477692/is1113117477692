/* global $ */

function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById('SalesForce').checked) {
    argSubTotal = 100;
} else if(document.getElementById('Amazon Web Services').checked) {
    argSubTotal = 300;
} else if(document.getElementById('Gmail').checked) {
    argSubTotal = 250;
} else {
    argSubTotal = 200;
}
display(argSubTotal);
}
function display(parm1){
    document.getElementById("subtotal").value = parm1;
    document.getElementById("total").value = parm1;
    
    enablebtnProceed();
}

function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}
function disablebtnProceed(){
    $('btnProceed').prop('disabled', true);
}
