<?php $this->load->view('global_header.php');?>
   <body id="page-top">
 <nav id="mainNav" class="navbar navbar navbar-fixed-top">
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
                        <a class="page-scroll" href="<?php echo base_url();?>">Back</a>
                 
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
   <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
            <?php
$sql="SELECT `evnt_id`, `evnt_name`, `evnt_img` FROM `event` ORDER BY evnt_id DESC ";
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
    </section>

<?php $this->load->view('global_footer');?>
