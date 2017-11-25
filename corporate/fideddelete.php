<?php
include_once("function.php");
$id=$_GET['id'];
$res=mysql_query("delete from `fixeddepositescheme`  where `id`='$id'");
header("location:fixed.php");
?>
