<?php
/* Template Name: Contact Us */
get_header();
?>


<nav aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
        </ol>
    </div>
</nav>


<!-- Contact Page  -->
<section class="contact_page mb">
    <div class="container">
        <div class="contact_page_wrap">
            <div class="contact_page_info">
                <h3><?php the_title(); ?></h3>
                <ul class="contact_list">
                    <li><?php the_field('company_name', 'option') ?></li>
                    <li><?php the_field('address', 'option') ?></li>
                    <li>Email Us: <a
                            href="mailto: <?php the_field('email', 'option') ?>"><?php the_field('email', 'option') ?></a>
                    </li>
                    <li>Call Us: <a
                            href="tel: <?php the_field('phone_number', 'option') ?>"><?php the_field('phone_number', 'option') ?></a>
                    </li>
                    <li>Website: <a href="<?php the_field('domain_name', 'option') ?>"
                            target="_blank"><?php the_field('domain_name', 'option') ?></a></li>
                </ul>
                <?php the_content(); ?>
                <ul class="contact_social">
                    <li>
                        <a href="<?php the_field('facebook_link', 'option'); ?>" title="Facebook" target="_blank">
                            <img src="<?php the_field('facebook_icon', 'option'); ?>" alt="images">
                        </a>
                    </li>
                    <li>
                        <a href="<?php the_field('twitter_link', 'option'); ?>" title="Twitter" target="_blank">
                            <img src="<?php the_field('twitter_icon', 'option'); ?>" alt="images">
                        </a>
                    </li>
                    <li>
                        <a href="<?php the_field('instagram_link', 'option'); ?>" title="Instagram" target="_blank">
                            <img src="<?php the_field('instagram_icon', 'option'); ?>" alt="images">
                        </a>
                    </li>
                    <li>
                        <a href="<?php the_field('linkedin_link', 'option'); ?>" title="Linkedin" target="_blank">
                            <img src="<?php the_field('linkedin_icon', 'option'); ?>" alt="images">
                        </a>
                    </li>
                    <li>
                        <a href="<?php the_field('youtube_link', 'option'); ?>" title="Youtube" target="_blank">
                            <img src="<?php the_field('youtube_icon', 'option'); ?>" alt="images">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="contact_page_form">
                <?php echo do_shortcode('[contact-form-7 id="235" title="Contact form 1"]'); ?>
            </div>
        </div>
    </div>
</section>
<!-- Contact Page End  -->



<?php
get_footer();
?>