<?php  
date_default_timezone_set("Asia/Kolkata");
	include "database/conn.php";
	$exptypedata=''; 
if(isset($_GET['ewextid']))
{
$id=$_GET['ewextid'];
 $sql="SELECT * from expense_type where e_t_id='$id'";
$result=$conn->query($sql);
$exptypedata=$result->fetch_assoc();
}


if (isset($_POST['exp_add_type']))
{	

	$a = $_POST['exp_type_title'];
	$b = $_POST['exp_type_det'];
	$c = $_POST['exp_type_status'];
	$now= date('Y-m-d');
$sql="SELECT * from expense_type where e_t_name like '$a'";
$result=$conn->query($sql);

if($result->num_rows> 0)
{
header('Location:add_expense_type.php?msg=Expense Type Already In Database');
}
else
{
	$sql="INSERT INTO expense_type(e_t_name,e_t_detail,e_t_status,e_t_c_date) VALUES ('$a','$b','$c','$now')";

	if($conn->query($sql) === TRUE)
	{
		header('Location:list_exp_type.php?msg=Expensec Data Inserted');
	}
	else
	{
		header('Location:add_expense_type.php?msg=some thing is  wrong');
	}
}

	

}

if (isset($_POST['exp_upda_type']))
{	
	$id=$_POST['e_t_id'];
	$a = $_POST['exp_type_title'];
	$b = $_POST['exp_type_det'];
	$now= date('Y-m-d');

$sql="SELECT * from expense_type where e_t_name like '$a' and e_t_id !='$id' ";
$result=$conn->query($sql);

if($result->num_rows> 0)
{
header('Location:add_expense_type.php?msg=Expense Type Already In Database');
}
else
{
$sql="UPDATE expense_type SET e_t_name='$a',e_t_detail='$b',e_t_c_date='$now' WHERE e_t_id='$id'";

	if($conn->query($sql) === TRUE)
	{
		header('Location:list_exp_type.php?msg=Expensec Data Updated');
	}
	else
	{
		header('Location:list_exp_type.php?msg=some thing is  wrong');
	}	
}


	

}



	
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Digital Socitey Service | Expense Type </title>
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
				<h2 class="title1" style="margin-top:50px;">ADD Expense Type</h2>
				
				<div class="blank-page widget-shadow scroll" id="style-2 div1">
					<p style="color:red;">
					<?php  
						if(isset($_GET['msg']))
						{
							echo $_GET['msg'];
						}
					?>
				</p>
				<div class="form-body">
					<?php
								 if(isset($_GET['ewextid']))
								{
									$id=$_GET['ewextid'];
								
								?>
							
							<form action="" method="post"> 
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Expense name</label>
									<div class="col-sm-8">
										<input type="hidden" name="e_t_id" value="<?php echo $id;?>">
										<input type="text" name="exp_type_title" class="form-control1" id="inputPassword" placeholder="Expense name" value="<?php echo $exptypedata['e_t_name'];?>" required>
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
									<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label" >Detail</label>
									<div class="col-sm-8"><textarea name="exp_type_det" id="txtarea1" cols="50" rows="4" class="form-control1" placeholder="Detail" required><?php echo $exptypedata['e_t_detail'];?></textarea></div>
								</div>
								<div class="clearfix"></div>
								<br>
								 <input type="submit" name="exp_upda_type" value="Update Expense Type"  class="btn btn-primary"> 
								</form> 
								<?php } else { ?>
									<form action="" method="post"> 
								<div class="form-group">
							<label for="inputPassword" class="col-sm-2 control-label">Expense name</label>
							<div class="col-sm-8">
					<input type="text" name="exp_type_title" class="form-control1" id="inputPassword"  value="" placeholder="Expense Type Name" required>
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
									<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label" >Detail</label>
									<div class="col-sm-8"><textarea name="exp_type_det" id="txtarea1" cols="50" rows="4" class="form-control1" value="" placeholder="Expense Detail" required></textarea></div>
								</div>
								<div class="clearfix"></div>
								<br>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Status</label>
									<div class="col-sm-8"><select name="exp_type_status" id="exp_type_status" class="form-control1">
										<option>Select Status.</option>
										<option value="1">Show</option>
										<option value="0">Hide</option>
									</select>
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
							  <input type="submit" name="exp_add_type" value="ADD Expense Type"  class="btn btn-primary"> 
								</form>
							<?php } ?>

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