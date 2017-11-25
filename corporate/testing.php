<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{ header("location:index.php");}
else
{
$table=$_GET['table'];
//$table="loan";
$getloan=mysql_query("select * from $table where `loan_accno`!=''")or die(mysql_error());
   while($resloan=mysql_fetch_array($getloan))
    {
	$getagentlist[] = array(
	'value'  => $resloan['name']."(".$resloan['loan_accno'].")",
	'idval' => $resloan['loan_accno'],
	'name' => $resloan['name']
	);
    }
    
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
                <form name="arrange" method="post"  enctype="multipart/form-data">
                     <table style="float: left;width: 100%;">
                        <tr>
                            <td colspan="3" style="color: red;font-size: 20px;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; }  ?></td>
                        </tr>
                        <tr id="bydate">
                            <td>Loan Account Number</td><td><input type="text" name="cname" class="form-control" id="cname" required placeholder="Loan Account"></td>
			    <input type="hidden" name="loanid" id="loanid">
                            <!--<td><input type="text" name="sdate" onKeyPress="return IsNumeric(event)" class="form-control" id="sdate" placeholder="Start Date"></td>
                            <td><input type="text" name="edate" onKeyPress="return IsNumeric(event)" class="form-control" id="edate" placeholder="End Date" ></td>-->
                            <td align="center"><input type="submit" name="submit" value="Search" id="search" /></td>
			</tr>
                     </table>
		</form>
	    </div>
            <div class="box-content" style="float: left;width: 100%;">
                     <?php
                    if(isset($_POST['submit']))
                    {
			 $id=htmlentities($_POST['loanid']);
                         $slno=0;
			 $sdl=mysql_query("select * from $table where `loan_accno`='$id' and `status`='0' and `is_approved`='1'")or die(mysql_error());
			 $ressdl=mysql_fetch_array($sdl);
			 $gud=mysql_query("SELECT * FROM  `customer` where `customer_id`= '$ressdl[customer_id]'");
			 $resgud=mysql_fetch_array($gud);
                    ?>
		    <div style="float: left;width: 20%;" >
		     <table class="table"  style="font-size: 12px;" >
			<tr>
			    <td  colspan="3" style="font-size: 15px;">
				Name  :  <?php echo $ressdl['name']; ?></br>
				C/o  : <?php echo $resgud['guardian_name']; ?></br>
				At  :  <?php echo $ressdl['address']; ?></br>
				P.O  :  <?php echo $ressdl['post']; ?></br>
				SB A/c No  :  <?php echo $ressdl['loan_against_accno']; ?></br>
			    </td>
			</tr>
			
                        <tr>
			    <th>Date</th>
			    <th>Intrest</th>
			    <th>Princpal</th>
			</tr>
			<?php
			  $loanamt=$ressdl['loangiven'];
			  $year=$ressdl['plan'];
			  $no=$year;
			  $emi=$loanamt/$no;
			  $irpermonth=$ressdl['intrestrate']/12;
			   $dispersaldt=$ressdl['loan_given_date'];
			  $lastdtofdispersal=date('Y-m-t',strtotime($dispersaldt));
			  $firstdtofdispersal=date('Y-m-01',strtotime($dispersaldt));
			  $firstinstalldate=date("Y-m-d", strtotime("+1 month", strtotime($firstdtofdispersal)));
			  $daysofmonth=date('t',strtotime($dispersaldt));
			  $str = strtotime($lastdtofdispersal) - (strtotime($dispersaldt));
			  $daydiff=floor($str/3600/24);
			  $cnt=1;
			  $intod=0;
			  if($daydiff > 0){
			    $cnt++;
			    $p=$loanamt;
			    $t=$daydiff;
			    $r=$irpermonth/$daysofmonth;
			    $intrest=($p*$t*$r)/100;
			    $outbal=$loanamt;
			    $intod+=$intrest;
			    ?>
			<tr>
			    <td><?php echo date("d-m-Y",strtotime($firstinstalldate)); ?></td>
			    <td><?php echo number_format("$intrest",2); ?></td>
			    <td>--</td>
			</tr>
			    <?php
			    $dt=strtotime($firstinstalldate);
			    $outball=$outbal;
			    $loanamtt=$loanamt;
			    /* with princpal */
			    for($i=1;$i<=$no;$i++){
				$cnt++;
				 $final = date("Y-m-d", strtotime("+1 month", $dt));
				 $daysofmonth1=date('t',strtotime($final));
				 $r=$irpermonth/$daysofmonth1;
				 $t=$daysofmonth1;
				 $total=$emi+$intrest;
				 $intrest=($loanamtt*$daysofmonth1*$r)/100;
				 $loanamtt-=$emi;
				 $dt=strtotime($final);?>
			<tr>
			    <td><?php echo date("d-m-Y",strtotime($final)); ?></td>
			    <td><?php echo number_format("$intrest",2); ?></td>
			    <td><?php echo number_format("$emi",2); ?></td>
			</tr>
			<?php } }else{
			    $dt=strtotime($firstinstalldate);
			    //$outball=$outbal;
			    $loanamtt=$loanamt;
			    /* with princpal */
			    for($i=1;$i<=$no;$i++){
				$cnt++;
				 $final = date("Y-m-d", strtotime("+1 month", $dt));
				 $daysofmonth1=date('t',strtotime($final));
				 $r=$irpermonth/$daysofmonth1;
				 $t=$daysofmonth1;
				 $intrest=($loanamtt*$daysofmonth1*$r)/100;
				 $total=$emi+$intrest;
				 $loanamtt-=$emi;
				 //$dt=strtotime($final);
				 
			?>
			<tr>
			    <td><?php echo date("d-m-Y",strtotime($final)); ?></td>
			    <td><?php echo number_format("$intrest",2); ?></td>
			    <td><?php echo number_format("$emi",2); ?></td>
			</tr>
			<?php }} ?>
                     </table>
		     </div>
		    <div style="float: left;width: 80%;" >
		    <table class="table"  style="font-size: 12px;" >
		    <tr>
                        <td colspan=9" style="font-size: 13px;text-align: center;">
			    Loan A/c No.   <?php echo $ressdl['loan_accno']; ?></br>
			    Loan Amount  :  <?php echo $ressdl['loangiven']; ?></br>
			    Date of Disbursement  :  <?php echo date("d-m-Y",strtotime($ressdl['loan_given_date'])); ?></br>
			    Loan Period  :  <?php echo $ressdl['plan']; ?> Months</br></br></br>
			</td>
                    </tr>
                    <tr>
                        <th style="width: 80px;">Date</th>
			<th>Int O.D</th>
			<th>Principal O.D</th>
			<th>Cur. Int.</th>
			<th>Cur. Principal</th>
			<th>Pre-paid Principal</th>
			<th>Total Principal</th>
			<th>Total Collection</th>
			<th>Outstanding</th>
			<!--<th>Credited Balance</th>
                        <th>Debited Balance</th>-->
                    </tr>
                    
                   <?php
                       
                     if($_POST['sdate']!="" && $_POST['edate']!="" )
                        {
                            $newDate = date("Y-m-d", strtotime($_POST['sdate']));
                            $newDate1 = date("Y-m-d", strtotime($_POST['edate']));
                        $fetchtra=mysql_query("select * from `transaction` where `accountno`='$id' and `date` BETWEEN '$newDate' AND '$newDate1'") or die(mysql_error());
                        }
                     else if($_POST['loanid']!="")
                     {
                        $fetchtra=mysql_query("select * from `transaction` where `accountno`='$id' and `agentid`!=0");
                     }	
		     ?>
		     <tr>
                        <td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><?php echo $ressdl['loangiven'];?></td>
                    </tr>
		     <?php
			$calintod=$intod;
			$calpriod=0;
			$totprincipal=$emi;
		        $restamt=$ressdl['loangiven'];
                        while($restra=mysql_fetch_array($fetchtra))
                        {
			    $slno++;
			   // echo $calpriod;
                    ?>
		    <tr>
                        <td><?php echo date("d-m-Y", strtotime($restra['date']));?></td>
                        <td><?php echo number_format("$calintod",2);?></td>
			<td><?php echo number_format("$calpriod",2);?></td>
			<?php 
				 $daysofmonth=date('t',strtotime($restra['date']));
				 $r=$irpermonth/$daysofmonth;
				 $t=$daysofmonth;
				 $intrest=($restamt*$daysofmonth*$r)/100;
				/* $total=$emi+$intrest;
				 $loanamtt-=$emi; */
		     
			?>
			<td><?php echo number_format($intrest, 2, '.', '');?></td>
			<td><?php echo number_format($emi, 2, '.', '');?></td>
			<td><?php echo number_format($prepaidamt, 2, '.', '');?></td>
			<td><?php echo number_format($totprincipal, 2, '.', '');?></td>
			<td><?php echo $restra['amount'];?></td>
			<td><?php $rest=$restamt-$restra['amount'];echo number_format($rest, 2, '.', ''); ?></td>
                    </tr>
                    <?php
		    $restamt=$rest;
		    $totprincipal=$emi+$calpriod;
		    
		    $lastcolamt=$restra['amount'];
		    $lastint=number_format($intrest, 2, '.', '');
		    $lastpri=number_format($emi, 2, '.', '');
		    $lastintod=number_format("$calintod",2);
		    $lastpriod=$calpriod;
		    $payamt=$lastint+$lastpri+$lastintod+$lastpriod;
		    
		    /*-------------------Prepaid or no Over Dues Calculation--------------------*/
			if($lastcolamt >= $payamt){
			    $restlastcolamt=$lastcolamt-$lastintod;      // Intrest Over Dues Paid
			    $restlastcolamt=$restlastcolamt-$lastpriod;		// Principal Over Dues Paid
			    $restlastcolamt=$restlastcolamt-$lastint;		// Intrest Amt Paid
			    $restlastcolamt=$restlastcolamt-$lastpri;		// Principal Amt Paid
			    $prepaidamt=$restlastcolamt;
			    //echo $calpriod.'----'.$calintod;
			    $calpriod=0;
			    $calintod=0;
			}
		    /*-------------------/Prepaid or no Over Dues Calculation--------------------*/
		    
		    /*--------------------------Over Dues Calculation---------------------------*/
			else{
			    if($lastcolamt >= $lastintod){
				$restlastcolamt=$lastcolamt-$lastintod;
				
				if($restlastcolamt >= $lastpriod){
				    $restlastcolamt=$restlastcolamt-$lastpriod;
				    
				    if($restlastcolamt >= $lastint){
					$restlastcolamt=$restlastcolamt-$lastint;
					
					if($restlastcolamt >= $lastpri ){
					    $restlastcolamt=$restlastcolamt-$lastpri;
					}
					else{
					    $restlastcolamt=$lastpri-$restlastcolamt;
					    $calpriod+=$restlastcolamt;
					}
				    }
				    else{
					$restlastcolamt=$lastint-$restlastcolamt;
					$calintod+=$restlastcolamt;
				    }
				    
				}
				else{
				    $restlastcolamt=$lastpriod-$restlastcolamt;
				    $calpriod+=$restlastcolamt;
				}
			    }
			    else{
				$restlastcolamt=$lastintod-$lastcolamt;
				$calintod+=$restlastcolamt;
			    }
			    
			}
		    /*--------------------------/Over Dues Calculation---------------------------*/
		    }
		    ?>
                </table>
		    </div>
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