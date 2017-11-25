<?php include_once("function.php");
if(isset($_POST['submit']))
{
    $acc_no=htmlentities($_POST['account']);
    $getrecurring=mysql_query("select * from `compulsarydeposite` where `acc_no`='$acc_no'")or die(mysql_error());
    $resrecurring=mysql_fetch_array($getrecurring) or die(mysql_error());
    $date3 = $resrecurring['last_deposited_date'];
    $date4 = date("Y-m-d");
	$ts3 = strtotime($date3);
    $ts4 = strtotime($date4);

    $year3 = date('Y', $ts3);
    $year4 = date('Y', $ts4);

    $month3 = date('m', $ts3);
    $month4 = date('m', $ts4);
	
	
	//if($month4-$month3!=0 || $year4-$year3!=0)
	//if($month4-$month3!=0 || $year4-$year3!=0)
	//{

      $accountno=htmlentities($_POST['account']);
      $customer_id=htmlentities($_POST['customer_id']);
      $total_amtt=htmlentities($_POST['total_amt']);
      $paidamt=htmlentities($_POST['paidamt']);
     //$date=htmlentities($_POST['date']);
      $sdate=date("Y-m-d");
      $voucher=htmlentities($_POST['voucher']);
      $detail="compulsory deposite";
      $agentid=htmlentities($_POST['agentid']);
      $total_amt=$paidamt+$total_amtt;
      $time=time();
      
	  $payment_mode=htmlentities($_POST['payment_mode']);
	  $chqddno=htmlentities($_POST['chqddno']);
	  $bank=htmlentities($_POST['bank']);
	  $paydate=htmlentities($_POST['paydate']);
      
      mysql_query("insert into `transaction` set `transactionid`='$time',`customerid`='$customer_id',`accountno`='$accountno'
                            ,`amount`='$paidamt',`date`='$sdate',`details`='$detail',`agentid`='$agentid',`mode_of_payment`='$payment_mode',
			    `chq_dd_no`='$chqddno',`chq_dd_bank_name`='$bank',`chq_dd_date`='$paydate',`folio_no`='1',`voucher`='$voucher'") or die(mysql_error());
      mysql_query("update  `compulsarydeposite` set `total_amt`='$total_amt',`last_deposited_date`='$sdate',
                 `last_deposited_amt`='$paidamt',`payment_mode`='$payment_mode',`payment_no`='$chqddno',`bank_name`='$bank',
		 `payable_date`='$paydate' where `acc_no`='$accountno'");
    
     /********* Ledger *************/
     
    $getpdata=mysql_fetch_array(mysql_query("SELECT *  FROM `saving_ledger` WHERE `acc_no`='$accountno' order by `cal_date` desc"));
     
     $pdmnd=$getpdata['demand'];
     if(strtotime(date("Y-m",strtotime($getpdata['coll_date'])))==strtotime(date("Y-m",strtotime($sdate))))
     {
         $odamt = $pdmnd;          
     }
     else{
     $odamt = $pdmnd + $resrecurring['deposited_amt'];  
     }
     if($getpdata['pre-paid']>0)
     {
            $odamt=$odamt-$getpdata['pre-paid'];
                if($odamt<=0){
                   $odamt=0; 
                }
     }
      if($paidamt>$odamt){
            $pre=$paidamt-$odamt;
        }else{
         $pre=0;
        }
     $tbal = $getpdata['total_amt']+$paidamt;
     $caldate=date("Y-m-t",strtotime($sdate));  
     $ledger="insert into `saving_ledger` set `acc_no`='$accountno',`cal_date`='$caldate',`coll_date`='$sdate',
    `demand`='$odamt',`deposited_amt`='$paidamt' ,`pre-paid`='$pre' ,`total_amt`='$tbal' ,
    `folio_no`='1'";
     mysql_query($ledger)or die(mysql_error());
     
     /********* Ledger *************/
     
     $msg="Successfully Submitted..";
   header("location:compulsaryform.php?msg=$msg");
	// }
	 //else
	 //{
	// $msg="Already Submitted for this month..";
    //header("location:compulsaryform.php?msg=$msg");
	// }
}
?>