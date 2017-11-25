<?php
include_once("function.php");
$acc=$_GET['acc'];
//echo "select * from `fixeddeposite` where `acc_no`='$acc' and `status`=0";
$saccdetails=mysql_query("select * from `fixeddeposite` where `acc_no`='$acc'")or die(mysql_error());
$ressaccdetails=mysql_fetch_array($saccdetails);

	$matamt=$ressaccdetails['maturity_amt'];
	$dep_amt=$ressaccdetails['deposited_amt'];
	$ir=$ressaccdetails['intrest_rate'];
	$plan=$ressaccdetails['plan'];
	$accno=$ressaccdetails['acc_no'];
	$currdate=date("Y-m-d");
	    $closedate = $ressaccdetails['closing_date'];
	    $opendate = $ressaccdetails['opening_date'];
	    //$closedate = "2015-12-16";
	if(strtotime($currdate)>=strtotime($closedate)){

	    $ts1 = strtotime($closedate);
	    $ts2 = strtotime($opendate);
	    
	    $year1 = date('Y', $ts1);
	    $year2 = date('Y', $ts2);
	    
	    $month1 = date('m', $ts1);
	    $month2 = date('m', $ts2);
	    $monthdiff = (($year1 - $year2) * 12) + ($month1 - $month2);
	    if($monthdiff>=$plan){
		$p=$dep_amt;
		$t=$monthdiff;
		$r=($ir/12);
		//$int=(($p*$t*$r)/100);
		$tot=(2*$p);
		$pay_amount=round($tot);
		//echo round($tot);
		$qwe=mysql_query("UPDATE `fixeddeposite` set `payable_amt`='$pay_amount' where `acc_no`='$accno'")or die(mysql_error()) ;
	  }
	}
	else{
	   // echo $opendate."----".$currdate."</br>";
	    
	    $ts1 = strtotime($currdate);
	    $ts2 = strtotime($opendate);
	    
	    $year1 = date('Y', $ts1);
	    $year2 = date('Y', $ts2);
	    
	    $month1 = date('m', $ts1);
	    $month2 = date('m', $ts2);
	     $monthdiff = (($year1 - $year2) * 12) + ($month1 - $month2);
		$p=$dep_amt;
		$t=$monthdiff;
		$r=(6/12);
		$int=(($p*$t*$r)/100);
		$tot=$p+$int;
		$pay_amount=round($tot);
		//echo round($tot);
		$qwe=mysql_query("UPDATE `fixeddeposite` set `payable_amt`='$pay_amount' where `acc_no`='$accno'")or die(mysql_error()) ;
	
	    
	}
	
       echo json_encode($rdetails[] = array(
        'account' => $ressaccdetails['acc_no'],
	    'customer_id' => $ressaccdetails['customer_id'],
	    'maturity_amt' => $pay_amount,
		'principal'=>$dep_amt,
		'interest'=>$pay_amount-$dep_amt,
        ));
        
?>