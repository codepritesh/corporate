<?php
include_once("function.php");
$id=$_GET['id'];
$res=mysql_query("delete from `goldloan_plan`  where `id`='$id'");
$msg="Successfully Deleted.";
header("location:goldloan_plan.php?msg=$msg");
?>