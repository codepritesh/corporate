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
                //var_dump($data);
		if($firstRow) { $firstRow = false; }
		else {
			if($data[0]!="" && $n>1){
                        echo $data[0].'-----------------'.$data[1].'</br>';
			/*$originalDate = $data[1];
			$date1 = str_replace('/', '-', $originalDate);
			$date=date('Y-m-d', strtotime($date1));*/
			/*$import="insert into `badloan` set
                        `name`='',
                        `date`='',
                        `duration`='',
                        `details`='',
                        `loan_amt`='',
                        `loan_accno`='',
                        `demand_od_pr`='',
                        `demand_od_int`='',
                        `demand_curr_pr`='',
                        `demand_curr_int`='',
                        `demand_total`='',
                        `coll_od_pr`='',
                        `coll_od_int`='',
                        `coll_curr_pr`='',
                        `coll_curr_int`='',
                        `total_principal`='',
                        `total_collection`='',
                        `outstanding`='',
                        `od_od_pr`='',
                        `od_od_int`='',
                        `od_od_total`=''";
	
		    mysql_query($import) or die(mysql_error());*/
		   
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