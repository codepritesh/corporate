<?php include_once("function.php");
if(isset($_POST['submit']))
 { 
 $acc_no=htmlentities($_POST['account']);  
 $getrecurring=mysql_query("select * from `dailydeposit` where `acc_no`='$acc_no'")or die(mysql_error());
  $resrecurring=mysql_fetch_array($getrecurring) or die(mysql_error());
    
    $date3 = $resrecurring['last_deposited_date'];
    $date4 = date("Y-m-d");
	
	//echo $date3.'---'.$date4;
	if($date3!=$date4)
	{
      $accountno=htmlentities($_POST['account']);
      $customer_id=htmlentities($_POST['customer_id']);
      $total_amtt=htmlentities($_POST['total_amt']);
      $paidamt=htmlentities($_POST['paidamt']);
	  //$date=htmlentities($_POST['date']);
      $sdate=date("Y-m-d");
      $detail="Daily deposite";
      $agentid=htmlentities($_POST['agentid']);
      $voucher=htmlentities($_POST['voucher']);
      $total_amt=$paidamt+$total_amtt;
      $time=time();
	  $payment_mode=htmlentities($_POST['payment_mode']);
	  $chqddno=htmlentities($_POST['chqddno']);
	  $bank=htmlentities($_POST['bank']);
	  $paydate=htmlentities($_POST['paydate']);
      
      mysql_query("insert into `transaction` set `transactionid`='$time',`customerid`='$customer_id',`accountno`='$accountno'
                            ,`amount`='$paidamt',`date`='$sdate',`details`='$detail',`agentid`='$agentid',`mode_of_payment`='$payment_mode',
			    `chq_dd_no`='$chqddno',`chq_dd_bank_name`='$bank',`chq_dd_date`='$paydate',`folio_no`='4',`voucher`='$voucher'");
      mysql_query("update  `dailydeposit` set `total_amt`='$total_amt',`last_deposited_date`='$sdate',
                 `last_deposited_amt`='$paidamt',`payment_mode`='$payment_mode',`payment_no`='$chqddno',`bank_name`='$bank',`payable_date`='$paydate' where `acc_no`='$accountno'");
     $msg="Successfully Submitted..";
     header("location:dailydepo_form.php?msg=$msg");
	 }
	 else{
	 $msg="Already Submitted for today..";
     header("location:dailydepo_form.php?msg=$msg");
	      }
}
?>