<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{ header("location:index.php");}
else
{
$custmerid='<option value=""></option>';
$getvendor=mysql_query("SELECT * FROM staffloan where `is_approved`='1' and `loan_accno`!='' and `loancomplited`='0'") or die(mysql_error());
while($resvendor=mysql_fetch_array($getvendor))
    {
	$id=$resvendor['id'];
        $custmerid.='<option value='.$id.'>'.$resvendor['name'].'</option>';
    }
    
    $sqlagent=mysql_query("select * from `agent`")or die(mysql_error());
	 while($resagent=mysql_fetch_array($sqlagent))
		{
		 $getagent[] = array(
		'value'  =>$resagent['name'].'('.$resagent['codeno'].')',
		'idval' => $resagent['id']
		);
		}
?>
<!--autocomplete start-->
<link rel="stylesheet" href="css/chosen.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
 <!--autocomplete end-->
<script type="text/javascript"> 
    $(function(){
	$('#customer').change(function(){
	var cid=$(this).val();
	//alert(cid);
        $.ajax({
            url:"staffloan_refund_ajax.php?cid="+cid,
            success: function(result){
               // alert(result);
		var obj = JSON.parse(result);
               //alert(obj.value);
		var valshow=obj.value;
		 $('#loan').val(valshow);
                 $('#custid').val(obj.custid);
		         $('#loan_against_acc').val(obj.loan_against_acc);
				 $('#loan_amt').val(obj.loangiven);
				 //$('#loangiven').val(obj.loangiven);
				 $('#loan_accno').val(obj.loan_accno);
				 $('#amount_topay').val(obj.amount_topay);
				 $('#intamt').val(obj.intrest_amt);
				 
				 if (parseFloat(obj.odprincipal)==parseFloat(obj.amount_topay))
				  {
				    $('#principal').val(0);
				  }
				 else if (parseFloat(obj.crprincipal)>parseFloat(obj.amount_topay))
				 {
				   $('#principal').val(obj.amount_topay);
				 }else{  $('#principal').val(obj.crprincipal);}
				 $('#preprincipal').val(obj.pre_principal);
				 
				  $('#total').val(obj.total);
				  $('#int_for_day').val(obj.int_for_day);
				  $('#lastrefund').val(obj.lastrefund);
				  $('#agentnm').val(obj.agentvalue);
				  $('#agent_id').val(obj.agentidval);
				  $('#odprincipal').val(obj.odprincipal);
				  $('#odintrest').val(obj.odintrest);
				  $('#lastodcaldate').val(obj.lastodcaldate);
            }
        });  
      });
	
	$(function(){
        var availabledrugs=<?php echo json_encode($getagent); ?>;
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
});
</script>
<script>

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
	$('#refund').blur(function(){
	    var intamt=$(this).val();
	    if (intamt!='') {
		var preprincipal=$('#preprincipal').val();
		var totalpaid=parseFloat(preprincipal)+parseFloat(intamt);
		var camt=$('#amount_topay').val();
		var odintrest=$('#odintrest').val();
		var intam=$('#intamt').val();
		var tot=parseFloat(camt)+parseFloat(odintrest)+parseFloat(intam);
		if (parseFloat(totalpaid)>parseFloat(tot)) {
		    alert("You paid is more amount than "+tot);
		    //$('#refund').val('');
		   // $('#refund').focus();
		   // return false;
		}
	    }
	    });
    });
    function del(args)
    {
         var con=confirm("Do you want to delete ?");
			if(con){
			window.location="fideddelete.php?id="+args;
			}
    }
    
    function validate() {
    caltotal();
    
    var intamt=document.getElementById("intamt").value;
   if (intamt!="")
   {
		if (intamt==0) {
		     var con=confirm("There is no interest do you want to continue ?");
			if(con){ }else{return false;}
		}
   }
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
		    alert("Please insert the Bank Name.");
		      document.getElementById("d2").focus();
		    return false;
		}
		else if (d3=='') {
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
	var custid=document.getElementById("custid").value;
	if (custid=='') {
		    alert("Please insert a Valid Account Number..");
		    document.getElementById("loan").focus();
		    return false;
		}
	var agent_id=document.getElementById("agent_id").value;
	if (agent_id=='') {
		    alert("Please insert a Valid Agent..");
		    document.getElementById("agentnm").focus();
		    return false;
		}
	var con=confirm("Do you want to proceed?");
        if(con)
		{
		document.arrange.submit();
		}  
	else{ return false;}
    }
</script>
<script type="text/javascript">
function numbersonly(e){
var unicode=e.charCode? e.charCode : e.keyCode
if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
if (unicode<48||unicode>57) //if not a number
return false //disable key press
}
}
</script>
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
                <h2><i class="glyphicon glyphicon-plus"></i>Staff Loan Repayment</h2>

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
                <form name="arrange" action="staffloanrefund_action.php" method="post" onSubmit="return validate();" enctype="multipart/form-data">		
		   <table style="float: left;width: 100%;">
                        <tr>
                            <td colspan="4" style="color: red;font-size: 20px;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; }  ?></td>
                        </tr>
			<tr>
                            <td>Loan Holders Name</td><td style="width:310px;"><select name="loan" data-placeholder="&nbsp;"  class="form-control chosen-select " id="customer" style="width:307px; padding:4px;height: 100px;border-radius:4px;">
										<option value=""></option>
										<?php echo $custmerid;?>
									</select>
			    <input type="hidden" name="custid" id="custid">
							</td>
                            <td>A/c No</td><td><input type="text" name="loan_accno" id="loan_accno" class="form-control" value="<?=$acc_no?>" required readonly></td>
			    <input type="hidden" name="intid" id="intid">
			    <input type="hidden" name="lastrefund" id="lastrefund">
			</tr>
			<tr>
			     <td>Disbursement Amount</td><td><input type="text" name="loan_amt" class="form-control" id="loan_amt" required readonly></td>
			    <td>Outstanding Balance</td><td><input type="text" name="amount_topay" class="form-control" id="amount_topay" required readonly></td>
			</tr>
			<tr>
			    <td>OD Principal Amount</td><td><input type="text" name="odprincipal" class="form-control" id="odprincipal" required readonly></td>
			    <td>OD Intrest</td><td><input type="text" name="odintrest" class="form-control" id="odintrest" required readonly></td>
			    <input type="hidden" name="lastodcaldate" id="lastodcaldate" />
			</tr>
			<tr>
			    <td>Current Intrest Amount</td><td><input type="text" name="intamt" class="form-control" id="intamt" required readonly></td>
			    <td>Current Principal Amount</td><td><input type="text" name="principal" class="form-control" id="principal" readonly></td>
			</tr>
			<tr>
			    <td>Pre-Paid Principal Amount</td><td><input type="text" name="preprincipal" class="form-control" id="preprincipal" readonly></td>
			    <td>Total Amount</td><td><input type="text" name="total" class="form-control" id="total" readonly></td>
			
			</tr>
			<tr>
			    <td>Agent</td>
			    <td>
							<input type="text" name="agent" id="agentnm" class="form-control"/>
							<input type="hidden" name="agent_id" id="agent_id"/>
			    </td>
			    <td>Repayment Amount</td><td><input type="text" name="refund" class="form-control" id="refund"  onkeyPress="return IsNumeric(event,this.value)" onBlur="caltotal()" autocomplete="off" ></td>
			</tr>
			<tr>
			    <td>Voucher No</td>
			    <td>
				<input type="text" name="voucher" id="voucher" onkeyPress="return IsNumeric(event,this.value)" class="form-control"  autocomplete="off"/>
			    </td>
			    <td>Mode Of Payment</td><td><select id="paymentmode" name="payment_mode" required class="form-control">
                                                                <option value="">--Select Mode of Paymet--</option>
                                                                <option value="cash">Cash</option>
                                                                <option value="dd">DD</option>
                                                                <option value="cheque">Cheque</option>
                                                        </select>
                                                    </td>
			    <!--<td>Total Amount</td>
			    <td>
				<input type="text" name="totall" id="totall" required readonly  class="form-control"/>
			    </td>-->
			</tr>
			 <tr>
                           <td>&nbsp;</td>
			   <td><input type="text" name="chqddno" id="d1" class="form-control"  placeholder="Cheque/DD Number" onKeyPress="return numbersonly(event)" style="display: none;"></td>
                           <td><input type="text" name="bank" id="d2" class="form-control"  placeholder="Name of the Bank"  style="display: none;"></td>
                           <td><input type="text" name="paydate" id="d3" class="form-control"  placeholder="Payment Date" style="display: none;"></td>
                        </tr>
			<tr>
                            <td colspan="2"><input type="submit" name="submit" value="submit"></td>
                        </tr>
                   </table>
		</form>
		<script src="js/chosen.jquery.js" type="text/javascript"></script>
		<script type="text/javascript">
		    var config = {
		      '.chosen-select'           : {}
		      
		    }
		    for (var selector in config) {
		      $(selector).chosen(config[selector]);
		    }
		</script>
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