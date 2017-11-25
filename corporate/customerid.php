<?php
include_once("function.php");

/*$qwe=mysql_query("select * from `customer` group by `name`");
while($res=mysql_fetch_array($qwe)){
    $qwe1=mysql_query("select * from `customer` where `name`='$res[name]'");
    echo mysql_num_rows($qwe1);
    echo "</br>";
    if(mysql_num_rows($qwe1)>1){
        $rs=mysql_fetch_array($qwe1);
        echo $rs['name']."----".$rs['address'];
        echo "</br>";
    }
}*/

/*********************************************Daily to customer***********************************************************/

/*$qwe=mysql_query("select * from `dailydeposit` group by `name`");
while($res=mysql_fetch_array($qwe)){
    $qwe1=mysql_query("select * from `dailydeposit` where `name`='$res[name]'");
    if(mysql_num_rows($qwe1)>1){
        $time=0;
       while( $rs=mysql_fetch_array($qwe1)){
        $time++;
        echo $rs['name']."----".$rs['plan']."----".$rs['deposited_amt']."----".$rs['total_amt']."----".$rs['opening_date'];
        echo "</br>";
        $cust=mysql_query("select * from `customer` where `name`='$rs[name]'");
        $rscust=mysql_fetch_array($cust);
        if($rscust['customer_id']!='')
            {
                 echo "update `dailydeposit` set `customer_id`='$rscust[customer_id]' where `id`='$rs[id]'";
                 echo "</br>";
                 mysql_query("update `dailydeposit` set `customer_id`='$rscust[customer_id]' where `id`='$rs[id]'");              
            }
            else{
                $r1=mysql_fetch_array(mysql_query("select max(id) as id from `customer`"));
                $temcuid=$r1['id']+1;
                $cuid="c".$temcuid;
                if($time==1){
                mysql_query("insert into `customer` set `customer_id`='$cuid', `name`='$rs[name]'");
                echo "insert into `customer` set `customer_id`='$cuid', `name`='$rs[name]'";
                echo "</br>";
                }
                 echo "update `dailydeposit` set `customer_id`='$cuid' where `id`='$rs[id]'";
                 echo "</br>";
                 mysql_query("update `dailydeposit` set `customer_id`='$cuid' where `id`='$rs[id]'"); 
            }
        }
    }
    elseif(mysql_num_rows($qwe1)==1){
        $rs=mysql_fetch_array($qwe1);
        echo $rs['name'];
        echo "</br>";
        $cust=mysql_query("select * from `customer` where `name`='$rs[name]'");
        $rscust=mysql_fetch_array($cust);
        if($rscust['customer_id']!=''){
        echo "update `dailydeposit` set `customer_id`='$rscust[customer_id]' where `id`='$rs[id]'";
        echo "</br>";
       mysql_query("update `dailydeposit` set `customer_id`='$rscust[customer_id]' where `id`='$rs[id]'");       
        }else{
                $r1=mysql_fetch_array(mysql_query("select max(id) as id from `customer`"));
                $temcuid=$r1['id']+1;
                $cuid="c".$temcuid;
                
                 mysql_query("insert into `customer` set `customer_id`='$cuid', `name`='$rs[name]'");
                echo "insert into `customer` set `customer_id`='$cuid', `name`='$rs[name]'";
                echo "</br>";
                
                echo "update `dailydeposit` set `customer_id`='$cuid' where `id`='$rs[id]'";
                echo "</br>";
                mysql_query("update `dailydeposit` set `customer_id`='$cuid' where `id`='$rs[id]'"); 
        
               
        }

    }
}*/
/***************************************************************************fixed to customer*****************************************************/

$qwe=mysql_query("select DISTINCT name  from `customer` ");
while($res=mysql_fetch_array($qwe)){
    $qwe1=mysql_query("select * from `customer` where `name`='$res[name]'");
    if(mysql_num_rows($qwe1)>1){
            //echo mysql_num_rows($qwe1);
            echo "</br>";
            while($rs=mysql_fetch_array($qwe1)){
            echo $rs['customer_id']."----".$rs['name']."----".$rs['address'];
            echo "</br>";
            
            } 
    }
}
?>