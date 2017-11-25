<?php
 $date1=$_GET['dob'];
 $date2=date("Y-m-d");
        $ts1 = strtotime($date1);
	$ts2 = strtotime($date2);
	
	$ts1 = strtotime($date1);
	$ts2 = strtotime($date2);
	
	$year1 = date('Y', $ts1);
	$year2 = date('Y', $ts2);
	
	$month1 = date('m', $ts1);
	$month2 = date('m', $ts2);
	//calculation
	$diff = (($year2 - $year1) * 12) + ($month2 - $month1);
        //echo round($diff/12);
	echo $diff;
?>