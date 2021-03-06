<?php
/*
 Template Name: Blog Page
 *
 * This is the template for the blog page (excludes classes and events).
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>
    <div id="content">
        <div id="inner-content" class="row">
            <main id="main" class="col-sm-8" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <header class="article-header">
                    <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
                </header> <?php // end article header ?>

                <?php get_template_part('breadcrumbs'); ?>

                <?php the_content(); ?>

                <?php endwhile; endif; ?>

                <?php
                    $eventsIdObj = get_category_by_slug('event');
                    $eventsId = $eventsIdObj->term_id;

                    $classesIdObj = get_category_by_slug('class');
                    $classesId = $classesIdObj->term_id;

                    // Now, the custom query:
                    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                    $args = array(
                      'posts_per_page' => 10,
                      'category__not_in' => array($eventsId, $classesId),
                      'ignore_sticky_posts' => false,
                      'paged' => $paged
                    );

                    $the_query = new WP_Query( $args );
                ?>

                <?php //query_posts('cat='.$eventsId); ?>
                <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

                        <header class="article-header">
                            <h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                            <p class="byline vcard">
                                <?php printf( __( 'Posted:', 'bonestheme').' <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> ', get_the_time('Y-m-j'), get_the_time(get_option('date_format'))); ?>
                                <?php /* printf( __( 'Posted:', 'bonestheme').' <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> '.__( 'by',  'bonestheme').' <span class="author">%3$s</span>', get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) ));*/ ?>
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

                    <!-- pagination here -->
                    <?php
                        if (function_exists(custom_pagination)) {
                            custom_pagination($the_query->max_num_pages,"",$paged);
                        }
                    ?>

                <?php else : ?>

                    <article id="post-not-found" class="hentry cf">
                        <section class="entry-content">
                            <p><?php _e( 'There are not currently any blog posts. Please check back later.', 'bonestheme' ); ?></p>
                        </section>
                    </article>

                <?php endif; ?>

            </main>

            <?php get_sidebar(); ?>

        </div>

    </div>
<?php get_footer(); ?>
