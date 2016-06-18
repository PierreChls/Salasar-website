<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
	        <meta charset="utf-8">
	        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	        <title>Wine Grower</title>
	        <meta name="description" content="Wine Grower">
	        <meta name="author" content="Wine Grower" />
	        <meta property="og:url" content="<?php echo get_site_url(); ?>/" /> 
			<meta property="og:image" content="<?php echo get_site_url(); ?>/images/og-image.png" />
			<meta property="og:site_name" content="Wine Grower" />
			<meta property="og:description" content="Wine Grower" />
			
	        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon">
		    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" type="image/png">
	        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.min.css">
	        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
			<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/supersized.css">
			
			<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style_video.css">
	        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bower_components/BigVideo/css/bigvideo.css">
	        
	        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/lightbox/css/lightbox.css">
	
	        <script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	        
	        <!-- jQuery library (served from Google) -->
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
			
			<!-- bxSlider Javascript file -->
			<script src="<?php bloginfo('template_directory'); ?>/BxSlider/jquery.bxslider.min.js"></script>
			<script src="<?php bloginfo('template_directory'); ?>/BxSlider/jquery.bxslider.js"></script>
			<!-- bxSlider CSS file -->
			<link href="<?php bloginfo('template_directory'); ?>/BxSlider/jquery.bxslider.css" rel="stylesheet" />
        </head>

		<body>
    	
        <!--[if lt IE 8]>
             <p class="chromeframe">Vous utilisez un navigateur obsolète. <a href="http://browsehappy.ch/fr/">Mettez à jour votre navigateur</a> ou <a href="http://www.google.com/chromeframe/?redirect=true">installez Google Chrome Frame</a> pour une meilleure expérience de ce site.</p>
        <![endif]-->
        <div class="header-container" id="top">
            <header class="wrapper clearfix">
                <h1 class="title"><a href="<?php echo get_site_url(); ?>/"><span></span></a></h1>
            </header>    
        </div>
        <nav id="nav-container">
            <ul class="wrapper clearfix menu_complete">
                <li><a href="<?php echo get_site_url(); ?>/histoire/">Histoire</a></li>
                <li><a href="<?php echo get_site_url(); ?>/terroir/">Le terroir</a></li>
                <li><a href="<?php echo get_site_url(); ?>/#cuvees">Nos cuvées</a></li>
                <li><a href="<?php echo get_site_url(); ?>/#tarifs">Nos tarifs</a></li>
                <li><a href="<?php echo get_site_url(); ?>/phototeque/">Phototèque</a></li>
                <li><a href="<?php echo get_site_url(); ?>/blog/">Blog</a></li>
                <li><a href="<?php echo get_site_url(); ?>/#contact">Contact</a></li>
                <li style="width:8%;"><a href="<?php echo get_site_url(); ?>/my-account/"><img src="<?php bloginfo('template_directory'); ?>/images/menu/account.svg" style="width: 15px; height: 15px;" /></a></li>
                <li style="width:8%;"><a href="<?php echo get_site_url(); ?>/cart/"><img src="<?php bloginfo('template_directory'); ?>/images/menu/cart.svg" style="width: 15px; height: 15px;" /></a></li>
            </ul>
            <ul class="wrapper clearfix menu_responsive">
            	<li id="open_menu" data-dialog="somedialog" style="width: 100%; cursor:pointer;"><img src="<?php bloginfo('template_directory'); ?>/images/menu/menu.svg" style="width: auto; height: 100%;" /></li>
            </ul>
        </nav>
