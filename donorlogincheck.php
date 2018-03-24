<?php
session_start();
include 'dbconnect.php';
$check=0;
$user = $_POST['txtuser'];
$pwd = $_POST['txtpassword'];
$sql = "Select userid,password,district,state from bbms.donor";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result)){
if($row[0]==$user && $row[1]==$pwd){
       $_SESSION['userid'] = $user;
       $_SESSION['district'] = $row[2];
       $_SESSION['state'] = $row[3];
       $check = 1;
       header('location: donorHome.php');        
}
}
if($check==0)
header('location: index.php?msg=Incorrect ID or Password!!!');
?>
