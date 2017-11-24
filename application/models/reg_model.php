<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Reg_model extends CI_Model{
    
	function __construct(){
		parent::__construct();
	}
	function postFeeds($created_by,$cat_id,$title,$desc,$Purl,$type,$push){
		function truncateString($str, $chars, $to_space, $replacement="...") {
			if($chars > strlen($str)) return $str;
	
			$str = substr($str, 0, $chars);
	
			$space_pos = strrpos($str, " ");
			if($to_space && $space_pos >= 0) {
				$str = substr($str, 0, strrpos($str, " "));
			}
	
			return($str . $replacement);
		}
		$feedid;
		$this->output->set_content_type('application/json');
		$sql="INSERT INTO `newsfeed`(`cat_id`, `title`, `description`, `mUrl`,`type`, `created_on`, `created_at`,`created_by`)
		VALUES ('$cat_id','$title','$desc','$Purl','$type',CURDATE(),CURTIME(),'$created_by')";
		$query2 = $this->db->query($sql);
		$notity=truncateString($desc, 120, true);
	
		$sql = "SELECT id
					FROM  newsfeed
					ORDER BY  id DESC
					LIMIT 1";
	
		$query1 = $this->db->query($sql);
	
		if($query1){
			while($result=mysql_fetch_array($query1->result_id)){
				$feedid=$result['id'];
			}
		}
		
		if($query2)
		{
	
			if($push=="YES")
			{
				$sql="SELECT reg
	
				FROM user
						where reg!='null'
				
			 ";
				$query = $this->db->query($sql);
				$ids=array();
				if($query)
				{
					while($result=mysql_fetch_array($query->result_id)){
	
						$ids[]=$result['reg'];
					}
				}
	
					
	
				$url = 'https://android.googleapis.com/gcm/send';
	
				$fields = array(
						'registration_ids'  => $ids,
						'data'              => array( "id"=>$feedid,"title" => $title,"desc"=>$notity,"pUrl"=>$Purl ),
				);
	
				$headers = array(
						'Authorization: key = AIzaSyCn90MSBvLz8JQbLGeH6tpbQNpa69EOrqA',
						'Content-Type: application/json'
				);
	
				// Open connection
				$ch = curl_init();
	
				// Set the url, number of POST vars, POST data
				curl_setopt( $ch, CURLOPT_URL, $url );
	
				curl_setopt( $ch, CURLOPT_POST, true );
				curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
				curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	
				curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $fields ) );
	
				// Execute post
				$result = curl_exec($ch);
				//echo $result;
				// Close connection
				curl_close($ch);
	
	
			}
				
				
				
			$outputData = array(
					"status" => "success"
			
	
			);
			$this->output->set_output(json_encode($outputData));
	
		}
		else {
	
			$outputData = array(
					"status" => "fail"
			
	
			);
			$this->output->set_output(json_encode($outputData));
		}
	
	}
	function UpdateFeeds($feedid,$title,$desc,$Purl,$type,$push){
		function truncateString($str, $chars, $to_space, $replacement="...") {
			if($chars > strlen($str)) return $str;
	
			$str = substr($str, 0, $chars);
	
			$space_pos = strrpos($str, " ");
			if($to_space && $space_pos >= 0) {
				$str = substr($str, 0, strrpos($str, " "));
			}
	
			return($str . $replacement);
		}
		$feedid;
		$this->output->set_content_type('application/json');
		$sql="UPDATE `newsfeed` SET 
				`title`='$title',
				`description`='$desc',
				`mUrl`='$Purl',
				`type`='$type'
				 WHERE id='$feedid'";
		$query2 = $this->db->query($sql);
		$notity=truncateString($desc, 120, true);
	
		
		if($query2)
		{
	
			if($push=="YES")
			{
				$sql="SELECT reg
	
				FROM user
	
			 ";
				$query = $this->db->query($sql);
				$ids=array();
				if($query)
				{
					while($result=mysql_fetch_array($query->result_id)){
	
						$ids[]=$result['reg'];
					}
				}
	
					
	
				$url = 'https://android.googleapis.com/gcm/send';
	
				$fields = array(
						'registration_ids'  => $ids,
						'data'              => array( "id"=>$feedid,"title" => $title,"desc"=>$notity,"pUrl"=>$Purl ),
				);
	
				$headers = array(
						'Authorization: key = AIzaSyCn90MSBvLz8JQbLGeH6tpbQNpa69EOrqA',
						'Content-Type: application/json'
				);
	
				// Open connection
				$ch = curl_init();
	
				// Set the url, number of POST vars, POST data
				curl_setopt( $ch, CURLOPT_URL, $url );
	
				curl_setopt( $ch, CURLOPT_POST, true );
				curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
				curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	
				curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $fields ) );
	
				// Execute post
				$result = curl_exec($ch);
				//echo $result;
				// Close connection
				curl_close($ch);
	
	
			}
	
	
	
			$outputData = array(
					"status" => "success"
		
	
			);
			$this->output->set_output(json_encode($outputData));
	
		}
		else {
	
			$outputData = array(
					"status" => "fail"
		
	
			);
			$this->output->set_output(json_encode($outputData));
		}
	
	}
	function get_feed_list_mobile($type,$start,$end)
	{
		
	
	
		$sql="SELECT DISTINCT news.id,news.title,
		news.source,
	
		news.description,
		news.mUrl,
		news.exUrl,
		news.likes,
		news.type,
		news.disable,
		news.created_on,
		news.created_at
		
		FROM newsfeed news
		WHERE
		news.disable='YES'
		

			ORDER BY news.created_on DESC,news.created_at DESC
			LIMIT $start,$end";
		$query = $this->db->query($sql);
		return $query->result();
	}
	function get_myfeed_list_mobile($start,$end,$userid)
	{
	
	
	
		$sql="SELECT DISTINCT news.id,news.title,
		news.source,
	
		news.description,
		news.mUrl,
		news.exUrl,
		news.likes,
		news.type,
		news.disable,
		news.created_on,
		news.created_at
	
		FROM newsfeed news
		WHERE
		created_by='$userid'AND
		news.disable='YES'
	
		AND news.type='news'
	
		ORDER BY news.created_on DESC,news.created_at DESC
		LIMIT $start,$end";
		$query = $this->db->query($sql);
		return $query->result();
	}
	
}