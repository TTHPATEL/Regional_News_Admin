
<?php  
date_default_timezone_set("Asia/Kolkata");
	include "database/conn.php";


	if (isset($_POST['Edit_staff']))
{	

	$a = $_POST['staff_name'];
	$b = $_POST['staff_address'];
	$c = $_POST['staff_no'];
	$d = $_POST['staff_email'];
	$e = $_POST['staff_pic'];
	$f = $_POST['staff_status'];
	$g = $_POST['staff_salary'];
	$now= date('Y-m-d');
	$i = $_POST['staff_role'];	
	$sql="INSERT INTO sm_wk_staff( w_s_name, w_s_address, w_s_contact, w_email_id, w_s_pic, w_s_status, w_s_salary, w_s_c_date, w_s_role) VALUES ('$a','$b','$c','$d','$e','$f','$g','$now','$i')";

	if($conn->query($sql) === TRUE)
	{
		header('Location:list_wk_staff.php?msg=staff Data Inserted');
	}
	else
	{
		header('Location:wk_staff.php?msg=Staff data Updated');
	}

}
	
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Digital Socitey Service | Edit Work staff </title>
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
				<h2 class="title1">Add Staff</h2>
				<div class="blank-page widget-shadow scroll" id="style-2 div1">
				
					<form action="" method="post">
						<div class="form-body">
							<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Name</label>
									<div class="col-sm-8">
								
										<input type="text" name="staff_name" class="form-control1" id="inputPassword" placeholder="name">
									</div>
								</div>

								<div class="clearfix"></div>
								<br>
							 <div class="form-group"> 
							 	<label for="exampleInputadd" class="col-sm-2 control-label">address</label> 
								<div class="col-sm-8">
							 		<input type="address" name="staff_address" class="form-control1" id="exampleInputadd" placeholder="address"> 
							 	</div>
							 </div> 
							
								<div class="clearfix"></div>
								<br>
							 <div class="form-group"> 
							 	<label for="exampleInputEmail1" class="col-sm-2 control-label">Email address</label> 
								<div class="col-sm-8">
							 		<input type="email" name="staff_email" class="form-control1" id="exampleInputEmail1" placeholder="Email"> 
							 	</div>
							 </div> 
							 <div class="clearfix"></div>
								<br>
							 <div class="form-group"> 
							 	<label for="exampleInputnumber" class="col-sm-2 control-label">Contact no</label> 
							 	<div class="col-sm-8">
							 	<input type="number" name="staff_no" class="form-control" id="exampleInputnumber" placeholder="number"> 
							 	</div>
							 </div> 
							  <div class="clearfix"></div>
								<br>
							 <div class="form-group"> 
							 	<label for="exampleInputsalary" class="col-sm-2 control-label">Salary</label> 
							 	<div class="col-sm-8">
							 	<input type="number" name="staff_salary" class="form-control" id="exampleInputsalary" placeholder="salary"> 
							 	</div>
							 </div> 
								<div class="clearfix"></div>
								<br>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Status</label>
									<div class="col-sm-8"><select name="staff_status" id="staff_status" class="form-control1">
										<option>Select Status.</option>
										<option value="1">Show</option>
										<option value="0">Hide</option>
									</select>
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Role</label>
									<div class="col-sm-8"><select name="staff_role" id="staff_role" class="form-control1">
										<option>Select role.</option>
										<option value="watchman">Watchman</option>
										<option value="sweeper">Sweeper</option>
										
									</select>
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
							 <div class="form-group"> 
							 	<label for="exampleInputFile" class="col-sm-2 control-label">Pic</label> 
							 	<div class="col-sm-8">
							 	<input type="file" name="staff_pic" id="exampleInputFile"> 
							 </div>
							 </div>
							 <div class="clearfix"></div>
								<br>
							  	 <button type="submit" name="Edit_staff" class="btn btn-default" >Edit Staff</button>	  	   
						</div>
						</form>

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