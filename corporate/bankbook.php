<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{ header("location:index.php");}
else
{

?>
<script  type='text/javascript'>
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
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	
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

    <!-- date picker ends -->

    <script>
 
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
	    //alert(document.getElementById(el).innerHTML);
	    var printcontent = document.getElementById(el).innerHTML;
	    document.body.innerHTML = printcontent;
	    window.print();
	    document.body.innerHTML = restorepage;
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
             <?php echo date("Y-m-d");?>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i>Compulsery Report</h2>

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
                        <tr>
                            <td colspan="7" style="color: red;font-size: 20px;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; }  ?></td>
                        </tr>	
			<tr>
			    <td>Bank Name</td><td>
						    <select name="bank" id="bank" class="form-control"  required>
							    <option value="">----Choose Bank---- </option>
							    <?php
								$bank=mysql_query("select * from `bank`")or die(mysql_error());
								while($resbank=mysql_fetch_array($bank)){
							    ?>
							    <option value="<?php echo $resbank['bankname'];?>"><?php echo $resbank['bankname'];?></option>
							    <?php } ?>
						    </select>
					      </td>
                            <td>Start Date</td><td><input type="text" name="sdate"  onKeyPress="return IsNumeric(event)"  class="form-control" id="sdate" ></td>
                            <td>End Date</td><td><input type="text" name="edate"  onKeyPress="return IsNumeric(event)"  class="form-control" id="edate"  ></td>
                            <td align="center" colspan="2"><input type="submit" name="submit" value="Search" id="search" /></td>
			    
			</tr>
                     </table>
		</form>
	    </div>
            <div class="box-content" id="print">
                 <table class="table" id="srch" >
		    <tr>
			<th colspan="7">&nbsp;</td>
		    </tr>
		     <tr>
			<th colspan="7">AIR CREDIT COOPERATIVE</td>
		    </tr>
                    <tr>
			<th colspan="7">BALIA, BHAGABATPUR,KENDRAPADA,PIN-754208</td>
		    </tr>
                    <tr>
		    <?php
		    if(isset($_POST['submit']))
		    {
			if($_POST['sdate']!=''){
			    if($_POST['edate']!=''){
				$sdate=date("Y-m-d",strtotime($_POST['sdate']));
				$edate=date("Y-m-d",strtotime($_POST['edate']));
				$val= 'FOR THE Date: '.date("d-m-Y",strtotime($sdate)).' To '.date("d-m-Y",strtotime($edate));
			    }
			    else{
				$sdate=date("Y-m-d",strtotime($_POST['sdate']));
				$edate=date("Y-m-d");
				$val= 'FOR THE Date: '.date("d-m-Y",strtotime($sdate)).' To '.date("d-m-Y",strtotime($edate));
			    }
			}else{
			    $val='';
			}
			
		    }else{
			$val='';
			}
		    ?>			

		    <th colspan="7">BANK STATEMENT ACCOUNT <?php echo $val;?></td>
		    </tr>
                    <tr>
			<th colspan="7"><?php echo $_POST['bank']?></td>
		    </tr>
                    <tr>
                        <th>Date</th>
                         <th>Perticulars</th>
			 <th>Cheque</th>
			 <th>Deposite</th>
			 <th>Withdrawl</th>
                         <th>Balance</th> 
                    </tr>
                    <?php
		    if(isset($_POST['submit']))
		    {
			if($_POST['sdate']!=''){
			    if($_POST['edate']!=''){
				$sdate=date("Y-m-d",strtotime($_POST['sdate']));
				$edate=date("Y-m-d",strtotime($_POST['edate']));
				$fetch=mysql_query("select * from `bankdetails` where `bankname`='$_POST[bank]' and `date`  BETWEEN '$sdate' AND '$edate'");
			    }else{
				$sdate=date("Y-m-d",strtotime($_POST['sdate']));
				$edate=date("Y-m-d");
				$fetch=mysql_query("select * from `bankdetails` where `bankname`='$_POST[bank]' and `date`  BETWEEN '$sdate' AND '$edate'");
			    }
			}else{
			    $fetch=mysql_query("select * from `bankdetails` where `bankname`='$_POST[bank]'");
			}
			
		    }else
		    {
                    $fetch=mysql_query("select * from `bankdetails`");
		    }
                    $amt=0;
		    $tot_depo=0;
		    $tot_with=0;
                    while($res=mysql_fetch_array($fetch))
                    {
			$amt=$amt+$res['amount'];
                    ?>
                    <tr>
                        <td><?php echo  date("d-m-Y",strtotime($res['date']));?></td>
                        <td><?php echo  "";?></td>
			<td><?php echo  $res['ch_dd_no'];?></td>
                        <?php if($res['amount']>=0){ $tot_depo=$tot_depo+$res['amount']; ?><td><?php echo  $res['amount'];?></td><td>&nbsp;</td><?php }else{ $tot_with=$tot_with+$res['amount']; ?>
			<td>&nbsp;</td><td><?php echo  $res['amount'];?></td><?php }?>
                        <td><?php echo $amt;?></td>
                    </tr>
                    <?php }?>
		     <tr>
                        <td></td>
                        <td></td>
			<td></td>
                        <td style="color: red;">Total Deposit:<?php echo $tot_depo;?></td>
			<td style="color: red;">Total Withdrawl:<?php echo $tot_with;?></td>
			<td></td>
                    </tr>
		    <tr >
			<td colspan="6" style="text-align: center;"><input type="button" value="Print" onclick="printContent('print')" /></td>
		    </tr>
                </table>
	    </div>
            <div class="box-content">
                <table>
                    <tr>
                        <th></th>
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