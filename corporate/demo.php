<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{ header("location:index.php");}
else
{
$getrecurring=mysql_query("select * from `recurringdiposite`")or die(mysql_error());
   while($resrecurring=mysql_fetch_array($getrecurring))
    {
	$nplan=$resrecurring['plan'];
$date3 = $resrecurring['end_date'];
$date4 = date("Y-m-d");

$ts3 = strtotime($date3);
$ts4 = strtotime($date4);

$year3 = date('Y', $ts3);
$year4 = date('Y', $ts4);

$month3 = date('m', $ts3);
$month4 = date('m', $ts4);

$date1 = $resrecurring['start_date'];
$date2 = date("Y-m-d");

$ts1 = strtotime($date1);
$ts2 = strtotime($date2);

$year1 = date('Y', $ts1);
$year2 = date('Y', $ts2);

$month1 = date('m', $ts1);
$month2 = date('m', $ts2);
//calculation 
if($ts2<=$ts3){
   $diff = (($year2 - $year1) * 12) + ($month2 - $month1);
}else{$diff=$nplan;}
if($ts2>$ts3){
$diff1 = (($year4 - $year3) * 12) + ($month4 - $month3);
}else{$diff1=0;}


 $paid=$resrecurring['paid_installment'];
$monthlyamount=$resrecurring['monthly_amount'];
if($diff>0){
 $rest=$diff-($paid-1);}
if($rest>0 || $diff1<7){
    if($rest==2){$fine=4;}
    if($rest==3){$fine=12;}
    if($rest==4){$fine=24;}
    if($rest==5){$fine=48;}
    if($rest==6){$fine=96;}
    if($rest==7){$fine=192;}
$total=$rest*$monthlyamount;

}else{$total=0; $fine=0; $rest=0;}
	$totalamount=$total+$fine;
	
	$getdetail[] = array(
	'value'  => $resrecurring['acc_no']."(".$resrecurring['name'].")",
	'idval' => $resrecurring['acc_no'],
	'cuid' => $resrecurring['customer_id'],
	'mamount' => $resrecurring['monthly_amount'],
	'agenid' => $resrecurring['agent_id'],
	'agent' => $resrecurring['agent_name'],
	'amount' => $total,
	'tamount' => $totalamount,
	'installment' => $rest,
	'fine' => $fine
	);
    }
    
    $getagent=mysql_query("select * from `agent` where `prodetails`='Reccuring Deposit' ")or die(mysql_error());
   while($resagent=mysql_fetch_array($getagent))
    {
	$getagentdetail[] = array(
	'value'  => $resagent['name']."(".$resagent['codeno'].")",
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
        var availabledrugs=<?php echo json_encode($getdetail); ?>;
        $('#account').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
		 $('#account').val(valshow);
		 $('#acid').val(ui.item.idval);
                 $('#cuid').val(ui.item.cuid);
		 $('#mamount').val(ui.item.mamount);
		 $('#amount').val(ui.item.amount);
		 $('#actualamount').val(ui.item.amount);
		 $('#tamount').val(ui.item.tamount);
		 $('#paidamount').val(ui.item.tamount);
		 $('#fine').val(ui.item.fine);
		 $('#installment').val(ui.item.installment);
		 $('#agenid').val(ui.item.agenid);
		 $('#agent').val(ui.item.agent);
		}
		
        });
	
});
</script>
  <script type="text/javascript"> 
    $(function(){
	 //jQuery.noConflict();
        var availabledrugs=<?php echo json_encode($getagentdetail); ?>;
        $('#agent').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
		 $('#agent').val(valshow);
		 $('#agenid').val(ui.item.idval);
                 $('#area').val(ui.item.area);
		}
		
        });
});
</script>
  <script>
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
        $('#paymentmode').change(function(){
        var mode=$(this).val();
        //alert(mode);
        if(mode!='cash'){
           document.getElementById('d1').style.display='block';
            document.getElementById('d2').style.display='block';
            document.getElementById('d3').style.display='block';
        }else{
            document.getElementById('d1').style.display='none';
            document.getElementById('d2').style.display='none';
            document.getElementById('d3').style.display='none';
        }
        
        });
           
        
    });
  </script>
  <script>
     function validate() {
	var mode=document.getElementById("paymentmode").value;
	var d1=document.getElementById("d1").value;
	var d2=document.getElementById("d2").value;
	var d3=document.getElementById("d3").value;
	if (mode!="cash") {
		if (d1=='') {
		    alert("Please insert the Cheque/DD No.");
		    document.getElementById("d1").focus();
		    return false;
		}
		else if(d2==''){
		    alert("Please insert the Bank Name of Cheque/DD.");
		    document.getElementById("d2").focus();
		    return false;
		}
		else if (d3=='') {
		    alert("Please insert date of the Cheque/DD.");
		    document.getElementById("d3").focus();
		    return false;
		}
	}
	else{
	    document.getElementById("d1").value='';
	    document.getElementById("d2").value='';
	    document.getElementById("d3").value='';
	}
	var intid=document.getElementById("acid").value;
	if (intid=='') {
		    alert("Please insert a Valid customer");
		    document.getElementById("account").focus();
		    return false;
		}
		var agentid=document.getElementById("agenid").value;
	if (agentid=='') {
		    alert("Please insert a Valid Agent");
		    document.getElementById("agent").focus();
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
    function amtchange(sel)
    {
	//alert(sel);
	var mamt=document.getElementById("mamount").value;
	var acam=document.getElementById("actualamount").value;
	var fmamt=parseFloat(mamt);
    if (sel==1) { var amount=fmamt*1; if(amount<=acam){$('#installment').val(1); $('#amount').val(amount); $('#fine').val(0); var tot=parseFloat(amount)+parseFloat(0); $('#tamount').val(tot);}}
    if (sel==2) { var amount=fmamt*2; if(amount<=acam){$('#installment').val(2); $('#amount').val(amount); $('#fine').val(4); var tot=parseFloat(amount)+parseFloat(4); $('#tamount').val(tot);}}
    if (sel==3) { var amount=fmamt*3; if(amount<=acam){$('#installment').val(3); $('#amount').val(amount); $('#fine').val(12); var tot=parseFloat(amount)+parseFloat(12); $('#tamount').val(tot);}}
    if (sel==4) { var amount=fmamt*4; if(amount<=acam){$('#installment').val(4); $('#amount').val(amount); $('#fine').val(24); var tot=parseFloat(amount)+parseFloat(24); $('#tamount').val(tot);}}
    if (sel==5) { var amount=fmamt*5; if(amount<=acam){$('#installment').val(5); $('#amount').val(amount); $('#fine').val(48); var tot=parseFloat(amount)+parseFloat(48); $('#tamount').val(tot);}}
    if (sel==6) { var amount=fmamt*6; if(amount<=acam){$('#installment').val(6); $('#amount').val(amount); $('#fine').val(96); var tot=parseFloat(amount)+parseFloat(96); $('#tamount').val(tot);}}
    if (sel==7) { var amount=fmamt*7; if(amount<=acam){$('#installment').val(7); $('#amount').val(amount); $('#fine').val(192); var tot=parseFloat(amount)+parseFloat(192); $('#tamount').val(tot);}}
	
    }
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
		/*new JsDatePick({
			useMode:2,
			target:"inputField1",
			dateFormat:"%Y-%m-%d"
			
		});
		new JsDatePick({
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

            <!-- theme selector starts 
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
            <!-- theme selector ends -->
                    <form class="navbar-search pull-left">
                        <input placeholder="Search" class="search-query form-control col-md-10" name="query"
                               type="text">
                    </form>
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
             <?php echo date("Y-m-d");?>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i> Recurring Deposite</h2>

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
                 <form name="arrange" action="recurringform_action.php" onSubmit="return validate();" method="post" enctype="multipart/form-data">
		    <table style="float: left;width: 100%;">
                            <span style="color: red;font-size: 20px;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; }  ?></span>
			<tr>
                            <td>A/c No</td><td><input type="text" name="accno" id="account" class="form-control" required></td>
			    <input type="hidden" name="acid" id="acid">
			    <input type="hidden" name="cuid" id="cuid">
                            <td>Monthly Amount</td><td><input type="text" name="mamount" id="mamount" readonly="true" class="form-control" required></td>
			</tr>
			<tr>
			    <td>Amount</td><td><input type="text" name="amount" id="amount" class="form-control" readonly="true"   required></td>
			    <td>fine</td><td><input type="text" name="fine" id="fine" class="form-control" readonly="true"  required></td>
			</tr>
                        <tr>
			    <td>Total Amount</td><td><input type="text" name="tamount" id="tamount" class="form-control" readonly="true"   required></td>
			    <td>Agent</td><td><input type="text" name="agent" id="agent" class="form-control" required></td>
			    <input type="hidden" name="agenid" id="agenid" class="form-control" required>
			    <input type="hidden" name="actualamount" id="actualamount" class="form-control" required>
			    <input type="hidden" name="installment" id="installment" class="form-control" required>
			</tr>
			
			 <tr>
			     <td>Amount</td>
			     <td>
				<!--<input type="text" name="paidamount" id="paidamount"  class="form-control" required>-->
				    <select name="paidamount" id="paidamount"  class="form-control" onchange="return amtchange(this.value);">
					<option>select</option>
					<option value="1">1 installment</option>
					<option value="2">2 installment</option>
					<option value="3">3 installment</option>
					<option value="4">4 installment</option>
					<option value="5">5 installment</option>
					<option value="6">6 installment</option>
					<option value="7">7 installment</option>
				    </select>
			     </td>
			     <td>Voucher no</td><td><input type="text" name="voucher" id="voucher" value=""  onKeyPress="return numbersonly(event);"  class="form-control" required ></td>
                            
			</tr>
			 <tr><td>Mode Of Payment</td><td colspan="3"><select id="paymentmode" name="payment_mode" required class="form-control">
                                                                <option value="">--Select Mode of Paymet--</option>
                                                                <option value="cash">Cash</option>
                                                                <option value="dd">DD</option>
                                                                <option value="cheque">Cheque</option>
                                                        </select>
                                                    </td>
			</tr>
                        
                        <tr>
                           <td>&nbsp;</td>
			   <td><input type="text" name="d1" id="d1" class="form-control" placeholder="Cheque/DD Number" onKeyPress="return numbersonly(event)"  style="display: none;"></td>
                           <td><input type="text" name="d2" id="d2" class="form-control"  placeholder="Name of the Bank"  style="display: none;"></td>
                           <td><input type="text" name="d3" id="d3" class="form-control"  placeholder="Payment Date" style="display: none;"></td>
                        </tr>
			 <tr>
                            <td colspan="2"><input type="submit" name="submit" value="submit"></td>
                        </tr>
		     </table>
                </form>
	    </div>
	    <div class="box-content">
                <table>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
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
</html><?php }?>