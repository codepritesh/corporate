<?php
include_once("function.php");
if(isset($_POST['submit']))
{
    $custid=htmlentities($_POST['custid']);
    $intid=htmlentities($_POST['intid']);
    $name=htmlentities($_POST['name']);
    $dob=htmlentities($_POST['dob']);
    $gender=htmlentities($_POST['gender']);
    $phone=htmlentities($_POST['phone']);
    $village=htmlentities($_POST['village']);
    $address=htmlentities($_POST['address']);
    $post=htmlentities($_POST['post']);
    $pin=htmlentities($_POST['pin']);
    $dist=htmlentities($_POST['dist']);
    $photo=htmlentities($_POST['photo']);
    $idproof=htmlentities($_POST['idproof']);
    $sign=htmlentities($_POST['sign']);
    $docs=htmlentities($_POST['docs']);
    $nominee=htmlentities($_POST['nominee']);
    $nominee_address=htmlentities($_POST['nomaddress']);
    $nominee_relation=htmlentities($_POST['nomrelation']);
    $loan_against_acc=htmlentities($_POST['loan_against_acc']);
    $loan_against_accno=htmlentities($_POST['loan_against_accno']);
    $loan_amt=htmlentities($_POST['loanamt']);
    $plan=htmlentities($_POST['plan']);
    $intrate=htmlentities($_POST['intrate']);
    
    $chk=mysql_query("SELECT * FROM `demand_loan` where `customer_id`='$custid' and `loan_against_acc`='$loan_against_acc' and `status`='1' ")or die(mysql_error());
    $row=mysql_num_rows($chk);
   /*echo "INSERT INTO `demand_loan` set  `introducer`='$intid', `customer_id`='$custid', `name`='$name',
                     `dob`='$dob', `gender`='$gender', `phone`='$phone', `address`='$address', `post`='$post',
                     `pin`='$pin', `dist`='$dist', `photo`='$photo', `idproof`='$idproof', `sign`='$sign', `documents`='$docs',
                     `nominee_name`='$nominee', `nominee_address`='$nominee_address', `nominee_relation`='$nominee_relation',
                     `loan_against_acc`='$loan_against_acc',`loan_against_accno`='$loan_against_accno',  `loan_amt`='$loan_amt'";*/
    $qwe=mysql_query("INSERT INTO `demand_loan` set  `introducer`='$intid', `customer_id`='$custid',`plan`='$plan',`intrestrate`='$intrate', `name`='$name',
                     `dob`='$dob', `gender`='$gender', `phone`='$phone',`village`='$village',  `address`='$address', `post`='$post',
                     `pin`='$pin', `dist`='$dist', `photo`='$photo', `idproof`='$idproof', `sign`='$sign', `documents`='$docs',
                     `nominee_name`='$nominee', `nominee_address`='$nominee_address', `nominee_relation`='$nominee_relation',`folio`=10,
                     `loan_against_acc`='$loan_against_acc', `loan_against_accno`='$loan_against_accno', `loan_amt`='$loan_amt'")or die(mysql_error()) ;
}
$msg="Successfully Applied for Loan...";
header("location:demand_loan.php?msg=$msg");
?>