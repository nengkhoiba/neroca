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
       $amount=52;
   }else{
       redirect('home/ticket');
   }
   
        $data['amount']=$amount*$qty;
        $data['count']=$qty;
		$this->load->view('payment/payment_checkout',$data);
	
	}
	public function payment_success(){
	
		$this->session->set_userdata('status','You have successfully registered.');
		
		//load mPDF library
		$this->load->library('m_pdf');
		//load mPDF library
		
		
		//now pass the data//
		$this->data['title']="MY PDF TITLE 1.";
		$this->data['description']="";
		$this->data['description']=$this->official_copies;
		//now pass the data //
		
		$data['curdate']='12-12-2017';
		$data['barcode']='ONL1134';
		$html=$this->load->view('ticket/ticket',$data, true); //load the pdf_output.php by passing our data and get all data in $html varriable.
		
		//this the the PDF filename that user will get to download
		$pdfFilePath ="download/ticket.pdf";
		
		
		//actually, you can pass mPDF parameter on this load() function
		$pdf = $this->m_pdf->load();
		//generate the PDF!
		$pdf->WriteHTML($html,2);
		//offer it to user via browser download! (The PDF won't be saved on your server HDD)
		
		$pdf->Output($pdfFilePath, "F");
		$this->load->library('email');
		
		$this->email->from('your@example.com', 'Your Name');
		$this->email->to('someone@example.com');
		$this->email->cc('another@another-example.com');
		$this->email->bcc('them@their-example.com');
		
		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');
		$this->email->attach($pdfFilePath);
		$this->email->send();
		$pdf->Output($pdfFilePath, "D");
		$this->load->view('payment/success');
	
	}
	public function payment_fail(){
	
		
		$this->load->view('payment/failure');
	
	}


}