<?php
  include_once("function.php");
  $ip=$_SERVER['REMOTE_ADDR'];
  $date=date("Y-m-d");
  
  $fetday=mysql_query("select * from day where `date`='$date'");
$countdaydata=mysql_num_rows($fetday);
if($countdaydata==0)
{
  $fetch=mysql_query("select sum(amount) as amt from transaction WHERE `date` <= CURDATE()") or die(mysql_error());
  $res=mysql_fetch_array($fetch);
  mysql_query("insert into day set `ip`='$ip',`date`='$date',`startbalance`='$res[amt]'")or die(mysql_error());
  header("location:index1.php");
}else
{
      header("location:logout.php");
}
?>