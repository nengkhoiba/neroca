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
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php $sql="SELECT * FROM `ticket`";
							$q=$this->db->query($sql);
							echo $q->num_rows();
							?>
							
							</div>
							<div class="text-muted">Total</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php 
							$sql="SELECT * FROM `ticket` where type='ONL'";
							$q=$this->db->query($sql);
							echo $q->num_rows();
							?>
							</div>
							<div class="text-muted">Online</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php $sql=$sql="SELECT * FROM `ticket` where type='PBL' AND status='CLOSED'";
							$q=$this->db->query($sql);
							echo $q->num_rows();
							?></div>
							<div class="text-muted">Physical Entry</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php $sql="SELECT * FROM `ticket` where type='ONL' AND status='CLOSED'";
							$q=$this->db->query($sql);
							echo $q->num_rows();
							
							?></div>
							<div class="text-muted">Online Entry</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Physical Ticket Overview</div>
					<div class="panel-heading">Total Ticket sales: Rs.<?php $sql="SELECT * FROM `ticket` where status='CLOSED'";
							$q=$this->db->query($sql);
							$total=$q->num_rows();
							$total=$total*30;
							 echo $total;?></div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="main-chart" id="line-chart-public" height="200" width="600"></canvas>
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

	 $("#ticketdata").addClass('active');
	

	
});
var randomScalingFactor = function(){ return Math.round(Math.random()*1000)};
var label = [];
var datas = [];
<?php $sql="

SELECT COUNT(1) AS entries, DATE(entry) as date
FROM ticket
WHERE status='CLOSED'
GROUP BY DATE(entry)
		ORDER BY entry ASC
LIMIT 0 , 12";
$query = $this->db->query($sql);

if($query)
{
	$i=0;
	while($result=mysql_fetch_array($query->result_id)){
		?>
		
		label.push("<?php echo $result['date']; ?>");
		datas.push("<?php echo $result['entries']; ?>");
		<?php 
	}
}
?>
var lineChartData = {
		labels : label,
		datasets : [
			{
				label: "Site log",
				fillColor : "rgba(220,220,220,0.2)",
				strokeColor : "rgba(220,220,220,1)",
				pointColor : "rgba(220,220,220,1)",
				pointStrokeColor : "#fff",
				pointHighlightFill : "#fff",
				pointHighlightStroke : "rgba(220,220,220,1)",
				data : datas
			}
		]

	}


window.onload = function(){
var chart1 = document.getElementById("line-chart-public").getContext("2d");
window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true
});


};

</script>

	<?php $this->load->view('components/global_footers')?>

