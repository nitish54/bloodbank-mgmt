<?php
session_start();
if(!isset($_SESSION['userid']))
    header('location: index.php');
include '..\dbconnect.php';
$ap= $_POST['txtap'];
$am = $_POST['txtam'];
$bp = $_POST['txtbp'];
$bm = $_POST['txtbm'];
$abp = $_POST['txtabp'];
$abm = $_POST['txtabm'];
$op = $_POST['txtop'];
$om = $_POST['txtom'];
$userid = $_SESSION['userid'];
$sql = "UPDATE bbms.bbhquantity set apositive = $ap,
                                    anegative = $am,
                                    bpositive = $bp,
                                    bnegative = $bm,
                                    abpositive = $abp,
                                    abnegative = $abm,
                                    opositive = $op,
                                    onegative = $om where userid = '$userid'";
if(mysql_query($sql))
    header('location: updateStock.php?msg=Stock Updated Successfully...');
else
    header('location: ..\error.php');
?>
