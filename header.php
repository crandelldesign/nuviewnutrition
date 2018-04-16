<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php html_schema(); ?> <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>

		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name=viewport content="width=device-width, initial-scale=1">

		<?php // https://sympli.io/blog/2017/02/15/heres-everything-you-need-to-know-about-favicons-in-2017/ ?>
		<link rel="apple-touch-icon" href="older-iPhone.png"> <?php // 120px ?>
		<link rel="apple-touch-icon" sizes="180x180" href="iPhone-6-Plus.png">
		<link rel="apple-touch-icon" sizes="152x152" href="iPad-Retina.png">
		<link rel="apple-touch-icon" sizes="167x167" href="iPad-Pro.png">

		<?php // favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="icon" href="<?php echo get_theme_file_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_theme_file_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_theme_file_uri(); ?>/assets/img/win8-tile-icon.png">
        <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // put font scripts like Typekit here ?>
		<?php // end fonts ?>

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

        <!--<div><strong>Current template:</strong> <?php // get_current_template( true ); ?></div>-->

		<?php // Customizer Header Image section. Uncomment to use. ?>
			<!-- <?php if( get_header_image() != "" ) {

				if ( is_front_page() ) { ?>

        		<div id="banner">

        			<img class="header-image" src="<?php header_image(); ?>" alt="Header graphic" />

        		</div>

        	<?php }

        	} ?> -->

		<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
            <!-- Facebook Pixel Code -->
            <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window,document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
             fbq('init', '346491835837766');
            fbq('track', 'PageView');
            </script>
            <noscript>
             <img height="1" width="1"
            src="https://www.facebook.com/tr?id=346491835837766&ev=PageView
            &noscript=1"/>
            </noscript>
            <!-- End Facebook Pixel Code -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7 col-sm-6">
                        <div class="logo" itemscope itemtype="http://schema.org/Organization">
                            <a href="<?php echo home_url(); ?>">
                                <svg class="svg" version="1.1" id="Nuview_Nutrition" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 287 171" style="enable-background:new 0 0 287 171;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:#50B848;}
                                    .st1{fill:#ED1C24;}
                                    .st2{fill:#FFFFFF;}
                                </style>
                                <g id="Nuview_Nutrition_1_">
                                    <g>
                                        <path class="st0" d="M78.3,58.2C80,46.1,80.8,31.7,73.6,21C65.7,9.1,52.4,3.9,39.2,0c-2.6,12.9-3.1,29,4.6,40.4
                                            c7.7,11.3,21.6,16.3,34.1,19.9C78.1,59.6,78.2,58.9,78.3,58.2C78.6,56.2,78.2,58.9,78.3,58.2z"/>
                                        <path class="st1" d="M148.9,82.9c-0.6-8-1-17-5.5-24c-4.1-6.3-8.7-12.1-15.5-15.6c-15.9-8-33.3,5.3-46.4,13
                                            c-2.9,1.7-6,3.3-9.4,2.3c-3.8-1.2-7.1-3.5-10.5-5.5c-3.6-2.1-7.3-4.2-10.9-6.4c-3.6-2.1-7.6-3.3-11.5-4.6
                                            C23.4,36.9,8.2,48.8,3,63.2C-2.8,79,0.2,97.8,5.8,113.3c5.7,15.8,13.1,31.5,24.1,44.4c5.1,5.9,10.7,10.7,18.3,12.9
                                            c7.7,2.2,16.5-2.1,21.7-7.5c2.7-2.8,5.2-3.6,7.6,0c2.1,3.1,6.1,5.8,9.6,7c7.9,2.6,15.8-2.6,21.4-7.6c11.2-10.1,20.9-22.1,28-35.4
                                            c3.7-6.9,6.6-14.2,8.8-21.7C147.6,97.8,148.3,90.4,148.9,82.9C148.5,78.7,148.8,84.4,148.9,82.9z"/>
                                    </g>
                                    <g>
                                        <path class="st2" d="M108.1,58.8c2-1.9,6.1-4,11.9-1.8c6.1,2.3,8.1,6.4,8.8,8.5c1.2,3.5,0.2,7.6-1,10.9l-3.9-1.4
                                            c1.4-3.9,1.6-6.7,0.8-8.9c-1.2-3.2-3.9-4.8-6-5.6c-2.2-0.8-4.7-1.2-7.4,0L108.1,58.8z"/>
                                    </g>
                                </g>
                                <g id="Text">
                                    <g>
                                        <path class="st1" d="M166.6,133.7h-1.4l-2.1-6.5l-2.1,6.5h-1.4l-3.7-9.8h1.3l3.1,8.2l2.3-7h1.1l2.3,7l3.2-8.2h1.3L166.6,133.7z"/>
                                        <path class="st1" d="M172.2,129.2c0.1,1.9,1.8,3.5,3.8,3.5c1.5,0,2.9-0.9,3.4-2.2h1.4c-0.6,1.9-2.5,3.5-4.8,3.5
                                            c-2.9,0-5.2-2.3-5.2-5.2c0-2.8,2.2-5.1,5.1-5.1c2.9,0,5.1,2.1,5.1,5.6h-8.8V129.2z M175.9,124.9c-1.9,0-3.3,1.3-3.7,3.1h7.5
                                            C179.3,126.1,177.8,124.9,175.9,124.9z"/>
                                        <path class="st1" d="M182.9,133.7v-13.2h1.3v13.2H182.9z"/>
                                        <path class="st1" d="M186.5,133.7v-13.2h1.3v13.2H186.5z"/>
                                        <path class="st1" d="M197.4,133.7v-5.1c0-2.7-1.2-3.7-3-3.7s-3,1-3,3.4v5.4H190v-9.8h1.3v1.3c0.8-1,1.9-1.5,3.1-1.5
                                            c2.5,0,4.2,1.4,4.2,4.9v5.1L197.4,133.7L197.4,133.7z"/>
                                        <path class="st1" d="M201.9,129.2c0.1,1.9,1.8,3.5,3.8,3.5c1.5,0,2.9-0.9,3.4-2.2h1.4c-0.6,1.9-2.5,3.5-4.8,3.5
                                            c-2.9,0-5.2-2.3-5.2-5.2c0-2.8,2.2-5.1,5.1-5.1c2.9,0,5.1,2.1,5.1,5.6h-8.8V129.2z M205.6,124.9c-1.9,0-3.3,1.3-3.7,3.1h7.5
                                            C209,126.1,207.5,124.9,205.6,124.9z"/>
                                        <path class="st1" d="M214.9,133.9c-1.9,0-3.1-1.2-3.1-3.1h1.3c0,1.2,0.8,1.9,1.8,1.9c0.9,0,1.6-0.7,1.6-1.7s-0.5-1.3-1.9-1.9
                                            c-1.4-0.6-1.4-0.6-1.8-0.9c-0.5-0.4-0.7-1.1-0.7-1.8c0-1.6,1.2-2.8,2.8-2.8s2.8,1.1,2.8,2.6h-1.3c0-0.9-0.6-1.4-1.4-1.4
                                            c-0.8,0-1.4,0.6-1.4,1.4c0,0.6,0.3,1,0.9,1.3c0.3,0.1,0.4,0.2,1.8,0.8c1.1,0.5,1.7,1.3,1.7,2.5
                                            C217.9,132.7,216.7,133.9,214.9,133.9z"/>
                                        <path class="st1" d="M221.8,133.9c-1.9,0-3.1-1.2-3.1-3.1h1.3c0,1.2,0.8,1.9,1.8,1.9c0.9,0,1.6-0.7,1.6-1.7s-0.5-1.3-1.9-1.9
                                            c-1.4-0.6-1.4-0.6-1.8-0.9c-0.5-0.4-0.7-1.1-0.7-1.8c0-1.6,1.2-2.8,2.8-2.8s2.8,1.1,2.8,2.6h-1.3c0-0.9-0.6-1.4-1.4-1.4
                                            c-0.8,0-1.4,0.6-1.4,1.4c0,0.6,0.3,1,0.9,1.3c0.3,0.1,0.4,0.2,1.8,0.8c1.1,0.5,1.7,1.3,1.7,2.5
                                            C224.8,132.7,223.6,133.9,221.8,133.9z"/>
                                        <path class="st1" d="M236.3,133.9c-3,0-5.3-2.2-5.3-5.2c0-2.8,2.3-5.1,5.2-5.1c2.2,0,4.1,1.2,4.9,3.2h-1.5c-0.8-1.3-1.9-2-3.4-2
                                            c-2.2,0-3.9,1.7-3.9,3.9c0,2.2,1.7,3.9,3.9,3.9c1.4,0,2.3-0.5,3.3-1.9h1.5C239.9,133.1,238.4,133.9,236.3,133.9z"/>
                                        <path class="st1" d="M243.9,129.2c0.1,1.9,1.8,3.5,3.8,3.5c1.5,0,2.9-0.9,3.4-2.2h1.4c-0.6,1.9-2.5,3.5-4.8,3.5
                                            c-2.9,0-5.2-2.3-5.2-5.2c0-2.8,2.2-5.1,5.1-5.1c2.9,0,5.1,2.1,5.1,5.6h-8.8V129.2z M247.6,124.9c-1.9,0-3.3,1.3-3.7,3.1h7.5
                                            C251,126.1,249.5,124.9,247.6,124.9z"/>
                                        <path class="st1" d="M261.9,133.7v-5.1c0-2.7-1.2-3.7-3-3.7s-3,1-3,3.4v5.4h-1.3v-9.8h1.3v1.3c0.8-1,1.9-1.5,3.1-1.5
                                            c2.5,0,4.2,1.4,4.2,4.9v5.1L261.9,133.7L261.9,133.7z"/>
                                        <path class="st1" d="M268,125.1v8.6h-1.3v-8.6h-2.1v-1.2h2.1v-3.4h1.3v3.4h2.2v1.2H268z"/>
                                        <path class="st1" d="M272,129.2c0.1,1.9,1.8,3.5,3.8,3.5c1.5,0,2.9-0.9,3.4-2.2h1.4c-0.6,1.9-2.5,3.5-4.8,3.5
                                            c-2.9,0-5.2-2.3-5.2-5.2c0-2.8,2.2-5.1,5.1-5.1s5.1,2.1,5.1,5.6H272V129.2z M275.8,124.9c-1.9,0-3.3,1.3-3.7,3.1h7.5
                                            C279.1,126.1,277.7,124.9,275.8,124.9z"/>
                                        <path class="st1" d="M284,128v5.7h-1.3v-9.8h1.3v1.4c0.5-1.1,1.4-1.6,2.8-1.6v1.3C285,125.2,284,126.2,284,128z"/>
                                    </g>
                                    <g>
                                        <path class="st0" d="M170.8,118.1v-10.3c0-5.4-2.4-7.4-6.1-7.4c-3.6,0-6,2.1-6,6.9v10.8H156V98.4h2.7v2.6c1.7-2,3.7-3,6.3-3
                                            c4.9,0,8.4,2.9,8.4,9.8v10.3C173.4,118.1,170.8,118.1,170.8,118.1z"/>
                                        <path class="st0" d="M191.2,118.1V115c-1.3,2.4-3.3,3.5-6.3,3.5c-5,0-8.4-2.7-8.4-9.5V98.4h2.7V109c0,5,2.1,7.1,5.9,7.1
                                            c3.6,0,6.1-2.2,6.1-7.6V98.4h2.7v19.7C193.9,118.1,191.2,118.1,191.2,118.1z"/>
                                        <path class="st0" d="M203.4,100.8v17.3h-2.7v-17.3h-4.2v-2.4h4.2v-6.9h2.7v6.9h4.4v2.4H203.4z"/>
                                        <path class="st0" d="M213,106.6v11.5h-2.7V98.4h2.7v2.8c1-2.2,2.7-3.1,5.6-3.3v2.6C214.9,100.9,213,103,213,106.6z"/>
                                        <path class="st0" d="M221.1,96.3v-4.5h2.7v4.5H221.1z M221.1,118.1V98.4h2.7v19.7C223.8,118.1,221.1,118.1,221.1,118.1z"/>
                                        <path class="st0" d="M233.2,100.8v17.3h-2.7v-17.3h-4.2v-2.4h4.2v-6.9h2.7v6.9h4.4v2.4H233.2z"/>
                                        <path class="st0" d="M240.2,96.3v-4.5h2.7v4.5H240.2z M240.2,118.1V98.4h2.7v19.7C242.9,118.1,240.2,118.1,240.2,118.1z"/>
                                        <path class="st0" d="M256.5,118.6c-6.1,0-10.5-4.4-10.5-10.4c0-5.8,4.5-10.2,10.3-10.2c5.9,0,10.2,4.4,10.2,10.4
                                            C266.5,114.2,262.2,118.6,256.5,118.6z M256.3,100.4c-4.4,0-7.6,3.3-7.6,7.8c0,4.6,3.2,7.9,7.8,7.9c4.3,0,7.4-3.3,7.4-7.8
                                            C263.8,103.8,260.6,100.4,256.3,100.4z"/>
                                        <path class="st0" d="M284.3,118.1v-10.3c0-5.4-2.4-7.4-6.1-7.4c-3.6,0-6,2.1-6,6.9v10.8h-2.7V98.4h2.7v2.6c1.7-2,3.7-3,6.3-3
                                            c4.9,0,8.4,2.9,8.4,9.8v10.3C286.9,118.1,284.3,118.1,284.3,118.1z"/>
                                    </g>
                                    <g>
                                        <path class="st2" d="M31.4,118.1v-10.3c0-5.4-2.4-7.4-6.1-7.4c-3.6,0-6,2.1-6,6.9v10.8h-2.7V98.4h2.7v2.6c1.7-2,3.7-3,6.3-3
                                            c4.9,0,8.4,2.9,8.4,9.8v10.3C34,118.1,31.4,118.1,31.4,118.1z"/>
                                        <path class="st2" d="M51.8,118.1V115c-1.3,2.4-3.3,3.5-6.3,3.5c-5,0-8.4-2.7-8.4-9.5V98.4h2.7V109c0,5,2.1,7.1,5.9,7.1
                                            c3.6,0,6.1-2.2,6.1-7.6V98.4h2.7v19.7C54.5,118.1,51.8,118.1,51.8,118.1z"/>
                                        <path class="st2" d="M68.1,118.1h-2.8L57,98.4h2.7l6.9,16.6l7.1-16.6h2.7L68.1,118.1z"/>
                                        <path class="st2" d="M78.9,96.3v-4.5h2.7v4.5H78.9z M78.9,118.1V98.4h2.7v19.7C81.6,118.1,78.9,118.1,78.9,118.1z"/>
                                        <path class="st2" d="M87.1,109.2c0.2,3.9,3.6,7,7.7,7c3,0,5.8-1.8,6.9-4.5h2.8c-1.3,3.7-5.1,6.9-9.6,6.9
                                            c-5.8,0-10.4-4.6-10.4-10.4c0-5.7,4.5-10.2,10.2-10.2c5.8,0,10.3,4.2,10.3,11.2H87.1z M94.6,100.4c-3.7,0-6.7,2.6-7.5,6.3h15.1
                                            C101.4,102.8,98.4,100.4,94.6,100.4z"/>
                                        <path class="st2" d="M127.3,118.1h-2.8l-4.3-13.1l-4.2,13.1h-2.9l-7.5-19.7h2.7l6.3,16.5l4.6-14.1h2.2l4.6,14.1l6.4-16.5h2.6
                                            L127.3,118.1z"/>
                                    </g>
                                </g>
                                <g id="Guides">
                                </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6 hidden-xs">
                        <div class="cindy">
                                <div class="pull-right">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clarkston-best-of-the-best-2017.jpg" class="img-responsive img-award" alt="2017 Best of the Best">
                                </div>
                                <div class="pull-right">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cindy.jpg" class="img-responsive img-circle" alt="Cindy Crandell, RN, CN">
                                </div>
                                <p><span class="cindy-name">Cindy Crandell, RN, CN</span><br>
                                <small>Owner/Founder, Functional Medicine Nutritionist &amp; Lifestyle Educator</small></p>
                                <p><a href="tel:2486255143"><i class="fa fa-phone" aria-hidden="true"></i> Call Today <span itemprop="telephone">(248) 625-5143</span></a></p>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>



            <nav class="navbar" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="pull-left toggle-text">Menu</span>
                            <span class="pull-right icon-bars">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </span>
                        </button>
                        <a class="navbar-brand visible-xs-block" href="tel:2486255143" itemprop="telephone">
                            <i class="fa fa-phone" aria-hidden="true"></i> (248) 625-5143
                        </a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse">
                        <?php
                            wp_nav_menu( array(
                                'menu'              => 'primary',
                                'theme_location'    => 'primary',
                                'depth'             => 2,
                                //'container'         => 'div',
                                //'container_class'   => 'collapse navbar-collapse',
                                //'container_id'      => 'navbar',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker())
                            );

                        ?>
                        <?php if ( is_active_sidebar( 'social_media' ) ) : ?>
                            <div class="nav navbar-nav navbar-right">
                            <?php dynamic_sidebar( 'social_media' ); ?>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </nav>

			<?php // if you'd like to use the site description un-comment the below <p></p>. If not, leave as-is or delete it. ?>
			<!-- <p class="site-description"><?php bloginfo('description'); ?></p> -->

		</header>
        <div class="container-fluid page-content">
