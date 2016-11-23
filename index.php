<?php get_header(); ?>
	<div id="content">
		<div id="inner-content" class="wrap cf">
			<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

				<?php if( is_home() && get_option( 'page_for_posts' ) ) { ?>
					<header class="article-header">
						<h1 class="entry-title"><?php $posts_page = get_post( get_option( 'page_for_posts' ) ); echo apply_filters( 'the_title', $posts_page->post_title ); ?></h1>
					</header>
				<?php } ?>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

						<header class="article-header">
							<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							<p class="byline entry-meta vcard">
			                        <?php
			                            if (in_category('event') || in_category('class')) {
			                                // First, check if date fields are present.
			                                // This will return an array with formatted dates.
			                                $mem_date = mem_date_processing(
			                                    get_post_meta($post->ID, '_mem_start_date', true) ,
			                                    get_post_meta($post->ID, '_mem_end_date', true)
			                                );

			                                // Second step: display the date
			                                if ($mem_date["start-iso"] !=="") { // show the event date
			                                    echo '<span class="event-date">When: ';
			                                    echo $mem_date["date"];
			                                    echo '</span>';
			                                }
			                            } else {
			                                echo 'Posted: ';
			                                echo the_time('l, F jS, Y');
			                            }
			                        ?>
			                    </p>
						</header>

						<section class="entry-content cf">
							<?php // the_content(); ?>
							<?php if ( has_post_thumbnail() ) { ?>
								<div class="blog-list-thumbnail">
								<?php the_post_thumbnail('thumbnail'); ?>
								</div>
							<?php } ?>
							<?php the_excerpt(); ?>
						</section>

						<footer class="article-footer cf">
							<p class="footer-comment-count">
								<?php comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?>
							</p>
                 			<?php printf( '<p class="footer-category">' . __('filed under', 'bonestheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>
                  			<?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
						</footer>

					</article>

				<?php endwhile; ?>

					<?php bones_page_navi(); ?>

				<?php else : ?>

					<article id="post-not-found" class="hentry cf">
							<header class="article-header">
								<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
						</header>
							<section class="entry-content">
								<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
						</section>
						<footer class="article-footer">
								<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
						</footer>
					</article>

				<?php endif; ?>

			</main>

			<?php get_sidebar(); ?>

		</div>

	</div>
<?php get_footer(); ?>
