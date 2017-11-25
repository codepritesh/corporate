<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Upload page</title>
<style type="text/css">
body {
	background: #E3F4FC;
	font: normal 14px/30px Helvetica, Arial, sans-serif;
	color: #2b2b2b;
}
a {
	color:#898989;
	font-size:14px;
	font-weight:bold;
	text-decoration:none;
}
a:hover {
	color:#CC0033;
}

h1 {
	font: bold 14px Helvetica, Arial, sans-serif;
	color: #CC0033;
}
h2 {
	font: bold 14px Helvetica, Arial, sans-serif;
	color: #898989;
}
#container {
	background: #CCC;
	margin: 100px auto;
	width: 945px;
}
#form 			{padding: 20px 150px;}
#form input     {margin-bottom: 20px;}
</style>
</head>
<body>
<div id="container">
<div id="form">
<?php
include "function.php"; //Connect to Database

//$deleterecords = "TRUNCATE TABLE member"; //empty the table of its current records
//mysql_query($deleterecords);

//Upload File
if (isset($_POST['submit'])) {
	if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
		//echo
		//"<h1>" . "File ". $_FILES['filename']['name'] ." uploaded successfully." . "</h1>";
		//echo "<h2>Displaying contents:</h2>";
		readfile($_FILES['filename']['tmp_name']);
	}

	//Import uploaded file to Database
	$handle = fopen($_FILES['filename']['tmp_name'], "r");
	$firstRow = true;
	while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
	{

		if($firstRow) { $firstRow = false; }
		else {
			if($data[0]!=""){
				
	$mem=mysql_num_rows(mysql_query("select * from `member`"));
       if($mem>0)
       {
	$mem1=mysql_fetch_array(mysql_query("select max(id) as id from `member`"));
	$mid=$mem1['id']+1;			//M(id)
       }else{
	$mid=1;
	}
	$r=mysql_num_rows(mysql_query("select * from `customer`"));
       if($r>0)
       {
	$r1=mysql_fetch_array(mysql_query("select max(id) as id from `customer`"));
	 $cid=$r1['id']+1;
       }else{
	$cid=1;
	}
	$custid="c".$cid;
	$memberid="M".$mid.$custid;
	if($data[8]==""){ $dist="KENDRAPADA";}else{ $dist=$data[8];}
			$shareno="AIRCCBALIA".$data[0];

			$originalDate = $data[1];
			$date1 = str_replace('/', '-', $originalDate);
			$date=date('Y-m-d', strtotime($date1));
			$import="insert into `member` set `name`='$data[3]'
			,`guardian_name`='$data[4]'
			,`address`='$data[5]'
			,`post`='$data[6]'
                    ,`dist`='$dist'
		    ,`gender`='female'
		    ,`religion`='hindu'
		    ,`cast`='$data[11]'
		    ,`nominee_name`='$data[4]'
                    ,`form_fees`='20'
                    ,`prefshare_fees`='$data[2]'
                    ,`noofshares`='1'
		    ,`shareno`='$shareno'
                    ,`customer_id`='$custid'
		    ,`join_date`='$date'
		    ,`member_id`='$memberid'";
	
			
			
			
			$import1="insert into `customer` set `customer_id`='$custid'
			,`mem_cus_id`='$memberid'
			,`introducer`='$mid', `name`='$data[3]'
			,`guardian_name`='$data[4]'
			,`address`='$data[5]'
			,`post`='$data[6]'
                    ,`dist`='$dist',`gender`='female'
		    ,`religion`='hindu'
		    ,`cast`='$data[11]'
		    ,`nominee_name`='$data[4]'
		    ,`join_date`='$date'";
		    
		    //echo "</br>".$import;
		    mysql_query($import) or die(mysql_error());
		    mysql_query($import1) or die(mysql_error());
			}
		}
	}
	fclose($handle);

	print "Import done";

	//view upload form
}else {

	print "Upload new csv by browsing to file and clicking on Upload<br />\n";

	print "<form enctype='multipart/form-data' action='' method='post'>";

	print "File name to import:<br />\n";

	print "<input size='50' type='file' name='filename'><br />\n";

	print "<input type='submit' name='submit' value='Upload'></form>";

}

?>

</div>
</div>
</body>
</html>