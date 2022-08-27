<?php
$title = 'Details Page';
include 'header.php';
?>

<?php 
    if ( have_posts() ) :
    while ( have_posts() ) : the_post(); 
?>

<nav aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
        </ol>
    </div>
</nav>

<?php 
    endwhile;
    endif; 
?>

<!-- Details Page  -->
<section class="details_page mb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="details_main">
                    <h1><?php the_title(); ?></h1>
                    <div class="meta_tags">
                        <ul>
                            <li>By: <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></li>
                            <li><img src="<?php bloginfo('template_url'); ?>/img/calendar.png" alt="Calendar"
                                    title="Date"><?php echo get_the_date(); ?></li>
                            <li><img src="<?php bloginfo('template_url'); ?>/img/time.png" alt="Time" title="Time">
                                <?php
                                        echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago';
                                    ?>
                            </li>
                        </ul>
                    </div>
                    <div class="featured_img">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="images">
                    </div>
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="deatils_sidebar">
                    <div class="main_title">
                        <h3>Related Articles</h3>
                    </div>
                    <div class="details_related_wrap">
                        <?php 
                        $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 
                        'posts_per_page' => '5', 
                        'post__not_in' => array($post->ID) ) );
                        if( $related ) foreach( $related as $post ) {
                        setup_postdata($post);
                        ?>
                        <div class="thumbnail_news_wrap">
                            <div class="thumbnails_news_media">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img
                                        src="<?php the_post_thumbnail_url(); ?>" alt="images"></a>
                            </div>
                            <div class="thumbnail_news_content">
                                <div class="tags">
                                    <a href="">
                                        <?php
                                            foreach((get_the_category()) as $category) { 
                                                echo $category->cat_name . ' '; 
                                            } 
                                        ?>
                                    </a>
                                </div>
                                <h3>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                            </div>
                        </div>
                        <?php 
                            }
                            wp_reset_postdata(); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Details Page End  -->



<?php
include 'footer.php';
?>