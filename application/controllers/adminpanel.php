<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminpanel extends CI_Controller {


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
				$this->load->view('admin/landing');
	
			}else {
			if($this->session->userdata('role') == "MANAGER"){
						
				$this->load->view('admin/landing');
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

	
	
	public function registration()
	{
		$this->load->view('admin/registration');
	}

	public function event()
	{
		$this->load->view('admin/events');
	}
	public function ticketing()
	{
		$this->load->view('admin/ticketing');
	}
	public function sync()
	{
		$this->load->view('admin/sync');
	}
	public function user()
	{
		if($this->session->userdata('role') == "ADMIN"){
			$this->load->view('admin/adduser');
		}else {
			redirect('cpanel');
		}
		
	}
	public function syncmsg()
	{
		$this->load->view('admin/syncmsg');
	
	}
	public function tickets()
	{
		if($this->session->userdata('role') == "ADMIN"){
			$this->load->view('admin/ticketdata');
		}else {
			redirect('cpanel');
		}
	
	}
	
	
	


}