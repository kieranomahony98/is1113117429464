<!DOCTYPE html>
<html>
    <head>
        <Title>Select Product</Title>
        <!--jQuery-->
        <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>        
        <link rel="stylesheet" href="mystylesheet.css" type="text/css"/>
        <style>
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
            }    
                .button1:hover {
                background-color: #4CAF50;
                color: white;
                }
            
            .disabled {
                opacity: 0.6;
                cursor: not-allowed;
            }
            .inline{
            display: inline-block;
            width: 150px;
            height: 55px;
            margin: 10px;
            }    
            .inline1{
            display: inline-block;
            width: 150px;
            height: 55px;
            margin: 28px;
            }    
            
            
        </style>
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
                  <a href="https://github.com/kieranomahony98/is1113117429464/graphs/commit-activity4"> Github </a>

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
                <div="inline">
                    <input type="text" id="subtotal" value="0.00" readonly/>
                </div>
            </label>
            
            <br/>
            <label for="Total">
            Total:
            <div class="inline1">
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </div>
            </label>
            <br/>
            
            <button type="submit" id="btnproceed" disabled>Add to Shopping Cart</button>
        </form>
        
        <br/>
        
        <button onClick="calcSub()" class="Calculate button1">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
        <br/><br/><br/><br/>
        <footer>
            <p>117429464 &copy 2018</p>
        </footer>
    </body>
</html>