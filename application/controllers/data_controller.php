<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_controller extends CI_Controller {

	function __construct() {
		parent::__construct();
		if($this->session->userdata('loginStatus'))
		{
			if($this->session->userdata('role') == "ADMIN"){
					
	
			}else {
				if($this->session->userdata('role') == "MANAGER"){
	
	
				}else {
					redirect('cpanel');
				}
	
			}
	
	
	
			//User is correctly logged in
		} else {
			//Session is not present so logout the user and show login screen
			redirect('cpanel');
		}
	}
	
	function index(){
		if($this->session->userdata('loginStatus'))
		{
			if($this->session->userdata('role') == "ADMIN"){
							}else {
				if($this->session->userdata('role') == "MANAGER"){
	}else {
					redirect('cpanel');
				}
			}
	
	
	
			//User is correctly logged in
		} else {
			//Session is not present so logout the user and show login screen
			redirect('cpanel');
		}
	}
	public function passwordReset()
	{
		$id=$this->session->userdata('id');
		$email=$this->session->userdata('user');
		$keycode=$this->generateRandomString(100);
		
		$sql1="UPDATE `user_login` SET
		`code`='$keycode'
		WHERE id='$id'";
		
		$query1 = $this->db->query($sql1);
		if($query1){
		
		$this->load->library('email');
			
		$this->email->from('no-reply@singjufestival.com','no-reply@singjufestival.com');
		
		$this->email->to($email);
		$this->email->subject('Password reset request!');
		
		$msg='Please click the link to reset your password.   '.base_url().'cpanel/password?q='.$keycode;
		$this->email->message($msg);
	
		$this->email->send();
		
		$data['msg']="Password reset link sent to your email!";
		$this->load->view('admin/msg',$data);
		}
		
		
	}
	public function LoadEvent()
	{
		$this->load->view('components/event_list');
	}
	public function AddEvent()
	{
	//	$s_time =date("H:i", strtotime($_GET ['s_time']));
	//	$e_time = date("H:i", strtotime($_GET ['e_time']));
		$e_name=trim($_GET['e_name']);

		
		
		if($e_name!="")
		{
			$sql1 = "INSERT INTO `event`(`evnt_name`) 
					VALUES ('$e_name')";
		
			$query1 = $this->db->query($sql1);
			if($query1){
			
				$this->output->set_output(json_encode(array("status" => "success")));
			}else{
			
				$this->output->set_output(json_encode(array("status" => "fail")));
			}
		}else{
			$this->output->set_output(json_encode(array("status" => "empty")));
			}
	}
	
	public function EditEvent()
	{
		$a_id=trim($_GET['e_id']);
	
		$sql="SELECT `evnt_id`, `evnt_name`, `evnt_img` FROM `event`
		where evnt_id='$a_id'";
		$query = $this->db->query($sql);
	
		if($query)
		{
			while($result=mysql_fetch_array($query->result_id)){
	
				$data['evnt_name']=$result['evnt_name'];
					
			}
		}
	
		$this->load->view('components/edit_event',$data);
	}

	public function UpdateEvent()
	{
		$e_id=trim($_GET['e_id']);
		$e_name=trim($_GET['e_name']);
	
		
		
		if($e_name!="")
		{
		
			$sql1 = "UPDATE `event` SET 
					
					`evnt_name`='$e_name'
					
					WHERE evnt_id='$e_id'
			";
	
			$query1 = $this->db->query($sql1);
			if($query1){
					
				$this->output->set_output(json_encode(array("status" => "success")));
			}else{
					
				$this->output->set_output(json_encode(array("status" => "fail")));
			}
		}else{
			$this->output->set_output(json_encode(array("status" => "empty")));
		}
	}
	
	public function RemoveEvent()
	{
		$a_id=trim($_GET['event_id']);
		
		if($a_id!="")
		{
			$sql1 = "DELETE FROM `event` WHERE evnt_id='$a_id'";
	
			$query1 = $this->db->query($sql1);
			if($query1){
					
				$this->output->set_output(json_encode(array("status" => "success")));
			}else{
					
				$this->output->set_output(json_encode(array("status" => "fail")));
			}
		}else{
			$this->output->set_output(json_encode(array("status" => "empty")));
		}
	}
	
	
	

	public function LogoUpload()
	{
		
		$attachment_file=$_FILES["attachment_file"];
		$fileName=$_POST["filename"];
		$spon_id=$_POST["spon_id"];
		$output_dir = "images/logo/";
		$fileName = $spon_id.'_'.$fileName;
		$img_url=base_url().$output_dir.$fileName;
		move_uploaded_file($_FILES["attachment_file"]["tmp_name"],$output_dir.$fileName);
		 
		$sql="UPDATE sponser
		set img='$img_url'
		WHERE
		spon_id='$spon_id'
		";
		$query = $this->db->query($sql);
		echo "File uploaded successfully";
	}
	public function BackgroundUpload()
	{
	
		$attachment_file=$_FILES["attachment_file"];
		$fileName=$_POST["filename"];
		$event_id=$_POST["event_id"];
		$output_dir = "img/gallery/";
		$fileName = $event_id.'_'.$fileName;
		$img_url=base_url().$output_dir.$fileName;
		move_uploaded_file($_FILES["attachment_file"]["tmp_name"],$output_dir.$fileName);
			
		$sql="UPDATE event
		set evnt_img='$img_url'
		WHERE
		evnt_id='$event_id'
		";
		$query = $this->db->query($sql);
		echo "File uploaded successfully";
	}
	//dhane
	
	public function Loaduser()
	{
		$this->load->view('components/userlist');
	}
	public function Adduser()
	{
		$email=trim($_GET['email']);
		$role=trim($_GET['role']);
		$status=trim($_GET['status']);
		if($email!="" &&  $role!="" && $status!="")
		{
			$password = $this->generateRandomString(6);
			$sql1 = "INSERT INTO `user_login`( `email`,`password`, `role`, `status`)
			VALUES
			('$email','$password','$role','$status')";
	
			$query1 = $this->db->query($sql1);
			if($query1){
					$this->load->library('email');
							
						$this->email->from('no-reply@singjufestival.com','no-reply@singjufestival.com');
						
						$this->email->to($email);
						$this->email->subject('User login details');
						
						$data['user']=$email;
						$data['pass']=$password;
						$msg = $this->load->view('email_templates/confirmation_email',$data,TRUE);
						$this->email->message($msg);
						$this->email->set_mailtype("html");
						$this->email->send();
					
				$this->output->set_output(json_encode(array("status" => "success")));
			}else{
					
				$this->output->set_output(json_encode(array("status" => "fail")));
			}
		}else{
			$this->output->set_output(json_encode(array("status" => "empty")));
		}
	}
	public function Edituser()
	{
		$id=trim($_GET['id']);
	
		$sql="SELECT `id`, `email`, `password`, `role`, `status` FROM `user_login` WHERE  id='$id'";
		$query = $this->db->query($sql);
	
		if($query)
		{
			while($result=mysql_fetch_array($query->result_id)){
	
				$data['email']=$result['email'];
				$data['role']=$result['role'];
				$data['status']=$result['status'];
			}
		}
	
		$this->load->view('components/edituser',$data);
	}
	public function UpdateUser()
	{
		$id=trim($_GET['id']);
		$email=trim($_GET['email']);
		$role=trim($_GET['role']);
		$status=trim($_GET['status']);
		if($email!="" &&  $role!="" && $status!="")
		{
			$sql1="UPDATE `user_login` SET
			`email`='$email',`role`='$role',`status`='$status'
			WHERE id='$id'";
	
			$query1 = $this->db->query($sql1);
			if($query1){
	
				$this->output->set_output(json_encode(array("status" => "success")));
			}else{
	
				$this->output->set_output(json_encode(array("status" => "fail")));
			}
		}else{
			$this->output->set_output(json_encode(array("status" => "empty")));
		}
	}
	public function RemoveUser()
	{
		$id=trim($_GET['id']);
			
		if($id!="")
		{
			$sql1 = "DELETE FROM `user_login` WHERE id='$id'";
				
			$query1 = $this->db->query($sql1);
			if($query1){
					
				$this->output->set_output(json_encode(array("status" => "success")));
			}else{
					
				$this->output->set_output(json_encode(array("status" => "fail")));
			}
		}else{
			$this->output->set_output(json_encode(array("status" => "empty")));
		}
	}
	
	function generateRandomString($length = 20) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyz981u9unakhkkjhJHJGYFUFGKUGWW';
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, strlen($characters) - 1)];
		}
		return $randomString;
	}

}

	