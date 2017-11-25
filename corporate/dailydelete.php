<?php
include_once("function.php");
$id=$_GET['id'];
$res=mysql_query("delete from `dailydipositescheme`  where `id`='$id'");
header("location:daily.php");
?>
