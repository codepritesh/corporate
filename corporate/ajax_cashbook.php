<?php
include_once("function.php");
ini_set("display_errors",1);
$aid=$_GET['aid'];
  $sdate=$_GET['sdt'];
  $edate=$_GET['edt'];
if($sdate!=''){
    $sdate=date("Y-m-d",strtotime($sdate));
    if($edate!=''){
        $edate=date("Y-m-d",strtotime($edate));
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
<!----------------------------------------RECEIPT---------------------------------------------->
 <table style="float: left;width: 50%;font-size: 8px;">
                    <tr>
                         <th colspan="7">RECEIPT</th>
                    </tr>
                    <tr>
                         <th style="width: 70px;">DATE</th>
			 <th>AGENT CODE</th>
			 <th>PARTICULARS</th>
			 <th>CASH</th>
			 <th>&nbsp;</th>
			 <th>BANK AMO</th>
		         <th>TOTAL AMO</th>
                    </tr>
		    <?php
		    $obbal=0;
		    $bankamt=0;
		    //echo "select * from `transaction` where `agentid`='$aid' $var  group by `date`";
		    $fetch=mysql_query("select * from `transaction` where `agentid`='$aid' $var  group by `date`")or die(mysql_error());
		    while($res=mysql_fetch_array($fetch)){
		    $c=0;
		    $tot=0;
		    
		   $fetch1=mysql_query("select * from `transaction` where  `agentid`='$aid' and `date`='$res[date]'")or die(mysql_error());
		   while($res1=mysql_fetch_array($fetch1)){
		   
		   $fetch2=mysql_query("select SUM(amount) as `amt`,`folio_no` from `transaction` where `agentid`='$aid' and `date`='$res[date]'")or die(mysql_error());
		   $res2=mysql_fetch_array($fetch2);
			
			$aname=mysql_query("select * from `agent` where `id`='$res1[agentid]'")or die(mysql_error());
			$resaname=mysql_fetch_array($aname);
			if( $resaname['name']!=''){   //agent id 0
			$tot+=$res2['amt'];
				
			if($res2['folio_no']==1){$type="TO CS COLL";}
			if($res2['folio_no']==2){$type="TO VS COLL";}
			if($res2['folio_no']==3){$type="TO RD COLL";}
			if($res2['folio_no']==4){$type="TO DAILY COLL";}
			if($res2['folio_no']==5){$type="TO FD COLL";}
			if($res2['folio_no']==6){$type="TO GROUP LOAN COLL";}
			if($res2['folio_no']==7){$type="TO AL COLL";}
			if($res2['folio_no']==8){$type="TO BL COLL";}
			if($res2['folio_no']==9){$type="TO EL COLL";}
			if($res2['folio_no']==10){$type="TO DEMAND COLL";}
			if($res2['folio_no']==11){$type="TO GOLD LOAN COLL";}
			if($res2['folio_no']==12){$type="TO DAILY LOAN COLL";}
			
			if($c==0){
			
		    ?>
		    <tr>
                         <td><?php  echo date("d-m-Y",strtotime($res['date'])); ?></td>
			 <td>&nbsp;</td>
			 <td style="color: red;">O BALANCE</td>
			 <td><?php echo $obbal;?></td>
			 <td>&nbsp;</td>
			 <td><?php echo $bank= ltrim ($bankamt, '-');?></td>
			 <td><?php echo $obbal+$bank;?></td>
                    </tr>
		    <tr>
                         <td>&nbsp;</td>
			 <td>&nbsp;</td>
			 <td style="color: red;"><?php echo $type;?></td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
                    </tr>
		    <tr>
                         <td>&nbsp;</td>
			 <td><?php echo $resaname['codeno'];?></td>
			 <td>&nbsp;</td>
			 <td>
                            <?php echo $res2['amt'];?>
                         </td>
			 <td>&nbsp;</td>
			 <td>
                            &nbsp;
                         </td>
		         <td>&nbsp;</td>
                    </tr>
		    <?php } else{ ?>
		    <tr>
                         <td>&nbsp;</td>
			 <td>&nbsp;</td>
			 <td style="color: red;"><?php echo $type;?></td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
                    </tr>
                     <tr>
                         <td>&nbsp;</td>
			 <td>
                            <?php echo $resaname['codeno'];?>
                         </td>
			 <td>&nbsp;</td>
			 <td>
                            <?php echo $res2['amt'];?>
                         </td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
		         <td>&nbsp;</td>
                    </tr>
		     <?php
		     }
		     $c++;
		     }
		     }
		     if($tot!=0){
		     ?>
		     <tr>
                         <td>&nbsp;</td>
			 <td>&nbsp;</td>
			 <td style="font-size:12px;font-weight: bold;"><?php echo "<strong>"."DAY TOTAL COLL"."</strong>";?></td>
			 <td  style="font-size:12px;font-weight: bold;"><?php echo $tot;?></td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
                    </tr>
		     <?php
		         $sum=mysql_query("select sum(amount) as amount from `transaction` where `agentid`='$aid' and `date`='$res[date]' and `amount`<'0'")or die(mysql_error());
		         $ressum=mysql_fetch_array($sum);
			 
			 $fdate=mysql_query("select * from `transaction`")or die(mysql_error());
			 $rdate=mysql_fetch_array($fdate);
			 $sdate=$rdate['date'];
			 
			 $fclosing=mysql_query("select sum(amount) as amount from `transaction` where date BETWEEN '$sdate' and '$res[date]'")or die(mysql_error());
			 $rclosing=mysql_fetch_array($fclosing);
			
			 $gtotal=$obbal+$tot;
			 $obbal=ltrim ($rclosing['amount'], '-');
			 $bankamt=$rclosing['amount']+$ressum['amount'];
		     ?>
		     <tr>
                         <td>&nbsp;</td>
			 <td>&nbsp;</td>
			 <td style="color: red;font-size:12px;font-weight: bold; "><?php echo  "GRAND TOTAL";?></td>
			 <td style="font-size:12px;font-weight: bold;"><?php echo $gtotal;?></td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
                    </tr>
		     <?php
		     }
		     }
		     ?>
                </table>
 <!---------------------------------PAYMENT---------------------------------------------->
		<table style="float: left;width: 50%;font-size: 8px;">
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
		    echo "select * from `transaction` where `amount`<'0' $var group by `date`";
                    $fetpay=mysql_query("select * from `transaction` where `amount`<'0' $var group by `date`")or die(mysql_error());
		    while($repay=mysql_fetch_array($fetpay))
                    {	
                    ?>
		       <tr>
                        <td></td>
                        <td></td>
                        <td style="color: red;"><?php echo $repay['date']; ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
		      
		    <?php
		    }
                    ?>
		</table>