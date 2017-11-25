<?php
include_once("function.php");
$accno=$_GET['acc'];
$saccdetails=mysql_query("select * from `dailydeposit` where `acc_no`='$accno'")or die(mysql_error());
$ressaccdetails=mysql_fetch_array($saccdetails);
echo json_encode($ressaccdetails);
?>