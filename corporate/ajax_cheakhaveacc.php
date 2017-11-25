<?php
include_once("function.php");
$table=$_GET['acc'];
$cid=$_GET['cid'];
//echo "select * from `$table` where `customer_id`='$cid'";
$qwe=mysql_query("select * from `$table` where `customer_id`='$cid' and `status`=0");

$row=mysql_num_rows($qwe);
if($row>0){
   if($row==1){
      $res=mysql_fetch_array($qwe);
      $acc_no=$res['acc_no'];
      echo "$acc_no";
      ?>
      <td>Loan Against Account Number</td><td><input type="text" name="loan_against_accno" value="<?php echo $acc_no; ?>" id="loan_against_accno" readonly class="form-control"></td>
      <?php
      
      }else{ ?>     
                 
          <td>Loan Against Account Number</td>
          <td>
            <select name="loan_against_accno" id="loan_against_accno" class="form-control">
               <?php
               while($res=mysql_fetch_array($qwe))
               { ?>
               <option value="<?php echo $res['acc_no']; ?>"><?php echo $res['acc_no']; ?></option>
               <?php } ?>
            </select>
          </td>
         <?php
   }
}else{
    echo "notok";
}
?>