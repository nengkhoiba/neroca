<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>

<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">

<link href="<?php echo base_url();?>css/styles.css" rel="stylesheet">


</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default" style="margin-top: 125px;">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<?php echo form_open('login')?>
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="user" type="email" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="pass" type="password" value="">
							</div>
						<input type="submit" class="btn btn-primary" style="width: 100%" value="Login">
						</fieldset>
					</form>
					<?php echo validation_errors(); ?>
					
					<?php if($msg!=""){?>
					<br>
					<div class="alert alert-danger"><?php echo $msg; ?></div>
					<?php }?>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	<script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	

</body>

</html>
