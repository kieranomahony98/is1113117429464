<!DOCTYPE html>
<html>
    <head>
        <Title>Select Product</Title>
        <!--jQuery-->
        <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>        
        <link rel="stylesheet" href="mystylesheet.css" type="text/css"/>

    </head>
    <body>
        <h1 class="heading">eBusiness</h1>
             <div class="back">
            <ul>
              <li><a href="homepage.html">Homepage</a></li>
              <li class="dropdown">
                  <a href="javascript:void(0)" class="dropbtn">Interests</a>
                  <div class="dropdown-content">
                  <a href="travel.html">Travel</a>
                  <a href="sport.html">Sport</a>
                  </div>
              </li>
              <li class="dropdown">
                  <a href="javascript:void(0)" class="dropbtn">CV</a>
                  <div class="dropdown-content">
                  <a href="cv_page1.html">Personal Details</a>
                  <a href="cv_page2.html">Education</a>
                  <a href="cv_page3.html">Work Experience</a>
                  </div>
              </li>
                                <li class="dropdown">
                  <a href="javascript:void(0)" class="dropbtn">eBusiness</a>
                  <div class="dropdown-content">
                  <a href="Ebus1.php">Buisness 1</a>
                  <a href="Ebus2.php">Buisness 2</a>
                  <a href="https://github.com/kieranomahony98/is1113117429464"> Github </a>

                  </div>
              </li>
            </ul>
        </div>
            <br/><br/>
        <h4>Select a Product</h4>
        <br/>
        <form method = "POST" action = "ebus2.php">
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                salesforce @ $1000
            </label>
            
            <br/>
                        
            <label for="aws">
                <input type = "radio" id="aws" name = "product" onClick="disablebtnProceed()"/>
                AWS @ $300
            </label>
            
            <br/>
            <br/>
            
            <label for="subtotal">
                Sub Total: 
                <input type="text" id="subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
            <label for="Total">
            Total
            <input type="text" id="total" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <button type="submit" id="btnproceed" disabled>Add to Shopping Cart</button>
        </form>
        
        <br/>
        
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
    
    </body>
</html>