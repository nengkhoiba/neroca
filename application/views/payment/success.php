<?php $this->load->view('global_header.php');?>
<style>
.card-base > .card-icon {
        text-align: center;
        position: relative;
    }

.imagecard { 
    z-index: 2;
    display: block;
    positioN: relative;
    width: 88px;
    height: 88px;
    border-radius: 50%;
    border: 5px solid white;
    box-shadow: 1px 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    margin: 0 auto;
    color: white;
}
.card-base > .card-icon > .card-data {
    min-height: 250px !important;
    margin-top: -24px;
    background: ghostwhite;
    border: 1px solid #e0e0e0;
    padding: 40px 0 10px 0;
     box-shadow: 1px 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    min-height: 215px;
    }
    #widgetCardIcon {
        background: #0E703F !important;
        font-size: 28px;
        line-height: 78px;
    }
    </style>

<?php
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
         
          ?>
          	   	<html>
          	   <head>
          	  			<style type="text/css">
      .barcode {  height: 80px;
  margin-left: 160px;} 
  .ticketcontainer{
  margin-top:50px;
  }
     	  
          	  			</style>
          	   </head>
          	   	<body>
          	   	<div class="container">
<div class = "row">
    <div class = "col-md-6 col-md-offset-3">
          	   	<div class="card-base">
<div class="card-icon"><a href="#" title="Widgets" id="widgetCardIcon" class="imagecard"><span class="glyphicon glyphicon-check"></span></a>
<div class="card-data widgetCardData">
<h2 class="box-title" style="color: #0E703F;">Payment Successfull!</h2>
<p style="font-family: arial" class="card-block text-center">Your transaction id for this transaction is <?php echo $txnid;?></p>
<a href="<?php echo base_url();?>" title="Style Builder" class="anchor btn btn-default" style="background: #000; border: #bb7824; color: whitesmoke;"> <i class="fa fa-paper-plane" aria-hidden="true"></i> Back to home</a></div>
</div>
</div>
</div>
</div>
	
</div>
          	   	
          	   	
          	   	
          	   			      	   			<?php 
          	   			
          	   			if($flag==0){
          	   				$curdate=date('d-m-Y');
          	   				$curtime=date('H:i:s');
          	   				$this->session->set_userdata('pay',1);
          	   				?>
     <center><button id="download">Download ticket</button></center>
    <div id="ticket" class="ticketcontainer">
    	<?php 
    	$type=$this->session->userdata("TYPE");
    	$gate=$this->session->userdata("GATE");
    	$match=$this->session->userdata("MATCH");
    	$qty=$this->session->userdata("QTY");
    	
 	$ticketType="ONL";

 	$sql = "SELECT sl
					FROM  ticket
		where type='ONL'
					ORDER BY  id DESC
					LIMIT 1";
 	
 	$query1 = $this->db->query($sql);
 	$sl=100000;
 	if($query1){
 		while($result=mysql_fetch_array($query1->result_id)){
 			$sl=$result['sl'];
 	
 		}
 	}
 	
 	
 
 	for ($i=0;$i<$qty;$i++){
 	$sl=$sl+1;
 	$barcode=$ticketType.$sl;
 	$sql="INSERT INTO `ticket`(`type`, `sl`, `barcode`, `status`, `entry`)
 			VALUES ('$ticketType','$sl','$barcode','OPEN',NOW())";
 	
 	$query = $this->db->query($sql);
 ?>
   <div class="header" style=" width:100%; margin-top:5px; background-color:#aaa; ">
        <h1 style="padding:10px;color:#000; text-align:center ">Hero I-League 2017 eTicket</h1>	
    </div>
    <div>
      <p><b>Date: </b><?php echo $curdate;?></p>
     	 
    </div>
     <div style=" float: right;  margin-top:-50px;">
      <p><b>Ticket No: </b><big><?php echo $barcode;?></big></p>
    </div>
    <center>
    <img class="barcode" src="<?php echo base_url();?>home/generatecode?code=<?php echo $barcode;?>" />
    </center>
	
	<div>
      <p>Hero I-League 2017</p>
       <p>Orgd By</p>
        <p>MIMS</p>
    </div>
	
	<div style=" float: right; margin-top:-150px">
       <p>e-Ticketing</p>
       <p>Powered By</p>
        <p>MOBIMP</p>
        <p> www.mobimp.com</p>
    </div>
	
    
    <div class="header-line" style=" height:2px; width:100%; background-color:black; ">	
  </div> 
 <?php 
 }
 
 ?>
     
  		</div>	
          	   		</body>
          	   		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="//cdn.rawgit.com/niklasvh/html2canvas/0.5.0-alpha2/dist/html2canvas.min.js"></script>
	<script type="text/javascript" src="//cdn.rawgit.com/MrRio/jsPDF/master/dist/jspdf.min.js"></script>
	<script type="text/javascript" >

	
	
	
	$(document).ready(function() {

	    $(document)[0].oncontextmenu = function() { return false; }

	    $(document).mousedown(function(e) {
	        if( e.button == 2 ) {
	            alert('Sorry, this functionality is disabled!');
	            return false;
	        } else {
	            return true;
	        }
	    });
	    var 
		form = $('#ticket'),
		cache_width = form.width(),
		a4  =[ 595.28,  841.89];  // for a4 size paper width and height

	
	function createPDF(){
		getCanvas().then(function(canvas){
			var 
			img = canvas.toDataURL("image/png"),
			doc = new jsPDF({
	          unit:'px', 
	          format:'a4'
	        });     
	        doc.addImage(img, 'JPEG', 20, 20);
	        doc.save('ticket.pdf');
	        form.width(cache_width);
		});
	}

	// create canvas object
	function getCanvas(){
		form.width((a4[0]*1.33333) -80).css('max-width','none');
		return html2canvas(form,{
	    	imageTimeout:2000,
	    	removeContainer:true
	    });	
	}

	$('#download').on('click',function(){
		$('body').scrollTop(0);
		createPDF();
	});
	});
	</script>
	<?php }?>
          	   	</html>
                    <?php
		   }         
?>	