<?php $this->load->view('global_header.php');
if($this->session->userdata("TID")!=null){
?>

<style>
.card-base > .card-icon {
        text-align: center;
        position: relative;
    }

.imagecard { 
    z-index: 2;
    display: block;
    positioN: relative;
    width: 88px;
    height: 88px;
    border-radius: 50%;
    border: 5px solid white;
    box-shadow: 1px 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    margin: 0 auto;
    color: white;
}
.card-base > .card-icon > .card-data {
    min-height: 250px !important;
    margin-top: -24px;
    background: ghostwhite;
    border: 1px solid #e0e0e0;
    padding: 40px 0 10px 0;
     box-shadow: 1px 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    min-height: 215px;
    }
    #widgetCardIcon {
        background: #0E703F !important;
        font-size: 28px;
        line-height: 78px;
    }
    </style>

          	   </head>
          	   	<body>
          	   	<div class="container">
<div class = "row">
    <div class = "col-md-6 col-md-offset-3">
          	   	<div class="card-base">
<div class="card-icon"><a href="#" title="Widgets" id="widgetCardIcon" class="imagecard"><span class="glyphicon glyphicon-check"></span></a>
<div class="card-data widgetCardData">
<h2 class="box-title" style="color: #0E703F;">Payment Successfull!</h2>
<p style="font-family: arial" class="card-block text-center">Your transaction id for this transaction is <?php echo $this->session->userdata("TID");?></p>
<a href="<?php echo base_url();?>" title="Style Builder" class="anchor btn btn-default" style="background: #000; border: #bb7824; color: whitesmoke;"> <i class="fa fa-paper-plane" aria-hidden="true"></i> Back to home</a>
<a href="<?php echo base_url();?><?php echo $this->session->userdata("URL");?>" title="Style Builder" class="anchor btn btn-default" style="background: #000; border: #bb7824; color: whitesmoke;"> <i class="fa fa-paper-save" aria-hidden="true"></i> Download Ticket</a></div>
</div>
</div>
</div>
</div>
	
</div>

          	   		</body>
       <script>$(function() {
    	    window.open("<?php echo base_url();?><?php echo $this->session->userdata("URL");?>");
       });</script>
          	   	</html>
      <?php echo $this->session->set_userdata("TID",null);
      
}else{
	redirect("home");
}
      ?>    	   	
          	   	
          	   	
    
      