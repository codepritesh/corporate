<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{ header("location:index.php");}
else
{
$cdate=date("Y-m-d");
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

         
        <!-- date picker starts -->
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
	   
<script>
    function printContent(el){
	    var restorepage = document.body.innerHTML;
	    //alert(document.getElementById(el).innerHTML);
	    var printcontent = document.getElementById(el).innerHTML;
	    document.body.innerHTML = printcontent;
	    window.print();
	    document.body.innerHTML = restorepage;
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
                <h2><i class="glyphicon glyphicon-plus"></i>Savings Report</h2>

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
								<td>Select Type</td>
                            <td>
                                <select requried class="form-control" name="table">
                                <option value="">---Select Any One ---</option>					
                                <option value="compulsarydeposite">Compulsary Savings</option>
                                <option value="recurringdiposite">RD Savings</option>
                                <option value="dailydeposit">Daily Deposit</option>
                                <option value="fixeddeposite">Fixed Deposit</option>
                                <option value="savingaccount">Voluntary Savings</option>		
                                <option value="all">All</option>
                                </select>
                            </td>
                            <td>
                                <select name="month"  class="form-control">
                                    <option value="">---Select Month---</option>
                                    <option value="01">January</option>
                                    <option value="02">Frebuary</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </td>
                            <td>
                                <select name="year"  class="form-control">
                                    <option value="">---Select Year---</option>
                                    <option value="2014">2014</option> 
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option> 
                                </select> 
                            </td>
                            <td align="center"><input type="submit" name="submit" value="Search" id="search" /></td>								
							</tr>
                     </table>
		</form>
	    </div>
            <div class="box-content" id="print">
                <table class="table" id="srch" >
                    <tr>
			<th>Slno.</th>
                        <th>Acc_no</th>
                        <th>Account Holder Name</th>
                        <!--<th>Intrest Rate</th>-->
                        <th>Demand</th>
                        <th>Deposited </th>
                        <th>Withdrawl </th>
                        <th>Interest </th>
                        <th>Total Balance</th>
			
                    </tr>
                    
                     <?php
                 if(isset($_POST['submit'])){
                 $table=$_POST['table'];
			     if($table=='compulsarydeposite'){$folio=1; $var="`folio_no`='$folio'"; }
			     if($table=='recurringdiposite'){$folio=3; $var="`folio_no`='$folio'"; }
			     if($table=='dailydeposit'){$folio=4;  $var="`folio_no`='$folio'"; }
			     if($table=='fixeddeposite'){$folio=5; $var="`folio_no`='$folio'";}
			     if($table=='savingaccount'){$folio=2; $var="`folio_no`='$folio'";}
			     if($table=='all'){$folio=2; $var="1=1"; }
			     
				$mm=$_POST['month'];
				$yyyy=$_POST['year'];
				$my="$yyyy-$mm";
				$qwe="select * from `saving_ledger` where `cal_date` like '$my%' and $var group by `acc_no`";
				}else{
			    $my=date("Y-m");
			    $qwe="select * from `saving_ledger` where cal_date` like '$my%' group by `acc_no`";			
			}
                     ?>
                   <!--<tr>
                        <th colspan="5"> All Savings</th>		
                    </tr>-->
                    <?php
                    
                        $totaldemand=0;
                        $totalamt=0;
                        $totalbal=0;
                        $totalwamt=0;
                        $totalint=0;
                        $i=0;
                        // echo $qwe;
                        $data=mysql_query($qwe);
                        while($res=mysql_fetch_array($data)){                        
                        $i++;
                        $name=mysql_fetch_array(mysql_query("select * from $table where `acc_no`='$res[acc_no]'"));
                        
                        $depo = mysql_fetch_array(mysql_query("select SUM(`deposited_amt`) as depoamt from `saving_ledger` where `acc_no`='$res[acc_no]' and `deposited_amt`>0 and `cal_date` like '$my%'"));
                        $with = mysql_fetch_array(mysql_query("select SUM(`deposited_amt`) as withamt from `saving_ledger` where `acc_no`='$res[acc_no]' and `deposited_amt`<0 and `cal_date` like '$my%'"));
                        $int = mysql_fetch_array(mysql_query("select SUM(`interest`) as interest from `saving_ledger` where `acc_no`='$res[acc_no]' and `cal_date` like '$my%'"));
                       
                         $ress = mysql_fetch_array(mysql_query("select `demand`,`total_amt` from `saving_ledger` where `acc_no`='$res[acc_no]' and `cal_date` like '$my%' order by `id` desc"));
                       // echo $int['interest'].'----'.$depo['depoamt'].'---'.$with['withamt'];
                    ?>
                    <tr>
                        <td><?php echo  $i;?></td>
                        <td><?php echo  $res['acc_no'];?></td>
                        <td><?php echo  $name['name'];?></td>
                        <td><?php echo  $ress['demand']; $totaldemand=$totaldemand+$ress['demand'];?></td>
                       
                         <td><?php echo  $depo['depoamt'];  $totalamt=$totalamt+$depo['depoamt']; ?></td>
                         <td><?php echo  $with['withamt'];  $totalwamt=$totalwamt+$with['withamt']; ?></td>
                         <td><?php echo  $int['interest']; $totalint=$totalint+$int['interest'];?></td>
                       
                        <td><?php echo $ress['total_amt']; $totalbal=$totalbal+$ress['total_amt'];?></td>		
                    </tr>
                    <?php } ?>                    
                   
                    <tr>
                        <td colspan="3" style="color: red;font-size: large;">Total :</td>
                        <td style="color: red;font-size: large;"><?php echo number_format($totaldemand, 2, '.', '');?></td>
                        <td style="color: red;font-size: large;"><?php echo number_format($totalamt, 2, '.', '');?></td>
                        <td style="color: red;font-size: large;"><?php echo number_format($totalwamt, 2, '.', '');?></td>
                        <td style="color: red;font-size: large;"><?php echo number_format($totalint, 2, '.', '');?></td>
                        <td style="color: red;font-size: large;"><?php echo number_format($totalbal, 2, '.', '');?></td>
                    </tr>
                    
                    <tr>
                        <td colspan="9" style="text-align: center;"><input type="button" value="Print" onclick="printContent('print');" /></td>
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
</html><?php } ?>