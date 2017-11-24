<?php $this->load->view('components/global_headers')?>
		
<div class="modal fade" id="edit_user" tabindex="-1" data-backdrop="static" data-keyboard="false">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content col-md-12">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h3 class="modal-title">OPTION</h3>
							</div>
							<div id="userBody" class="modal-body">
							<label>Select payment status</label>
							<h4 id="amount"></h4>
								<select class="form-control" id="paid">
									<option value="PAID">PAID</option>
									<option value="UNPAID">UNPAID</option>
								</select>
							</div>
							<div id="msgboxeditcat"></div>
							<div class="modal-footer">
							    <a onclick="edituserContinue()" class="btn btn-primary">Save</a>
								<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							</div>
						</div>
					</div>
				</div>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Registration</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Registration</h1>
			</div>
		</div><!--/.row-->
						
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Registration</div>
					 <button href="#" data-toggle="modal" data-target="#add_user" class="btn btn-primary" style="float:right;padding: 3px 19px;margin: 10px 15px 10px 10px;">ADD</button>
					<div class="panel-body">
						<table style="width:100%;display:block;overflow-x: scroll;" class="table" id="reg_table" >
						    <thead>
						    <tr>
						   	 <th>Id</th>
						     <th>Name</th>
						     <th>Father's name</th>
						     <th>Gender</th>
						     <th>Address</th>
						     <th>District</th>
						     <th>Pincode</th>
						     <th>Mobile</th>
						     <th>Email</th>
						     <th>College</th>
						     <th>Class</th>
						     <th>Events</th>
						     <th>Amount</th>
						     <th>Status</th>
						    </tr>
						    </thead>
						    <tbody id="regListBody" >
						    	
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
		</div><!--/.row-->
	</div>	<!--/.main-->
	<script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>datatables/dataTables.bootstrap.css">

  <script src="<?php echo base_url();?>datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>datatables/dataTables.bootstrap.min.js"></script>
     <script src="<?php echo base_url();?>datatables/datatable.button.js"></script>
     <script src="<?php echo base_url();?>datatables/button.html5.min.js"></script>
     <script src="<?php echo base_url();?>datatables/jszip.js"></script>
     <script src="<?php echo base_url();?>datatables/pdfmaker.js"></script>
     <script src="<?php echo base_url();?>datatables/vfsmakerfont.js"></script>
     <script>
$(document).ready(function() {
	$('.loading-layer').hide();
	 $("#reg").addClass('active');
	 loaduser();

	
});
function loaduser(){
	var url = '<?php echo base_url();?>data_controller/Loadregisters';
	var xmlHttp = GetXmlHttpObject();
	if (xmlHttp != null) {
		try {
			xmlHttp.onreadystatechange=function() {
			if(xmlHttp.readyState == 4) {
				if(xmlHttp.responseText != null){
					document.getElementById('regListBody').innerHTML = xmlHttp.responseText;
					 $('#reg_table').DataTable({
						 "aaSorting": [], 
					        dom: 'Bfrtip',
					        buttons: [
					           
					            'excelHtml5',
					           
					            'pdfHtml5'
					        ]
					    });
				}else{
					alert("Error");
				}
			}
		}
		xmlHttp.open("GET", url, true);
		xmlHttp.send(null);
	}
	catch(error) {}
	}
}
var u_id;
function paidmodelshow(id,amount){
	u_id=id;
	document.getElementById('amount').innerHTML="Total amount to be paid is Rs."+amount;
	document.getElementById('msgboxeditcat').innerHTML="";
	$("#edit_user").modal("show");
}
function edituserContinue()
{
	var paid=document.getElementById('paid').value;

	
	
	var url = '<?php echo base_url();?>data_controller/UpdateReg?id='+u_id+'&p='+paid;
	callServiceToFetchData(url,serverReply);
	var msg='<div class="alert alert-warning" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>Updating data please wait..</div>'
		document.getElementById('msgboxeditcat').innerHTML=msg;
	
    	
	
}
function serverReply(response){
	var table = $('#reg_table').DataTable();
	table.destroy();
	var sqlresponse = JSON.parse(response);
	try{
	if(sqlresponse.status === "empty"){
		
		alert("All fields should be fill!");

		$("#edit_user").modal("hide");
		
	}else{

		if(sqlresponse.status === "success"){
			 loaduser();
			 
				$("#edit_user").modal("hide");
	
			
		}
	}
	}catch(e){
		
		 loaduser();
		
			$("#edit_user").modal("hide");
		
		}
}
</script>
	<?php $this->load->view('components/global_footers')?>
