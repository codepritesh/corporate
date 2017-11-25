<?php
include_once("function.php");
ini_set('display_errors',1);
if($_POST['submit']){
$accno=$_POST['accno'];   
    
$str=substr($accno, 0, 2);
if($str=='GL'){ $table="goldloan";}
else if($str=='DL'){ $table="demand_loan";}
else if($str=='BL'){ $table="businessloan";}
else if($str=='AL'){ $table="agricultureloan";}
else if($str=='EL'){ $table="enterpriseloan";}
else if($str=='GR'){ $table="grouploan";}

$getid = mysql_fetch_array(mysql_query("select * from `$table` where `is_approved`='1' and `loan_accno`!='' and `loancomplited`='0' and `loan_accno`='$accno'"))or die(mysql_error());
 $id=$getid['id'];
if($id!='')
{
  $today = date("Y-m-d");
   $querytransall=mysql_query("SELECT *  FROM `transaction_ledger` WHERE `accountno` = (select loan_accno from `$table` where `is_approved`='1' and `loan_accno`!='' and `loancomplited`='0' and `id`='$id' ) and collection >= '0' and `cal_date`<='$today' order by coll_date asc");
    while($resulttransall=mysql_fetch_array($querytransall)){
        if($resulttransall['collection']==0)
        {
             $medate = date("Y-m-t", strtotime($resulttransall['cal_date']));
             singlemonthend($table,$medate,$resulttransall['accountno']);
        }else{
            
              //$currdate=date("Y-m-d");
                $currdate=$resulttransall['coll_date'];
                
                echo "SELECT *  FROM `transaction_ledger` WHERE `accountno` = (select loan_accno from `$table` where `is_approved`='1' and `loan_accno`!='' and `loancomplited`='0' and `id`='$id' ) and collection > '0'  and coll_date < '$currdate' order by coll_date desc  limit 1<br/>";
                
                $querytrans=mysql_query("SELECT *  FROM `transaction_ledger` WHERE `accountno` = (select loan_accno from `$table` where `is_approved`='1' and `loan_accno`!='' and `loancomplited`='0' and `id`='$id' ) and collection > '0'  and coll_date < '$currdate' order by coll_date desc  limit 1");
                
                while($resulttrans=mysql_fetch_array($querytrans)){
                    
                //echo "<br/>LId=======".$resulttrans['id'];
                    
                $nm_colldt=date('Y-m-d', strtotime("1 months", strtotime($resulttrans['cal_date'])));
                   
                    if(strtotime($resulttrans['cal_date']) >= strtotime($resulttrans['coll_date'])){
                    
                        $newcolldate=$resulttrans['cal_date'];
                    }else {
                        $newcolldate=$nm_colldt;
                    }
                    
                    echo "before Check = ".$resulttrans['cal_date'].'+++++++++'.$getid['loan_given_date'].'</br>';
                    if(strtotime($resulttrans['cal_date'])>strtolower($getid['loan_given_date']))
                    {
                        $newcolldate = $getid['loan_given_date'];
                    }
                    
                    echo "update `$table` set `od_cal_date`='$newcolldate', `odprincipal`='$resulttrans[a_od_pr]',`odintrest`='$resulttrans[a_od_int]',`amount_topay`='$resulttrans[outstanding]'  where  `id`='$id' ";
                    
                    mysql_query("update `$table` set `od_cal_date`='$newcolldate', `odprincipal`='$resulttrans[a_od_pr]',`odintrest`='$resulttrans[a_od_int]',`amount_topay`='$resulttrans[outstanding]'  where  `id`='$id' ");
                }
                
                
                
                
            //$currdate="2017-01-09";;
            //--------------------------------code to update odintrest od principal---------------------------------//
            $getvendor=mysql_query("SELECT * FROM `$table` where `is_approved`='1' and `loan_accno`!='' and `loancomplited`='0' and `id`='$id'") or die(mysql_error());
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
               // $my="2016-10";
                $cm_colldt="$my-$vlgdayy";
                $cal_dtt=$cm_colldt;
                 
                 echo "Check == ".$cm_colldt.'******'.$ress['od_cal_date'].'<br/>';
                    
                $diff = strtotime($cm_colldt) - strtotime($ress['od_cal_date']);
                $day_diff=round($diff/3600/24);
                if($day_diff<=0)
                {
                $day_diff=0; 
                }
                $p=$ress['amount_topay'];
                $t=$day_diff;
                $r=$ress['intrestrate']/365;
                echo $p.'====='.$t.'====='.$r;
                $cuint=round(($p*$t*$r)/100);
                if(strtotime($cm_colldt)<strtotime($ress['loan_given_date'])){
                  $cuint=0;
                }
                $edate=mysql_fetch_array(mysql_query("SELECT MAX(`cal_date`) as enddate FROM `transaction_ledger` WHERE `accountno` = '$resvendor[loan_accno]'"));
                $enddate=$edate['enddate'];
                //$enddate=date("Y-m-d", strtotime("+$plan month", strtotime($ress['loan_given_date'])));
                 if(date("m")==3)
                 {       
                    $comparedays=28;
                  }
                 else{
                    $comparedays=30;
                 }
                if(($ress['odprincipal']>=$ress['amount_topay'])
                   || ((date('d',strtotime($ress['loan_given_date']))>$vlgdayy)
                   && (strtotime($ress['loan_given_date'])==strtotime($ress['od_cal_date'])))
                   || (strtotime(date("Y-m",strtotime($ress['od_cal_date'])))>=strtotime($ymcurrdate))
                   || $day_diff < $comparedays)
                {
                $cuprin=0;
                }
                else{
                 $cuprin=$ress['loangiven']/$plan;
                   // echo "here2 -- $ress[loangiven] / $plan  ";
                }
                //echo $ress['od_cal_date'];
                if((strtotime($ress['od_cal_date']) >= strtotime($cm_colldt)) || (strtotime("Y-m",strtotime($cm_colldt))> strtotime("Y-m",strtotime($currdate))))
                     {
                      $cuprin=0;
                      $cuint=0;
                }
                if(strtotime(date("Y-m",strtotime($cm_colldt)))== strtotime(date("Y-m",strtotime($enddate))))
                {
                //$cuprin = $ress['amount_topay'];
                    //echo "here1";
                 $cuprin = $ress['amount_topay']-$ress['odprincipal']; 
                }
                echo $ress['loangiven'].'---'.$plan.'---'.$ress['odprincipal'].'-----'.$ress['odintrest'].'---'.$cuprin.'--'.$cuint;
                if(strtotime($currdate)>strtotime($cm_colldt) && strtotime($currdate)>strtotime($ress['od_cal_date']) )
                {
                    //echo "$ress[odintrest]+$cuint<br/>";
                        $odint=$ress['odintrest']+$cuint;
                    
                    //echo "$odint>$ress[amount_topay]<br/>";
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
                        $p=$ress['amount_topay'];
                        $t=$day_diff;
                        $r=$ress['intrestrate']/365;
                        $cuint=round(($p*$t*$r)/100);
                        if(($ress['odprincipal']>=$ress['amount_topay']))
                        {
                        $cuprin=0;
                        }
                        else
                        {
                          $cuprin=$ress['loangiven']/$plan;;
                           // echo "here3";
                        }
                }
                else{
                       
                        $odint=$ress['odintrest'];
                        $odpri=$ress['odprincipal'];
                    }
                
                
                
                echo '<br/>'.$cuprin."---".$cuint."----".$odpri."----".$odint."----".$cal_dtt.'<br/>';
                
                $total=round($cuint+$cuprin+$odpri+$odint);
                    
                recalculate($resvendor['loan_accno'],$cal_dtt,$currdate,$table,$resulttransall['collection'],$ress['amount_topay'],$odint,$odpri,$cuint,$cuprin,$resulttransall['id'],$resulttransall['Refundtype']);
    }
    }
    $msg = "Check Correction Result.";  
}else{
    $msg = "Invalid Account Number";    
}
  //header("location:manuallyloannew.php?msg=$msg");   
}else{
    //header("location:manuallyloannew.php");
}
?>