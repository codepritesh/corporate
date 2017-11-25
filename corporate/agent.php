<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{ header("location:index.php");}
else
{
if(isset($_POST['submit']))
{
	$name=htmlentities($_POST['name']);
	$address=htmlentities($_POST['address']);
	 $prefix=htmlentities($_POST['prefix']);
	
	$fetprefix=mysql_query("select * from prefix where `slno`='$prefix'");
	$resprefix=mysql_fetch_array($fetprefix);
	 $dt=$resprefix['date'];
	
	 $agentcode=htmlentities($_POST['agentcode']);
	 $codeno=htmlentities($_POST['codeno']);
	 $code=$resprefix['name'].$codeno;
	$area=htmlentities($_POST['area']);
	$prodetails=htmlentities($_POST['prodetails']);
	
   $fetch=mysql_query("select * from agent where `name`='$name' and `area`='$area',`codeno`='$code',`prodetails`='$prodetails'");
    $res=mysql_num_rows($fetch);
    if($res==0)
    {
	$image =$_FILES['photo']['name'];
    $image1 =$_FILES['documents']['name'];
    $image2 =$_FILES['idproof']['name'];
    $image3 =$_FILES['sign']['name'];
    if($image!="" && $_FILES['photo']['size'] < 2097152 )
    { //echo "iff";
    $ext=end(explode(".", $_FILES["photo"]["name"]));  
    if($ext=="jpg" || $ext=="jpeg" || $ext=="png" || $ext=="gif" || $ext=="JPG" || $ext=="PNG")
        {
            $folder="image/";
            $filename = $folder .time(). $image; 
                    //echo $filename."<br/>" ;
            $copied = copy($_FILES['photo']['tmp_name'], $filename);
        }
    $ext1=end(explode(".", $_FILES["documents"]["name"]));  
    if($ext1=="jpg" || $ext1=="jpeg" || $ext1=="png" || $ext1=="gif" || $ext1=="pdf" || $ext1=="txt" || $ext1=="svg" || $ext1=="JPG" || $ext1=="PNG")
        {
            $folder1="image/";
            $filename1 = $folder1 .time(). $image1; 
                    //echo $filename."<br/>" ;
            $copied = copy($_FILES['documents']['tmp_name'], $filename1);
        }
	
	$ext2=end(explode(".", $_FILES["idproof"]["name"]));  
    if($ext2=="jpg" || $ext2=="jpeg" || $ext2=="png" || $ext2=="gif" || $ext2=="pdf" || $ext2=="txt" || $ext2=="svg" || $ext2=="JPG" || $ext2=="PNG")
        {
            $folder2="image/";
            $filename2 = $folder2 .time(). $image2; 
                    //echo $filename."<br/>" ;
            $copied = copy($_FILES['idproof']['tmp_name'], $filename2);
        }
	
	$ext3=end(explode(".", $_FILES["sign"]["name"]));  
    if($ext3=="jpg" || $ext3=="jpeg" || $ext3=="png" || $ext3=="gif" || $ext3=="pdf" || $ext3=="txt" || $ext3=="svg" || $ext3=="JPG" || $ext3=="PNG")
        {
            $folder3="image/";
            $filename3 = $folder3 .time(). $image3; 
                    //echo $filename."<br/>" ;
            $copied = copy($_FILES['sign']['tmp_name'], $filename3);
        }
    }
	/*echo "insert into `agent` set `name`='$name',`address`='$address',`codeno`='$code',`area`='$area',`prodetails`='$prodetails'
		,`photo`='$filename'
                ,`documents`='$filename1',`sign`='$filename3',`idproof`='$filename2'";*/
	
   mysql_query("insert into `agent` set `name`='$name',`address`='$address',`codeno`='$code',`agentcode_daily`='$agentcode',`area`='$area',`prodetails`='$prodetails'
		,`areadate`='$dt',`photo`='$filename' ,`documents`='$filename1',`sign`='$filename3',`idproof`='$filename2'") or die(mysql_error());
    $msg="successfully inserted";
    }else{  $msg="agent already exist";}
    header("location:agent.php?msg=$msg");
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <meta name="viewport">
    <meta name="description" >
    <meta name="author">
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script>
	 $(function(){
		$("#prodetails").change(function(){
		var det=$(this).val();
		if (det=='Daily Deposit') {
			document.getElementById('acode').style.display='block';
		}
		else{
			document.getElementById('acode').style.display='none';
		}
		});
	 });
	function validate() {
		var d=document.getElementById('prodetails').value;
		if (d=='Daily Deposit') {
			if (document.getElementById('agentcode').value=='') {
				alert("Please enter Agent Code for Daily Deposit...");
				document.getElementById('agentcode').focus();
				return false;
				
			}
		}
	}
    </script>
    
    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

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
                <h2><i class="glyphicon glyphicon-plus"></i> Creat Agent</h2>

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
                            <span style="color: red;font-size: 20px;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; }  ?></span>
                <form name="arrange" action="" method="post" enctype="multipart/form-data" onsubmit="return validate();">
		    </br>
		    Name<input type="text" name="name" class="form-control" autocomplete="off"  required style="width: 300;">
                    </br>
			Address<textarea name="address" class="form-control" id="address" required  autocomplete="off" style="width: 300;"></textarea>
                    </br>
			Prefix
			<select class="form-control" name="prefix" style="width: 300;">
			<option value="">--Select Prefix--</option>
			<?php
			 $sql=mysql_query("select * from `prefix`");
			 while($res=mysql_fetch_array($sql))
			 {
			 ?>
			 <option value="<?php echo $res['slno'];?>"><?php echo $res['name'].'(Dt: '. date("d",strtotime($res[date])).')';?></option>
			 <?php
			 }
			?>
			</select>	
			</br>
			<?php
			$sql=mysql_query("select max(id) as code from `agent`");
			$res=mysql_fetch_array($sql);
			$code=$res['code']+1;
			?>			
			Code No<input type="text" name="codeno" class="form-control" required autocomplete="off"  style="width: 300;" value="<?php echo $code;?>" readonly>
                    </br>
            Area<input type="text" name="area" class="form-control" autocomplete="off"  required style="width: 300;">
                    </br>
			Product Details
			               <!--<select  name="prodetails" required class="form-control" required style="width: 300;">
                                                                <option value="">--Select Product Details--</option>
                                                                <option value="Fixed Deposit">Fixed Deposit</option>
                                                                <option value="Reccuring Deposit">Reccuring Deposit</option>
								<option value="Daily Deposit">Daily Deposit</option>
								<option value="Compulsory Deposit">Compulsory Deposit</option>
								<option value="Daily Loan"> Daily Loan</option>
								<option value="Demand Loan">Demand Loan</option>
								<option value="Gold Loan">Gold Loan</option>
								<option value="Group Loan">Group Loan</option>
								<option value="Business Loan">Business Loan</option>
								<option value="Enterprise Loan">Enterprise Loan</option>
								<option value="Agriculture Loan">Agriculture Loan</option>
                                                        </select>-->
							<select  name="prodetails" id="prodetails" required class="form-control" required style="width: 300;">
                                                                <option value="">--Select Product Details--</option>
                                                                <option value="All">All</option>
								<option value="Daily Deposit"> Daily Deposit</option>
                                                        </select>
                    </br>
		    <span id="acode" style="display: none;">
			 Agent Code(Daily)<input type="text" name="agentcode" id="agentcode" class="form-control" autocomplete="off"   style="width: 300;">
		     </br>
		    </span>
		    Photo<input type="file" name="photo"   style="width: 300;">
                    </br>
		    Id proof<input type="file" name="idproof"    style="width: 300;">
		    </br>
		    Signature<input type="file" name="sign"    style="width: 300;"><br />
		    Address Proof<input type="file" name="documents"    style="width: 300;"><br />
		  <input type="submit" name="submit" value="save">
	    </form>
	    </div>
<div class="box-content">
                <table class="table">
                    <tr>
                        <th>Agent Name</th>
                        <th>Agent ID</th>
			<th>Product</th>
                        <th>Area</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $fetmember=mysql_query("select * from agent");
                    while($rmember=mysql_fetch_array($fetmember))
                    {
                    ?>
                    <tr>
                        <td><?php echo  $rmember['name'];?></td>
                        <td><?php echo  $rmember['codeno'];?></td>
			<td><?php echo  $rmember['prodetails'];?></td>
                        <td><?php echo  $rmember['area'];?></td>
                        <td><a href="agentedit.php?aid=<?php echo  $rmember['id'];?>">Edit</a></td>
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
                    <button type="button" class="close" data-dismiss="modal">�</button>
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