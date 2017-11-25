<?php
include_once("function.php");
if(isset($_POST['submit']))
{
     $sid=htmlentities($_POST['scheme']);
     $fees=htmlentities($_POST['fee']);
    mysql_query("update `processing_fees` set `fees`='$fees' where `id`='$sid'")or die(mysql_error());
}
$msg="Successfully Updated...";
header("location:processingfees.php?msg=$msg");
?>