<?php  
date_default_timezone_set("Asia/Kolkata");
	include "database/conn.php";

$staffroledata=''; 
if(isset($_GET['esrid']))
{
$id=$_GET['esrid'];
 $sql="SELECT * from sm_user_role where u_r_id='$id'";
$result=$conn->query($sql);
$staffroledata=$result->fetch_assoc();

}


if (isset($_POST['add_role']))
{	

	$a = $_POST['role_status'];
	$b = $_POST['role_type'];
	$now= date('Y-m-d');	
$sql="SELECT * FROM sm_user_role where u_role like '$b'";
$result=$conn->query($sql);

if($result->num_rows > 0)
{
header('Location:add_user_role.php?msg=Role Name Already in database ');
}
else
{
 $sql = "INSERT INTO sm_user_role(u_status,u_role,u_c_date) VALUES ('$a','$b','$now')" ;
	if($conn->query($sql) === TRUE)
	{
		header('Location:list_user_role.php?msg=User Role Data Inserted');
	}
	else
	{
		header('Location:add_user_role.php?msg=something wrong');
	}	
}

 

}

if (isset($_POST['update_user_role']))
{	
	$id = $_POST['u_r_id'];
	$b = $_POST['user_role'];
	$now= date('Y-m-d');	
	$sql = "UPDATE sm_user_role SET u_role='$b' WHERE u_r_id='$id'" ;

	if($conn->query($sql) === TRUE)
	{
		header('Location:list_user_role.php?msg=User role Data Updated');
	}
	else
	{
		header('Location:list_user_role.php?msg=something wrong');
	}

}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Digital Socitey Service | User Role </title>
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
				<h2 class="title1" style="margin-top:50px;">User Role</h2>
				<?php 
		if(isset($_GET['msg']))
		{
			echo "<p style='color:red;'>".$_GET['msg']."</p>";
		}
		?>
				<div class="blank-page widget-shadow scroll" id="style-2 div1">
				<div class="form-body">
						<?php
								 if(isset($_GET['esrid']))
								{
									$id=$_GET['esrid'];
								
								?>
					<form action="" method="post">
						<div class="form-group">
								<input type="hidden" name="u_r_id" value="<?php echo $id;?>">
									<label for="selector1" class="col-sm-2 control-label">Role</label>
									<div class="col-sm-8">
							<input type="text" name="user_role" class="form-control1" id="inputPassword" placeholder="Enter Role Name like Admin" required value="<?php echo $staffroledata['u_role'];?>">

									</div>
								</div>
								<div class="clearfix"></div>
								<br>
								
								<input type="submit" name="update_user_role" value="Updated Role"  class="btn btn-primary"> 
						</form>
					<?php } else {?>
						<form action="" method="post">
						
								
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Role</label>
									<div class="col-sm-8">
									<input type="text" name="role_type" class="form-control1" id="inputPassword" placeholder="Enter Role Name like Admin" required>
									</div>
								</div>
								
								<div class="clearfix"></div>
								<br>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Status</label>
									<div class="col-sm-8"><select name="role_status" id="role_status" class="form-control1">
										<option>Select Status.</option>
										<option value="1">Show</option>
										<option value="0">Hide</option>
									</select>
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
								<input type="submit" name="add_role" value="ADD ROLE"  class="btn btn-primary"> 
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