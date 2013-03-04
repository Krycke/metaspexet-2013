<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"  <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"  <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"  <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"  <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title('|', true, 'right'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/normalize.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class("clearfix"); ?>>
        <div id="wrapper">
            <!--[if lt IE 7]>
                <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
            <![endif]-->

            <div id="train"></div>
            <div id="mag_glass">
                <a href="http://www.facebook.com/metaspexet" id="facebook" class="ir" target="_blank" title="Följ oss på Facebook">Följ oss på Facebook</a>
                <a href="https://twitter.com/Metaspexet" id="twitter" class="ir" target="_blank" title="Följ oss på Twitter">Följ oss på Twitter</a>
                <a href="http://instagram.com/metaspexet" id="instagram" class="ir" target="_blank" title="Följ oss på Instagram">Följ oss på Instagram</a>
            </div>
            <div id="gun"></div>
            <div id="pipe"></div>
            <div class="container_12 hfeed site clearfix" id="page">

                <header class="prefix_3 grid_6 suffix_3">
                    <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home" id="logo" class="ir">
                        <hgroup>
                            <h1><?php bloginfo('name'); ?></h1>
                            <h2><?php bloginfo('description'); ?></h2>
                        </hgroup>
                    </a>
                </header>
                <div id="leftSidebar" class="prefix_1 grid_2 clearfix">
                    <div id="key" class="grid_2 alpha omega "></div>
                    <a href="/buy-tickets/" id="buyTickets" class="ir grid_2 alpha omega">Buy Tickets</a>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'nav-menu',
                        'menu_id' => 'nav_list',
                        'container' => 'nav',
                        'container_class' => 'main-navigation grid_2 alpha omega',
                        'container_id' => 'site-navigation'
                    ));
                    ?>
                </div>
                <div id="main_wrapper" class="grid_6 clearfix">
                    <div id="main_top"></div>