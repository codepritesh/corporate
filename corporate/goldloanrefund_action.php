<?php
include_once("function.php");
if(isset($_POST['submit']))
{
	$table='goldloan';
	$foliono=11;
	$loanname="Gold";
	$page='goldloan_refund.php';
    
    
	$custid=htmlentities($_POST['custid']);
	$loan_accno=htmlentities($_POST['loan_accno']);
	$agent_id=htmlentities($_POST['agent_id']);
	$cal_dtt=htmlentities($_POST['lastodcaldate']);
		
	$payment_mode=htmlentities($_POST['payment_mode']);
	$chkno=htmlentities($_POST['chqddno']);
	$bank=htmlentities($_POST['bank']);
	$chkdt=htmlentities($_POST['paydate']);
	
	
	$voucher=htmlentities($_POST['voucher']);
	$refund=htmlentities($_POST['refund']);
	$total=htmlentities($_POST['total']);
	$amount_topay=htmlentities($_POST['amount_topay']);
	$preprincipal=htmlentities($_POST['preprincipal']);
	$odintrest=htmlentities($_POST['odintrest']);
	$odprincipal=htmlentities($_POST['odprincipal']);
	$crint=htmlentities($_POST['intamt']);
	$crprincipal=htmlentities($_POST['principal']);
    
	$crdate=date("Y-m-d");
    //$crdate='2017-05-08';
	$getvendor=mysql_query("SELECT * FROM $table where  `loan_accno`='$_POST[loan_accno]'") ;
	$resvendor=mysql_fetch_array($getvendor);
	$fetvill=mysql_query("select * from `prefix` where `slno`='$resvendor[village]'");
	$rvill=mysql_fetch_array($fetvill);
	$vildt=$rvill['date'];
	$d= date("d",strtotime($vildt));
	$my=date("Y-m",strtotime($crdate));
    $cal_dt=date("$my-$d");	
    if(strtotime(date("Y-m",strtotime($cal_dtt)))>strtotime($my))
    {
        $cal_dtt=$cal_dt;
    }
	
    
	$time=time();
	if($_POST['refund']>0){
		$ramt=$_POST['refund'];
		if($ramt>=$_POST['odintrest']){
			$b_od_int=$_POST['odintrest'];
			$ramt=$ramt-$_POST['odintrest'];
			if($ramt>=$_POST['intamt']){
				$b_cur_int=$_POST['intamt'];
				 $ramt=$ramt-$_POST['intamt'];
				if($ramt>=$_POST['odprincipal']){
					$b_od_pri=$_POST['odprincipal'];
					$ramt=$ramt-$_POST['odprincipal'];
					if($ramt>=$_POST['principal']){
						$b_cur_pri=$_POST['principal'];
						$ramt=$ramt-$_POST['principal'];
						if($ramt>0){
							$a_pre_pri=$ramt;
						}
					}else{
						$b_cur_pri=($ramt);
					}
					
				}else{
					$b_od_pri=($ramt);
					$b_cur_pri=0;				
				}
			}else{
				$b_cur_int=($ramt);
				$b_od_pri=0;
				$b_cur_pri=0;
			}
		}else{
			$b_od_int=($ramt);
			$b_cur_int=0;
			$b_od_pri=0;
			$b_cur_pri=0;
		}
		//echo $b_od_pri."---".$b_cur_pri;        
	
    
    $tot_pri = $b_od_pri + $b_cur_pri + $a_pre_pri ;
	$a_od_int=($_POST['odintrest']+$_POST['intamt'])-($b_od_int+$b_cur_int);
	$a_od_pr=($_POST['odprincipal']+$_POST['principal'])-($b_od_pri+$b_cur_pri);
        
	if($a_od_pr<0){
	  $a_od_pr=0;
	}
	$a_tot_od=$a_od_int+$a_od_pr;
        
	$outstanding = ($_POST['amount_topay']-($b_od_pri+$b_cur_pri+$a_pre_pri));
	if($outstanding<=0){
	  $outstanding=0;
	  $a_od_pr=0;
	  $a_od_int=0;
	  $a_tot_od=0;
	}
    
    
	/************************************* Ledger *********************************/
	$ledger=mysql_query("select * from `transaction_ledger` where `accountno`='$loan_accno' and `cal_date` like '$my%' and `collection`>0");
	$cntledger=mysql_num_rows($ledger);
	if($cntledger==0){
		
        $chkledger=mysql_query("select * from `transaction_ledger` where `accountno`='$loan_accno' and `cal_date` like '$my%'");
        if(mysql_num_rows($chkledger)>0)
        {
            $ledgerquery="update `transaction_ledger` set `outstanding`='$outstanding',`b_od_int`='$b_od_int',`b_od_pri`='$b_od_pri',
		    `b_cur_int`='$b_cur_int',`b_cur_pri`='$b_cur_pri',`tot_pr`='$tot_pri',`a_pre_pri`='$a_pre_pri',
		    `a_od_int`='$a_od_int',`a_od_pr`='$a_od_pr',`a_tot_od`='$a_tot_od',`collection`='$_POST[refund]',`coll_date`='$crdate',`Refundtype` = 'Normally Refund'
		    where `accountno`='$loan_accno' and `cal_date`='$cal_dtt'";
        }else{
            $ledgerquery="insert into `transaction_ledger` set `accountno`='$loan_accno',`outstanding`='$outstanding',`cal_date`='$cal_dtt',
			    `b_od_int`='$b_od_int',`b_od_pri`='$b_od_pri',`b_cur_int`='$b_cur_int',`b_cur_pri`='$b_cur_pri',`tot_pr`='$tot_pri',
			    `a_pre_pri`='$a_pre_pri',`a_od_int`='$a_od_int',`a_od_pr`='$a_od_pr',`a_tot_od`='$a_tot_od',`collection`='$_POST[refund]',
			    `coll_date`='$crdate',`Refundtype` = 'Normally Refund'";
        }
		
	}else{
		$ledgerquery="insert into `transaction_ledger` set `accountno`='$loan_accno',`outstanding`='$outstanding',`cal_date`='$cal_dtt',
			    `b_od_int`='$b_od_int',`b_od_pri`='$b_od_pri',`b_cur_int`='$b_cur_int',`b_cur_pri`='$b_cur_pri',`tot_pr`='$tot_pri',
			    `a_pre_pri`='$a_pre_pri',`a_od_int`='$a_od_int',`a_od_pr`='$a_od_pr',`a_tot_od`='$a_tot_od',`collection`='$_POST[refund]',
			    `coll_date`='$crdate',`Refundtype` = 'Normally Refund'";
	}
	//echo $ledgerquery;
	mysql_query($ledgerquery);
	
	$pageurl=$_SERVER['REQUEST_URI'] ;
	$query = sprintf("insert into log set `data`='%s',`pageurl`='%s',`accno`='%s'",
		mysql_real_escape_string($ledgerquery),
		mysql_real_escape_string($pageurl),
		mysql_real_escape_string($loan_accno));
		mysql_query($query) or die(mysql_error());
        
        
    /********************************* Ledger  **************************************/
    
    /********************************* transaction ********************************/
		
	$tot_interest=$b_od_int+$b_cur_int;
	$tot_payment=$b_od_pri+$a_pre_pri+$b_cur_pri;
	
    if($tot_interest>0){
        
	mysql_query("INSERT INTO `transaction` set `transactionid`='$time',`customerid`='$custid',`accountno`='$loan_accno',
	`interest`='$tot_interest',`date`='$crdate',`details`='$loanname Loan Interest',`mode_of_payment`='$payment_mode',`chq_dd_no`='$chkno',`chq_dd_bank_name`='$bank',
        `chq_dd_date`='$chkdt',`agentid`='$agent_id',`folio_no`='$foliono',`productfolio`='24',`voucher`='$voucher'");
    
    }
    if($tot_payment>0){
        
        mysql_query("INSERT INTO `transaction` set `transactionid`='$time',`customerid`='$custid',`accountno`='$loan_accno',
        `amount`='$tot_payment',`date`='$crdate',`details`='$loanname Loan Refund',`mode_of_payment`='$payment_mode',`chq_dd_no`='$chkno',`chq_dd_bank_name`='$bank',
        `chq_dd_date`='$chkdt',`agentid`='$agent_id',`folio_no`='$foliono',`voucher`='$voucher'");
	}
	
    /******************************** transaction *************************************/
    
    /********************************** table ****************************************/
    
     if($outstanding==0){
	$complited=1;
    $msg="You have successfully repayment your loan amount...Your loan a/c has been closed...";	
	}else{
	  $complited=0;
      $msg="You have successfully Submitted  your repayment...";
	}
       
	$tableupdate="update  `$table` set `odintrest`='$a_od_int',`odprincipal`='$a_od_pr',`amount_topay`='$outstanding',`last_refund_date`='$crdate',`last_refund_amt`='$_POST[refund]',`od_cal_date`='$_POST[lastodcaldate]',`loancomplited`='$complited' where `loan_accno`='$loan_accno'";
     mysql_query($tableupdate)or die(mysql_error());  
    
    /********************************** table ***************************************/
    
	}else{
	$msg="Refund Amount should not be 0.";
	}
	
}
header("location:$page?msg=$msg");
?>