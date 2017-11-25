<?php
include_once("function.php");
$cid=$_GET['cid'];
$com=mysql_query("select * from `compulsarydeposite`  where `customer_id`='$cid'");
$rescom=mysql_fetch_array($com);
$acc_no='VS'.$rescom['acc_no'];
$getvendor=mysql_query("select * from `customer` where `customer_id`='$cid'")or die(mysql_error());
$resvendor=mysql_fetch_array($getvendor);
	/*$getemvendor[] = array(
	'value'  => $resvendor['name']."(".$resvendor['mem_cus_id'].")",
	'idval' => $resvendor['customer_id'],
	'intid' => $resvendor['introducer'],
	'name' => $resvendor['name'],
        'gname' => $resvendor['guardian_name'],
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
        'documents' => $resvendor['documents'],
        'accno' => $acc_no
	);*/
        echo $resvendor['customer_id'].'|'.
        $acc_no.'|'.
        $resvendor['name'].'|'.
        $resvendor['guardian_name'].'|'.
        $resvendor['dob'].'|'.
        $resvendor['phno'].'|'.
        $resvendor['address'].
        $resvendor['post'].'|'.
        $resvendor['pin'].'|'.
        $resvendor['dist'].'|'.
        $resvendor['photo'].'|'.
        $resvendor['sign'].'|'.
        $resvendor['idproof'].'|'.
        $resvendor['documents'].'|'.
        $resvendor['gender'];
       // echo $getemvendor;
      // echo json_encode($resvendor);
?>