<?php
session_start();
if(!(isset($_SESSION['userid']))) header('location: index.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <link rel="stylesheet" href="../images/CitrusIsland.css" type="text/css" />
        <title>BBMS</title>
        <link href="../calendar/calendar.css" rel="stylesheet" type="text/css"/>
    <script src="../calendar/calendar.js" type="text/javascript"></script>
    </head>
    <script type="text/javascript">
    function func()
    {
        if(document.forms["news"]["txtnews"].value=="")
            {
                alert("Please fill all the details");
                return false;
            }
        if(document.forms["news"]["txtdate"].value=="")
            {
                alert("Please fill all the details");
                return false;
            }
         if(document.forms["news"]["txtdate"].value < document.forms["news"]["txtpost"].value)
             {
                alert("Invalid Entry...PLease Check the Date of Event");
                return false;
            }
      else return true;
    }
   
 </script>

    <body onload="calendar.set('txtdate');">
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

                <h1>Post News/Event</h1><br/>		
                <center>
                   <?php
                    if(isset($_GET['msg'])){ 
                    $msg = $_GET['msg'];
                    echo "<font color='Green' size='4'>".$msg."</font";
                    }
                    ?>  
                    <form id="news" name="news" method="post" action="processAddNews.php" onsubmit="return func();">
  <table width="74%" border="0">
    <tr>
      <td width="33%" height="73">News/Event</td>
      <td width="7%">:</td>
      <td width="60%"><textarea name="txtnews" id="txtnews" cols="35" rows="3" onfocus="calendar.hideCalendar()"></textarea></td>
    </tr>
    <tr>
      <td height="53">Date of Event</td>
      <td>:</td>
      <td><input type='text' name='txtdate' id="txtdate" readonly="true"/></td>
    </tr>
    <tr>
      <td height="50">Date of Post</td>
      <td>:</td>
      <td><input type="text" name="txtpost" id="txtpost" value="<?php echo date("Y-m-d");?>" readonly="true" /></td>
    </tr>
    <tr>
      <td height="67" colspan="3"><center>
        <input type="submit" name="btnsubmit" id="btnsubmit" value="   Submit   " />
        &nbsp;&nbsp;&nbsp;
      <input type="reset" name="btnreset" id="btnreset" value="  Reset  " /></center></td>
    </tr>
  </table>
</form>
                </center>
            </div>	
        </div><!-- wrap ends here -->	

        <?php
        include 'adminfooter.php';
        ?>	

    </body>
</html>
