<?php include_once("function.php");
if(isset($_POST['submit']))
{
    $custid=htmlentities($_POST['custid']);
    $intid=htmlentities($_POST['intid']);
    $name=htmlentities($_POST['name']);
    $gname=htmlentities($_POST['gname']);
    $accont=htmlentities($_POST['accno']);
    $dob=htmlentities($_POST['dob']);
    $gender=htmlentities($_POST['gender']);
    $phno=htmlentities($_POST['pno']);
    $address=htmlentities($_POST['address']);
    $post=htmlentities($_POST['post']);
    $pin=htmlentities($_POST['pin']);
    $dist=htmlentities($_POST['dist']);
    $age=htmlentities($_POST['age']);
    $annual=htmlentities($_POST['annual']);
    $nominee=$_POST['nominee'];
    $nominee_address=$_POST['nomaddress'];
    $nominee_relation=$_POST['nomrelation'];
    $id_proof=htmlentities($_POST['id_proof']);
    $photo=htmlentities($_POST['photo']);
    $sign=htmlentities($_POST['sign']);
    $paymentmode=htmlentities($_POST['payment_mode']);
    $check=htmlentities($_POST['d1']);
    $bank=htmlentities($_POST['d2']);
    $checkdate=htmlentities($_POST['d3']);
    $voucher=htmlentities($_POST['voucher']);
    $timeperiod=htmlentities($_POST['timeperiod']);
    $intrestrate=htmlentities($_POST['intrest']);
    $monthly=htmlentities($_POST['monthly']);
	$agent_name=$_POST['agent'];
    $agentid=$_POST['agent_id'];
	
            /*$amt1=0;
            $typ=1;
            $n=$timeperiod;
            $p=$monthly;
            $r=$intrestrate/12;
            for($x=$n;$x>0;$x--)
            {
                $n=$x;
            $dd = 1+(($r/$typ)/100);
            $ci = $p*pow($dd,$typ*$n);
            $amt = round($ci)*100/100;
            $ci = round($ci-$p)*100/100;
            //echo "<br>Compount interest : ".$ci;
            //echo "<br>Amount : ".$amt;
            //echo "<br>total:".$amt1=$amt1+$amt;
            $amt1=$amt1+$amt;
            }
    $maturity=$amt1;*/
            $n=$timeperiod;
            $p=$monthly;
            $r=$intrestrate/12;
	    $intrest=0;
            for($x=1;$x<=$n;$x++)
            {
		$tp=$p*$x;
		$si=round(($tp*1*$r)/100);
		$intrest=$intrest+$si;
            }
	    $maturity=$intrest+($n*$p);
    $sdate=date("Y-m-d");
    $end_date = date("Y-m-d", strtotime("+$timeperiod months"));
   mysql_query("insert into `recurringdiposite` set `introducer`='$intid'
                ,`customer_id`='$custid',`acc_no`='$accont',`name`='$name',`address`='$address',`post`='$post'
                ,`district`='$dist',`pin`='$pin',`gender`='$gender',`age`='$age'
		,`nominee`='$nominee',`nominee_address`='$nominee_address'
                ,`nominee_relation`='$nominee_relation',`deposited_amt`='$monthly'
                ,`guardian_name`='$gname',`phno`='$phno',`id_proof`='$id_proof',`photo`='$photo'
                ,`sign`='$sign',`plan`='$timeperiod',`intrest_rate`='$intrestrate',`monthly_amount`='$monthly'
                ,`maturity_amount`='$maturity',`start_date`='$sdate',`end_date`='$end_date',`last_diposite_date`='$sdate'
                ,`no_of_installment`='$timeperiod',`paid_installment`='1',`maturityamount_till_date`='$monthly'
                ,`paymentmode`='$paymentmode',`cheqno`='$check',`checkdate`='$checkdate'
		,`bankname`='$bank',`agent_id`='$agentid',`agent_name`='$agent_name'") or die(mysql_error());
				
    
    /*echo "insert into `recurringdiposite` set `introducer`='$intid'
                ,`customer_id`='$custid',`acc_no`='$accont',`name`='$name',`address`='$address',`post`='$post'
                ,`district`='$dist',`pin`='$pin',`gender`='$gender',`age`='$age',`nominee`='$nominee'
                ,`guardian_name`='$gname',`phno`='$phno',`id_proof`='$id_proof',`photo`='$photo'
                ,`sign`='$sign',`plan`='$timeperiod',`intrest_rate`='$intrestrate',`monthly_amount`='$monthly'
                ,`maturity_amount`='$maturity',`start_date`='$sdate',`end_date`='$end_date',`last_diposite_date`='$sdate'
                ,`no_of_installment`='$timeperiod',`paid_installment`='1',`maturityamount_till_date`='$monthly'
                ,`paymentmode`='$paymentmode',`cheqno`='$check',`checkdate`='$checkdate',`bankname`='$bank'";*/
                
                $time=$_SESSION['time']=time();
                mysql_query("insert into `transaction` set `transactionid`='$time',`customerid`='$custid',`accountno`='$accont'
                            ,`amount`='$monthly',`date`='$sdate',`details`='rdpayment',`agentid`='$agentid',`folio_no`='3',`voucher`='$voucher'");
							$msg="Successfully Submitted..";
                            
                $caldate=date("Y-m-t",strtotime($sdate));     
                $ledger="insert into `saving_ledger` set `acc_no`='$accont',`cal_date`='$caldate',`coll_date`='$sdate',`demand`='0',`deposited_amt`='$monthly',`total_amt`='$monthly' ,`folio_no`='3'";
                mysql_query($ledger)or die(mysql_error());            
                                  
                header("location:deposite_recurring.php?msg=$msg");
            
}
?>