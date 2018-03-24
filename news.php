<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <link rel="stylesheet" href="images/CitrusIsland.css" type="text/css" />
	
<title>BBMS</title>
	
</head>

<body>
    <div id="wrap">
<?php
include 'header.php';
?>
        <div id="mainpage" align="center" style="height: 500px">
    <br/>
    <table width="800px"  id="h1" >
       <tr height="45"><th style="font-family: cursive; font-size: 25px;">
            News and Updates
        </th>
            <th style="font-family: cursive; font-size: 25px;">
                Date of Event
            </th>
        </tr>
    <?php
    include 'dbconnect.php';
    $check = date("Y-m-d");
    $sql = "Select news,date from bbms.news where date >= '$check'";
    $result = mysql_query($sql);
    while ($row = mysql_fetch_array($result)) {
            echo "<tr><td colspan='2'></td></tr><tr><td colspan='2'></td></tr><tr style='font-size: 15px;'><td><b><center><p>" . $row[0] . "</p></td></b><td><center><p>". $row[1] ."</p></td>" ;
    }
    echo "<tr><td colspan='2' height='15'></td></tr>";
    echo "<tr><td colspan='2' style='font-family: cursive; font-size: 25px; height: 65px; color: red;'><center>Expired News</td></tr>";
    $sql = "Select news,date from bbms.news where date < '$check'";
    $result = mysql_query($sql);
    while ($row = mysql_fetch_array($result)) {
            echo "<tr><td colspan='2'></td></tr><tr><td colspan='2'></td></tr><tr style='font-size: 15px;'><td><b><center><p>" . $row[0] . "</p></td></b><td><center><p>". $row[1] ."</p></td>" ;
    }
    ?>
      
    </table>
</div>
    </div>
</body>
    <?php
    include 'footer.php';    
    ?>
</html>
