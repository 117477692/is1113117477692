<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
        <link rel="stylesheet" href="Ebus.css" type="text/css" />
        <!-- applying font size and style -->
        <style>
        
            body {
    font: 30px Arial, sans-serif;
}
        </style>
    </head>
    <body>
        <center>
        <h4><u>RECEIPT</u></h4>
      
     <!-- displaying variables that were posted from previous pages -->
        <?php
        // Echo session variables that were set on previous page
        echo"Name is " . $_SESSION["fullname"] . ".";
        echo "<br> ";
         echo "<br> ";
          echo "<br> ";
        echo"Email is " . $_SESSION["email"] . ".";
        echo "<br> ";
         echo "<br> ";
          echo "<br> ";
        echo"Address is " . $_SESSION["address"] . ".";
        echo "<br> ";
         echo "<br> ";
          echo "<br> ";
        echo"Total is $" . $_SESSION["total"];
        
        ?>
        
    <br>
    <br>
    
       <!-- a button that alllows us to print by calling a function -->
    <a href="" onclick="Print()" class="btn-home">Print Receipt</a>
    
<br>
<script>
function Print() {
    window.print();
}
</script>
   <!-- button to homepage -->
     <a href="../homepage.html" class="btn-home">Return to the HomePage</a></center>
   
    </body>
</html>