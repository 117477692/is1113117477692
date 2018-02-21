<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
        <link rel="stylesheet" href="Ebus.css" type="text/css" />
        <style>
            body {
    font: 30px Arial, sans-serif;
}
        </style>
    </head>
    <body>
        <center>
        <u><h4>RECEIPT</h4></u>
      
     
        <?php
        // Echo session variables that were set on previous page
        echo"Name is " . $_SESSION["fullname"] . ".";
        echo "</br> ";
         echo "</br> ";
          echo "</br> ";
        echo"Email is " . $_SESSION["email"] . ".";
        echo "</br> ";
         echo "</br> ";
          echo "</br> ";
        echo"Address is " . $_SESSION["address"] . ".";
        echo "</br> ";
         echo "</br> ";
          echo "</br> ";
        echo"Total is $" . $_SESSION["total"];
        
        ?>
     </center>    
    
    </body>
</html>