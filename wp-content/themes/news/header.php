<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <title><?php echo get_the_title(); ?></title>
    <link rel="icon" type="image/ico" href="<?php the_field('favicon', 'option') ?>">
    <?php wp_head(); ?>
</head>

<body>

    <div class="body-bg"></div>

    <!-- Header  -->
    <Header class="header">
        <div class="container">
            <div class="h_wrap">
                <div class="nav_menu" title="Menu">
                    <img src="<?php bloginfo('template_url'); ?>/img/menu.png" alt="Menu" title="Menu">
                </div>
                <div class="logo">
                    <a href="<?php echo home_url(); ?>"><img src="<?php the_field('logo', 'option'); ?>" alt="Logo"
                            title="Logo"></a>
                </div>
                <div class="header_menu">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox" />
                            <div class="slider round"></div>
                        </label>
                        <span>Dark Mode</span>
                    </div>
                </div>
            </div>
        </div>
    </Header>
    <!-- Header End  -->

    <!-- Navigation Bar  -->
    <div class="header_nav">
        <div class="container">
            <div class="header-nav-wrap">
                <nav>
                    <?php
                    wp_nav_menu( array( 
                        'theme_location' => 'primary_menu', 
                    )); 
                ?>
                </nav>
                <div class="navigation_utilities">
                    <div class="social_media">
                        <ul>
                            <li>
                                <a href="<?php the_field('facebook_link', 'option'); ?>" title="Facebook"
                                    target="_blank">
                                    <img src="<?php the_field('facebook_icon', 'option'); ?>" alt="images">
                                </a>
                            </li>
                            <li>
                                <a href="<?php the_field('twitter_link', 'option'); ?>" title="Twitter" target="_blank">
                                    <img src="<?php the_field('twitter_icon', 'option'); ?>" alt="images">
                                </a>
                            </li>
                            <li>
                                <a href="<?php the_field('instagram_link', 'option'); ?>" title="Instagram"
                                    target="_blank">
                                    <img src="<?php the_field('instagram_icon', 'option'); ?>" alt="images">
                                </a>
                            </li>
                            <li>
                                <a href="<?php the_field('linkedin_link', 'option'); ?>" title="Linkedin"
                                    target="_blank">
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
                    <div class="search">
                        <div class="search-box" title="Search">
                            <img src="<?php bloginfo('template_url'); ?>/img/search.png" alt="Search">
                        </div>
                        <div class="search-overlay">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <div class="search-overlay-layer"></div>
                                    <div class="search-overlay-layer"></div>
                                    <div class="search-overlay-layer"></div>
                                    <div class="search-overlay-close">
                                        <span class="search-overlay-close-line"></span>
                                        <span class="search-overlay-close-line"></span>
                                    </div>
                                    <div class="search-overlay-form">
                                        <?php get_search_form(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navigation Bar End  -->

    <!-- Mobile Menu -->
    <div id="mySidenav" class="sidenav">
        <div class="mobile-logo">
            <a href="<?php echo home_url(); ?>"><img src="<?php the_field('logo', 'option') ?>" alt="logo"></a>
            <a href="javascript:void(0)" id="close-btn" class="closebtn"><img
                    src="<?php bloginfo('template_url'); ?>/img/cross.png" alt="Menu" title="Close"></a>
        </div>
        <div class="no-bdr1" id="menu1">
            <?php
                wp_nav_menu( array( 
                    'theme_location' => 'primary_menu', 
                )); 
            ?>
            <div class="contact_menu">
                <?php
                    wp_nav_menu( array( 
                        'theme_location' => 'secondary_menu', 
                    )); 
                ?>
            </div>
        </div>
    </div>
    <!-- Mobile Menu End -->