<?php
include_once("function.php");
ini_set("display_errors",1);
	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql=mysql_query("select * from `login` where `username`='$username' and `password`='$password'") or die(mysql_error());
		$res=mysql_fetch_array($sql);
		$n=mysql_num_rows($sql);
		$uname=$res['username'];
		$pname=$res['password'];
		$status=$res['status'];
		//echo "select * from `login` where `username`='$username' and `password`='$password'";
		//echo $n;
	if($n>0)
		{
           //echo fhbdf;
			/*//------------intrest calculation--------//
			$fetch=mysql_query("select * from `rundate`") or die(mysql_error());
			$res=mysql_fetch_array($fetch);
			$date=$res['date'];
			$unixtime = strtotime($res['date']);
			//echo '</br>';
			$end = date('Y-m-d', strtotime('+1 month', strtotime($date)));
			$current=strtotime(date("Y-m-d"));

			if($unixtime<=$current)
			{
				//echo "update `rundate` set `date`='$end' ";
				mysql_query("update `rundate` set `date`='$end' ");
				
				$qwe=mysql_query("select * from `savingaccount`");
				while($rqwe=mysql_fetch_array($qwe))
				{
					  $sdate = date("Y-m-d", strtotime($rqwe[opening_date]));
					  $edate = date("Y-m-d", strtotime("last day of this month"));
					 $qaz=mysql_query("select SUM( amount ) AS totalamt  from  transaction where `accountno`='$rqwe[acc_no]' and `date` between '$sdate' and '$edate'") or die(mysql_error());
					// $qaz= mysql_query("SELECT SUM( amount ) AS totalamt FROM transaction WHERE `accountno` = 'S1'");
					 $rqaz=mysql_fetch_array($qaz);
					 $p= $rqaz['totalamt'];
					 $t=1/12;
					 $r=$rqwe['intrest_rate'];
					 $intrest=($p*$t*$r)/100;
				       
					$calint=$intrest;
					$amt=$calint;
					$damt=$rqwe['deposited_amt']+$calint;
				    $updatesaving=mysql_query("update `savingaccount` set `deposited_amt`='$damt' where `acc_no`='$rqwe[acc_no]'") or die(mysql_error());
					 $time=time();
					 $date=date("Y-m-d");
					   $updatetransaction=mysql_query("insert into `transaction` set `transactionid`='$time',`customerid`='$rqwe[customer_id]',
									  `accountno`='$rqwe[acc_no]',`amount`='$calint',`date`='$date',`details`='Intrest'") or die(mysql_error());
				
				    
				}
				
			}
			//-----------end intrest cal------//*/
			$_SESSION['user']=$username;
			$_SESSION['status']=$status;
			header("location:index1.php");
		}
		else
		{
		$msg="Invalid Username and Password";
		header("location:index.php?msg=$msg");
		}
	}

?>
