<?php
include_once("function.php");
//ini_set("display_errors",1);
?>
<!--autocomplete start-->
<link rel="stylesheet" href="css/jquery-ui.css">
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
 <!--autocomplete end-->
<style>
    .form-control{width: 300;}
</style>
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
             <?php echo date("d-m-Y");?>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i>MPR Report</h2>

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
		     <form action="#" method="post">
			    <table>
				
			       <tr>
				    <td>Year </td>
				    <td>
					<select name="year">
					    <option value="<?php echo $st=date("Y") ;?>"><?php echo $st=date("Y") ;?></option>
					    <?php
					    for($i=0;$i<10;$i++){
					    $st=$st-1;
					    ?>
					    <option value="<?php echo $st ;?>"><?php echo $st ;?></option>
					    <?php
					    }
					    ?>
					</select>
				    </td>
				    <td>Month</td>
				    <td>
					<select name="month">
					    <option value='01'>January</option>
					    <option value='02'>February</option>
					    <option value='03'>March</option>
					    <option value='04'>April</option>
					    <option value='05'>May</option>
					    <option value='06'>June</option>
					    <option value='07'>July</option>
					    <option value='08'>August</option>
					    <option value='09'>September</option>
					    <option value='10'>October</option>
					    <option value='11'>November</option>
					    <option value='12'>December</option>
					</select>
				    </td>
				    <td>
					<input type="submit" name="submit" value="Submit" />
				    </td>
			       </tr>
			    </table>
		     </form>
                     <table style="float: left;width: 100%;" class="table" >
                        <tr>
			   
			    <th>Outreach</th>
			    <th>
			    <?php
			    if(isset($_POST['submit'])){
				if($_POST['month']==1){ $mon="Jan"; }
				if($_POST['month']==2){ $mon="Feb"; }
				if($_POST['month']==3){ $mon="Mar"; }
				if($_POST['month']==4){ $mon="Apr"; }
				if($_POST['month']==5){ $mon="May"; }
				if($_POST['month']==6){ $mon="Jun"; }
				if($_POST['month']==7){ $mon="Jul"; }
				if($_POST['month']==8){ $mon="Aug"; }
				if($_POST['month']==9){ $mon="Sep"; }
				if($_POST['month']==10){ $mon="Oct"; }
				if($_POST['month']==11){ $mon="Nov"; }
				if($_POST['month']==12){ $mon="Dec"; }
				
				echo $mon."  ".$_POST['year'];
				}else{
				    echo  $dt=date("M")."  ".date("Y");
				    }
				?>
				
			    </th>
			    <!-- <th>Plan for Jul 2012</th>
			    <th>Achived</th>
                            <th>Cumulative at end of Jul 2012</th> -->
			</tr>
			<tr>
                            
                            <td colspan="5" style="text-align: center;">Member Profile</td>
                        </tr>
                        <?php
			if(isset($_POST['submit'])){
			   //echo  $_POST['year'];
			  // echo  $_POST['month'];
			    $df=$_POST['year']."-".$_POST['month']."-"."01";
			   $dt=date("Y-m-d",strtotime($df));
			}else{
			    $dt=date("Y-m-d");
			}
			
			$first_day_this_month = date('Y-m-01',strtotime($dt)); 
			$last_day_this_month  = date('Y-m-t',strtotime($dt));
			$range=" DATE(`join_date`) BETWEEN '$first_day_this_month' AND '$last_day_this_month' ";
                        $q1=mysql_query("select * from `member` where `cast`='1' and $range");
                        $q2=mysql_query("select * from `member` where `cast`='2' and $range");
                        $q3=mysql_query("select * from `member` where `cast`='3' and $range");
                        $q4=mysql_query("select * from `member` where `cast`='4' and $range");
                        $q5=mysql_query("select * from `member` where `cast`='5' and $range");
                        $q6=mysql_query("select * from `member` where `cast`='6' and $range");
                        $ur=mysql_num_rows($q1);
                        $obc=mysql_num_rows($q2);
                        $sc=mysql_num_rows($q3);
                        $st=mysql_num_rows($q4);
                        $minority=mysql_num_rows($q5);
                        $gen=mysql_num_rows($q6);
                        ?>
                        <tr>
                            
                            <td>UR</td>
                            <td><?php echo $ur;?></td>
                            <!--<td></td>
                            <td></td>
                            <td></td>-->
                        </tr>
                         <tr>
                           
                            <td>OBC</td>
                            <td><?php echo $obc;?></td>
                            <!--<td></td>
                            <td></td>
                            <td></td>-->
                        </tr>
                          <tr>
                            
                            <td>SC</td>
                            <td><?php echo $sc;?></td>
                            <!--<td></td>
                            <td></td>
                            <td></td>-->
                        </tr>
                         <tr>
                            
                            <td>ST</td>
                            <td><?php echo $st;?></td>
                           <!--<td></td>
                            <td></td>
                            <td></td>-->
                        </tr>
                        <tr>
                            
                            <td>Minority (Muslims, Christians, Others)</td>
                            <td><?php echo $minority;?></td>
                           <!--<td></td>
                            <td></td>
                            <td></td>-->
                        </tr>
                        <tr>
                            
                            <td>GC</td>
                            <td><?php echo $gen; ?></td>
                           <!--<td></td>
                            <td></td>
                            <td></td>-->
                        </tr>
			<tr>
                            
                            <td colspan="5" style="text-align: center;">Leverage</td>
                        </tr>
			<?php
			
			$rnge=" DATE(`date`) BETWEEN '$first_day_this_month' AND '$last_day_this_month' ";
			$bank=mysql_query("select * from `bank`");
			while($resbank=mysql_fetch_array($bank)){
			    $bdet=mysql_query("select SUM(`amount`) as amt from `bankdetails` where `bankname`='$resbank[bankname]' and $rnge ");
			    $resbdet=mysql_fetch_array($bdet);
			?>
			 <tr>
                           
                            <td><?php echo $resbank['bankname'];?></td>
                            <td><?php echo $resbdet['amt'];?></td>
                            <!--<td></td>
                            <td></td>
                            <td></td>-->
                        </tr>
			<?php
			}
			?>
			<tr>
                              <td colspan="5" style="text-align: center;">Loan Details of Cooperative/members</td>
                        </tr>
			<?php
			$loan=mysql_query("select * from `folio` where `type`='loan'");
			$recived_application=0;
			$app_processed=0;
			$loan_disbursed=0;
			$total_disbursement_amount=0;
			$active_lonee=0;
			$principaldue=0;
			$intrestdue=0;
			$outstanding=0;
			while($resloan=mysql_fetch_array($loan)){
			    if($resloan['id']==6){ $table='grouploan';}
			    if($resloan['id']==7){ $table='agricultureloan';}
			    if($resloan['id']==8){ $table='businessloan';}
			    if($resloan['id']==9){ $table='enterpriseloan';}
			    if($resloan['id']==10){ $table='demand_loan';}
			    if($resloan['id']==11){ $table='goldloan';}
			    if($resloan['id']==12){ $table='loan';}
			    //echo "select * from $table where `is_approved`=0 and `aprisal`=0".'</br>';
			    $ln=mysql_query("select * from $table where `is_approved`=0 and `aprisal`=0 and $rnge");
			    $cntln=mysql_num_rows($ln);
			    $recived_application=$recived_application+$cntln;
			    
			    $lnap=mysql_query("select * from $table where `is_approved`=1 and `aprisal`=0  and $rnge");
			    $cntlnap=mysql_num_rows($lnap);
			    $app_processed=$app_processed+$cntlnap;
			    
			    $lndis=mysql_query("select * from $table where `is_approved`=1 and `aprisal`=1  and $rnge");
			    $cntlndis=mysql_num_rows($lndis);
			    $loan_disbursed=$loan_disbursed+$cntlndis;
			    
			    $lndisamt=mysql_query("select * from $table where `is_approved`=1 and `aprisal`=1  and $rnge");
			    $reslndisamt=mysql_fetch_array($lndisamt);
			    $total_disbursement_amount=$total_disbursement_amount+$reslndisamt['loangiven'];
			    
			 //  echo "select * from $table where `is_approved`=1 and `aprisal`=1 and `loancomplited`=0  and $rnge";
			    $lnee=mysql_query("select * from $table where `is_approved`=1 and `aprisal`=1 and `loancomplited`=0  and $rnge");
			    $cntlnee=mysql_num_rows($lnee);
			    $active_lonee=$active_lonee+$cntlnee;
			    
			    $pridue=mysql_query("select * from $table where `is_approved`=1 and `aprisal`=1 and `loancomplited`=0  and $rnge");
			    $respridue=mysql_fetch_array($pridue);
			    $principaldue=$principaldue+$respridue['odprincipal'];
			    $intrestdue=$intrestdue+$respridue['odintrest'];
			    $outstanding=$outstanding+$respridue['amount_topay'];
			}
			?>
			<tr>
                            
                            <td>No. of  loan application received </td>
                            <td><?php echo $recived_application;?></td>
                           <!--<td></td>
                            <td></td>
                            <td></td>-->
                        </tr>
			<tr>
                           
                            <td>Loan application processed </td>
                            <td><?php echo $app_processed;?></td>
                           <!--<td></td>
                            <td></td>
                            <td></td>-->
                        </tr>
			<tr>
                            
                            <td>No. of indl. loans disbursed </td>
                            <td><?php echo $loan_disbursed;?></td>
                          <!--<td></td>
                            <td></td>
                            <td></td>-->
                        </tr>
			<tr>
                            
                            <td>Total Disbursement amount </td>
                            <td><?php echo $total_disbursement_amount;?></td>
                           <!--<td></td>
                            <td></td>
                            <td></td>-->
                        </tr>
			<tr>
                            
                            <td>Average Loan amount per member </td>
                            <td><?php  $avgamt=$total_disbursement_amount/$loan_disbursed; echo  number_format($avgamt, 2, '.', '') ; ?></td>
                           <!--<td></td>
                            <td></td>
                            <td></td>-->
                        </tr>
			<tr>
                           
                            <td>No. of clients having taken 1st Loan </td>
                            <td></td>
                          <!--<td></td>
                            <td></td>
                            <td></td>-->
                        </tr>
			<tr>
                            
                            <td>No. of Repeat Loan (2nd Loan) </td>
                            <td></td>
                          <!--<td></td>
                            <td></td>
                            <td></td>-->
                        </tr>
			<tr>
                           
                            <td>No. of Repeat Loan(3rd Loan) </td>
                            <td></td>
                           <!--<td></td>
                            <td></td>
                            <td></td>-->
                        </tr>
			<tr>
                            
                            <td>No. of Repeat Loan (>3 Loan) </td>
                            <td></td>
                          <!--<td></td>
                            <td></td>
                            <td></td>-->
                        </tr>
			<tr>
                            
                            <td>Active Loanee</td>
                            <td><?php echo $active_lonee; ?></td>
                           <!--<td></td>
                            <td></td>
                            <td></td>-->
                        </tr>
			<tr>
			    
			    <td>Principal Amount Due</td>
			    <td><?php echo  number_format($principaldue, 2, '.', '') ;?></td>
			   <!--<td></td>
                            <td></td>
                            <td></td>-->
			</tr>
			<tr>
			    
			    <td>Principal Realized</td>
			    <td></td>
			   <!--<td></td>
                            <td></td>
                            <td></td>-->
			</tr>
			<tr>
			    
			    <td>Rate of Interest on Loan</td>
			    <td></td>
			   <!--<td></td>
                            <td></td>
                            <td></td>-->
			</tr>
			<tr>
			    
			    <td>Interest Due</td>
			    <td><?php echo number_format($intrestdue, 2, '.', ''); ?></td>
			   <!--<td></td>
                            <td></td>
                            <td></td>-->
			</tr>
			<tr>
			   
			    <td>Loan Outstanding</td>
			    <td><?php echo number_format($outstanding, 2, '.', ''); ?></td>
			   <!--<td></td>
                            <td></td>
                            <td></td>-->
			</tr>
			<tr >
			    <td colspan="5" style="text-align: center;"><input type="button" value="Print" onclick="printContent('printDiv')" /></td>
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
</html>