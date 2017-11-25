<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{ header("location:index.php");}
else
{
$getvendor=mysql_query("select * from `customer`")or die(mysql_error());
//$getvendor=mysql_query("SELECT * FROM customer WHERE NOT EXISTS (SELECT 1 FROM fixeddeposite WHERE fixeddeposite.customer_id = customer.customer_id)")or die(mysql_error());
   while($resvendor=mysql_fetch_array($getvendor))
    {
	$getemvendor[] = array(
	'value'  => $resvendor['name']."(".$resvendor['customer_id'].")",
	'idval' => $resvendor['customer_id'],
	'intid' => $resvendor['introducer'],
	'name' => $resvendor['name'],
        'dob' => $resvendor['dob'],
        'gender' => $resvendor['gender'],
	'phone' => $resvendor['phno'],
        'address' => $resvendor['address'],
        'post' => $resvendor['post'],
        'pin' => $resvendor['pin'],
        'dist' => $resvendor['dist'],
	'photo' => $resvendor['photo'],
        'sign' => $resvendor['sign'],
        'idproof' => $resvendor['idproof'],
        'documents' => $resvendor['documents']
        
	);
    }
    
    $faccno=mysql_query("select max(id) as id from `fixeddeposite`");
    $rfaccno=mysql_fetch_array($faccno);
    $raccno=$rfaccno['id']+1;
   // $date=date('y');
   // echo $acc_no="F".$date.'00'.$raccno;
   $acc_no="F".$raccno;
    
?>
<!--autocomplete start-->
<link rel="stylesheet" href="css/jquery-ui.css">
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
 <!--autocomplete end-->
  <script type="text/javascript"> 
    $(function(){
	 //jQuery.noConflict();
        var availabledrugs=<?= json_encode($getemvendor); ?>;
        $('#customer').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
		 $('#customer').val(valshow);
		 $('#custid').val(ui.item.idval);
		 $('#intid').val(ui.item.intid);
                 $('#name').val(ui.item.name);
                 $('#dob').val(ui.item.dob);
                 $('#phone').val(ui.item.phone);
                 $('#address').val(ui.item.address);
                 $('#post').val(ui.item.post);
                 $('#pin').val(ui.item.pin);
                 $('#dist').val(ui.item.dist);
                 $('#photo').val(ui.item.photo);
                $('#sign').val(ui.item.sign);
                $('#idproof').val(ui.item.idproof);
                $('#docs').val(ui.item.documents);
				$('#gender').val(ui.item.gender);
               // var gender=ui.item.gender;
               // if (gender=='male') {$('input:radio[name=gender]')[0].checked = true; }
               // if (gender=='female') {$('input:radio[name=gender]')[1].checked = true; }
		}
		
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
	    var paid_amt=$("#paid").val();
	    var int_rate=$('#irate').val();
	    var yr=$('#year').val();
	    var pw=(1+(int_rate/100));
	    var power=Math.pow(pw,yr);
	    var mat_amt=paid_amt*power;
	    var maturity_amount=Math.floor(mat_amt);
	    $('#mat_amt').val(maturity_amount.toFixed(2));  
            }
        });
	
    });
        
 $("#paid").change(function(){
var paid_amt=$(this).val();
var int_rate=$('#irate').val();
var yr=$('#year').val();
var pw=(1+(int_rate/100));
var power=Math.pow(pw,yr);
var mat_amt=paid_amt*power;
var maturity_amount=Math.floor(mat_amt);
$('#mat_amt').val(maturity_amount.toFixed(2));  
});

$("#mat_amt").click(function(){
var paid_amt=$("#paid").val();
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
	var intid=document.getElementById("intid").value;
	if (intid=='') {
		    alert("Please insert a Valid customer");
		    document.getElementById("customer").focus();
		    return false;
		}
    
    }
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
                <h2><i class="glyphicon glyphicon-plus"></i>Loan Approve</h2>

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
                <table class="table">
                    <tr>
                        <th>Customer Id</th>
                        <th>Account Holder Name</th>
			<th>Loan Amount</th>
                        <th>Applied Date</th>
                        <th>Details</th>
                    </tr>
                    <?php
                    $fetch=mysql_query("select * from `demand_loan` where `is_approved`='0'");
                    while($res=mysql_fetch_array($fetch) or die(mysql_error()))
                    {
                    ?>
                    <tr>
                        <td><?php echo  $res['customer_id'];?></td>
                        <td><?php echo $res['name'];?></td>
			<td><?php echo $res['loan_amt'];?></td>
                        <td><?php echo date("d-m-Y",strtotime($res['date']));?></td>
			<td><a href="demandloan_details.php?id=<?php echo $res['id'];?>">Details</a></td>
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