<?php
include_once("function.php");
$id=$_GET['cid'];
$getvendor=mysql_query("SELECT * FROM loan where `is_approved`='1' and  `loan_accno`!='' and `loancomplited`='0' and `id`='$id'") or die(mysql_error());
$resvendor=mysql_fetch_array($getvendor);
	//echo "</br>".$resvendor['id'];
	$sqlagen=mysql_query("select * from `agent` where `id`='$resvendor[agent_id]'")or die(mysql_error());
	$resagen=mysql_fetch_array($sqlagen);
	
	$lastrefund=$resvendor['last_refund_date'];
	//$lastrefund='2015-06-15';
	$currdate=date("Y-m-d");
	$rate=$resvendor['intrestrate']/12;
	
	$timestamp_start = strtotime($lastrefund);
	$timestamp_end = strtotime($currdate);
	//echo "if"."(".$timestamp_start."<".$timestamp_end.")";
	if($timestamp_start<$timestamp_end){
	$difference = abs($timestamp_end - $timestamp_start);
	$months = floor($difference/(60*60*24*30));
	
	 for($i=0;$i<=$months;$i++)
	 {
	    $p=$resvendor['amount_topay'];
	    //echo "</br>pri=".$p;
	    $lastmonthdate=date('t',strtotime($lastrefund));
	    $ra=$rate/$lastmonthdate;
	    $r=number_format("$ra",2);
	   //echo "</br>rate=".$r;
	    
	    $lastdate=date("Y-m-t", strtotime($lastrefund));
	    $str = strtotime($lastdate) - (strtotime($lastrefund));
	    $t=floor($str/3600/24);
	    //echo "</br>time=".$t;
	    
	    $amt=($p*$t*$r)/100;
	   $intrest_amt=number_format($amt, 2, '.', ',');

	   //$resvendor['id']."=".$amt1=$amt1+$intrest_amt;
	   //echo "</br>".$resvendor['id']."=".$amt1;
	   $amt1=$amt1+$intrest_amt;
	 }
	}else{$amt1=0;}
	//echo "</br>totinter".$amt1;
	if($resagen['name']!=''){
	   $agentval= $resagen['name'].'('.$resagen['codeno'].')';
	}else{
	    $agentval="";
	}
	echo json_encode($getemvendor[] = array(
	'value'  => $resvendor['name'],
	'custid' => $resvendor['customer_id'],
	'loan_against_acc' => $resvendor['loan_against_accno'],
	'loan_amt' => $resvendor['loan_amt'],
	'loangiven' => $resvendor['loangiven'],
	'loan_accno' => $resvendor['loan_accno'],
	'amount_topay' => $resvendor['amount_topay'],
	'intrest_amt' => $amt1,
	'lastrefund' => $lastrefund,
	'agentvalue'  =>$agentval,
	'agentidval' => $resagen['id']
	));
?>