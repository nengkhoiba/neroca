<?php $this->load->view('global_header.php');?>
  <body id="page-top">

    <nav id="mainNav" class="navbar navbar navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">MANFETE</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="<?php echo base_url();?>">Back</a>
                 
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
  
 <div class="container">
     <div class="row">
	 <div class="col-md-12">
	  <h2 class="section-heading text-center">Book Ticket online</h2>
	    <hr class="primary">
	 </div>
	 
	 <div class="col-md-6 text-center">
	   <img style="width:100%" alt="ticket" src="<?php echo base_url();?>img/neroca2.jpg">
	    <div class="css3-button  ">
                <a href="<?php echo base_url();?>_SELECT_TICKET?q=VIP" style="font-size:18px;font-family: 'Roboto', sans-serif;">VIP GALLERY ( Rs.300/- )</a>
              </div>
	 </div>
	 <div class="col-md-6 ">
	   <img style="width:100%" class="img-responsive" alt="ticket" src="<?php echo base_url();?>img/neroca1.jpg">
	    <div class="css3-button ">
                <a class="green" href="<?php echo base_url();?>_SELECT_TICKET?q=NOM" style="font-size:18px;font-family: 'Roboto', sans-serif;">GALLERY ( Rs.50/- )</a>
              </div>
	 </div>
	 
      
     </div>
 </div>	
<?php $this->load->view('global_footer');?>
