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
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/android-chrome-192x192.png" sizes="192x192">
        <meta name="msapplication-square70x70logo" content="<?php echo get_template_directory_uri(); ?>/smalltile.png" />
        <meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri(); ?>/mediumtile.png" />
        <meta name="msapplication-wide310x150logo" content="<?php echo get_template_directory_uri(); ?>/widetile.png" />
        <meta name="msapplication-square310x310logo" content="<?php echo get_template_directory_uri(); ?>/largetile.png" />
        <meta name="theme-color" content="#f36368">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-43173887-1', 'auto');
            ga('send', 'pageview');
        </script>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-7 col-sm-6">
                            <div class="logo" itemscope itemtype="http://schema.org/Organization">
                                <a href="<?php echo home_url(); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/nuviewnutrition-logo.png" class="img-responsive logo" alt="<?php bloginfo( 'name' ); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/nuviewnutrition-logo.svg" class="img-responsive logo svg" alt="<?php bloginfo( 'name' ); ?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6 hidden-xs">
                            <div class="cindy">
                                    <div class="pull-right">
                                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/clarkston-best-of-the-best-2016.jpg" class="img-responsive img-award" alt="2016 Best of the Best">
                                    </div>
                                    <div class="pull-right">
                                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/cindy.jpg" class="img-responsive img-circle" alt="Cindy Crandell, RN, CN">
                                    </div>
                                    <p><span class="cindy-name">Cindy Crandell, RN, CN</span><br>
                                    <small>Owner/Founder, Functional Medicine Nutritionist &amp; Lifestyle Educator</small></p>
                                    <p><a href="tel:2486255143"><i class="fa fa-phone" aria-hidden="true"></i> Call Today <span itemprop="telephone">(248) 625-5143</span></a></p>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php /*<!--<div class="visible-xs-block text-center hidden">
                    <p><a href="tel:2486255143" class="btn btn-salem"><i class="fa fa-phone" aria-hidden="true"></i> (248) 625-5143</a></p>
                </div>-->*/?>

                <nav class="navbar" itemscope itemtype="http://schema.org/WPHeader">
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
			</header>

            <div class="container-fluid page">

