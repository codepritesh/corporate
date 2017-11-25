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
	'value'  => $resloan['loan_accno']."(".$resloan['name'].")",
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
			<div id="srch">
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
		    <div style="float: left;width: 100%;" >
		     <table class="table"  style="font-size: 12px;" >
			<tr>
			    <td  colspan="3" style="font-size: 15px;">
				Name  :  <?php echo $ressdl['name']; ?></br>
				C/o  : <?php echo $resgud['guardian_name']; ?></br>
				At  :  <?php echo $ressdl['address']; ?></br>
				P.O  :  <?php echo $ressdl['post']; ?></br>
				SB A/c No  :  <?php echo $ressdl['loan_against_accno']; ?></br>
			    </td>
			    <td colspan=9" style="font-size: 13px;text-align: center;">
				Loan A/c No.   <?php echo $ressdl['loan_accno']; ?></br>
				Loan Amount  :  <?php echo $ressdl['loangiven']; ?></br>
				Date of Disbursement  :  <?php echo date("d-m-Y",strtotime($ressdl['loan_given_date'])); ?></br>
				Loan Period  :  <?php echo $ressdl['plan']; ?> Months</br></br></br>
			    </td>
			</tr>
		     </table>
		    </div>
		     <div style="float: left;width: 20%;" >
		     <table class="table"  style="font-size: 12px; word-break: break-all;" >
			<tr>
			    <th  style="font-weight:bold;text-align: center;" colspan="3">DEMAND</th>
			</tr>
                        <tr>
			    <th>Date</th>
			    <th>Intrest</th>
			    <th>Princpal</th>
			</tr>
			
			<?php
			    $fetvill=mysql_query("select * from `prefix` where `slno`='$ressdl[village]'");
			    $rvill=mysql_fetch_array($fetvill);
			    $vildt=$rvill['date'];
			    $d= date("d",strtotime($vildt));
			    $loanamt=$ressdl['loangiven'];
			    $year=$ressdl['plan'];
			    $no=$year;
			    $vd= $vlgdayy;
			    $ldd= date("d",strtotime($resvendor['loan_given_date']));
			    
			    if($ldd <= $d){
			     $no=$no;
			    }else{
				 if(strtotime($ressdl['loan_given_date']) < strtotime("2015-11-30")){
				    $no=$no;
				 }else{
				   $no=$no-1; 
				 }
			    }
			    //echo $no."---".$emi;
			    $emi=$loanamt/($no);
			    
			    $dispersaldt=$ressdl['loan_given_date'];
			    $my=date("Y-m",strtotime($dispersaldt));
			    
			    $areadt=date("$my-$d");
			    
			    $firstinstalldate=date("Y-m-d", strtotime("+1 month", strtotime($areadt)));
			    $daysofmonth=date('t',strtotime($dispersaldt));
			    $str = strtotime($areadt) - (strtotime($dispersaldt));
			    $daydiff=round($str/3600/24);
			    $cnt=1;
			    $totpr=0;
			    
			    if(date("d",strtotime($ressdl['loan_given_date']))!= $d){
				if(date("d",strtotime($ressdl['loan_given_date']))>$d){				    
				    $dispersaldt= date("Y-m-d", strtotime("+1 month", strtotime($ressdl['loan_given_date'])));
				    $my=date("Y-m",strtotime($dispersaldt));
				    $areadt=date("$my-$d");
				}else{
				    $my=date("Y-m",strtotime($ressdl['loan_given_date']));
				    $areadt=date("$my-$d");
				}
				$str = strtotime($areadt) - (strtotime($ressdl['loan_given_date']));
				$daydiff=round($str/3600/24);
				
					if($daydiff > 0){
					// echo "OK";
					 $r=$ressdl['intrestrate']/365;
					 $t=$daydiff;
					 $intrest=($loanamt*$t*$r)/100;
					?>
					<tr>
					    <td><?php   echo date("d-m-Y",strtotime($areadt)); ?></td>
					    <td><?php  echo number_format("$intrest",2); $totint=$totint+$intrest; ?></td>
					    <td><?php  echo $tpr = 0.00;  $totpr=$totpr+$tpr; ?></td>
					</tr>
					<?php
					$dt=strtotime($areadt);
					$outball=$outbal;
					$loanamtt=$loanamt;
					$p=$loanamtt;
					$pre_dt = $areadt;
					for($i=1;$i<=$no;$i++){
					 $cnt++;
					 $final = date("Y-m-d", strtotime("+1 month", $dt));
					 $daysofmonth1=date('t',strtotime($final));
					//echo $final."----".$pre_dt."----"."</br>";
					 $str = strtotime($final) - (strtotime($pre_dt));
					 $daydiff=round($str/3600/24);
					 
					 $r=$ressdl['intrestrate']/365;
					 $t=$daydiff;
					 //echo $loanamtt."----".$t."----".$r."</br>";
					 $intrest=($loanamtt*$t*$r)/100;
					 //echo $intrest;
					 //$intrest=round($intrest);
					 $total=$emi+$intrest;
					 $total=round($total);
					 if($table=="demand_loan" || $table=="goldloan" ){
					    if($i==$no){
					    $loanamtt=$ressdl['loangiven'];
					    $emi=$loanamtt;
					    }else{
						$emi=0.00;
					 }}else{
					    if($i>1){
					    $loanamtt-=$emi;
					    }
					 }
					 
					 // $loanamtt=round($loanamtt);
					 $dt=strtotime($final);
					?>
				<tr>
				    <td><?php   echo date("d-m-Y",strtotime($final)); ?></td>
				    <td><?php   echo number_format("$intrest",2); $totint=$totint+$intrest; ?></td>
				    <td><?php   $tpr =$emi;  echo number_format("$emi",2); $totpr=$totpr+$tpr; ?></td>
				</tr>
				
				<?php
				$pre_dt=$final;
				}
				}
			    }else{
				    $emi=$loanamt/($no);
				    $tot1=0;
				    $dt=strtotime($areadt);
				    $outball=$outbal;
				    $loanamtt=$loanamt;
				    $p=$loanamtt;
				    $pre_dt = $ressdl['loan_given_date'];
				    /* with princpal */
				    $totint=0;
				    $subtot=0;
				    $totpr=0;
				    for($i=1;$i<=$no;$i++){
					$cnt++;
					 
					 $final = date("Y-m-d", strtotime("+1 month", $dt));
					 $daysofmonth1=date('t',strtotime($final));
					
					 $str = strtotime($final) - (strtotime($pre_dt));
					 $daydiff=round($str/3600/24);
					  //echo $final."---".$pre_dt."----".$daydiff."</br>";
					 $r=$ressdl['intrestrate']/365;
					 $t=$daydiff;
					 //$t=$daysofmonth1;
					 $intrest=($loanamtt*$t*$r)/100;
					 //$intrest=round($intrest);
					 $total=$emi+$intrest;
					 $total=round($total);
					 //echo $loanamtt."----".$emi;
					  if($table=="demand_loan" || $table=="goldloan" ){
					    if($i==$no){
					    $loanamtt=$ressdl['loangiven'];
					    $emi=$loanamtt;
					    }else{
						$emi=0.00;
					 }}else{
					    if($i>1){
					    $loanamtt-=$emi;
					    }
					 }
					 
					// $loanamtt=round($loanamtt);
					 $dt=strtotime($final);
				?>
				<tr>
				    <td><?php  echo date("d-m-Y",strtotime($final)); ?></td>
				    <td><?php  echo number_format("$intrest",2); $totint=$totint+$intrest; ?></td>
				    <td><?php   $tpr =$emi;  echo number_format("$emi",2); $totpr=$totpr+$tpr; ?></td>
				</tr>
				
				 <?php $pre_dt=$final;
				    } 
			    }
			    ?>
                     </table>
		     </div>
		    <div style="float: left;width: 80%;" >
		    <table class="table"  style="font-size: 12px; word-break: break-all;" >
		    <tr>
			    <th  style="font-weight:bold;text-align: center;" colspan="9">RECEIPT</th>
			    <th  style="font-weight:bold;text-align: center;" colspan="3">REPORT</th>
		    </tr>
                    <tr>
                        <th>Date</th>
			<th>Int O.D</th>
			<th>Principal O.D</th>
			<th>Cur. Int.</th>
			<th>Cur. Principal</th>
			<th>Pre-paid Principal</th>
			<th>Total Principal</th>
			<th>Total Collection</th>
			<th>Outstanding</th>
			<th>Int O.D</th>
			<th>Principal O.D</th>
			<th>Total O.D</th>
                    </tr>
                   <?php
			//echo "select * from `transaction_ledger` where `accountno`='$id'";
                        $fetchtra=mysql_query("select * from `transaction_ledger` where `accountno`='$id'");
			while($restra=mysql_fetch_array($fetchtra))
			{
			    $cdt=date("Y-m-d");
			   /* echo $cdt;
			    echo $restra['cal_date'];
			    echo $ressdl['od_cal_date'];
			    echo "</br>";*/
			    if(strtotime(date("Y-m",strtotime($restra['cal_date'])))<=strtotime(date("Y-m",strtotime($cdt)))){

			    if(strtotime(date("Y-m",strtotime($restra['cal_date'])))<=strtotime(date("Y-m",strtotime($ressdl['last_refund_date'])))){
				
			    if($restra['coll_date']!='0000-00-00'){
                    ?>
		     <tr>
                        <td><?php if($restra['coll_date']=='0000-00-00'){ echo  date("d-m-Y", strtotime($restra['cal_date'])); }else{ echo  date("d-m-Y", strtotime($restra['coll_date'])); } ?></td>
			<td><?php echo $restra['b_od_int'];?></td>
			<td><?php echo $restra['b_od_pri'];?></td>
			<td><?php echo $restra['b_cur_int'];?></td>
			<td><?php echo $restra['b_cur_pri'];?></td>
			<td><?php echo $restra['a_pre_pri'];?></td>
			<td><?php echo $restra['tot_pr'] ?></td>
			<td><?php echo $restra['collection'];?></td>
			<td><?php echo $restra['outstanding'];?></td>
			<td><?php echo $restra['a_od_int'];?></td>
			<td><?php echo $restra['a_od_pr'];?></td>
			<td><?php echo $restra['a_tot_od'];?></td>
                    </tr>
		     <?php }else{ ?>
		     <tr>
			<td><?php if($restra['coll_date']=='0000-00-00'){ echo  date("d-m-Y", strtotime($restra['cal_date'])); }else{ echo  date("d-m-Y", strtotime($restra['coll_date'])); } ?></td>
			<td><?php echo "0.00"; ?></td>
			<td><?php echo "0.00"; ?></td>
			<td><?php echo "0.00"; ?></td>
			<td><?php echo "0.00"; ?></td>
			<td><?php echo "0.00"; ?></td>
			<td><?php echo "0.00"; ?></td>
			<td><?php echo "0.00"; ?></td>
			<td><?php echo $restra['outstanding'];?></td>
			<td><?php echo $restra['a_od_int'];?></td>
			<td><?php echo $restra['a_od_pr'];?></td>
			<td><?php echo $restra['a_tot_od'];?></td>
		     </tr>
		     <?php } } } } ?>
		    
		   
                </table>
		</div>
		    
                <?php } ?>
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