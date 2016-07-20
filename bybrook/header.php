<!DOCTYPE html>

<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Bybrook Capital</title>

  <base href="http://www.miramar-connect.co.uk/captec/bybrook/">
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="assets/css/foundation.css">
  <link rel="stylesheet" href="assets/css/app.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/supersized.core.css"> 

  <script src="assets/js/modernizr.foundation.js"></script>
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/foundation.min.js"></script>
  <script src="assets/js/jquery.foundation.topbar.js"></script>
  <script src="assets/js/jquery.foundation.topbar.js"></script>
  <script src="assets/js/app.js"></script>
  <script src="assets/js/supersized.core.3.2.1.min.js"></script>
  
  <script type="text/javascript">
			
			jQuery(function($){
				
				$.supersized({
					slides  :  	[ {image : 'assets/img/background-drop.jpg'}]
				});
		    });
		    
		</script>
</head>
<body>
	<div id="content"></div>
<header>
	<div class="header_nav">
		<div class="row">
			<div class="twelve columns">
				<!-- Entire Navbar Code -->
				<div class="four columns header-image">
					<img src="assets/img/logo.png"/>
				</div>
				<div class="seven columns">
				<ul class="nav-bar">
					<li class="<?php if($current_page == "home") echo "active"; else echo "nav-bar"; ?>"><a href="index">About</a></li>
					<li class="<?php if($current_page == "strategy") echo "active"; else echo "nav-bar"; ?>"><a href="strategy">Strategy</a></li>
					<li class="<?php if($current_page == "infrastructure") echo "active"; else echo "nav-bar"; ?>"><a href="infrastructure">Infrastructure</a></li>
					<li class="<?php if($current_page == "management") echo "active"; else echo "nav-bar"; ?>"><a href="management">Management</a></li>
					<li class="nav-bar"><a href="https://bybrook.captecportal.com/">Login</a></li>
				</ul>

				</div>
			</div>
		</div>
</header>