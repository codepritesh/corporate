<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{
    header("location:index.php");}
else
{
    
?>
<!--autocomplete start-->
<link rel="stylesheet" href="css/jquery-ui.css">
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
 <!--autocomplete end-->
  <script type="text/javascript"> 
    $(function(){
	 //jQuery.noConflict();
        var availabledrugs=<?php echo  json_encode($getagentlist); ?>;
        $('#cname').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
		 $('#cname').val(valshow);
		 $('#loanid').val(ui.item.idval);
		}
		
        });
}); 
</script>

<style>
    .form-control{width: 300;}
</style>

<script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	//document.body.innerHTML = restorepage;
	location.reload();
}
</script>
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


  function numbersonly(e){
var unicode=e.charCode? e.charCode : e.keyCode
if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
if (unicode<48||unicode>57) //if not a number
return false //disable key press
}
}
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
	<link href="fullcalendar/dist/fullcalendar.css" rel='stylesheet'>
	<link href="fullcalendar/dist/fullcalendar.print.css" rel='stylesheet' media='print'>
	
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
                    </form> -->
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
             <?php echo date("d-m-Y");?>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i>Loan Report</h2>

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
                <form name="arrange" method="post" action="#"  enctype="multipart/form-data">
                     <table style="float: left;width: 100%;">
                        <tr>
                            <td colspan="3" style="color: red;font-size: 20px;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; }  ?></td>
                        </tr>
                        <tr id="bydate">
                            <td>Select Loan</td>
			    <td>
				    <select requried class="form-control" name="table">
					<option value="">---Select Any One ---</option>					
					<option value="demand_loan">Demand Loan</option>
					<option value="goldloan">Gold Loan</option>
					<option value="agricultureloan">Agriculture Loan</option>
					<option value="businessloan">Business Loan</option>
					<option value="enterpriseloan">Enterprise Loan</option>
					<option value="grouploan">Group Loan</option>
					<option value="staffloan">Staff Loan</option>					
					<option value="">All Loan</option>
				    </select>
			    </td>
                <td>
                    <select name="month"  class="form-control">
                        <option value="">---Select Month---</option>
                        <option value="1">January</option>
                        <option value="2">Frebuary</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                    
                </td>
                <td>
                    <select name="year"  class="form-control">
                                    <option value="">---Select Year---</option>
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
			<div id="srch">
            <div class="box-content" style="float: left;width: 100%;">
                     <?php
			if(isset($_POST['submit']))
			{
			    $table=$_POST['table'];
                $mnth=$_POST['month'];
                if($mnth!=''){
                   $mnth=$_POST['month'];
                }else{
                     $mnth='MONTH(CURRENT_DATE())';
                }
                
                
                if($_POST['year']!=''){
                   $year=$_POST['year'];
                }else{
                     $year='YEAR(CURRENT_DATE())';
                }
                
			    if($table!=''){
						if($table=='goldloan'){ $var="GL";}
						else if($table=='demand_loan'){ $var="DL";}
						else if($table=='businessloan'){ $var="BL";}
						else if($table=='agricultureloan'){ $var="AL";}
						else if($table=='enterpriseloan'){ $var="EL";}
						else if($table=='grouploan'){ $var="GR";}
						else if($table=='staffloan'){ $var="SL";}
						$var="AND `accountno` like '".$var."%'";
			    }else{
				$var="AND 1=1";
			    }
			    $qwe="SELECT * FROM `transaction_ledger` WHERE MONTH(`cal_date`)='$mnth' AND YEAR(`cal_date`)='$year' $var";
			    $fetchtra=mysql_query($qwe);
			}
			else{                
			    $table="";
			    $qwe="SELECT * FROM `transaction_ledger` WHERE MONTH(`cal_date`)=MONTH(CURRENT_DATE())  AND YEAR(`cal_date`)=YEAR(CURRENT_DATE())";			    
			    $fetchtra=mysql_query($qwe);
			    }
			   // echo $qwe;
                    ?>
		     <table class="table">
                        <tr>
                            <th colspan="3" style="text-align: center;"><?php if($table!=''){echo strtoupper($table); }else{ echo "ALL LOAN";} ?></th>
                        </tr>
                        
                     </table>
		     <div style="float: left;width: 100%;" >
						
						<table class="table"  style="font-size: 12px;word-break: break-all;" >
												<tr>
												    <th  style="font-weight:bold;text-align: center;" colspan="8">DEMAND</th>
												    <th  style="font-weight:bold;text-align: center;" colspan="9">RECEIPT</th>
												    <th  style="font-weight:bold;text-align: center;" colspan="3">REPORT</th>
												</tr>
												<tr>
														    <th>#</th>
														    <th>A/c No.</th>
														    <th>Loan Dt.</th>
														    <th>OD Int.</th>
														    <th>OD Pri.</th>
														    <th>Cur Int.</th>
														    <th>Cur Pri.</th>
														    <th>Total</th>
														
														    <th>Dt.</th>
														    <th>Int OD</th>
														    <th>Pri. OD</th>
														    <th>Cur. Int.</th>
														    <th>Cur. Pri.</th>
														    <th>Pre-paid Pri.</th>
														    <th>Total Pri.</th>
														    <th>Total Coll.</th>
														    <th>Outstanding</th>
														    
														    <th>Int OD</th>
														    <th>Pri. OD</th>
														    <th>Total OD</th>
														
														
												</tr>
												<?php
												$i=0;
												$d_odint=0;
												$d_odprn=0;
												$d_crint=0;
												$d_crprn=0;
												$d_tot=0;
												
												$c_odint=0;
												$c_odprc=0;
												$c_crint=0;
												$c_crprn=0;
												$c_prn=0;
												$c_prepr=0;
												$c_coll=0;
                                                $outstanding=0;
												
												$r_odint=0;
												$r_odprn=0;
												$r_odtot=0;
												
												
												while($restra=mysql_fetch_array($fetchtra))
												{
												$str=substr($restra['accountno'], 0, 2);					 
												if($str=='GL'){ $table_name="goldloan";}
												else if($str=='DL'){ $table_name="demand_loan";}
												else if($str=='BL'){ $table_name="businessloan";}
												else if($str=='AL'){ $table_name="agricultureloan";}
												else if($str=='EL'){ $table_name="enterpriseloan";}
												else if($str=='GR'){ $table_name="grouploan";}
												else if($str=='SL'){ $table_name="staffloan";}
												$det=mysql_fetch_array(mysql_query("select * from $table_name where `loan_accno`='$restra[accountno]'"));
												if($det['loancomplited']==0){
												$i++;
												$odprincipal=$det['odprincipal'];
												$odintrest=$det['odintrest'];
												
												
												/****************Current Principal & Interest Calculation ********************/
												    $currentod_cal_date=$det['od_cal_date'];
												    $currdate=date("Y-m-d");
												    $vlgday=date("d",strtotime($restra['cal_date']));
												    $currentvillagedate=date("Y-m-$vlgday");
												    $no=$det['plan'];
												    $ldd= date("d",strtotime($det['loan_given_date']));
												    if($ldd <= $vlgday){
												     $plan=$no;
												    }else{
													if(strtotime($det['loan_given_date']) < strtotime("2015-11-30")){
													   $plan=$no;
													}else{
													   $plan=$no-1;
													}
												    }
												    
													if(strtotime($det['loan_given_date']) == strtotime($currentod_cal_date) && strtotime($currdate)<=strtotime($currentvillagedate))
												    {
												     //echo "ok";
														       $differenc = abs(strtotime($det['od_cal_date']) - strtotime($currdate));
														       //$difference = abs(strtotime($currentvillagedate) - strtotime($currentloan_given_date));
														       $days=round($difference/3600/24);
														       $p=$det['amount_topay'];
														       $t=$days;
														       $r=$det['intrestrate']/365;
														       //echo $p."---".$t."---".$r;
														       $cuint=round(($p*$t*$r)/100);
														       $cuprin=0;
												    }
												    else
												    {
												      //echo "notok";
												      $enddate=date("Y-m-d", strtotime("+1 month", strtotime($det['od_cal_date'])));
												      $difference = abs(strtotime($enddate) - strtotime($det['od_cal_date']));
														       
														       $days=round($difference/3600/24);
														       $p=$det['amount_topay'];
														       $t=$days;
														       $r=$det['intrestrate']/365;
														       // echo $p."---".$t."---".$r;
                                                               $cuint=round(($p*$t*$r)/100);
                                                               $cuprin=($det['loangiven']/$plan);
												    }
												    if($table_name="goldloan" || $table_name="demand_loan")
                                                    {
                                                        $enddate=date("Y-m-d", strtotime("+$plan month", strtotime($det['loan_given_date'])));
                                                        // echo strtotime(date("Y-m",strtotime($currdate)))."----".strtotime(date("Y-m",strtotime($enddate)));
                                                        if(strtotime(date("Y-m",strtotime($currdate)))==strtotime(date("Y-m",strtotime($enddate)))){
														   // $cuprin=$det['amount_topay'];
                                                           $cuprin=$det['amount_topay']-$odprincipal; 
													       }													      
													       else{
														   $cuprin=0;	 
													       }
												    }
												    
									    
												/****************Current Principal & Interest Calculation ********************/
												if($cuprin==$odprincipal){
												    $cuprin=0;
												}
												$tot_demand=$odintrest+$odprincipal+$cuint+$cuprin;
												?>
												<tr <?php if($restra['outstanding']==0){ ?>style="background:  red" <?php } ?>>
														    <td><?php echo $i; ?></td>
														    <td><?php echo $restra['accountno']; ?></td>
														    <td><?php echo date("d-m-Y",strtotime($det['loan_given_date'])); ?></td>
														    <td><?php echo $odintrest; ?></td>
														    <td><?php echo $odprincipal; ?></td>
														    <td><?php echo $cuint; ?></td>
														    <td><?php echo $cuprin; ?></td>
														    <td><?php echo $tot_demand; ?></td>
														
														    <td><?php if($restra['coll_date']=='0000-00-00'){ echo date("d-m-Y",strtotime($restra['cal_date'])); }else{ echo date("d-m-Y",strtotime($restra['coll_date']));} ?></td>
														    <td><?php echo $restra['b_od_int']; ?></td>
														    <td><?php echo $restra['b_od_pri']; ?></td>
														    <td><?php echo $restra['b_cur_int']; ?></td>
														    <td><?php echo $restra['b_cur_pri']; ?></td>
														    <td><?php echo $restra['a_pre_pri']; ?></td>
														    <td><?php echo $restra['tot_pr']; ?></td>
														    <td><?php echo $restra['collection']; ?></td>
														    <td><?php echo $restra['outstanding']; ?></td>
														    
														    <td><?php echo $restra['a_od_int']; ?></td>
														    <td><?php echo $restra['a_od_pr']; ?></td>
														    <td><?php echo $restra['a_tot_od']; ?></td>
 
												</tr>
												<?php
												$d_odint=$d_odint+$odintrest;
												$d_odprn=$d_odprn+$odprincipal;
												$d_crint=$d_crint+$cuint;
												$d_crprn=$d_crprn+$cuprin;
												$d_tot=$d_tot+$tot_demand;
												
												$c_odint=$c_odint+$restra['b_od_int'];
												$c_odprc=$c_odprc+$restra['b_od_pri'];
												$c_crint=$c_crint+$restra['b_cur_int'];
												$c_crprn=$c_crprn+$restra['b_cur_pri'];
												$c_prn=$c_prn+$restra['tot_pr'];
												$c_prepr=$c_prepr+$restra['a_pre_pri'];
												$c_coll=$c_coll+$restra['collection'];
												$outstanding=$outstanding+$restra['outstanding'];
												$r_odint=$r_odint+$restra['a_od_int'];
												$r_odprn=$r_odprn+$restra['a_od_pr'];
												$r_odtot=$r_odtot+$restra['a_tot_od'];
												
												}
												}
												?>
												<tr>
														    <th colspan="3">Total</th>														    
														    <th><?php echo $d_odint;?></th>
														    <th><?php echo $d_odprn;?></th>
														    <th><?php echo $d_crint;?></th>
														    <th><?php echo $d_crprn;?></th>
														    <th><?php echo $d_tot;?></th>
														
														    <th></th>
														    <th><?php echo $c_odint;?></th>
														    <th><?php echo $c_odprc;?></th>
														    <th><?php echo $c_crint;?></th> 
														    <th><?php echo $c_crprn;?></th>
														    <th><?php echo $c_prepr;?></th>
														    <th><?php echo $c_prn;?></th>
														    <th><?php echo $c_coll;?></th>
														    <th><?php echo $outstanding;?></th> 
														    
														    <th><?php echo $r_odint;?></th>
														    <th><?php echo $r_odprn;?></th>
														    <th><?php echo $r_odtot;?></th>
												</tr>
												
							</table>
		     </div>
	    
		    </div>
				
				 <table class="table">
		   <tr>
			    <td style="text-align: center;" colspan="7"><input type="button" value="Print" onClick="printContent('srch')" /></td>
			   
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

</body>
</html><?php } ?>