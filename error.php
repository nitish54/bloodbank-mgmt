<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
    <div>
        <center><br/><br/>
            <font size="5" color="red">
                <?php
                   if(isset($_GET['errmsg'])){
                    $msg = $_GET['errmsg'];
                    echo "<font color='black'>Error Details : <font color='red' size='4'>".$msg."</font><br/><br/>";
                    }
                   ?>
                ...OOPs Something went Wrong...
            </font><br/><br/>
            <img src="images/error.png" width="500" height="300"></img>
        </center>
    </div>
    
</body>
</html>
