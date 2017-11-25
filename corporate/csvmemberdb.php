<?php
include "function.php"; //Connect to Database
$fetch=mysql_query("select * from `TABLE 42`");
while($res=mysql_fetch_array($fetch))
{
    $mem1=mysql_fetch_array(mysql_query("select max(id) as id from `member`"));
    $mid=$mem1['id']+1;
    
        $name=$res['COL 4'];
        $gname=$res['COL 5'];
        $add=$res['COL 6'];
        $post=$res['COL 7'];
        $date=$res['COL 2'];  
    if($res['COL 1']!="")
    {
        $memberid="M".$res['COL 1'];
       	$custid="c".$res['COL 1'];
        $shareno=$res['COL 1'];
   
                    if($res['COL 9']!="")
                    {
                    $r1=mysql_fetch_array(mysql_query("select max(id) as id from `customer`"));
                    $cid=$r1['id']+1;
                    
                    $custid1="c".$cid;

		     $import="insert into `member` set `name`='$name'
			,`guardian_name`='$gname'
			,`address`='$add'
			,`post`='$post'
                    ,`dist`='KENDRAPADA'
		    ,`gender`='female'
		    ,`religion`='hindu'
                    ,`form_fees`='20'
                    ,`prefshare_fees`='100'
                    ,`noofshares`='1'
		    ,`shareno`='$shareno'
                    ,`customer_id`='$custid1'
		    ,`join_date`='$date'
		    ,`member_id`='$memberid'";
                   mysql_query($import);
                    
                    $import1="insert into `customer` set `customer_id`='$custid1'
			,`mem_cus_id`='$memberid'
			,`introducer`='$mid', `name`='$name'
			,`guardian_name`='$gname'
			,`address`='$add'
			,`post`='$post'
                    ,`dist`='$dist',`gender`='female'
		    ,`religion`='hindu'
		    ,`join_date`='$date'";
                    
                     mysql_query($import1) or die(mysql_error());
                    }
                    if($res['COL 10']!="")
                    {
                        $name=$res['COL 10'];
                    $r1=mysql_fetch_array(mysql_query("select max(id) as id from `customer`"));
                    $cid=$r1['id']+1;
                    
                    $custid1="c".$cid;
                    
                    $import2="insert into `customer` set `customer_id`='$custid1'
			,`introducer`='$mid', `name`='$name'
			,`address`='$add'
			,`post`='$post'
                    ,`dist`='$dist',`gender`='female'
		    ,`religion`='hindu'
		    ,`join_date`='$date'";
                    
                     mysql_query($import2) or die(mysql_error());
                    }
		    
		    //echo "</br>".$import;
                     
    }
    else
    {
        $r1=mysql_fetch_array(mysql_query("select max(id) as id from `customer`"));
                    $cid=$r1['id']+1;
                    
                    $custid1="c".$cid;
                    $name=$res['COL 8'];
                    $import3="insert into `customer` set `customer_id`='$custid1'
			,`introducer`='$mid', `name`='$name'
			,`address`='$add'
			,`post`='$post'
                    ,`dist`='$dist',`gender`='female'
		    ,`religion`='hindu'
		    ,`join_date`='$date'";
                    
                     mysql_query($import3) or die(mysql_error());
        
    }
}
?>