
<!DOCTYPE html>
<html>
    <head>
        
        <title> Enter Details</title>
        
        
        <!--jQuery-->
        <link rel="stylesheet" href="mystylesheet.css" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body>
        <h1 class="heading">eBusiness</h1>
         <div class="back">
        <br/><br/>
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
                  </div>
              </li>
            </ul>
        </div>
            <br/><br/>
        
        <h4>Please enter your payment details.</h4>
        
            <br />
            
            <form method = "POST" action = "Ebus3.php">
                
                <label for="user_pin">
                     PIN 
                </label>
                
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
                    
                <button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
            </form>
            
            <br />
            
            <button onClick="validateDetails()"> Validate </button>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        
    </body>
    
    
    
</html>


