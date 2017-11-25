<?php
include_once("function.php");
if(isset($_POST['submit']))
{
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
   // $age=htmlentities($_POST['age']);
    $religion=htmlentities($_POST['religion']);
    $cast=htmlentities($_POST['cast']);
    $nominee=htmlentities($_POST['nominee']);
    $annual=htmlentities($_POST['annual']);
     $intid=htmlentities($_POST['intid']);
   $date1=$dob;
 $date2=date("Y-m-d");
        $ts1 = strtotime($date1);
	$ts2 = strtotime($date2);
	
	$ts1 = strtotime($date1);
	$ts2 = strtotime($date2);
	
	$year1 = date('Y', $ts1);
	$year2 = date('Y', $ts2);
	
	$month1 = date('m', $ts1);
	$month2 = date('m', $ts2);
	//calculation
	$diff = (($year2 - $year1) * 12) + ($month2 - $month1);
        $age=round($diff/12);
   
    $image =$_FILES['photo']['name'];
    $image1 =$_FILES['documents']['name'];
    $image2 =$_FILES['idproof']['name'];
    $image3 =$_FILES['sign']['name'];
    //if($image!="" && $_FILES['photo']['size'] < 2097152 )
    if($name!="")
    { //echo "iff";
    $ext=end(explode(".", $_FILES["photo"]["name"]));  
    if($ext=="jpg" || $ext=="jpeg" || $ext=="png" || $ext=="gif" || $ext=="JPG" || $ext=="PNG")
        {
            $folder="image/";
            $filename = $folder .time(). $image; 
                    //echo $filename."<br/>" ;
            $copied = copy($_FILES['photo']['tmp_name'], $filename);
        }
    $ext1=end(explode(".", $_FILES["documents"]["name"]));  
    if($ext1=="jpg" || $ext1=="jpeg" || $ext1=="png" || $ext1=="gif" || $ext1=="pdf" || $ext1=="txt" || $ext1=="svg" || $ext1=="JPG" || $ext1=="PNG")
        {
            $folder1="image/";
            $filename1 = $folder1 .time(). $image1; 
                    //echo $filename."<br/>" ;
            $copied = copy($_FILES['documents']['tmp_name'], $filename1);
        }
	
	$ext2=end(explode(".", $_FILES["idproof"]["name"]));  
    if($ext2=="jpg" || $ext2=="jpeg" || $ext2=="png" || $ext2=="gif" || $ext2=="pdf" || $ext2=="txt" || $ext2=="svg" || $ext2=="JPG" || $ext2=="PNG")
        {
            $folder2="image/";
            $filename2 = $folder2 .time(). $image2; 
                    //echo $filename."<br/>" ;
            $copied = copy($_FILES['idproof']['tmp_name'], $filename2);
        }
	
	$ext3=end(explode(".", $_FILES["sign"]["name"]));  
    if($ext3=="jpg" || $ext3=="jpeg" || $ext3=="png" || $ext3=="gif" || $ext3=="pdf" || $ext3=="txt" || $ext3=="svg" || $ext3=="JPG" || $ext3=="PNG")
        {
            $folder3="image/";
            $filename3 = $folder3 .time(). $image3; 
                    //echo $filename."<br/>" ;
            $copied = copy($_FILES['sign']['tmp_name'], $filename3);
        }
       $r=mysql_num_rows(mysql_query("select * from `customer`"));
       if($r>0)
       {
	$r1=mysql_fetch_array(mysql_query("select max(id) as id from `customer`"));
	 $temcuid=$r1['id']+1;
	 $cuid="c".$temcuid;
	 $cuid1="M".$intid."c".$temcuid;
       }else{$cuid="c1";}
       $joindate = date("Y-m-d");
        mysql_query("insert into `customer` set `customer_id`='$cuid',`mem_cus_id`='$cuid1', `introducer`='$intid',
		    `name`='$name',`guardian_name`='$gurdian',`dob`='$dob' ,`village`='$village',
		    `address`='$address',`phno`='$phno',`post`='$post'
                    ,`dist`='$dist',`pin`='$pin',`gender`='$gender',`age`='$age'
		    ,`religion`='$religion'
		    ,`cast`='$cast'
		    ,`nominee_name`='$nominee'
                    ,`annual_income`='$annual'
                    ,`photo`='$filename'
                    ,`documents`='$filename1',`sign`='$filename3',`idproof`='$filename2',`join_date`=$joindate");
      /* echo "insert into `customer` set `customer_id`='$cuid', `introducer`='$intid', `name`='$name',`guardian_name`='$gurdian',`dob`='$dob' ,`address`='$address',`phno`='$phno',`post`='$post'
                    ,`dist`='$dist',`pin`='$pin',`gender`='$gender',`age`='$age',`religion`='$religion' ,`nominee_name`='$nominee'
                    ,`annual_income`='$annual'
                    ,`photo`='$filename'
                    ,`documents`='$filename1',`sign`='$filename3',`idproof`='$filename2'";*/
       $msg="Successfully Inserted";
    }else{  $msg="upload image less than 2 mb";}

}else{ $msg="Upload image less than 2 mb";}
 header("location:customer.php?msg=$msg");
?>