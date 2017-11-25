<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{ header("location:index.php");}
else
{
    $id=$_GET['id'];
    $fetch=mysql_query("select * from `businessloan` where `id`='$id'");
    $res=mysql_fetch_array($fetch);
    
    $table=$res['loan_against_acc'];
    if($table=='fixeddeposite')
    {
    $fetchamount=mysql_query("select * from `$table` where `customer_id`='$res[customer_id]'");
    $resamount=mysql_fetch_array($fetchamount);
    $resamount['deposited_amt'];
       
    $date1 = $resamount['opening_date'];
    $date2 = date("Y-m-d");

    $ts1 = strtotime($date1);
    $ts2 = strtotime($date2);
    
    $year1 = date('Y', $ts1);
    $year2 = date('Y', $ts2);
    
    $month1 = date('m', $ts1);
    $month2 = date('m', $ts2);
    //calculation 
    $diff = (($year2 - $year1) * 12) + ($month2 - $month1);
    $t=$diff/12;
    $r=$resamount['intrest_rate'];
    $p=$resamount['deposited_amt'];
   // echo "</br>";
    $pw=(1+($r/100));
    $power=pow($pw,$t);
    $mat=$mat_amt=$p*$power;
    $maturity=number_format($mat, 2, '.', '');
    $eligibility="Yes";
    }
    
    if($table=='compulsarydeposite')
    {
        $fetchamount1=mysql_query("select * from `$table` where `customer_id`='$res[customer_id]'");
        $resamount1=mysql_fetch_array($fetchamount1);
        $resamount1['deposited_amt'];
           
        $date1 = $resamount1['payment_date'];
        $date2 = date("Y-m-d");
    
            $ts1 = strtotime($date1);
            $ts2 = strtotime($date2);
            
            $year1 = date('Y', $ts1);
            $year2 = date('Y', $ts2);
            
            $month1 = date('m', $ts1);
            $month2 = date('m', $ts2);
            //calculation 
               $diff = (($year2 - $year1) * 12) + ($month2 - $month1);
                $r=$resamount1['intrest_rate']/12;
                $p=$resamount1['deposited_amt'];
                $amt1=0;
                $typ=1;
                $n=$diff;
                  for($x=$n;$x>0;$x--)
                        {
                            $n=$x;
                $dd = 1+(($r/$typ)/100);
                $ci = $p*pow($dd,$typ*$n);
                $amt = round($ci)*100/100;
                $ci = round($ci-$p)*100/100;
                $amt1=$amt1+$amt;
                        }
                
                
               $end = date('Y-m-d', strtotime('+6 month', strtotime($date1)));
              $fetchtransaction=mysql_query("select * `transaction` where `customerid`='$res[customer_id]' and `date` BETWEEN '$date1' AND '$end' ");
              $count=mysql_num_rows($fetchtransaction);
              if($count>=6)
              { $eligibility="Yes";}else{  $eligibility="No";}
              //$maturity=$amt1;
	      $maturity=$resamount1['deposited_amt'];
    }
	 $sqlagent=mysql_query("select * from `agent`")or die(mysql_error());
	 //$sqlagent=mysql_query("select * from `agent` where `prodetails`='Business Loan'")or die(mysql_error());
	 while($resagent=mysql_fetch_array($sqlagent))
		{
		 $getagent[] = array(
		'value'  =>$resagent['name'].'('.$resagent['codeno'].')',
		'idval' => $resagent['id']
		);
		}

?>
<!--autocomplete start-->
<link rel="stylesheet" href="css/jquery-ui.css">
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<style>
    .form-control{width: 300;}
</style>
<script type="text/javascript">

function IsNumeric(e)
 {
            var keyCode = e.which ? e.which : e.keyCode
            var ret = ((keyCode >= 48 && keyCode <= 57) || (keyCode==46) || (keyCode==8) || (keyCode==190));
            if(ret)
            return true;
            else
            alert('Only numeric value accepted');
            return false;
           
        }
</script>
<script>
  function numbersonly(e){
var unicode=e.charCode? e.charCode : e.keyCode
if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
if (unicode<48||unicode>57) //if not a number
return false //disable key press
}
}
function validate() {

   var s_mode=document.getElementById("paymentmode").value;
	var s_d1=document.getElementById("d1").value;
	var s_d2=document.getElementById("d2").value;
	var s_d3=document.getElementById("d3").value;
	var agent_nm=document.getElementById("agentnm").value;
	var disdatee=document.getElementById("disdate").value;
	
	if(s_mode=='select')
	{
	alert("choose mode of payment");
	return false;
	}
        if (s_mode!='') {
            if (s_mode!="cash") {
		if (s_d1=='') {
		    alert("Please insert the Cheque/DD No.");
		    document.getElementById("d1").focus();
		    return false;
		}
		else if(s_d2==''){
		    alert("Please insert the Bank Name.");
		     document.getElementById("d2").focus();
		    return false;
		}
		else if (s_d3=='') {
		    alert("Please insert date.");
		    document.getElementById("d3").focus();
		    return false;
		}
	}
	else{
	    document.getElementById("d1").value='';
	    document.getElementById("d2").value='';
	    document.getElementById("d3").value='';
	}
        }
	if(agent_nm=='')
	{
	alert("Enter agent field");
	return false;
	}
	if(disdatee=='')
	{
	alert("Enter Loan Dispersal Date");
	return false;
	}
	
	var con=confirm("Do you want to proceed?");
        if(con)
		{
		document.arrange.submit();
		}  
       else{
	   return false;
	   }			
	
}
</script>
<script>
     $(function(){
	$('#paymentmode').change(function(){
        var s_mode=$(this).val();
        if (s_mode!='') {
              if(s_mode!='cash'){
            document.getElementById('d1').style.display='block';
            document.getElementById('d2').style.display='block';
            document.getElementById('d3').style.display='block';
        }else{
            document.getElementById('d1').style.display='none';
            document.getElementById('d2').style.display='none';
            document.getElementById('d3').style.display='none';
        }
        }
        });
    });
	$(function(){
        var availabledrugs=<?php echo  json_encode($getagent); ?>;
        $('#agentnm').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#agentnm').val(valshow);
		 $('#agent_id').val(ui.item.idval);
        return false;
		}
        });
}); 
  </script>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <meta name="viewport">
    <meta name="description" >
    <meta name="author">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

          <!-- date picker starts -->
	<link href="fullcalendar/dist/fullcalendar.css" rel='stylesheet'>
	<link href="fullcalendar/dist/fullcalendar.print.css" rel='stylesheet' media='print'>
	
	<link href="css/jsDatePick_ltr.min.css" rel='stylesheet'>
	<script src="js/js/jsDatePick.min.1.3.js"></script>
	<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"d3",
			dateFormat:"%Y-%m-%d"
			
		});
		new JsDatePick({
			useMode:2,
			target:"disdate",
			dateFormat:"%Y-%m-%d"
			
		});
		/*new JsDatePick({
			useMode:2,
			target:"inputField2",
			dateFormat:"%Y-%m-%d"
			
		});*/
	};
   </script>
    <!-- date picker ends -->
    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>
	<!-----pop up------>
<script type="text/javascript" src="js/jquery.reveal.js"></script>
<link rel="stylesheet" href="css/reveal.css">
<!-----pop up ned------>
</head>
<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
                <span>admin</span></a>
<div style="float: right; color: red;">
    <?php echo date("Y-m-d");?>
</div>
            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="login.html">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"> Change Theme / Skin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                    <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                    <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                    <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                    <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                    <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                    <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
                </ul>
            </div>
            <!-- theme selector ends
                    <form class="navbar-search pull-left">
                        <input placeholder="Search" class="search-query form-control col-md-10" name="query"
                               type="text">
                    </form>-->
                </li>
            </ul>

        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <?php include_once("menu.php");?>
        <!--/span-->
        <!-- left menu ends -->

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">UI Features</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i>Business Loan Form</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
		
		<!----pop up------> 
            <div id="myModal" class="reveal-modal" style="width:500px;">
		<h1 style="font-size:20px;">Account Details</h1>
		<table style="width:100%; height:250px; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#333;">
                    <?php
                            $compulsoryf=mysql_query("select * from `compulsarydeposite` where `customer_id`='$res[customer_id]'");
                            $compulseryr=mysql_fetch_array($compulsoryf);
                            $datecomp=$compulseryr['startdate'];
                            $acount=mysql_num_rows($compulsoryf);
                            
                             $endcomp = date('Y-m-d', strtotime('+6 month', strtotime($datecomp)));
                            $fetchtransaction=mysql_query("select * `transaction` where `customerid`='$res[customer_id]' and `date` BETWEEN '$datecomp' AND '$endcomp' ");
                             $count=mysql_num_rows($fetchtransaction);
                            if($count>=6)
                            {  $eligibilityc="Yes";}else{  $eligibilityc="No";}
                            if($acount>0)
                            {
                    ?>
                    <tr>
                        <th colspan="6" align="center">Compulsory account</th>
                    </tr>
                    <tr>
                        <th>Acc_no</th>
                        <th>Account Holder Name</th>
			<th>Intrest Rate</th>
                        <th>Daily Amount</th>
                        <th>Total Deposited Amount</th>
			<th>Account Opening Date</th>
                    </tr>
                    <?php
                        $qwe=mysql_query("select * from `customer` where `customer_id`='$res[customer_id]'");
                        $rscust=mysql_fetch_array($qwe);
                    ?>
                    <tr>
                        <td><?php echo $compulseryr['acc_no'];?></td>
                        <td><?php echo $compulseryr['name'];?></td>
			<td><?php echo $compulseryr['intrest_rate'];?></td>
                        <td><?php echo $compulseryr['deposited_amt'];?></td>
                        <td><?php echo $compulseryr['total_amt'];?></td>
			<td><?php echo  date("d-m-Y",strtotime($compulseryr['startdate']));?></td>
                    </tr>
                    <?php }else{?>
                    <tr><td colspan="6">The customer have no compulsory Acount</td></tr><?php }?>
                     <tr>
                        <th colspan="6" align="center">Loan Against <?php echo $table; ?> account</th>
                    </tr>
                    <tr>
                        <th>Acc_no</th>
                        <th>Account Holder Name</th>
			<th>Intrest Rate</th>
                        <?php if($table=='compulsarydeposite'){?><th>Daily Amount</th><th>Total Deposited Amount</th><?php }?>
                        <?php if($table=='fixeddeposite'){?><th>Diposited Amount</th><th>Maturity Amount till date </th><?php }?>
			<th>Account Opening Date</th>
                    </tr>
                    <tr>
                        <td><?php echo  $resamount['acc_no'];?></td>
                        <td><?php echo  $resamount['name'];?></td>
			<td><?php echo $resamount['intrest_rate'];?></td>  
                        <?php if($table=='compulsarydeposite'){?><td><?php echo $resamount['deposited_amt'];?></td><td><?php echo $resamount['total_amt'];?></td><?php }?>
                        <?php if($table=='fixeddeposite'){?><td><?php echo $resamount['intrest_rate'];?></td> <td><?php echo $maturity;?></td><?php }?>
			<td><?php echo  date("d-m-Y",strtotime($resamount['startdate']));?></td>
                    </tr>
                    <tr>
                        <th>Loan Taken</th>
                    </tr>
                    <tr>
                        <th>Acc_no</th>
                        <th>Loan taken</th>
                        <th>Rest Amount</th>
                        <th>Status</th>
                    </tr>
                     <?php
                            $loan1=mysql_query("select * from `agricultureloan` where `customer_id`='$res[customer_id]' and `is_approved`='1' and `loan_accno`!=''");
                            $loan2=mysql_query("select * from `demand_loan` where `customer_id`='$res[customer_id]' and `is_approved`='1' and `loan_accno`!=''");
                            $loan3=mysql_query("select * from `enterpriseloan` where `customer_id`='$res[customer_id]' and `is_approved`='1' and `loan_accno`!=''");
                            $loan4=mysql_query("select * from `goldloan` where `customer_id`='$res[customer_id]' and `is_approved`='1' and `loan_accno`!=''");
                            $loan5=mysql_query("select * from `grouploan` where `customer_id`='$res[customer_id]' and `is_approved`='1' and `loan_accno`!=''");
                            $loan6=mysql_query("select * from `loan` where `customer_id`='$res[customer_id]' and `is_approved`='1' and `loan_accno`!=''");
			    $loan7=mysql_query("select * from `businessloan` where `customer_id`='$res[customer_id]' and `is_approved`='1' and `loan_accno`!=''");
                            
                            while($loanres=mysql_fetch_array($loan1))
                            {
                        ?>
                    <tr><td><?php echo $loanres['loan_accno'];?></td><td><?php echo $loanres['loan_accno'];?></td><td><?php echo $loanres['amount_topay'];?></td><td><?php if($loanres['loancomplited']==1) {echo "complited";}else{ echo "continuing";}?></td></tr>
                    <?php }
                    
                    while($loanres2=mysql_fetch_array($loan2))
                            {
                        ?>
                    <tr><td><?php echo $loanres2['loan_accno'];?></td><td><?php echo $loanres2['loan_accno'];?></td><td><?php echo $loanres2['amount_topay'];?></td><td><?php if($loanres2['loancomplited']==1) {echo "complited";}else{ echo "continuing";}?></td></tr>
                    <?php }
                    while($loanres3=mysql_fetch_array($loan3))
                            {
                        ?>
                    <tr><td><?php echo $loanres3['loan_accno'];?></td><td><?php echo $loanres3['loan_accno'];?></td><td><?php echo $loanres3['amount_topay'];?></td><td><?php if($loanres3['loancomplited']==1) {echo "complited";}else{ echo "continuing";}?></td></tr>
                    <?php }
                    while($loanres4=mysql_fetch_array($loan4))
                            {
                        ?>
                    <tr><td><?php echo $loanres4['loan_accno'];?></td><td><?php echo $loanres4['loan_accno'];?></td><td><?php echo $loanres4['amount_topay'];?></td><td><?php if($loanres4['loancomplited']==1) {echo "complited";}else{ echo "continuing";}?></td></tr>
                    <?php }
                    while($loanres5=mysql_fetch_array($loan5))
                            {
                        ?>
                    <tr><td><?php echo $loanres5['loan_accno'];?></td><td><?php echo $loanres5['loan_accno'];?></td><td><?php echo $loanres5['amount_topay'];?></td><td><?php if($loanres5['loancomplited']==1) {echo "complited";}else{ echo "continuing";}?></td></tr>
                    <?php }
                    while($loanres6=mysql_fetch_array($loan6))
                            {
                        ?>
                    <tr><td><?php echo $loanres6['loan_accno'];?></td><td><?php echo $loanres6['loan_accno'];?></td><td><?php echo $loanres6['amount_topay'];?></td><td><?php if($loanres6['loancomplited']==1) {echo "complited";}else{ echo "continuing";}?></td></tr>
                    <?php }
		    while($loanres7=mysql_fetch_array($loan7))
                            {
                        ?>
                    <tr><td><?php echo $loanres7['loan_accno'];?></td><td><?php echo $loanres7['loan_accno'];?></td><td><?php echo $loanres7['amount_topay'];?></td><td><?php if($loanres7['loancomplited']==1) {echo "complited";}else{ echo "continuing";}?></td></tr>
                    <?php }?>
                    
		</table>
		<a class="close-reveal-modal">&#215;</a>
            </div>
	<!----pop up end------>
                <form name="arrange" action="businessloan_details_action.php" method="post"  enctype="multipart/form-data">
                     <table style="float: left;width: 100%;">
                        <tr>
                            <td colspan="4" style="color: red;font-size: 20px;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; }  ?></td>
                        </tr>
			<tr>
                            <td>Customer_id</td><td><input type="text" name="customer" value="<?php echo $res['customer_id'];?>" class="form-control" id="customer" readonly required >
			    <input type="hidden" name="loanid" id="loanid" value="<?php echo $res['id'];?>"></td>
			    <input type="hidden" name="intid" id="intid" value="<?php echo $res['introducer'];?>">
			<td>Applicant Name</td><td><input type="text" name="name" id="name" value="<?php echo $res['name'];?>" class="form-control" required readonly></td>
			</tr>
                        <tr>
                            <td>DOB</td><td><input type="date" name="dob" id="dob" value="<?php echo $res['dob'];?>" class="form-control" required readonly></td>
			    <td>Gender</td><td><input type="text" name="gender"  value="<?php echo $res['gender'];?>" id="gender" class="form-control" required readonly>
			</tr>
                        <tr>
                            <td>Phone No.</td><td><input type="text" name="phone" value="<?php echo $res['phone'];?>"  class="form-control" id="phone" required readonly ></td>
			    <td>Address</td><td><textarea name="address"  class="form-control" id="address" required readonly><?php echo $res['address'];?></textarea></td>
		        </tr>
                        <tr>
                            <td>Post</td><td><input type="text" name="post" value="<?php echo $res['post'];?>" class="form-control" id="post" required readonly></td>
			    <td>Pin</td><td><input type="text" name="pin" value="<?php echo $res['pin'];?>" class="form-control" id="pin" required readonly "></td>
                           
			</tr>
                        <tr>
			     <td>Dist</td><td><input type="text" name="dist" value="<?php echo $res['dist'];?>" class="form-control" id="dist" readonly required></td>
			     <td>Nominee Name</td><td><input type="text" name="nominee" value="<?php echo $res['nominee_name'];?>" id="nominee" readonly class="form-control" ></td>
			</tr>
			<tr>
			    <td>Nominee Address</td><td><textarea name="nomaddress" class="form-control" id="nomaddress" readonly="true"><?php echo $res['nominee_address'];?></textarea></td>
			    <td>Nominee Relation</td><td><input type="text" name="nomrelation" value="<?php echo $res['nominee_relation'];?>" id="nomrelation" readonly class="form-control"></td>
			</tr>
                        <tr>
                           <td>Requested Loan Amount</td><td><input type="text" name="loanamt" id="loanamt" value="<?php echo $res['loan_amt'];?>" readonly required class="form-control"></td>
                           <td>Loan Against Which A/c</td><td><input type="text" name="loan_against_acc" value="<?php echo $res['loan_against_acc'];?>" id="loan_against_acc" readonly required class="form-control"></td>
			    
                        </tr>
                        <tr>
                            <?php
                            $compulsoryf=mysql_query("select * from `compulsarydeposite` where `customer_id`='$res[customer_id]'");
                            $compulseryr=mysql_fetch_array($compulsoryf);
                            $datecomp=$compulseryr['opening_date'];
                            
                            $endcomp = date('Y-m-d', strtotime('+6 month', strtotime($datecomp)));
                            $fetchtransaction=mysql_query("select * `transaction` where `customerid`='$res[customer_id]' and `date` BETWEEN '$datecomp' AND '$endcomp' ");
                            $count=mysql_num_rows($fetchtransaction);
                            if($count>=6)
                            {  $eligibilityc="Yes";}else{  $eligibilityc="No";}
                            ?>
                            <td>Compulsory Account No</td><td><input type="text" name="loan_against_acc" value="<?php echo $compulseryr['acc_no'];?>" id="loan_against_acc" readonly required class="form-control"></td>
			    <td><?php echo $res['loan_against_acc'];?>Account No</td><td><input type="text" name="loanamt" id="loanamt" value="<?php echo $res['loan_against_accno'];?>" readonly required class="form-control"></td>
			</tr>
                        <tr>
                            <td>compulsory Balance</td><td><input type="text" name="loanamt" id="loanamt" value="<?php echo $compulseryr['total_amt'];?>" readonly required class="form-control"></td>
			    <td><?php echo $res['loan_against_acc'];?> Balance</td><td><input type="text" name="loanamt" id="loanamt" value="<?php echo $maturity;?>" readonly required class="form-control"></td>
			</tr>
                        <tr>
                            <td>Eligibility</td><td><input type="text" name="eligibility1" id="eligibility1" value="<?php echo $eligibilityc;?>" readonly required class="form-control"></td>
			    <td>Eligibility</td><td><input type="text" name="eligibility2" id="eligibility1" value="<?php echo $eligibility;?>" readonly required class="form-control"></td>
			</tr>
                        <tr>
                            <td>Loan Sanction Amount</td><td><input type="text" name="sanction" value="0" id="sanction"required class="form-control"></td>
			    <td>Intrest Rate</td><td><input type="text" name="intrate" value="<?php echo $res['intrestrate'];?>" readonly required class="form-control"> </td>
			</tr>
                        <tr>
                            <!--<td>Mode Of Payment</td><td><select id="paymentmode" name="payment_mode"  class="form-control">
                                                                <option value="select">--Select Mode of Paymet--</option>
                                                                <option value="cash">Cash</option>
                                                                <option value="dd">DD</option>
                                                                <option value="cheque">Cheque</option>
                                                        </select>
                                                    </td>-->
							<td>Agent</td>
							<td>
							<input type="text" name="agent" id="agentnm" class="form-control"/>
							<input type="hidden" name="agent_id" id="agent_id"/>
							</td>						
                        </tr>
                        <tr>
                           <td>&nbsp;</td>
			   <td><input type="text" name="chqddno" id="d1" class="form-control"  placeholder="Cheque/DD Number" onKeyPress="return numbersonly(event)" style="display: none;"></td>
                           <td><input type="text" name="bank" id="d2" class="form-control"  placeholder="Name of the Bank"  style="display: none;"></td>
                           <td><input type="text" name="paydate" id="d3" class="form-control"  placeholder="Payment Date" style="display: none;"></td>
                        </tr>
                        <tr>
                            <td>Loan Disbursement Date</td>
                            <td><input type="text" name="disdate" id="disdate" class="form-control"></td>
                           <td colspan="2">
                            <a href="#" class="big-link" data-reveal-id="myModal" data-animation="fade">	
                            <input type="button" name="loandetail" id="loandetail" value="show Detail">
                            </a></td>
                        </tr>
                        <tr >
                            <td>&nbsp;</td>
			    <td align="center"><input type="submit" id="button" name="reject" value="Reject" /></td>
                            <td align="center"><input type="submit" id="button" name="allow" value="Allow" onclick="return validate();"/></td>
                            <td>&nbsp;</td>
                        </tr>
                     </table>
		</form>
	    </div>
            <div class="box-content">
                <table class="table">
                    <tr>
                        <th>Customer Id</th>
                        <th>Account Holder Name</th>
			<th>Loan Given</th>
                        <th>Loan Date</th>
                    </tr>
                    <?php
                    $fetchapp=mysql_query("select * from `businessloan` where `is_approved`='1'");
                    while($resapp=mysql_fetch_array($fetchapp) or die(mysql_error()))
                    {
                    ?>
                    <tr>
                        <td><?php echo  $resapp['customer_id'];?></td>
                        <td><?php echo $resapp['name'];?></td>
			<td><?php echo $resapp['loangiven'];?></td>
                        <td><?php echo date("d-m-Y",strtotime($resapp['loan_given_date']));?></td>
                    </tr>
                    <?php }?>
                </table>
	    </div>
	</div>
    </div>
</div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">?</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php }?>