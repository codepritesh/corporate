<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{ header("location:index.php");}
else
{
     $currdate=date("Y-m-d");
$custmerid='<option value=""></option>';
//$getvendor=mysql_query("select * from `customer`")or die(mysql_error());
$getvendor=mysql_query("SELECT * FROM customer WHERE EXISTS (SELECT 1 FROM transaction WHERE transaction.customerid = customer.customer_id and transaction.date like '$currdate' and transaction.folio_no = '17' and transaction.productfolio = '10'  )")or die(mysql_error());
//$getvendor=mysql_query("SELECT * FROM customer WHERE EXISTS (SELECT 1 FROM transaction WHERE transaction.customerid = customer.customer_id and transaction.date like '$currdate' and transaction.folio_no = '17' and transaction.productfolio = '10'  ) and NOT EXISTS (SELECT * FROM demand_loan WHERE demand_loan.customer_id = customer.customer_id and demand_loan.is_approved='1' and demand_loan.loancomplited = 0)")or die(mysql_error());
   while($resvendor=mysql_fetch_array($getvendor))
    {
	$id=$resvendor['customer_id'];
	$qual=$resvendor['introducer'];
        $custmerid.='<option value='.$id.'>'.$resvendor['name']."(".$resvendor['customer_id'].")".'</option>';
    }
    
    $faccno=mysql_query("select max(id) as id from `fixeddeposite`");
    $rfaccno=mysql_fetch_array($faccno);
    $raccno=$rfaccno['id']+1;
   // $date=date('y');
   // echo $acc_no="F".$date.'00'.$raccno;
   $acc_no="F".$raccno;
    
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
            url:"ajax_customerdetails.php?cid="+cid,
            success: function(result){
		var obj = JSON.parse(result);
              // alert(obj.name);
		$('#custid').val(obj.customer_id);
	         $('#intid').val(obj.introducer);
                 $('#name').val(obj.name);
                 $('#dob').val(obj.dob);
                 $('#phone').val(obj.phno);
		 $("#village option[value=" + obj.village + "]").attr('selected', 'selected'); 
                 $('#address').val(obj.address);
                 $('#post').val(obj.post);
                 $('#pin').val(obj.pin);
                 $('#dist').val(obj.dist);
                 $('#photo').val(obj.photo);
                 $('#sign').val(obj.sign);
                 $('#idproof').val(obj.idproof);
                 $('#docs').val(obj.documents);
		 $('#gender').val(obj.gender);
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
		$('#laccno').hide();
		$('#loan_against_acc').change(function(){
		var acc=$(this).val();
	        var cid=$('#custid').val();
		if (acc!='') {
		   var acctype=$('#loan_against_acc option:selected').text();
		 $.ajax({
		    url:"ajax_cheakhaveacc.php?acc="+acc+"&cid="+cid,
		    success: function(result){
			// alert(result);
		    if (result=='notok') {
			alert("You Don't have any "+acctype);
			$('#loan_against_acc').val('');
			$('#laccno').hide();
			return false;
		    }else{
			$('#laccno').show();
			$('#laccno').html(result);
			//$('#loan_against_accno').val(result);
		    }
		    }
		});
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
	
		var con=confirm("Do you want to proceed?");
        if(con)
		{
		document.arrange.submit();
		}  
       else
	    {
	   return false;
	   }
    
    }
</script>
<script>
    function getir(id){
	  //alert(id);
           var pid=id;
           var tab='demandloan_plan';
          // alert(pid);
           $.ajax({
               url:"ajax_getintrest_rates.php?id="+pid+"&table="+tab,
               success: function(result){
               //alert(result);
               $('#intrate').val(result);
               }
               });
           };
</script>

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
            <?php echo date("d-m-Y");?>
        </li>
    </ul>
    
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i>Demand Loan Form</h2>

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
                <form name="arrange" action="insert_demandloan.php" method="post" onSubmit="return validate();" enctype="multipart/form-data">
                     <table style="float: left;width: 100%;">
                        <tr>
                            <td colspan="4" style="color: red;font-size: 20px;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; }  ?></td>
                        </tr>
			<tr>
                            <td>Customer_id</td><td style="width:310px;"><select name="customer" data-placeholder="&nbsp;"  class="form-control chosen-select " id="customer" style="width:307px; padding:4px;height: 100px;border-radius:4px;">
										<option value=""></option>
										<?php echo $custmerid;?>
									</select>
			    <input type="hidden" name="custid" id="custid"></td>
			    <input type="hidden" name="intid" id="intid">
			<td>Applicant Name</td><td><input type="text" name="name" id="name" class="form-control" required readonly></td>
			</tr>
			<tr>
                            <td>Village</td>
			    <td>
			    <select class="form-control" id="village" name="village" required>
				<option value="0">--Select Village--</option>
				<?php
				 $sql=mysql_query("select * from `prefix`");
				 while($res=mysql_fetch_array($sql))
				 {
				 ?>
				 <option value="<?php echo $res['slno'];?>"><?php echo $res['name'].'(Dt: '. date("d",strtotime($res[date])).')';?></option>
				 <?php
				 }
				?>
			    </select>
			    </td>
			    <td></td><td></td>
			</tr>
                        <tr>
                            <td>DOB</td><td><input type="text" name="dob" id="dob" class="form-control" required readonly></td>
			    <td>Gender</td><td><input type="text" name="gender" id="gender" class="form-control" required readonly>
			</tr>
                        <tr>
                            <td>Phone No.</td><td><input type="text" name="phone"  class="form-control" id="phone" required readonly onKeyPress="return numbersonly(event)"></td>
			    <td>Address</td><td><textarea name="address" class="form-control" id="address" required readonly></textarea></td>
		        </tr>
                        <tr>
                            <td>Post</td><td><input type="text" name="post" class="form-control" id="post" required readonly></td>
			    <td>Pin</td><td><input type="text" name="pin" class="form-control" id="pin" required readonly onKeyPress="return numbersonly(event)"></td>
                           
			</tr>
                        <tr>
			     <td>Dist</td><td><input type="text" name="dist" class="form-control" id="dist" readonly required></td>
			     <td>Nominee Name</td><td><input type="text" name="nominee" id="nominee" class="form-control" ></td>
			</tr>
			<tr id="nomdetails">
			    <td>Nominee Address</td><td><textarea name="nomaddress" class="form-control" id="nomaddress"></textarea></td>
			    <td>Nominee Relation</td><td><input type="text" name="nomrelation" id="nomrelation" class="form-control"></td>
			</tr>
			    <input type="hidden" name="photo" id="photo"  >
                            <input type="hidden" name="idproof" id="idproof"  >
                            <input type="hidden" name="sign" id="sign"  >
                            <input type="hidden" name="docs" id="docs"  >
			<tr>
			<td>Plan</td><td><select name="plan" id="plan1" onchange="return getir(this.value);" required class="form-control">
			    <option value="">--Select Plan--</option>
			    <?php   $plan=mysql_query("select * from `demandloan_plan`");
				    while($resplan=mysql_fetch_array($plan)){
			     ?>
								    <option value="<?php echo  $resplan['month'];?>"><?php echo $resplan['month'];?> Months</option>
								    <?php } ?>
								</select>
				    </td>
			<td>Rate of Intrest</td><td><input type="text" name="intrate" id="intrate" required readonly class="form-control"></td>
			</tr>
                        <tr>
                            <td>Loan Against Which A/c</td>
							<td>
								<select name="loan_against_acc" id="loan_against_acc" required class="form-control">
								    <option value="">--Select Account Type--</option>
									   <option value="dailydeposit">Daily Deposit Account</option>
								    <option value="compulsarydeposite">Compulsory Deposit Account</option> 	
								     <option value="savingaccount">Voluntary Deposit Account</option>
								    <option value="recurringdiposite">Recurring Deposit Account</option>
								    <option value="fixeddeposite">Fixed Deposit Account</option>
								    
								</select>
							</td>
			    <td>Loan Amount</td><td><input type="text" name="loanamt" id="loanamt" onkeyPress="return IsNumeric(event,this.value)" required class="form-control"  autocomplete="off"></td>
			</tr>
			
			<tr id="laccno">
			    <td>Loan Against Account Number</td><td><input type="text" name="loan_against_accno" id="loan_against_accno" readonly class="form-control"></td>
			</tr>
                        <tr >
			   
                            <td style="text-align: center;" colspan="4"><input type="submit" name="submit" value="Apply" /></td>
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