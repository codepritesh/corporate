<?php
include_once("function.php");
ini_set("display_errors",1);
if(isset($_POST['monthdata']))
{
    $val=explode('|', $_POST['monthval']);
    $currdate=$val[0];    $my=$val[1];    $myy=$val[2]; $mya=$val[3];
    
    $accno=$_POST['accno'];   
    
    $str=substr($accno, 0, 2);
    if($str=='GL'){ $table="goldloan";}
    else if($str=='DL'){ $table="demand_loan";}
    else if($str=='BL'){ $table="businessloan";}
    else if($str=='AL'){ $table="agricultureloan";}
    else if($str=='EL'){ $table="enterpriseloan";}
    else if($str=='GR'){ $table="grouploan";}
    
    $dataquery="SELECT cal_date,a_od_int,a_od_pr,outstanding,coll_date FROM `transaction_ledger` WHERE `accountno`='$accno' and `cal_date` LIKE '$my%' order by `cal_date` desc";
    $data=mysql_fetch_array(mysql_query($dataquery));
    //echo $data['outstanding'];
    if($data['outstanding']=='0.00')
    {
    $dataquery1="SELECT cal_date,a_od_int,a_od_pr,outstanding,coll_date FROM `transaction_ledger` WHERE `accountno`='$accno' and `cal_date` LIKE '$my%' order by `cal_date` asc";
    $data1=mysql_fetch_array(mysql_query($dataquery1));
    
    $ledgerquery="update `transaction_ledger` set `outstanding`='$data1[outstanding]'
                             where `accountno`='$accno' and `cal_date`='$data[cal_date]'";
           
    mysql_query($ledgerquery)or die(mysql_error());
    
    $dataquery="SELECT cal_date,a_od_int,a_od_pr,outstanding,coll_date FROM `transaction_ledger` WHERE `accountno`='$accno' and `cal_date` LIKE '$my%' order by `cal_date` desc";
    
    $data=mysql_fetch_array(mysql_query($dataquery));
    
    }
    if(strtotime($data['coll_date'])>strtotime($data['cal_date']))
    {
       $d=date("d",strtotime($data['cal_date']));
       $date="$mya-$d";
    }else{
          $date=$data['cal_date'];
    }
    // echo $data['outstanding'];
    if($data['outstanding']!=0)
    {  
       $updatequery="update  `$table` set `odintrest`='$data[a_od_int]',`odprincipal`='$data[a_od_pr]',`amount_topay`='$data[outstanding]',`od_cal_date`='$date' where `loan_accno`='$accno'";
        $updt=mysql_query($updatequery);
        
        
    }
}

if(isset($_POST['fclose']))
{
$val=explode('|', $_POST['monthval']);
//$currdate=$val[0];
$my=$val[1];    $myy=$val[2]; $mya=$val[3];
    
$accno=$_POST['accno'];

$str=substr($accno, 0, 2);
if($str=='GL'){ $table="goldloan";}
else if($str=='DL'){ $table="demand_loan";}
else if($str=='BL'){ $table="businessloan";}
else if($str=='AL'){ $table="agricultureloan";}
else if($str=='EL'){ $table="enterpriseloan";}
else if($str=='GR'){ $table="grouploan";}

$colldt=date("Y-m-d",strtotime($_POST['collectiondate']));  
$collection=$_POST['collection'];
//echo "SELECT * FROM `transaction_ledger` WHERE `coll_date` = '$colldt' and `collection`='$collection' and `accountno`='$accno'";
$srch=mysql_query("SELECT * FROM `transaction_ledger` WHERE `coll_date` = '$colldt' and `collection`='$collection' and `accountno`='$accno'");
$cnt=mysql_num_rows($srch);
if($cnt==1)
{          
      $coll=mysql_query("SELECT * FROM `transaction_ledger` WHERE `coll_date` LIKE '$my%' and `accountno`='$accno'");
      $rcoll=mysql_fetch_array($srch);
            
            $ymcurrdate=$my;
              
            $coll_amt=$rcoll['collection'];
            $coll_date=$rcoll['coll_date'];
               
               
               $getdate=mysql_fetch_array(mysql_query("SELECT * FROM `transaction_ledger` WHERE `accountno`='$accno' and `coll_date` != '$colldt' and `cal_date`<'$colldt' and `coll_date`<'$colldt' order by `cal_date` desc"));
               $frmcal_date=$getdate['cal_date'];
                
                $qwe=mysql_query("SELECT * FROM $table where `loan_accno`='$accno'");
                $res=mysql_fetch_array($qwe);
                
                $fetvill=mysql_query("select * from `prefix` where `slno`='$res[village]'");
                $rvill=mysql_fetch_array($fetvill);
                $vlgday= date("d",strtotime($rvill['date']));
                
                
                $cal_dt=date("$ymcurrdate-$vlgday");
                $cal_dtt=$cal_dt;
                
                //echo $frmcal_date.'---'.$rcoll['cal_date'];
                $diff = abs(strtotime($frmcal_date) - strtotime($rcoll['cal_date']));
                $day_diff=round($diff/3600/24);
                
                $p=$res['amount_topay'];
                $t=$day_diff;
                $r=$res['intrestrate']/365;
                
               // echo '<br/>'.$p.'*'.$t.'*'.$r;
                $curint=round(($p*$t*$r)/100);
                
                
                 if($table=='goldloan' || $table=='demand_loan')
                    {
                     $plan=$res['plan'];
                     }
                    else{
                             $no=$res['plan'];
                             $vd=$vlgday;
                             $ldd = date("d",strtotime($res['loan_given_date']));
                             if($ldd <= $vd)
                             {
                               $plan=$no;
                             }
                             else{
                                     if(strtotime($res['loan_given_date']) < strtotime("2015-11-30"))
                                         {  $plan=$no;   }
                                     else{  $plan=$no-1; }
                                 }
                     }
                     
                   if(date("m")==3){
                    $comparedays=28;
                   }
                   else{
                     $comparedays=30;
                   }
                 $enddate=date("Y-m-d", strtotime("+$plan month", strtotime($res['loan_given_date'])));
                 
                 if($table=='goldloan' || $table=='demand_loan' || ($res['odprincipal']>=$res['amount_topay'])
                 || (strtotime(date("Y-m",strtotime($res['od_cal_date'])))>=strtotime($ymcurrdate)) || $day_diff < $comparedays)
                 {                        
                 $curpri=0;
                 }
                 else{                         
                  $curpri=$res['loangiven']/$plan;  
                 }
                 
                // echo $rcoll['cal_date'].'----'.$enddate;
                 
                 if(strtotime(date("Y-m",strtotime($rcoll['cal_date'])))==strtotime(date("Y-m",strtotime($enddate))))
                 {                         
                 $curpri = $res['amount_topay'];
                 }
                 if((strtotime($res['od_cal_date']) == strtotime($rcoll['cal_date'])) ||
                 (strtotime("Y-m",strtotime($rcoll['cal_date']))> strtotime("Y-m",strtotime($colldt))))
                 {
                     $curpri=0;
                     $curint=0;
                  }
                  
                 // echo "Check CURRENT".$curpri.'----'.$curint.'-----'.$res['odintrest'].'----'.$res['odprincipal'];  
                  
                    if(strtotime($colldt)>strtotime($rcoll['cal_date']) && strtotime($rcoll['cal_date'])>=strtotime($res['cal_date'])){
                      
                        $odint=$res['odintrest']+$curint;
                         if($odint>$res['amount_topay']){
                            $odint=$res['odintrest'];  
                         }
                         $odpri=$res['odprincipal']+$curpri;  
                         //next month Calculation
                         
                         $nxdate=date("Y-m-d", strtotime("+1 month", strtotime($rcoll['cal_date'])));
                         $cal_dtt=$nxdate;
                         $diff = abs(strtotime($nxdate) - strtotime($rcoll['cal_date']));
                         $day_diff=round($diff/3600/24);            
                         $p=$res['amount_topay'];
                         $t=$day_diff;
                         $r=$res['intrestrate']/365;
                         $curint=round(($p*$t*$r)/100);
                         if($table=='goldloan' || $table=='demand_loan' || ($res['odprincipal']>=$res['od_cal_date']))
                         {
                         $curpri=0;
                         }else{
                           $curpri=$res['loangiven']/$plan;;  
                         }
                      }else{
                        
                         $odint=$res['odintrest'];
                         $odpri=$res['odprincipal'];
                     }
                  
                 // echo "CURRENT".$curpri.'----'.$curint.'---'.$odint.'----'.$odpri.'----'.$collection;
                    
                 //---------------------Ladger Calculation Start---------------------------------
                   
                   $restoutstanding = $res['amount_topay'] - ($odpri+$curpri);
                   if($restoutstanding<0){
                    $restoutstanding=0;
                   }
                   
                                 
                    if($collection>0){
                       $ramt=$collection;
                       if($ramt>=$odpri){
                        $b_od_pri=$odpri;
                         $ramt=$ramt-$odpri;
                           if($ramt>=$curpri){
                               $b_cur_pri=$curpri;
                               $ramt=$ramt-$curpri;
                               if($ramt>=$restoutstanding){
                                $a_pre_pri=$restoutstanding;
                                   $ramt=$ramt-$restoutstanding;
                                   if($ramt>=$odint){
                                       $b_od_int=$odint;
                                       $ramt=$ramt-$odint;
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
                // echo "*****".$b_od_pri."---".$b_cur_pri.'----'.$b_od_int."---".$b_cur_int;
                
                   $tot_pri = $b_od_pri + $b_cur_pri + $a_pre_pri ;
                   $a_od_int=($odint+$curint)-($b_od_int+$b_cur_int);
                   $a_od_pr=($odpri+$curpri)-($b_od_pri+$b_cur_pri);
                       
                  if($a_od_pr<0){
                    $a_od_pr=0;
                  }
                      
                  if($b_od_int<0){
                    $b_od_int=0;
                  }
                   $a_tot_od=$a_od_int+$a_od_pr;
                       
                   $outstanding = ($res['amount_topay']-($b_od_pri+$b_cur_pri+$a_pre_pri));
                   if($outstanding<=0){
                     $outstanding=0;
                     $a_od_pr=0;
                     $a_od_int=0;
                     $a_tot_od=0;
                   }
                   
                 //---------------------Ladger Calculation End---------------------------------//
                 
                     $collection=$collection;
                     $trn_date=$rcoll['coll_date'];
                     
                 // ------------------- All respective table update start ---------------------------//
              $ledgerquery="update `transaction_ledger` set `b_od_int`='$b_od_int',`b_cur_int`='$b_cur_int',
                                   `b_od_pri`='$b_od_pri',`b_cur_pri`='$b_cur_pri',`a_pre_pri`='$a_pre_pri',`tot_pr`='$tot_pri',
                                   `outstanding`='$outstanding',`a_od_int`='$a_od_int',`a_tot_od`='$a_tot_od',`a_od_pr`='$a_od_pr',`collection`='$collection',`coll_date`='$trn_date' where `accountno`='$accno' and `id`='$rcoll[id]'";
                                   
                 mysql_query($ledgerquery);
                        
                        if($outstanding==0){
                        $complited=1;
                        }else{
                          $complited=0;
                        }
                            if($cal_dt==''){
                              $cal_dt=date("$ymcurrdate-$vlgday");   
                            }
                        $tableupdate="update  `$table` set `odintrest`='$a_od_int',`odprincipal`='$a_od_pr',`amount_topay`='$outstanding',`last_refund_date`='$trn_date',`last_refund_amt`='$collection',
                            `od_cal_date`='$cal_dtt',`loancomplited`='$complited' where `loan_accno`='$accno'";
                           
                        mysql_query($tableupdate)or die(mysql_error());
                               
                           $traint=$b_od_int+$b_cur_int;
                           $traprn=$b_od_pri+$a_pre_pri+$b_cur_pri;
                             
                            // transaction table upadte start
                            
                             $trn=mysql_query("select * from `transaction` where `accountno`='$accno' and `date`='$trn_date'")or die(mysql_error());;
                             $cnttrn=mysql_num_rows($trn);
                             
                    
                    if($cnttrn>0){  // intrest and principal                
                         $cntamt=mysql_num_rows(mysql_query("select * from `transaction` where `accountno`='$accno' and `date`='$trn_date' and `amount`>0"));
                         $cntint=mysql_num_rows(mysql_query("select * from `transaction` where `accountno`='$accno' and `date`='$trn_date' and `interest`>0"));
                        
                        if($traprn>0){
                            
                            if($cntamt>0)
                            {
                               //  echo "<br/><br/>UPDATE `transaction` set `amount`='$traprn',`details`='$table Refund' where `accountno`='$accno' and `date`='$trn_date' and `amount`>0 |<br/>";
                                
                                 mysql_query("UPDATE `transaction` set `amount`='$traprn',`details`='$table Refund' where `accountno`='$accno' and `date`='$trn_date' and `amount`>0");
                            }else{
                                 $time=time();
                             //    echo "<br/><br/>INSERT into `transaction` set `transactionid`='$time',`amount`='$traprn',`details`='$table Refund',`accountno`='$accno',`date`='$trn_date' |<br/>";
                                
                                 mysql_query("INSERT into `transaction` set `transactionid`='$time',`amount`='$traprn',`details`='$table Refund',`accountno`='$accno',`date`='$trn_date'");
                            }
                        }
                        
                        if($traint>0){
                            if($cntint>0)
                            {
                              //  echo "<br/><br/>UPDATE `transaction` set `interest`='$traint',`details`='$table Interest' where `accountno`='$accno' and `date`='$trn_date' and `interest`>0 |<br/>";
                                
                                mysql_query("UPDATE `transaction` set `interest`='$traint',`details`='$table Interest' where `accountno`='$accno' and `date`='$trn_date' and `interest`>0");
                            }else{
                                 $time=time();
                               //  echo "<br/><br/>INSERT into `transaction` set `transactionid`='$time',`interest`='$traint',`details`='$table Interest',`accountno`='$accno',`date`='$trn_date' |<br/>";
                              
                                 mysql_query("INSERT into `transaction` set `transactionid`='$time',`interest`='$traint',`details`='$table Interest',`accountno`='$accno',`date`='$trn_date'");
                            }
                        }
                                       
                      }
                      
                      else{
                               $time=time();
                               if($traprn>0){
                              // echo "<br/><br/>INSERT into `transaction` set `transactionid`='$time',`amount`='$traprn',`details`='$table Refund',`accountno`='$accno',`date`='$trn_date' |<br/>";
                                
                               mysql_query("INSERT into `transaction` set `transactionid`='$time',`amount`='$traprn',`details`='$table Refund',`accountno`='$accno',`date`='$trn_date'");
                             
                               }
                               
                             if($traint>0){
                                // echo "<br/><br/>INSERT into `transaction` set `transactionid`='$time',`interest`='$traint',`details`='$table Interest',`accountno`='$accno',`date`='$trn_date' |<br/>";
                              
                               mysql_query("INSERT into `transaction` set `transactionid`='$time',`interest`='$traint',`details`='$table Interest',`accountno`='$accno',`date`='$trn_date'");
                             }
                      }
                      
                }
          }
          else    //No link
          {
             $time=time();
             $qwe=mysql_query("SELECT * FROM $table where `loan_accno`='$accno'");
             $res=mysql_fetch_array($qwe);
                
             $fetvill=mysql_query("select * from `prefix` where `slno`='$res[village]'");
             $rvill=mysql_fetch_array($fetvill);
             $vlgday= date("d",strtotime($rvill['date']));
                
             $ymcurrdateee = date("Y-m",strtotime($colldt));   
             $cal_dateee=date("$ymcurrdateee-$vlgday");
                
            $chked=mysql_query("SELECT * FROM `transaction_ledger` WHERE `cal_date` LIKE '$my%' and `accountno`='$accno'");
            $existcnt = mysql_num_rows($chked);
            if($existcnt==0)
            {
                 mysql_query("INSERT into `transaction_ledger` set `transactionid`='$time',`accountno`='$accno',`coll_date`='$colldt',`cal_date`='$cal_dateee',`collection`='$collection'");
            }elseif($existcnt==1)
            {
                 mysql_query("UPDATE `transaction_ledger` set `coll_date`='$colldt',`collection`='$collection' WHERE `cal_date` LIKE '$my%' and `accountno`='$accno'");
            }
            
            
            $coll=mysql_query("SELECT * FROM `transaction_ledger` WHERE `coll_date` LIKE '$my%' and `accountno`='$accno'");
            $rcoll=mysql_fetch_array($srch);
            
            $ymcurrdate=$my;
              
            $coll_amt=$rcoll['collection'];
            $coll_date=$rcoll['coll_date'];
               
               
               $getdate=mysql_fetch_array(mysql_query("SELECT * FROM `transaction_ledger` WHERE `accountno`='$accno' and `coll_date` != '$colldt' and `cal_date`<'$colldt' and `coll_date`<'$colldt' order by `cal_date` desc"));
               $frmcal_date=$getdate['cal_date'];
                
                $cal_dt=date("$ymcurrdate-$vlgday");
                $cal_dtt=$cal_dt;
                
                //echo $frmcal_date.'---'.$rcoll['cal_date'];
                $diff = abs(strtotime($frmcal_date) - strtotime($rcoll['cal_date']));
                $day_diff=round($diff/3600/24);
                
                $p=$res['amount_topay'];
                $t=$day_diff;
                $r=$res['intrestrate']/365;
                
               // echo '<br/>'.$p.'*'.$t.'*'.$r;
                $curint=round(($p*$t*$r)/100);
                
                
                 if($table=='goldloan' || $table=='demand_loan')
                    {
                     $plan=$res['plan'];
                     }
                    else{
                             $no=$res['plan'];
                             $vd=$vlgday;
                             $ldd = date("d",strtotime($res['loan_given_date']));
                             if($ldd <= $vd)
                             {
                               $plan=$no;
                             }
                             else{
                                     if(strtotime($res['loan_given_date']) < strtotime("2015-11-30"))
                                         {  $plan=$no;   }
                                     else{  $plan=$no-1; }
                                 }
                     }
                     
                   if(date("m")==3){
                    $comparedays=28;
                   }
                   else{
                     $comparedays=30;
                   }
                 $enddate=date("Y-m-d", strtotime("+$plan month", strtotime($res['loan_given_date'])));
                 
                 if($table=='goldloan' || $table=='demand_loan' || ($res['odprincipal']>=$res['amount_topay'])
                 || (strtotime(date("Y-m",strtotime($res['od_cal_date'])))>=strtotime($ymcurrdate)) || $day_diff < $comparedays)
                 {                        
                 $curpri=0;
                 }
                 else{                         
                  $curpri=$res['loangiven']/$plan;  
                 }
                 
                // echo $rcoll['cal_date'].'----'.$enddate;
                 
                 if(strtotime(date("Y-m",strtotime($rcoll['cal_date'])))==strtotime(date("Y-m",strtotime($enddate))))
                 {                         
                 $curpri = $res['amount_topay'];
                 }
                 if((strtotime($res['od_cal_date']) == strtotime($rcoll['cal_date'])) ||
                 (strtotime("Y-m",strtotime($rcoll['cal_date']))> strtotime("Y-m",strtotime($colldt))))
                 {
                     $curpri=0;
                     $curint=0;
                  }
                  
                 // echo "Check CURRENT".$curpri.'----'.$curint.'-----'.$res['odintrest'].'----'.$res['odprincipal'];  
                  
                    if(strtotime($colldt)>strtotime($rcoll['cal_date']) && strtotime($rcoll['cal_date'])>=strtotime($res['cal_date'])){
                      
                        $odint=$res['odintrest']+$curint;
                         if($odint>$res['amount_topay']){
                            $odint=$res['odintrest'];  
                         }
                         $odpri=$res['odprincipal']+$curpri;  
                         //next month Calculation
                         
                         $nxdate=date("Y-m-d", strtotime("+1 month", strtotime($rcoll['cal_date'])));
                         $cal_dtt=$nxdate;
                         $diff = abs(strtotime($nxdate) - strtotime($rcoll['cal_date']));
                         $day_diff=round($diff/3600/24);            
                         $p=$res['amount_topay'];
                         $t=$day_diff;
                         $r=$res['intrestrate']/365;
                         $curint=round(($p*$t*$r)/100);
                         if($table=='goldloan' || $table=='demand_loan' || ($res['odprincipal']>=$res['od_cal_date']))
                         {
                         $curpri=0;
                         }else{
                           $curpri=$res['loangiven']/$plan;;  
                         }
                      }else{
                        
                         $odint=$res['odintrest'];
                         $odpri=$res['odprincipal'];
                     }
                  
                 // echo "CURRENT".$curpri.'----'.$curint.'---'.$odint.'----'.$odpri.'----'.$collection;
                    
                 //---------------------Ladger Calculation Start---------------------------------
                   
                   $restoutstanding = $res['amount_topay'] - ($odpri+$curpri);
                   if($restoutstanding<0){
                    $restoutstanding=0;
                   }
                   
                                 
                    if($collection>0){
                       $ramt=$collection;
                       if($ramt>=$odpri){
                        $b_od_pri=$odpri;
                         $ramt=$ramt-$odpri;
                           if($ramt>=$curpri){
                               $b_cur_pri=$curpri;
                               $ramt=$ramt-$curpri;
                               if($ramt>=$restoutstanding){
                                $a_pre_pri=$restoutstanding;
                                   $ramt=$ramt-$restoutstanding;
                                   if($ramt>=$odint){
                                       $b_od_int=$odint;
                                       $ramt=$ramt-$odint;
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
                // echo "*****".$b_od_pri."---".$b_cur_pri.'----'.$b_od_int."---".$b_cur_int;
                
                   $tot_pri = $b_od_pri + $b_cur_pri + $a_pre_pri ;
                   $a_od_int=($odint+$curint)-($b_od_int+$b_cur_int);
                   $a_od_pr=($odpri+$curpri)-($b_od_pri+$b_cur_pri);
                       
                  if($a_od_pr<0){
                    $a_od_pr=0;
                  }
                      
                  if($b_od_int<0){
                    $b_od_int=0;
                  }
                   $a_tot_od=$a_od_int+$a_od_pr;
                       
                   $outstanding = ($res['amount_topay']-($b_od_pri+$b_cur_pri+$a_pre_pri));
                   if($outstanding<=0){
                     $outstanding=0;
                     $a_od_pr=0;
                     $a_od_int=0;
                     $a_tot_od=0;
                   }
                   
                 //---------------------Ladger Calculation End---------------------------------//
                 
                     $collection=$collection;
                     $trn_date=$rcoll['coll_date'];
                     
                 // ------------------- All respective table update start ---------------------------//
                 $ledgerquery="update `transaction_ledger` set `b_od_int`='$b_od_int',`b_cur_int`='$b_cur_int',
                                   `b_od_pri`='$b_od_pri',`b_cur_pri`='$b_cur_pri',`a_pre_pri`='$a_pre_pri',`tot_pr`='$tot_pri',
                                   `outstanding`='$outstanding',`a_od_int`='$a_od_int',`a_tot_od`='$a_tot_od',`a_od_pr`='$a_od_pr',`collection`='$collection',`coll_date`='$trn_date' where `accountno`='$accno' and `id`='$rcoll[id]'";
                                   
                mysql_query($ledgerquery);
                        
                        if($outstanding==0){
                        $complited=1;
                        }else{
                          $complited=0;
                        }
                            if($cal_dt==''){
                              $cal_dt=date("$ymcurrdate-$vlgday");   
                            }
                $tableupdate="update  `$table` set `odintrest`='$a_od_int',`odprincipal`='$a_od_pr',`amount_topay`='$outstanding',`last_refund_date`='$trn_date',`last_refund_amt`='$collection',
                            `od_cal_date`='$cal_dtt',`loancomplited`='$complited' where `loan_accno`='$accno'";
                           
               mysql_query($tableupdate)or die(mysql_error());
                               
                           $traint=$b_od_int+$b_cur_int;
                           $traprn=$b_od_pri+$a_pre_pri+$b_cur_pri;
                             
                            // transaction table upadte start
                            
                             $trn=mysql_query("select * from `transaction` where `accountno`='$accno' and `date`='$trn_date'")or die(mysql_error());;
                             $cnttrn=mysql_num_rows($trn);
                             
                    
                    if($cnttrn>0){  // intrest and principal                
                         $cntamt=mysql_num_rows(mysql_query("select * from `transaction` where `accountno`='$accno' and `date`='$trn_date' and `amount`>0"));
                         $cntint=mysql_num_rows(mysql_query("select * from `transaction` where `accountno`='$accno' and `date`='$trn_date' and `interest`>0"));
                        
                        if($traprn>0){
                            
                            if($cntamt>0)
                            {
                               //  echo "<br/><br/>UPDATE `transaction` set `amount`='$traprn',`details`='$table Refund' where `accountno`='$accno' and `date`='$trn_date' and `amount`>0 |<br/>";
                                
                                 mysql_query("UPDATE `transaction` set `amount`='$traprn',`details`='$table Refund' where `accountno`='$accno' and `date`='$trn_date' and `amount`>0");
                            }else{
                                 $time=time();
                             //    echo "<br/><br/>INSERT into `transaction` set `transactionid`='$time',`amount`='$traprn',`details`='$table Refund',`accountno`='$accno',`date`='$trn_date' |<br/>";
                                
                                 mysql_query("INSERT into `transaction` set `transactionid`='$time',`amount`='$traprn',`details`='$table Refund',`accountno`='$accno',`date`='$trn_date'");
                            }
                        }
                        
                        if($traint>0){
                            if($cntint>0)
                            {
                              //  echo "<br/><br/>UPDATE `transaction` set `interest`='$traint',`details`='$table Interest' where `accountno`='$accno' and `date`='$trn_date' and `interest`>0 |<br/>";
                                
                                mysql_query("UPDATE `transaction` set `interest`='$traint',`details`='$table Interest' where `accountno`='$accno' and `date`='$trn_date' and `interest`>0");
                            }else{
                                 $time=time();
                               //  echo "<br/><br/>INSERT into `transaction` set `transactionid`='$time',`interest`='$traint',`details`='$table Interest',`accountno`='$accno',`date`='$trn_date' |<br/>";
                              
                                 mysql_query("INSERT into `transaction` set `transactionid`='$time',`interest`='$traint',`details`='$table Interest',`accountno`='$accno',`date`='$trn_date'");
                            }
                        }
                                       
                      }
                      
                      else{
                               $time=time();
                               if($traprn>0){
                              // echo "<br/><br/>INSERT into `transaction` set `transactionid`='$time',`amount`='$traprn',`details`='$table Refund',`accountno`='$accno',`date`='$trn_date' |<br/>";
                                
                               mysql_query("INSERT into `transaction` set `transactionid`='$time',`amount`='$traprn',`details`='$table Refund',`accountno`='$accno',`date`='$trn_date'");
                             
                               }
                               
                             if($traint>0){
                                // echo "<br/><br/>INSERT into `transaction` set `transactionid`='$time',`interest`='$traint',`details`='$table Interest',`accountno`='$accno',`date`='$trn_date' |<br/>";
                              
                               mysql_query("INSERT into `transaction` set `transactionid`='$time',`interest`='$traint',`details`='$table Interest',`accountno`='$accno',`date`='$trn_date'");
                             }
                      }
                      
                }
            
            
            
            
            
           
          }
    }



if(isset($_POST['have']))
{
$val=explode('|', $_POST['monthval']);
$currdate=$val[0];
$my=$val[1];    $myy=$val[2]; $mya=$val[3];
    
$accno=$_POST['accno'];

$str=substr($accno, 0, 2);
if($str=='GL'){ $table="goldloan";}
else if($str=='DL'){ $table="demand_loan";}
else if($str=='BL'){ $table="businessloan";}
else if($str=='AL'){ $table="agricultureloan";}
else if($str=='EL'){ $table="enterpriseloan";}
else if($str=='GR'){ $table="grouploan";}
    
$colldt=date("Y-m-d",strtotime($_POST['collectiondate']));  
$collection=$_POST['collection'];  

//echo "SELECT * FROM `transaction_ledger` WHERE `cal_date` like '$my%' and `collection`>0 and `accountno`='$accno' and `collection`>'500.00'";
$srch=mysql_query("SELECT * FROM `transaction_ledger` WHERE `coll_date` = '$colldt' and `collection`='$collection' and `accountno`='$accno'");
$cnt=mysql_num_rows($srch);
if($cnt==1){
   // echo "ok";           
            $coll=mysql_query("SELECT * FROM `transaction_ledger` WHERE `coll_date` LIKE '$my%' and `accountno`='$accno'");
            $rcoll=mysql_fetch_array($srch);
            
            $ymcurrdate=$my;
              
            $coll_amt=$rcoll['collection'];
            //echo $rcoll['cal_date'].'----';
            $coll_date=$rcoll['coll_date'];
               
               
               $getdate=mysql_fetch_array(mysql_query("SELECT * FROM `transaction_ledger` WHERE `accountno`='$accno' and `coll_date` != '$colldt' and `cal_date`<'$colldt' and `coll_date`<'$colldt' order by `cal_date` desc"));
               
               $frmcal_date=$getdate['cal_date'];
                
                $qwe=mysql_query("SELECT * FROM $table where `loan_accno`='$accno'");
                $res=mysql_fetch_array($qwe);
                
                $fetvill=mysql_query("select * from `prefix` where `slno`='$res[village]'");
                $rvill=mysql_fetch_array($fetvill);
                $vlgday= date("d",strtotime($rvill['date']));
                
                
                $cal_dt=date("$ymcurrdate-$vlgday");
                $cal_dtt=$cal_dt;
                
                //echo $frmcal_date.'---'.$rcoll['cal_date'];
                $diff = abs(strtotime($frmcal_date) - strtotime($rcoll['cal_date']));
                $day_diff=round($diff/3600/24);
                
                $p=$res['amount_topay'];
                $t=$day_diff;
                $r=$res['intrestrate']/365;
                
               // echo '<br/>'.$p.'*'.$t.'*'.$r;
                $curint=round(($p*$t*$r)/100);
                
                
                 if($table=='goldloan' || $table=='demand_loan')
                    {
                     $plan=$res['plan'];
                     }
                    else{
                             $no=$res['plan'];
                             $vd=$vlgday;
                             $ldd = date("d",strtotime($res['loan_given_date']));
                             if($ldd <= $vd)
                             {
                               $plan=$no;
                             }
                             else{
                                     if(strtotime($res['loan_given_date']) < strtotime("2015-11-30"))
                                         {  $plan=$no;   }
                                     else{  $plan=$no-1; }
                                 }
                     }
                     
                   if(date("m")==3){
                    $comparedays=28;
                   }
                   else{
                     $comparedays=30;
                   }
                 $enddate=date("Y-m-d", strtotime("+$plan month", strtotime($res['loan_given_date'])));
                 
                 if($table=='goldloan' || $table=='demand_loan' || ($res['odprincipal']>=$res['amount_topay'])
                 || (strtotime(date("Y-m",strtotime($res['od_cal_date'])))>=strtotime($ymcurrdate)) || $day_diff < $comparedays)
                 {                        
                 $curpri=0;
                 }
                 else{                         
                  $curpri=$res['loangiven']/$plan;  
                 }
                 if(strtotime(date("Y-m",strtotime($rcoll['cal_date'])))>=strtotime(date("Y-m",strtotime($enddate))))
                 {                         
                 $curpri = $res['amount_topay'];
                 }
                 if((strtotime($res['od_cal_date']) == strtotime($rcoll['cal_date'])) ||
                 (strtotime("Y-m",strtotime($rcoll['cal_date']))> strtotime("Y-m",strtotime($colldt))))
                 {
                     $curpri=0;
                     $curint=0;
                  }
                  //echo $colldt.'===='.$rcoll['cal_date'].'===='.$res['odintrest'].'===='.$curint;
                    if(strtotime($colldt)>strtotime($rcoll['cal_date']) && strtotime($rcoll['cal_date'])>=strtotime($res['od_cal_date'])){
                          //   echo "YES";
                        $odint=$res['odintrest']+$curint;
                         if($odint>$res['amount_topay']){
                            $odint=$res['odintrest'];  
                         }
                         $odpri=$res['odprincipal']+$curpri;  
                         //next month Calculation
                         
                         $nxdate=date("Y-m-d", strtotime("+1 month", strtotime($rcoll['cal_date'])));
                         $cal_dtt=$nxdate;
                         $diff = abs(strtotime($nxdate) - strtotime($rcoll['cal_date']));
                         $day_diff=round($diff/3600/24);            
                         $p=$res['amount_topay'];
                         $t=$day_diff;
                         $r=$res['intrestrate']/365;
                         $curint=round(($p*$t*$r)/100);
                         if($table=='goldloan' || $table=='demand_loan' || ($res['odprincipal']>=$res['amount_topay']))
                         {
                         $curpri=0;
                         }else{
                           $curpri=$res['loangiven']/$plan;;  
                         }
                      }else{
                        
                         $odint=$res['odintrest'];
                         $odpri=$res['odprincipal'];
                     }
                  
                  // echo "CURRENT".$curpri.'----'.$curint.'---'.$odint.'----'.$odpri;
                    
                 //---------------------Ladger Calculation Start---------------------------------
                 //$b_od_int,$b_cur_int, $b_od_pri, $b_cur_pri ,$a_pre_pri,$a_od_int,$a_od_pr;
                 if($table=='goldloan' || $table=='demand_loan')
                 {
                   $ramt=$collection;
                       if($collection >= $odint){   		// od Interest
                     $b_od_int=$odint;
                     $ramt=$collection-$odint;
                     if($ramt>=$curint){		     // current Interest
                       $b_cur_int=$curint;
                       $ramt=$ramt-$curint;
                         if($ramt>0)			  // Prepaid  Principal
                         {
                           $a_pre_pri=$ramt;
                           $ramt=$ramt-$a_pre_pri;
                           if($a_pre_pri > $res['amount_topay'])
                           {   
                           $b_cur_int=$ramt-$res['amount_topay'];
                           $a_pre_pri=$res['amount_topay'];
                           $b_cur_int=$b_cur_int+($ramt-$res['amount_topay']);
                           }
                         }else{
                           $a_pre_pri=0;
                           $b_od_pri=0;
                           $b_cur_pri=0;
                         }
                       }else{
                       $b_cur_int=($ramt);
                       $a_pre_pri=0;
                       $b_od_pri=0;
                       $b_cur_pri=0;
                       }
                     }
                     else
                     {
                     $b_od_int=($ramt);
                     $b_cur_int=0;
                     $a_pre_pri=0;
                     $b_od_pri=0;
                     $b_cur_pri=0;
                     }
                             
                      //   echo "GD===".$b_od_int.'----'.$b_cur_int.'----'.$b_od_pri.'---'.$b_cur_pri.'---'.$a_pre_pri;
                 }	
                 else
                 {
                   $ramt=$collection;
                   if($collection >= $odint){   		// OD Interest
                     $b_od_int=$odint;
                     $ramt=$collection-$odint;
                     if($ramt>=$curint){		     		// Current Interest
                       $b_cur_int=$curint;
                       $ramt=$ramt-$curint;
                           if($ramt>=$odpri)		// OD Principal
                           {
                                 $b_od_pri=$odpri;
                                 $ramt=$ramt-$b_od_pri;
                                 if($ramt>=$curpri)			// Current Principal
                                 {
                                   $b_cur_pri=$curpri;
                                   $ramt=$ramt-$b_cur_pri;
                                   if($ramt>=$res['amount_topay']){	// Prepaid Principal
                                     $a_pre_pri=$res['amount_topay'];
                                     $b_cur_int=$b_cur_int+($ramt-$a_pre_pri);
                                   }
                                   else
                                   {
                                     $a_pre_pri=$ramt;
                                     $ramt=$ramt-$a_pre_pri;
                                     if($res['amount_topay']==$odpri){
                                       $a_pre_pri=0;
                                       $b_cur_int=$b_cur_int+($ramt);
                                     }
                                     
                                   }
                                 }
                                 else
                                 {
                                   $b_cur_pri=$ramt;
                                   $a_pre_pri=0;		  
                                 }
                           }else
                           {
                         $b_od_pri=$ramt;
                         $a_pre_pri=0;
                         $b_cur_pri=0;
                           } 
                       }else{
                       $b_cur_int=($ramt);
                       $a_pre_pri=0;
                       $b_od_pri=0;
                       $b_cur_pri=0;
                       }
                     }
                     else
                     {
                     $b_od_int=($ramt);
                     $b_cur_int=0;
                     $a_pre_pri=0;
                     $b_od_pri=0;
                     $b_cur_pri=0;
                     }
                             
                         //   echo "NOTGD===".$b_od_int.'----'.$b_cur_int.'----'.$b_od_pri.'---'.$b_cur_pri.'---'.$a_pre_pri;
                 }
                     
                     
                 $tot_pri = $b_od_pri + $b_cur_pri + $a_pre_pri ;
                 $a_od_int = ($odint+$curint)-($b_od_int+$b_cur_int);
                 $a_od_pr = ($odpri+$curpri)-($b_od_pri+$b_cur_pri);
                     
                    
                     
               if($a_od_pr<0){
                    $a_od_pr=0;
                  }
                      
                  if($b_od_int<0){
                    $b_od_int=0;
                  }
                 
                  $a_tot_od=$a_od_int+$a_od_pr;
                  
                 $outstanding = ($res['amount_topay']-($b_od_pri+$b_cur_pri+$a_pre_pri));
                      if($a_od_pr>$outstanding){            
                         
                         $a_od_pr=$outstanding;
                     }
                 if($outstanding<=0){
                   $outstanding=0;
                   $a_od_pr=0;
                   $a_od_int=0;
                   $a_tot_od=0;
                 }
                 
                 //---------------------Ladger Calculation End---------------------------------//
                 
                     $collection=$collection;
                     $trn_date=$rcoll['coll_date'];
                     
                 // ------------------- All respective table update start ---------------------------//
                 
                $ledgerquery="update `transaction_ledger` set `b_od_int`='$b_od_int',`b_cur_int`='$b_cur_int',
                                   `b_od_pri`='$b_od_pri',`b_cur_pri`='$b_cur_pri',`a_pre_pri`='$a_pre_pri',`tot_pr`='$tot_pri',
                                   `outstanding`='$outstanding',`a_od_int`='$a_od_int',`a_tot_od`='$a_tot_od',`a_od_pr`='$a_od_pr',`collection`='$collection',`coll_date`='$trn_date' where `accountno`='$accno' and `id`='$rcoll[id]'";
                                   
                 mysql_query($ledgerquery);
                        
                        if($outstanding==0){
                        $complited=1;
                        }else{
                          $complited=0;
                        }
                            if($cal_dt==''){
                              $cal_dt=date("$ymcurrdate-$vlgday");   
                            }
                    echo    $tableupdate="update  `$table` set `odintrest`='$a_od_int',`odprincipal`='$a_od_pr',`amount_topay`='$outstanding',`last_refund_date`='$trn_date',`last_refund_amt`='$collection',
                            `od_cal_date`='$cal_dtt',`loancomplited`='$complited' where `loan_accno`='$accno'";
                           
                    //      mysql_query($tableupdate)or die(mysql_error());
                               
                           $traint=$b_od_int+$b_cur_int;
                           $traprn=$b_od_pri+$a_pre_pri+$b_cur_pri;
                             
                            // transaction table upadte start
                            
                             $trn=mysql_query("select * from `transaction` where `accountno`='$accno' and `date`='$trn_date'")or die(mysql_error());;
                             $cnttrn=mysql_num_rows($trn);
                             
                    
                     if($cnttrn>0){  // intrest and principal                
                         $cntamt=mysql_num_rows(mysql_query("select * from `transaction` where `accountno`='$accno' and `date`='$trn_date' and `amount`>0"));
                         $cntint=mysql_num_rows(mysql_query("select * from `transaction` where `accountno`='$accno' and `date`='$trn_date' and `interest`>0"));
                        
                        if($traprn>0){
                            
                            if($cntamt>0)
                            {
                               //  echo "<br/><br/>UPDATE `transaction` set `amount`='$traprn',`details`='$table Refund' where `accountno`='$accno' and `date`='$trn_date' and `amount`>0 |<br/>";
                                
                                 mysql_query("UPDATE `transaction` set `amount`='$traprn',`details`='$table Refund' where `accountno`='$accno' and `date`='$trn_date' and `amount`>0");
                            }else{
                                 $time=time();
                             //    echo "<br/><br/>INSERT into `transaction` set `transactionid`='$time',`amount`='$traprn',`details`='$table Refund',`accountno`='$accno',`date`='$trn_date' |<br/>";
                                
                                 mysql_query("INSERT into `transaction` set `transactionid`='$time',`amount`='$traprn',`details`='$table Refund',`accountno`='$accno',`date`='$trn_date'");
                            }
                        }
                        
                        if($traint>0){
                            if($cntint>0)
                            {
                              //  echo "<br/><br/>UPDATE `transaction` set `interest`='$traint',`details`='$table Interest' where `accountno`='$accno' and `date`='$trn_date' and `interest`>0 |<br/>";
                                
                                mysql_query("UPDATE `transaction` set `interest`='$traint',`details`='$table Interest' where `accountno`='$accno' and `date`='$trn_date' and `interest`>0");
                            }else{
                                 $time=time();
                               //  echo "<br/><br/>INSERT into `transaction` set `transactionid`='$time',`interest`='$traint',`details`='$table Interest',`accountno`='$accno',`date`='$trn_date' |<br/>";
                              
                                 mysql_query("INSERT into `transaction` set `transactionid`='$time',`interest`='$traint',`details`='$table Interest',`accountno`='$accno',`date`='$trn_date'");
                            }
                        }
                                       
                      }
                      
                      else{
                               $time=time();
                               if($traprn>0){
                              // echo "<br/><br/>INSERT into `transaction` set `transactionid`='$time',`amount`='$traprn',`details`='$table Refund',`accountno`='$accno',`date`='$trn_date' |<br/>";
                                
                               mysql_query("INSERT into `transaction` set `transactionid`='$time',`amount`='$traprn',`details`='$table Refund',`accountno`='$accno',`date`='$trn_date'");
                             
                               }
                               
                             if($traint>0){
                                // echo "<br/><br/>INSERT into `transaction` set `transactionid`='$time',`interest`='$traint',`details`='$table Interest',`accountno`='$accno',`date`='$trn_date' |<br/>";
                              
                               mysql_query("INSERT into `transaction` set `transactionid`='$time',`interest`='$traint',`details`='$table Interest',`accountno`='$accno',`date`='$trn_date'");
                            
                             }
                             
                      }
}
else                                                                // No  data
{    
   $qwe=mysql_query("SELECT * FROM $table where `loan_accno`='$accno'");
   $res=mysql_fetch_array($qwe);
                
   $fetvill=mysql_query("select * from `prefix` where `slno`='$res[village]'");
   $rvill=mysql_fetch_array($fetvill);
   $vlgday= date("d",strtotime($rvill['date']));
    
    
    
     $ledgerqueryy="insert into `transaction_ledger` set  `b_od_int`='0',`b_cur_int`='0',
    `b_od_pri`='0',`b_cur_pri`='0',`a_pre_pri`='0',`tot_pr`='0',`collection`='$collection',`coll_date`='$colldt',`outstanding`='0',`a_od_int`='0',`a_tot_od`='0',`a_od_pr`='0',`accountno`='$accno',`cal_date`='$my-$vlgday'";
   
    mysql_query($ledgerqueryy);
    
    
    
    $srch=mysql_query("SELECT * FROM `transaction_ledger` WHERE `coll_date` = '$colldt' and `collection`='$collection' and `accountno`='$accno'");
    $cnt=mysql_num_rows($srch);
    if($cnt==1){          
            
            $coll=mysql_query("SELECT * FROM `transaction_ledger` WHERE `coll_date` LIKE '$my%' and `accountno`='$accno'");
            $rcoll=mysql_fetch_array($srch);
            
            $ymcurrdate=$my;
              
            $coll_amt=$rcoll['collection'];
            $coll_date=$rcoll['coll_date'];
               
               //echo "SELECT * FROM `transaction_ledger` WHERE `accountno`='$accno' and `coll_date` != '$colldt' and `cal_date`<'$colldt' order by `cal_date` asc";
               
               $getdate=mysql_fetch_array(mysql_query("SELECT * FROM `transaction_ledger` WHERE `accountno`='$accno' and `coll_date` != '$colldt' and `cal_date`<'$colldt' and `coll_date`<'$colldt'  order by `cal_date` desc"));
               $frmcal_date=$getdate['cal_date'];
                                              
                $cal_dt=date("$ymcurrdate-$vlgday");
                $cal_dtt=$cal_dt;
                
                // echo $frmcal_date.'---'.$rcoll['cal_date'];
                $diff = abs(strtotime($frmcal_date) - strtotime($rcoll['cal_date']));
                $day_diff=round($diff/3600/24);
                
                $p=$res['amount_topay'];
                $t=$day_diff;
                $r=$res['intrestrate']/365;
                
               // echo '<br/>'.$p.'*'.$t.'*'.$r;
                $curint=round(($p*$t*$r)/100);
                
                
                 if($table=='goldloan' || $table=='demand_loan')
                    {
                     $plan=$res['plan'];
                     }
                    else{
                             $no=$res['plan'];
                             $vd=$vlgday;
                             $ldd = date("d",strtotime($res['loan_given_date']));
                             if($ldd <= $vd)
                             {
                               $plan=$no;
                             }
                             else{
                                     if(strtotime($res['loan_given_date']) < strtotime("2015-11-30"))
                                         {  $plan=$no;   }
                                     else{  $plan=$no-1; }
                                 }
                     }
                     
                   if(date("m")==3){
                    $comparedays=28;
                   }
                   else{
                     $comparedays=30;
                   }
                 $enddate=date("Y-m-d", strtotime("+$plan month", strtotime($res['loan_given_date'])));
                 
                 if($table=='goldloan' || $table=='demand_loan' || ($res['odprincipal']>=$res['amount_topay'])
                 || (strtotime(date("Y-m",strtotime($res['od_cal_date'])))>=strtotime($ymcurrdate)) || $day_diff < $comparedays)
                 {                        
                 $curpri=0;
                 }
                 else{                         
                  $curpri=$res['loangiven']/$plan;  
                 }
                 if(strtotime(date("Y-m",strtotime($rcoll['cal_date'])))>=strtotime(date("Y-m",strtotime($enddate))))
                 {                         
                 $curpri = $res['amount_topay'];
                 }
                 if((strtotime($res['od_cal_date']) == strtotime($rcoll['cal_date'])) ||
                 (strtotime("Y-m",strtotime($rcoll['cal_date']))> strtotime("Y-m",strtotime($colldt))))
                 {
                     $curpri=0;
                     $curint=0;
                  }
                  
                 // echo $colldt.'----'.$rcoll['cal_date'];
                  
                  if(strtotime($colldt)>strtotime($rcoll['cal_date']) && strtotime($rcoll['cal_date'])>=strtotime($res['od_cal_date'])){
                          //   echo "YES";
                        $odint=$res['odintrest']+$curint;
                         if($odint>$res['amount_topay']){
                            $odint=$res['odintrest'];  
                         }
                         $odpri=$res['odprincipal']+$curpri;  
                         //next month Calculation
                         
                         $nxdate=date("Y-m-d", strtotime("+1 month", strtotime($rcoll['cal_date'])));
                         $cal_dtt=$nxdate;
                         $diff = abs(strtotime($nxdate) - strtotime($rcoll['cal_date']));
                         $day_diff=round($diff/3600/24);            
                         $p=$res['amount_topay'];
                         $t=$day_diff;
                         $r=$res['intrestrate']/365;
                         $curint=round(($p*$t*$r)/100);
                         if($table=='goldloan' || $table=='demand_loan' || ($res['odprincipal']>=$res['amount_topay']))
                         {
                         $curpri=0;
                         }else{
                           $curpri=$res['loangiven']/$plan;;  
                         }
                      }else{
                        
                         $odint=$res['odintrest'];
                         $odpri=$res['odprincipal'];
                     }
                  
                  // echo "<br/>CURRENT".$curpri.'----'.$curint.'---'.$odint.'----'.$odpri;
                    
                 //---------------------Ladger Calculation Start---------------------------------
                 //$b_od_int,$b_cur_int, $b_od_pri, $b_cur_pri ,$a_pre_pri,$a_od_int,$a_od_pr;
                 if($table=='goldloan' || $table=='demand_loan')
                 {
                   $ramt=$collection;
                       if($collection >= $odint){   		// od Interest
                     $b_od_int=$odint;
                     $ramt=$collection-$odint;
                     if($ramt>=$curint){		     // current Interest
                       $b_cur_int=$curint;
                       $ramt=$ramt-$curint;
                         if($ramt>0)			  // Prepaid  Principal
                         {
                           $a_pre_pri=$ramt;
                           if($a_pre_pri > $res['amount_topay'])
                           {   
                           $b_cur_int=$ramt-$res['amount_topay'];
                           $a_pre_pri=$res['amount_topay'];
                           $b_cur_int=$b_cur_int+($ramt-$res['amount_topay']);
                           }
                         }else{
                           $a_pre_pri=0;
                           $b_od_pri=0;
                           $b_cur_pri=0;
                         }
                       }else{
                       $b_cur_int=($ramt);
                       $a_pre_pri=0;
                       $b_od_pri=0;
                       $b_cur_pri=0;
                       }
                     }
                     else
                     {
                     $b_od_int=($ramt);
                     $b_cur_int=0;
                     $a_pre_pri=0;
                     $b_od_pri=0;
                     $b_cur_pri=0;
                     }
                             
                      //   echo "GD===".$b_od_int.'----'.$b_cur_int.'----'.$b_od_pri.'---'.$b_cur_pri.'---'.$a_pre_pri;
                 }	
                 else
                 {
                   $ramt=$collection;
                   if($collection >= $odint){   		// OD Interest
                     $b_od_int=$odint;
                     $ramt=$collection-$odint;
                     if($ramt>=$curint){		     		// Current Interest
                       $b_cur_int=$curint;
                       $ramt=$ramt-$curint;
                           if($ramt>=$odpri)		// OD Principal
                           {
                                 $b_od_pri=$odpri;
                                 $ramt=$ramt-$b_od_pri;
                                 if($ramt>=$curpri)			// Current Principal
                                 {
                                   $b_cur_pri=$curpri;
                                   $ramt=$ramt-$b_cur_pri;
                                   if($ramt>=$res['amount_topay']){	// Prepaid Principal
                                     $a_pre_pri=$res['amount_topay'];
                                     $b_cur_int=$b_cur_int+($ramt-$a_pre_pri);
                                   }
                                   else
                                   {
                                     $a_pre_pri=$ramt;
                                     if($res['amount_topay']==$odpri){
                                       $a_pre_pri=0;
                                       $b_cur_int=$b_cur_int+($ramt);
                                     }
                                     
                                   }
                                 }
                                 else
                                 {
                                   $b_cur_pri=$ramt;
                                   $a_pre_pri=0;		  
                                 }
                           }else
                           {
                         $b_od_pri=$ramt;
                         $a_pre_pri=0;
                         $b_cur_pri=0;
                           } 
                       }else{
                       $b_cur_int=($ramt);
                       $a_pre_pri=0;
                       $b_od_pri=0;
                       $b_cur_pri=0;
                       }
                     }
                     else
                     {
                     $b_od_int=($ramt);
                     $b_cur_int=0;
                     $a_pre_pri=0;
                     $b_od_pri=0;
                     $b_cur_pri=0;
                     }
                             
                  //echo "NOTGD===".$b_od_int.'----'.$b_cur_int.'----'.$b_od_pri.'---'.$b_cur_pri.'---'.$a_pre_pri;
                 }
                     
                     
                 $tot_pri = $b_od_pri + $b_cur_pri + $a_pre_pri ;
                 $a_od_int = ($odint+$curint)-($b_od_int+$b_cur_int);
                 $a_od_pr = ($odpri+$curpri)-($b_od_pri+$b_cur_pri);
                 
                if($a_od_pr<0){
                    $a_od_pr=0;
                  }
                      
                  if($b_od_int<0){
                    $b_od_int=0;
                  }
                     
                 $outstanding = ($res['amount_topay']-($b_od_pri+$b_cur_pri+$a_pre_pri));
                      if($a_od_pr>$outstanding){            
                         
                         $a_od_pr=$outstanding;
                     }
                 if($outstanding<=0){
                   $outstanding=0;
                   $a_od_pr=0;
                   $a_od_int=0;
                   $a_tot_od=0;
                 }
                 $a_tot_od=$a_od_int+$a_od_pr;
                 //---------------------Ladger Calculation End---------------------------------//
                 
                     $collection=$collection;
                     $trn_date=$rcoll['coll_date'];
                     
                 // ------------------- All respective table update start ---------------------------//
                 
                  $ledgerquery="update `transaction_ledger` set `b_od_int`='$b_od_int',`b_cur_int`='$b_cur_int',                                   `b_od_pri`='$b_od_pri',`b_cur_pri`='$b_cur_pri',`a_pre_pri`='$a_pre_pri',`tot_pr`='$tot_pri',                             `outstanding`='$outstanding',`a_od_int`='$a_od_int',`a_tot_od`='$a_tot_od',`a_od_pr`='$a_od_pr',`collection`='$collection',`coll_date`='$trn_date',`cal_date`='$cal_dt' where `accountno`='$accno' and `id`='$rcoll[id]'";
                    
                  mysql_query($ledgerquery);
                        
                        if($outstanding==0){
                        $complited=1;
                        }else{
                          $complited=0;
                        }
                            if($cal_dt==''){
                              $cal_dt=date("$ymcurrdate-$vlgday");   
                            }
                          $tableupdate="update  `$table` set `odintrest`='$a_od_int',`odprincipal`='$a_od_pr',`amount_topay`='$outstanding',`last_refund_date`='$trn_date',`last_refund_amt`='$collection',
                            `od_cal_date`='$cal_dtt',`loancomplited`='$complited' where `loan_accno`='$accno'";
                           
                        mysql_query($tableupdate)or die(mysql_error());
                               
                           $traint=$b_od_int+$b_cur_int;
                           $traprn=$b_od_pri+$a_pre_pri+$b_cur_pri;
                             
                            // transaction table upadte start
                            
                             $trn=mysql_query("select * from `transaction` where `accountno`='$accno' and `date`='$trn_date'")or die(mysql_error());;
                             $cnttrn=mysql_num_rows($trn);
                             
                    
                     if($cnttrn>0){  // intrest and principal                
                         $cntamt=mysql_num_rows(mysql_query("select * from `transaction` where `accountno`='$accno' and `date`='$trn_date' and `amount`>0"));
                         $cntint=mysql_num_rows(mysql_query("select * from `transaction` where `accountno`='$accno' and `date`='$trn_date' and `interest`>0"));
                        
                        if($traprn>0){
                            
                            if($cntamt>0)
                            {
                              //   echo "<br/><br/>UPDATE `transaction` set `amount`='$traprn',`details`='$table Refund' where `accountno`='$accno' and `date`='$trn_date' and `amount`>0 |<br/>";
                                
                                mysql_query("UPDATE `transaction` set `amount`='$traprn',`details`='$table Refund' where `accountno`='$accno' and `date`='$trn_date' and `amount`>0");
                            }else{
                                 $time=time();
                               // echo "<br/><br/>INSERT into `transaction` set `transactionid`='$time',`amount`='$traprn',`details`='$table Refund',`accountno`='$accno',`date`='$trn_date' |<br/>";
                                
                                 mysql_query("INSERT into `transaction` set `transactionid`='$time',`amount`='$traprn',`details`='$table Refund',`accountno`='$accno',`date`='$trn_date'");
                            }
                        }
                        
                        if($traint>0){
                            if($cntint>0)
                            {
                              //  echo "<br/><br/>UPDATE `transaction` set `interest`='$traint',`details`='$table Interest' where `accountno`='$accno' and `date`='$trn_date' and `interest`>0 |<br/>";
                                
                                mysql_query("UPDATE `transaction` set `interest`='$traint',`details`='$table Interest' where `accountno`='$accno' and `date`='$trn_date' and `interest`>0");
                            }else{
                                 $time=time();
                                // echo "<br/><br/>INSERT into `transaction` set `transactionid`='$time',`interest`='$traint',`details`='$table Interest',`accountno`='$accno',`date`='$trn_date' |<br/>";
                              
                                 mysql_query("INSERT into `transaction` set `transactionid`='$time',`interest`='$traint',`details`='$table Interest',`accountno`='$accno',`date`='$trn_date'");
                            }
                        }
                                       
                      }
                      
                      else{
                               $time=time();
                               if($traprn>0){
                              // echo "<br/><br/>INSERT into `transaction` set `transactionid`='$time',`amount`='$traprn',`details`='$table Refund',`accountno`='$accno',`date`='$trn_date' |<br/>";
                                
                               mysql_query("INSERT into `transaction` set `transactionid`='$time',`amount`='$traprn',`details`='$table Refund',`accountno`='$accno',`date`='$trn_date'");
                             
                               }
                               
                             if($traint>0){
                               //  echo "<br/><br/>INSERT into `transaction` set `transactionid`='$time',`interest`='$traint',`details`='$table Interest',`accountno`='$accno',`date`='$trn_date' |<br/>";
                              
                              mysql_query("INSERT into `transaction` set `transactionid`='$time',`interest`='$traint',`details`='$table Interest',`accountno`='$accno',`date`='$trn_date'");
                            
                             }
                      }
                }
            }
        }

if(isset($_POST['nohave']))
{

$val=explode('|', $_POST['monthval']);
$currdate=$val[0];
$my=$val[1];    $myy=$val[2]; $mya=$val[3];
    
$accno=$_POST['accno'];

$str=substr($accno, 0, 2);
if($str=='GL'){ $table="goldloan";}
else if($str=='DL'){ $table="demand_loan";}
else if($str=='BL'){ $table="businessloan";}
else if($str=='AL'){ $table="agricultureloan";}
else if($str=='EL'){ $table="enterpriseloan";}
else if($str=='GR'){ $table="grouploan";}

$srch=mysql_query("SELECT * FROM `transaction_ledger` WHERE `cal_date` like '$my%' and `collection`=0 and `accountno`='$accno'");
$cnt=mysql_num_rows($srch);
if($cnt>0)
{
$getvendor=mysql_query("SELECT * FROM $table where `loan_accno`='$accno' and `loancomplited`=0 and `loan_given_date`<'$currdate'") or die(mysql_error());
if(mysql_num_rows($getvendor)>0)
{
$n++;
$resvendor=mysql_fetch_array($getvendor);

                    $loan_accno=$resvendor['loan_accno'];
                    $fetvill=mysql_query("select * from `prefix` where `slno`='$resvendor[village]'");
                    $rvill=mysql_fetch_array($fetvill);
                    $vildt=$rvill['date'];
                    $vlgdayy= date("d",strtotime($vildt));
                 
                    $no=$resvendor['plan'];
                    $sqlagen=mysql_query("select * from `agent` where `id`='$resvendor[agent_id]'")or die(mysql_error());
                    $resagen=mysql_fetch_array($sqlagen);
                    
                    $vd= $vlgdayy;
                    $ldd= date("d",strtotime($resvendor['loan_given_date']));
                    if($ldd <= $vd)
                    {
                        $plan=$no;
                    }
                    else
                    {
                        if(strtotime($resvendor['loan_given_date']) < strtotime("2015-11-30"))
                        {
                           $plan=$no;
                        }
                        else
                        {
                           $plan=$no-1;
                        }
                    }
	
	// 
          
       $cm_colldt="$my-$vlgdayy";
       $resvendor['od_cal_date'];
       
       $enddate=date("Y-m-d", strtotime("+$plan month", strtotime($resvendor['loan_given_date'])));
        
        $diff = abs(strtotime($resvendor['od_cal_date']) - strtotime($cm_colldt));
        $day_diff=round($diff/3600/24); 
        
        $p=$resvendor['amount_topay'];
        $t=$day_diff;
        $r=$resvendor['intrestrate']/365;;
        $int=round(($p*$t*$r)/100); 
        
        $ts1 = strtotime($resvendor['od_cal_date']);
        $ts2 = strtotime($cm_colldt);        
        $year1 = date('Y', $ts1);
        $year2 = date('Y', $ts2);        
        $month1 = date('m', $ts1);
        $month2 = date('m', $ts2);        
        $monthsdif = (($year2 - $year1) * 12) + ($month2 - $month1);
        
        if($table=='goldloan' || $table=='demand_loan'){
            $prnicipal=0;
        }else{
            $prnicipal=$monthsdif*($resvendor['loangiven']/$plan);            
        }
        
        if(strtotime($cm_colldt)==strtotime($resvendor['od_cal_date'])){
            $int=0;
            $prnicipal=0;
        }
        
        if(($resvendor['odprincipal']>=$resvendor['amount_topay'])  ||
        strtotime(date("Y-m",strtotime($resvendor['od_cal_date'])))>=strtotime($my)
        || ((date('d',strtotime($resvendor['loan_given_date']))>$vlgdayy)
            && (strtotime($resvendor['loan_given_date'])==strtotime($resvendor['od_cal_date']))))
        {
                $prnicipal=0;
        }
       
        if(strtotime($cm_colldt)>= strtotime($enddate))
        {
        $prnicipal = $resvendor['amount_topay'];
        }
	
        $outstanding=$resvendor['amount_topay'];
        $a_od_int=$resvendor['odintrest']+$int;
        $a_od_pr=$resvendor['odprincipal']+$prnicipal;
          
        if($a_od_pr<0){
                    $a_od_pr=0;
        }
                      
        if($b_od_int<0){
                    $b_od_int=0;
        }
        
          if($a_od_pr>=$outstanding){
                $a_od_pr=$outstanding;
            }
        $a_tot_od=$a_od_int+$a_od_pr;
             
        $ledger=mysql_query("select * from `transaction_ledger` where `accountno`='$loan_accno' and `cal_date` like '$my%'");
        $cntledger=mysql_num_rows($ledger);
        if($cntledger>0){
             $ledgerquery="update `transaction_ledger` set `outstanding`='$outstanding',
                            `a_od_int`='$a_od_int',`a_tot_od`='$a_tot_od',`a_od_pr`='$a_od_pr'
                             where `accountno`='$loan_accno' and `cal_date`='$cm_colldt'";
            }else{
           $ledgerquery="insert into `transaction_ledger` set `outstanding`='$outstanding',
                        `a_od_int`='$a_od_int',`a_tot_od`='$a_tot_od',`a_od_pr`='$a_od_pr',
                        `accountno`='$loan_accno',`cal_date`='$cm_colldt'";
        }
      
       mysql_query($ledgerquery)or die(mysql_error());
      $tableupdate="update  `$table` set `odintrest`='$a_od_int',`odprincipal`='$a_od_pr',`amount_topay`='$outstanding',`od_cal_date`='$cm_colldt' where `loan_accno`='$loan_accno'";
       mysql_query($tableupdate)or die(mysql_error());   
     
}
}else{
$getvendor=mysql_query("SELECT * FROM $table where `loan_accno`='$accno' and `loan_given_date`<'$currdate'") or die(mysql_error());
if(mysql_num_rows($getvendor)>0)
{
$resvendor=mysql_fetch_array($getvendor);

                    $loan_accno=$resvendor['loan_accno'];
                    $fetvill=mysql_query("select * from `prefix` where `slno`='$resvendor[village]'");
                    $rvill=mysql_fetch_array($fetvill);
                    $vildt=$rvill['date'];
                    $vlgdayy= date("d",strtotime($vildt));
                 
                    $no=$resvendor['plan'];
                    $sqlagen=mysql_query("select * from `agent` where `id`='$resvendor[agent_id]'")or die(mysql_error());
                    $resagen=mysql_fetch_array($sqlagen);
                    
                    $vd= $vlgdayy;
                    $ldd= date("d",strtotime($resvendor['loan_given_date']));
                    if($ldd <= $vd)
                    {
                        $plan=$no;
                    }
                    else
                    {
                        if(strtotime($resvendor['loan_given_date']) < strtotime("2015-11-30"))
                        {
                           $plan=$no;
                        }
                        else
                        {
                           $plan=$no-1;
                        }
                    }
	
	// 
          
       $cm_colldt="$my-$vlgdayy";
       $resvendor['od_cal_date'];
       
       $enddate=date("Y-m-d", strtotime("+$plan month", strtotime($resvendor['loan_given_date'])));
        
        $diff = abs(strtotime($resvendor['od_cal_date']) - strtotime($cm_colldt));
        $day_diff=round($diff/3600/24); 
        
        $p=$resvendor['amount_topay'];
        $t=$day_diff;
        $r=$resvendor['intrestrate']/365;;
        $int=round(($p*$t*$r)/100); 
        
        $ts1 = strtotime($resvendor['od_cal_date']);
        $ts2 = strtotime($cm_colldt);        
        $year1 = date('Y', $ts1);
        $year2 = date('Y', $ts2);        
        $month1 = date('m', $ts1);
        $month2 = date('m', $ts2);        
        $monthsdif = (($year2 - $year1) * 12) + ($month2 - $month1);
        
        if($table=='goldloan' || $table=='demand_loan'){
            $prnicipal=0;
        }else{
            $prnicipal=$monthsdif*($resvendor['loangiven']/$plan);            
        }
        
        if(strtotime($cm_colldt)<=strtotime($resvendor['od_cal_date'])){
            $int=0;
            $prnicipal=0;
        }
        
        if(($resvendor['odprincipal']>=$resvendor['amount_topay'])  ||
        strtotime(date("Y-m",strtotime($resvendor['od_cal_date'])))>=strtotime($my)
        || ((date('d',strtotime($resvendor['loan_given_date']))>$vlgdayy)
            && (strtotime($resvendor['loan_given_date'])==strtotime($resvendor['od_cal_date']))))
        {
                $prnicipal=0;
        }
       
        if(strtotime($cm_colldt)>= strtotime($enddate))
        {
        $prnicipal = $resvendor['amount_topay'];
        }
	
        $outstanding=$resvendor['amount_topay'];
        $a_od_int=$resvendor['odintrest']+$int;
        $a_od_pr=$resvendor['odprincipal']+$prnicipal;
       
        
          if($a_od_pr>=$outstanding){
                $a_od_pr=$outstanding;
            }
            
        if($a_od_pr<0){
            $a_od_pr=0;
          }
              
          if($b_od_int<0){
            $b_od_int=0;
          }
          
        $a_tot_od=$a_od_int+$a_od_pr;
             
       
        $ledgerquery="insert into `transaction_ledger` set `outstanding`='$outstanding',
                        `a_od_int`='$a_od_int',`a_tot_od`='$a_tot_od',`a_od_pr`='$a_od_pr',
                        `accountno`='$loan_accno',`cal_date`='$cm_colldt'";
       
      
       mysql_query($ledgerquery)or die(mysql_error());
       $tableupdate="update  `$table` set `odintrest`='$a_od_int',`odprincipal`='$a_od_pr',`amount_topay`='$outstanding',`od_cal_date`='$cm_colldt' where `loan_accno`='$loan_accno'";
       mysql_query($tableupdate)or die(mysql_error());  
}
}
}
$msg = "Check"; 
header("location:manuallyloan.php?msg=$msg");
?>
