<?php
include "function.php"; //Connect to Database
$no=0;
$n1=0;
// ------------------update recurring table with  R accno---//
/*$q=mysql_query("select * from `recurringdiposite`");
  while($r=mysql_fetch_array($q)){
  $myStr=$r['acc_no'];
  $result = substr($myStr, 0, 2);
  if($result=='RD'){
$newstring = str_replace("RD", "R", $myStr);
echo "<br/>update `recurringdiposite` set `acc_no`='$newstring' where `id`='$r[id]'";
mysql_query("update `recurringdiposite` set `acc_no`='$newstring' where `id`='$r[id]'");
  }
  }*/
  // ------------------update recurring table with amount---//
/*$fetch=mysql_query("select * from `table 50`");
while ($data=mysql_fetch_array($fetch))
{ $n++;
        if($data['COL 1']!="")
        {
            
                $accont="R".$data['COL 1'];
                $fetchacc=mysql_query("select * from `recurringdiposite` where `acc_no`='$accont'");
                $resacc=mysql_fetch_array($fetchacc);
                $monthly_amount=$resacc['monthly_amount'];  
                $amt=$data['COL 4'];
                $installment=$amt/$monthly_amount;
                $paid_installment=$installment;
                $date="2016-03-31";
                
                $count=mysql_num_rows($fetchacc);
                if($count>0)
                {
                echo $n."-".$qwe="update `recurringdiposite` set `deposited_amt`='$amt',`last_diposite_date`='$date',`paid_installment`='$paid_installment' where `acc_no`='$accont'";
                echo "<br/>";
                //mysql_query($qwe)or die(mysql_error());
                }
                else
                {
                    $n1++;
                    echo $n."-".$qwe=" not found update `recurringdiposite` set `deposited_amt`='$amt',`last_diposite_date`='$date',`paid_installment`='$paid_installment' where `acc_no`='$accont'";
                    echo "<br/>";
                }
        }
} echo "not found--".$n1."------".$n;*/

//-------------------update recurring transaction table with r-----------//

/*$q=mysql_query("select * from `transaction`");
  while($r=mysql_fetch_array($q))
  {
        $myStr=$r['accountno'];
        $result = substr($myStr, 0, 2);
        if($result=='RD'){
        $newstring = str_replace("RD", "R", $myStr);
        echo "<br/>update `transaction` set `accountno`='$newstring' where `id`='$r[id]'";
        mysql_query("update `transaction` set `accountno`='$newstring' where `id`='$r[id]'");
  }
  }*/
  //-----------update recurring table wih amount from transaction---------------//
 /* $fetch=mysql_query("select * from `transaction` where `accountno` like 'R%'");
while ($data=mysql_fetch_array($fetch))
{
    $accont=$data['accountno'];
                $fetchacc=mysql_query("select * from `recurringdiposite` where `acc_no`='$accont'");
                $resacc=mysql_fetch_array($fetchacc);
                $monthly_amount=$resacc['monthly_amount'];  
                $amt=$data['amount'];
                $installment=$amt/$monthly_amount;
                $paid_installment=$installment;
                $date=$data['date'];
                
                $count=mysql_num_rows($fetchacc);
                if($count>0)
                {
                echo $n."-".$qwe="update `recurringdiposite` set `deposited_amt`=`deposited_amt`+$amt,`last_diposite_date`='$date',`paid_installment`=`paid_installment`+$paid_installment where `acc_no`='$accont'";
                echo "<br/>";
                mysql_query($qwe)or die(mysql_error());
                }
                else
                {
                    $n1++;
                    echo $n."-".$qwe=" not found update `recurringdiposite` set `deposited_amt`='$amt',`last_diposite_date`='$date',`paid_installment`='$paid_installment' where `acc_no`='$accont'";
                    echo "<br/>";
                }
} echo "not found--".$n1."------".$n;*/


//------------------------insert into zdata---------------//
/*
$qwe=mysql_query("SELECT * FROM  `table 50`");
while($res=mysql_fetch_array($qwe))
{
    if($res['COL 4']!="")
    {
    $accno="R".$res['COL 1'];
    $amount=$res['COL 4'];
    $n1++;
    echo "</br>insert into zdata set `accountno`='$accno',`amount`='$amount',`product`='recurringdiposite'";
    //mysql_query("insert into zdata set `accountno`='$accno',`amount`='$amount',`product`='recurringdiposite'");
    }
} echo "</br>".$n."--notfound--------found--".$n1;*/


/*$qwe=mysql_query("SELECT * FROM  `daily`");
while($res=mysql_fetch_array($qwe))
{
    echo "</br>insert into zdata set `accountno`='$res[acc_no]',`amount`='$res[total_amt]',`product`='daily'";
    mysql_query("insert into zdata set `accountno`='$res[acc_no]',`amount`='$res[total_amt]',`product`='daily'");
}*/

$q=mysql_query("select * from `recurringdiposite` where `id`>'2951'");
  while($r=mysql_fetch_array($q)){
  $myStr=$r['acc_no'];
  
    $fetch=mysql_query("select * from `transaction` where `accountno`='$myStr'");
    $fetchr=mysql_fetch_array($fetch);
    $countr=mysql_num_rows($fetchr);
  if($countr>0)
  {
    echo "<br/>update `recurringdiposite` set `acc_no`='$myStr' where `id`='$r[id]'";
  }
  }
?>