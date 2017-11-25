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
 <!--autocomplete end-->
 
<style>
    .form-control{width: 300;}
</style>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <meta name="viewport">
    <meta name="description" >
    <meta name="author">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

         
<script>
    $(function(){
        $('#search').click(function(){
        var acc=$('#acctype').val();
        if (acc!='') {
                var sdate=$('#sdate').val();
                var edate=$('#edate').val();
                $.ajax({
                url: "ajax_cummulative.php?table="+acc+"&sdt="+sdate+"&edt="+edate,
                success: function(result){
		   // alert(result);
                $('#srch').html(result);
                }
               }); 
        }
        else{
            alert("Select an account ...");
            $('#acctype').focus();
        }
   });
});
</script>


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
                <h2><i class="glyphicon glyphicon-plus"></i>Productwise Cummulative Report</h2>

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
               
                     <table style="float: left;width: 100%;">
                        <tr>
                            <td colspan="3" style="color: red;font-size: 20px;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; }  ?></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;">
                                Account Type:
                            </td>
                            <td style="width: 250px;">
                                <select name="acctype" id="acctype" class="form-control">
                                    <option value=""> --- Select Account Type --- </option>
                                    <option value="compulsarydeposite">Compulsory Saving</option>
                                    <option value="savingaccount">Voluntary Saving</option>
                                    <option value="recurringdiposite">Recurring Deposit</option>
                                    <option value="fixeddeposite">Fixed Deposit</option>
                                    <option value="dailydeposit">Daily Deposit</option>
				    <option value="agricultureloan">Agriculture Loan</option>
				    <option value="businessloan">Bussiness Loan</option>
				    <option value="enterpriseloan">Enterprises Loan</option>
				    <option value="goldloan">Gold Loan</option>
				    <option value="demand_loan">Demand Loan</option>
				    <option value="loan">Daily Loan</option>
				    <option value="grouploan">Group Loan</option>
                                </select>
                            </td>
                            <td><input type="text" name="sdate" onKeyPress="return IsNumeric(event)" class="form-control" id="sdate" required placeholder="Start Date"></td>
                            <td><input type="text" name="edate" onKeyPress="return IsNumeric(event)" class="form-control" id="edate" required  placeholder="End Date" ></td>
                            <td align="center"><input type="submit" name="submit" value="Search" id="search" /></td>
			</tr>
                     </table>
	    </div>
            <div class="box-content" id='srch'>
              
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