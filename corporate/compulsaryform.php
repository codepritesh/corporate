<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{ header("location:index.php");}
else
{
$accno='<option value=""></option>';
$saccdetails=mysql_query("select * from `compulsarydeposite`")or die(mysql_error());
   while($ressaccdetails=mysql_fetch_array($saccdetails))
    {
	$account=$ressaccdetails['acc_no'];
	$name=$ressaccdetails['name'];
        $accno.='<option value='.$account.'>'.$ressaccdetails['acc_no']."(".$ressaccdetails['name'].")".'</option>' ;
    }
   $getagent=mysql_query("select * from `agent`")or die(mysql_error());
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
<link rel="stylesheet" href="css/chosen.css">
<script src="js/jquery-ui.js"></script>
 <!--autocomplete end-->
  <script type="text/javascript"> 
$(function(){
	$('#acc_no').change(function(){
	var acc=$(this).val();
	
        $.ajax({
            url:"ajax_compulsoryaccdetails.php?acc="+acc,
            success: function(result){
		//alert(agent_name);
		var obj = JSON.parse(result);
		 $('#name').val(obj.name);
                 $('#account').val(obj.acc_no);
		 $('#customer_id').val(obj.customer_id);
                 $('#deposited_amt').val(obj.deposited_amt);
				 $('#deposited_amt1').val(obj.deposited_amt);
		 $('#total_amt').val(obj.total_amt);
		 $('#agentid').val(obj.agent_id);
		 $('#agent').val(obj.agent_name);
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
		 $('#agentid').val(ui.item.idval);
                 $('#area').val(ui.item.area);
		}
		
        });
});
    
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
        
        $('#plans').change(function(){
        var pid=$(this).val();
       // alert(pid);
        $.ajax({
            url:"ajax_getintrestrate.php?id="+pid,
            success: function(result){
           // alert(result);
           var r=result.split("|"); 
            $('#irate').val(r[0]);
            $('#year').val(r[1]); 
            }
        });
   
    });
        
 $("#paid").blur(function(){
var paid_amt=$(this).val();
var int_rate=$('#irate').val();
var yr=$('#year').val();
var pw=(1+(int_rate/100));
var power=Math.pow(pw,yr);
var mat_amt=paid_amt*power;
var maturity_amount=Math.floor(mat_amt);
$('#mat_amt').val(maturity_amount.toFixed(2));  
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
	var mode=document.getElementById("paymentmode").value;
	var d1=document.getElementById("d1").value;
	var d2=document.getElementById("d2").value;
	var d3=document.getElementById("d3").value;
	if (mode!="cash") {
		if (d1=='') {
		    alert("Please insert the Cheque/DD No.");
		    return false;
		}
		else if(d2==''){
		    alert("Please insert the Bank Name.");
		    return false;
		}

		else if (d3=='') {
		    alert("Please insert date.");
		    return false;
		}
	}
	else{
	    document.getElementById("d1").value='';
	    document.getElementById("d2").value='';
	    document.getElementById("d3").value='';
	}
	
	var intid=document.getElementById("account").value;
	if (intid=='') {
		    alert("Please insert a Valid customer");
		    document.getElementById("acc_no").focus();
		    return false;
		}
		var agentid=document.getElementById("agentid").value;
	if (agentid=='') {
		    alert("Please insert a Valid Agent");
		    document.getElementById("agent").focus();
		    return false;
		}
    }
</script>
<style>
    .form-control{width: 300;}
</style>
<script type="text/javascript">
    function numbersonly(e){
var unicode=e.charCode? e.charCode : e.keyCode
if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
if (unicode<48||unicode>57) //if not a number
return false //disable key press
}
}
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
    <script>
	function validate() {
	var mode=document.getElementById("paymentmode").value;
	var d1=document.getElementById("d1").value;
	var d2=document.getElementById("d2").value;
	var d3=document.getElementById("d3").value;
	if (mode!="cash") {
		if (d1=='') {
		    alert("Please insert the Cheque/DD No.");
		    return false;
		}
		else if(d2==''){
		    alert("Please insert the Bank Name.");
		    return false;
		}
		else if (d3=='') {
		    alert("Please insert date.");
		    return false;
		}
	}
	else{
	    document.getElementById("d1").value='';
	    document.getElementById("d2").value='';
	    document.getElementById("d3").value='';
	}
	var intid=document.getElementById("account").value;
	if (intid=='') {
		    alert("Please insert a Valid customer");
		    document.getElementById("acc_no").focus();
		    return false;
		}
		var agentid=document.getElementById("agentid").value;
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
             <?php echo date("Y-m-d");?>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i>Compulsary Account Deposite Form</h2>

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
                <form name="arrange" action="insert_compulsarydepo.php" method="post" onSubmit="return validate();" enctype="multipart/form-data">
                     <table style="float: left;width: 100%;">
                        <tr>
                            <td colspan="4" style="color: red;font-size: 25px;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; }  ?></td>
                        </tr>
						<tr>
                            <td>A/c No</td><td style="width: 300px;"><select name="acc_no" data-placeholder="&nbsp;"  class="form-control chosen-select " required id="acc_no" style="width:300px; padding:4px;height: 100px;border-radius:4px;">
										<option value=""></option>
										<?php echo $accno;?>
									   </select></td>
                            <td>Name</td><td><input type="text" name="name" id="name" class="form-control"  required readonly></td>
			                <input type="hidden" name="account" id="account">
                            <input type="hidden" name="customer_id" id="customer_id">
							<input type="hidden" name="total_amt" id="total_amt">                           
						</tr>
                        <tr>
						     <td>Monthly Deposite Amount</td><td><input type="text" name="paidamt1" id="deposited_amt1" class="form-control" onkeyPress="return IsNumeric(event,this.value)" required readonly='true'></td>        
						</tr>
						<tr>
						     <td>Paid Amount</td><td><input type="text" name="paidamt" id="deposited_amt" class="form-control" onkeyPress="return IsNumeric(event,this.value)" required ></td>
							 <td>Agent</td><td><input type="text" name="agent" id="agent" required class="form-control"></td>
							 <input type="hidden" name="agentid" id="agentid">         
			   
						</tr>
						<tr>
							 <td>Voucher no</td><td><input type="text" name="voucher" id="voucher" value=""  onKeyPress="return numbersonly(event);"  class="form-control" required ></td>
							 <td>Mode Of Payment</td>
							 <td><select id="paymentmode" name="payment_mode" required class="form-control">
                                                                <option value="">--Select Mode of Paymet--</option>
                                                                <option value="cash">Cash</option>
                                                                <option value="dd">DD</option>
                                                                <option value="cheque">Cheque</option>
                                                        </select>
                            </td>
					  </tr>
					  <tr>
                           <td>&nbsp;</td>
							<td><input type="text" name="chqddno" id="d1" class="form-control" onKeyPress="return numbersonly(event);"  placeholder="Cheque/DD Number" style="display: none;"></td>
                           <td><input type="text" name="bank" id="d2" class="form-control"  placeholder="Name of the Bank"  style="display: none;"></td>
                           <td><input type="text" name="paydate" id="d3" class="form-control" onKeyPress="return numbersonly(event);"  placeholder="Payment Date" style="display: none;"></td>
                     </tr>
			         <tr >
                            <td align="center" colspan="4"><input type="submit" name="submit" value="Submit" /></td>
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