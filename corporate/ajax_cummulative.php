<?php
include_once("function.php");
ini_set("display_errors",1);
$table=$_GET['table'];
$sdate=$_GET['sdt'];
$edate=$_GET['edt'];

if($table=='compulsarydeposite'){
?>
                <table class="table">
                    <tr>
                        <th>Acc_no</th>
                        <th>Account Holder Name</th>
                        <th>Deposite Amount</th>
                        <th>Total Amount</th>
			<th>Account Opening Date</th>
			<th>Village</th>
                    </tr>
                    <?php
		    $total=0;
                     if($sdate!=''){
                        $sdate=date("Y-m-d",strtotime($sdate));
                        if($edate!=''){
                            $edate=date("Y-m-d",strtotime($edate));
                            $fetch=mysql_query("select * from `compulsarydeposite` where `status`='0' and `startdate` BETWEEN '$sdate' AND '$edate'") or die(mysql_error());
                        }else{
                           $edate=date("Y-m-d");
                           $fetch=mysql_query("select * from `compulsarydeposite` where `status`='0' and `startdate` BETWEEN '$sdate' AND '$edate'") or die(mysql_error());
                        }
                    }
                    else{
                       $fetch=mysql_query("select * from `compulsarydeposite` where `status`='0'") or die(mysql_error()); 
                    }
		     $row=mysql_num_rows($fetch);
		   if($row>0){
                    while($res=mysql_fetch_array($fetch))
                    {
		    $vill=mysql_query("select * from `agent` where `id`='$res[agent_id]'") or die(mysql_error());
		    $resvill=mysql_fetch_array($vill);
		    $areacode= str_replace($resvill['id']," ",$resvill['codeno']);
		    $area=$resvill['area'];
                    ?>
                    <tr>
                        <td><?php echo  $res['acc_no'];?></td>
                        <td><?php echo  $res['name'];?></td>
                        <td><?php echo $res['deposited_amt'];?></td>
                        <td><?php echo $res['total_amt'];?></td>
			<td><?php echo  date("d-m-Y",strtotime($res['startdate']));?></td>
			<td><?php echo  $area.'('.$areacode.')';?></td>
                    </tr>
                    <?php $total=$total+ $res['deposited_amt'];}?>
		    <tr><td colspan="3">Total</td><td><?php echo $total;?></td><td colspan="2">&nbsp;</td></tr>
		    <tr>
			    
			    <td colspan="6" style="text-align: center;"><input type="button" value="Print" onclick="printContent('srch')" /></td>
			   
		    </tr>
		    <?php } else {?>
		    <tr>
			<th colspan="5">No Results Found...</th>
		    </tr>
                </table>
                <?php  } }elseif($table=='savingaccount'){ ?>
                    <table class="table">
                    <tr>
                        <th>Acc_no</th>
                        <th>Account Holder Name</th>
                        <th>Deposited Amount</th>
			<th>Account Opening Date</th>
			<!--<th>Village</th>-->
                    </tr>
                    <?php
                    
                     if($sdate!=''){
                        $sdate=date("Y-m-d",strtotime($sdate));
                        if($edate!=''){
                            $edate=date("Y-m-d",strtotime($edate));
                            $fetch=mysql_query("select * from `savingaccount` where `status`='0' and `opening_date` BETWEEN '$sdate' AND '$edate'") or die(mysql_error());
                        }else{
                           $edate=date("Y-m-d");
                           $fetch=mysql_query("select * from `savingaccount` where `status`='0' and `opening_date` BETWEEN '$sdate' AND '$edate'") or die(mysql_error());
                        }
                    }
                    else{
                       $fetch=mysql_query("select * from `savingaccount` where `status`='0'") or die(mysql_error()); 
                    }
		    $row=mysql_num_rows($fetch);
		    if($row>0){ $total=0;
                    while($res=mysql_fetch_array($fetch))
                    {
		    /*$vill=mysql_query("select * from `agent` where `id`='$res[agent_id]'") or die(mysql_error());
		    $resvill=mysql_fetch_array($vill);
		    $areacode= str_replace($resvill['id']," ",$resvill['codeno']);
		    $area=$resvill['area'];*/
                    ?>
                    <tr>
                        <td><?php echo  $res['acc_no'];?></td>
                        <td><?php echo  $res['name'];?></td>
                        <td><?php echo $res['deposited_amt'];?></td>
                        <td><?php echo date("d-m-Y",strtotime($res['opening_date']));?></td>
			<!--<td><?php //echo  $area.'('.$areacode.')';?></td>-->
                    </tr>
                    <?php $total=$total+ $res['deposited_amt'];}?>
		    <tr style="color: red;"><td colspan="2">Total</td><td><?php echo $total;?></td><td></td></tr>
		    <tr>
			    
			    <td colspan="4" style="text-align: center;"><input type="button" value="Print" onclick="printContent('srch')" /></td>
			   
		    </tr>
		    <?php } else {?>
		    <tr>
			<th colspan="4">No Results Found...</th>
		    </tr>
                </table>
                
                <?php } }elseif($table=='recurringdiposite'){ ?>
                <table class="table">
                    <tr>
                        <th>Acc_no</th>
                         <th>Account Holder Name</th>
			 <th>Plan</th>
			 <th>Deposited Amount</th>
			 <th>Maturity Amount</th>
			 <th>Opening Date</th>
			 <th>Maturity Date</th>
			 <th>Village</th>
                    </tr>
                    <?php
                    if($sdate!=''){
                        $sdate=date("Y-m-d",strtotime($sdate));
                        if($edate!=''){
                            $edate=date("Y-m-d",strtotime($edate));
                            $fetch=mysql_query("select * from `recurringdiposite` where `status`='0' and `start_date` BETWEEN '$sdate' AND '$edate'") or die(mysql_error());
                        }else{
                           $edate=date("Y-m-d");
                           $fetch=mysql_query("select * from `recurringdiposite` where `status`='0' and `start_date` BETWEEN '$sdate' AND '$edate'") or die(mysql_error());
                        }
                    }
                    else{
                       $fetch=mysql_query("select * from `recurringdiposite` where `status`='0'") or die(mysql_error()); 
                    }
		    $row=mysql_num_rows($fetch);
		    if($row>0){ $total=0;
                    while($res=mysql_fetch_array($fetch))
                    {
		    $vill=mysql_query("select * from `agent` where `id`='$res[agent_id]'") or die(mysql_error());
		    $resvill=mysql_fetch_array($vill);
		    $areacode= str_replace($resvill['id']," ",$resvill['codeno']);
		    $area=$resvill['area'];
                    ?>
                    <tr>
                        <td><?php echo  $res['acc_no'];?></td>
                        <td><?php echo  $res['name'];?></td>
			<td><?php echo  $yr= ($res['plan']/12)." Years";?></td>
			<td><?php echo  $res['deposited_amt'];?></td>
			<td><?php echo  $res['maturity_amount'];?></td>
			<td><?php echo  date("d-m-Y",strtotime($res['start_date']));?></td>
			<td><?php echo  date("d-m-Y",strtotime($res['end_date']));?></td>
			<td><?php echo   $area.'('.$areacode.')';?></td>
                    </tr>
                   <?php $total=$total+ $res['deposited_amt'];}?>
		    <tr style="color: red;"><td colspan="3">Total</td><td><?php echo $total;?></td><td colspan="4">&nbsp;</td></tr>
		    <tr>
			    
			    <td colspan="8" style="text-align: center;"><input type="button" value="Print" onclick="printContent('srch')" /></td>
			   
		    </tr>
		    <?php } else {?>
		    <tr>
			<th colspan="8">No Results Found...</th>
		    </tr>
                </table>
                
                <?php } }elseif($table=='fixeddeposite'){ ?>
                <table class="table">
                    <tr>
                        <th>Acc_no</th>
                         <th>Account Holder Name</th>
			 <th>Plan</th>
			 <th>Deposited Amount</th>
			 <th>Opening Date</th>
			 <th>Maturity Date</th>
			<th>Village</th>
                    </tr>
                    <?php
                    if($sdate!=''){
                        $sdate=date("Y-m-d",strtotime($sdate));
                        if($edate!=''){
                            $edate=date("Y-m-d",strtotime($edate));
                            $fetch=mysql_query("select * from `fixeddeposite` where `status`='0' and `opening_date` BETWEEN '$sdate' AND '$edate'") or die(mysql_error());
                        }else{
                           $edate=date("Y-m-d");
                           $fetch=mysql_query("select * from `fixeddeposite` where `status`='0' and `opening_date` BETWEEN '$sdate' AND '$edate'") or die(mysql_error());
                        }
                    }
                    else{
                       $fetch=mysql_query("select * from `fixeddeposite` where `status`='0'") or die(mysql_error()); 
                    }
		     $row=mysql_num_rows($fetch);
		    if($row>0){ $total=0;
                    while($res=mysql_fetch_array($fetch))
                    {
		    $vill=mysql_query("select * from `agent` where `id`='$res[agent_id]'") or die(mysql_error());
		    $resvill=mysql_fetch_array($vill);
		    $areacode= str_replace($resvill['id']," ",$resvill['codeno']);
		    $area=$resvill['area'];
                    ?>
                    <tr>
                        <td><?php echo  $res['acc_no'];?></td>
                        <td><?php echo  $res['name'];?></td>
			<td><?php echo  $res['year']." Year";?></td>
			<td><?php echo   $res['deposited_amt'];?></td>
			<td><?php echo   date("d-m-Y",strtotime($res['opening_date']));?></td>
			<td><?php echo   date("d-m-Y",strtotime($res['closing_date']));?></td>
			<td><?php echo  $area.'('.$areacode.')';?></td>
                    </tr>
                   <?php $total=$total+ $res['deposited_amt'];}?>
		    <tr style="color: red;"><td colspan="3">Total</td><td><?php echo $total;?></td><td colspan="3">&nbsp;</td></tr>
		    <tr>
			    
			    <td colspan="7" style="text-align: center;"><input type="button" value="Print" onclick="printContent('srch')" /></td>
			   
		    </tr>
		    <?php } else {?>
		    <tr>
			<th colspan="7">No Results Found...</th>
		    </tr>
                 </table>
                 <?php } }elseif($table=='dailydeposit'){ ?>
                 <table class="table">
                    <tr>
                                    <th>Acc_no</th>
				    <th>Account Holder Name</th>
			            <th>Plan</th>
			            <th>Deposited Amount</th>
			            <th>Opening Date</th>
				    <th>Village</th>
                    </tr>
                    <?php
                    if($sdate!=''){
                        $sdate=date("Y-m-d",strtotime($sdate));
                        if($edate!=''){
                            $edate=date("Y-m-d",strtotime($edate));
                            $fetch=mysql_query("select * from `dailydeposit` where `status`='0' and `opening_date` BETWEEN '$sdate' AND '$edate'") or die(mysql_error());
                        }else{
                           $edate=date("Y-m-d");
                           $fetch=mysql_query("select * from `dailydeposit` where `status`='0' and `opening_date` BETWEEN '$sdate' AND '$edate'") or die(mysql_error());
                        }
                    }
                    else{
                       $fetch=mysql_query("select * from `dailydeposit` where `status`='0'"); 
                    }
		    $row=mysql_num_rows($fetch);
		    if($row>0){ $total=0;
                    while($res=mysql_fetch_array($fetch))
                    {
		    $vill=mysql_query("select * from `agent` where `id`='$res[agent_id]'");
		    $resvill=mysql_fetch_array($vill);
		    $areacode= str_replace($resvill['id']," ",$resvill['codeno']);
		    $area=$resvill['area'];
                    ?>
                    <tr>
                                    <td><?php echo  $res['acc_no'];?></td>
                                    <td><?php echo $res['name'];?></td>
			            <td><?php echo  $res['plan']." Years";?></td>
			            <td><?php echo  $res['total_amt'];?></td>
			            <td><?php echo  date("d-m-Y",strtotime($res['opening_date']));?></td>
				    <td><?php echo  $area.'('.$areacode.')';?></td>
                    </tr>
                    <?php $total=$total+ $res['total_amt'];}?>
		    <tr style="color: red;"><td colspan="3">Total</td><td><?php echo $total;?></td><td colspan="2">&nbsp;</td></tr>
		    <tr>
			    
			    <td colspan="6" style="text-align: center;"><input type="button" value="Print" onclick="printContent('srch')" /></td>
			   
		    </tr>
		    <?php } else {?>
		    <tr>
			<th colspan="6">No Results Found...</th>
		    </tr>
                </table>
                    
               <?php } }elseif($table=='agricultureloan'){ ?>
                <table class="table">
                    <tr>
                                    <th>Acc_no</th>
				    <th>Account Holder Name</th>
			            <th>Plan</th>
			            <th>Amount</th>
			            <th>Disbursement Date</th>
			            <th>Village</th>
                    </tr>
                    <?php
                    if($sdate!=''){
                        $sdate=date("Y-m-d",strtotime($sdate));
                        if($edate!=''){
                            $edate=date("Y-m-d",strtotime($edate));
                            $fetch=mysql_query("select * from `agricultureloan` where `status`='0' and `is_approved`='1' and `loan_given_date` BETWEEN '$sdate' AND '$edate'") or die(mysql_error());
                        }else{
                           $edate=date("Y-m-d");
                           $fetch=mysql_query("select * from `agricultureloan` where `status`='0' and `is_approved`='1' and `loan_given_date` BETWEEN '$sdate' AND '$edate'") or die(mysql_error());
                        }
                    }
                    else{
                       $fetch=mysql_query("select * from `agricultureloan` where `status`='0' and `is_approved`='1'") or die(mysql_error()); 
                    }
		    $row=mysql_num_rows($fetch);
		    if($row>0){ $total=0;
                    while($res=mysql_fetch_array($fetch))
                    {
		    $vill=mysql_query("select * from `agent` where `id`='$res[agent_id]'");
		    $resvill=mysql_fetch_array($vill);
		    $areacode= str_replace($resvill['id']," ",$resvill['codeno']);
		    $area=$resvill['area'];
                    ?>
                    <tr>
                                    <td><?php echo  $res['loan_accno'];?></td>
                                    <td><?php echo $res['name'];?></td>
			            <td><?php echo  $res['plan']." Months";?></td>
			            <td><?php echo  $res['loangiven'];?></td>
			            <td><?php echo  date("d-m-Y",strtotime($res['loan_given_date']));?></td>
				    <td><?php echo  $area.'('.$areacode.')';?></td>
                    </tr>
                   <?php $total=$total+ $res['loangiven'];}?>
		    <tr style="color: red;"><td colspan="3">Total</td><td><?php echo $total;?></td><td colspan="2">&nbsp;</td></tr>
		    <tr>
			    
			    <td colspan="6" style="text-align: center;"><input type="button" value="Print" onclick="printContent('srch')" /></td>
			   
		    </tr>
		    <?php } else {?>
		    <tr>
			<th colspan="6">No Results Found...</th>
		    </tr>
                </table>
                    
               <?php } }elseif($table=='businessloan'){ ?>
                <table class="table">
                    <tr>
                                    <th>Acc_no</th>
				    <th>Account Holder Name</th>
			            <th>Plan</th>
			            <th>Amount</th>
			            <th>Disbursement Date</th>
				    <th>Village</th>
                    </tr>
                    <?php
		   if($sdate!=''){
                        $sdate=date("Y-m-d",strtotime($sdate));
                        if($edate!=''){
                            $edate=date("Y-m-d",strtotime($edate));
                            $fetch=mysql_query("select * from `businessloan` where `status`='0' and `is_approved`='1' and `loan_given_date` BETWEEN '$sdate' AND '$edate'") or die(mysql_error());
                        }else{
                           $edate=date("Y-m-d");
                           $fetch=mysql_query("select * from `businessloan` where `status`='0' and `is_approved`='1' and `loan_given_date` BETWEEN '$sdate' AND '$edate'") or die(mysql_error());
                        }
                    }
                    else{
                       $fetch=mysql_query("select * from `businessloan` where `status`='0' and `is_approved`='1'") or die(mysql_error()); 
                    }
		    $row=mysql_num_rows($fetch);
		    if($row>0){ $total=0;
                    while($res=mysql_fetch_array($fetch) or die(mysql_error()))
                    {
		    $vill=mysql_query("select * from `agent` where `id`='$res[agent_id]'") or die(mysql_error());
		    $resvill=mysql_fetch_array($vill);
		    $areacode= str_replace($resvill['id']," ",$resvill['codeno']);
		    $area=$resvill['area'];
                    ?>
                    <tr>
                                    <td><?php echo  $res['loan_accno'];?></td>
                                    <td><?php echo $res['name'];?></td>
			            <td><?php echo  $res['plan']." Months";?></td>
			            <td><?php echo  $res['loangiven'];?></td>
			            <td><?php echo  date("d-m-Y",strtotime($res['loan_given_date']));?></td>
				    <td><?php echo  $area.'('.$areacode.')';?></td>
                    </tr>
                   <?php $total=$total+ $res['loangiven'];}?>
		    <tr style="color: red;"><td colspan="3">Total</td><td><?php echo $total;?></td><td colspan="2">&nbsp;</td></tr>
		    <tr>
			    
			    <td colspan="6" style="text-align: center;"><input type="button" value="Print" onclick="printContent('srch')" /></td>
			   
		    </tr>
		    <?php } else {?>
		    <tr>
			<th colspan="6">
			    No Results Found...
			</th>
		    </tr>
                </table>
                    
               <?php } }elseif($table=='enterpriseloan'){ ?>
                <table class="table">
                    <tr>
                                    <th>Acc_no</th>
				    <th>Account Holder Name</th>
			            <th>Plan</th>
			            <th>Amount</th>
			            <th>Disbursement Date</th>
				    <th>Village</th>
                    </tr>
                    <?php
		   if($sdate!=''){
                        $sdate=date("Y-m-d",strtotime($sdate));
                        if($edate!=''){
                            $edate=date("Y-m-d",strtotime($edate));
                            $fetch=mysql_query("select * from `enterpriseloan` where `status`='0' and `is_approved`='1' and `loan_given_date` BETWEEN '$sdate' AND '$edate'") or die(mysql_error());
                        }else{
                           $edate=date("Y-m-d");
                           $fetch=mysql_query("select * from `enterpriseloan` where `status`='0' and `is_approved`='1' and `loan_given_date` BETWEEN '$sdate' AND '$edate'") or die(mysql_error());
                        }
                    }
                    else{
                       $fetch=mysql_query("select * from `enterpriseloan` where `status`='0' and `is_approved`='1'") or die(mysql_error()); 
                    }
                    $row=mysql_num_rows($fetch);
		    if($row>0){ $total=0;
                    while($res=mysql_fetch_array($fetch))
                    {
		    $vill=mysql_query("select * from `agent` where `id`='$res[agent_id]'") or die(mysql_error());
		    $resvill=mysql_fetch_array($vill);
		    $areacode= str_replace($resvill['id']," ",$resvill['codeno']);
		    $area=$resvill['area'];
                    ?>
                    <tr>
                                    <td><?php echo  $res['loan_accno'];?></td>
                                    <td><?php echo $res['name'];?></td>
			            <td><?php echo  $res['plan']." Months";?></td>
			            <td><?php echo  $res['loangiven'];?></td>
			            <td><?php echo  date("d-m-Y",strtotime($res['loan_given_date']));?></td>
				    <td><?php echo  $area.'('.$areacode.')';?></td>
                    </tr>
                   <?php $total=$total+ $res['loangiven'];}?>
		    <tr style="color: red;"><td colspan="3">Total</td><td><?php echo $total;?></td><td colspan="2">&nbsp;</td></tr>
		    <tr>
			    
			    <td colspan="6" style="text-align: center;"><input type="button" value="Print" onclick="printContent('srch')" /></td>
			   
		    </tr>
		    <?php } else {?>
		    <tr>
			<th colspan="6">No Results Found...</th>
		    </tr>
                </table>
                <?php } }elseif($table=='goldloan'){ ?>
                <table class="table">
                   <tr>
                                    <th>Acc_no</th>
				    <th>Account Holder Name</th>
			            <th>Plan</th>
			            <th>Amount</th>
			            <th>Disbursement Date</th>
				    <th>Village</th>
                    </tr>
                    <?php
                    if($sdate!=''){
                        $sdate=date("Y-m-d",strtotime($sdate));
                        if($edate!=''){
                            $edate=date("Y-m-d",strtotime($edate));
                            $fetch=mysql_query("select * from `goldloan` where `status`='0' and `is_approved`='1' and `loan_given_date` BETWEEN '$sdate' AND '$edate'") or die(mysql_error());
                        }else{
                           $edate=date("Y-m-d");
                           $fetch=mysql_query("select * from `goldloan` where `status`='0' and `is_approved`='1' and `loan_given_date` BETWEEN '$sdate' AND '$edate'") or die(mysql_error());
                        }
                    }
                    else{
                       $fetch=mysql_query("select * from `goldloan` where `status`='0' and `is_approved`='1'") or die(mysql_error()); 
                    }
		    $row=mysql_num_rows($fetch);
		    if($row>0){ $total=0;
                    while($res=mysql_fetch_array($fetch))
                    {
		    $vill=mysql_query("select * from `agent` where `id`='$res[agent_id]'") or die(mysql_error());
		    $resvill=mysql_fetch_array($vill);
		    $areacode= str_replace($resvill['id']," ",$resvill['codeno']);
		    $area=$resvill['area'];
                    ?>
                    <tr>
                                    <td><?php echo  $res['loan_accno'];?></td>
                                    <td><?php echo $res['name'];?></td>
			            <td><?php echo  $res['plan']." Months";?></td>
			            <td><?php echo  $res['loangiven'];?></td>
			            <td><?php echo  date("d-m-Y",strtotime($res['loan_given_date']));?></td>
				    <td><?php echo  $area.'('.$areacode.')';?></td>
                    </tr>
                  <?php $total=$total+ $res['loangiven'];}?>
		    <tr style="color: red;"><td colspan="3">Total</td><td><?php echo $total;?></td><td colspan="2">&nbsp;</td></tr>
		    <tr>
			    
			    <td colspan="6" style="text-align: center;"><input type="button" value="Print" onclick="printContent('srch')" /></td>
			   
		    </tr>
		    <?php } else {?>
		     <tr>
			<th colspan="6">No Results Found...</th>
		    </tr>
                </table>
               <?php }}elseif($table=='demand_loan'){ ?>
                <table class="table">
                    <tr>
                                    <th>Acc_no</th>
				    <th>Account Holder Name</th>
			            <th>Plan</th>
			            <th>Amount</th>
			            <th>Disbursement Date</th>
				    <th>Village</th>
                    </tr>
                    <?php
                    if($sdate!=''){
                        $sdate=date("Y-m-d",strtotime($sdate));
                        if($edate!=''){
                            $edate=date("Y-m-d",strtotime($edate));
                            $fetch=mysql_query("select * from `demand_loan` where `status`='0' and `is_approved`='1' and `loan_given_date` BETWEEN '$sdate' AND '$edate'") or die(mysql_error());
                        }else{
                           $edate=date("Y-m-d");
                           $fetch=mysql_query("select * from `demand_loan` where `status`='0' and `is_approved`='1' and `loan_given_date` BETWEEN '$sdate' AND '$edate'") or die(mysql_error());
                        }
                    }
                    else{
                       $fetch=mysql_query("select * from `demand_loan` where `status`='0' and `is_approved`='1'") or die(mysql_error()); 
                    }
		     $row=mysql_num_rows($fetch);
		    if($row>0){ $total=0;
                    while($res=mysql_fetch_array($fetch))
                    {
		    $vill=mysql_query("select * from `agent` where `id`='$res[agent_id]'") or die(mysql_error());
		    $resvill=mysql_fetch_array($vill);
		    $areacode= str_replace($resvill['id']," ",$resvill['codeno']);
		    $area=$resvill['area'];
                    ?>
                    <tr>
                                    <td><?php echo  $res['loan_accno'];?></td>
                                    <td><?php echo $res['name'];?></td>
			            <td><?php echo  $res['plan']." Months";?></td>
			            <td><?php echo  $res['loangiven'];?></td>
			            <td><?php echo  date("d-m-Y",strtotime($res['loan_given_date']));?></td>
				    <td><?php echo  $area.'('.$areacode.')';?></td>
                    </tr>
                    <?php $total=$total+ $res['loangiven'];}?>
		    <tr style="color: red;"><td colspan="3">Total</td><td><?php echo $total;?></td><td colspan="2">&nbsp;</td></tr>
		    <tr>
			    
			    <td colspan="6" style="text-align: center;"><input type="button" value="Print" onclick="printContent('srch')" /></td>
			   
		    </tr>
		    <?php } else {?>
		     <tr>
			<th colspan="6">No Results Found...</th>
		    </tr>
                </table>
               <?php } }elseif($table=='loan'){ ?>
                <table class="table">
                    <tr>
                                    <th>Acc_no</th>
				    <th>Account Holder Name</th>
			            <th>Plan</th>
			            <th>Amount</th>
			            <th>Disbursement Date</th>
				    <th>Village</th>
                    </tr>
                    <?php
                   
                    if($sdate!=''){
                        $sdate=date("Y-m-d",strtotime($sdate));
                        if($edate!=''){
                            $edate=date("Y-m-d",strtotime($edate));
                            $fetch=mysql_query("select * from `loan` where `status`='0' and `is_approved`='1' and `loan_given_date` BETWEEN '$sdate' AND '$edate'") or die(mysql_error());
                        }else{
                           $edate=date("Y-m-d");
                           $fetch=mysql_query("select * from `loan` where `status`='0' and `is_approved`='1' and `loan_given_date` BETWEEN '$sdate' AND '$edate'") or die(mysql_error());
                        }
                    }
                    else{
                       $fetch=mysql_query("select * from `loan` where `status`='0' and `is_approved`='1'") or die(mysql_error()); 
                    }
		     $row=mysql_num_rows($fetch);
		    if($row>0){ $total=0;
                    while($res=mysql_fetch_array($fetch))
                    {
		    $vill=mysql_query("select * from `agent` where `id`='$res[agent_id]'") or die(mysql_error());
		    $resvill=mysql_fetch_array($vill);
		    $areacode= str_replace($resvill['id']," ",$resvill['codeno']);
		    $area=$resvill['area'];
                    ?>
                   <tr>
                                    <td><?php echo  $res['loan_accno'];?></td>
                                    <td><?php echo $res['name'];?></td>
			            <td><?php echo  $res['plan']." Months";?></td>
			            <td><?php echo  $res['loangiven'];?></td>
			            <td><?php echo  date("d-m-Y",strtotime($res['loan_given_date']));?></td>
				    <td><?php echo  $area.'('.$areacode.')';?></td>
                    </tr>
                     <?php $total=$total+ $res['loangiven'];}?>
		    <tr style="color: red;"><td colspan="3">Total</td><td><?php echo $total;?></td><td colspan="2">&nbsp;</td></tr>
		    <tr>
			    
			    <td colspan="6" style="text-align: center;"><input type="button" value="Print" onclick="printContent('srch')" /></td>
			   
		    </tr>
		    <?php } else {?>
		     <tr>
			<th colspan="6">No Results Found...</th>
		    </tr>
                </table>
               <?php }}elseif($table=='grouploan'){ ?>
                <table class="table">
                    <tr>
                                    <th>Acc_no</th>
				    <th>Account Holder Name</th>
			            <th>Plan</th>
			            <th>Amount</th>
			            <th>Disbursement Date</th>
				    <th>Village</th>
                    </tr>
                    <?php if($sdate!=''){
                        $sdate=date("Y-m-d",strtotime($sdate));
                        if($edate!=''){
                            $edate=date("Y-m-d",strtotime($edate));
                            $fetch=mysql_query("select * from `grouploan` where `status`='0' and `is_approved`='1' and `loan_given_date` BETWEEN '$sdate' AND '$edate'") or die(mysql_error());
                        }else{
                           $edate=date("Y-m-d");
                           $fetch=mysql_query("select * from `grouploan` where `status`='0' and `is_approved`='1' and `loan_given_date` BETWEEN '$sdate' AND '$edate'") or die(mysql_error());
                        }
                    }
                    else{
                       $fetch=mysql_query("select * from `grouploan` where `status`='0' and `is_approved`='1'") or die(mysql_error()); 
                    }
		     $row=mysql_num_rows($fetch);
		    if($row>0){ $total=0;
                    while($res=mysql_fetch_array($fetch))
                    {
		    $vill=mysql_query("select * from `agent` where `id`='$res[agent_id]'") or die(mysql_error());
		    $resvill=mysql_fetch_array($vill);
		    $areacode= str_replace($resvill['id']," ",$resvill['codeno']);
		    $area=$resvill['area'];
                       // $qwe=mysql_query("select * from `customer` where `customer_id`='$res[customer_id]'");
                       // $rscust=mysql_fetch_array($qwe);
			
                    ?>
                    <tr>
                                    <td><?php echo  $res['loan_accno'];?></td>
                                    <td><?php echo $res['name'];?></td>
			            <td><?php echo  $res['plan']." Months";?></td>
			            <td><?php echo  $res['loangiven'];?></td>
			            <td><?php echo  date("d-m-Y",strtotime($res['loan_given_date']));?></td>
				    <td><?php echo  $area.'('.$areacode.')';?></td>
                    </tr>
                    <?php $total=$total+ $res['loangiven'];}?>
		    <tr style="color: red;"><td colspan="3">Total</td><td><?php echo $total;?></td><td colspan="3">&nbsp;</td></tr>
		    <tr>
			    
			    <td colspan="6" style="text-align: center;"><input type="button" value="Print" onclick="printContent('srch')" /></td>
			   
		    </tr>
		    <?php } else { ?>
		     <tr>
			<th colspan="6">No Results Found...</th>
		    </tr>
                </table>
               <?php } }  ?>
	       
