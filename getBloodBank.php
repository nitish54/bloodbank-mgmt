<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <link rel="stylesheet" href="images/CitrusIsland.css" type="text/css" />
    </head>
    <body>
        <div id="wrap"><!-- wrap starts here -->

            <?php
            $state = $_GET["state"];
            $dist = $_GET["district"];
            ?>
            <div id="mainpage">
                <br/>
                <center><font size="5" Color="Green">Blood Banks' Details</font></center>
              <br/>
                    <table width="100%" border="1">
                        
                        <tr>
                            <th width="20%" height="33" align="center">State</th>
                            <th width="20%" align="center">District</th>
                            <th width="60%" align="center">Blood Banks</th>
                        </tr>
                            <?php
                            include 'dbconnect.php';
                            $sql = "Select state,district,name from bbms.bbhlogin where type='bloodbank' and state = '$state' and district = '$dist' and status='approved'";
                            $result = mysql_query($sql);
                            while ($row = mysql_fetch_array($result)) {
                                echo "<tr><td height='40'>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                            }
                            ?>
                    </table>
              
                <br/>

            </div>
        </div><!-- wrap ends here -->		
    </body>
</html>



