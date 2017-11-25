<?php
include_once("function.php");
$id=$_GET['id'];
$res=mysql_query("delete from `demandloan_plan`  where `id`='$id'");
$msg="Successfully Deleted.";
header("location:demandloan_plan.php?msg=$msg");
?>