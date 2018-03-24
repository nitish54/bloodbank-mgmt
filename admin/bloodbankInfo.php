<?php
session_start();
if(!(isset($_SESSION['userid']))) header('location: index.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <link rel="stylesheet" href="../images/CitrusIsland.css" type="text/css" />

        <title>BBMS-Blood Banks</title>

    </head>
 <style type="text/css">
        <!--
        div.scroll {
            height: 400px;
             width: 100%;
            overflow: auto;
            border: 1px solid #666;
            background-color: #EFF0F1;
            vertical-align: top;
        }
        -->
    </style>
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
            <div id="wside">
        <?php
        include '..\dbconnect.php';
        $sql = "SELECT count(*) FROM bbms.bbhlogin where type='bloodbank'";
        $result1 = mysql_query($sql);
        $row1 = mysql_fetch_array($result1);
        echo "<center><font size='3'color='blue'><br/><b>Total No. of registered Blood Banks: " ."<u>". $row1[0]."</u></b></font><br/>";
        ?>
        <br/>
        <div class="scroll">
            <br/><br/>
            <table width="100%" border="1" cellpadding="1" cellspacing="1" align="center" >
                <tr height="30"><th>User-id</th><th>Name</th>
                <th>Address</th><th>District</th>
                <th>State</th><th>Contact No.</th>
                <th>Status</th>
                </tr>
                <?php              
                $query = "SELECT userid,name,address,district,state,contactno,status FROM bbms.bbhlogin where type='bloodbank'";
                $result = mysql_query($query);
                while ($row = mysql_fetch_array($result)) {
                    echo "<tr height='25'><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td><td>" . $row[4] . "</td><td>" . $row[5] . "</td><td>" . $row[6] . "</td></tr>";
                }
                echo "</table>";
                echo "<br/><br/>";
                ?>
        </div>
        <br/><br/>
                 </div>	
        </div><!-- wrap ends here -->	

        <?php
        include 'adminfooter.php';
        ?>	

    </body>
</html>
