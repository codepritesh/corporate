<?php
include_once("function.php");
$acc_no=$_GET['acc_no'];
$sdate=$_GET['sdt'];
$edate=$_GET['edt'];
$table=$_GET['table'];
//echo "select * from $table where `acc_no`='$acc_no'";
$data=mysql_query("select * from $table where `acc_no`='$acc_no'");
$resdata=mysql_fetch_array($data);

		    $a=0;
                    if($sdate!=''){
                        $sdate=date("Y-m-d",strtotime($sdate));
                        if($edate!=''){
                            $edate=date("Y-m-d",strtotime($edate));
                            $fetch=mysql_query("select * from `transaction` where `accountno`='$acc_no' and `date` BETWEEN '$sdate' AND '$edate' order by `date` ") or die(mysql_error());
                        }else{
                           $edate=date("Y-m-d");
                           $fetch=mysql_query("select * from `transaction` where  `accountno`='$acc_no' and `date` BETWEEN '$sdate' AND '$edate' order by `date` ") or die(mysql_error());
                        }
                    }
                    else{
			//echo "select * from `transaction` where `accountno`='$acc_no'";
                       $fetch=mysql_query("select * from `transaction` where  `accountno`='$acc_no' order by `date` ") or die(mysql_error()); 
                    }
?>

<table id="srch" >
			<tr>
				<th colspan="3">
					Name:  <?php echo $resdata['name'];?> <br/>
					<?php if($table=='recurringdiposite'){ ?>
					Monthly Amount: <?php echo $resdata['monthly_amount'];?>
					<?php } ?>
				</th>
				<th colspan="3">
					Opening Date: <?php if($table=="savingaccount" || $table=="fixeddeposite"){ echo date("d-m-Y",strtotime($resdata['opening_date'])); }elseif($table=="compulsarydeposite"){ echo date("d-m-Y",strtotime($resdata['startdate'])); }else{ echo date("d-m-Y",strtotime($resdata['start_date'])); } ?> <br/>
					<?php if($table=='recurringdiposite'){ ?>
					Duration : <?php echo $resdata['plan']." Month";?>
					<?php } ?>
				</th>
			</tr>
            <tr>
			 <th>Date</th>
			 <th>Deposite Amount</th>
			 <th>Withdrawl Amount</th>
		     <th>Total</th>
			 <th>Village</th>
			 <th>Agent</th>
            </tr>
			<?php
            if($table=='dailydeposit')
            {
            $zdata=mysql_query("select * from `DailyAugustData` where `AccountNo`='$acc_no'");
			$rowzdata=mysql_num_rows($zdata);
			$reszdata=mysql_fetch_array($zdata);
            //echo $reszdata['amount'];
			$tot=0;
			if($rowzdata>0){
			$tot=$reszdata['Amount'];
            ?>
             <tr>
									<td><?php echo "31-07-2017";?></td>
                                    <td></td>
                                    <td></td>
									<td><?php echo number_format($reszdata['Amount'], 2, '.', ',');?></td>
									<td></td>
									<td></td>
            </tr>
            <?php
            }
            }
            else{
			$zdata=mysql_query("select * from `zdata` where `accountno`='$acc_no'");
			$rowzdata=mysql_num_rows($zdata);
			$reszdata=mysql_fetch_array($zdata);
            //echo $reszdata['amount'];
			$tot=0;
			if($rowzdata>0){
			$tot=$reszdata['amount'];
			?>
			 <tr>
									<td><?php echo "31-03-2016";?></td>
                                    <td></td>
                                    <td></td>
									<td><?php echo number_format($reszdata['amount'], 2, '.', ',');?></td>
									<td></td>
									<td></td>
            </tr>
			<?php
			}
            }         
                    if(mysql_num_rows($fetch)>0){
						$a=$tot;
                         while($res=mysql_fetch_array($fetch))
                            {
                                if(strpos($res['details'], 'By Customer') !== 0){
                                $qwe=mysql_query("select * from `customer` where `customer_id`='$res[customerid]'");
                                $rscust=mysql_fetch_array($qwe);
                                if($res['interest']>0){
                                    $a=$a+$res['interest'];
                                }else{
                                    $a=$a+$res['amount'];
                                }
								//$tot=$a+$tot;
		                   ?>
                                 <tr>
									<td><?php echo  date("d-m-Y",strtotime($res['date']));?></td>
                                    <td><?php if($res['details']=='To Customer COM Saving Interest' || $res['details']=='To Customer VOL Saving Interest' ){$amt=$res['amount'].' ( Interest ) ';}else{$amt=$res['amount'];} if($amt[0]!='-'){echo $amt;}?></td>
                                    <td><?php $amt=$res['amount']; if($amt[0]=='-'){echo substr($amt, 1); }?></td>
									<td><?php echo number_format($a, 2, '.', ',');?></td>
									<td><?php echo $resdata['address'];?></td>
                                    <?php
										$agnt=mysql_query("select * from `agent` where `id`='$res[agentid]'");
										$rsagnt=mysql_fetch_array($agnt);
									?>
									<td><?php echo $rsagnt['name'];?></td>
                                </tr>
                        
                   <?php } } ?>
		    <tr style="text-align: center; color: red;">
			    <td colspan="3" >Sub Total Amount:</td><td colspan="3"><?php echo number_format($a, 2, '.', '');?></td>
		    </tr>
		    <tr >
			    <td colspan="8" style="text-align: center;"><input type="button" value="Print" onclick="printContent('print')" /></td>
		    </tr>
		   <?php }else{ ?>
                                <tr>
                                    <td colspan="8">No result Found..</td>
                                </tr>
                   
                   <?php  } ?>
                    
                </table>