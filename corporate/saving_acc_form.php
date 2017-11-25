<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{ header("location:index.php");}
else
{
    $currdate=date("Y-m-d");
    $custmerid='<option value=""></option>';
//$getvendor=mysql_query("select * from `customer`");
//echo "SELECT * FROM customer WHERE EXISTS (SELECT 1 FROM transaction WHERE transaction.customerid = customer.customer_id and transaction.date like '$currdate' and transaction.folio_no = '17' and transaction.productfolio = '2'  )";
$getvendor=mysql_query("SELECT * FROM customer WHERE EXISTS (SELECT 1 FROM transaction WHERE transaction.customerid = customer.customer_id and transaction.date like '$currdate' and transaction.folio_no = '17' and transaction.productfolio = '2'  )")or die(mysql_error());
  while($resvendor=mysql_fetch_array($getvendor))
    {
	
	$qual=$resvendor['introducer'];
	$id=$resvendor['customer_id'];
	$com=mysql_query("select * from `compulsarydeposite`  where `customer_id`='$id'");
	if(mysql_num_rows($com)>0){
	    $vs=mysql_query("select * from `savingaccount`  where `customer_id`='$id'");
	    if(mysql_num_rows($vs)==0){
		 $custmerid.='<option value='.$id.'>'.$resvendor['name']."(".$resvendor['customer_id'].")".'</option>';
	    }
	}
	
      // $custmerid.='<option value='.$id.'>'.$resvendor['name']."(".$resvendor['customer_id'].")".'</option>';
    }
    
    $faccno=mysql_query("select max(id) as id from `savingaccount`");
    $rfaccno=mysql_fetch_array($faccno);
    $raccno=$rfaccno['id']+1;
   // $date=date('y');
   // echo $acc_no="S".$date.'00'.$raccno;
   $acc_no="S".$raccno;
    
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
            url:"ajax_custdetails.php?cid="+cid,
            success: function(result){
		//alert(result);
		var data=result.split("|");
		//alert(data);
		 $('#custid').val(data[0]);
	         $('#acc_no').val(data[1]);
                 $('#name').val(data[2]);
		 $('#gname').val(data[3]);
                 $('#dob').val(data[4]);
                 $('#phone').val(data[5]);
                 $('#address').val(data[6]);
                 $('#post').val(data[7]);
                 $('#pin').val(data[8]);
                 $('#dist').val(data[9]);
                 $('#photo').val(data[10]);
                 $('#sign').val(data[11]);
                 $('#idproof').val(data[12]);
                 $('#docs').val(data[13]);
		 $('#gender').val(data[14]);
		
		/*var obj = JSON.parse(result);
		$('#custid').val(obj.customer_id);
	         $('#intid').val(obj.introducer);
                 $('#name').val(obj.name);
		 $('#gname').val(obj.guardian_name);
                 $('#dob').val(obj.dob);
                 $('#phone').val(obj.phno);
                 $('#address').val(obj.address);
                 $('#post').val(obj.post);
                 $('#pin').val(obj.pin);
                 $('#dist').val(obj.dist);
                 $('#photo').val(obj.photo);
                 $('#sign').val(obj.sign);
                 $('#idproof').val(obj.idproof);
                 $('#docs').val(obj.documents);
		 $('#gender').val(obj.gender);*/
            }
        });  
      });
    });
</script>
<script>
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
    function del(args)
    {
         var con=confirm("Do you want to delete ?");
			if(con){
			window.location="fideddelete.php?id="+args;
			}
    }
    
    function validate() {
	var nominee=document.getElementById("nominee").value;
	var nomaddress=document.getElementById("nomaddress").value;
	var nomrelation=document.getElementById("nomrelation").value;
	if (nominee!='') {
	    if (nomaddress=='') {
		alert("You have to insert the Nominee Address...");
		document.getElementById("nomaddress").focus();
		return false;
	    }
	    if (nomrelation=='') {
		alert("You have to insert the Nominee Relationship with yours...");
		document.getElementById("nomrelation").focus();
		return false;
	    }
	}
	var mode=document.getElementById("paymentmode").value;
	var d1=document.getElementById("d1").value;
	var d2=document.getElementById("d2").value;
	var d3=document.getElementById("d3").value;
	if (mode!='') {
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
<style>
    .form-control{width: 300; }
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
<div style="float: right; color: red;">
    <?php //echo date("Y-m-d");?>
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
                <h2><i class="glyphicon glyphicon-plus"></i>Saving Voluntary Account Form</h2>

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
                <form name="arrange" action="insert_savingacc.php" method="post" onSubmit="return validate();" enctype="multipart/form-data">
                     <table style="float: left;width: 100%; height: 450px;">
                        <tr>
                            <td colspan="4" style="color: red;font-size: 25px;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; }  ?></td>
                        </tr>
			<tr>
                            <td>Customer_id</td><td style="width:310px;"><select name="customer" data-placeholder="&nbsp;"  class="form-control chosen-select " id="customer" style="width:307px; padding:4px;height: 100px;border-radius:4px;">
										<option value=""></option>
										<?php echo $custmerid;?>
									   </select>
			                        </td>
                            <td>A/c No</td><td><input type="text" id="acc_no" name="acc_no" class="form-control"  required readonly></td>
			    <input type="hidden" name="intid" id="intid">
			    <input type="hidden" name="custid" id="custid">
			</tr>
                        <tr>
                            <td>Applicant Name</td><td><input type="text" name="name" id="name" class="form-control" required readonly ></td>
                             <td>Guardian Name</td><td><input type="text" name="gname" id="gname" class="form-control" required readonly></td>
                            
			</tr>
                        <tr>
                            <td>DOB</td><td><input type="text" name="dob" id="dob" class="form-control" required readonly></td>
                           <td>Gender</td><td><input type="text" name="gender" id="gender" class="form-control"  readonly>
                            
                        </tr>
                        <tr>
                            <td>Phone No.</td><td><input type="text" name="phone"  class="form-control" id="phone" required readonly onKeyPress="return numbersonly(event)"></td>
                            <td>Address</td><td><textarea name="address" class="form-control" id="address" readonly required></textarea></td>
                            
			</tr>
                        <tr>
                            <td>Post</td><td><input type="text" name="post" class="form-control" id="post" readonly required></td>
			    <td>Pin</td><td><input type="text" name="pin" class="form-control" id="pin" required readonly onKeyPress="return numbersonly(event)"></td>
                            
			</tr>
			    <input type="hidden" name="photo" id="photo"  >
                            <input type="hidden" name="idproof" id="idproof"  >
                            <input type="hidden" name="sign" id="sign"  >
                            <input type="hidden" name="docs" id="docs"  >
                        <tr>
			    <td>Dist</td><td><input type="text" name="dist" class="form-control" id="dist" required readonly></td>
                            <td>Nominee Name</td><td><input type="text" name="nominee" id="nominee" autocomplete='off'  class="form-control"></td>
			</tr>
			<tr id="nomdetails">
			    <td>Nominee Address</td><td><textarea name="nomaddress" class="form-control" autocomplete='off'  id="nomaddress"></textarea></td>
			    <td>Nominee Relation</td><td><input type="text" name="nomrelation" id="nomrelation"  autocomplete='off' class="form-control"></td>
			</tr>
                        <tr>
			    <input type="hidden" name="year" id="year">
			    <?php $int=mysql_query("select * from `savingscheme`");
				    $resint=mysql_fetch_array($int);
				    $ir=$resint['intrestrate'];
			    ?>
                            <td>Intrest Rate</td><td><input type="text" name="irate" id="irate" value="<?php echo $ir;?>" class="form-control" required readonly></td>
			    <!--<td>Deposite Amount</td><td><input type="text" name="paidamt" id="paid" class="form-control" onkeyPress="return IsNumeric(event,this.value)" ></td>-->
			</tr>
                        <tr style="display: none;">
			    <td>Voucher no</td><td><input type="text" name="voucher" id="voucher" value=""  onKeyPress="return numbersonly(event);"  class="form-control" ></td>
                            <td>Mode Of Payment</td><td colspan="3"><select id="paymentmode" name="payment_mode"  class="form-control">
                                                                <option value="">--Select Mode of Paymet--</option>
                                                                <option value="cash">Cash</option>
                                                                <option value="dd">DD</option>
                                                                <option value="cheque">Cheque</option>
                                                        </select>
                                                    </td>
			</tr>
                        
                       <tr>
                           <td>&nbsp;</td>
			   <td><input type="text" name="chqddno" id="d1" class="form-control" autocomplete='off'  onKeyPress="return numbersonly(event);"  placeholder="Cheque/DD Number" onKeyPress="return numbersonly(event)" style="display: none;"></td>
                           <td><input type="text" name="bank" id="d2" class="form-control"  autocomplete='off'  placeholder="Name of the Bank"  style="display: none;"></td>
                           <td><input type="text" name="paydate" id="d3" class="form-control"  autocomplete='off'  placeholder="Payment Date" style="display: none;"></td>
                        </tr>
                        
                        <tr>
                            <td colspan="4">&nbsp;</td>
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