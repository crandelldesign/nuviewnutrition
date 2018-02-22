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

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7 col-sm-6">
                        <div class="logo" itemscope itemtype="http://schema.org/Organization">
                            <a href="<?php echo home_url(); ?>">
                                <svg id="nuviewnutrition-logo" class="img-responsive logo svg" data-name="Nuview Nutrition" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 287.16 171.11"><defs><style>.cls-1{fill:#50b848;}.cls-2{fill:#ed1c24;}.cls-3{fill:#fff;}</style></defs><title><?php echo home_url(); ?></title><g id="Layer_1-2" data-name="Nuview Nutrition"><path class="cls-1" d="M78.33,58.17C80.06,46.1,80.84,31.67,73.67,21,65.68,9.09,52.41,3.86,39.21,0c-2.58,12.9-3.07,29,4.65,40.35S65.42,56.63,77.91,60.3l.42-2.13C78.62,56.18,78.19,58.88,78.33,58.17Z" transform="translate(0.16)"/><path class="cls-2" d="M148.86,82.85c-.62-8-1-17-5.47-24-4-6.35-8.65-12.14-15.49-15.58-15.87-8-33.34,5.31-46.43,13-2.86,1.68-6,3.34-9.4,2.29C68.31,57.38,65,55,61.6,53.07q-5.48-3.18-10.93-6.38c-3.59-2.11-7.61-3.26-11.52-4.57C23.35,36.87,8.22,48.84,3,63.16-2.82,79,.19,97.79,5.78,113.26c5.71,15.82,13.15,31.5,24.15,44.38,5.06,5.94,10.74,10.72,18.31,12.88S64.78,168.46,70,163c2.65-2.79,5.24-3.57,7.59,0a20,20,0,0,0,9.65,7c7.91,2.62,15.79-2.56,21.44-7.65a131.71,131.71,0,0,0,28-35.35,110.55,110.55,0,0,0,8.81-21.74c2.12-7.35,2.85-14.74,3.39-22.32C148.54,78.68,148.75,84.37,148.86,82.85Z" transform="translate(0.16)"/><path class="cls-3" d="M108.14,58.81c2-1.88,6.15-4,11.86-1.82,6,2.26,8.1,6.35,8.82,8.54,1.17,3.51.21,7.62-1,10.87L123.87,75c1.45-3.87,1.55-6.71.84-8.89a9.83,9.83,0,0,0-6-5.58,9.32,9.32,0,0,0-7.42,0Z" transform="translate(0.16)"/></g><g id="Text"><path class="cls-2" d="M158,129.14a2.05,2.05,0,0,1-2.19-2.17h.91a1.21,1.21,0,0,0,1.28,1.32,1.13,1.13,0,0,0,1.15-1.18c0-.68-.34-.91-1.32-1.31s-1-.39-1.26-.66a1.59,1.59,0,0,1-.51-1.22A1.87,1.87,0,0,1,158,122a1.81,1.81,0,0,1,1.92,1.84H159a.92.92,0,0,0-1-1,1,1,0,0,0-1,1,1,1,0,0,0,.63.89,11.87,11.87,0,0,0,1.28.55,1.75,1.75,0,0,1,1.18,1.74A2,2,0,0,1,158,129.14Z" transform="translate(0.16)"/><path class="cls-2" d="M170.43,129V125c0-1.53-.69-2.19-1.81-2.19s-1.86.65-1.86,2.19V129h-.93v-4c0-1.52-.79-2.16-1.84-2.16s-1.83.8-1.83,2.16v4h-.92v-6.81h.92V123a2.15,2.15,0,0,1,1.92-.94,2.35,2.35,0,0,1,2.23,1.3,2.58,2.58,0,0,1,2.36-1.32c1.56,0,2.68,1,2.68,2.94v4Z" transform="translate(0.16)"/><path class="cls-2" d="M178.93,129v-1.2a2.91,2.91,0,0,1-2.62,1.36,3.57,3.57,0,1,1-.06-7.13,3,3,0,0,1,2.68,1.37v-1.21h.93V129Zm-2.66-6.13a2.72,2.72,0,0,0,0,5.44,2.72,2.72,0,0,0,0-5.44Z" transform="translate(0.16)"/><path class="cls-2" d="M182.35,125v4h-.93v-6.81h.93v1a2,2,0,0,1,1.93-1.13v.91A1.89,1.89,0,0,0,182.35,125Z" transform="translate(0.16)"/><path class="cls-2" d="M187.3,123v6h-.92v-6h-1.47v-.83h1.47v-2.39h.92v2.39h1.53V123Z" transform="translate(0.16)"/><path class="cls-2" d="M200.05,129h-1l-1.48-4.52L196.12,129h-1l-2.6-6.81h.92l2.17,5.7,1.6-4.87H198l1.61,4.87,2.21-5.7h.9Z" transform="translate(0.16)"/><path class="cls-2" d="M209.33,129v-1.2a2.94,2.94,0,0,1-2.63,1.36,3.57,3.57,0,1,1-.06-7.13,3,3,0,0,1,2.69,1.37v-1.21h.92V129Zm-2.67-6.13a2.72,2.72,0,1,0,2.67,2.69A2.64,2.64,0,0,0,206.66,122.85Z" transform="translate(0.16)"/><path class="cls-2" d="M213.66,131.37h-1l1.11-2.61-2.64-6.59h1l2.16,5.43,2.3-5.43h1Z" transform="translate(0.16)"/><path class="cls-2" d="M220.12,129.14a2.06,2.06,0,0,1-2.19-2.17h.91a1.21,1.21,0,0,0,1.28,1.32,1.13,1.13,0,0,0,1.15-1.18c0-.68-.34-.91-1.32-1.31s-1-.39-1.26-.66a1.59,1.59,0,0,1-.51-1.22,1.87,1.87,0,0,1,1.93-1.91,1.81,1.81,0,0,1,1.92,1.84h-.94a.91.91,0,0,0-1-1,1,1,0,0,0-1,1,1,1,0,0,0,.63.89c.2.1.25.13,1.28.55A1.75,1.75,0,0,1,222.2,127,2,2,0,0,1,220.12,129.14Z" transform="translate(0.16)"/><path class="cls-2" d="M228.53,123v6h-.92v-6h-1.47v-.83h1.47v-2.39h.92v2.39h1.53V123Z" transform="translate(0.16)"/><path class="cls-2" d="M234.07,129.14A3.57,3.57,0,1,1,234,122a3.57,3.57,0,0,1,.08,7.13Zm-.08-6.29a2.72,2.72,0,0,0,0,5.44,2.54,2.54,0,0,0,2.56-2.68A2.61,2.61,0,0,0,234,122.85Z" transform="translate(0.16)"/><path class="cls-2" d="M242.29,129v-9.2h.92V129Z" transform="translate(0.16)"/><path class="cls-2" d="M244.78,121.42v-1.57h.92v1.57Zm0,7.56v-6.81h.92V129Z" transform="translate(0.16)"/><path class="cls-2" d="M250.42,129h-1l-2.87-6.81h.94l2.39,5.73,2.44-5.73h.93Z" transform="translate(0.16)"/><path class="cls-2" d="M254.51,125.88a2.64,2.64,0,0,0,2.66,2.41,2.57,2.57,0,0,0,2.37-1.55h1a3.6,3.6,0,0,1-3.31,2.4,3.56,3.56,0,0,1-3.6-3.6,3.51,3.51,0,0,1,3.54-3.54c2,0,3.55,1.46,3.55,3.88Zm2.61-3a2.6,2.6,0,0,0-2.58,2.19h5.22A2.65,2.65,0,0,0,257.12,122.85Z" transform="translate(0.16)"/><path class="cls-2" d="M272.23,129h-1l-1.48-4.52L268.3,129h-1l-2.6-6.81h.92l2.17,5.7,1.6-4.87h.76l1.61,4.87,2.21-5.7h.9Z" transform="translate(0.16)"/><path class="cls-2" d="M276.15,125.88a2.64,2.64,0,0,0,2.66,2.41,2.57,2.57,0,0,0,2.37-1.55h1a3.6,3.6,0,0,1-3.31,2.4,3.56,3.56,0,0,1-3.6-3.6,3.51,3.51,0,0,1,3.54-3.54c2,0,3.55,1.46,3.55,3.88Zm2.61-3a2.6,2.6,0,0,0-2.58,2.19h5.22A2.65,2.65,0,0,0,278.76,122.85Z" transform="translate(0.16)"/><path class="cls-2" d="M283.59,129v-9.2h.92V129Z" transform="translate(0.16)"/><path class="cls-2" d="M286.08,129v-9.2H287V129Z" transform="translate(0.16)"/><path class="cls-1" d="M170.77,118.12V107.79c0-5.37-2.44-7.38-6.08-7.38s-6,2-6,6.87v10.84H156V98.43h2.67V101A7.81,7.81,0,0,1,165,98c4.94,0,8.43,2.92,8.43,9.83v10.33Z" transform="translate(0.16)"/><path class="cls-1" d="M191.22,118.12v-3.06c-1.33,2.44-3.27,3.52-6.33,3.52-5,0-8.36-2.66-8.36-9.54V98.43h2.67v10.62c0,5,2.09,7.09,5.9,7.09,3.6,0,6.12-2.23,6.12-7.6V98.43h2.66v19.69Z" transform="translate(0.16)"/><path class="cls-1" d="M203.38,100.84v17.28h-2.66V100.84h-4.25V98.43h4.25V91.52h2.66v6.91h4.43v2.41Z" transform="translate(0.16)"/><path class="cls-1" d="M213,106.64v11.48h-2.66V98.43H213v2.81c1.05-2.16,2.74-3.14,5.58-3.28v2.63C214.9,101,213,103,213,106.64Z" transform="translate(0.16)"/><path class="cls-1" d="M221.12,96.27V91.73h2.66v4.54Zm0,21.85V98.43h2.66v19.69Z" transform="translate(0.16)"/><path class="cls-1" d="M233.22,100.84v17.28h-2.66V100.84h-4.25V98.43h4.25V91.52h2.66v6.91h4.43v2.41Z" transform="translate(0.16)"/><path class="cls-1" d="M240.21,96.27V91.73h2.66v4.54Zm0,21.85V98.43h2.66v19.69Z" transform="translate(0.16)"/><path class="cls-1" d="M256.48,118.58A10.31,10.31,0,1,1,256.26,98a10,10,0,0,1,10.22,10.37C266.48,114.23,262.24,118.58,256.48,118.58Zm-.22-18.17a7.87,7.87,0,0,0,.14,15.73c4.29,0,7.38-3.28,7.38-7.78S260.58,100.41,256.26,100.41Z" transform="translate(0.16)"/><path class="cls-1" d="M284.3,118.12V107.79c0-5.37-2.44-7.38-6.08-7.38s-6,2-6,6.87v10.84h-2.66V98.43h2.66V101a7.82,7.82,0,0,1,6.34-3c4.93,0,8.42,2.92,8.42,9.83v10.33Z" transform="translate(0.16)"/><path class="cls-3" d="M31.4,118.13V107.8c0-5.36-2.45-7.38-6.09-7.38s-6,2-6,6.87v10.84H16.64V98.44H19.3V101a7.82,7.82,0,0,1,6.34-3c4.93,0,8.42,2.92,8.42,9.83v10.33Z" transform="translate(0.16)"/><path class="cls-3" d="M51.84,118.13v-3.06c-1.33,2.45-3.27,3.53-6.33,3.53-5,0-8.35-2.67-8.35-9.54V98.44h2.66v10.62c0,5,2.09,7.09,5.91,7.09,3.6,0,6.12-2.23,6.12-7.59V98.44h2.66v19.69Z" transform="translate(0.16)"/><path class="cls-3" d="M68.11,118.13H65.3L57,98.44h2.7L66.63,115l7.05-16.56h2.7Z" transform="translate(0.16)"/><path class="cls-3" d="M78.89,96.28V91.74h2.67v4.54Zm0,21.85V98.44h2.67v19.69Z" transform="translate(0.16)"/><path class="cls-3" d="M87.1,109.17a7.61,7.61,0,0,0,7.67,7,7.45,7.45,0,0,0,6.87-4.5h2.77a10.42,10.42,0,0,1-9.57,6.95,10.29,10.29,0,0,1-10.4-10.41A10.12,10.12,0,0,1,94.66,98c5.83,0,10.26,4.21,10.26,11.2Zm7.52-8.75a7.49,7.49,0,0,0-7.45,6.33h15.09A7.64,7.64,0,0,0,94.62,100.42Z" transform="translate(0.16)"/><path class="cls-3" d="M127.34,118.13h-2.85l-4.28-13.07L116,118.13h-2.88l-7.52-19.69h2.66l6.27,16.49,4.64-14.08h2.2L126,114.93l6.41-16.49H135Z" transform="translate(0.16)"/></g></svg>
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
