<?php get_header('blog'); ?>
<?php the_post(); ?>


    <div class="post-wrap">
        <article class="post">
            <div class="post-basic">
                <figure class="post-photo">
                    <?php
                    if (has_post_thumbnail()) { // Set Featured Image
                        the_post_thumbnail('post');
                    } elseif (first_post_image()) { // Set the first image from the editor
                        echo '<img src="' . first_post_image() . '" class="wp-post-image" />';
                    } ?>
                </figure>
                <div class="post-categories">
                    <?php the_category(', '); ?>
                </div>
                <h1 class="post-title"><?php the_title(); ?></h1>
                <time datetime="<?php the_time('Ymd') ?>" class="post-date"><?php the_time('j F Y'); ?></time>
            </div>
            <!-- / .post-basic -->
            <?php the_content(); ?>

        </article>
        <!-- / .post -->

        <div class="post-after">
            <div class="post-link-prev"><?php previous_post('%', 'Poprzedni wpis', 'no'); ?></div>
            <div class="post-link-next"><?php next_post('%', 'Następny wpis', 'no'); ?></div>
        </div>
        <div class="post-more">
            <?php
            $args = array('numberposts' => 2, 'orderby' => 'rand');
            $lastposts = get_posts($args);
            foreach ($lastposts as $post) : setup_postdata($post); ?>
                <article class="post post--small">
                    <div class="post-basic">
                        <figure class="post-photo">
                            <?php
                            if (has_post_thumbnail()) { // Set Featured Image
                                the_post_thumbnail('post');
                            } elseif (first_post_image()) { // Set the first image from the editor
                                echo '<img src="' . first_post_image() . '" class="wp-post-image" />';
                            }
                            ?>
                        </figure>
                        <div class="post-categories">
                            <?php the_category(', '); ?>
                        </div>
                        <h1 class="post-title"><?php the_title(); ?></h1>
                        <time datetime="<?php the_time('Ymd') ?>" class="post-date"><?php the_time('j F Y'); ?></time>
                    </div>
                    <!-- / .post-basic -->
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="post-more-link"></a>
                </article>
                <!-- / .post--small -->
            <?php endforeach; ?>
        </div>
    </div>


<?php get_footer(); ?>