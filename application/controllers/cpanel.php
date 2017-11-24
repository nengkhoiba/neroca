<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cpanel extends CI_Controller {

	public function index()
	{
		$data['msg']="";
		$this->load->view('admin/login',$data);
	}
	public function password()
	{
		$data['key']=$_GET['q'];
		$this->load->view('admin/password.php',$data);
	}
	
	public function changepassword()
	{
		$this->load->library('form_validation');
			
			$this->form_validation->set_rules('pass', 'Password', 'required|matches[Conpassword]');
			$this->form_validation->set_rules('Conpassword', 'Password Confirmation', 'required');
			$key=trim($_POST['keycode']);
			
			$data['key']=$key;
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('password',$data);
			}
			else
			{
				$pass=trim($_POST['pass']);
			
				$sql="UPDATE user_login
				set password='$pass',
				code=''
				WHERE
				code='$key'
				";
				$query = $this->db->query($sql);
				if($query) {
					$data['msg']="Successfully changed!";
					$this->load->view('admin/msg',$data);
					
				}else{
					$data['msg']="Fail to change!";
					$this->load->view('admin/msg',$data);
				}
				//$this->load->view('msg',$msg);
					
				
			}
	}



}