<html>
    <head>
     <link rel="stylesheet" href="images/CitrusIsland.css" type="text/css" />   
        <title>Hospitals/Blood Banks BBMS</title>
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
      </script>
    <body style="background-color:whitesmoke;">
        <div style="filter:alpha(opacity=80);opacity:.6;">
         <div id="wrap" align="center" style="color:black; filter:alpha(opacity=100);opacity:1;"><!-- wrap starts here -->
        <h1>Hospitals/Blood Banks Login</h1>
                <p style="font-size: 20px;">Enter your credentials...</p>
                <center>
                    <?php
                    if(isset($_GET['msg'])){
                    $msg = $_GET['msg'];
                    if($msg=="Incorrect ID or Password!!!") echo "<font color='red' size='4'>".$msg."</font>";
                    else if($msg=="Registered Successfully...You will be notified soon!!!") echo "<font color='green' size='4'>".$msg."</font>";
                    }
                    ?>
                  <font color="red">   <label id="lblLoginError"></label></font></center>
                <form name="loginform" action="logincheck.php" method="post" onsubmit="return logincheck();">
                    <table>
                        <tr style="font-size: 20px;">
                            <td align="left" width="45%"> <b>Username : </b></td><td align="left"><input type="text" name="txtuser" maxlength="15" autofocus="true" autocomplete="off"></input></td></tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr style="font-size: 20px;">
                            <td align="left" width="45%"> <b>Password :  </b></td><td align="left"><input type="password" name="txtpassword" maxlength="15"></input></td></tr>
                    
                    
                    <tr align="right"><td colspan="2"> <a href="#">Forgot your password?</a></td></tr>
                    <tr align="right">                            
                        <td colspan="2" style="background-color: red;"><a href="register.php"><font color="white">*For New Hospitals/Blood Banks registration...Click here!!!</font></a></td>
                        </tr>
                    <table>
                       <center> <input type="submit" class="button" value="  Login  "/>   <input type="reset" class="button" value="Reset"/></center>
                   </form> 
         </div>
        </div>
    </body>
    
</html>