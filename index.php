 <?php
	//Connect database
 session_start();
 if(isset($_SESSION['a_email']))
{
	header('Location:dashboard.php');
}
	include "database/conn.php";
if (isset($_POST['Sign_In']))
 {
		$eid = $_POST['email'];
		$upass = $_POST['password'];
		$sql = "SELECT * FROM sm_user WHERE u_email='$eid' AND u_pwd='$upass'";
		$result =$conn->query($sql);
		if($result->num_rows > 0)
		{
			$row=$result->fetch_assoc();
			if($row['u_r_id']==1)
			{
				$_SESSION['a_email']=$eid;
			header('Location:dashboard.php?msg=Welcome to DSS');
			}
			else
			{
				header('Location:index.php?msg=User is not admin');
			}
			
			// echo "successful";
		}	
		else
		{
			header('Location:index.php?msg=Username and password is wrong');
			// echo "error";
		}
}
		
	?>
<!DOCTYPE HTML>
<html>
<head>
<title>KutchToday</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

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

		<!-- main content start-->
			<div class="main-page login-page ">
				<h2 class="title1"> KutchToday Admin Login </h2>
		<?php 
		if(isset($_GET['msg']))
		{
			?>
		<center><h3 style="color: red;"><?php echo $_GET['msg'];?></h3></center>	
	<?php 
			}
		?>

				<div class="widget-shadow">
					<div class="login-body">
						<form action="" method="post">
							<input type="email" class="user" name="email" placeholder="Enter Your Email" required="">
							<input type="password" name="password" class="lock" placeholder="Password" required="">
							<div class="forgot-grid">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Remember me</label>
								<div class="forgot">
									<a href="#">forgot password?</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<input type="submit" name="Sign_In" value="Sign In">
							<div class="registration">
								Don't have an account ?
								<a class="" href="signup.html">
									Create an account
								</a>
							</div>
						</form>
					</div>
				</div>
				
			</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2023 KutchToday. All Rights Reserved | Design by <a href="" target="_blank">KT</a></p>		</div>
        <!--//footer-->
	</div>
	<!-- <script src="//code.tidio.co/juqivavcsnxpnjr87azzqobwpvmj0fkq.js" async></script> -->

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
	<!-- //Bootstrap Core JavaScript -->
   
</body>
</html>

<!-- hIII -->

