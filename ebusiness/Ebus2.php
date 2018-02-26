<?php
//Start the session
session_start();

?>


<!DOCTYPE html>
<html>
    <head>
        
        <title> Enter Details</title>
        
        <link rel="stylesheet" href="Ebus.css" type="text/css" />
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body>
        <center>
        
        <h4>Please enter your payment details.</h4>
        
            <br/>
            
            <form method = "POST" action = "Ebus3.php">
                
               </br>
                
                <label for="user_card">
                    Card Number
                </label>
                
                <input type="text" id="user_card" placeholder="Card Number" maxlength="16">
                
                </br>
                
                <label for="user_pin">
                     PIN 
                </label>
                
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
                
                </br>
                </br>
                <button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
               
            </form>
            
            <br />
            
            <button onClick="validateDetails()"> Validate </button>
            <div align="center">
            <div class="footer">
            <center> <a href="../homepage.html" class="btn-cancel">Cancel Payment</a></center>
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
        
       
    
    </body>
           
    
</html>
