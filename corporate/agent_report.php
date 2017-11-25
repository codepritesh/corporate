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
	'product' => $resagent['prodetails']
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
        var availabledrugs=<?php echo  json_encode($getagentlist); ?>;
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
		 $('#product').val(ui.item.product);
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
    <link href="date/jquery-ui.css" rel="Stylesheet" type="text/css" />
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
                            <td>Agent Name(ID)</td><td><input type="text" name="agent" class="form-control" id="agent" required placeholder="Agent Name(ID)"></td>
			    <input type="hidden" name="agentid" id="agentid"><input type="hidden" name="product" id="product">
                            <td><input type="text" name="sdate" onKeyPress="return IsNumeric(event)" class="form-control" id="sdate" autocomplete="off" placeholder="Start Date"></td>
                            <td><input type="text" name="edate" onKeyPress="return IsNumeric(event)" class="form-control" id="edate" autocomplete="off" placeholder="End Date" ></td>
                            <td align="center"><input type="submit" name="submit" value="Search" id="search" /></td>
			</tr>
                     </table>
		</form>
	    </div>
            <div class="box-content" id="printDiv" style="width:100%; float:left;height: auto;background-color: #fff;border: #f5f5f5 solid 0.5px; border-radius: 4px;-webkit-box-shadow: 0 0 10px rgba(189,189,189,.4);">
                <?php
                    if(isset($_POST['submit']))
                    {
                        $id=htmlentities($_POST['agentid']);
                       
                ?>
                <table style="font-size: 15px;" class="table">
					<?php
						$agnt=mysql_query("select * from `agent` where `id`='$id'")or die(mysql_error());
						$resagnt=mysql_fetch_array($agnt);
						$areacode= str_replace($resagnt['id']," ",$resagnt['codeno']);
						$area=$resagnt['area'];
					?>
					<tr>
						<th colspan="5" style="color: red;text-align: center;">Transaction Report of  <?php echo strtoupper($resagnt['name']); ?></th>
					</tr>
            <tr>
			<th>Slno.</th>
			<!--<th>Agent Name</th>-->
            <th>Account No</th>
            <th>Collected Amount </th>
			<th>Details</th>
			<!--<th>Due Amount</th>-->
			<!--<th>Outstanding Balance</th>			
			<th>Collection Date</th>-->
             <!--<th>Area</th>-->
            </tr>
            <?php
			$i=0;
			$subtot=0;
              $id=htmlentities($_POST['agentid']);
		      $product=htmlentities($_POST['product']);
              if($_POST['sdate']!="" && $_POST['edate']!="")
            {
			$sdate=date('Y-m-d',strtotime($_POST['sdate']));
			$edate=date('Y-m-d',strtotime($_POST['edate']));
			//echo "select * from `transaction` where `agentid`='$id' and `date` BETWEEN '$sdate' AND '$edate'";
			$fetchtra=mysql_query("select * from `transaction` where `agentid`='$id' and `date` BETWEEN '$sdate' AND '$edate'  ");}
            else if($_POST['agentid']!="")
                     {
			//echo "</br>select * from `transaction` where `agentid`='$id'";
                        $fetchtra=mysql_query("select * from `transaction` where `agentid`='$id'");
                     }
                        while($restra=mysql_fetch_array($fetchtra))
                        {
							$i++;
						$accountt=$restra['accountno'];						 
						if($product=='Fixed Deposit'){$table='fixeddeposite';$accnt='acc_no';}
						if($product=='Compulsory Deposit'){$table='compulsarydeposite';$accnt='acc_no';}
						if($product=='Daily Deposit'){$table='dailydeposit';$accnt='acc_no';}
						if($product=='Reccuring Deposit'){$table='recurringdiposite';$accnt='acc_no';}
						if($product=='demand'){$table='demand_loan'; $accnt='loan_accno';}
						if($product=='gold'){$table='goldloan'; $accnt='loan_accno';}
						if($product=='group'){$table='grouploan'; $accnt='loan_accno';}
						if($product=='business'){$table='businessloan'; $accnt='loan_accno';}
						if($product=='enterprise'){$table='enterpriseloan'; $accnt='loan_accno';}
						if($product=='agriculture'){$table='agricultureloan'; $accnt='loan_accno';}
						if($product=='Loan'){$table='loan'; $accnt='loan_accno';}

						//echo "</br>select * from `$table` where `$accnt`='$accountt' and `status`='0'";
						$balance=mysql_query("select * from `$table` where `$accnt`='$accountt' and `status`='0'");
						$resbalance=mysql_fetch_array($balance);
						if($table=='fixeddeposite')
						{
						 $balnce=$resbalance['deposited_amt'];
						 $dueamnt='N/A';
						}
						else if($table=='compulsarydeposite')
						{
						$balnce=$resbalance['total_amt'];
						$dueamnt='N/A';
						}
						else if($table=='dailydeposit')
						{
						$balnce=$resbalance['total_amt'];
						$dueamnt='N/A';
						}
						else if($table=='recurringdiposite')
						{
						 $date1 = $resbalance['start_date'];
						//$date1 = '2015-04-12';
						 $date2 = date("Y-m-d");
						    
						    $ts1 = strtotime($date1);
						    $ts2 = strtotime($date2);
						    
						    $year1 = date('Y', $ts1);
						    $year2 = date('Y', $ts2);
						    
						    $month1 = date('m', $ts1);
						    $month2 = date('m', $ts2);
						    
						    $diff = (($year2 - $year1) * 12) + ($month2 - $month1);
						    $paid_installment=$resbalance['paid_installment'];
						    if($diff > $paid_installment)
						    {
							$due_installment = $diff - $paid_installment;
							$dueamnt = $due_installment*$resbalance['monthly_amount'];
							$balnce=$resbalance['monthly_amount']*$resbalance['paid_installment'];
						    }else
						    {
							//$due_installment = $diff - $paid_installment;
							$dueamnt = 'No Dues';
							$balnce=$resbalance['monthly_amount']*$resbalance['paid_installment'];
						    }
						//$balnce=$resbalance['monthly_amount']*$resbalance['paid_installment'];
						//$dueamnt=($resbalance['no_of_installment']-$resbalance['paid_installment'])*$resbalance['monthly_amount'];
						}
						else if($table=='loan' || $table=='demand_loan')
						{
						    $loanamt = $resbalance['loangiven'];
						    $amttopay = $resbalance['amount_topay'];
						    $dueamnt=$resbalance['amount_topay'];
						    $balnce='N/A';
						}
						
                    ?>
                    <tr>
						<td><?php echo $i; //echo $resagnt['name'];?></td>
						<td><?php echo $restra['accountno'];?></td>
						<td><?php echo $tot=$restra['amount']+$restra['interest']; $subtot=$tot+$subtot;?></td>
						<td><?php echo $restra['details'];?></td>
						<!--<td><?php echo $dueamnt;?></td>-->
						<!--<td><?php //echo $balnce;?></td>-->
						<td><?php echo date("d-m-Y",strtotime($restra['date']));?></td>
						<!--<td><?php echo $area.'('.$areacode.')';?></td>-->
						
                    </tr>
                    <?php } ?>
					<tr style="color: red;text-align: center;">
						<td colspan="2">Total Collection :</td>
						<td colspan="3"><?php echo $subtot; ?></td>
					</tr>
		   <tr>
			    
			    <td colspan="8" style="text-align: center;"><input type="button" value="Print" onclick="printContent('printDiv')" /></td>
			   
		    </tr>
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


</body>
</html><?php }?>