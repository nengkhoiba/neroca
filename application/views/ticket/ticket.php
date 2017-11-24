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
		$sql="INSERT INTO `ticket`(`type`, `sl`, `barcode`, `status`, `entry`,match_id,gate_id)
		VALUES ('$ticketType','$sl','$barcode','OPEN',NOW(),'$match','$gate')";
	
		$query = $this->db->query($sql);
		
		$sql2 = "SELECT m.ID, home_team,
		away_team,
		(SELECT name FROM team where ID=m.home_team) AS h_team,
		(SELECT name FROM team where ID=m.away_team) AS a_team,
		(SELECT code FROM team where ID=m.home_team) AS h_code,
		(SELECT code FROM team where ID=m.away_team) AS a_code,
		(SELECT image FROM team where ID=m.home_team) AS h_img, 
		(SELECT image FROM team where ID=m.away_team) AS a_img,
		(SELECT discription FROM Gate where ID=$gate) AS gate,
				m.date AS dt FROM matchs m WHERE ID=$match";
		
		$query2 = $this->db->query($sql2);
		
		if($query2){
			while($result=mysql_fetch_array($query2->result_id)){
			if($type=="VIP"){
				
				?>
				<table>
					
					
				<tr  >
				<td rowspan="" colspan="2" align="center"   style="border-right:2px dotted black;font-family:arial; padding:10px;" >
				<img src="<?php echo base_url(); ?>/img/team/logo.jpg" style="height:75px;"  /><br> <br><b> <?php echo $result['h_team'];?> <br> VS <br> <?php echo $result['a_team'];?> </b>  <br> <br> <span style="font-size:14px;"> <?php echo $result['dt'];?> <br> Khuman Lampak Stadium  <br>(Ticket : Rs.300) </span> <br> <br> ADMIT ONE
							</td>
							
							
							<td colspan="4" align="center"   style="font-family:arial; padding:10px;" >
							<span style="font-size: 30px;  position: relative;  right: -301px; top: -44px;" ></span> 
							 <img src="<?php echo base_url(); ?>/img/team/logo.jpg" style="height:75px;"  /><br> 
							 <img src="<?php echo base_url(); ?>/img/team/<?php echo $result['h_img'];?>" style="height:50px; padding-left:50px;"  /> 
							  <img src="<?php echo base_url(); ?>/img/team/<?php echo $result['a_img'];?>" style="height:50px; padding-right:100px; padding-left:100px;"  />  
							  <img src="<?php echo base_url(); ?>/img/team/vss.png>"  style="height:50px;padding-right:50px;"  />   
							  <br> <span style="font-size:14px;" align="left">  <b><?php echo $result['h_team'];?> </b></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:14px;" align="right"> <b><?php echo $result['a_team'];?> </b></span> <br><br>  <span style="font-size:14px;"> <?php echo $result['dt'];?> <br> Khuman Lampak Stadium  </span> <br> <br> <br> <span align="left"> ADMIT ONE </span> 
							</td>
							
							
							<td rowspan="3"  align="center"   style="font-family:arial; padding:10px;" >
							 <img src="<?php echo base_url();?>home/generatecode?code=<?php echo $barcode;?>" style=""  />
							</td>
							
							</tr>
							
							<tr   style=" background-color:#F58634; color:white; font-family:arial;" align="center">
							<td colspan="3"  style="border-right:2px dotted black;">
							<span   align="center" > <br> <b> VIP GALLERY <br> <?php echo $result['gate'];?> </b><br><br> </span>
							</td>
							<td  >
							<span   align="center"  > <br> <b> VIP GALLERY </b><br><br> </span>
							</td>
							<td >
							<span   align="center" > <br> <b>  <?php echo $result['gate'];?> </span> </b><br><br> </span>
							</td>
							</tr>
							
							
							
							
							</table>
							<br><?php
				
			}
		else{
	?>

			<table>
			
					
			<tr  >
			<td rowspan="" colspan="2" align="center"   style="border-right:2px dotted black;font-family:arial; padding:10px;" >
			<img src="<?php echo base_url(); ?>/img/team/logo.jpg" style="height:75px;"  /><br> <br><b> <?php echo $result['h_team'];?> <br> VS <br> <?php echo $result['a_team'];?> </b>  <br> <br> <span style="font-size:14px;"> <?php echo $result['dt'];?> <br> Khuman Lampak Stadium  <br>(Ticket : Rs.50) </span> <br> <br> ADMIT ONE 
			</td>
			
			
			<td colspan="4" align="center"   style="font-family:arial; padding:10px;" >
			<span style="font-size: 30px;  position: relative;  right: -301px; top: -44px;" ></span> 
			 <img src="<?php echo base_url(); ?>/img/team/logo.jpg" style="height:75px;"  /><br> 
			 <img src="<?php echo base_url(); ?>/img/team/<?php echo $result['h_img'];?>" style="height:50px; padding-left:50px;"  /> 
			  <img src="<?php echo base_url(); ?>/img/team/<?php echo $result['a_img'];?>" style="height:50px; padding-right:100px; padding-left:100px;"  />  
			  <img src="<?php echo base_url(); ?>/img/team/vss.png>"  style="height:50px;padding-right:50px;"  />   
			  <br> <span style="font-size:14px;" align="left">  <b><?php echo $result['h_team'];?> </b></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:14px;" align="right"> <b><?php echo $result['a_team'];?> </b></span> <br><br>  <span style="font-size:14px;"> <?php echo $result['dt'];?> <br> Khuman Lampak Stadium  </span> <br> <br> <br> <span align="left"> ADMIT ONE </span> 
			</td>
			
			<td rowspan="3"  align="center"   style="font-family:arial; padding:10px;" >
			 <img src="<?php echo base_url();?>home/generatecode?code=<?php echo $barcode;?>" style="transform: rotateZ(90deg);"  />
			</td>
			
			</tr>
			
			<tr   style=" background-color:#0E703F; color:white; font-family:arial;" align="center">
			<td colspan="3"  style="border-right:2px dotted black;">
			<span   align="center" > <br> <b> NORMAL GALLERY <br> <?php echo $result['gate'];?> </b><br><br> </span>
			</td>
			<td  >
			<span   align="center"  > <br> <b> NORMAL GALLERY </b><br><br> </span>
			</td>
			<td >
			<span   align="center" > <br> <b>  <?php echo $result['gate'];?> </span> </b><br><br> </span>
			</td>
			</tr>
			
			
			
			
			</table>
			<br>
<?php }}
		}
	}
	?>