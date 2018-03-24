<?php
include '..\dbconnect.php';
function add_date($orgDate,$mth){ 
  $cd = strtotime($orgDate); 
  $retDAY = date('Y-m-d', mktime(0,0,0,date('m',$cd)+$mth,date('d',$cd),date('Y',$cd))); 
  return $retDAY; 
} 
$user = $_GET['user'];
$sql = "Select max(donationdate) from bbms.donation where userid='$user' and status='increased'";
$result=  mysql_query($sql);
$row = mysql_fetch_array($result);
if($row[0]){
$res = add_date($row[0], 3);
if($res < (date("Y-m-d"))) echo "<font color='blue'>Eligible for Blood Donation";
else echo "<font color='red'>Not Eligible for Blood Donation";
}
else echo "<font color='red'>User Does not exist with this user ID";
?>
