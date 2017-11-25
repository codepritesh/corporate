<?php
include_once("function.php");
$sdate=date("Y-m-d",strtotime($_GET['sdt']));
$edate=date("Y-m-d",strtotime($_GET['edt']));
//echo "select * from `fixeddeposite`  WHERE `opening_date` BETWEEN '$sdate' AND '$edate'";
$qwe=mysql_query("select * from `fixeddeposite`  WHERE `opening_date` BETWEEN '$sdate' AND '$edate'"); ?>

 <table id="srch" >
                    <tr>
                        <th>Acc_no</th>
                         <th>Account Holder Name</th>
			 <th>Plan</th>
			 <th>Deposited Amount</th>
			 <th>Intrest Rate</th>
			 <th>Opening Date</th>
			 <th>Maturity Date</th>
			 
                    </tr>
<?php if(mysql_num_rows($qwe)>0){ $tot=0; $i=0; while($res=mysql_fetch_array($qwe)){ $i++; $tot=$res['deposited_amt']+$tot;?>
<tr>
                        <td><?php echo  $i;?></td>
			<td><?php echo  $res['acc_no'];?></td>
                        <td><?php echo  $res['name'];?></td>
			<td><?php echo  $res['year']." Years";?></td>
			<td><?php echo  $res['deposited_amt'];?></td>
			<td><?php echo  $res['intrest_rate'];?></td>
			<td><?php echo  date("d-m-Y",strtotime($res['opening_date']));?></td>
			<td><?php echo  date("d-m-Y",strtotime($res['closing_date']));?></td>
  </tr>
    
<?php }?>
<tr >
			<td colspan="3" style="text-align: center;">Total Deposited Amount:</td><td colspan="4"><?php echo number_format($tot, 2, '.', '');?></td>
</tr>
<tr >
			<td colspan="7" style="text-align: center;"><input type="button" value="Print" onclick="printContent('print')" /></td>
</tr>
<?php }else{ ?>
<tr>
                        <td colspan="8">No result Found..</td>
                       
  </tr>

<?php } ?>
 </table>