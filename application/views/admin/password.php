<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Reset Password</title>

<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">

<link href="<?php echo base_url();?>css/styles.css" rel="stylesheet">


</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Change password</div>
				<div class="panel-body">
					<?php echo form_open('cpanel/changepassword');?>
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="New password" name="pass" type="password">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Confirm Password" name="Conpassword" type="password" >
							</div>
							<input class="form-control" placeholder="Confirm Password" name="keycode" type="hidden" value="<?php echo $key;?>">
							
							<input type="submit" class="btn btn-primary" value="Submit">
						</fieldset>
					</form>
					<?php echo validation_errors(); ?>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	<script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	

</body>

</html>
