<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <link rel="stylesheet" href="../images/CitrusIsland.css" type="text/css" />

        <title>BBMS</title>

    </head>
     <script type="text/javascript">
     function validate(){
       var useridlabel = document.getElementById('lblUseridError');
       var pwdlabel = document.getElementById('lblPwdError');
       var cnfpwdlabel = document.getElementById('lblCnfpwdError');
       var namelabel = document.getElementById('lblNameError');
       var addresslabel = document.getElementById('lblAddressError');
       var typelabel = document.getElementById('lblTypeError');
       var districtlabel = document.getElementById('lblDistrictError');
       var statelabel = document.getElementById('lblStateError');
       var contactlabel = document.getElementById('lblContactError');
       useridlabel.innerText = "";
       pwdlabel.innerText = "";
       cnfpwdlabel.innerText = "";
       namelabel.innerText = "";
       addresslabel.innerText = "";
       typelabel.innerText = "";
       districtlabel.innerText = "";
       statelabel.innerText = "";
       contactlabel.innerText = "";
       if(document.forms["registerform"]["txtuserid"].value == ""){
            useridlabel.innerText = "*Enter Desired Login Id!!!";
            return false;
        }
        if(document.forms["registerform"]["txtpwd"].value == ""){
            pwdlabel.innerText = "*Please Enter Password!!!";
            return false;
        }
        if(document.forms["registerform"]["txtcnfpwd"].value != document.forms["registerform"]["txtpwd"].value){
            cnfpwdlabel.innerText = "*Password did not Match!!!";
            return false;
        }
        if(document.forms["registerform"]["txtname"].value == ""){
            namelabel.innerText = "*Please Enter Name!!!";
            return false;
        }
        if(registerform.rdotype[0].checked==false && registerform.rdotype[1].checked==false){
            typelabel.innerText = "*Please Select One of Them!!!";
            return false;
        }
        if(document.forms["registerform"]["txtaddress"].value == ""){
            addresslabel.innerText = "*Enter Address!!!";
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
        
         if(document.forms["registerform"]["txtcontact"].value == ""){
            contactlabel.innerText = "*Enter Contact no.!!!";
            return false;
        }
        return true;        
    }
     </script>
    <body>
        <div id="wrap"><!-- wrap starts here -->

            <div id="header">

		<form method="post" class="search" action="#">
			<p>
			<input name="search_query" class="textbox" type="text" />
  			<input name="search" class="button" value="Search" type="submit" />
			</p>
		</form>
								
		<h1 id="logo"><img src ="..\images\logo.jpg" width="62" height="62"/>Donate <span>BLOOD</span></h1> <br/>
		<h2 id="slogan">Donate Blood Save Life...</h2>
					
	</div>
		
	<div id="menu">
		<ul>
			<li><a href="register.php">Register</a></li>			
				
		</ul>		
	</div>
            <!-- Header ends-->
            <div id="mainpage">

                <h1>Registration Page</h1><br/>		
                <center>
                    <form action="registerbbh.php" method="post" name="registerform" onsubmit="return validate();"><table width="100%" border="0">
  <tr>
    <td width="20%" height="52">Username</td>
    <td width="4%">:</td>
    <td width="28%"><input type="text" name="txtuserid" id="txtuserid" autofocus="true"/></td>
    <td width="48%"><font color="red"> <label id="lblUseridError" style="width: 300px"></label></font>
    </td>
  </tr>
  <tr>
    <td height="46">Password</td>
    <td>:</td>
    <td><input type="password" name="txtpwd" id="txtpwd" /></td>
    <td width="48%"><font color="red"> <label id="lblPwdError" style="width: 300px"></label></font>
    </td>
  </tr>
  <tr>
    <td height="41">Confirm Password</td>
    <td>:</td>
    <td><input type="password" name="txtcnfpwd" id="txtcnfpwd" /></td>
    <td width="48%"><font color="red"> <label id="lblCnfpwdError" style="width: 300px"></label></font>
    </td>
  </tr>
  <tr>
    <td height="41">Name</td>
    <td>:</td>
    <td><input type="text" name="txtname" id="txtname" /></td>
    <td width="48%"><font color="red"> <label id="lblNameError" style="width: 300px"></label></font>
    </td>
  </tr>
  <tr>
    <td height="46">Type</td>
    <td>:</td>
    <td>
      <label>
        <input type="radio" name="rdotype" value="hospital" id="rdotype_0" />
        Hospital</label>
      <label>
        <input type="radio" name="rdotype" value="bloodbank" id="rdotype_1" />
        Blood Bank</label>
    </td>
    <td width="48%"><font color="red"> <label id="lblTypeError" style="width: 300px"></label></font>
    </td>
  </tr>
  <tr>
    <td height="40">Address</td>
    <td>:</td>
    <td><textarea name="txtaddress" id="txtaddress" cols="25" rows="3"></textarea></td>
    <td width="48%"><font color="red"> <label id="lblAddressError" style="width: 300px"></label></font>
    </td>
  </tr>
  <tr>
    <td height="40">District</td>
    <td>:</td>
    <td><input type="text" name="txtdistrict" id="txtdistrict" /></td>
    <td width="48%"><font color="red"> <label id="lblDistrictError" style="width: 300px"></label></font>
    </td>
  </tr>
  <tr>
    <td height="47">State</td>
    <td>:</td>
    <td><input type="text" name="txtstate" id="txtstate" /></td>
    <td width="48%"><font color="red"> <label id="lblStateError" style="width: 300px"></label></font>
    </td>
  </tr>
  <tr>
    <td height="43">Contact No.</td>
    <td>:</td>
    <td><input type="text" name="txtcontact" id="txtcontact" /></td>
    <td width="48%"><font color="red"> <label id="lblContactError" style="width: 300px"></label></font>
    </td>
  </tr>
  <tr>
    <td height="43" colspan="3"><center><input type="submit" name="txtsubmit" id="txtsubmit" value="   Submit   " />
      <input type="reset" name="txtreset" id="txtreset" value="  Reset  " /></center></td>
  </tr>
</table>
</form>
                </center>
            </div>	
        </div><!-- wrap ends here -->	

        <!-- footer starts here -->	
	<div id="footer">
		<div id="footer-content">
		<div id="footer-right">
			<a href="index.php">Home</a> |  	
			<a href="index.php">Site Map</a> |
   		<a href="index.php">RSS Feed</a>		
		</div>
		
		<div id="footer-left">
			&copy; Copyright 2012 <strong>Your Company</strong>&nbsp;	 
			Design by: <a href="http://www.facebook.com/nitish54/">Nitish</a> | 
			Valid <a href="http://validator.w3.org/check/referer">XHTML</a> |
   		<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
		</div>
		</div>	
	</div>
<!-- footer ends here -->	

    </body>
</html>
