<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <link rel="stylesheet" href="..\images/CitrusIsland.css" type="text/css" />

        <title>Search Results-BBMS</title>

    </head>
    <body>
        <div id="wrap"><!-- wrap starts here -->
            <?php
            include 'otherHeader.php';
            ?>
            <!-- Header ends-->
             <div id="mainpage">
                <?php
                include '..\dbconnect.php';
                $nam = $_GET['name'];
                $sql = "Select * from bbms.bbhlogin where name = '$nam'";
                $result = mysql_query($sql);
                $row = mysql_fetch_array($result);
                ?>
                <h1>Details Page</h1><br/>		
                <center>
                    <form>
                        <table width="70%" border="0">
                             <tr>
                                <td height="41">Name</td>
                                <td>:</td>
                                <td><input type="text" name="txtname" id="txtname" value="<?php echo $row[3];?>" readonly="true"/></td>
                            </tr>
                            <tr>
                                <td height="46">Type</td>
                                <td>:</td>
                                <td><input type="text" name="txttype" id="txttype" value="<?php echo $row[2];?>" readonly="true"/>
                                </td>
                            </tr>
                            <tr>
                                <td height="40">Address</td>
                                <td>:</td>
                                <td><textarea name="txtaddress" id="txtaddress" cols="25" rows="3" readonly="true" ><?php echo $row[4];?></textarea></td>
                            </tr>
                            <tr>
                                <td height="40">District</td>
                                <td>:</td>
                                <td><input type="text" name="txtdistrict" id="txtdistrict" value="<?php echo $row[5];?>" readonly="true" /></td>
                            </tr>
                            <tr>
                                <td height="47">State</td>
                                <td>:</td>
                                <td><input type="text" name="txtstate" id="txtstate" value="<?php echo $row[6];?>" readonly="true" /></td>
                            </tr>
                            <tr>
                                <td height="43">Contact No.</td>
                                <td>:</td>
                                <td><input type="text" name="txtcontact" id="txtcontact" value="<?php echo $row[7];?>" readonly="true"/></td>
                            </tr>
                           <tr>
                                <td height="43" colspan="3">
                                    <center><a href="javascript:history.go(-1)"><img src="..\images/backbutton1.gif" alt="Back to Homepage" width="50" height="20" style="border: 0;"/><font size="4">Return Back</font></a>
                                        </center> 
                                </td>
                              </tr>
                        </table>
                    </form>
                </center>
            </div>	
        </div><!-- wrap ends here -->	
        <?php
        include '..\footer.php';
        ?>	
    </body>
</html>
