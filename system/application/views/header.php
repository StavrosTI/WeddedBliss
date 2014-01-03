<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Wedded Bliss - Presented By 
<?php if ( $branding['brand'] == 'ti' ) { ?>
	Travel Impressions
<?php } else { ?>
	American Express Vacations
<?php } ?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="robots" content="all">

<!-- Facebook Meta -->
<meta tour="og:title" content="Wedded Bliss">
<meta tour="og:type" content="website">
<meta tour="og:description" content="Wedded Bliss">
<meta tour="og:url" content="http://www.travimp.com/">
<meta tour="og:image" content="http://www.travimp.com/images/enews/tls3152_st_lucia_united_142x142.jpg">
<meta tour="og:site_name" content="Travel Impressions">


<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(), 'assets/css/base.css'; ?>" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(), 'assets/css/skeleton.css'; ?>" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(), 'assets/css/layout.css'; ?>" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(), 'assets/css/jquery.booklet.latest.css'; ?>" media="screen, projection, tv">

<!-- Polyfills -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script> <!-- Loading jQuery library for polyfills -->
<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/modernizr.2.7.1.min.js>\x3C/script>')</script>
<script type="text/javascript" src="<?php echo base_url(), 'assets/js/modernizr.2.7.1.min.js'; ?>"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="<?php echo base_url(), 'assets/js/respond.min.js'; ?>"></script>	
    <script src="<?php echo base_url(), 'assets/js/html5shiv.js'; ?>html5shiv.js"></script>
    <script src="<?php echo base_url(), 'assets/js/html5shiv-printshiv.js'; ?>html5shiv.js"></script>
<![endif]-->

<!-- Google Analytics -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-5957993-8']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</head>
<body>
<div id="content">
	<div class="container">
		<header class="navigation">
			<nav class="primary sixteen columns">
				<div class="logo-container four columns alpha">
					<?php if ( strtolower(trim($branding['brand'])) == 'ti' ) { ?>
						<img class="logo" src="<?php echo base_url(), 'assets/img/wb_logo_ti.png'; ?>" alt="Wedded Bliss">
					<?php } elseif ( strtolower(trim($branding['brand'])) == 'aev' ) { ?>
						<img class="logo" src="<?php echo base_url(), 'assets/img/wb_logo_aev.png'; ?>" alt="Wedded Bliss">
					<?php } else { ?>
						<img class="logo" src="<?php echo base_url(), 'assets/img/wb_logo.png'; ?>" alt="Wedded Bliss">
					<?php } ?>
				</div>
				
				<div class="nav-container twelve columns omega">
					<ul>
						<li><a href="<?php echo base_url(); ?>">Home</a></li>
						<li><a href="<?php echo base_url() , "album"; ?>">Wedding Album</a></li>
						<li><a href="<?php echo base_url() , "destination/mexico"; ?>">Mexico</a></li>
						<li><a href="<?php echo base_url() , "destination/caribbean"; ?>">Caribbean</a></li>
						<li><a href="<?php echo base_url() , "#"; ?>">Resorts</a>
							<ul>
								<?php foreach ( $suppliers as $key => $val ) { ?>
									<li><a href="<?php echo base_url() , "supplier/", $val['supplierindex']; ?>"><span>- </span><?php echo replacer($val['name']); ?></a></li>
								<?php } ?>
							</ul>	
						</li>
						<li><a href="<?php echo base_url() , "contact"; ?>">About Us</a></li>
					</ul>
				</div>
			</nav>
			<div class="nav-container-mobile">&nbsp;</div>
		</header>