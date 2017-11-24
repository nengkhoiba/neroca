<?php
class m_login extends CI_Model{
    
	function __construct(){
		parent::__construct();
	}
	
function validate($loginId,$password)
	{
		$sql = "SELECT
				id,role
		FROM
		user_login
		WHERE
		email = '$loginId' AND
		password='$password' AND
		status = 'ACTIVE'";
	
		$query = $this->db->query($sql);
	
		return $query->result();
	}

}