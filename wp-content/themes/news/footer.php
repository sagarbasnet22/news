<footer class="footer">
    <div class="container">
        <div class="footer-wrap">
            <div class="footer_social_media">
                <div class="social_media">
                    <ul>
                        <?php 
                        if( have_rows('social_media_list') ): ?>
                        <?php 
                        while( have_rows('social_media_list') ): the_row() ?>
                        <li><a href="<?php the_sub_field('social_media_link'); ?>"
                                title="facebook"><?php the_sub_field('social_media_icon'); ?></a></li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>

            <div class="footer_logo">
                <a href="<?php echo home_url(); ?>"><img src="<?php the_field('footer_logo', 'option') ?>" alt="images"></a>
            </div>
            <div class="copy_right">
                <p>© 2022 News Portal. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>