<?php
include_once("function.php");
ini_set("display_errors",1);
$table=$_GET['table'];
$id=$_GET['id'];
$time=time();
/******************************************Ledger***************************************/
$fetch=mysql_query("select * from $table where `id`='$id'");
$ressdl=mysql_fetch_array($fetch);    
		      
			  $fetvill=mysql_query("select * from `prefix` where `slno`='$ressdl[village]'");
                          $rvill=mysql_fetch_array($fetvill);
			  $vildt=$rvill['date'];
			  $d= date("d",strtotime($vildt));
                          
			  $loanamt=$ressdl['loangiven'];
			  $year=$ressdl['plan'];
			  $no=$year;
                          $dispersaldt=$ressdl['loan_given_date'];
			  $my=date("Y-m",strtotime($dispersaldt));
			  
			  
			  $areadt=date("$my-$d");
			  $lastdtofdispersal=date('Y-m-t',strtotime($dispersaldt));
			  $firstdtofdispersal=date('Y-m-01',strtotime($dispersaldt));
			  $firstinstalldate=date("Y-m-d", strtotime("+1 month", strtotime($areadt)));
			  $daysofmonth=date('t',strtotime($dispersaldt));
			  $str = strtotime($firstinstalldate) - (strtotime($dispersaldt));
			  $daydiff=round($str/3600/24);
			
			//echo "</br>insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`outstanding`='$loanamt',`cal_date`='$dispersaldt'";
			mysql_query("insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`outstanding`='$loanamt',`cal_date`='$dispersaldt'") or die(mysql_error());
			
			  if($daydiff > 0){
			  
			    $dt=strtotime($areadt);
			    $pre_dt = $ressdl['loan_given_date'];
			    
			    for($i=1;$i<=$no;$i++){
				
				 $final = date("Y-m-d", strtotime("+1 month", $dt));
				 $daysofmonth1=date('t',strtotime($final));
				
				 $str = strtotime($final) - (strtotime($pre_dt));
				 $daydiff=floor($str/3600/24);
				 $dt=strtotime($final);
                                 
                                //echo "</br>insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`cal_date`='$final'";
                                mysql_query("insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`cal_date`='$final'") or die(mysql_error());
                                
                                 $pre_dt=$final;
                                } }else{
                                $dt=strtotime($areadt);
                                for($i=1;$i<=$no;$i++){
				$final = date("Y-m-d", strtotime("+1 month", $dt));
			
                               // echo "</br>insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`outstanding`='$loanamt',`cal_date`='$areadt'";
                                mysql_query("insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`outstanding`='$loanamt',`cal_date`='$areadt'") or die(mysql_error());
                                 
                                 $pre_dt=$final;
                                 }}
                                 
  header("location:demandscheduler.php?id=$id&table=$table");

?>