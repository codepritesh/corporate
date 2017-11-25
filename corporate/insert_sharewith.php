<?php
include_once("function.php");
ini_set("display_errors",1);
if(isset($_POST['submit']))
{
     $memid=htmlentities($_POST['memid']);
     $totalshare=htmlentities($_POST['totalshare']);
     $with_share=htmlentities($_POST['with_share']);
     $customer_id=htmlentities($_POST['customer_id']);
     
     $voucher=htmlentities($_POST['voucher']);
     
     $perticulars=htmlentities($_POST['perticulars']);
     $devidend=htmlentities($_POST['devidend']);
     
     $amount=$with_share*100;
     $restshare=$totalshare-$with_share;
     
     $payment_mode=htmlentities($_POST['payment_mode']);
     $chkno=htmlentities($_POST['chqddno']);
     $bank=htmlentities($_POST['bank']);
     $chkdt=htmlentities($_POST['paydate']);
     $sdate=date("Y-m-d");
     $detail="Share Withdrawl";
     $time=time();
     if($amount!=0){
        if($restshare!=0){
            $status=0;
        }
        else{
            $status=1;
        }
                     // echo "update  `savingaccount` set `deposited_amt`='$total_amt',`last_update_date`='$sdate',`last_update_amt`='-$paidamt' where `acc_no`='$accountno'"; 
                     mysql_query("insert into `transaction` set `transactionid`='$time',`customerid`='$customer_id',`amount`='-$amount',`date`='$sdate',
                                 `details`='$detail',`mode_of_payment`='$payment_mode', `chq_dd_no`='$chkno',`chq_dd_bank_name`='$bank',
                                 `chq_dd_date`='$chkdt',`voucher`='$voucher',`folio_no`=30");
                     
                     if($devidend>0){
                         mysql_query("insert into `transaction` set `transactionid`='$time',`customerid`='$customer_id',`interest`='$devidend',`date`='$sdate',
                                 `details`='$detail',`mode_of_payment`='$payment_mode', `chq_dd_no`='$chkno',`chq_dd_bank_name`='$bank',
                                 `chq_dd_date`='$chkdt',`voucher`='$voucher',`folio_no`=30");
                     }
                     mysql_query("update  `member` set `noofshares`='$restshare',`status`='$status' where `id`='$memid'");
                     $msg="Successfully Withdrawl...";
     }
     else{
        $msg="Nothing Withdrawl...";
     }
    
header("location:sharewithfrom.php?msg=$msg");
}
?>