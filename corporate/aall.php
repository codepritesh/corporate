<?php
include_once("function.php");
ini_set("display_errors",1);


//$find = mysql_query("SELECT * FROM `transaction_ledger` where `collection`>0 AND `coll_date` BETWEEN '2016-04-01' and '2017-03-31' AND `collection`!=(`b_od_int`+`b_od_pri`+`b_cur_int`+`b_cur_pri`+`a_pre_pri`)");
//while($rfind=mysql_fetch_array($find)){

$getacc=mysql_query("select * from `transaction_ledger` where `accountno`='EL1632' and `cal_date`>'2016-03-31' and `cal_date`<'2017-06-30' order by `cal_date`");
//$getacc=mysql_query("select * from `transaction_ledger` where `cal_date`>'2016-10-31' and `cal_date`<'2017-04-31' and `accountno`='DL1957' order by `cal_date`");
while($resacc=mysql_fetch_array($getacc))
{
    $trn_date = $resacc['coll_date'];
    $time = time();
    echo "<br>".$accno = $resacc['accountno'];
    $str=substr($accno, 0, 2);
    if($str=='GL'){ $table="goldloan";}
    else if($str=='DL'){ $table="demand_loan";}
    else if($str=='BL'){ $table="businessloan";}
    else if($str=='AL'){ $table="agricultureloan";}
    else if($str=='EL'){ $table="enterpriseloan";}
    else if($str=='GR'){ $table="grouploan";}
    $accdet = mysql_fetch_array(mysql_query("select * from $table where `loan_accno`='$accno'"));  // get account details
    $plan=get_plan($table,$accdet['id']);
    if($table=='goldloan' || $table=='demand_loan')
    {
        $principal = 0;
    }
    else
    {
        $principal = $accdet['loangiven']/$plan;
         
    }
     if($resacc['coll_date']=='0000-00-00'){  
     $compdate = $resacc['cal_date'];
     echo "select * from `transaction_ledger` where `accountno`='$accno' and `cal_date`<'$compdate' order by `cal_date` desc limit 1";
     $getprvdata=mysql_fetch_array(mysql_query("select * from `transaction_ledger` where `accountno`='$accno' and `cal_date`<'$compdate' order by `cal_date` desc limit 1"));
     
     }else{
      echo $compdate = $resacc['coll_date'];      
      $chk = mysql_query("select * from `transaction_ledger` where `accountno`='$accno' and `coll_date`='$compdate'");
      if(mysql_num_rows($chk)>1){
      $getprvdata1=mysql_fetch_array(mysql_query("select * from `transaction_ledger` where `accountno`='$accno' and `coll_date`<='$compdate' and `cal_date`<='$resacc[cal_date]'  order by `cal_date` desc limit 1"));
      if($resacc['id']==$getprvdata1['id'])
      {
         echo "<br>select * from `transaction_ledger` where `accountno`='$accno' and `coll_date`<'$compdate' and `cal_date`<'$resacc[cal_date]'  order by `cal_date` desc limit 1";
      $getprvdata=mysql_fetch_array(mysql_query("select * from `transaction_ledger` where `accountno`='$accno' and `coll_date`<'$compdate' and `cal_date`<='$resacc[cal_date]'  order by `cal_date` desc limit 1"));
      }else{
         echo "<br>select * from `transaction_ledger` where `accountno`='$accno' and `coll_date`<='$compdate' and `cal_date`<'$resacc[cal_date]'  order by `cal_date` desc limit 1";
      $getprvdata=mysql_fetch_array(mysql_query("select * from `transaction_ledger` where `accountno`='$accno' and `coll_date`<='$compdate' and `cal_date`<='$resacc[cal_date]'  order by `cal_date` desc limit 1"));
      }
      
      }else{
        echo "<br>select * from `transaction_ledger` where `accountno`='$accno' and `coll_date`<'$compdate' and `cal_date`<='$resacc[cal_date]'  order by `cal_date` desc limit 1";
      $getprvdata=mysql_fetch_array(mysql_query("select * from `transaction_ledger` where `accountno`='$accno' and `coll_date`<'$compdate' and `cal_date`<='$resacc[cal_date]'  order by `cal_date` desc limit 1"));
      
      }
      
     }
      
    if($getprvdata)
    {
    //    echo "<pre>";var_dump($getprvdata);
    echo "</br>Last outstanding=".$getprvdata['outstanding']."---ODint=".$getprvdata['a_od_int']."---ODpri=".$getprvdata['a_od_pr']."</br>";
    if($resacc['collection']>0)                                // have collection 
    {
        if($resacc['cal_date']=='0000-00-00')
        {
            $cal_dtt = date("Y-m-d", strtotime("+1 month", strtotime($getprvdata['cal_date'])));    
        }
        else
        {
             $cal_dtt = $resacc['cal_date'];
        }
                if(strtotime($getprvdata['coll_date'])>strtotime($getprvdata['cal_date']))
                {               
                    $lastodcaldate = date("Y-m-d", strtotime("+1 month", strtotime($getprvdata['cal_date'])));                                    
                }
                else
                {
                     $lastodcaldate = $getprvdata['cal_date'];                     
                }
               echo "<br>".$resacc['cal_date'].'-----'.$getprvdata['cal_date'].'------'.$lastodcaldate.'----'.$cal_dtt;
               
                $p = $getprvdata['outstanding'];
                $diff = strtotime($cal_dtt) - strtotime($lastodcaldate);
                $day_diff = round($diff/3600/24);
                if($day_diff<=0){
                   $day_diff=0; 
                }
                $t = $day_diff;
                $r = $accdet['intrestrate']/365;
                $cint = round(($p*$t*$r)/100);
                if($principal>$getprvdata['outstanding'])
                {
                    $cpri = $getprvdata['outstanding'];
                }else{                    
                    
                    if(date("m",strtotime($resacc['coll_date']))==3)
                    {       
                       $comparedays=28;
                     }
                    else{
                       $comparedays=30;
                    }
                    if($day_diff<$comparedays){
                       $cpri=0;
                    }else{
                      // echo $resvendor['loangiven'].'---'.$plan;
                        $cpri = $principal;
                    }
                    
                   
                }
                
                 echo '<br/>Brfore===='.$getprvdata['a_od_int'].'----'.$cint.'----'.$getprvdata['a_od_pr'].'----'.$cpri.'<br/>';
                 
                  echo "<br>".$resacc['coll_date'].'------'.$lastodcaldate.'----'.$cal_dtt;
              
                 
                if(strtotime($resacc['coll_date'])>strtotime($cal_dtt) && strtotime($cal_dtt)>=strtotime($lastodcaldate))
                {
                    //echo "inside";
                         $odint=$getprvdata['a_od_int']+$cint;
                         if($odint>$getprvdata['outstanding']){
                            $odint=$getprvdata['a_od_int'];  
                         }
                         $odpri=$getprvdata['a_od_pr']+$cpri;
                         
                         //next month Calculation
                        
                         $nxdate=date("Y-m-d", strtotime("+1 month", strtotime($cal_dtt)));
                         
                          echo "<br>next month Calculation-----".$nxdate.'------'.$cal_dtt;
                         
                         $diff = abs(strtotime($nxdate) - strtotime($cal_dtt));
                         $day_diff=round($diff/3600/24);
                         $day_diff = round($diff/3600/24);
                         if($day_diff<=0){
                               $day_diff=0; 
                         }
                         $p=$getprvdata['outstanding'];
                         $t=$day_diff;
                         $r=$accdet['intrestrate']/365;
                         $cint=round(($p*$t*$r)/100);
                         $cal_dtt=$nxdate;
                         if($principal>$getprvdata['outstanding'])
                         {
                         $cpri=0;
                         }else{
                          $cpri=$principal;  
                         }
                }
                else
                {
                    $odint=$getprvdata['a_od_int'];
                    $odpri=$getprvdata['a_od_pr'];
                }
                               
                 
                if($odpri>$getprvdata['outstanding'])
                {
                    $odpri = $getprvdata['outstanding'];
                    $cpri = 0;
                }
              
                $chkacc = mysql_fetch_array(mysql_query("select * from `transaction` where `accountno` = '$accno' and `date`='$resacc[coll_date]'"));
               
               if($chkacc['agentid']==0 && $resacc['collection']!=0)  // Forcefully close             
                {
                    echo '<br/>'.$refundtype = "Forcefully close";
                    $receive_amt=$resacc['collection'];
                    
                   // $enddate=date("Y-m-d", strtotime("+$plan month", strtotime($accdet['loan_given_date'])));
                    
                    echo '<br/>'.$odint.'----'.$cint.'----'.$odpri.'----'.$cpri.'<br/>';
                    
                    $restoutstanding = $getprvdata['outstanding'] - ($odpri+$cpri);                   
                    
                    if($restoutstanding<0)
                    {
                     $restoutstanding=0;
                    }
                    
                    if($receive_amt>0){
                                $ramt=$receive_amt;
                                    if($ramt>=$odpri){
                                     $b_od_pri=$odpri;
                                      $ramt=$ramt-$odpri;
                                        if($ramt>=$cpri){
                                            $b_cur_pri=$cpri;
                                            $ramt=$ramt-$cpri;
                                            if($ramt>=$restoutstanding){
                                                $a_pre_pri=$restoutstanding;
                                                $ramt=$ramt-$restoutstanding;
                                                if($ramt>=$odint){
                                                    $b_od_int=$odint;
                                                   echo $ramt=$ramt-$odint;
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
                                             $a_pre_pri=0;
                                        }
                                    }else{
                                        $b_od_pri=($ramt);
                                        $b_cur_pri=0;
                                        $b_od_int=0;
                                        $b_cur_int=0;
                                        $a_pre_pri=0;
                                    }
                                    
                                    echo "total===".$b_od_pri."---".$b_cur_pri.'----'.$a_pre_pri;
                                    
                                    $tot_pri = $b_od_pri + $b_cur_pri + $a_pre_pri ;
                                    $a_od_int=($odint+$cint)-($b_od_int+$b_cur_int);
                                    $a_od_pr=($odpri+$cpri)-($b_od_pri+$b_cur_pri);
                                        
                                    if($a_od_pr<0){
                                      $a_od_pr=0;
                                    }
                                    if($a_od_int<0){
                                        $a_od_int=0;
                                      }
                                   
                                    echo  "<br>".$a_od_int.'----'.$a_od_pr.'----'.$getprvdata['outstanding'].'----'.$restoutstanding.'<br/>';
                                     
                                    $outstanding = ($getprvdata['outstanding']-($b_od_pri+$b_cur_pri+$a_pre_pri));
                                    
                                    if($outstanding<=0){
                                      $outstanding=0;
                                      $a_od_pr=0;
                                      $a_od_int=0;
                                      $a_tot_od=0;
                                    }
                                    
                                     $a_tot_od=$a_od_int+$a_od_pr;
                                    
                    }
                    
                   echo  "<br>".$outstanding.'----'.$a_od_pr.'----'.$a_od_int.'----'.$cpri.'<br/>';
                   
                   echo "<br>".$ledgerquery="update `transaction_ledger` set `outstanding`='$outstanding',`b_od_int`='$b_od_int',`b_od_pri`='$b_od_pri',
                    `b_cur_int`='$b_cur_int',`b_cur_pri`='$b_cur_pri',`tot_pr`='$tot_pri',`a_pre_pri`='$a_pre_pri',
                    `a_od_int`='$a_od_int',`a_od_pr`='$a_od_pr',`a_tot_od`='$a_tot_od',`collection`='$receive_amt',`coll_date`='$resacc[coll_date]',`Refundtype`='$refundtype' where `id`='$resacc[id]'";
                    
                     if($outstanding==0)
                     {
                            $complited=1;
                     }else{
                            $complited=0;
                    }
                    
                     echo "<br>". $tableupdate="update  `$table` set `odintrest`='$a_od_int',`odprincipal`='$a_od_pr',`amount_topay`='$outstanding',`last_refund_date`='$trn_date',`last_refund_amt`='$receive_amt',`od_cal_date`='$cal_dtt',`loancomplited`='$complited' where `loan_accno`='$accno'";
                     
                      mysql_query($ledgerquery);
    
                      mysql_query($tableupdate);
                    
                }
                else                    // Normally refund
                {
                     echo $refundtype = "Normally Refund";
                            $receive_amt=$resacc['collection'];
                            if($receive_amt>0)
                            {
                                $ramt=$receive_amt;
                                    if($ramt>=$odint){
                                        $b_od_int=$odint;
                                        $ramt=$ramt-$odint;
                                        if($ramt>=$cint){
                                            $b_cur_int=$cint;
                                             $ramt=$ramt-$cint;
                                            if($ramt>=$odpri){
                                                $b_od_pri=$odpri;
                                                $ramt=$ramt-$odpri;
                                                if($ramt>=$cpri){
                                                    $b_cur_pri=$cpri;
                                                    $ramt=$ramt-$cpri;
                                                    if($ramt>0){
                                                        if($getprvdata['outstanding']<=($b_od_pri+$b_cur_pri))
                                                        {
                                                            $b_cur_int=$b_cur_int+$ramt;
                                                        }else{
                                                             $a_pre_pri=$ramt;
                                                        }                                                       
                                                    }
                                                }else{
                                                    $b_cur_pri=($ramt);
                                                    $a_pre_pri=0;
                                                }
                                                
                                            }else{
                                                $b_od_pri=($ramt);
                                                $b_cur_pri=0;
                                                $a_pre_pri=0;
                                            }
                                        }else{
                                            $b_cur_int=($ramt);
                                            $b_od_pri=0;
                                            $b_cur_pri=0;
                                            $a_pre_pri=0;
                                        }
                                    }else{
                                        $b_od_int=($ramt);
                                        $b_cur_int=0;
                                        $b_od_pri=0;
                                        $b_cur_pri=0;
                                        $a_pre_pri=0;
                                    }
                                    //echo $b_od_pri."---".$b_cur_pri;        
                                
                                
                                $tot_pri = $b_od_pri + $b_cur_pri + $a_pre_pri ;
                                $a_od_int=($odint+$cint)-($b_od_int+$b_cur_int);
                                $a_od_pr=($odpri+$cpri)-($b_od_pri+$b_cur_pri);
                                    
                                if($a_od_pr<0){
                                  $a_od_pr=0;
                                }
                                if($a_od_int<0){
                                  $a_od_int=0;
                                }
                                   
                                $outstanding = ($getprvdata['outstanding']-($b_od_pri+$b_cur_pri+$a_pre_pri));
                                if($outstanding<=0){
                                  $outstanding=0;
                                  $a_od_pr=0;
                                  $a_od_int=0;
                                  $a_tot_od=0;
                                } 
                            }
                            
                              $a_tot_od=$a_od_int+$a_od_pr;
                               
                          echo  "<br>".$getprvdata['outstanding'].'----'.$outstanding.'----'.$a_od_pr.'----'.$a_od_int.'----'.$cpri.'<br/>';
                          
                         echo "<br>".$ledgerquery="update `transaction_ledger` set `outstanding`='$outstanding',`b_od_int`='$b_od_int',`b_od_pri`='$b_od_pri',`b_cur_int`='$b_cur_int',`b_cur_pri`='$b_cur_pri',`tot_pr`='$tot_pri',`a_pre_pri`='$a_pre_pri',`a_od_int`='$a_od_int',`a_od_pr`='$a_od_pr',`a_tot_od`='$a_tot_od',`collection`='$receive_amt',`coll_date`='$resacc[coll_date]',`accountno`='$accno',`Refundtype`='$refundtype' where `id`='$resacc[id]'";
                         
                          if($outstanding==0){
                                $complited=1;
                            }else{
                                      $complited=0;
                            }
                         
                          echo "<br>". $tableupdate="update  `$table` set `odintrest`='$a_od_int',`odprincipal`='$a_od_pr',`amount_topay`='$outstanding',`last_refund_date`='$trn_date',`last_refund_amt`='$receive_amt',`od_cal_date`='$cal_dtt',`loancomplited`='$complited' where `loan_accno`='$accno'";
                          
                          
                           mysql_query($ledgerquery);
    
                           mysql_query($tableupdate);
                          
                }
                            
                $traint=$b_od_int+$b_cur_int;
                $traprn=$b_od_pri+$a_pre_pri+$b_cur_pri;
                // transaction table upadte start
                $trn=mysql_query("select * from `transaction` where `accountno`='$accno' and `date`='$trn_date'")or die(mysql_error());
                $cnttrn=mysql_num_rows($trn);
               
               
                                if($cnttrn>0){  // intrest and principal                
                                    $cntamt=mysql_num_rows(mysql_query("select * from `transaction` where `accountno`='$accno' and `date`='$trn_date' and `amount`>0"));
                                    $cntint=mysql_num_rows(mysql_query("select * from `transaction` where `accountno`='$accno' and `date`='$trn_date' and `interest`>0"));
                                   
                                   if($traprn>0){
                                       
                                       if($cntamt>0)
                                       {
                                          echo "<br/><br/>UPDATE `transaction` set `amount`='$traprn',`details`='$table Refund' where `accountno`='$accno' and `date`='$trn_date' and `amount`>0 <br/>";
                                           
                                            mysql_query("UPDATE `transaction` set `amount`='$traprn',`details`='$table Refund' where `accountno`='$accno' and `date`='$trn_date' and `amount`>0");
                                       }else{
                                            $time=time();
                                        echo "<br/><br/>INSERT into `transaction` set `transactionid`='$time',`amount`='$traprn',`details`='$table Refund',`accountno`='$accno',`date`='$trn_date' <br/>";
                                           
                                            mysql_query("INSERT into `transaction` set `transactionid`='$time',`amount`='$traprn',`details`='$table Refund',`accountno`='$accno',`date`='$trn_date'");
                                       }
                                   }
                                   
                                   if($traint>0){
                                       if($cntint>0)
                                       {
                                         echo "<br/><br/>UPDATE `transaction` set `interest`='$traint',`details`='$table Interest' where `accountno`='$accno' and `date`='$trn_date' and `interest`>0 <br/>";
                                           
                                           mysql_query("UPDATE `transaction` set `interest`='$traint',`details`='$table Interest' where `accountno`='$accno' and `date`='$trn_date' and `interest`>0");
                                       }else{
                                            $time=time();
                                          echo "<br/><br/>INSERT into `transaction` set `transactionid`='$time',`interest`='$traint',`details`='$table Interest',`accountno`='$accno',`date`='$trn_date' <br/>";
                                         
                                            mysql_query("INSERT into `transaction` set `transactionid`='$time',`interest`='$traint',`details`='$table Interest',`accountno`='$accno',`date`='$trn_date'");
                                       }
                                   }
                                                  
                                 }
                                 
                                 else{
                                          $time=time();
                                          if($traprn>0){
                                         echo "<br/><br/>INSERT into `transaction` set `transactionid`='$time',`amount`='$traprn',`details`='$table Refund',`accountno`='$accno',`date`='$trn_date' <br/>";
                                           
                                          mysql_query("INSERT into `transaction` set `transactionid`='$time',`amount`='$traprn',`details`='$table Refund',`accountno`='$accno',`date`='$trn_date'");
                                        
                                          }
                                          
                                        if($traint>0){
                                            echo "<br/><br/>INSERT into `transaction` set `transactionid`='$time',`interest`='$traint',`details`='$table Interest',`accountno`='$accno',`date`='$trn_date' <br/>";
                                         
                                          mysql_query("INSERT into `transaction` set `transactionid`='$time',`interest`='$traint',`details`='$table Interest',`accountno`='$accno',`date`='$trn_date'");
                                       
                                        }
                                        
                                 }      $b_cur_pri=0;$b_od_int=0;$b_cur_int=0;$a_pre_pri=0; $outstanding=0;
                                         $a_od_pr=0;$a_od_int=0; $a_tot_od=0;
    }
    else                                  // have no collection 
    {
        $refundtype = "No Refund";
        if(strtotime($getprvdata['coll_date'])>strtotime($getprvdata['cal_date']))
                {               
                    $lastodcaldate = date("Y-m-d", strtotime("+1 month", strtotime($getprvdata['cal_date'])));
                }
                else
                {
                     $lastodcaldate = $getprvdata['cal_date'];                     
                }                
                if(strtotime($lastodcaldate) > strtotime($resacc['cal_date']))
                {
                    $cint = 0; $cpri=0;
                }
                else
                {
                        $p = $getprvdata['outstanding'];
                        $diff = strtotime($resacc['cal_date']) - strtotime($lastodcaldate);
                        $day_diff = round($diff/3600/24);
                        if($day_diff<=0){
                           $day_diff=0; 
                        }
                        $t = $day_diff;
                        $r=$accdet['intrestrate']/365;;
                        $cint=round(($p*$t*$r)/100);                       
                        if(date("m",strtotime($resacc['cal_date']))==3)
                            {       
                               $comparedays=28;
                             }
                            else{
                               $comparedays=30;
                            }
                            if($day_diff<$comparedays){
                               $cpri=0;
                            }else{
                              // echo $resvendor['loangiven'].'---'.$plan;
                                $cpri = $principal;
                            }
                    
                        
                        if($cpri>$getprvdata['outstanding'])
                        {
                            $cpri = $getprvdata['outstanding'];
                        }
                }   
                
            
            $a_od_int = $cint+$getprvdata['a_od_int'];
            $a_od_pr = $cpri+$getprvdata['a_od_pr'];
            
            if($a_od_pr<0){
                   $a_od_pr=0;
            }
           if($a_od_int<0){
                 $a_od_int=0;
             }
           
             if($a_od_pr>$getprvdata['outstanding'])
                {
                    $a_od_pr = $getprvdata['outstanding'];
                }
         $a_tot_od = $a_od_int + $a_od_pr;
            
       echo "<br>1111111=====".$getprvdata['a_od_int'].'----'.$cint.'----'.$cpri.'----'.$getprvdata['a_od_pr'].'<br/>';
       
       echo "<br>".$ledgerquery="update `transaction_ledger` set `outstanding`='$getprvdata[outstanding]',`a_od_int`='$a_od_int',`a_tot_od`='$a_tot_od',`a_od_pr`='$a_od_pr',`Refundtype`='No Refund' where `id`='$resacc[id]'";
       
        echo "<br>". $tableupdate="update  `$table` set `odintrest`='$a_od_int',`odprincipal`='$a_od_pr',`amount_topay`='$getprvdata[outstanding]',`od_cal_date`='$resacc[cal_date]' where `loan_accno`='$accno'";
        
         mysql_query($ledgerquery);
    
         mysql_query($tableupdate);
    
    }
    $cal_dtt='';
    $lastodcaldate='';
    
}
}
//}
?>