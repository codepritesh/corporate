<?php
include_once("function.php");

/*
//$table='compulsarydeposite';$folio=1;
//$table='recurringdiposite';$folio=3;
//$table='dailydeposit';$folio=4;
//$table='fixeddeposite';$folio=5;
//$table='savingaccount';$folio=2;

$get=mysql_query("select * from $table");
while($resget=mysql_fetch_array($get))
{
    $zdata=mysql_query("select * from `zdata` where `accountno`='$resget[acc_no]'");
    $reszdata=mysql_fetch_array($zdata);
    $basebal=$reszdata['amount'];
     
     // OD Demand Calculation for RD start
     
     $cdt="2016-03-31";
     $startdate=$resget['start_date'];
                        
     $ts1 = strtotime($startdate);
     $ts2 = strtotime($cdt);        
     $year1 = date('Y', $ts1);
     $year2 = date('Y', $ts2);        
     $month1 = date('m', $ts1);
     $month2 = date('m', $ts2);        
     $monthsdif = (($year2 - $year1) * 12) + ($month2 - $month1);
                        
     $odamt=(($monthsdif*$resget['monthly_amount'])-$resget['deposited_amt']);
     if(strtotime($cdt)>strtotime($resget['end_date'])){
        $odamt=(($resget['no_of_installment']*$resget['monthly_amount'])-$resget['deposited_amt']);
     }
     if($odamt<=0){
        $odamt=0;
     }
     // OD Demand Calculation for RD end
     
    echo '<br/>'.$ledger="update `saving_ledger` set `demand`='$odamt' where `acc_no`='$resget[acc_no]'";
    // mysql_query($ledger)or die(mysql_error());
    
    
    // echo '<br/>'.$ledger="insert into `saving_ledger` set `acc_no`='$resget[acc_no]',`cal_date`='$cdt',`coll_date`='$cdt',`demand`='$odamt',`deposited_amt`='0' ,`total_amt`='$basebal' ,`folio_no`='$folio'";
   //  mysql_query($ledger)or die(mysql_error());
}

*/


 
 

$caldate="2016-04-30";$my="2016-04"; $myy="2016-03";
//$caldate="2016-05-31";$my="2016-05"; $myy="2016-04";
//$caldate="2016-06-30";$my="2016-06"; $myy="2016-05";
//$caldate="2016-07-31";$my="2016-07"; $myy="2016-06";
//$caldate="2016-08-31";$my="2016-08"; $myy="2016-07";
//$caldate="2016-09-30";$my="2016-09"; $myy="2016-08";
//$caldate="2016-10-31";$my="2016-10"; $myy="2016-09";

/*
// RD Table

$table='recurringdiposite';$folio=3;

$get=mysql_query("select * from $table");
while($resget=mysql_fetch_array($get))
{
    $dmnd = $resget['monthly_amount'];
    $getpdata=mysql_fetch_array(mysql_query("SELECT * FROM `saving_ledger` WHERE `acc_no`='$resget[acc_no]' and `cal_date` like '$myy%' order by `id` desc"));
    
    if($getpdata['deposited_amt']>=0)  //account has not closed
    {    
    
    $pdmnd=$getpdata['demand'];    
    $odamt = $pdmnd + $resget['monthly_amount'] ;
    if($getpdata['pre-paid']>0){
    $odamt=$odamt-$getpdata['pre-paid'];
        if($odamt<=0){
           $odamt=0; 
        }
    }
    $tbal= $getpdata['total_amt'];
    $cnt=mysql_num_rows(mysql_query("select *  from `transaction` where `accountno`='$resget[acc_no]' and `date` like '$my%'"));
    if($cnt>0){
        if($cnt==1){
            
            $trndata=mysql_fetch_array(mysql_query("select *  from `transaction` where `accountno`='$resget[acc_no]' and `date` like '$my%'"));
             $tot_amt = $tbal + $trndata['amount'];
             if($trndata['amount']>$odamt){
                $pre=$trndata['amount']-$odamt;
            }else{
                $pre=0;
            }
             echo '<br/>'.$ledger="insert into `saving_ledger` set `acc_no`='$resget[acc_no]',`cal_date`='$caldate',`coll_date`='$trndata[date]',`demand`='$odamt',`deposited_amt`='$trndata[amount]',`pre-paid`='$pre' ,`total_amt`='$tot_amt' ,`folio_no`='$folio'";
            //  mysql_query($ledger)or die(mysql_error());
        }else{
             echo '<br/>'.$resget['acc_no'];
             $trn=mysql_query("select *  from `transaction` where `accountno`='$resget[acc_no]' and `date` like '$my%'");
             while($trndata=mysql_fetch_array($trn))
             {
                if($trndata['amount']>$odamt){
                $pre=$trndata['amount']-$odamt;
                }else{
                    $pre=0;
                }
                $tot_amt = $tbal + $trndata['amount'];
                if($tot_amt<=0){
                   $tot_amt=0; 
                }
                echo '<br/>'.$ledger="insert into `saving_ledger` set `acc_no`='$resget[acc_no]',`cal_date`='$caldate',`coll_date`='$trndata[date]',`demand`='$odamt',`deposited_amt`='$trndata[amount]' ,`pre-paid`='$pre' ,`total_amt`='$tot_amt' ,`folio_no`='$folio'";               // mysql_query($ledger)or die(mysql_error());
               //  mysql_query($ledger)or die(mysql_error());
               $tbal=$tot_amt;
               $odamt = $odamt - $trndata['amount'];
               if($odamt<=0){
                $odamt = 0;
               }
             } 
        }
    }else{
         $tot_amt = $tbal;
         echo '<br/>'.$ledger="insert into `saving_ledger` set `acc_no`='$resget[acc_no]',`cal_date`='$caldate',`demand`='$odamt',`deposited_amt`='0',`total_amt`='$tot_amt' ,`folio_no`='$folio'";
        // mysql_query($ledger)or die(mysql_error());
               
    }
 }
}

*/

// CS Table


$table='compulsarydeposite'; $folio=1;

$get=mysql_query("select * from $table");
while($resget=mysql_fetch_array($get))
{
    echo '<br/>'.$resget['acc_no']; 
    $dmnd = $resget['deposited_amt'];
    $getpdata=mysql_fetch_array(mysql_query("SELECT * FROM `saving_ledger` WHERE `acc_no`='$resget[acc_no]' and `cal_date` like '$myy%' order by `id` desc"));
    
    if($getpdata['deposited_amt']>=0)  // Not Closed 
    {
        
        $pdmnd=$getpdata['demand'];
        $odamt = $pdmnd + $resget['deposited_amt'] ;
        
        if($getpdata['pre-paid']>0)
        {
            $odamt=$odamt-$getpdata['pre-paid'];
                if($odamt<=0){
                   $odamt=0; 
                }
            }
            
        $tbal= $getpdata['total_amt'];
        $cnt=mysql_num_rows(mysql_query("select *  from `transaction` where `accountno`='$resget[acc_no]' and `date` like '$my%'"));
        if($cnt>0)
        {
           $trndata=mysql_fetch_array(mysql_query("select *  from `transaction` where `accountno`='$resget[acc_no]' and `date` like '$my%'"));
           if($cnt==1){                
                  if($trndata['amount']>$odamt){
                $pre=$trndata['amount']-$odamt;
                }else{
                    $pre=0;
                }              
                $tot_amt = $tbal + $trndata['amount'];             
                echo '<br/>'.$ledger="insert into `saving_ledger` set `acc_no`='$resget[acc_no]',`cal_date`='$caldate',`coll_date`='$trndata[date]',`demand`='$odamt',`deposited_amt`='$trndata[amount]' ,`pre-paid`='$pre' ,`total_amt`='$tot_amt' ,`folio_no`='$folio'";
                 mysql_query($ledger)or die(mysql_error());
            }else{
                 echo '<br/>'.$resget['acc_no'];
                 $trn=mysql_query("select *  from `transaction` where `accountno`='$resget[acc_no]' and `date` like '$my%'");
                 while($trndata=mysql_fetch_array($trn))
                 {                 
                    if($trndata['amount']>$odamt){
                    $pre=$trndata['amount']-$odamt;
                    }else{
                        $pre=0;
                    }  
                    $tot_amt = $tbal + $trndata['amount'];
                    if($tot_amt<=0){
                       $tot_amt=0; 
                    }
                    echo '<br/>'.$ledger="insert into `saving_ledger` set `acc_no`='$resget[acc_no]',`cal_date`='$caldate',`coll_date`='$trndata[date]',`demand`='$odamt',`deposited_amt`='$trndata[amount]' ,`pre-paid`='$pre' ,`total_amt`='$tot_amt' ,`folio_no`='$folio'";
                    mysql_query($ledger)or die(mysql_error());
                   
                   $tbal=$tot_amt;
                   $odamt = $odamt - $trndata['amount'];
                   if($odamt<=0){
                    $odamt = 0;
                   }
                 } 
            }
        }else{
             $tot_amt = $tbal;
             echo '<br/>'.$ledger="insert into `saving_ledger` set `acc_no`='$resget[acc_no]',`cal_date`='$caldate',`demand`='$odamt',`deposited_amt`='0',`total_amt`='$tot_amt' ,`folio_no`='$folio'";
             mysql_query($ledger)or die(mysql_error());
                   
        }  
    }
   
}

/*
// Daily Table

$table='dailydeposit';$folio=4;

$startdate="2016-04-01";
$enddate="2016-10-01";
$diff=abs(strtotime($enddate)-strtotime($startdate));
echo $day_diff=round($diff/3600/24);     
$my="2016-04-01";
$myy="2016-03-31";
for($i=0;$i<$day_diff;$i++)
{
    $get=mysql_query("select * from $table");
    while($resget=mysql_fetch_array($get))
    {
        echo '<br/>'.$resget['acc_no']; 
        $dmnd = $resget['deposited_amt'];
        $getpdata=mysql_fetch_array(mysql_query("SELECT * FROM `saving_ledger` WHERE `acc_no`='$resget[acc_no]' and `cal_date`='$myy'"));
        
        if($getpdata['deposited_amt']>=0)
        {
            
            $pdmnd = $getpdata['demand'];
            $odamt = $pdmnd + $resget['deposited_amt'] ;
            

            if($getpdata['pre-paid']>0){
            $odamt=$odamt-$getpdata['pre-paid'];
                if($odamt<=0){
                   $odamt=0; 
                }
            }
            
            
            $tbal = $getpdata['total_amt'];
            $cnt=mysql_num_rows(mysql_query("select *  from `transaction` where `accountno`='$resget[acc_no]' and `date`='$my'"));
            if($cnt>0)
            {
                if($cnt==1){
                    $trndata=mysql_fetch_array(mysql_query("select *  from `transaction` where `accountno`='$resget[acc_no]' and `date`='$my'"));
                    if($trndata['amount']>$odamt){
                    $pre=$trndata['amount']-$odamt;
                    }else{
                        $pre=0;
                    }  
                    
                     $tot_amt = $tbal + $trndata['amount'];             
                     echo '<br/>'.$ledger="insert into `saving_ledger` set `acc_no`='$resget[acc_no]',`cal_date`='$caldate',`coll_date`='$trndata[date]',`demand`='$odamt',`deposited_amt`='$trndata[amount]',`pre-paid`='$pre'  ,`total_amt`='$tot_amt',`pre-paid`='$pre' ,`folio_no`='$folio'";
                    // mysql_query($ledger)or die(mysql_error());
                }else{
                     echo '<br/>'.$resget['acc_no'];
                     $trn=mysql_query("select *  from `transaction` where `accountno`='$resget[acc_no]' and `date`='$my'");
                     while($trndata=mysql_fetch_array($trn))
                     {
                         if($trndata['amount']>$odamt){
                            $pre=$trndata['amount']-$odamt;
                            }else{
                                $pre=0;
                            }  
                        $tot_amt = $tbal + $trndata['amount'];
                        if($tot_amt<=0){
                           $tot_amt=0; 
                        }
                        echo '<br/>'.$ledger="insert into `saving_ledger` set `acc_no`='$resget[acc_no]',`cal_date`='$caldate',`coll_date`='$trndata[date]',`demand`='$odamt',`deposited_amt`='$trndata[amount]' ,`pre-paid`='$pre' ,`total_amt`='$tot_amt' ,`pre-paid`='$pre' ,`folio_no`='$folio'";
                       // mysql_query($ledger)or die(mysql_error());
                       
                       $tbal=$tot_amt;
                       $odamt = $odamt - $trndata['amount'];
                       if($odamt<=0){
                        $odamt = 0;
                       }
                     } 
                }
            }else{
                 $tot_amt = $tbal;
                 echo '<br/>'.$ledger="insert into `saving_ledger` set `acc_no`='$resget[acc_no]',`cal_date`='$caldate',`demand`='$odamt',`deposited_amt`='0',`total_amt`='$tot_amt' ,`folio_no`='$folio'";
                // mysql_query($ledger)or die(mysql_error());
                       
            }  
        }       
    }

  echo "<br/>";
  echo  $myy= date('Y-m-d', strtotime($my));
  echo  $my= date('Y-m-d', strtotime('+1 day', strtotime($my)));
  
}


/*
// VS Table

$table='savingaccount';$folio=2;

$get=mysql_query("select * from $table");
while($resget=mysql_fetch_array($get))
{
    echo '<br/>'.$resget['acc_no']; 
    
    $getpdata=mysql_fetch_array(mysql_query("SELECT * FROM `saving_ledger` WHERE `acc_no`='$resget[acc_no]' and `cal_date` like '$myy%' order by `id` desc"));   
    $tbal= $getpdata['total_amt'];
    $cnt=mysql_num_rows(mysql_query("select *  from `transaction` where `accountno`='$resget[acc_no]' and `date` like '$my%'"));
        if($cnt>0)
        {          
                 echo '<br/>'.$resget['acc_no'];
                 $trn=mysql_query("select *  from `transaction` where `accountno`='$resget[acc_no]' and `date` like '$my%'");
                 while($trndata=mysql_fetch_array($trn))
                 {                
                    $tot_amt = $tbal + $trndata['amount'];
                    if($tot_amt<=0){
                       $tot_amt=0; 
                    }
                    echo '<br/>'.$ledger="insert into `saving_ledger` set `acc_no`='$resget[acc_no]',`cal_date`='$caldate',`coll_date`='$trndata[date]',`deposited_amt`='$trndata[amount]' ,`total_amt`='$tot_amt' ,`folio_no`='$folio'";
                   // mysql_query($ledger)or die(mysql_error()); 
                   $tbal=$tot_amt;
                 } 
            
        }
}

*/

?>