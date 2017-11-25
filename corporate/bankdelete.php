<?php
include_once("function.php");
$id=$_GET['id'];
$res=mysql_query("delete from `bank`  where `id`='$id'");
$msg="Successfully Deleted...";
header("location:bank.php?msg=$msg");
?>
