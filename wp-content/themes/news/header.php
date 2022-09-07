<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#ff5236">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <title><?php echo get_the_title(); ?></title>
    <link rel="icon" type="image/ico" href="<?php the_field('favicon', 'option') ?>">
    <?php wp_head(); ?>
</head>

<body>

    <div class="body-bg"></div>

    <!-- Scroll Header  -->
    <div class="scroll_header">
        <div class="container">
            <div class="scroll-header-wrap">
                <div class="scroll_logo">
                    <a href="<?php echo home_url(); ?>"><img src="<?php the_field('logo', 'option'); ?>" alt="Logo"
                            title="Logo">
                    </a>
                </div>
                <div class="scroll_menu">
                    <nav>
                        <?php
                            wp_nav_menu( array( 
                                'theme_location' => 'primary_menu', 
                            )); 
                        ?>
                    </nav>
                </div>
                <div class="scroll-search">
                    <div class="search">
                        <div class="search-box" title="Search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
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
    <!-- Scroll Header End  -->

    <!-- Header  -->
    <Header class="header">
        <div class="container">
            <div class="h_wrap">
                <div class="social_media mobile_social_media">
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
                <div class="nav_menu desktop_only_menu" title="Menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="logo desktop_only_logo">
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
                <div class="nav_menu mobile_only_menu" title="Menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="logo mobile_only_logo">
                    <a href="<?php echo home_url(); ?>"><img src="<?php the_field('logo', 'option'); ?>" alt="Logo"
                            title="Logo">
                    </a>
                </div>
                <nav>
                    <?php
                    wp_nav_menu( array( 
                        'theme_location' => 'primary_menu', 
                    )); 
                ?>
                </nav>
                <div class="navigation_utilities">
                    <div class="social_media desktop_only_social_media">
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
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