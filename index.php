<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <link rel="stylesheet" href="images/CitrusIsland.css" type="text/css" />
<title>BBMS</title>
</head>
    <script type="text/javascript">
    function logincheck(){
       var loginlabel = document.getElementById('lblLoginError');
       if(document.forms["loginform"]["txtuser"].value == "" || document.forms["loginform"]["txtpassword"].value == ""){
            loginlabel.innerText = "Username or Password invalid!!!";
            return false;
        }
        return true;        
    }
    function selectcheck(){
         var selectlabel = document.getElementById('lblSelectError');
         if(document.forms["selectform"]["queryTypeCombo"].value== "-- Please select --"){
            selectlabel.innerText = "Please select!!!";
            return false;
        }
        return true;          
    }
    
    </script>
    <body>
        <div id="wrap"><!-- wrap starts here -->

            <?php
            include 'header.php';
            ?>

            <div id="main">

                <h1>Our Vision</h1><br/>		
                <center><img src="images\frontgif.gif" width="550" height="245"></img></center>
                <table width="100%">
                    <tr>
                        <td width="50%">
                            <h1>News and Updates</h1>
                        </td>
                         <td width="50%">
                            <h1>Blood Donation Camps</h1>
                         </td>
                        </tr>
                    <tr>
                        <td width="50%">
                            <marquee behavior="scroll" direction="up" scrollamount="2" height="150">
                                <?php
                                include 'dbconnect.php';
                                $check = date("Y-m-d");
                                $sql = "Select * from bbms.news where date >= '$check'";
                                $result = mysql_query($sql);
                                while ($row = mysql_fetch_array($result)) {
                                    echo "<p>".$row[0]."<br/><div align='right'><i>Posted on : ".$row[2]."</i></div></p>";
                                }
                                ?>    
                            </marquee>
                            <div align="right" style="font-size: 15px;"><a href="news.php">Read more</a></div>
                        </td>
                        <td width="50%" height="100%"align="top">
                          <center><font color="red"> <label id="lblSelectError"></label></font></center>
                            <form name="selectform" action="bloodbank.php" method="post" onsubmit="return selectcheck();">
                                <br/>
                            <?php
                                include 'dbconnect.php';
                                $sql = "Select distinct(state) from bbms.bbhlogin where type='bloodbank' and status='approved'";
                                $result = mysql_query($sql);
                                echo "<b>Select State :  </b><select name=\"queryTypeCombo\" id='select'>"; 
                                echo "<option>-- Please select --</option>\n"; 
                                while ($row = mysql_fetch_array($result)) {
                                    echo "<option value ='$row[0]'>$row[0]</option>\n";
                                }
                               echo "</select><br/><br/>";
                                mysql_close();
                            ?> 
                             
                   <center>     <input type="submit" class="button" value="  Submit  "/> 
                       &nbsp;&nbsp;&nbsp;<input type="reset" class="button" value="Reset"/></center>
                            </form>
                        </td>
                    </tr>
                </table>

            </div>	

            <div id="rightbar">

                <h1>Donor's Login</h1>
                <p style="font-size: 15px;">Enter your credentials...</p>
               <center>
                   <?php
                   if(isset($_GET['msg'])){
                    $msg = $_GET['msg'];
                    if($msg=="Incorrect ID or Password!!!") echo "<font color='red' size='4'>".$msg."</font>";
                    else if($msg=="Registered Successfully...Check your mailbox!!!") echo "<font color='green' size='4'>".$msg."</font>";
                    }
                   ?>
                   <font color="red"> <label id="lblLoginError"></label></font></center><form name="loginform" action="donorlogincheck.php" method="post"><table>
                        <tr style="font-size: 12px;">
                    <td align="left" width="45%"> <b>Username : </b></td><td align="right"><input type="text" id="txtuser" name="txtuser" maxlength="15" autofocus="true"></input></td></tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr style="font-size: 12px;">
                   <td align="left" width="45%"> <b>Password :  </b></td><td align="right"><input type="password" id="txtpassword" name="txtpassword" maxlength="15"></input></td></tr>
                    </table>
                    <br/>
                    <div align="right"> <a href="#">Forgot your password?</a></div><br/>
                    <center> <input type="submit" class="button" value="  Login  " onclick="return logincheck();"/> 
                        &nbsp;&nbsp;&nbsp;<input type="reset" class="button" value="Reset"/></center>
                   </form> 
                  <center> <a href="javascript:window.open('bloodstock.php','Blood Stock','width=500,height=350')"><img src="images/bloodstock.gif" width="80%" height="33"/></a><center>
                
                <h1></h1>
                <p><center><a href="donorregister.php"><img src ="images/registerdonor.gif" width="160" height="160"/></a></center></p>		


            </div>		

        </div><!-- wrap ends here -->	

        <?php
        include 'footer.php';
        ?>	

    </body>
</html>
