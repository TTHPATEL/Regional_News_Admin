<?php  
date_default_timezone_set("Asia/Kolkata");
	include "database/conn.php";


	if(isset($_POST['add_m_month']))
	{	
	 $a = $_POST['m_mo_year'];
	 $mo_status=$_POST['mo_status'];
	 $sm_m_amount=$_POST['sm_m_amount'];

	 
	 $time=strtotime($a);
	 $month=date("m",$time);
     $year=date("Y",$time);
	 $now= date('Y-m-d');
	
	$sql="INSERT INTO `sm_maintance`(sm_m_y,sm_m_month,sm_m_year,sm_m_status,sm_m_amount) VALUES ('$a','$month','$year','$mo_status','$sm_m_amount')";

	if($conn->query($sql) === TRUE)
	{
		header('Location:list_maintenance_month.php?msg=Month Data Inserted');
	}
	else
	{
		header('Location:add_maintenance_month.php?msg=Error in Data Inserted');
	}

}


?>

<!DOCTYPE HTML>
<html>
<head>
<title>Digital Socitey Service | Event </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
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
				<h2 class="title1" style="margin-top:50px;">Add Maintenance Month</h2>
				<div class="blank-page widget-shadow scroll" id="style-2 div1">
				<div class="form-body">
							
						
								
								<form action="" method="post"> 
									
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Maintenance Month</label>
									<div class="col-sm-8">
										<input type="month" name="m_mo_year" class="form-control1" id="inputPassword"  min="2018-03"  required>
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
									
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Maintenance Amount</label>
									<div class="col-sm-8">
										<input type="number" name="sm_m_amount" class="form-control1" id="inputPassword"    required>
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Status</label>
									<div class="col-sm-8"><select name="mo_status" id="mo_status" class="form-control1">
										<option>Select Status.</option>
										<option value="1">Show</option>
										<option value="0">Hide</option>
									</select>
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
							  <input type="submit" name="add_m_month" value="ADD Maintenance Month"  class="btn btn-primary"> 
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