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
<script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
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
        <style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
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
                <h2><i class="glyphicon glyphicon-plus"></i>GENERAL LEDGER</h2>

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
			<select name="folio" class="form-control"  style="width: 200px; float: left; margin-left: 50px;">
			    <option value="">---   SELECT SCHEME   ---</option>
				<?php
				//$getfoli=0;
				$fetchfolio=mysql_query("select * from `folio`");
				while($resfolio=mysql_fetch_array($fetchfolio))
				{
				?>
				<option value="<?php echo $resfolio['id'];?>"><?php echo $resfolio['name'];?></option>
				<?php }?>
			    </select>
                        <input type="text" name="sdate"  onKeyPress="return IsNumeric(event)"    class="form-control" id="sdate" style="width: 200px; float: left; margin-left: 50px;" >
			<input type="text" name="edate"  onKeyPress="return IsNumeric(event)"  class="form-control" id="edate" style="width: 200px; float: left; margin-left: 50px;" >
                        <input type="submit" name="submit" value="Search" id="search"  style="float: left; margin-left: 50px;" />
		</form>
	    </div>
           <div class="box-content" id="printDiv" style="width:100%; float:left;height: auto;background-color: #fff;border: #f5f5f5 solid 0.5px; border-radius: 4px;-webkit-box-shadow: 0 0 10px rgba(189,189,189,.4);">
	     <table style="float: left;width: 100%;font-size: 12px;">
                    <tr>
                         <th colspan="14" style="text-align: center;">CASH LEDGER </br> AIR CREDIT CO OPERATIVE,BALIA,BHAGABATPUR</th>
                    </tr>
	     </table>
	     <!----------------------------------  Credit  ----------------------------------->
            <table class="table" style="float: left;width: 100%; font-size: 8px;">
                    <tr>
                         <th colspan="8">Credit</th>
                    </tr>
		    
                    <tr>
                         <th>DATE</th>
			 <th>PARTICULARS</th>
			 <!--<th>FOLIO NO</th>-->
			 <th>PREVIOUS</th>
			 <th>CREDIT</th>
			 <th>DEBIT</th>
			 <th>BALANCE</th>
                    </tr>
		    <?php
		    if(isset($_POST['submit']))
		    {
			$getfoli=$_POST['folio'];
			$sdate=date("Y-m-d",strtotime($_POST['sdate']));
			$edate=date("Y-m-d",strtotime($_POST['edate']));
			if($_POST['sdate']!="" && $_POST['edate']!="")
			{
			$fetch=mysql_query("select * from `transaction` where `date`  BETWEEN '$sdate' AND '$edate'  group by `date`");
			}else
			{
			$fetch=mysql_query("select * from `transaction` where `folio_no`='$getfoli'  group by `date`");
			}
		    }
		    else
		    {
			$fetch=mysql_query("select * from `transaction`  group by `date`");
		    }
			while($res=mysql_fetch_array($fetch)){
			
			$c=0;
			if(isset($_POST['submit']))
			{
			$fetch1=mysql_query("select * from `transaction` where `date`='$res[date]' and `folio_no`='$res[folio_no]' group by `folio_no`");
			}
			else
			{
			$fetch1=mysql_query("select * from `transaction` where `date`='$res[date]' and `folio_no`!=0 group by `folio_no`");
			}
			while($res1=mysql_fetch_array($fetch1)){
			$c++;
			//echo "</br>select SUM(amount) as `amt`,`details`,`folio_no` from `transaction` where `folio_no`='$res1[folio_no]' and `date`='$res[date]' and `amount` > 0";
			$fetch2=mysql_query("select SUM(amount) as `amt`,`details`,`folio_no` from `transaction` where `folio_no`='$res1[folio_no]' and `date`='$res[date]' and `amount` > 0");
			$res2=mysql_fetch_array($fetch2);
			$totalid=$res1['id'];
			
			//echo "</br>prev=select SUM(amount) as `amtt`,`details`,`folio_no` from `transaction` where `folio_no`='$res1[folio_no]' and `date`='$previousdate' and `amount` > 0";
			$rrfetch2=mysql_query("select SUM(amount) as `amtt`,`details`,`folio_no` from `transaction` where `folio_no`='$res1[folio_no]' and `date`<'$res[date]'");
			$rrres2=mysql_fetch_array($rrfetch2);
			
			$negetivefetchsum=mysql_query("select SUM(amount) as `amttss` from `transaction` where `folio_no`='$res1[folio_no]' and `date`='$res[date]' and `amount` < 0");
			$negetiveressum=mysql_fetch_array($negetivefetchsum);
			
			
			$dfetchfolio=mysql_query("select * from `folio` where `id`='$res1[folio_no]'");
			$dresfolio=mysql_fetch_array($dfetchfolio);
			$details=$dresfolio['name'];
		    ?>
		    
			<tr>
			    <th><?php if($c==1){ echo date("d-m-Y",strtotime($res['date']));  }else{ echo ""; }?></th>
			    <th><?php echo $details; ?></th>
			    <th><?php echo $rrres2['amtt']; ?></th>
			    <th><?php echo $res2['amt']; ?></th>
			    <th><?php echo $negetiveressum['amttss']; ?></th>
			    <th><?php echo ($rrres2['amtt'])+($res2['amt'])+($negetiveressum['amttss']); ?></th>
			</tr>
			
		    <?php }  }   ?>
                </table>
		    
	    <!-----------------------------Payment-------------------------------------->
		<table class="table" style="float: left;width: 50%; font-size: 8px; display: none;">
		  <tr>
                         <th colspan="8">Debit</th>
                    </tr>
                    <tr>
                         <th>DATE</th>
			 <th>PARTICULARS</th>
			 <!--<th>FOLIO NO</th>-->
			 <th>PREVIOUS</th>
			 <th>AMOUNT</th>
			 <th>BALANCE</th>
                    </tr>
		    <?php
		    if(isset($_POST['submit']))
		    {
			$getfoli=$_POST['folio'];
			$sdate=date("Y-m-d",strtotime($_POST['sdate']));
			$edate=date("Y-m-d",strtotime($_POST['edate']));
			if($_POST['sdate']!="" && $_POST['edate']!="")
			{//echo "select * from `transaction` where `date`  BETWEEN '$sdate' AND '$edate'  group by `date`";
			$fetch=mysql_query("select * from `transaction` where `amount`<'0' and `date` BETWEEN '$sdate' AND '$edate' ");
			}else
			{
			$fetch=mysql_query("select * from `transaction` where `folio_no`='$getfoli'  group by `date`");
			}
		    }else
		    {
			$fetch=mysql_query("select * from `transaction` group by `date`");
		    }
			while($res=mysql_fetch_array($fetch)){
			
			$c=0;
			if(isset($_POST['submit']))
			{
			$fetch1=mysql_query("select * from `transaction` where `date`='$res[date]' and `folio_no`='$res[folio_no]' group by `folio_no`");
			}else
			{
			$fetch1=mysql_query("select * from `transaction` where `date`='$res[date]' and `folio_no`!=0 group by `folio_no`");
			}
			while($res1=mysql_fetch_array($fetch1)){
			$c++;
			
			$fetch2=mysql_query("select SUM(amount) as `amt`,`details`,`folio_no` from `transaction` where `folio_no`='$res1[folio_no]' and `date`='$res[date]' and `amount` < 0");
			$res2=mysql_fetch_array($fetch2);

			
			$totalid=$res1['id'];
			$rrfetch2=mysql_query("select SUM(amount) as `amtt`,`details`,`folio_no` from `transaction` where `folio_no`='$res1[folio_no]' and `id`<'$totalid'");
			$rrres2=mysql_fetch_array($rrfetch2);
			
			$rrfetchsum=mysql_query("select SUM(amount) as `amttss` from `transaction` where `folio_no`='$res1[folio_no]' and `id`=<'$totalid'");
			$rrressum=mysql_fetch_array($rrfetchsum);
			
		    ?>
		    
			<tr>
			    <th><?php if($c==1){ echo date("d-m-Y",strtotime($res['date']));  }else{ echo ""; }?></th>
			    <th><?php echo $res2['details']; ?></th>
			    <!--<th><?php echo $res2['folio_no']; ?></th>-->
			    <th><?php echo $rrres2['amtt']; ?></th>
			    <th><?php echo $res2['amt']; ?></th>
			    <th><?php echo $rrres2['amtt']+ $res2['amt']; ?></th>
			</tr>
			
		    <?php }  }   ?>
		</table>
			<input type="button" value="Print" onclick="printContent('printDiv')" />
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


</body>
</html><?php } ?>