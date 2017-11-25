<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{ header("location:index.php");}
else
{
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
             <?php echo date("Y-m-d");?>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i>Customer account Report</h2>

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
                
		
	    </div>
            <div class="box-content">
                <table >
                    <tr>
						<th>Customer Id</th>
                        <th>Account Type</th>
						<th>Account Number</th>
						<th>Balance</th>
						<th>Account Opening Date</th>
                    </tr>
                    <tbody>
					<?php
$custid=$_GET['cid'];
$custdet=$_GET['cdet'].'('.$custid.')';
$tab1=mysql_query("SELECT * FROM  `compulsarydeposite` where `customer_id`='$custid'");
if(mysql_num_rows($tab1)>0){
while($res1=mysql_fetch_array($tab1)){
?>
<tr>
            <td><?php echo $custdet;  ?></td>
			<td><?php  echo "Cumpulsory Deposit Account"; ?></td>
            <td><?php  echo $res1['acc_no']; ?></td>
			<td><?php echo $res1['total_amt'];?></td>
			<td><?php  echo date("d-m-Y",strtotime($res1['payment_date'])); ?></td>
</tr>
    
<?php } }
$tab2=mysql_query("SELECT * FROM  `dailydeposit` where `customer_id`='$custid'");
if(mysql_num_rows($tab2)>0){
while($res2=mysql_fetch_array($tab2)){
			?>
<tr>
            <td><?php echo $custdet;  ?></td>
			<td><?php  echo "Daily Deposit Account"; ?></td>
            <td><?php  echo $res2['acc_no']; ?></td>
			<td><?php echo $res2['total_amt'];?></td>
			<td><?php  echo date("d-m-Y",strtotime($res2['payment_date'])); ?></td>
</tr>
<?php }}
$tab3=mysql_query("SELECT * FROM  `fixeddeposite` where `customer_id`='$custid'");
if(mysql_num_rows($tab3)>0){
while($res3=mysql_fetch_array($tab3)){?>
<tr>
            <td><?php echo $custdet;  ?></td>
			<td><?php  echo "Fixed Deposit Account"; ?></td>
            <td><?php  echo $res3['acc_no']; ?></td>
			<td><?php echo $res3['deposited_amt'];?></td>
			<td><?php  echo date("d-m-Y",strtotime($res3['opening_date'])); ?></td>
</tr>
<?php } }
$tab4=mysql_query("SELECT * FROM  `recurringdiposite` where `customer_id`='$custid'");
if(mysql_num_rows($tab4)>0){
while($res4=mysql_fetch_array($tab4)){?>
<tr>
            <td><?php echo $custdet;  ?></td>
			<td><?php  echo "Recurring Deposit Account"; ?></td>
            <td><?php  echo $res4['acc_no']; ?></td>
			<td><?php echo $res4['monthly_amount']*$res4['paid_installment'];?></td>
			<td><?php  echo date("d-m-Y",strtotime($res4['start_date'])); ?></td>
</tr>
<?php } }
$tab5=mysql_query("SELECT * FROM  `savingaccount` where `customer_id`='$custid'");
if(mysql_num_rows($tab5)>0){
while($res5=mysql_fetch_array($tab5)){?>
<tr>
            <td><?php echo $custdet;  ?></td>
			<td><?php  echo "Saving Account"; ?></td>
            <td><?php  echo $res5['acc_no']; ?></td>
			<td><?php echo $res5['deposited_amt'];?></td>
			<td><?php  echo date("d-m-Y",strtotime($res5['opening_date'])); ?></td>
</tr>
<?php } }
?>
					</tbody>
                   
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
</html>
<?php
}
?>