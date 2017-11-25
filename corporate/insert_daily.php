<?php
include_once("function.php");
if(isset($_POST['submit']))
{
    $custid=htmlentities($_POST['custid']);
    $intid=htmlentities($_POST['intid']);
    $name=htmlentities($_POST['name']);
	$id_proof=htmlentities($_POST['id_proof']);
	$photo=htmlentities($_POST['photo']);
	$sign=htmlentities($_POST['sign']);
	$documents=htmlentities($_POST['documents']);
	$acc=htmlentities($_POST['accno']);
    $gname=htmlentities($_POST['gname']);
    $dob=htmlentities($_POST['dob']);
    $gender=htmlentities($_POST['gender']);
    $phno=htmlentities($_POST['phno']);
    $address=htmlentities($_POST['address']);
    $post=htmlentities($_POST['post']);
    $pin=htmlentities($_POST['pin']);
    $dist=htmlentities($_POST['dist']);
    $age=htmlentities($_POST['age']);
    $annual=htmlentities($_POST['annual']);
    $nominee=$_POST['nominee'];
    $nominee_address=$_POST['nomaddress'];
    $nominee_relation=$_POST['nomrelation'];
    $timeperiod=htmlentities($_POST['timeperiod']);
    $plan=htmlentities($_POST['plan']);
    $intrestrate=htmlentities($_POST['intrest']);
    $payment_date=htmlentities($_POST['payment_date']);
    $total_amt=htmlentities($_POST['deposited_amt']);
    $paymentmode=htmlentities($_POST['payment_mode']);
    $checkno=htmlentities($_POST['d1']);
    $bankname=htmlentities($_POST['d2']);
    $paybledate=htmlentities($_POST['d3']);
    $voucher=htmlentities($_POST['voucher']);
	$odate=date("Y-m-d");
	$agentname=$_POST['agent'];
    $agentid=$_POST['agent_id'];
    
     $fetchdailyagent=mysql_query("select * from `agent` where `id`='$agentid'");
    $resdailyagent=mysql_fetch_array($fetchdailyagent);
    $agentcode=$resdailyagent['agentcode_daily'];
    
    $accont=$agentcode."D".$acc;
    
    $fetchdaily=mysql_query("select * from `dailydeposit` where `acc_no`='$accont'");
    $resdaily=mysql_num_rows($fetchdaily);
    if($resdaily==0)
    {
	//$agent=$agentid."(".$agentname.")";
	 $end = date('Y-m-d', strtotime("+$plan years"));
 
   $qwe=mysql_query("INSERT INTO `dailydeposit` set `introducer`='$intid',`customer_id`='$custid',`acc_no`='$accont', `name`='$name', `dob`='$dob',
                     `gender`='$gender', `phone`='$phno', `address`='$address', `post`='$post', `pin`='$pin', `dist`='$dist', `photo`='$photo',
                     `id_proof`='$id_proof',`sign`='$sign',`documents`='$documents', `nominee_name`='$nominee',`nominee_address`='$nominee_address',
                     `nominee_relation`='$nominee_relation', `plan`='$timeperiod',`intrest_rate`='$intrestrate',
                     `total_amt`='$total_amt',`deposited_amt`='$total_amt', `payment_mode`='$paymentmode',`payment_no`='$checkno',
		     `payment_date`='$odate',`bank_name`='$bank$bankname',`payable_date`='$paybledate',`last_deposited_date`='$odate',
		     `agent_id`='$agentid',`agent_name`='$agentname',`start_date`='$odate',`end_date`='$end'");	
    $time=time();
    mysql_query("INSERT INTO `transaction` set `transactionid`='$time',`customerid`='$custid',`accountno`='$accont',
			    `amount`='$total_amt',`previous_amt`='$total_amt',
			    `date`='$odate',`details`='dailydeposite',
			    `mode_of_payment`='$paymentmode',`chq_dd_no`='$checkno',`chq_dd_bank_name`='$bankname',
			    `chq_dd_date`='$paybledate',`agentid`='$agentid',`folio_no`='4',`voucher`='$voucher'")or die(mysql_error()) ;
   
    $ledger="insert into `saving_ledger` set `acc_no`='$accont',`cal_date`='$caldate',`coll_date`='$odate',
    `demand`='0',`deposited_amt`='$total_amt',`total_amt`='$total_amt' ,`folio_no`='4'";
    mysql_query($ledger)or die(mysql_error());
    
    $msg="Successfully Submitted..";
    
    }else{$msg="Account already exist ..";}
}
header("location:deposite_daily.php?msg=$msg");
?>