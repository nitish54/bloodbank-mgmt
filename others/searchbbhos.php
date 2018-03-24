<?php
$str = $_GET['q'];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("bbms");
$count=0;
$sql = "Select name from bbms.bbhlogin where name LIKE '%$str%' and status='approved'";
$result = mysql_query("$sql");
echo "<table valign='top'>";
while($row = mysql_fetch_array($result)){
    $name[$count++] = $row[0];
}
if($count==0)    echo "<tr height='10'><td>No Suggestion</td></tr>";
else {
$i=0;    
while($i<$count){    
echo "<tr height='10'><td><a href='getBbhDetails.php?name=$name[$i]'>".$name[$i++]."</a></td></tr>";
}
}
echo "</table>";
?>
