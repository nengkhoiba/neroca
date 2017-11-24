
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
          	   
          	   			<?php 
          	   			
          	   			if($flag==0){
          	   				$curdate=date('d-m-Y');
          	   				$curtime=date('H:i:s');
          	   				$this->session->set_userdata('pay',1);
          	   				?>
     
    <div id="ticket" class="ticketcontainer">
    	<?php 
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
 	
 	
 
 for ($i=0;$i<3;$i++){
 	$sl=$sl+1;
 	$barcode=$ticketType.$sl;
 	$sql="INSERT INTO `ticket`(`type`, `sl`, `barcode`, `status`, `entry`)
 			VALUES ('$ticketType','$sl','$barcode','OPEN',NOW())";
 	
 	//$query = $this->db->query($sql);
 ?>
   <div class="header" style=" width:100%; margin-top:5px; background-color:#aaa; ">
        <h1 style="padding:10px;color:#000; text-align:center ">Singju Festival 2017 eTicket</h1>	
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
      <p>Singju Festival 2017</p>
       <p>Orgd By</p>
        <p>Singju Yokhatpa Lup (SYOL)</p>
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
$('body').scrollTop(0);
createPDF();
	});
	</script>
	<?php }?>
          	   	</html>
     