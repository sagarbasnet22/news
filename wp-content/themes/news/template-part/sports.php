<!-- Sports  -->
<section class="sports pt pb mb">
    <div class="container">
        <div class="main_title light_title">
            <h3>
                <?php
                    $cat = get_term_by( 'slug', 'sports', 'category');
                    echo $cat->name;
                ?>
            </h3>
            <a href="<?php echo get_category_link("9");?>">View more <img src="<?php bloginfo('template_url'); ?>/img/more-white.png" alt="images"></a>
        </div>
        <div class="row">
            <?php 
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'sports',
                    'posts_per_page' => 4,
                );
                $arr_posts = new WP_Query( $args );
                
                if ( $arr_posts->have_posts() ) :
                    while ( $arr_posts->have_posts() ) :
                        $arr_posts->the_post();
            ?>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="thumbnail_news_wrap">
                    <div class="thumbnails_news_media">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="images"></a>
                    </div>
                    <div class="thumbnail_news_content">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="meta_tags">
                            <ul>
                                <li><img src="<?php bloginfo('template_url'); ?>/img/calendar-light.png" alt="Calendar"
                                        title="Date"><?php echo get_the_date('M d, Y'); ?></li>
                                <li><img src="<?php bloginfo('template_url'); ?>/img/time-light.png" alt="Time" title="Time">
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
<!-- Sports End  -->