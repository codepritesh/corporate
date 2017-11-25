<?php
include_once("function.php");
//ini_set("display_errors",1);
if(isset($_POST['f_submit']))
{

    $acc_no=htmlentities($_POST['account']);
    $pay_amt=htmlentities($_POST['maturity_amt']);
    $principal=htmlentities($_POST['principal']);
    $interest=htmlentities($_POST['interest']);
    $pay_amtt=-$pay_amt;
    $custid=htmlentities($_POST['customer_id']);
    $time=time();
    $voucher=htmlentities($_POST['voucher']);
    $odate=date("Y-m-d");
    $payment_mode=htmlentities($_POST['payment_mode']);
     $chkno=htmlentities($_POST['chqddno']);
     $bank=htmlentities($_POST['bank']);
     $chkdt=htmlentities($_POST['paydate']);
    
   /* echo "insert into `transaction` set `transactionid`='$time',`customerid`='$custid',`accountno`='$acc_no'
                 ,`amount`='$pay_amtt',`date`='$odate',`details`='Fixed Deposit',`mode_of_payment`='$payment_mode',
                 chq_dd_no`='$chkno',`chq_dd_bank_name`='$bank',`chq_dd_date`='$chkdt'";*/
    mysql_query("insert into `transaction` set `transactionid`='$time',`customerid`='$custid',`accountno`='$acc_no'
                 ,`amount`='-$principal',`date`='$odate',`details`='A/c Close Principal',`mode_of_payment`='$payment_mode',
                 `chq_dd_no`='$chkno',`chq_dd_bank_name`='$bank',`chq_dd_date`='$chkdt',`folio_no`='5',`voucher`='$voucher'")or die(mysql_error());
   
   
   mysql_query("insert into `transaction` set `transactionid`='$time',`customerid`='$custid',`accountno`='$acc_no'
                 ,`amount`='-$interest',`date`='$odate',`details`='A/c Close Interest',`mode_of_payment`='$payment_mode',
                 `chq_dd_no`='$chkno',`chq_dd_bank_name`='$bank',`chq_dd_date`='$chkdt',`folio_no`='5',`voucher`='$voucher'")or die(mysql_error());

   /*echo "update  `fixeddeposite` set `status`='1',`last_update_date`='$odate',
                 `last_update_amt`='$pay_amtt' where `acc_no`='$acc_no'";*/
    mysql_query("update  `fixeddeposite` set `status`='1',`last_update_date`='$odate',
                 `last_update_amt`='$pay_amtt' where `acc_no`='$acc_no'") or die(mysql_error());
        
    /********* Ledger *************/
   
     $sdate=date("Y-m-d");    
     $paidamt = $principal+$interest;
     
     $ledger="insert into `saving_ledger` set `acc_no`='$acc_no',`cal_date`='$sdate',`coll_date`='$sdate',
    `demand`='0',`deposited_amt`='-$paidamt' ,`pre-paid`='0' ,`total_amt`='$tbal' ,
    `folio_no`='5'";
     mysql_query($ledger)or die(mysql_error());
     
     /********* Ledger *************/
     
    $msg="Successfully Submitted...";
    header("location:fixedwithform.php?msg=$msg");
}
?>
