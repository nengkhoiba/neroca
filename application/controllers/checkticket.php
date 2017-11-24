<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Checkticket extends CI_Controller {
    
	function __construct() {
        parent::__construct();
      
    }
    public function code()
    {
    	$barcode=trim($_GET['data']);
    
    	$sql="SELECT status,entry  FROM `ticket` where barcode='$barcode'
    	";
    	$query = $this->db->query($sql);
    	$flag="";
    	$entry="";
    	if($query)
    	{
    		while($result=mysql_fetch_array($query->result_id)){
    
    			$flag=$result['status'];
    			$entry=$result['entry'];
    				
    		
    		}
    		if($flag=="OPEN"){
    			$curdate=date('Y-m-d');
    			$curtime=date('H:i:s');
    			$now=$curdate." ".$curtime;
		    		$sql1 = "UPDATE `ticket` SET `status`='CLOSED',`entry`='$now' where barcode='$barcode'";
			
					$query1 = $this->db->query($sql1);
					if($query1){
						$code=mysql_real_escape_string($sql1);
						$sql3 = "INSERT INTO `sql_data`(`sql_code`) VALUES ('$code')";
							
						$query3 = $this->db->query($sql3);
						$this->output->set_output(json_encode(array("status" => "success")));
					}else{
							
						$this->output->set_output(json_encode(array("status" => "fail")));
					}
    		}elseif ($flag=="CLOSED"){
    			
    			$now=strtotime(date("Y-m-d"));
    			$datetime = explode(" ",$entry);
				$date = $datetime[0];
				$time = $datetime[1];
				
    			$past=strtotime($date);
    			$diff=$now-$past;
    			$day=floor($diff/(60*60*24));
    			if($day==0)
    			{
    			
    				$diff=strtotime(date("H:i:s"))-strtotime($time);
    			
    				$temp=$diff/86400; // 60 sec/min*60 min/hr*24 hr/day=86400 sec/day
    			
    				// days
    				$days=floor($temp);$temp=24*($temp-$days);
    				// hours
    				$hours=floor($temp);$temp=60*($temp-$hours);
    				// minutes
    				$minutes=floor($temp); $temp=60*($temp-$minutes);
    				// seconds
    				$seconds=floor($temp);
    			
    				if($hours==0){
    					if($minutes==0){
    						$day=$seconds." sec ago";
    					}else{
    						$day=$minutes." mins ago";
    					}
    			
    				}else{
    					$day=$hours." hrs ago";
    				}
    			
    			}else
    			{
    				if($day<=31){
    					$day=$day." day(s) ago.";
    				}else{
    						
    					$day=ceil($day/30);
    					if($day<=12)
    					{
    						$day=$day." month(s) ago.";
    					}else{
    						$day=ceil($day/12);
    						$day=$day." year(s) ago.";
    					}
    				}
    			}
    			$this->output->set_output(json_encode(array("status" => "duplicate","data"=>$day)));
    		}else{
    			$this->output->set_output(json_encode(array("status" => "nodata")));
    		}
    		
    	}else{
    		$this->output->set_output(json_encode(array("status" => "fail")));
    	}
    
    }
	
}