<?php
include_once("function.php");
ini_set("display_errors",0);
if(isset($_POST['submit']))
{
    $custid=$_POST['custid'];
    $intid=$_POST['intid'];
    $acc_no=$_POST['acc_no'];
    $name=$_POST['name'];
    $gname=$_POST['gname'];
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
    $paidamt=$_POST['paidamt'];
    $payment_mode=$_POST['payment_mode'];
    $chqddno=$_POST['chqddno'];
    $bank=$_POST['bank'];
    $paydate=$_POST['paydate'];
    $voucher=htmlentities($_POST['voucher']);
    //$mat_amt=$_POST['mat_amt'];
    $odate=date("Y-m-d");
  //echo "INSERT INTO `savingaccount` set `introducer`='$intid', `customer_id`='$custid', `acc_no`='$acc_no', `name`='$name', `guardian_name`='$gname', `dob`='$dob',`gender`='$gender', `phone`='$phone', `address`='$address', `post`='$post', `pin`='$pin', `dist`='$dist', `photo`='$photo',`idproof`='$idproof', `sign`='$sign', `documents`='$docs', `nominee_name`='$nominee', `intrest_rate`='$irate',`deposited_amt`='$paidamt', `payment_mode`='$payment_mode', `payment_no`='$chqddno', `payment_date`='$paydate', `bank_name`='$bank',`opening_date`='$odate'";
   $qwe=mysql_query("INSERT INTO `savingaccount` set `introducer`='$intid', `customer_id`='$custid', `acc_no`='$acc_no', `name`='$name', `guardian_name`='$gname', `dob`='$dob',
                     `gender`='$gender', `phone`='$phone', `address`='$address', `post`='$post', `pin`='$pin', `dist`='$dist', `photo`='$photo',
                     `idproof`='$idproof', `sign`='$sign', `documents`='$docs', `nominee_name`='$nominee',`nominee_address`='$nominee_address',
                     `nominee_relation`='$nominee_relation', `intrest_rate`='$irate',
                     `deposited_amt`='$paidamt', `payment_mode`='$payment_mode', `payment_no`='$chqddno', `payment_date`='$paydate', `bank_name`='$bank',
                     `opening_date`='$odate',`last_update_date`='$odate',`last_update_amt`='$paidamt'")or die(mysql_error()) ;
    $time=time();
    /*mysql_query("insert into `transaction` set `transactionid`='$time',`customerid`='$custid',`accountno`='$acc_no'
                 ,`amount`='$paidamt',`date`='$odate',`details`='Saving Deposit',`mode_of_payment`='$payment_mode',`chq_dd_no`='$chqddno',`chq_dd_bank_name`='$bank',
                `chq_dd_date`='$paydate',`folio_no`='2' ");*/
}
$msg="Successfully Submitted..";
header("location:saving_acc_form.php?msg=$msg");
?>