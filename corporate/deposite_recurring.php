<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{ header("location:index.php");}
else
{
    $currdate=date("Y-m-d");
$custmerid='<option value=""></option>';
//$getvendor=mysql_query("SELECT * FROM customer") or die(mysql_error());
$getvendor=mysql_query("SELECT * FROM customer WHERE EXISTS (SELECT 1 FROM transaction WHERE transaction.customerid = customer.customer_id and transaction.date like '$currdate' and transaction.folio_no = '17' and transaction.productfolio = '3'  )")or die(mysql_error());
   while($resvendor=mysql_fetch_array($getvendor))
    {
	

	$id=$resvendor['customer_id'];
	$qual=$resvendor['introducer'];
        $custmerid.='<option value='.$id.'>'.$resvendor['name']."(".$resvendor['customer_id'].")".'</option>';
    }
    
    
    $faccno=mysql_query("select max(id) as id from `recurringdiposite`");
    $rfaccno=mysql_fetch_array($faccno);
    $raccno=$rfaccno['id']+1;   
	
	
	 //$sqlagent=mysql_query("select * from `agent` where `prodetails`='Reccuring Deposit'");
	 $sqlagent=mysql_query("select * from `agent`")or die(mysql_error());
	 while($resagent=mysql_fetch_array($sqlagent))
		{
		 $getagent[] = array(
		'value'  =>$resagent['name'].'('.$resagent['prefix'].$resagent['codeno'].')',
		'idval' => $resagent['id']
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
	$('#customer').change(function(){
	var cid=$(this).val();
	//alert(cid);
        $.ajax({
            url:"ajax_customerdetails.php?cid="+cid,
            success: function(result){
		var obj = JSON.parse(result);
                 // alert(obj.gname);
                 $('#custid').val(obj.customer_id);
		 $('#intid').val(obj.introducer);
                 $('#annual').val(obj.annual);
                 $('#name').val(obj.name);
                 $('#gname').val(obj.guardian_name);
                 $('#dob').val(obj.dob);
                 $('#address').val(obj.address);
                 $('#post').val(obj.post);
                 $('#pin').val(obj.pin);
                 $('#dist').val(obj.dist);
                 $('#age').val(obj.age);
                 //$('#nominee').val(obj.nominee);
                 $('#annual').val(obj.annual_income);
                 $('#id_proof').val(obj.idproof);
                 $('#photo').val(obj.photo);
		 $('#phno').val(obj.phno);
                 $('#sign').val(obj.sign);
                 $('#documents').val(obj.documents);
		 $('#gender').val(obj.gender);
		}
		 });
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
<script>
    function del(args)
    {
         var con=confirm("Do you want to delete ?");
			if(con){
			window.location="fideddelete.php?id="+args;
			}
    }
    function chan(pid)
    {
	//alert(pid);
	$.ajax({
            url:"fixedajax.php?id="+pid,
            success: function(result){
            //alert(result);
           var r=result.split("|"); 
            $('#intrest').val(r[0]);
            $('#timeperiod').val(r[1]);
	    $('#monthly').val(r[2]); 
            }
        });
    }
    
    
    
    
        $(function(){
		 $("#nomdetails").hide();
	$('#nominee').blur(function(){
	    var nom=document.getElementById('nominee').value;
	  if(nom!=''){
	    $("#nomdetails").show();
	    }
	    else{
		$("#nomdetails").hide();
		$("#nomaddress").val('');
		$("#nomrelation").val('');
	    }
	});
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


  function numbersonly(e){
var unicode=e.charCode? e.charCode : e.keyCode
if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
if (unicode<48||unicode>57) //if not a number
return false //disable key press
}
}
</script>
<script>
    function validateform()
    {
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
		var intid=document.getElementById("custid").value;
	if (intid=='') {
		    alert("Please insert a Valid customer");
		    document.getElementById("customer").focus();
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
<script  type='text/javascript'>
function numbersonly(e){
var unicode=e.charCode? e.charCode : e.keyCode
if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
if (unicode<48||unicode>57) //if not a number
return false //disable key press
}
var monthly=$('#monthly').val();
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
<style>
    .form-control{width: 300;}
</style>
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
             <?php echo date("Y-m-d");?>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i>Create Recurring Deposite</h2>

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
                <form name="arrange" action="deposite_recurring_action.php" onSubmit="return validateform();" method="post" enctype="multipart/form-data">
                     <table style="float: left;width: 100%; height: 450px;">
					 <tr>
                            <td colspan="4" style="color: red;font-size: 20px;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; }  ?></td>
                        </tr>
			         <tr>
                            <td>Customer_id</td><td style="width:310px;"><select name="customer" data-placeholder="&nbsp;"  class="form-control chosen-select " id="customer" style="width:307px; padding:4px;height: 100px;border-radius:4px;">
										<option value=""></option>
										<?php echo $custmerid;?>
									   </select>
			    </td>
                            <td>Applicant Name</td><td><input type="text" name="name" id="name" class="form-control" readonly="true" required></td>
                            <input type="hidden" name="custid" id="custid">
                            <input type="hidden" name="intid" id="intid">
                            <input type="hidden" name="id_proof" id="id_proof">
                            <input type="hidden" name="photo" id="photo">
                            <input type="hidden" name="sign" id="sign">
                            <input type="hidden" name="documents" id="documents">
			</tr>
                        <tr>
                            <td>A/c No</td><td><input type="text" name="accno" value="R<?php echo $raccno;?>" class="form-control" readonly="true" required></td>
                            <td>Guardian Name</td><td><input type="text" name="gname" id="gname" class="form-control" readonly="true" required></td>
			</tr>
                        <tr>
			    <td>DOB</td><td><input type="text" name="dob" id="dob" class="form-control" readonly="true" required></td>
                            <td>Gender</td><td><input type="text" name="gender" id="gender" class="form-control" readonly="true" required>
			</tr>
                        <tr>
			    <td>Phone No.</td><td><input type="text" name="pno" id="phno" class="form-control" readonly="true"   required></td>
                            <td>Address</td><td><input type="text" name="address" id="address" class="form-control" readonly="true" required></td>
			</tr>
                        <tr>
			    <td>Post</td><td><input type="text" name="post" id="post" class="form-control" readonly="true" required></td>
                            <td>Pin</td><td><input type="text" name="pin" id="pin" class="form-control" readonly="true" required></td>
			</tr>
                        <tr>
			    <td>Dist</td><td><input type="text" name="dist" id="dist"  class="form-control" readonly="true" required></td>
                            <td>Age</td><td><input type="text" name="age" id="age" class="form-control" readonly="true" required></td>
			</tr>
                        <tr>
			    <td>Annual income</td><td><input type="text" name="annual" onkeyPress="return IsNumeric(event,this.value)" id="annual" class="form-control" required></td>
                           <td>Nominee Name</td><td><input type="text" name="nominee"  autocomplete='off'  id="nominee" class="form-control" ></td>
			</tr>
			<tr id="nomdetails">
			    <td>Nominee Address</td><td><textarea name="nomaddress" autocomplete='off'  class="form-control" id="nomaddress"></textarea></td>
			    <td>Nominee Relation</td><td><input type="text" name="nomrelation" autocomplete='off'  id="nomrelation" class="form-control"></td>
			</tr>
                        <tr>
                            <td>Plan</td>
                            <td>
                                <input type="hidden" name="timeperiod" id="timeperiod" value="">
                                <select name="plan" id="plan" onChange="chan(this.value)" class="form-control" >
                                    <option>select</option>
                                    <?php
                            $fplan=mysql_query("select * from `recurringdipositescheme`");
                            while($resplan=mysql_fetch_array($fplan))
                            {
                            ?>
                                    <option value="<?php echo $resplan['id'];?>"><?php echo $resplan['timeperiod'];?>Month</option>
                            <?php }?>
                                </select>
                            </td>
                            <td>Intrest rate</td><td><input type="text" name="intrest" id="intrest" readonly="true" class="form-control" required></td>
			</tr>
                        <tr>
			   <!-- <td>Monthly Amount</td><td><input type="text" onKeyPress="return numbersonly(event)" name="monthly" id="monthly" readonly="true" class="form-control" required></td>-->
                            <td>Deposite Amount</td>
			    <td>
				<select name="monthly" class="form-control" required>
				    <option>select</option>
				    <?php
				    $fetchmonthly=mysql_query("select * from `set_deposit_amt` where `scheme_id`='2'");
				    while($rmonthly=mysql_fetch_array($fetchmonthly))
				    {
				    ?>
				    <option value="<?php echo $rmonthly['amount'];?>"><?php echo $rmonthly['amount'];?></option>
				    <?php }?>
				</select>
			    </td>
                             <td>Voucher no</td><td><input type="text" name="voucher" id="voucher" value="" autocomplete='off'   onKeyPress="return numbersonly(event);"  class="form-control" required ></td>
                        </tr>
                        <tr>
                            <td>Mode Of Payment</td><td><select id="paymentmode" name="payment_mode" required class="form-control">
                                                                <option value="">--Select Mode of Paymet--</option>
                                                                <option value="cash">Cash</option>
                                                                <option value="dd">DD</option>
                                                                <option value="cheque">Cheque</option>
                                                        </select>
                                                    </td>
							<td>Agent</td>
							<td>
							<input type="text" name="agent" id="agentnm" class="form-control" required/>
							<input type="hidden" name="agent_id" id="agent_id"/>
							</td>
			</tr>
                        
                        <tr>
                           <td>&nbsp;</td>
			   <td><input type="text" name="d1" id="d1" class="form-control" autocomplete='off'  onKeyPress="return numbersonly(event);" placeholder="Cheque/DD Number" style="display: none;"></td>
                           <td><input type="text" name="d2" id="d2" class="form-control"  autocomplete='off'  placeholder="Name of the Bank"  style="display: none;"></td>
                           <td><input type="text" name="d3" id="d3" class="form-control"  autocomplete='off' onKeyPress="return numbersonly(event);"  placeholder="Payment Date" style="display: none;"></td>
                        </tr>
                        <tr>
                            <td style="text-align: center;" colspan="4"><input type="submit" name="submit" value="submit"></td>
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
</html><?php } ?>