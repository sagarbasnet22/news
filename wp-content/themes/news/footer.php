<footer class="footer">
    <div class="container">
        <div class="footer-wrap">
            <div class="footer_social_media">
                <div class="social_media">
                    <ul>
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
            </div>

            <div class="footer_logo">
                <a href="<?php echo home_url(); ?>"><img src="<?php the_field('footer_logo', 'option') ?>"
                        alt="images"></a>
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