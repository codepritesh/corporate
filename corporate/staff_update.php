<?php
include_once("function.php");
//ini_set("display_errors",0);
if(isset($_POST['submit']))
{
    $name=htmlentities($_POST['name']);
    $dob=date("Y-m-d",strtotime($_POST['dob']));
    $phone=htmlentities($_POST['phone']);
    $address=htmlentities($_POST['address']);
    $empid=htmlentities($_POST['empid']);
    $joindate=date("Y-m-d",strtotime($_POST['joindate']));
    $id=htmlentities($_POST['hid']);
        mysql_query("update `staff` set  `name`='$name', `dob`='$dob',`phone`='$phone',`address`='$address', `empid`='$empid',
                     `joindate`='$joindate' where `id`='$id'");
      $msg="Updated Successfully..";
    header("location:staff.php?msg=$msg");
}
?>