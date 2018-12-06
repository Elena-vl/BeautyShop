<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <?php do_action( 'storefront_before_site' ); ?>

        <div id="page" class="hfeed site">
            <?php do_action( 'storefront_before_header' ); ?>

        <!--	<header id="masthead" class="site-header" role="banner" style="--><?php //storefront_header_styles(); ?><!--">-->
            <header id="header" class="site-header" role="banner">
                <?php
                /**
                 * Functions hooked into storefront_header action
                 *
                 * @hooked storefront_header_container                 - 0
                 * @hooked storefront_skip_links                       - 5
                 * @hooked storefront_social_icons                     - 10
                 * @hooked storefront_site_branding                    - 20
                 * @hooked storefront_secondary_navigation             - 30
                 * @hooked storefront_product_search                   - 40
                 * @hooked storefront_header_container_close           - 41
                 * @hooked storefront_primary_navigation_wrapper       - 42
                 * @hooked storefront_primary_navigation               - 50
                 * @hooked storefront_header_cart                      - 60
                 * @hooked storefront_primary_navigation_wrapper_close - 68
                 */
        //		do_action( 'storefront_header' );
                ?>
                <div class="header-top-row">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="top-welcome hidden-xs hidden-sm">
                                    <p><?php echo esc_html( get_bloginfo( 'description', 'display' ) ) ?>&nbsp;&nbsp;<i class="fa fa-phone"></i> +7-922-829-91-15 &nbsp; <i class="fa fa-envelope"></i> beautyshop56@mail.ru</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pull-right">
                                    <!-- header-account menu -->
                                    <div id="account-menu" class="pull-right">
                                        <a href="<?php site_url() ?>/my-account" class="account-menu-title"> <i class="fa fa-user"></i>&nbsp; Профиль
        <!--                                    <i class="fa fa-angle-down"></i> -->
                                        </a>
                                    </div>
                                    <!-- /header-account menu -->

                                    <!-- header - currency -->
                                    <div class="socials-block pull-right">
                                        <ul class="list-unstyled list-inline">
                                            <li><a href="https://vk.com/beautyshop56" target="_blank"><i class="fa fa-vk"></i></a></li>
                                            <li><a href="https://www.instagram.com/56beautyshop/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- /header - currency -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header-bg">
                    <div class="header-main" id="header-main-fixed">
                        <div class="header-main-block1">
                            <div class="container">
                                <div id="container-fixed">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="<?php echo get_site_url(); ?>" class="header-logo">
                                                <img src="<?php get_site_url() ?>/wp-content/uploads/2018/11/logo-big-shop.png" alt="Интернет магазин профессиональной косметики">
                                            </a>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="top-search-form pull-left">
                                                <?php
                                                storefront_product_search();
                                                ?>
        <!--                                        <form role="search" method="get" class="search-form form-inline" action="--><?php //echo home_url( '/' ); ?><!--">-->
        <!--                                            <input type="search" class="form-control" id="search-field" placeholder="Поиск ..." class="form-control" value="--><?php //echo get_search_query() ?><!--" name="s" style="width: 100%;">-->
        <!--                                            <button type="submit"><i class="fa fa-search"></i></button>-->
        <!--                                        </form>-->
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <?php
                                            storefront_header_cart();
        //                                                do_action('storefront_header_cart');
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-main-block2">
                            <nav class="navbar yamm  navbar-main" role="navigation">
                                <div class="container">
                                    <div class="navbar-header">
                                        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                        <a href="<?php echo get_site_url(); ?>" class="navbar-brand"><i class="fa fa-home"></i></a>
                                    </div>
                                    <div id="navbar-collapse-1" class="navbar-collapse collapse ">
                                        <ul class="nav navbar-nav">
                                            <!-- Classic list -->
                                            <?php $args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
                                                'theme_location' => 'top', // идентификатор меню, определен в register_nav_menus() в functions.php
                                                'container'=> false, // обертка списка, тут не нужна
                                                'menu_id' => 'top-nav-ul', // id для ul
                                                'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
                                                'menu_class' => 'top-menu', // класс для ul, первые 2 обязательны
                                                'walker' => new bootstrap_menu(true) // верхнее меню выводится по разметке бутсрапа, см класс в functions.php, если по наведению субменю не раскрывать то передайте false
                                            );
                                            wp_nav_menu($args); // выводим верхнее меню
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!-- /header-main-menu -->
                </div>
            </header>

            <?php
            /**
             * Functions hooked in to storefront_before_content
             *
             * @hooked storefront_header_widget_region - 10
             * @hooked woocommerce_breadcrumb - 10
             */
//            do_action( 'storefront_before_content' );
            ?>

<!--        	<div id="content" class="site-content" tabindex="-1">-->
<!--        		<div class="col-full">-->

                <?php
//                do_action( 'storefront_content_top' );
