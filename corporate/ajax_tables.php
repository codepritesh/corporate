<?php
include_once('function.php');
connect();
date_default_timezone_set('Asia/Calcutta');
$code=$_GET['code'];
$date=date("Y-m-d");



$crnttime=date('Y-m-d H:i:s');
//echo $crnttime.'<br/>';
$crnt=strtotime($crnttime);

?>


<table style="width: 40%;margin-top: 0px;">
<tr>
<td style="text-align:center;">&nbsp;</td>
<td><input type="button" name="button" value="Take Away" style="width:90%;" class="button8" onclick="return takeawayval();"/>
</td>
</tr>

<?php

$bck='';
$que=mysql_query("select t.*,w.waitername from `table` t,`waiter` w where t.`resturant`='s' and t.`status`='0' and t.waiter_id=w.waiter_id")or die(mysql_error());

while($res=mysql_fetch_array($que))
{
$item=$res['tableno'];
$wtname=$res['waitername'];

$sqlbook=mysql_query("select * from `table_book` where `table_id`='$res[id]' and `date`='$date' and `book_status`=1");
$num=mysql_num_rows($sqlbook);
//echo $num.'-'.$res['id']."<br/>";
if($num!=0){
while($resbook=mysql_fetch_array($sqlbook)){

$dt=$resbook['date'];
$starttime=$resbook['start_time'];
 $endtime=$resbook['end_time'];
$a=$dt.' '.$starttime;
$b=$dt.' '.$endtime;
$st=strtotime($a);
$end=strtotime($b);
//echo $starttime.'--------'.$st.'start<br/>'.$endtime.'-------'.$end.'end<br/>';
if($st<=$crnt && $crnt<=$end)
{
$bck="#25e67f";
}
else{
if($bck!='')
{}
else{
$bck="#f9f9f9";
}
}
}
}
else{
$bck="#f9f9f9";
}
//echo '<br/>'.$bck.'<br/>';
?>
<tr>
<td style="text-align:center;"><img src="img/tableicon.png"  />
<td><input type="button" value="<?php echo $item; ?>[<?php echo $wtname?>]" class="button8" style="width:90%; background:<?=$bck;?>;"   onclick="return set_table(this.value,'<?php echo $item;?>');"/></td>
</td>
</tr>
<?php
}
?>
</table>


