<?php
//Starting the session
session_start();

?>


<!DOCTYPE html>
<html>
    <head>
        
        <title> Enter Details</title>
        
        <link rel="stylesheet" href="Ebus.css" type="text/css" />
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
         <!-- alligning labels -->
     <style>
      label{
display:inline-block;
width:90px;
margin-right:10px;
text-align:right;
}


fieldset{
border:none;
width:500px;
margin:0px auto;
}



</style>

    </head>
    
    <body>
        <center>
        
        <h4>Please enter your payment details.</h4>
        
            <br/>
             <!-- creating a form -->
            
            <form method = "POST" action = "Ebus3.php">
                
               </br>
                <!-- applying placeholders and maxlengths -->
                
                <label for="user_card">
                    Card Number
                </label>
                
                <input type="text" id="user_card" placeholder="Card Number" maxlength="16">
                
                <br>
                
                <label for="user_cvv">
                    Card CVV
                </label>
                
                <input type="text" id="user_cvv" placeholder="CVV" maxlength="3">
                
                
                
                </br>
                
                <label for="user_pin">
                    Card PIN 
                </label>
                
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
                
                </br>
                </br>
                <button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
               
            </form>
            
            <br/>
            
             <!-- button that calls on the function calidateDetails() -->
             
            <button onClick="validateDetails()"> Validate </button>
            <div align="center">
                 <!-- footer -->
            <div class="footer">
            <center> <a href="../homepage.html" onClick="Alert()" class="btn-cancel">Cancel Payment</a></center>
            <br>
            <br>
        </div>
        </div>
            
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        </center>
        
        <?php
        // Set session variables
        $_SESSION["fullname"] = $_POST["fullname"];
        $_SESSION["total"] = $_POST["total"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["address"] = $_POST["address"];
       
        
        ?>
         <!-- alert function that was called on the cancel payment button -->
       <script>
       
  function Alert() {
    alert("Your purchase has been cancelled");
}
</script>

    
    </body>
           
    
</html>
