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
			<div style="float: left;width: 25%;">
				<input type="text" name="agent" class="form-control" id="agent" required placeholder="Agent Name(ID)">
			</div>
			<input type="hidden" name="agentid" id="agentid"><input type="hidden" name="product" id="product">
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
		
		$aid=$_POST['agentid'];
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
	     
	    <table style="float: left;width: 50%;font-size: 8px;">
                    <tr>
                         <th colspan="7">RECEIPT</th>
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
		    $obbal=0;
		    $bankamt=0;
		    //echo "select * from `transaction` where `agentid`='$aid' $var  group by `date`";
		    $fetch=mysql_query("select * from `transaction` where `agentid`='$aid' $var  group by `date`")or die(mysql_error());
		    while($res=mysql_fetch_array($fetch)){
		    $c=0;
		    $tot=0;
		    
		   $fetch1=mysql_query("select * from `transaction` where  `agentid`='$aid' and `date`='$res[date]'")or die(mysql_error());
		   while($res1=mysql_fetch_array($fetch1)){
		   
		   $fetch2=mysql_query("select SUM(amount) as `amt`,`folio_no` from `transaction` where `agentid`='$aid' and `date`='$res[date]'")or die(mysql_error());
		   $res2=mysql_fetch_array($fetch2);
			
			$aname=mysql_query("select * from `agent` where `id`='$res1[agentid]'")or die(mysql_error());
			$resaname=mysql_fetch_array($aname);
			if( $resaname['name']!=''){   //agent id 0
			$tot+=$res2['amt'];
				
			if($res2['folio_no']==1){$type="TO CS COLL";}
			if($res2['folio_no']==2){$type="TO VS COLL";}
			if($res2['folio_no']==3){$type="TO RD COLL";}
			if($res2['folio_no']==4){$type="TO DAILY COLL";}
			if($res2['folio_no']==5){$type="TO FD COLL";}
			if($res2['folio_no']==6){$type="TO GROUP LOAN COLL";}
			if($res2['folio_no']==7){$type="TO AL COLL";}
			if($res2['folio_no']==8){$type="TO BL COLL";}
			if($res2['folio_no']==9){$type="TO EL COLL";}
			if($res2['folio_no']==10){$type="TO DEMAND COLL";}
			if($res2['folio_no']==11){$type="TO GOLD LOAN COLL";}
			if($res2['folio_no']==12){$type="TO DAILY LOAN COLL";}
			
			if($c==0){
			
		    ?>
		    <tr>
                         <td><?php  echo date("d-m-Y",strtotime($res['date'])); ?></td>
			 <td>&nbsp;</td>
			 <td style="color: red;">O BALANCE</td>
			 <td><?php echo $obbal;?></td>
			 <td>&nbsp;</td>
			 <td><?php echo $bank= ltrim ($bankamt, '-');?></td>
			 <td><?php echo $obbal+$bank;?></td>
                    </tr>
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
                         <td>&nbsp;</td>
			 <td><?php echo $resaname['codeno'];?></td>
			 <td>&nbsp;</td>
			 <td>
                            <?php echo $res2['amt'];?>
                         </td>
			 <td>&nbsp;</td>
			 <td>
                            &nbsp;
                         </td>
		         <td>&nbsp;</td>
                    </tr>
		    <?php } else{ ?>
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
                         <td>&nbsp;</td>
			 <td>
                            <?php echo $resaname['codeno'];?>
                         </td>
			 <td>&nbsp;</td>
			 <td>
                            <?php echo $res2['amt'];?>
                         </td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
		         <td>&nbsp;</td>
                    </tr>
		     <?php
		     }
		     $c++;
		     }
		     }
		     if($tot!=0){
		     ?>
		     <tr>
                         <td>&nbsp;</td>
			 <td>&nbsp;</td>
			 <td style="font-size:12px;font-weight: bold;"><?php echo "<strong>"."DAY TOTAL COLL"."</strong>";?></td>
			 <td  style="font-size:12px;font-weight: bold;"><?php echo $tot;?></td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
                    </tr>
		     <?php
		         $sum=mysql_query("select sum(amount) as amount from `transaction` where `agentid`='$aid' and `date`='$res[date]' and `amount`<'0'")or die(mysql_error());
		         $ressum=mysql_fetch_array($sum);
			 
			 $fdate=mysql_query("select * from `transaction`")or die(mysql_error());
			 $rdate=mysql_fetch_array($fdate);
			 $sdate=$rdate['date'];
			 
			 $fclosing=mysql_query("select sum(amount) as amount from `transaction` where date BETWEEN '$sdate' and '$res[date]'")or die(mysql_error());
			 $rclosing=mysql_fetch_array($fclosing);
			
			 $gtotal=$obbal+$tot;
			 $obbal=ltrim ($rclosing['amount'], '-');
			 $bankamt=$rclosing['amount']+$ressum['amount'];
		     ?>
		     <tr>
                         <td>&nbsp;</td>
			 <td>&nbsp;</td>
			 <td style="color: red;font-size:12px;font-weight: bold; "><?php echo  "GRAND TOTAL";?></td>
			 <td style="font-size:12px;font-weight: bold;"><?php echo $gtotal;?></td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
                    </tr>
		     <?php
		     }
		     }
		     ?>
                </table>
		
	     <?php }
	     else{ ?>
		<table style="float: left;width: 50%;font-size: 8px;">
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
		    $obbal=0;
		    $bankamt=0;
                    $dt=date("Y-m-d");
		    $fetch=mysql_query("select * from `transaction` where `date`='$dt'")or die(mysql_error());
		    while($res=mysql_fetch_array($fetch)){
		    $c=0;
		    $tot=0;
		    
		   $fetch1=mysql_query("select * from `transaction` where `date`='$res[date]'  group by `agentid` ")or die(mysql_error());
		   while($res1=mysql_fetch_array($fetch1)){
		   
		   $fetch2=mysql_query("select SUM(amount) as `amt`,`folio_no` from `transaction` where `agentid`='$res1[agentid]' and `date`='$res[date]'")or die(mysql_error());
		   $res2=mysql_fetch_array($fetch2);
			
			$aname=mysql_query("select * from `agent` where `id`='$res1[agentid]'")or die(mysql_error());
			$resaname=mysql_fetch_array($aname);
			if( $resaname['name']!=''){   //agent id 0
			$tot+=$res2['amt'];
				
			if($res2['folio_no']==1){$type="TO CS COLL";}
			if($res2['folio_no']==2){$type="TO VS COLL";}
			if($res2['folio_no']==3){$type="TO RD COLL";}
			if($res2['folio_no']==4){$type="TO DAILY COLL";}
			if($res2['folio_no']==5){$type="TO FD COLL";}
			if($res2['folio_no']==6){$type="TO GROUP LOAN COLL";}
			if($res2['folio_no']==7){$type="TO AL COLL";}
			if($res2['folio_no']==8){$type="TO BL COLL";}
			if($res2['folio_no']==9){$type="TO EL COLL";}
			if($res2['folio_no']==10){$type="TO DEMAND COLL";}
			if($res2['folio_no']==11){$type="TO GOLD LOAN COLL";}
			if($res2['folio_no']==12){$type="TO DAILY LOAN COLL";}
			
			if($c==0){
			
		    ?>
		    <tr>
                         <td><?php  echo date("d-m-Y",strtotime($res['date'])); ?></td>
			 <td>&nbsp;</td>
			 <td style="color: red;">O BALANCE</td>
			 <td><?php echo $obbal;?></td>
			 <td>&nbsp;</td>
			 <td><?php echo $bank= ltrim ($bankamt, '-');?></td>
			 <td><?php echo $obbal+$bank;?></td>
                    </tr>
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
                         <td>&nbsp;</td>
			 <td><?php echo $resaname['codeno'];?></td>
			 <td>&nbsp;</td>
			 <td>
                            <?php echo $res2['amt'];?>
                         </td>
			 <td>&nbsp;</td>
			 <td>
                            &nbsp;
                         </td>
		         <td>&nbsp;</td>
                    </tr>
		    <?php } else{ ?>
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
                         <td>&nbsp;</td>
			 <td>
                            <?php echo $resaname['codeno'];?>
                         </td>
			 <td>&nbsp;</td>
			 <td>
                            <?php echo $res2['amt'];?>
                         </td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
		         <td>&nbsp;</td>
                    </tr>
		     <?php
		     }
		     $c++;
		     }
		     }
		     if($tot!=0){
		     ?>
		     <tr>
                         <td>&nbsp;</td>
			 <td>&nbsp;</td>
			 <td style="font-size:12px;font-weight: bold;"><?php echo "<strong>"."DAY TOTAL COLL"."</strong>";?></td>
			 <td  style="font-size:12px;font-weight: bold;"><?php echo $tot;?></td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
                    </tr>
		     <?php
		         $sum=mysql_query("select sum(amount) as amount from `transaction` where `date`='$res[date]' and `amount`<'0'")or die(mysql_error());
		         $ressum=mysql_fetch_array($sum);
			 
			 $fdate=mysql_query("select * from `transaction`")or die(mysql_error());
			 $rdate=mysql_fetch_array($fdate);
			 $sdate=$rdate['date'];
			 
			 $fclosing=mysql_query("select sum(amount) as amount from `transaction` where date BETWEEN '$sdate' and '$res[date]'")or die(mysql_error());
			 $rclosing=mysql_fetch_array($fclosing);
			
			 $gtotal=$obbal+$tot;
			 $obbal=ltrim ($rclosing['amount'], '-');
			 $bankamt=$rclosing['amount']+$ressum['amount'];
		     ?>
		     <tr>
                         <td>&nbsp;</td>
			 <td>&nbsp;</td>
			 <td style="color: red;font-size:12px;font-weight: bold; "><?php echo  "GRAND TOTAL";?></td>
			 <td style="font-size:12px;font-weight: bold;"><?php echo $gtotal;?></td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
			 <td>&nbsp;</td>
                    </tr>
		     <?php
		     }
		     }
		     ?>
		     
                </table>
		    
	     <?php
	     }
	     ?>
            
	    <!-----------------------------Payment-------------------------------------->
	     <?php
	     if(isset($_POST['submit'])){
		
		$aid=$_POST['agentid'];
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
		<table style="float: left;width: 50%;font-size: 8px;">
		  <tr>
			     <th style="text-align: center;" colspan="7">PAYMENT</th>
		    </tr>
		    <tr>
			     <th>PAYMENT M & DATE</th>
			     <th>CUSTOMER NAME</th>
			     <th>PARTICULARS</th>
			     <th>CASH AMO</th>
			     <td>&nbsp;</td>
			     <th>BANK AMO</th>
			     <th>TOTAL AMO</th>
		    </tr>
                    <?php
                    $fet=mysql_query("select * from `transaction` where `amount`<'0' $var group by `date`")or die(mysql_error());
		    while($re=mysql_fetch_array($fet))
                    {	
                    ?>
		       <tr>
                        <td></td>
                        <td></td>
                        <td style="color: red;"><?php echo $re['date']; ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
		    <?php
		    $floan=mysql_query("select * from `transaction` where `date`='$re[date]' and `type`='loan'")or die(mysql_error());
		    $rloan=mysql_num_rows($floan);
		    if($rloan>0){ 
		    ?>
		     <tr>
                        <td><?php echo $re['date']; ?></td>
                        <td></td>
                        <td style="color: red;">BY LOAN DISBURS</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
		     </tr><?php }else {?>	
		     <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
		     <tr>
                        <td><?php echo $re['date']; ?></td>
                        <td></td>
                        <td style="color: red;">BY WITHDRAW AMO</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
		     <?php }
		     $fpayment=mysql_query("select * from `transaction` where `amount`<'0' and `date`='$re[date]' group by `agentid`")or die(mysql_error());
			while($rpayment=mysql_fetch_array($fpayment))
			{
		     if($rpayment['folio_no']==6 || $rpayment['folio_no']==7 || $rpayment['folio_no']==8 || $rpayment['folio_no']==9 || $rpayment['folio_no']==10 || $rpayment['folio_no']==11 || $rpayment['folio_no']==12)
		     {
			?>
                     <tr>
                        <td></td>
                        <td></td>
                        <td style="color: red;"><?php echo $rpayment['details']?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                     <?php
		     
		     $fpayment1=mysql_query("select SUM(amount) as `amount`,`folio_no` from  `transaction` where `date`='$rpayment[date]' and `amount`<'0' and `folio_no`='$rpayment[folio_no]' and `agentid`='$rpayment[agentid]' ")or die(mysql_error());
		     while($rpayment1=mysql_fetch_array($fpayment1)){
			     
                        $faname=mysql_query("select * from `agent` where `id`='$rpayment1[agentid]'")or die(mysql_error());
			$rresaname=mysql_fetch_array($faname);
                     ?>
                    <tr>
                        <td></td>
                        <td><?php echo $rresaname['name'];?></td>
                        <td></td>
                        <td><?php echo $rpayment1['amount'];?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <?php
                    }
		    }else{
			
		     ?>
		    <tr>
                        <td></td>
                        <td></td>
                        <td style="color: red;"><?php echo $rpayment['details']?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                     <?php
		    // echo "</br>select * from `transaction` where `date`='$rpayment[date]' and `amount`<'0' and `accountno`like 'BL%'  ";
                     $cmpayment1=mysql_query("select * from `transaction` where `date`='$rpayment[date]' and `amount`<'0' and `folio_no`='$rpayment[folio_no]'  group by `agentid`  ")or die(mysql_error());
		     while($cmrpayment1=mysql_fetch_array($cmpayment1)){
                        
                     $fetchh2=mysql_query("select SUM(amount) as `amount`,`folio_no` from `transaction` where  `amount`<'0' and `agentid`='$rpayment1[agentid]' and `date`='$rpayment1[date]'")or die(mysql_error());
		     $ress2=mysql_fetch_array($fetchh2);
                        
                        $faname=mysql_query("select * from `agent` where `id`='$rpayment1[agentid]'")or die(mysql_error());
			$rresaname=mysql_fetch_array($faname);
                        //$cmaname=mysql_query("select * from `customer` where `customer_id`='$cmrpayment1[customerid]'")or die(mysql_error());
			//$cmresaname=mysql_fetch_array($cmaname);
                     ?>
                    <tr>
                        <td></td>
                        <td><?php echo $rresaname['name'];?></td>
                        <td></td>
                        <td><?php echo $ress2['amount'];?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <?php
                    }
		    }
		    }
		    //echo "</br>select sum(amount) as amount from `transaction` where `date`='$rpayment[date]' and `amount`<'0'";
		    $sum=mysql_query("select sum(amount) as amount from `transaction` where `date`='$re[date]' and `amount`<'0'")or die(mysql_error());
		    $ressum=mysql_fetch_array($sum);
		    
		    $fdate=mysql_query("select * from `transaction`")or die(mysql_error());
		    $rdate=mysql_fetch_array($fdate);
		    $sdate=$rdate['date'];
		    //echo "</br>select sum(amount) as amount from `transaction` where date BETWEEN '$sdate' and '$rpayment[date]'";
		    $fclosing=mysql_query("select sum(amount) as amount from `transaction` where date BETWEEN '$sdate' and '$re[date]'")or die(mysql_error());
		    $rclosing=mysql_fetch_array($fclosing);
		    
		    ?>
		    <tr> <td></td><td></td><td style="color: red;">Total</td><td colspan="4">=<?php echo $ressum['amount']; ?></td></tr>
		    <tr> <td></td><td></td><td style="color: red;">CLOSING BALANCE</td><td colspan="4">=<?php $closingbal=$rclosing['amount']; if($closingbal<0){ $closingbal=0;} else{$closingbal=$rclosing['amount'];} ?></td></tr>
		    <tr> <td></td><td></td><td style="color: red;">TOATAL BALANCE</td><td colspan="4">=<?php echo $closingbal+$ressum['amount']; ?></td></tr>
		    <?php
		    }
                    ?>
		</table>
		<?php }else { ?>
		<table style="float: left;width: 50%;font-size: 8px;">
		  <tr>
			     <th colspan="7">PAYMENT</th>
		    </tr>
		    <tr>
			     <th>PAYMENT M & DATE</th>
			     <th>CUSTOMER NAME</th>
			     <th>PARTICULARS</th>
			     <th>CASH AMO</th>
			     <td>&nbsp;</td>
			     <th>BANK AMO</th>
			     <th>TOTAL AMO</th>
		    </tr>
                    <?php
                    $dt=date("Y-m-d");
                    $fet=mysql_query("select * from `transaction` where `amount`<'0' and `date`='$dt'")or die(mysql_error());
		    while($re=mysql_fetch_array($fet))
                    {	
                    ?>
		       <tr>
                        <td></td>
                        <td></td>
                        <td style="color: red;"><?php echo $re['date']; ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
		    <?php
		    $floan=mysql_query("select * from `transaction` where `date`='$re[date]' and `type`='loan'")or die(mysql_error());
		    $rloan=mysql_num_rows($floan);
		    if($rloan>0){ 
		    ?>
		     <tr>
                        <td><?php echo $re['date']; ?></td>
                        <td></td>
                        <td style="color: red;">BY LOAN DISBURS</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
		     </tr><?php }else {?>	
		     <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
		     <tr>
                        <td><?php echo $re['date']; ?></td>
                        <td></td>
                        <td style="color: red;">BY WITHDRAW AMO</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
		     <?php }
		     $fpayment=mysql_query("select * from `transaction` where `amount`<'0' and `date`='$re[date]'")or die(mysql_error());
			while($rpayment=mysql_fetch_array($fpayment))
			{
		     if($rpayment['folio_no']==6 || $rpayment['folio_no']==7 || $rpayment['folio_no']==8 || $rpayment['folio_no']==9 || $rpayment['folio_no']==10 || $rpayment['folio_no']==11 || $rpayment['folio_no']==12)
		     {
			?>
                     <tr>
                        <td></td>
                        <td></td>
                        <td style="color: red;"><?php echo $rpayment['details']?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                     <?php
		     //echo "</br>select * from `transaction` where `date`='$rpayment[date]' and `amount`<'0' group by `accountno`='L%' ";
		     //echo "</br>select * from `transaction` where `date`='$rpayment[date]' and `amount`<'0' and `accountno`like 'L%' ";
                     $fpayment1=mysql_query("select * from `transaction` where `date`='$rpayment[date]' and `amount`<'0' and `folio_no`='$rpayment[folio_no]' group by `agentid`")or die(mysql_error());
		     while($rpayment1=mysql_fetch_array($fpayment1)){
                        
                      
                        $fetchh2=mysql_query("select SUM(amount) as `amount`,`folio_no` from `transaction` where  `amount`<'0' and `agentid`='$rpayment1[agentid]' and `date`='$rpayment1[date]'")or die(mysql_error());
                        $ress2=mysql_fetch_array($fetchh2);
                        
                        $faname=mysql_query("select * from `agent` where `id`='$rpayment1[agentid]'")or die(mysql_error());
			$rresaname=mysql_fetch_array($faname);
                        //$faname=mysql_query("select * from `customer` where `customer_id`='$rpayment1[customerid]'")or die(mysql_error());
			//$rresaname=mysql_fetch_array($faname);
                     ?>
                    <tr>
                        <td></td>
                        <td><?php echo $rresaname['name'];?></td>
                        <td></td>
                        <td><?php echo $ress2['amount'];?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <?php
                    }
		    }else{
			
		     ?>
		    <tr>
                        <td></td>
                        <td></td>
                        <td style="color: red;"><?php echo $rpayment['details']?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                     <?php
		    // echo "</br>select * from `transaction` where `date`='$rpayment[date]' and `amount`<'0' and `accountno`like 'BL%'  ";
                     $cmpayment1=mysql_query("select * from `transaction` where `date`='$rpayment[date]' and `amount`<'0' and `folio_no`='$rpayment[folio_no]'  group by `agentid` ")or die(mysql_error());
		     while($cmrpayment1=mysql_fetch_array($cmpayment1)){
                        
                        $fetchh2=mysql_query("select SUM(amount) as `amount`,`folio_no` from `transaction` where  `amount`<'0' and `agentid`='$cmrpayment1[agentid]' and `date`='$rpayment[date]'")or die(mysql_error());
                        $ress2=mysql_fetch_array($fetchh2);
                        
                        $faname=mysql_query("select * from `agent` where `id`='$rpayment1[agentid]'")or die(mysql_error());
			$rresaname=mysql_fetch_array($faname);
                        //$cmaname=mysql_query("select * from `customer` where `customer_id`='$cmrpayment1[customerid]'")or die(mysql_error());
			//$cmresaname=mysql_fetch_array($cmaname);
                     ?>
                    <tr>
                        <td></td>
                        <td><?php echo $rresaname['name'];?></td>
                        <td></td>
                        <td><?php echo $ress2['amount'];?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <?php
                    }
		    }
		    }
		    //echo "</br>select sum(amount) as amount from `transaction` where `date`='$rpayment[date]' and `amount`<'0'";
		    $sum=mysql_query("select sum(amount) as amount from `transaction` where `date`='$re[date]' and `amount`<'0'")or die(mysql_error());
		    $ressum=mysql_fetch_array($sum);
		    
		    $fdate=mysql_query("select * from `transaction`")or die(mysql_error());
		    $rdate=mysql_fetch_array($fdate);
		    $sdate=$rdate['date'];
		    //echo "</br>select sum(amount) as amount from `transaction` where date BETWEEN '$sdate' and '$rpayment[date]'";
		    $fclosing=mysql_query("select sum(amount) as amount from `transaction` where date BETWEEN '$sdate' and '$re[date]'")or die(mysql_error());
		    $rclosing=mysql_fetch_array($fclosing);
		    
		    ?>
		    <tr> <td></td><td></td><td style="color: red;">Total</td><td colspan="4">=<?php echo $ressum['amount']; ?></td></tr>
		    <tr> <td></td><td></td><td style="color: red;">CLOSING BALANCE</td><td colspan="4">=<?php $closingbal=$rclosing['amount']; if($closingbal<0){ $closingbal=0;} else{$closingbal=$rclosing['amount'];} ?></td></tr>
		    <tr> <td></td><td></td><td style="color: red;">TOATAL BALANCE</td><td colspan="4">=<?php echo $closingbal+$ressum['amount']; ?></td></tr>
		    <?php
		    }
                    ?>
		</table>
	 	<?php } ?>
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