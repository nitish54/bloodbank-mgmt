<?php
session_start();
$user = $_GET['user'];
$quantity = $_GET['quantity'];
$status = $_GET['status'];
$bbhname = $_SESSION['name'];
$date = date("Y-m-d");

include '..\dbconnect.php';
$check = "select userid from bbms.donor where userid='$user'";
$result = mysql_query($check);
if(mysql_fetch_array($result)){
$sql = "insert into bbms.donation values('$user','$bbhname','$date',$quantity,'$status')";
if(mysql_query($sql))
    echo "<font color='green'>Request Successfully executed";
else{
    $error = mysql_error();
    header("location: ..\error.php?errmsg=$error");
}
}
else echo "<font color='red'>User Not Registered or wrong UserID";
?>
