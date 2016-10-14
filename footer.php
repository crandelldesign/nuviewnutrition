			</div> <!-- /.container-fluid .page -->
        </div>

            <footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-sm-6 copyright">

                            <p>Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved.</p>
                            <p>Designated trademarks and brands are the property of their respective owners.</p>
                            <p>All graphics are created by Matt Crandell of <a href="http://www.crandelldesign.com" target="_blank">Crandell Design</a>.</p>

                        </div>

                        <div class="col-sm-6">

                            <?php if ( is_active_sidebar( 'social_media' ) ) : ?>
                                <?php dynamic_sidebar( 'social_media' ); ?>
                            <?php endif; ?>

                        </div>
                    </div>

                </div>

				<!--<div class="container-fluid">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

				</div>-->

			</footer>

		

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
