<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">

			<main id="main" class="col-sm-8" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

				<?php // Edit the loop in /templates/single-loop. Or roll your own. ?>
				<?php get_template_part( 'templates/single', 'loop'); ?>

			</main>

			<?php get_sidebar(); ?>

		</div>

	</div>

<?php get_footer(); ?>
