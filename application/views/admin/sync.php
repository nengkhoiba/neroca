<?php $this->load->view('components/global_headers')?>
		
	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Sync</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sync</h1>
			</div>
		</div><!--/.row-->
						
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Sync data</div>
					 
						<form action="http://mobimp.com/manfete/sync/syncdata" method="post" accept-charset="utf-8">
					 <?php $sql="SELECT `id`, `sql_code` FROM `sql_data` WHERE sync='NO' ORDER BY id ASC";
					 $query = $this->db->query($sql);
					 $id=0;
					 $no=$query->num_rows();
					 if($query)
					 {
					 	while($result=mysql_fetch_array($query->result_id)){
					 		$id=$result['id'];
					 		?>
					 		
					 		<input type="hidden" name="sql[]" value="<?php echo $result['sql_code'];?>">
					 		<?php
					 	}
					 	$this->session->set_userdata('last', $id);
					 }
					 
					 ?>
					 <?php if($id!=0){?>
					 <input class="form-control" type="submit" value="Sync">
					 <?php }?>
					 </form>
					
					
					  <p>Number of ticket to be sync: <?php echo $no;?></p>
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
	 $("#sync").addClass('active');
	
});

</script>
	<?php $this->load->view('components/global_footers')?>
