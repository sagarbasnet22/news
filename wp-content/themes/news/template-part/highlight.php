<!-- Highlight News  -->
<section class="highlight_news mb">
    <div class="container">
        <div class="row">
            <?php 
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'breaking-news',
                'posts_per_page' => 3,
            );
            $arr_posts = new WP_Query( $args );
              
            if ( $arr_posts->have_posts() ) :
                while ( $arr_posts->have_posts() ) :
                    $arr_posts->the_post();
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <article class="post_main_news">
                            <div class="post_media">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="images"></a>
                            </div>
                            <div class="post_title">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                            <div class="meta_tags">
                                <ul>
                                    <li>By: <a href="<?php the_permalink(); ?>"><?php the_author(); ?></a></li>
                                    <li><img src="<?php bloginfo('template_url'); ?>/img/calendar.png" alt="Calendar"
                                            title="Date"><?php echo get_the_date(); ?></li>
                                    <li><img src="<?php bloginfo('template_url'); ?>/img/time.png" alt="Time" title="Time">
                                    <?php
                                        echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago';
                                    ?>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                        <?php
                endwhile;
            endif; ?>
        </div>
    </div>
</section>
<!-- Highlight News End  -->