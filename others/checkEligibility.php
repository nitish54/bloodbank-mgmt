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
     <script type="text/javascript">
    function check()
        {
            if(validate()){
            var xmlhttp;
            var user = document.forms["updateform"]["txtuserid"].value;   
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
                    document.getElementById("divShow").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","processCheck.php?user="+user,true);
            xmlhttp.send();
            }
            else return false;
        }
      function resetform(){
      document.getElementById("divShow").innerHTML="";
       var errorlabel = document.getElementById('lblError');
       errorlabel.innerHTML="";
       return;
      }  
        
     function validate(){
       var errorlabel = document.getElementById('lblError');
       errorlabel.innerText = "";
       if(document.forms["updateform"]["txtuserid"].value == ""){
            errorlabel.innerText = "*Enter userid to be checked!!!";
            return false;
        }
        return true;        
    }
     </script>
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
            <div id="main">
                <h1>Check for donors' donation eligibility</h1><br/>		
                <center>
                     <div id="divShow" class="main" style="font-size: 18px;">
                    <br/>
                </div>
                    <font color="red"> <label id="lblError" style="font-size: 18px;"></label></font>
  <form name="updateform">
  <table width="100%" border="0">
  <tr height="46"  style="font-size: 17px;">
    <td width="40%">Enter User ID of Donor</td>
    <td width="5%">:</td>
    <td width="35%"> <input type="text" name="txtuserid" id="txtuserid" maxlength="20"/>
    </td>
  </tr>
  <tr>
    <td height="50" colspan="3"><center><input type="button" class="button" id="btnsubmit" value="   Check   " onclick="check();"/>
            &nbsp;&nbsp;&nbsp;&nbsp; <input type="reset" class="button" name="btnreset" id="btnreset" value="  Reset  " onclick="resetform();" /></center></td>
  </tr>
</table>
</form>
                </center>
                <br/>
            </div>	
        </div><!-- wrap ends here -->	
        <br/><br/><br/><br/>
        <?php
        include 'otherfooter.php';
        ?>	

    </body>
</html>
