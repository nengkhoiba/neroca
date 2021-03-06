


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
<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet"> 
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	

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
             <li ><a href="<?php echo base_url();?>home/about"><i class="fa fa-paragraph"></i>&nbsp;&nbsp;About Neroca FC </a>
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
<li ><a href="<?php echo base_url();?>home/managing"><i class="fa fa-th-large"></i>&nbsp;&nbsp;Managing Committee </a>
    <div class="megamenu clearfix ">

        <div class="col-sm-4">
          <h3 class="title">1st Managing Committee </h3>
          <div class="fluid-width-video-wrapper"><a href="#"><img src="<?php echo base_url();?>nero/images/image01.jpg" alt=""/></a> </div>
      </div>
      <div class="col-sm-4">
          <h3 class="title">Neroca Officials </h3>
          <div class="fluid-width-video-wrapper"><img src="<?php echo base_url();?>nero/images/image02.jpg" alt=""/> </div>
      </div>
      <div class="col-sm-4">
          <h3 class="title">26th Managing Committee </h3>
          <div class="fluid-width-video-wrapper"><img src="<?php echo base_url();?>nero/images/image03.jpg" alt=""/> </div>
      </div>


      <div class="col-sm-4">
          <h3 class="title mrgtop">President and Secretary</h3>
          <div class="fluid-width-video-wrapper"><a href="#"><img src="<?php echo base_url();?>nero/images/image04.jpg" alt=""/></a> </div>
      </div>
      <div class="col-sm-4">
          <h3 class="title mrgtop">Panel of coaches</h3>
          <div class="fluid-width-video-wrapper"><img src="<?php echo base_url();?>nero/images/image05.jpg" alt=""/> </div>
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


<li aria-haspopup="true"><a href="<?php echo base_url();?>home/playerlist"><i class="fa fa-star" aria-hidden="true"></i></i>&nbsp;&nbsp;Player List </a>
    
</li>


</ul>
</nav>
</div>
</div>

<!--Menu HTML Code--> 


</div>
  <!-- End Header -->


    <!-- Start Intro -->
  <div class="intro" style="height:400px;">
    <div id="home-slider" class="owl-carousel owl-theme">
      <div class="item">
        <img src="<?php echo base_url();?>nero/img/slider/bg1.jpg" alt="">
        <div class="slide-content   col-md-12  text-center" style="width:100% !important;">
          <h2 style="color:white;"><span style="color:#FF5722">1</span> Select Match &nbsp; <span style="color:#FF5722">2</span> Select Gate &nbsp; <span style="color:#FF5722">3</span> Select Number of Tickets &nbsp; <span></h2>
          <p></p>
         
        </div>
      </div>
    
    </div>
  
  </div>
  <!-- End Intro -->











<div class="container" style="">
</div>


<div class="container">
<br>
<div class="row">
<div class="col-md-12">
<div class="col-md-4">
<h3>Select Match</h3>
<ul id="matchUl" class="list-group">
<?php $sql= "SELECT m.ID, home_team,
		away_team,
		(SELECT name FROM team where ID=m.home_team) AS h_team,
		(SELECT name FROM team where ID=m.away_team) AS a_team,
		(SELECT code FROM team where ID=m.home_team) AS h_code,
		(SELECT code FROM team where ID=m.away_team) AS a_code,
		(SELECT image FROM team where ID=m.home_team) AS h_img, 
		(SELECT image FROM team where ID=m.away_team) AS a_img, 

		`date` FROM matchs m WHERE DATE(date)>=CURDATE()";
$query = $this->db->query($sql);
if($query){
while($result=mysql_fetch_array($query->result_id))
{?>
<li style="cursor:pointer" onclick="SelectMatch('<?php echo $result['ID']?>','<?php echo $result['h_team']?>','<?php echo $result['a_team']?>','<?php echo $result['h_img']?>','<?php echo $result['a_img']?>')" class="list-group-item" id="li_<?php echo $result['ID']?>"><a  href="#"><?php echo $result['h_code']?> <span style="color:black;">  VS </span>   <?php echo $result['a_code']?> <br> <span style="color:grey;">
 <?php 
echo $nice_date = date('d-m-Y h:i:s A', strtotime( $result['date'] ));
?> 
</span>   </a></li>
<?php }
}?>
</ul>
</div>
<div class="col-md-5">
<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100%" height="100%" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
viewBox="0 0 1865 1688"
 xmlns:xlink="http://www.w3.org/1999/xlink">
 <defs>
  <font id="FontID1" horiz-adv-x="722" font-variant="normal" style="fill-rule:nonzero" font-weight="700">
	<font-face 
		font-family="Arial">
	</font-face>
   <missing-glyph><path d="M0 0z"/></missing-glyph>
   <glyph unicode="A" horiz-adv-x="722"><path d="M717.991 0l-156.147 0 -61.8445 162.997 -287.159 0 -59.5294 -162.997 -153.312 0 277.993 716.007 153.17 0 286.828 -716.007zm-265 283.993l-99.4992 265 -96.6645 -265 196.164 0z"/></glyph>
   <glyph unicode="R" horiz-adv-x="722"><path d="M72.9944 0l0 716.007 304.498 0c76.4906,0 132.193,-6.51989 166.824,-19.3234 34.8672,-12.8508 62.5059,-35.6704 83.3412,-68.5061 20.8353,-33.0247 31.3238,-70.4904 31.3238,-112.822 0,-53.86 -15.6383,-98.1763 -47.1511,-133.185 -31.5128,-35.009 -78.4749,-57.0254 -141.17,-66.1911 31.1821,-18.1423 56.8364,-38.1272 77.0103,-60.0019 20.3156,-21.8275 47.6708,-60.6633 82.0183,-116.319l87.3098 -139.658 -172.824 0 -103.657 156.336c-37.1823,55.5136 -62.6949,90.4753 -76.5378,104.98 -13.654,14.3627 -28.1584,24.3315 -43.4659,29.6702 -15.4966,5.33875 -39.828,8.03175 -73.1834,8.03175l-29.3395 0 0 -299.017 -144.997 0zm144.997 413.021l107.011 0c69.3093,0 112.492,2.97647 129.831,8.83492 17.1501,5.81121 30.8514,15.969 40.4895,30.3317 9.82708,14.3154 14.6934,32.316 14.6934,53.8127 0,24.1897 -6.51989,43.5132 -19.3707,58.49 -12.8036,14.8351 -30.9931,24.1897 -54.3324,28.0166 -11.8114,1.6536 -46.9621,2.50402 -105.499,2.50402l-112.822 0 0 -181.99z"/></glyph>
   <glyph unicode="O" horiz-adv-x="777"><path d="M42.9935 353.68c0,72.9944 11.0082,134.319 32.8357,183.974 16.158,36.5208 38.5051,69.3565 66.6635,98.3653 28.1584,28.9615 59.0097,50.4583 92.5069,64.632 44.6471,18.851 96.1448,28.3473 154.493,28.3473 105.688,0 190.022,-32.8357 253.52,-98.3181 63.3091,-65.6714 95.0109,-156.855 95.0109,-273.694 0,-115.799 -31.5128,-206.51 -94.3494,-271.804 -62.8366,-65.5296 -147.028,-98.1763 -252.197,-98.1763 -106.492,0 -191.297,32.505 -254.134,97.6566 -62.8366,65.0099 -94.3494,154.682 -94.3494,269.016zm149.013 4.81905c0,-81.1679 18.8037,-142.682 56.3167,-184.683 37.513,-41.8123 85.1838,-62.8366 142.823,-62.8366 57.8758,0 105.169,20.8353 142.351,62.3642 36.9933,41.6706 55.5136,103.988 55.5136,187.14 0,82.1601 -18.0006,143.532 -54.1907,183.833 -36.0011,40.5367 -83.8137,60.6633 -143.674,60.6633 -59.6239,0 -107.814,-20.4573 -144.335,-61.3248 -36.4736,-41.0092 -54.8049,-102.665 -54.8049,-185.155z"/></glyph>
   <glyph unicode="I" horiz-adv-x="277"><path d="M67.9864 0l0 716.007 144.997 0 0 -716.007 -144.997 0z"/></glyph>
   <glyph unicode="F" horiz-adv-x="610"><path d="M72.9944 0l0 716.007 492.015 0 0 -120.996 -347.019 0 0 -169.99 300.009 0 0 -121.043 -300.009 0 0 -303.978 -144.997 0z"/></glyph>
   <glyph unicode="T" horiz-adv-x="610"><path d="M234.007 0l0 595.011 -211.991 0 0 120.996 567.986 0 0 -120.996 -210.999 0 0 -595.011 -144.997 0z"/></glyph>
   <glyph unicode="C" horiz-adv-x="722"><path d="M530.993 264.008l139.989 -42.9935c-21.4967,-78.8529 -57.3089,-137.343 -107.295,-175.659 -50.0331,-38.1744 -113.342,-57.3561 -190.163,-57.3561 -95.1998,0 -173.344,32.505 -234.669,97.5149 -61.183,64.9627 -91.8454,153.832 -91.8454,266.654 0,119.153 30.8041,211.849 92.3179,277.851 61.5137,66.0021 142.493,98.9795 242.842,98.9795 87.6406,0 158.84,-25.9851 213.503,-77.8135 32.6467,-30.6624 56.9782,-74.6953 73.3251,-132.193l-143.012 -33.9696c-8.5042,36.9933 -26.1741,66.3328 -52.9623,87.8295 -27.0245,21.4967 -59.6712,32.127 -98.0346,32.127 -53.1513,0 -96.3337,-18.9927 -129.311,-57.1672 -33.1664,-37.9854 -49.6551,-99.6409 -49.6551,-184.966 0,-90.3336 16.2997,-154.824 48.8047,-193.187 32.6939,-38.5051 75.026,-57.6396 127.185,-57.6396 38.5051,0 71.6715,12.1421 99.3102,36.6626 27.6859,24.4732 47.6708,62.8366 59.6712,115.326z"/></glyph>
   <glyph unicode="N" horiz-adv-x="722"><path d="M72.9944 0l0 716.007 140.319 0 294.671 -479.826 0 479.826 134.036 0 0 -716.007 -144.855 0 -290.182 470.66 0 -470.66 -133.988 0z"/></glyph>
   <glyph unicode="Y" horiz-adv-x="667"><path d="M260.985 0l0 301.332 -262.496 414.674 169.517 0 169.328 -283.521 164.84 283.521 166.304 0 -262.496 -415.667 0 -300.34 -144.997 0z"/></glyph>
   <glyph unicode="H" horiz-adv-x="722"><path d="M72.9944 0l0 716.007 144.997 0 0 -282.009 282.009 0 0 282.009 144.997 0 0 -716.007 -144.997 0 0 313.002 -282.009 0 0 -313.002 -144.997 0z"/></glyph>
   <glyph unicode="V" horiz-adv-x="667"><path d="M256.165 0l-256.165 715.999 156.67 0 181.827 -530.005 174.5 530.005 154.005 0 -254.663 -715.999 -156.174 0z"/></glyph>
   <glyph unicode="E" horiz-adv-x="667"><path d="M72.9944 0l0 716.007 530.001 0 0 -120.996 -385.004 0 0 -159.029 358.027 0 0 -120.996 -358.027 0 0 -193.99 398.989 0 0 -120.996 -543.986 0z"/></glyph>
   <glyph unicode="S" horiz-adv-x="667"><path d="M34.9935 232l141.009 14.0031c8.50388,-47.1682 25.4975,-81.6656 51.3351,-103.832 25.8235,-22.1668 60.661,-33.1651 104.499,-33.1651 46.332,0 81.3255,9.82199 104.825,29.4943 23.5132,19.6723 35.3336,42.6611 35.3336,68.9948 0,17.0078 -4.98894,31.3368 -14.8251,43.3415 -9.83616,11.8346 -27.1699,22.1668 -51.8312,30.8266 -16.8377,6.00941 -55.176,16.3416 -115.171,31.3368 -77.1727,19.3322 -131.328,43.0013 -162.495,71.1633 -43.8375,39.5005 -65.6783,87.675 -65.6783,144.509 0,36.4958 10.3464,70.8232 30.8408,102.656 20.6644,31.8329 50.3288,55.9981 89.1632,72.6657 38.8344,16.6676 85.5065,25.0014 140.498,25.0014 89.5034,0 157.01,-19.8282 202.166,-59.6689 45.3399,-39.8265 69.009,-92.8199 71.3334,-159.32l-144.991 -5.00312c-6.16532,36.9919 -19.3322,63.4957 -39.5005,79.6672 -20.1684,16.1574 -50.4989,24.3353 -90.8356,24.3353 -41.669,0 -74.3381,-8.67396 -97.8372,-26.0077 -15.1653,-11.1684 -22.8329,-25.9935 -22.8329,-44.6596 0,-17.0078 7.17161,-31.5069 21.5007,-43.5115 18.17,-15.4912 62.3335,-31.4927 132.505,-48.1603 70.1712,-16.4975 122.002,-33.8313 155.494,-51.5052 33.6754,-17.8298 60.0091,-41.995 79.0011,-72.8216 19.0062,-30.8408 28.5022,-68.8389 28.5022,-114.009 0,-41.0029 -11.3385,-79.4971 -34.1714,-115.327 -22.8329,-35.8439 -54.9918,-62.5035 -96.6608,-79.8373 -41.669,-17.5038 -93.6703,-26.1636 -155.834,-26.1636 -90.4955,0 -160.001,20.8345 -208.501,62.6594 -48.5005,41.669 -77.3286,102.5 -86.8388,182.337z"/></glyph>
   <glyph unicode=" " horiz-adv-x="277"></glyph>
  </font>
  <font id="FontID0" horiz-adv-x="662" font-variant="normal" style="fill-rule:nonzero" font-style="normal" font-weight="700">
	<font-face 
		font-family="Kozuka Gothic Pro B">
	</font-face>
   <missing-glyph><path d="M0 0z"/></missing-glyph>
   <glyph unicode="D" horiz-adv-x="706"><path d="M74.998 2.99668c38.9973,-5.00121 95.995,-10.0024 167.004,-10.0024 134,0 240.99,30.9994 311.007,94.0107 58.9819,52.9886 116,149.004 116,314.003 0,139.001 -43.0064,233.984 -116,293.999 -64.0034,52.9886 -151.008,79.9992 -279.015,79.9992 -74.998,0 -144.995,-6.01361 -198.996,-16.016l0 -755.993zm146.999 649.996c15.9958,3.01693 38.9973,6.01361 69.9968,6.01361 136.997,0 221.997,-86.0128 221.997,-260.002 0,-202.013 -93.9904,-288.997 -234.996,-288.005 -20.0049,0 -41.994,0 -56.9977,2.99668l0 538.997z"/></glyph>
   <glyph unicode="A" horiz-adv-x="662"><path d="M422.997 768.992l-185.997 0 -218.008 -768.992 150.016 0 52.9886 203.005 206.001 0 54.9931 -203.005 155.017 0 -215.012 768.992zm-180.003 -453.997l46.0031 176.014c10.9946,44.9907 23.9937,107.982 33.9961,155.989l2.99668 0c10.0024,-46.9952 23.0015,-108.994 35.0085,-157.002l46.0031 -175.002 -164.007 0z"/></glyph>
   <glyph unicode="L" horiz-adv-x="522"><path d="M497.995 125.01l-274.986 0 0 643.982 -148.012 0 0 -768.992 422.997 0 0 125.01z"/></glyph>
   <glyph unicode="I" horiz-adv-x="298"><path d="M74.998 0l148.012 0 0 768.992 -148.012 0 0 -768.992z"/></glyph>
   <glyph unicode="F" horiz-adv-x="536"><path d="M223.01 0l0 321.009 245.991 0 0 120.981 -245.991 0 0 203.005 263.991 0 0 123.998 -412.003 0 0 -768.992 148.012 0z"/></glyph>
   <glyph unicode="C" horiz-adv-x="598"><path d="M544.991 138.009c-29.987,-12.9991 -78.9868,-22.0094 -124.99,-22.0094 -139.001,0 -228.011,92.9983 -228.011,267.008 0,185.997 102.009,273.002 229.003,273.002 53.0088,0 92.9983,-12.007 123.006,-25.0061l28.9949 119.989c-21.9891,12.007 -75.9901,29.0151 -158.986,29.0151 -204.017,0 -377.015,-136.005 -377.015,-404.997 0,-228.011 128.007,-385.013 359.014,-385.013 78.9868,0 140.986,15.0036 170.001,28.9949l-21.0173 119.017z"/></glyph>
   <glyph unicode="K" horiz-adv-x="623"><path d="M383.008 440.006l232 328.987 -176.014 0 -165 -260.002c-15.9958,-28.9949 -32.9837,-57.9898 -48.9998,-87.9971l-2.99668 0 0 348 -146.999 0 0 -768.992 146.999 0 0 262.999 56.9977 77.0025 177.999 -340.002 169.009 0 -242.994 440.006z"/></glyph>
   <glyph unicode="H" horiz-adv-x="708"><path d="M633.008 768.992l-148.012 0 0 -306.998 -261.987 0 0 306.998 -148.012 0 0 -768.992 148.012 0 0 330.991 261.987 0 0 -330.991 148.012 0 0 768.992z"/></glyph>
   <glyph unicode="V" horiz-adv-x="637"><path d="M475.002 768.992l-89.0086 -340.001c-23.9884,-89.983 -46.9846,-183.988 -63.9926,-275.99l-2.99412 0c-15.9982,92.9948 -39.0121,184.998 -62.0084,275.99l-87.0066 340.001 -161.984 0 223 -768.992 168.999 0 233.984 768.992 -158.989 0z"/></glyph>
   <glyph unicode="E" horiz-adv-x="543"><path d="M505.001 123.998l-281.992 0 0 213.999 250.992 0 0 121.001 -250.992 0 0 185.997 265.996 0 0 123.998 -414.007 0 0 -768.992 430.003 0 0 123.998z"/></glyph>
   <glyph unicode="B" horiz-adv-x="625"><path d="M433.992 415c82.0037,30.9994 123.006,95.995 123.006,165.992 0,63.0113 -28.9949,114.016 -74.998,145.015 -53.0088,36.9928 -118.997,48.9998 -211.995,48.9998 -74.998,0 -151.008,-7.00575 -195.007,-16.016l0 -755.993c36.0006,-5.00121 90.9938,-10.0024 164.007,-10.0024 136.997,0 222.989,25.0061 274.986,72.0013 45.0109,40.0097 70.017,97.9995 70.017,158.014 0,97.9995 -64.0034,165.992 -150.016,187.981l0 4.00907zm-211.995 41.0019l0 203.997c12.9991,2.99668 33.004,5.00121 64.9955,5.00121 66.0079,0 123.006,-25.0061 123.006,-100.996 0,-63.0113 -49.9919,-108.002 -134,-108.002l-54.001 0zm0 -108.002l54.9931 0c76.0104,0 152,-31.9916 152,-121.001 0,-87.0049 -67.9922,-123.006 -147.991,-123.006 -25.9982,0 -43.9985,1.01239 -59.0022,4.00907l0 239.998z"/></glyph>
   <glyph unicode="P" horiz-adv-x="599"><path d="M74.9947 0l147.013 0 0 288.002c14.9883,-2.99412 32.9884,-4.00397 54.0004,-4.00397 114.999,0 290.996,47.0023 290.996,258.008 0,70.9907 -28.0101,132.999 -74.0026,171.993 -49.0043,42.0062 -121.997,60.9985 -218.996,60.9985 -85.0046,0 -150.999,-6.99809 -199.011,-15.9982l0 -759zm147.013 653.993c12.9863,3.01183 33.9983,6.00595 63.9926,6.00595 81.9928,0 133.991,-42.9984 133.991,-124.991 0,-83.0026 -53.9827,-135.001 -145.985,-135.001 -22.0041,0 -38.0023,0.992134 -51.9984,3.98625l0 250z"/></glyph>
   <glyph unicode="J" horiz-adv-x="414"><path d="M347.007 768.992l-148.012 0 0 -505.001c0,-119.989 -43.9985,-149.996 -110.999,-149.996 -28.9949,0 -54.9931,5.00121 -74.0058,11.0148l-15.9958 -121.001c25.9982,-9.01029 69.0046,-15.0036 104.013,-15.0036 142.99,0 244.999,61.9989 244.999,273.994l0 505.993z"/></glyph>
   <glyph unicode="G" horiz-adv-x="688"><path d="M631.003 428.991l-252.005 0 0 -116.992 110.999 0 0 -188.001c-12.9991,-5.99336 -39.9895,-10.9946 -75.9901,-10.9946 -127.015,0 -222.017,90.0016 -222.017,268 0,185.997 104.013,270.005 241.01,270.005 67.9922,0 111.991,-12.007 146.999,-28.0028l30.9994 121.993c-36.9928,18.0003 -102.009,31.9916 -180.003,31.9916 -221.005,0 -394.003,-138.981 -394.003,-398.984 0,-122.013 38.0052,-226.998 104.013,-292.014 64.9955,-63.9832 153.985,-93.9904 270.997,-93.9904 87.0049,0 173.99,20.997 219.001,38.0052l0 398.984z"/></glyph>
  </font>
  <style type="text/css">
   <![CDATA[
    @font-face { font-family:"Arial";src:url("#FontID1") format(svg)}
    @font-face { font-family:"Kozuka Gothic Pro B";src:url("#FontID0") format(svg)}
    .str0 {stroke:#A9ABAE;stroke-width:33.3274}
    .str1 {stroke:#FEFEFE;stroke-width:8.33127}
    .fil0 {fill:none}
    .fil4 {fill:#FEFEFE}
    .fil2 {fill:#BDBFC1}
    .fil3 {fill:#373435}
    .fil1 {fill:#277D0E}
    .fnt2 {font-weight:bold;font-size:24.995px;font-family:'Arial'}
    .fnt0 {font-weight:bold;font-size:58.3224px;font-family:'Kozuka Gothic Pro B'}
    .fnt1 {font-weight:bold;font-size:66.6549px;font-family:'Kozuka Gothic Pro B'}
    .fnt3 {font-weight:bold;font-size:83.3198px;font-family:'Arial'}
   ]]>
  </style>
    <clipPath id="id0">
     <rect x="1032" y="793" width="136" height="140"/>
    </clipPath>
    <clipPath id="id1">
     <rect x="704" y="794" width="138" height="137"/>
    </clipPath>
 </defs>
 <g id="Layer_x0020_1">
  <metadata id="CorelCorpID_0Corel-Layer"/>
  <g id="_1068598686656">
   <path class="fil0 str0" d="M618 1666c-358,-123 -596,-440 -596,-796 0,-468 408,-848 911,-848 502,0 910,380 910,848 0,351 -232,665 -583,791"/>
   <ellipse class="fil1" transform="matrix(1.954E-014 -0.547258 1.28069 2.51592E-014 937.407 858.091)" rx="859" ry="408"/>
   <path class="fil2" d="M230 904c-1,-15 -2,-31 -2,-46l164 10c0,9 0,17 1,26 3,46 13,89 29,130l-152 56c-22,-56 -36,-115 -40,-176zm2 -107c8,-77 31,-150 67,-216l143 73c-24,47 -40,99 -47,152l-163 -9zm99 -271c43,-64 98,-121 162,-169l95 122c-45,35 -83,75 -114,120l-143 -73zm217 -205c68,-41 144,-71 226,-89l28 147c-57,14 -111,35 -159,64l-95 -122zm293 -100c17,-2 33,-4 50,-5 68,-4 133,1 196,13l-44 144c-46,-8 -93,-11 -141,-8 -11,1 -22,2 -33,3l-28 -147zm312 24c79,23 153,59 218,104l-108 113c-47,-31 -99,-56 -154,-73l44 -144zm270 145c59,51 110,111 147,179l-150 60c-28,-48 -63,-90 -105,-127l108 -112zm175 236c26,60 42,125 47,193 1,9 1,18 2,27l-164 -6c-1,-3 -1,-7 -1,-11 -4,-51 -15,-99 -34,-144l150 -59zm47 282c-6,76 -27,150 -60,217l-145 -69c22,-48 37,-100 41,-154l164 6zm-90 273c-41,65 -94,124 -157,173l-99 -120c44,-35 81,-76 110,-122l146 69zm-211 211c-72,46 -154,80 -244,99l0 -155c53,-14 101,-36 145,-64l99 120zm-896 -310c26,48 60,91 101,129l-111 109c-59,-52 -107,-114 -142,-183l152 -55zm152 170c52,38 112,67 177,85l0 155c-107,-23 -206,-68 -289,-130l112 -110z"/>
   <g transform="matrix(0.818141 0 0 1 344.849 -645.547)">
    <text x="933" y="844"  class="fil3 fnt0">F</text>
   </g>
   <rect class="fil0 str1" x="526" y="590" width="825" height="544"/>
   <polyline class="fil0 str1" points="526,892 502,892 502,833 526,833 "/>
   <polyline class="fil0 str1" points="527,936 568,936 568,789 526,789 "/>
   <polyline class="fil0 str1" points="529,1025 652,1025 652,700 526,700 "/>
   <path class="fil0 str1" d="M653 803c18,11 30,34 30,59 0,26 -12,49 -31,60"/>
   <line class="fil0 str1" x1="937" y1="590" x2="937" y2= "1134" />
   <ellipse class="fil0 str1" cx="939" cy="862" rx="73" ry="75"/>
   <polyline class="fil0 str1" points="1350,892 1374,892 1374,833 1350,833 "/>
   <polyline class="fil0 str1" points="1349,936 1308,936 1308,789 1350,789 "/>
   <polyline class="fil0 str1" points="1347,1025 1224,1025 1224,700 1350,700 "/>
   <path class="fil0 str1" d="M1223 803c-18,11 -30,34 -30,59 0,26 12,49 31,60"/>
   <path class="fil2" d="M1134 131l-8 0 0 -8c9,0 10,-1 13,4 -5,1 -3,4 -5,4zm44 -37l0 0c0,2 -2,4 -3,6 -2,3 -2,3 -2,7 -1,5 -5,6 -8,8 -4,4 1,8 -7,8 -8,0 -9,-1 -12,4 2,0 3,0 3,3 3,0 6,0 8,0 6,0 2,-2 6,-1 0,3 0,5 0,8 0,8 2,6 -16,6l0 10c2,0 3,1 5,2 -1,6 -3,4 -3,14l0 35c0,5 1,13 -4,13l0 0c-2,0 -5,0 -5,-4l0 -70 -38 0 0 70c0,2 -1,3 -3,4l-2 0c-1,-1 -2,-1 -3,-2 -1,-2 0,-41 0,-46 0,-10 -7,-15 1,-16l0 -10 -14 0c-3,0 -2,-9 -2,-14 2,-1 1,-1 3,0 2,2 8,1 11,1 0,-3 1,-3 3,-3 -3,-6 -4,-4 -12,-4 -8,0 -3,-4 -7,-8 -3,-2 -7,-2 -8,-9 -2,-11 -5,-8 -5,-12l0 0c0,-1 1,-3 2,-3 3,0 4,2 6,3 21,13 70,10 93,2 3,-1 9,-5 10,-5 2,0 3,1 3,3zm-72 29l10 0 0 8c-11,0 -7,0 -10,-3 -1,-1 -2,-1 -3,-1 0,-1 2,-4 3,-4z"/>
   <path class="fil2" d="M1426 274l-7 0 0 -8c8,0 10,-1 12,4 -5,2 -3,4 -5,4zm44 -37l0 0c0,2 -2,4 -3,6 -1,3 -1,4 -2,7 -1,6 -5,6 -7,9 -5,3 1,7 -8,7 -8,0 -9,-1 -12,4 2,1 3,1 4,3 2,0 5,0 7,0 6,0 2,-2 6,-1 0,3 0,6 0,9 0,7 2,5 -16,5l0 11c3,0 3,1 5,2 -1,5 -3,4 -3,13l0 35c0,5 1,13 -4,13l0 0c-2,0 -5,0 -5,-3l0 -71 -37 0 0 71c0,2 -2,3 -4,3l-2 0c-1,0 -2,-1 -3,-2 0,-2 0,-41 0,-46 0,-9 -7,-15 1,-15l0 -11 -14 0c-3,0 -2,-8 -2,-14 3,-1 1,-1 3,1 2,1 8,0 11,0 0,-2 1,-2 3,-3 -3,-5 -4,-3 -12,-4 -8,0 -3,-4 -7,-8 -2,-2 -6,-2 -8,-8 -2,-11 -4,-9 -4,-13l0 0c0,-1 1,-2 2,-2 2,0 4,1 5,2 22,13 71,10 93,3 3,-2 9,-5 10,-5 2,0 3,1 3,2zm-71 29l9 0 0 8c-11,0 -7,1 -10,-2 0,-1 -2,-2 -3,-2 1,-1 2,-4 4,-4z"/>
   <g transform="matrix(0.818141 0 0 1 636.964 -500.182)">
    <text x="933" y="844"  class="fil3 fnt0">E</text>
   </g>
   <path class="fil2" d="M1644 525l-7 0 0 -8c9,0 10,-1 13,4 -6,1 -3,4 -6,4zm44 -37l0 0c0,2 -2,4 -3,6 -1,2 -1,3 -2,7 -1,5 -4,5 -7,8 -4,4 1,8 -8,8 -7,0 -9,-2 -11,4 2,0 3,0 3,3 3,0 5,0 8,0 6,0 2,-3 6,-1 0,2 0,5 0,8 0,7 1,6 -16,6l0 10c2,0 3,1 4,2 -1,6 -3,4 -3,14l0 34c0,6 1,14 -3,14l0 0c-2,0 -6,-1 -6,-4l0 -70 -37 0 0 70c0,2 -2,3 -3,4l-3 0c-1,-1 -2,-1 -2,-2 -1,-2 0,-41 0,-46 -1,-10 -8,-15 1,-16l0 -10 -15 0c-2,0 -1,-9 -1,-14 2,-1 0,-1 2,0 3,2 8,1 11,1 1,-3 2,-3 4,-3 -3,-6 -4,-4 -12,-4 -9,0 -4,-4 -8,-8 -2,-2 -6,-3 -7,-9 -2,-11 -5,-8 -5,-12l0 0c0,-2 1,-3 2,-3 2,0 4,2 6,3 21,13 70,10 92,2 4,-1 9,-5 11,-5 1,0 2,1 2,3zm-71 29l9 0 0 8c-11,0 -7,0 -9,-3 -1,-1 -2,-1 -4,-1 1,-1 3,-4 4,-4z"/>
   <g transform="matrix(0.818141 0 0 1 852.869 -249.68)">
    <text x="933" y="844"  class="fil3 fnt0">D</text>
   </g>
   <path class="fil2" d="M1734 850l-8 0 0 -8c9,0 10,-2 13,4 -5,1 -3,4 -5,4zm44 -37l0 0c0,2 -2,4 -3,6 -2,2 -1,3 -2,6 -1,6 -5,6 -8,9 -4,4 1,8 -7,8 -8,0 -9,-2 -12,4 2,0 3,0 4,3 2,0 5,0 7,0 6,0 2,-3 6,-1 0,2 0,5 0,8 0,7 2,6 -16,6l0 10c2,0 3,1 5,2 -1,6 -3,4 -3,14l0 34c0,6 1,13 -4,13l0 0c-2,0 -5,0 -5,-3l0 -70 -38 0 0 70c0,2 -1,3 -3,3l-2 0c-1,0 -2,0 -3,-1 -1,-2 0,-41 0,-46 0,-10 -7,-16 1,-16l0 -10 -14 0c-3,0 -2,-9 -2,-14 2,-1 1,-1 3,0 2,2 8,1 11,1 0,-3 1,-3 3,-3 -3,-6 -4,-4 -12,-4 -8,0 -3,-5 -7,-8 -3,-2 -7,-3 -8,-9 -2,-11 -5,-9 -5,-12l0 0c0,-2 2,-3 3,-3 2,0 3,2 5,3 21,13 70,10 93,2 3,-1 9,-5 10,-5 2,0 3,1 3,3zm-72 29l10 0 0 8c-11,0 -7,0 -10,-3 -1,-1 -2,-1 -3,-1 0,-2 2,-4 3,-4z"/>
   <g transform="matrix(0.818141 0 0 1 942.282 75.2468)">
    <text x="933" y="844"  class="fil3 fnt0">C</text>
   </g>
   <path class="fil2" d="M1655 1176l-7 0 0 -7c9,0 10,-2 12,3 -5,2 -3,4 -5,4zm44 -37l0 0c0,3 -2,4 -3,6 -1,3 -1,4 -2,7 -1,6 -4,6 -7,9 -5,3 1,8 -8,8 -8,0 -9,-2 -12,3 2,1 3,1 4,3 2,0 5,0 7,0 6,0 2,-2 6,-1 0,3 0,6 0,9 1,7 2,5 -16,5l0 11c3,0 3,1 5,2 -1,5 -3,4 -3,14l0 34c0,5 1,13 -4,13l0 0c-2,0 -5,0 -5,-3l0 -71 -37 0 0 71c0,2 -2,3 -4,3l-2 0c-1,0 -2,-1 -3,-2 0,-2 0,-41 0,-45 0,-10 -7,-16 1,-16l0 -11 -14 0c-3,0 -2,-8 -2,-14 3,0 1,-1 3,1 2,1 8,0 11,0 0,-2 1,-2 3,-3 -3,-5 -4,-3 -12,-3 -8,-1 -3,-5 -7,-8 -2,-3 -6,-3 -8,-9 -2,-11 -4,-9 -4,-13l0 0c0,-1 1,-2 2,-2 2,0 4,1 5,2 22,13 71,11 93,3 3,-2 9,-5 10,-5 2,0 3,1 3,2zm-71 30l9 0 0 7c-11,0 -7,1 -10,-2 0,-1 -2,-1 -3,-2 1,-1 3,-3 4,-3z"/>
   <g transform="matrix(0.818141 0 0 1 863.537 401.905)">
    <text x="933" y="844"  class="fil3 fnt0">B</text>
   </g>
   <path class="fil2" d="M1442 1405l-8 0 0 -8c9,0 10,-1 13,4 -5,2 -3,4 -5,4zm44 -37l0 0c0,2 -2,4 -3,6 -2,3 -2,4 -2,7 -1,6 -5,6 -8,9 -4,3 1,8 -7,8 -8,-1 -9,-2 -12,3 2,1 3,1 3,3 3,0 6,0 8,0 6,0 2,-2 6,-1 0,3 0,6 0,9 0,7 1,5 -16,5l0 11c2,0 3,1 5,2 -1,5 -3,4 -3,13l0 35c0,5 1,13 -4,13l0 0c-2,0 -5,0 -5,-3l0 -71 -38 0 0 71c0,2 -1,3 -3,3l-2 0c-1,0 -3,-1 -3,-2 -1,-2 0,-41 0,-46 0,-9 -7,-15 1,-15l0 -11 -14 0c-3,0 -2,-8 -2,-14 2,0 1,-1 2,1 3,1 9,0 12,0 0,-2 1,-2 3,-3 -3,-5 -4,-3 -12,-3 -8,-1 -3,-5 -7,-8 -3,-3 -7,-3 -8,-9 -2,-11 -5,-9 -5,-13l0 0c0,-1 1,-2 2,-2 2,0 4,1 6,2 21,13 70,11 93,3 3,-2 9,-5 10,-5 2,0 3,1 3,2zm-72 29l10 0 0 8c-12,0 -7,1 -10,-2 -1,-1 -2,-1 -3,-2 0,-1 2,-4 3,-4z"/>
   <g transform="matrix(0.818141 0 0 1 650.179 630.858)">
    <text x="933" y="844"  class="fil3 fnt0">A</text>
   </g>
   <g transform="matrix(0.818141 0 0 1 20.1936 -651.546)">
    <text x="933" y="844"  class="fil3 fnt0">G</text>
   </g>
   <path class="fil2" d="M784 125l7 0 0 -8c-9,0 -10,-1 -12,4 5,1 3,4 5,4zm-44 -37l0 0c0,2 2,4 3,6 1,3 1,3 2,7 1,5 4,6 7,8 5,4 -1,8 8,8 8,0 9,-1 12,4 -2,0 -3,0 -4,3 -2,0 -5,0 -7,0 -6,0 -2,-2 -6,-1 0,3 0,5 0,8 -1,8 -2,6 16,6l0 10c-3,0 -3,1 -5,2 1,6 3,4 3,14l0 35c0,5 -1,13 4,13l0 0c2,0 5,0 5,-4l0 -70 37 0 0 70c0,2 2,3 4,4l2 0c1,-1 2,-1 3,-2 0,-2 0,-41 0,-46 0,-10 7,-15 -1,-16l0 -10 14 0c3,0 2,-9 2,-14 -3,-1 -1,-1 -3,0 -2,2 -8,1 -11,1 0,-3 -1,-3 -3,-3 3,-6 4,-4 12,-4 8,0 3,-4 7,-8 2,-2 6,-2 8,-9 2,-11 4,-8 4,-12l0 0c0,-1 -1,-3 -2,-3 -2,0 -4,2 -5,3 -22,13 -71,10 -93,2 -3,-1 -9,-5 -10,-5 -2,0 -3,1 -3,3zm71 29l-9 0 0 8c11,0 7,0 10,-3 0,-1 2,-1 3,-1 -1,-1 -3,-4 -4,-4z"/>
   <path class="fil2" d="M487 253l7 0 0 -8c-9,0 -10,-1 -13,4 6,2 3,4 6,4zm-44 -37l0 0c0,2 2,4 3,6 1,3 1,4 2,7 1,6 4,6 7,9 4,3 -1,7 8,7 7,0 9,-1 11,4 -1,1 -2,1 -3,3 -3,0 -5,0 -8,0 -5,0 -1,-2 -6,-1 0,3 0,6 0,9 0,7 -1,5 17,5l0 11c-3,0 -4,1 -5,2 1,5 3,4 3,13l0 35c0,5 -1,13 3,13l0 0c2,0 6,0 6,-3l0 -71 37 0 0 71c0,2 2,3 4,3l2 0c1,0 2,-1 2,-2 1,-2 1,-41 1,-46 0,-9 7,-15 -2,-15l0 -11 15 0c3,0 2,-8 2,-14 -3,-1 -1,-1 -3,1 -2,1 -8,0 -11,0 -1,-2 -2,-2 -3,-3 2,-5 3,-3 12,-4 8,0 3,-4 7,-8 2,-2 6,-2 7,-8 2,-11 5,-9 5,-13l0 0c0,-1 -1,-2 -2,-2 -2,0 -4,1 -6,2 -21,13 -70,11 -92,3 -4,-2 -9,-5 -11,-5 -1,0 -2,1 -2,2zm71 29l-9 0 0 8c11,0 7,1 9,-2 1,-1 2,-2 4,-2 -1,-1 -3,-4 -4,-4z"/>
   <g transform="matrix(0.818141 0 0 1 -280.141 -521.179)">
    <text x="933" y="844"  class="fil3 fnt0">H</text>
   </g>
   <path class="fil2" d="M270 477l7 0 0 -8c-9,0 -10,-1 -13,4 6,1 3,4 6,4zm-44 -37l0 0c0,2 2,4 3,6 1,2 1,3 2,7 1,5 4,5 7,8 4,4 -1,8 8,8 7,0 9,-2 11,4 -1,0 -2,0 -3,3 -3,0 -5,0 -8,0 -5,0 -1,-3 -6,-1 0,2 0,5 0,8 0,7 -1,6 17,6l0 10c-3,0 -4,1 -5,2 1,6 3,4 3,14l0 34c0,6 -1,14 3,14l0 0c2,0 6,-1 6,-4l0 -70 37 0 0 70c0,2 2,3 3,4l3 0c1,-1 2,-1 2,-2 1,-2 1,-41 1,-46 0,-10 7,-15 -2,-16l0 -10 15 0c3,0 2,-9 2,-14 -3,-1 -1,-1 -3,0 -2,2 -8,1 -11,1 -1,-3 -2,-3 -4,-3 3,-6 4,-4 12,-4 9,0 4,-4 8,-8 2,-2 6,-3 7,-9 2,-11 5,-8 5,-12l0 0c0,-2 -1,-3 -2,-3 -2,0 -4,2 -6,3 -21,13 -70,10 -92,2 -4,-1 -9,-5 -11,-5 -1,0 -2,1 -2,3zm71 29l-9 0 0 8c11,0 7,0 9,-3 1,-1 2,-1 4,-1 -1,-1 -3,-4 -4,-4z"/>
   <g transform="matrix(0.818141 0 0 1 -487.82 -297.672)">
    <text x="933" y="844"  class="fil3 fnt0">I</text>
   </g>
   <path class="fil2" d="M148 793l7 0 0 -8c-9,0 -10,-2 -13,4 6,1 3,4 6,4zm-44 -37l0 0c0,2 2,4 3,6 1,2 1,3 2,6 1,6 4,6 7,9 4,4 -1,8 8,8 7,0 9,-2 11,4 -2,0 -3,0 -3,3 -3,0 -5,0 -8,0 -5,0 -1,-3 -6,-1 0,2 0,5 0,8 0,7 -1,6 17,6l0 10c-3,0 -4,1 -5,2 1,6 3,4 3,14l0 34c0,6 -1,13 3,13l0 0c2,0 6,0 6,-3l0 -70 37 0 0 70c0,2 2,3 3,3l3 0c1,0 2,0 2,-1 1,-2 0,-41 1,-46 0,-10 7,-16 -2,-16l0 -10 15 0c3,0 2,-9 2,-14 -3,-1 -1,-1 -3,0 -3,2 -8,1 -11,1 -1,-3 -2,-3 -4,-3 3,-6 4,-4 12,-4 9,0 4,-5 8,-8 2,-2 6,-3 7,-9 2,-11 5,-9 5,-12l0 0c0,-2 -1,-3 -2,-3 -2,0 -4,2 -6,3 -21,13 -70,10 -92,2 -4,-1 -9,-5 -11,-5 -1,0 -2,1 -2,3zm71 29l-9 0 0 8c11,0 7,0 9,-3 1,-1 2,-1 4,-1 -1,-2 -3,-4 -4,-4z"/>
   <g transform="matrix(0.818141 0 0 1 -610.454 18.2565)">
    <text x="933" y="844"  class="fil3 fnt0">J</text>
   </g>
   <path class="fil2" d="M192 1128l7 0 0 -7c-9,0 -10,-2 -13,3 6,2 3,4 6,4zm-44 -37l0 0c0,3 1,4 3,6 1,3 1,4 1,7 2,6 5,6 8,9 4,3 -1,8 8,8 7,0 8,-2 11,3 -2,1 -3,1 -3,3 -3,0 -5,0 -8,0 -6,0 -2,-2 -6,-1 0,3 0,6 0,9 0,7 -1,5 16,5l0 11c-2,0 -3,1 -4,2 1,5 3,4 3,14l0 34c0,5 -1,13 3,13l0 0c2,0 6,0 6,-3l0 -71 37 0 0 71c0,2 1,3 3,3l2 0c2,0 3,-1 3,-2 1,-2 0,-41 0,-45 1,-10 8,-16 -1,-16l0 -11 15 0c2,0 1,-8 1,-14 -2,0 -1,-1 -2,1 -3,1 -9,0 -11,0 -1,-2 -2,-2 -4,-3 3,-5 4,-3 12,-3 8,0 3,-5 7,-8 3,-3 7,-3 8,-9 2,-11 5,-9 5,-13l0 0c0,-1 -1,-2 -2,-2 -2,0 -4,1 -6,2 -21,13 -70,11 -92,3 -4,-2 -10,-5 -11,-5 -1,0 -2,1 -2,2zm71 30l-9 0 0 7c11,0 7,1 9,-2 1,-1 2,-1 3,-2 0,-1 -2,-3 -3,-3z"/>
   <g transform="matrix(0.818141 0 0 1 -574.288 353.913)">
    <text x="933" y="844"  class="fil3 fnt0">K</text>
   </g>
   <path class="fil2" d="M407 1390l8 0 0 -8c-9,0 -10,-1 -13,4 5,2 3,4 5,4zm-44 -37l0 0c0,2 2,4 3,6 2,3 2,4 2,7 1,6 5,6 8,9 4,3 -1,8 7,8 8,-1 9,-2 12,3 -2,1 -3,1 -3,3 -3,0 -6,0 -8,0 -6,0 -2,-2 -6,-1 0,3 0,6 0,9 0,7 -2,5 16,5l0 11c-2,0 -3,1 -5,2 1,5 3,4 3,13l0 35c0,5 -1,13 4,13l0 0c2,0 5,0 5,-3l0 -71 38 0 0 71c0,2 1,3 3,3l2 0c1,0 2,-1 3,-2 1,-2 0,-41 0,-46 0,-9 7,-15 -1,-15l0 -11 14 0c3,0 2,-8 2,-14 -2,0 -1,-1 -3,1 -2,1 -8,0 -11,0 0,-2 -1,-2 -3,-3 3,-5 4,-3 12,-3 8,-1 3,-5 7,-8 3,-3 7,-3 8,-9 2,-11 5,-9 5,-13l0 0c0,-1 -1,-2 -2,-2 -3,0 -4,1 -6,2 -21,13 -70,11 -93,3 -3,-2 -9,-5 -10,-5 -2,0 -3,1 -3,2zm72 29l-10 0 0 8c12,0 7,1 10,-2 1,-1 2,-1 3,-2 0,-1 -2,-4 -3,-4z"/>
   <g transform="matrix(0.818141 0 0 1 -354.372 615.861)">
    <text x="933" y="844"  class="fil3 fnt0">L</text>
   </g>
   <path class="fil2" d="M907 1403l19 0 0 -11c-23,0 -26,-2 -33,5 14,2 8,6 14,6zm-116 -52l0 0c0,3 5,6 8,9 4,3 3,4 5,9 3,8 12,8 20,12 11,5 -3,11 20,11 20,0 23,-2 31,5 -6,1 -8,1 -9,4 -7,0 -14,0 -21,0 -15,1 -4,-3 -15,-1 0,4 0,8 0,12 -1,10 -4,8 42,8l0 14c-6,0 -8,1 -12,3 3,8 8,6 8,19l0 48c0,8 -3,18 9,18l0 0c5,0 14,0 14,-4l0 -98 98 0 0 98c0,2 5,4 9,4l6 0c3,0 6,-1 7,-2 2,-3 1,-57 1,-64 0,-13 19,-21 -4,-22l0 -14 39 0c7,0 4,-12 4,-20 -6,-1 -2,-1 -7,0 -6,3 -21,1 -29,1 -1,-3 -4,-3 -9,-4 8,-7 10,-5 32,-5 21,0 8,-6 19,-11 6,-3 17,-4 20,-12 5,-16 12,-12 12,-18l0 0c0,-1 -3,-3 -5,-3 -6,0 -10,2 -15,3 -56,19 -185,15 -244,4 -9,-2 -23,-7 -27,-7 -4,0 -7,1 -7,3zm188 41l-25 0 0 11c30,0 19,0 25,-4 3,-1 6,-1 9,-2 -1,-1 -6,-5 -9,-5z"/>
   <g transform="matrix(0.818141 0 0 1 137.785 651.855)">
    <text x="933" y="844"  class="fil3 fnt1">VIP</text>
   </g>
   <g style="clip-path:url(#id0)">
    <image id="home_img" x="1032" y="793" width="136" height="140" xlink:href="<?php echo base_url();?>/img/team/home.png"/>
   </g>
   <g style="clip-path:url(#id1)">
    <image id="away_img" x="704" y="794" width="138" height="137" xlink:href="<?php echo base_url();?>/img/team/away.png"/>
   </g>
   <g style="text-align:center"transform="matrix(0.975299 0 0 1 -209.009 127.076)">
    <text id="txtHome" x="933" y="844"   class="fil4 fnt2">HOME</text>
   </g>
   <g transform="matrix(0.975299 0 0 1 191.111 127.076)">
    <text id="txtAway" x="824" y="844"  class="fil4 fnt2">AWAY</text>
   </g>
   <g transform="matrix(0.975299 0 0 1 27.7833 51.5987)">
    <text x="877" y="844"  class="fil4 fnt3">VS</text>
   </g>
  </g>
 </g>
</svg>

<h5  id="proces" align="center" style="font-size:25px; font-family:roboto;">Khuman Lampak Stadium</h5>

<br>

</div>

						<div class="col-md-3">
						
							<div id="gate"></div>
			<h3 >No. of tickets</h3>
			
						<input class="form-control" disabled="disabled" id="count" placeholder="Enter no. of tickets" onkeyup="checkQty()" onblur="checkQty()" onchange="checkQty()"  type="number">
						
						
						<div class="css3-button pull-right " >
					
                <a  onclick="proceed()" href="#" style="font-size:18px;font-family: 'Roboto', sans-serif;">Proceed to pay</a>
              </div>
						</div>
						</div>
						
						
						
						
						
						</div>
						</div>
					
			


  <!-- Start Footer -->
  <footer id="footer">
    <div class="container">

      <!-- Start Footer-Top -->
      <div class="footer-top clearfix">
        <div class="widget col-lg-3 col-md-3 col-sm-6">
          <h5 class="widget-title">About FC</h5>
          <p>Having long desire of the people of the northern Imphal side particularly along the Imphal-Dimapur National Highway No.39 (Now, NH2), the North Eastern Re-Organising Cultural Association (NEROCA), Sangakpham Bazar,  <a href="<?php echo base_url();?>home/about">Read more ..</a> </p>
          <ul class="contact-info custom-list">
            <li><i class="fa fa-map-marker"></i><span> Sangakpham Rd, Chingmeirong, Heingang, Manipur 795010</span></li>
            
            <li><i class="fa fa-envelope"></i><span><a href="mailto:nerocafc2015office@gmail.com">nerocafc2015office@gmail.com</a></span></li>
          </ul>

            <ul class="social list-inline" style="margin-top: 2em;">
            <li><a href="https://www.facebook.com/Nerocafc/"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/NerocaFC"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/nerocafc/"><i class="fa fa-instagram"></i></a></li>


          </ul>

        </div>
        <div class="widget col-lg-3 col-md-3 col-sm-6">
          <h5 class="widget-title">Information</h5>
          <ul class="custom-list">
            <li><a href="http://i-league.org/">Hero I-League</a></li>
            
          </ul>
        </div>
        <div class="widget col-lg-3 col-md-3 col-sm-6">
          <h5 class="widget-title">Site Links</h5>
          <ul class="custom-list">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li><a href="<?php echo base_url();?>home/about">About</a></li>
            <li><a href="<?php echo base_url();?>home/achievement">Achievement</a></li>
            <li><a href="#">Contact</a></li>

           
          </ul>
        </div>
        <div class="widget col-lg-3 col-md-3 col-sm-6">
          <h5 class="widget-title">FC Newsletter</h5>
          <p>Thank you for joining our mailing list.</p>
          <form action="#" class="newsletter default-form">
            <input type="text" placeholder="you@example.com">
            <button class="button"><span>Register</span><i class="fa fa-arrow-circle-right"></i></button>
          </form>
        </div>
      </div>
      <!-- End Footer-Top -->

 <div class="container">
      
      <!-- Start Ticket -->
      <div class="ticket col-lg-4 col-md-12 col-sm-12" style="font-size: 13px; text-align: justify;">
          <!-- Start Sposnors -->
      <div class="sponsors clearfix">
        <h5 class="text-center">Sponsors</h5>
        <div class="sponsor-logo spon text-center col-lg-2 col-md-2 col-sm-4">
          <img src="<?php echo base_url();?>nero/img/sponser/partner1.png" alt="">
        </div>
        <div class="sponsor-logo spon text-center col-lg-2 col-md-2 col-sm-4">
          <img src="<?php echo base_url();?>nero/img/sponser/partner2.png" alt="">
        </div>
        <div class="sponsor-logo spon text-center col-lg-2 col-md-2 col-sm-4">
          <img src="<?php echo base_url();?>nero/img/sponser/partner3.png" alt="">
        </div>
        <div class="sponsor-logo spon text-center col-lg-2 col-md-2 col-sm-4">
          <img src="<?php echo base_url();?>nero/img/sponser/partner4.png" alt="">
        </div>
        <div class="sponsor-logo spon text-center col-lg-2 col-md-2 col-sm-4">
          <img src="<?php echo base_url();?>nero/img/sponser/partner5.png" alt="">
        </div>
       
      </div>
      <!-- End Sponsors -->
       
      </div>
      <!-- End Ticket -->

      

      <!-- Start Table -->
      <div class="table-info col-lg-4 col-md-12 col-sm-12">
        
        <!-- Start Sposnors -->
      <div class="sponsors clearfix">
        <h5 class="text-center">Event Partner</h5>
        
        <div class="sponsor-logo text-center col-lg-12 col-md-2 col-sm-4">
          <img src="<?php echo base_url();?>nero/img/sponser/partner6.png" alt="">
        </div>
       
      </div>
      <!-- End Sponsors -->
    </div>


 
     <div class="ticket col-lg-4 col-md-12 col-sm-12">
       
         <!-- Start Sposnors -->
      <div class="sponsors clearfix">
        <h5 class="text-center">IT Partner</h5>
        
        <div class="sponsor-logo text-center col-lg-12 col-md-2 col-sm-4">
          <img src="<?php echo base_url();?>nero/img/sponser/partner7.png" alt="">
        </div>
       
      </div>
      <!-- End Sponsors -->
       
      </div>



    

     



    </div>

    <!-- Start Copyrights -->
    <div class="copyrights clearfix text-center">
      <p class="col-lg-12"><span class="pull-left"> � Copyright 2017. All Rights Reserved,</span><span class="pull-right"> Website Developed & Maintained By <a href="http://www.mobimp.com/"> MOBIMP Services Pvt. Ltd.</a></span></p>
    </div>
    <!-- End Copyrights -->

  </footer>
  <!-- End Footer -->
  
  <!-- Start Back-to-Top -->
  <a href="#" id="back-to-top">
   <i class="fa fa-futbol-o" aria-hidden="true"></i>
  </a>
  <!-- End Back-to-Top -->

        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
       <script type="text/javascript" src="<?php echo base_url();?>nero/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>nero/bootstrap/js/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>nero/js/webslidemenu.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>nero/js/scripts.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>nero/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>nero/js/jquery.ba-outside-events.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>nero/js/tab.js"></script>
<script type="text/javascript" src='<?php echo base_url();?>nero/js/bootstrap-datepicker.js'></script>
<script type="text/javascript" src="<?php echo base_url();?>nero/js/jquery.timelinr-0.9.54.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>nero/twitter/jquery.tweet.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="<?php echo base_url();?>nero/assets/js/ie10-viewport-bug-workaround.js"></script>

        <script>
    $.fn.expose = function(options) {
    
  var $modal = $(this),
      $trigger = $("a[href=" + this.selector + "]");
  
  $modal.on("expose:open", function() {
    
    $modal.addClass("is-visible");
    $modal.trigger("expose:opened");
  });
  
  $modal.on("expose:close", function() {
    
    $modal.removeClass("is-visible");
    $modal.trigger("expose:closed");
  });
  
  $trigger.on("click", function(e) {
    
    e.preventDefault();
    $modal.trigger("expose:open");
  });
  
  $modal.add( $modal.find(".close") ).on("click", function(e) {
    
    e.preventDefault();
    
    // if it isn't the background or close button, bail
    if( e.target !== this )
      return;
    
    $modal.trigger("expose:close");
  });
  
  return;
}

$("#Popup").expose();

// Example Cancel Button

$(".cancel").on("click", function(e) {
  
  e.preventDefault();
  $(this).trigger("expose:close");
});

// Example Callbacks
/*
$("#Popup").on("expose:opened", function() {
  
  alert("Modal Opened!");
});

$("#Popup").on("expose:closed", function() {
  
  alert("Modal Closed!");
});
*/
</script>
   
					
					
					


					<script src="<?php echo base_url();?>js/service.js"></script>
						<script type="text/javascript">
							var gate,match_id,total,capacity,occupy;
							function _Select_gate(gate,capacity,occupy){
								this.gate=gate;
								this.capacity=capacity;
								this.occupy=occupy;
								checkQty();
								document.getElementById('count').disabled = false;
								$("#gateUl>li.active").removeClass("active");
								$('#gd'+gate).addClass('active');
								}
							function SelectMatch(ID,h_name,a_name,a_img,h_img){
								match_id=ID;
								var h = document.getElementById('home_img');
								var a = document.getElementById('away_img');
								h.setAttribute('xlink:href',"<?php echo base_url();?>/img/team/"+h_img);
								a.setAttribute('xlink:href',"<?php echo base_url();?>/img/team/"+a_img);
								$("#txtHome").text(h_name);
								$("#txtAway").text(a_name);
								$("#matchUl>li.active").removeClass("active");
								$('#li_'+ID).addClass('active');
								var url = "<?php echo site_url('home/get_gate_for_match'); ?>?q="+ID;
								var xmlHttp = GetXmlHttpObject();
								if (xmlHttp != null) {
									try {
										xmlHttp.onreadystatechange=function() {
										if(xmlHttp.readyState == 4) {
											if(xmlHttp.responseText != null){
												document.getElementById('gate').innerHTML = xmlHttp.responseText;
												
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
							function proceed(){
								total=$('#count').val();
								window.open("<?php echo base_url();?>home/proceed?g="+gate+"&m="+match_id+"&c="+total,"_self");
								}
							function checkQty(){
								
								var qty=$('#count').val();
								if(parseInt(capacity)<(parseInt(occupy)+parseInt(qty))){
									alert('Seat capacity reached!');
									$('#count').val('0');
									}
								
							}
						</script>
		 </body>
</html>