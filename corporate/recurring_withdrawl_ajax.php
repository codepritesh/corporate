<?php
include_once("function.php");
$account=$_GET['cid'];
$getrecurring=mysql_query("select * from `recurringdiposite` where `status`='0' and `acc_no`='$account'")or die(mysql_error());
$resrecurring=mysql_fetch_array($getrecurring);
	$timeperiod=$resrecurring['no_of_installment'];
	$no_of_installment = $resrecurring['no_of_installment'];
	$paid_installment = $resrecurring['paid_installment'];
	$paid=$resrecurring['paid_installment']* $resrecurring['monthly_amount'];
	$monthly=$resrecurring['monthly_amount'];
	$intrest_rate=$resrecurring['intrest_rate'];
	$rest=$no_of_installment-$paid_installment;
	$date1 = $resrecurring['end_date'];
	$date2 = date("Y-m-d");

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
            $r=$intrest_rate/12;
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
}
$interest=$maturity-$paid;
	
	echo json_encode($getdetail[] = array(
	'value'  => $resrecurring['acc_no']."(".$resrecurring['name'].")",
	'acc_no' => $resrecurring['acc_no'],
	'customer_id' => $resrecurring['customer_id'],
	'date' => $date2,
	'enddate' => $date1,
	'maturity' => $maturity,
	'principal' => $paid,
	'interest' => $interest
	));
?>