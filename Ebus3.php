
<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- adding a title to webpage-->
        <title>RECEIPT</title>
        <!-- importing external stylesheet-->
        <link rel="stylesheet" href="mystylesheet.css" type="text/css"/>
        <!-- embedded styling-->
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
        <!-- heading size 1-->
        <h1 class="heading">Receipt</h1>
        <!-- div tags to store my nav bar-->
        <div class="back">
            <br/><br/>
            <ul>
                  <li><a href="homepage.html">Homepage</a></li>
                  <li class="dropdown">
                      <a href="sport.html" class="dropbtn">Interests</a>
                      <div class="dropdown-content">
                      <a href="travel.html">Travel</a>
                      <a href="sport.html">Sport</a>
                      <a href="cloud.html">Cloud</a>
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
        <!-- heading sized 3-->
        <h3 style=" text-align:center;">RECEIPT</h3>
        <div class="receipt"> 
            <p><strong>Congratulations on your purchase!!</strong><p>
            <?php   
            // Echo session variables that were set on previous page
            echo "Name: ". $_POST["firstname"];
            echo " " . $_POST["lastname"] .  "<br/>"; 
            echo "Email: " . $_POST["email"] . "<br/>";
            echo "Your total is: $" . $_SESSION["total"] . ".";
            ?>
        </div> 
        <br/><br/><br/><br/>
        <footer>
            <p>117429464 &copy 2018</p>
        </footer>
    </body>
</html>