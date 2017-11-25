<?php
include_once("function.php");
$id=$_GET['id'];
$res=mysql_query("delete from `expencestype`  where `id`='$id'");
$msg="Successfully Deleted...";
header("location:expencestype.php?msg=$msg");
?>
