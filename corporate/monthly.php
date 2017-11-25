<?php
include_once("function.php");
$tdate=date("Y-m-d");
$ndate = date('Y-m-01', strtotime('+1 month'));
//echo "update `rundate` set `date`='$ndate', `int_cal_date`='$tdate' where `id`='1'";
mysql_query("update `rundate` set `date`='$ndate', `int_cal_date`='$tdate' where `id`='1'");
//------------intrest calculation--------//
				
				$qwe=mysql_query("select * from `savingaccount` where `status`='0'");
				while($rqwe=mysql_fetch_array($qwe))
				{
					  $sdate = date("Y-m-d", strtotime($rqwe[opening_date]));
					// $edate = date("Y-m-d", strtotime("last day of this month"));
					
					//$sdate = date("Y-m-d", strtotime($rqwe[last_update_date]));
				        $edate = date("Y-m-d");
					//$sdate = date("2015-06-15");
				        $diff = (int)abs((strtotime($sdate) - strtotime($edate))/(60*60*24*30));
					if($diff!=0){
						      $qaz=mysql_query("select SUM( amount ) AS totalamt  from  transaction where `accountno`='$rqwe[acc_no]' and `date` between '$sdate' and '$edate'") or die(mysql_error());
						      // $qaz= mysql_query("SELECT SUM( amount ) AS totalamt FROM transaction WHERE `accountno` = 'S1'");
						      $rqaz=mysql_fetch_array($qaz);
						      $p= $rqaz['totalamt'];
						      $t=1;
						      $r=$rqwe['intrest_rate']/12;
						      $intrest=($p*$t*$r)/100;
						    
						     $calint=$intrest;
						     $amt=$calint;
					             $damt=$rqwe['deposited_amt']+$calint;
						     $updatesaving=mysql_query("update `savingaccount` set `deposited_amt`='$damt' where `acc_no`='$rqwe[acc_no]'") or die(mysql_error());
						     $time=time();
						     $date=date("Y-m-d");
						     $updatetransaction=mysql_query("insert into `transaction` set `transactionid`='$time',`customerid`='$rqwe[customer_id]',
										       `accountno`='$rqwe[acc_no]',`amount`='$calint',`date`='$date',`details`='Intrest'") or die(mysql_error());
					       
					}
					 
				}
				
			
			//-----------end intrest cal------//
			
	
//------------calculation for dailydeposit-----------//
$intrest=0;
$dailydetails=mysql_query("select * from `dailydeposit` where `status`='0'")or die(mysql_error());
   while($resdailydetails=mysql_fetch_array($dailydetails))
    {	  
	  $total_amt=$resdailydetails['total_amt'];
	  $intrest=($total_amt*($resdailydetails['intrest_rate']/12))/100;
	  $amount=$total_amt+$intrest;
	  mysql_query("update dailydeposit set `total_amt`='$amount' where `id`='$resdailydetails[id]' ");
	  
	  //$time=time();
	   //$date=date("Y-m-d");
	    //$updatetransaction=mysql_query("insert into `transaction` set `transactionid`='$time',`customerid`='$resdailydetails[customer_id]',
		 //`accountno`='$resdailydetails[acc_no]',`amount`='$amt',`date`='$date',`details`='Intrest'") or die(mysql_error());
	 
    }
    
			header("location:index1.php");
 ?>
