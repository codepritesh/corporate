<?php
include_once("function.php");
ini_set("display_errors",1);
if(isset($_POST['submit']))
{
    $introducer=htmlentities($_POST['intid']);
    $name=htmlentities($_POST['name']);
    $gurdian=htmlentities($_POST['gurdian']);
    $dob=htmlentities($_POST['dob']);
    $village=htmlentities($_POST['village']);
    $address=htmlentities($_POST['address']);
    $phno=htmlentities($_POST['phno']);
    $post=htmlentities($_POST['post']);
    $dist=htmlentities($_POST['dist']);
    $pin=htmlentities($_POST['pin']);
    $gender=htmlentities($_POST['gender']);
    $age=htmlentities($_POST['age']);
    $religion=htmlentities($_POST['religion']);
    $nominee=htmlentities($_POST['nominee']);
    $annual=htmlentities($_POST['annual']);
    $intid=htmlentities($_POST['intid']);
    $image =$_FILES["mphoto"]["name"];
    $image1 =$_FILES["midproof"]["name"];
    $image2 =$_FILES["msign"]["name"];
    $image3 =$_FILES["mdoc"]["name"];
   //echo "</br>".$image."==".$image1."==".$image2."==".$image3;
   $photo1=htmlentities($_POST['photo1']);
    $documents1=htmlentities($_POST['documents1']);
    $idproof1=htmlentities($_POST['idproof1']);
   $sign1=htmlentities($_POST['sign1']);
    if($image!="")
    {
    $ext=end(explode(".", $_FILES["mphoto"]["name"]));  
    if($ext=="jpg" || $ext=="jpeg" || $ext=="png" || $ext=="gif" || $ext=="pdf" || $ext=="txt" || $ext=="svg" || $ext=="JPG" || $ext=="PNG")
        {
            $folder="image/";
            $filename = $folder .time(). $image; 
                    //echo $filename."<br/>" ;
            $copied = copy($_FILES['mphoto']['tmp_name'], $filename);
        }
    }else{ $filename=$photo1;}
    if($image1!="")
    {
    $ext1=end(explode(".", $_FILES["midproof"]["name"]));  
    if($ext1=="jpg" || $ext1=="jpeg" || $ext1=="png" || $ext1=="gif" || $ext1=="pdf" || $ext1=="txt" || $ext1=="svg" || $ext1=="JPG" || $ext1=="PNG")
        {
            $folder1="image/";
            $filename1 = $folder1 .time(). $image1; 
                    //echo $filename."<br/>" ;
            $copied = copy($_FILES['midproof']['tmp_name'], $filename1);
        }
    }else{ $filename1=$idproof1;}
    if($image2!="")
    {
	
	$ext2=end(explode(".", $_FILES["msign"]["name"]));  
    if($ext2=="jpg" || $ext2=="jpeg" || $ext2=="png" || $ext2=="gif" || $ext2=="pdf" || $ext2=="txt" || $ext2=="svg" || $ext2=="JPG" || $ext2=="PNG")
        {
            $folder2="image/";
            $filename2 = $folder2 .time(). $image2; 
                    //echo $filename2."<br/>" ;
            $copied = copy($_FILES['msign']['tmp_name'], $filename2);
        }
    }else{ $filename2=$sign1;}
    if($image3!="")
    {
	
	$ext3=end(explode(".", $_FILES["mdoc"]["name"]));  
    if($ext3=="jpg" || $ext3=="jpeg" || $ext3=="png" || $ext3=="gif" || $ext3=="pdf" || $ext3=="txt" || $ext3=="svg" || $ext3=="JPG" || $ext3=="PNG")
        {
            $folder3="image/";
            $filename3 = $folder3 .time(). $image3; 
                    //echo $filename3."<br/>" ;
            $copied = copy($_FILES['mdoc']['tmp_name'], $filename3);
        }
    }else{ $filename3=$documents1;}
       $r=mysql_num_rows(mysql_query("select * from `customer`"));
       if($r>0)
       {
	$r1=mysql_fetch_array(mysql_query("select max(id) as id from `customer`"));
	$cuid="c".$r1['id']+1;
       }else{$cuid="c1";}
       $cid=htmlentities($_POST['hid']);
        mysql_query("update `customer` set `introducer`='$introducer', `name`='$name',`guardian_name`='$gurdian',`dob`='$dob' ,`village`='$village',`address`='$address',`phno`='$phno',`post`='$post'
                    ,`dist`='$dist',`pin`='$pin',`gender`='$gender',`age`='$age',`religion`='$religion' ,`nominee_name`='$nominee'
                    ,`annual_income`='$annual'
                    ,`photo`='$filename'
                    ,`documents`='$filename3',`sign`='$filename2',`idproof`='$filename1' where `id`='$cid'");
        /*echo "update `customer` set `customer_id`='$cuid', `introducer`='$introducer', `name`='$name',`guardian_name`='$gurdian',`dob`='$dob' ,`address`='$address',`phno`='$phno',`post`='$post'
                    ,`dist`='$dist',`pin`='$pin',`gender`='$gender',`age`='$age',`religion`='$religion' ,`nominee_name`='$nominee'
                    ,`annual_income`='$annual'
                    ,`photo`='$filename'
                    ,`documents`='$filename3',`sign`='$filename2',`idproof`='$filename1' where `id`='$cid'";*/
					$msg="Updated Successfully..";
    header("location:customer.php?msg=$msg");
}
?>