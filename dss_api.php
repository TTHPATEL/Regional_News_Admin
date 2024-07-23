<?php 
	include "database/conn.php";
class Accessmethod {
      public $status = "";
      public $msg  = "";  
   }

 function helperror()
{
	 header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("HTTP/1.1 401 unauthorized");
    header("HTTP/1.1 201 OK");

   $e = new Accessmethod();
   $e->status = "-1";
   $e->msg  = "Invalid Access Token";
   echo json_encode($e);
}

if(isset($_REQUEST['dss_app']) && !empty($_REQUEST['dss_app']))
{
	$dss_app=$_REQUEST['dss_app'];

	switch ($dss_app) {
		case 'user_login':
		if(isset($_REQUEST['u_data']))
		{
		$data=$_REQUEST['u_data'];
		user_login($data);	
		}
		else
		{
			helperror();
		}	
		break;

      case 'user_registration':
         if(isset($_REQUEST['u_data']))
         {
         $data=$_REQUEST['u_data'];
         user_registration($data);	
         }
         else
         {
            helperror();
         }	
         break;

		case 'event_list':
		event_list();
		break;

		case 'noti_list':
		noti_list();
		break;

		case 'wstaff_list':
		wstaff_list();
		break;

		case 'complaint_list':
		if(isset($_REQUEST['u_data']))
		{
		$data=$_REQUEST['u_data'];
		complaint_list($data);	
		}
		else
		{
			helperror();
		}	
		break;
		case 'add_complaint':
		if(isset($_REQUEST['u_data']))
		{
		$data=$_REQUEST['u_data'];
		add_complaint($data);	
		}
		else
		{
			helperror();
		}	
		break;

		case 'visitor_list':
		if(isset($_REQUEST['u_data']))
		{
		$data=$_REQUEST['u_data'];
		visitor_list($data);	
		}
		else
		{
			helperror();
		}	
		break;

		case 'income_list':
		income_list();
		break;

		case 'expense_list':
		expense_list();
		break;

		case 'news_list_show':
		news_list_show();
		break;

		case 'user_maintance':
		if(isset($_REQUEST['u_data']))
		{
		$data=$_REQUEST['u_data'];
		user_maintance($data);	
		}
		else
		{
			helperror();
		}	
		break;

		case 'wing_list':
		wing_list();
	      break;

	   case 'wing_list_user':
		if(isset($_REQUEST['u_data']))
		{
		$data=$_REQUEST['u_data'];
		wing_list_user($data);	
		}
		else
		{
			helperror();
		}	
		break;


      case 'news_show':
         if(isset($_REQUEST['u_data']))
         {
            $data=$_REQUEST['u_data'];
            news_show($data);
         }
         else
         {
            helperror();
         }
         break;

		case 'watchman_login':
		if(isset($_REQUEST['u_data']))
		{
		$data=$_REQUEST['u_data'];
		watchman_login($data);	
		}
		else
		{
			helperror();
		}	
		break;


		case 'add_visitor':
		if(isset($_REQUEST['u_data']))
		{
		$data=$_REQUEST['u_data'];
		add_visitor($data);	
		}
		else
		{
			helperror();
		}	
		break;
		case 'pay_maintance':
		if(isset($_REQUEST['u_data']))
		{
		$data=$_REQUEST['u_data'];
		pay_maintance($data);	
		}
		else
		{
			helperror();
		}	
		break;

		

		default:
		helperror();
		break;

	}

}
else
{
	helperror();
}




function user_login($data)
{
	class Common {
      public $status = "";
      public $msg  = "";
      public $u_id  = "";
      public $u_r_id  = "";
      public $w_name="";
      public $u_role="";
	public $w_id = "";

   public $news_id="";
      public $u_flat_no  = "";
      public $u_name  = "";
      public $u_mobile="";
      public $u_gender="";
      public $u_t_member = "";
      public $u_dob  = "";
      public $u_email  = "";
      public $u_pwd="";
      public $u_pic="";
	public $u_t_v_no  = "";
      public $u_f_v_no="";
      public $u_status="";
	public $u_c_date="";


      
   }	
    $c=new Common();   
	global $conn;
     $p=json_decode($data);

   $u_email=$p->u_email;
   $u_pwd=$p->u_pwd;

$sql="SELECT * FROM sm_user,sm_user_role,sm_wing WHERE sm_wing.w_id=sm_user.w_id and  sm_user_role.u_r_id=sm_user.u_r_id and u_email='$u_email'and u_pwd='$u_pwd'";
 
$result=$conn->query($sql);
if($result->num_rows > 0)
{
$row=$result->fetch_assoc();
if($row['u_status']=='1')
{
$c->u_id=$row['u_id'];
$c->msg="User Login Successfully";
$c->status="1";
$c->u_r_id=$row['u_r_id'];
$c->u_flat_no=$row['u_flat_no'];
$c->u_name=$row['u_name'];
$c->u_mobile=$row['u_mobile'];
$c->u_gender=$row['u_gender'];
$c->u_t_member=$row['u_t_member'];
$c->u_dob=$row['u_dob'];
$c->u_email=$row['u_email'];
$c->u_pwd=$row['u_pwd'];
$c->u_pic=$row['u_pic'];
$c->u_t_v_no=$row['u_t_v_no'];
$c->u_f_v_no=$row['u_f_v_no'];

$c->u_status=$row['u_status'];
$c->u_c_date=$row['u_c_date'];
$c->u_role=$row['u_role'];
$c->w_name=$row['w_name'];

}
else
{
 $c->msg="User is not verify by the admin";
  $c->status="0";
}

}
else
{
$c->msg="Invalid email or password";
	$c->status="0";
}


header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("HTTP/1.1 201 OK");
echo json_encode($c);
}








function user_registration($data)
{
	class Common {
      public $status = "";
      public $msg  = "";
      public $u_id  = "";
      public $u_r_id  = "";
      public $w_name="";
      public $u_role="";
	public $w_id = "";

   public $news_id="";
      public $u_flat_no  = "";
      public $u_name  = "";
      public $u_mobile="";
      public $u_gender="";
      public $u_t_member = "";
      public $u_dob  = "";
      public $u_email  = "";
      public $u_pwd="";
      public $u_pic="";
	public $u_t_v_no  = "";
      public $u_f_v_no="";
      public $u_status="";
	public $u_c_date="";


      
   }	
    $c=new Common();   
	global $conn;
     $p=json_decode($data);

   $u_name=$p->u_name;  
   $u_email=$p->u_email;
   $u_pwd=$p->u_pwd;
   $u_id  = "";


 // Check if email already exists
 $stmt = $conn->prepare('SELECT u_id FROM user WHERE u_email = ?');
 $stmt->bind_param('s', $u_email);
 $stmt->execute();
 $stmt->store_result();


 if ($stmt->num_rows > 0) {
   $c->msg = "Email already exists.";
   $c->status = "0";
   $stmt->close();
} else {
   $stmt->close();
   
   // Insert new user
   $stmt = $conn->prepare('INSERT INTO user (u_name, u_email, u_pwd) VALUES (?, ?, ?)');
   $stmt->bind_param('sss',$u_name, $u_email, $u_pwd);

   if ($stmt->execute()) {
       $c->u_id = $stmt->insert_id;
       $c->msg = "User Registered Successfully";
       $c->status = "1";
   } else {
       $c->msg = "Error in User Registration";
       $c->status = "0";
   }
   $stmt->close();
}



header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("HTTP/1.1 201 OK");
echo json_encode($c);


}










// EVENT

function event_list()
{
	class event_list {
      public $status = "";
      public $msg  = "";
      public $event_list  = "";  
     
   }
   $event_list=new event_list();

	global $conn;
	$sql="SELECT * FROM sm_event where sm_e_status='1'";
$result=$conn->query($sql);

if($result->num_rows > 0)
{
	while ($row=$result->fetch_assoc()) {
$dss_data[] = array(  
               'sm_e_id'               =>     $row["sm_e_id"],  
                'sm_e_title'          =>     $row["sm_e_title"],  
                'sm_e_desc'     =>     $row["sm_e_desc"],
             'sm_e_start_date'   =>     $row["sm_e_start_date"], 
           'sm_e_end_date'          =>     $row["sm_e_end_date"], 
             'sm_e_status'          =>     $row["sm_e_status"],   
             'sm_e_c_date'          =>     $row["sm_e_c_date"]

           );  
	
	}
	$event_list->status="1";
$event_list->msg="Event List Fetch Successfully";
$event_list->event_list=$dss_data;

}
else
{
$event_list->status="0";
$event_list->msg="No Event List  found";
$event_list->event_list=array();
}
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("HTTP/1.1 201 OK");
echo json_encode($event_list);	
}

// Notification
function noti_list()
{
	class noti_list {
      public $status = "";
      public $msg  = "";
      public $noti_list  = "";  
     
   }
   $noti_list=new noti_list();

	global $conn;
	$sql="SELECT * FROM sm_notification";
$result=$conn->query($sql);

if($result->num_rows > 0)
{
	while ($row=$result->fetch_assoc()) {
$dss_data[] = array(  
               'sm_n_id'               =>     $row["sm_n_id"],  
                'sm_n_title'          =>     $row["sm_n_title"],  
                'sm_n_detail'     =>     $row["sm_n_detail"],
             'sm_n_pic'   =>     $row["sm_n_pic"], 
             'sm_n_date'          =>     $row["sm_n_date"]

           );  
	
	}
	$noti_list->status="1";
$noti_list->msg="Notification List Fetch Successfully";
$noti_list->noti_list=$dss_data;

}
else
{
$noti_list->status="0";
$noti_list->msg="No Notification List  found";
$noti_list->noti_list=array();

}
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("HTTP/1.1 201 OK");
echo json_encode($noti_list);	
}

// worker staff
function wstaff_list()
{
	class wstaff_list {
      public $status = "";
      public $msg  = "";
      public $wstaff_list  = "";  
     
   }
   $wstaff_list=new wstaff_list();

	global $conn;
	$sql="SELECT * FROM sm_wk_staff where w_s_status='1'";
$result=$conn->query($sql);

if($result->num_rows > 0)
{
	while ($row=$result->fetch_assoc()) {
$dss_data[] = array(  
               's_w_s_id'               =>     $row["s_w_s_id"],  
                'w_s_name'          =>     $row["w_s_name"],  
                'w_s_address'     =>     $row["w_s_address"],
             'w_s_contact'   =>     $row["w_s_contact"], 
           'w_email_id'          =>     $row["w_email_id"], 
             'w_s_pic'          =>     $row["w_s_pic"], 
             'w_s_status'   =>     $row["w_s_status"], 
           'w_s_salary'          =>     $row["w_s_salary"], 
             'w_s_c_date'          =>     $row["w_s_c_date"], 
             'w_s_role'          =>     $row["w_s_role"]

           );  

	}
	$wstaff_list->status="1";
$wstaff_list->msg="Worker Staff List Fetch Successfully";
$wstaff_list->wstaff_list=$dss_data;

}
else
{
$wstaff_list->status="0";
$wstaff_list->msg="No Worker Staff List  found";
$wstaff_list->wstaff_list=array();

}
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("HTTP/1.1 201 OK");
echo json_encode($wstaff_list);	
}

// complaint list

function complaint_list($u_id)
{
	class complaint_list {
      public $status = "";
      public $msg  = "";
      public $complaint_list  = "";  
     
   }
   $complaint_list=new complaint_list();

	global $conn;
	$sql="SELECT * FROM sm_complaint where sm_u_id='$u_id'";
$result=$conn->query($sql);

if($result->num_rows > 0)
{
	while ($row=$result->fetch_assoc()) {
$dss_data[] = array(  
               'sm_c_id'               =>     $row["sm_c_id"],  
                'sm_u_id'          =>     $row["sm_u_id"],  
                'sm_u_title'     =>     $row["sm_u_title"],
             'sm_u_desc'   =>     $row["sm_u_desc"], 
           'sm_u_c_type'          =>     $row["sm_u_c_type"], 
             'sm_u_status'          =>     $row["sm_u_status"], 
             'sm_u_r_date'   =>     $row["sm_u_r_date"], 
             'sm_u_c_date'          =>     $row["sm_u_c_date"]

           );  

	}
	$complaint_list->status="1";
$complaint_list->msg="Complaint List Fetch Successfully";
$complaint_list->complaint_list=$dss_data;

}
else
{
$complaint_list->status="0";
$complaint_list->msg="No Complaint List  found";
$complaint_list->complaint_list=array();

}
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("HTTP/1.1 201 OK");
echo json_encode($complaint_list);	
}

function add_complaint($data)
{
	class Common {
      public $status = "";
      public $msg  = "";
    
      
   }
   date_default_timezone_set("Asia/Kolkata");
	$now= date('Y-m-d');
	
    $c=new Common();   
	global $conn;
     $p=json_decode($data);

   $sm_u_id=$p->sm_u_id;
   $sm_u_title=$p->sm_u_title;
   $sm_u_desc=$p->sm_u_desc;
   $sm_u_c_type=$p->sm_u_c_type;


$sql="INSERT INTO `sm_complaint`(`sm_u_id`, `sm_u_title`, `sm_u_desc`, `sm_u_c_type`, `sm_u_status`, `sm_u_r_date`, `sm_u_c_date`) VALUES ('$sm_u_id','$sm_u_title','$sm_u_desc','$sm_u_c_type','0','$now','$now')";
 
if($conn->query($sql)===TRUE)
{

 $c->msg="Complaint Register Successfully";
  $c->status="1";
}


else
{
$c->msg="Error In Complaint Register";
	$c->status="0";
}


header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("HTTP/1.1 201 OK");
echo json_encode($c);
}

//Visitor

function visitor_list($u_id)
{
	class visitor_list {
      public $status = "";
      public $msg  = "";
      public $visitor_list  = "";  
     
   }
   $visitor_list=new visitor_list();

	global $conn;
	$sql="SELECT * FROM sm_visitor where u_id='$u_id'";
$result=$conn->query($sql);

if($result->num_rows > 0)
{
	while ($row=$result->fetch_assoc()) {
$dss_data[] = array(  
               'sm_v_id'               =>     $row["sm_v_id"],  
                'sm_v_name'          =>     $row["sm_v_name"],  
                'sm_v_type'     =>     $row["sm_v_type"],
             'sm_v_contact'   =>     $row["sm_v_contact"], 
           'sm_v_guardname'          =>     $row["sm_v_guardname"], 
             'u_id'          =>     $row["u_id"], 
             'sm_v_member'   =>     $row["sm_v_member"], 
             'sm_v_time'          =>     $row["sm_v_time"],
             'sm_v_status'   =>     $row["sm_v_status"], 
             'sm_v_c_date'          =>     $row["sm_v_c_date"]

           );  

	}
	$visitor_list->status="1";
$visitor_list->msg="Visitor List Fetch Successfully";
$visitor_list->visitor_list=$dss_data;

}
else
{
$visitor_list->status="0";
$visitor_list->msg="No Visitor List  found";
$visitor_list->visitor_list=array();

}
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("HTTP/1.1 201 OK");
echo json_encode($visitor_list);	
}

// income

function income_list()
{
	class income_list {
      public $status = "";
      public $msg  = "";
      public $income_list  = "";  
     
   }
   $income_list=new income_list();

	global $conn;
	$sql="SELECT * FROM extra_income";
$result=$conn->query($sql);

if($result->num_rows > 0)
{
	while ($row=$result->fetch_assoc()) {
$dss_data[] = array(  
               'e_i_id'               =>     $row["e_i_id"],  
                'e_i_title'          =>     $row["e_i_title"],  
                'e_i_desc'     =>     $row["e_i_desc"],
             'e_i_amount'   =>     $row["e_i_amount"], 
             'e_i_c_date'          =>     $row["e_i_c_date"]

           );  
	}
	$income_list->status="1";
$income_list->msg="Income List Fetch Successfully";
$income_list->income_list=$dss_data;

}
else
{
$income_list->status="0";
$income_list->msg="No Income List  found";
$income_list->income_list=array();

}
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("HTTP/1.1 201 OK");
echo json_encode($income_list);
}

// expense

function expense_list()
{
	class expense_list {
      public $status = "";
      public $msg  = "";
      public $expense_list  = "";  
     
   }
   $expense_list=new expense_list();

	global $conn;
	$sql="SELECT * FROM expense_type,sm_expense_detail where sm_expense_detail.e_t_id=expense_type.e_t_id";
$result=$conn->query($sql);

if($result->num_rows > 0)
{
	while ($row=$result->fetch_assoc()) {
$dss_data[] = array(  
             'e_t_name'               =>     $row["e_t_name"],  
             'e_t_detail'          =>     $row["e_t_detail"],  
             'sm_e_d_id'     =>     $row["sm_e_d_id"],
             'e_name'   =>     $row["e_name"], 
             'sm_e_amount'          =>     $row["sm_e_amount"],  
             'sm_e_desc'     =>     $row["sm_e_desc"],
             'sm_e_c_date'          =>     $row["sm_e_c_date"]

           );  

	}
	$expense_list->status="1";
$expense_list->msg="Expense List Fetch Successfully";
$expense_list->expense_list=$dss_data;

}
else
{
$expense_list->status="0";
$expense_list->msg="No Expense List  found";
$expense_list->expense_list=array();

}
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("HTTP/1.1 201 OK");
echo json_encode($expense_list);
}



// News List 
function news_list_show()
{
    // Define a class to structure the response data
    class news_list_show {
        public $status = "";             // Property to store operation status
        public $msg  = "";               // Property to store operation message
        public $news_list_show  = "";   // Property to store maintenance list data
    }
    
    // Instantiate the class to create an object for response handling
    $news_list_show = new news_list_show();

    // Access the global database connection object
    global $conn;
    
    $sql = "SELECT * FROM news_table WHERE news_status='1' ORDER BY news_datetime DESC";
    $result = $conn->query($sql);   // Execute the SQL query

    // Check if there are any rows returned
    if ($result->num_rows > 0) {
        // Initialize an array to store fetched data
        $dss_data = array();

        // Loop through each row of the result set
        while ($row = $result->fetch_assoc()) {
            // Append fetched data to $dss_data array in specified format
            $dss_data[] = array(  
               'news_id'       => $row["news_id"],     
               'news_headline'        => $row["news_headline"],      
               'news_des_1'   => $row["news_des_1"],   
               'news_des_2'    => $row["news_des_2"],  
               'keyword'      => $row["keyword"],  
               'news_imgurl'     => $row["news_imgurl"],    
               'news_datetime'   => $row["news_datetime"],  
               'news_status'   => $row["news_status"]    
      
           );  
        }

        // If data found, update response object properties
        $news_list_show->status = "1";   // Set status to indicate success
        $news_list_show->msg = "News List Fetch Successfully";   // Success message
        $news_list_show->news_list_show = $dss_data;   // Assign fetched data to response object

    } else {
        // If no data found, update response object properties accordingly
        $news_list_show->status = "0";   // Set status to indicate failure or no data
        $news_list_show->msg = "No News List found";   // Failure message
        $news_list_show->news_list_show = array();   // Empty array for no data case
    }

    // Set HTTP headers for response
    header("Access-Control-Allow-Origin: *");   // Allow cross-origin requests
    header("Content-Type: application/json; charset=UTF-8");   // JSON content type
    header("HTTP/1.1 201 OK");   // HTTP status code 201 (Created)

    // Encode response object to JSON format and output
    echo json_encode($news_list_show);
}


function news_show($news_id)
{
class news_show {
      public $status = "";
      public $msg  = "";
      public $news_show  = "";  
     
   }
   $news_show=new news_show();

	global $conn;
	$sql="SELECT * FROM news_table where news_id='$news_id'";

$result=$conn->query($sql);

if($result->num_rows > 0)
{
	while ($row=$result->fetch_assoc()) {
      $dss_data[] = array(  
         'news_id'       => $row["news_id"],     
         'news_headline'        => $row["news_headline"],      
         'news_des_1'   => $row["news_des_1"],   
         'news_des_2'    => $row["news_des_2"],  
         'keyword'      => $row["keyword"],  
         'news_imgurl'     => $row["news_imgurl"],    
         'news_datetime'   => $row["news_datetime"],  
         'news_status'   => $row["news_status"]    

     );  
            
	}
	$news_show->status="1";
$news_show->msg="Particular News List Fetch Successfully";
$news_show->news_show=$dss_data;

}
else
{
$news_show->status="0";
$news_show->msg="No Particular News  found";
$news_show->news_show=array();

}
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("HTTP/1.1 201 OK");
echo json_encode($news_show);
}

// User Maintance



function user_maintance($data)
{
class user_maintance {
      public $status = "";
      public $msg  = "";
      public $m_u_id  = "";
      public $sm_m_id  = "";
      public $u_id="";
      public $m_u_date="";
	public $m_u_status = "";
      public $m_u_pay_mode  = "";
     
     }	
    
    $user_maintance=new user_maintance();   
	global $conn;
     $p=json_decode($data);

   $sm_m_id=$p->sm_m_id;
   $u_id=$p->u_id;

$sql="SELECT * FROM maint_user WHERE sm_m_id='$sm_m_id' and u_id='$u_id' ";
 
$result=$conn->query($sql);
if($result->num_rows > 0)
{
$row=$result->fetch_assoc();

$user_maintance->m_u_id=$row['m_u_id'];
$user_maintance->msg="Maintance Fetch Successfully";
$user_maintance->status="1";
$user_maintance->sm_m_id=$row['sm_m_id'];
$user_maintance->u_id=$row['u_id'];
$user_maintance->m_u_date=$row['m_u_date'];
$user_maintance->m_u_status=$row['m_u_status'];
$user_maintance->m_u_pay_mode=$row['m_u_pay_mode'];

}
else
{
$user_maintance->msg="No Maintance Found";
$user_maintance->status="0";
}


header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("HTTP/1.1 201 OK");
echo json_encode($user_maintance);
}

// wing list

function wing_list()
{
class wing_list {
      public $status = "";
      public $msg  = "";
      public $wing_list  = "";  
     
   }
   $wing_list=new wing_list();

	global $conn;
	$sql="SELECT * FROM sm_wing where w_status='1'";
$result=$conn->query($sql);

if($result->num_rows > 0)
{
	while ($row=$result->fetch_assoc()) {
$dss_data[] = array(  
             'w_id'               =>     $row["w_id"],  
             'w_name'          =>     $row["w_name"],  
             'w_status'     =>     $row["w_status"],
             'w_c_date'          =>     $row["w_c_date"]

           );  
	}
	$wing_list->status="1";
$wing_list->msg="Wing List Fetch Successfully";
$wing_list->wing_list=$dss_data;

}
else
{
$wing_list->status="0";
$wing_list->msg="No Wing List  found";
$wing_list->wing_list=array();

}
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("HTTP/1.1 201 OK");
echo json_encode($wing_list);
}

function wing_list_user($w_id)
{
class wing_list_user {
      public $status = "";
      public $msg  = "";
      public $wing_list_user  = "";  
     
   }
   $wing_list_user=new wing_list_user();

	global $conn;
	$sql="SELECT * FROM sm_user,sm_user_role where sm_user_role.u_r_id=sm_user.u_r_id and  w_id='$w_id'";
$result=$conn->query($sql);

if($result->num_rows > 0)
{
	while ($row=$result->fetch_assoc()) {
$dss_data[] = array(  
             'u_flat_no'               =>     $row["u_flat_no"],  
             'u_role'          =>     $row["u_role"],  
             'u_name'     =>     $row["u_name"],
             'u_id' => $row['u_id'],
             'u_mobile'          =>     $row["u_mobile"]
           );  
	}
	$wing_list_user->status="1";
$wing_list_user->msg="Member List Fetch Successfully";
$wing_list_user->wing_list_user=$dss_data;

}
else
{
$wing_list_user->status="0";
$wing_list_user->msg="No Member List  found";
$wing_list_user->wing_list_user=array();

}
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("HTTP/1.1 201 OK");
echo json_encode($wing_list_user);
}

function watchman_login($data)
{

class Common {
      public $status = "";
      public $msg  = "";
      public $w_id  = "";
      public $w_name  = "";
    
      
   }	
    $c=new Common();   
	global $conn;
    
$sql="SELECT * FROM sm_wk_staff WHERE w_s_contact='$data' ";
 // and w_s_role='watchman'
$result=$conn->query($sql);
if($result->num_rows > 0)
{
$row=$result->fetch_assoc();
if($row['w_s_status']=='1')
{
$c->s_w_s_id=$row['s_w_s_id'];
$c->w_name=$row['w_s_name'];

$c->msg="Watchman Login Successfully";
$c->status="1";


}
else
{
 $c->msg="Watchman is not verify by the admin";
  $c->status="0";
}

}
else
{
$c->msg="Invalid Mobile Number";
	$c->status="0";
}


header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("HTTP/1.1 201 OK");
echo json_encode($c);

}

function add_visitor($data)
{
	class Common {
      public $status = "";
      public $msg  = "";
    
      
   }
   date_default_timezone_set("Asia/Kolkata");
	$now= date('Y-m-d');
	
    $c=new Common();   
	global $conn;
     $p=json_decode($data);

   $sm_v_name=$p->sm_v_name;
   $sm_v_type=$p->sm_v_type;
   $sm_v_contact=$p->sm_v_contact;
   $sm_v_guardname=$p->sm_v_guardname;
   $u_id=$p->u_id;
   $sm_v_member=$p->sm_v_member;
   $sm_v_time=$p->sm_v_time;


$sql="INSERT INTO `sm_visitor`(`sm_v_name`, `sm_v_type`, `sm_v_contact`, `sm_v_guardname`, `u_id`, `sm_v_member`, `sm_v_time`, `sm_v_status`, `sm_v_c_date`) VALUES ('$sm_v_name','$sm_v_type','$sm_v_contact','$sm_v_guardname','$u_id','$sm_v_member','$sm_v_time','1','$now')";
 
if($conn->query($sql)===TRUE)
{

 $c->msg="Visitor Add Successfully";
  $c->status="1";
}


else
{
$c->msg="Error In Visitor Add";
	$c->status="0";
}


header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("HTTP/1.1 201 OK");
echo json_encode($c);	
}

function pay_maintance($data)
{
	class Common {
      public $status = "";
      public $msg  = "";
    
      
   }
   date_default_timezone_set("Asia/Kolkata");
	$now= date('Y-m-d');
	
    $c=new Common();   
	global $conn;
     $p=json_decode($data);

   $m_u_id=$p->m_u_id;
   $m_u_pay_mode=$p->m_u_pay_mode;
   


$sql="UPDATE maint_user SET m_u_status='1',m_u_pay_mode='$m_u_pay_mode' WHERE m_u_id='$m_u_id'";
 
if($conn->query($sql)===TRUE)
{

 $c->msg="Maintance Pay  Successfully";
  $c->status="1";
}


else
{
$c->msg="Error In Maintance Pay";
	$c->status="0";
}


header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("HTTP/1.1 201 OK");
echo json_encode($c);	
}


?>