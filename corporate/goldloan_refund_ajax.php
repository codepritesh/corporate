<?php
include_once("function.php");
$id=$_GET['cid'];
$table="goldloan";
$currdate=date("Y-m-d");
//$currdate="2016-10-04";
$getvendor=mysql_query("SELECT * FROM $table  where `is_approved`='1' and `loan_accno`!='' and `loancomplited`='0' and `id`='$id'") or die(mysql_error());
$resvendor=mysql_fetch_array($getvendor);

 $fetvill=mysql_query("select * from `prefix` where `slno`='$resvendor[village]'");
 $rvill=mysql_fetch_array($fetvill);
 $vildt=$rvill['date'];
 $vlgdayy= date("d",strtotime($vildt));

	$no=$resvendor['plan'];
	$sqlagen=mysql_query("select * from `agent` where `id`='$resvendor[agent_id]'")or die(mysql_error());
	$resagen=mysql_fetch_array($sqlagen);
	
	$vd= $vlgdayy;
	$ldd= date("d",strtotime($resvendor['loan_given_date']));
	if($ldd <= $vd){
	 $plan=$no;
	}else{
	    if(strtotime($resvendor['loan_given_date']) < strtotime("2015-11-30")){
	       $plan=$no;
	    }else{
	       $plan=$no-1;
	    }
	}
   //-------------------------------code  for  intrest & principal---------------------------------//
   
      $qwee=mysql_query("SELECT * FROM `$table` where `loan_accno`='$resvendor[loan_accno]'");
      $ress=mysql_fetch_array($qwee);
      
    if($resagen['name']!=''){
	   $agentval= $resagen['name'].'('.$resagen['codeno'].')';
	}else{
	    $agentval="";
	}
    
    $my=date("Y-m",strtotime($currdate));   
    $cm_colldt="$my-$vlgdayy";
    $cal_dtt=$cm_colldt;
       
    $diff = strtotime($cm_colldt) - strtotime($ress['od_cal_date']);
    $day_diff=round($diff/3600/24);
    if($day_diff<=0)
    {
    $day_diff=0; 
    }
    $p=$ress['amount_topay'];
    $t=$day_diff;
    $r=$ress['intrestrate']/365;
    
    $cuint=round(($p*$t*$r)/100);
    if(strtotime($cm_colldt)<strtotime($ress['loan_given_date'])){
      $cuint=0;
    }
    $cuprin=0;
    
    if((strtotime($ress['od_cal_date']) >= strtotime($cm_colldt)) || (strtotime("Y-m",strtotime($cm_colldt)) > strtotime("Y-m",strtotime($currdate))))
         {
	      $cuprin=0;
          $cuint=0;
    }  
    
    $edate=mysql_fetch_array(mysql_query("SELECT MAX(`cal_date`) as enddate FROM `transaction_ledger` WHERE `accountno` = '$resvendor[loan_accno]'"));
    $enddate=$edate['enddate'];
    //$enddate=date("Y-m-d", strtotime("+$plan month", strtotime($ress['loan_given_date'])));
    
	if(strtotime(date("Y-m",strtotime($cm_colldt)))== strtotime(date("Y-m",strtotime($enddate))))
	{
	//$cuprin = $ress['amount_topay'];
    $cuprin = $ress['amount_topay']-$ress['odprincipal']; 
	}
    
    if(strtotime($currdate)>strtotime($cm_colldt))
    { 
           $odint=$ress['odintrest']+$cuint;
            if($odint>$ress['amount_topay'])
            {
               $odint=$ress['odintrest'];  
            }
            $odpri=$ress['odprincipal']+$cuprin;
            
            //next month Calculation
            
            $nxdate=date("Y-m-d", strtotime("+1 month", strtotime($cm_colldt)));
            $cal_dtt=$nxdate;
	    if((strtotime($ress['loan_given_date'])==strtotime($ress['od_cal_date'])) && date("Y-m",strtotime($cm_colldt))==date("Y-m",strtotime($ress['od_cal_date']))){
	       $cm_colldt=$ress['loan_given_date'];
	    }
            $diff = abs(strtotime($nxdate) - strtotime($cm_colldt));
            $day_diff=round($diff/3600/24);
            if($day_diff<=0){
                $day_diff=0; 
            }
            $p=$ress['amount_topay'];
            $t=$day_diff;
            $r=$ress['intrestrate']/365;
            $cuint=round(($p*$t*$r)/100);
            if(($ress['odprincipal']>=$ress['amount_topay']))
            {
            $cuprin=0;
            }
    }
    else{
           
            $odint=$ress['odintrest'];
            $odpri=$ress['odprincipal'];
        }
    
    
	
	//echo $cuprin."---".$cuint."----".$ress['odprincipal']."----".$ress['odintrest'];
	
	$total=round($cuint+$cuprin+$odpri+$odint);
	echo json_encode($getemvendor[] = array(
	'value'  => $ress['name'],
	'custid' => $ress['customer_id'],
	'loan_against_acc' => $ress['loan_against_accno'],
	'loan_amt' => $ress['loan_amt'],
	'loangiven' => $ress['loangiven'],
	'loan_accno' => $ress['loan_accno'],
	'amount_topay' => $ress['amount_topay'],
	'intrest_amt' => round($cuint,2),
	'crprincipal'  =>  round($cuprin,2),
	'pre_principal'  => $ress['pre_principal'],
	'lastrefund' => $lastrefund,
	'agentvalue'  => $agentval,
	'odprincipal'  => $odpri,
	'odintrest'  => $odint,
	'agentidval' => $resagen['id'],
	'lastodcaldate' => $cal_dtt,
	'total'=>$total
	));
    ?>