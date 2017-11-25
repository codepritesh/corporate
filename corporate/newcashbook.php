<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{ header("location:index.php");}
else
{
	$sqlagent=mysql_query("select * from `agent`")or die(mysql_error());
	 while($resagent=mysql_fetch_array($sqlagent))
		{
		 $getagent[] = array(
		'value'  =>$resagent['name'].'('.$resagent['codeno'].')',
		'idval' => $resagent['id']
		);
		}
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
<script type="text/javascript">
 $(function(){
        var availabledrugs=<?php echo  json_encode($getagent); ?>;
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
        return false;
		}
        });
});
 
</script>
<script type="text/javascript">
    $(function(){
        $('#search').click(function(){
        var aid=$('#agentid').val();
        if (aid=='') {
	    alert("Enter an valid Agent Name..");
            $('#agent').focus();
	    return false;
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
	//document.body.innerHTML = restorepage;
	location.reload();
}
</script>
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
            <!-- theme selector ends -->
                    <form class="navbar-search pull-left">
                        <input placeholder="Search" class="search-query form-control col-md-10" name="query"
                               type="text">
                    </form>
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
		<?php echo date("d-m-Y"); ?>
	</li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i>CASH BOOK</h2>

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
	    <form name="arrange" method="post" action="#">
			<!--<div style="float: left;width: 25%;">
				<input type="text" name="agent" class="form-control" id="agent" required placeholder="Agent Name(ID)">
			</div>
			<input type="hidden" name="agentid" id="agentid">--><input type="hidden" name="product" id="product">
			<div style="float: left;width: 25%; margin-left: 10px;"><input type="text" name="sdate" autocomplete="off" onKeyPress="return IsNumeric(event)" class="form-control" id="sdate" placeholder="Start Date"></div>
			<div style="float: left;width: 25%; margin-left: 10px;"><input type="text" name="edate" autocomplete="off" onKeyPress="return IsNumeric(event)" class="form-control" id="edate" placeholder="End Date" ></div>
			<div style="float: left;width: 15%;margin-left: 10px;margin-top: 5px;margin-bottom: 5px;"><input type="submit" name="submit" value="Search" id="search" /></div>
	   </form>
	    </div>
           <div id="srch" class="box-content" style="width:100%; float:left;height: auto;background-color: #fff;border: #f5f5f5 solid 0.5px; border-radius: 4px;-webkit-box-shadow: 0 0 10px rgba(189,189,189,.4);">
                
	     <table style="float: left;width: 100%;font-size: 12px;">
                    <tr>
                         <th colspan="12" style="text-align: center;">CASH BOOK </br> AIR CREDIT CO OPERATIVE,BALIA,BHAGABATPUR</th>
                    </tr>
	     </table>
	     <!----------------------------------  RECEIPT  ----------------------------------->
	    <?php
	     if(isset($_POST['submit'])){
		
		//$aid=$_POST['agentid'];
		$sdate=$_POST['sdate'];
		$edate=$_POST['edate'];
	      if($sdate!=''){
		  $sdate=date("Y-m-d",strtotime($sdate));
		  if($edate!=''){
		      $edate=date("Y-m-d",strtotime($edate));
		  }
		  else{
		      $edate=date("Y-m-d");
		  }
		  $var=" and `date` BETWEEN '$sdate' AND '$edate'";
	      }
	      else{
		  $var='';
	      }
			      
	    ?>
	    
            
	    <table style="float: left;width: 50%;font-size: 12px;">
                    <tr>
                         <th style="text-align: center;" colspan="7">RECEIPT</th>
                    </tr>
                    <tr>
							<th style="width: 70px;">DATE</th>
							<th>AGENT CODE</th>
							<th>PARTICULARS</th>
							<th>CASH</th>
							<th>&nbsp;</th>
							<th>BANK AMO</th>
							<th>TOTAL AMO</th>
                    </tr>
                    <?php
                    $bank=0;
                    $daytotal=0;
                    // echo "select * from `transaction` where `amount`>0  $var  group by `date`";
                    $datewise=mysql_query("select * from `transaction` where `amount`>0  $var  group by `date`");
                    while($resdatewise=mysql_fetch_array($datewise)){
                   
                    $obal=mysql_query("select * from `day` where `date`='$resdatewise[date]'");
                    $resobal=mysql_fetch_array($obal);
                    $obalance=$resobal['startbalance'];
		    
		    
                    $fetchbank=mysql_query("select sum(amount) amt from `bankdetails` where `amount`>'0' and`date`='$resdatewise[date]'");
                    $resbank=mysql_fetch_array($fetchbank);
                    ?>
                    <tr>
							<td><?php  echo date("d-m-Y",strtotime($resdatewise['date'])); ?></td>
							<td>&nbsp;</td>
							<td style="color: red;">O BALANCE</td>
							<td><?php echo $obalance;?></td>
							<td>&nbsp;</td>
							<!--<td><?php //echo "daya".$bank= ltrim ($bankamt, '-');?></td>-->
							<td><?php  $bank=$resbank['amt']; ?></td>
							<td><?php echo $obalance+$bank;?></td>
                    </tr>
                    <?php
		    //echo "select * from `transaction` where `amount`>0 and `date`='$resdatewise[date]' and `agentid`='$aid' group by `folio_no`"."</br>";
                    $foliowise=mysql_query("select * from `transaction` where `amount`>0 and `date`='$resdatewise[date]' group by `folio_no`");
                    while($resfoliowise=mysql_fetch_array($foliowise)){
                        
			if($resfoliowise['folio_no']==1){$type="TO CS COLL";}
			else if($resfoliowise['folio_no']==2){$type="TO VS COLL";}
			else if($resfoliowise['folio_no']==3){$type="TO RD COLL";}
			else if($resfoliowise['folio_no']==4){$type="TO DAILY COLL";}
			else if($resfoliowise['folio_no']==5){$type="TO FD COLL";}
			else if($resfoliowise['folio_no']==6){$type="TO GROUP LOAN COLL";}
			else if($resfoliowise['folio_no']==7){$type="TO AL COLL";}
			else if($resfoliowise['folio_no']==8){$type="TO BL COLL";}
			else if($resfoliowise['folio_no']==9){$type="TO EL COLL";}
			else if($resfoliowise['folio_no']==10){$type="TO DEMAND COLL";}
			else if($resfoliowise['folio_no']==11){$type="TO GOLD LOAN COLL";}
			else if($resfoliowise['folio_no']==12){$type="TO DAILY LOAN COLL";}
			else if($resfoliowise['folio_no']==17){$type="TO APPLICATION FEES";}
			else if($resfoliowise['folio_no']==19){$type="TO BANK WITHDRAWL";}
			else if($resfoliowise['folio_no']==19){$type="TO BANK WITHDRAWL";}
			else if($resfoliowise['folio_no']==15){$type="TO SHARE FEES";}
			else if($resfoliowise['folio_no']==16){$type="TO MEMBERSHIP FEES";}
			// else if($resfoliowise['folio_no']==24){$type="TO LOAN INT";}
			 else if($resfoliowise['folio_no']==25){$type="TO BANK INT";}
			 else if($resfoliowise['folio_no']==26){$type="TO A/C CLOSE FEES";}
			 else if($resfoliowise['folio_no']==27){$type="TO FINES";}
			 else{$type="TO OTHER COLL";}
                       // echo $resfoliowise['folio_no'].'---'.$type;
                    ?>
                     <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="color: red;"><?php echo $type;?></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <?php
                   // echo "select sum(amount) as amt from `transaction` where `amount`>0 and `date`='$resdatewise[date]' and `agentid`='$aid' and `folio_no`='$resfoliowise[folio_no]'"."</br>";
		   //echo "</br>select * from `transaction` where `amount`>0 and `date`='$resdatewise[date]' and `folio_no`='$resfoliowise[folio_no]' group by `agentid`";
                    $agentwise=mysql_query("select * from `transaction` where `amount`>=0 and `date`='$resdatewise[date]' and `folio_no`='$resfoliowise[folio_no]' group by `agentid`") or die(mysql_error());
                    while($resagentwise=mysql_fetch_array($agentwise))
					{
                    $amt=$resagentwise['amount'];
                    $aidd=$resagentwise['agentid'];
					echo "select sum(amount+interest) as amountt from `transaction` where `amount`>0 and `date`='$resdatewise[date]' and `folio_no`='$resfoliowise[folio_no]' and `agentid`='$aidd' <br/><br/>";
                    $agentwiseamount=mysql_query("select sum(amount+interest) as amountt from `transaction` where `amount`>=0 and `date`='$resdatewise[date]' and `folio_no`='$resfoliowise[folio_no]' and `agentid`='$aidd'") or die(mysql_error());
                    $resagentamount=mysql_fetch_array($agentwiseamount);
		    
                    $aname=mysql_query("select * from `agent` where `id`='$aidd'")or die(mysql_error());
		    $resaname=mysql_fetch_array($aname);
                    ?>
                     <tr>
                         <td>&nbsp;</td>
			 <td>
                            <?php echo $resaname['name'];?>
                         </td>
			 <td>&nbsp;</td>
			 <td>
                            <?php echo $resagentamount['amountt'];?>
                         </td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
		         <td>&nbsp;</td>
                    </tr>
		    <?php
		    }}
		   // echo "select sum(amount) depoamt from `bankdetails` where `type`='deposit' and `date`='$resdatewise[date]'";
		    $bankdepo=mysql_query("select sum(amount) depoamt from `bankdetails` where `type`='deposit' and `date`='$resdatewise[date]'");
                    $resbankdepo=mysql_fetch_array($bankdepo);
		    if($resbankdepo['depoamt']>0){
		    ?>
		    <tr>
		        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="color: red;">TO BANK DEPO</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><?php echo $bankdepoamt=$resbankdepo['depoamt']; ?></td>
                        <td>&nbsp;</td>
                    </tr>
		    
		     <?php
		     }
		    // echo "select sum(amount) withamt from `bankdetails` where `type`='withdrawl' and `date`='$resdatewise[date]'";
		     $bankwith=mysql_query("select sum(amount) withamt from `bankdetails` where `type`='withdrawl' and `date`='$resdatewise[date]'");
             $resbankwith=mysql_fetch_array($bankwith);
		    if($resbankwith['withamt']<0){
		     ?>
		     
		      <tr>
		        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="color: red;">TO BANK WITH</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><?php $bankwithamt=$resbankwith['withamt']; echo  str_replace("-"," ",$bankwithamt); ?></td>
                        <td>&nbsp;</td>
                    </tr>
		      
		     <?php } 
		     
		     $bankint=mysql_query("select sum(amount) intamt from `bankdetails` where `type`='interest' and `date`='$resdatewise[date]'");
                     $resbankint=mysql_fetch_array($bankint);
		     if($resbankint['intamt']>0){
		     ?>
		     
		      <tr>
		        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="color: red;">TO BANK INT</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><?php echo $bankintamt=$resbankint['intamt']; ?></td>
                        <td>&nbsp;</td>
		    
		     <?php }
		     
		    $daytotal=$daytotal+$amt;
		    //$gtotal=$daytotal+$obalance;
		    $fetchdaytotal=mysql_query("select sum(amount+interest) as daytotalamount from `transaction` where `amount`>=0 and `date`='$resdatewise[date]'");
		    $resdaytotal=mysql_fetch_array($fetchdaytotal);
		    $gtotal=$resdaytotal['daytotalamount']+$obalance;
		    ?>
		    <tr>
                         <td>&nbsp;</td>
			 <td>&nbsp;</td>
			 <td style="font-size:12px;font-weight: bold;"><?php echo "<strong>"."DAY TOTAL COLL"."</strong>";?></td>
			 <td  style="font-size:12px;font-weight: bold;"><?php echo $resdaytotal['daytotalamount']; //echo $daytotal;?></td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
			 <td  style="font-size:12px;font-weight: bold;"><?php echo $resdaytotal['daytotalamount']; //echo $daytotal;?></td>
                    </tr>
		     <tr>
                         <td><?php  echo date("d-m-Y",strtotime($resdatewise['date'])); ?></td>
			 <td>&nbsp;</td>
			 <td style="color: red;font-size:12px;font-weight: bold; "><?php echo  "GRAND TOTAL";?></td>
			 <td style="font-size:12px;font-weight: bold;"><?php echo $gtotal;?></td>
			 <td>&nbsp;</td>
			<td style="font-size:12px;font-weight: bold;"><?php echo $bank;?></td>
			<td style="font-size:12px;font-weight: bold;"><?php echo $gtotal+$bank;?></td>
                    </tr>
		    <?php
		    }
		    ?>
		     
             </table>
	    <!-----------------------------Payment-------------------------------------->
	 
		<table style="float: left;width: 50%;font-size: 12px;">
		  <tr>
			     <th style="text-align: center;" colspan="7">PAYMENTs</th>
		    </tr>
		    <tr>
			     <th>DATE</th>
			     <th>CUSTOMER</th>
			     <th>PARTICULARS</th>
			     <th>CASH AMO</th>
			     <td>&nbsp;</td>
			     <th>BANK AMO</th>
			     <th>TOTAL AMO</th>
		    </tr>
                    <?php
                    $aid=0;
                    $totalpymt=0;
                    $datewisep=mysql_query("select * from `transaction` where `amount`<0  $var  group by `date`");
                    while($resdatewisep=mysql_fetch_array($datewisep)){
                    $loandis=mysql_query("select * from `transaction` where `amount`<0  and `date`='$resdatewisep[date]' and `folio_no` IN(6,7,8,9,10,11,12) group by `folio_no`");
		            if(mysql_num_rows($loandis)>0){
		    
		    ?>
		    <tr>
                        <td><?php echo date("d-m-Y",strtotime($resdatewisep['date'])); ?></td>
                        <td></td>
                        <td style="color: red;">BY LOAN DISBURS</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
		     </tr>
		    <?php
				while($resloandis=mysql_fetch_array($loandis)){
				//echo "</br>select SUM(amount) as `amt`,`folio_no` from  `transaction` where `amount`<0 and `agentid`='$aid' and `date`='$resloandis[date]'and `folio_no`='$resloandis[folio_no]'";	
				$loanfoliowise=mysql_query("select * from  `transaction` where `amount`<0  and `date`='$resloandis[date]'and `folio_no`='$resloandis[folio_no]'");
				
					
					if($resloandis['folio_no']==6){$type="BY GROUP";}
					else if($resloandis['folio_no']==7){$type="BY AL ";}
					else if($resloandis['folio_no']==8){$type="BY BL";}
					else if($resloandis['folio_no']==9){$type="BY EL ";}
					else if($resloandis['folio_no']==10){$type="BY DEMAND ";}
					else if($resloandis['folio_no']==11){$type="BY GOLD";}
					else if($resloandis['folio_no']==12){$type="BY DAILY";}
					
					
				?>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td style="color: red;"><?php echo $type;?></td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<?php
				
				while($resloanfoliowise=mysql_fetch_array($loanfoliowise))
				{
				$amtp=$resloanfoliowise['amount'];
				$totalpymt=$totalpymt+$amtp;
				$customerid=$resloanfoliowise['customerid'];
				$anamep=mysql_query("select * from `customer` where `customer_id`='$customerid'")or die(mysql_error());
				$resanamep=mysql_fetch_array($anamep);
				?>
				<tr>
					<td></td>
					<td><?php echo $resanamep['name'];?></td>
					<td></td>
					<td><?php echo  str_replace("-"," ",$amtp);?></td>
					<td></td>
					<td></td>
					<td></td>
				    </tr>
			       <?php
				}
				}
				}
				$withdrwl=mysql_query("select * from `transaction` where `amount`<0 and `date`='$resdatewisep[date]' and `folio_no` IN(1,2,3,4,5,30) group by `folio_no`");
				if(mysql_num_rows($withdrwl)>0){
				?>
				<tr>
					<td><?php //echo date("d-m-Y",strtotime($resdatewisep['date'])); ?></td>
					<td></td>
					<td style="color: red;">BY WITHDRAW AMO</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<?php
				while($reswithdrwl=mysql_fetch_array($withdrwl)){
				//echo "select SUM(amount) as `amt`,`folio_no`,`customerid` from  `transaction` where `amount`<0 and `date`='$reswithdrwl[date]'and `folio_no`='$reswithdrwl[folio_no]' group by `customerid`";
				$accfoliowise=mysql_query("select SUM(amount) as `amt`,`folio_no`,`customerid` from  `transaction` where `amount`<0 and `date`='$reswithdrwl[date]'and `folio_no`='$reswithdrwl[folio_no]' group by `customerid`");
				$resaccfoliowise=mysql_fetch_array($accfoliowise);
					
					if($resaccfoliowise['folio_no']==1){$typee="BY CS";}
					else if($resaccfoliowise['folio_no']==2){$typee="BY VS";}
					else if($resaccfoliowise['folio_no']==3){$typee="BY RD";}
					else if($resaccfoliowise['folio_no']==4){$typee="BY DAILY";}
					else if($resaccfoliowise['folio_no']==5){$typee="BY FD";}
					else if($resaccfoliowise['folio_no']==30){$typee="BY SHARE WITHDRAW";}
					
					
				?>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td style="color: red;"><?php echo $typee;?></td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<?php
               // echo "select *,SUM(amount) as `amt` from  `transaction` where `amount`<0 and `date`='$reswithdrwl[date]'and `folio_no`='$reswithdrwl[folio_no]' group by `customerid`";
				$folioquery=mysql_query("select *,SUM(amount) as `amt` from   `transaction` where `amount`<0 and `date`='$reswithdrwl[date]'and `folio_no`='$reswithdrwl[folio_no]' group by `customerid`");
				while($resfoliowisecid1=mysql_fetch_array($folioquery)){
					
					$amtpacc=$resfoliowisecid1['amt'];
					$totalpymt=$totalpymt+$amtpacc;
					
					$customerid=$resfoliowisecid1['customerid'];
					$anamep=mysql_query("select * from `customer` where `customer_id`='$customerid'")or die(mysql_error());
					$resanamep=mysql_fetch_array($anamep);
					//echo "</br>".$resanamep['name'];
				
				?>
				<tr>
					<td></td>
					<td><?php echo $resanamep['name'];?></td>
					<td></td>
					<td><?php echo  str_replace("-"," ",$amtpacc);?></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<?php } ?>
			       <?php
				}
				}
				
				$fetchbank=mysql_query("select sum(amount) amt from `bankdetails` where `amount`<'0' and`date`='$resdatewisep[date]'");
				$resbank=mysql_fetch_array($fetchbank);
		    
				?>
				 <tr>
					<td></td>
					<td></td>
					<td style="color: red;">BY BANK WITHDRAWL</td>
					<td></td>
					<td></td>
					<td><?php echo  str_replace("-"," ",$resbank['amt']);?></td>
					<td></td>
				 </tr>
				<?php	 
				 // echo "select sum(amount) depoamt from `bankdetails` where `type`='deposit' and `date`='$resdatewisep[date]'";
				$bankdepo=mysql_query("select sum(amount) depoamt from `bankdetails` where `type`='deposit' and `date`='$resdatewisep[date]'");
				$resbankdepo=mysql_fetch_array($bankdepo);
				if($resbankdepo['depoamt']>0){
				?>
				<tr>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				    <td style="color: red;">BY BANK DEPO</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				    <td><?php echo $bankdepoamt=$resbankdepo['depoamt']; ?></td>
				    <td>&nbsp;</td>
				</tr>
				
				 <?php }
				 $bankint=mysql_query("select sum(amount) intamt from `bankdetails` where `type`='interest' and `date`='$resdatewisep[date]'");
				$resbankint=mysql_fetch_array($bankint);
				if($resbankint['intamt']>0){
				?>
				
				 <tr>
				   <td>&nbsp;</td>
				   <td>&nbsp;</td>
				   <td style="color: red;">BY BANK INT</td>
				   <td>&nbsp;</td>
				   <td>&nbsp;</td>
				   <td><?php echo $bankintamt=$resbankint['intamt']; ?></td>
				   <td>&nbsp;</td>
			       
				<?php } ?>
				 
				 <tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td style="font-size:12px;font-weight: bold;"><?php echo "<strong>"." TOTAL PAYMENT"."</strong>";?></td>
					<td  style="font-size:12px;font-weight: bold;"><?php echo str_replace("-"," ",$totalpymt);?></td>
					
					<td>&nbsp;</td>
					<td  style="font-size:12px;font-weight: bold;"><?php echo str_replace("-"," ",$resbank['amt']); ?></td>
					<td  style="font-size:12px;font-weight: bold;"><?php $tot_paymt=$totalpymt+$resbank['amt']; echo str_replace("-"," ",$tot_paymt); ?></td>
				   </tr>
				 <?php
				 
						$obalp=mysql_query("select * from `day` where `date`='$resdatewisep[date]'");
						$resobalp=mysql_fetch_array($obalp);
						$obalancep=$resobalp['startbalance'];
						
						$fetchbankp=mysql_query("select sum(amount) amt from `bankdetails` where `amount`>'0' and `date`='$resdatewisep[date]'");
						$resbankp=mysql_fetch_array($fetchbankp);
						$bankp=$resbankp['amt'];
						
						$fetchdaytotalp=mysql_query("select sum(amount) as daytotalamount from `transaction` where `amount`>0 and `date`='$resdatewisep[date]'");
						$resdaytotalp=mysql_fetch_array($fetchdaytotalp);
						$gtotalp=$resdaytotalp['daytotalamount']+$obalancep;
				?>
				 <tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td style="color: red;font-size:12px;font-weight: bold; "><?php echo  "CLOSING BALANCE";?></td>
					<td style="font-size:12px;font-weight: bold;"><?php echo $closebal= $gtotalp+$totalpymt;?></td>
					<td>&nbsp;</td>
					<td style="font-size:12px;font-weight: bold;"><?php  $ctot=$bankp+$resbank['amt'];  echo str_replace("-"," ",$ctot); ?></td>
					<td style="font-size:12px;font-weight: bold;"><?php  $cls_tot=$ctot+$closebal; echo str_replace("-"," ",$cls_tot); ?></td>
				   </tr>
					
				    <tr>
					<td><?php echo date("d-m-Y",strtotime($resdatewisep['date'])); ?></td>
					<td>&nbsp;</td>
					<td style="color: red;font-size:12px;font-weight: bold; "><?php echo  "GRAND TOTAL";?></td>
					<td style="font-size:12px;font-weight: bold;"><?php  $gndtotal=-($totalpymt)+$closebal; echo  str_replace("-"," ",$gndtotal);?></td>
					<td>&nbsp;</td>
					<td style="font-size:12px;font-weight: bold;"><?php echo $bankp;?></td>
					<td style="font-size:12px;font-weight: bold;"><?php echo $gndtotal+$bankp;?></td>
				   </tr>
				<?php
				}
				?>
                   
		</table>
                 <?php } else{ ?>
		  <table style="float: left;width: 50%;font-size: 12px;">
                    <tr>
                         <th style="text-align: center;" colspan="7">RECEIPT</th>
                    </tr>
                    <tr>
                         <th style="width: 70px;">DATE</th>
			 <th>AGENT CODE</th>
			 <th>PARTICULARS</th>
			 <th>CASH</th>
			 <th>&nbsp;</th>
			 <th>BANK AMO</th>
		         <th>TOTAL AMO</th>
                    </tr>
                    <?php
		    $d=date("Y-m-d");
            //$d='2017-04-01';
            $bank=0;
		    $daytotal=0;
		    //echo "select * from `transaction` where `amount`>0 and `date`='$d'  group by `agentid`";
                    $datewise=mysql_query("select * from `transaction` where `amount`>0 and `date`='$d'  group by `agentid`");
		    
		            $obal=mysql_query("select * from `day` where `date`='$d'");
                    $resobal=mysql_fetch_array($obal);
                    $obalance=$resobal['startbalance'];
		            $closebal=$resobal['endbalance'];
                    
                    $fetchbank=mysql_query("select sum(amount) amt from `bankdetails` where `amount`>'0' and`date`='$d'");
                    $resbank=mysql_fetch_array($fetchbank);
		    ?>
		    <tr>
                         <td><?php  echo date("d-m-Y",strtotime($d)); ?></td>
			 <td>&nbsp;</td>
			 <td style="color: red;">O BALANCE</td>
			 <td><?php echo $obalance;?></td>
			 <td>&nbsp;</td>
			 <td><?php echo $bank = $resbank['amt'];?></td>
			 <td><?php echo $obalance+$bank;?></td>
                    </tr>
		    <?php
                    while($resdatewise=mysql_fetch_array($datewise)){
                  /* echo "select * from `transaction` where `amount`>0 and `date`='$d' and `agentid`='$resdatewise[agentid]' group by `folio_no`";
                   echo '</br>'  ;*/
		    $foliowise=mysql_query("select * from `transaction` where `amount`>0 and `date`='$d' and `agentid`='$resdatewise[agentid]' group by `folio_no`");
                    while($resfoliowise=mysql_fetch_array($foliowise)){
                        
                        if($resfoliowise['folio_no']==1){$type="TO CS COLL";}
			else if($resfoliowise['folio_no']==2){$type="TO VS COLL";}
			else if($resfoliowise['folio_no']==3){$type="TO RD COLL";}
			else if($resfoliowise['folio_no']==4){$type="TO DAILY COLL";}
			else if($resfoliowise['folio_no']==5){$type="TO FD COLL";}
			else if($resfoliowise['folio_no']==6){$type="TO GROUP LOAN COLL";}
			else if($resfoliowise['folio_no']==7){$type="TO AL COLL";}
			else if($resfoliowise['folio_no']==8){$type="TO BL COLL";}
			else if($resfoliowise['folio_no']==9){$type="TO EL COLL";}
			else if($resfoliowise['folio_no']==10){$type="TO DEMAND COLL";}
			else if($resfoliowise['folio_no']==11){$type="TO GOLD LOAN COLL";}
			else if($resfoliowise['folio_no']==12){$type="TO DAILY LOAN COLL";}
			else if($resfoliowise['folio_no']==17){$type="TO APPLICATION FEES";}
			else if($resfoliowise['folio_no']==19){$type="TO BANK WITHDRAWL";}
			else if($resfoliowise['folio_no']==19){$type="TO BANK WITHDRAWL";}
			else if($resfoliowise['folio_no']==15){$type="TO SHARE FEES";}
			else if($resfoliowise['folio_no']==16){$type="TO MEMBERSHIP FEES";}
			// else if($resfoliowise['folio_no']==24){$type="TO LOAN INT";}
			 else if($resfoliowise['folio_no']==25){$type="TO BANK INT";}
			 else if($resfoliowise['folio_no']==26){$type="TO A/C CLOSE FEES";}
			 else if($resfoliowise['folio_no']==27){$type="TO FINES";}
			 else{$type="TO OTHER COLL";}
                        
                       // echo $resfoliowise['folio_no'].'---'.$type;
                    ?>
                     <tr>
                         <td>&nbsp;</td>
			 <td>&nbsp;</td>
			 <td style="color: red;"><?php echo $type;?></td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
                    </tr>
                    <?php
                   /* echo "select sum(amount) as amt from `transaction` where `amount`>0 and `date`='$d' and `agentid`='$resfoliowise[agentid]' and `folio_no`='$resfoliowise[folio_no]'";
                    echo '</br>'  ;*/
		    $agentwise=mysql_query("select sum(amount) as amt from `transaction` where `amount`>0 and `date`='$d' and `agentid`='$resfoliowise[agentid]' and `folio_no`='$resfoliowise[folio_no]'");
                    $resagentwise=mysql_fetch_array($agentwise);
                    $amt=$resagentwise['amt'];
                    
                    $aname=mysql_query("select * from `agent` where `id`='$resagentwise[agentid]'")or die(mysql_error());
		    $resaname=mysql_fetch_array($aname);
                    ?>
                     <tr>
                         <td>&nbsp;</td>
			 <td>
                            <?php echo $resaname['name'];?>
                         </td>
			 <td>&nbsp;</td>
			 <td>
                            <?php echo $amt;?>
                         </td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
		         <td>&nbsp;</td>
                    </tr>
		    <?php 
		    $daytotal=$daytotal+$amt;
		    $gtotal=$daytotal+$obalance;
		    }
		    }
		    ?>
		     <tr>
                         <td>&nbsp;</td>
			 <td>&nbsp;</td>
			 <td style="font-size:12px;font-weight: bold;"><?php echo "<strong>"."DAY TOTAL COLL"."</strong>";?></td>
			 <td  style="font-size:12px;font-weight: bold;"><?php echo $daytotal;?></td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
                    </tr>
		     <tr>
                         <td>&nbsp;</td>
			 <td>&nbsp;</td>
			 <td style="color: red;font-size:12px;font-weight: bold; "><?php echo  "GRAND TOTAL";?></td>
			 <td style="font-size:12px;font-weight: bold;"><?php echo $gtotal;?></td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
                    </tr>
             </table>
	    <!-----------------------------Payment-------------------------------------->
	   
		<table style="float: left;width: 50%;font-size: 12px;">
		  <tr>
			     <th style="text-align: center;" colspan="7">PAYMENT</th>
		    </tr>
		    <tr>
			     <th>DATE</th>
			     <th>AGENT CODE</th>
			     <th>PARTICULARS</th>
			     <th>CASH AMO</th>
			     <td>&nbsp;</td>
			     <th>BANK AMO</th>
			     <th>TOTAL AMO</th>
		    </tr>
                    <?php
		    $d=date("Y-m-d");
                    $aid=0;
		    $totalpymt=0;
		    //echo "select * from `transaction` where `amount`<0 and `date`='$d' group by `agentid`";
                    $datewisep=mysql_query("select * from `transaction` where `amount`<0 and `date`='$d' group by `agentid`");
                    while($resdatewisep=mysql_fetch_array($datewisep)){
                     $loandis=mysql_query("select * from `transaction` where `amount`<0 and `agentid`='$resdatewisep[agentid]' and `date`='$d' and `folio_no` IN(6,7,8,9,10,11,12) group by `folio_no`");
		     if(mysql_num_rows($loandis)>0){
		    ?>
		    <tr>
                        <td><?php echo date("d-m-Y",strtotime($d)); ?></td>
                        <td></td>
                        <td style="color: red;">BY LOAN DISBURS</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
		     </tr>
		    <?php
				while($resloandis=mysql_fetch_array($loandis)){
				$loanfoliowise=mysql_query("select SUM(amount) as `amt`,`folio_no`,`customerid` from  `transaction` where `amount`<0 and `agentid`='$resloandis[agentid]' and `date`='$d'and `folio_no`='$resloandis[folio_no]'");
				$resloanfoliowise=mysql_fetch_array($loanfoliowise);
					
					if($resloanfoliowise['folio_no']==6){$type="BY GROUP";}
					else if($resloanfoliowise['folio_no']==7){$type="BY AL ";}
					else if($resloanfoliowise['folio_no']==8){$type="BY BL";}
					else if($resloanfoliowise['folio_no']==9){$type="BY EL ";}
					else if($resloanfoliowise['folio_no']==10){$type="BY DEMAND ";}
					else if($resloanfoliowise['folio_no']==11){$type="BY GOLD";}
					else if($resloanfoliowise['folio_no']==12){$type="BY DAILY";}
					
					$amtp=$resloanfoliowise['amt'];
					$totalpymt=$totalpymt+$amtp;
					//$anamep=mysql_query("select * from `agent` where `id`='$resloanfoliowise[agentid]'")or die(mysql_error());
					//$resanamep=mysql_fetch_array($anamep);
					
				$customerid=$resloanfoliowise['customerid'];
				$anamep=mysql_query("select * from `customer` where `customer_id`='$customerid'");
				$resanamep=mysql_fetch_array($anamep);
					
				?>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td style="color: red;"><?php echo $type;?></td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td></td>
					<td><?php echo $resanamep['name'];?></td>
					<td></td>
					<td><?php echo $amtp; ?></td>
					<td></td>
					<td></td>
					<td></td>
				    </tr>
			       <?php
				
				}
				}
				$withdrwl=mysql_query("select * from `transaction` where `amount`<0 and `agentid`='$aid' and `date`='$d' and `folio_no` IN(1,2,3,4,5,30) group by `folio_no`");
				if(mysql_num_rows($withdrwl)>0){
				?>
				<tr>
					<td><?php echo date("d-m-Y",strtotime($d)); ?></td>
					<td></td>
					<td style="color: red;">BY WITHDRAW AMO</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<?php
				while($reswithdrwl=mysql_fetch_array($withdrwl)){
				$accfoliowise=mysql_query("select SUM(amount) as `amt`,`folio_no`,`customerid` from  `transaction` where `amount`<0 and `agentid`='$resdatewisep[agentid]' and `date`='$d' and `folio_no`='$reswithdrwl[folio_no]'");
				$resaccfoliowise=mysql_fetch_array($accfoliowise);
					
					if($resaccfoliowise['folio_no']==1){$typee="BY CS";}
					else if($resaccfoliowise['folio_no']==2){$typee="BY VS";}
					else if($resaccfoliowise['folio_no']==3){$typee="BY RD";}
					else if($resaccfoliowise['folio_no']==4){$typee="BY DAILY";}
					else if($resaccfoliowise['folio_no']==5){$typee="BY FD";}
					else if($resaccfoliowise['folio_no']==30){$typee="BY SHARE WITHDRAW";}
					
					$amtpacc=$resaccfoliowise['amt'];
					$totalpymt=$totalpymt+$amtpacc;
					
					$anamepacc=mysql_query("select * from `agent` where `id`='$resaccfoliowise[agentid]'")or die(mysql_error());
					$resanamepacc=mysql_fetch_array($anamepacc);
					
				$customerid=$resaccfoliowise['customerid'];
				$anamep=mysql_query("select * from `customer` where `customer_id`='$customerid'");
				$resanamep=mysql_fetch_array($anamep);
					
				?>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td style="color: red;"><?php echo $typee;?></td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td></td>
					<td><?php echo $resanamep['name'];?></td>
					<td></td>
					<td><?php echo $amtpacc; ?></td>
					<td></td>
					<td></td>
					<td></td>
				    </tr>
			       <?php
				}
				}
				}
				?>
				 <tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td style="font-size:12px;font-weight: bold;"><?php echo "<strong>"." TOTAL PAYMENT"."</strong>";?></td>
					<td  style="font-size:12px;font-weight: bold;"><?php echo $totalpymt;?></td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				   </tr>
				 <tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td style="color: red;font-size:12px;font-weight: bold; "><?php echo  "CLOSING BALANCE";?></td>
					<td style="font-size:12px;font-weight: bold;"><?php echo $closebal;?></td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				   </tr>
				    <tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td style="color: red;font-size:12px;font-weight: bold; "><?php echo  "GRAND TOTAL";?></td>
					<td style="font-size:12px;font-weight: bold;"><?php echo $gndtotal=$totalpymt+$closebal;?></td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				   </tr>
                   
		</table>
           
		 
		 <?php } ?>
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
</html><?php }?>