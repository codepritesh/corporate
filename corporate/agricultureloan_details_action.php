<?php
include("function.php");
if(isset($_POST['allow']))
{
    $id=htmlentities($_POST['loanid']);
    $custid=htmlentities($_POST['customer']);
    $loan=htmlentities($_POST['sanction']);
    $payment_mode=htmlentities($_POST['payment_mode']);
    $chkno=htmlentities($_POST['chqddno']);
    $bank=htmlentities($_POST['bank']);
    $intrate=htmlentities($_POST['intrate']);
    $chkdt=htmlentities($_POST['paydate']);
    $disdate=htmlentities($_POST['disdate']);
    $agentid=htmlentities($_POST['agent_id']);
    $date=date("Y-m-d");
    $time=time();
    if($loan!="" && $loan>0)
    {
        /*echo "update `agricultureloan` set `is_approved`='1',`loangiven`='$loan',`intrestrate`='$intrate',
		`amount_topay`='$loan',`loan_given_date`='$disdate', `last_refund_date`='$date' where `id`='$id'";*/
    mysql_query("update `agricultureloan` set `is_approved`='1',`loangiven`='$loan',`intrestrate`='$intrate',
		`amount_topay`='$loan',`loan_given_date`='$disdate', `last_refund_date`='$date',`agent_id`='$agentid' where `id`='$id'")or die(mysql_error());
        //header("location:scheduler.php?id=$id&table=agricultureloan");
	header("location:loan_despatch.php?table=agricultureloan");
    }else{
        $msg="Loan Sanction amount Shouldn't be 0.";
        header("location:agricultureloan_details.php?id=$id&msg=$msg");
    }
}
if(isset($_POST['reject']))
{
    $id=htmlentities($_POST['loanid']);
    //echo "update `agricultureloan` set `is_approved`='2',`loan_given_date`='$date' where `id`='$id'";
//mysql_query("update `agricultureloan` set `is_approved`='2',`loan_given_date`='$date' where `id`='$id'") or die(mysql_error());
mysql_query("delete from `agricultureloan` where `id`='$id'") or die(mysql_error());
header("location:loan_approve.php?table=agricultureloan");
}
?>