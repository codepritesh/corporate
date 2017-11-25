<?php
include_once("function.php");

$sdate=date("Y-m-d",strtotime($_GET['sdt']));
$edate=date("Y-m-d",strtotime($_GET['edt']));
   if($sdate!=''){
       $sdate=date("Y-m-d",strtotime($sdate));
       if($edate!=''){
           $edate=date("Y-m-d",strtotime($edate));
           $fetch=mysql_query("SELECT *,length(`shareno`) shrnolen  from `member` where `status`=0 and `join_date` BETWEEN '$sdate' AND '$edate' order by shrnolen, `shareno` asc") or die(mysql_error());
       }else{
          $edate=date("Y-m-d");
          $fetch=mysql_query("select *,length(`shareno`) shrnolen from `member` where `status`=0 and `join_date` BETWEEN '$sdate' AND '$edate' order by shrnolen, `shareno` asc") or die(mysql_error());
       }
   }
   else{
			//echo "select * from `transaction` where `accountno`='$acc_no'";
      $fetch=mysql_query("select *,length(`shareno`) shrnolen from `member` where `status`=0 order by shrnolen, `shareno` asc") or die(mysql_error()); 
   }
   $a=1;
    if(mysql_num_rows($fetch)>0){
        while($res=mysql_fetch_array($fetch))
        {
        $tot=$res['prefshare_fees']+$tot;
        if($res['cast']==1){
            $cast="UR";
        }else if($res['cast']==2){
            $cast="OBC";
        }
        else if($res['cast']==3){
            $cast="SC";
        }
        else if($res['cast']==4){
            $cast="ST";
        }
        else if($res['cast']==5){
            $cast="MINORITY";
        }
        else if($res['cast']==6){
            $cast="GENERAL";
        }else{
            $cast=$res['cast'];
        }
        ?>
                        <tr>
		                    <td><?php echo $a++; ?></td>
                            <td><?php echo  $res['name'];?></td>
		                    <td><?php echo  $res['address'];?></td>
                            <td><?php echo $res['guardian_name'];?></td>
                            <td><?php echo $res['nominee_name'];?></td>
                            <td><?php echo $cast;?></td>
                            <td><?php echo $res['age'];?> Years</td>
                            <td><?php echo date("d-m-Y",strtotime($res['join_date']));?></td>
                            <td><?php echo $res['shareno'];?></td>
                            <td><?php echo $res['noofshares'];?></td>
                            <td><?php echo $res['prefshare_fees'];?></td>
                            <td><img src="<?php echo  $res['secreterysign'];?>" width="70" hieght="30"/></td>
                        </tr> 

                <?php }
                ?>
                 <tr>
                        <td colspan="10" style="text-align: center;">Total  Amount:</td><td><?php echo number_format($tot, 2, '.', '');?></td>
                        <td></td>
                    </tr>
                <?php
                }else{ ?>
                
                <tr>
                    <td colspan="12">No Result Found.</td>
                </tr>
                <?php } ?>