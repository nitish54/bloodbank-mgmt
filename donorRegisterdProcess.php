<?php
include 'dbconnect.php';
$userid = $_POST["txtloginid"];
$name = $_POST["txtname"];
$blood = $_POST["sltblood"];
$sex = $_POST["sltsex"];
$address = $_POST["txtadd"];
$city = $_POST["txtcity"];
$district = $_POST["txtdistrict"];
$state = $_POST["txtstate"];
$email = $_POST["txtemail"];
$contact = $_POST["txtcontact"];
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $pwd = '';
    for ($i = 0; $i < 8; $i++)
        $pwd .= $characters[mt_rand(0, 61)];
$sql = "insert into bbms.donor values('$userid','$pwd','$name','$blood','$sex','$address','$city','$district','$state','$email',$contact)";
if(mysql_query($sql)){
    header('location: index.php?msg=Registered Successfully...Check your mailbox!!!');
}
else{
    $error = mysql_error();
    header("location: error.php?errmsg=$error");
}
?>
