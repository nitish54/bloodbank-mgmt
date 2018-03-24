<?php
session_start();
if(!(isset($_SESSION['userid']))) header('location: index.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <link rel="stylesheet" href="../images/CitrusIsland.css" type="text/css" />

        <title>BBMS-Hospitals/Blood banks</title>

    </head>
    <body>
        <div id="wrap"><!-- wrap starts here -->

            <?php
            include 'otherHeader.php';
            ?>

            <div id="sidebar" >	                 
                <code><span style="align: right; color: blue;"><label><?php echo "Hello ".$_SESSION['userid'] ?> </label></span></code>
                <ul class="sidemenu">
                    <li><a href="queryStock.php">Current Blood Stock</a></li>
                    <li><a href="updateStock.php">Update Blood Stock</a></li>
                    <li><a href="queryOtherStock.php">Query Blood Stock</a></li>
                    <li><a href="updateDonation.php">Update Donors' Donation</a></li>
                    <li><a href="hospitalProfile.php">Hospital Detail</a></li>	
                    <li><a href="logout.php">Logout</a></li>
                </ul>

            </div>
            <div id="main" style="height: 400px">
                <h1>Our Vision</h1><br/>		
                <center><img src="..\images\frontgif.gif" width="450" height="225"></img></center>
            </div>	
        </div><!-- wrap ends here -->	

        <?php
        include 'otherfooter.php';
        ?>	

    </body>
</html>
