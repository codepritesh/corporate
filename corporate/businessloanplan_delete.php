<?php
include_once("function.php");
$id=$_GET['id'];
$res=mysql_query("delete from `businessloan_plan`  where `id`='$id'");
$msg="Successfully Deleted.";
header("location:businessloan_plan.php?msg=$msg");
?>