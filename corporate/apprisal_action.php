<?php
include_once("function.php");
if(isset($_POST['allow']))
{
    $lid=$_POST['loanid'];
    $ltable=$_POST['ltable'];
    $details=htmlentities($_POST['details']);
    $date=date("Y-m-d");
    $image =$_FILES['aprisaldocument']['name'];
    if($image!="" && $_FILES['aprisaldocument']['size'] < 2097152 )
    { //echo "iff";
    $ext=end(explode(".", $_FILES["aprisaldocument"]["name"]));  
    if($ext=="jpg" || $ext=="jpeg" || $ext=="png" || $ext=="gif" || $ext=="JPG" || $ext=="PNG")
        {
            $folder="image/";
            $filename = $folder .time(). $image; 
                    //echo $filename."<br/>" ;
            $copied = copy($_FILES['aprisaldocument']['tmp_name'], $filename);
        }
        //echo "update $ltable set `aprisal`='1' ,`aprisaldocument`='$filename',`aprisaldate`='$date' where `id`='$lid'";
        mysql_query("update $ltable set `aprisal`='1',`aprisaldocument`='$filename',`aprisaldate`='$date',`details`='$details' where `id`='$lid'");
        $msg="apprisal document submitted";
    }
    header("location:$ltable.php?msg=$msg");
}