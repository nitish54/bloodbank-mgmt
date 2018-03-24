<?php
include '../dbconnect.php';
$news = $_POST['txtnews'];
$date = $_POST['txtdate'];
$post = $_POST['txtpost'];
$sql = "INSERT INTO bbms.news values ('" . $news . "','" . $date . "','" . $post . "')";
mysql_query($sql) or die('Bad Query at 12');
header('location: addNews.php');//SESSION VARIABLE SET N UNSET
?>
