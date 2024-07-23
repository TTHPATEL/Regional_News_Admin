<?php  
date_default_timezone_set("Asia/Kolkata");
include "database/conn.php";

 $sf_sql="SELECT * from sm_wk_staff where w_s_status='1'";
$sf_result=$conn->query($sf_sql);


	if (isset($_POST['add_staff_sal']))
	{	

	$atten_day_no = $_POST['atten_day_no'];
	 $staff_sal_p_date = $_POST['staff_sal_p_date'];
	 $staff_sal_date = $_POST['staff_sal_month'];
	$worker_id = $_POST['worker_id'];
	$staff_sal_amt = $_POST['staff_sal_amt'];
	$staff_sal_status = $_POST['staff_sal_status'];
	$time=strtotime($staff_sal_date);
 	$month=date("m",$time);
 	$year=date("Y",$time);
	$now= date('Y-m-d');

	$sql="INSERT INTO `sm_wkstaff_salary`( `s_w_s_id`, `sm_s_s_month`, `sm_s_s_year`, `sm_s_p_date`, `s_w_p_amount`, `s_w_attain_day`, `sm_s_s_status`, `sm_s_s_c_date`) VALUES ('$worker_id','$month','$year','$staff_sal_p_date','$staff_sal_amt','$atten_day_no','$staff_sal_status','$now')";
	

	

	if($conn->query($sql) === TRUE)
	{
		header('Location:list_staff_sal.php?msg=Staff Salary Data Inserted');
	}
	else
	{
		header('Location:add_staff_sal.php?msg=some thing is  wrong');
	}

}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Digital Socitey Service | Staff salary </title>
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
				<h2 class="title1" style="margin-top:50px;">Staff Salary</h2>
				<div class="blank-page widget-shadow scroll" id="style-2 div1">
					<div class="form-body">

						

						<form action="" method="post">
							<div class="form-group">
					<label for="selector1" class="col-sm-2 control-label">Worker</label>
							<div class="col-sm-8">
						<select name="worker_id" id="worker_id" class="form-control1">
								<option>Select Worker.</option>

								<?php 
								while($row=$sf_result->fetch_assoc())
								{


								?>
								<option value="<?php echo $row['s_w_s_id'];?>"><?php echo $row['w_s_name']." - ".$row['w_s_role'];?></option>
								<?php } ?>		
									</select>
									</div>
								</div>
								
								<div class="clearfix"></div>
								<br>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Attendance Day</label>
									<div class="col-sm-8">
										<input type="number" name="atten_day_no" class="form-control1" id="inputPassword"  value="">
									</div>
								</div>
								<div class="clearfix"></div>
								<br> 
								
				
									<label for="inputPassword" class="col-sm-2 control-label">Salary Month</label>
									<div class="col-sm-8">
										<input type="date" name="staff_sal_month" class="form-control1" id="inputPassword"  value="">
									</div>
									<div class="clearfix"></div>
								<br>

									<label for="inputPassword" class="col-sm-2 control-label">Salary Pay Date</label>
									<div class="col-sm-8">
										<input type="date" name="staff_sal_p_date" class="form-control1" id="inputPassword"  value="">
									</div>
								<div class="clearfix"></div>
								<br>
						<div class="form-group"> 
							 	<label for="exampleInputsalary" class="col-sm-2 control-label">Amount</label> 
							 	<div class="col-sm-8">
							 	<input type="number" name="staff_sal_amt" class="form-control" id="exampleInputsalary" placeholder="Amount"> 
							 	</div>
							 </div> 
								<div class="clearfix"></div>
								<br>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Status</label>
									<div class="col-sm-8"><select name="staff_sal_status" id="staff_sal_status" class="form-control1">
										<option>Select Status.</option>
										<option value="1">Pay</option>
										<option value="0">Pending</option>
									</select>
									</div>
								</div>
								<div class="clearfix"></div>
								<br> 
							 	<input type="submit" name="add_staff_sal" value="Add Staff Salary"  class="btn btn-primary"> 
						</form>
					
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