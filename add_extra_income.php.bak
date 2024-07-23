<?php  
date_default_timezone_set("Asia/Kolkata");
	include "database/conn.php";

$extindata=''; 
if(isset($_GET['eeiid']))
{
$id=$_GET['eeiid'];
 $sql="SELECT * from extra_income where e_i_id='$id'";
$result=$conn->query($sql);
$extindata=$result->fetch_assoc();
}

	if (isset($_POST['income_add']))
{	

	$a = $_POST['income_title'];
	$b = $_POST['income_desc'];
	$c = $_POST['income_amt'];
	$now= date('Y-m-d');
	$sql="INSERT INTO extra_income(e_i_title,e_i_desc,e_i_amount, e_i_c_date) VALUES ('$a','$b','$c','$now')";

	if($conn->query($sql) === TRUE)
	{
		header('Location:list_ext_income.php?msg=Income Data Inserted');
	}
	else
	{
		header('Location:extra_income.php?msg=some thing is  wrong');
	}

}

if (isset($_POST['income_update']))
{	
	$id = $_POST['e_i_id'];
	$a = $_POST['income_title'];
	$b = $_POST['income_desc'];
	$c = $_POST['income_amt'];
	$now= date('Y-m-d');
	$sql="UPDATE extra_income SET e_i_title='$a',e_i_desc='$b',e_i_amount='$c',e_i_c_date='$now' WHERE e_i_id='$id'";

	if($conn->query($sql) === TRUE)
	{
		header('Location:list_ext_income.php?msg=Income Data Updated');
	}
	else
	{
		header('Location:extra_income.php?msg=some thing is  wrong');
	}

}

	
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Digital Socitey Service | Extra income </title>
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
				<h2 class="title1" style="margin-top:50px;">Extra income</h2>
				<div class="blank-page widget-shadow scroll" id="style-2 div1">
					<div class="form-body">
					<?php
								 if(isset($_GET['eeiid']))
								{
									$id=$_GET['eeiid'];
								
								?>

				
				<form action="" method="post"> 
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Title</label>
									<div class="col-sm-8">
										<input type="hidden" name="e_i_id" value="<?php echo $id;?>"> 
										<input type="text" name="income_title" class="form-control1" id="inputPassword"  
										placeholder="Title" value="<?php echo $extindata['e_i_title'];?>" required>
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
									<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label" >Description</label>
									<div class="col-sm-8"><textarea name="income_desc" id="txtarea1" cols="50" rows="4" class="form-control1"  placeholder="Description"><?php echo $extindata['e_i_desc'];?></textarea></div>
								</div>
								<div class="clearfix"></div>
								<br>
								<div class="form-group"> 
							 	<label for="exampleInputsalary" class="col-sm-2 control-label">Amount</label> 
							 	<div class="col-sm-8">
							 	<input type="number" name="income_amt" class="form-control" id="exampleInputsalary" placeholder="Amount" value="<?php echo $extindata['e_i_amount'];?>" required> 
							 	</div>
							 </div> 
								<div class="clearfix"></div>
								<br>
							  <input type="submit" name="income_update" value="Update Extra"  class="btn btn-primary"> 
								</form>
							<?php } else {?>

								<form action="" method="post"> 
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Title</label>
									<div class="col-sm-8">
										<input type="text" name="income_title" class="form-control1" id="inputPassword" 
										placeholder="Title" required>
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
									<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label" >Description</label>
									<div class="col-sm-8"><textarea name="income_desc" id="txtarea1" cols="50" rows="4" class="form-control1" placeholder="Description" required></textarea></div>
								</div>
								<div class="clearfix"></div>
								<br>
								<div class="form-group"> 
							 	<label for="exampleInputsalary" class="col-sm-2 control-label">Amount</label> 
							 	<div class="col-sm-8">
							 	<input type="number" name="income_amt" class="form-control" id="exampleInputsalary" placeholder="Amount"  required> 
							 	</div>
							 </div> 
								<div class="clearfix"></div>
								<br>
							  <input type="submit" name="income_add" value="ADD Extra"  class="btn btn-primary"> 
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