<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <link rel="stylesheet" href="images/CitrusIsland.css" type="text/css" />

        <title>Hospitals - BBMS</title>

    </head>
    <script language="javascript" type="text/javascript">
        function showDistrict(selected) {
            document.form1.submit();
        }
          
        function divHospital()
        {
            var xmlhttp;
            var state = document.forms["form1"]["listState"].value;
            var district = document.forms["form1"]["listDistrict"].value;
            
            if(district=="Select")
            {
                document.getElementById("divHospital").innerHTML="Hospitals' info will be listed here...";
                return;
            }
            
            if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            }
            else
            {// code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("divHospital").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","getHospital.php?state="+state+"&district="+district,true);
            xmlhttp.send();
        }
    </script>
    <body>
        <div id="wrap"><!-- wrap starts here -->

            <?php
            include 'header.php';
            ?>
            <div id="mainpage" align="center" style="height: 400px">
                <form id="form1" name="form1" method="post">
                    <table width="70%" border="0">
                        <tr>
                            <td colspan="3">
                                <center><font size="4" color="Red">Select required Entries for viewing Hospital details</font></center>
                            </td>
                        </tr>
                        <tr style="font-size: 20px; color: blue;" align="center">
                            <td width="33%" height="73">State</td>
                            <td width="7%">:</td>
                            <td width="60%" align="left">
                                <?php
                                     include 'dbconnect.php';
                                    $sql = "Select distinct(state) from bbms.bbhlogin where type='bloodbank' and status='approved'";
                                    $result = mysql_query($sql);
                                    ?>
                                    <select name="listState" id="listState" onChange="showDistrict(this.value);">
                                        <option value="Select">-- Please select --</option>
                                        <?php
                                        while ($row = mysql_fetch_array($result)) {
                                            ?>
                                            <option value="<?php echo $row[0]; ?>" 
                                            <?php
                                            if ((isset($_REQUEST["listState"]))) {
                                                if ($row[0] == $_REQUEST["listState"]) {
                                                    echo "Selected";
                                                }
                                            }
                                            ?>>
                                            <?php echo $row[0]; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>

                            </td>
                        </tr>
                        <tr  style="font-size: 20px; color: blue;" align="center">
                            <td height="53">District</td>
                            <td>:</td>
                            <td align="left">
                                    <select name="listDistrict" id="listDistrict" onchange="divHospital();">
                                        <option value="Select">-- Please select --</option>
                                        <?php
                                        if (isset($_REQUEST['listState'])) {
                                            $st = $_REQUEST['listState'];
                                            $sql = "Select distinct(district) from bbms.bbhlogin where type='hospital' and state = '$st' and status='approved'";
                                            $result = mysql_query($sql);
                                            while ($row = mysql_fetch_array($result)) {
                                                echo "<option value = '$row[0]'>$row[0]</option>\n";
                                            }
                                        }
                                        ?>
                                    </select>
                                    <?php
                                    mysql_close();
                                   ?>
                            </td>
                        </tr>
                    </table>
                </form>
                <br/>
                <div id="divHospital" class="main">
                    <font size="4">Hospitals' info will be listed here...</font><br/><br/>

                </div>
            </div>
        </div><!-- wrap ends here -->	
        <?php
        include 'footer.php';
        ?>	
    </body>
</html>
