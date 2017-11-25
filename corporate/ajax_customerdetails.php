<?php
include_once("function.php");
$cid=$_GET['cid'];
$getvendor=mysql_query("select * from `customer` where `customer_id`='$cid'")or die(mysql_error());
$resvendor=mysql_fetch_array($getvendor);
	/*$getemvendor[] = array(
	'value'  => $resvendor['name']."(".$resvendor['mem_cus_id'].")",
	'idval' => $resvendor['customer_id'],
	'intid' => $resvendor['introducer'],
	'name' => $resvendor['name'],
        'dob' => $resvendor['dob'],
        'gender' => $resvendor['gender'],
	'phone' => $resvendor['phno'],
        'address' => $resvendor['address'],
        'post' => $resvendor['post'],
        'pin' => $resvendor['pin'],
        'dist' => $resvendor['dist'],
	'photo' => $resvendor['photo'],
        'sign' => $resvendor['sign'],
        'idproof' => $resvendor['idproof'],
        'documents' => $resvendor['documents']
        
	);*/
       // echo $resvendor['customer_id'].'|'.$resvendor['introducer'].'|'.$resvendor['name'].'|'.$resvendor['dob'].'|'.$resvendor['gender'].'|'.$resvendor['phno'].'|'.$resvendor['address'].'|'.$resvendor['address'].'|'.$resvendor['post'].'|'.$resvendor['pin'].'|'.$resvendor['dist'].'|'.$resvendor['photo'].'|'.$resvendor['sign'].'|'.$resvendor['idproof'].'|'.$resvendor['documents'];
       // echo $getemvendor;
       echo json_encode($resvendor);
?>