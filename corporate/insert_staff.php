<?php
include_once("function.php");
if(isset($_POST['submit']))
{
    $name=htmlentities($_POST['name']);
    $dob=date("Y-m-d",strtotime($_POST['dob']));
    $phone=htmlentities($_POST['phone']);
    $address=htmlentities($_POST['address']);
    $empid=htmlentities($_POST['empid']);
    $joindate=date("Y-m-d",strtotime($_POST['joindate']));
    
    $chk=mysql_query("SELECT * FROM `staff` where `empid`='$empid' ")or die(mysql_error());
    $row=mysql_num_rows($chk);
   
    $qwe=mysql_query("INSERT INTO `staff` set  `name`='$name', `dob`='$dob',`phone`='$phone',`address`='$address', `empid`='$empid',
                     `joindate`='$joindate'")or die(mysql_error()) ;
}
$msg="Successfully Added...";
header("location:staff.php?msg=$msg");
?>