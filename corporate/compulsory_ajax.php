<?php
include_once("function.php");
$accno=$_GET['acc'];
$fetch=mysql_fetch_array(mysql_query("select SUM(`amount`) as trnamt from `transaction` where  `accountno`='$accno' and `details`!='By Customer COM Saving Interest' ")) or die(mysql_error()); 
$total=$fetch['trnamt'];

$zdata=mysql_query("select * from `zdata` where `accountno`='$accno'");
$ressaccdetails['total_amt'];
$rowzdata=mysql_num_rows($zdata);
$reszdata=mysql_fetch_array($zdata);
if($rowzdata>0)
{
    $total=$total+$reszdata['amount'];
}
mysql_query("update `compulsarydeposite` set `total_amt`='$total' where `acc_no`='$accno'")or die(mysql_error());

$saccdetails=mysql_query("select * from `compulsarydeposite` where `acc_no`='$accno'")or die(mysql_error());
$ressaccdetails=mysql_fetch_array($saccdetails);
echo json_encode($ressaccdetails);
?>