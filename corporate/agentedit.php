<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{ header("location:index.php");}
else
{
if(isset($_POST['submit']))
{
    $name=htmlentities($_POST['name'],ENT_QUOTES);
    $area=htmlentities($_POST['area'],ENT_QUOTES);
    $prodetails=htmlentities($_POST['prodetails'],ENT_QUOTES);
    $fetch=mysql_query("select * from agent where `name`='$name' and `area`='$area',`codeno`='$codeno',`prodetails`='$prodetails'");
    $res=mysql_num_rows($fetch);
    if($res==0)
    {
        echo $image =$_FILES['photo']['name'];
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
             mysql_query("update `agent` set `photo`='$filename' where `id`='$_GET[aid]'");
        }
    $ext1=end(explode(".", $_FILES["documents"]["name"]));  
    if($ext1=="jpg" || $ext1=="jpeg" || $ext1=="png" || $ext1=="gif" || $ext1=="pdf" || $ext1=="txt" || $ext1=="svg" || $ext1=="JPG" || $ext1=="PNG")
        {
            $folder1="image/";
            $filename1 = $folder1 .time(). $image1; 
                    //echo $filename."<br/>" ;
            $copied = copy($_FILES['documents']['tmp_name'], $filename1);
            mysql_query("update `agent` set `documents`='$filename1' where `id`='$_GET[aid]'");
        }
	
	$ext2=end(explode(".", $_FILES["idproof"]["name"]));  
    if($ext2=="jpg" || $ext2=="jpeg" || $ext2=="png" || $ext2=="gif" || $ext2=="pdf" || $ext2=="txt" || $ext2=="svg" || $ext2=="JPG" || $ext2=="PNG")
        {
            $folder2="image/";
            $filename2 = $folder2 .time(). $image2; 
                    //echo $filename."<br/>" ;
            $copied = copy($_FILES['idproof']['tmp_name'], $filename2);
            mysql_query("update `agent` set `idproof`='$filename2' where `id`='$_GET[aid]'");
        }
	
	$ext3=end(explode(".", $_FILES["sign"]["name"]));  
    if($ext3=="jpg" || $ext3=="jpeg" || $ext3=="png" || $ext3=="gif" || $ext3=="pdf" || $ext3=="txt" || $ext3=="svg" || $ext3=="JPG" || $ext3=="PNG")
        {
            $folder3="image/";
            $filename3 = $folder3 .time(). $image3; 
                    //echo $filename."<br/>" ;
            $copied = copy($_FILES['sign']['tmp_name'], $filename3);
            mysql_query("update `agent` set `sign`='$filename3' where `id`='$_GET[aid]'");
        }
    }
    mysql_query("update `agent` set `name`='$name',`area`='$area',`prodetails`='$prodetails',`agentcode_daily`='$agentcode' where `id`='$_GET[aid]'");
     $msg="sucessfully updated";
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
    <?php echo date("Y-m-d");?>
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

            <!-- theme selector starts 
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
            theme selector ends
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
                <form name="arrange" action="" method="post" enctype="multipart/form-data">
                     <?php
                    $fetmember=mysql_query("select *,date(`join_date`) as dt from agent where `id`='$_GET[aid]'");
                    $rmember=mysql_fetch_array($fetmember);
					$joindate=strtotime($rmember['dt']);
					$currentdate=strtotime(date('Y-m-d'));
                    ?>
		    </br>
		    Name<input type="text" name="name" class="form-control" autocomplete="off"  value="<?php echo $rmember['name'];?>" required style="width: 300;">
                    </br>
            Address<textarea name="address" class="form-control" autocomplete="off"    required style="width: 300;"><?php echo  $rmember['address'];?></textarea>
                    </br>
			
			Code No<input type="text" name="codeno" value="<?php echo  $rmember['codeno'];?>" class="form-control" required style="width: 300;" readonly>
                    </br>
            Area<input type="text" name="area" autocomplete="off"  value="<?php echo  $rmember['area'];?>" class="form-control" required style="width: 300;">
                    </br>
			Product Details
			                <select  name="prodetails" required  class="form-control" required style="width: 300;">
                                                                <option value="">--Select Product Details--</option>
								<option value="All" <?php if($rmember['prodetails']=='All'){ echo 'selected';} ?>>All</option>
								<option value="Daily Deposit" <?php if($rmember['prodetails']=='All'){ echo 'selected';} ?>> Daily Deposit</option>
                                                               <!-- <option value="Fixed Deposit" <?php if($rmember['prodetails']=='Fixed Deposit'){ echo 'selected';} ?>>Fixed Deposit</option>
                                                                <option value="Reccuring Deposit"<?php if($rmember['prodetails']=='Reccuring Deposit'){ echo 'selected';} ?>>Reccuring Deposit</option>
								<option value="Daily Deposit"<?php if($rmember['prodetails']=='Daily Deposit'){ echo 'selected';} ?>>Daily Deposit</option>
								<option value="Compulsory Deposit"<?php if($rmember['prodetails']=='Compulsory Deposit'){ echo 'selected';} ?>>Compulsory Deposit</option>
								<option value="Loan" <?php if($rmember['prodetails']=='Loan'){ echo 'selected';} ?>>Loan</option>-->
                                                        </select>
                    </br>
                     <span id="acode" style="display: none;">
			 Agent Code(Daily)<input type="text" name="agentcode" id="agentcode" class="form-control" autocomplete="off"   style="width: 300;">
		     </br>
		    </span>
		    Photo<input type="file" name="photo"   required style="width: 300;">
                    <input type="hidden" name="hphoto">
                    </br>
		    Id proof<input type="file" name="idproof"   required style="width: 300;">
                     <input type="hidden" name="hidproof">
		    </br>
		    Signature<input type="file" name="sign"   required style="width: 300;"><br />
                     <input type="hidden" name="hsign">
		    Address Proof<input type="file" name="documents"   required style="width: 300;"><br />
                     <input type="hidden" name="hdocuments">
					 <?php
			if($joindate<$currentdate){}
			else{
		   ?>
		  <input type="submit" name="submit" value="save">
		  <?php
		  }
		  ?>
	    </form>
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