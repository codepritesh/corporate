<?php

include_once("function.php");
ini_set("display_errors",1);

//$gdata = mysql_query("SELECT * FROM `transaction_ledger` WHERE `collection`>0 and `cal_date`='0000-00-00'");
////$gdata = mysql_query("select * from  `transaction_ledger` WHERE `cal_date` > '$target' and `accountno`='BL1958'  group by `accountno`");
//while($rgdata=mysql_fetch_array($gdata))
//{
//        $accno = $rgdata['accountno'];
//        $str=substr($accno, 0, 2);
//        if($str=='GL'){ $table="goldloan";}
//        else if($str=='DL'){ $table="demand_loan";}
//        else if($str=='BL'){ $table="businessloan";}
//        else if($str=='AL'){ $table="agricultureloan";}
//        else if($str=='EL'){ $table="enterpriseloan";}
//        else if($str=='GR'){ $table="grouploan";}
//        $accdet = mysql_fetch_array(mysql_query("select * from $table where `loan_accno`='$accno'"));  // get account details
//        echo $vdate = get_villagedate($accdet['village']);
//        $cal_date = date('Y-m',strtotime($rgdata['coll_date'])).'-'.date('d',strtotime($vdate));
//        echo '<br/>'.$qwe="UPDATE `transaction_ledger` set `cal_date` ='$cal_date' where `id`='$rgdata[id]' " ;
//        mysql_query($qwe);
//    
//}


$getdata=mysql_query("select * from `transaction_ledger` where  `cal_date`>'2016-03-31' and `cal_date`<'2017-04-31' group by `cal_date`,`accountno`");
while($resdata = mysql_fetch_array($getdata))
{
      $accno = $resdata['accountno'];
      $cntrow  = mysql_query("select * from `transaction_ledger` where  `accountno`='$accno' and `cal_date`='$resdata[cal_date]'");
      $count = mysql_num_rows($cntrow);
      if($count>1){

        $cntdata = mysql_fetch_array(mysql_query("select * from `transaction_ledger` where `accountno`='$accno' and `cal_date`='$resdata[cal_date]' and `collection`='0.00'"));
        if($cntdata){
                    echo "<br>Found-----".$cntdata['id'].'---'.$count.'----'.$resdata['cal_date'].'----'.$accno.'<br/>';
                    //mysql_query("delete from `transaction_ledger` where `id`='$cntdata[id]'");
        }
      }
}

//$gdata = $getdata=mysql_query("select * from `transaction_ledger` where  `cal_date`>'2016-04-01' and `cal_date`<'2017-04-31' group by `accountno`");
//while($rgdata=mysql_fetch_array($gdata))
//{
//        $accno = $rgdata['accountno'];
//        $str=substr($accno, 0, 2);
//        if($str=='GL'){ $table="goldloan";}
//        else if($str=='DL'){ $table="demand_loan";}
//        else if($str=='BL'){ $table="businessloan";}
//        else if($str=='AL'){ $table="agricultureloan";}
//        else if($str=='EL'){ $table="enterpriseloan";}
//        else if($str=='GR'){ $table="grouploan";}
//        //echo "select * from $table where `loan_accno`='$accno'";
//        $accdet = mysql_fetch_array(mysql_query("select * from $table where `loan_accno`='$accno'"));  // get account details
//        $loangivendate = $accdet['loan_given_date'];
//        $chkacc = mysql_fetch_array(mysql_query("select * from `transaction_ledger` where `cal_date`='$rgdata[cal_date]' and `accountno`='$accno'"));
//        if($chkacc){
//            echo 'Found = '.$chkacc['accountno'].'<br>';
//        }
//    
//}
//

?>