<?php
include_once("function.php");
ini_set("display_errors",1);
if(isset($_POST['setvillage']))
{
    $village=$_POST['village'];
    $accno=$_POST['accno'];
    $table=$_POST['table'];
    
    mysql_query("update $table set `village`='$village' where `loan_accno`='$accno'")or die(mysql_error());
    $msg = "Village has been set.";
    header("location:village_set.php?msg=$msg");
}
else if(isset($_POST['updatescheduler']))
{
     $accno=$_POST['accno'];
     $table=$_POST['table'];
    
    if($table=="goldloan"){ $folio=11;}
    else if($table=="demand_loan"){ $folio=10;}
    else if($table=="businessloan"){ $folio=8;}
    else if($table=="agricultureloan"){ $folio=7;}
    else if($table=="enterpriseloan"){ $folio=9;}
    else if($table=="grouploan"){ $folio=6;}
    else if($table=="staffloan"){ $folio=23;}    
    
    mysql_query("delete FROM `transaction_ledger` where `accountno`='$accno'")or die(mysql_error());
    $res = mysql_fetch_array(mysql_query("select * from $table where `loan_accno`='$accno'"))or die(mysql_error());    
     $id=$res['id'];
    header("location:ledger.php?table=$table&folio=$folio&id=$id");
    
}

?>