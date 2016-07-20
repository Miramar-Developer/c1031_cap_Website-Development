<!DOCTYPE html>

<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>CAPTEC Systems</title>

  <base href="http://miramar-connect.co.uk/captec/">
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic">
  <link rel="stylesheet" href="stylesheets/foundation.css">
  <link rel="stylesheet" href="stylesheets/app.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
  
  <!--[if lt IE 9]>
  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <script src="javascripts/modernizr.foundation.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="javascripts/respond.min.js"></script>
  <script src="javascripts/foundation.min.js"></script>
  <script src="javascripts/jquery.foundation.topbar.js"></script>
  <script src="javascripts/jquery.captec.slider.js"></script>
  <script src="javascripts/jquery.captec.quotes.js"></script>
  <script src="javascripts/jquery.captec.lightbox.js"></script>
  <script src="javascripts/app.js"></script>
  
  
</head>
<body>
<header>
	<div class="hero-<?php echo $current_page; ?>-container">
		<div class="row">
			<div class="twelve columns">
				<!-- Entire Navbar Code -->
				<div class="four columns">
					<img src="images/captec_menu_logo.png"/>
				</div>
				<div class="eight columns">
				<ul class="nav-bar">
					<li class="nav-bar" style="width:145px;"></li>
					<li class="<?php if($current_page == "home") echo "active"; else echo "nav-bar"; ?>"><a href="index">HOME</a></li>
					<li class="<?php if($current_page == "products") echo "active"; else echo "nav-bar"; ?>"><a href="products">PRODUCTS</a></li>
					<li class="<?php if($current_page == "services") echo "active"; else echo "nav-bar"; ?>"><a href="services">SERVICES</a></li>
					<li class="<?php if($current_page == "about") echo "active"; else echo "nav-bar"; ?>"><a href="about">ABOUT</a></li>
					<li class="<?php if($current_page == "contact") echo "active"; else echo "nav-bar"; ?>"><a href="contact">CONTACT</a></li>
				</ul>

				</div>
			</div>
		</div>