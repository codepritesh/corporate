<?php
include_once("function.php");
$id=$_GET['id'];
$res=mysql_query("delete from `grouploan_plan`  where `id`='$id'");
$msg="Successfully Deleted.";
header("location:grouploan_plan.php?msg=$msg");
?>