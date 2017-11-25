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
    <script>
    $(function(){
        $('#search').click(function(){
                var sdate=$('#sdate').val();
                var edate=$('#edate').val();
                $.ajax({
                url: "ajax_share.php?sdt="+sdate+"&edt="+edate,
                success: function(result){
                $('#tabledata').html(result);
                }
               }); 
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
    <?php// echo date("Y-m-d");?>
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
             <?php echo date("d-m-Y");?>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i>Share Register</h2>

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
                    <td><input type="text" name="sdate" onKeyPress="return IsNumeric(event);" class="form-control" id="sdate" required placeholder="Start Date"></td>
                    <td><input type="text" name="edate" onKeyPress="return IsNumeric(event);" class="form-control" id="edate" required  placeholder="End Date" ></td>
                    <td align="center"><input type="button" name="submit" value="Search" id="search" /></td>
                </tr>
            </table>
            </div>
           <div class="box-content" id="print">
            
            <table class="table" id="srch" style="float: left;width: 100%;" >
                    <tr>
                         <th>Slno</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Spouse Name</th>
                        <th>Nominee</th>
                        <th>Cast</th>
			<th>Ages</th>
                        <th>Date of Opening</th>
                       <th>Share No</th>
                        <th>No of Share</th>
                       <th>Amount</th>
                       <th>Secrertery Sign</th>
                    </tr>
                    <tbody id="tabledata">
                        <?php
                        $a=0;
                        $tot=0;
                        $fetch=mysql_query("select *,length(`shareno`) shrnolen from `member` where `status`=0  order by shrnolen, `shareno` asc") or die(mysql_error()); 
                        while($res=mysql_fetch_array($fetch))
                        {
                        $a++;
                        $tot=$res['prefshare_fees']+$tot;
                        if($res['cast']==1){
                            $cast="UR";
                        }else if($res['cast']==2){
                            $cast="OBC";
                        }
                        else if($res['cast']==3){
                            $cast="SC";
                        }
                        else if($res['cast']==4){
                            $cast="ST";
                        }
                        else if($res['cast']==5){
                            $cast="MINORITY";
                        }
                        else if($res['cast']==6){
                            $cast="GENERAL";
                        }else{
                            $cast=$res['cast'];
                        }
		               ?>
                        <tr>
		                    <td><?php echo $a; ?></td>
                            <td><?php echo $res['name'];?></td>
		                    <td><?php echo $res['address'];?></td>
                            <td><?php echo $res['guardian_name'];?></td>
                            <td><?php echo $res['nominee_name'];?></td>
                            <td><?php echo $cast;?></td>
                            <td><?php echo $res['age'];?> Years</td>
		                    <td><?php echo date("d-m-Y",strtotime($res['join_date']));?></td>
                            <td><?php echo $res['shareno'];?></td>
                            <td><?php echo $res['noofshares'];?></td>
                            <td><?php echo $res['prefshare_fees'];?></td>
                            <td><img src="<?php echo  $res['secreterysign'];?>" width="70" hieght="30"/></td>
                        </tr>                        
                        <?php } ?>
                                      
                    <tr>
                        <td colspan="10" style="text-align: center;">Total  Amount:</td><td><?php echo number_format($tot, 2, '.', '');?></td>
                        <td></td>
                    </tr>
                    </tbody>  
                    <tr>
                        <td colspan="12" style="text-align: center;"><input type="button" value="Print" onclick="printContent('print');" /></td>
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