<?php include_once("function.php");
if(isset($_POST['submit']))
{
     $time=$_SESSION['time']=time();
     $custid=htmlentities($_POST['cuid']);
     $accont=htmlentities($_POST['acid']);
      $tamount=htmlentities($_POST['amount']);
      $sdate=date("Y-m-d");
      $detail="rd deposite";
      $agentid=htmlentities($_POST['agenid']);
      $voucher=htmlentities($_POST['voucher']);
      $d1=$_POST['d1'];
      $d2=$_POST['d2'];
      $d3=$_POST['d3'];
      $mode=$_POST['payment_mode'];
      $lastamount=$_POST['lastamount'];
      $tot=$lastamount+$tamount;
      if($tamount>0)
      {
     
          mysql_query("insert into `transaction` set `transactionid`='$time',`customerid`='$custid',`accountno`='$accont'
                                 ,`amount`='$tamount',`date`='$sdate',`details`='$detail'
                                 ,`agentid`='$agentid',`mode_of_payment`='$mode',`previous_amt`='$lastamount',`total_amt`='$tot'
                                 ,`chq_dd_no`='$d1',`chq_dd_bank_name`='$d2',`chq_dd_date`='$d3',`folio_no`='3',`voucher`='$voucher'");
          
          mysql_query("update  `recurringdiposite` set 
                     `last_diposite_date`='$sdate'
                     ,`deposited_amt`=`deposited_amt`+$tamount
                     where `acc_no`='$accont'") or die(mysql_error());
          /*echo "update  `recurringdiposite` set 
                     `last_diposite_date`='$sdate'
                     ,'deposited_amt'='deposited_amt'+$tamount
                     where `acc_no`='$accont'";
                     $msg="sucessfully paid";*/
      }else{ $msg="Account has no installment ";}
    
             header("location:recurringform.php?msg=$msg");
}
?>