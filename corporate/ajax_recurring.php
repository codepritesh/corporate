<?php
include_once("function.php");
$fine=0;
$rest=0;
$am=0;
$diff1=0;
$account=$_GET['cid'];
$getrecurring=mysql_query("select * from `recurringdiposite` where `acc_no`='$account'")or die(mysql_error());
$resrecurring=mysql_fetch_array($getrecurring);
	$nplan=$resrecurring['plan'];
$date3 = $resrecurring['end_date'];
$date4 = date("Y-m-d");

$ts3 = strtotime($date3);
$ts4 = strtotime($date4);

$year3 = date('Y', $ts3);
$year4 = date('Y', $ts4);

$month3 = date('m', $ts3);
$month4 = date('m', $ts4);

$date1 = $resrecurring['start_date'];
$date2 = date("Y-m-d");

$ts1 = strtotime($date1);
$ts2 = strtotime($date2);

$year1 = date('Y', $ts1);
$year2 = date('Y', $ts2);

$month1 = date('m', $ts1);
$month2 = date('m', $ts2);
//calculation 
if($ts2<=$ts3){
   $diff = (($year2 - $year1) * 12) + ($month2 - $month1);
}else{$diff=$nplan;}
if($ts2>$ts3){
$diff1 = (($year4 - $year3) * 12) + ($month4 - $month3);
}else{$diff1=0;}

 $paid=$resrecurring['paid_installment'];
$monthlyamount=$resrecurring['monthly_amount'];
if($diff>0){
 $rest=$diff-($paid-1);}
//if($rest>0 || $diff1<7){
   if($diff1<7){
   //echo "rest".$rest."diff".$diff1;
   if($rest==1){$fine=0;}
    elseif($rest>=2){$am=($monthlyamount)/100; $fine=$am*4*$rest;}
    elseif($diff1>6)
    {
      mysql_query("update `recurringdiposite` set `intrest_rate`='6' where `acc_no`='$account' ");
      $fine=0;
    }
$total=$rest*$monthlyamount;

}else{$total=0; $fine=0; $rest=0;}
	$totalamount=$total+$fine;
	
	echo json_encode($getdetail[] = array(
	'value'  => $resrecurring['acc_no']."(".$resrecurring['name'].")",
	'idval' => $resrecurring['acc_no'],
	'cuid' => $resrecurring['customer_id'],
	'mamount' => $resrecurring['monthly_amount'],
	'agenid' => $resrecurring['agent_id'],
	'agent' => $resrecurring['agent_name'],
	'amount' => $total,
	'tamount' => $totalamount,
	'installment' => $rest,
	'continious' => $diff1,
	'fine' => $fine
	));
?>