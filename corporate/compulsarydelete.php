<?php
include_once("function.php");
$id=$_GET['id'];
$res=mysql_query("delete from `compulsorysavingscheme`  where `id`='$id'");
header("location:compulsory.php");
?>
