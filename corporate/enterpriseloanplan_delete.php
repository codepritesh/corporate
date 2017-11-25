<?php
include_once("function.php");
$id=$_GET['id'];
$res=mysql_query("delete from `enterpriseloan_plan`  where `id`='$id'");
$msg="Successfully Deleted.";
header("location:enterpriseloan_plan.php?msg=$msg");
?>