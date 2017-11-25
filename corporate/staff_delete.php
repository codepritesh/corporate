<?php
include_once("function.php");
$id=$_GET['id'];
$res=mysql_query("delete from `staff`  where `id`='$id'");
$msg="Delete Successfully";
header("location:staff.php?msg=$msg");
?>
