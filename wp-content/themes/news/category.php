<?php
$title = 'Category Page';
include 'header.php';
?>


<nav aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                <?php the_title(); ?>
            </li>
        </ol>
    </div>
</nav>


<!-- Category Page  -->
<section class="category_page mb">
    <div class="container">
        <div class="main_title">
            <h3>
            <?php
                foreach((get_the_category()) as $category) { 
                    echo $category->cat_name . ' '; 
                } 
            ?>
            </h3>
        </div>
        <div class="row">
            <?php 
                if ( have_posts() ) :
                while ( have_posts() ) : the_post(); 
            ?>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="thumbnail_news_wrap">
                    <div class="thumbnails_news_media">
                        <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="images"></a>
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
            <!-- <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="thumbnail_news_wrap">
                    <div class="thumbnails_news_media">
                        <a href="#"><img src="img/news2.jpg" alt="images"></a>
                    </div>
                    <div class="thumbnail_news_content">
                        <h3><a href="#">By 2026, the Gates Foundation aims to spend $9 billion</a></h3>
                        <p>
                            Why I made a deerskin medicine bag with Washington state’s Teacher.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="thumbnail_news_wrap">
                    <div class="thumbnails_news_media">
                        <a href="#"><img src="img/news3.jpg" alt="images"></a>
                    </div>
                    <div class="thumbnail_news_content">
                        <h3><a href="#">By 2026, the Gates Foundation aims to spend $9 billion</a></h3>
                        <p>
                            Why I made a deerskin medicine bag with Washington state’s Teacher.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="thumbnail_news_wrap">
                    <div class="thumbnails_news_media">
                        <a href="#"><img src="img/news4.jpg" alt="images"></a>
                    </div>
                    <div class="thumbnail_news_content">
                        <h3><a href="#">By 2026, the Gates Foundation aims to spend $9 billion</a></h3>
                        <p>
                            Why I made a deerskin medicine bag with Washington state’s Teacher.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="thumbnail_news_wrap">
                    <div class="thumbnails_news_media">
                        <a href="#"><img src="img/news5.jpg" alt="images"></a>
                    </div>
                    <div class="thumbnail_news_content">
                        <h3><a href="#">By 2026, the Gates Foundation aims to spend $9 billion</a></h3>
                        <p>
                            Why I made a deerskin medicine bag with Washington state’s Teacher.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="thumbnail_news_wrap">
                    <div class="thumbnails_news_media">
                        <a href="#"><img src="img/news6.jpg" alt="images"></a>
                    </div>
                    <div class="thumbnail_news_content">
                        <h3><a href="#">By 2026, the Gates Foundation aims to spend $9 billion</a></h3>
                        <p>
                            Why I made a deerskin medicine bag with Washington state’s Teacher.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="thumbnail_news_wrap">
                    <div class="thumbnails_news_media">
                        <a href="#"><img src="img/news7.jpg" alt="images"></a>
                    </div>
                    <div class="thumbnail_news_content">
                        <h3><a href="#">By 2026, the Gates Foundation aims to spend $9 billion</a></h3>
                        <p>
                            Why I made a deerskin medicine bag with Washington state’s Teacher.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="thumbnail_news_wrap">
                    <div class="thumbnails_news_media">
                        <a href="#"><img src="img/news8.jpg" alt="images"></a>
                    </div>
                    <div class="thumbnail_news_content">
                        <h3><a href="#">By 2026, the Gates Foundation aims to spend $9 billion</a></h3>
                        <p>
                            Why I made a deerskin medicine bag with Washington state’s Teacher.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="thumbnail_news_wrap">
                    <div class="thumbnails_news_media">
                        <a href="#"><img src="img/news9.jpg" alt="images"></a>
                    </div>
                    <div class="thumbnail_news_content">
                        <h3><a href="#">By 2026, the Gates Foundation aims to spend $9 billion</a></h3>
                        <p>
                            Why I made a deerskin medicine bag with Washington state’s Teacher.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="thumbnail_news_wrap">
                    <div class="thumbnails_news_media">
                        <a href="#"><img src="img/news10.jpg" alt="images"></a>
                    </div>
                    <div class="thumbnail_news_content">
                        <h3><a href="#">By 2026, the Gates Foundation aims to spend $9 billion</a></h3>
                        <p>
                            Why I made a deerskin medicine bag with Washington state’s Teacher.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="thumbnail_news_wrap">
                    <div class="thumbnails_news_media">
                        <a href="#"><img src="img/news11.jpg" alt="images"></a>
                    </div>
                    <div class="thumbnail_news_content">
                        <h3><a href="#">By 2026, the Gates Foundation aims to spend $9 billion</a></h3>
                        <p>
                            Why I made a deerskin medicine bag with Washington state’s Teacher.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="thumbnail_news_wrap">
                    <div class="thumbnails_news_media">
                        <a href="#"><img src="img/news12.jpg" alt="images"></a>
                    </div>
                    <div class="thumbnail_news_content">
                        <h3><a href="#">By 2026, the Gates Foundation aims to spend $9 billion</a></h3>
                        <p>
                            Why I made a deerskin medicine bag with Washington state’s Teacher.
                        </p>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="load_more_btn">
            <a href="#">Load More <i class="las la-long-arrow-alt-right"></i></a>
        </div>
    </div>
</section>
<!-- Category Page End  -->



<?php
include 'footer.php';
?>