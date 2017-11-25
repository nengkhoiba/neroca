<style type="text/css">
	.download{
	    color: #f0f3f7;
    text-decoration: underline;
	}
	ul.countdown {
	list-style: none;
	padding: 0;
    
	margin-top: 92px;
	display: block;
	text-align: center;
	}
	ul.countdown li {
	    display: inline-block;
	    margin: 0px 16px;
	    width: 122px;
	    margin-top: 100px;
	    padding: 16px 28px;
	    
	}
	ul.countdown li span {
	font-size: 60px;
	font-weight: bolder;
	line-height: 1.2;
	}
	ul.countdown li.seperator {
	font-size: 80px;
	display: none;
	line-height: 70px;
	vertical-align: top;
	}
	ul.countdown li p {
		color: #ffffff;
		font-size: 20px;
		line-height: 1;
		text-transform: capitalize;
		font-weight: bolder;
	}
	
			/* rewrite some rules from bootstrap */
			.has-feedback .form-control-feedback {
				top: 0;
			}

			.at-error {
				/* placed on a error labels */
				color: #A94442;
				margin: 6px 0;
			}

			.at-warning {
				/* placed on a warning (invalid) labels */
				color: #8A6D3B;
				margin: 6px 0;
			}

            .at-required-highlight {
                /* highlight required form fields */
                color: red;
            }
	
	
		
	
/*
TICKET CATEGORY SELECTION STYLE START HERE
*/

a{
         -webkit-transition: all 0.25s ease-in-out; 
    -moz-transition: all 0.25s ease-in-out;
    -o-transition: all 0.25s ease-in-out;
    -ms-transition: all 0.25s ease-in-out;
    transition: all 0.25s ease-in-out; 
    text-decoration:none;
}
/*submit button hover effect*/
.css3-button{margin:20px 0; text-align:left;}
.css3-button a{display:inline-block;  font-weight:bold; padding:10px 20px;; margin:auto; color:#ffffff;    background: linear-gradient(to right, #134477 50%,#ff5722 50%) no-repeat scroll right bottom / 210% 100% #134477 !important; border-radius:45px;}
.css3-button a.green{display:inline-block;  font-weight:bold; padding:10px 20px;; margin:auto; color:#ffffff;    background: linear-gradient(to right, #134477 50%,#0b9444 50%) no-repeat scroll right bottom / 210% 100% #134477 !important; border-radius:45px;}

.css3-button a:hover{  text-decoration:none;  background-position: left bottom !important;}

/*donate button hover effect*/
.hoverable-css{    background-color: #e6be1e;
    border-radius: 3px;
    font-size: 14px;
    font-weight: bold;
    line-height: 13px;
    border: 1px solid #e6be1e;
    color: #fff;
    padding: 13px 21px 13px 21px;
    text-transform: uppercase;
    font-family:arial;     position: relative;
    overflow: hidden; cursor:pointer;}

.anim { -moz-transform: translateY(-50%) translateX(-50%); -ms-transform: translateY(-50%) translateX(-50%);
        -webkit-transform: translateY(-50%) translateX(-50%); transform: translateY(-50%) translateX(-50%); 
        position: absolute; top: 50%; left: 50%; }
.anim:before { position: relative; content: ''; display: block; margin-top: 100%; }
.anim:after { content: ''; position: absolute; top: 0; bottom: 0; left: 0; right: 0; border-radius: 50%; }
.hoverable-css:hover .anim:after {
    -moz-animation: anim-out-pseudo 0.75s;
    -webkit-animation: anim-out-pseudo 0.75s;
    animation: anim-out-pseudo 0.75s;
}
.hoverable-css:hover .anim {
    -moz-animation: anim-out 0.75s;
    -webkit-animation: anim-out 0.75s;
    animation: anim-out 0.75s;
}

@-webkit-keyframes anim-out { 0% { width: 0%; }
  100% { width: 100%; } }
@-moz-keyframes anim-out { 0% { width: 0%; }
  100% { width: 100%; } }
@-ms-keyframes anim-out { 0% { width: 0%; }
  100% { width: 100%; } }
@keyframes anim-out { 0% { width: 0%; }
  100% { width: 100%; } }
@-webkit-keyframes anim-out-pseudo { 0% { background: rgba(0, 0, 0, 0.25); }
  100% { background: transparent; } }
@-moz-keyframes anim-out-pseudo { 0% { background: rgba(0, 0, 0, 0.25); }
  100% { background: transparent; } }
@-ms-keyframes anim-out-pseudo { 0% { background: rgba(0, 0, 0, 0.25); }
  100% { background: transparent; } }
@keyframes anim-out-pseudo { 0% { background: rgba(0, 0, 0, 0.25); }
  100% { background: transparent; } }

 /*
TICKET CATEGORY SELECTION STYLE START HERE
*/ 
  
	
	
	
	</style>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>NEROCA FC</title>
        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url();?>nero/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
         <!-- Stylesheets -->
        <link rel="stylesheet" href="<?php echo base_url();?>nero/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>nero/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>nero/css/webslidemenu.css" />

        <!-- font awesome -->
<link rel="stylesheet" href="<?php echo base_url();?>nero/font-awesome/css/font-awesome.min.css" />

<!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url();?>nero/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>nero/assets/css/mbr-additional.css" type="text/css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>



 <header id="header" class="third-version">
       <div class="container-fluid">
      <div class="header-logo">
        <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>nero/images/logo.png" alt="" width="120"></a>
        <h4 style="text-align: center;color: #fff;">NEROCA FC</h4>

      <!--    
        <div class="triangle-left"></div>
        <div class="triangle-right"></div>-->
      </div>
    </div>
    </header>
        
    <!-- Start Header -->
    <div id="header" class="third-version">

      <!--Main Menu HTML Code-->


      <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <nav class="wsdownmenu clearfix" style="margin-top: 3em;">
            <ul class="wsdown-mobile wsdownmenu-list">
             <li ><a href="<?php echo base_url();?>"><i class="fa fa-futbol-o" aria-hidden="true"></i>&nbsp;&nbsp;Home</a>

             </li>
             <li ><a href="#"><i class="fa fa-paragraph"></i>&nbsp;&nbsp;About Neroca FC </a>
                <div class="megamenu clearfix" >
                  <div class="typography-text clearfix">

                  <div class="col-lg-3 col-sm-12">
                      
                       <a href="<?php echo base_url();?>">  <img src="<?php echo base_url();?>nero/images/logo.jpg" alt=""></a>
                  </div>

                     <div class="col-lg-6 col-sm-12">
                      <h3 class="title">Neroca FC</h3>
                      <p>Having long desire of the people of the northern Imphal side particularly along the Imphal-Dimapur National Highway No.39 (Now, NH2), the North Eastern Re-Organising Cultural Association (NEROCA), Sangakpham Bazar, Imphal, Manipur was established in 1965 </p>
                      <a href="<?php echo base_url();?>home/about">Read More .. </a>
                  </div>

                  <div class="col-lg-3 col-sm-12">
                      <h3 class="title">Mission & Vision</h3>
                      <p>To promote and develop the game of Football in the state to National and International standards
To nurture sporting talents in general and Football in particular</p>
                  </div>

                  

                  <div class="cl"></div>



              </div>
          </div>
      </li>

      <li ><a href="<?php echo base_url();?>home/achievement"><i class="fa fa-trophy" aria-hidden="true"></i>&nbsp;&nbsp;Achievements </a>
        <div class="megamenu clearfix">
          <ul class="col-lg-3 col-md-3 col-xs-12 link-list">
            
            <li><a href="<?php echo base_url();?>home/achievement"><i class="fa fa-arrow-circle-right"></i><span class="title"> Acievements</span></a></li>
            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Neroca Players Transfers</a></li>

        </ul>

        <div class="col-lg-3 col-md-3 col-xs-12">
           
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="item active"> <img src="<?php echo base_url();?>nero/images/image01.jpg" alt="This is Product Name">
                  <div class="carousel-caption"> First Managing Committee </div>
              </div>
              <div class="item"><img src="<?php echo base_url();?>nero/images/image02.jpg" alt="This is Product Name">
                  <div class="carousel-caption"> Neroca Officials </div>
              </div>
              <div class="item"><img src="<?php echo base_url();?>nero/images/image03.jpg" alt="This is Product Name">
                  <div class="carousel-caption"> 26th   </div>
              </div>
              <div class="item"><img src="<?php echo base_url();?>nero/images/image04.jpg" alt="This is Product Name">
                  <div class="carousel-caption"> ActiveDen </div>
              </div>
              <div class="item"><img src="<?php echo base_url();?>nero/images/image05.jpg" alt="This is Product Name">
                  <div class="carousel-caption"> PhotoDune </div>
              </div>
              <div class="item"><img src="<?php echo base_url();?>nero/images/image06.jpg" alt="This is Product Name">
                  <div class="carousel-caption"> 3DOcean </div>
              </div>
          </div>
      </div>
  </div>
</div>
</li>
<li ><a href="#"><i class="fa fa-th-large"></i>&nbsp;&nbsp;Managing Committee </a>
    <div class="megamenu clearfix ">

        <div class="col-sm-4">
          <h3 class="title">Lorem</h3>
          <div class="fluid-width-video-wrapper"><a href="#"><img src="<?php echo base_url();?>nero/images/image01.jpg" alt=""/></a> </div>
      </div>
      <div class="col-sm-4">
          <h3 class="title">Lorem</h3>
          <div class="fluid-width-video-wrapper"><img src="<?php echo base_url();?>nero/images/image02.jpg" alt=""/> </div>
      </div>
      <div class="col-sm-4">
          <h3 class="title">Lorem</h3>
          <div class="fluid-width-video-wrapper"><img src="<?php echo base_url();?>nero/images/image03.jpg" alt=""/> </div>
      </div>


      <div class="col-sm-4">
          <h3 class="title mrgtop">Lorem</h3>
          <div class="fluid-width-video-wrapper"><a href="#"><img src="<?php echo base_url();?>nero/images/image04.jpg" alt=""/></a> </div>
      </div>
      <div class="col-sm-4">
          <h3 class="title mrgtop">Lorem</h3>
          <div class="fluid-width-video-wrapper"><img src="<?php echo base_url();?>nero/images/image05.jpg" alt=""/> </div>
      </div>
      <div class="col-sm-4">
          <h3 class="title mrgtop">Lorem</h3>
          <div class="fluid-width-video-wrapper"><img src="<?php echo base_url();?>nero/images/image06.jpg" alt=""/> </div>
      </div>

  </div>
</li>



<li ><a href="#"><i class="fa fa-paper-plane"></i>&nbsp;&nbsp;Contact Us </a>
    <div class="megamenu halfdiv">
      <h3 class="title">Contact Us</h3>
      <form name="contact_name" class="menu_form">
        <input type="text" placeholder="Name">
        <input type="text" placeholder="Email">
        <textarea placeholder="Your message..."></textarea>
        <input type="button" value="Reset">
        <input type="submit" value="Send">
    </form>
    <div class="cl"></div>
</div>
</li>


<li aria-haspopup="true"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></i>&nbsp;&nbsp;Player List </a>
    <ul class="wsdownmenu-submenu">
      <li><a href="#">Player List 2017-18 </a></li>
      <li><a href="#">Player List 2016-17</a></li>
      <li><a href="#">Player List 2015-16</a></li>
      <li><a href="#">Player List 2014-15</a></li>

  </ul>
</li>


</ul>
</nav>
</div>
</div>

<!--Menu HTML Code--> 


</div>
  <!-- End Header -->

  <body id="page-top">

  
 <div class="container mbr-section" style="padding-top: 120px; padding-bottom: 120px;">
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
