<?php 
get_header();
?>


<?php 
    if ( have_posts() ) :
    while ( have_posts() ) : the_post(); 
?>


<nav aria-label="breadcrumb">
    <div class="container">
        <div class="section_head section_general">
            <h1><?php the_title(); ?></h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?php the_title(); ?>
                </li>
            </ol>
        </div>
    </div>
</nav>



<!-- General Page  -->
<section class="general_page mb">
    <div class="container">
        <div class="general_page_wrap">
            <?php the_content(); ?>
        </div>
    </div>
</section>
<!-- General Page End  -->

<?php 
    endwhile;
    endif; 
?>


<?php 
get_footer();
?>