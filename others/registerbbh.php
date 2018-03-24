<?php
include '..\dbconnect.php';
$userid = $_POST['txtuserid'];
$pwd = $_POST['txtpwd'];
$name = $_POST['txtname'];
$rdotype = $_POST['rdotype'];
$address = $_POST['txtaddress'];
$district = $_POST['txtdistrict'];
$state = $_POST['txtstate'];
$contact = $_POST['txtcontact'];
$sql = "insert into bbms.bbhlogin values ('$userid','$pwd','$rdotype','$name','$address','$district','$state',$contact,'pending')";
$sql1 = "insert into bbms.bbhquantity values ('$userid',0,0,0,0,0,0,0,0)";
if(mysql_query($sql) && mysql_query($sql1))
    header('location: index.php?msg=Registered Successfully...You will be notified soon!!!');
else{
    $error = mysql_error();
    header("location: ..\error.php?errmsg=$error");
}
?>
