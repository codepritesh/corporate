<?php
include_once("function.php");
$lastrefund=date("Y-m-01", strtotime("+6 month", strtotime($int_cal_date)));
$currdate=date("m");
if($currdate==03 || $currdate==09)
{
    $fetchcompulsory=mysql_query("select * from `compulsarydeposite`") or die(mysql_error());
    while($rescompulsory=mysql_fetch_array($fetchcompulsory))
    {
        $compamount=$rescompulsory['total_amt'];
        $comp_inter=$rescompulsory['intrest_rate'];
        $int_cal_date=$rescompulsory['int_cal_date'];
        $id=$rescompulsory['id'];
        
        $lastcal = strtotime($rescompulsory['int_cal_date']);
        $current = strtotime(date("Y-m-d"));
        
        if($lastcal<$current)
        {
            $amt1=0;
            $typ=1;
            $n=6;
            $p=$compamount;
            $r=$comp_inter/12;
            for($x=$n;$x>0;$x--)
            {
                $n=$x;
            $dd = 1+(($r/$typ)/100);
            $ci = $p*pow($dd,$typ*$n);
            $amt = round($ci)*100/100;
            $ci = round($ci-$p)*100/100;
            //echo "<br>Compount interest : ".$ci;
            //echo "<br>Amount : ".$amt;
            $amt1=$amt1+$amt;
            //echo "<br>total:".$amt1;
            }
          $lastrefund=date("Y-m-01", strtotime("+6 month", strtotime($int_cal_date)));
        mysql_query("update `compulsarydeposite` set  `total_amt`='$amt1',`int_cal_date`='$lastrefund' where `id`='$id'");
        }
    }
    
}
header("location:index1.php");
?>