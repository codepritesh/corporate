<?php
include_once("function.php");
$mid=$_GET['mid'];
$getvendor=mysql_query("select * from `member` where `id`='$mid'")or die(mysql_error());
$resvendor=mysql_fetch_array($getvendor);
echo json_encode($resvendor);
?>