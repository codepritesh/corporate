<?php
include_once("function.php");
if(!isset($_SESSION['user']))
{ header("location:index.php");}
else
{
$qwe=mysql_query("select * from `calender`");
?>
<!--autocomplete start-->
<link rel="stylesheet" href="css/jquery-ui.css">
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<link rel="stylesheet" href="css/chosen.css">
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
    <link href="css/charisma-app.css" rel="stylesheet">
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
    
<!--------------------------calender--------------------------------->
<link href='css/fullcalendar.css' rel='stylesheet' />
<script src='js/moment.min.js'></script>
<script src='js/fullcalendar.min.js'></script>
<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: new Date(),
			//defaultView: 'agendaDay',
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
			      var check = moment(start).format('YYYY-MM-DD');
			      var today = moment(new Date()).format('YYYY-MM-DD');
                              var win = window.open("setschedule.php?dt="+check, "_blank");
			},
			editable: true,
                        eventDrop: function(event, delta, revertFunc) {
			      var st = moment(event.start).format('YYYY-MM-DD HH:mm:ss');
			      var en = moment(event.end).format('YYYY-MM-DD HH:mm:ss');
			     
			      
			      alert(event.title + " was dropped on " + event.start.format());
			      if (!confirm("Are you sure about this change?")) {
				  revertFunc();
			      }
			      else
			      {
				$('#title'+event.idd).val(event.title);
				$('#en'+event.idd).val(en);
				$('#st'+event.idd).val(st);
			      
			      }
			  },
			   eventResize: function(event, delta, revertFunc) {
			       var st = moment(event.start).format('YYYY-MM-DD HH:mm:ss');
			      var en = moment(event.end).format('YYYY-MM-DD HH:mm:ss');
			      
			      alert(event.title + " end is now " + event.end.format());
		      
			      if (!confirm("is this okay?")) {
				  revertFunc();
			      }
			      else
			      {
					$('#title'+event.idd).val(event.title);
					     $('#en'+event.idd).val(en);
					     $('#st'+event.idd).val(st);     
			      }
		      
			  },
			eventLimit: true, // allow "more" link when too many events
			 events: [
				 <?php while($rows=mysql_fetch_array($qwe)){ ?>
					{
					    title: '<?php echo $rows['name'];?>',
					    url:"editschdeule.php?sid=<?php echo $rows['id'];?>&date=<?php echo $rows['date'];?>",
					    start: '<?php echo $rows['date'];?>'
					},
					<?php } ?>
				    ],
			eventClick: function(event) {
				if (!confirm("Do you want to delete?")) {
				  return false;
			        }
			      else
			      {
				if (event.url) {
					window.open(event.url);
				       return false;
					
				   }
				}
			       }
		});
		
	});
	
</script>
<style>
	       #calendar {
		max-width: 900px;
		margin: 0 auto;
	}
</style>
<!--------------------------calender--------------------------------->

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
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i>Holidays Lists</h2>

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
                <table style="width:100%; font-size:15px; font-weight:bold; line-height:2.5;">
		<tr>
								    <td colspan="2" align="center" id="avail_time">
									<div id='calendar'></div>
								    </td>
							 </tr>
		<tr>
		    <td id="timeslot">
			<?php $i=0;
			while($rows = mysql_fetch_array($qwe)){  ?>
			 <input type="hidden" name="title[]" value="Test" id="title1;?>"/>               
			
			<?php } ?>
		    </td>
		</tr>
		
		</table>
		
	    </div>
	</div>
    </div>
</div>
</body>
</html><?php }?>