<?php
    get_header();
?>

<nav aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_author(); ?></li>
        </ol>
    </div>
</nav>



<!-- Author Page  -->
<section class="author_page mb">
    <div class="container">
        <div class="author_head">
            <div class="authors_media">
                <img src="<?php bloginfo('template_url'); ?>/img/author.png" alt="images">
                <div class="authors_content">
                    <h3><?php the_author(); ?></h3>
                    <ul>
                        <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                        <li><a href="#"><i class="lab la-twitter"></i></a></li>
                        <li><a href="#"><i class="lab la-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="author-col">
            <div class="row">
                <?php 
                if ( have_posts() ) :
                while ( have_posts() ) : the_post(); 
            ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="thumbnail_news_wrap">
                        <div class="thumbnails_news_media">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img
                                    src="<?php echo the_post_thumbnail_url(); ?>" alt="images"></a>
                        </div>
                        <div class="thumbnail_news_content">
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
<!-- Author Page End  -->



<?php
    get_footer();
?>