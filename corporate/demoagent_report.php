<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{ header("location:index.php");}
else
{
$getagent=mysql_query("select * from `agent` ")or die(mysql_error());
   while($resagent=mysql_fetch_array($getagent))
    {
	$getagentlist[] = array(
	'value'  => $resagent['name']."(".$resagent['id'].")",
	'idval' => $resagent['id'],
	'name' => $resagent['name'],
	'prodetails'=> $resagent['prodetails']
	);
    }
?>
<style>
    .form-control{width: 300;}
</style>
<!--autocomplete start-->
<link rel="stylesheet" href="css/jquery-ui.css">
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
 <!--autocomplete end-->
  <script type="text/javascript"> 
    $(function(){
	 //jQuery.noConflict();
        var availabledrugs=<?= json_encode($getagentlist); ?>;
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
		 $('#product').val(ui.item.prodetails);
		}
		
        });
}); 
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
    <script src="date/jquery.min.js" type="text/javascript"></script>
    <script src="date/jquery-ui.min.js" type="text/javascript"></script>
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
                <h2><i class="glyphicon glyphicon-plus"></i>Agent Report</h2>

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
                <form name="arrange" method="post"  enctype="multipart/form-data">
                     <table style="float: left;width: 100%;">
                        <tr>
                            <td colspan="3" style="color: red;font-size: 20px;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; }  ?></td>
                        </tr>
                        <tr id="bydate">
                            <td>Agent ID</td><td><input type="text" name="agent" class="form-control" id="agent" required placeholder="Agent Number"></td>
			    <input type="hidden" name="agentid" id="agentid">
                <input type="hidden" name="product" id="product">
                            <td><input type="text" name="sdate" onKeyPress="return IsNumeric(event)" class="form-control" id="sdate" placeholder="Start Date"></td>
                            <td><input type="text" name="edate" onKeyPress="return IsNumeric(event)" class="form-control" id="edate" placeholder="End Date" ></td>
                            <td align="center"><input type="submit" name="submit" value="Search" id="search" /></td>
			</tr>
                     </table>
		</form>
	    </div>
            <div class="box-content">
                <?php
                    if(isset($_POST['submit']))
                    {
                        $id=htmlentities($_POST['agentid']);
                       
                ?>
                <table >
                    <tr>
                        <th>Account</th>
                        <th>Amount </th>
						<th>Date</th>
						<th>Details</th>
						<th>Balance</th>
						<th>Due Amount</th>
                         
                    </tr>
                    <?php
                     $id=htmlentities($_POST['agentid']);
					 $product=htmlentities($_POST['product']);
                     if($_POST['sdate']!="" && $_POST['edate']!="" )
                     {  $fetchtra=mysql_query("select * from `transaction` where `agentid`='$id' and `date` BETWEEN '$_POST[sdate]' AND '$_POST[edate]'  ");}
                     else if($_POST['agentid']!="")
                     {
                        $fetchtra=mysql_query("select * from `transaction` where `agentid`='$id'");
                     }
                        while($restra=mysql_fetch_array($fetchtra))
                        {
						 $accountt=$restra['accountno'];
						 //echo $accountt.'<br/>';
						$strToFindd = "D";
						$poss = strpos($accountt, $strToFindd);
						if ($poss !== false) 
						{
						$table='dailydeposit';
						$accnt='acc_no';
						}
						$strToFindd = "CM";
						$poss = strpos($accountt, $strToFindd);
						if ($poss !== false)
						{
						$table='compulsarydeposite';
						$accnt='acc_no';
						}
						$strToFindd = "F";
						$poss = strpos($accountt, $strToFindd);
						if ($poss !== false)
						{
						$table='fixeddeposite';
						$accnt='acc_no';
						}
						$strToFindd = "S";
						$poss = strpos($accountt, $strToFindd);
						if ($poss !== false)
						{
						$table='savingaccount';
						$accnt='acc_no';
						}
						$strToFindd = "R";
						$poss = strpos($accountt, $strToFindd);
						if ($poss !== false)
						{
						$table='recurringdiposite';
						$accnt='acc_no';
						}
						$strToFindd = "L";
						$poss = strpos($accountt, $strToFindd);
						if ($poss !== false)
						{
						$table='loan';
						$accnt='loan_accno';
						}
						//echo "select * from `$table` where `$accnt`='$accountt'";
						$balance=mysql_query("select * from `$table` where `$accnt`='$accountt'");
						$resbalance=mysql_fetch_array($balance);
						if($table=='fixeddeposite' || $table=='savingaccount')
						{
						$balnce=$resbalance['deposited_amt'];
						}
						else if($table=='recurringdiposite')
						{
						$balnce=$resbalance['monthly_amount']*$resbalance['paid_installment'];
						$dueamnt=($resbalance['no_of_installment']-$resbalance['paid_installment'])*$resbalance['monthly_amount'];
						}
						else if($table=='loan')
						{
						$dueamnt=$resbalance['amount_topay'];
						}
						else
						{
						$balnce=$resbalance['total_amt'];
						$dueamnt='';
						}
                    ?>
                    <tr>
                        <td><?php echo $restra['accountno'];?></td>
                        <td><?php echo $restra['amount'];?></td>
						<td><?php echo $restra['date'];?></td>
						<td><?php echo $restra['details'];?></td>
						<td><?php echo $balnce;?></td>
						<td><?php echo $dueamnt;?></td>
                    </tr>
                    <?php }?>
                   
                </table>
                <?php }?>
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