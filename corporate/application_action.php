<?php
include_once("function.php");
if(isset($_POST['submit']))
{
    $form=htmlentities($_POST['form']);
    $custid=htmlentities($_POST['customer']);
    $fees=htmlentities($_POST['fees']);
    $paymentmode=htmlentities($_POST['payment_mode']);
    $checkno=htmlentities($_POST['d1']);
    $bankname=htmlentities($_POST['d2']);
    $paybledate=htmlentities($_POST['d3']);
    $voucher=htmlentities($_POST['voucher']);
    $date=date("Y-m-d");
    
    $time=time();
    /*echo "insert into `transaction` set `transactionid`='$time',`customerid`='$custid'
                    , `amount`='$fees',`details`='form fees',`mode_of_payment`='$paymentmode'
                    ,`date`='$date',`chq_dd_no`='$checkno',`chq_dd_bank_name`='$bankname',
                    `chq_dd_date`='$paybledate',`transaction`='income',`folio_no`='17',`voucher`='$voucher'";*/
   mysql_query("insert into `transaction` set `transactionid`='$time',`customerid`='$custid'
                    , `amount`='$fees',`details`='form fees',`mode_of_payment`='$paymentmode'
                    ,`date`='$date',`chq_dd_no`='$checkno',`chq_dd_bank_name`='$bankname',
                    `chq_dd_date`='$paybledate',`transaction`='income',`folio_no`='17',`voucher`='$voucher',`productfolio`='$form'") or die(mysql_error());
  $msg="Application fees Successfully paid...";
   if($form > 5 && $form < 13){
    header("location:application_fees.php?folio=$form&msg=$msg");
   }else{
    header("location:application_fees.php?msg=$msg");
   }
   
}
?>