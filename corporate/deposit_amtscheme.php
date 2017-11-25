<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{ header("location:index.php");}
else
{
?>
<!--autocomplete start-->
<link rel="stylesheet" href="css/jquery-ui.css">
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
 <!--autocomplete end-->
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
        <script>
            $(function(){
            $("#fixed").hide();
            $("#rd").hide();
	    $("#daily").hide();
	    $("#compulsory").hide();
            $('#scheme').change(function(){
            var scheme=$(this).val();
            //alert(scheme);
            if (scheme!='') {
                    if(scheme==1){
                    $("#fixed").show();
                    $("#rd").hide();
		    $("#daily").hide();
		    $("#compulsory").hide();
                    }
		    else if(scheme==2){
                    $("#rd").show();
                    $("#fixed").hide();
		    $("#daily").hide();
		    $("#compulsory").hide();
                    }
			 else if(scheme==3){
		    $("#daily").show();
                    $("#rd").hide();
                    $("#fixed").hide();
		    $("#compulsory").hide();
                    }
		  else{
		    $("#compulsory").show();
                    $("#rd").hide();
		    $("#daily").hide();
                    $("#fixed").hide();
                    }
            }else{
                 $("#fixed").hide();
                 $("#rd").hide();
		$("#daily").hide();
		$("#compulsory").hide();
            }
            });
            });
        </script>
<script>
    function del(args)
    {
         var con=confirm("Do you want to delete ?");
			if(con){
			window.location="depodelete.php?id="+args;
			}
    }
	function validate(){
	 var int=document.getElementById("fixed1").value;
	 var int1=document.getElementById("rd1").value;
	 var int2=document.getElementById("daily1").value;
	 var int3=document.getElementById("compulsory1").value;
	
	if(parseInt(int)==0)
	{
	alert("Value can't be 0 ..");
	document.getElementById("fixed1").value="";
	document.getElementById("fixed1").focus();
	return false;
	
    }
	else if(parseInt(int1)==0)
	{
	alert("Value can't be 0 ..");
	document.getElementById("rd1").value="";
	document.getElementById("rd1").focus();
	return false;
    }
	else if(parseInt(int2)==0)
	{
	alert("Value can't be 0 ..");
	document.getElementById("daily1").value="";
	document.getElementById("daily1").focus();
	return false;
    }
	else if(parseInt(int3)==0)
	{
	alert("Value can't be 0 ..");
	document.getElementById("compulsory1").value="";
	document.getElementById("compulsory1").focus();
	return false;
    }
    
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
            <a class="navbar-brand" href="#">
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
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i>Set Deposit Amount</h2>

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
                <form name="arrange" action="insert_amt.php" method="post" onSubmit="return validate();" enctype="multipart/form-data">
                     <table style="float: left;width: 100%;">
                        <tr>
                            <td style="color: red;font-size: 20px;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; }  ?></td>
                        </tr>
                        <tr>
                            <td>Scheme<select id="scheme" name="scheme" required class="form-control">
                                                                <option value="">--Select Scheme--</option>
                                                                <option value="1">Fixed Deposit</option>
                                                                <option value="2">Reccuring Deposit</option>
								<option value="3">Daily Deposit</option>
								<option value="4">Compulsory Deposit</option>
                                                        </select>
                                                    </td>
			</tr>
                        <tr id="fixed">
                            <td><input type="text" name="fixed" id="fixed1"  class="form-control" autocomplete="off"    onKeyPress="return numbersonly(event)"  style="width: 100;float: left;"><span style="float: left; margin-top: 10px;">*1000/-</span></td>
			</tr>
                        <tr id="rd">
                            <td><input type="text" name="rd" id="rd1" class="form-control"  autocomplete="off"  onKeyPress="return numbersonly(event)"  style="width: 100;float: left;"><span style="float: left;margin-top: 10px;">*100/-</span></td>
			</tr>       
			<tr id="daily">
                            <td><input type="text" name="daily" id="daily1" class="form-control"  autocomplete="off"  onKeyPress="return numbersonly(event)"  style="width: 100;float: left;"><span style="float: left;margin-top: 10px;">*10/-</span></td>
			</tr>
			<tr id="compulsory">
			<?php
                    $fetch1=mysql_query("select * from `set_deposit_amt` where `scheme_id`='4'");
                   $sol=mysql_fetch_array($fetch1) or die(mysql_error());
                    
                    ?>
                            <td><input type="text" name="compulsory" id="compulsory1"  autocomplete="off"   value="<?php echo $sol['amount']; ?>" class="form-control" onKeyPress="return numbersonly(event)" style="width: 100;float: left;"></td>
			</tr>
                        <tr >
                            <td align="center"><input type="submit" name="submit" value="Submit" /></td>
			    
			</tr>
                     </table>
		</form>
	    </div>
            <div class="box-content">
                <table class="table">
                    <tr>
                        <th>Scheme</th>
                         <th>Amount</th>
                         <th>Action</th>
                    </tr>
                    <?php
                    $fetch=mysql_query("select * from `set_deposit_amt`");
                    while($res=mysql_fetch_array($fetch) or die(mysql_error()))
                    {
                    ?>
                    <tr>
                        <td><?php echo  $res['scheme'];?></td>
                        <td><?php echo  $res['amount'];?></td>
                        <td><span style="cursor: pointer;" onClick="return del(<?php echo  $res['id'];?>);" style="color: #009999;">DELETE</span></td>
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