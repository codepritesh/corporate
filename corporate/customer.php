<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{ header("location:index.php");}
else
{
$getvendor=mysql_query("select * from `member`")or die(mysql_error());
   while($resvendor=mysql_fetch_array($getvendor))
    {
	$getemvendor[] = array(
	'value'  => $resvendor['name']."(MemberId-".$resvendor['id'].")",
	'idval' => $resvendor['id'],
	'add' => $resvendor['address']
	);
    }
?>
<!--autocomplete start-->
<link rel="stylesheet" href="css/jquery-ui.css">
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
 <!--autocomplete end-->
  <script type="text/javascript"> 
    $(function(){
	 //jQuery.noConflict();
        var availabledrugs=<?php echo json_encode($getemvendor); ?>;
        $('#introducer').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
		 $('#introducer').val(valshow);
		 $('#intid').val(ui.item.idval);
		}
		
        });
});
</script>
<script>
    function del(args)
    {
         var con=confirm("Do you want to delete ?");
			if(con){
			window.location="fideddelete.php?id="+args;
			}
    }
    function checkid()
    {
	//alert("inside");
      var intid=$('#intid').val();
      if (intid=="")
      {
	alert("insert proper Introducer");
	$('#introducer').val("");
	return false;
      }
    }
</script>
<script  type='text/javascript'>
function numbersonly(e){
var unicode=e.charCode? e.charCode : e.keyCode
if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
if (unicode<48||unicode>57) //if not a number
return false //disable key press
}
}
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

 function checkage()
 {
    var yea='';
     var dob=$('#inputField').val();
     //alert(dob);
      $.ajax({url:"customerage.php?dob="+dob,
	     success:function(result){
		//alert(result);
	var age=parseInt(result);
	if (result<12)
	{
	var agecal=age%12;
	if (agecal==0) { yea=parseInt(age/12); }else{ yea=agecal+'month'; }
	}else{yea=parseInt(age/12);}
	$('#age').val(yea);
                }
		});
 }
 
  function validate(){
    var age=document.getElementById("age").value;
    if (age=='') {
	alert("Please Insert proper DOB.so that age can't be Blank..");
	return false;
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
			target:"inputField",
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
            <a class="navbar-brand" href="#">
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
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts-->
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
                <h2><i class="glyphicon glyphicon-plus"></i>Creat Customer</h2>

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
             <form name="arrange" action="customer_action.php" onSubmit="return validate();" method="post" enctype="multipart/form-data">
			 
            <span colspan="4" style="color: red;font-size: 20px;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; }  ?></span><br>
                        
		    Member Introducer<input type="text" name="introducer" id="introducer" onBlur="return checkid();" class="form-control"  required style="width: 300;">
		    <input type="hidden" name="intid" id="intid" required>
		    </br>
		    Name<input type="text" name="name" class="form-control" autocomplete="off" required style="width: 300;">
		    </br>
		    Spouse Name<input type="text" name="gurdian" class="form-control" autocomplete="off" required style="width: 300;">
                    </br>
		    Dob<input type="text" name="dob" id="inputField" class="form-control" autocomplete="off"   required style="width: 300;">
                     </br>
		    Village
		    <select class="form-control" name="village" required  style="width: 300;">
			<option value="">--Select Village--</option>
			<?php
			 $sql=mysql_query("select * from `prefix` order by `name`");
			 while($res=mysql_fetch_array($sql))
			 {
			 ?>
			 <option value="<?php echo $res['slno'];?>"><?php echo $res['name'];?></option>
			 <?php
			 }
			?>
			</select>
                    </br>
		    Address<textarea name="address" class="form-control"  autocomplete="off"  required style="width: 300;"></textarea>
                    </br>
			Phone No<input type="text" name="phno" class="form-control" autocomplete="off" maxlength="10"  onKeyPress="return numbersonly(event)"   required style="width: 300;">
                    </br>
		    Post<input type="text" name="post" class="form-control" autocomplete="off"   required style="width: 300;">
                    </br>
		    District<input type="text" name="dist" class="form-control"  autocomplete="off"  required style="width: 300;">
                    </br>
		    Pin<input type="text" name="pin" class="form-control" maxlength="6"  autocomplete="off" onKeyPress="return numbersonly(event)"  required style="width: 300;">
                    </br>
		    Gender </br>Male <input type="radio" name="gender" value="male" > Female<input type="radio" name="gender" value="female">
                    </br><br />
		    Age<input type="text" name="age" id="age" class="form-control" onClick="return checkage();" readonly="true" required style="width: 300;">
                    </br>
		    Religion<input type="text" name="religion" class="form-control"  autocomplete="off"  required style="width: 300;">
                    </br>
		    Cast<select name="cast" class="form-control" equired style="width: 300;">
			<option value="1">UR</option>
			<option value="2">OBC</option>
			<option value="3">SC</option>
			<option value="4">ST</option>
			<option value="5">MINORITY</option>
			<option value="6">GENERAL</option>
		    </select>
                    </br>
		    Nominee Name<input type="text" name="nominee" class="form-control"  autocomplete="off"  required style="width: 300;">
                    </br>
		    Annual Income <input type="text" name="annual" class="form-control" autocomplete="off"  onkeyPress="return IsNumeric(event,this.value)" required style="width: 300;">
                    </br>
		    Photo<input type="file" name="photo"    style="width: 300;">
                    </br>
		    Id proof<input type="file" name="idproof"    style="width: 300;">
		    </br>
		    Signature<input type="file" name="sign"    style="width: 300;"><br />
		    Documents<input type="file" name="documents"    style="width: 300;"><br />
		  <input type="submit" name="submit" value="Submit">
	    </form>
	    </div>
		 <div class="box-content">
                <table class="table">
                    <tr>
					    <th>Slno.</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Join Date</th>
                        <th>Action</th>
                    </tr>
                    <?php
					$i=0;
                    $fetmember=mysql_query("select * from customer order by `id` desc");
                    while($rmember=mysql_fetch_array($fetmember))
                    {
					$i++;
                    ?>
                    <tr>
						<td><?php echo $i; ?></td>
                        <td><?php echo $rmember['name']."(CustomerId-".$rmember['customer_id'].")";?></td>
                        <td><?php echo  $rmember['address'];?></td>
                        <td><?php echo  date("d-m-Y",strtotime($rmember['join_date']));?></td>
                        <td><a href="customeredit.php?mid=<?php echo  $rmember['id'];?>">Edit</a></td>
                    </tr>
                    <?php }?>
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