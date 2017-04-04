			</div> <!-- /.container-fluid .page -->
        </div>

            <footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-sm-6 copyright">

                            <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                            <p><span itemprop="streetAddress">7300 Dixie Hwy., Ste. 500</span>, <span itemprop="addressLocality">Clarkston</span>, <span itemprop="addressRegion">MI</span> <span itemprop="postalCode">48346</span></p>
                            </div>
                            <p>Phone: <a href="tel:+12486255143" itemprop="telephone">(248) 625-5143</a></p>
                            <p>Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved.</p>
                            <p>Designated trademarks and brands are the property of their respective owners.</p>
                            <p>Website and some graphics created by Matt Crandell of <a href="http://www.crandelldesign.com" target="_blank">Crandell Design</a>.</p>

                        </div>

                        <div class="col-sm-6">

                            <?php if ( is_active_sidebar( 'social_media' ) ) : ?>
                                <?php dynamic_sidebar( 'social_media' ); ?>
                            <?php endif; ?>

                        </div>
                    </div>

                </div>

			</footer>

            <button type="button" id="back-to-top" class="btn btn-primary btn-lg back-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></button>



		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
