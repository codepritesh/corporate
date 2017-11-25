<?php
include "function.php"; //Connect to Database
$no=0;
$n1=0;

/*$qwe=mysql_query("SELECT * FROM  `daily`");
while($res=mysql_fetch_array($qwe))
{
    echo "</br>insert into zdata set `accountno`='$res[acc_no]',`amount`='$res[total_amt]',`product`='daily'";
    mysql_query("insert into zdata set `accountno`='$res[acc_no]',`amount`='$res[total_amt]',`product`='daily'");
}*/
/*$q=mysql_query("select * from `recurringdiposite` where `id`>'2951'");
  while($r=mysql_fetch_array($q)){
  $myStr=$r['acc_no'];
  
    $fetch=mysql_query("select * from `transaction` where `accountno`='$myStr'");
    $fetchr=mysql_fetch_array($fetch);
    $countr=mysql_num_rows($fetch);
  if($countr>0)
  { $n++;
    echo "<br/>".$n."update `recurringdiposite` set `acc_no`='$myStr' where `id`='$r[id]'";
  }
  }*/

 /* $fetch=mysql_query("select * from `table 57`");
while ($data=mysql_fetch_array($fetch))
{ $n++;
        if($data['COL 1']!="")
 
 
?>