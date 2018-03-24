<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <link rel="stylesheet" href="images/CitrusIsland.css" type="text/css" />
    </head>
    <body>
        <div id="wrap"><!-- wrap starts here -->

            <?php
            $group = $_GET["group"];
            $quantity = $_GET["quantity"];
            ?>
            <div id="main">
                <br/>
                <center><font size="5" Color="Green">Blood Stock Details</font></center>
              <br/>
                    <table width="100%" border="1">
                        
                        <tr>
                            <th width="10%" height="33" align="center">Type</th>
                            <th width="20%" align="center">Name</th>
                            <th width="40%" align="center">Address</th>
                            <th width="20%" align="center">Contact No.</th>                            
                        </tr>
                            <?php
                            include '..\dbconnect.php';
                            $sql = "Select userid,type,name,address,contactno,status from bbms.bbhlogin having userid in(select userid from bbms.bbhquantity where $group >= $quantity) and status='approved';";
                            $result = mysql_query($sql);
                            while ($row = mysql_fetch_array($result)) {
                                echo "<tr align='center'><td height='40'>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>+91 $row[4]</td></tr>";
                            }
                            ?>
                    </table>              
                <br/>
            </div>
        </div><!-- wrap ends here -->		
    </body>
</html>



