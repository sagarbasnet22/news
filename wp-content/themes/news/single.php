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
                            <li title="Author">By: <a
                                    href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a>
                            </li>
                            <li title="Date">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-calendar-check" viewBox="0 0 16 16">
                                    <path
                                        d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                </svg>
                                <?php echo get_the_date('M d, Y'); ?>
                            </li>
                            <li title="Time">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-alarm" viewBox="0 0 16 16">
                                    <path
                                        d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z" />
                                    <path
                                        d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z" />
                                </svg>
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