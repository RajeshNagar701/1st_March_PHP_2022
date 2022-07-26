<?php

include_once('../admin/model.php');

class control extends model
{
	function __construct()
	{
		session_start();
		model::__construct();
		
		$path=$_SERVER['PATH_INFO']; //CONTROL.PHP PATH
		
		switch($path)
		{
			case '/index':
			include_once('index.php');
			break;
			
			case '/about':
			include_once('about.php');
			break;
			
			case '/checkout':
			include_once('checkout.php');
			break;
			
			case '/contact':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$email=$_REQUEST['email'];
				$msg=$_REQUEST['msg'];
				date_default_timezone_set('asia/calcutta');
				$cur_date_time=date("Y-m-d H:i:s");
				
				$arr=array("name"=>$name,
				"email"=>$email,
				"msg"=>$msg,
				"created_dt"=>$cur_date_time,
				"updated_dt"=>$cur_date_time);
				
				$run=$this->insert('contact',$arr);
				if($run)
				{
					echo "<script>
					
					alert('Contact success');
					window.location='contact';
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
			include_once('contact.php');
			break;
			
			case '/feedback':
			include_once('feedback.php');
			break;
			
			case '/register':
			$country_arr=$this->select('country');
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$unm=$_REQUEST['unm'];
				$pass=$_REQUEST['pass'];
				$enc_pass=md5($pass); // encripted pass
				$gen=$_REQUEST['gen'];
				
				$languages_arr=$_REQUEST['languages'];
				$languages=implode(",",$languages_arr); // convert arr to string
				$cid=$_REQUEST['cid'];
				$img=$_FILES['img']['name'];
				$path='../admin/upload/user/'.$img;
				$dup_img=$_FILES['img']['tmp_name'];
				move_uploaded_file($dup_img,$path);
				
				date_default_timezone_set('asia/calcutta');
				$cur_date_time=date("Y-m-d H:i:s");
				
				$arr=array("name"=>$name,
				"unm"=>$unm,
				"pass"=>$enc_pass,
				"gen"=>$gen,
				"languages"=>$languages,
				"cid"=>$cid,
				"img"=>$img,
				"created_dt"=>$cur_date_time,
				"updated_dt"=>$cur_date_time);
				
				$run=$this->insert('user',$arr);
				if($run)
				{
					echo "<script>
					
					alert('User Register success');
					window.location='register';
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
			
			include_once('register.php');
			break;
			
			case '/login':
			if(isset($_REQUEST['submit']))
			{
				$unm=$_REQUEST['unm'];
				$pass=$_REQUEST['pass'];
				$enc_pass=md5($pass); 
				
				$where=array("unm"=>$unm,"pass"=>$enc_pass);
				$res=$this->select_where('user',$where);
				$chk=$res->num_rows; // check cond by row and give ans in true or false
				if($chk==1)  // 1 means true
				{
					$fetch=$res->fetch_object();
					$status=$fetch->status;
					
					if($status=="Unblock")
					{
						$_SESSION['user_id']=$fetch->user_id;
						$_SESSION['name']=$fetch->name;
						echo "<script>
						alert('Login success');
						window.location='index';
						</script>";
					}
					else
					{
						echo "<script>
						alert('Login Failed due to Admin Blocked ');
						window.location='index';
						</script>";
					}
					
				}
				else
				{
					echo "<script>
					alert('Login Failed due to wrong credencial');
					window.location='login';
					</script>";
				}
			}
			include_once('login.php');
			break;
			
			
			case '/logout':
			
			unset($_SESSION['user_id']);
			unset($_SESSION['name']);
			echo "<script>
			alert('Logout success');
			window.location='login';
			</script>";
			
			break;
			
			case '/profile':
			$user_id=$_SESSION['user_id'];// user_id
			$where=array("user_id"=>$user_id);
			$res=$this->select_where('user',$where);
			$fetch=$res->fetch_object();
			include_once('profile.php');
			break;
			
			case '/edit_user':
			$country_arr=$this->select('country');
			if(isset($_REQUEST['btn_user_id']))
			{
				$user_id=$_REQUEST['btn_user_id'];
				$where=array("user_id"=>$user_id);
				$res=$this->select_where('user',$where);
				$fetch=$res->fetch_object();	
				
				$old_img=$fetch->img;
				if(isset($_REQUEST['update']))
				{
					$name=$_REQUEST['name'];
					$unm=$_REQUEST['unm'];
					$gen=$_REQUEST['gen'];
					$languages_arr=$_REQUEST['languages'];
					$languages=implode(",",$languages_arr); // convert arr to string
					$cid=$_REQUEST['cid'];
					
					if($_FILES['img']['size']>0)
					{
						$img=$_FILES['img']['name'];
						$path='../admin/upload/user/'.$img;
						$dup_img=$_FILES['img']['tmp_name'];
						move_uploaded_file($dup_img,$path);
						
						date_default_timezone_set('asia/calcutta');
						$cur_date_time=date("Y-m-d H:i:s");
						
						$arr=array("name"=>$name,
						"unm"=>$unm,
						"gen"=>$gen,
						"languages"=>$languages,
						"cid"=>$cid,
						"img"=>$img,
						"updated_dt"=>$cur_date_time);
						
						$res=$this->update_where('user',$arr,$where);
						if($res)
						{
							unlink('../admin/upload/user/'.$old_img);
							echo "<script>
							alert('Update success');
							window.location='profile';
							</script>";
						}
					}
					else
					{
						date_default_timezone_set('asia/calcutta');
						$cur_date_time=date("Y-m-d H:i:s");
						
						$arr=array("name"=>$name,
						"unm"=>$unm,
						"gen"=>$gen,
						"languages"=>$languages,
						"cid"=>$cid,
						"updated_dt"=>$cur_date_time);
						
						$res=$this->update_where('user',$arr,$where);
						if($res)
						{
							echo "<script>
							alert('Update success');
							window.location='profile';
							</script>";
						}
						
					}
					
					
					
					
				}
				
				
			}
			include_once('edit_user.php');
			break;
			
			
			
			
			
			case '/products':
			include_once('products.php');
			break;
			
			case '/single':
			include_once('single.php');
			break;
			
			
			default :
			echo "<h1 style='text-align:center; color:red'>Page Not Found</h1>";
			break;
		}
		
	}
}

$obj=new control;
?>
