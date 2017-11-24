<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Message</title>

<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">

<link href="<?php echo base_url();?>css/styles.css" rel="stylesheet">


</head>

<body>
	<br>
	<br>
	<br>
	<br>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Message</div>
				<div class="panel-body">
					<div class="alert alert-success"><?php echo $msg;?></div>
					<center><a href="<?php echo base_url();?>cpanel" class="btn btn-primary">Login</a></center>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	<script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	

</body>

</html>
