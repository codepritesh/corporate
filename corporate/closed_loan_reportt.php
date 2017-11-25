<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{ header("location:index.php");}
else
{
$table=$_GET['table'];
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
    $(function(){
        $('#search').click(function(){
        var acc_no=$('#acc_no').val();
        if (acc_no!='') {
                var sdate=$('#sdate').val();
                var edate=$('#edate').val();
                $.ajax({
                url: "search.php?acc_no="+acc_no+"&sdt="+sdate+"&edt="+edate,
                success: function(result){
                $('#srch').html(result);
                }
               }); 
        }
        else{
            alert("Enter an account number..");
            $('#acc_no').focus();
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

	   
<script>
    function printContent(el){
	    var restorepage = document.body.innerHTML;
	    //alert(document.getElementById(el).innerHTML);
	    var printcontent = document.getElementById(el).innerHTML;
	    document.body.innerHTML = printcontent;
	    window.print();
	    document.body.innerHTML = restorepage;
    }
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
	//document.body.innerHTML = restorepage;
	location.reload();
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
            <?php echo date("d-m-Y");?>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i> Closed Loan Report</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form name="arrange" method="post"  enctype="multipart/form-data">
                     <table style="float: left;width: 100%;">
                        <tr id="bydate">
							<td>Loan Type</td>
							<td>
								<select name="type" class="form-control">
									<option value="goldloan">Gold Loan</option>
									<option value="demand_loan">Demand Loan</option>
									<option value="businessloan">Agriculture Loan</option>
									<option value="agricultureloan">Bussiness Loan</option>
									<option value="enterpriseloan">Enterprise Loan</option>	
									<option value="grouploan">Group Loan</option>																	
									<option value="staffloan">Staff Loan</option>
									<option value="">All Loan</option>
								</select>
						   </td>
                            <td><input type="text" name="sdate" onKeyPress="return IsNumeric(event)" autocomplete="off" class="form-control" id="sdate" style="width: 300px;"  placeholder="Start Date"></td>
							<td><input type="text" name="edate" onKeyPress="return IsNumeric(event)" autocomplete="off" class="form-control" id="edate" style="width: 300px;"  placeholder="End Date"></td>
                            <td><input type="submit" name="submit" value="Search" id="search" /></td>
						</tr>
                        <tr>
                            <td colspan="4">&nbsp;</td>
                        </tr>
                     </table>
		</form>
	    </div>
            <div class="box-content" id="printDiv">
                <?php
                if(isset($_POST['submit']))
				{
                     $date=date("Y-m-d",strtotime($_POST['sdate']));
					 $edate=date("Y-m-d",strtotime($_POST['edate']));
					if($_POST['edate']!='' && $_POST['sdate']!=''){
						$dt="AND  `coll_date` BETWEEN '$date' and '$edate'";
						$title="from ".date("d-M-Y",strtotime($date))." to ".date("d-M-Y",strtotime($edate));
					}
					else if($_POST['sdate']!='')
					{
						$dt="AND  `coll_date`='$date'";
						$title="of ".date("d-M-Y",strtotime($date));
					}
					else
					{
						$dt=" ";
						$title=" ";
					}
					$type=$_POST['type'];
					 if($type!=''){
						if($type=='goldloan'){ $var="GL";}
						else if($type=='demand_loan'){ $var="DL";}
						else if($type=='businessloan'){ $var="BL";}
						else if($type=='agricultureloan'){ $var="AL";}
						else if($type=='enterpriseloan'){ $var="EL";}
						else if($type=='grouploan'){ $var="GR";}
						else if($type=='staffloan'){ $var="SL";}
						$var="AND `accountno` like '".$var."%'";
					 }else{
						$var='';
					 }
						
                }else{
                    $date=date("Y-m-d");
					$type=$_POST['type'];
					$var='';
					$dt="AND  `coll_date`='$date'";
					$title="of ".date("d-M-Y",strtotime($date));
                }
				
				
                ?>
                 <table  class="table">
                   <tr>
                    <th style="text-align: center;">
                      Close <?php if($type!=''){ echo ucwords($type); }else{ echo "Loan";};?> Report <?php echo $title;?>
                    </th>
                   </tr>
                 </table>
                <table  class="table">                    
                     <tr>
                        <th>Slno.</th>
                        <th>Name</th>
                        <th>Acc_no</th>
                        <th>Closing Amount</th>
			<th>Outstanging</th>
                        <th>Date</th>                       
                    </tr>
                     <?php
                     $n=0;
                     $tot_closing_amount=0;
		     $tot_outstanding=0;
                     $cdate=date("Y-m-d");
                     $cym=date("Y-m-d",strtotime($date));
		     //echo "SELECT * FROM `transaction_ledger` where `collection`>0 and `outstanding`!=0 and `Refundtype`='Forcefully close' $dt $var";
                     $qwe= mysql_query("SELECT * FROM `transaction_ledger` where `collection`>0 and `outstanding`!=0 and `Refundtype`='Forcefully close' $dt $var");
                    if(mysql_num_rows($qwe)>0){						
					
					 while($res=mysql_fetch_array($qwe))                     
                     {
                     $str=substr($res['accountno'], 0, 2);					 
						if($str=='GL'){ $table="goldloan";}
						else if($str=='DL'){ $table="demand_loan";}
						else if($str=='BL'){ $table="businessloan";}
						else if($str=='AL'){ $table="agricultureloan";}
						else if($str=='EL'){ $table="enterpriseloan";}
						else if($str=='GR'){ $table="grouploan";}
						else if($str=='SL'){ $table="staffloan";}
					                    
                     
                     $n++;
                     $tot_closing_amount=$tot_closing_amount+$res['collection'];
                     $tot_outstanding=$tot_outstanding+$res['coll_date'];
                     $getname=mysql_query("select * from $table where `loan_accno`='$res[accountno]'");
                     $resname=mysql_fetch_array($getname);
                     ?>
                     
                     <tr>
                        <td><?php echo $n; ?>.</td>
                        <td><?php echo $resname['name'];?></td>
                        <td><?php echo $res['accountno'];?></td>
                        <td><?php echo $res['collection'];?></td>
			<td><?php echo $res['outstanding'];?></td>
                        <td><?php echo $res['coll_date'];?></td>
                        
                    </tr>
                     <?php } ?>
                     <tr style="text-align: center;">
                        <th colspan='3' style="text-align: center;"> Total </th>
                        <th><?php echo $tot_closing_amount; ?></th>
			 <th><?php echo $tot_outstanding; ?></th>
                        <th></th>
                     </tr>
			
					 <?php }else{ ?>
					 <tr style="text-align: center;">
                        <th colspan='6' style="text-align: center;">No Results Found</th>                        
                     </tr>
					 <?php } ?>
                </table>
                <table class="table">
		   <tr>
			    <th style="text-align: center;" colspan="4"><input type="button" value="Print" onclick="printContent('printDiv');" /></td>
			   
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