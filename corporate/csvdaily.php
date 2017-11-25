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
	$n=0;
	while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
	{

		if($firstRow) { $firstRow = false; }
		else
		{
			if($data[0]!="" && $n>1)
			{
				$cid="";
				echo "</br>".$n;
				echo "</br>".$accno=$data[0]."D".$data[3];
				echo "</br>".$data[10];
				echo "</br>".$data[4];
				
				$trecu=mysql_query("SELECT * FROM `customer` where `name` like '$data[4]' and `address`='$data[10]'");
				$tresfetchcu=mysql_fetch_array($trecu);
				$cid=$tresfetchcu['customer_id'];
				
				$tres=mysql_query("SELECT * FROM `dailydeposit` where `acc_no`='$accno' ");
				$tresfetch=mysql_fetch_array($tres);
				$count=mysql_num_rows($tres);
				if($count==1)
				{
				$tresv=mysql_query("SELECT * FROM `prefix` where `name`='$data[10]' ");
				$tresfetchv=mysql_fetch_array($tresv);
				$vid=$tresfetchv['slno'];
				
					//echo $qwe="update `dailydeposit` set `address`='$data[10]',`village`='$vid',`customer_id`='$cid' where `acc_no`='$accno' ";
					echo $qwe="update `dailydeposit` set `total_amt`='$data[6]' where `acc_no`='$accno' ";
					echo "</br>";
					mysql_query($qwe) or die(mysql_error());
				}
			   
			}
		}
		$n++;
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