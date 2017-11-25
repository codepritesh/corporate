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
		else {
			if($data[0]!="" && $n>1)
			{	
			   $name=$data[1];
			   $loan_amt=$data[6];
			   $amounttopay=$data[19];
			  
			   $plan=$data[3];
			   $odprincipal=0;
			   $odintrest=0;
			   
			   $date=date("Y-m-d");
			   if($data[2]!=""){
				$originalDate1=$data[2];
			$date2 = str_replace('/', '-', $originalDate1);
			$cdate=date('Y-m-d', strtotime($date2));
				}else{$cdate="";}
				$loangivendate=$cdate;
				$aprisaldate=$cdate;
			if($data[4]=="AGRICULTURE")
			{
				$accont="AL".$data[5];
				$odprincipal=$data[20];
				$odintrest=$data[21];
				if($data[20]=="CLOSE")
				{
					$qwe=mysql_query("INSERT INTO `agricultureloan` set  `loan_accno`='$accont', `customer_id`='$custid'
					   ,`plan`='$plan',`intrestrate`='$intrate', `name`='$name',`folio`='7'
					   ,`is_approved`='1',`loangiven`='$loan_amt',`amount_topay`='0'
					   ,`loan_given_date`='$loangivendate',`aprisaldate`='$aprisaldate',`loancomplited`='1'
					   ,`loan_amt`='$loan_amt'")or die(mysql_error()) ;
					
				}else{
			  $qwe=mysql_query("INSERT INTO `agricultureloan` set  `loan_accno`='$accont', `customer_id`='$custid'
					   ,`plan`='$plan',`intrestrate`='$intrate', `name`='$name',`folio`='7'
					   ,`is_approved`='1',`loangiven`='$loan_amt',`amount_topay`='$amounttopay'
					   ,`loan_given_date`='$loangivendate',`aprisaldate`='$aprisaldate'
					    ,`odprincipal`='$odprincipal',`odintrest`='$odintrest'
					   ,`loan_amt`='$loan_amt'")or die(mysql_error()) ;
			  
			  mysql_query("insert into `transaction` set `transactionid`='$time',
				`customerid`='$custid',`accountno`='$accont',
                 		`amount`='-$amounttopay',`date`='$date',`details`='Agriculture Loan',`mode_of_payment`='cash',
				`folio_no`='7',`type`='loan'")or die(mysql_error());
				}
			}
			if($data[4]=="BUSINESS")
			{
				
				$accont="BL".$data[5];
				$odprincipal=$data[20];
				$odintrest=$data[21];
				if($data[20]=="CLOSE")
				{
					$qwe=mysql_query("INSERT INTO `businessloan` set  `loan_accno`='$accont', `customer_id`='$custid'
					   ,`plan`='$plan',`intrestrate`='$intrate', `name`='$name',`folio`='8'
					   ,`is_approved`='1',`loangiven`='$loan_amt',`amount_topay`='0'
					   ,`loan_given_date`='$loangivendate',`aprisaldate`='$aprisaldate',`loancomplited`='1'
					   ,`loan_amt`='$loan_amt'")or die(mysql_error()) ;
					
				}else{
			  $qwe=mysql_query("INSERT INTO `businessloan` set  `loan_accno`='$accont', `customer_id`='$custid'
					   ,`plan`='$plan',`intrestrate`='$intrate', `name`='$name',`folio`='8'
					   ,`is_approved`='1',`loangiven`='$loan_amt',`amount_topay`='$amounttopay'
					   ,`loan_given_date`='$loangivendate',`aprisaldate`='$aprisaldate'
					   ,`odprincipal`='$odprincipal',`odintrest`='$odintrest'
					   ,`loan_amt`='$loan_amt'")or die(mysql_error()) ;
			  
			  mysql_query("insert into `transaction` set `transactionid`='$time',
				`customerid`='$custid',`accountno`='$accont',
                 		`amount`='-$amounttopay',`date`='$date',`details`='Business Loan',`mode_of_payment`='cash',
				`folio_no`='8',`type`='loan'")or die(mysql_error());
				}
			}
			if($data[4]=="ENTERPRISESS")
			{
				$accont="EL".$data[5];
				$odprincipal=$data[20];
				$odintrest=$data[21];
				if($data[20]=="CLOSE")
				{
					$qwe=mysql_query("INSERT INTO `enterpriseloan` set  `loan_accno`='$accont', `customer_id`='$custid'
					   ,`plan`='$plan',`intrestrate`='$intrate', `name`='$name',`folio`='9'
					   ,`is_approved`='1',`loangiven`='$loan_amt',`amount_topay`='0'
					   ,`loan_given_date`='$loangivendate',`aprisaldate`='$aprisaldate',`loancomplited`='1'
					   ,`loan_amt`='$loan_amt'")or die(mysql_error()) ;
					
				}else{
			  $qwe=mysql_query("INSERT INTO `enterpriseloan` set  `loan_accno`='$accont', `customer_id`='$custid'
					   ,`plan`='$plan',`intrestrate`='$intrate', `name`='$name',`folio`='9'
					   ,`is_approved`='1',`loangiven`='$loan_amt',`amount_topay`='$amounttopay'
					   ,`loan_given_date`='$loangivendate',`aprisaldate`='$aprisaldate'
					   ,`odprincipal`='$odprincipal',`odintrest`='$odintrest'
					   ,`loan_amt`='$loan_amt'")or die(mysql_error()) ;
			  
			  mysql_query("insert into `transaction` set `transactionid`='$time',
				`customerid`='$custid',`accountno`='$accont',
                 		`amount`='-$amounttopay',`date`='$date',`details`='Enterprise Loan',`mode_of_payment`='cash',
				`folio_no`='9',`type`='loan'")or die(mysql_error());
				}
			}
			if($data[4]=="GROUP")
			{
				$accont="GL".$data[5];
				$odprincipal=$data[20];
				$odintrest=$data[21];
				if($data[20]=="CLOSE")
				{
					$qwe=mysql_query("INSERT INTO `grouploan` set  `loan_accno`='$accont', `customer_id`='$custid'
					   ,`plan`='$plan',`intrestrate`='$intrate', `name`='$name',`folio`='11'
					   ,`is_approved`='1',`loangiven`='$loan_amt',`amount_topay`='0'
					   ,`loan_given_date`='$loangivendate',`aprisaldate`='$aprisaldate',`loancomplited`='1'
					   ,`loan_amt`='$loan_amt'")or die(mysql_error()) ;
					
				}else{
			  $qwe=mysql_query("INSERT INTO `grouploan` set  `loan_accno`='$accont', `customer_id`='$custid'
					   ,`plan`='$plan',`intrestrate`='$intrate', `name`='$name',`folio`='11'
					   ,`is_approved`='1',`loangiven`='$loan_amt',`amount_topay`='$amounttopay'
					   ,`loan_given_date`='$loangivendate',`aprisaldate`='$aprisaldate'
					   ,`odprincipal`='$odprincipal',`odintrest`='$odintrest'
					   ,`loan_amt`='$loan_amt'")or die(mysql_error()) ;
			  mysql_query("insert into `transaction` set `transactionid`='$time',
				`customerid`='$custid',`accountno`='$accont',
                 		`amount`='-$amounttopay',`date`='$date',`details`='Group Loan',`mode_of_payment`='cash',
				`folio_no`='11',`type`='loan'")or die(mysql_error());
				}
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