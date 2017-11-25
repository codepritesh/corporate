<?php
include_once("function.php");
$id=$_GET['sid'];
$dt=$_GET['date'];
mysql_query("delete from `calender` where `id`='$id'");
header("location:calender.php");
?>