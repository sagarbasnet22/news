<div class="newsletter">
    <div class="newsletter-row">
        <div class="newsletter-col">
            <img src="<?php bloginfo('template_url'); ?>/img/cross.png" alt="Menu" title="Close"
                class="newsletter_close">
            <div class="newsletter-left">
                <img src="<?php bloginfo('template_url'); ?>/img/newsletter.jpg" alt="images">
            </div>
            <div class="newsletter-right">
                <h3>Subscribe our Newsletter</h3>
                <p>Subscribe our newsletter to receive daily basis notifications of our daily updates and find out more.</p>
                <?php echo do_shortcode('[newsletter_form type="minimal"]'); ?>
            </div>
        </div>
    </div>
</div>