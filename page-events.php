<?php
/*
 Template Name: Events Page
 *
 * This is the template for the events page.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>
	<div id="content">
		<div id="inner-content" class="wrap cf">
			<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<header class="article-header">
					<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
				</header> <?php // end article header ?>

				<?php the_content(); ?>

				<?php endwhile; endif; ?>

				<?php
					$eventsIdObj = get_category_by_slug('event');
					$eventsId = $eventsIdObj->term_id;

					// We define the current date, using the included function.
					$mem_today = mem_date_of_today();

					// We set a limit for past events:
					$mem_date_expiration = ( 365 * DAY_IN_SECONDS );
					// Here we will display them up to 2 days after they occurred.
					// Change that number according to your requirements.

					$mem_unix_limit = ( $mem_today["unix"] - $mem_date_expiration );
					$mem_age_limit = date_i18n( "Y-m-d", $mem_unix_limit);

					// Now, the custom query:
					$args = array(
					  'posts_per_page' => 5,
					  'meta_key' => '_mem_start_date',
					  'meta_value'  => $mem_age_limit,
					  'meta_compare'    => '>=',
					  'orderby'  => 'meta_value',
					  'order'  => 'ASC',
					  'ignore_sticky_posts' => true,
					  'cat' => $eventsId
					);

					$the_query = new WP_Query( $args );
				?>

				<?php //query_posts('cat='.$eventsId); ?>
				<?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

						<header class="article-header">
							<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							<p class="byline entry-meta vcard">
								<!--<?php echo the_time('l, F jS, Y'); ?>-->
								<?php
								// First, check if date fields are present.
								// This will return an array with formatted dates.
								$mem_date = mem_date_processing(
								    get_post_meta($post->ID, '_mem_start_date', true) ,
								    get_post_meta($post->ID, '_mem_end_date', true)
								);

								// Second step: display the date
								if ($mem_date["start-iso"] !=="") { // show the event date
								    echo '<span class="event-date">';
								    echo $mem_date["date"];
								    echo '</span>';
								}
								?>
                                <!--<?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
       								/* the time the post was published */
       								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
       								/* the author of the post */
       								'<span class="by">'.__( 'by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
    							); ?>-->
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
						<section class="entry-content">
							<p><?php _e( 'There are not any upcoming events. Please check back later.', 'bonestheme' ); ?></p>
						</section>
					</article>

				<?php endif; ?>

			</main>

			<?php get_sidebar(); ?>

		</div>

	</div>
<?php get_footer(); ?>
