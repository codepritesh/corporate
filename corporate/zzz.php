<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{ header("location:index.php");}
else
{
    $current=date("Y-m-d");
    $annually=date("Y-01-01");
    $month=date("m");
    if($month<3){$halfyearly=date("Y-03-01");}
    else if($month>=3 && $month<9){$halfyearly=date("Y-09-01");}
    else {$halfyearly=date("Y-09-01", strtotime("+1 year", strtotime($int_cal_date)));}  
mysql_query(
            "CREATE TABLE IF NOT EXISTS `rundate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `name` varchar(10) NOT NULL,
  `int_cal_date` date NOT NULL,
  `count` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
)"
            );
mysql_query("INSERT INTO `rundate` (`id`, `date`, `name`, `int_cal_date`, `count`) VALUES
(1, '$current', 'monthly', '$current', 0),
(2, '$halfyearly', 'halfyearly', '$current', 0),
(3, '$annually', 'annualy', '$current', 0);
            ");
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
    <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
						<li>
						   <a class="ajax-link" href="#"><i class="glyphicon glyphicon-edit"></i><span> Report</span></a>
							<ul>
                                                            	<li><a href="loan_report.php?table=loan">Loan Report</a></li>
                                                                <li><a href="loan_report.php?table=agricultureloan">Agriculture Report</a></li>
                                                                <li><a href="loan_report.php?table=businessloan">Businessloan Report</a></li>
                                                                <li><a href="loan_report.php?table=demand_loan">Demand_loan Report</a></li>
                                                                <li><a href="loan_report.php?table=enterpriseloan">Enterpriseloan Report</a></li>
                                                                <li><a href="loan_report.php?table=goldloan">Goldloan Report</a></li>
                                                                <li><a href="loan_report.php?table=grouploan">Grouploan Report</a></li>
								
                                                                <li><a href="demandloan_report.php">Demand Loan Report</a></li>
								<li><a href="demandloanrefund_report.php">Demand Loan Details</a></li> 
								<li><a href="loantranreport.php?table=loan">Loan Transaction Report</a></li>
								<li><a href="demandloantranreport.php?table=demand_loan">Demand Loan Transaction Report</a></li>
								<li><a href="acc_transaction_report.php">Transaction Report</a></li>
								<li><a href="Customer_report.php">Customer Report</a></li>
								<li><a href="agent_report.php">Agent Report</a></li>
								<li><a href="link_report.php">member-customer link Report</a></li>
								
                                                                
                                                                <li><a href="demandsheet_loan.php">Demand sheet Loan</a></li>
							</ul>
                                                        <a class="ajax-link" href="#"><i class="glyphicon glyphicon-edit"></i><span> Report</span></a>
							<ul>
                                                            <li><a href="legergeneralreport.php">General Leger Report</a></li>
                                                            <li><a href="saving_acc_report.php">Voluntary Saving Report</a></li>
                                                            <li><a href="compulsory_report.php">Compulsory Report</a></li>
                                                            <li><a href="rd_report.php">RD Report</a></li>
                                                            <li><a href="dailyreport.php">Daily Report</a></li>
                                                            <li><a href="fixedreport.php">Fixed  Report</a></li>
                                                            <li><a href="savingtranreport.php?table=savingaccount">Voluntary Saving Transaction Report</a></li>
                                                            <li><a href="compulsorytranreport.php?table=compulsarydeposite">Compulsory Transaction Report</a></li>
                                                            <li><a href="rdtranreport.php?table=recurringdiposite">bankbookRD Transaction Report</a></li>
                                                            <li><a href="dailytranreport.php?table=dailydeposit">Daily Transaction Report</a></li>
                                                            <li><a href="fixedtranreport.php?table=fixeddeposite">Fixed Transaction Report</a></li>
                                                            <li><a href="loanrefund_report.php?table=grouploan">Group Loan Ledger</a></li>
                                                            <li><a href="loanrefund_report.php?table=agricultureloan">Agriculture Loan Ledger</a></li>
                                                            <li><a href="loanrefund_report.php?table=businessloan">Business Loan Ledger</a></li>
                                                            <li><a href="loanrefund_report.php?table=enterpriseloan">Enterprise loan Ledger</a></li>
                                                            <li><a href="loanrefund_report.php?table=goldloan">Gold loan Ledger</a></li>
                                                            <li><a href="loanrefund_report.php?table=loan">Loan Ledger</a></li>
                                                            <li><a href="demandloanrefund_report.php">Demand Loan Ledger</a></li>
                                                            <li><a href="">Cashbook</a></li>
                                                             <li><a href="">Cash ledger</a></li>
                                                            
                                                            <li><a href="agent_report.php">Agent Report</a></li>
                                                            <li><a href="Customer_report.php">DCR Customer Report</a></li>
							</ul>
						</li>
                    </ul>
                    <label id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox">
		    <a class="ajax-link" href="logout.php"><span> Logout </span></a>
		    </label>
                </div>
            </div>
        </div>
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
                <h2>Home Page</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content" style="float: left; width: 50%; height: auto">

	    </div>
	     <div class="box-content" style="float: left; width: 50%; height: auto;">

	    </div>
	</div>
    </div>
</div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
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