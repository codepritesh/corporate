<?php
include_once("function.php");
$n=0;$intt=0;
$qwe=mysql_query("select * from `TABLE 67`");
while($res=mysql_fetch_array($qwe))
{
    $int=$res['COL 3'];
    $accno=$res['COL 1'];
    $chk=mysql_query("select * from `savingaccount` where `acc_no`='$accno'");
    if(mysql_num_rows($chk)>0){
        if($int>0)
        {
            $n++;
            echo "<br/>".$update="update `savingaccount` set `deposited_amt`=`deposited_amt`+$int  where `acc_no`='$accno'";
            mysql_query($update);
           echo '|';
           $intt=$intt+$int;
        }
    }else{
         echo "<br/>NOOOOOOOOOOOOOOOOOOO".$accno.'---'.$int;      
        } 
}


echo "Total===".$intt;

$m=0;$intty=0;
$qwee=mysql_query("select * from `TABLE 68`");
while($rese=mysql_fetch_array($qwee))
{
    $int=$rese['COL 3'];
    $accno=$rese['COL 1'];
    $chk=mysql_query("select * from `compulsarydeposite` where `acc_no`='$accno'");
    if(mysql_num_rows($chk)>0)
    {
        if($int>0)
        {
            $m++;            
            echo "<br/>".$update="update `compulsarydeposite` set `total_amt`=`total_amt`+$int  where `acc_no`='$accno'";
            mysql_query($update);
           $intty=$intty+$int;
        }
    }
    else{
       echo "<br/>NOOOOOOOOOOOOOOOOOOO".$accno.'---'.$int;   
    } 
}

echo "Totall===".$intty;


?>
