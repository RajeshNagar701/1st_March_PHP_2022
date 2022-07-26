<?php
include_once('model.php');  // step 1 : model load
require 'phpmailer/PHPMailerAutoload.php';

class control extends model  // step 2 extend model class in control class
{ 
	function __construct()
	{
		session_start();
		model::__construct(); // step 3  call model __construct() in control class
		
		$path=$_SERVER['PATH_INFO']; 	// GET URL PATH 
		
		switch($path)
		{
			case '/index':
			if(isset($_REQUEST['submit']))
			{
				$unm=$_REQUEST['unm'];
				$pass=$_REQUEST['pass'];
				$enc_pass=md5($pass); 
				
				$where=array("unm"=>$unm,"pass"=>$enc_pass);
					
				$res=$this->select_where('admin',$where);
				
				$chk=$res->num_rows; // check cond by row and give ans in true or false
				if($chk==1)  // 1 means true
				{
					$fetch=$res->fetch_object();
					$_SESSION['aid']=$fetch->aid;
					$_SESSION['adminname']=$fetch->unm;
					echo "<script>
					alert('Login success');
					window.location='dashboard';
					</script>";
				}
				else
				{
					echo "<script>
					alert('Login Failed');
					window.location='index';
					</script>";
				}
			}
			include_once('index.php');
			break;
			
			case '/admin_logout':
			
			unset($_SESSION['aid']);
			unset($_SESSION['unm']);
			echo "<script>
			alert('Logout success');
			window.location='index';
			</script>";
			
			break;
			
			
			case '/dashboard':
			include_once('dashboard.php');
			break;
			
			case '/add_emp':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$unm=$_REQUEST['unm'];
				$pass=$_REQUEST['pass'];
				$enc_pass=md5($pass); // encripted pass
				$gen=$_REQUEST['gen'];
				
				$languages_arr=$_REQUEST['languages'];
				$languages=implode(",",$languages_arr); // convert arr to string
				
				$img=$_FILES['img']['name'];
				$path='upload/employee/'.$img;
				$dup_img=$_FILES['img']['tmp_name'];
				move_uploaded_file($dup_img,$path);
				
				date_default_timezone_set('asia/calcutta');
				$cur_date_time=date("Y-m-d H:i:s");
				
				$arr=array("name"=>$name,
				"unm"=>$unm,
				"pass"=>$enc_pass,
				"gen"=>$gen,
				"languages"=>$languages,
				"img"=>$img,
				"created_dt"=>$cur_date_time,
				"updated_dt"=>$cur_date_time);
				
				$run=$this->insert('employee',$arr);
				if($run)
				{
					echo "<script>
					
					alert('Employee Add success');
					window.location='add_emp';
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
			
			
			include_once('add_emp.php');
			break;
			
			case '/manage_emp':
			$emp_arr=$this->select('employee');
			include_once('manage_emp.php');
			break;
			
			
			
			case '/add_cat':
			if(isset($_REQUEST['submit']))
			{
				$cate_name=$_REQUEST['cate_name'];
				$cate_img=$_FILES['cate_img']['name'];
				$path='upload/categories/'.$cate_img;
				$dup_img=$_FILES['cate_img']['tmp_name'];
				move_uploaded_file($dup_img,$path);
				
				date_default_timezone_set('asia/calcutta');
				$cur_date_time=date("Y-m-d H:i:s");
				
				$arr=array("cate_name"=>$cate_name,
				"cate_img"=>$cate_img,
				"created_dt"=>$cur_date_time,
				"updated_dt"=>$cur_date_time);
				
				$run=$this->insert('categories',$arr);
				if($run)
				{
					echo "<script>
					
					alert('categories Add success');
					window.location='add_cat';
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
			
			
			include_once('add_cat.php');
			break;
			
			case '/manage_cat':
			$cat_arr=$this->select('categories');
			include_once('manage_cat.php');
			break;
			
			
			case '/manage_contact':
			$contact_arr=$this->select('contact');
			include_once('manage_contact.php');
			break;
			
			case '/reply_contact':
			if(isset($_REQUEST['reply_contact_id']))
			{
				$contact_id=$_REQUEST['reply_contact_id'];
				$where=array("contact_id"=>$contact_id);
				$res=$this->select_where('contact',$where);
				$fetch=$res->fetch_object();
				if(isset($_REQUEST['submit']))
				{
					$email=$_REQUEST['email'];
					$msg=$_REQUEST["msg"];
					
					$mail = new PHPMailer;
					$mail->isSMTP();
					$mail->Host = 'smtp.gmail.com';
					$mail->Port = 587;
					$mail->SMTPSecure = 'tls';
					$mail->SMTPAuth = true;
					$mail->Username = 'vpppn2111@gmail.com';// enter your mail
					$mail->Password = 'Csbi3701@!@';// enter pass
					$mail->setFrom('vpppn2111@gmail.com', 'Chirag');  // Enter display email & name
					$mail->addReplyTo('vpppn2111@gmail.com', 'Chirag');  // enter reply to mail & name
					
					$mail->addAddress($email); // pas to email
					$mail->Subject = 'Welcome to Chirag Company';
					$mail->msgHTML($msg);

					if (!$mail->send()) {
					   $error = "Mailer Error: " . $mail->ErrorInfo;
						?><script>alert('<?php echo $error ?>');</script><?php
					} 
					else 
					{	
					   	echo "<script>
						alert('Reply Success');
						window.location='manage_contact';
						</script>";
					}		
					
				}
				
			}
			include_once('reply_contact.php');
			break;
			
			
			case '/manage_user':
			$user_arr=$this->select('user');
			include_once('manage_user.php');
			break;
			
			case '/delete':
			if(isset($_REQUEST['btn_contact_id']))
			{
				$contact_id=$_REQUEST['btn_contact_id'];
				$where=array("contact_id"=>$contact_id);
				$res=$this->delete_where('contact',$where);
				if($res)
				{
					echo "<script>
					alert('Contact Delete success');
					window.location='manage_contact';
					</script>";
				}
			}
			
			if(isset($_REQUEST['btn_user_id']))
			{
				$user_id=$_REQUEST['btn_user_id'];
				$where=array("user_id"=>$user_id);
				
				$run=$this->select_where("user",$where);
				$fetch=$run->fetch_object();
				$img_name=$fetch->img;
				
				$res=$this->delete_where('user',$where);
				if($res)
				{
					unlink('upload/user/'.$img_name); // delete image from path
					echo "<script>
					alert('User Delete success');
					window.location='manage_user';
					</script>";
				}
			}
			
			break;
			
			case '/status':
			if(isset($_REQUEST['status_user_id']))
			{
				$user_id=$_REQUEST['status_user_id'];
				$where=array("user_id"=>$user_id);
				$run=$this->select_where("user",$where);
				$fetch=$run->fetch_object();
				$status=$fetch->status;
				
				if($status=="Block")
				{
					$arr=array("status"=>"Unblock");
					$res=$this->update_where('user',$arr,$where);
					if($res)
					{
						echo "<script>
						alert('User Unblock success');
						window.location='manage_user';
						</script>";
					}
				}
				else
				{
					$arr=array("status"=>"Block");
					$res=$this->update_where('user',$arr,$where);
					if($res)
					{
						unset($_SESSION['user_id']);
						unset($_SESSION['name']);
						
						echo "<script>
						alert('User Block success');
						window.location='manage_user';
						</script>";
						
						
					}
				}
			}
			
			break;
			
			
			default:
			echo "Page Not Found";
			break;
			
		}
	}
	
}
$obj=new control;

?>