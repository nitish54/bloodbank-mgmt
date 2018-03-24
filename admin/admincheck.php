<?php
session_start();
$name = $_POST['txtuser'];
$pwd = $_POST['txtpassword'];
if($name=="admin" && $pwd=="admin"){
    $_SESSION['userid'] = 'admin';
       header('location: adminhome.php'); 
}
else header('location: index.php?msg=Incorrect ID or Password!!!');
?>
