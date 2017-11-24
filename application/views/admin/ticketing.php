<?php $this->load->view('components/global_headers')?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Tickets</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Ticketing</div>
				
					<div class="panel-body">
						<div class="col-lg-12">
								<div class="col-lg-6">
									<img alt="" src="<?php echo base_url();?>img/OmniBarcodeScananime.gif">
								</div>
								<div class="col-lg-6">
								
									<div class="form-group row">
										<input onblur="this.focus()" autofocus onchange="checkcode()" id="barcode" class="form-control" type="text" placeholder="Scan or Enter barcode here">
										</div>
										<div class="form-group row">
										<div id="msgbox"></div>
										</div>
									
								</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		
		
		
								
	
	</div>	<!--/.main-->
<script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>js/chart.min.js"></script>
	

			     <script>
$(document).ready(function() {

	 $("#tkt").addClass('active');
		
});
function checkcode(){
	var audio = new Audio('<?php echo base_url();?>download/beep.wav');
	audio.play();
		var code=document.getElementById('barcode').value;

			
		document.getElementById('msgbox').innerHTML="";
			
		var url = '<?php echo base_url();?>checkticket/code?data='+code;
		callServiceToFetchData(url,serverReply);
		var msg='<div class="alert alert-warning" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>Processing...</div>'
				document.getElementById('msgbox').innerHTML=msg;
		
	    	
		
	
}
function serverReply(response){
	document.getElementById('barcode').value="";
	var sqlresponse = JSON.parse(response);
	try{
	if(sqlresponse.status === "fail"){
		var audio = new Audio('<?php echo base_url();?>download/error.wav');
		audio.play();
		var msg='<div class="alert alert-info" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>Try Again...</div>'
			document.getElementById('msgbox').innerHTML=msg;
	
	
	}else{

		if(sqlresponse.status === "success"){
			var audio = new Audio('<?php echo base_url();?>download/pass.mp3');
			audio.play();
			var msg='<div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>Success...</div>'
				document.getElementById('msgbox').innerHTML=msg;
		
		}else if(sqlresponse.status === "duplicate"){
			var audio = new Audio('<?php echo base_url();?>download/error.wav');
			audio.play();
			var msg='<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>Duplicate!  '+sqlresponse.data+'</div>'
				document.getElementById('msgbox').innerHTML=msg;
		
			}else if(sqlresponse.status === "nodata"){
				var audio = new Audio('<?php echo base_url();?>download/error.wav');
				audio.play();
				var msg='<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>No Data!</div>'
					document.getElementById('msgbox').innerHTML=msg;
			
				}
	}
	}catch(e){
		var audio = new Audio('<?php echo base_url();?>download/error.wav');
		audio.play();
		var msg='<div class="alert alert-info" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>Try Again...</div>'
			document.getElementById('msgbox').innerHTML=msg;
	
		}
}
</script>

	<?php $this->load->view('components/global_footers')?>

