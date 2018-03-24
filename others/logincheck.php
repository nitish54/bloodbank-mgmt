<?php
session_start();
include '..\dbconnect.php';
$check=0;
$user = $_POST['txtuser'];
$pwd = $_POST['txtpassword'];
$sql = "Select userid,password,name from bbms.bbhlogin where status='approved'";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result)){
if($row[0]==$user && $row[1]==$pwd){
       $_SESSION['userid'] = $user;
       $_SESSION['name'] = $row[2];
       header('location: bbhhome.php'); 
       $check = 1;
}
}
if($check==0)
header('location: index.php?msg=Incorrect ID or Password!!!');
?>
