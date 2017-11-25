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
     $detail="Daily Deposit";
     $agentid=htmlentities($_POST['agentid']);
     $total_amt=$deposited_amtt-$paidamt;
     $time=time();
     echo "update  `savingaccount` set `deposited_amt`='$total_amt',`last_update_date`='$sdate',`last_update_amt`='-$paidamt' where `acc_no`='$accountno'"; 
   mysql_query("insert into `transaction` set `transactionid`='$time',`customerid`='$customer_id',`accountno`='$accountno'
                            ,`amount`='-$paidamt',`date`='$sdate',`details`='$detail',`mode_of_payment`='$payment_mode',
                            `chq_dd_no`='$chkno',`chq_dd_bank_name`='$bank',`agentid`='$agentid'
                            ,`chq_dd_date`='$chkdt',`folio_no`='4',`voucher`='$voucher'")or die(mysql_error());
    mysql_query("update  `dailydeposit` set `status`='1' where `acc_no`='$accountno'") or die(mysql_error());
    
    /********* Ledger *************/
    $fetchdaily=mysql_query("select * from `dailydeposit` where `acc_no`='$accountno'");
    $resdaily=mysql_fetch_array($fetchdaily);
     $sdate=date("Y-m-d");
     $getpdata=mysql_fetch_array(mysql_query("SELECT *  FROM `saving_ledger` WHERE `acc_no`='$accountno' order by `cal_date` desc"));
    
     $pdmnd=$getpdata['demand'];
     if(strtotime($getpdata['coll_date'])==strtotime($sdate))
     {
         $odamt = $pdmnd;          
     }
     else{     
     $odamt = $pdmnd + $resdaily['deposited_amt'];  
     }
     if($getpdata['pre-paid']>0)
     {
            $odamt=$odamt-$getpdata['pre-paid'];
                if($odamt<=0){
                   $odamt=0; 
                }
      }
     
     $tbal = $getpdata['total_amt']-$paidamt;
     if($tbal<=0){
        $tbal=0;
     }
    // $caldate=date("Y-m-t",strtotime($sdate));  
     $ledger="insert into `saving_ledger` set `acc_no`='$accountno',`cal_date`='$sdate',`coll_date`='$sdate',
    `demand`='$odamt',`deposited_amt`='-$paidamt' ,`pre-paid`='$pre' ,`total_amt`='$tbal' ,
    `folio_no`='4'";
     mysql_query($ledger)or die(mysql_error());
     
     /********* Ledger *************/
        
    
    
    $msg="Successfully Submitted..";
header("location:daily_withdrawl.php?msg=$msg");
}
?>