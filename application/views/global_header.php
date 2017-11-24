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
	
	</style>
 
</head>

