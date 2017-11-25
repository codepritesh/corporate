<?php include_once("function.php");
if(isset($_POST['submit']))
{
      $accountno=htmlentities($_POST['account']);
      $customer_id=htmlentities($_POST['customer_id']);
      $deposited_amtt=htmlentities($_POST['deposited_amt']);
      $withdrawal=htmlentities($_POST['withdrawal']);
	  //$date=htmlentities($_POST['date']);
      $sdate=date("Y-m-d");
      $detail="Daily Withdrawal";
      //$agentid=htmlentities($_POST['agentid']);
      $total_amt=$deposited_amtt-$withdrawal;
      $time=time();
	  $withdrawal_mode=htmlentities($_POST['withdrawal_mode']);
	  $chqddno=htmlentities($_POST['chqddno']);
	  $bank=htmlentities($_POST['bank']);
	  $paydate=htmlentities($_POST['paydate']);
      
     mysql_query("insert into `transaction` set `transactionid`='$time',`customerid`='$customer_id',`accountno`='$accountno'
                            ,`amount`='$withdrawal',`date`='$sdate',`details`='$detail',`mode_of_payment`='$withdrawal_mode',`chq_dd_no`='$chqddno',`chq_dd_bank_name`='$bank',`chq_dd_date`='$paydate'");
      mysql_query("update  `dailydeposit` set `deposited_amt`='$total_amt',`withdrawal_amt`='$withdrawal',`withdrawal_date`='$sdate',
                 `wd_mode`='$withdrawal_mode',`wd_no`='$chqddno',`wd_bank`='$bank',`wd_date`='$paydate' where `acc_no`='$accountno'");
     $msg="Successfully Submitted..";
     header("location:dailywithform.php?msg=$msg");
}
?>
