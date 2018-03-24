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
    function search()
        {
            if(validate()){
            var xmlhttp;
            var bloodgroup = document.forms["searchform"]["sltblood"].value;
            var quantity = document.forms["searchform"]["txtstock"].value;     
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
            xmlhttp.open("GET","searchbbh.php?group="+bloodgroup+"&quantity="+quantity,true);
            xmlhttp.send();
            }
            else return false;
        }
        
        
     function validate(){
       var errorlabel = document.getElementById('lblError');
       errorlabel.innerText = "";
       if(document.forms["searchform"]["sltblood"].value == "-- Select --"){
            errorlabel.innerText = "*Enter Blood group to be searched!!!";
            return false;
        }
        if(document.forms["searchform"]["txtstock"].value == ""){
            errorlabel.innerText = "*Please Enter No. of units of blood!!!";
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

                <h1>Search Blood banks for Blood Stock</h1><br/>		
                <center>
                    <font color="red"> <label id="lblError" style="font-size: 18px;"></label></font>
                    <form name="searchform">
  <table width="100%" border="0">
  <tr height="46"  style="font-size: 20px;">
    <td width="30%">Blood group</td>
    <td width="5%">:</td>
    <td width="45%">  <select name="sltblood" id="sltblood">
            <option>-- Select --</option>
            <option value="apositive">A+</option><option value="anegative">A-</option>
            <option value="bpositive">B+</option><option value="bnegative">B-</option>
            <option value="abpositive">AB+</option><option value="abnegative">AB-</option>
            <option value="opositive">O+</option><option value="onegative">O-</option>
        </select> </td>
  </tr>
      <tr height="46"  style="font-size: 20px;">
    <td >No. of Units</td>
    <td>:</td>
    <td><input type="text" name="txtstock" id="txtstock" maxlength="10"/></td>
  </tr>
  
  <tr>
    <td height="50" colspan="3"><center><input type="button" class="button" id="btnsearch" value="   Search   " onclick="search();"/>
      <input type="reset" class="button" name="btnreset" id="btnreset" value="  Reset  " /></center></td>
  </tr>
</table>
</form>
                </center>
                <br/>
                <div id="divShow" class="main" style="font-size: 12px;">
                    <br/><br/>

                </div>
            </div>	
        </div><!-- wrap ends here -->	
        <br/><br/><br/><br/>
        <?php
        include 'otherfooter.php';
        ?>	

    </body>
</html>
