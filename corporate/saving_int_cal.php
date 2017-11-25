<?php
include_once("function.php");
//ini_set("display_errors",0);
$qwe=mysql_query("select * from `savingaccount`");
while($rqwe=mysql_fetch_array($qwe)){
         echo $sdate = date("Y-m-d", strtotime($rqwe[opening_date]));
         echo $edate = date("Y-m-d", strtotime("last day of this month"));
        // $qaz=mysql_query("select SUM( amount ) AS totalamt  from  transaction where `accountno`='$rqwe[acc_no]' and `date` between '$sdate' and '$edate'");
         $qaz= mysql_query("SELECT SUM( amount ) AS totalamt FROM transaction WHERE `accountno` = 'S1'");
         $rqaz=mysql_fetch_array($qaz);
         $p= $rqaz['totalamt'];
         $t=1/12;
         $r=$rqwe['intrest_rate'];
         $intrest=($p*$t*$r)/100;
       
        $calint=$intrest;
        $amt=$calint;
        $damt=$rqwe['deposited_amt']+$calint;
          echo "update `savingaccount` set `deposited_amt`='$damt' where `acc_no`='$rqwe[acc_no]'"."</br>";
            //$updatesaving=mysql_query("update `savingaccount` set `deposited_amt`='$damt' where `acc_no`='$rqwe[acc_no]'");
           $time=time();
           $date=date("Y-m-d");
            echo "insert into `transaction` set `transactionid`='$time',`customerid`='$rqwe[customer_id]',
                                          `accountno`='$rqwe[acc_no]',`amount`='$amt',`date`='$date',`details`='Intrest'"."</br>";
          /* $updatetransaction=mysql_query("insert into `transaction` set `transactionid`='$time',`customerid`='$rqwe[customer_id]',
                                          `accountno`='$rqwe[acc_no]',`amount`='$calint',`date`='date("Y-m-d")',`details`='Intrest'");*/

    
}
?>