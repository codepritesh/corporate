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
	{ echo "</br>". $n;

		if($firstRow) { $firstRow = false; }
		else {
			if($data[0]!="" && $n>1)
			{
				
				$aname=$data[2];
				$fetch=mysql_query("select * from `agent` where `name`='$aname'");
				echo "</br>count=".$count=mysql_num_rows($fetch);
				$resfetch=mysql_fetch_array($fetch);
				$aid=$resfetch['id'];
			if($data[5]=="AGRICULTURE" && $count==1)
			{
			  $accont="AL".$data[6];
			  echo "</br>"."update `agricultureloan` set `agent_id`='$aid' where `loan_accno`='$accont'";
			  $qwe=mysql_query("update `agricultureloan` set `agent_id`='$aid' where `loan_accno`='$accont'");
			}
			else if($data[5]=="BUSINESS" && $count==1)
			{
			  $accont="BL".$data[6];
			  echo "</br>"."update `businessloan` set `agent_id`='$aid' where `loan_accno`='$accont'";
			  $qwe=mysql_query("update `businessloan` set `agent_id`='$aid' where `loan_accno`='$accont'");
			}
			else if($data[5]=="ENTERPRISESS" && $count==1)
			{
			  $accont="EL".$data[6];
			  echo "</br>"."update `enterpriseloan` set `agent_id`='$aid' where `loan_accno`='$accont'";
			  $qwe=mysql_query("update `enterpriseloan` set `agent_id`='$aid' where `loan_accno`='$accont'");
			}
			else if($data[5]=="GROUP" && $count==1)
			{
			  $accont="GL".$data[6];
			  echo "</br>"."update `grouploan` set `agent_id`='$aid' where `loan_accno`='$accont'";
			  $qwe=mysql_query("update `grouploan` set `agent_id`='$aid' where `loan_accno`='$accont'");
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