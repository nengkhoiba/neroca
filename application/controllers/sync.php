<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sync extends CI_Controller {

public function syncdata()
	{
		$sqls = $_POST['sql'];
		
			foreach( $sqls as $sql ) {
			  $query = $this->db->query($sql);
			 
			}
		if($query){
			
			redirect('http://192.168.43.52/manfete/adminpanel/syncmsg');
		}
		
	}

}