<?php $this->load->view('global_header.php');?>
    <body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Singju Festival</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Organizer</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Download</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
    <header>
        <div class="header-content">
            <div class="header-content-inner">
            <?php $sql="SELECT * FROM `ticket` where status='CLOSED'";
							$q=$this->db->query($sql);
							$total=$q->num_rows();
							if($total==0){
							?>
            	<div class="row">
						<div class="col-sm-12 text-center">
							<ul class="countdown">
								<li> <span class="days">00</span>
								<p class="days_ref">days</p>
								</li>
								<li class="seperator">.</li>
								<li> <span class="hours">00</span>
								<p class="hours_ref">hours</p>
								</li>
								<li class="seperator">:</li>
								<li> <span class="minutes">00</span>
								<p class="minutes_ref">minutes</p>
								</li>
								<li class="seperator">:</li>
								<li> <span class="seconds">00</span>
								<p class="seconds_ref">seconds</p>
								</li>
							</ul>
						</div>
					</div>
					<?php }else{?>
					<div class="row">
						<div style="font-size: 100px;
    font-family: inherit;" class="col-sm-12 text-center">
							
								 <span ><?php echo $total;?></span>
								<p>Visitor</p>
								
							
						</div>
					</div>
					<?php }?>
                <h1 id="homeHeading">Singju Festival 2017</h1>
                <hr>
                <p>"Save Our Culture & Identity"</p>
                <a href="<?php echo base_url();?>home/ticket" class="btn btn-primary btn-xl page-scroll">Book Ticket Online</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Singju Festival 2017</h2>
                    <hr class="light">
                    <p class="text-faded"> Under the provision of Singju Yokhatpa Lup (SYOL) , the Singju Festival commitee  is organising the SINGJU FESTIVAL 2017 with the theme "Save Our Culture & Identity" along with several Cultural programs from 28th January to 8th February 2017

The twelve days long festival will be organised at the MMRC and UNITY park everyday from 11:00am to 8:00pm. Stalls of variety of singju along with Book stalls, Crafts stall, Handloom and Handicrafts stalls, Florist stalls etc will be available.The stalls are already advised by the organisers to sell the items at a reasonable price.</p>
                   
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Organizer</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        
                        <img style="width: 200px; border-radius:50%" src="<?php echo base_url();?>img/organiser/1.jpeg" class="img-responsive portfolio-box" alt="">
                        <h3>Chungkham Ranabir</h3>
                        <p class="text-muted">Chairman</p>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        
                        <img style="width: 200px; border-radius:50%" src="<?php echo base_url();?>img/organiser/rajiv.jpeg" class="img-responsive portfolio-box" alt="">
                        <h3>N Rajivkumar</h3>
                        <p class="text-muted">Vice Chairman</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img style="width: 200px;border-radius:50%" src="<?php echo base_url();?>img/organiser/3.jpeg" class="img-responsive portfolio-box" alt="">
                        <h3>Rakesh Naorem</h3>
                        <p class="text-muted">Convenor</p>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        
                        <img style="width: 200px; border-radius:50%" src="<?php echo base_url();?>img/organiser/nara.jpeg" class="img-responsive portfolio-box" alt="">
                        <h3>Dr. M Nara</h3>
                        <p class="text-muted">Advisor</p>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        
                        <img style="width: 200px; border-radius:50%" src="<?php echo base_url();?>img/organiser/yaiskul.jpeg" class="img-responsive portfolio-box" alt="">
                        <h3>Yaiskul Khwairakpam</h3>
                        <p class="text-muted">Advisor</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        
                        <img style="width: 200px; border-radius:50%" src="<?php echo base_url();?>img/organiser/indra.jpeg" class="img-responsive portfolio-box" alt="">
                        <h3>Sagolshem Indrakumar</h3>
                        <p class="text-muted">Advisor</p>
                    </div>
                </div>
 <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        
                        <img style="width: 200px; border-radius:50%" src="<?php echo base_url();?>img/organiser/mangol.jpg" class="img-responsive portfolio-box" alt="">
                        <h3>S Mangoljao</h3>
                        <p class="text-muted">Programme Co-ordinator</p>
                    </div>
                </div>
				 <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        
                  	<img style="width: 200px; border-radius:50%" src="<?php echo base_url();?>img/organiser/noren.jpg" class="img-responsive portfolio-box" alt="">
                        <h3>N Noren</h3>
                        <p class="text-muted">Festival Director</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                       <img style="width: 200px;border-radius:50%" src="<?php echo base_url();?>img/organiser/2.jpeg" class="img-responsive portfolio-box" alt="">
                        <h3>H Sadananda</h3>
                        <p class="text-muted">Face of Singju Festival 2017</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img style="width: 200px;border-radius:50%" src="<?php echo base_url();?>img/organiser/4.jpg" class="img-responsive portfolio-box" alt="">
                        <h3>L Tonthoi</h3>
                        <p class="text-muted">Brand Ambassador</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img style="width: 200px;border-radius:50%" src="<?php echo base_url();?>img/organiser/meira.jpeg" class="img-responsive portfolio-box" alt="">
                        <h3>OC Meira</h3>
                        <p class="text-muted">Observer</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img style="width: 200px;border-radius:50%" src="<?php echo base_url();?>img/organiser/babulin.jpeg" class="img-responsive portfolio-box" alt="">
                        <h3>N. Babulin</h3>
                        <p class="text-muted">Executive Member</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img style="width: 200px;border-radius:50%" src="<?php echo base_url();?>img/organiser/pratap.jpeg" class="img-responsive portfolio-box" alt="">
                        <h3>Laimujam Pratap</h3>
                        <p class="text-muted">Executive Member</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img style="width: 200px;border-radius:50%" src="<?php echo base_url();?>img/organiser/subha.jpeg" class="img-responsive portfolio-box" alt="">
                        <h3>Laishram Subhadchandra</h3>
                        <p class="text-muted">Executive Member</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img style="width: 200px;border-radius:50%" src="<?php echo base_url();?>img/organiser/gyan.jpeg" class="img-responsive portfolio-box" alt="">
                        <h3>AK Gyaneshowri</h3>
                        <p class="text-muted">Executive Member</p>
                    </div>
                </div>
               
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img style="width: 200px;border-radius:50%" src="<?php echo base_url();?>img/organiser/menjor.jpeg" class="img-responsive portfolio-box" alt="">
                        <h3>Kh Menjor</h3>
                        <p class="text-muted">President SYOL</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 text-center">
                   <div class="col-lg-4 col-md-4 text-center">
                    <div class="service-box">
                        <img style="width: 200px;border-radius:50%" src="<?php echo base_url();?>img/organiser/mobi.jpeg" class="img-responsive portfolio-box" alt="">
                        <h3>A Mobi</h3>
                        <p class="text-muted">Founder Member SYOL</p>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-4 text-center">
                    <div class="service-box">
                        <img style="width: 200px;border-radius:50%" src="<?php echo base_url();?>img/organiser/punya.jpeg" class="img-responsive portfolio-box" alt="">
                        <h3>A Punyabanta</h3>
                        <p class="text-muted">Executive Member SYOL</p>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                         <img style="width: 200px;border-radius:50%" src="<?php echo base_url();?>img/organiser/dev.jpeg" class="img-responsive portfolio-box" alt="">
                        <h3>Y Devajani</h3>
                        <p class="text-muted">Executive Member SYOL</p>
                    </div>
                </div>
                </div>
                 
             
               
                
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
            <?php
$sql="SELECT `evnt_id`, `evnt_name`, `evnt_img` FROM `event` ORDER BY evnt_id DESC LIMIT 0,3";
$query = $this->db->query($sql);

if($query)
{
	while($result=mysql_fetch_array($query->result_id)){
?>
                <div class="col-lg-4 col-sm-6">
                    <a href="<?php echo $result['evnt_img'];?>" class="portfolio-box">
                        <img src="<?php echo $result['evnt_img'];?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                              
                                <div class="project-name">
                                    <?php echo $result['evnt_name'];?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <?php }}?>
               
             
             
              
            </div>
        </div>
        <div class="container text-center">
            <div class="call-to-action">
              
                <a href="<?php echo base_url();?>home/gallery" class="btn btn-default btn-xl sr-button">More</a>
            </div>
        </div>
    </section>
<section class="bg-dark" id="download">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Download</h2>
                    <hr class="light">
                    	<a class="download" href="download/stall.pdf">Download Stall form</a><br>
                		<a class="download" href="download/Dance.PDF">Download Dance competition form</a><br>
                		<a class="download" href="download/Marathon.PDF">Download Marathon form</a><br>
                		<a class="download" href="download/Painting.PDF">Download Painting competition form</a><br>
                		<a class="download" href="download/About.PDF">About Singju festival in details</a><br>
                		<a class="download" href="download/members.PDF">Members of Singju Festival 2017</a><br>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Get In Touch!</h2>
                    <hr class="primary">
                    <p>Feel free to contact us for more details.</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>9862100658, 9856390572, 9862170569</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:manipursingjufestival@gmail.com">manipursingjufestival@gmail.com</a></p>
                </div>
            </div>
        </div>
    </section>
<?php $this->load->view('global_footer');?>
