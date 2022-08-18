<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="icon" type="image/ico" href="img/favicon.ico">
    <link rel="stylesheet" href="css/line-awesome.min.css">
    <link rel="stylesheet" href="css/metisMenu.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

    <div class="body-bg"></div>

    <!-- Header  -->
    <Header class="header">
        <div class="container">
            <div class="h_wrap">
                <div class="logo">
                    <a href="index.php"><img src="img/logo1.svg" alt="Logo" title="Logo"></a>
                </div>
                <div class="header_menu">
                    <div class="header_nav">
                        <nav>
                            <ul>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Celebrities</a></li>
                                <li><a href="#">Politicians</a></li>
                                <li><a href="#">World's Billionaires</a></li>
                                <li><a href="#">Athletes</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="search">
                        <div class="search-box">
                            <i class="las la-search"></i>
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
                                        <form method="post" action="">
                                            <input type="text" class="input-search" placeholder="Search here...">
                                            <button type="submit"><i class="las la-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav_menu">
                        <i class="las la-compress"></i>
                    </div>
                </div>
            </div>
        </div>
    </Header>
    <!-- Header End  -->

    <!-- Mobile Menu -->
    <div id="mySidenav" class="sidenav">
        <div class="mobile-logo">
            <a href="index.php"><img src="img/logo1.svg" alt="logo"></a>
            <a href="javascript:void(0)" id="close-btn" class="closebtn"><i class="las la-times"></i></a>
        </div>
        <div class="no-bdr1">
            <ul id="menu1">
                <li class="active"><a href="#">Businessman</a></li>
                <li><a href="#">Politician</a></li>
                <li><a href="#">Celebrities</a></li>
                <li>
                    <a href="#" class="has-arrow">Film Industry</a>
                    <ul>
                        <li>
                            <a href="#">Hollywood</a>
                        </li>
                        <li>
                            <a href="#">Bollywood</a>
                        </li>
                        <li>
                            <a href="#">Kollywood</a>
                        </li>
                    </ul>
                </li>
                <li><a href="#">World's Billionaires</a></li>
                <li><a href="#">Athletes</a></li>
            </ul>
            <div class="contact_menu">
                <ul>
                    <li>
                        <a href="#">About Us</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms & Conditions</a>
                        <a href="#">FAQS</a>
                        <a href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="social_media">
                <ul>
                    <li><a href="#" title="facebook"><i class="lab la-facebook-f"></i></a></li>
                    <li><a href="#" title="twitter"><i class="lab la-twitter"></i></a></li>
                    <li><a href="#" title="instagram"><i class="lab la-instagram"></i></a></li>
                    <li><a href="#" title="linkedin"><i class="lab la-linkedin"></i></a></li>
                    <li><a href="#" title="youtube"><i class="lab la-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Mobile Menu End -->
