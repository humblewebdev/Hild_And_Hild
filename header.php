<!DOCTYPE html>
<html>
<head>
<title></title>
<!-- ##### CSS Libraries ##### -->

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
	href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet"
	href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">

<!-- Jquery UI CSS library -->
<link rel="stylesheet"
	href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">

<!-- Foundation icon set -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/social_foundicons.css">

<!-- Main CSS library -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<!--<link rel="stylesheet" href="css/style.css">-->


<!-- ##### JS libraries ##### -->

<!-- Jquery library -->
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

<!-- Jquery UI js library -->
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script
	src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<header class="wrapper">

		<div class="header_top">
			<ul class="contact_info col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<li><span class="glyphicon glyphicon-map-marker"></span>70 NE Loop
					410 Suite 180 San Antonio, Texas 78216</li>
				<li><span class="glyphicon glyphicon-earphone"></span>1-210-366-0888</li>
				<li><span class="glyphicon glyphicon-envelope"></span>info@yoursite.com</li>
				<li><span class="glypicon"><i class="foundicon-skype"></i></span>YourSkype</li>
			</ul>
			<ul class="social pull-right col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<li><a href="#"><i class="foundicon-linkedin"></i></a></li>
				<li><a href="#"><i class="foundicon-twitter"></i></a></li>
				<li><a href="#"><i class="foundicon-facebook"></i></a></li>
			</ul>
		</div>
		<div class="clear"></div>


		<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header col-lg-5 col-md-5 col-sm-3 col-xs-12">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand pull-left" href="#"><img
					class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/Hild_Hild_logo.png"></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div
				class="collapse navbar-collapse navbar-ex1-collapse pull-left col-lg-6 col-md-7 col-sm-7">
				<?php 
				$defaults = array(
					'theme_location'  => '',
					'menu'            => '',
					'container'       => 'div',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'menu',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul class="nav navbar-nav">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);
				
				wp_nav_menu( $defaults ); ?>
				<!--<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Who We Are</a></li>
					<li><a href="#">Client Access</a></li>
					<li><a href="#">Resources</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>-->
			</div>
			<!-- /.navbar-collapse -->
		</nav>
		<div class="clear"></div>
	</header>

	<div class="slider">
		<div class="wrapper col-lg-12 col-md-12 col-sm-12">
			<?php if(is_home() || is_front_page()){ ?>
				<!-- Slider Goes Here -->
				<?php //putRevSlider("slider1") ?>
			<?php } ?> 
			<div class="clear"></div>
		</div>
	</div>
	<!-- END slider -->