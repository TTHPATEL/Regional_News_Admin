<?php 
include "database/conn.php";
include 'database/check_session.php';

$sql="SELECT * FROM sm_visitor,sm_user where sm_user.u_id=sm_visitor.u_id" ;
$result=$conn->query($sql);
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Digital Socitey Service | User Visitor  List </title>
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
				<h2 class="title1" style="margin-top: 50px;">Visitor List</h2>
				<div class="blank-page widget-shadow scroll" id="style-2 div1">
		<?php 
		if(isset($_GET['msg']))
		{
			echo "<p style='color:green;'>".$_GET['msg']."</p>";
		}
		?>
			<div class="bs-example widget-shadow" data-example-id="bordered-table"> 
						<table class="table table-bordered"> 
							<thead> 
								<tr> 
								  <th>#</th>
								  <th>Member Name<br>Flat No</th>
								  <th>Visitor Name<br>No of Member</th>
								  <th>Visitor Contact</th>
								  <th>Visitor Vehicle</th>
								  <th>Visitor Time</th>
								  <th>Guard Name</th>
								  <th>Date</th>
								  <th>Action</th> 
								</tr>
							</thead> 
							<tbody>
							<?php 
							$i=1;
							while ($row=$result->fetch_assoc()) {
								
							
						?> 
								<tr> 
									<th scope="row"><?php echo $i;?></th>
									<td><?php echo $row['u_name'];?><br>  <?php echo $row['u_flat_no'];?></td>
									<td><?php echo $row['sm_v_name'];?><br>  <?php echo $row['sm_v_member'];?></td>
									<td> <?php echo $row['sm_v_contact'];?></td>
									<td> <?php echo $row['sm_v_type'];?></td>
									
									<td> <?php echo $row['sm_v_time'];?></td> 
									<td> <?php echo $row['sm_v_guardname'];?></td> 
								

									<td> <?php echo $row['sm_v_c_date'];?></td>
									
							 <td>
							 	<a href="com.php?dsm_v_id=<?php echo $row['sm_v_id'];?>">Delete</a>
							 </td> </tr>
							<?php $i++; } ?>

								 </tbody> 
						</table>
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