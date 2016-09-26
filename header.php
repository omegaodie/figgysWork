<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	
	<body class="home">
		<header id="header-section" class="ha-header centered ha-transparent ">
				<div id="container">
					<div class="grid-container">
		        <div class="ha-header-perspective">
		        	<div class="ha-header-front">
		                <div class="grid-20 tablet-grid-50 mobile-grid-50 ">                      
		                        <div class="site-logo">
		                            <a href="http://www.Airvision.ie/" title="AirVision.ie" rel="home"><img data-altlogo="http://localhost:8080/testing/wp-admin/admin-ajax.php?action=imgedit-preview&_ajax_nonce=7090298aba&postid=271&rand=84897" src="http://localhost:8080/testing/wp-admin/admin-ajax.php?action=imgedit-preview&_ajax_nonce=7090298aba&postid=271&rand=84897" alt="Airvision.ie"></a>
		                        </div>
		            </div>                 	
						<nav id="navigation" class="grid-80 hide-on-tablet hide-on-mobile ">
		                    <ul id="menu-main" class="menu sf-js-enabled sf-arrows">
		                        <li class="menu-item menu-item-type-post_type menu-item-object-page "><a href="/#workSection" class="">Our Work</a></li>
		                        <li class="menu-item menu-item-type-post_type menu-item-object-page "><a href="/#aboutUsSection" class="">About Us</a></li>
		                        <li class="contact-us menu-item menu-item-type-custom menu-item-object-custom "><a href="/#contactSection" class="">Contact</a></li>
		                        <li class="mfacebook menu-item menu-item-type-custom menu-item-object-custom "><a target="_blank" href="https://www.facebook.com/groups/screensiren/" class="">#</a></li>
		                        <li class="mtwitter menu-item menu-item-type-custom menu-item-object-custom "><a target="_blank" href="https://twitter.com/screensirenpics" class="">#</a></li>
		                    </ul>
		                </nav>                    
		                    <div class="ut-mm-trigger tablet-grid-50 mobile-grid-50 hide-on-desktop">
		                    	<button class="ut-mm-button"></button>
		                    </div>
		                    
						<nav style="width: 1923px; height: 690px; display: none;" id="ut-mobile-nav" class="ut-mobile-menu mobile-grid-100 tablet-grid-100 hide-on-desktop">
		                <div style="width: 1920px; height: 690px;" class="ut-scroll-pane">
		                   <ul id="menu-main" class="menu sf-js-enabled sf-arrows">
		                        <li class="menu-item menu-item-type-post_type menu-item-object-page "><a href="/#section-work" class="">Our Work</a></li>
		                        <li class="menu-item menu-item-type-post_type menu-item-object-page "><a href="/#section-story" class="">About Us</a></li>
		                        <li class="contact-us menu-item menu-item-type-custom menu-item-object-custom "><a href="/#section-contact" class="">Contact</a></li>
		                        <li class="mfacebook menu-item menu-item-type-custom menu-item-object-custom "><a target="_blank" href="https://www.facebook.com/groups/screensiren/" class="">#</a></li>
		                        <li class="mtwitter menu-item menu-item-type-custom menu-item-object-custom "><a target="_blank" href="https://twitter.com/screensirenpics" class="">#</a></li>
		                    </ul>
		                </div>
		                </nav>                                                                                               
		                </div>
		            </div><!-- close .ha-header-perspective -->
		    	</div>

		</header>