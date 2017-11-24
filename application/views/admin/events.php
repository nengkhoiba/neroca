<?php $this->load->view('components/global_headers')?>
		
	 <div class="modal fade" id="UploadModel" tabindex="-1" data-backdrop="static" data-keyboard="false">
					<div class="modal-dialog modal-photo">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h3 class="modal-title">Upload image</h3>
							</div>
						<div class="modal-body">
						<form name="form_upload" id="form_upload" >
 
     					 <input id="file_upload" name="attachment_file" class="file_upload_icon" type="file"/>
      						 <div id="progress">
       						 <div id="bar"></div>
        					<div id="percent">0%</div >
							</div>
							</form>
  								<div id="uploadError">
								<div class="alert alert-info" role="alert">
								  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
									Note: You can upload jpeg, jpg, png file only with maximum size of 200kb.
								</div>
							</div>
						</div>
							
						</div>
      
					</div>
				</div>
		<div class="modal fade" id="remove_Sponsor" tabindex="-1" data-backdrop="static" data-keyboard="false">
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
				
		
				
				<div class="modal fade" id="Edit_Sponsor" tabindex="-1" data-backdrop="static" data-keyboard="false">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content col-md-12">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h3 class="modal-title">EDIT EVENT</h3>
							</div>
							<div id="SponsorBody" class="modal-body">
								
							</div>
							<div id="msgboxeditcat"></div>
							<div class="modal-footer">
							    <a onclick="editEventContinue()" class="btn btn-primary">Change</a>
								<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="add_Sponsor" tabindex="-1" data-backdrop="static" data-keyboard="false">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content col-md-12">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h3 class="modal-title">ADD EVENT</h3>
							</div>
							<div class="modal-body">
								<form>
							
								  <div class="form-group row">
									<label class="col-sm-4 form-control-label">Event name<a style="color: red;">*</a></label>
									<div class="col-sm-8">
									  <input id="eventname"  required class="form-control" placeholder="Event name" name="" value="">
									</div>
								  </div>
								  
								</form>
							</div>
							<div id="msgboxaddcat"></div>
							<div class="modal-footer">
							    <a onclick="addEvent()" class="btn btn-primary">Add</a>
								<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							</div>
						</div>
					</div>
				</div>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Events</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Events</h1>
			</div>
		</div><!--/.row-->
						
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Events List</div>
					 <button href="#" data-toggle="modal" data-target="#add_Sponsor" class="btn btn-primary" style="float:right;padding: 3px 19px; margin: 10px 15px 10px 10px;">ADD</button>
					<div class="panel-body">
						<table class="table" id="event_table" >
						    <thead>
						    <tr>
						     <th>Id</th>
						     <th>Occasion</th>
						     
						     <th>Image</th>
						     <th>Action</th>
						     <th>Action</th>
						    </tr>
						    </thead>
						    <tbody id="eventBody" >
						    	
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
	 $("#eve").addClass('active');
	 loadEvent();	
});

var a_id;
function eventimage(id){
	a_id=id;
	$("#UploadModel").modal("show");
}
function sendData(filename)
{
 
    var data = new FormData($('#form_upload')[0]);
    data.append("filename",filename);
    data.append("event_id",a_id);
    $.ajax({
    	  xhr: function() {
    	    var xhr = new window.XMLHttpRequest();

    	    xhr.upload.addEventListener("progress", function(evt) {
    	      if (evt.lengthComputable) {
    	        var percentComplete = evt.loaded / evt.total;
    	        percentComplete = parseInt(percentComplete * 100);
    	        $("#bar").width(percentComplete+'%');
    	        $("#percent").html(percentComplete+'%');

    	        if (percentComplete === 100) {
    	        	 $("#bar").width('100%');
    	             $("#percent").html('100%');
    	        }

    	      }
    	    }, false);

    	    return xhr;
    	  },
    	  type:"POST",
          url:"<?php echo site_url('data_controller/BackgroundUpload');?>",
          data:data,
          mimeType: "multipart/form-data",
           contentType: false,
           cache: false,
           processData: false,
    	  success: function(result) {
    		  var msg='<div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>Succesfully uploaded!</div>'
     				
                  document.getElementById('uploadError').innerHTML=msg;
    		 
    		  window.location.reload();
    	  }
    	});
   
 
}
(function($) {
    $.fn.checkFileType = function(options) {
        var defaults = {
            allowedExtensions: [],
            success: function() {},
            error: function() {}
        };
        options = $.extend(defaults, options);

        return this.each(function() {

            $(this).on('change', function() {
                var value = $(this).val(),
                    file = value.toLowerCase(),
                    extension = file.substring(file.lastIndexOf('.') + 1);
                loadFilename(extension);
                if ($.inArray(extension, options.allowedExtensions) == -1) {
                    options.error();
                    $(this).focus();
                } else {
                    options.success();

                }

            });

        });
    };

})(jQuery);
function loadFilename(ext){
	filename="back."+ext;
}
$(function() {
    $('#file_upload').checkFileType({
        allowedExtensions: ['jpg', 'jpeg','png'],
        success: function() {
        	sendData(filename);
        },
        error: function() {
        	var msg='<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>Invalid file. Supported files are jpg,jpeg,png.</div>'
				
           document.getElementById('uploadError').innerHTML=msg;
        }
    });

});

function loadEvent(){
	var url = '<?php echo base_url();?>data_controller/LoadEvent';
	var xmlHttp = GetXmlHttpObject();
	if (xmlHttp != null) {
		try {
			xmlHttp.onreadystatechange=function() {
			if(xmlHttp.readyState == 4) {
				if(xmlHttp.responseText != null){
					document.getElementById('eventBody').innerHTML = xmlHttp.responseText;
					 $('#event_table').DataTable({
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

function addEvent()
{
	var eventname=document.getElementById('eventname').value;

	
	document.getElementById('msgboxaddcat').innerHTML="";
	
				if(eventname!=""){
		
	var url = '<?php echo base_url();?>data_controller/AddEvent?e_name='+eventname;
	callServiceToFetchData(url,serverReply);
	var msg='<div class="alert alert-warning" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>Adding data please wait..</div>'
		document.getElementById('msgboxaddcat').innerHTML=msg;
	}else{
		var msg='<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>All manditory fields is required</div>'
			document.getElementById('msgboxaddcat').innerHTML=msg;
	}
    	
	
}

function editEvent(id){
	a_id=id;
	
	$("#Edit_Sponsor").modal("show");
	document.getElementById('msgboxeditcat').innerHTML="";
		var url = '<?php echo base_url();?>data_controller/EditEvent?e_id='+a_id;
			var xmlHttp = GetXmlHttpObject();
			if (xmlHttp != null) {
				try {
					xmlHttp.onreadystatechange=function() {
					if(xmlHttp.readyState == 4) {
						if(xmlHttp.responseText != null){
							document.getElementById('SponsorBody').innerHTML = xmlHttp.responseText;
							
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
	
function editEventContinue()
{
	var eventname=document.getElementById('Ueventname').value;
	
	
	document.getElementById('msgboxeditcat').innerHTML="";
	
    	
				if(eventname!=""){
		
	var url = '<?php echo base_url();?>data_controller/UpdateEvent?e_id='+a_id+'&e_name='+eventname;
	callServiceToFetchData(url,serverReply);
	var msg='<div class="alert alert-warning" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>Adding data please wait..</div>'
		document.getElementById('msgboxeditcat').innerHTML=msg;
	}else{
		var msg='<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>All manditory fields is required</div>'
			document.getElementById('msgboxeditcat').innerHTML=msg;
	}
    	
}

function removeEvent(id){
	a_id=id;
	
	$("#remove_Sponsor").modal("show");
	
}
function continueRemove(){
	var url = '<?php echo base_url();?>data_controller/RemoveEvent?event_id='+a_id;
	callServiceToFetchData(url,serverReply);
	
}

function serverReply(response){
	var table = $('#event_table').DataTable();
	table.destroy();
	var sqlresponse = JSON.parse(response);
	try{
	if(sqlresponse.status === "empty"){
		
		alert("All manditory fields should be fill!");

		$("#add_Sponsor").modal("hide");
		$("#Edit_Sponsor").modal("hide");
		$("#remove_Sponsor").modal("hide");
	}else{

		if(sqlresponse.status === "success"){
			 loadSponsor();
			 $("#add_Sponsor").modal("hide");
				$("#Edit_Sponsor").modal("hide");
				$("#remove_Sponsor").modal("hide");
			
		}
	}
	}catch(e){
		
		loadEvent();
		 $("#add_Sponsor").modal("hide");
			$("#Edit_Sponsor").modal("hide");
			$("#remove_Sponsor").modal("hide");
		}
}
</script>
	<?php $this->load->view('components/global_footers')?>
