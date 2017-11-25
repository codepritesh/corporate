<?php
include_once("function.php");
$id=$_GET['id'];
$res=mysql_query("delete from `agricultureloan_plan`  where `id`='$id'");
$msg="Successfully Deleted.";
header("location:agricultureloan_plan.php?msg=$msg");
?>