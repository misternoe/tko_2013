<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<!--[if lt IE 9]>
	<!--<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script> !-->
	<script src="<?php echo get_template_directory_uri(); ?>/library/js/html5shiv.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/selectivizr-min.js"></script>
<![endif]-->
<head>
		<meta charset="utf-8">
		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="author" content="TKO Advertising" />
        <meta name="keywords" content="TKO Advertising, Austin, Design, Agency" />
        <meta name="p:domain_verify" content="c442a768d238e05ad6ec024a964f0e61"/>
		<!-- <meta http-equiv="Content-Security-Policy" content="default-src 'none';
		connect-src 'self';
		img-src data: 'self' *.google-analytics.com *.g.doubleclick.net;
		script-src 'self' *.google-analytics.com ajax.googleapis.com;
		style-src 'self' 'unsafe-inline' http://fonts.googleapis.com;
		font-src 'self'  https://fonts.gstatic.com http://fonts.gstatic.com data:"> -->

		<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon.png">
		<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#000000"/>
		<meta name="msapplication-square70x70logo" content="<?php echo get_template_directory_uri(); ?>/library/images/tiny.png"/>
		<meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri(); ?>/library/images/square.png"/>
		<meta name="msapplication-wide310x150logo" content="<?php echo get_template_directory_uri(); ?>/library/images/wide.png"/>
		<meta name="msapplication-square310x310logo" content="<?php echo get_template_directory_uri(); ?>/library/images/large.png"/>


		<!-- STYLESHEETS -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/reset.css">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/twitterfeed.css">

        <!-- Load Jquery Assets -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/instafeed.min.js"></script>

        <!-- Page Modifications -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.backgroundSize.js"></script>

        <!-- Page Transitions -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/page-transitions.js"></script>

    	<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-43164049-1', 'auto');
		  ga('send', 'pageview');

		</script>
		<!-- end analytics -->
	</head>

	<body <?php body_class(); ?>>


<div id="preloader">
  <div id="status">&nbsp;</div>
</div>




		<div id="container">



    		<header class="header" id="topnav" role="banner">

				<div id="inner-content" class="wrap clearfix">

					<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
					<a id="logo" class="h1" title="<?php bloginfo('name'); ?>" href="<?php echo home_url(); ?>"></a>

					<!-- if you'd like to use the site description you can un-comment it below -->
					<?php // bloginfo('description'); ?>

                <a class="menu-btn" id="showMenu" title="Menu">Menu</a>
                <nav id="main-menu" class="">
                  <?php bones_main_nav(); ?>
                </nav>




				</div> <!-- end #inner-header -->





			</header> <!-- end header -->

            <!-- site-overlay -->
            <div class="site-overlay"></div>
