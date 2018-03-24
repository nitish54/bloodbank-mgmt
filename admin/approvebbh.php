<?php
include '..\dbconnect.php';
$id = $_GET["id"];
$sql = "Update bbms.bbhlogin set status='approved' where userid='$id'";
mysql_query($sql);
?>
