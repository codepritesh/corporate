<?php
include_once("function.php");
$id=$_GET['id'];
$qwe=mysql_query("select * from `fixeddepositescheme` where `id`='$id'");
$res=mysql_fetch_array($qwe);
echo $res['intrestrate'].'|'.$res['year'];
?>