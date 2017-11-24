<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin - Dashboard</title>

<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/styles.css" rel="stylesheet">
<link href="<?php echo base_url();?>fonts/glyphicons-halflings-regular.ttf" rel="stylesheet">
<!--Icons-->
<script src="<?php echo base_url();?>js/lumino.glyphs.js"></script>


</head>
<style>
.buttons-html5 {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 0px;
    color: #333;
    background-color: #fff;
    border-color: #ccc;
    text-decoration: none !important;
}
#regMain a{
	padding: 10px 15px;
	display: block;
}
#regMain .list-group-item.active{
	border: 0;
}
.regtable{
	display: block !important;
	overflow-x: scroll;
}
#regMain .list-group-item{
	padding: 0;
}
.page-header{
	font-size: 20px;
}
#progress { position:relative;  border: 1px solid #D6D6D6 !important; padding: 2px !important; border-radius: 3px; }
#bar { background-color: #7EFF6E !important; width:0%; border-radius: 3px; padding: 12px 0;}
#percent { position:absolute; display:inline-block; top:3px; left:48%; }
			.loading-layer {
  width: 100%;
  height: 100%;
  background: rgba(253, 253, 255, 0.29);
  opacity: 0.9;
  position: fixed;
  z-index: 10000;
}
.modal-backdrop{
	z-index:-1 !important;
}
</style>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Manfete </span>Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo $this->session->userdata('role');?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo base_url();?>data_controller/passwordReset"><span class="glyphicon glyphicon-cog"></span> Change password</a></li>
							<li><a href="<?php echo base_url();?>login/logout"><span class="glyphicon glyphicon-remove-circle"></span> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	
		<ul class="nav menu">
			<li id="hom"><a href="<?php echo base_url();?>adminpanel"><span class="glyphicon glyphicon-dashboard"></span>Dashboard</a></li>
			<li id="eve"><a href="<?php echo base_url();?>adminpanel/event"><span class="glyphicon glyphicon-picture"></span> Gallery</a></li>
			<li id="tkt"><a href="<?php echo base_url();?>adminpanel/ticketing"><span class="glyphicon glyphicon-barcode"></span> Ticketing</a></li>
			<li id="sync"><a href="<?php echo base_url();?>adminpanel/sync"><span class="glyphicon glyphicon-barcode"></span> Sync</a></li>

			
			
			<?php if($this->session->userdata('role') == "ADMIN"){
			?>
			<li role="presentation" class="divider"></li>
			<li id="use"><a href="<?php echo base_url();?>adminpanel/user"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User</a></li>
			<li id="ticketdata"><a href="<?php echo base_url();?>adminpanel/tickets"><svg class="glyph stroked tag"><use xlink:href="#stroked-tag"></use></svg> Tickets</a></li>
		
			<?php 
	
			}?>
			</ul>

	</div><!--/.sidebar-->