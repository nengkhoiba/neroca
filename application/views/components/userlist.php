<?php
$sql="SELECT `id`, `email`, `role`, `status` FROM user_login";
$query = $this->db->query($sql);

if($query)
{
	while($result=mysql_fetch_array($query->result_id)){
?>
<tr>
	<td><?php echo $result['id'];?></td>
	<td><?php echo $result['email'];?></td>
	<td><?php echo $result['role'];?></td>
	<td><?php echo $result['status'];?></td>
	<td><a onclick="edituser('<?php echo $result['id']?>')"><i class="glyphicon glyphicon-edit"></i></a></td>
	<td><a onclick="removeuser('<?php echo $result['id']?>')"><i class="glyphicon glyphicon-remove"></a></a></td>
	
	

</tr>

<?php }}?>