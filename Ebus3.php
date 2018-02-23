<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
        <link rel="stylesheet" href="mystylesheet.css" type="text/css"/>
        <style>
            .receipt{
            margin: auto;
            width: 20%;
            border: 2px solid grey;
            border-color:#DFE2DB;
            padding: 10px;
            }
        </style>
    </head>
    <body>
        <h1 class="heading">Receipt</h1>
        <div class="back">
            <br/><br/>
                <ul>
                  <li><a href="homepage.html">Homepage</a></li>
                  <li class="dropdown">
                      <a href="javascript:void(0)" class="dropbtn">Interests</a>
                      <div class="dropdown-content">
                      <a href="travel.html">Travel</a>
                      <a href="sport.html">Sport</a>
                      <a href="cloud.html">Cloud</a>
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
                      <li><a href="Ebus1.php">eBusiness</a></li>
    
                    </ul>
        </div>
        <h3 style=" text-align:center;">RECEIPT</h3>
        <div class="receipt">      
            <?php
            // Echo session variables that were set on previous page
            echo "Name: ". $_POST["user_name"];
            echo " " . $_POST["last_name"] .  "<br/>"; 
            echo "Email: " . $_POST["Email"] . "<br/>";
            echo "Your total is: $" . $_SESSION["total"] . ".";
            
            ?>
        </div> 
        <br/><br/><br/><br/>
        <footer>
            <p>117429464 &copy 2018</p>
        </footer>
    </body>
</html>