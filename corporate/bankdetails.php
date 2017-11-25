<?php
include_once("function.php");
ini_set("display_errors",1);
if(!isset($_SESSION['user']))
{
     header("location:index.php");
}
else
{
if(isset($_POST['submit']))
{
     
     $bank=htmlentities($_POST['bank']);
     $date=date("Y-m-d",strtotime(htmlentities($_POST['date'])));
     $amount=htmlentities($_POST['amount']);
     $type=htmlentities($_POST['type']);
     $payment_mode=htmlentities($_POST['payment_mode']);
     $d1=htmlentities($_POST['d1']);
     $d2=htmlentities($_POST['d2']);
     $d3=htmlentities($_POST['d3']);
     $voucher=htmlentities($_POST['voucher']);
    if($type=='deposit'){
         mysql_query("insert into `bankdetails` set `bankname`='$bank',`date`='$date',`amount`='$amount',
                `type`='$type',`payment_mode`='$payment_mode',`ch_dd_no`='$d1',`ch_dd_bankname`='$d2',
                `ch_dd_date`='$d3',`voucher`='$voucher'");
    }else{
        mysql_query("insert into `bankdetails` set `bankname`='$bank',`date`='$date',`amount`='-$amount',
                `type`='$type',`payment_mode`='$payment_mode',`ch_dd_no`='$d1',`ch_dd_bankname`='$d2',
                `ch_dd_date`='$d3',`voucher`='$voucher'");
    }
   
    $msg="successfully inserted...";
   
header("location:bankdetails.php?msg=$msg");
}

?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <meta name="viewport">
    <meta name="description" >
    <meta name="author">
   <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
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
<!-- date picker starts -->
	<link href="fullcalendar/dist/fullcalendar.css" rel='stylesheet'>
	<link href="fullcalendar/dist/fullcalendar.print.css" rel='stylesheet' media='print'>
	
	<link href="css/jsDatePick_ltr.min.css" rel='stylesheet'>
	<script src="js/js/jsDatePick.min.1.3.js"></script>
	<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"date",
			dateFormat:"%d-%m-%Y"
			
		});
		
	};
   </script>
        
<script>
    $(function(){
        $('#paymentmode').change(function(){
        var mode=$(this).val();
        //alert(mode);
        if (mode!='') {
            if(mode!='cash'){
           document.getElementById('d1').style.display='block';
            document.getElementById('d2').style.display='block';
            document.getElementById('d3').style.display='block';
        }else{
            document.getElementById('d1').style.display='none';
            document.getElementById('d2').style.display='none';
            document.getElementById('d3').style.display='none';
        }
        }
        else{
            document.getElementById('d1').style.display='none';
            document.getElementById('d2').style.display='none';
            document.getElementById('d3').style.display='none';
        }
        });
    });
</script>
<script>
    function del(args)
    {
         var con=confirm("Do you want to delete ?");
			if(con){
			window.location="bankdelete.php?id="+args;
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
        
  function numbersonly(e){
var unicode=e.charCode? e.charCode : e.keyCode
if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
if (unicode<48||unicode>57) //if not a number
return false //disable key press
}
}
</script>
<script type="text/javascript">
function validate() {
	
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
			target:"date",
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
            theme selector ends 
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
                <h2><i class="glyphicon glyphicon-plus"></i> Add Bank Details</h2>

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
                            <span style="color: red;font-size: 20px;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; }  ?></span>
                <form name="arrange" action="#" method="post" onSubmit="return validate();" enctype="multipart/form-data">
                     <table style="float: left;width: 100%;">
                        
			<tr>
                            <td style="width:150px;">Bank Name</td><td style="width:300px;"><select name="bank" data-placeholder="&nbsp;"  class="form-control" id="bank" style="width:307px; padding:4px;border-radius:4px;">
										<option value="">-------- CHOOSE BANK --------</option>
                                                                               <?php   $fetprefix=mysql_query("select * from `bank`");
                                                                                        while($rprefix=mysql_fetch_array($fetprefix)) {
                                                                                ?>
                                                                                <option value="<?php echo $rprefix['bankname']; ?>"><?php echo $rprefix['bankname']; ?></option>
                                                                                <?php } ?>
									   </select>
			                        </td>
                            <td style="width:100px;">Date</td>
                            <td><input type="text" name="date" id="date" class="form-control" style="width:300px;"  autocomplete='off' onkeyPress="return IsNumeric(event,this.value)" required></td>
			</tr>
                        <tr>
                            <td>Amount</td><td><input type="text" name="amount" id="amount" autocomplete="off" class="form-control" required onKeyPress="return IsNumeric(event);" ></td>
                            <td colspan="2">Deposit  <input type="radio" name="type" value="deposit"> Withdrawl <input type="radio" name="type" value="withdrawl"></td>
                        </tr>
                        <tr>
                            <td>Mode Of Payment</td><td><select id="paymentmode" name="payment_mode"  class="form-control">
                                                                <option value="">--Select Mode of Paymet--</option>
                                                                <option value="cash">Cash</option>
                                                                <option value="dd">DD</option>
                                                                <option value="cheque">Cheque</option>
                                                        </select>
                                                    </td>
                            <td>Voucher No</td>
                            <td><input type="text" name="voucher" id="voucher" class="form-control" style="width:300px;"  autocomplete='off' onkeyPress="return IsNumeric(event,this.value)" required></td>
			</tr>
                        
                       <tr>
                           <td>&nbsp;</td>
			   <td><input type="text" name="d1" id="d1" class="form-control" autocomplete='off'  onKeyPress="return numbersonly(event);"  placeholder="Cheque/DD Number" onKeyPress="return numbersonly(event)" style="display: none;"></td>
                           <td><input type="text" name="d2" id="d2" class="form-control"  autocomplete='off'  placeholder="Name of the Bank"  style="display: none;"></td>
                           <td><input type="text" name="d3" id="d3" class="form-control"  autocomplete='off'  placeholder="Payment Date" style="display: none;"></td>
                        </tr>
                        <tr >
                            <td>&nbsp;</td>
			    <td>&nbsp;</td>
                            <td align="center" colspan="2"><input type="submit" name="submit" value="Submit" /></td>
			</tr>
			
                     </table>
		</form>
	    </div>
<div class="box-content" style="display: none;">
                <table>
                    <tr>
                        <th>Sl No.</th>
                        <th>Bank Name</th>
                        <th colspan="2">Action</th>
                    </tr>
                    <?php
                    $i=0;
                    $fetprefix=mysql_query("select * from bank");
                    while($rprefix=mysql_fetch_array($fetprefix))
                    {
                        $i++;
                    ?>
                    <tr>
                        <td><?php echo  $i;?></td>
                        <td><?php echo  $rprefix['bankname'];?></td>
                        <td><a href="bankedit.php?id=<?= $rprefix['id'];?>" style="color: #009999;">EDIT</a></td>
                        <td><span onClick="return del(<?= $rprefix['id'];?>);" style="color: #009999;">DELETE</span></td>
                    </tr>
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