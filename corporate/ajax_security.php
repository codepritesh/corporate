<?php
include_once("function.php");
$table=$_GET['table'];
$accno=$_GET['accno'];
$agnstacc=$_GET['agnstacc'];
$qwe="select * from $table where `loan_accno`='$table'";
$cnt=mysql_num_rows(mysql_query($qwe));
if($cnt>0)
{
    $res=mysql_fetch_array(mysql_query($qwe));
    $cid=$res['customer_id'];
    $cntt=mysql_num_rows(mysql_query("select * from $agnstacc where `customer_id`='$cid'"));
    if($cntt>0)
    {
        $ress=mysql_fetch_array(mysql_query("select * from $agnstacc where `customer_id`='$cid'"));
        echo $agnstaccno=$ress['acc_no'];
    }else
    {
        echo 1;
    }
}else
{
   echo 0;
}
?>