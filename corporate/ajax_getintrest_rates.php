<?php
include_once("function.php");
$id=$_GET['id'];
$table=$_GET['table'];
$qwe=mysql_query("select * from $table where `month`='$id'");
$res=mysql_fetch_array($qwe);
echo $res['intrest_rate'];
?>