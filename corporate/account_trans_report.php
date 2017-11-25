<?php
//ini_set("display_errors",1);
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
<div style="float: right; color: red;">
    <?php //echo date("Y-m-d");?>
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
	<li style="float: right;">
             <?php echo date("Y-m-d");?>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i>Productwise Transaction Report</h2>

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
                            <td>
			      <select name="type" class="form-control">
				   <option value="4">Daily deposit</option>
				   <option value="5">Fixed deposit</option>
				   <option value="3">RD deposit</option>
				   <option value="1">Compulsory deposit</option>
				   <option value="2">Voluntary Saving</option>
				   <option value="6">Group loan</option>
				   <option value="7">Agriculture loan</option>
				   <option value="8">Bussiness loan</option>
				   <option value="9">Enterprise loan</option>
				   <option value="10">Demand loan</option>
				   <option value="11">Gold loan</option>
				   <option value="12">Daily loan</option>
			      </select>
			    </td>
                            <td><input type="text" name="sdate" onKeyPress="return IsNumeric(event)" class="form-control" id="sdate"  placeholder="Start Date"></td>
                            <td><input type="text" name="edate" onKeyPress="return IsNumeric(event)" class="form-control" id="edate"   placeholder="End Date" ></td>
                            <td align="center"><input type="submit" name="submit" value="Search" id="search" /></td>
			    
			</tr>
                     </table>
		</form>
	    </div>
            <div class="box-content">
                <table id="srch" class="table">
					<tr>
						<th colspan="7" style="text-align: center;color: red;">
							<?php
							if($_POST['type']==1){ $tp='Compulsory deposit';}
							if($_POST['type']==2){ $tp='Voluntary Saving';}
							if($_POST['type']==3){ $tp='RD deposit';}
							if($_POST['type']==4){ $tp='Daily deposit';}
							if($_POST['type']==5){ $tp='Fixed deposit';}
							if($_POST['type']==6){ $tp='Group loan';}
							if($_POST['type']==7){ $tp='Agriculture loan';}
							if($_POST['type']==8){ $tp='Bussiness loan';}
							if($_POST['type']==9){ $tp='Enterprise loan';}
							if($_POST['type']==10){ $tp='Demand loan';}
							if($_POST['type']==11){ $tp='Gold loan';}
							if($_POST['type']==12){ $tp='Daily loan';}
							?>
							Transaction Report of <?php echo $tp; ?>
						</th>
					</tr>
                    <tr>
						<th>Slno.</th>
                        <th>Acc_no</th>
                        <th>Account Holder Name</th>
						<th>Details</th>
						<th>Credit Amount</th>
                        <th>Debit Amount</th>
						<th>Transaction Date</th>
                    </tr>
                    <?php
                    $a=0;
                    $i=0;
                    $tcr=0;
                    $tdr=0;
						if(isset($_POST['submit'])){
						if($_POST['type']!=''){
						 $folio=$_POST['type'];
							  if($_POST['sdate']!=''){
							   $sdt=date("Y-m-d",strtotime($_POST['sdate']));
								if($_POST['edate']!=''){
									  $edt=date("Y-m-d",strtotime($_POST['edate']));
									  $fetch=mysql_query("select * from `transaction` where `date` between '$sdt' and '$edt' and `folio_no`='$folio'");  			     
								}
								else{
									  $date=$sdt;
									  $fetch=mysql_query("select * from `transaction` where `date`='$date' and `folio_no`='$folio'"); 
								}
							   }
							   else{
								 $date=date("Y-m-d");
							   $fetch=mysql_query("select * from `transaction` where `date`='$date' and `folio_no`='$folio'");     
							  }                
						}
						else{
						  $date=date("Y-m-d");
						 $fetch=mysql_query("select * from `transaction` where `date`='$date'");
								 }
					   }else{
						 $date=date("Y-m-d");
						 $fetch=mysql_query("select * from `transaction` where `date`='$date' and `folio_no`='$folio'");
								}
						if(mysql_num_rows($fetch)>0){
								 while($res=mysql_fetch_array($fetch))
						
								{
									$i++;
									$qwe=mysql_query("select * from `customer` where `customer_id`='$res[customerid]'");
									$rscust=mysql_fetch_array($qwe);
						$a=$a+$res['amount'];
						//echo $tdr;
                    ?>
                    <tr>
                        <td><?php echo  $i;?></td>
                        <td><?php echo  $res['accountno'];?></td>
                        <td><?php echo  $rscust['name'];?></td>
						<td><?php echo  $res['details'];?></td>
						<td><?php $amt=$res['amount']; if($amt[0]!='-'){ echo $CR=$res['amount']+$res['interest']; $tcr=$tcr+$CR; } ?></td>
                        <td><?php $amtt=$res['amount']; if($amtt[0]=='-'){ $DR=$amtt; echo substr($amtt, 1); $tdr=$tdr+$DR; } ?></td>
						<td><?php echo date("d-m-Y",strtotime($res['date']));?></td>
			
                    </tr>
                    <?php } ?>
                    <tr style="color:red;font-weight: bold;">
                        <th style="text-align: center;" colspan="4">Total</th>
                        <th><?php echo $tcr; ?></th>
                        <th><?php echo -($tdr); ?></th>
						<th></th>
                    </tr>
		    <?php } else{ ?>
			 <tr>
			      <td colspan="7">No Results Found...</td>
			 </tr>
		    <?php } ?>
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
</body>
</html><?php } ?>