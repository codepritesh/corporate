<?php
include_once("function.php");
$table=$_GET['table'];
if($table=='dailydeposit')
{   
?>
<tr>
	<th colspan="10" style="text-align: center;color: red;">							
	Daily
	</th>
</tr>
<tr>
	<th>#</th>
    <th>C_id</th>
    <th>Acc_no</th>
    <th>Name</th>
	<th>Address</th>
	<th>Spouse Name</th>
    <th>Nominee Name</th>
    <th>Agent Name</th>
	<th>Opening Date</th>
    <th>Daily Amt.</th>
</tr>
<?php
    $n=0;
    $qwe=mysql_query("select * from $table order by `id` desc");
    while($res=mysql_fetch_array($qwe))
    {
    $n++;
   $spouse=mysql_fetch_array(mysql_query("select * from `customer` where `customer_id`='$res[customer_id]'"));
   $agent=mysql_fetch_array(mysql_query("select * from `agent` where `id`='$res[agent_id]'"));                    
?>
                <tr>
                        <td><?php echo $n; ?></td>
                        <td><?php echo $res['customer_id']; ?></td>
                        <td><?php echo $res['acc_no']; ?></td>
                        <td><?php echo $res['name']; ?></td>
                        <td><?php echo $res['address']; ?></td>
                        <td><?php echo $spouse['guardian_name']; ?></td>
                        <td><?php echo $res['nominee_name']; ?></td>
                        <td><?php echo $agent['name']; ?></td>
                        <td><?php echo date("d-m-Y",strtotime($res['start_date'])); ?></td>
                        <td><?php echo $res['monthly_amount']; ?></td>
                </tr>
                    
 <?php
  }
 }
 
else if($table=='recurringdiposite')
{
?>
<tr>
	<th colspan=11" style="text-align: center;color: red;">							
	RD
	</th>
</tr>
<tr>
	<th>#</th>
    <th>C_id</th>
    <th>Acc_no</th>
    <th>Name</th>
	<th>Address</th>
	<th>Spouse Name</th>
    <th>Nominee Name</th>
    <th>Agent Name</th>
	<th>Opening Date</th>
    <th>Duration</th>
    <th>Installment Amt.</th>
</tr>
<?php

    $n=0;
    $qwe=mysql_query("select * from $table order by `id` desc");
    while($res=mysql_fetch_array($qwe))
    {
    $n++;
    $spouse=mysql_fetch_array(mysql_query("select * from `customer` where `customer_id`='$res[customer_id]'"));
    $agent=mysql_fetch_array(mysql_query("select * from `agent` where `id`='$res[agent_id]'"));                    
?>
                <tr>
                        <td><?php echo $n; ?></td>
                        <td><?php echo $res['customer_id']; ?></td>
                        <td><?php echo $res['acc_no']; ?></td>
                        <td><?php echo $res['name']; ?></td>
                        <td><?php echo $res['address']; ?></td>
                        <td><?php echo $spouse['guardian_name']; ?></td>
                        <td><?php echo $res['nominee']; ?></td>
                        <td><?php echo $agent['name']; ?></td>
                        <td><?php echo date("d-m-Y",strtotime($res['startdate'])); ?></td>
                        <td><?php echo $res['no_of_installment']; ?> Months</td>
                        <td><?php echo $res['monthly_amount']; ?></td>
                </tr>
                    
<?php
  }
}else{
?>
<tr>
	<th colspan="9" style="text-align: center;color: red;">							
	Compulsory Savings
	</th>
</tr>
<tr>
	<th>#</th>
    <th>C_id</th>
    <th>Acc_no</th>
    <th>Name</th>
	<th>Address</th>
	<th>Spouse Name</th>
    <th>Nominee Name</th>
    <th>Agent Name</th>
	<th>Opening Date</th>
    
</tr>
<?php
    $n=0;
    $qwe=mysql_query("select * from $table order by `id` desc");
    while($res=mysql_fetch_array($qwe))
    {
    $n++;
   $spouse=mysql_fetch_array(mysql_query("select * from `customer` where `customer_id`='$res[customer_id]'"));
   $agent=mysql_fetch_array(mysql_query("select * from `agent` where `id`='$res[agent_id]'"));                    
?>
                <tr>
                        <td><?php echo $n; ?></td>
                        <td><?php echo $res['customer_id']; ?></td>
                        <td><?php echo $res['acc_no']; ?></td>
                        <td><?php echo $res['name']; ?></td>
                        <td><?php echo $res['address']; ?></td>
                        <td><?php echo $spouse['guardian_name']; ?></td>
                        <td><?php echo $res['nominee_name']; ?></td>
                        <td><?php echo $agent['name']; ?></td>
                        <td><?php echo date("d-m-Y",strtotime($res['startdate'])); ?></td>
                       
                </tr>
                    
 <?php
  }
}
?>