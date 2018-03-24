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
    <script language="JavaScript">
        function approve(id){
            var xmlhttp;   
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
                    document.getElementById(id).setAttribute('value','Approved');
                    document.getElementById(id).setAttribute('style','color: green');
                    document.getElementById(id).disabled=true;
                }
            }
            
            xmlhttp.open("GET","approvebbh.php?id="+id,true);
            xmlhttp.send();
        }
    </script>
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
                <form>
                    <table width="100%" border="1">
                        <tr align='center' height='50'>
                            <th colspan="4" style="font-size: 20px">...Approve Hospitals...</th>
                        </tr>
                        <tr align='center' height='30'>
                            <th>Name of Hospital</th><th>Address</th><th>Click to Approve</th><th>Click for Details</th>
                        </tr>
                        <?php
                        include '..\dbconnect.php';
                        $sql = "Select userid,name,address from bbms.bbhlogin where status='pending' and type='hospital'";
                        $result = mysql_query($sql);
                        while ($row = mysql_fetch_array($result)) {
                            echo "<tr align='center' height='30'><td>$row[1]</td><td>$row[2]</td><td><input type='button' class='button' id='$row[0]' value='Approve' onclick='approve(this.id);'/></td><td><a href=\"javascript:window.open('bbhdetails.php?userid=$row[0]','Details','width=500,height=600')\">See Details</a></td></tr>";
                        }
                        ?>
                    </table>
                </form>
            </div>	
        </div><!-- wrap ends here -->	

        <?php
        include 'adminfooter.php';
        ?>	

    </body>
</html>
