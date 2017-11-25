<?php
ini_set('display_errors',0);
session_start();
mysql_connect('localhost','root','');
mysql_select_db('corporate_Aug');
//mysql_select_db('corporate_client');
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
//$getvendor=mysql_query("SELECT * FROM $table where `loancomplited`=0") or die(mysql_error());
$getvendor=mysql_query("SELECT * FROM `goldloan` where `loan_accno`='GL2147'") or die(mysql_error());
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
    if(date("m",strtotime($currdate))==2)
             {       
                $comparedays=28;
              }
             else{
                $comparedays=30;
             }
             if($day_diff<$comparedays){
                $prnicipal=0;
             }else{
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
            if(date("m",strtotime($currdate))==2)
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

?>

