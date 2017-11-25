<?php
include_once("function.php");
$acc=$_GET['acc'];
$saccdetails=mysql_query("select * from `compulsarydeposite` where `acc_no`='$acc'")or die(mysql_error());
$ressaccdetails=mysql_fetch_array($saccdetails);
echo json_encode($ressaccdetails);
?>