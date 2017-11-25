<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{ header("location:index.php");}
else
{
//$table=$_GET['table'];
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
        var availabledrugs=<?php echo   json_encode($getagent); ?>;
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
    <link href="date/jquery-ui.css"
	rel="Stylesheet" type="text/css" />
	<script type="text/javascript">
        $(function () {
            $("#sdate").datepicker({
                numberOfMonths: 1,
                onSelect: function (selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() + 1);
                    $("#edate").datepicker("option", "minDate", dt);
                }
            });
            $("#edate").datepicker({
                numberOfMonths: 1,
                onSelect: function (selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() - 1);
                    $("#sdate").datepicker("option", "maxDate", dt);
                }
            });
        });
    </script>

    <!-- date picker ends -->
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
                <h2><i class="glyphicon glyphicon-plus"></i>General Leger Report</h2>

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
                <form name="arrange" method="post"  enctype="multipart/form-data">
                     <table style="float: left;width: 100%;">
                        <tr>
                            <td colspan="3" style="color: red;font-size: 20px;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; }  ?></td>
                        </tr>
                        <tr id="bydate">
			    <td>Agent</td><td><input type="text" name="agent"  id="agentnm" class="form-control" required/><input type="hidden" name="agent_id" id="agent_id"/></td>						
                            <td><input type="text" name="sdate" onKeyPress="return IsNumeric(event)" class="form-control" id="sdate" placeholder="Start Date"></td>
                            <td><input type="text" name="edate" onKeyPress="return IsNumeric(event)" class="form-control" id="edate"   placeholder="End Date" ></td>
                            <td align="center"><input type="submit" name="submit" value="Search" id="search" /></td>
			</tr>
                     </table>
		</form>
	    </div>
            <div class="box-content" id="print">
                <table class="table" id="srch" >
                    <tr>
                        <th>Date</th>
                        <th>Acc_no</th>
                        <th>Account Holder Name</th>
                        <th>Agent Code</th>
			<th>Perticulars</th>
			 <th>Voucher No </th>
                        <th>Credit Amount</th>
                        <th>DebitAmount </th>
			<th>Total Amount</th>
                    </tr>
                    <?php
                    if(isset($_POST['submit']))
                    {
                         $sdate=$_POST['sdate'];
                          $edate=$_POST['edate'];
			  $agent_id=$_POST['agent_id'];
			  if($agent_id!=""){$fetch=mysql_query("select * from `transaction` WHERE `agentid`='$agent_id'");}
			  else{
                        $value=date("Y-m-d",strtotime($sdate));
                        $value1=date("Y-m-d",strtotime($edate));
                        //echo "select * from `transaction` WHERE `date` BETWEEN '$value' AND '$value1'; ";
                        $fetch=mysql_query("select * from `transaction` WHERE `date` BETWEEN '$value' AND '$value1';");
			  }
                    }else{ $date=date("Y-m-d"); $fetch=mysql_query("select * from `transaction` where `date`='$date'");}
                    $tot=0;
		    $amt=0;
		    $total=0;
                    while($res=mysql_fetch_array($fetch))
                    {
                        $qwe=mysql_query("select * from `customer` where `customer_id`='$res[customerid]'");
                        $rscust=mysql_fetch_array($qwe);
                        $tot=$tot+$res['amount'];
			
			$agnt=mysql_query("select * from `agent` where `id`='$res[agentid]'");
                        $rsagnt=mysql_fetch_array($agnt);
			$total=$total+$tot;
                    ?>
                    <tr>
                        <td><?php echo  date("d-m-Y",strtotime($res['date']));?></td>
                        <td><?php echo  $res['accountno'];?></td>
                        <td><?php echo  $rscust['name'];?></td>
                        <td><?php echo  $rsagnt['codeno'];?></td>
			<td><?php echo  $res['details'];?></td>
			<td><?php echo  $res['voucher'];?></td>
                        <?php if($res['amount']>0){?><td><?php echo $amt=$res['amount'];?></td><td>&nbsp;</td>
                        <?php } else{?><td>&nbsp;</td><td><?php  $amt=$res['amount'];if($amt[0]=='-'){echo substr($amt, 1);}?></td><?php }?>
                        <td><?php if($tot[0]=='-'){echo substr($tot, 1);}else{echo $tot;}?></td>
                    </tr>
                    <?php }?>
		    <tr >
			<td colspan="6" style="text-align: center;">Total Amount:</td><td colspan="3"><?php echo number_format($tot, 2, '.', '');?></td>
		    </tr>
		    <tr >
			<td colspan="9" style="text-align: center;"><input type="button" value="Print" onclick="printContent('print')" /></td>
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