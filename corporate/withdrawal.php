<?php include_once("function.php");
ini_set("display_errors",0);
?>
<?php
$getrecurring=mysql_query("select * from `recurringdiposite` where `status`='0'")or die(mysql_error());
   while($resrecurring=mysql_fetch_array($getrecurring))
    {
	$timeperiod=$resrecurring['no_of_installment'];
	$no_of_installment = $resrecurring['no_of_installment'];
	$paid_installment = $resrecurring['paid_installment'];
	$paid=$resrecurring['paid_installment']* $resrecurring['monthly_amount'];
	$monthly=$resrecurring['monthly_amount'];
	$intrest_rate=$resrecurring['intrest_rate'];
	$rest=$no_of_installment-$paid_installment;
$date1 = $resrecurring['end_date'];
$date2 = date("Y-m-d");


if($ts2>$ts1)
{
    if($no_of_installment==$paid_installment)
    {
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
	if($diff>0)
	{
	    $amt1=0;
            $typ=1;
            $n=$diff;
            $p=$resrecurring['maturity_amount'];;
            $r=6/12;
            for($x=$n;$x>0;$x--)
            {
                $n=$x;
            $dd = 1+(($r/$typ)/100);
            $ci = $p*pow($dd,$typ*$n);
            $amt = round($ci)*100/100;
            $ci = round($ci-$p)*100/100;
            //echo "<br>Compount interest : ".$ci;
            //echo "<br>Amount : ".$amt;
            //echo "<br>total:".$amt1=$amt1+$amt;
            $amt1=$amt1+$amt;
	    $maturity=$amt1; 
	    }
	    
	}
	else{ $maturity=$resrecurring['maturity_amount'];}
	
    }
    else if($rest>6)
    {
	
	 $amt1=0;
            $typ=1;
            $n=$timeperiod;
            $p=$paid;
            $r=6/12;
            for($x=$n;$x>0;$x--)
            {
                $n=$x;
            $dd = 1+(($r/$typ)/100);
            $ci = $p*pow($dd,$typ*$n);
            $amt = round($ci)*100/100;
            $ci = round($ci-$p)*100/100;
            //echo "<br>Compount interest : ".$ci;
            //echo "<br>Amount : ".$amt;
            //echo "<br>total:".$amt1=$amt1+$amt;
            $amt1=$amt1+$amt;
	    $maturity=$amt1;
            }  
    }
    else
    {
	 $amt1=0;
            $typ=1;
            $n=$paid_installment;
            $p=$monthly;
            $r=$intrest_rate/12;
            for($x=$n;$x>0;$x--)
            {
                $n=$x;
            $dd = 1+(($r/$typ)/100);
            $ci = $p*pow($dd,$typ*$n);
            $amt = round($ci)*100/100;
            $ci = round($ci-$p)*100/100;
            //echo "<br>Compount interest : ".$ci;
            //echo "<br>Amount : ".$amt;
            //echo "<br>total:".$amt1=$amt1+$amt;
            $amt1=$amt1+$amt;
	    $maturity=$amt1;
            }  
    }
}
	
	$getdetail[] = array(
	'value'  => $resrecurring['acc_no']."(".$resrecurring['name'].")",
	'acc_no' => $resrecurring['acc_no'],
	'customer_id' => $resrecurring['customer_id'],
	'date' => $date2,
	'enddate' => $date1,
	'maturity' => $maturity
	);
    }
   $getagent=mysql_query("select * from `agent`")or die(mysql_error());
   while($resagent=mysql_fetch_array($getagent))
    {
	$getagentdetail[] = array(
	'value'  => $resagent['id']."(".$resagent['name'].")",
	'idval' => $resagent['id'],
	'area' => $resagent['area']
	);
    }
    
?>
<!--autocomplete start-->
<link rel="stylesheet" href="css/jquery-ui.css">
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
 <!--autocomplete end-->
  <script type="text/javascript"> 
    $(function(){
	 //jQuery.noConflict();
        var availabledrugs=<?= json_encode($getdetail); ?>;
        $('#r_acc_no').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
		 $('#r_acc_no').val(valshow);
		 if (ui.item.date>ui.item.enddate)
		 { 
		    $('#r_account').val(ui.item.acc_no);
		    $('#r_customer_id').val(ui.item.customer_id);
		    $('#r_with_amt').val(ui.item.maturity);
		    
		 }
		 else{alert("maturity not done"); document.getElementById('r_submit').style.display='none'; return false; }
		}
		
        });
}); 
</script>
   <script type="text/javascript"> 
    $(function(){
	 //jQuery.noConflict();
        $("#fixed").hide();
        $("#saving").hide();
        $("#recurring").hide();
        $("#acc_type").change(function(){
        var acc_type=document.getElementById("acc_type").value;
        if (acc_type=="fixed") {
           // alert("fixed show");
           $("#fixed").show();
            $("#saving").hide();
            $("#recurring").hide();
        }
        else if (acc_type=="recurring") {
            //alert("recurring show");
            $("#fixed").hide();
            $("#saving").hide();
            $("#recurring").show();
        }
        else if(acc_type=="saving"){
            //alert("saving show");
          $("#fixed").hide();
            $("#saving").show();
            $("#recurring").hide();  
        }
	});
});
</script>
<style>
    .form-control{width: 300; float:left;}
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
function numbersonly(e){
var unicode=e.charCode? e.charCode : e.keyCode
if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
if (unicode<48||unicode>57) //if not a number
return false //disable key press
}
}
</script>
<script>
     $(function(){
        $('#f_paymentmode').change(function(){
        var f_mode=$(this).val();
        //alert(mode);
        if(f_mode!='cash'){
           document.getElementById('f_d1').style.display='block';
            document.getElementById('f_d2').style.display='block';
            document.getElementById('f_d3').style.display='block';
        }else{
            document.getElementById('f_d1').style.display='none';
            document.getElementById('f_d2').style.display='none';
            document.getElementById('f_d3').style.display='none';
        }
        
        });
	$('#s_paymentmode').change(function(){
        var s_mode=$(this).val();
        //alert(mode);
        if(s_mode!='cash'){
           document.getElementById('s_d1').style.display='block';
            document.getElementById('s_d2').style.display='block';
            document.getElementById('s_d3').style.display='block';
        }else{
            document.getElementById('s_d1').style.display='none';
            document.getElementById('s_d2').style.display='none';
            document.getElementById('s_d3').style.display='none';
        }
        
        });
	$('#r_paymentmode').change(function(){
        var r_mode=$(this).val();
        //alert(mode);
        if(r_mode!='cash'){
           document.getElementById('r_d1').style.display='block';
            document.getElementById('r_d2').style.display='block';
            document.getElementById('r_d3').style.display='block';
        }else{
            document.getElementById('r_d1').style.display='none';
            document.getElementById('r_d2').style.display='none';
            document.getElementById('r_d3').style.display='none';
        }
        
        });
           
        
    });
  </script>
<script>
    function validate() {
	var r_mode=document.getElementById("r_paymentmode").value;
	var r_d1=document.getElementById("r_d1").value;
	var r_d2=document.getElementById("r_d2").value;
	var r_d3=document.getElementById("r_d3").value;
	if (r_mode!="cash") {
		if (r_d1=='') {
		    alert("Please insert the Cheque/DD No.");
		    document.getElementById("r_d1").focus();
		    return false;
		}
		else if(r_d2==''){
		    alert("Please insert the Bank Name.");
		     document.getElementById("r_d2").focus();
		    return false;
		}
		else if (r_d3=='') {
		    alert("Please insert date.");
		     document.getElementById("r_d3").focus();
		    return false;
		}
	}
	else{
	    document.getElementById("r_d1").value='';
	    document.getElementById("r_d2").value='';
	    document.getElementById("r_d3").value='';
	}
	var intid=document.getElementById("account").value;
	if (intid=='') {
		    alert("Please insert a Valid customer");
		    document.getElementById("acc_no").focus();
		    return false;
		}
    }
</script>
<script>
    function validate1() {
	    var intid=document.getElementById("f_account").value;
	if (intid=='') {
		    alert("Please insert a Valid customer");
		    document.getElementById("f_acc_no").focus();
		    return false;
		}
	var mode=document.getElementById("f_paymentmode").value;
	var d1=document.getElementById("f_d1").value;
	var d2=document.getElementById("f_d2").value;
	var d3=document.getElementById("f_d3").value;
	if (mode!="cash") {
		if (d1=='') {
		    alert("Please insert the Cheque/DD No.");
		     document.getElementById("f_d1").focus();
		    return false;
		}
		else if(d2==''){
		    alert("Please insert the Bank Name.");
		     document.getElementById("f_d2").focus();
		    return false;
		}
		else if (d3=='') {
		    alert("Please insert date.");
		     document.getElementById("f_d3").focus();
		    return false;
		}
	}
	else{
	    document.getElementById("f_d1").value='';
	    document.getElementById("f_d2").value='';
	    document.getElementById("f_d3").value='';
	}
	 var mamt=document.getElementById("f_maturity_amt").value;
	    if (mamt=='') {
		alert("Your Maturity Period has not Complete.So You Can't Withdrawal.");
		return false;
	    }
	
	}
</script>
<script>
    function validate2() {
	var s_mode=document.getElementById("s_paymentmode").value;
	var s_d1=document.getElementById("s_d1").value;
	var s_d2=document.getElementById("s_d2").value;
	var s_d3=document.getElementById("s_d3").value;
	if (s_mode!="cash") {
		if (s_d1=='') {
		    alert("Please insert the Cheque/DD No.");
		    document.getElementById("s_d1").focus();
		    return false;
		}
		else if(s_d2==''){
		    alert("Please insert the Bank Name.");
		     document.getElementById("s_d2").focus();
		    return false;
		}
		else if (s_d3=='') {
		    alert("Please insert date.");
		    document.getElementById("s_d3").focus();
		    return false;
		}
	}
	else{
	    document.getElementById("s_d1").value='';
	    document.getElementById("s_d2").value='';
	    document.getElementById("s_d3").value='';
	}
	var intid=document.getElementById("s_account").value;
	if (intid=='') {
		    alert("Please insert a Valid Account Number..");
		    document.getElementById("s_acc_no").focus();
		    return false;
		}
	var wamt=document.getElementById("s_with_amt").value;
	var damt=document.getElementById("s_deposited_amt").value;
	//alert(wamt+"----"+damt);
	if (parseFloat(wamt) > parseFloat(damt)) {
	    alert("You hanve not sufficient balance to withdraw "+wamt+" amount");
	    document.getElementById("s_with_amt").value='';
	    document.getElementById("s_with_amt").focus();
	    return false;
	}
	}
</script>
<?php $faccdetails=mysql_query("select * from `fixeddeposite`")or die(mysql_error());
   while($fressaccdetails=mysql_fetch_array($faccdetails))
    {
	
	$amt=$fressaccdetails['maturity_amt'];
	$ir=$fressaccdetails['intrest_rate'];
	$accno=$fressaccdetails['acc_no'];
	$currdate=date("Y-m-d");
	$closedate = $fressaccdetails['closing_date'];
	//$closedate = "2017-06-30";
	//$currdate="2017-07-30";
	if($currdate>$closedate){
	    
	//test
	$timestamp_start = strtotime($closedate);
	$timestamp_end = strtotime($currdate);
	$difference = abs($timestamp_end - $timestamp_start);
	$months = floor($difference/(60*60*24*30));
	//echo $months.'Months ';
	//test
	/*$ts1 = strtotime($closedate);
	$ts2 = strtotime($currdate);
	
	$year1 = date('Y', $ts1);
	$year2 = date('Y', $ts2);
	
	$month1 = date('m', $ts1);
	$month2 = date('m', $ts2);
	echo $diff = (($year2 - $year1) * 12) + ($month2 - $month1);
	echo "</br>";
	//$yr=$diff/12;*/
	$yr=$months/12;
	$pw=(1+(8.00/100));
	$power=pow($pw,$yr);
	$mat_amt=$amt*$power;
	$pay_amount=floor($mat_amt);
	//echo "UPDATE `fixeddeposite` set `payable_amt`='$pay_amount' where `acc_no`='$accno'";
	$qwe=mysql_query("UPDATE `fixeddeposite` set `payable_amt`='$pay_amount' where `acc_no`='$accno'")or die(mysql_error()) ;
	}
	else{
	     $pay_amount='';
	}
	$frdetails[] = array(
	'value'  => $fressaccdetails['acc_no']."(".$fressaccdetails['name'].")",
        'account' => $fressaccdetails['acc_no'],
	'customer_id' => $fressaccdetails['customer_id'],
	'maturity_amt' => $pay_amount
	
	);
    }
?>
<script type="text/javascript"> 
    $(function(){
	 //jQuery.noConflict();
        var availabledrugs=<?= json_encode($frdetails); ?>;
        $('#f_acc_no').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
		 $('#f_acc_no').val(valshow);
                 $('#f_account').val(ui.item.account);
                 $('#f_customer_id').val(ui.item.customer_id);
		 $('#f_maturity_amt').val(ui.item.maturity_amt);
		}
		
        });
	
}); 
</script>
<?php
$saccdetails=mysql_query("select * from `savingaccount` where `status`='0'")or die(mysql_error());
   while($ressaccdetails=mysql_fetch_array($saccdetails))
    {
	$rdetails[] = array(
	'value'  => $ressaccdetails['acc_no']."(".$ressaccdetails['name'].")",
        'account' => $ressaccdetails['acc_no'],
	'customer_id' => $ressaccdetails['customer_id'],
	'deposited_amt' => $ressaccdetails['deposited_amt']
	
	);
    }
   $getagent=mysql_query("select * from `agent`")or die(mysql_error());
   while($resagent=mysql_fetch_array($getagent))
    {
	$getagentdetail[] = array(
	'value'  => $resagent['id']."(".$resagent['name'].")",
	'idval' => $resagent['id'],
	'area' => $resagent['area']
	);
    }
    
?>
<script type="text/javascript"> 
    $(function(){
	 //jQuery.noConflict();
        var availabledrugs=<?= json_encode($rdetails); ?>;
        $('#s_acc_no').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
		 $('#s_acc_no').val(valshow);
		// alert(ui.item.account);
                 $('#s_account').val(ui.item.account);
                 $('#s_customer_id').val(ui.item.customer_id);
		 $('#s_deposited_amt').val(ui.item.deposited_amt);
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
            <a class="navbar-brand" href="#">
                <span>admin</span></a>
<div style="float: right; color: red;">
    <?php// echo date("Y-m-d");?>
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
	<li style="float: right;">
             <?php echo date("d-m-Y");?>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i>Account Withdrawal Form</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content" style="width:100%; float:left;height: auto;background-color: #fff;border: #f5f5f5 solid 0.5px; border-radius: 4px;-webkit-box-shadow: 0 0 10px rgba(189,189,189,.4);">
                <table style="float: left;width: 100%;">
		    <tr>
			<td>Account Type</td><td><select id="acc_type" name="acc_type" required class="form-control">
                                                                <option value="">--Select Account Type--</option>
                                                                <option value="fixed">Fixeddeposit Account</option>
                                                                <option value="recurring">Recurring Deposit Account</option>
                                                                <option value="saving">Voluntary Saving Deposite Accuont</option>
                                                        </select>
                    </td>
		    </tr>
                </table>
                <div id="saving">
                        <form name="arrange" action="insert_savingwith.php" method="post" onSubmit="return validate2();" enctype="multipart/form-data">
                     <table style="float: left;width: 100%;">
                        <tr>
                            <td colspan="4" style="color: red;font-size: 25px;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; }  ?></td>
                        </tr>
			<tr>
                            <td>A/c No</td><td><input type="text" name="acc_no" id="s_acc_no" class="form-control" required ></td>
			    <td>Total Deposited Amount</td><td><input type="text" name="deposited_amt" id="s_deposited_amt" class="form-control" readonly ></td>
                             <input type="hidden" name="account" id="s_account">
				<input type="hidden" name="customer_id" id="s_customer_id">
			</tr>
			<tr>
			    <td>Withdrawal Amount</td><td><input type="text" name="with_amt" id="s_with_amt" class="form-control" onkeyPress="return IsNumeric(event,this.value)" required></td>
			    <td>Mode Of Payment</td><td><select id="s_paymentmode" name="payment_mode" required class="form-control">
                                                                <option value="">--Select Mode of Paymet--</option>
                                                                <option value="cash">Cash</option>
                                                                <option value="dd">DD</option>
                                                                <option value="cheque">Cheque</option>
                                                        </select>
                                                    </td>
			</tr>
                        
                       <tr>
                           <td>&nbsp;</td>
			   <td><input type="text" name="chqddno" id="s_d1" class="form-control"  placeholder="Cheque/DD Number" onKeyPress="return numbersonly(event)" style="display: none;"></td>
                           <td><input type="text" name="bank" id="s_d2" class="form-control"  placeholder="Name of the Bank"  style="display: none;"></td>
                           <td><input type="text" name="paydate" id="s_d3" class="form-control"  placeholder="Payment Date" style="display: none;"></td>
                        </tr>
                       
                        <tr>
			    <td>&nbsp;</td><td>&nbsp;</td>
                            <td align="center" colspan="2"><input type="submit" name="s_submit" value="Submit" /></td>
			</tr>
                     </table>
		</form>
                </div>
                <div id="fixed">
                    <form name="arrange" action="insert_fixedwith.php" method="post" onSubmit="return validate1();" enctype="multipart/form-data">
                     <table style="float: left;width: 100%;">
                        <tr>
                            <td colspan="4" style="color: red;font-size: 25px;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; }  ?></td>
                        </tr>
			<tr>
                            <td>A/c No</td><td><input type="text" name="acc_no" id="f_acc_no" class="form-control" required ></td>
                            <td>Maturity Amount</td><td><input type="text" name="maturity_amt" id="f_maturity_amt" class="form-control" readonly required></td>
			    <input type="hidden" name="account" id="f_account">
                            <input type="hidden" name="customer_id" id="f_customer_id">
                            <input type="hidden" name="deposited_amt" id="f_deposited_amt">
			</tr>
			<tr>
                            <td>Mode Of Payment</td><td colspan="3"><select id="f_paymentmode" name="payment_mode" required class="form-control">
                                                                <option value="">--Select Mode of Paymet--</option>
                                                                <option value="cash">Cash</option>
                                                                <option value="dd">DD</option>
                                                                <option value="cheque">Cheque</option>
                                                        </select>
                                                    </td>
			</tr>
                        
                       <tr>
                           <td>&nbsp;</td>
			   <td><input type="text" name="chqddno" id="f_d1" class="form-control"  placeholder="Cheque/DD Number" onKeyPress="return numbersonly(event)" style="display: none;"></td>
                           <td><input type="text" name="bank" id="f_d2" class="form-control"  placeholder="Name of the Bank"  style="display: none;"></td>
                           <td><input type="text" name="paydate" id="f_d3" class="form-control"  placeholder="Payment Date" style="display: none;"></td>
                        </tr>
                        <tr >
                            
			    <td>&nbsp;</td><td>&nbsp;</td>
                            <td align="center" colspan="2"><input type="submit" name="f_submit" value="Submit" /></td>
			    
			</tr>
			
                     </table>
		</form>
                </div>
                <div id="recurring">
                    <form name="arrange" action="recurring_withdraw_action.php" method="post" onSubmit="return validate();" enctype="multipart/form-data">
                     <table style="float: left;width: 100%;">
                        <tr>
                            <td colspan="4" style="color: red;font-size: 25px;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; }  ?></td>
                        </tr>
			<tr>
                            <td>A/c No</td><td><input type="text" name="acc_no" id="r_acc_no" class="form-control" required ></td>
                            <td>Withdrawal Amount</td><td><input type="text" name="with_amt" id="r_with_amt" class="form-control" readonly="true" required></td>
			    <input type="hidden" name="account" id="r_account">
                            <input type="hidden" name="customer_id" id="r_customer_id">
			</tr>                     

			<tr>
                            <td>Mode Of Payment</td><td colspan="3"><select id="r_paymentmode" name="payment_mode" required class="form-control">
                                                                <option value="">--Select Mode of Paymet--</option>
                                                                <option value="cash">Cash</option>
                                                                <option value="dd">DD</option>
                                                                <option value="cheque">Cheque</option>
                                                        </select>
                                                    </td>
			</tr>
                        
                        <tr>
                           <td>&nbsp;</td>
			   <td><input type="text" name="d1" id="r_d1" class="form-control" placeholder="Cheque/DD Number" onKeyPress="return numbersonly(event)" style="display: none;"></td>
                           <td><input type="text" name="d2" id="r_d2" class="form-control"  placeholder="Name of the Bank"  style="display: none;"></td>
                           <td><input type="text" name="d3" id="r_d3" class="form-control"  placeholder="Payment Date" style="display: none;"></td>
                        </tr>
			                        <tr >
                            
			    <td>&nbsp;</td><td>&nbsp;</td>
                            <td align="center" colspan="2"><input type="submit" name="r_submit" id="r_submit" value="Pay" /></td>
			</tr>
			
                     </table>
		</form>
                </div>
                
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

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>


</body>
</html>

