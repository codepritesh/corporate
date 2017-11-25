<?php
include_once("function.php");
ini_set("display_errors",1);
if(isset($_POST['s_submit']))
{
     $accountno=htmlentities($_POST['account']);
     $customer_id=htmlentities($_POST['customer_id']);
     $deposited_amtt=htmlentities($_POST['deposited_amt']);
     $paidamt=htmlentities($_POST['with_amt']);
     $payment_mode=htmlentities($_POST['payment_mode']);
     $voucher=htmlentities($_POST['voucher']);
     $chkno=htmlentities($_POST['chqddno']);
     $bank=htmlentities($_POST['bank']);
     $chkdt=htmlentities($_POST['paydate']);
     $sdate=date("Y-m-d");
     $detail="Saving Deposit";
     $agentid=htmlentities($_POST['agentid']);
     $total_amt=$deposited_amtt-$paidamt;
     $time=time();
    // echo "update  `savingaccount` set `deposited_amt`='$total_amt',`last_update_date`='$sdate',`last_update_amt`='-$paidamt' where `acc_no`='$accountno'"; 
   mysql_query("insert into `transaction` set `transactionid`='$time',`customerid`='$customer_id',`accountno`='$accountno'
                            ,`amount`='-$paidamt',`date`='$sdate',`details`='$detail',`mode_of_payment`='$payment_mode',
                            `chq_dd_no`='$chkno',`chq_dd_bank_name`='$bank',`chq_dd_date`='$chkdt',`folio_no`='2',`voucher`='$voucher'");
    mysql_query("update  `savingaccount` set `deposited_amt`='$total_amt',`last_update_date`='$sdate',`last_update_amt`='-$paidamt'
                where `acc_no`='$accountno'");
    
    $caldate=date("Y-m-t",strtotime($sdate));    
    $ledger="insert into `saving_ledger` set `acc_no`='$accountno',`cal_date`='$caldate',
    `coll_date`='$sdate',`deposited_amt`='-$paidamt' ,`total_amt`='$total_amt' ,`folio_no`='2'";
    mysql_query($ledger)or die(mysql_error());  
    
    $msg="Successfully Submitted..";
    header("location:savingwithform.php?msg=$msg");
}
?>