<?php
include_once("function.php");
$id=$_GET['id'];
$res=mysql_query("delete from `set_deposit_amt`  where `id`='$id'");
$msg="Delete Successfully";
header("location:deposit_amtscheme.php?msg=$msg");
?>
