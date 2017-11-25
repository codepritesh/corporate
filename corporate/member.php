<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{ header("location:index.php");}
else
{
if(isset($_POST['submit']))
{
    $name=htmlentities($_POST['name']);
    $gurdian=htmlentities($_POST['gurdian']);
    $dobb=htmlentities($_POST['dob']);
    $dob = date("Y-m-d", strtotime($dobb));
    $address=htmlentities($_POST['address']);
    $post=htmlentities($_POST['post']);
    $dist=htmlentities($_POST['dist']);
    $pin=htmlentities($_POST['pin']);
    $gender=htmlentities($_POST['gender']);
    $age=htmlentities($_POST['age']);
    $religion=htmlentities($_POST['religion']);
    $cast=htmlentities($_POST['cast']);
    $nominee=htmlentities($_POST['nominee']);
    $annual=htmlentities($_POST['annual']);
    $formfee=htmlentities($_POST['formfee']);
    $preffshare1=htmlentities($_POST['preffshare']);
    $noshare=htmlentities($_POST['noshare']);
    $shareno=htmlentities($_POST['shareno']);
    $voucher=htmlentities($_POST['voucher']);
    $preffshare=$preffshare1*$noshare;
    $phone=htmlentities($_POST['phone']);
    $image =$_FILES['photo']['name'];
    $image1 =$_FILES['documents']['name'];
    $sgn=$_FILES['sign']['name'];
    $secrertery=$_FILES['secrertery']['name'];
    $addcust = htmlentities($_POST['customer']); 
    //if($image!="" && $image1!="" && $preffshare!="" && $noshare!="" && $noshare!=0 )
    if($preffshare!="" && $noshare!="" && $noshare!=0 )
    {
    $ext=end(explode(".", $_FILES["photo"]["name"]));  
    if($ext=="jpg" || $ext=="jpeg" || $ext=="png" || $ext=="gif" || $ext=="PNG" || $ext=="GIF")
        {
            $folder="image/";
            $filename = $folder .time(). $image; 
                    //echo $filename."<br/>" ;
            $copied = copy($_FILES['photo']['tmp_name'], $filename);
        }
    $ext1=end(explode(".", $_FILES["documents"]["name"]));  
    if($ext1=="jpg" || $ext1=="jpeg" || $ext1=="png" || $ext1=="gif" || $ext1=="pdf" || $ext1=="txt" || $ext1=="svg" || $ext1=="doc" || $ext1=="docx")
        {
            $folder1="image/";
            $filename1 = $folder1 .time(). $image1; 
                    //echo $filename."<br/>" ;
            $copied = copy($_FILES['documents']['tmp_name'], $filename1);
        }
	$ext2=end(explode(".", $_FILES["sign"]["name"]));  
    if($ext2=="jpg" || $ext2=="jpeg" || $ext2=="png" || $ext2=="gif" || $ext2=="PNG" || $ext2=="GIF")
        {
            $folder="image/";
            $filename2 = $folder .time(). $sgn; 
                    //echo $filename."<br/>" ;
            $copied = copy($_FILES['sign']['tmp_name'], $filename2);
        }
	
	$ext3=end(explode(".", $_FILES["secrertery"]["name"]));  
    if($ext3=="jpg" || $ext3=="jpeg" || $ext3=="png" || $ext3=="gif" || $ext3=="PNG" || $ext3=="GIF")
        {
            $folder="image/";
            $filename3 = $folder .time(). $secrertery; 
                    //echo $filename."<br/>" ;
            $copied = copy($_FILES['secrertery']['tmp_name'], $filename3);
        }
	
	$mem=mysql_num_rows(mysql_query("select * from `member`"));
       if($mem>0)
       {
	$mem1=mysql_fetch_array(mysql_query("select max(id) as id from `member`"));
	$mid=$mem1['id']+1;			//M(id)
       }else{
	$mid=1;
	}
	$r=mysql_num_rows(mysql_query("select * from `customer`"));
       if($r>0)
       {
	$r1=mysql_fetch_array(mysql_query("select max(id) as id from `customer`"));
	 $cid=$r1['id']+1;
       }else{
	$cid=1;
	}
	$custid="c".$cid;
	$memberid="M".$mid.$custid;
    $time1=time();
    $dt=date("Y-m-d");
        mysql_query("insert into `member` set `name`='$name',`guardian_name`='$gurdian',`dob`='$dob' ,`address`='$address',`post`='$post'
                    ,`dist`='$dist',`pin`='$pin',`gender`='$gender',`age`='$age'
		    ,`religion`='$religion'
		    ,`cast`='$cast'
		    ,`nominee_name`='$nominee'
            ,`annual_income`='$annual'
            ,`form_fees`='$formfee'
            ,`prefshare_fees`='$preffshare'
            ,`noofshares`='$noshare'
		    ,`shareno`='$shareno'
            ,`customer_id`='$custid'
		    ,`member_id`='$memberid'
		    ,`photo`='$filename'
            ,`phno`='$phone'
		    ,`sign`='$filename2'
		    ,`secreterysign`='$filename3'
            ,`documents`='$filename1',`join_date`='$dt'");
        
        if($addcust==1){
        mysql_query("insert into `customer` set `customer_id`='$custid',`mem_cus_id`='$memberid',`introducer`='$mid', `name`='$name',`guardian_name`='$gurdian',`dob`='$dob' ,`address`='$address',`post`='$post'
                    ,`dist`='$dist',`pin`='$pin',`gender`='$gender',`age`='$age'
		    ,`religion`='$religion'
		    ,`cast`='$cast'
		    ,`nominee_name`='$nominee'
		    ,`phno`='$phone'
                    ,`annual_income`='$annual'
                    ,`photo`='$filename'
                    ,`documents`='$filename1',`sign`='$filename2',`join_date`='$dt'");

        }
	
	 mysql_query("insert into `transaction` set `transactionid`='$time1',`customerid`='$custid',`amount`='$preffshare',`date`='$dt',`details`='share',`voucher`='$voucher',`folio_no`='15' ");
	 $time2=time();
	mysql_query("insert into `transaction` set `transactionid`='$time2',`customerid`='$custid',`amount`='$formfee',`date`='$dt',`details`='memberfees',`voucher`='$voucher',`folio_no`='16' ");
    }
   header("location:member.php");
}
?>
<script>
    function del(args)
    {
         var con=confirm("Do you want to delete ?");
			if(con){
			window.location="memberdelete.php?id="+args;
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

    <script>
function checkage()
 {
     var dob=$('#inputField').val();
          if (dob!='') {
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
		});}
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
    var add=document.getElementById("address").value;
    //alert(add);
    if (add=='') {
	alert("Address can't be Blank..");
	return false;
    }
    var age=document.getElementById("age").value;
    if (age=='') {
	alert("Please Insert proper DOB.so that age can't be Blank..");
	return false;
    }
    
    var noshare=document.getElementById("noshare").value;
    if (noshare==0) {
	alert("Please Insert Noshare Greter than zero..");
	return false;
    }
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
             <form name="arrange" action="" method="post" onSubmit="return validate();" enctype="multipart/form-data">
		    Name<input type="text" name="name" class="form-control" autocomplete="off"  required style="width: 300;">
		    </br>
		    Guardian Name<input type="text" name="gurdian" class="form-control" autocomplete="off"  required style="width: 300;">
                    </br>
		    Dob<input type="text" name="dob" id="inputField" class="form-control" autocomplete="off" required style="width: 300;">
                    </br>
		    Address<textarea name="address" class="form-control" id="address" autocomplete="off"   required style="width: 300;" ></textarea>
                    </br>
		    Post<input type="text" name="post" class="form-control" onkeypress="return onlyAlphabets(event,this);" autocomplete="off"  required style="width: 300;">
                    </br>
		    District<input type="text" name="dist" class="form-control" onkeypress="return onlyAlphabets(event,this);" autocomplete="off"  required style="width: 300;">
                   </br>
		    Pin<input type="text" name="pin" class="form-control"  autocomplete="off"  onKeyPress="return numbersonly(event)" maxlength=6  required style="width: 300;">
		    </br>
		    Phone No<input type="text" name="phone" class="form-control"  autocomplete="off" onKeyPress="return numbersonly(event)" maxlength=10   required style="width: 300;">
		     </br>
		    Gender </br>
					Female<input type="radio" name="gender" value="female" checked="checked" > &nbsp;&nbsp;
					Male<input type="radio" name="gender" value="male" >
                    </br>
		    Age<input type="text" name="age" id="age" class="form-control"  onclick="return checkage();"  class="form-control" required readonly style="width: 300;">
                    </br>
		    Religion<input type="text" name="religion" class="form-control" onkeypress="return onlyAlphabets(event,this);" autocomplete="off"  required style="width: 300;">
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
		    Nominee Name<input type="text" name="nominee" class="form-control"  autocomplete="off"   required style="width: 300;">
                    </br>
		    Annual Income <input type="text" name="annual" class="form-control"  autocomplete="off" onkeyPress="return IsNumeric(event,this.value)"  required style="width: 300;">
                    </br>
		    Membership Fees(20/-)  <input type="checkbox" name="formfee" onKeyPress="return numbersonly(event)" required value="20">
                    </br>
		    Shares(100/-)  <input type="checkbox" name="preffshare" onKeyPress="return numbersonly(event)" required value="100">
                    </br>
                    Number of share <input type="text" name="noshare" id="noshare" class="form-control" autocomplete="off"  onKeyPress="return numbersonly(event)"  required style="width: 300;">
                    </br>
		    <?php $fet=mysql_query("select max(id) as mid from `member`");
		    $res=mysql_fetch_array($fet); $id=$res['mid']+1;
		    ?>
		    Share No<input type="text" name="shareno" id="shareno" class="form-control" value="AIRCCBALIA<?php echo $id;?>" required readonly style="width: 300;">
                    </br>
		    Voucher no<input type="text" name="voucher" id="voucher" style="width: 300;"  onKeyPress="return numbersonly(event);"  class="form-control" required >
                    </br>
		    Photo<input type="file" name="photo"    style="width: 300;">
                    </br>
		    Signature<input type="file" name="sign"    style="width: 300;">
                    </br>
		    Documents<input type="file" name="documents"  style="width: 300;">
                    </br>
		    Secrertery sign<input type="file" name="secrertery"  style="width: 300;">
                    </br>
		   
           <input type="checkbox" name="customer" value="1"> Add to Customer
                    </br> </br> </br>
		  <input type="submit" name="submit" value="Submit">
	    </form>
	    </div>
            <div class="box-content">
                <table  class="table">
                    <tr>
						<th>Slno.</th>
                        <th>Name</th>
                        <th>Address</th>
                         <th>Join Date</th>
                        <th>Action</th>
                    </tr>
                    <?php
					$i=0;
                    $fetmember=mysql_query("select * from member order by `id` desc");
                    while($rmember=mysql_fetch_array($fetmember))
                    {
					$i++;
                    ?>
                    <tr>
						<td><?php echo $i; ?></td>
                        <td><?php echo  $rmember['name']."(MemberId-".$rmember['id'].")";?></td>
                        <td><?php echo  $rmember['address'];?></td>
                        <td><?php echo  date("d-m-Y",strtotime($rmember['join_date']));?></td>
                        <td><a href="memberedit.php?mid=<?php echo  $rmember['id'];?>">View</a></td>
                    </tr>
                    <?php } ?>
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