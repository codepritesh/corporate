<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{ header("location:index.php");}
else
{
    $custmerid='<option value=""></option>';
$getrecurring=mysql_query("select * from `recurringdiposite`")or die(mysql_error());
   while($resrecurring=mysql_fetch_array($getrecurring))
    {
        $id=$resrecurring['acc_no'];
        $custmerid.='<option value='.$id.'>'.$resrecurring['acc_no']."(".$resrecurring['name'].")".'</option>';   
    }
    
    $getagent=mysql_query("select * from `agent`")or die(mysql_error());
    //$getagent=mysql_query("select * from `agent` where `prodetails`='Reccuring Deposit' ")or die(mysql_error());
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
            url:"ajax_recurring.php?cid="+cid,
            success: function(result){
                //alert(result);
		var obj = JSON.parse(result);
               //alert(obj.value);
	         $('#account').val(obj.value);
		 $('#acid').val(obj.idval);
                 $('#cuid').val(obj.cuid);
		 $('#mamount').val(obj.mamount);
		 $('#amount').val(obj.amount);
		 $('#actualamount').val(obj.amount);
		 $('#tamount').val(obj.tamount);
		 $('#paidamount').val(obj.tamount);
		 
		 $('#installment').val(obj.installment);
		 $('#agenid').val(obj.agenid);
		 $('#agent').val(obj.agent);
		 $('#fine').val(obj.fine);
		 if (obj.amount==0) {
		    alert("your have no installment");
		    //location.reload();
		 }
		 
		 else if (obj.continious>6) {
		   var con=confirm("your account has been closed Do you want to proceed?");
		    if(con)
		{
		    window.location.href = "recurringformclosed.php?acc_no="+obj.idval;
		}else{ location.reload();}
		 }else{
		 $('#fine').val(obj.fine);
		 }
            }
        });  
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
    /*function amtchange(sel)
    {
	//alert(sel);
	var mamt=document.getElementById("mamount").value;
	var acam=document.getElementById("actualamount").value;
	var fmamt=parseFloat(mamt);
    if (sel==1) { var amount=fmamt*1; if(amount<=acam){$('#installment').val(1); $('#amount').val(amount); var finee=(amount/100)*0; $('#fine').val(finee); var tot=parseFloat(amount)+parseFloat(finee); $('#tamount').val(tot);}}
    if (sel==2) { var amount=fmamt*2; if(amount<=acam){$('#installment').val(2); $('#amount').val(amount); var finee=(amount/100)*4; $('#fine').val(finee); var tot=parseFloat(amount)+parseFloat(finee); $('#tamount').val(tot);}}
    if (sel==3) { var amount=fmamt*3; if(amount<=acam){$('#installment').val(3); $('#amount').val(amount); var finee=(amount/100)*4; $('#fine').val(finee); var tot=parseFloat(amount)+parseFloat(finee); $('#tamount').val(tot);}}
    if (sel==4) { var amount=fmamt*4; if(amount<=acam){$('#installment').val(4); $('#amount').val(amount); var finee=(amount/100)*4; $('#fine').val(finee); var tot=parseFloat(amount)+parseFloat(finee); $('#tamount').val(tot);}}
    if (sel==5) { var amount=fmamt*5; if(amount<=acam){$('#installment').val(5); $('#amount').val(amount); var finee=(amount/100)*4; $('#fine').val(finee); var tot=parseFloat(amount)+parseFloat(finee); $('#tamount').val(tot);}}
    if (sel==6) { var amount=fmamt*6; if(amount<=acam){$('#installment').val(6); $('#amount').val(amount); var finee=(amount/100)*4; $('#fine').val(finee); var tot=parseFloat(amount)+parseFloat(finee); $('#tamount').val(tot);}}
    //if (sel==7) { var amount=fmamt*7; if(amount<=acam){$('#installment').val(7); $('#amount').val(amount); var finee=(amount/100)*192; $('#fine').val(finee); var tot=parseFloat(amount)+parseFloat(finee); $('#tamount').val(tot);}}
	
    }*/
    function sumtotal()
    { 
	var fetamt=document.getElementById("amount1").value;
	var insfine=document.getElementById("fine1").value;
	var ttt=parseFloat(fetamt)+parseFloat(insfine);
	$("#tamount").val(ttt);
	
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
                             <td>Customer_id</td><td style="width:310px;"><select name="customer" data-placeholder="&nbsp;"  class="form-control chosen-select " id="customer" style="width:307px; padding:4px;height: 100px;border-radius:4px;">
										<option value=""></option>
										<?php echo $custmerid;?>
									</select>
                             </td>
			    <input type="hidden" name="acid" id="acid">
			    <input type="hidden" name="cuid" id="cuid">
                            <td>Monthly Amount</td><td><input type="text" name="mamount" id="mamount" readonly="true" class="form-control" required></td>
			</tr>
			<tr>
			    <td>Payble Amount</td><td><input type="text" name="amount" id="amount" class="form-control" readonly></td>
			    <td>Payble fine</td><td><input type="text" name="fine" id="fine" class="form-control" readonly></td>
			</tr>
			<tr>
			    <td>Paid Amount</td><td><input type="text" name="amount1" id="amount1" class="form-control" onblur="sumtotal()"required></td>
			    <td>Paid fine</td><td><input type="text" name="fine1" id="fine1" class="form-control" value="0" onblur="sumtotal()" required></td>
			</tr>
                        <tr>
			    <td>Total Amount</td><td><input type="text" name="tamount" id="tamount" class="form-control" required></td>
			    <td>Agent</td><td><input type="text" name="agent" id="agent" class="form-control" required></td>
			    <input type="hidden" name="agenid" id="agenid" class="form-control" required>
			    <input type="hidden" name="actualamount" id="actualamount" class="form-control" required>
			    <input type="hidden" name="installment" id="installment" class="form-control" required>
			</tr>
			
			 <tr>
			     <td>Installment</td>
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
					<!--<option value="7">7 installment</option>-->
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
</body>
</html><?php }?>