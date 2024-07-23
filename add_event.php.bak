<?php  
date_default_timezone_set("Asia/Kolkata");
	include "database/conn.php";

$eventdata=''; 
if(isset($_GET['eweid']))
{
$id=$_GET['eweid'];
 $sql="SELECT * from sm_event where sm_e_id='$id'";
$result=$conn->query($sql);
$eventdata=$result->fetch_assoc();
}

	if(isset($_POST['add_event']))
	{	
	$a = $_POST['event_title'];
	$b = $_POST['event_desc'];
	$c = $_POST['start_date'];
	$d = $_POST['end_date'];
	$e = $_POST['event_status'];
	$now= date('Y-m-d');
	
	$sql="INSERT INTO sm_event( sm_e_title, sm_e_desc, sm_e_start_date, sm_e_end_date, sm_e_status, sm_e_c_date) VALUES ('$a','$b','$c','$d','$e','$now')";

	if($conn->query($sql) === TRUE)
	{
		header('Location:list_event.php?msg=Event Data Inserted');
	}
	else
	{
		header('Location:add_event.php?msg=Event Data Updated');
	}

}

if (isset($_POST['update_event']))
{	
	$id= $_POST['sm_e_id'];
	$a = $_POST['event_title'];
	$b = $_POST['event_desc'];
	$c = $_POST['start_date'];
	$d = $_POST['end_date'];
	// $e = $_POST['event_status'];
	$now= date('Y-m-d');
	
	$sql="UPDATE sm_event SET sm_e_title='$a',sm_e_desc='$b',sm_e_start_date ='$c',sm_e_end_date='$d',sm_e_c_date='$now' WHERE sm_e_id='$id'";

	if($conn->query($sql) === TRUE)
	{
		header('Location:list_event.php?msg=Event Data Updated');
	}
	else
	{
		header('Location:list_event.php?msg=something is wrong');
	}

}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Digital Socitey Service | Event </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
				 <?php include 'extra/leftnavigationbar.php'?> 

		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<?php include 'extra/header.php'?>

		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<h2 class="title1" style="margin-top:50px;">Add Event</h2>
				<div class="blank-page widget-shadow scroll" id="style-2 div1">
				<div class="form-body">
							
						
								<?php
								 if(isset($_GET['eweid']))
								{
									$id=$_GET['eweid'];
								
								?>
								<form action="" method="post"> 

								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Title</label>
									<div class="col-sm-8">
						<input type="hidden" name="sm_e_id" value="<?php echo $id;?>">
						<input type="text" name="event_title" class="form-control1" id="inputPassword"  value="<?php echo $eventdata['sm_e_title'];?>" required>
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
									<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label" >Description</label>
									<div class="col-sm-8"><textarea name="event_desc" id="txtarea1" cols="50" rows="4" class="form-control1" value="Description" required><?php echo $eventdata['sm_e_desc'];?></textarea></div>
								</div>
									<div class="clearfix"></div>
								<br>
			
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Start date</label>
									<div class="col-sm-8">
										<input type="date" name="start_date" class="form-control1" id="inputPassword" value="<?php echo $eventdata['sm_e_start_date'];?>" required>
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
									<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">End date</label>
									<div class="col-sm-8">
										<input type="date" name="end_date" class="form-control1" id="inputPassword" value="<?php echo $eventdata['sm_e_end_date'];?>"  required>
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
								
							  <input type="submit" name="update_event" value="Update Event"  class="btn btn-primary"> 
								</form>
							<?php } else {
							   ?>
								<form action="" method="post"> 
									<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Title</label>
									<div class="col-sm-8">
										<input type="text" name="event_title" class="form-control1" id="inputPassword"  required>
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
									<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label" >Description</label>
									<div class="col-sm-8"><textarea name="event_desc" id="txtarea1" cols="50" rows="4" class="form-control1" required></textarea></div>
								</div>
									<div class="clearfix"></div>
								<br>
			
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Start date</label>
									<div class="col-sm-8">
										<input type="date" name="start_date" class="form-control1" id="inputPassword"  required>
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
									<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">End date</label>
									<div class="col-sm-8">
										<input type="date" name="end_date" class="form-control1" id="inputPassword"  required>
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Status</label>
									<div class="col-sm-8"><select name="event_status" id="event_status" class="form-control1">
										<option>Select Status.</option>
										<option value="1">Show</option>
										<option value="0">Hide</option>
									</select>
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
							  <input type="submit" name="add_event" value="ADD EVENT"  class="btn btn-primary"> 
								</form>
							<?php } ?>

					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		<?php include 'extra/footer.php';?>
        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
   
</body>
</html>