<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{ header("location:index.php");}
else
{
   if(isset($_POST['submit']))
{
	$date=date("Y-m-d",strtotime($_POST['date']));
	$agent=htmlentities($_POST['agent'])."%";
	//echo "select * from transaction where `date`='$date' and `accountno` like '$agent'";
   $fetchdata=mysql_query("select * from transaction where `date`='$date' and `accountno` like '$agent'");
   $resfetchdata=mysql_num_rows($fetchdata);
  if($resfetchdata>0)
  {
	while($rest=mysql_fetch_array($fetchdata))
	{
		 $accountno=$rest['accountno'];
       $fetchdaily=mysql_query("select * from `dailydeposit` where `acc_no`='$accountno'");
       $resdaily=mysql_fetch_array($fetchdaily);
		 $fetchdaily=mysql_num_rows($fetchdaily);
       
        $date3 = $resdaily['last_deposited_date'];
        $date = date('Y-m-d',(strtotime ( '-1 day' , strtotime ( $date3) ) ));
		  $paidamt=$resdaily['deposited_amt']-$rest['amount'];
		  if($paidamt<0){ $paidamt=0; } else { $paidamt=$paidamt;}
	       if($paidamt>=0 && $fetchdaily>0)
	    {
	    mysql_query("delete from `transaction` where id='$rest[id]'") or die(mysql_error());
		 //echo "</br>update  `dailydeposit` set `total_amt`='$paidamt',`last_deposited_date`='$date' where `acc_no`='$accountno'";
	    mysql_query("update  `dailydeposit` set `total_amt`='$paidamt',`last_deposited_date`='$date' where `acc_no`='$accountno'") or die(mysql_error());
	    }
	}

 }
}
?>
<html lang="en">
<head>
    	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
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
                <h2>Daily POS Upload</h2>

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
              <form name="" action="" method="post" enctype="multipart/form-data">
                <table>
                  <tr>
							<td>Date</td><td><input type="text" name="date" class="form-control" id="sdate" required></td>
							<td>Agentcode</td>
							<td>
								<select name="agent">
									<option>--select--</option>
									<?php
									$fetch=mysql_query("select * from `agent` where `agentcode_daily`!=''");
									while($res=mysql_fetch_array($fetch))
									{
									?>
									<option value="<?php echo $res['agentcode_daily'];?>"><?php echo $res['agentcode_daily'];?></option>
									<?php }?>
								</select>
							</td>
                    <td><input type="submit" name="submit" value="submit"></td>
                  </tr>
                </table>
              </form>
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
                    <button type="button" class="close" data-dismiss="modal">�</button>
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