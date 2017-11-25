<?php
include_once("function.php");
if(isset($_POST['submit']))
{
    $voucher=$_POST['voucher'];
    $custid=$_POST['custid'];
    $intid=$_POST['intid'];
    $acc_no=$_POST['acc_no'];
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $post=$_POST['post'];
    $pin=$_POST['pin'];
    $dist=$_POST['dist'];
    $photo=$_POST['photo'];
    $idproof=$_POST['idproof'];
    $sign=$_POST['sign'];
    $docs=$_POST['docs'];
    $nominee=$_POST['nominee'];
    $nominee_address=$_POST['nomaddress'];
    $nominee_relation=$_POST['nomrelation'];
    $irate=$_POST['irate'];
    $plan=$_POST['plan'];
    $year=$_POST['year'];
    $paidamt=$_POST['paidamt'];
    $payment_mode=$_POST['payment_mode'];
    $chqddno=$_POST['chqddno'];
    $bank=$_POST['bank'];
    $paydate=$_POST['paydate'];
    $mat_amt=$_POST['mat_amt'];
    $odate=date("Y-m-d");
    $add='+'.$year.' years';
    $cdate=date('Y-m-d', strtotime($add));
    $agentid=$_POST['agent_id'];
   // echo "INSERT INTO `fixeddeposite` set `customer_id`='$custid',`introducer`='$intid',`acc_no`='$acc_no', `name`='$name',`dob`='$dob',`gender`='$gender', `phone`='$phone', `address`='$address', `post`='$post', `pin`='$pin', `dist`='$dist',`photo`='$photo',`id_proof`='$idproof', `sign`='$sign',`documents`='$docs', `nominee_name`='$nominee',`nominee_address`='$nominee_address',`nominee_relation`='$nominee_relation', `plan`='$plan',`year`='$year', `intrest_rate`='$irate',`deposited_amt`='$paidamt', `payment_mode`='$payment_mode',`payment_no`='$chqddno', `payment_date`='$paydate', `bank_name`='$bank',`maturity_amt`='$mat_amt',`till_maturity_amt`='$paidamt',`opening_date`='$odate', `closing_date`='$cdate',`payable_amt`='$mat_amt',`last_update_date`='$odate',`last_update_amt`='$paidamt',`agent_id`='$agentid'";
    $qwe=mysql_query("INSERT INTO `fixeddeposite` set `customer_id`='$custid',`introducer`='$intid',`acc_no`='$acc_no', `name`='$name',
                     `dob`='$dob',`gender`='$gender', `phone`='$phone', `address`='$address', `post`='$post', `pin`='$pin', `dist`='$dist',
                     `photo`='$photo',`id_proof`='$idproof', `sign`='$sign',`documents`='$docs', `nominee_name`='$nominee',`nominee_address`='$nominee_address',
                     `nominee_relation`='$nominee_relation', `plan`='$plan',
                     `year`='$year', `intrest_rate`='$irate',`deposited_amt`='$paidamt', `payment_mode`='$payment_mode',
                     `payment_no`='$chqddno', `payment_date`='$paydate', `bank_name`='$bank',`maturity_amt`='$mat_amt',`till_maturity_amt`='$paidamt',
                     `opening_date`='$odate', `closing_date`='$cdate',`payable_amt`='$paidamt',`last_update_date`='$odate',
                     `last_update_amt`='$paidamt',`agent_id`='$agentid'")or die(mysql_error()) ;
    $time=time();
   // echo "insert into `transaction` set `transactionid`='$time',`customerid`='$custid',`accountno`='$acc_no',`mode_of_payment`='$payment_mode',`chq_dd_no`='$chqddno',`chq_dd_bank_name`='$bank',`agentid`='$agentid',`chq_dd_date`='$paydate' ,`amount`='$paidamt',`date`='$odate',`details`='Fixed Deposit'";
    mysql_query("insert into `transaction` set `transactionid`='$time',`customerid`='$custid',`accountno`='$acc_no',
                `mode_of_payment`='$payment_mode',`chq_dd_no`='$chqddno',`chq_dd_bank_name`='$bank',`agentid`='$agentid',
                `chq_dd_date`='$paydate' ,`amount`='$paidamt',`date`='$odate',`details`='Fixed Deposit',`folio_no`='5',`voucher`='$voucher'")or die(mysql_error());
    
    
    $caldate=date("Y-m-t",strtotime($odate));     
    $ledger="insert into `saving_ledger` set `acc_no`='$acc_no',`cal_date`='$caldate',`coll_date`='$odate',`demand`='0',`deposited_amt`='$paidamt',`total_amt`='$paidamt' ,`folio_no`='5'";
    mysql_query($ledger)or die(mysql_error());

}
$msg="Successfully Submitted..";
header("location:fixeddepositeform.php?msg=$msg");
?>