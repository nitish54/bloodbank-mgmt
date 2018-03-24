<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <link rel="stylesheet" href="../images/CitrusIsland.css" type="text/css" />

        <title>Blood Stock - BBMS</title>

    </head>
    <body>
        <div id="wrap"><!-- wrap starts here -->
            <div id="main">
                <?php
                include 'dbconnect.php';
                $sql = "Select sum(apositive),sum(anegative),sum(bpositive),sum(bnegative),sum(abpositive),sum(abnegative),sum(opositive),sum(onegative) from bbms.bbhquantity";
                $result = mysql_query($sql);
                $row = mysql_fetch_array($result);
                ?>
   <form>
 <div id="main" align="center"><font size="3">
<table width="60%" border="0">
  <tr>
    <td height="30" colspan="2"><div align="center">Current Blood Stock</div></td>
  </tr>
    <tr align="center">
    <td width="33%" height="30">A+</td>
    <td width="67%"><input name="txtap" type="text" id="txtap" maxlength="2" value="<?php echo $row[0];?>" readonly="readonly" /></td>
  </tr>
  <tr align="center">
    <td height="28">A-</td>
    <td><input name="txtam" type="text" id="txtam" maxlength="2" value="<?php echo $row[1];?>" readonly="readonly" /></td>
  </tr>
  <tr align="center">
    <td height="29">B+</td>
    <td><input name="txtbp" type="text" id="txtbp" maxlength="2" value="<?php echo $row[2];?>" readonly="readonly" /></td>
  </tr>
  <tr align="center">
    <td height="28">B-</td>
    <td><input name="txtbm" type="text" id="txtbm" maxlength="2" value="<?php echo $row[3];?>" readonly="readonly" /></td>
  </tr>
  <tr align="center">
    <td height="28">AB+</td>
    <td><input name="txtabp" type="text" id="txtabp" maxlength="2" value="<?php echo $row[4];?>" readonly="readonly" /></td>
  </tr>
  <tr align="center">
    <td height="28">AB-</td>
    <td><input name="txtabm" type="text" id="txtabm" maxlength="2" value="<?php echo $row[5];?>" readonly="readonly" /></td>
  </tr>
  <tr align="center">
    <td height="27">O+</td>
    <td><input name="txtop" type="text" id="txtop" maxlength="2" value="<?php echo $row[6];?>" readonly="readonly" /></td>
  </tr>
  <tr align="center">
    <td height="27">O-</td>
    <td><input name="txtom" type="text" id="txtom" maxlength="2" value="<?php echo $row[7];?>" readonly="readonly" /></td>
  </tr>
  <tr>
 <td height="43" colspan="3"><center><input type="button" name="btnok" id="txtok" value="   --OK--   " onclick="window.close();"/>
 </center></td>
 </tr>
</table>
</font>
</div>
   </form>
        </div><!-- wrap ends here -->		
    </body>
</html>
