<?php
$title = 'Category Page';
include 'header.php';
?>


<nav aria-label="breadcrumb">
    <div class="container">
        <div class="section_head">
            <div class="main_title">
                <h3>
                    <?php
                foreach((get_the_category()) as $category) { 
                    echo $category->cat_name . ' '; 
                } 
            ?>
                </h3>
            </div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?php
                    foreach((get_the_category()) as $category) { 
                        echo $category->cat_name . ' '; 
                    } 
                ?>
                </li>
            </ol>
        </div>
    </div>
</nav>


<!-- Category Page  -->
<section class="category_page mb">
    <div class="container">
        <div class="category_page_col">
            <div class="row">
                <?php 
                if ( have_posts() ) :
                while ( have_posts() ) : the_post(); 
            ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="thumbnail_news_wrap">
                        <div class="thumbnails_news_media">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img
                                    src="<?php the_post_thumbnail_url(); ?>" alt="images"></a>
                        </div>
                        <div class="thumbnail_news_content">
                            <div class="meta_tags">
                                <ul>
                                    <li>By: <a href="<?php the_permalink(); ?>"><?php the_author(); ?></a></li>
                                    <li><img src="<?php bloginfo('template_url'); ?>/img/calendar.png" alt="Calendar"
                                            title="Date"><?php echo get_the_date('M d, Y'); ?></li>
                                </ul>
                            </div>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        </div>
                    </div>
                </div>
                <?php 
                endwhile;
                endif; 
            ?>
            </div>
        </div>
    </div>
</section>
<!-- Category Page End  -->



<?php
include 'footer.php';
?>