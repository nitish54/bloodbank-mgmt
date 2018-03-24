<?php
session_start();
if (!(isset($_SESSION['userid'])))
    header('location: index.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <link rel="stylesheet" href="images/CitrusIsland.css" type="text/css" />

        <title>Donor - BBMS</title>

    </head>
    <body>
        <div id="wrap"><!-- wrap starts here -->

            <?php
            include 'donorHeader.php';
            ?>

            <div id="sidebar" >	
                <code><span style="align: right; color: blue;"><label><?php echo "Hello " . $_SESSION['userid'] ?> </label></span></code>
                <ul class="sidemenu">
                    <li><a href="nearByHospital.php">Near By Associated Hospitals</a></li>
                    <li><a href="nearByBloodbank.php">Near By Blood Banks</a></li>
                    <li><a href="allHospitals.php">Hospital Details</a></li>				
                    <li><a href="allBloodbanks.php">Blood Bank Details</a></li>
                    <li><a href="accountDetails.php">Account Details</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>

            </div>
            <div id="main">

                <h1>Details</h1><br/>		
                <center>
                    <h1>Previous Blood Donations</h1>
                    <table width="100%" border="1">

                        <tr>
                            <th width="20%" height="33" align="center">Date</th>
                            <th width="40%" align="center">Hospital/Blood Bank</th>
                            <th width="15%" align="center">No. of Units</th>
                            <th width="25%" align="center">Status</th>
                        </tr>
                        <?php
                        include 'dbconnect.php';
                        $user = $_SESSION['userid'];
                        $sql = "Select donationdate,bbhname,noofunits,status from bbms.donation where userid='$user'";
                        $result = mysql_query($sql);
                        while ($row = mysql_fetch_array($result)) {
                            if($row[3]=="increased") $s = "Added to account";
                            else $s = "Deleted from account";
                            echo "<tr align='center'><td height='40'>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$s</td></tr>";
                        }
                        function add_date($orgDate, $mth) {
                            $cd = strtotime($orgDate);
                            $retDAY = date('Y-m-d', mktime(0, 0, 0, date('m', $cd) + $mth, date('d', $cd), date('Y', $cd)));
                            return $retDAY;
                        }
                        $check=0;
                        $sql1 = "Select max(donationdate) from bbms.donation where userid='$user' and status='increased'";
                        $result1 = mysql_query($sql1);
                        $row1 = mysql_fetch_array($result1);
                        if ($row1[0]==NULL) {$check=1;
                        echo "<br/><font color='blue' size='4'>No Previous Donation found</font><br/>";
                        }
                        if ($row1[0]) {
                            $res = add_date($row1[0], 3);
                             if ($res < (date("Y-m-d")))
                                $check=1;
                        }
                           
                        ?>
                        </table>
                        <h1></h1>
                        <h1>
                            Eligible for Blood Donation: 
                                <?php if($check==1) echo "<font color='blue'>Yes";
                                else echo "<font color='red'>No";
                                ?>
                        </h1>
                        <h1>
                            <?php
                        $sql2 = "Select sum(noofunits) from bbms.donation where userid='$user' and status='increased'";
                        $result2 = mysql_query($sql2);
                        $row2 = mysql_fetch_array($result2);                            
                        $sql3 = "Select sum(noofunits) from bbms.donation where userid='$user' and status='decreased'";
                        $result3 = mysql_query($sql3);
                        $row3 = mysql_fetch_array($result3);
                            ?>
                            Existing Blood Stock to The Account:  <?php echo "<font color='blue'>".($row2[0]-$row3[0]);?> units
                        </h1>
                    </center>
                </div>	
            </div><!-- wrap ends here -->	

    <?php
    include 'footer.php';
    ?>	

    </body>
</html>
