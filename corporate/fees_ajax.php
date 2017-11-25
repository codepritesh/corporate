<?php
include_once("function.php");
$id=$_GET['id'];
$fetch=mysql_query("select * from `processing_fees` where `id`='$id'")or die(mysql_error());
$res=mysql_fetch_array($fetch);
echo $res['fees'];
?>
