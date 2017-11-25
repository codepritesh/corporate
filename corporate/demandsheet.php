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
	
	<link href="css/jsDatePick_ltr.min.css" rel='stylesheet'>
	<script src="js/js/jsDatePick.min.1.3.js"></script>
	<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"d3",
			dateFormat:"%Y-%m-%d"
			
		});
		/*new JsDatePick({
			useMode:2,
			target:"inputField1",
			dateFormat:"%Y-%m-%d"
			
		});
		new JsDatePick({
			useMode:2,
			target:"inputField2",
			dateFormat:"%Y-%m-%d"
			
		});*/
	};
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
    <?php echo date("Y-m-d");?>
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
                <form name="arrange" method="post" action="#" enctype="multipart/form-data">
                   
                   
                     <table style="float: left;width: 100%;">
                        <tr>
                            <td colspan="3" style="color: red;font-size: 20px;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; }  ?></td>
                        </tr>
                           
                        <tr id="bydate">
                            
                             <td> Agent Name</td><td>
                            <select class="form-control" name="agent">
                                <option value="">---Select an Agent ---</option>
                                <?php
                                $agent=mysql_query("select * from `agent`");
                                while($resagent=mysql_fetch_array($agent)){
                                ?>
                                <option value="<?php echo $resagent['id']; ?>"><?php echo $resagent['name']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            </td>
                             
                            <td>Loan Type</td><td>
                            <select class="form-control" name="table">
                                <option value="">---Select Any One ---</option>
                                <option value="agricultureloan">Agriculture Loan</option>
                                <option value="businessloan">Business Loan</option>
                                <option value="loan">Daily Loan</option>
                                <option value="demand_loan">Demand Loan</option>
                                <option value="enterpriseloan">Enterprise Loan</option>
                                <option value="goldloan">Gold Loan</option>
                                <option value="grouploan">Group Loan</option>
                            </select>
                            </td>
			 <td align="center"><input type="submit" name="submit" value="Search" id="search" /></td>
			</tr>
                     </table>
		</form>
               <div id='srch'>                      
                    <?php
                    
                    $table=$_POST['table'];
                    $agent=$_POST['agent'];
                    if($table!='' && $agent!='')
                    { 
                     $i=0;$totodp=0;$totodi=0;$totloan=0;$total=0;$totcp=0;$totci=0;
                     $indtotodp=0;$indtotodi=0;$indtotloan=0;$indtotal=0;$indtotcp=0;$indtotci=0;
                     $alli=0;$alltotodp=0;$alltotodi=0;$alltotloan=0;$alltotal=0;$alltotcp=0;$alltotci=0;
                     
                    $table=$_POST['table'];
                    $agent=$_POST['agent'];
                    $fetchapp=mysql_query("select * from $table  where `loancomplited`=0 and `amount_topay`>0 and `agent_id`='$agent'");
                    
                   // $i=0;$totodp=0;$totodi=0;$totloan=0;$total=0;$totcp=0;$totci=0;
                   // $indtotodp=0;$indtotodi=0;$indtotloan=0;$indtotal=0;$indtotcp=0;$indtotci=0;
                    ?>
                    
                
                    <table class="table">  
                    <tr>
                        <th colspan="11"><?php $res=mysql_fetch_array(mysql_query("select * from `agent` where `id`='$agent' ")); echo $res['name']; ?></th>
                    </tr>
                    <tr>
                        <td colspan="11"><?php echo strtoupper($table);?></td>
                    </tr>
                    <tr>
                        <th>Slno.</th>
                        <th>Name</th>
                        <th>A/c No.</th>
                        <th>Date</th>
                        <th>Loan Amt</th>
                        <th>Outstanding</th>
                        <th>OD Int.</th>
                        <th>OD Pri.</th>
                        <th>Cur. Int.</th>
                        <th>Cur. Pri.</th>
                        <th>Total</th>
                    </tr>
		    <?php
		    while($resfetchapp=mysql_fetch_array($fetchapp)){
            $i++;
			$vlgday= date("d",strtotime(get_villagedate($resfetchapp['village'])));		    
			$no=$resfetchapp['plan'];
			$ldd= date("d",strtotime($resfetchapp['loan_given_date']));
			  if($ldd <= $vlgday){
				$plan=$no;
				}
			    else{
				if(strtotime($resfetchapp['loan_given_date']) < strtotime("2015-11-30")){
				   $plan=$no;
				  }else{
				    $plan=$no-1;
				  }
				}
			$emi=$resfetchapp['loangiven']/$plan;
			$mat_date=date("Y-m-d", strtotime("+$plan month", strtotime($resfetchapp['loan_given_date'])));		   
		    $demand=mysql_fetch_array(mysql_query("select * FROM `transaction_ledger` WHERE `accountno` = '$resfetchapp[loan_accno]' and `cal_date` < CURDATE() order by `cal_date` desc limit 1"));
		    
		     $enddate=get_currentcoll_date($vlgday);
            //$enddate="2017-06-".$vlgday;
		    $difference = abs(strtotime($enddate) - strtotime($resfetchapp['od_cal_date']));
		    $days=round($difference/3600/24);
		    $t=$days;
		    $r=$resfetchapp['intrestrate']/365;
		    $p=$resfetchapp['amount_topay'];
		    
		    if(date("m",strtotime($date))==3)
                    {       
                    $comparedays=28;
                    }
                    else{
                    $comparedays=30;
                    }
                    if($days<$comparedays){
                    $dcupri=0;
                    }else{
                    // echo $resvendor['loangiven'].'---'.$plan;
                    $dcupri=round($emi,2);
                    }
                    $dcuint=round(($p*$t*$r)/100);
                    
                    if(strtotime($demand['coll_date'])>strtotime($demand['cal_date'])){
					$dcupri=0;
					$dcuint=0;
					}
					if($table=="demand_loan" || $table=="goldloan" ||  ((date('d',strtotime($ressdl['loan_given_date']))>$vlgday) && (strtotime($ressdl['loan_given_date'])==strtotime($ressdl['od_cal_date']))) ){
					$dcupri=0;
					}
					if(strtotime(date("Y-m",strtotime($demand['cal_date']))) == strtotime(date("Y-m",strtotime($mat_date))))
					{
					$dcupri=$p-$demand['a_od_pr'];
					}
					//$dodint=$demand['a_od_int'];
					//$dodpri=$demand['a_od_pr'];
					//$dtot=$dcurint+$dcurpri+$dodint+$dodpri;
					
		    ?>
                     <tr>
                            <td><?php echo  $i.'.';?></td>
                            <td><?php echo $resfetchapp['name'].'<br>('.$resfetchapp['phone'].')';?></td>
                            <td><?php echo $resfetchapp['loan_accno'];?></td>
                            <td><?php echo 'Date'.'-'.$vlgday;?></td>
                            <td><?php echo $resfetchapp['loangiven'];?></td>
                            <td><?php echo $resfetchapp['amount_topay'];?></td>
                            <td><?php echo $resfetchapp['odintrest'];?></td>
                            <td><?php echo $resfetchapp['odprincipal'];?></td>
                            <td><?php echo round($dcuint);?></td>
                            <td><?php echo round($dcupri);?></td>
                            <td><?php echo ($resfetchapp['odintrest']+$resfetchapp['odprincipal']+round($dcupri)+round($dcuint));?></td>
                        </tr>
                         <?php
                                $indtotal=$indtotal+$resfetchapp['amount_topay'];
                                $indtotodp=$indtotodp+$resfetchapp['odprincipal'];
                                $indtotodi=$indtotodi+$resfetchapp['odintrest'];
                                $indtotcp=$indtotcp+round($dcupri);
                                $indtotci=$indtotci+round($dcuint);
                                $indtotloan=$indtotloan+$resfetchapp['loangiven'];
						
                                $total=$total+$resfetchapp['amount_topay'];
                                $totodp=$totodp+$resfetchapp['odprincipal'];
                                $totodi=$totodi+$resfetchapp['odintrest'];
                                $totcp=$totcp+round($dcupri);
                                $totci=$totci+round($dcuint);
                                $totloan=$totloan+$resfetchapp['loangiven'];            
                         }  ?>
                         <tr>
                            <th colspan="4" style="text-align: center;">Grand Total</th>
                            <th><?php echo number_format($totloan, 2, '.', '') ;?></th>
                            <th><?php echo number_format($total, 2, '.', '') ;?></th>
                            <th><?php echo number_format($totodi, 2, '.', '') ;?></th>
                            <th><?php echo number_format($totodp, 2, '.', '') ;?></th>                        
                            <th><?php echo number_format($totci, 2, '.', '') ;?></th>
                            <th><?php echo number_format($totcp, 2, '.', '') ;?></th>
                            <th><?php $alltot=($totodi+$totodp+$totci+$totcp); echo number_format($alltot, 2, '.', ''); ?></th>
                    </tr>
                    </table>                    
                    <?php
                        }
                        elseif($agent!='')
                        {
                        $i=0;$totodp=0;$totodi=0;$totloan=0;$total=0;$totcp=0;$totci=0;                        
                        $alli=0;$alltotodp=0;$alltotodi=0;$alltotloan=0;$alltotal=0;$alltotcp=0;$alltotci=0;
                    
                        ?>
                         <table class="table">                     
                            <tr>
                                <th>Slno.</th>
                                <th>Name</th>
                                <th>A/c No.</th>
                                <th>Date</th>
                                <th>Loan Amt</th>
                                <th>Outstanding</th>
                                <th>OD Int.</th>
                                <th>OD Pri.</th>
                                <th>Cur. Int.</th>
                                <th>Cur. Pri.</th>
                                <th>Total</th>
                            </tr>
                        
                        <!-------- Gold Loan ----------->
                        <?php
                        $table='goldloan';
                         $gold=mysql_query("select * from $table  where `loancomplited`=0 and `amount_topay`>0 and `agent_id`='$agent'");
                         ?>
                          <tr>
                            <td colspan="11">Gold Loan</td>
                          </tr>
                          <?php
                        if(mysql_num_rows($gold)>0){
                        $indtotodp=0;$indtotodi=0;$indtotloan=0;$indtotal=0;$indtotcp=0;$indtotci=0;
                         while($resgold=mysql_fetch_array($gold)){
                            $i++;
                            $vlgday= date("d",strtotime(get_villagedate($resgold['village'])));		    
                            $no=$resgold['plan'];
                            $ldd= date("d",strtotime($resgold['loan_given_date']));
                              if($ldd <= $vlgday){
                                $plan=$no;
                                }
                                else{
                                if(strtotime($resgold['loan_given_date']) < strtotime("2015-11-30")){
                                   $plan=$no;
                                  }else{
                                    $plan=$no-1;
                                  }
                                }
                            $emi=$resgold['loangiven']/$plan;
                            $mat_date=date("Y-m-d", strtotime("+$plan month", strtotime($resgold['loan_given_date'])));	     
                            $demand=mysql_fetch_array(mysql_query("select * FROM `transaction_ledger` WHERE `accountno` = '$resgold[loan_accno]' and `cal_date` < CURDATE() order by `cal_date` desc limit 1"));
                            
                             $enddate=get_currentcoll_date($vlgday);
                            //$enddate="2017-06-".$vlgday;
                            $difference = abs(strtotime($enddate) - strtotime($resgold['od_cal_date']));
                            $days=round($difference/3600/24);
                            $t=$days;
                            $r=$resgold['intrestrate']/365;
                            $p=$resgold['amount_topay'];
                            
                            if(date("m",strtotime($date))==3)
                                    {       
                                    $comparedays=28;
                                    }
                                    else{
                                    $comparedays=30;
                                    }
                                    if($days<$comparedays){
                                    $dcupri=0;
                                    }else{
                                    // echo $resvendor['loangiven'].'---'.$plan;
                                    $dcupri=round($emi,2);
                                    }
                                    $dcuint=round(($p*$t*$r)/100);
                                    
                                    if(strtotime($demand['coll_date'])>strtotime($demand['cal_date'])){
                                    $dcupri=0;
                                    $dcuint=0;
                                    }
                                    if($table=="demand_loan" || $table=="goldloan" ||  ((date('d',strtotime($ressdl['loan_given_date']))>$vlgday) && (strtotime($ressdl['loan_given_date'])==strtotime($ressdl['od_cal_date']))) ){
                                    $dcupri=0;
                                    }
                                    if(strtotime(date("Y-m",strtotime($demand['cal_date']))) == strtotime(date("Y-m",strtotime($mat_date))))
                                    {
                                    $dcupri=$p-$demand['a_od_pr'];
                                    }
                                    //$dodint=$demand['a_od_int'];
                                    //$dodpri=$demand['a_od_pr'];
                                    //$dtot=$dcurint+$dcurpri+$dodint+$dodpri;
                                    
                            ?>
                                     <tr>
                                            <td><?php echo  $i.'.';?></td>
                                             <td><?php echo $resgold['name'].'<br>('.$resgold['phone'].')';?></td>
                                            <td><?php echo $resgold['loan_accno'];?></td>
                                            <td><?php echo 'Date'.'-'.$vlgday;?></td>
                                            <td><?php echo $resgold['loangiven'];?></td>
                                            <td><?php echo $resgold['amount_topay'];?></td>
                                            <td><?php echo $resgold['odintrest'];?></td>
                                            <td><?php echo $resgold['odprincipal'];;?></td>
                                            <td><?php echo round($dcuint);?></td>
                                            <td><?php echo round($dcupri);?></td>
                                            <td><?php echo ($resgold['odintrest']+$resgold['odprincipal']+round($dcupri)+round($dcuint));?></td>
                                        </tr>
                                         <?php
                                                $indtotal=$indtotal+$resgold['amount_topay'];
                                                $indtotodp=$indtotodp+$resgold['odprincipal'];
                                                $indtotodi=$indtotodi+$resgold['odintrest'];
                                                $indtotcp=$indtotcp+round($dcupri);
                                                $indtotci=$indtotci+round($dcuint);
                                                $indtotloan=$indtotloan+$resgold['loangiven'];
                                        
                                                $total=$total+$resgold['amount_topay'];
                                                $totodp=$totodp+$resgold['odprincipal'];
                                                $totodi=$totodi+$resgold['odintrest'];
                                                $totcp=$totcp+round($dcupri);
                                                $totci=$totci+round($dcuint);
                                                $totloan=$totloan+$resgold['loangiven'];            
                                         }
                                         ?>
                                         <tr>
                                            <th colspan="4" style="text-align: center;">Total</th>
                                            <th><?php echo number_format($indtotloan, 2, '.', '') ;?></th>
                                            <th><?php echo number_format($indtotal, 2, '.', '') ;?></th>
                                            <th><?php echo number_format($indtotodi, 2, '.', '') ;?></th>
                                            <th><?php echo number_format($indtotodp, 2, '.', '') ;?></th>                        
                                            <th><?php echo number_format($indtotci, 2, '.', '') ;?></th>
                                            <th><?php echo number_format($indtotcp, 2, '.', '') ;?></th>
                                            <th><?php $indalltot=($indtotodi+$indtotodp+$indtotci+$indtotcp); echo number_format($indalltot, 2, '.', ''); ?></th>
                                       </tr>
                                         <?php }else{ ?>
                                          <tr><td colspan="11">No results found...</td></tr>
                                         <?php } ?>
                        
                        <!-------- Gold Loan ----------->
                          
                        
                        <!-------- Demand Loan ----------->
                        <?php
                        $table='demand_loan';
                         $demandloan=mysql_query("select * from `demand_loan`  where `loancomplited`=0 and `amount_topay`>0 and `agent_id`='$agent'");
                         ?>
                          <tr>
                            <td colspan="11">Demand Loan</td>
                          </tr>
                          <?php
                        if(mysql_num_rows($demandloan)>0){
                         $indtotodp=0;$indtotodi=0;$indtotloan=0;$indtotal=0;$indtotcp=0;$indtotci=0;
                         while($resdemandloan=mysql_fetch_array($demandloan)){
                            $i++;
                            $vlgday= date("d",strtotime(get_villagedate($resdemandloan['village'])));		    
                            $no=$resdemandloan['plan'];
                            $ldd= date("d",strtotime($resdemandloan['loan_given_date']));
                              if($ldd <= $vlgday){
                                $plan=$no;
                                }
                                else{
                                if(strtotime($resdemandloan['loan_given_date']) < strtotime("2015-11-30")){
                                   $plan=$no;
                                  }else{
                                    $plan=$no-1;
                                  }
                                }
                            $emi=$resdemandloan['loangiven']/$plan;
                            $mat_date=date("Y-m-d", strtotime("+$plan month", strtotime($resdemandloan['loan_given_date'])));
                            
                            $demand=mysql_fetch_array(mysql_query("select * FROM `transaction_ledger` WHERE `accountno` = '$resdemandloan[loan_accno]' and `cal_date` < CURDATE() order by `cal_date` desc limit 1"));
                            
                             $enddate=get_currentcoll_date($vlgday);
                            //$enddate="2017-06-".$vlgday;
                            $difference = abs(strtotime($enddate) - strtotime($resdemandloan['od_cal_date']));
                            $days=round($difference/3600/24);
                            $t=$days;
                            $r=$resdemandloan['intrestrate']/365;
                            $p=$resdemandloan['amount_topay'];
                            
                            if(date("m",strtotime($date))==3)
                                    {       
                                    $comparedays=28;
                                    }
                                    else{
                                    $comparedays=30;
                                    }
                                    if($days<$comparedays){
                                    $dcupri=0;
                                    }else{
                                    // echo $resvendor['loangiven'].'---'.$plan;
                                    $dcupri=round($emi,2);
                                    }
                                    $dcuint=round(($p*$t*$r)/100);
                                    
                                    if(strtotime($demand['coll_date'])>strtotime($demand['cal_date'])){
                                    $dcupri=0;
                                    $dcuint=0;
                                    }
                                    if($table=="demand_loan" || $table=="goldloan" ||  ((date('d',strtotime($ressdl['loan_given_date']))>$vlgday) && (strtotime($ressdl['loan_given_date'])==strtotime($ressdl['od_cal_date']))) ){
                                    $dcupri=0;
                                    }
                                    if(strtotime(date("Y-m",strtotime($demand['cal_date']))) == strtotime(date("Y-m",strtotime($mat_date))))
                                    {
                                    $dcupri=$p-$demand['a_od_pr'];
                                    }
                                    //$dodint=$demand['a_od_int'];
                                    //$dodpri=$demand['a_od_pr'];
                                    //$dtot=$dcurint+$dcurpri+$dodint+$dodpri;
                                    
                            ?>
                                     <tr>
                                            <td><?php echo  $i.'.';?></td>
                                            <td><?php echo $resdemandloan['name'].'<br>('.$resdemandloan['phone'].')';?></td>
                                            <td><?php echo $resdemandloan['loan_accno'];?></td>
                                            <td><?php echo 'Date'.'-'.$vlgday;?></td>
                                            <td><?php echo $resdemandloan['loangiven'];?></td>
                                            <td><?php echo $resdemandloan['amount_topay'];?></td>
                                            <td><?php echo $resdemandloan['odintrest'];?></td>
                                            <td><?php echo $resdemandloan['odprincipal'];;?></td>
                                            <td><?php echo round($dcuint);?></td>
                                            <td><?php echo round($dcupri);?></td>
                                            <td><?php echo ($resdemandloan['odintrest']+$resdemandloan['odprincipal']+round($dcupri)+round($dcuint));?></td>
                                        </tr>
                                         <?php
                                                $indtotal=$indtotal+$resdemandloan['amount_topay'];
                                                $indtotodp=$indtotodp+$resdemandloan['odprincipal'];
                                                $indtotodi=$indtotodi+$resdemandloan['odintrest'];
                                                $indtotcp=$indtotcp+round($dcupri);
                                                $indtotci=$indtotci+round($dcuint);
                                                $indtotloan=$indtotloan+$resdemandloan['loangiven'];
                                        
                                                $total=$total+$resdemandloan['amount_topay'];
                                                $totodp=$totodp+$resdemandloan['odprincipal'];
                                                $totodi=$totodi+$resdemandloan['odintrest'];
                                                $totcp=$totcp+round($dcupri);
                                                $totci=$totci+round($dcuint);
                                                $totloan=$totloan+$resdemandloan['loangiven'];            
                                         }
                                         ?>
                                         <tr>
                                            <th colspan="4" style="text-align: center;">Total</th>
                                            <th><?php echo number_format($indtotloan, 2, '.', '') ;?></th>
                                            <th><?php echo number_format($indtotal, 2, '.', '') ;?></th>
                                            <th><?php echo number_format($indtotodi, 2, '.', '') ;?></th>
                                            <th><?php echo number_format($indtotodp, 2, '.', '') ;?></th>                        
                                            <th><?php echo number_format($indtotci, 2, '.', '') ;?></th>
                                            <th><?php echo number_format($indtotcp, 2, '.', '') ;?></th>
                                            <th><?php $indalltot=($indtotodi+$indtotodp+$indtotci+$indtotcp); echo number_format($indalltot, 2, '.', ''); ?></th>
                                       </tr>
                                         <?php }else{ ?>
                                          <tr><td colspan="11">No results found...</td></tr>
                                         <?php } ?>
                        
                        <!-------- Demand Loan ----------->
                        <!-------- Agriculture Loan ----------->
                         <?php
                         $table='agricultureloan';
                         $agricultureloan=mysql_query("select * from `agricultureloan`  where `loancomplited`=0 and `amount_topay`>0 and `agent_id`='$agent'");
                         ?>
                          <tr>
                            <td colspan="11">Agriculture Loan</td>
                          </tr>
                          <?php
                        if(mysql_num_rows($agricultureloan)>0){
                         $indtotodp=0;$indtotodi=0;$indtotloan=0;$indtotal=0;$indtotcp=0;$indtotci=0;
                         while($resagricultureloan=mysql_fetch_array($agricultureloan)){
                            $i++;
                            $vlgday= date("d",strtotime(get_villagedate($resagricultureloan['village'])));		    
                            $no=$resagricultureloan['plan'];
                            $ldd= date("d",strtotime($resagricultureloan['loan_given_date']));
                              if($ldd <= $vlgday){
                                $plan=$no;
                                }
                                else{
                                if(strtotime($resagricultureloan['loan_given_date']) < strtotime("2015-11-30")){
                                   $plan=$no;
                                  }else{
                                    $plan=$no-1;
                                  }
                                }
                            $emi=$resagricultureloan['loangiven']/$plan;
                            $mat_date=date("Y-m-d", strtotime("+$plan month", strtotime($resagricultureloan['loan_given_date'])));
                            
                            $demand=mysql_fetch_array(mysql_query("select * FROM `transaction_ledger` WHERE `accountno` = '$resagricultureloan[loan_accno]' and `cal_date` < CURDATE() order by `cal_date` desc limit 1"));
                            
                             $enddate=get_currentcoll_date($vlgday);
                            //$enddate="2017-06-".$vlgday;
                            $difference = abs(strtotime($enddate) - strtotime($resagricultureloan['od_cal_date']));
                            $days=round($difference/3600/24);
                            $t=$days;
                            $r=$resagricultureloan['intrestrate']/365;
                            $p=$resagricultureloan['amount_topay'];
                            
                            if(date("m",strtotime($date))==3)
                                    {       
                                    $comparedays=28;
                                    }
                                    else{
                                    $comparedays=30;
                                    }
                                    if($days<$comparedays){
                                    $dcupri=0;
                                    }else{
                                    // echo $resvendor['loangiven'].'---'.$plan;
                                    $dcupri=round($emi,2);
                                    }
                                    $dcuint=round(($p*$t*$r)/100);
                                    
                                    if(strtotime($demand['coll_date'])>strtotime($demand['cal_date'])){
                                    $dcupri=0;
                                    $dcuint=0;
                                    }
                                    if($table=="demand_loan" || $table=="goldloan" ||  ((date('d',strtotime($ressdl['loan_given_date']))>$vlgday) && (strtotime($ressdl['loan_given_date'])==strtotime($ressdl['od_cal_date']))) ){
                                    $dcupri=0;
                                    }
                                    if(strtotime(date("Y-m",strtotime($demand['cal_date']))) == strtotime(date("Y-m",strtotime($mat_date))))
                                    {
                                    $dcupri=$p-$demand['a_od_pr'];
                                    }
                                    //$dodint=$demand['a_od_int'];
                                    //$dodpri=$demand['a_od_pr'];
                                    //$dtot=$dcurint+$dcurpri+$dodint+$dodpri;
                                    
                            ?>
                                     <tr>
                                            <td><?php echo  $i.'.';?></td>
                                            <td><?php echo $resagricultureloan['name'].'<br>('.$resagricultureloan['phone'].')';?></td>
                                            <td><?php echo $resagricultureloan['loan_accno'];?></td>
                                            <td><?php echo 'Date'.'-'.$vlgday;?></td>
                                            <td><?php echo $resagricultureloan['loangiven'];?></td>
                                            <td><?php echo $resagricultureloan['amount_topay'];?></td>
                                            <td><?php echo $resagricultureloan['odintrest'];?></td>
                                            <td><?php echo $resagricultureloan['odprincipal'];;?></td>
                                            <td><?php echo round($dcuint);?></td>
                                            <td><?php echo round($dcupri);?></td>
                                            <td><?php echo ($resagricultureloan['odintrest']+$resagricultureloan['odprincipal']+round($dcupri)+round($dcuint));?></td>
                                        </tr>
                                         <?php
                                                $indtotal=$indtotal+$resagricultureloan['amount_topay'];
                                                $indtotodp=$indtotodp+$resagricultureloan['odprincipal'];
                                                $indtotodi=$indtotodi+$resagricultureloan['odintrest'];
                                                $indtotcp=$indtotcp+round($dcupri);
                                                $indtotci=$indtotci+round($dcuint);
                                                $indtotloan=$indtotloan+$resagricultureloan['loangiven'];
                                        
                                                $total=$total+$resagricultureloan['amount_topay'];
                                                $totodp=$totodp+$resagricultureloan['odprincipal'];
                                                $totodi=$totodi+$resagricultureloan['odintrest'];
                                                $totcp=$totcp+round($dcupri);
                                                $totci=$totci+round($dcuint);
                                                $totloan=$totloan+$resagricultureloan['loangiven'];            
                                         }
                                         ?>
                                         <tr>
                                            <th colspan="4" style="text-align: center;">Total</th>
                                            <th><?php echo number_format($indtotloan, 2, '.', '') ;?></th>
                                            <th><?php echo number_format($indtotal, 2, '.', '') ;?></th>
                                            <th><?php echo number_format($indtotodi, 2, '.', '') ;?></th>
                                            <th><?php echo number_format($indtotodp, 2, '.', '') ;?></th>                        
                                            <th><?php echo number_format($indtotci, 2, '.', '') ;?></th>
                                            <th><?php echo number_format($indtotcp, 2, '.', '') ;?></th>
                                            <th><?php $indalltot=($indtotodi+$indtotodp+$indtotci+$indtotcp); echo number_format($indalltot, 2, '.', ''); ?></th>
                                       </tr>
                                         <?php }else{ ?>
                                          <tr><td colspan="11">No results found...</td></tr>
                                         <?php } ?>
                        
                        
                        <!-------- Agriculture Loan ----------->
                        <!-------- Business Loan ----------->
                         <?php
                         $table='businessloan';
                         $businessloan=mysql_query("select * from $table  where `loancomplited`=0 and `amount_topay`>0 and `agent_id`='$agent'");
                         ?>
                          <tr>
                            <td colspan="11">Business Loan</td>
                          </tr>
                          <?php
                        if(mysql_num_rows($businessloan)>0){
                             $indtotodp=0;$indtotodi=0;$indtotloan=0;$indtotal=0;$indtotcp=0;$indtotci=0;
                         while($resbusinessloan=mysql_fetch_array($businessloan)){
                            $i++;
                            $vlgday= date("d",strtotime(get_villagedate($resbusinessloan['village'])));		    
                            $no=$resbusinessloan['plan'];
                            $ldd= date("d",strtotime($resbusinessloan['loan_given_date']));
                              if($ldd <= $vlgday){
                                $plan=$no;
                                }
                                else{
                                if(strtotime($resbusinessloan['loan_given_date']) < strtotime("2015-11-30")){
                                   $plan=$no;
                                  }else{
                                    $plan=$no-1;
                                  }
                                }
                            $emi=$resbusinessloan['loangiven']/$plan;
                            $mat_date=date("Y-m-d", strtotime("+$plan month", strtotime($resbusinessloan['loan_given_date'])));
                            
                            $demand=mysql_fetch_array(mysql_query("select * FROM `transaction_ledger` WHERE `accountno` = '$resbusinessloan[loan_accno]' and `cal_date` < CURDATE() order by `cal_date` desc limit 1"));
                            
                             $enddate=get_currentcoll_date($vlgday);
                            //$enddate="2017-06-".$vlgday;
                            $difference = abs(strtotime($enddate) - strtotime($resbusinessloan['od_cal_date']));
                            $days=round($difference/3600/24);
                            $t=$days;
                            $r=$resbusinessloan['intrestrate']/365;
                            $p=$resbusinessloan['amount_topay'];
                            
                            if(date("m",strtotime($date))==3)
                                    {       
                                    $comparedays=28;
                                    }
                                    else{
                                    $comparedays=30;
                                    }
                                    if($days<$comparedays){
                                    $dcupri=0;
                                    }else{
                                    // echo $resvendor['loangiven'].'---'.$plan;
                                    $dcupri=round($emi,2);
                                    }
                                    $dcuint=round(($p*$t*$r)/100);
                                    
                                    if(strtotime($demand['coll_date'])>strtotime($demand['cal_date'])){
                                    $dcupri=0;
                                    $dcuint=0;
                                    }
                                    if($table=="demand_loan" || $table=="goldloan" ||  ((date('d',strtotime($ressdl['loan_given_date']))>$vlgday) && (strtotime($ressdl['loan_given_date'])==strtotime($ressdl['od_cal_date']))) ){
                                    $dcupri=0;
                                    }
                                    if(strtotime(date("Y-m",strtotime($demand['cal_date']))) == strtotime(date("Y-m",strtotime($mat_date))))
                                    {
                                    $dcupri=$p-$demand['a_od_pr'];
                                    }
                                    //$dodint=$demand['a_od_int'];
                                    //$dodpri=$demand['a_od_pr'];
                                    //$dtot=$dcurint+$dcurpri+$dodint+$dodpri;
                                    
                            ?>
                                     <tr>
                                            <td><?php echo  $i.'.';?></td>
                                            <td><?php echo $resbusinessloan['name'].'<br>('.$resbusinessloan['phone'].')';?></td>
                                            <td><?php echo $resbusinessloan['loan_accno'];?></td>
                                            <td><?php echo 'Date'.'-'.$vlgday;?></td>
                                            <td><?php echo $resbusinessloan['loangiven'];?></td>
                                            <td><?php echo $resbusinessloan['amount_topay'];?></td>
                                            <td><?php echo $resbusinessloan['odintrest'];?></td>
                                            <td><?php echo $resbusinessloan['odprincipal'];;?></td>
                                            <td><?php echo round($dcuint);?></td>
                                            <td><?php echo round($dcupri);?></td>
                                            <td><?php echo ($resbusinessloan['odintrest']+$resbusinessloan['odprincipal']+round($dcupri)+round($dcuint));?></td>
                                        </tr>
                                         <?php
                                                $indtotal=$indtotal+$resbusinessloan['amount_topay'];
                                                $indtotodp=$indtotodp+$resbusinessloan['odprincipal'];
                                                $indtotodi=$indtotodi+$resbusinessloan['odintrest'];
                                                $indtotcp=$indtotcp+round($dcupri);
                                                $indtotci=$indtotci+round($dcuint);
                                                $indtotloan=$indtotloan+$resbusinessloan['loangiven'];
                                        
                                                $total=$total+$resbusinessloan['amount_topay'];
                                                $totodp=$totodp+$resbusinessloan['odprincipal'];
                                                $totodi=$totodi+$resbusinessloan['odintrest'];
                                                $totcp=$totcp+round($dcupri);
                                                $totci=$totci+round($dcuint);
                                                $totloan=$totloan+$resbusinessloan['loangiven'];            
                                         }
                                         ?>
                                         <tr>
                                            <th colspan="4" style="text-align: center;">Total</th>
                                            <th><?php echo number_format($indtotloan, 2, '.', '') ;?></th>
                                            <th><?php echo number_format($indtotal, 2, '.', '') ;?></th>
                                            <th><?php echo number_format($indtotodi, 2, '.', '') ;?></th>
                                            <th><?php echo number_format($indtotodp, 2, '.', '') ;?></th>                        
                                            <th><?php echo number_format($indtotci, 2, '.', '') ;?></th>
                                            <th><?php echo number_format($indtotcp, 2, '.', '') ;?></th>
                                            <th><?php $indalltot=($indtotodi+$indtotodp+$indtotci+$indtotcp); echo number_format($indalltot, 2, '.', ''); ?></th>
                                       </tr>
                                         <?php }else{ ?>
                                          <tr><td colspan="11">No results found...</td></tr>
                                         <?php } ?>
                        
                        
                        <!-------- Business Loan ----------->
                        <!-------- Enterprise Loan ----------->
                         <?php
                         $table='enterpriseloan';
                         $epriseloan=mysql_query("select * from $table  where `loancomplited`=0 and `amount_topay`>0 and `agent_id`='$agent'");
                         ?>
                          <tr>
                            <td colspan="11">Enterprise Loan</td>
                          </tr>
                          <?php
                        if(mysql_num_rows($epriseloan)>0){
                             $indtotodp=0;$indtotodi=0;$indtotloan=0;$indtotal=0;$indtotcp=0;$indtotci=0;
                         while($resepriseloan=mysql_fetch_array($epriseloan)){
                            $i++;
                            $vlgday= date("d",strtotime(get_villagedate($resepriseloan['village'])));		    
                            $no=$resepriseloan['plan'];
                            $ldd= date("d",strtotime($resepriseloan['loan_given_date']));
                              if($ldd <= $vlgday){
                                $plan=$no;
                                }
                                else{
                                if(strtotime($resepriseloan['loan_given_date']) < strtotime("2015-11-30")){
                                   $plan=$no;
                                  }else{
                                    $plan=$no-1;
                                  }
                                }
                            $emi=$resepriseloan['loangiven']/$plan;
                            $mat_date=date("Y-m-d", strtotime("+$plan month", strtotime($resepriseloan['loan_given_date'])));
                            
                            $demand=mysql_fetch_array(mysql_query("select * FROM `transaction_ledger` WHERE `accountno` = '$resepriseloan[loan_accno]' and `cal_date` < CURDATE() order by `cal_date` desc limit 1"));
                            
                             $enddate=get_currentcoll_date($vlgday);
                            //$enddate="2017-06-".$vlgday;
                            $difference = abs(strtotime($enddate) - strtotime($resepriseloan['od_cal_date']));
                            $days=round($difference/3600/24);
                            $t=$days;
                            $r=$resepriseloan['intrestrate']/365;
                            $p=$resepriseloan['amount_topay'];
                            
                            if(date("m",strtotime($date))==3)
                                    {       
                                    $comparedays=28;
                                    }
                                    else{
                                    $comparedays=30;
                                    }
                                    if($days<$comparedays){
                                    $dcupri=0;
                                    }else{
                                    // echo $resvendor['loangiven'].'---'.$plan;
                                    $dcupri=round($emi,2);
                                    }
                                    $dcuint=round(($p*$t*$r)/100);
                                    
                                    if(strtotime($demand['coll_date'])>strtotime($demand['cal_date'])){
                                    $dcupri=0;
                                    $dcuint=0;
                                    }
                                    if($table=="demand_loan" || $table=="goldloan" ||  ((date('d',strtotime($ressdl['loan_given_date']))>$vlgday) && (strtotime($ressdl['loan_given_date'])==strtotime($ressdl['od_cal_date']))) ){
                                    $dcupri=0;
                                    }
                                    if(strtotime(date("Y-m",strtotime($demand['cal_date']))) == strtotime(date("Y-m",strtotime($mat_date))))
                                    {
                                    $dcupri=$p-$demand['a_od_pr'];
                                    }
                                    //$dodint=$demand['a_od_int'];
                                    //$dodpri=$demand['a_od_pr'];
                                    //$dtot=$dcurint+$dcurpri+$dodint+$dodpri;
                                    
                            ?>
                                     <tr>
                                            <td><?php echo  $i.'.';?></td>
                                            <td><?php echo $resepriseloan['name'].'<br>('.$resepriseloan['phone'].')';?></td>
                                            <td><?php echo $resepriseloan['loan_accno'];?></td>
                                            <td><?php echo 'Date'.'-'.$vlgday;?></td>
                                            <td><?php echo $resepriseloan['loangiven'];?></td>
                                            <td><?php echo $resepriseloan['amount_topay'];?></td>
                                            <td><?php echo $resepriseloan['odintrest'];?></td>
                                            <td><?php echo $resepriseloan['odprincipal'];;?></td>
                                            <td><?php echo round($dcuint);?></td>
                                            <td><?php echo round($dcupri);?></td>
                                            <td><?php echo ($resepriseloan['odintrest']+$resepriseloan['odprincipal']+round($dcupri)+round($dcuint));?></td>
                                        </tr>
                                         <?php
                                                $indtotal=$indtotal+$resepriseloan['amount_topay'];
                                                $indtotodp=$indtotodp+$resepriseloan['odprincipal'];
                                                $indtotodi=$indtotodi+$resepriseloan['odintrest'];
                                                $indtotcp=$indtotcp+round($dcupri);
                                                $indtotci=$indtotci+round($dcuint);
                                                $indtotloan=$indtotloan+$resepriseloan['loangiven'];
                                        
                                                $total=$total+$resepriseloan['amount_topay'];
                                                $totodp=$totodp+$resepriseloan['odprincipal'];
                                                $totodi=$totodi+$resepriseloan['odintrest'];
                                                $totcp=$totcp+round($dcupri);
                                                $totci=$totci+round($dcuint);
                                                $totloan=$totloan+$resepriseloan['loangiven'];            
                                         }
                                         ?>
                                         <tr>
                                            <th colspan="4" style="text-align: center;">Total</th>
                                            <th><?php echo number_format($indtotloan, 2, '.', '') ;?></th>
                                            <th><?php echo number_format($indtotal, 2, '.', '') ;?></th>
                                            <th><?php echo number_format($indtotodi, 2, '.', '') ;?></th>
                                            <th><?php echo number_format($indtotodp, 2, '.', '') ;?></th>                        
                                            <th><?php echo number_format($indtotci, 2, '.', '') ;?></th>
                                            <th><?php echo number_format($indtotcp, 2, '.', '') ;?></th>
                                            <th><?php $indalltot=($indtotodi+$indtotodp+$indtotci+$indtotcp); echo number_format($indalltot, 2, '.', ''); ?></th>
                                       </tr>
                                         <?php }else{ ?>
                                          <tr><td colspan="11">No results found...</td></tr>
                                         <?php } ?>
                        
                        
                        <!-------- Enterprise Loan ----------->
                        <!-------- Group Loan ----------->
                         <?php
                         $table='grouploan';
                         $grouploan=mysql_query("select * from $table  where `loancomplited`=0 and `amount_topay`>0 and `agent_id`='$agent'");
                         ?>
                          <tr>
                            <td colspan="11">Group Loan</td>
                          </tr>
                          <?php
                        if(mysql_num_rows($grouploan)>0){
                         $indtotodp=0;$indtotodi=0;$indtotloan=0;$indtotal=0;$indtotcp=0;$indtotci=0;
                         while($resgrouploan=mysql_fetch_array($grouploan)){
                            $i++;
                            $vlgday= date("d",strtotime(get_villagedate($resgrouploan['village'])));		    
                            $no=$resgrouploan['plan'];
                            $ldd= date("d",strtotime($resgrouploan['loan_given_date']));
                              if($ldd <= $vlgday){
                                $plan=$no;
                                }
                                else{
                                if(strtotime($resgrouploan['loan_given_date']) < strtotime("2015-11-30")){
                                   $plan=$no;
                                  }else{
                                    $plan=$no-1;
                                  }
                                }
                            $emi=$resgrouploan['loangiven']/$plan;
                            $mat_date=date("Y-m-d", strtotime("+$plan month", strtotime($resgrouploan['loan_given_date'])));
                            
                            $demand=mysql_fetch_array(mysql_query("select * FROM `transaction_ledger` WHERE `accountno` = '$resgrouploan[loan_accno]' and `cal_date` < CURDATE() order by `cal_date` desc limit 1"));
                            
                             $enddate=get_currentcoll_date($vlgday);
                            //$enddate="2017-06-".$vlgday;
                            $difference = abs(strtotime($enddate) - strtotime($resgrouploan['od_cal_date']));
                            $days=round($difference/3600/24);
                            $t=$days;
                            $r=$resgrouploan['intrestrate']/365;
                            $p=$resgrouploan['amount_topay'];
                            
                            if(date("m",strtotime($date))==3)
                                    {       
                                    $comparedays=28;
                                    }
                                    else{
                                    $comparedays=30;
                                    }
                                    if($days<$comparedays){
                                    $dcupri=0;
                                    }else{
                                    // echo $resvendor['loangiven'].'---'.$plan;
                                    $dcupri=round($emi,2);
                                    }
                                    $dcuint=round(($p*$t*$r)/100);
                                    
                                    if(strtotime($demand['coll_date'])>strtotime($demand['cal_date'])){
                                    $dcupri=0;
                                    $dcuint=0;
                                    }
                                    if($table=="demand_loan" || $table=="goldloan" ||  ((date('d',strtotime($ressdl['loan_given_date']))>$vlgday) && (strtotime($ressdl['loan_given_date'])==strtotime($ressdl['od_cal_date']))) ){
                                    $dcupri=0;
                                    }
                                    if(strtotime(date("Y-m",strtotime($demand['cal_date']))) == strtotime(date("Y-m",strtotime($mat_date))))
                                    {
                                    $dcupri=$p-$demand['a_od_pr'];
                                    }
                                    //$dodint=$demand['a_od_int'];
                                    //$dodpri=$demand['a_od_pr'];
                                    //$dtot=$dcurint+$dcurpri+$dodint+$dodpri;
                                    
                            ?>
                                     <tr>
                                            <td><?php echo  $i.'.';?></td>
                                            <td><?php echo $resgrouploan['name'].'<br>('.$resgrouploan['phone'].')';?></td>
                                            <td><?php echo $resgrouploan['loan_accno'];?></td>
                                            <td><?php echo 'Date'.'-'.$vlgday;?></td>
                                            <td><?php echo $resgrouploan['loangiven'];?></td>
                                            <td><?php echo $resgrouploan['amount_topay'];?></td>
                                            <td><?php echo $resgrouploan['odintrest'];?></td>
                                            <td><?php echo $resgrouploan['odprincipal'];;?></td>
                                            <td><?php echo round($dcuint);?></td>
                                            <td><?php echo round($dcupri);?></td>
                                            <td><?php echo ($resgrouploan['odintrest']+$resgrouploan['odprincipal']+round($dcupri)+round($dcuint));?></td>
                                        </tr>
                                         <?php
                                                $indtotal=$indtotal+$resgrouploan['amount_topay'];
                                                $indtotodp=$indtotodp+$resgrouploan['odprincipal'];
                                                $indtotodi=$indtotodi+$resgrouploan['odintrest'];
                                                $indtotcp=$indtotcp+round($dcupri);
                                                $indtotci=$indtotci+round($dcuint);
                                                $indtotloan=$indtotloan+$resgrouploan['loangiven'];
                                        
                                                $total=$total+$resgrouploan['amount_topay'];
                                                $totodp=$totodp+$resgrouploan['odprincipal'];
                                                $totodi=$totodi+$resgrouploan['odintrest'];
                                                $totcp=$totcp+round($dcupri);
                                                $totci=$totci+round($dcuint);
                                                $totloan=$totloan+$resgrouploan['loangiven'];            
                                         }
                                         ?>
                                         <tr>
                                            <th colspan="4" style="text-align: center;">Total</th>
                                            <th><?php echo number_format($indtotloan, 2, '.', '') ;?></th>
                                            <th><?php echo number_format($indtotal, 2, '.', '') ;?></th>
                                            <th><?php echo number_format($indtotodi, 2, '.', '') ;?></th>
                                            <th><?php echo number_format($indtotodp, 2, '.', '') ;?></th>                        
                                            <th><?php echo number_format($indtotci, 2, '.', '') ;?></th>
                                            <th><?php echo number_format($indtotcp, 2, '.', '') ;?></th>
                                            <th><?php $indalltot=($indtotodi+$indtotodp+$indtotci+$indtotcp); echo number_format($indalltot, 2, '.', ''); ?></th>
                                       </tr>
                                         <?php }else{ ?>
                                          <tr><td colspan="11">No results found...</td></tr>
                                         <?php } ?>
                        
                        
                        <!-------- Group Loan ----------->
                        
                         <tr>
                            <th colspan="4" style="text-align: center;">Grand Total</th>
                            <th><?php echo number_format($totloan, 2, '.', '') ;?></th>
                            <th><?php echo number_format($total, 2, '.', '') ;?></th>
                            <th><?php echo number_format($totodi, 2, '.', '') ;?></th>
                            <th><?php echo number_format($totodp, 2, '.', '') ;?></th>                        
                            <th><?php echo number_format($totci, 2, '.', '') ;?></th>
                            <th><?php echo number_format($totcp, 2, '.', '') ;?></th>
                            <th><?php $alltot=($totodi+$totodp+$totci+$totcp); echo number_format($alltot, 2, '.', ''); ?></th>
                        </tr>
                        <?php        
                        }    
                        ?>
                      </table>
                 
                      <table class="table">
                        <tr>
                             <td style="text-align: center;" colspan="7"><input type="button" value="Print" onClick="printContent('srch');" /></td>
                            
                         </tr>
                     </table>                                              
	    </div>
	</div>
  </div>
</div>
</body>
</html><?php } ?>

