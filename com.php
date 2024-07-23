<?php 
include 'database/conn.php';
include 'database/check_session.php';

if(isset($_GET['dwid']))
{
	$w_id=$_GET['dwid'];

	$sql="delete from sm_wing  where w_id='$w_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:list_wing.php?msg=Wing Deleted Successfully');
	}
	else
	{
header('Location:list_wing.php?msg=Something Wrong');
	}
}
if(isset($_GET['dswid']))
{
	$s_w_s_id=$_GET['dswid'];

	$sql="delete from sm_wk_staff  where s_w_s_id='$s_w_s_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:list_wk_staff.php?msg=Wokr staff Deleted Successfully');
	}
	else
	{
	header('Location:list_wk_staff.php?msg=Something Wrong');
	}
}

if(isset($_GET['deid']))
{
	$sm_e_id=$_GET['deid'];

	$sql="delete from sm_event where sm_e_id='$sm_e_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:list_event.php?msg=Event Deleted Successfully');
	}
	else
	{
		header('Location:list_event.php?msg=Something Wrong');
	}
}

if(isset($_GET['dexid']))
{
	$sm_e_d_id=$_GET['dexid'];

	$sql="delete from sm_expense_detail where sm_e_d_id='$sm_e_d_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:list_expense.php?msg=Expense Deleted Successfully');
	}
	else
	{
		header('Location:list_expense.php?msg=Something Wrong');
	}
}

if(isset($_GET['dextid']))
{
	$e_t_id=$_GET['dextid'];

	$sql="delete from expense_type where e_t_id='$e_t_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:list_exp_type.php?msg=Expense type Deleted Successfully');
	}
	else
	{
		header('Location:list_exp_type.php?msg=Something Wrong');
	}
}

if(isset($_GET['deiid']))
{
	$e_i_id=$_GET['deiid'];

	$sql="delete from extra_income where e_i_id='$e_i_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:list_ext_income.php?msg=Extra income Deleted Successfully');
	}
	else
	{
		header('Location:list_ext_income.php?msg=Something Wrong');
	}
}

if(isset($_GET['dnid']))
{
	$sm_n_id=$_GET['dnid'];

	$sql="delete from sm_notification where sm_n_id='$sm_n_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:list_noti.php?msg=Notification Deleted Successfully');
	}
	else
	{
		header('Location:list_noti.php?msg=Something Wrong');
	}
}

if(isset($_GET['dssid']))
{
	$sm_s_s_id=$_GET['dssid'];

	$sql="delete from sm_wkstaff_salary where sm_s_s_id='$sm_s_s_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:list_staff_sal.php?msg=Staff Salary Deleted Successfully');
	}
	else
	{
		header('Location:list_staff_sal.php?msg=Something Wrong');
	}
}

if(isset($_GET['dsrid']))
{
	$s_s_id=$_GET['dsrid'];

	$sql="delete from sm_user_role where u_r_id='$s_s_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:list_user_role.php?msg=User Role Deleted Successfully');
	}
	else
	{
		header('Location:list_user_role.php?msg=Something Wrong');
	}
}

if(isset($_GET['dsmid']))
{
	$s_s_id=$_GET['dsmid'];

	$sql="delete from sm_maintance where sm_m_id='$s_s_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:list_maintenance_month.php?msg=Month Deleted Successfully');
	}
	else
	{
		header('Location:list_maintenance_month.php?msg=Something Wrong');
	}
}




// status update
if(isset($_GET['hwid']))
{
	$wid=$_GET['hwid'];

	$sql="UPDATE `sm_wing` SET `w_status`='0' WHERE w_id='$wid'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:list_wing.php?msg=Wing Status Successfully');
	}
	else
	{
		header('Location:list_wing.php?msg=Something Wrong');
	}
}
if(isset($_GET['swid']))
{
	$wid=$_GET['swid'];

	$sql="UPDATE `sm_wing` SET `w_status`='1' WHERE w_id='$wid'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:list_wing.php?msg=Wing Status Successfully');
	}
	else
	{
		header('Location:list_wing.php?msg=Something Wrong');
	}
}

if(isset($_GET['pssid']))
{
	$wid=$_GET['pssid'];

	$sql="UPDATE `sm_wkstaff_salary` SET `sm_s_s_status`='1' WHERE sm_s_s_id='$wid'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:list_staff_sal.php?msg=Pay Status Updated Successfully');
	}
	else
	{
		header('Location:list_staff_sal.php?msg=Something Wrong');
	}
}
if(isset($_GET['upssid']))
{
	$wid=$_GET['upssid'];

	$sql="UPDATE `sm_wkstaff_salary` SET `sm_s_s_status`='0' WHERE sm_s_s_id='$wid'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:list_staff_sal.php?msg=Pay Status Updated Successfully');
	}
	else
	{
		header('Location:list_staff_sal.php?msg=Something Wrong');
	}
}

if(isset($_GET['hurid']))
{
	$urid=$_GET['hurid'];

	$sql="UPDATE `sm_user_role` SET `u_status`='0' WHERE u_r_id='$urid'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:list_user_role.php?msg=User Role Status Updated Successfully');
	}
	else
	{
		header('Location:list_user_role.php?msg=Something Wrong');
	}
}
if(isset($_GET['surid']))
{
	$urid=$_GET['surid'];

	$sql="UPDATE `sm_user_role` SET `u_status`='1' WHERE u_r_id='$urid'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:list_user_role.php?msg=User Role Status Updated Successfully');
	}
	else
	{
		header('Location:list_user_role.php?msg=Something Wrong');
	}
}

if(isset($_GET['huid']))
{
	$uid=$_GET['huid'];

	 $sql="UPDATE `sm_user` SET `u_status`='1' WHERE u_id='$uid'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:list_user.php?msg=User  Status Updated Successfully');
	}
	else
	{
		header('Location:list_user.php?msg=Something Wrong');
	}
}
if(isset($_GET['suid']))
{
	$uid=$_GET['suid'];

	$sql="UPDATE `sm_user` SET `u_status`='0' WHERE u_id='$uid'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:list_user.php?msg=User  Status Updated Successfully');
	}
	else
	{
		header('Location:list_user.php?msg=Something Wrong');
	}
}

if(isset($_GET['gm_u_id']))
{
	$m_u_id=$_GET['gm_u_id'];

	$sql="UPDATE maint_user SET m_u_status='1',m_u_pay_mode='1' WHERE m_u_id='$m_u_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:user_main_list.php?msg=Maintance Status Updated Successfully');
	}
	else
	{
		header('Location:user_main_list.php?msg=Something Wrong');
	}
}
if(isset($_GET['cm_u_id']))
{
	$m_u_id=$_GET['cm_u_id'];

	$sql="UPDATE maint_user SET m_u_status='1' ,m_u_pay_mode='2' WHERE m_u_id='$m_u_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:user_main_list.php?msg=Maintance Status Updated Successfully');
	}
	else
	{
		header('Location:user_main_list.php?msg=Something Wrong');
	}
}
if(isset($_GET['ccm_u_id']))
{
	$m_u_id=$_GET['ccm_u_id'];

	$sql="UPDATE maint_user SET m_u_status='1',m_u_pay_mode='3' WHERE m_u_id='$m_u_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:user_main_list.php?msg=Maintance Status Updated Successfully');
	}
	else
	{
		header('Location:user_main_list.php?msg=Something Wrong');
	}
}
if(isset($_GET['nm_u_id']))
{
	$m_u_id=$_GET['nm_u_id'];

	$sql="UPDATE maint_user SET m_u_status='1',m_u_pay_mode='4' WHERE m_u_id='$m_u_id'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:user_main_list.php?msg=Maintance Status Updated Successfully');
	}
	else
	{
		header('Location:user_main_list.php?msg=Something Wrong');
	}
}



// Generate Maintance for month
if(isset($_GET['gsmid']))
{
 $gsmid=$_GET['gsmid'];

   $smy=$_GET['smy'];
   $paydate = date('Y-m-10', strtotime("+1 months", strtotime($smy)));


$sql="SELECT * FROM `sm_user` where u_status='1'";
$result=$conn->query($sql);
while ($row=$result->fetch_assoc()) {
	$u_id=$row['u_id'];

	$sql1="SELECT * from maint_user where sm_m_id='$gsmid' and u_id='$u_id' ";
	$result1=$conn->query($sql1);

	if($result1->num_rows > 0)
	{

	}
	else
	{
	
	$sql="INSERT INTO `maint_user`(`sm_m_id`, `u_id`, `m_u_date`, `m_u_status`, `m_u_pay_mode`) VALUES ('$gsmid','$u_id','$paydate','0','0')";


	if($conn->query($sql)===TRUE)
	{

	}
	else
	{

	}	
	}
	
}
header('Location:list_maintenance_month.php?msg=Maintance for Month Genrated Successfully');

}

if(isset($_GET['pcid']))
{
	$cid=$_GET['pcid'];

	$sql="UPDATE `sm_complaint` SET `sm_u_status`='1' WHERE sm_c_id='$cid'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:complaint_list.php?msg=complaint Status Successfully');
	}
	else
	{
		header('Location:complaint_list.php?msg=Something Wrong');
	}
}

if(isset($_GET['scid']))
{
	$cid=$_GET['scid'];

	$sql="UPDATE `sm_complaint` SET `sm_u_status`='0' WHERE sm_c_id='$cid'";

	if($conn->query($sql)=== TRUE)
	{
		header('Location:complaint_list.php?msg=complaint Status Successfully');
	}
	else
	{
		header('Location:complaint_list.php?msg=Something Wrong');
	}
}

?>