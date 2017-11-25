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

         
        <!-- date picker starts -->
    <script src="date/jquery-ui.min.js" type="text/javascript"></script>
    <link href="date/jquery-ui.css" rel="Stylesheet" type="text/css" />
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
       
        <!-- date picker starts -->
    <script src="date/jquery-ui.min.js" type="text/javascript"></script>
    <link href="date/jquery-ui.css"
	rel="Stylesheet" type="text/css" />
	<script type="text/javascript">
        $(function () {
            $("#cdate").datepicker({
                numberOfMonths: 1,
                onSelect: function (selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() + 1);
                    $("#edate").datepicker("option", "minDate", dt);
                }
            });
            $("#cldate").datepicker({
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
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i>Loan Correction</h2>
              
            </div>
            <div class="box-content" style="width:100%; float:left;height: auto;background-color: #fff;border: #f5f5f5 solid 0.5px; border-radius: 4px;-webkit-box-shadow: 0 0 10px rgba(189,189,189,.4);">
                 <form method="post" action="loancorrection.php">
                 <table class="table" style="float: left;width: 100%;">
                        <tr>
                            <td colspan="3" style="color: red;font-size: 20px;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; }  ?></td>
                        </tr>
                        <tr>
                            <th style="text-align: center;" colspan="3">
                                Get Last Month Data
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="accno" required  autocomplete="off" class="form-control" id="accno"  placeholder="Account Number">
                            </td>
                            <td>
                                <select name="monthval" class="form-control">
									<option value='2016-03-31|2016-03|2016-03|2016-03'>2016-03</option>
                                    <option value='2016-04-30|2016-04|2016-03|2016-04'>2016-04</option>
                                    <option value='2016-05-31|2016-05|2016-04|2016-05'>2016-05</option>
                                    <option value='2016-06-30|2016-06|2016-05|2016-06'>2016-06</option>
                                    <option value='2016-07-31|2016-07|2016-06|2016-07'>2016-07</option>
                                    <option value='2016-08-31|2016-08|2016-07|2016-08'>2016-08</option>
                                    <option value='2016-09-30|2016-09|2016-08|2016-09'>2016-09</option>
                                    <option value='2016-10-31|2016-10|2016-09|2016-10'>2016-10</option>
                                    <option value='2016-11-30|2016-11|2016-10|2016-11'>2016-11</option>
                                    <option value='2016-12-31|2016-12|2016-11|2016-12'>2016-12</option>
                                    <option value='2017-01-31|2017-01|2016-12|2017-01'>2017-01</option>
                                    <option value='2017-02-28|2017-02|2017-01|2017-02'>2017-02</option>
                                    <option value='2017-03-31|2017-03|2017-02|2017-03'>2017-03</option>
									<option value='2017-04-30|2017-04|2017-03|2017-04'>2017-04</option>
                                    <option value='2017-05-30|2017-05|2017-04|2017-05'>2017-05</option>                                    
                                    <option value='2017-06-31|2017-06|2017-05|2017-06'>2017-06</option>
                                    <option value='2017-07-30|2017-07|2017-06|2017-07'>2017-07</option><option value='2017-08-30|2017-08|2017-07|2017-08'>2017-08</option>
                                </select>
                            </td>
                            <td  style="text-align: center;" >
                                <input type="submit" name="monthdata" value="Get Data" id="GetData" />
                            </td>
                        </tr>
                        </table>
                        </form>
                       <form method="post" action="loancorrection.php">
                        <table class="table" style="float: left;width: 100%;">
                        <tr>
                            <th style="text-align: center;" colspan="5">
                                Have Collection
                            </th>
                        </tr>
                        <tr >
							<td>
                                <input type="text" name="accno" required  autocomplete="off" class="form-control" id="accno"  placeholder="Account Number">
                            </td>
                            <td>
                                <select name="monthval" class="form-control">
									<option value='2016-03-31|2016-03|2016-03|2016-03'>2016-03</option>
                                    <option value='2016-04-30|2016-04|2016-03|2016-04'>2016-04</option>
                                    <option value='2016-05-31|2016-05|2016-04|2016-05'>2016-05</option>
                                    <option value='2016-06-30|2016-06|2016-05|2016-06'>2016-06</option>
                                    <option value='2016-07-31|2016-07|2016-06|2016-07'>2016-07</option>
                                    <option value='2016-08-31|2016-08|2016-07|2016-08'>2016-08</option>
                                    <option value='2016-09-30|2016-09|2016-08|2016-09'>2016-09</option>
                                    <option value='2016-10-31|2016-10|2016-09|2016-10'>2016-10</option>
                                    <option value='2016-11-30|2016-11|2016-10|2016-11'>2016-11</option>
                                    <option value='2016-12-31|2016-12|2016-11|2016-12'>2016-12</option>
                                    <option value='2017-01-31|2017-01|2016-12|2017-01'>2017-01</option>
                                    <option value='2017-02-28|2017-02|2017-01|2017-02'>2017-02</option>
                                    <option value='2017-03-31|2017-03|2017-02|2017-03'>2017-03</option>
                                    <option value='2017-04-30|2017-04|2017-03|2017-04'>2017-04</option>
                                    <option value='2017-05-30|2017-05|2017-04|2017-05'>2017-05</option>                                    
                                    <option value='2017-06-31|2017-06|2017-05|2017-06'>2017-06</option>
                                    <option value='2017-07-30|2017-07|2017-06|2017-07'>2017-07</option><option value='2017-08-30|2017-08|2017-07|2017-08'>2017-08</option>
									
                                </select>
                            </td>
                            <td>
                                <input type="text" name="collectiondate" required  autocomplete="off" class="form-control" id="cdate"  placeholder="Collection Date">
                            </td>
                             <td>
                                <input type="text" name="collection" required  autocomplete="off" class="form-control" id="collection"  placeholder="Collection Amount">
                            </td>
                            <td  style="text-align: center;" >
                                <input type="submit" name="have" value="Submit" id="have" />
                            </td>
						</tr>                        
                </table>
            </form>
                       
            <form method="post" action="loancorrection.php">
                        <table class="table" style="float: left;width: 100%;">
                        <tr>
                            <th style="text-align: center;" colspan="5">
                                Have Collection But Forcefully Close
                            </th>
                        </tr>
                        <tr >
							<td>
                                <input type="text" name="accno" required  autocomplete="off" class="form-control" id="accno"  placeholder="Account Number">
                            </td>
                            <td>
                                <select name="monthval" class="form-control">
									<option value='2016-03-31|2016-03|2016-03|2016-03'>2016-03</option>
                                    <option value='2016-04-30|2016-04|2016-03|2016-04'>2016-04</option>
                                    <option value='2016-05-31|2016-05|2016-04|2016-05'>2016-05</option>
                                    <option value='2016-06-30|2016-06|2016-05|2016-06'>2016-06</option>
                                    <option value='2016-07-31|2016-07|2016-06|2016-07'>2016-07</option>
                                    <option value='2016-08-31|2016-08|2016-07|2016-08'>2016-08</option>
                                    <option value='2016-09-30|2016-09|2016-08|2016-09'>2016-09</option>
                                    <option value='2016-10-31|2016-10|2016-09|2016-10'>2016-10</option>
                                    <option value='2016-11-30|2016-11|2016-10|2016-11'>2016-11</option>
                                    <option value='2016-12-31|2016-12|2016-11|2016-12'>2016-12</option>
                                    <option value='2017-01-31|2017-01|2016-12|2017-01'>2017-01</option>
                                    <option value='2017-02-28|2017-02|2017-01|2017-02'>2017-02</option>
                                    <option value='2017-03-31|2017-03|2017-02|2017-03'>2017-03</option>
									<option value='2017-04-30|2017-04|2017-03|2017-04'>2017-04</option>
                                    <option value='2017-05-30|2017-05|2017-04|2017-05'>2017-05</option>                                    
                                    <option value='2017-06-31|2017-06|2017-05|2017-06'>2017-06</option>
                                    <option value='2017-07-30|2017-07|2017-06|2017-07'>2017-07</option><option value='2017-08-30|2017-08|2017-07|2017-08'>2017-08</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="collectiondate" required  autocomplete="off" class="form-control" id="cldate"  placeholder="Collection Date">
                            </td>
                             <td>
                                <input type="text" name="collection" required  autocomplete="off" class="form-control" id="collection"  placeholder="Collection Amount">
                            </td>
                            <td  style="text-align: center;" >
                                <input type="submit" name="fclose" value="Submit" id="fclose" />
                            </td>
						</tr>                        
                </table>
            </form>
			 <form method="post" action="loancorrection.php">
                        <table class="table" style="float: left;width: 100%;">
                        <tr>
                            <th style="text-align: center;" colspan="5">
                                Have No Collection
                            </th>
                        </tr>
                        <tr >
							<td>
                                <input type="text" name="accno" required  autocomplete="off" class="form-control" id="accno"  placeholder="Account Number">
                            </td>
                            <td>
                                <select name="monthval" class="form-control">
									<option value='2016-03-31|2016-03|2016-03|2016-03'>2016-03</option>
                                    <option value='2016-04-30|2016-04|2016-03|2016-04'>2016-04</option>
                                    <option value='2016-05-31|2016-05|2016-04|2016-05'>2016-05</option>
                                    <option value='2016-06-30|2016-06|2016-05|2016-06'>2016-06</option>
                                    <option value='2016-07-31|2016-07|2016-06|2016-07'>2016-07</option>
                                    <option value='2016-08-31|2016-08|2016-07|2016-08'>2016-08</option>
                                    <option value='2016-09-30|2016-09|2016-08|2016-09'>2016-09</option>
                                    <option value='2016-10-31|2016-10|2016-09|2016-10'>2016-10</option>
                                    <option value='2016-11-30|2016-11|2016-10|2016-11'>2016-11</option>
                                    <option value='2016-12-31|2016-12|2016-11|2016-12'>2016-12</option>
                                    <option value='2017-01-31|2017-01|2016-12|2017-01'>2017-01</option>
                                    <option value='2017-02-28|2017-02|2017-01|2017-02'>2017-02</option>
                                    <option value='2017-03-31|2017-03|2017-02|2017-03'>2017-03</option>
									<option value='2017-04-30|2017-04|2017-03|2017-04'>2017-04</option>
                                    <option value='2017-05-30|2017-05|2017-04|2017-05'>2017-05</option>
                                    <option value='2017-06-31|2017-06|2017-05|2017-06'>2017-06</option>
                                    <option value='2017-07-30|2017-07|2017-06|2017-07'>2017-07</option><option value='2017-08-30|2017-08|2017-07|2017-08'>2017-08</option>
                                </select>
                            </td>
                            <td  style="text-align: center;" >
                                <input type="submit" name="nohave" value="Submit" id="nohave" />
                            </td>
						</tr>                        
                </table>
            </form>
            </div>
        
	</div>
    </div>
</div>
</body>
</html><?php }?>