<?php
  include_once("function.php");
  $ip=$_SERVER['REMOTE_ADDR'];
  $date=date("Y-m-d");
  $fetch=mysql_query("select sum(amount) as amt from transaction WHERE `date` <= CURDATE()");
  $res=mysql_fetch_array($fetch);
  mysql_query("update  day set `start`='1',`endbalance`='$res[amt]' where `date`='$date'");
  header("location:logout.php");
?>