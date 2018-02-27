<!DOCTYPE html>
<html>
    <head>
        <Title>Select Product</Title>
        <!--jQuery-->
        <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>        
        <link rel="stylesheet" href="mystylesheet.css" type="text/css"/>
        <style>
            article {
                clear: both;
                overflow: auto;
                width: 100%;
                }
            form{
                clear:both;
                overflow:auto;
                width:100%;
            }
            .Calculate{
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 8px 16px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 12px;
                margin: 4px 2px;
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
                cursor: pointer;
                clear: left;
            }   
                .button1:hover {
                background-color: #4CAF50;
                color: white;
                }
            .inline {
                width: 20%;
                padding: 12px 20px;
                margin: 8px 0px;
                box-sizing: border-box;
            }

        </style>
    </head>
    <body>
        <h1 class="heading">eBusiness</h1>
            
             <div class="back">
            <ul>
              <li><a href="homepage.html">Homepage</a></li>
              <li class="dropdown">
                  <a href="sport.html" class="dropbtn">Interests</a>
                  <div class="dropdown-content">
                  <a href="travel.html">Travel</a>
                  <a href="sport.html">Sport</a>
                  <a href="cloudservices.html">Cloud Services</a>
                  </div>
              </li>
              <li class="dropdown">
                  <a href="javascript:void(0)" class="dropbtn">CV</a>
                  <div class="dropdown-content">
                  <a href="cv_page1.html">Personal Details</a>
                  <a href="cv_page2.html">Education</a>
                  <a href="cv_page3.html">Work Experience</a>
                  </div>
              <li class="dropdown">
                  <a href="cloud.html" class="dropbtn">Cloud Vendor</a>
                  <div class="dropdown-content">
                  <a href="cloud.html">About Cloud</a>
                  <a href="Ebus1.php">Product</a>
                  </div>
              </li>

            </ul>
        </div class="form">
                <br/><br/>
            <div>
                <h4>Select a Product</h4>
                <br/>
                <article>
                <form method = "POST" action = "ebus2.php">
                    <label for="salesforce">
                        <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                        salesforce @ $100
                    </label>
                    
                    <br/>
                    
                    <label for="Cloud9">
                        <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()">
                        Cloud 9 @ $200
                    </label>
                    
                    
                    <br/>
                                
                    <label for="aws">
                        <input type = "radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                        AWS @ $300
                    </label>
                    <br/>
                    <label for="Gmail">
                        <input type = "radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                        Gmail @ $400
                        
                        
                    </label>
                    
                    <br/>
                    <br/>
                    <label for="subtotal">
                        Sub Total: 
                        <br/>
                            <input type="text" id="subtotal" value="0.00" class="inline" readonly/>
                    </label>
                    
                    <br/><br/>
                    
                    <label for="discount">
                        Discount:
                        <br/>
                        <input type="text" id="discount" name="total" value="0.00" class="inline" readonly/>
                    </label>
                    <br/><br/>
                    <label for="vat">
                        VAT:
                        <br/>
                        <input type="text" id="vat" name="vat" value="0.00" class="inline" readonly/>
                    </label>
                    <br/><br/>
                    
                    <label for="Total">
                    Total:
                    <br/>
                        <input type="text" id="total" name="total" value="0.00" class="inline" readonly/>
                    </label>
                    <br/>
                    <a href="Ebus2.php">
                        <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
                    </a>
                </form>
                
                <br/>
                
                <button onClick="calcSub()" class="Calculate button1">Calculate Cost</button>
                <a role="button" href="Ebus1.php">Clear Choice</a>
        </article>
        </div>
        <br/><br/><br/><br/>
        <footer>
            <p>117429464 &copy 2018</p>
        </footer>
    </body>
</html>