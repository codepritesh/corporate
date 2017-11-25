<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{ header("location:index.php");}
else
{
if(isset($_POST['submit']))
{
    $table=$_POST['table'];
    $accno=$_POST['accno'];
    $security_det=$_POST['security_det'];
    $security_acc=$_POST['security_acc'];
    $loan_against_acc=$POST['loan_against_acc'];
    mysql_query("update $table set `loan_against_acc`='$loan_against_acc',`loan_against_accno`='$security_acc',`details`='$security_det' where `loan_accno`='$accno'")or die(mysql_error());
    
}
?>
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
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
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
function validate()
{
   /* var int=document.getElementById("interest").value;
    if (parseFloat(int)==0) {
	alert("Intrest rate can't be 0 ..");
	return false;
    }*/
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
    $(function(){
        $('#loan_against_acc').change(function(){
        var agnstacc=$(this).val();
        var accno=$('#accno').val();
        var table=$('#table').val();
        //alert(accno);
        if(accno!='')
        {
        if (agnstacc=="other")
        {
             $('#security_det').show();
              $('#security_acc').hide();
        }else{
            $('#security_det').hide();
            $('#security_acc').show();
            $.ajax({
                url:"ajax_security.php?table="+table+"&accno="+accno+"agnstacc="+agnstacc,
                success:function(result)
                {
                    alert(result);
                    if(result==0)
                    {
                        alert("Please give a valid acc no.");
                        $('#accno').val("").focus();
                    }
                    else if(result==1)
                    {
                        alert("You don't have "+agnstacc+" account.");
                        $('#loan_against_acc').val("").focus();
                    }
                    else{
                         $('#security_acc').val(result);
                    }
                }
            });
           
        }
           
        }else
        {
            alert("Please give your acc no.");
            $('#accno').focus();
        }
        
        });
    });
</script>
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
                <h2><i class="glyphicon glyphicon-plus"></i>Loan Disbursement</h2>

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
                <form name="arrange" action="" method="post" onSubmit="return validate();" enctype="multipart/form-data">  
                    <table style="float: left;width: 100%;">
                                                <tr>
                            <td colspan="4" style="color: red;font-size: 20px;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; }  ?></td>
                        </tr>
                        <tr>
                            <td>Loan Type</td>
                            <td>
                                <select class="form-control" required id="table" name="table">
                                        <option value="agricultureloan">Agriculture Loan</option>
                                        <option value="businessloan">Business Loan</option>
                                        <option value="demand_loan">Demand Loan</option>
                                        <option value="enterpriseloan">Enterprise Loan</option>
                                        <option value="goldloan">Gold Loan</option>
                                        <option value="grouploan">Group Loan</option>
                                </select>
                            </td>
                            <td>Acc No.</td>
                            <td><input type="text" name="accno" id="accno" value="" class="form-control" required></td>
                            
                        </tr>
                        <tr>
                           <td>Loan Against Which A/c</td>
                           <td>
                                <select name="loan_against_acc" id="loan_against_acc" required class="form-control">
				    <option value="">--Select Account Type--</option>
				    <option value="compulsarydeposite">Compulsory Deposit Account</option>
				    <option value="savingaccount">Voluntary Deposit Account</option>
				    <option value="dailydeposit">Daily Deposit Account</option>
				    <option value="fixeddeposite">FixedDeposit Account</option>
                                    <option value="other">Other</option>
				</select>
                           </td>
                           
                                <td>Security Account No.</td>
                                <td>
                                    <input type="text" name="security_acc" id="security_acc" readonly class="form-control">
                                    <textarea style="display: none;" name="security_det" id="security_det" class="form-control"></textarea>
                                </td>
                               
                           
                        </tr>
                        
                        <tr>
                            <td colspan="4" style="text-align: center;"><input type="submit" name="submit" value="submit"></td>
			</tr>
                    </table>
		</form>
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
</html><?php } ?>