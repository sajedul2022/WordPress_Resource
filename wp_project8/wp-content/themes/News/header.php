<!DOCTYPE html>
<html <?php language_attributes();?> >

<head>
    <title><?php bloginfo('name');?></title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="<?php bloginfo('description');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css"
        href="<?php echo get_template_directory_uri() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo get_template_directory_uri() ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/li-scroller.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/slick.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo get_template_directory_uri() ?>/assets/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/customStyle.css">
    
    <?php wp_head();?>
</head>

<body class="<?php body_class(); ?> >
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    <div class="container">
        <header id="header">

            <!-- Breaking Bews -->
            <!-- <section id="newsSection">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="latest_newsarea"> <span>Latest News</span>
                            <ul id="ticker01" class="news_sticker">
                                <li><a href="#">Israel, Arab nations deepen cooperation</a></li>
                                <li><a href="#">Revival of rivals’ talks: Iraqi PM arrives</a></li>
                                <li><a href="#">Tensions between Iran and Saudi Arabia rose 2019An Iranian official told
                                        Reuters "the resumption</a></li>
                                <li><a href="#">The fifth round of talks were held in April. Kadhimi's visit comes as a
                                        months-long impasse. An Iranian official told Reuters</li>
                            </ul>
                            <div class="social_area">
                                <ul class="social_nav">
                                    <li class="facebook"><a href="#"></a></li>
                                    <li class="twitter"><a href="#"></a></li>
                                    <li class="flickr"><a href="#"></a></li>
                                    <li class="pinterest"><a href="#"></a></li>
                                    <li class="googleplus"><a href="#"></a></li>
                                    <li class="vimeo"><a href="#"></a></li>
                                    <li class="youtube"><a href="#"></a></li>
                                    <li class="mail"><a href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- End Breking News -->

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="header_top">
                        <div class="header_top_left">
                             <!--primary wp menu  -->
                                <?php 
                                            wp_nav_menu(
                                                array(
                                                    'theme_location' => 'primary_menu',
                                                    'container_class' => 'top_nav' 
                                            ));
                                ?>

                        </div>
                        <div class="header_top_right">
                            <p><?php echo date('l, d F, Y ');?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="header_bottom">
                        <div class="logo_area"><a href="<?php echo get_home_url();?>" class="logo"><img
                                    src="<?php echo get_template_directory_uri() ?>/images/logo.jpg" alt="Logo"></a>
                        </div>
                        <div class="add_banner"><a href="#"><img
                                    src="<?php echo get_template_directory_uri() ?>/images/addbanner_728x90_V1.jpg"
                                    alt=""></a></div>
                    </div>
                </div>
            </div>
        </header>
        <section id="navArea">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">

                    <ul class="nav navbar-nav main_nav">
                        <li class="active"><a href="<?php echo get_home_url();?>"><span class="fa fa-home desktop-home"></span><span
                                    class="mobile-show">Home</span></a></li>

                        <li><a href="pages/single_page.html">Technology</a></li>
                        <li class="dropdown"> <a href="pages/single_page.html" class="dropdown-toggle"
                                data-toggle="dropdown" role="button" aria-expanded="false">Feature </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="pages/single_page.html"> Sports</a></li>
                                <li><a href="pages/single_page.html">Environment </a></li>
                                <li><a href="pages/single_page.html">NRB</a></li>
                                <li><a href="pages/single_page.html">Mobile News</a></li>
                                <li><a href="pages/single_page.html">Tech</a></li>
                            </ul>
                        </li>
                        <li><a href="pages/single_page.html"> Business </a></li>
                        <li><a href="pages/single_page.html">Entertainment</a></li>
                        <li><a href="pages/single_page.html"> Life & Living </a></li>
                        <li><a href="pages/single_page.html">Tech & Startup </a></li>
                        <li><a href="pages/single_page.html">Environment </a></li>
                        <li><a href="pages/single_page.html">Sports </a></li>
                    </ul>

                </div>
            </nav>
        </section>