<?php
include "function.php"; //Connect to Database
$n=0;
$fetch=mysql_query("select * from `TABLE 49`");
	
        while ($data=mysql_fetch_array($fetch))
	{$n++;
			if($data['COL 1']!="" && $data['COL 21']>0)
			{	
			   
			   $accont="VS".$data['COL 2'];
			  
			  
			$time=time();
			$originalDate1=$data['COL 4'];
			
			$date2 = str_replace('/', '-', $originalDate1);
			$tdate=date('Y-m-d', strtotime($date2));
			
			$detail="saving deposite";
			$tamount=$data['COL 21'];
			
			$fetchacc=mysql_query("select * from `savingaccount` where `acc_no`='$accont'");
			$resacc=mysql_fetch_array($fetchacc);
			$custid=$resacc['customer_id'];
			
			//mysql_query("update `savingaccount` set `startdate`='$tdate',`start_date`='$tdate' where `acc_no`='$accont'");
			
		$qwe="insert into `transaction` set `transactionid`='$time',`customerid`='$custid',`accountno`='$accont'
                                 ,`amount`='$tamount',`date`='$tdate',`details`='$detail',`mode_of_payment`='cash'
				 ,`folio_no`='2'";	  
	mysql_query($qwe) or die(mysql_error());
	
        echo "</br>---".$n."---".$qwe;
			}
	}
?>