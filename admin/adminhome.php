<?php
session_start();
if(!(isset($_SESSION['userid']))) header('location: index.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <link rel="stylesheet" href="../images/CitrusIsland.css" type="text/css" />

        <title>BBMS</title>

    </head>
    <body>
        <div id="wrap"><!-- wrap starts here -->

            <?php
            include 'adminHeader.php';
            ?>

<div id="sidebar" >	
	
		<code><span style="align: right; color: blue;"><label><?php echo "Hello ".$_SESSION['userid'] ?> </label></span></code>
		<ul class="sidemenu">
			<li><a href="addNews.php">Add News Event</a></li>
			<li><a href="addHospitals.php">Approve Hospitals</a></li>
                        <li><a href="addBloodbank.php">Approve Blood Banks</a></li>
			<li><a href="DonorInfo.php">Donors Details</a></li>	
			<li><a href="hospitalInfo.php">Hospital Details</a></li>				
                        <li><a href="bloodbankInfo.php">Blood Bank Details</a></li>
                         <li><a href="logout.php">Logout</a></li>
		</ul>
									
	</div>
            <div id="main">

                <h1>Our Vision</h1><br/>		
                <center><img src="..\images\frontgif.gif" width="550" height="245"></img></center>
            </div>	
        </div><!-- wrap ends here -->	

        <?php
        include 'adminfooter.php';
        ?>	

    </body>
</html>
