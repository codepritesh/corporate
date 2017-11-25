<?php
include_once("function.php");
$accno=$_GET['acc'];
$saccdetails=mysql_query("select * from `savingaccount` where `acc_no`='$accno'")or die(mysql_error());
$ressaccdetails=mysql_fetch_array($saccdetails);

$int = mysql_query("SELECT SUM(`interest`) as `interest` FROM  `saving_ledger` WHERE  `acc_no`='$accno'");
$resint=mysql_fetch_array($int);
$res=array();
$res['acc_no']=$ressaccdetails['acc_no'];
$res['customer_id']=$ressaccdetails['customer_id'];
$res['deposited_amt']=$ressaccdetails['deposited_amt'];
$res['interest'] = $resint['interest'];
$res['total'] = $resint['interest']+$ressaccdetails['deposited_amt'];
echo json_encode($res);
?>