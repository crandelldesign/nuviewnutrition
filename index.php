<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">

				<main id="main" class="col-sm-8" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

                    <?php if( is_home() && get_option( 'page_for_posts' ) ) { ?>
                        <header class="article-header">
                            <h1 class="entry-title"><?php $posts_page = get_post( get_option( 'page_for_posts' ) ); echo apply_filters( 'the_title', $posts_page->post_title ); ?></h1>
                        </header>
                    <?php } ?>

                    <div class="visible-xs-block">
                        <?php dynamic_sidebar( 'mobile_sidebar' ); ?>
                    </div>

					<?php // Edit the loop in /templates/index-loop. Or roll your own. ?>
					<?php get_template_part( 'templates/index','loop'); ?>

				</main>

			<?php get_sidebar(); ?>

		</div>

	</div>


<?php get_footer(); ?>
