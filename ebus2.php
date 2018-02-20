<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        <link rel="stylesheet" href="mystylesheet.css" type="text/css"/>
        <style>
            .button {
                background-color: white; 
                color: black; 
                border: 2px solid #008CBA;
                padding: 8px 16px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 10px;
                margin: 4px 2px;
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
                cursor: pointer;
            }
            .validate:hover {
               background-color: #008CBA;
                color: white;
            }
        </style>
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
                  <a href="https://github.com/kieranomahony98/is1113117429464/graphs/commit-activity"> Github </a>

                  </div>
              </li>
            </ul>
        </div>
            <br/><br/>
        
        <h4>Please enter your payment details</h4>
        
        
            <form action="Ebus3.php" method="POST">
                    <label for="Name">Name: </label><br/>
                    <input type="text" id="user_name" maxlength="20">
                    <br/><br/>
                    <label for="email">Email:</label>
                    <br/>
                    <input type="text" id="user_Email" maxlength=30>
                    <br/><br/>
                    <label for="user_pin">PIN:</label>
                    <br/>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                <a href="Ebus3.php">
                    <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
                </a>
              
            </form>
            
            <br/>
            <button class="button validate" onClick="validateDetails()">Validate</button>
            
            <?php
            // Set session variables
            $_SESSION["total"] = $_POST["total"];
            ?>
        <br/><br/><br/><br/>
        <footer>
            <p>117429464 &copy 2018</p>
        </footer>
    </body>
    
    
    
</html>


