<?php
include_once("function.php");
if(isset($_POST['submit']))
{
    $table=htmlentities($_POST['table']);
    $loan_accno=htmlentities($_POST['accno']);
    $receive_amt=htmlentities($_POST['amount']);    
    $payment_mode=htmlentities($_POST['payment_mode']);
    $chkno=htmlentities($_POST['chqddno']);
    $bank=htmlentities($_POST['bank']);
    $chkdt=htmlentities($_POST['paydate']);
    $voucher=htmlentities($_POST['voucher']);
    //echo $table."--".$loan_accno."--".$receive_amt;
    if($table=='agricultureloan'){$foliono=7;}
    if($table=='businessloan'){$foliono=8;}
    if($table=='enterpriseloan'){$foliono=9;}
    if($table=='demand_loan'){$foliono=10;}
    if($table=='goldloan'){$foliono=11;}
    
    if($table!='' &&  $loan_accno!='' && $receive_amt!='')
    {
    $time=time();
    $date=date("Y-m-d");
    
   // $date='2017-05-01';
     
    $fetchcust=mysql_query("select * from `$table` where `loan_accno`='$loan_accno'");
    $fetchcustomer=mysql_fetch_array($fetchcust);
    //echo $fetchcustomer['amount_topay'];
    $custid=$fetchcustomer['customer_id'];
    $count=mysql_num_rows($fetchcust);
    if($count>0)
    {
       $curint=get_currentint($table,$fetchcustomer['id']);
       $curpri=get_currentpri($table,$fetchcustomer['id']);
       
       $vlgdate=get_villagedate($fetchcustomer['village']);
       $vlgday= date("d",strtotime($vlgdate));
       
       $cm_colldt=get_currentcoll_date($vlgday);
       $cal_dtt=$cm_colldt;
       if(strtotime($date)>strtotime($cm_colldt) && strtotime($cm_colldt)>=strtotime($fetchcustomer['od_cal_date']))
            { 
                    $odint=$fetchcustomer['odintrest']+$curint;
                    if($odint>$fetchcustomer['amount_topay'])
                    {
                       $odint=$fetchcustomer['odintrest'];  
                    }
                     $odpri=$fetchcustomer['odprincipal']+$curpri;
                    
                    //next month Calculation
                    
                $nxdate=date("Y-m-d", strtotime("+1 month", strtotime($cm_colldt)));
                $cal_dtt=$nxdate;	    
                if((strtotime($fetchcustomer['loan_given_date'])==strtotime($fetchcustomer['od_cal_date'])) && date("Y-m",strtotime($cm_colldt))==date("Y-m",strtotime($fetchcustomer['od_cal_date']))){
                   $cm_colldt=$fetchcustomer['loan_given_date'];
                }
                    $day_diff=get_daysdiff($cm_colldt,$nxdate); 
                    $curint=get_intdaywise($fetchcustomer['amount_topay'],$day_diff,$fetchcustomer['intrestrate']);
                    if(($fetchcustomer['odprincipal']>=$fetchcustomer['amount_topay']) || $table == 'goldloan' || $table == 'demand_loan')
                    {
                    $curpri=0;
                    }
                    else
                    {
                    $curpri=$fetchcustomer['loangiven']/$plan;;  
                    }
            }
            else{
                   
                    $odint=$fetchcustomer['odintrest'];
                    $odpri=$fetchcustomer['odprincipal'];
                }
                
                  $restoutstanding = $fetchcustomer['amount_topay'] - ($odpri+$curpri);
                   if($restoutstanding<0){
                    $restoutstanding=0;
                   }
                
                
                if($receive_amt>0){
                   $ramt=$receive_amt;
                       if($ramt>=$odpri){
                        $b_od_pri=$odpri;
                         $ramt=$ramt-$odpri;
                           if($ramt>=$curpri){
                               $b_cur_pri=$curpri;
                               $ramt=$ramt-$curpri;
                               if($ramt>=$restoutstanding){
                                $a_pre_pri=$restoutstanding;
                                   $ramt=$ramt-$restoutstanding;
                                   if($ramt>=$odint){
                                       $b_od_int=$odint;
                                       $ramt=$ramt-$odint;
                                       if($ramt>0){
                                            $b_cur_int=$ramt;
                                       }
                                   }else{
                                       $b_od_int=($ramt);
                                       $b_cur_int=0;                                       
                                   }
                                   
                               }else{
                                   $a_pre_pri=($ramt);
                                   $b_od_int=0;
                                   $b_cur_int=0;				
                               }
                           }else{
                                $b_cur_pri=($ramt);
                                $b_od_int=0;
                                $b_cur_int=0;
                           }
                       }else{
                           $b_od_pri=($ramt);
                           $b_cur_pri=0;
                           $b_od_int=0;
                           $b_cur_int=0;
                       }
		//echo $b_od_pri."---".$b_cur_pri; 
    $tot_pri = $b_od_pri + $b_cur_pri + $a_pre_pri ;
	$a_od_int=($odint+$curint)-($b_od_int+$b_cur_int);
	$a_od_pr=($odpri+$curpri)-($b_od_pri+$b_cur_pri);
        
	if($a_od_pr<0){
	  $a_od_pr=0;
	}
        
    if($a_od_int<0){
	  $a_od_int=0;
	}
        
	$a_tot_od=$a_od_int+$a_od_pr;
        
	$outstanding = ($fetchcustomer['amount_topay']-($b_od_pri+$b_cur_pri+$a_pre_pri));
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
		    `a_od_int`='$a_od_int',`a_od_pr`='$a_od_pr',`a_tot_od`='$a_tot_od',`collection`='$_POST[amount]',`coll_date`='$date',`Refundtype` = 'Forcefully close'
		    where `accountno`='$loan_accno' and `cal_date`='$cm_colldt'";
        }else{
            $ledgerquery="insert into `transaction_ledger` set `accountno`='$loan_accno',`outstanding`='$outstanding',`cal_date`='$cm_colldt',
			    `b_od_int`='$b_od_int',`b_od_pri`='$b_od_pri',`b_cur_int`='$b_cur_int',`b_cur_pri`='$b_cur_pri',`tot_pr`='$tot_pri',
			    `a_pre_pri`='$a_pre_pri',`a_od_int`='$a_od_int',`a_od_pr`='$a_od_pr',`a_tot_od`='$a_tot_od',`collection`='$_POST[amount]',
			    `coll_date`='$date',`Refundtype` = 'Forcefully close'";
        }
		
	}else{
		$ledgerquery="insert into `transaction_ledger` set `accountno`='$loan_accno',`outstanding`='$outstanding',`cal_date`='$cm_colldt',
			    `b_od_int`='$b_od_int',`b_od_pri`='$b_od_pri',`b_cur_int`='$b_cur_int',`b_cur_pri`='$b_cur_pri',`tot_pr`='$tot_pri',
			    `a_pre_pri`='$a_pre_pri',`a_od_int`='$a_od_int',`a_od_pr`='$a_od_pr',`a_tot_od`='$a_tot_od',`collection`='$_POST[amount]',
			    `coll_date`='$date',`Refundtype` = 'Forcefully close'";
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
                 `interest`='$tot_interest',`date`='$date',`details`='$loanname Interest',`mode_of_payment`='$payment_mode',`chq_dd_no`='$chkno',`chq_dd_bank_name`='$bank',
                 `chq_dd_date`='$chkdt',`agentid`='$agent_id',`folio_no`='$foliono',`productfolio`='24',`voucher`='$voucher'");
    
    }
    if($tot_payment>0){
        
          mysql_query("INSERT INTO `transaction` set `transactionid`='$time',`customerid`='$custid',`accountno`='$loan_accno',
                 `amount`='$tot_payment',`date`='$date',`details`='$loanname Refund',`mode_of_payment`='$payment_mode',`chq_dd_no`='$chkno',`chq_dd_bank_name`='$bank',
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
       
	  $tableupdate="update  `$table` set `odintrest`='$a_od_int',`odprincipal`='$a_od_pr',`amount_topay`='$outstanding',`last_refund_date`='$date',`last_refund_amt`='$receive_amt',`od_cal_date`='$cal_dtt',`loancomplited`='$complited' where `loan_accno`='$loan_accno'";
     mysql_query($tableupdate)or die(mysql_error());  
    
    /********************************** table ***************************************/               
    }        
      
    }
    
    }
    header("location:loanclose.php?table=$table&msg=$msg");
}    
?>