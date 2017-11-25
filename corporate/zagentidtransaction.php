<?php
include "function.php"; //Connect to Database
$n=0;
    $fetch=mysql_query("select * from `transaction`");
    while($res=mysql_fetch_array($fetch))
    {
        $n++;
        echo $n;
        $folio=$res['folio_no'];
        $accno=$res['accountno'];
        $fetch1=mysql_query("select * from `folio` where `id`='$folio'");
        $res1=mysql_fetch_array($fetch1);
        $table=$res1['name'];
        $fetch2=mysql_query("select * from `$table` where `acc_no`='$accno'");
        $res2=mysql_fetch_array($fetch2);
        $agid=$res2['agent_id'];
        echo "update `transaction` set `agentid`='$agid'";
        //mysql_query("update `transaction` set `agentid`='$agid'");
    }
?>