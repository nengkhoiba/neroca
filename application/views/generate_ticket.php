
<html>


 <link href="<?php echo base_url();?>css/ticket.css" rel="stylesheet">

 <body style="margin: 0">

 	<div id="ticket" class="ticketcontainer ">

 	
 	<?php 
 	$ticketType="MNE";	
 	$sl=1000;
 	
 	$p=0;
 for ($i=0;$i<50;$i++){
 
 	$j=7;
 	
 	if($p!=2){
 	?>
 	<table style="    border: 0;
    border-spacing: 0;">
 	<tr>
 	<?php
 	}else{
 		$p=0;
 		?>
 		<table style="    border: 0;
    border-spacing: 0;" class="pagebreak">
 	<tr>
 		<?php
 	}
 	for($j=0;$j<7;$j++)
 	{
 		$sl=$sl+1;
 		$barcode=$ticketType.$sl;
 		$sql="INSERT INTO `ticket`(`type`, `sl`, `barcode`, `status`, `entry`)
 		VALUES ('$ticketType','$sl','$barcode','OPEN',NOW())";
 		
 		$query = $this->db->query($sql);
 		?>
 		<td>
		 	<div class="ticket">
		 	 <img class="barcode" src="<?php echo base_url();?>home/generatecode?code=<?php echo $barcode;?>" />
		 	</div>
	 	</td>
 		<?php
 	}
 		?></tr>
 		</table>
 	<?php 
 	$p=$p+1;
 }
 ?>
 	
 				
 	</div>
 

 </body>


</html>