<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
       <link rel="stylesheet" href="Ebus.css" type="text/css" />
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
  <style>
      label{
display:inline-block;
width:200px;
margin-right:30px;
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
       
        <h1>Order Form</h1>
        
       
        
        <form method="POST" action="Ebus2.php">
            <h3>Enter your personal details</h3>
           
                <label for="fullname">
                F.Name
                <input type="text" id="fullname" name="fullname" placeholder="FullName"/>
            </label>
            </br>
              <label for="email">
                     E-mail 
                <input type="email" name="email" placeholder="Email">
                </label>
                </br>
                 <label for="address">
                    Address
                <input type="text" name="address" placeholder="Address">
                </label>
            
            </br>
            </br>
            <h4>Select a product</h4>
            
           
            
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
            </label>
            
            <br/>
            
             <label for="cloud">
                <input type="radio" id="cloud" name="product" onclick="disablebtnProceed()"/>
                Cloud9 @ $200
            </label>
            
            </br>
            
            <label for="aws">
                <input type="radio" id="aws" name="product" onclick="disablebtnProceed()"/>
                AWS @ $300
            </label>
            
            
            </br>
            
             <label for="gmail">
                <input type="radio" id="gmail" name="product" onclick="disablebtnProceed()"/>
                Gmail @ $250
            </label>
            
            <br/>
            <br/>
            
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
            
             <label for="discount">
                Discount
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label>
            
              </br>
              
            <label for="vat">
                V.A.T  
                <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label>
            
            </br>
            
            <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
            
            
            <br/>
            
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
        </form>
        
        <br/>
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href="Ebus1.php" class="btn btn-Clear">Clear Choice</a>
        
        </center>
        
    </body>
</html>