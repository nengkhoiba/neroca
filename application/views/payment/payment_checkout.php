<?php
$this->session->set_userdata('pay',0);
// Merchant key here as provided by Payu
$MERCHANT_KEY = "ej6pDHZi";

// Merchant Salt as provided by Payu
$SALT = "MVpQVkMo1R";

// End point - change to https://secure.payu.in for LIVE mode
$PAYU_BASE_URL = "https://secure.payu.in";

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
  $hashKey=generateRandomString(50);
$sql="INSERT INTO `payment`(`amount`, `status`, `tranc_id`, `ref_id`)
VALUES ('$amount','INCOMPLETE','$txnid','$hashKey')";
  
 $query=$this->db->query($sql);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}

function generateRandomString($length = 20) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyz981u9unakhkkjhJHJGYFUFGKUGWW';
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, strlen($characters) - 1)];
	}
	return $randomString;
}


?>
<html>
  <head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
 <link href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url();?>css/style.css">
  </head>
  <body onload="submitPayuForm()">
    

    
    <div class="container">
  <div id="Checkout" class="inline">
      <h1>Pay Invoice</h1>
      <div class="card-row">
         <img src="https://www.payumoney.com//media/images/payby_payumoney/buttons/213.png" />
      </div>
          <br/>
 
    
        <form action="<?php echo $action; ?>" method="post" name="payuForm">
       
          <div class="form-group">
              <label for="PaymentAmount">Payment amount</label>
              <div class="amount-placeholder">
                  <span>Rs.</span>
                  <span><?php echo $amount;?>.00</span>
              </div>
          </div>
             <?php if($formError) { ?>
      <span style="color:red">Please fill all mandatory fields.</span>   
    <?php } ?>
          <input type="hidden" name="amount" value="<?php echo $amount;?>"/>
           <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
          <div class="form-group">
              <label for="firstname">Firstname<span style="color:red" >*</span></label>
              <input name="firstname" class="form-control" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" />
            
          </div>
          <div class="form-group">
              <label for="email">Email<span style="color:red" >*</span></label>
              <input class="form-control" name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" />
          </div>
          <div class="form-group">
              <label for="phone">Phone<span style="color:red" >*</span></label>
              <input id="phone" class="form-control" name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" />
          </div>
         <input type="hidden" name="productinfo" value="<?php echo $count;?>" />
         <input type="hidden"  name="surl" value="<?php echo base_url();?>payment/payment_success" size="64" />
         <input type="hidden" name="furl" value="<?php echo base_url();?>payment/payment_fail" size="64" />
         <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
    		<?php if(!$hash) { ?>
           <button id="PayButton" class="btn btn-block btn-success submit-button" type="submit">
              <span class="align-middle">Pay Rs.<?php echo $amount;?>.00</span>
          </button>
          <?php } ?>
          
      </form>
  </div>
</div>

  </body>
</html>
