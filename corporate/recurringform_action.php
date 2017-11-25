<?php include_once("function.php");
if(isset($_POST['submit']))
{
     $time=$_SESSION['time']=time();
     $custid=htmlentities($_POST['cuid']);
     $accont=htmlentities($_POST['acid']);
     $mmount=htmlentities($_POST['mamount']);
      $tamount=htmlentities($_POST['amount']);
      $paidmount=htmlentities($_POST['amount1']);
      $fine=htmlentities($_POST['fine']);
      $paidfine=htmlentities($_POST['fine1']);
      $sdate=date("Y-m-d");
      $detail="rd deposite";
      $agentid=htmlentities($_POST['agenid']);
      $installment1=htmlentities($_POST['installment']);
      //$installment=htmlentities($_POST['paidamount']);
      $installment=$paidmount/$mmount;
      
      
      $voucher=htmlentities($_POST['voucher']);
      $d1=$_POST['d1'];
      $d2=$_POST['d2'];
      $d3=$_POST['d3'];
      $mode=$_POST['payment_mode'];
      
      if($paidmount>0 && $paidmount!="" && $accont!="")
      {
     
          mysql_query("insert into `transaction` set `transactionid`='$time',`customerid`='$custid',`accountno`='$accont'
                                 ,`amount`='$paidmount',`date`='$sdate',`details`='$detail',`agentid`='$agentid',`mode_of_payment`='$mode'
                                 ,`chq_dd_no`='$d1',`chq_dd_bank_name`='$d2',`chq_dd_date`='$d3',`folio_no`='3',`voucher`='$voucher'");
          if($fine1>0)
          {
          mysql_query("insert into `transaction` set `transactionid`='$time',`customerid`='$custid',accountno='$accont'
                                 ,`amount`='$fine',`date`='$sdate',`details`='fine',`agentid`='$agentid',`mode_of_payment`='$mode'
                                 ,`chq_dd_no`='$d1',`chq_dd_bank_name`='$d2',`chq_dd_date`='$d3',`transaction`='income',`folio_no`='3',`voucher`='$voucher'");
          $fine1=$fine-$fine1;
          }
          if($fine1>0)
          {$fine1=$fine1;}else{$fine1=0;}
          
          mysql_query("update  `recurringdiposite` set 
                     `last_diposite_date`='$sdate'
                     ,`deposited_amt`=`deposited_amt`+$paidmount,`fine`=`fine`+$fine1
                     ,`paid_installment`=`paid_installment`+$installment where `acc_no`='$accont'") or die(mysql_error());
         /* echo "update  `recurringdiposite` set 
                     `last_diposite_date`='$sdate'
                     ,`deposited_amt`=`deposited_amt`+$paidmount,`fine`=`fine`+$fine1
                     ,`paid_installment`=`paid_installment`+$installment where `acc_no`='$accont'";*/
         
    /********* Ledger *************/
     $getrecurring=mysql_query("select * from `recurringdiposite` where `acc_no`='$accont'")or die(mysql_error());
     $resrecurring=mysql_fetch_array($getrecurring);
     
    $getpdata=mysql_fetch_array(mysql_query("SELECT *  FROM `saving_ledger` WHERE `acc_no`='$accont' order by `cal_date` desc"));
    
     
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
     
      if($paidmount>$odamt){
            $pre=$paidmount-$odamt;
        }else{
         $pre=0;
        }
     $tbal = $getpdata['total_amt']+$paidmount;
     $caldate=date("Y-m-t",strtotime($sdate));  
     $ledger="insert into `saving_ledger` set `acc_no`='$accont',`cal_date`='$caldate',`coll_date`='$sdate',
    `demand`='$odamt',`deposited_amt`='$paidmount' ,`pre-paid`='$pre' ,`total_amt`='$tbal' ,
    `folio_no`='3'";
    // mysql_query($ledger)or die(mysql_error());
     
     /********* Ledger *************/
         
         
     $msg="sucessfully paid";
      }else{ $msg="Account has no installment ";}
    
             header("location:recurringform.php?msg=$msg");
}
?>