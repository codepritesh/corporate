<?php
include_once("function.php");
$id=$_GET['id'];
$qwe=mysql_query("select * from `loan_plan` where `id`='$id'");
$res=mysql_fetch_array($qwe);
echo $res['intrest_rate'].'|'.$res['year'];
?>