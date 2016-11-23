
            <?php
                /*
                 * This is the default post format.
                 *
                 * So basically this is a regular post. if you don't want to use post formats,
                 * you can just copy ths stuff in here and replace the post format thing in
                 * single.php.
                 *
                 * The other formats are SUPER basic so you can style them as you like.
                 *
                 * Again, If you want to remove post formats, just delete the post-formats
                 * folder and replace the function below with the contents of the "format.php" file.
                */
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

                <header class="article-header entry-header">

                    <h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>

                    <?php echo wpfai_social(); ?>

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

                </header> <?php // end article header ?>

                <section class="entry-content cf" itemprop="articleBody">
                    <?php
                        if ( has_post_thumbnail() ) {
                        ?>
                            <div class="blog-featured-img">
                            <?php the_post_thumbnail('medium'); ?>
                            </div>
                        <?php
                        }
                        // the content (pretty self explanatory huh)
                        the_content();

                        /*
                         * Link Pages is used in case you have posts that are set to break into
                         * multiple pages. You can remove this if you don't plan on doing that.
                         *
                         * Also, breaking content up into multiple pages is a horrible experience,
                         * so don't do it. While there are SOME edge cases where this is useful, it's
                         * mostly used for people to get more ad views. It's up to you but if you want
                         * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
                         *
                         * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
                         *
                        */
                        wp_link_pages( array(
                          'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
                          'after'       => '</div>',
                          'link_before' => '<span>',
                          'link_after'  => '</span>',
                        ) );
                    ?>
                </section> <?php // end article section ?>

                <footer class="article-footer">

                    <?php printf( __( 'filed under', 'bonestheme' ).': %1$s', get_the_category_list(', ') ); ?>

                    <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

                    <?php echo wpfai_social(); ?>

                </footer> <?php // end article footer ?>

                <?php comments_template(); ?>

            </article> <?php // end article ?>
