<?php
include_once("function.php");
ini_set("display_errors",1);

$tdate=date("Y-m-d");
$ndate = date('Y-01-01', strtotime('+1 years'));
mysql_query("update `rundate` set `date`='$ndate', `int_cal_date`='$tdate' where `id`='3'");
//------------calculation for fixeddeposite-----------//

$saccdetails=mysql_query("select * from `fixeddeposite` where `status`='0'")or die(mysql_error());
   while($ressaccdetails=mysql_fetch_array($saccdetails))
    { 
	 $amt=$ressaccdetails['deposited_amt'];
	 $ir=$ressaccdetails['intrest_rate'];
	 $currdate=date("Y-m-d");
	 $lastdate = $ressaccdetails['last_update_date'];
        $closedate = $ressaccdetails['closing_date'];
	//$lastdate ="2015-07-13";
        //$currdate ="2017-07-13";
        if($currdate > $lastdate && $currdate <= $closedate){
            
             $d1 = $lastdate;
             $d2 = $currdate;
	  
             $diff= (int)abs((strtotime($d1) - strtotime($d2))/(60*60*24*30));
	     if($diff!=0)
	     {
           
            $yr=$diff/12;
            $pw=(1+($ir/100));
            $power=pow($pw,$yr);
            $mat_amt=$amt*$power;
            $matamt_tilldt=floor($mat_amt);
            //echo '</br>';
            //echo "update `fixeddeposite` set `last_update_date`='$currdate' and `till_maturity_amt`='$matamt_tilldt' where `acc_no`='$ressaccdetails[acc_no]'";
            $updatesaving=mysql_query("update `fixeddeposite` set `last_update_date`='$currdate' and `till_maturity_amt`='$matamt_tilldt' where `acc_no`='$ressaccdetails[acc_no]'")
            or die(mysql_error());
	    
	    /*$time=time();
	    $date=date("Y-m-d");
	    $updatetransaction=mysql_query("insert into `transaction` set `transactionid`='$time',`customerid`='$ressaccdetails[customer_id]',
		 `accountno`='$ressaccdetails[acc_no]',`amount`='$calint',`date`='$date',`details`='Intrest'") or die(mysql_error());*/
	     }
        }
       
    }
    
    //-------calculation for recurring deposite-------------//
   $getrecurring=mysql_query("select * from `recurringdiposite` where `status`='0'")or die(mysql_error());
   while($resrecurring=mysql_fetch_array($getrecurring))
    {
	$timeperiod=$resrecurring['no_of_installment'];
	$no_of_installment = $resrecurring['no_of_installment'];
	$paid_installment = $resrecurring['paid_installment'];
	$paid=$resrecurring['paid_installment']* $resrecurring['monthly_amount'];
	$monthly=$resrecurring['monthly_amount'];
	$intrest_rate=$resrecurring['intrest_rate'];
	$rest=$no_of_installment-$paid_installment;
$date1 = $resrecurring['end_date'];
$date2 = date("Y-m-d");
$maturity=0;

$ts1 = strtotime($date1);
	$ts2 = strtotime($date2);
	
	$ts1 = strtotime($date1);
	$ts2 = strtotime($date2);
	
	$year1 = date('Y', $ts1);
	$year2 = date('Y', $ts2);
	
	$month1 = date('m', $ts1);
	$month2 = date('m', $ts2);

if($ts2>$ts1)
{
    if($no_of_installment==$paid_installment)
    {
	
	//calculation
	$diff = (($year2 - $year1) * 12) + ($month2 - $month1);
	if($diff>0)
	{
	    $amt1=0;
            $typ=1;
            $n=$diff;
            $p=$resrecurring['maturity_amount'];
            $r=6/12;
	    $intrest=0;
            for($x=1;$x<=$n;$x++)
            {
		$tp=$p;
		$si=round(($tp*1*$r)/100);
		$intrest=$intrest+$si;
            }
	    $maturity=$intrest+$p;
	}
	else{ $maturity=$resrecurring['maturity_amount'];}
	
    }
    else if($rest>6)
    {
	
	 $amt1=0;
            $typ=1;
            $n=$timeperiod;
            $p=$paid;
            $r=6/12;
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
	    $maturity=$amt1;
            }  
    }
    else
    {
	 $amt1=0;
            $typ=1;
            $n=$paid_installment;
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
    }
}
     if($maturity!="" && $maturity >0)
     {
     mysql_query("update `recurringdiposite` set `maturityamount_till_date`='$maturity' ,`int_cal_date`='$date2' ");
     
      /*$time=time();
	    $date=date("Y-m-d");
	    $updatetransaction=mysql_query("insert into `transaction` set `transactionid`='$time',`customerid`='$ressaccdetails[customer_id]',
		 `accountno`='$ressaccdetails[acc_no]',`amount`='$calint',`date`='$date',`details`='Intrest'") or die(mysql_error());*/
     }

}
//------------calculation for dailydeposit-----------//
/*$dailydetails=mysql_query("select * from `dailydeposit` where `status`='0'")or die(mysql_error());
   while($resdailydetails=mysql_fetch_array($dailydetails))
    {
     $amt=0;
     $p=0;
          $d1 = $resdailydetails['start_date'];
          $d2 = date("Y-m-d");
	  $diff= (int)abs((strtotime($d1) - strtotime($d2))/(60*60*24));
	  
	  $p=$resdailydetails['deposited_amt'];
	  $r=0.01;
	  if($p>0)
	  {
	  $amt=$p*$diff*$r;
	  $amount=$amt+$p;
	  mysql_query("update dailydeposit set `total_amt`='$amount' where `id`='$resdailydetails[id]' ");
	  
	  //$time=time();
	   // $date=date("Y-m-d");
	    //$updatetransaction=mysql_query("insert into `transaction` set `transactionid`='$time',`customerid`='$resdailydetails[customer_id]',
		 //`accountno`='$resdailydetails[acc_no]',`amount`='$amt',`date`='$date',`details`='Intrest'") or die(mysql_error());
	  }
	 
    }
    */
header("location:index1.php");
?>