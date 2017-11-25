<?php
include "function.php";
ini_set("display_errors",1);
//Connect to Database
//$time=time();
/*$fetch=mysql_query("select * from `compulsarydeposite`");
while($res=mysql_fetch_array($fetch))
{
	$time=time();
    mysql_query("INSERT INTO `transaction` set `transactionid`='$time',`customerid`='1',`accountno`='$res[acc_no]'
                            ,`amount`='$res[total_amt]',`date`='2015-10-31'
			    ,`details`='compulsorydeposite', `mode_of_payment`='cash',
			    `folio_no`='1'");
}
$fetch=mysql_query("select * from `savingaccount`");
while($res=mysql_fetch_array($fetch))
{
	$time=time();
    mysql_query("INSERT INTO `transaction` set `transactionid`='$time',`customerid`='1',`accountno`='$res[acc_no]'
                            ,`amount`='$res[deposited_amt]',`date`='2015-10-31'
			    ,`details`='savingaccount', `mode_of_payment`='cash',
			    `folio_no`='2'");
}*/
/*$fetch=mysql_query("select * from `agricultureloan`");
while($res=mysql_fetch_array($fetch))
{
	$name=$res['name'];
	$fetch1=mysql_query("select * from `customer` where `name`='$name'");
	echo "</br>".$count=mysql_num_rows($fetch1);
	$res1=mysql_fetch_array($fetch1);
	if($count==1)
	{
		mysql_query("update `agricultureloan` set `customer_id`='$res1[customer_id]' where `id`='$res[id]'");
	}

}
$fetch=mysql_query("select * from `businessloan`");
while($res=mysql_fetch_array($fetch))
{
	$name=$res['name'];
	$fetch1=mysql_query("select * from `customer` where `name`='$name'");
	echo "</br>".$count=mysql_num_rows($fetch1);
	$res1=mysql_fetch_array($fetch1);
	if($count==1)
	{
		mysql_query("update `businessloan` set `customer_id`='$res1[customer_id]' where `id`='$res[id]'");
	}

}
$fetch=mysql_query("select * from `enterpriseloan`");
while($res=mysql_fetch_array($fetch))
{
	$name=$res['name'];
	$fetch1=mysql_query("select * from `customer` where `name`='$name'");
	echo "</br>".$count=mysql_num_rows($fetch1);
	$res1=mysql_fetch_array($fetch1);
	if($count==1)
	{
		mysql_query("update `enterpriseloan` set `customer_id`='$res1[customer_id]' where `id`='$res[id]'");
	}

}
$fetch=mysql_query("select * from `grouploan`");
while($res=mysql_fetch_array($fetch))
{
	$name=$res['name'];
	$fetch1=mysql_query("select * from `customer` where `name`='$name'");
	echo "</br>".$count=mysql_num_rows($fetch1);
	$res1=mysql_fetch_array($fetch1);
	if($count==1)
	{
		mysql_query("update `grouploan` set `customer_id`='$res1[customer_id]' where `id`='$res[id]'");
	}

}
/*$fetch=mysql_query("select * from `fixeddeposite`");
while($res=mysql_fetch_array($fetch))
{
	$name=$res['name'];
	$fetch1=mysql_query("select * from `customer` where `name`='$name'");
	echo "</br>".$count=mysql_num_rows($fetch1);
	$res1=mysql_fetch_array($fetch1);
	if($count==1)
	{
		mysql_query("update `fixeddeposite` set `customer_id`='$res1[customer_id]' where `id`='$res[id]'");
	}

}*/
/*$fetch=mysql_query("select * from `savingaccount`");
$n=0;
while($res=mysql_fetch_array($fetch))
{

	$name=$res['name'];
	$fetch1=mysql_query("select * from `compulsarydeposite` where `name`='$name'");
	$count=mysql_num_rows($fetch1);
	$res1=mysql_fetch_array($fetch1);
	if($count==0)
	{
		
		$fetch2=mysql_query("select * from `customer` where `name`='$name'");
		echo "</br>count=".$count2=mysql_num_rows($fetch2);
		if($count2==0)
		{
			$r1=mysql_fetch_array(mysql_query("select max(id) as id from `customer`"));
			$temcuid=$r1['id']+1;
			$cuid="c".$temcuid;
			mysql_query("insert into `customer` set `customer_id`='$cuid',`mem_cus_id`='$cuid1', `introducer`='1', `name`='$name',`guardian_name`='$gurdian',`dob`='$dob' ,`address`='$address',`phno`='$phno',`post`='$post'
                    ,`dist`='$dist',`pin`='$pin',`gender`='$gender',`age`='$age'
		    ,`religion`='$religion'
		    ,`cast`='$cast'
		    ,`nominee_name`='$nominee'
                    ,`annual_income`='$annual'
                    ,`photo`='$filename'
                    ,`documents`='$filename1',`sign`='$filename3',`idproof`='$filename2'");
		mysql_query("insert into `compulsarydeposite` set `name`='$name',`customer_id`='$cuid',`acc_no`='$res[acc_no]',`address`='$res[address]'");
		}else{
		$res2=mysql_fetch_array($fetch2);
		echo "</br>".$n."---".$res['name']."---".$res['customer_id']."--".$res['acc_no']."--".$res['address']; $n++;
		mysql_query("insert into `compulsarydeposite` set `name`='$name',`customer_id`='$res2[customer_id]',`acc_no`='$res[acc_no]',`address`='$res[address]'");
		}
		
		//mysql_query("insert into `compulsarydeposite` set  ");
	}

}*/

/*$fetch=mysql_query("SELECT *
FROM `compulsarydeposite`
WHERE `acc_no` LIKE 'V%'");
while($res=mysql_fetch_array($fetch))
{
    echo $acc_no=$res['acc_no'];
    echo "</br>".$acc=ltrim($acc_no,"V");
    mysql_query("update `compulsarydeposite` set `acc_no`='$acc' where `id`='$res[id]'");
    mysql_query("update `transaction` set `accountno`='$acc' where `accountno`='$acc_no'");
        
}*/
/*$fetch=mysql_query("select * from `fixeddeposite` where `customer_id`=''");
while($res=mysql_fetch_array($fetch))
{ $n++;
//echo $n;
	$name1=explode(',',$name=$res['name']);
        $fetch1=mysql_query("select * from `customer` where `name`='$name1[0]'");
	echo "</br>rows=".$count=mysql_num_rows($fetch1)."--".$name=$name1[0];;
	$res1=mysql_fetch_array($fetch1);
	if($count==1)
	{
           echo "</br>update `fixeddeposite` set `customer_id`='$res1[customer_id]' where `id`='$res[id]'";
		//mysql_query("update `fixeddeposite` set `customer_id`='$res1[customer_id]' where `id`='$res[id]'");
	}
echo "</br>";
}*/
/*$fetch=mysql_query("select * from `fixeddeposite` where `customer_id`=''");
while($res=mysql_fetch_array($fetch))
{ $n++;
//echo $n;
	$name1=explode(',',$name=$res['name']);
        $fetch1=mysql_query("select * from `customer` where `name`='$name1[0]'");
	echo "</br>rows=".$count=mysql_num_rows($fetch1)."--".$name=$name1[0];
	$res1=mysql_fetch_array($fetch1);
	if($count==1)
	{
           echo "</br>update `fixeddeposite` set `customer_id`='$res1[customer_id]' where `id`='$res[id]'";
		//mysql_query("update `fixeddeposite` set `customer_id`='$res1[customer_id]' where `id`='$res[id]'");
	}
echo "</br>";
}*/
/*$count=0;
$fetch1=mysql_query("SELECT DISTINCT name
FROM customer;");

            while($res1=mysql_fetch_array($fetch1))
            {
                $name=$res1['name'];
                $fetch=mysql_query("SELECT *
            FROM customer where name='$name'");
                $count=mysql_num_rows($fetch);
                if($count>=2)
                {
                        
                        while($res=mysql_fetch_array($fetch))
                        {
                        echo "</br>name=".$res['name']."---custid---".$res['customer_id']."---village---".$res['address'];
                        }
                }
        }
*/
/*$fetch=mysql_query("select * from `agricultureloan` where `customer_id`=''");
while($res=mysql_fetch_array($fetch))
{ $n++;

	$name=$res['name'];
        $address=$res['address'];
	$fetch1=mysql_query("select * from `customer` where `name`='$name'");
	$count=mysql_num_rows($fetch1);
	$res1=mysql_fetch_array($fetch1);
	if($count>0)
	{
            echo "</br>".$n."=";
            echo "update `agricultureloan` set `customer_id`='$res1[customer_id]' where `id`='$res[id]'";
		//mysql_query("update `agricultureloan` set `customer_id`='$res1[customer_id]' where `id`='$res[id]'");
	}

}*/


/*****************RD MATURITY CALULATION********************/
/*$fetch=mysql_query("select * from `recurringdiposite` where `status`='0' ");
while($res=mysql_fetch_array($fetch))
{
	$amt1=0;
            $typ=1;
            $n=$res['plan'];
            $p=$res['monthly_amount'];
            $r=$res['intrest_rate']/12;
	    $intrest=0;
            for($x=1;$x<=$n;$x++)
            {
		$tp=$p*$x;
		$si=round(($tp*1*$r)/100);
		$intrest=$intrest+$si;
            }
	   echo "</br>".$maturity=$intrest+($n*$p);
	   echo "</br>update `recurringdiposite` set `maturity_amount`='$maturity' where `id`='$res[id]'";
	   mysql_query("update `recurringdiposite` set `maturity_amount`='$maturity' where `id`='$res[id]'");
	    


}  
$fetch=mysql_query("SELECT * FROM  `dailydeposit` WHERE  `customer_id` =  ''");
while($rs=mysql_fetch_array($fetch))
{
    $r1=mysql_fetch_array(mysql_query("select max(id) as id from `customer`"));
                $temcuid=$r1['id']+1;
                $cuid="c".$temcuid;
                
                echo "insert into `customer` set `customer_id`='$cuid', `name`='$rs[name]',`village`='$rs[village]'";
                echo "</br>";
                
                mysql_query("insert into `customer` set `customer_id`='$cuid', `name`='$rs[name]',`village`='$rs[village]'");
                
                
                echo "update `dailydeposit` set `customer_id`='$cuid' where `id`='$rs[id]'";
                echo "</br>";
                 echo "</br>";
                mysql_query("update `dailydeposit` set `customer_id`='$cuid' where `id`='$rs[id]'"); 
} */
/*$fetch=mysql_query("select * from `customer` where village='0'");
while($res=mysql_fetch_array($fetch))
{ $n++;
//echo $n;
	echo "</br>village=".$vilid=$res['address'];
        $fetch1=mysql_query("select * from `prifix` where `name`='$vilid'");
	echo "</br>rows=".$count=mysql_num_rows($fetch1);
	$res1=mysql_fetch_array($fetch1);
	if($count==1)
	{
           echo "</br>update `customer` set `village`='$res1[slno]' where `id`='$res[id]'";
		//mysql_query("update `customer` set `village`='$res1[slno]' where `id`='$res[id]'");
	}
echo "</br>";
}*/
/*$fetch=mysql_query("select * from `compulsarydeposite`");
while($res=mysql_fetch_array($fetch))
{
	$time=time();
	if($res['total_amt']>0)
	{
		if($res['last_deposited_date']=='0000-00-00')
		{
			mysql_query("update `compulsarydeposite` set `last_deposited_date`='2015-12-31' where id='$res[id]'");
			$date="2015-12-31";
		}else{ $date=$res['last_deposited_date'];}
  mysql_query("INSERT INTO `transaction` set `transactionid`='$time',`customerid`='$res[customer_id]',`accountno`='$res[acc_no]'
                            ,`amount`='$res[total_amt]',`date`='$date',`details`='compulsorydeposite'
			    ,`agentid`='$res[agent_id]',
			    `folio_no`='1',`voucher`='$voucher'") or die(mysql_error());
  echo "</br>INSERT INTO `transaction` set `transactionid`='$time',`customerid`='$res[customer_id]',`accountno`='$res[acc_no]'
                            ,`amount`='$res[total_amt]',`date`='$date',`details`='compulsorydeposite'
			    ,`agentid`='$res[agent_id]',
			    `folio_no`='1',`voucher`='$voucher'";
	}
}*/


/*$fetch=mysql_query("select * from `dailydeposit`");
while($res=mysql_fetch_array($fetch))
{
	$time=time();
	if($res['total_amt']>0)
	{
		if($res['last_deposited_date']=='0000-00-00')
		{
			mysql_query("update `dailydeposit` set `last_deposited_date`='2015-12-31' where id='$res[id]'");
			$date="2015-12-31";
		}else{ $date=$res['last_deposited_date'];}
  mysql_query("INSERT INTO `transaction` set `transactionid`='$time',`customerid`='$res[customer_id]',`accountno`='$res[acc_no]'
                            ,`amount`='$res[total_amt]',`date`='$date',`details`='dailydeposite'
			    ,`agentid`='$res[agent_id]',
			    `folio_no`='4',`voucher`='$voucher'") or die(mysql_error());
  echo "</br>INSERT INTO `transaction` set `transactionid`='$time',`customerid`='$res[customer_id]',`accountno`='$res[acc_no]'
                            ,`amount`='$res[total_amt]',`date`='$date',`details`='dailydeposite'
			    ,`agentid`='$res[agent_id]',
			    `folio_no`='4',`voucher`='$voucher'";
	}
}*/

/*$fetch=mysql_query("select * from `savingaccount`");
while($res=mysql_fetch_array($fetch))
{
	$time=time();
	if($res['deposited_amt']>0)
	{
		if($res['last_update_date']=='0000-00-00')
		{
			mysql_query("update `savingaccount` set `last_update_date`='2015-12-31' where id='$res[id]'");
			$date="2015-12-31";
		}else{ $date=$res['last_update_date'];}
  mysql_query("INSERT INTO `transaction` set `transactionid`='$time',`customerid`='$res[customer_id]',`accountno`='$res[acc_no]'
                            ,`amount`='$res[deposited_amt]',`date`='$date',`details`='savingdeposite',
			    `folio_no`='2',`voucher`='$voucher'") or die(mysql_error());
  echo "</br>INSERT INTO `transaction` set `transactionid`='$time',`customerid`='$res[customer_id]',`accountno`='$res[acc_no]'
                            ,`amount`='$res[deposited_amt]',`date`='$date',`details`='savingdeposite',
			    `folio_no`='2',`voucher`='$voucher'";
	}
}*/

/*$fetch=mysql_query("select * from `recurringdiposite` where `status`='0'");
while($res=mysql_fetch_array($fetch))
{
	$time=time();
	if($res['deposited_amt']>0)
	{
		if($res['last_update_date']=='0000-00-00')
		{
			mysql_query("update `recurringdiposite` set `last_diposite_date`='2015-12-31' where id='$res[id]'");
			$date="2015-12-31";
		}else{ $date=$res['last_diposite_date'];}
  mysql_query("INSERT INTO `transaction` set `transactionid`='$time',`customerid`='$res[customer_id]',`accountno`='$res[acc_no]'
                            ,`amount`='$res[deposited_amt]',`date`='$date',`details`='recurringdeposite',
			    `folio_no`='3',`voucher`='$voucher'") or die(mysql_error());
  echo "</br>INSERT INTO `transaction` set `transactionid`='$time',`customerid`='$res[customer_id]',`accountno`='$res[acc_no]'
                            ,`amount`='$res[deposited_amt]',`date`='$date',`details`='recurringdeposite',
			    `folio_no`='3',`voucher`='$voucher'";
	}
}*/

/*$fetch=mysql_query("select * from `fixeddeposite` where `status`='0'");
while($res=mysql_fetch_array($fetch))
{
	$time=time();
	if($res['deposited_amt']>0)
	{
		if($res['last_update_date']=='0000-00-00')
		{
			mysql_query("update `fixeddeposite` set `last_update_date`='2015-12-31' where id='$res[id]'");
			$date="2015-12-31";
		}else{ $date=$res['last_update_date'];}
  mysql_query("INSERT INTO `transaction` set `transactionid`='$time',`customerid`='$res[customer_id]',`accountno`='$res[acc_no]'
                            ,`amount`='$res[deposited_amt]',`date`='$date',`details`='fixeddeposite',
			    `folio_no`='5',`voucher`='$voucher'") or die(mysql_error());
  echo "</br>INSERT INTO `transaction` set `transactionid`='$time',`customerid`='$res[customer_id]',`accountno`='$res[acc_no]'
                            ,`amount`='$res[deposited_amt]',`date`='$date',`details`='fixeddeposite',
			    `folio_no`='5',`voucher`='$voucher'";
	}
}*/
/*$no=0;
$time=time();
echo "select * from `dailydeposit` where `id`>'707'";
$fetch=mysql_query("select * from `dailydeposit` where `id`>'707'") or die(mysql_error());
while($res=mysql_fetch_array($fetch))
{
	echo "</br>".$qwe="INSERT INTO `transaction` set `transactionid`='$time',`customerid`='$res[customer_id]',`accountno`='$res[acc_no]',
			    `amount`='$res[deposited_amt]',`previous_amt`='0',
			    `date`='$res[last_deposited_date]',`details`='dailydeposite',
			    `mode_of_payment`='cash',`agentid`='$res[agent_id]',`folio_no`='4'";
	mysql_query($qwe) or die(mysql_error());
	
}*/
/*$no=0;
$fetch=mysql_query("select * from `TABLE 47`");
while($res=mysql_fetch_array($fetch))
{
	$accno=$res['COL 7'];
        $village=$res['COL 9'];
        if($no>1)
			{
        $fetch1=mysql_query("select * from `prefix` where `name` like '$village'");
        $res1=mysql_fetch_array($fetch1);
        echo "</br>village=".$vid=$res1['slno'];
        
                             $fetchv=mysql_query("select * from `goldloan` where `loan_accno`='$accno' and `village`='0'");
			   $resv=mysql_fetch_array($fetchv);
			   $count=mysql_num_rows($fetchv);
			   $time=time();
			   if($count>0)
			   {
				echo "</br>".$qwe="update `goldloan` set `village`='$vid' where `loan_accno`='$accno'";
				mysql_query($qwe);
			   }
                        }
              $no++;          
	
}*/
/*$fetch=mysql_query("select * from `agricultureloan`");
while($res=mysql_fetch_array($fetch))
{
echo $vid=$res['address'];
echo "</br>select * from `prefix` where `name`='$vid'";
$fetch1=mysql_query("select * from `prefix` where `name`='$vid'");
$res1=mysql_fetch_array($fetch1);
$originalDate = $res1['slno'];
echo "</br>".$qwe="update agricultureloan set `village`='$originalDate' where id='$res[id]'";
//mysql_query($qwe) or die(mysql_error());

}
*/
/*$fetch=mysql_query("select * from `grouploan`");

while($ressdl=mysql_fetch_array($fetch))
{
    
    	   $ressdl['village'];
			  
			  $fetvill=mysql_query("select * from `prefix` where `slno`='$ressdl[village]'");
                          $rvill=mysql_fetch_array($fetvill);
			  $vildt=$rvill['date'];
			  $d= date("d",strtotime($vildt));
			 
			  $loanamt=$ressdl['loangiven'];
			  $year=$ressdl['plan'];
			  $no=$year;
			  if(strtotime($ressdl['loan_given_date']) < strtotime("2015-11-30")){
			    $no=$no+1;
			  }else{
			     $no=$no;
			  }
			 // $emi=$loanamt/($no);
			 
			  $irpermonth=$ressdl['intrestrate']/12;
			  $dispersaldt=$ressdl['loan_given_date'];
			  $my=date("Y-m",strtotime($dispersaldt));
                          $loandate=$ressdl['loan_given_date'];
			  $areadt=date("$my-$d");
			  $firstinstalldate=date("Y-m-d", strtotime("+1 month", strtotime($areadt)));
			  $cnt=1;
                          $totint=0;
			  $subtot=0;
			  $totpr=0;
                          //echo $no;
			  $emi=$loanamt/($no);
                          $str = strtotime($areadt) - (strtotime($loandate));
			   $diff=round($str/3600/24);
                            if($diff>0){
                               // echo "Ok";
                                $cnt++;
                                 $r=$ressdl['intrestrate']/365;
				 $t=$diff;
				 $intrest=($loanamt*$t*$r)/100;
				$time=time();
                               // echo "insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`cal_date`='$areadt', `b_cur_int`='$intrest', `b_cur_pri`='0', `tot_pr`='0'";
                                mysql_query("insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',
                                 `outstanding`='$loanamt',`cal_date`='$areadt', `b_cur_int`='$intrest', `b_cur_pri`='0', `tot_pr`='0'") or die(mysql_error());
	
                             $dt=strtotime($areadt);
                             $outball=$outbal;
			     $loanamtt=$loanamt;
			     $p=$loanamt;
                             $pre_dt = $areadt;
                             for($i=1;$i<=$no;$i++){
				$cnt++;
                                $final = date("Y-m-d", strtotime("+1 month", $dt));
				$daysofmonth1=date('t',strtotime($final));
				
				 $str = strtotime($final) - (strtotime($pre_dt));
				 $daydiff=round($str/3600/24);
				  //echo $final."---".$pre_dt."----".$daydiff."</br>";
				 $r=$ressdl['intrestrate']/365;
				 $t=$daydiff;
				 //$t=$daysofmonth1;
				 $intrest=($loanamtt*$t*$r)/100;
				 //$intrest=round($intrest);
				 $total=$emi+$intrest;
				 $total=round($total);
                                 
				 $emi=round($emi,2);
                                 
				 $loanamtt-=$emi;
				 $loanamtt=round($loanamtt,2);
                                 if($loanamtt<1){
                                    $loanamtt=0;
                                 }
				 $dt=strtotime($final);
                                 $time=time();
                                 //echo "insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`cal_date`='$final', `b_cur_int`='$intrest', `b_cur_pri`='$emi', `tot_pr`='$emi'";
                                 mysql_query("insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',
                                 `cal_date`='$final', `b_cur_int`='$intrest', `b_cur_pri`='$emi', `tot_pr`='$emi'") or die(mysql_error());
	                        $pre_dt=$final;
                                }
                               
				  }else{
                             //   echo "Not ok";
                            $emi=$loanamt/($no-1);
                            $tot1=0;
			    $dt=strtotime($areadt);
			    $outball=$outbal;
			    $loanamtt=$loanamt;
			    $p=$loanamtt;
			    $pre_dt = $ressdl['loan_given_date'];
			    
			    $totint=0;
			    $subtot=0;
			    $totpr=0;
			    for($i=1;$i<=$no;$i++){
				$cnt++;
				 
				 $final = date("Y-m-d", strtotime("+1 month", $dt));
				 $daysofmonth1=date('t',strtotime($final));
				
				 $str = strtotime($final) - (strtotime($pre_dt));
				 $daydiff=round($str/3600/24);
				  //echo $final."---".$pre_dt."----".$daydiff."</br>";
				 $r=$ressdl['intrestrate']/365;
				 $t=$daydiff;
				 //$t=$daysofmonth1;
				 $intrest=($loanamtt*$t*$r)/100;
				 //$intrest=round($intrest);
				 $total=$emi+$intrest;
				 $total=round($total);
				 $emi=round($emi,2);
				 $loanamtt-=$emi;
				 $loanamtt=round($loanamtt,2);
                                 if($loanamtt<1){
                                    $loanamtt=0;
                                 }
				 $dt=strtotime($final);
                                  $time=time();
                                  if($i==1){
                                  $tpr = 0;
                                  $loanamtt = $ressdl['loangiven'];
                                 //  echo "insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`cal_date`='$final', `b_cur_int`='$intrest', `b_cur_pri`='$tpr', `tot_pr`='$tpr'";
                                 mysql_query("insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',
                                 `outstanding`='$loanamtt',`cal_date`='$final', `b_cur_int`='$intrest', `b_cur_pri`='$tpr', `tot_pr`='$tpr'") or die(mysql_error());
                              
                                  }else{
                                  $tpr=$emi;
                                 // echo "insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`cal_date`='$final', `b_cur_int`='$intrest', `b_cur_pri`='$tpr', `tot_pr`='$tpr'";
                                 mysql_query("insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',
                                 `cal_date`='$final', `b_cur_int`='$intrest', `b_cur_pri`='$tpr', `tot_pr`='$tpr'") or die(mysql_error());
				 }
                                  
                            $pre_dt=$final;
                            }
                            }
              
              echo "</br></br></br></br></br></br></br>";            
}
*/
/*$fetch=mysql_query("select * from `businessloan`");
while($res=mysql_fetch_array($fetch))
{
   $my=date("Y-m",strtotime($res['last_refund_date']));
       
   $tot_ood=$res['odintrest']+$res['odprincipal'];
   echo "update `transaction_ledger` set `outstanding`='$res[amount_topay]', `coll_date`='$res[last_refund_date]',`a_od_int`='$res[odintrest]',`a_od_pr`='$res[odprincipal]',`a_tot_od`='$tot_ood' where `accountno`='$res[loan_accno]' and `cal_date` like '%$my%'"."</br>";
   mysql_query("update `transaction_ledger` set `outstanding`='$res[amount_topay]', `coll_date`='$res[last_refund_date]',`a_od_int`='$res[odintrest]',`a_od_pr`='$res[odprincipal]',`a_tot_od`='$tot_ood' where `accountno`='$res[loan_accno]' and `cal_date` like '%$my%'");
}*/
/*$fetch=mysql_query("select * from `businessloan`");
while($res=mysql_fetch_array($fetch))
{
    $my=date("Y-m",strtotime($res['last_refund_date']));
        
    $tot_ood=$res['odintrest']+$res['odprincipal'];
    echo "update `transaction_ledger` set `outstanding`='$res[amount_topay]', `coll_date`='$res[last_refund_date]',`a_od_int`='$res[odintrest]',`a_od_pr`='$res[odprincipal]',`a_tot_od`='$tot_ood' where `accountno`='$res[loan_accno]' and `cal_date` like '%$my%'"."</br>";
    mysql_query("update `transaction_ledger` set `outstanding`='$res[amount_topay]', `coll_date`='$res[last_refund_date]',`a_od_int`='$res[odintrest]',`a_od_pr`='$res[odprincipal]',`a_tot_od`='$tot_ood' where `accountno`='$res[loan_accno]' and `cal_date` like '%$my%'");
}*/

/*$fetch=mysql_query("select * from `goldloan`");

while($ressdl=mysql_fetch_array($fetch))
{
	$ressdl['village'];
			  
			  $fetvill=mysql_query("select * from `prefix` where `slno`='$ressdl[village]'");
                          $rvill=mysql_fetch_array($fetvill);
			  $vildt=$rvill['date'];
			  $d= date("d",strtotime($vildt));
			 
			  $loanamt=$ressdl['loangiven'];
			  $year=$ressdl['plan'];
			  $no=$year;
			  if(strtotime($ressdl['loan_given_date']) < strtotime("2015-11-30")){
			    $no=$no+1;
			  }else{
			     $no=$no;
			  }
			 // $emi=$loanamt/($no);
			 
			  $irpermonth=$ressdl['intrestrate']/12;
			  $dispersaldt=$ressdl['loan_given_date'];
			  $my=date("Y-m",strtotime($dispersaldt));
                          $loandate=$ressdl['loan_given_date'];
			  $areadt=date("$my-$d");
			  $firstinstalldate=date("Y-m-d", strtotime("+1 month", strtotime($areadt)));
			  $cnt=1;
                          $totint=0;
			  $subtot=0;
			  $totpr=0;
                          //echo $no;
			  $emi=$loanamt/($no);
                          $str = strtotime($areadt) - (strtotime($loandate));
			   $diff=round($str/3600/24);
                            if($diff>0){
                               // echo "Ok";
                                $cnt++;
                                 $r=$ressdl['intrestrate']/365;
				 $t=$diff;
				 $intrest=($loanamt*$t*$r)/100;
				$time=time();
                               // echo "insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`cal_date`='$areadt', `b_cur_int`='$intrest', `b_cur_pri`='0', `tot_pr`='0'";
                                mysql_query("insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',
                                 `outstanding`='$loanamt',`cal_date`='$areadt', `b_cur_int`='$intrest'") or die(mysql_error());
	
                             $dt=strtotime($areadt);
                             $outball=$outbal;
			     $loanamtt=$loanamt;
			     $p=$loanamt;
                             $pre_dt = $areadt;
                             for($i=1;$i<=$no;$i++){
				$cnt++;
                                $final = date("Y-m-d", strtotime("+1 month", $dt));
				$daysofmonth1=date('t',strtotime($final));
				
				 $str = strtotime($final) - (strtotime($pre_dt));
				 $daydiff=round($str/3600/24);
				  //echo $final."---".$pre_dt."----".$daydiff."</br>";
				 $r=$ressdl['intrestrate']/365;
				 $t=$daydiff;
				 //$t=$daysofmonth1;
				 $intrest=($loanamtt*$t*$r)/100;
				 //$intrest=round($intrest);
				 $total=$emi+$intrest;
				 $total=round($total);
                                 
				 $emi=round($emi,2);
                                 
				 $loanamtt-=$emi;
				 $loanamtt=round($loanamtt,2);
                                 if($loanamtt<1){
                                    $loanamtt=0;
                                 }
				 $dt=strtotime($final);
                                 $time=time();
                                 //echo "insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`cal_date`='$final', `b_cur_int`='$intrest', `b_cur_pri`='$emi', `tot_pr`='$emi'";
                                 mysql_query("insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',
                                 `cal_date`='$final', `b_cur_int`='$intrest'") or die(mysql_error());
	                        $pre_dt=$final;
                                }
                               
				  }else{
                             //   echo "Not ok";
                            $emi=$loanamt/($no-1);
                            $tot1=0;
			    $dt=strtotime($areadt);
			    $outball=$outbal;
			    $loanamtt=$loanamt;
			    $p=$loanamtt;
			    $pre_dt = $ressdl['loan_given_date'];
			    
			    $totint=0;
			    $subtot=0;
			    $totpr=0;
			    for($i=1;$i<=$no;$i++){
				$cnt++;
				 
				 $final = date("Y-m-d", strtotime("+1 month", $dt));
				 $daysofmonth1=date('t',strtotime($final));
				
				 $str = strtotime($final) - (strtotime($pre_dt));
				 $daydiff=round($str/3600/24);
				  //echo $final."---".$pre_dt."----".$daydiff."</br>";
				 $r=$ressdl['intrestrate']/365;
				 $t=$daydiff;
				 //$t=$daysofmonth1;
				 $intrest=($loanamtt*$t*$r)/100;
				 //$intrest=round($intrest);
				 $total=$emi+$intrest;
				 $total=round($total);
				 $emi=round($emi,2);
				 $loanamtt-=$emi;
				 $loanamtt=round($loanamtt,2);
                                 if($loanamtt<1){
                                    $loanamtt=0;
                                 }
				 $dt=strtotime($final);
                                  $time=time();
                                  if($i==1){
                                  $tpr = 0;
                                  $loanamtt = $ressdl['loangiven'];
                                 //  echo "insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`cal_date`='$final', `b_cur_int`='$intrest', `b_cur_pri`='$tpr', `tot_pr`='$tpr'";
                                 mysql_query("insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',
                                 `outstanding`='$loanamtt',`cal_date`='$final', `b_cur_int`='$intrest'") or die(mysql_error());
                              
                                  }else{
                                  $tpr=$emi;
                                 // echo "insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`cal_date`='$final', `b_cur_int`='$intrest', `b_cur_pri`='$tpr', `tot_pr`='$tpr'";
                                 mysql_query("insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',
                                 `cal_date`='$final', `b_cur_int`='$intrest'") or die(mysql_error());
				 }
                                  
                            $pre_dt=$final;
                            }
                            }
}
*/
/*
$fetchtable=mysql_query("select * from `TABLE 50`");
$noo=0;

while($res=mysql_fetch_array($fetchtable))
{$accont='';
	$noo++;
	echo "</br>".$noo;
	if($noo>2 && $res['COL 6']=="GROUP")
	{
            echo "</br>accno=".$accont="GL".$res['COL 7'];
		if($accont!='')
                {
                                   
                                    
                                    $fetch=mysql_query("select * from grouploan where `loan_accno`='$accont'");
                                    $ressdl=mysql_fetch_array($fetch);    
                                    $ressdl['village'];
                                       
                                       $fetvill=mysql_query("select * from `prefix` where `slno`='$ressdl[village]'");
                                       $rvill=mysql_fetch_array($fetvill);
                                       $vildt=$rvill['date'];
                                       $d= date("d",strtotime($vildt));
                                       $ldd= date("d",strtotime($ressdl['loan_given_date']));
			  
                                        $loanamt=$ressdl['loangiven'];
                                        $year=$ressdl['plan'];
                                        $no=$year;
                                        if($ldd <= $d){
                                           $no=$no;
                                          }else{
                                               if(strtotime($ressdl['loan_given_date']) < strtotime("2015-11-30")){
                                                  $no=$no;
                                               }else{
                                                 $no=$no-1; 
                                               }
                                          }
                                      // $emi=$loanamt/($no);
                                       $dispersaldt=$ressdl['loan_given_date'];
                                       $my=date("Y-m",strtotime($dispersaldt));
                                       $loandate=$ressdl['loan_given_date'];
                                       $areadt=date("$my-$d");
                                       $firstinstalldate=date("Y-m-d", strtotime("+1 month", strtotime($areadt)));                                       
                                       $str = strtotime($areadt) - (strtotime($loandate));
                                        $diff=round($str/3600/24);
                                         if($diff>0){
                                            // echo "Ok";
                                            $time=time();
                                             echo "</br>insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`outstanding`='$loanamt',`cal_date`='$areadt'";
                                             mysql_query("insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`outstanding`='$loanamt',`cal_date`='$areadt'") or die(mysql_error());
                                          $dt=strtotime($areadt);
                                          $pre_dt = $areadt;
                                          for($i=1;$i<=$no;$i++){
                                             $final = date("Y-m-d", strtotime("+1 month", $dt));
                                              $str = strtotime($final) - (strtotime($pre_dt));
                                              $dt=strtotime($final);
                                              $time=time();
                                              echo "</br>insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`cal_date`='$final'";
                                              mysql_query("insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`cal_date`='$final'") or die(mysql_error());
                                              
                                             $pre_dt=$final;
                                             }
                                            
                                        }else{
                                            //echo "Not ok";
                                            $dt=strtotime($areadt);
                                            $pre_dt = $ressdl['loan_given_date'];
                                            for($i=1;$i<=$no;$i++){
                                                 $final = date("Y-m-d", strtotime("+1 month", $dt));
                                                 $dt=strtotime($final);
                                                  $time=time();
                                                  if($i==1){
                                                  $loanamtt = $ressdl['loangiven'];
                                                   echo "</br>insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`outstanding`='$loanamtt',`cal_date`='$final'";
                                                  mysql_query("insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`outstanding`='$loanamtt',`cal_date`='$final'") or die(mysql_error());
                                              
                                                  }else{
                                                  echo "</br>insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`cal_date`='$final'";
                                                 mysql_query("insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`cal_date`='$final'") or die(mysql_error());
                                                 }
                                            $pre_dt=$final;
                                            }
                                         }
                                    
                }
	}
	
}
*/
/*
$fetchtable=mysql_query("select * from `TABLE 50`");
$noo=0;

while($res=mysql_fetch_array($fetchtable))
{
    $accont='';
	$noo++;
	echo "</br>".$noo;
	if($noo>2 && $res['COL 6']=="GROUP")
	{
            echo "</br>accno=".$accont="GL".$res['COL 7'];
		if($accont!='')
                {
                                 
                    $fetch=mysql_query("select * from `grouploan` where `loan_accno`='$accont' ");
                    while($res=mysql_fetch_array($fetch))
                    {
                      $my=date("Y-m",strtotime($res['last_refund_date']));
                          
                      $tot_ood=$res['odintrest'];
                      echo "update `transaction_ledger` set `outstanding`='$res[amount_topay]', `coll_date`='$res[last_refund_date]',`a_od_int`='$res[odintrest]',`a_tot_od`='$tot_ood' where `accountno`='$res[loan_accno]' and `cal_date` like '$my%'"."</br>";
                      mysql_query("update `transaction_ledger` set `outstanding`='$res[amount_topay]', `coll_date`='$res[last_refund_date]',`a_od_int`='$res[odintrest]',`a_tot_od`='$tot_ood' where `accountno`='$res[loan_accno]' and `cal_date` like '$my%'");
                    }
                }
        }
}
*/

/*
$qwe=mysql_query("SELECT * FROM  `fixeddeposite` WHERE  `acc_no` =  ''");
$i=0;
while($res=mysql_fetch_array($qwe)){
    $i++;
    $acc="old".$i;
    echo "<br>update `fixeddeposite` set `acc_no`='$acc' where `id`='$res[id]'";
    mysql_query("update `fixeddeposite` set `acc_no`='$acc' where `id`='$res[id]'");
     
}*/

/***************************************************ledger Manually Entry****************************************************************/
/*
$fetch=mysql_query("select * from businessloan  where `loan_accno`='BL1856'");
$ressdl=mysql_fetch_array($fetch);    
		      
			  $fetvill=mysql_query("select * from `prefix` where `slno`='$ressdl[village]'");
                          $rvill=mysql_fetch_array($fetvill);
			  $vildt=$rvill['date'];
			  $d= date("d",strtotime($vildt));
                          $time=time();
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
			
			echo "</br>insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`outstanding`='$loanamt',`cal_date`='$dispersaldt'";
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
                                 
                                echo "</br>insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`cal_date`='$final'";
                                mysql_query("insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`cal_date`='$final'") or die(mysql_error());
                                
                                 $pre_dt=$final;
                                } }else{
                                $dt=strtotime($areadt);
                                for($i=1;$i<=$no;$i++){
				$final = date("Y-m-d", strtotime("+1 month", $dt));
			
                                echo "</br>insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`outstanding`='$loanamt',`cal_date`='$areadt'";
                                mysql_query("insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`outstanding`='$loanamt',`cal_date`='$areadt'") or die(mysql_error());
                                 
                                 $pre_dt=$final;
				 
*/				 
/************************************Ledger Manually Entry******************************************/




/*----------------------------- Manually Loan Repayment -------------------------*/

$cnt=0;
$coll=mysql_query("SELECT * FROM `transaction_ledger` WHERE `coll_date` LIKE '2016-04%' and `accountno`='BL1517'");
while($rcoll=mysql_fetch_array($coll))
{
   $ymcurrdate='2016-04';
   echo  $cnt++."====";
   echo  $coll_amt=$rcoll['collection'];
    $coll_date=$rcoll['coll_date'];
    
    //$table="goldloan";
    //$table="demand_loan";
    $table="businessloan";
    //$table="agricultureloan";
    //$table="enterpriseloan";
    //$table="grouploan";
 
    echo $accno=$rcoll['accountno'];
   
    $getdate=mysql_fetch_array(mysql_query("SELECT MAX(`cal_date`) as cal_date FROM `transaction_ledger` WHERE `accountno`='$accno' and `cal_date` LIKE '2016-03%'"));
    $frmcal_date=$getdate['cal_date'];
    
    $qwe=mysql_query("SELECT * FROM $table where `loan_accno`='$accno'");
    $res=mysql_fetch_array($qwe);
    
    $fetvill=mysql_query("select * from `prefix` where `slno`='$res[village]'");
    $rvill=mysql_fetch_array($fetvill);
    $vlgday= date("d",strtotime($rvill['date']));
    
    
    $cal_dt=date("$ymcurrdate-$vlgday");
    $cal_dtt=$cal_dt;
    
    echo $frmcal_date.'---'.$rcoll['cal_date'];
    $diff = abs(strtotime($frmcal_date) - strtotime($rcoll['cal_date']));
    $day_diff=round($diff/3600/24);
    
    $p=$res['amount_topay'];
    $t=$day_diff;
    $r=$res['intrestrate']/365;
    
    echo '<br/>'.$p.'*'.$t.'*'.$r;
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
            
    $enddate=date("Y-m-d", strtotime("+$plan month", strtotime($res['loan_given_date'])));
    if($table=='goldloan' || $table=='demand_loan' || ($res['odprincipal']>=$res['amount_topay']))
	{
           
	$curpri=0;
	}
	else{
            
	 $curpri=$res['loangiven']/$plan;  
	}
	if(strtotime(date("Y-m",strtotime($rcoll['cal_date'])))==strtotime(date("Y-m",strtotime($enddate))))
	{
            
	$curpri = $res['amount_topay'];
	}
    
         if(strtotime($res['od_cal_date'])== strtotime($rcoll['cal_date']))
         {
        
            $curpri=0;
            $curint=0;
         }
        
         echo $coll_date.'----'.$rcoll['cal_date'];
       
         echo "<br/>---AAAAAAAAAAAAAAS".$curint.'----'.$curpri.'----'.$res['odintrest'].'-----'.$res['odprincipal'].'---'.$res['amount_topay'].'<br/>'; 
        if(strtotime($coll_date)>strtotime($rcoll['cal_date'])){
                echo "YES";
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
     
      echo "CURRENT".$curpri.'----'.$curint.'---'.$odint.'----'.$odpri;
        //---------------------Ladger Calculation Start---------------------------------//
	//$b_od_int,$b_cur_int, $b_od_pri, $b_cur_pri ,$a_pre_pri,$a_od_int,$a_od_pr;
	if($table=='goldloan' || $table=='demand_loan')
	{
	  $ramt=$coll_amt;
	      if($coll_amt >= $odint){   		// od Interest
		$b_od_int=$odint;
		$ramt=$coll_amt-$odint;
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
                
            echo "GD===".$b_od_int.'----'.$b_cur_int.'----'.$b_od_pri.'---'.$b_cur_pri.'---'.$a_pre_pri;
	}	
	else
	{
      $ramt=$coll_amt;
	  if($coll_amt >= $odint){   		// OD Interest
		$b_od_int=$odint;
		$ramt=$coll_amt-$odint;
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
                
               echo "NOTGD===".$b_od_int.'----'.$b_cur_int.'----'.$b_od_pri.'---'.$b_cur_pri.'---'.$a_pre_pri;
	}
        
        
	$tot_pri = $b_od_pri + $b_cur_pri + $a_pre_pri ;
	$a_od_int = ($odint+$curint)-($b_od_int+$b_cur_int);
	$a_od_pr = ($odpri+$curpri)-($b_od_pri+$b_cur_pri);
        
	if($a_od_pr<0){
	  $a_od_pr=0;
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
        $coll_amt=$coll_amt;
        $trn_date=$rcoll['coll_date'];
	// ------------------- All respective table update start ---------------------------//
				
                                $ledger=mysql_query("select * from `transaction_ledger` where `accountno`='$accno' and `cal_date` like '$ymcurrdate%'");
                              echo   $cntledger=mysql_num_rows($ledger);
				 if($cntledger>0)
                                {
                                  
					$ledgerquery="update `transaction_ledger` set `b_od_int`='$b_od_int',`b_cur_int`='$b_cur_int',
					`b_od_pri`='$b_od_pri',`b_cur_pri`='$b_cur_pri',`a_pre_pri`='$a_pre_pri',`tot_pr`='$tot_pri',
					`outstanding`='$outstanding',`a_od_int`='$a_od_int',`a_tot_od`='$a_tot_od',`a_od_pr`='$a_od_pr',`collection`='$coll_amt',`coll_date`='$trn_date'
                                        where `accountno`='$accno' and `cal_date`='$cal_dt'";
				}else{
                                    
					$ledgerquery="insert into `transaction_ledger` set  `b_od_int`='$b_od_int',`b_cur_int`='$b_cur_int',
					`b_od_pri`='$b_od_pri',`b_cur_pri`='$b_cur_pri',`a_pre_pri`='$a_pre_pri',`tot_pr`='$tot_pri',`collection`='$coll_amt',`coll_date`='$trn_date'
					`outstanding`='$outstanding',`a_od_int`='$a_od_int',`a_tot_od`='$a_tot_od',`a_od_pr`='$a_od_pr',
                                        `accountno`='$accno',`cal_date`='$cal_dt'";
				}
        echo '<br/>'.$ledgerquery;
	 mysql_query($ledgerquery);
	if($outstanding==0){
	$complited=1;
	}else{
	  $complited=0;
	}
        if($cal_dt==''){
          $cal_dt=date("$ymcurrdate-$vlgday");   
        }
        echo '<br/>'.$tableupdate="update  `$table` set `odintrest`='$a_od_int',`odprincipal`='$a_od_pr',`amount_topay`='$outstanding',`last_refund_date`='$trn_date',`last_refund_amt`='$coll_amt',
        `od_cal_date`='$cal_dtt',`loancomplited`='$complited' where `loan_accno`='$accno'";
        mysql_query($tableupdate)or die(mysql_error());
				
			$traint=$b_od_int+$b_cur_int;
			$traprn=$b_od_pri+$a_pre_pri+$b_cur_pri;
		      
			 // transaction table upadte start
			 
			  $trn=mysql_query("select * from `transaction` where `accountno`='$accno' and `date`='$trn_date'")or die(mysql_error());;
			  $cnttrn=mysql_num_rows($trn);
			  
			  if($cnttrn>1){  // intrest and principal
			    echo "UPDATE `transaction` set `amount`='$traprn',`details`='$table Refund' where `accountno`='$accno' and `date`='$trn_date' and `amount`>0 <br/>";
			    mysql_query("UPDATE `transaction` set `amount`='$traprn',`details`='$table Refund' where `accountno`='$accno' and `date`='$trn_date' and `amount`>0");
			     echo "UPDATE `transaction` set `interest`='$traint',`details`='$table Interest' where `accountno`='$accno' and `date`='$trn_date' and `interest`>0";
			    mysql_query("UPDATE `transaction` set `interest`='$traint',`details`='$table Interest' where `accountno`='$accno' and `date`='$trn_date'");
			    
			  }else{	// only interest
                            echo "UPDATE `transaction` set `interest`='$traint',`details`='$table Interest' where `accountno`='$accno' and `date`='$trn_date'";
			     mysql_query("UPDATE `transaction` set `interest`='$traint',`details`='$table Interest' where `accountno`='$accno' and `date`='$trn_date'");
			  }
			  
			  //   transaction table upadte end
		    echo '<br/>';	
				
		
    
}
echo $cnt;

/********************************************************manually Loan repayment***********************************************************/


//------------------------------------------------Agriculture Loan Start---------------------------------------//
/*$currdate=date("Y-m-d");
//echo "SELECT * FROM `agricultureloan` where `loancomplited`='0' and `loan_accno`='Al1389' and MONTH( od_cal_date ) <= MONTH( CURDATE( ) ) and  YEAR( od_cal_date ) <= YEAR( CURDATE( ) )and MONTH( last_refund_date ) < MONTH( CURDATE( ) ) and YEAR( last_refund_date ) <= YEAR( CURDATE( ) ) ";
$getvendor=mysql_query("SELECT * FROM `agricultureloan` where `loancomplited`='0' and `loan_accno`='Al1389' and MONTH( od_cal_date ) <= MONTH( CURDATE( ) ) and  YEAR( od_cal_date ) <= YEAR( CURDATE( ) )and MONTH( last_refund_date ) < MONTH( CURDATE( ) ) and YEAR( last_refund_date ) <= YEAR( CURDATE( ) ) ") or die(mysql_error());
while($resvendor=mysql_fetch_array($getvendor))
{
   echo $table="agricultureloan";
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
	
	$my=date("Y-m");   
        $cm_colldt="$my-$vlgdayy";
        
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
        
        $prnicipal=$monthsdif*($resvendor['loangiven']/$plan);
        
        if(($resvendor['odprincipal']>=$resvendor['amount_topay']) || ((date('d',strtotime($resvendor['loan_given_date']))>$vlgdayy) && (strtotime($resvendor['loan_given_date'])==strtotime($resvendor['od_cal_date']))))
	{
            $prnicipal=0;
        }
       
        if(strtotime(date("Y-m",strtotime($cm_colldt)))== strtotime(date("Y-m",strtotime($enddate))))
	{
	$prnicipal = $resvendor['amount_topay'];
	}
	
        echo  $resvendor['odprincipal'].'---'.$prnicipal;
        $outstanding=$resvendor['amount_topay'];
        $a_od_int=$int;
        $a_od_pr=$prnicipal;
        $a_tot_od=$a_od_int+$a_od_pr;
        
        $ledger=mysql_query("select * from `transaction_ledger` where `accountno`='$loan_accno' and `cal_date` like '$my%'");
	$cntledger=mysql_num_rows($ledger);
	if($cntledger>0){
       echo  $ledgerquery="update `transaction_ledger` set `outstanding`='$outstanding',
                        `a_od_int`='$a_od_int',`a_tot_od`='$a_tot_od',`a_od_pr`='$a_od_pr'
                         where `accountno`='$loan_accno' and `cal_date`='$cm_colldt'";
        }else{
         echo  $ledgerquery="insert into `transaction_ledger` set `outstanding`='$outstanding',
                        `a_od_int`='$a_od_int',`a_tot_od`='$a_tot_od',`a_od_pr`='$a_od_pr',
                        `accountno`='$loan_accno' and `cal_date`='$cm_colldt'";
        }
        
      //  mysql_query($ledgerquery)or die(mysql_error());
        if($a_od_pr>=$outstanding){
		$a_od_pr=$outstanding;

	}else{
		$a_od_pr=$resvendor['odprincipal']+$a_od_pr;
	}
        echo $tableupdate="update  `$table` set `odintrest`=`odintrest`+$a_od_int,`odprincipal`='$a_od_pr',`amount_topay`='$outstanding',`od_cal_date`='$cm_colldt' where `loan_accno`='$loan_accno'";
	
      //  mysql_query($tableupdate)or die(mysql_error());
    
    
}
*/
//------------------------------------------------Agriculture Loan End---------------------------------------//
































































//start
/*
$time=time();
$qwe=mysql_query("SELECT * FROM  `bankdetails` ");
while($res=mysql_fetch_array($qwe)){
    if($res['type']=='deposit'){
        echo "</br>insert into `transaction` set `transactionid`='$time',`mode_of_payment`='$res[payment_mode]',`chq_dd_no`='$res[ch_dd_no]',
		      `chq_dd_bank_name`='$res[ch_dd_bankname]',`chq_dd_date`='$res[ch_dd_date]',`amount`='-$res[amount]',`date`='$res[date]',
                      `details`='BY Bank Deposit',`folio_no`='19',`voucher`='$res[voucher]'";
         mysql_query("insert into `transaction` set `transactionid`='$time',`mode_of_payment`='$res[payment_mode]',`chq_dd_no`='$res[ch_dd_no]',
		      `chq_dd_bank_name`='$res[ch_dd_bankname]',`chq_dd_date`='$res[ch_dd_date]',`amount`='-$res[amount]',`date`='$res[date]',
                      `details`='BY Bank Deposit',`folio_no`='19',`voucher`='$res[voucher]'")or die(mysql_error());
    }else{
        $amount=-($res['amount']);
        echo "</br>insert into `transaction` set `transactionid`='$time',`mode_of_payment`='$res[payment_mode]',`chq_dd_no`='$res[ch_dd_no]',
		      `chq_dd_bank_name`='$res[ch_dd_bankname]',`chq_dd_date`='$res[ch_dd_date]',`amount`='$amount',`date`='$res[date]',
                      `details`='BY Bank Withdrawl',`folio_no`='19',`voucher`='$res[voucher]'";
                      
         mysql_query("insert into `transaction` set `transactionid`='$time',`mode_of_payment`='$res[payment_mode]',`chq_dd_no`='$res[ch_dd_no]',
		      `chq_dd_bank_name`='$res[ch_dd_bankname]',`chq_dd_date`='$res[ch_dd_date]',`amount`='$amount',`date`='$res[date]',
                      `details`='BY Bank Withdrawl',`folio_no`='19',`voucher`='$res[voucher]'")or die(mysql_error());
    }
}
*/
/*/*$qwe=mysql_query("SELECT * FROM  `transaction` WHERE  `details` =  'processing fee'");
while($res=mysql_fetch_array($qwe)){
    echo "</br>Update  `transaction` set `folio_no`=21 where `id`='$res[id]'";
    mysql_query("Update  `transaction` set `folio_no`=21 where `id`='$res[id]'");
}*/
//mysql_query("DELETE `transaction` WHERE  `details` =  'Opening Balance'");


/*$n=0;
$amt=0;
$amt1=0;
$fetch=mysql_query("select * from `TABLE 54` ");

       while ($data=mysql_fetch_array($fetch))
{
       $n++;
if($n>1 && $n<328 && $data['COL 1']!='')
{
           $accont=$data['COL 1']."D".$data['COL 3'];
           $amt=$data['COL 5'];
           $date="2016-03-31";
           $fetchd=mysql_query("select * from `dailydeposit` where `acc_no`='$accont'");
           echo $rno=mysql_num_rows($fetchd);
           if($rno>0){
           
           $qwe="update `dailydeposit` set `total_amt`='$amt',`last_deposited_date`='$date',`status`='0' where `acc_no`='$accont'";
           echo "<br/>";
           mysql_query($qwe)or die(mysql_error());
           $amt1=$amt1+$amt;
           }else{ echo $n."-".$qwe="update `dailydeposit` set `total_amt`='$amt',`last_deposited_date`='$date',`status`='0' where `acc_no`='$accont'"; echo "<br/>";}
           }
           
}
echo "</br>amount=".$amt1;*/
?>