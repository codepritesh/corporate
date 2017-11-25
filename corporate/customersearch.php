<?php
include_once("function.php");
$custid=$_GET['cid'];
$custdet=$_GET['cdet'];
$n=0;
$tab1=mysql_query("SELECT * FROM  `compulsarydeposite` where `customer_id`='$custid'");
if(mysql_num_rows($tab1)>0){
$tot=0;	    
while($res1=mysql_fetch_array($tab1)){
$n++;
$tot=$res1['total_amt']+$tot;
?>
<tr>
	     <td><?php echo $n;  ?></td>
            <td><?php echo $custdet;  ?></td>
	    <td><?php  echo "Cumpulsory Deposit Account"; ?></td>
            <td><?php  echo $res1['acc_no']; ?></td>
	    <td><?php echo $res1['total_amt'];?></td>
	    <td><?php  echo date("d-m-Y",strtotime($res1['payment_date'])); ?></td>
</tr>
    
<?php } }
$tab2=mysql_query("SELECT * FROM  `dailydeposit` where `customer_id`='$custid'");
if(mysql_num_rows($tab2)>0){
$tot=0;
while($res2=mysql_fetch_array($tab2)){
$n++;
$tot=$res2['total_amt']+$tot;
?>
<tr>
             <td><?php echo $n;  ?></td>
	    <td><?php echo $custdet;  ?></td>
	    <td><?php  echo "Daily Deposit Account"; ?></td>
            <td><?php  echo $res2['acc_no']; ?></td>
	    <td><?php echo $res2['total_amt'];?></td>
	    <td><?php  echo date("d-m-Y",strtotime($res2['payment_date'])); ?></td>
</tr>
<?php }}
$tab3=mysql_query("SELECT * FROM  `fixeddeposite` where `customer_id`='$custid'");
if(mysql_num_rows($tab3)>0){
$tot=0;
while($res3=mysql_fetch_array($tab3)){
	    $n++;
$tot=$res3['deposited_amt']+$tot;		    
?>
<tr>
            <td><?php echo $n;  ?></td>
	    <td><?php echo $custdet;  ?></td>
	    <td><?php  echo "Fixed Deposit Account"; ?></td>
            <td><?php  echo $res3['acc_no']; ?></td>
	    <td><?php echo $res3['deposited_amt'];?></td>
	    <td><?php  echo date("d-m-Y",strtotime($res3['opening_date'])); ?></td>
</tr>
<?php } }
$tab4=mysql_query("SELECT * FROM  `recurringdiposite` where `customer_id`='$custid'");
if(mysql_num_rows($tab4)>0){
$tot=0;
while($res4=mysql_fetch_array($tab4)){ 
$n++;
$amt=$res4['monthly_amount']*$res4['paid_installment'];
$tot=$amt+$tot;	
?>
<tr>
             <td><?php echo $n;  ?></td>
	    <td><?php echo $custdet;  ?></td>
	    <td><?php  echo "Recurring Deposit Account"; ?></td>
            <td><?php  echo $res4['acc_no']; ?></td>
	    <td><?php echo $res4['monthly_amount']*$res4['paid_installment'];?></td>
	    <td><?php  echo date("d-m-Y",strtotime($res4['start_date'])); ?></td>
</tr>
<?php } }
$tab5=mysql_query("SELECT * FROM  `savingaccount` where `customer_id`='$custid'");
if(mysql_num_rows($tab5)>0){
$tot=0;
while($res5=mysql_fetch_array($tab5)){
$n++;
$tot=$res5['deposited_amt']+$tot;	    
?>
<tr>
             <td><?php echo $n;  ?></td>
	    <td><?php echo $custdet;  ?></td>
	    <td><?php  echo "Saving Account"; ?></td>
            <td><?php  echo $res5['acc_no']; ?></td>
	    <td><?php echo $res5['deposited_amt'];?></td>
	    <td><?php  echo date("d-m-Y",strtotime($res5['opening_date'])); ?></td>
</tr>
<?php } }?>
<tr >
			<td colspan="4" style="text-align: center;">Total Deposited Amount:</td><td colspan="2"><?php echo number_format($tot, 2, '.', '');?></td>
</tr>
<tr >
			<td colspan="6" style="text-align: center;"><input type="button" value="Print" onclick="printContent('print')" /></td>
</tr>