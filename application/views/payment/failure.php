<?php
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

`status`='FAILED'
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
	   	<body>
	   	<div style="font-family: Calibri;border: 1px solid #DDD;border-radius: 4px;padding: 42px 22px;width: 600px;text-align: center;margin-top: 122px;margin-left: auto;margin-right: auto;">
	   	<img style="width: 300px;" src="<?php echo base_url();?>img/sample.png" data-active-url="<?php echo base_url();?>img/sample.png" alt="">
	   	<h2 style="text-transform: uppercase">Payment Failed!</h2>
	   	<h3>Your transaction id for this transaction is <?php echo $txnid;?></h3>
	   				<p style="text-align: center;"><a href="<?php echo base_url();?>home/ticket"> Try Again</a></p>
	   			</div>
	   		</body>
	   	</html>
          <?php
		 } 
?>
