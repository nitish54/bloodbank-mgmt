<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="images/CitrusIsland.css" type="text/css" />
<title>Donor Register</title>
</head>
     <script type="text/javascript">
     function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}     
     function validate(){
       var loginlabel = document.getElementById('lblLoginidError');
       var namelabel = document.getElementById('lblNameError');
       var bloodlabel = document.getElementById('lblBloodError');
       var sexlabel = document.getElementById('lblSexError');
       var addresslabel = document.getElementById('lblAddressError');
       var citylabel = document.getElementById('lblCityError');
       var districtlabel = document.getElementById('lblDistrictError');
       var statelabel = document.getElementById('lblStateError');
       var contactlabel = document.getElementById('lblContactError');
       var emaillabel = document.getElementById('lblEmailError');
       loginlabel.innerText = "";
       namelabel.innerText = "";
       bloodlabel.innerText = "";
       sexlabel.innerText = "";
       addresslabel.innerText = "";
       citylabel.innerText = "";
       districtlabel.innerText = "";
       statelabel.innerText = "";
       contactlabel.innerText = "";
       emaillabel.innerText = "";
       if(document.forms["registerform"]["txtloginid"].value == ""){
            loginlabel.innerText = "*Enter Desired Login Id!!!";
            return false;
        }
        if(document.forms["registerform"]["txtname"].value == ""){
            namelabel.innerText = "*Please Enter Name!!!";
            return false;
        }
        if(document.forms["registerform"]["sltblood"].value == "-- Select --"){
            bloodlabel.innerText = "*Please Select your Blood Group!!!";
            return false;
        }
        if(document.forms["registerform"]["sltsex"].value == "-- Select --"){
            sexlabel.innerText = "*Please Select yoour Gender!!!";
            return false;
        }
        if(document.forms["registerform"]["txtadd"].value == ""){
            addresslabel.innerText = "*Enter Your Address!!!";
            return false;
        }
        if(document.forms["registerform"]["txtcity"].value == ""){
            citylabel.innerText = "*Enter Your city!!!";
            return false;
        }
        if(document.forms["registerform"]["txtdistrict"].value == ""){
            districtlabel.innerText = "*Enter District!!!";
            return false;
        }
        if(document.forms["registerform"]["txtstate"].value == ""){
            statelabel.innerText = "*Enter State!!!";
            return false;
        }
         if(document.forms["registerform"]["txtemail"].value == ""){
            emaillabel.innerText = "*Enter Email ID!!!";
            return false;
        }
        if(document.forms["registerform"]["txtcontact"].value == ""){
            contactlabel.innerText = "*Enter Contact Details!!!";
            return false;
        }
        if(!(emailValidator(document.getElementById('txtemail'), 'Enter a valid email ID'))) return false;
        return true;        
    }
     </script>  
<body>
    <div id="wrap">
<?php
include 'header.php';
?>
        <br/>
   <center> <h1>Donor Registration</h1></center>
   <br/>
   <div style="height: 450px; width: 800px; font-size: 15px;" align="center">
    <center>
        <form name="registerform" action="donorRegisterdProcess.php" method="post" onsubmit="return validate();">
       <table border="0" align="center" cellpadding="20" cellspacing="10">
  <tr>
   <td width="14%">Desired LoginID</td>
    <td width="4%">:</td>
    <td width="20%">  <input type="text" name="txtloginid" id="txtloginid" autofocus="true"/>  </td> 
    <td width="42%"><font color="red"> <label id="lblLoginidError" style="width: 300px"></label></font>
    </td>
  </tr>
   <tr>
   <td>Name</td>
    <td>:</td>
    <td>  <input type="text" name="txtname" id="txtname" /> </td> <td> <font color="red"> <label id="lblNameError"></label></font>
    </td>
  </tr>
  <tr>
    <td>Blood group</td>
    <td>:</td>
    <td>  <select name="sltblood" id="sltblood">
            <option>-- Select --</option>
            <option value="apositive">A+</option><option value="anegative">A-</option>
            <option value="bpositive">B+</option><option value="bnegative">B-</option>
            <option value="abpositive">AB+</option><option value="abnegative">AB-</option>
            <option value="opositive">O+</option><option value="onegative">O-</option>
        </select> </td> <td> <font color="red"> <label id="lblBloodError"></label></font>
    </td>
  </tr>
  <tr>
    <td>Sex</td>
    <td>:</td>
    <td><select name="sltsex" id="sltsex">
            <option>-- Select --</option>
            <option value="male">Male</option><option value="female">Female</option>
        </select> </td> <td> <font color="red"> <label id="lblSexError"></label></font>
    </td>
  </tr>
  <tr>
    <td width="40%">Address</td>
    <td width="3%">:</td>
    <td width="57%">  <textarea name="txtadd" id="txtadd" rows="2" cols="20"></textarea >
    </td>
    <td><font color="red"> <label id="lblAddressError"></label></font>
    </td>
  </tr>
  <tr>
    <td>City</td>
    <td>:</td>
    <td>  <input type="text" name="txtcity" id="txtcity" /> </td> <td> <font color="red"> <label id="lblCityError"></label></font>
    </td>
  </tr>
  <tr>
    <td>District</td>
    <td>:</td>
    <td>  <input type="text" name="txtdistrict" id="txtdistrict" /> </td> <td>  <font color="red"> <label id="lblDistrictError"></label></font>
    </td>
  </tr>
  <tr>
    <td>State</td>
    <td>:</td>
    <td><input type="text" name="txtstate" id="txtstate" /> </td> <td>   <font color="red"> <label id="lblStateError"></label></font>
    </td>
  </tr>
  <tr>
    <td>Email ID</td>
    <td>:</td>
    <td><input type="text" name="txtemail" id="txtemail" /> </td> <td>   <font color="red"> <label id="lblEmailError"></label></font>
    </td>
  </tr>
<tr>
    <td>Contact No.</td>
    <td>:</td>
    <td><input type="text" name="txtcontact" id="txtcontact" /> </td> <td><font color="red"> <label id="lblContactError"></label></font>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
      <td colspan="3"><center><input type="submit" class="button" value="  Register  "/> &ensp;&ensp;&ensp;  <input type="reset" class="button" value="Reset"/></center>     </td>
    <td>&nbsp;</td>
   
  </tr>
       </table>
   </form>
        </div>
    </div>
    </body>
    <?php
    include 'footer.php';    
    ?>
</html>