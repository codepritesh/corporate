<?php
include_once("function.php");
$currdate=date("Y-m-d",strtotime($_GET['date']));

monthend('goldloan',$currdate);

/*monthend('demand_loan',$currdate);

monthend('businessloan',$currdate);

monthend('enterpriseloan',$currdate);

monthend('agricultureloan',$currdate);

monthend('grouploan',$currdate);
*/

/*

$getvendor=mysql_query("SELECT * FROM $table where `loancomplited`=0") or die(mysql_error());
while($resvendor=mysql_fetch_array($getvendor))
{
 $loan_accno = $resvendor['loan_accno'];
 $my = date("Y-m",strtotime($currdate));
 $vildt=get_villagedate($resvendor['village']);
 $vlgday= date("d",strtotime($vildt));
 $plan=get_plan($table,$resvendor['id']);
 $cm_colldt = "$my-$vlgday";
 
$predate=date("Y-m", strtotime("-1 month", strtotime($currdate)));
$cquery="select * from `transaction_ledger` where `accountno`='$loan_accno' and `cal_date` like '$predate%' order by `coll_date` desc";
$cquery=mysql_query($cquery);
$cntledger=mysql_num_rows($cquery);
if($cntledger>0){
$ledger=mysql_fetch_array($cquery);
$pr_colldt = "$predate-$vlgday";
 if(strtotime($ledger['coll_date'])>strtotime($pr_colldt))
 {    
 $od_caldate = $pr_colldt;
 }else{
  $od_caldate = $cm_colldt;  
 }

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
$prnicipal=$resvendor['loangiven']/$plan;
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
                            `a_od_int`='$a_od_int',`a_tot_od`='$a_tot_od',`a_od_pr`='$a_od_pr'
                             where `accountno`='$loan_accno' and `cal_date`='$cm_colldt'";
        }
       }else{
           $ledgerquery="insert into `transaction_ledger` set `outstanding`='$outstanding',
                        `a_od_int`='$a_od_int',`a_tot_od`='$a_tot_od',`a_od_pr`='$a_od_pr',
                        `accountno`='$loan_accno' and `cal_date`='$cm_colldt'";
        }
      // echo "<br>".$ledgerquery;    
        mysql_query($ledgerquery)or die(mysql_error());
         $tableupdate="update  `$table` set `odintrest`=$a_od_int,`odprincipal`='$a_od_pr',`amount_topay`='$outstanding',`od_cal_date`='$cm_colldt' where `loan_accno`='$loan_accno'";
       // echo "<br>".$tableupdate;       
        mysql_query($tableupdate)or die(mysql_error());
}
else{
    
    $ledger1=mysql_query("select * from `transaction_ledger` where `accountno`='$loan_accno' and `cal_date` like '$my%'");
    $resledger=mysql_fetch_array($ledger1);
    if($resledger['collection']<=0){
        
    $outstanding=$resledger['outstanding'];    
    
    $p = $outstanding;
    $diff = abs(strtotime($ledger['cal_date']) - strtotime($currdate));
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
         if($day_diff>=$comparedays){
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
                        `a_od_int`='$a_od_int',`a_tot_od`='$a_tot_od',`a_od_pr`='$a_od_pr'
                         where `accountno`='$loan_accno' and `cal_date`='$resledger[cal_date]'";
     // echo "<br>".$ledgerquery;                   
      mysql_query($ledgerquery)or die(mysql_error());
    
    $tableupdate="update  `$table` set `odintrest`=$a_od_int,`odprincipal`='$a_od_pr',`amount_topay`='$outstanding',`od_cal_date`='$cm_colldt' where `loan_accno`='$loan_accno'";
    
      //   echo "<br>".$tableupdate;
     mysql_query($tableupdate)or die(mysql_error());
            
    }  
    
}
    
}

*/

// RD Table
/*
$get=mysql_query("select * from recurringdiposite where `status`=0");
while($resget=mysql_fetch_array($get))
{
    $folio=3;
    $dmnd = $resget['monthly_amount'];
    $getpdata=mysql_fetch_array(mysql_query("SELECT *  FROM `saving_ledger` WHERE `acc_no`='$resget[acc_no]' order by `cal_date` desc"));
    
    if(strtotime(date("Y-m",strtotime($getpdata['coll_date'])))<strtotime(date("Y-m",strtotime($currdate))))
    {      
    if($getpdata['deposited_amt']>=0)  //account has not closed
    {  
    $pdmnd=$getpdata['demand'];    
    
     if(strtotime(date("Y-m",strtotime($getpdata['coll_date'])))==strtotime(date("Y-m",strtotime($currdate))))
            {
                $odamt = $pdmnd;          
            }
            else{
            $odamt = $pdmnd + $resget['monthly_amount'] ;
            }
    if($getpdata['prepaid']>0){
    $odamt=$odamt-$getpdata['prepaid'];
        if($odamt<=0){
           $odamt=0; 
        }
    }
     $caldate=date("Y-m-t",strtotime($currdate));  
    $tbal= $getpdata['total_amt'];
         $tot_amt = $tbal;
         $ledger="insert into `saving_ledger` set `acc_no`='$resget[acc_no]',`cal_date`='$caldate',`demand`='$odamt',`deposited_amt`='0',`total_amt`='$tot_amt' ,`folio_no`='$folio'";
         mysql_query($ledger)or die(mysql_error());
     }
   }
 }


// CS Table

$get=mysql_query("select * from compulsarydeposite where `status`=0");
while($resget=mysql_fetch_array($get))
{
    $folio=1;
   $getpdata=mysql_fetch_array(mysql_query("SELECT *  FROM `saving_ledger` WHERE `acc_no`='$resget[acc_no]' order by `cal_date` desc"));
    
     if(strtotime(date("Y-m",strtotime($getpdata['coll_date']))) < strtotime(date("Y-m",strtotime($currdate)))){       
          $pdmnd=$getpdata['demand'];
         if(strtotime(date("Y-m",strtotime($getpdata['coll_date'])))==strtotime(date("Y-m",strtotime($currdate))))
            {
                $odamt = $pdmnd;          
            }
            else{
            $odamt = $pdmnd + $resget['deposited_amt'];  
            }
        if($getpdata['prepaid']>0){
            $odamt=$odamt-$getpdata['prepaid'];
                if($odamt<=0){
                   $odamt=0; 
                }
            }
          $caldate=date("Y-m-t",strtotime($currdate));     
        $tbal= $getpdata['total_amt'];
        $ledger="insert into `saving_ledger` set `acc_no`='$resget[acc_no]',`cal_date`='$caldate',`demand`='$odamt',`deposited_amt`='0',`total_amt`='$tbal' ,`folio_no`='$folio'";
        mysql_query($ledger)or die(mysql_error());
     }
}
*/
echo "OK";

?>