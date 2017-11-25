<?php
include "function.php";
//Connect to Database

/*****************Compulsory Saving *******************/

/*$n=0;
$fetch=mysql_query("select * from `TABLE 49`");
	
        while ($data=mysql_fetch_array($fetch))
	{
        $n++;
			if($data['COL 3']!="")
			{
                if($n>=1955 && $n<=2019)
                {
                $accont="CM".$data['COL 2'];
                $amt=$data['COL 3'];
                $date="2016-03-31";
               echo  $qwe="update `compulsarydeposite` set `total_amt`='$amt',`last_deposited_date`='$date' where `acc_no`='$accont'";
               echo "<br/>";
                mysql_query($qwe)or die(mysql_error());
			}
            }
	}*/

/*****************Compulsory Saving *******************/

/*****************RD Saving **************************/     
/*
 $n=0;
$fetch=mysql_query("select * from `TABLE 50`");
	
        while ($data=mysql_fetch_array($fetch))
	{
        $n++;
			if($data['COL 1']!="")
			{
                $accont="RD".$data['COL 1'];
            $fetchacc=mysql_query("select * from `recurringdiposite` where `acc_no`='$accont'");
			$resacc=mysql_fetch_array($fetchacc);
			$monthly_amount=$resacc['monthly_amount'];   
                $amt=$data['COL 4'];
                $installment=$amt/$monthly_amount;
                $paid_installment=$installment;
                
                $date="2016-03-31";
               echo $n."-".$qwe="update `recurringdiposite` set `deposited_amt`='$amt',`last_diposite_date`='$date',`paid_installment`='$paid_installment' where `acc_no`='$accont'";
               echo "<br/>";
               mysql_query($qwe)or die(mysql_error());
            }
	}
	
    */
/*****************RD Saving *******************/


/*****************Daily Saving **************************/     
/*$n=0;
$fetch=mysql_query("select * from `TABLE 54`");
	
        while ($data=mysql_fetch_array($fetch))
	{
        $n++;
			if($n>1 && $n<328 && $data['COL 1']!='')
			{
            $accont=$data['COL 1']."D".$data['COL 3']; 
            $amt=$data['COL 5'];
            $date="2016-03-31";
            echo $n."-".$qwe="update `dailydeposit` set `total_amt`='$amt',`last_deposited_date`='$date' where `acc_no`='$accont'";
            echo "<br/>";
            mysql_query($qwe)or die(mysql_error());
            }
	}*/
    
/*****************Daily Saving *******************/

/*****************Loan*******************/


	 /*  $q=mysql_query("select * from `goldloan`");
	   while($r=mysql_fetch_array($q)){
	   $myStr=$r['loan_accno'];
	   $result = substr($myStr, 0, 2);
	   if($result!='GL'){
		$newstring = str_replace("G", "GL", $myStr);
		echo "<br/>update `goldloan` set `loan_accno`='$newstring' where `id`='$r[id]'";
		mysql_query("update `goldloan` set `loan_accno`='$newstring' where `id`='$r[id]'");
	   }
	   }
	   
	   $q=mysql_query("select * from `grouploan`");
	   while($r=mysql_fetch_array($q)){
	   $myStr=$r['loan_accno'];
	   $result = substr($myStr, 0, 2);
	   if($result!='GL'){
		$newstring = str_replace("GL", "GRL", $myStr);
		echo "<br/>update `grouploan` set `loan_accno`='$newstring' where `id`='$r[id]'";
		mysql_query("update `grouploan` set `loan_accno`='$newstring' where `id`='$r[id]'");
	   }
	   } 

$fetch=mysql_query("select * from `TABLE 51`");	
    while ($data=mysql_fetch_array($fetch))
	{
		$n++;
		if($n>=2 && $n<=278)
	   {
				//echo  $n;
				//echo "<br/>";
				if($data['COL 3']=="BUSINESS"){
				   $accont="BL".$data['COL 4'];
				   $table='businessloan';
				}elseif($data['COL 3']=="AGRICULTURE"){
				   $accont="AL".$data['COL 4'];
				   $table='agricultureloan';
				}elseif($data['COL 3']=="ENTERPRISESS"){
				   $accont="EL".$data['COL 4'];
				   $table='enterpriseloan';
				}elseif($data['COL 3']=="GROUP"){
				   $accont="GRL".$data['COL 4'];
				   $table='grouploan';
			  }
			  
				$amount_topay=$data['COL 5'];
				$odprincipal=$data['COL 6'];
				$odintrest=$data['COL 7'];
				
				$data=mysql_query("select * from $table where `loan_accno`='$accont'");
				$resr=mysql_fetch_array($data);
				
				
				$fetchmysql=mysql_fetch_array(mysql_query("select * from `prefix` where `slno`='$resr[village]'"));
				$vildt=$fetchmysql['date'];
				$d = date("d",strtotime($vildt));
				$od_cal_date="2016-02-".$d;
				if($odprincipal=="CLOSE"){
					$loancomplited=1;
				}
				else
				{
					$loancomplited=0;
					$tot=$odprincipal+$odintrest;
					echo "update `transaction_ledger` set `outstanding`='$amount_topay',`a_od_int`='$odintrest',`a_od_pr`='$odprincipal',`a_tot_od`='$tot' where `cal_date` like '2016-02%' and `accountno`='$accont'";
					echo "<br/>";
					mysql_query("update `transaction_ledger` set `outstanding`='$amount_topay',`a_od_int`='$odintrest',`a_od_pr`='$odprincipal',`a_tot_od`='$tot' where `cal_date` like '2016-02%' and `accountno`='$accont'") or die(mysql_error());
				}
				
				echo $n."-".$qwe="update $table set `amount_topay`='$amount_topay',`odprincipal`='$odprincipal',`odintrest`='$odintrest',`od_cal_date`='$od_cal_date',`loancomplited`='$loancomplited'  where `loan_accno`='$accont'";
				echo "<br/>";
				 mysql_query($qwe)or die(mysql_error());
	   }
	}
	*/

	
	/*$fetch=mysql_query("select * from `TABLE 52`");	
    while ($data=mysql_fetch_array($fetch))
	{
		$n++;
		//if($n>=2 && $n<=190
        if($n=157)
	   {
				//echo  $n;
				//echo "<br/>";
				if($data['COL 3']=="GOLD"){
				   $accont="GL".$data['COL 4'];
				   $table='goldloan';
				}else{
				   $accont="DL".$data['COL 4'];
				   $table='demand_loan';
				}
			  
				$amount_topay=$data['COL 5'];
				$odprincipal=$data['COL 6'];
				$odintrest=$data['COL 7'];
				
				$data=mysql_query("select * from $table where `loan_accno`='$accont'");
				$resr=mysql_fetch_array($data);
				
				
				$fetchmysql=mysql_fetch_array(mysql_query("select * from `prefix` where `slno`='$resr[village]'"));
				$vildt=$fetchmysql['date'];
				$d = date("d",strtotime($vildt));
				$od_cal_date="2016-02-".$d;
				if($odprincipal=="CLOSE"){
					$loancomplited=1;
				}
				else
				{
					$loancomplited=0;
					$tot=$odprincipal+$odintrest;
					echo "update `transaction_ledger` set `outstanding`='$amount_topay',`a_od_int`='$odintrest',`a_od_pr`='$odprincipal',`a_tot_od`='$tot' where `cal_date` like '2016-02%' and `accountno`='$accont'";
					echo "<br/>";
					//mysql_query("update `transaction_ledger` set `outstanding`='$amount_topay',`a_od_int`='$odintrest',`a_od_pr`='$odprincipal',`a_tot_od`='$tot' where `cal_date` like '2016-02%' and `accountno`='$accont'") or die(mysql_error());
				}
				
				echo $n."-".$qwe="update $table set `amount_topay`='$amount_topay',`odprincipal`='$odprincipal',`odintrest`='$odintrest',`od_cal_date`='$od_cal_date',`loancomplited`='$loancomplited'  where `loan_accno`='$accont'";
				echo "<br/>";
				// mysql_query($qwe)or die(mysql_error());
	   }
	}*/

/********************** Loan *********************/
/***************** Loan Ledger*******************/


/********************Ledger******************/

/*$time=time();
$fetch=mysql_query("select * from demand_loan");
while($ressdl=mysql_fetch_array($fetch)){
    
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
			  $str = strtotime($areadt) - (strtotime($dispersaldt));
			  $daydiff=round($str/3600/24);
			
			//echo "</br>insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`outstanding`='$loanamt',`cal_date`='$dispersaldt'";
			mysql_query("insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`outstanding`='$loanamt',`cal_date`='$dispersaldt'") or die(mysql_error());
			
			  if($daydiff > 0){
			  
			    $dt=strtotime($areadt);
			    $pre_dt = $ressdl['loan_given_date'];
			    mysql_query("insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`cal_date`='$areadt'") or die(mysql_error());
                                
			    for($i=1;$i<=$no;$i++){
				
				 $final = date("Y-m-d", strtotime("+1 month", $dt));
				 $daysofmonth1=date('t',strtotime($final));
				
				 $str = strtotime($final) - (strtotime($pre_dt));
				 $daydiff=floor($str/3600/24);
				 $dt=strtotime($final);
                                 
                               // echo "</br>insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`cal_date`='$final'";
                               mysql_query("insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`cal_date`='$final'") or die(mysql_error());
                                
                                 $pre_dt=$final;
                                } }else{
                                $pre_dt=strtotime($areadt);
                                for($i=1;$i<=$no+1;$i++){
				$final = date("Y-m-d", strtotime("+1 month", $pre_dt));
			
                                //echo "</br>insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`cal_date`='$areadt'";
                                mysql_query("insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$ressdl[loan_accno]',`cal_date`='$final'") or die(mysql_error());
                                 
                                 $pre_dt=strtotime($final);
                                 }
								 }
}
*/
/***************** Loan Ledger*******************/


/*****************Bad Loan*******************/
/*	
$fetch=mysql_query("select * from `TABLE 53`");	
    while ($data=mysql_fetch_array($fetch))
	{
		$n++;
		if($n>=2)
	   {
				//echo  $n;
				//echo "<br/>";
				$loan_amt=$data['COL 3'];
				$accont=$data['COL 4'];
			  
				$amount_topay=$data['COL 5'];
				$odprincipal=$data['COL 6'];
				$odintrest=$data['COL 7'];
				
				if($odprincipal=="CLOSE"){
					$loancomplited=1;
				}
				else
				{
					$loancomplited=0;
				}
				
				echo $n."-".$qwe="update badloan set `loan_amt`='$loan_amt',`amount_topay`='$amount_topay',`odprincipal`='$odprincipal',`odintrest`='$odintrest',`loancomplited`='$loancomplited'  where `loan_accno`='$accont'";
				echo "<br/>";
				mysql_query($qwe)or die(mysql_error());
	   }
	}
*/
/*****************Bad Loan *******************/


/*****************Member*******************/
	
/*$fetch=mysql_query("select * from `TABLE 55`");	
    while ($data=mysql_fetch_array($fetch))
	{
		$n++;
			//echo  $n;
				//echo "<br/>";
				$name=$data['COL 3'];
                $gender=$data['COL 4'];
                $gname=$data['COL 5'];
				$at=$data['COL 6'];
                $post=$data['COL 7'];
				$address="AT-".$at.","."PO-".$post;
                $shareno="AIRCCBALIA".$data['COL 1'];
				
				echo $n."-".$qwe="insert into member set `name`='$name',`guardian_name`='$gname',`gender`='$gender',
                                  `address`='$address',`post`='$post',`prefshare_fees`='100',`form_fees`='20',
                                  `noofshares`='1',`join_date`='2016-03-31',`shareno`='$shareno'";
				echo "<br/>";
				mysql_query($qwe)or die(mysql_error());
	}*/
/*
$n=0;
$fetch=mysql_query("select * from `member` where `member_id`=''");	
    while ($data=mysql_fetch_array($fetch))
	{
        $n++;
        $mid="M".$data['id'];
        echo $n."-".$qwe="update member set `member_id`='$mid' where `id`='$data[id]'";
		echo "<br/>";
		mysql_query($qwe)or die(mysql_error());
    }
*/
/*****************Member*******************/

/***************** Testing *******************/

/*$fetch=mysql_query("select * from `TABLE 52` where `COL 4`='1529'");	
    while ($data=mysql_fetch_array($fetch))
	{
		
               if($data['COL 3']=="GOLD"){
				   $accont="GL".$data['COL 4'];
				   $table='goldloan';
				}else{
				   $accont="DL".$data['COL 4'];
				   $table='demand_loan';
				}
				$amount_topay=$data['COL 5'];
				$odprincipal=$data['COL 6'];
				$odintrest=$data['COL 7'];
				
				$data=mysql_query("select * from $table where `loan_accno`='$accont'");
				$resr=mysql_fetch_array($data);
				
				
				$fetchmysql=mysql_fetch_array(mysql_query("select * from `prefix` where `slno`='$resr[village]'"));
				$vildt=$fetchmysql['date'];
				$d = date("d",strtotime($vildt));
				$od_cal_date="2016-02-".$d;
				if($odprincipal=="CLOSE"){
					$loancomplited=1;
				}
				else
				{
					$loancomplited=0;
					$tot=$odprincipal+$odintrest;
					echo "update `transaction_ledger` set `outstanding`='$amount_topay',`a_od_int`='$odintrest',`a_od_pr`='$odprincipal',`a_tot_od`='$tot' where `cal_date` like '2016-02%' and `accountno`='$accont'";
					echo "<br/>";
					//mysql_query("update `transaction_ledger` set `outstanding`='$amount_topay',`a_od_int`='$odintrest',`a_od_pr`='$odprincipal',`a_tot_od`='$tot' where `cal_date` like '2016-02%' and `accountno`='$accont'") or die(mysql_error());
				}
				
				echo $n."-".$qwe="update $table set `amount_topay`='$amount_topay',`odprincipal`='$odprincipal',`odintrest`='$odintrest',`od_cal_date`='$od_cal_date',`loancomplited`='$loancomplited'  where `loan_accno`='$accont'";
				echo "<br/>";
				// mysql_query($qwe)or die(mysql_error());
	}*/
    
/***************** Testing *******************/
/***************** OD Cal date Update *******************/
/*$fetch=mysql_query("select * from `TABLE 52`");	
    while ($data=mysql_fetch_array($fetch))
	{
                if($data['COL 3']=="GOLD"){
				   $accont="GL".$data['COL 4'];
				   $table='goldloan';
				}else{
				   $accont="DL".$data['COL 4'];
				   $table='demand_loan';
				}
                
                $data=mysql_query("select * from $table where `loan_accno`='$accont'");
				$resr=mysql_fetch_array($data);			
				
				$fetchmysql=mysql_fetch_array(mysql_query("select * from `prefix` where `slno`='$resr[village]'"));
				echo $vildt=$fetchmysql['date'];
                echo "<br/>";
				$d = date("d",strtotime($vildt));
				$od_cal_date="2016-03-".$d;
                
                echo $n."-".$qwe="update $table set `od_cal_date`='$od_cal_date'  where `loan_accno`='$accont'";
				echo "<br/>";
				mysql_query($qwe)or die(mysql_error());
        
    }

    $fetch=mysql_query("select * from `TABLE 51`");	
    while ($data=mysql_fetch_array($fetch))
	{
		$n++;
		if($n>=2 && $n<=278)
	   {
				//echo  $n;
				//echo "<br/>";
				if($data['COL 3']=="BUSINESS"){
				   $accont="BL".$data['COL 4'];
				   $table='businessloan';
				}elseif($data['COL 3']=="AGRICULTURE"){
				   $accont="AL".$data['COL 4'];
				   $table='agricultureloan';
				}elseif($data['COL 3']=="ENTERPRISESS"){
				   $accont="EL".$data['COL 4'];
				   $table='enterpriseloan';
				}elseif($data['COL 3']=="GROUP"){
				   $accont="GRL".$data['COL 4'];
				   $table='grouploan';
			  }
			  
				$amount_topay=$data['COL 5'];
				$odprincipal=$data['COL 6'];
				$odintrest=$data['COL 7'];
				
				$data=mysql_query("select * from $table where `loan_accno`='$accont'");
				$resr=mysql_fetch_array($data);
				
				
				$fetchmysql=mysql_fetch_array(mysql_query("select * from `prefix` where `slno`='$resr[village]'"));
				$vildt=$fetchmysql['date'];
				$d = date("d",strtotime($vildt));
				$od_cal_date="2016-03-".$d;
				if($odprincipal=="CLOSE"){
					$loancomplited=1;
				}
				else
				{
					$loancomplited=0;
					$tot=$odprincipal+$odintrest;
					echo "update `transaction_ledger` set `outstanding`='$amount_topay',`a_od_int`='$odintrest',`a_od_pr`='$odprincipal',`a_tot_od`='$tot' where `cal_date` like '2016-02%' and `accountno`='$accont'";
					echo "<br/>";
					mysql_query("update `transaction_ledger` set `outstanding`='$amount_topay',`a_od_int`='$odintrest',`a_od_pr`='$odprincipal',`a_tot_od`='$tot' where `cal_date` like '2016-02%' and `accountno`='$accont'") or die(mysql_error());
				}
				
				echo $n."-".$qwe="update $table set `amount_topay`='$amount_topay',`odprincipal`='$odprincipal',`odintrest`='$odintrest',`od_cal_date`='$od_cal_date',`loancomplited`='$loancomplited'  where `loan_accno`='$accont'";
				echo "<br/>";
				 mysql_query($qwe)or die(mysql_error());
	   }
	}
*/
/***************** OD Cal date Update *******************/


    $n=0;
    $x=0;
    $f=0;
    $nf=0;
    $fetch=mysql_query("select * from `TABLE 58`");	
    while ($data=mysql_fetch_array($fetch))
	{
             $n++;
	   $time=time();
	    if($data['COL 1']!='')
            {
              $date=date("Y-m-d",strtotime(str_replace("/","-",$data['COL 1'])));
               $vlg=$data['COL 2'];
               $name=$data['COL 3'];
               
                $fetchmysql=mysql_fetch_array(mysql_query("select * from `prefix` where `name`='$vlg'"));
                $vid=$fetchmysql['slno'];
                $vildt=$fetchmysql['date'];
                $d = date("d",strtotime($vildt));
              
              $amt=$data['COL 4'];
              $accno=$data['COL 5'];
              $plan=$data['COL 6'];
              $typ=$data['COL 7'];
              $vdt=$data['COL 8'];              
              $ph=$data['COL 9'];
              $agent=$data['COL 10'];
              
              $fetchmysqll=mysql_fetch_array(mysql_query("select * from `agent` where `name`='$agent'"));
              $agentid=$fetchmysqll['id'];
              
              if($typ=='EMERGENCY')
              {
                $pr="GL";
                $table="goldloan";
                $folio=11;
                $intrestrate=18;
              }
              else if($typ=='BUSINESS')
              {
                $pr="BL";
                $table="businessloan";
                $folio=8;
                $intrestrate=18;
              }
              else if($typ=='DEMAND')
              {
                $pr="DL";
                $table="demand_loan";
                $folio=10;
                $intrestrate=18;
              }
              else if($typ=='ENTERPRISES')
              {
                $pr="EL";
                $table="enterpriseloan";
                $folio=9;
                $intrestrate=19;
              }
              else if($typ=='GROUP')
              {
                $pr="GRL";
                $table="grouploan";
                $folio=6;
                $intrestrate=18;
              }
              
            echo  $accno=$pr.$accno;
             echo "<br/>";
            
             
             if(mysql_num_rows(mysql_query("select * from $table where `loan_accno`='$accno'"))==0){
                
                
            $cus="select * from `customer` where `name`='$name' and  `village`='$vid'";
             echo $cnt=mysql_num_rows(mysql_query($cus));
             if($cnt==0){
                
                $r1=mysql_fetch_array(mysql_query("select max(id) as id from `customer`"));
                $temcuid=$r1['id']+1;
                $cuid="c".$temcuid;
                
               
               $cust="INSERT INTO `customer` set `customer_id`='$cuid',`name`='$name',
                `village`='$vid',`address`='$vlg',`phno`='$ph'";
                
                echo $cust."----";
                
                mysql_query($cust)or die(mysql_error());
             }else{
                $r1=mysql_fetch_array(mysql_query($cus));
                $cuid=$r1['customer_id'];
             }
                
                
                $x++;$nf++;
                 echo $qwe="INSERT INTO $table set `loan_accno`='$accno',`customer_id`='$cuid',`plan`='$plan',
             `intrestrate`='$intrestrate', `name`='$name',`phone`='$ph',`village`='$vid',`is_approved`='1',
             `address`='$vlg',`folio`='$folio', `loan_amt`='$amt',`loangiven`='$amt',`amount_topay`='$amt',
             `loan_given_date`='$date',`last_refund_date`='$date',`od_cal_date`='$date',`agent_id`='$agentid'";
				
	    mysql_query($qwe)or die(mysql_error());
            
               echo "<br/>";
               
			  $loanamt=$amt;
			  $year=$plan;
			  $no=$year;
                          $dispersaldt=$date;
			  $my=date("Y-m",strtotime($dispersaldt));
			  
			  
			  $areadt=date("$my-$d");
			  $str = strtotime($areadt) - (strtotime($dispersaldt));
			  $daydiff=round($str/3600/24);
			
			 echo "</br>insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$accno',`outstanding`='$loanamt',`cal_date`='$dispersaldt'";
			mysql_query("insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$accno',`outstanding`='$loanamt',`cal_date`='$dispersaldt'") or die(mysql_error());
			
			  if($daydiff > 0){
			  
			    $dt=strtotime($areadt);
			    $pre_dt = $ressdl['loan_given_date'];
			   mysql_query("insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$accno',`cal_date`='$areadt'") or die(mysql_error());
                                
			    for($i=1;$i<=$no;$i++){
				
				 $final = date("Y-m-d", strtotime("+1 month", $dt));
				 $daysofmonth1=date('t',strtotime($final));
				
				 $str = strtotime($final) - (strtotime($pre_dt));
				 $daydiff=floor($str/3600/24);
				 $dt=strtotime($final);
                                 
                                 echo "</br>insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$accno',`cal_date`='$final'";
                                 mysql_query("insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$accno',`cal_date`='$final'") or die(mysql_error());
                                
                                 $pre_dt=$final;
                                } }else{
                                $pre_dt=strtotime($areadt);
                                for($i=1;$i<=$no+1;$i++){
                                $final = date("Y-m-d", strtotime("+1 month", $pre_dt));
			
                                echo "</br>insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$accno',`cal_date`='$areadt'";
                                mysql_query("insert into `transaction_ledger` set `transactionid`='$time', `accountno`='$accno',`cal_date`='$final'") or die(mysql_error());
                                 
                                 $pre_dt=strtotime($final);
                                 }
			    }
                
                
             }else{
                $f++;
             }
             
            
            
            }
	}
        echo "<br/>";
        echo $x;
        echo "Total Found=".$f."Total not Found=".$nf;
      
 /*       
$f=0;
$nf=0;
$fetch=mysql_query("select * from `TABLE 58`");	
    while ($data=mysql_fetch_array($fetch))
	{
         if($data['COL 1']!='')
            {
                $vlg=$data['COL 2'];
                $cnt=mysql_num_rows(mysql_query("select * from `prefix` where `name`='$vlg'"));
                if($cnt>0)
                {
                    $f++;
                    echo "<br/>";
                    echo "===========FOUND===========".$vlg;
                    $fetchmysql=mysql_fetch_array(mysql_query("select * from `prefix` where `name`='$vlg'"));
                    $vid=$fetchmysql['slno'];
                    $vildt=$fetchmysql['date'];
                    $d = date("d",strtotime($vildt));
                }
                else
                {
                    $nf++;
                    echo "<br/>";
                    echo "===========NOTFOUND===============".$vlg;
                }
              
            }
        
    }
     echo "Total Found=".$f."Total not Found=".$nf;
   /* $fetch11=mysql_query("select * from `TABLE 57`");	
    while ($data11=mysql_fetch_array($fetch11))
	{
        echo $data11['id'];
        $vlg=$data11['COL 2'];
        echo "<br/>";
        echo  $q="UPDATE `TABLE 58` SET `COL 2`='$vlg' where `id`='$data11[id]'";
        mysql_query($q)or die(mysql_error());
        
    }*/
     
?>