<?php include_once("function.php");
ini_set("display_errors",0);
if(isset($_POST['submit']))
{
    $name=htmlentities($_POST['name']);
    $gurdian=htmlentities($_POST['gurdian']);
    $dob=htmlentities($_POST['dob']);
    $join_date=htmlentities($_POST['join_date']);
    $address=htmlentities($_POST['address']);
    $post=htmlentities($_POST['post']);
    $dist=htmlentities($_POST['dist']);
    $pin=htmlentities($_POST['pin']);
    $phone=htmlentities($_POST['phone']);
    $gender=htmlentities($_POST['gender']);
    $age=htmlentities($_POST['age']);
    $religion=htmlentities($_POST['religion']);
    $nominee=htmlentities($_POST['nominee']);
    $annual=htmlentities($_POST['annual']);
    $noshare=htmlentities($_POST['noshare']);
    $image =$_FILES['photo']['name'];
    $image1 =$_FILES['documents']['name'];
    $image2=$_FILES['sign']['name'];
    $image3=$_FILES['secrertery']['name'];
    $hphoto=htmlentities($_POST['hidphoto']);
    $hdoc=htmlentities($_POST['hiddoc']);
    $hsgn=htmlentities($_POST['hidsign']);
    $hsecsign=htmlentities($_POST['hidsecsign']);
	    if($image!="")
	    {
	    $ext=end(explode(".", $_FILES["photo"]["name"]));  
	    if($ext=="jpg" || $ext=="jpeg" || $ext=="png" || $ext=="gif" || $ext=="PNG" || $ext=="GIF")
		{
		    $folder="image/";
		    $filename = $folder .time(). $image; 
			    //echo $filename."<br/>" ;
		    $copied = copy($_FILES['photo']['tmp_name'], $filename);
		}
	    }
	    else{
		$filename=$hphoto;
	    }
	    if($image1!="")
	    {
	    $ext1=end(explode(".", $_FILES["documents"]["name"]));  
	    if($ext1=="jpg" || $ext1=="jpeg" || $ext1=="png" || $ext1=="gif" || $ext1=="pdf" || $ext1=="txt" || $ext1=="svg" || $ext1=="doc" || $ext1=="docx")
		{
		    $folder1="image/";
		   $filename1 = $folder1 .time(). $image1; 
			    //echo $filename."<br/>" ;
		    $copied = copy($_FILES['documents']['tmp_name'], $filename1);
		}
	    }
	else{
	    $filename1=$hdoc;
	}
	
	 if($image2!="")
	    {
	    $ext2=end(explode(".", $_FILES["sign"]["name"]));  
	    if($ext2=="jpg" || $ext2=="jpeg" || $ext2=="png" || $ext2=="gif" || $ext2=="pdf" || $ext2=="txt" || $ext2=="svg" || $ext2=="doc" || $ext2=="docx")
		{
		    $folder1="image/";
		   $filename2 = $folder1 .time(). $image2; 
			    //echo $filename."<br/>" ;
		    $copied = copy($_FILES['sign']['tmp_name'], $filename2);
		}
	    }
	else{
	    $filename2=$hsgn;
	}
	
	if($image3!="")
	    {
	    $ex3=end(explode(".", $_FILES["secrertery"]["name"]));  
	    if($ex3=="jpg" || $ex3=="jpeg" || $ex3=="png" || $ex3=="gif" || $ex3=="pdf" || $ex3=="txt" || $ex3=="svg" || $ex3=="doc" || $ex3=="docx")
		{
		    $folder1="image/";
		   $filename3 = $folder1 .time(). $image2; 
			    //echo $filename."<br/>" ;
		    $copied = copy($_FILES['secrertery']['tmp_name'], $filename3);
		}
	    }
	else{
	    $filename3=$hsecsign;
	}
    

       mysql_query("update `member` set `name`='$name',`guardian_name`='$gurdian',`dob`='$dob' ,`phno`='$phone',`address`='$address',`post`='$post'
                    ,`dist`='$dist',`pin`='$pin',`gender`='$gender',`age`='$age',`religion`='$religion' ,`nominee_name`='$nominee'
                    ,`annual_income`='$annual'
                    ,`noofshares`='$noshare'
                    ,`photo`='$filename'
                    ,`documents`='$filename1' ,`sign`='$filename2',`secreterysign`='$filename3',`join_date`='$join_date' where `id`='$_GET[mid]'")or die(mysql_error());
       /* echo "update `member` set `name`='$name',`guardian_name`='$gurdian',`dob`='$dob' ,`address`='$address',`post`='$post'
                    ,`dist`='$dist',`pin`='$pin',`gender`='$gender',`age`='$age',`religion`='$religion' ,`nominee_name`='$nominee'
                    ,`annual_income`='$annual',
                    ,`noofshares`='$noshare'
                    ,`photo`='$filename'
                    ,`documents`='$filename1' where `id`='$_GET[mid]'".'</br>';*/
        $cid=$_POST['hid'];
	/*echo "update `customer` set `name`='$name',`guardian_name`='$gurdian',`dob`='$dob' ,`address`='$address',`post`='$post'
                    ,`dist`='$dist',`pin`='$pin',`gender`='$gender',`age`='$age',`religion`='$religion' ,`nominee_name`='$nominee'
                    ,`annual_income`='$annual'
                    ,`photo`='$filename'
                    ,`documents`='$filename1' where `customer_id`='$cid'";*/
        mysql_query("update `customer` set `name`='$name',`guardian_name`='$gurdian',`dob`='$dob' ,`phno`='$phone',`address`='$address',`post`='$post'
                    ,`dist`='$dist',`pin`='$pin',`gender`='$gender',`age`='$age',`religion`='$religion' ,`nominee_name`='$nominee'
                    ,`annual_income`='$annual'
                    ,`photo`='$filename'
                    ,`documents`='$filename1',`sign`='$filename2',`secreterysign`='$filename3',`join_date`='$join_date' where `customer_id`='$cid'");
	$msg="Successfully Updated";
	header("location:member.php?mid=$_GET[mid]&msg=$msg");
}
?>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script  type='text/javascript'>
function numbersonly(e){
var unicode=e.charCode? e.charCode : e.keyCode
if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
if (unicode<48||unicode>57) //if not a number
return false //disable key press
}
}
</script>

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
   function checkage()
 {
     var dob=$('#inputField').val();
      $.ajax({url:"customerage.php?dob="+dob,
	     success:function(result){
                var age=parseInt(result);
		yea=parseInt(age/12);
		if (parseInt(yea)<18)
		{
		   alert("Member must be 18 or more than 18 Years old..");
		   $('#age').val('');
		   return false;
		}else{
		    $('#age').val(yea);
		    }
		
                }
		});
 }
  function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode==32))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }
 function validate(){
    var age=document.getElementById("age").value;
    if (age=='') {
	alert("Please Insert proper DOB.so that age can't be Blank..");
	return false;
    }
 }
</script>
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	     <!-- date picker starts -->
	<link href="fullcalendar/dist/fullcalendar.css" rel='stylesheet'>
	<link href="fullcalendar/dist/fullcalendar.print.css" rel='stylesheet' media='print'>
	
	<link href="css/jsDatePick_ltr.min.css" rel='stylesheet'>
	<script src="js/js/jsDatePick.min.1.3.js"></script>
	<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"date",
			dateFormat:"%Y-%m-%d"
			
		});
		
	};
   </script>
<!-- date picker ends -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <meta name="viewport">
    <meta name="description" >
    <meta name="author">

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
<div style="float: right; color: red;">
    <?php // echo date("Y-m-d");?>
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
	    <?php echo date("Y-m-d");?>
	</li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i>Creat Member</h2>

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
		 
                            <span style="color: red;font-size: 25px;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; }  ?></span>
                  
             <form name="arrange" action="" method="post" onSubmit="return validate();" enctype="multipart/form-data">
                 <?php
                    $fetmember=mysql_query("select *,date(`join_date`) as dt from member where `id`='$_GET[mid]'");
                    $rmember=mysql_fetch_array($fetmember);
				    $joindate=strtotime($rmember['dt']);
					$currentdate=strtotime(date('Y-m-d'));
                    ?>
		    Name<input type="text" name="name" autocomplete="off"  class="form-control" value="<?php echo $rmember['name'];?>" required style="width: 300;">
		    </br>
		    Guardian Name<input type="text" name="gurdian" autocomplete="off"  value="<?php echo $rmember['guardian_name'];?>" class="form-control"  required style="width: 300;">
                    </br>
            Join Date<input type="text" name="join_date" value="<?php echo $rmember['dt'];?>"  class="form-control" required  autocomplete="off" style="width: 300;" onkeyPress="return IsNumeric(event,this.value)">
                    </br>
		   
		    Dob<input type="text" name="dob" id="date" value="<?php echo date($rmember['dob']);?>"  class="form-control" required  autocomplete="off" style="width: 300;" onkeyPress="return IsNumeric(event,this.value)">
                    </br>
		    Address<textarea name="address" class="form-control"  autocomplete="off"  required style="width: 300;"><?php echo $rmember['address']; ?></textarea>
                    </br>
		    Post<input type="text" name="post" class="form-control" autocomplete="off" onkeypress="return onlyAlphabets(event,this);"  value="<?php echo $rmember['post'];?>" required style="width: 300;">
                    </br>
		    District<input type="text" name="dist" class="form-control" onkeypress="return onlyAlphabets(event,this);" autocomplete="off" value="<?php echo $rmember['dist'];?>"  required style="width: 300;">
                    </br>
		    Pin<input type="text" name="pin" class="form-control" autocomplete="off"  onKeyPress="return numbersonly(event)" value="<?php echo $rmember['pin'];?>"  required style="width: 300;">
                    </br>
		    Phone No<input type="text" name="phone" class="form-control" autocomplete="off"  onKeyPress="return numbersonly(event)" value="<?php echo $rmember['phno'];?>"   required style="width: 300;">
		    </br>
		    Gender </br>
					Female<input type="radio" name="gender" value="female" <?php if($rmember['gender']=='female'){ ?> checked="checked" <?php } ?> > &nbsp;&nbsp;
					Male<input type="radio" name="gender" value="male" <?php if($rmember['gender']=='male'){ ?> checked="checked" <?php } ?> >
                    </br>
		    Age<input type="text" name="age" id="age" class="form-control" value="<?php echo $rmember['age'];?>" onClick="return checkage();" readonly="true"  required style="width: 300;">
                    </br>
		    Religion<input type="text" name="religion" onkeypress="return onlyAlphabets(event,this);" class="form-control"  autocomplete="off" value="<?php echo $rmember['religion'];?>"  required style="width: 300;">
                    </br>
		    Nominee Name<input type="text" name="nominee" class="form-control"  autocomplete="off"  value="<?php echo $rmember['nominee_name'];?>" required style="width: 300;">
                    </br>
		    Annual Income <input type="text" name="annual" class="form-control"  autocomplete="off" value="<?php echo $rmember['annual_income'];?>" onKeyPress="return IsNumeric(event,this.value);"  required style="width: 300;">
                    <!--</br>
		    Form Fees(20/-)  <input type="checkbox" name="formfee" value="<?php echo $rmember['guardian_name'];?>" onKeyPress="return numbersonly(event)" required value="20">
                    </br>
		    Pref. Share(100/-)  <input type="checkbox" name="preffshare" value="<?php echo $rmember['guardian_name'];?>" onKeyPress="return numbersonly(event)" required value="100">-->
                    </br>
            Number of share <input type="text" name="noshare" class="form-control"  autocomplete="off" value="<?php echo $rmember['noofshares'];?>"  onKeyPress="return numbersonly(event)"  required style="width: 300;">
                    </br>
		    Photo<input type="file" name="photo" style="width: 300;"><img src="<?php echo  $rmember['photo'];?>" width="70"/>
                    </br>
		    Signature<input type="file" name="sign" style="width: 300;"><img src="<?php echo  $rmember['sign'];?>" width="70"/>
                    </br>
		    Documents<input type="file" name="documents"  style="width: 300;">
																	<?php 
																		$img=$rmember['documents'];
																		$img1=explode("/",$img);
																		//echo $img1[1];
																		$ext=end(explode(".", $img1[1]));  
																		
																		if($ext=='pdf' || $ext=='doc' || $ext=='docx'){
																	?>
			<a href="pdf_server.php?file=image/<?php echo $img1[1];?>"><?php echo  $img1[1];?></a>
			<?php
			}
			else{
			?>
			<img src="<?php echo  $rmember['documents'];?>" width="70"/>
			<?php
			}
			?>
                    </br>
		     Secretery sign<input type="file" name="secrertery"  style="width: 300;"><img src="<?php echo  $rmember['secreterysign'];?>" width="70"/>
                    </br></br><input type="hidden" name="hid" value="<?php echo $rmember['customer_id'];?>">
		    <input type="hidden" name="hidphoto" value="<?php echo $rmember['photo'];?>">
		    <input type="hidden" name="hiddoc" value="<?php echo $rmember['documents'];?>">
		    <input type="hidden" name="hidsign" value="<?php echo $rmember['sign'];?>">
		    <input type="hidden" name="hidsecsign" value="<?php echo $rmember['secreterysign'];?>">
          
		    <input type="submit" name="submit" value="Update">
		  
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
</html>

