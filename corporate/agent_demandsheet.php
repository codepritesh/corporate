<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{ header("location:index.php");}
else
{
$getagent=mysql_query("select * from `agent`")or die(mysql_error());
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
                <h2><i class="glyphicon glyphicon-plus"></i>Agent Demand Sheet</h2>

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
                            <td>Agent Name(ID)</td><td><input type="text" name="agent" class="form-control" id="agent" required placeholder="Agent Name"></td>
			    <input type="hidden" name="agentid" id="agentid"><input type="hidden" name="product" id="product">
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
                <table class="table">
		   
                    <?php
		   // echo "SELECT * FROM `dailydeposit` where `agent_id`='$id' and `status`=0";
		    if($id!=''){
                    $daily=mysql_query("SELECT * FROM `dailydeposit` where `agent_id`='$id' and `status`=0");
		    }
		    ?>
		    <tr>
                        <th style="text-align: center;" colspan="5">Daily Deposit</th>
                    </tr>
		    <?php
		    if(mysql_num_rows($daily) > 0){
		    ?>
                    <tr>
			<th>Slno.</th>
                        <th>Account No</th>
                        <th>Name</th>
			<th>Amount To Pay</th>
			<th>Outstanding Balance</th>
                         
                    </tr>
		    <?php
		    $a=0;
                    while($resdaily=mysql_fetch_array($daily)){
		    $a++;
		    $fd=strtotime($resdaily['last_deposited_date']);
		    $sd=strtotime(date("Y-m-d"));
		    $difference = abs($sd - $fd);
		    $daydiff = floor($difference/(60*60*24));
		    $amttopay=$daydiff*$resdaily['deposited_amt'];
		    ?>
                    <tr>
						<td><?php echo $a;?></td>
						<td><?php echo $resdaily['acc_no'];?></td>
						<td><?php echo $resdaily['name'];?></td>
                                                <td><?php echo $amttopay;?></td>
						<td><?php echo $resdaily['total_amt'];?></td>
                    </tr>
                    <?php } }else{ ?>
		    <tr>
			<td colspan="5">No Results Found...</td>
		    </tr>
		    <?php } ?>
		    <?php
		   // echo "SELECT * FROM `recurringdiposite` where `agent_id`='$id' and `status`=0";
		    if($id!=''){
                    $rec=mysql_query("SELECT * FROM `recurringdiposite` where `agent_id`='$id' and `status`=0");
		    }
		    ?>
		    <tr>
                        <th style="text-align: center;" colspan="5">Recurring Deposit</th>
                    </tr>
		    <?php
		    if(mysql_num_rows($rec) > 0){
		    ?>
                    <tr>
			<th>Slno.</th>
                        <th>Account No</th>
                        <th>Name</th>
			<th>Amount To Pay</th>
			<th>Deposited Balance</th>
                         
                    </tr>
		    <?php
		    $b=0;
                    while($resrec=mysql_fetch_array($rec)){
		    $b++;
		    //echo $resrec['last_diposite_date'];
		    /*$fd=strtotime($resrec['last_diposite_date']);
		    $sd=strtotime(date("Y-m-d"));
		    $difference = abs($sd - $fd);
		    $daydiff = floor($difference/(60*60*24*30));
		    $amttopay=$daydiff*$resrec['monthly_amount'];*/
		    
		    $fd=strtotime($resrec['start_date']);
		    $sd=strtotime(date("Y-m-d"));
		    $difference = abs($sd - $fd);
		    $noofinstallment = floor($difference/(60*60*24*30));
		    $noofpaidinstallment =$resrec['paid_installment'];
		    $rest=$noofinstallment-$noofpaidinstallment;
		    
		    /*Fine Calculation*/
		    if($rest<=1){
			$amounttopay=$rest*$resrec['monthly_amount'];
			$fine=0;
			$amttopay=$amounttopay+$fine;
			}
		    else if($rest>=2){
			$amounttopay=$rest*$resrec['monthly_amount'];
			$fine=($amounttopay*4)/100;
			$amttopay=$amounttopay+$fine;
			}
		    
		    
		    ?>
                    <tr>
						<td><?php echo $b;?></td>
						<td><?php echo $resrec['acc_no'];?></td>
						<td><?php echo $resrec['name']?></td>
                                                <td><?php echo $amttopay;?></td>
						<td><?php echo $resrec['deposited_amt'];?></td>
                    </tr>
                    <?php } }else{ ?>
		    <tr>
			<td colspan="5">No Results Found...</td>
		    </tr>
		    <?php } ?>
		    <?php
		    //echo "SELECT * FROM `compulsarydeposite` where `agent_id`='$id' and `status`=0";
		    if($id!=''){
                    $com=mysql_query("SELECT * FROM `compulsarydeposite` where `agent_id`='$id' and `status`=0");
		    }
		    ?>
		    <tr>
                        <th style="text-align: center;" colspan="5">Compulsory Deposit</th>
                    </tr>
		    <?php
		    if(mysql_num_rows($com) > 0){
		    ?>
                    <tr>
                        <th>Slno.</th>
			<th>Account No</th>
                        <th>Name</th>
			<th>Amount To Pay</th>
			<th>Outstanding Balance</th>
                         
                    </tr>
		    <?php
		    $c=0;
                    while($resrec=mysql_fetch_array($com)){
			$c++;
		    $fd=strtotime($resdaily['last_deposited_date']);
		    $sd=strtotime(date("Y-m-d"));
		    $difference = abs($sd - $fd);
		    $daydiff = floor($difference/(60*60*24*30));
		    $amttopay=$daydiff*$resrec['deposited_amt'];
		    ?>
                    <tr>
						<td><?php echo $c;?></td>
						<td><?php echo $resrec['acc_no'];?></td>
						<td><?php echo $resrec['name'];?></td>
                                                <td><?php echo $amttopay;?></td>
						<td><?php echo $resrec['total_amt'];?></td>
                    </tr>
                    <?php } }else{ ?>
		    <tr>
			<td colspan="4">No Results Found...</td>
		    </tr>
		    <?php } ?>
		    </table>
		    <table class="table">
			<tr>
			     <th style="text-align: center;" colspan="6">Agriculture Loan</th>
			</tr>
			
			<tr>
			    <th>Slno.</th>
			    <th>Account No</th>
			    <th>Name</th>
			    <th>Due Principal Amount</th>
			    <th>Due Intrest </th>
			    <th>Amount To Pay</th>
			     
			</tr>
			<?php
			$m=0;
			$agrloan=mysql_query("select * from `agricultureloan` where `is_approved`='1' and `loancomplited`='0' and `agent_id`='$id'");
			if(mysql_num_rows($agrloan)>0){
			while($resagrloan=mysql_fetch_array($agrloan)){
			$m++;
			?>
			<tr>
						     <td><?php echo $m;?></td>
						    <td><?php echo $resagrloan['loan_accno'];?></td>
						    <td><?php echo $resagrloan['name'];?></td>
						    <td><?php echo $resagrloan['odprincipal'];?></td>
						     <td><?php echo $resagrloan['odintrest'];?></td>
						     <td><?php echo $resagrloan['amount_topay'];?></td>
						    
			</tr>
			<?php  } }else{ ?>
			<tr>
			    <td colspan="6">No Results Found...</td>
			</tr>
			<?php } ?>
			<tr>
			     <th style="text-align: center;" colspan="6">Business Loan</th>
			</tr>
			
			<tr>
			    <th>Slno.</th>
			    <th>Account No</th>
			    <th>Name</th>
			    <th>Due Principal Amount</th>
			    <th>Due Intrest </th>
			    <th>Amount To Pay</th>
			     
			</tr>
			<?php
			$n=0;
			$loan=mysql_query("select * from `businessloan` where `is_approved`='1' and `loancomplited`='0' and `agent_id`='$id'");
			if(mysql_num_rows($loan)>0){
			while($resloan=mysql_fetch_array($loan)){
			$n++;
			?>
			<tr>
						    <td><?php echo $n;?></td>
						    <td><?php echo $resloan['loan_accno'];?></td>
						    <td><?php echo $resloan['name'];?></td>
						    <td><?php echo $resloan['odprincipal'];?></td>
						    <td><?php echo $resloan['odintrest'];?></td>
						    <td><?php echo $resloan['amount_topay'];?></td>
						    
			</tr>
			<?php  } }else{ ?>
			<tr>
			    <td colspan="6">No Results Found...</td>
			</tr>
			<?php } ?>
			<tr>
			     <th style="text-align: center;" colspan="6">Demand Loan</th>
			</tr>
			
			<tr>
			    <th>Slno.</th>
			    <th>Account No</th>
			    <th>Name</th>
			    <th>Due Principal Amount</th>
			    <th>Due Intrest </th>
			    <th>Amount To Pay</th>
			     
			</tr>
			<?php
			$o=0;
			$demandloan=mysql_query("select * from `demand_loan` where `is_approved`='1' and `loancomplited`='0' and `agent_id`='$id'");
			if(mysql_num_rows($demandloan)>0){
			while($resdemandloan=mysql_fetch_array($demandloan)){
			$o++;
			?>
			<tr>
						     <td><?php echo $o;?></td>
						    <td><?php echo $resdemandloan['loan_accno'];?></td>
						    <td><?php echo $resdemandloan['name'];?></td>
						    <td><?php echo $resdemandloan['odprincipal'];?></td>
						     <td><?php echo $resdemandloan['odintrest'];?></td>
						     <td><?php echo $resdemandloan['amount_topay'];?></td>
						    
			</tr>
			<?php  } }else{ ?>
			<tr>
			    <td colspan="6">No Results Found...</td>
			</tr>
			<?php } ?>
			<tr>
			     <th style="text-align: center;" colspan="6">Enterpriseloan Loan</th>
			</tr>
			
			<tr>
			    <th>Slno.</th>
			    <th>Account No</th>
			    <th>Name</th>
			    <th>Due Principal Amount</th>
			    <th>Due Intrest </th>
			    <th>Amount To Pay</th>
			     
			</tr>
			<?php
			$p=0;
			$entloan=mysql_query("select * from `enterpriseloan` where `is_approved`='1' and `loancomplited`='0' and `agent_id`='$id'");
			if(mysql_num_rows($entloan)>0){
			while($resentloan=mysql_fetch_array($entloan)){
			$p++;
			?>
			<tr>
						    <td><?php echo $p;?></td>
						    <td><?php echo $resentloan['loan_accno'];?></td>
						    <td><?php echo $resentloan['name'];?></td>
						    <td><?php echo $resentloan['odprincipal'];?></td>
						    <td><?php echo $resentloan['odintrest'];?></td>
						    <td><?php echo $resentloan['amount_topay'];?></td>
						    
			</tr>
			<?php  } }else{ ?>
			<tr>
			    <td colspan="6">No Results Found...</td>
			</tr>
			<?php } ?>
			<tr>
			     <th style="text-align: center;" colspan="6">Gold Loan</th>
			</tr>
			
			<tr>
			    <th>Slno.</th>
			    <th>Account No</th>
			    <th>Name</th>
			    <th>Due Principal Amount</th>
			    <th>Due Intrest </th>
			    <th>Amount To Pay</th>
			     
			</tr>
			<?php
			$r=0;
			$goldloan=mysql_query("select * from `goldloan` where `is_approved`='1' and `loancomplited`='0' and `agent_id`='$id'");
			if(mysql_num_rows($goldloan)>0){
			while($resgoldloan=mysql_fetch_array($goldloan)){
			$r++;
			?>
			<tr>
						    <td><?php echo $r;?></td>
						    <td><?php echo $resgoldloan['loan_accno'];?></td>
						    <td><?php echo $resgoldloan['name'];?></td>
						    <td><?php echo $resgoldloan['odprincipal'];?></td>
						    <td><?php echo $resgoldloan['odintrest'];?></td>
						    <td><?php echo $resgoldloan['amount_topay'];?></td>
						    
			</tr>
			<?php  } }else{ ?>
			<tr>
			    <td colspan="6">No Results Found...</td>
			</tr>
			<?php } ?>
			<tr>
			     <th style="text-align: center;" colspan="6">Group Loan</th>
			</tr>
			
			<tr>
			    <th>Slno.</th>
			    <th>Account No</th>
			    <th>Name</th>
			    <th>Due Principal Amount</th>
			    <th>Due Intrest </th>
			    <th>Amount To Pay</th>
			     
			</tr>
			<?php
			$r=0;
			$grploan=mysql_query("select * from `grouploan` where `is_approved`='1' and `loancomplited`='0' and `agent_id`='$id'");
			if(mysql_num_rows($grploan)>0){
			while($resgrploan=mysql_fetch_array($grploan)){
			$r++;
			?>
			<tr>
						    <td><?php echo $r;?></td>
						    <td><?php echo $resgrploan['loan_accno'];?></td>
						    <td><?php echo $resgrploan['name'];?></td>
						    <td><?php echo $resgrploan['odprincipal'];?></td>
						    <td><?php echo $resgrploan['odintrest'];?></td>
						    <td><?php echo $resgrploan['amount_topay'];?></td>
						    
			</tr>
			<?php  } }else{ ?>
			<tr>
			    <td colspan="6">No Results Found...</td>
			</tr>
			<?php } ?>
			
		    </table>
		    <table class="table">
		   <tr>
			    <td style="text-align: center;" colspan="6"><input type="button" value="Print" onclick="printContent('printDiv')" /></td>
			   
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
</html><?php }?>