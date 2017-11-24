<?php 
$sql="INSERT INTO `site_log`(`log_date`, `log_time`) VALUES (CURDATE(),CURTIME())";

$query=$this->db->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   

    <title>MANFETE</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet"> 
    <!-- Plugin CSS -->
    <link href="<?php echo base_url();?>vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url();?>css/creative.min.css" rel="stylesheet">
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

