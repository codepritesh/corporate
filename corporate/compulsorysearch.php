<?php
include_once("function.php");
$sdate=date("Y-m-d",strtotime($_GET['sdt']));
$edate=date("Y-m-d",strtotime($_GET['edt']));
//echo "select * from `fixeddeposite`  WHERE `opening_date` BETWEEN '$sdate' AND '$edate'";
$qwe=mysql_query("select * from `compulsarydeposite`  WHERE `payment_date` BETWEEN '$sdate' AND '$edate'"); ?>

 <table id="srch" >
                    <tr>
                        <th>Acc_no</th>
                         <th>Account Holder Name</th>
			 
			 <th>Deposited Amount</th>
			 <th>Intrest Rate</th>
			 <th>Opening Date</th>
			
			 <th>Status</th>
                         
                    </tr>
<?php if(mysql_num_rows($qwe)>0){ while($res=mysql_fetch_array($qwe)){ ?>
<tr>
                        <td><?= $res['acc_no'];?></td>
                        <td><?= $res['name'];?></td>
			
			<td><?= $res['deposited_amt'];?></td>
			<td><?= $res['intrest_rate'];?></td>
			<td><?= date("d-m-Y",strtotime($res['payment_date']));?></td>
			
			<td><?php if($res['status']=='0'){ echo "Active"; }else{ echo "Inactive";}?></td>
  </tr>
    
<?php }}else{ ?>
<tr>
                        <td colspan="8">No result Found..</td>
                       
  </tr>

<?php } ?>
 </table>