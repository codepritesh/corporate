<?php include_once("function.php");
if(isset($_POST['r_submit']))
{
      $principal=htmlentities($_POST['principal']);
	$accountno=htmlentities($_POST['account']);
      $customer_id=htmlentities($_POST['customer_id']);
      $withdrawal=htmlentities($_POST['with_amt']);
	$intrest=$withdrawal-$principal;
	if($intrest<0){$intrest=0;}else{$intrest=$intrest;}
      $sdate=date("Y-m-d");
      $time=time();
      $voucher=htmlentities($_POST['voucher']);
	  $withdrawal_mode=htmlentities($_POST['paymentmode']);
	  $chqddno=htmlentities($_POST['d1']);
      $bank=htmlentities($_POST['d2']);
	  $paydate=htmlentities($_POST['d3']);
      
     mysql_query("insert into `transaction` set `transactionid`='$time',`customerid`='$customer_id',`accountno`='$accountno'
                            ,`amount`='-$principal',`date`='$sdate',`details`='A/c Close Principal',`mode_of_payment`='$withdrawal_mode'
			    ,`chq_dd_no`='$chqddno',`chq_dd_bank_name`='$bank',`chq_dd_date`='$paydate',`folio_no`='3',`voucher`='$voucher'") or die(mysql_error());
     
     mysql_query("insert into `transaction` set `transactionid`='$time',`customerid`='$customer_id',`accountno`='$accountno'
                            ,`amount`='-$intrest',`date`='$sdate',`details`='A/c Close Interest',`mode_of_payment`='$withdrawal_mode'
			    ,`chq_dd_no`='$chqddno',`chq_dd_bank_name`='$bank',`chq_dd_date`='$paydate',`folio_no`='3',`voucher`='$voucher'") or die(mysql_error());
    
    mysql_query("update `recurringdiposite` set  `status`='1' where `acc_no`='$accountno'")or die(mysql_error());
    
    
          
    /********* Ledger *************/
     $getrecurring=mysql_query("select * from `recurringdiposite` where `acc_no`='$accont'")or die(mysql_error());
     $resrecurring=mysql_fetch_array($getrecurring);
     
     $getpdata=mysql_fetch_array(mysql_query("SELECT * , MAX(`id`) as id FROM `saving_ledger` WHERE `acc_no`='$accont'"));
     
     $pdmnd=$getpdata['demand'];
     if(strtotime(date("Y-m",strtotime($getpdata['coll_date'])))==strtotime(date("Y-m",strtotime($sdate))))
     {
         $odamt = $pdmnd;          
     }
     else{     
     $odamt = $pdmnd + $resrecurring['monthly_amount'];  
     }
     if($getpdata['pre-paid']>0)
     {
            $odamt=$odamt-$getpdata['pre-paid'];
                if($odamt<=0){
                   $odamt=0; 
                }
      }
      
     $tbal = $getpdata['total_amt']-$withdrawal;
     if($tbal<=0){
        $tbal=0;
     }
     $caldate=date("Y-m-t",strtotime($sdate));  
     $ledger="insert into `saving_ledger` set `acc_no`='$accountno',`cal_date`='$caldate',`coll_date`='$sdate',
    `demand`='$odamt',`deposited_amt`='-$withdrawal' ,`pre-paid`='$pre' ,`total_amt`='$tbal' ,
    `folio_no`='3'";
     mysql_query($ledger)or die(mysql_error());
     
     /********* Ledger *************/
    
    
     $msg="Successfully closed..";
     header("location:recurring_withdraw.php?msg=$msg");
}
?>
