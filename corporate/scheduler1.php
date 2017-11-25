<?php
include_once("function.php");
//ini_set("display_errors",1);
$id=$_REQUEST['id'];
$table=$_GET['table'];
$s=mysql_query("select * from $table where `id`='$id' and `status`='0' and `is_approved`='1'")or die(mysql_error());
$rs=mysql_num_rows($s);
if($rs>0)
{
$res=mysql_fetch_array($s);
$cus=mysql_query("select * from `customer` where `customer_id`='$res[customer_id]'")or die(mysql_error());
$rescus=mysql_fetch_array($cus);
?>
<!--autocomplete start-->
<link rel="stylesheet" href="css/jquery-ui.css">
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
 <!--autocomplete end-->
<style>
    .form-control{width: 300;}
    .tableprint
    {font-family:arial;
    font-size:14px;
    }
</style>
<style media=print>
    #printhide{
	display:none;
    }
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
<script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
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
	
	<link href="css/jsDatePick_ltr.min.css" rel='stylesheet'>
	<script src="js/js/jsDatePick.min.1.3.js"></script>
	<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"d3",
			dateFormat:"%Y-%m-%d"
			
		});
	};
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
<div style="float: right; color: red;">
    
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
	    <?php echo date("Y-m-d");?>
	</li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i>Loan Schedule</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content" id="printDiv" style="width:100%; float:left;height: auto;background-color: #fff;border: #f5f5f5 solid 0.5px; border-radius: 4px;-webkit-box-shadow: 0 0 10px rgba(189,189,189,.4);">
                
                     <table style="float: left;width: 100%; font-family:arial; font-size:14px;" >
			<tr>
			    <td colspan="3">
				Name  :  <?php echo $res['name']; ?></br>
				C/o  : <?php echo $rescus['guardian_name']; ?></br>
				At  :  <?php echo $res['address']; ?></br>
				P.O  :  <?php echo $res['post']; ?></br>
				Security A/c No  :  <?php echo $res['loan_against_accno']; ?></br>
			    </td>
			    <td  colspan="4">
				Loan A/c No.   <?php echo $res['loan_accno']; ?></br>
				Loan Amount  :  <?php echo $res['loangiven']; ?></br>
				Date of Disbursement  :  <?php echo date("d-m-Y",strtotime($res['loan_given_date'])); ?></br>
				Loan Period  :  <?php echo $res['plan']; ?> Months</br>
				<?php
				$sec=mysql_query("select * from  $res[loan_against_acc] where `acc_no`='$res[loan_against_accno]' ");
				$ressec=mysql_fetch_array($sec);
				?>
				Security Amount :<?php  if($res['loan_against_acc']!='compulsarydeposite'){echo $ressec['deposited_amt'];   }else{ echo $ressec['total_amt']; } ?>
			  
			    </td>
			</tr>
                        <tr style="line-height: 0.7;">
			    <th class="tableprint">Slno</th>
			    <th class="tableprint">Date</th>
			    <!--<th>Perticulars</th>-->
			    <th class="tableprint">No. of Days</th>
			    <th class="tableprint">Interest</th>
			    <th class="tableprint">Principal</th>
			    <th class="tableprint">Total</th>
			    <th class="tableprint">Outstanding Balance</th>
			</tr>
			<?php
			  $sdl=mysql_query("select * from $table where `id`='$id' and `status`='0' and `is_approved`='1'")or die(mysql_error());
			  $ressdl=mysql_fetch_array($sdl);
			  
			   $ressdl['village'];
			  
			  $fetvill=mysql_query("select * from `prefix` where `slno`='$ressdl[village]'");
                          $rvill=mysql_fetch_array($fetvill);
			  $vildt=$rvill['date'];
			  $d= date("d",strtotime($vildt));
			 
			  $loanamt=$ressdl['loangiven'];
			  $year=$ressdl['plan'];
			  $no=$year;
			 // $emi=$loanamt/($no);
			 
			  $irpermonth=$ressdl['intrestrate']/12;
			  $dispersaldt=$ressdl['loan_given_date'];
			  $my=date("Y-m",strtotime($dispersaldt));
                          $loandate=$res['loan_given_date'];
			  $areadt=date("$my-$d");
			  $firstinstalldate=date("Y-m-d", strtotime("+1 month", strtotime($areadt)));
			  $cnt=1;
                          $totint=0;
			  $subtot=0;
			  $totpr=0;
			  ?>
			  <tr class="tableprint" style="line-height: 0.7;">
			    <td><?php echo $cnt; ?></td>
			    <td><?php echo date("d-m-Y",strtotime($res['loan_given_date'])); ?></td>
			    <!--<td>Loan Dispersal</td>-->
			    <td>--</td>
			    <td>--</td>
			    <td>--</td>
			    <td>--</td>
			    <td><?php echo number_format("$loanamt",2); ?></td>
			 </tr>
			  <?php
                          
			  $emi=$loanamt/($no);
                          $str = strtotime($areadt) - (strtotime($loandate));
			   $diff=round($str/3600/24);
                            if($diff>0){
                                $cnt++;
                                 $r=$ressdl['intrestrate']/365;
				 $t=$diff;
				 $intrest=($loanamt*$t*$r)/100;
				
                            ?>
                            <tr>
                                <td><?php echo $cnt; ?></td>
                                <td><?php echo date("d-m-Y",strtotime($areadt)); ?></td>
                                <td><?php echo $diff; ?> Days</td>
                                <td><?php echo number_format("$intrest",2); $totint=$totint+$intrest; ?></td>
                                <td><?php $tpr = 0.00; echo number_format("$tpr",2);  $totpr=$totpr+$tpr; ?></td>
                                <td><?php 
                                    $tot1=round($intrest);
                                    echo number_format("$tot1",2);
                                    $subtot=$subtot+$tot1;
                                    ?>
                                </td>
                                <td><?php echo number_format("$loanamt",2);  ?></td>
                            </tr>
                            <?php
                             $dt=strtotime($areadt);
                             $outball=$outbal;
			     $loanamtt=$loanamt;
			     $p=$loanamt;
                             $pre_dt = $areadt;
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
				 $loanamtt-=$emi;
				// $loanamtt=round($loanamtt);
				 $dt=strtotime($final);
                                 ?>
                                 <tr>
                                    <td><?php echo $cnt; ?></td>
                                    <td><?php echo date("d-m-Y",strtotime($final)); ?></td>
                                   <!--<td>Loan Dispersal</td>-->
                                    <td><?php echo $daydiff; ?> Days</td>
                                    <td><?php  echo number_format("$intrest",2); $totint=$totint+$intrest; ?></td>
                                    <td><?php $tpr = $emi;  echo number_format("$emi",2);   $totpr=$totpr+$tpr; ?></td>
                                    <td><?php 
                                        echo number_format("$total",2);
                                        $tot1 = $total;
                                        $subtot=$subtot+$tot1;
                                        
                                        ?></td>
                                    <td><?php  echo number_format("$loanamtt",2);  ?></td>
                                </tr>
                                <?php
                                $pre_dt=$final;
                                }
                               ?>
                            
                            <?php
                            }else{
                            $emi=$loanamt/($no-1);
                            $tot1=0;
			    $dt=strtotime($areadt);
			    $outball=$outbal;
			    $loanamtt=$loanamt;
			    $p=$loanamtt;
			    $pre_dt = $res['loan_given_date'];
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
				 $loanamtt-=$emi;
				// $loanamtt=round($loanamtt);
				 $dt=strtotime($final);?>
			<tr>
			    <td><?php echo $cnt; ?></td>
			    <td><?php echo date("d-m-Y",strtotime($final)); ?></td>
			   <!--<td>Loan Dispersal</td>-->
			    <td><?php echo $daydiff; ?> Days</td>
			    <td><?php  echo number_format("$intrest",2); $totint=$totint+$intrest; ?></td>
			    <td><?php if($i==1){ echo $tpr = 0.00; }else{  $tpr =$emi;  echo number_format("$emi",2); }  $totpr=$totpr+$tpr; ?></td>
			    <td><?php if($i==1){
				$tot1=round($intrest);
				echo number_format("$tot1",2);
				}
				else
				{
				    echo number_format("$total",2);
				     $tot1 = $total;
				}
				
				$subtot=$subtot+$tot1;
				
				?></td>
			    <td><?php  if($i==1){ echo $loanamtt = $ressdl['loangiven']; }else{ echo number_format("$loanamtt",2); }  ?></td>
			</tr>
                            <?php
                            $pre_dt=$final;
                            }}
                          ?>
                        <tr style="color:red;font-weight: bold; ">
			    <td colspan="3" align="right">Total :</td>
			    <td><?php $a=round($totint); echo number_format("$a",2) ;?></td>
			     <td><?php  $b=round($totpr); echo number_format("$b",2); ?></td>
			    <td><?php $c=round($subtot); echo number_format("$c",2); ?></td>
			    <td></td>
			</tr>
			<tr>
			    <td colspan="7">
				&nbsp;
			    </td>
			</tr>
			<tr>
			    <td colspan="7">
				<strong>Declaration</strong>
				</br></br>
				<p>
				    I <strong><?php echo $res['name']; ?></strong> receive a loan amount of <strong>Rs.<?php echo $res['loangiven']; ?>/-</strong> from <strong>AIR credit co-operative</strong> and read the above mentioned schedule and submit
				    to repay the amount as per the above schedule for which i have deposited the post dated cheque of ___________________________________ .
				</p>
				</br></br>
				<strong style="float: right;">Signature</strong>
			    </td>
			</tr>
			<tr >
			    <td colspan="4"></td>
			    <td colspan="2" id="printhide"><input type="button" value="Print" onclick="printContent('printDiv')" /></td>
			   
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
</html><?php }else{ header("location:index1.php");} ?>