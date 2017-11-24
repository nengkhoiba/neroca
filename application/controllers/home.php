<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    
	function __construct() {
        parent::__construct();
      
    }
	
  
	public function index()
	{
		$this->load->view('home');
	}

	public function gallery()
	{
		$this->load->view('gallery');
	}

	public function ticket()
	{
		$this->load->view('onlineticket');
	}
	public function proceed()
	{
	    $gate=$_GET['g'];
	    $match=$_GET['m'];
	    $count=$_GET['c'];
	    if($gate!="" && $match!="" && $count!=""){
	    $sql="SELECT ID FROM `Seats` WHERE match_id=$match AND gate_id=$gate";
	    
	    $query = $this->db->query($sql);
	    $occupy=$query->num_rows();
	    $capacity=0;
	    $sql="SELECT capacity FROM `Gate` WHERE ID=$gate";
	    $query = $this->db->query($sql);
	    if($query){
	    	while($result=mysql_fetch_array($query->result_id))
	    	{
	    		$capacity=$result['capacity'];
	    	}
	    }
	    if($capacity<($occupy+$count)){
	    	
	    	redirect('home/ticket');
	    }else{
	    $this->session->set_userdata("GATE",$gate);
	    $this->session->set_userdata("MATCH",$match);
	    $this->session->set_userdata("QTY",$count);
	    redirect("payment/checkout");
	    }
	    }else{
	    	redirect('home/ticket');
	    }
	}
	public function select_ticket()
	{
	    
	    $type=$_GET['q'];
	    IF($type!=NULL && $type=="NOM"){
	    $this->session->set_userdata("TYPE",$type);
	    $this->session->set_userdata("ISTICKET","YES");
	    redirect('home/gate');
	    }
	    else{
	        if($type=="VIP"){
	            
	        }else
	        redirect('home/ticket');
	    }
	    
	}
	public function gate()
	{
	    $isTicket=$this->session->userdata("ISTICKET");
	    if($isTicket!=null){
	        if($isTicket=="NO"){
	            redirect('home/ticket');
	            
	        }else{
	            $type=$this->session->userdata("TYPE");
	            
	            $this->load->view('gate');
	            $this->session->set_userdata("ISTICKET","NO");
	            
	        }
	    }else{
	        redirect('home/ticket');
	    }
	    
	}
	public function generateticket()
	{
		$this->load->view('generate_ticket');
	}
	
	public function generatecode()
	{
		$code=$_GET['code'];
		$this->set_barcode($code);
	}
	public function get_gate_for_match()
	{
		$this->load->view('getGate');
	}
	private function set_barcode($code)
	{
		//load library
		$this->load->library('zend');
		//load in folder Zend
		$this->zend->load('Zend/Barcode');
		//generate barcode
		Zend_Barcode::render('code128', 'image', array('text'=>$code), array());
	}
	
}