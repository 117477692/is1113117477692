<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
        <link rel="stylesheet" href="Ebus.css" type="text/css" />
        
    </head>
    <body>
        <center>
        <h4>RECEIPT</h4>
      
     
        <?php
        // Echo session variables that were set on previous page
        echo"Name is " . $_SESSION["fullname"] . ".";
        echo "</br> ";
        echo"Email is " . $_SESSION["email"] . ".";
        echo "</br> ";
        echo"Address is " . $_SESSION["address"] . ".";
        echo "</br> ";
        echo"Total is " . $_SESSION["total"] . ".";
        
        ?>
     </center>    
    
    </body>
</html>