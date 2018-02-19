<?php
session_start()
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
        echo"Total is " . $_SESSION["total"] . ".";
        ?>
     </center>    
    </body>
</html>