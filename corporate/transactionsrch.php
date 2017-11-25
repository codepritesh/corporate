<?php
include_once("function.php");
$acc_no=$_GET['acc_no'];
$custid=$_GET['cid'];
$sdate=$_GET['sdt'];
$edate=$_GET['edt'];
?>

<table id="srch" >
                    <tr>
                        <th>Acc_no</th>
                         <th>Account Holder Name</th>
						 <th>Account Type</th>
						 <th>Credit Amount</th>
						 <th>Debit Amount</th>
						 <th>Balance</th>
						 <th>Transaction Date</th>
                    </tr>
                    <?php
					$a=0;
                    if($sdate!=''){
                        $sdate=date("Y-m-d",strtotime($sdate));
                        if($edate!=''){
                            $edate=date("Y-m-d",strtotime($edate));
                            $fetch=mysql_query("select * from `transaction` where `accountno`='$acc_no' and `date` BETWEEN '$sdate' AND '$edate'") or die(mysql_error());
                        }else{
                           $edate=date("Y-m-d");
                           $fetch=mysql_query("select * from `transaction` where `accountno`='$acc_no' and `date` BETWEEN '$sdate' AND '$edate'") or die(mysql_error());
                        }
                    }
                    else{
                       $fetch=mysql_query("select * from `transaction` where `accountno`='$acc_no'") or die(mysql_error()); 
                    }
                    if(mysql_num_rows($fetch)>0){
                         while($res=mysql_fetch_array($fetch))
                            {
                                $qwe=mysql_query("select * from `customer` where `customer_id`='$res[customerid]'");
                                $rscust=mysql_fetch_array($qwe);
								$a=$a+$res['amount'];
								?>
                                 <tr>
                                    <td><?= $res['accountno'];?></td>
                                    <td><?= $rscust['name'];?></td>
                                    <td><?= $res['details'];?></td>
                                    <td><?php $amt=$res['amount']; if($amt[0]!='-'){echo $res['amount'] ;}?></td>
                                    <td><?php $amt=$res['amount']; if($amt[0]=='-'){echo substr($amt, 1);}?></td>
									<td><?=$a;?></td>
                                    <td><?= date("d-m-Y",strtotime($res['date']));?></td>
                                </tr>
                        
                   <?php } }else{ ?>
                                <tr>
                                    <td colspan="6">No result Found..</td>
                                </tr>
                   
                   <?php  } ?>
                    
                </table>