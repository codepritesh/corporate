<?php
include_once("function.php");
if(isset($_POST['submit']))
{

	$custid=htmlentities($_POST['custid']);
	$loan_accno=htmlentities($_POST['loan_accno']);
	$loan_amt=htmlentities($_POST['loan_amt']);
	$loangiven=htmlentities($_POST['loangiven']);
	$amount_topay=htmlentities($_POST['amount_topay']);
	$agent_id=htmlentities($_POST['agent_id']);
	$lastrefund=htmlentities($_POST['lastrefund']);
	$lastfund=date("Y-m-01", strtotime("+1 month", strtotime($lastrefund)));
	$refund1=htmlentities($_POST['refund']);
	$intamt=htmlentities($_POST['intamt']);
	 if($refund1!='' && $refund1!=0)
	    {
	    $refund=$refund1-$intamt;
	    }
	
	$payment_mode=htmlentities($_POST['payment_mode']);
	$chkno=htmlentities($_POST['chqddno']);
	$bank=htmlentities($_POST['bank']);
	$chkdt=htmlentities($_POST['paydate']);
	$voucher=htmlentities($_POST['voucher']);
	$refund_date=date("Y-m-d");
	$update_amttopay=$amount_topay - $refund;
	if($update_amttopay==0){
	   $complete='1'; 
	}else{
	    $complete='0'; 
	}
 
 
   if($intamt!='0.00'){
	$time=time();
	
	mysql_query("INSERT INTO `transaction` set `transactionid`='$time',`customerid`='$custid',`accountno`='$loan_accno'
                            ,`amount`='-$intamt',`date`='$refund_date',`details`='Intrest'");
	
	mysql_query("INSERT INTO `transaction` set `transactionid`='$time',`customerid`='$custid',`accountno`='$loan_accno'
                            ,`amount`='$intamt',`date`='$refund_date',`details`='Paid Intrest Amount',
			    `mode_of_payment`='$payment_mode',`chq_dd_no`='$chkno',`chq_dd_bank_name`='$bank',
			    `chq_dd_date`='$chkdt',`agentid`='$agent_id',`transaction`='income',`voucher`='$voucher',`folio_no`='12'");
   }
    $time1=time();
   if($refund!='' && $refund!=0)
   {
    $qwe=mysql_query("update  `loan` set `amount_topay`='$update_amttopay',`last_refund_amt`='$refund',`last_refund_date`='$lastfund',
		  `loancomplited`='$complete',`agent_id`='$agent_id' where `loan_accno`='$loan_accno'")or die(mysql_error()) ;
    
    mysql_query("INSERT INTO `transaction` set `transactionid`='$time1',`customerid`='$custid',`accountno`='$loan_accno',
                 `amount`='$refund',`date`='$refund_date',`details`='Refund Loan Amount',
		 `mode_of_payment`='$payment_mode',`chq_dd_no`='$chkno',`chq_dd_bank_name`='$bank',
		 `chq_dd_date`='$chkdt',`agentid`='$agent_id',`folio_no`='12',`voucher`='$voucher'");
     //echo "INSERT INTO `transaction` set `transactionid`='$time',`customerid`='$custid',`accountno`='$loan_accno',`amount`='$refund',`date`='$refund_date',`details`='Refund Loan Amount', `mode_of_payment`='$payment_mode', `chq_dd_no`='$chkno',`chq_dd_bank_name`='$bank',`chq_dd_date`='$chkdt',`agentid`='$agent_id'";
   }

 /*echo "update  `loan` set `amount_topay`='$update_amttopay',`last_refund_amt`='$refund',`last_refund_date`='$refund_date' where `loan_accno`='$loan_accno'".'</br>';
echo "INSERT INTO `transaction` set `transactionid`='$time',`customerid`='$custid',`accountno`='$loan_accno'
                            ,`amount`='$intamt',`date`='$refund_date',`details`='Intrest Amount', `mode_of_payment`='$payment_mode',`chq_dd_no`='$chkno',`chq_dd_bank_name`='$bank',`chq_dd_date`='$chkdt'".'</br>';
echo "INSERT INTO `transaction` set `transactionid`='$time1',`customerid`='$custid',`accountno`='$loan_accno'
                            ,`amount`='$refund',`date`='$refund_date',`details`='Refund Loan Amount', `mode_of_payment`='$payment_mode',`chq_dd_no`='$chkno',`chq_dd_bank_name`='$bank',`chq_dd_date`='$chkdt'".'</br>';*/
}
$msg="Successfully Submitted..";
header("location:loan_refund.php?msg=$msg");
?>