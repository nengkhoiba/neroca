<ul id="gateUl" class="list-group">
<?php
$id=$_GET['q'];
$sql="SELECT ID, code, discription, capacity ,(SELECT COUNT(*) FROM `Seats` WHERE gate_id=GD.ID AND match_id=$id ) AS currentSeat FROM `Gate` GD WHERE ID!=1";
$query = $this->db->query($sql);
if($query){
echo "<h3>Select Gate </h3>";
	while($result=mysql_fetch_array($query->result_id))
	{?>
	
<li style="cursor:pointer" id="gd<?php echo $result['ID']?>" onclick="_Select_gate('<?php echo $result['ID']?>','<?php echo $result['capacity']?>','<?php echo $result['currentSeat']?>')" class="list-group-item" id="li_<?php echo $result['ID']?>"><a href="#proces" ><?php echo "Gate ".$result['code']?> <span><?php echo " &nbsp;".$result['currentSeat']?>/<?php echo $result['capacity']?><span></span></a></li>
<?php }
}?>
</ul>