<?php
$sql="SELECT `id`, `firstname`, `lastname`, `father`, `gender`, `address`, `district`, `pin`, `mobile`, `email`, `college`, `clas`, `events`, `amount`, `status` FROM `reg`";
$query = $this->db->query($sql);

if($query)
{
	while($result=mysql_fetch_array($query->result_id)){
?>
<tr>
	<td><?php echo $result['id']?></td>
	<td><?php echo $result['firstname']?> <?php echo $result['lastname']?></td>
	<td><?php echo $result['father']?></td>
	<td><?php echo $result['gender']?></td>
	<td><?php echo $result['address']?></td>
	<td><?php echo $result['district']?></td>
	<td><?php echo $result['pin']?></td>
	<td><?php echo $result['mobile']?></td>
	<td><?php echo $result['email']?></td>
	<td><?php echo $result['college']?></td>
	<td><?php echo $result['clas']?></td>
	<td><?php echo $result['events']?></td>
	<td><?php echo $result['amount']?></td>
	<td style="cursor: pointer;" onclick="paidmodelshow('<?php echo $result['id']?>','<?php echo $result['amount']?>')"><?php echo $result['status']?></td>
	

</tr>

<?php }}?>