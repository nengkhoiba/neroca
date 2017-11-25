<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends CI_Controller {

public function checkout(){
	
   $type=$this->session->userdata("TYPE");
  // $gate=$this->session->userdata("GATE");
 //  $match=$this->session->userdata("MATCH");
   $qty=$this->session->userdata("QTY");
   $amount=0;
   IF($type=="VIP"){
       $amount=302;
   }elseif("NOM"){
       $amount=50;
   }else{
       redirect('home/ticket');
   }
   
        $data['amount']=$amount*$qty;
        $data['count']=$qty;
		$this->load->view('payment/payment_checkout',$data);
	
	}
	public function payment_success(){
		$this->session->set_userdata('status','You have successfully paid.');
		$flag=$this->session->userdata('pay');
		$status=$_POST["status"];
		$firstname=$_POST["firstname"];
		$amount=$_POST["amount"];
		$txnid=$_POST["txnid"];
		$posted_hash=$_POST["hash"];
		$key=$_POST["key"];
		$productinfo=$_POST["productinfo"];
		$email=$_POST["email"];
		$salt="MVpQVkMo1R";
		
		$sql="UPDATE `payment` SET
		
		`status`='SUCCESS'
		WHERE tranc_id='$txnid'";
		
		$query=$this->db->query($sql);
		If (isset($_POST["additionalCharges"])) {
			$additionalCharges=$_POST["additionalCharges"];
			$retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
		
		}
		else {
		
			$retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
		
		}
		$hash = hash("sha512", $retHashSeq);
			
		if ($hash != $posted_hash) {
			echo "Invalid Transaction. Please try again";
			
		}
		else {
		
				
			$this->session->set_userdata('status','You have successfully paid.');
		
		
			//load mPDF library
			$this->load->library('m_pdf');
			$data['title']="Ticket";
			$html=$this->load->view('ticket/ticket',$data,true);
		
			$pdfFilePath ="download/".$txnid.".pdf";
		
			$pdf = $this->m_pdf->load();
			//generate the PDF!
			$pdf->WriteHTML($html,2);
		
			$pdf->Output($pdfFilePath, "F");
			$this->load->library('email');
		
			$this->email->from('support@mobimp.com', 'e-Ticket');
			$this->email->to($email);
			$this->email->subject('E-Ticket');
			$this->email->message('Please find attachment for ticket.');
			$this->email->attach($pdfFilePath);
			$this->email->send();
			//$pdf->Output($pdfFilePath, "D");
			
			$this->session->set_userdata('TID',$txnid);
			$this->session->set_userdata('URL',$pdfFilePath);
			redirect("payment/status");
		}
		
	
	}
	public function payment_fail(){
	
		$this->load->view('payment/failure');
	
	}
	public function status(){

		$this->load->view('payment/success');
	}

}