<?php
    get_header();
?>


<?php
$query_slide = array('post_type' => 'page', 'name' => 'search-page');
$queryObject_slide = new WP_Query($query_slide);
if ($queryObject_slide->have_posts()) {
	while ($queryObject_slide->have_posts()) {
		$queryObject_slide->the_post();?>

		<?php
$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
		$url = $thumb['0'];
		?>


<nav aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
        </ol>
    </div>
</nav>
<?php }}?>


<!-- Author Page  -->
<section class="search_page mb">
    <div class="container">
        <span class="search_result">
        <?php 
            global $wp_query;
            echo $wp_query->found_posts.' search results found.';
        ?>
        </span>
        <div class="search_col">
            <div class="row">
                <?php 
                if ( have_posts() ) :
                while ( have_posts() ) : the_post(); 
                ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
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