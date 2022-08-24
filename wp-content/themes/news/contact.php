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
                    <?php 
                        if( have_rows('social_media_list') ): ?>
                    <?php 
                        while( have_rows('social_media_list') ): the_row() ?>
                    <li><a href="<?php the_sub_field('social_media_link'); ?>" title="facebook"
                            target="_blank"><?php the_sub_field('social_media_icon'); ?></a></li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="contact_page_form">
                <form action="">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Full Name</label>
                                <input type="text" class="form-control" placeholder="Full Name" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Subject</label>
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="">Message</label>
                                <textarea name="" id="" rows="5" class="form-control"
                                    placeholder="Write your message..."></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact Page End  -->



<?php
get_footer();
?>