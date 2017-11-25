<?php
include_once("function.php");
$id=$_GET['id'];
$res=mysql_query("delete from `loan_plan`  where `id`='$id'");
$msg="Successfully Deleted.";
header("location:loan_plan.php?msg=$msg");
?>
