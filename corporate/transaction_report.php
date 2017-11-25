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
                <h2><i class="glyphicon glyphicon-plus"></i> Transaction Report</h2>

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
                            <td>Date</td>
                            <td><input type="text" name="sdate" onKeyPress="return IsNumeric(event)" autocomplete="off" class="form-control" id="sdate" style="width: 300px;" required placeholder="Start Date"></td>
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
                if(isset($_POST['submit'])){
                    $date=date("Y-m-d",strtotime($_POST['sdate']));
                }else{
                    $date=date("Y-m-d");
                }
                ?>
                 <table  class="table">
                   <tr>
                    <th style="text-align: center;">
                        Transaction Report of Dt:<?php echo date("d-m-Y",strtotime($date));?>
                    </th>
                   </tr>
                 </table>
                <table  class="table">
                    <?php
                    $qwe=mysql_query("select * from `transaction` where DATE(`date`)='$date'");
                    if(mysql_num_rows($qwe)>0){
                   
                    ?>
                     <tr>
                        <th>Slno.</th>
                        <th>Customer ID</th>
			<th>Customer Name</th>
			<th>Agent Name</th>
                        <th>Acc_no</th>
                        <th>Details</th>
			<th>Credit</th>
                        <th>Debit</th>
                    </tr>
                    <?php
                    $i1=0;
                    $credit=0;
                    $debit=0;
		    $creditamount=0;
                    while($res=mysql_fetch_array($qwe)){
                    $i1++;
		    if($res['interest']!=0)
		    {
		    $creditamount=$res['interest'];
		    }else{$creditamount=$res['amount'];}
		    
                     ?>
                    <tr>
                        <td><?php echo $i1;?></td>
                        <td><?php echo $res['customerid'];?></td>
			<?php
			//echo "select * from `customer` where `customer_id`='$res[customerid]";
			$cname=mysql_query("select * from `customer` where `customer_id`='$res[customerid]'");
			$rcname=mysql_fetch_array($cname);
			?>
			<td><?php echo $rcname['name'];?></td>
			<?php
			//echo "select * from `agent` where `id`='$res[agentid]'";
			$aname=mysql_query("select * from `agent` where `id`='$res[agentid]'");
			$raname=mysql_fetch_array($aname);
			?>
			<td><?php echo $raname['name'];?></td>
                        <td><?php echo $res['accountno'];?></td>
                        <td><?php echo $res['details'];?></td>
                        <?php if($creditamount>0){ $credit=$credit+$creditamount; ?>
                        <td><?php echo $creditamount;?></td>
                        <td>&nbsp;</td>
                        <?php }else{ $debit=$debit+$res['amount']; ?>
                        <td>&nbsp;</td>
                        <td><?php echo  str_replace("-"," ",$res['amount']);?></td>
                        <?php } ?>
			
                    </tr>
                    <?php
                    }
                    ?>
                    <tr style="color: red;">
                        <td style="text-align: center;" colspan="6">Total</td>
                        <td><?php echo $credit;?></td>
                        <td><?php echo  str_replace("-"," ",$debit);?></td>
                    </tr>
		    
                    <?php
                    }else{
                    ?>
                    <tr>
                        <td colspan="6"> No Results Found...</td>
                    </tr>
                    <?php
                    }
                    ?>
                   
                </table>
                <table class="table">
		   <tr>
			    <td style="text-align: center;" colspan="4"><input type="button" value="Print" onclick="printContent('printDiv')" /></td>
			   
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
</html><?php }?>