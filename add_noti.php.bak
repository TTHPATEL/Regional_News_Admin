<?php  
date_default_timezone_set("Asia/Kolkata");
	include "database/conn.php";

$notidata=''; 
if(isset($_GET['enid']))
{
$id=$_GET['enid'];
 $sql="SELECT * from sm_notification where sm_n_id='$id'";
$result=$conn->query($sql);
$notidata=$result->fetch_assoc();
}


	if (isset($_POST['add_noti']))
	{	
	$a = $_POST['noti_title'];
	$b = $_POST['noti_det'];
	$now= date('Y-m-d');

$target_dir = "dss_pic/";
$target_file = $target_dir . basename($_FILES["doc_pic"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if ($_FILES["doc_pic"]["size"] > 500000) {
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
header('Location:add_noti.php?msg=Upload Valid Image');
} else {
  if (move_uploaded_file($_FILES["doc_pic"]["tmp_name"], $target_file)) {
			
	$sql="INSERT INTO sm_notification(sm_n_title, sm_n_detail, sm_n_pic, sm_n_date) VALUES ('$a','$b','$target_file','$now')";

	if($conn->query($sql) === TRUE)
	{
		header('Location:list_noti.php?msg=Expensec Data Inserted');
	}
	else
	{
		header('Location:add_noti.php?msg=some thing is  wrong');
	}

	}

}

}

if (isset($_POST['update_noti']))
{	
	$id= $_POST['sm_n_id'];
	$a = $_POST['noti_title'];
	$b = $_POST['noti_det'];
	$now= date('Y-m-d');
	$sql="UPDATE sm_notification SET sm_n_title='$a',sm_n_detail='$b',sm_n_date='$now' WHERE sm_n_id='$id'";

	if($conn->query($sql) === TRUE)
	{
		header('Location:list_noti.php?msg=Expensec Data Inserted');
	}
	else
	{
		header('Location:list_noti.php?msg=some thing is  wrong');
	}

}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Digital Socitey Service | Notification</title>
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
				<h2 class="title1" style="margin-top:50px;">Notification</h2>
				<div class="blank-page widget-shadow scroll" id="style-2 div1">
					<div class="form-body">

								<?php
								 if(isset($_GET['enid']))
								{
									$id=$_GET['enid'];
								
								?>
								<form action="" method="post" enctype="multipart/form-data"> 
								<div class="form-group">

									<label for="inputPassword" class="col-sm-2 control-label">Title</label>
									<div class="col-sm-8">
										<input type="hidden" name="sm_n_id" value="<?php echo $id;?>">
						<input type="text" name="noti_title" class="form-control1" id="inputPassword" placeholder="Title"value="<?php echo $notidata['sm_n_title'];?>" required>
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
					<div class="form-group">
						<label for="txtarea1" class="col-sm-2 control-label" >Detail</label>
									<div class="col-sm-8">
							<textarea name="noti_det" id="txtarea1" cols="50" rows="4" class="form-control1"  placeholder="Detail" required><?php echo $notidata['sm_n_detail'];?></textarea></div>
								</div>
								
							 <div class="clearfix"></div>
								<br>
							  	 <button type="submit" name="update_noti" class="btn btn-default" >Update Notification</button>	  	   
						</div>
				</form>
			<?php } else { ?>

			<form action="" method="post" enctype="multipart/form-data"> 
								<div class="form-group">

									<label for="inputPassword" class="col-sm-2 control-label">Title</label>
									<div class="col-sm-8">
										
										<input type="text" name="noti_title" class="form-control1" id="inputPassword" placeholder="Title" required>
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
									<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label" >Detail</label>
									<div class="col-sm-8"><textarea name="noti_det" id="txtarea1" cols="50" rows="4" class="form-control1" required placeholder="Detail"></textarea></div>
								</div>
								<div class="clearfix"></div>
								<br>
								 <div class="form-group"> 
							 	<label for="exampleInputFile" class="col-sm-2 control-label">Pic</label> 
							 	<div class="col-sm-8">
							 	<input type="file" name="doc_pic" id="doc_pic" required> 
							 </div>
							 </div>
							 <div class="clearfix"></div>
								<br>
							  	 <button type="submit" name="add_noti" class="btn btn-default" >Add Notification</button>	  	   
						</div>
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