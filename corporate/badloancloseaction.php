<?php
include_once("function.php");
if(isset($_POST['submit']))
{
    $table=htmlentities($_POST['table']);
    $foliono=22;
    $loan_accno=htmlentities($_POST['accno']);
    $receive_amt=htmlentities($_POST['amount']);
    $agent_id=htmlentities($_POST['agent_id']);
    $payment_mode=htmlentities($_POST['payment_mode']);
    $chkno=htmlentities($_POST['chqddno']);
    $bank=htmlentities($_POST['bank']);
    $chkdt=htmlentities($_POST['paydate']);
    $voucher=htmlentities($_POST['voucher']);
    $status=htmlentities($_POST['status']);
    $time=time();
    $date=date("Y-m-d");
     
    $fetchcust=mysql_query("select * from `$table` where `loan_accno`='$loan_accno'");
    $fetchcustomer=mysql_fetch_array($fetchcust);
    // echo $fetchcustomer['amount_topay'];
    $custid=$fetchcustomer['customer_id'];
    $count=mysql_num_rows($fetchcust);
    if($count>0)
    {
   
        $amount_topay=$fetchcustomer['amount_topay'];
        if($receive_amt>=$amount_topay){$amount=$amount_topay;}else{$amount=$receive_amt;}
        $intrest=$receive_amt-$amount_topay;
        if($intrest > 0)
        {
            $qwe="INSERT INTO `transaction` set `transactionid`='$time',`customerid`='$custid',`accountno`='$loan_accno',
                     `interest`='$intrest',`date`='$date',`details`='$table',`mode_of_payment`='$payment_mode',`chq_dd_no`='$chkno',`chq_dd_bank_name`='$bank',
                     `chq_dd_date`='$chkdt',`agentid`='$agent_id',`folio_no`='$foliono',`productfolio`='24',`voucher`='$voucher'";
           mysql_query($qwe);
	   // echo "</br>".$qwe;
        }
        $qwee="INSERT INTO `transaction` set `transactionid`='$time',`customerid`='$custid',`accountno`='$loan_accno',
                     `amount`='$amount',`date`='$date',`details`='$table',`mode_of_payment`='$payment_mode',`agentid`='$agent_id'
                     ,`folio_no`='$foliono',`voucher`='$voucher'";
       // echo  "</br>".$qwee;        
        mysql_query($qwee)or die(mysql_error());
     if($status==1){
			mysql_query("update  $table set `loancomplited`='1',`amount_topay`='0',`last_refund_date`='$date',`last_refund_amt`='$receive_amt' where `loan_accno`='$loan_accno'")or die(mysql_error());
       }else{
			mysql_query("update  $table set `loancomplited`='0',`amount_topay`=`amount_topay`-$receive_amt,`last_refund_date`='$date',`last_refund_amt`='$receive_amt' where `loan_accno`='$loan_accno'")or die(mysql_error());
       
		}
		
    }
	 if($status==1){
    $msg="Your a/c has been closed...";
	 }else{
		 $msg="Successfully Repayment...";
	 }
    
header("location:badloan.php?msg=$msg");
}    
?>