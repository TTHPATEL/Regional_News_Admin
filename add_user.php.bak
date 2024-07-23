<?php  
date_default_timezone_set("Asia/Kolkata");
	include "database/conn.php";

$w_sql="SELECT * FROM sm_wing where w_status='1'";
$w_result=$conn->query($w_sql);

$role_sql="SELECT * FROM sm_user_role where u_status='1'";
$role_result=$conn->query($role_sql);

$staffdata=''; 
if(isset($_GET['ewid']))
{
$id=$_GET['ewid'];
 $sql="SELECT * from sm_wk_staff where s_w_s_id='$id'";
$result=$conn->query($sql);
$staffdata=$result->fetch_assoc();

}

if (isset($_POST['add_user']))
	{	

	$wing_id = $_POST['wing_id'];
	$flat_no = $_POST['flat_no'];
	$role_id = $_POST['role_id'];
	$u_name= $_POST['u_name'];
	$u_gender = $_POST['u_gender'];
	$u_f_mem_no = $_POST['u_f_mem_no'];
	$u_t_v_no = $_POST['u_t_v_no'];
	$u_f_v_no = $_POST['u_f_v_no'];
	$u_email = $_POST['u_email'];
	$u_pwd = $_POST['u_pwd'];
	$u_contact = $_POST['u_contact'];
	$u_dob = $_POST['u_dob'];
	$u_status = $_POST['u_status'];
	$now= date('Y-m-d');

$target_dir = "dss_pic/";
$target_file = $target_dir . basename($_FILES["u_pic"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if ($_FILES["u_pic"]["size"] > 500000) {
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $uploadOk = 0;
}	

if ($uploadOk == 0) {
header('Location:add_user.php?msg=Upload Valid Image');
} else {
  if (move_uploaded_file($_FILES["u_pic"]["tmp_name"], $target_file)) {

 $sql="INSERT INTO `sm_user`(`w_id`, `u_r_id`, `u_flat_no`, `u_name`, `u_mobile`, `u_gender`, `u_t_member`, `u_dob`, `u_email`, `u_pwd`, `u_pic`, `u_t_v_no`, `u_f_v_no`, `u_status`, `u_c_date`) VALUES ('$wing_id','$role_id','$flat_no','$u_name','$u_contact','$u_gender','$u_f_mem_no','$u_dob','$u_email','$u_pwd','$target_file','$u_t_v_no','$u_f_v_no','$u_status','$now')";
	if($conn->query($sql) === TRUE)
	{
		header('Location:list_user.php?msg=Work Staff Data Inserted');
	}
	else
	{
		header('Location:wk_staff.php?msg=Work Staff data Updated');
	}

  	}

  }

	

}
// if (isset($_POST['updated_staff']))
// {	
// 	$id = $_POST['s_w_s_id'];
// 	$a = $_POST['staff_name'];
// 	$b = $_POST['staff_address'];
// 	$c = $_POST['staff_no'];
// 	$d = $_POST['staff_email'];
// 	$e = $_POST['staff_pic'];
// 	$f = $_POST['staff_status'];
// 	$g = $_POST['staff_salary'];
// 	$now= date('Y-m-d');
// 	$i = $_POST['staff_role'];	
// 	$sql = "UPDATE sm_wk_staff SET w_s_name='$a',w_s_address='$b',w_s_contact='$c', w_email_id='$d',w_s_pic='$e', w_s_status='$f',w_s_salary='$g',w_s_c_date='$now',w_s_role='$i' WHERE s_w_s_id='$id'" ;

// 	if($conn->query($sql) === TRUE)
// 	{
// 		header('Location:list_wk_staff.php?msg=Work Staff Data Updated');
// 	}
// 	else
// 	{
// 		header('Location:list_wk_staff.php?msg=Something Wrong');
// 	}

// }


	
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Digital Socitey Service | User </title>
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
				<h2 class="title1" style="margin-top:50px;">Add User</h2>
				<div class="blank-page widget-shadow scroll" id="style-2 div1">
				<div class="form-body">
					
					<?php  
					if(isset($_GET['ewid']))
					{ 
					?>

						<!-- <form action="" method="post">
						
							<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Name</label>
									<div class="col-sm-8">
										<input type="hidden" name="s_w_s_id" value="<?php echo $id;?>">
										<input type="text" name="staff_name" class="form-control1" id="inputPassword" placeholder="name"
										value="<?php echo $staffdata['w_s_name'];?>" required>
									</div>
								</div>

								<div class="clearfix"></div>
								<br>
							 <div class="form-group"> 
							 	<label for="exampleInputadd" class="col-sm-2 control-label">Address</label> 
								<div class="col-sm-8">
							 		<input type="address" name="staff_address" class="form-control1" id="exampleInputadd" placeholder="address"
							 		 required> 
							 	</div>
							 </div> 
							
								<div class="clearfix"></div>
								<br>
							 <div class="form-group"> 
							 	<label for="exampleInputEmail1" class="col-sm-2 control-label">Email address</label> 
								<div class="col-sm-8">
							 		<input type="email" name="staff_email" class="form-control1" id="exampleInputEmail1" placeholder="Email" required> 
							 	</div>
							 </div> 
							 <div class="clearfix"></div>
								<br>
							 <div class="form-group"> 
							 	<label for="exampleInputnumber" class="col-sm-2 control-label">Contact no</label> 
							 	<div class="col-sm-8">
							 	<input type="number" name="staff_no" class="form-control" id="exampleInputnumber" placeholder="number" required> 
							 	</div>
							 </div> 
							  <div class="clearfix"></div>
								<br>
							 <div class="form-group"> 
							 	<label for="exampleInputsalary" class="col-sm-2 control-label">Salary</label> 
							 	<div class="col-sm-8">
							 	<input type="number" name="staff_salary" class="form-control" id="exampleInputsalary" placeholder="salary" required> 
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
							  	 <button type="submit" name="updated_staff" class="btn btn-default" >Update Staff</button>	  	   
						

					</form> -->
				<?php 	}
					else
					{ ?>


	<form action="" method="post" enctype="multipart/form-data">

							<div class="form-group">
							<label for="selector1" class="col-sm-2 control-label">Wing</label>
									<div class="col-sm-8"><select name="wing_id" id="wing_id" class="form-control1">
										<option>Select Wing.</option>
								<?php  
								while($row=$w_result->fetch_assoc())
								{


								?>
								<option value="<?php echo $row['w_id'];?>"><?php echo $row['w_name'];?></option>
								<?php } ?>		
									</select>
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
 							<div class="form-group"> 
							 	<label for="exampleInputadd" class="col-sm-2 control-label">Flat No</label> 
								<div class="col-sm-8">
							 		<input type="number" name="flat_no" class="form-control1" id="exampleInputadd" placeholder="Enter Flat No" required > 
							 	</div>
							 </div> 
							
								<div class="clearfix"></div>
								<br>
								<div class="form-group">
							<label for="selector1" class="col-sm-2 control-label">Role</label>
									<div class="col-sm-8"><select name="role_id" id="role_id" class="form-control1">
										<option>Select Role.</option>
								<?php  
							while($row=$role_result->fetch_assoc())
								{


								?>
								<option value="<?php echo $row['u_r_id'];?>"><?php echo $row['u_role'];?></option>
								<?php } ?>		
									</select>
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
							<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Name</label>
									<div class="col-sm-8">
										<input type="text" name="u_name" class="form-control1" id="inputPassword" placeholder="name" required>
									</div>
								</div>

								<div class="clearfix"></div>
								<br>
								<div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Gender</label>
									<div class="col-sm-8">
										<div class="radio-inline"><label><input type="radio" name="u_gender" value="Male" checked> Male</label></div>
										<div class="radio-inline"><label><input type="radio" name="u_gender" value="Female"> Female</label></div>
										
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
								<div class="form-group"> 
							 	<label for="exampleInputEmail1" class="col-sm-2 control-label">Total Family Member</label> 
								<div class="col-sm-8">
							 		<input type="number" name="u_f_mem_no" class="form-control1" id="exampleInputEmail1" placeholder="Enter Total Family Number" required> 
							 	</div>
							 </div> 
							 <div class="clearfix"></div>
								<br>
								<div class="form-group"> 
							 	<label for="exampleInputEmail1" class="col-sm-2 control-label">Total Two-wheeler</label> 
								<div class="col-sm-8">
							 		<input type="number" name="u_t_v_no" class="form-control1" id="exampleInputEmail1" placeholder="Enter Total  Number of Two-wheeler" required> 
							 	</div>
							 </div> 
							 <div class="clearfix"></div>
								<br>
								<div class="form-group"> 
							 	<label for="exampleInputEmail1" class="col-sm-2 control-label">Total Four-wheeler</label> 
								<div class="col-sm-8">
							 		<input type="number" name="u_f_v_no" class="form-control1" id="exampleInputEmail1" placeholder="Enter Total  Number of Four-wheeler" required> 
							 	</div>
							 </div> 
							 <div class="clearfix"></div>
								<br>
							
							 <div class="form-group"> 
							 	<label for="exampleInputEmail1" class="col-sm-2 control-label">Email address</label> 
								<div class="col-sm-8">
							 		<input type="email" name="u_email" class="form-control1" id="exampleInputEmail1" placeholder="Email" required> 
							 	</div>
							 </div> 
							 <div class="clearfix"></div>
								<br>

								<div class="form-group"> 
							 	<label for="exampleInputEmail1" class="col-sm-2 control-label">Password</label> 
								<div class="col-sm-8">
							 		<input type="password" name="u_pwd" class="form-control1" id="exampleInputEmail1" placeholder="Enter Password" required> 
							 	</div>
							 </div> 
							 <div class="clearfix"></div>
								<br>
							 <div class="form-group"> 
							 	<label for="exampleInputnumber" class="col-sm-2 control-label">Contact no</label> 
							 	<div class="col-sm-8">
							 	<input type="number" name="u_contact" class="form-control" id="exampleInputnumber" placeholder="number" required> 
							 	</div>
							 </div> 
							  <div class="clearfix"></div>
								<br>
							 <div class="form-group"> 
							 	<label for="exampleInputsalary" class="col-sm-2 control-label">DOB</label> 
							 	<div class="col-sm-8">
							 	<input type="date" name="u_dob" class="form-control" id="exampleInputsalary" placeholder="Select Date of Birth" required> 
							 	</div>
							 </div> 
								<div class="clearfix"></div>
								<br>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Status</label>
									<div class="col-sm-8"><select name="u_status" id="u_status" class="form-control1">
										<option>Select Status.</option>
										<option value="1">Show</option>
										<option value="0">Hide</option>
									</select>
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
							
							 <div class="form-group"> 
							 	<label for="exampleInputFile" class="col-sm-2 control-label">Pic</label> 
							 	<div class="col-sm-8">
							 	<input type="file" name="u_pic" id="u_pic" required> 
							 </div>
							 </div>
							 <div class="clearfix"></div>
								<br>
							  	 <button type="submit" name="add_user" class="btn btn-default" >Add User</button>	  	   
					
							</form>


			<?php }		

					?>

						
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