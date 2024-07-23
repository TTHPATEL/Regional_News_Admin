<?php  
date_default_timezone_set("Asia/Kolkata");
	include "database/conn.php";
$ex_t_sql="SELECT * from expense_type where e_t_status='1'";
$ex_t_result=$conn->query($ex_t_sql);

 $expensedata=''; 
 if(isset($_GET['ewexid']))
 {
 $id=$_GET['ewexid'];
 $sql="SELECT * from sm_expense_detail where sm_e_d_id='$id'";
 $result=$conn->query($sql);
 $expensedata=$result->fetch_assoc();
 }

	if (isset($_POST['exp_add']))
	{	
	$a = $_POST['exp_name'];
	$b = $_POST['exp_amt'];
	$c = $_POST['exp_desc'];
	$exp_type_id=$_POST['exp_type_id'];
	$now= date('Y-m-d');

	$sql="INSERT INTO sm_expense_detail(e_name,sm_e_amount,sm_e_desc, sm_e_c_date,e_t_id) VALUES ('$a','$b','$c','$now','$exp_type_id')";

	if($conn->query($sql) === TRUE)
	{
		header('Location:list_expense.php?msg=Expense Data Inserted');
	}
	else
	{
		header('Location:add_expense.php?msg=some thing is  wrong');
	}

}

if (isset($_POST['exp_update']))
{

	$id =$_POST['sm_e_d_id'];
	$a = $_POST['exp_name'];
	$b = $_POST['exp_amt'];
	$c = $_POST['exp_desc'];
	$now= date('Y-m-d');
	$sql="UPDATE sm_expense_detail SET sm_e_d_id='$id',e_name='$a',sm_e_amount='$b',sm_e_desc='$c',sm_e_c_date='$d' WHERE sm_e_d_id='$id' ";

	if($conn->query($sql) === TRUE)
	{
		header('Location:list_expense.php?msg=Expensec Data Updated');
	}
	else
	{
		header('Location:list_expense.php?msg=some thing is  wrong');
	}

}

	?>

<!DOCTYPE HTML>
<html>
<head>
<title>Digital Socitey Service | ADD Expense </title>
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
				<h2 class="title1" style="margin-top:50px;">Add Expense </h2>
				<div class="blank-page widget-shadow scroll" id="style-2 div1">
				<div class="form-body">
								
								<?php
								 if(isset($_GET['ewexid']))
								{
									$id=$_GET['ewexid'];
								
								?>

								<form action="" method="post"> 
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Expense name</label>
									<div class="col-sm-8">
										<input type="hidden" name="sm_e_d_id" value="<?php echo $id;?>">
										<input type="text" name="exp_name" class="form-control1" id="inputPassword" 
										placeholder="Expense name" value="<?php echo $expensedata['e_name'];?>">
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
									<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label" >Description</label>
									<div class="col-sm-8"><textarea name="exp_desc" id="txtarea1" cols="50" rows="4" class="form-control1"  placeholder="Description"><?php echo $expensedata['sm_e_desc'];?></textarea></div>
								</div>
								<div class="clearfix"></div>
								<br>
								<div class="form-group"> 
							 	<label for="exampleInputsalary" class="col-sm-2 control-label">Amount</label> 
							 	<div class="col-sm-8">
							 	<input type="number" name="exp_amt" class="form-control" id="exampleInputsalary" placeholder="Amount" value="<?php echo $expensedata['sm_e_amount'];?>"> 
							 	</div>
							 </div> 
								<div class="clearfix"></div>
								<br>
							  <input type="submit" name="exp_update" value="Update Expense"  class="btn btn-primary"> 
								</form> 
						 <?php } else { ?>

						 	<form action="" method="post"> 
								
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Expense Type</label>
								<div class="col-sm-8">
							<select name="exp_type_id" id="exp_type_id" class="form-control1">
								<option>Select Expense Type</option>
						<?php 
						while($row=$ex_t_result->fetch_assoc())
						{

							?>
					<option value="<?php echo $row['e_t_id'] ;?>"><?php echo $row['e_t_name'] ;?></option>
						<?php } ?>
							</select>
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Expense name</label>
									<div class="col-sm-8">
										<input type="text" name="exp_name" class="form-control1" id="inputPassword"  
										placeholder="Expense name" required>
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
								<div class="form-group">
							<label for="txtarea1" class="col-sm-2 control-label" >Description</label>
									<div class="col-sm-8"><textarea name="exp_desc" id="txtarea1" cols="50" rows="4" class="form-control1" value="" placeholder="Description" required></textarea></div>
								</div>
								<div class="clearfix"></div>
								<br>
								<div class="form-group"> 
							 	<label for="exampleInputsalary" class="col-sm-2 control-label">Amount</label> 
							 	<div class="col-sm-8">
							 	<input type="number" name="exp_amt" class="form-control" id="exampleInputsalary" placeholder="Amount" required> 
							 	</div>
							 </div> 
								<div class="clearfix"></div>
								<br>

							  <input type="submit" name="exp_add" value="ADD Expense"  class="btn btn-primary"> 
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