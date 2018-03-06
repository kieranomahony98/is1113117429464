<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <!--title to webpage-->
        <title>Enter Details</title>
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        <link rel="stylesheet" href="mystylesheet.css" type="text/css"/>
        <!-- embedded styling-->
        <style>
            button{
                padding: 8px 16px;
            }
            .button {
                background-color: white; 
                color: black; 
                border: 2px solid #008CBA;
                padding: 8px 16px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 19px;
                margin: 8px 4px;
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
                cursor: pointer;
            }
            .validate:hover {
               background-color: #008CBA;
                color: white;
            }
            input {
                width: 40%;
                padding: 12px 20px;
                margin: 8px 0;
                box-sizing: border-box;
            }
            .name{
                width:20%;
                padding: 12px 20px;
                margin: 8px 0;
                box-sizing: border-box;
            }
        </style>
    </head>
    
    <body>
        <!--heading sized 1-->
        <h1 class="heading">eBusiness</h1>
        <!-- div tags to store nav bar-->
         <div class="back">
            <br/><br/>
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
              </li>
              <li class="dropdown">
                  <a href="cloud.html" class="dropbtn">Cloud Vendor</a>
                  <div class="dropdown-content">
                  <a href="cloud.html">About Cloud</a>
                  <a href="Ebus1.php">Products</a>
                  </div>
              </li>
            </ul>
        </div>
            <br/><br/>
        <!-- header sized 4-->
        <h4>Please enter your payment details</h4>
        
        <!-- form to enter detials, posting results to ebus3-->
        <form action="Ebus3.php" method="POST">
            <label for="Name">Full Name: </label><br/>
            <input type="text" name="firstname" id="user_name" maxlength="20" placeholder="First.." class="name">
            <input type="text" name="lastname"id="last_name" maxlength=20 placeholder="Last.." class="name">
                <br/><br/>
            <label for="email">Email:</label>
                <br/>
            <input type="text" name="email" id="user_Email" maxlength="30" placeholder="Your Email..">
                <br/><br/>
            <label for="user_pin" placeholder="Your PIN..">PIN:</label>
                <br/>
            <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4" placeholder="Your Password..">
            <a href="Ebus3.php">
                    <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
            </a>
              
        </form>
            
                <br/>
        <!-- button which runs validatedetails function-->
        <button class="button validate" onClick="return validateDetails()">Validate</button>
            
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


