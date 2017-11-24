<?php $this->load->view('components/global_headers')?>
		
		
		<div class="modal fade" id="remove_user" tabindex="-1" data-backdrop="static" data-keyboard="false">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content col-md-12">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h3 class="modal-title">WARNING</h3>
							</div>
							<div class="modal-body">
								<label>Are you sure to continue remove?</label>
							</div>
							<div id="msgBoxdelete"></div>
							<div class="modal-footer">
							    <a onclick="continueRemove()" data-dismiss="modal" class="btn btn-primary">YES</a>
								<button type="button" class="btn btn-default" data-dismiss="modal">NO</button>
							</div>
						</div>
					</div>
				</div>
				
		
				
				<div class="modal fade" id="edit_user" tabindex="-1" data-backdrop="static" data-keyboard="false">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content col-md-12">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h3 class="modal-title">EDIT USER</h3>
							</div>
							<div id="userBody" class="modal-body">
								
							</div>
							<div id="msgboxeditcat"></div>
							<div class="modal-footer">
							    <a onclick="edituserContinue()" class="btn btn-primary">Change</a>
								<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="add_user" tabindex="-1" data-backdrop="static" data-keyboard="false">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content col-md-12">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h3 class="modal-title">ADD user</h3>
							</div>
							<div class="modal-body">
								<form>
							
								  <div class="form-group row">
									<label class="col-sm-4 form-control-label">Email<a style="color: red;">*</a></label>
									<div class="col-sm-8">
									  <input id="email" type="text" required class="form-control" placeholder="email" name="" value="">
									</div>
								  </div>
								    <div class="form-group row">
									<label class="col-sm-4 form-control-label">Role<a style="color: red;">*</a></label>
									<div class="col-sm-8">
									  <select id='role' class="form-control">
									  	<option value="ADMIN">ADMIN</option>
									 	 <option value="MANAGER">MANAGER</option>
									  </select>
									</div>
								  </div>
								    <div class="form-group row">
									<label class="col-sm-4 form-control-label">Status<a style="color: red;">*</a></label>
									<div class="col-sm-8">
									   <select id='status' class="form-control">
									  	<option value="ACTIVE">ACTIVE</option>
									 	 <option value="INACTIVE">INACTIVE</option>
									  </select>
									</div>
								  </div>
								</form>
							</div>
							<div id="msgboxaddcat"></div>
							<div class="modal-footer">
							    <a onclick="adduser()" class="btn btn-primary">Add</a>
								<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							</div>
						</div>
					</div>
				</div>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Add User</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add User</h1>
			</div>
		</div><!--/.row-->
						
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Add User</div>
					 <button href="#" data-toggle="modal" data-target="#add_user" class="btn btn-primary" style="float:right;padding: 3px 19px;margin: 10px 15px 10px 10px;">ADD</button>
					<div class="panel-body">
						<table class="table" id="user_table" >
						    <thead>
						    <tr>
						     <th>Id</th>
						     <th>Email</th>
						     <th>role</th>
						     <th>status</th>
						     <th>Action</th>
						     <th>Action</th>
						    </tr>
						    </thead>
						    <tbody id="userListBody" >
						    	
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
	 $("#use").addClass('active');
	 loaduser();

	
});
function loaduser(){
	var url = '<?php echo base_url();?>data_controller/Loaduser';
	var xmlHttp = GetXmlHttpObject();
	if (xmlHttp != null) {
		try {
			xmlHttp.onreadystatechange=function() {
			if(xmlHttp.readyState == 4) {
				if(xmlHttp.responseText != null){
					document.getElementById('userListBody').innerHTML = xmlHttp.responseText;
					 $('#user_table').DataTable({
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
function adduser()
{
	var email=document.getElementById('email').value;
	var role=document.getElementById('role').value;
	var status=document.getElementById('status').value;
	document.getElementById('msgboxaddcat').innerHTML="";
	if(checkEmail(email)){
    
	if(status!=""){
		
		
	
	var url = '<?php echo base_url();?>data_controller/Adduser?email='+email+'&role='+role+'&status='+status;
	callServiceToFetchData(url,serverReply);
	var msg='<div class="alert alert-warning" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>Adding data please wait..</div>'
		document.getElementById('msgboxaddcat').innerHTML=msg;
	}else{
		var msg='<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>All fields is required</div>'
			document.getElementById('msgboxaddcat').innerHTML=msg;
	}
    	
	}else{
		var msg='<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>Enter a valid email address</div>'
			document.getElementById('msgboxaddcat').innerHTML=msg;
		}
}
var u_id;
function edituser(id){
	u_id=id;
	//$("#catid").val(catid);
	$("#edit_user").modal("show");
	document.getElementById('msgboxeditcat').innerHTML="";
		var url = '<?php echo base_url();?>data_controller/Edituser?id='+u_id;
			var xmlHttp = GetXmlHttpObject();
			if (xmlHttp != null) {
				try {
					xmlHttp.onreadystatechange=function() {
					if(xmlHttp.readyState == 4) {
						if(xmlHttp.responseText != null){
							document.getElementById('userBody').innerHTML = xmlHttp.responseText;
							
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
	
function edituserContinue()
{
	var email=document.getElementById('Editemail').value;
	var role=document.getElementById('Editrole').value;
	var status=document.getElementById('Editstatus').value;
	if(checkEmail(email)){
	    
		if(status!=""){
	
		
	
	var url = '<?php echo base_url();?>data_controller/UpdateUser?id='+u_id+'&email='+email+'&role='+role+'&status='+status;
	callServiceToFetchData(url,serverReply);
	var msg='<div class="alert alert-warning" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>Updating data please wait..</div>'
		document.getElementById('msgboxeditcat').innerHTML=msg;
	}else{
		var msg='<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>All fields is required</div>'
			document.getElementById('msgboxeditcat').innerHTML=msg;
	}
    	
	}else{
		var msg='<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>Enter a valid email address</div>'
			document.getElementById('msgboxeditcat').innerHTML=msg;
		}
}
function removeuser(id){
	u_id=id;
	
	$("#remove_user").modal("show");
	
}
function continueRemove(){
	var url = '<?php echo base_url();?>data_controller/RemoveUser?id='+u_id;
	callServiceToFetchData(url,serverReply);
	
}

function serverReply(response){
	var table = $('#user_table').DataTable();
	table.destroy();
	var sqlresponse = JSON.parse(response);
	try{
	if(sqlresponse.status === "empty"){
		
		alert("All fields should be fill!");

		$("#add_user").modal("hide");
		$("#edit_user").modal("hide");
		$("#remove_user").modal("hide");
	}else{

		if(sqlresponse.status === "success"){
			 loaduser();
			 $("#add_user").modal("hide");
				$("#edit_user").modal("hide");
				$("#remove_user").modal("hide");
			
		}
	}
	}catch(e){
		
		 loaduser();
		 $("#add_user").modal("hide");
			$("#edit_user").modal("hide");
			$("#remove_user").modal("hide");
		}
}
</script>
	<?php $this->load->view('components/global_footers')?>
