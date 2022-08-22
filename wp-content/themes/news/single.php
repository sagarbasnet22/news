<?php
$title = 'Details Page';
include 'header.php';
?>

<nav aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
        </ol>
    </div>
</nav>


<!-- Details Page  -->
<section class="details_page mb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="details_main">
                    <h1><?php the_title(); ?></h1>
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
                        $args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'category_name' => 'breaking-news',
                        );
                        $arr_posts = new WP_Query( $args );
                        
                        if ( $arr_posts->have_posts() ) :
                            while ( $arr_posts->have_posts() ) :
                                $arr_posts->the_post();
                        ?>
                        <div class="thumbnail_news_wrap">
                            <div class="thumbnails_news_media">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="images"></a>
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
                            endwhile;
                            endif; 
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