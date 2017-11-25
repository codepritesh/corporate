<?php
ini_set('display_errors',0);
session_start();
mysql_connect('localhost','root','');
//mysql_select_db('corporate');
mysql_select_db('corporate');
//mysql_select_db('corporate_feb');

$currdate=date("Y-m-d");
$ymcurrdate=date("Y-m");
function is_login()
{
if(!isset($_SESSION['user']))
    {
        header("location:index.php");
    }  
}

function get_folioname($id)
{
    $fname=mysql_fetch_array(mysql_query("SELECT * FROM  `folio` where `id`='$id'"));
    return $fname['name'];
}


function get_daysdiff($from,$to)
{
    $str = strtotime($to) - (strtotime($from));
    $daydiff=round($str/3600/24);
    return $daydiff;
}

function get_intdaywise($p,$t,$r)
{
      $r=$r/365;
      $intrest=($p*$t*$r)/100;      
      return $intrest;
}

function get_villagedate($vid)
{
    $fetvill=mysql_query("select * from `prefix` where `slno`='$vid'");
    $rvill=mysql_fetch_array($fetvill);
    $vildt=$rvill['date'];
    return $vildt;
}

function get_currentcoll_date($vlgday)
{
$my=date("Y-m");
$cm_colldt="$my-$vlgday";
return $cm_colldt;
}

/*
function get_odint($table,$id)
{
$getvendor=mysql_query("SELECT * FROM `$table` where `id`='$id'") or die(mysql_error());
$resvendor=mysql_fetch_array($getvendor);

$vlgdate=get_villagedate($resvendor['village']);
$vlgday= date("d",strtotime($vlgdate));
$cm_colldt=get_currentcoll_date($vlgday);

if(strtotime($currdate) > strtotime($cm_colldt))
{
$cuint=1;
$odint=$ress['odintrest']+$cuint;
if($odint>$resvendor['amount_topay'])
{
$odint=$resvendor['odintrest'];  
}
}else{
  $odint=$resvendor['odintrest'];  
}
return $odint;
}

function get_odpri($table,$id)
{ 
    $getvendor=mysql_query("SELECT * FROM `$table` where `id`='$id'") or die(mysql_error());
    $resvendor=mysql_fetch_array($getvendor);
    
    $vlgdate=get_villagedate($resvendor['village']);
    $vlgday= date("d",strtotime($vlgdate));
    $cm_colldt=get_currentcoll_date($vlgday);
    
    if(strtotime($currdate)>strtotime($cm_colldt))
    {
    $cuprin=1;
    $odpri=$ress['odprincipal']+$cuprin;   
    }
    else{
     $odpri=$resvendor['odprincipal'];   
    }
    return $odpri;
}
*/


function get_currentint($table,$id)
{
    $getvendor=mysql_query("SELECT * FROM `$table` where `id`='$id'") or die(mysql_error());
    $resvendor=mysql_fetch_array($getvendor);
    
    $vlgdate=get_villagedate($resvendor['village']);    
    $vlgday= date("d",strtotime($vlgdate));
    
    $cm_colldt=get_currentcoll_date($vlgday);
    
    $day_diff=get_daysdiff($resvendor['od_cal_date'],$cm_colldt);    
    
    $cuint=get_intdaywise($resvendor['amount_topay'],$day_diff,$resvendor['intrestrate']);
    
    if(strtotime($cm_colldt)<strtotime($resvendor['loan_given_date']) || strtotime($ress['od_cal_date']) == strtotime($cm_colldt) || (strtotime("Y-m",strtotime($cm_colldt))> strtotime("Y-m",strtotime($currdate))))
    {
      $cuint=0;
    }
    
    return $cuint;
}

function get_currentpri($table,$id)
{
   $getvendor=mysql_query("SELECT * FROM `$table` where `id`='$id'") or die(mysql_error());
  
    $resvendor=mysql_fetch_array($getvendor);
    $plan=get_plan($table,$id);
    $enddate=get_enddate($resvendor['loan_accno']);
    if($table == 'goldloan' || $table == 'demand_loan'){
        $cuprin=0;
    }else{
    
        if(date("m")==3)
          {       
            $comparedays=28;
          }
         else
         {
            $comparedays=30;
         }
         
        $vlgdate=get_villagedate($resvendor['village']);    
        $vlgday= date("d",strtotime($vlgdate));
        
        $cm_colldt=get_currentcoll_date($vlgday);
        $day_diff = get_daysdiff($resvendor['od_cal_date'],$cm_colldt);       
        
        if((strtotime($ress['od_cal_date'])== strtotime($cm_colldt)) || ($resvendor['odprincipal']>=$resvendor['amount_topay'])|| ((date('d',strtotime($resvendor['loan_given_date']))>$vlgday) && (strtotime($resvendor['loan_given_date'])==strtotime($resvendor['od_cal_date']))) || (strtotime("Y-m",strtotime($cm_colldt))> strtotime("Y-m",strtotime($currdate))) || $day_diff < $comparedays)
        {
        $cuprin=0;
        }else{
           $cuprin=$resvendor['loangiven']/$plan; 
        }
    }
    
	if(strtotime(date("Y-m",strtotime($cm_colldt)))== strtotime(date("Y-m",strtotime($enddate))))
	{
	 $cuprin = $resvendor['amount_topay']-$resvendor['odprincipal']; 
	}
    
    return $cuprin;
    
}


function get_enddate($accno){
    $edate=mysql_fetch_array(mysql_query("SELECT MAX(`cal_date`) as enddate FROM `transaction_ledger` WHERE `accountno` = '$accno'"));
    $enddate=$edate['enddate'];
    return $enddate;
}

function get_plan($table,$id){
    
    $getvendor=mysql_query("SELECT * FROM `$table` where `id`='$id'") or die(mysql_error());
    $resvendor=mysql_fetch_array($getvendor);
    $no=$resvendor['plan'];
    $vlgdate=get_villagedate($resvendor['village']);    
    $vlgday= date("d",strtotime($vlgdate));
    
	$ldd = date("d",strtotime($resvendor['loan_given_date']));
	if($ldd <= $vlgday){
	 $plan=$no;
	}else{
	    if(strtotime($resvendor['loan_given_date']) < strtotime("2015-11-30"))
        {
	       $plan=$no;
	    }else{
	       $plan=$no-1;
	    }
	}
    return $plan;
}


function get_accprefix($folio){
    if($folio == '6')
    {      
      $prefix ='GRL'; 
    }
    else{
        $fname=get_folioname($folio);
        $p=explode(' ',$fname);
        $p1=substr($p[0], 0, 1);
        $p2=substr($p[1], 0, 1);
        $prefix=$p1.$p2;
        $prefix=strtoupper($prefix);
    }
    
    return $prefix;
}


function monthend($table,$currdate)
{
$getvendor=mysql_query("SELECT * FROM $table where `loancomplited`=0") or die(mysql_error());
//$getvendor=mysql_query("SELECT * FROM `goldloan` where `loan_accno`='GL2147'") or die(mysql_error());
//echo "SELECT * FROM `goldloan` where `loan_accno`='GL2147'<br>";
while($resvendor=mysql_fetch_array($getvendor))
{
 $loan_accno = $resvendor['loan_accno'];
 $my = date("Y-m",strtotime($currdate));
 $vildt=get_villagedate($resvendor['village']);
 $vlgday= date("d",strtotime($vildt));
 $vlgdayy = $vlgday;
 $plan=get_plan($table,$resvendor['id']);
 $cm_colldt = "$my-$vlgday";
 
$predate=date("Y-m", strtotime("-1 month", strtotime($my)));
$cquery="select * from `transaction_ledger` where `accountno`='$loan_accno' and `cal_date` like '$predate%' order by `coll_date` desc";

echo $cquery;
$cquery=mysql_query($cquery);
$cntledger=mysql_num_rows($cquery);
echo $cntledger.'<br>';
if($cntledger>0)
{
$ledger=mysql_fetch_array($cquery);
$pr_colldt = "$predate-$vlgday";
 if(strtotime($ledger['coll_date'])>strtotime($pr_colldt))
 {
 $od_caldate = $cm_colldt;   
 }else{
 $od_caldate = $pr_colldt;
 }
 
if(strtotime($pr_colldt)>strtolower($resvendor['loan_given_date']))
    {
        $od_caldate = $resvendor['loan_given_date'];
    }
echo $od_caldate.'---'.$cm_colldt.'---'.$ledger['coll_date'];
$p = $ledger['outstanding'];
$diff = abs(strtotime($od_caldate) - strtotime($cm_colldt));
$day_diff=round($diff/3600/24);
$t = $day_diff;
$r=$resvendor['intrestrate']/365;;
//echo $p.'----'.$t.'----'.$r.'<br>';
$int=round(($p*$t*$r)/100);

 
if($table=='goldloan' || $table=='demand_loan'){
  $prnicipal=0;  
}else{
    if(date("m",strtotime($currdate))==3)
             {       
                $comparedays=28;
             }
             else
             {
                $comparedays=30;
             }
             if($day_diff<$comparedays)
             {
                $prnicipal=0;
             }
             else
             {
               // echo $resvendor['loangiven'].'---'.$plan;
                $prnicipal=$resvendor['loangiven']/$plan;
             }
}
if(($ledger['a_od_pr']>=$ledger['outstanding']) || ((date('d',strtotime($resvendor['loan_given_date']))>$vlgdayy) && (strtotime($resvendor['loan_given_date'])==$od_caldate)))
{
$prnicipal=0;
}
$enddate=date("Y-m-d", strtotime("+$plan month", strtotime($resvendor['loan_given_date'])));       
if(strtotime(date("Y-m",strtotime($cm_colldt)))== strtotime(date("Y-m",strtotime($enddate))))
	{
	$prnicipal = $ledger['outstanding'];
	}
    
    $outstanding=$ledger['outstanding'];
    $a_od_int=$ledger['a_od_int']+$int;
    $a_od_pr=$ledger['a_od_pr']+$prnicipal;
    if($a_od_pr>=$outstanding){
		$a_od_pr=$outstanding;
     }
    $a_tot_od=$a_od_int+$a_od_pr;
    
    $ledger1=mysql_query("select * from `transaction_ledger` where `accountno`='$loan_accno' and `cal_date` like '$my%'");
    $cntledger=mysql_num_rows($ledger1);
    if($cntledger>0){
        $resledger1=mysql_fetch_array($ledger1);
        if($resledger1['collection']<=0){
        $ledgerquery="update `transaction_ledger` set `outstanding`='$outstanding',
                            `a_od_int`='$a_od_int',`a_tot_od`='$a_tot_od',`a_od_pr`='$a_od_pr',`Refundtype`='No Refund'
                             where `accountno`='$loan_accno' and `cal_date`='$cm_colldt'";
         //echo "<br>".$ledgerquery;                           
         mysql_query($ledgerquery)or die(mysql_error());
         $tableupdate="update  `$table` set `odintrest`=$a_od_int,`odprincipal`='$a_od_pr',`amount_topay`='$outstanding',`od_cal_date`='$cm_colldt' where `loan_accno`='$loan_accno'";
        //echo "<br>".$tableupdate;       
           mysql_query($tableupdate)or die(mysql_error());
        }
        
       }else{
           $ledgerquery="insert into `transaction_ledger` set `outstanding`='$outstanding',
                        `a_od_int`='$a_od_int',`a_tot_od`='$a_tot_od',`a_od_pr`='$a_od_pr',
                        `accountno`='$loan_accno' , `cal_date`='$cm_colldt',`Refundtype`='No Refund'";
         //  echo "<br>".$ledgerquery;                
         mysql_query($ledgerquery)or die(mysql_error());
         $tableupdate="update  `$table` set `odintrest`=$a_od_int,`odprincipal`='$a_od_pr',`amount_topay`='$outstanding',`od_cal_date`='$cm_colldt' where `loan_accno`='$loan_accno'";
        echo "<br>".$tableupdate;       
         mysql_query($tableupdate)or die(mysql_error());
        }
        
        
}

else{
echo "select * from `transaction_ledger` where `accountno`='$loan_accno' and `cal_date` like '$my%' order by `cal_date` asc<br>";
    $ledger1=mysql_query("select * from `transaction_ledger` where `accountno`='$loan_accno' and `cal_date` like '$my%' order by `cal_date` asc");
    $resledger=mysql_fetch_array($ledger1);
    $resledger['collection'];
    if($resledger['collection']<=0){
    $outstanding=$resvendor['amount_topay'];
    $p = $outstanding;
    echo $resledger['cal_date'].'----'.$cm_colldt;
    if(strtotime($resledger['cal_date'])<=strtotime($cm_colldt))
    { 
        $diff = abs(strtotime($cm_colldt) - strtotime($resvendor['loan_given_date']));
        $day_diff=round($diff/3600/24);
        $t = $day_diff;
        $r=$resvendor['intrestrate']/365;
        //echo $p.'----'.$t.'----'.$r.'<br>';
        $int=round(($p*$t*$r)/100);
        
        if($table=='goldloan' || $table=='demand_loan'){
            $prnicipal=0;  
          }else{        
            if(date("m",strtotime($currdate))==3)
             {       
                $comparedays=28;
              }
             else{
                $comparedays=30;
             }
             if($day_diff<$comparedays){
                $prnicipal=0;
             }else{
                $prnicipal=$resvendor['loangiven']/$plan;
             }
          
        }
        $a_od_int=$resledger['a_od_int']+$int;
        $a_od_pr=$resledger['a_od_pr']+$prnicipal;
        
        if($a_od_pr>=$outstanding){
            $a_od_pr=$outstanding;
         }
        $a_tot_od=$a_od_int+$a_od_pr;
        
       
         $ledgerquery="update `transaction_ledger` set `outstanding`='$outstanding',
                            `a_od_int`='$a_od_int',`a_tot_od`='$a_tot_od',`a_od_pr`='$a_od_pr',`Refundtype`='No Refund'
                             where `accountno`='$loan_accno' and `cal_date`='$cm_colldt'";
        
         // echo "<br>".$ledgerquery;   
          mysql_query($ledgerquery)or die(mysql_error());
        
         $tableupdate="update  `$table` set `odintrest`=$a_od_int,`odprincipal`='$a_od_pr',`amount_topay`='$outstanding',`od_cal_date`='$cm_colldt' where `loan_accno`='$loan_accno'";
         echo "<br>".$tableupdate;
         mysql_query($tableupdate)or die(mysql_error());
    }  
  }
}
    
}

}




function singlemonthend($table,$currdate,$loan_accno)
{
 
//$getvendor=mysql_query("SELECT * FROM $table where `loancomplited`=0") or die(mysql_error());
$getvendor=mysql_query("SELECT * FROM $table where `loan_accno`='$loan_accno'") or die(mysql_error());
//echo "SELECT * FROM `goldloan` where `loan_accno`='GL2147'<br>";
while($resvendor=mysql_fetch_array($getvendor))
{
 $loan_accno = $resvendor['loan_accno'];
 $my = date("Y-m",strtotime($currdate));
 $vildt=get_villagedate($resvendor['village']);
 $vlgday= date("d",strtotime($vildt));
 $vlgdayy = $vlgday;
 $plan=get_plan($table,$resvendor['id']);
 $cm_colldt = "$my-$vlgday";
 
$predate=date("Y-m", strtotime("-1 month", strtotime($my)));

$cquery="select * from `transaction_ledger` where `accountno`='$loan_accno' and `cal_date` like '$predate%' order by `coll_date` desc";
echo $cquery;
$cquery=mysql_query($cquery);
$cntledger=mysql_num_rows($cquery);
if($cntledger>0)
{
$ledger=mysql_fetch_array($cquery);
$pr_colldt = "$predate-$vlgday";
 if(strtotime($ledger['coll_date'])>strtotime($pr_colldt))
 {
 $od_caldate = $cm_colldt;   
 }else{
 $od_caldate = $pr_colldt;
 }
 
if(strtotime($pr_colldt)>strtolower($resvendor['loan_given_date']))
    {
        $od_caldate = $resvendor['loan_given_date'];
    }
    
echo $od_caldate.'---'.$cm_colldt.'---'.$ledger['coll_date'];

$p = $ledger['outstanding'];
$diff = abs(strtotime($od_caldate) - strtotime($cm_colldt));
$day_diff=round($diff/3600/24);
$t = $day_diff;
$r=$resvendor['intrestrate']/365;;
//echo $p.'----'.$t.'----'.$r.'<br>';
$int=round(($p*$t*$r)/100);

 
if($table=='goldloan' || $table=='demand_loan'){
  $prnicipal=0;  
}else{
    if(date("m",strtotime($currdate))==3)
             {       
                $comparedays=28;
             }
             else
             {
                $comparedays=30;
             }
             if($day_diff<$comparedays)
             {
                $prnicipal=0;
             }
             else
             {
               // echo $resvendor['loangiven'].'---'.$plan;
                $prnicipal=$resvendor['loangiven']/$plan;
             }
}
if(($ledger['a_od_pr']>=$ledger['outstanding']) || ((date('d',strtotime($resvendor['loan_given_date']))>$vlgdayy) && (strtotime($resvendor['loan_given_date'])==$od_caldate)))
{
$prnicipal=0;
}
$enddate=date("Y-m-d", strtotime("+$plan month", strtotime($resvendor['loan_given_date'])));       
if(strtotime(date("Y-m",strtotime($cm_colldt)))== strtotime(date("Y-m",strtotime($enddate))))
	{
	$prnicipal = $ledger['outstanding'];
	}
    
    $outstanding=$ledger['outstanding'];
    $a_od_int=$ledger['a_od_int']+$int;
    $a_od_pr=$ledger['a_od_pr']+$prnicipal;
    if($a_od_pr>=$outstanding){
		$a_od_pr=$outstanding;
     }
    $a_tot_od=$a_od_int+$a_od_pr;
    
    $ledger1=mysql_query("select * from `transaction_ledger` where `accountno`='$loan_accno' and `cal_date` like '$my%'");
    $cntledger=mysql_num_rows($ledger1);
    if($cntledger>0){
        $resledger1=mysql_fetch_array($ledger1);
        if($resledger1['collection']<=0){
        $ledgerquery="update `transaction_ledger` set `outstanding`='$outstanding',
                            `a_od_int`='$a_od_int',`a_tot_od`='$a_tot_od',`a_od_pr`='$a_od_pr',`Refundtype`='No Refund'
                             where `accountno`='$loan_accno' and `cal_date`='$cm_colldt'";
         //echo "<br>".$ledgerquery;                           
         mysql_query($ledgerquery)or die(mysql_error());
         $tableupdate="update  `$table` set `odintrest`=$a_od_int,`odprincipal`='$a_od_pr',`amount_topay`='$outstanding',`od_cal_date`='$cm_colldt' where `loan_accno`='$loan_accno'";
        //echo "<br>".$tableupdate;       
           mysql_query($tableupdate)or die(mysql_error());
        }
        
       }else{
           $ledgerquery="insert into `transaction_ledger` set `outstanding`='$outstanding',
                        `a_od_int`='$a_od_int',`a_tot_od`='$a_tot_od',`a_od_pr`='$a_od_pr',
                        `accountno`='$loan_accno' , `cal_date`='$cm_colldt',`Refundtype`='No Refund'";
         //  echo "<br>".$ledgerquery;                
         mysql_query($ledgerquery)or die(mysql_error());
         $tableupdate="update  `$table` set `odintrest`=$a_od_int,`odprincipal`='$a_od_pr',`amount_topay`='$outstanding',`od_cal_date`='$cm_colldt' where `loan_accno`='$loan_accno'";
        echo "<br>".$tableupdate;       
         mysql_query($tableupdate)or die(mysql_error());
        }
        
        
}

else{
echo "select * from `transaction_ledger` where `accountno`='$loan_accno' and `cal_date` like '$my%' order by `cal_date` asc<br>";
    $ledger1=mysql_query("select * from `transaction_ledger` where `accountno`='$loan_accno' and `cal_date` like '$my%' order by `cal_date` asc");
    $resledger=mysql_fetch_array($ledger1);
    $resledger['collection'];
    if($resledger['collection']<=0){
    $outstanding=$resvendor['amount_topay'];
    $p = $outstanding;
    echo $resledger['cal_date'].'----'.$cm_colldt.'<br/>';
    if(strtotime($resledger['cal_date'])<=strtotime($cm_colldt))
    { 
        $diff = abs(strtotime($cm_colldt) - strtotime($resvendor['loan_given_date']));
        $day_diff=round($diff/3600/24);
        $t = $day_diff;
        $r=$resvendor['intrestrate']/365;
        //echo $p.'----'.$t.'----'.$r.'<br>';
        $int=round(($p*$t*$r)/100);
        
        if($table=='goldloan' || $table=='demand_loan'){
            $prnicipal=0;  
          }else{        
            if(date("m",strtotime($currdate))==3)
             {       
                $comparedays=28;
              }
             else{
                $comparedays=30;
             }
             if($day_diff<$comparedays){
                $prnicipal=0;
             }else{
                $prnicipal=$resvendor['loangiven']/$plan;
             }
          
        }
        $a_od_int=$resledger['a_od_int']+$int;
        $a_od_pr=$resledger['a_od_pr']+$prnicipal;
        
        if($a_od_pr>=$outstanding){
            $a_od_pr=$outstanding;
         }
        $a_tot_od=$a_od_int+$a_od_pr;
        
       
         $ledgerquery="update `transaction_ledger` set `outstanding`='$outstanding',
                            `a_od_int`='$a_od_int',`a_tot_od`='$a_tot_od',`a_od_pr`='$a_od_pr',`Refundtype`='No Refund'
                             where `accountno`='$loan_accno' and `cal_date`='$cm_colldt'";
        
         // echo "<br>".$ledgerquery;   
          mysql_query($ledgerquery)or die(mysql_error());
        
         $tableupdate="update  `$table` set `odintrest`=$a_od_int,`odprincipal`='$a_od_pr',`amount_topay`='$outstanding',`od_cal_date`='$cm_colldt' where `loan_accno`='$loan_accno'";
         echo "<br>".$tableupdate;
         mysql_query($tableupdate)or die(mysql_error());
    }
    else
    {
        $diff = abs(strtotime($cm_colldt) - strtotime($resvendor['loan_given_date']));
        $day_diff=round($diff/3600/24);
        $t = $day_diff;
        $r=$resvendor['intrestrate']/365;
       
        $p = $resvendor['loangiven'];
       //  echo $p.'----'.$t.'----'.$r.'<br>';
        $int=round(($p*$t*$r)/100);
        
        if($table=='goldloan' || $table=='demand_loan'){
            $prnicipal=0;  
          }else{        
            if(date("m",strtotime($currdate))==3)
             {       
                $comparedays=28;
              }
             else{
                $comparedays=30;
             }
             if($day_diff<$comparedays){
                $prnicipal=0;
             }else{
                $prnicipal=$resvendor['loangiven']/$plan;
             }
          
        }
        $a_od_int=$resledger['a_od_int']+$int;
        $a_od_pr=$resledger['a_od_pr']+$prnicipal;
        
        if($a_od_pr>=$outstanding){
            $a_od_pr=$outstanding;
         }
        $a_tot_od=$a_od_int+$a_od_pr;
        
       
         $ledgerquery="update `transaction_ledger` set `outstanding`='$outstanding',
                            `a_od_int`='$a_od_int',`a_tot_od`='$a_tot_od',`a_od_pr`='$a_od_pr',`Refundtype`='No Refund'
                             where `accountno`='$loan_accno' and `cal_date`='$cm_colldt'";
        
          echo "<br>".$ledgerquery;   
          mysql_query($ledgerquery)or die(mysql_error());
        
         $tableupdate="update  `$table` set `odintrest`=$a_od_int,`odprincipal`='$a_od_pr',`amount_topay`='$outstanding',`od_cal_date`='$cm_colldt' where `loan_accno`='$loan_accno'";
         echo "<br>".$tableupdate;
         mysql_query($tableupdate)or die(mysql_error());
    }
    
  }
}
    
}

}    
  
function recalculate($loan_accno,$odcal_dtt,$crdate,$table,$refund,$amount_topay,$odintrest,$odprincipal,$crint,$crprincipal,$ledgerid ,$repaytype)
{
          //   echo "inside".'-----'.$repaytype."<br/>";
    
            $getvendor=mysql_query("SELECT * FROM $table where  `loan_accno`='$loan_accno'") ;
            $resvendor=mysql_fetch_array($getvendor);
            $fetvill=mysql_query("select * from `prefix` where `slno`='$resvendor[village]'");
            $rvill=mysql_fetch_array($fetvill);
            $vildt=$rvill['date'];
            $d= date("d",strtotime($vildt));
            $my=date("Y-m",strtotime($crdate));
            $cal_dt=date("$my-$d");
           
            if(strtotime(date("Y-m",strtotime($odcal_dtt)))>strtotime($my))
            {
                $cal_dtt=$cal_dt;
            }else{
                $cal_dtt=$odcal_dtt;
            }
             echo $odcal_dtt.'----'.$my.'-----'.$cal_dtt.'-----'.$cal_dt.'<br/>'; 
            
            $time=time();
            $a_pre_pri=0;
        if($repaytype!='Forcefully close'){
            echo "Not FC";
            if($refund>0){
                $ramt=$refund;
                if($ramt>=$odintrest){
                    $b_od_int=$odintrest;
                    $ramt=$ramt-$odintrest;
                    if($ramt>=$crint){
                        $b_cur_int=$crint;
                        $ramt=$ramt-$crint;
                        if($ramt>=$odprincipal){
                            $b_od_pri=$odprincipal;
                            $ramt=$ramt-$odprincipal;
                            if($ramt>=$crprincipal){
                                $b_cur_pri=$crprincipal;
                                $ramt=$ramt-$crprincipal;
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
                $a_od_int=($odintrest+$crint)-($b_od_int+$b_cur_int);
                $a_od_pr=($odprincipal+$crprincipal)-($b_od_pri+$b_cur_pri);
                
            }   
            }else{
                 echo "FC";
                $restoutstanding = $amount_topay - ($odprincipal+$crprincipal);
                if($restoutstanding<0){
                    $restoutstanding=0;
                }
                
                
                if($refund>0){
                    $ramt=$refund;
                    if($ramt>=$odprincipal){
                        $b_od_pri=$odprincipal;
                        $ramt=$ramt-$odprincipal;
                        if($ramt>=$crprincipal){
                            $b_cur_pri=$crprincipal;
                            $ramt=$ramt-$crprincipal;
                            if($ramt>=$restoutstanding){
                                $a_pre_pri=$restoutstanding;
                                $ramt=$ramt-$restoutstanding;
                                if($ramt>=$odint){
                                    $b_od_int=$odintrest;
                                    $ramt=$ramt-$odintrest;
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
                    $a_od_int=($odintrest+$crint)-($b_od_int+$b_cur_int);
                    $a_od_pr=($odprincipal+$crprincipal)-($b_od_pri+$b_cur_pri);
                }        
                
            }
                if($a_od_pr<0){
                    $a_od_pr=0;
                }
                if($a_od_int <0){
                    $a_od_int=0;
                }
                $a_tot_od=$a_od_int+$a_od_pr;
                
                echo $outstanding = ($amount_topay-($b_od_pri+$b_cur_pri+$a_pre_pri));
                if($outstanding<=0){
                    $outstanding=0;
                    $a_od_pr=0;
                    $a_od_int=0;
                    $a_tot_od=0;
                }
                
                
                /************************************* Ledger *********************************/
      
                        $ledgerquery="update `transaction_ledger` set `outstanding`='$outstanding',`b_od_int`='$b_od_int',`b_od_pri`='$b_od_pri',
                        `b_cur_int`='$b_cur_int',`b_cur_pri`='$b_cur_pri',`tot_pr`='$tot_pri',`a_pre_pri`='$a_pre_pri',
                        `a_od_int`='$a_od_int',`a_od_pr`='$a_od_pr',`a_tot_od`='$a_tot_od',`collection`='$refund',`coll_date`='$crdate'
                        where `accountno`='$loan_accno' and `cal_date`='$cal_dtt' and id='$ledgerid'";
                        
                echo $ledgerquery.'<br/>';
                
                mysql_query($ledgerquery);
                
                /********************************* Ledger  **************************************/
                
                
            /********************************** table ****************************************/
                                  $complited=0;
                                            //if($outstanding==0){
                                            // $complited=1;
                                            //$msg="You have successfully repayment your loan amount...Your loan a/c has been closed...";	
                                            //}else{
                                            //$complited=0;
                                            //$msg="You have successfully Submitted  your repayment...";
                                            //}
                                            
            $tableupdate="update  `$table` set `odintrest`='$a_od_int',`odprincipal`='$a_od_pr',`amount_topay`='$outstanding',`last_refund_date`='$crdate',`last_refund_amt`='$refund',`od_cal_date`='$odcal_dtt',`loancomplited`='$complited' where `loan_accno`='$loan_accno'";
           // echo $tableupdate."<br/>";
          mysql_query($tableupdate)or die(mysql_error());  
                                            
            /********************************** table ***************************************/                                  
}                                          
?>

