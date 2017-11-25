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
       /* echo "update `demand_loan` set `is_approved`='1',`loangiven`='$loan',`intrestrate`='$intrate',
		`amount_topay`='$loan',`loan_given_date`='$disdate', `last_refund_date`='$date' where `id`='$id'";*/
    mysql_query("update `demand_loan` set `is_approved`='1',`loangiven`='$loan',`intrestrate`='$intrate',
		`amount_topay`='$loan',`loan_given_date`='$disdate', `last_refund_date`='$date',`agent_id`='$agentid' where `id`='$id'")or die(mysql_error());
       // header("location:demandscheduler.php?id=$id");
        header("location:demandloan_dispatch.php?table=demand_loan");
    }else{
        $msg="Loan Sanction amount Shouldn't be 0.";
        header("location:demandloan_details.php?id=$id&msg=$msg");
    }
    
}
if(isset($_POST['reject']))
{
    $id=htmlentities($_POST['loanid']);
    //echo "update `demand_loan` set `is_approved`='2',`loan_given_date`='$date' where `id`='$id'";
//mysql_query("update `loan` set `is_approved`='2',`loan_given_date`='$date' where `id`='$id'") or die(mysql_error());
mysql_query("delete from `demand_loan` where `id`='$id'") or die(mysql_error());
header("location:loan_approve.php");
}
?>