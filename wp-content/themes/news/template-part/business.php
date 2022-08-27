<!-- Business  -->
<section class="business mb">
    <div class="container">
        <div class="main_title">
            <h3>
                <?php
                    $cat = get_term_by( 'slug', 'business', 'category');
                    echo $cat->name;
                ?>
            </h3>
            <a href="<?php echo get_category_link("10");?>">View more <img src="<?php bloginfo('template_url'); ?>/img/more.png" alt="images"></a>
        </div>
        <div class="row">
        <?php 
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'business',
                    'posts_per_page' => 6,
                );
                $arr_posts = new WP_Query( $args );
                
                if ( $arr_posts->have_posts() ) :
                    while ( $arr_posts->have_posts() ) :
                        $arr_posts->the_post();
            ?>
            <div class="col-lg-4 col-md-12">
                <div class="thumbnail_news_wrap">
                    <div class="thumbnails_news_media">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="images"></a>
                    </div>
                    <div class="thumbnail_news_content">
                        <h3>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <div class="meta_tags">
                            <ul>
                                <li><img src="<?php bloginfo('template_url'); ?>/img/calendar.png" alt="Calendar"
                                        title="Date"><?php echo get_the_date('M d, Y'); ?></li>
                                <li><img src="<?php bloginfo('template_url'); ?>/img/time.png" alt="Time" title="Time">
                                <?php
                                    echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago';
                                ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
                endif; 
            ?>
        </div>
    </div>
</section>
<!-- Business End  -->