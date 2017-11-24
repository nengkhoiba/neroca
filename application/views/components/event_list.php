<?php
$sql="SELECT `evnt_id`, `evnt_name`, `evnt_img` FROM `event`";
$query = $this->db->query($sql);

if($query)
{
	while($result=mysql_fetch_array($query->result_id)){
?>
<tr>
	<td><?php echo $result['evnt_id']?></td>
<td><?php echo $result['evnt_name']?></td>
	
	<td>
	<?php if($result['evnt_img']==""){?>
	
	
	 <button onclick="eventimage('<?php echo $result['evnt_id']?>')" class="btn btn-primary" >Upload</button>
					<?php }else{?>
					<img style="width: 70px;" src="<?php echo $result['evnt_img']?>"> <button onclick="eventimage('<?php echo $result['evnt_id']?>')" class="btn btn-primary" >Update</button>
	
					<?php }?></td>
	
	<td><a onclick="editEvent('<?php echo $result['evnt_id']?>')"><i class="glyphicon glyphicon-edit"></i></a></td>
	<td><a onclick="removeEvent('<?php echo $result['evnt_id']?>')"><i class="glyphicon glyphicon-remove"></i></a></td>
	
	

</tr>

<?php }}?>