<?php
include_once("function.php");
$aid=$_GET['aid'];
$sdate=$_GET['sdate'];
$edate=$_GET['edate'];
if($sdate!=''){
    $sdate=date("Y-m-d",strtotime($sdate));
    if($edate!=''){
        $edate=date("Y-m-d",strtotime($sdate));
    }
    else{
        $edate=date("Y-m-d");
    }
    $var=" and `date` BETWEEN '$sdate' AND '$edate'";
}
else{
    $sdate='';
    $edate='';
    $var='';
}
?>
		    <tr>
			     <th colspan="7">PAYMENT</th>
		    </tr>
		    <tr>
			     <th>PAYMENT M & DATE</th>
			     <th>CUSTOMER NAME</th>
			     <th>PARTICULARS</th>
			     <th>CASH AMO</th>
			     <td>&nbsp;</td>
			     <th>BANK AMO</th>
			     <th>TOTAL AMO</th>
		    </tr>
                    <?php
                    $fet=mysql_query("select * from `transaction` where `amount`<'0' group by `date`")or die(mysql_error());
		    while($re=mysql_fetch_array($fet))
                    {	
                    ?>
		       <tr>
                        <td></td>
                        <td></td>
                        <td style="color: red;"><?php echo $re['date']; ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
		    <?php
		    $floan=mysql_query("select * from `transaction` where `date`='$re[date]' and `type`='loan'")or die(mysql_error());
		    $rloan=mysql_num_rows($floan);
		    if($rloan>0){ 
		    ?>
		     <tr>
                        <td><?php echo $re['date']; ?></td>
                        <td></td>
                        <td style="color: red;">BY LOAN DISBURS</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
		     </tr><?php }else {?>	
		     <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
		     <tr>
                        <td><?php echo $re['date']; ?></td>
                        <td></td>
                        <td style="color: red;">BY WITHDRAW AMO</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
		     <?php }
		     $fpayment=mysql_query("select * from `transaction` where `amount`<'0' and `date`='$re[date]'")or die(mysql_error());
			while($rpayment=mysql_fetch_array($fpayment))
			{
		     if($rpayment['folio_no']==6 || $rpayment['folio_no']==7 || $rpayment['folio_no']==8 || $rpayment['folio_no']==9 || $rpayment['folio_no']==10 || $rpayment['folio_no']==11 || $rpayment['folio_no']==12)
		     {
			?>
                     <tr>
                        <td></td>
                        <td></td>
                        <td style="color: red;"><?php echo $rpayment['details']?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                     <?php
		     //echo "</br>select * from `transaction` where `date`='$rpayment[date]' and `amount`<'0' group by `accountno`='L%' ";
		     //echo "</br>select * from `transaction` where `date`='$rpayment[date]' and `amount`<'0' and `accountno`like 'L%' ";
                     $fpayment1=mysql_query("select * from `transaction` where `date`='$rpayment[date]' and `amount`<'0' and `folio_no`='$rpayment[folio_no]' ")or die(mysql_error());
		     while($rpayment1=mysql_fetch_array($fpayment1)){
                        
                        //$faname=mysql_query("select * from `agent` where `id`='$rpayment1[agentid]'")or die(mysql_error());
			//$rresaname=mysql_fetch_array($faname);
                        $faname=mysql_query("select * from `customer` where `customer_id`='$rpayment1[customerid]'")or die(mysql_error());
			$rresaname=mysql_fetch_array($faname);
                     ?>
                    <tr>
                        <td></td>
                        <td><?php echo $rresaname['name'];?></td>
                        <td></td>
                        <td><?php echo $rpayment1['amount'];?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <?php
                    }
		    }else{
			
		     ?>
		    <tr>
                        <td></td>
                        <td></td>
                        <td style="color: red;"><?php echo $rpayment['details']?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                     <?php
		    // echo "</br>select * from `transaction` where `date`='$rpayment[date]' and `amount`<'0' and `accountno`like 'BL%'  ";
                     $cmpayment1=mysql_query("select * from `transaction` where `date`='$rpayment[date]' and `amount`<'0' and `folio_no`='$rpayment[folio_no]' ")or die(mysql_error());
		     while($cmrpayment1=mysql_fetch_array($cmpayment1)){
                        
                        //$faname=mysql_query("select * from `agent` where `id`='$rpayment1[agentid]'")or die(mysql_error());
			//$rresaname=mysql_fetch_array($faname);
                        $cmaname=mysql_query("select * from `customer` where `customer_id`='$cmrpayment1[customerid]'")or die(mysql_error());
			$cmresaname=mysql_fetch_array($cmaname);
                     ?>
                    <tr>
                        <td></td>
                        <td><?php echo $cmresaname['name'];?></td>
                        <td></td>
                        <td><?php echo $cmrpayment1['amount'];?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <?php
                    }
		    }
		    }
		    //echo "</br>select sum(amount) as amount from `transaction` where `date`='$rpayment[date]' and `amount`<'0'";
		    $sum=mysql_query("select sum(amount) as amount from `transaction` where `date`='$re[date]' and `amount`<'0'")or die(mysql_error());
		    $ressum=mysql_fetch_array($sum);
		    
		    $fdate=mysql_query("select * from `transaction`")or die(mysql_error());
		    $rdate=mysql_fetch_array($fdate);
		    $sdate=$rdate['date'];
		    //echo "</br>select sum(amount) as amount from `transaction` where date BETWEEN '$sdate' and '$rpayment[date]'";
		    $fclosing=mysql_query("select sum(amount) as amount from `transaction` where date BETWEEN '$sdate' and '$re[date]'")or die(mysql_error());
		    $rclosing=mysql_fetch_array($fclosing);
		    
		    ?>
		    <tr> <td></td><td></td><td style="color: red;">Total</td><td colspan="4">=<?php echo $ressum['amount']; ?></td></tr>
		    <tr> <td></td><td></td><td style="color: red;">CLOSING BALANCE</td><td colspan="4">=<?php $closingbal=$rclosing['amount']; if($closingbal<0){ $closingbal=0;} else{$closingbal=$rclosing['amount'];} ?></td></tr>
		    <tr> <td></td><td></td><td style="color: red;">TOATAL BALANCE</td><td colspan="4">=<?php echo $closingbal+$ressum['amount']; ?></td></tr>
		    <?php
		    }
                    ?>