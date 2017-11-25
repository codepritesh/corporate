<?php
include_once("function.php");

/*$qwe=mysql_query("select * from `customer` where `address`!=''");
while($res=mysql_fetch_array($qwe)){
  echo "select * from `prefix` where `name`='$res[address]'"."</br>";
  $vill=mysql_query("select * from `prefix` where `name`='$res[address]'");
  
    $vid=mysql_fetch_array($vill);
    echo $res['address'].'----'.$vid['name'].'</br>';
    mysql_query("Update  `customer` set  `village`='$vid[slno]' where `id`='$res[id]'");
  
  
  
}*/
?>
   <table class="table">
                    <tr>
                      <th>Slno.</th>
                      <th>Customer Id</th>
                      <th>Name</th>
                       <th>Address</th>
                    </tr>
                    <?php
$qwe=mysql_query("select * from `customer` where `village`=0");
$c=0;
while($res=mysql_fetch_array($qwe)){
  $c++;
  ?>
                   
                    <tr>
                      <td><?php  echo $c; ?></td>
                      <td><?php  echo $res['customer_id']; ?></td>
                      <td><?php  echo $res['name']; ?></td>
                      <td><?php  echo $res['address']; ?></td>
                    </tr>
   
<?php
}
?>
</table>