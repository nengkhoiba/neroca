<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
				
		$this->load->model('m_login', 'validate');
		
		

		$this->load->library('form_validation');
			
		$this->form_validation->set_rules('user', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('pass', 'Password ', 'required');
	
		
			
		if ($this->form_validation->run() == FALSE)
		{
				$data['msg']="";
		$this->load->view('admin/login',$data);
		}
		else
		{
			$loginId=$_POST['user'];
			$pass=$_POST['pass'];
			$result = $this->validate->validate($loginId,$pass);
				
				if(sizeof($result) == 1){
					
					$role=$result[0]->role;
					$ids=$result[0]->id;
					
					$this->session->set_userdata('loginStatus', true);
					$this->session->set_userdata('role', $role);
					$this->session->set_userdata('id', $ids);
					$this->session->set_userdata('user', $loginId);
					redirect('adminpanel');
				
				}else{
					$data['msg']="Incorrect Email or Password!";
					$this->load->view('admin/login',$data);
				}
					
		
		}
		
		
		
		
	}

	public function logout(){
		$this->session->sess_destroy();
		$this->session->set_userdata('role', "LOGOUT");
		$this->session->set_userdata('loginStatus', false);
		redirect('cpanel');
	}


}