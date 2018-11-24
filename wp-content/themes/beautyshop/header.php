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
//		do_action( 'storefront_header' ); die;
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
                                <a href="<?php site_url() ?>/my-account" class="account-menu-title"> <i class="fa fa-user"></i>&nbsp; Профиль <i class="fa fa-angle-down"></i> </a>
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
                                        <img src="<?php get_template_directory_uri() ?>\img\logo-big-shop.png" alt="Интернет магазин профессиональной косметики">
                                    </a>
                                </div>
                                <div class="col-md-5">
                                    <div class="top-search-form pull-left">
                                        <?php
                                        echo '<a href="">' . esc_attr__( 'Search', 'storefront' ) . '</a>';
                                        storefront_product_search();
                                        ?>
<!--                                        <form role="search" method="get" class="search-form form-inline" action="--><?php //echo home_url( '/' ); ?><!--">-->
<!--                                            <input type="search" class="form-control" id="search-field"placeholder="Поиск ..." class="form-control" value="--><?php //echo get_search_query() ?><!--" name="s" style="width: 100%;">-->
<!--                                            <button type="submit"><i class="fa fa-search"></i></button>-->
<!--                                        </form>-->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="header-mini-cart  pull-right">
                                        <a class="cart-contents" href="<?=esc_url(wc_get_cart_url()); ?>"
                                           title="<?php _e('Перейти в корзину', 'woothemes'); ?>" data-toggle="dropdown"> Корзина
                                            <span>
												<?php echo sprintf(_n('%d товар', '%d товаров', WC()->cart->cart_contents_count,'woothemes'), WC()->cart->cart_contents_count);?>
                                                <?php echo WC()->cart->get_cart_total(); ?>
											</span>
                                        </a>
                                        <div class="dropdown-menu shopping-cart-content pull-right">
                                            <div class="shopping-cart-items">
                                                <?php if ( ! WC()->cart->is_empty() ) : ?>
                                                    <?php
                                                    global $woocommerce;
                                                    $items = $woocommerce->cart->get_cart();

                                                    foreach($items as $cart_item_key => $cart_item) {
                                                        $_product = $cart_item['data']->post;
                                                        $price = get_post_meta($cart_item['product_id'] , '_price', true);
                                                        $count = $cart_item['quantity'];
                                                        ?>
                                                        <div class="item pull-left">
                                                            <?php
                                                            $product=new WC_product( $cart_item['product_id']);
                                                            $post_thumbnail_id = $product->get_image_id();
                                                            $thumbnail_size = apply_filters( 'woocommerce_gallery_thumbnail_size', array( $gallery_thumbnail['width'], $gallery_thumbnail['height'] ) );
                                                            $thumbnail_src = wp_get_attachment_image_src( $post_thumbnail_id, $thumbnail_size );
                                                            echo '<img src="' . esc_url( $thumbnail_src[0] ) . '" class="pull-left" alt="None">';
                                                            ?>
                                                            <!-- <img src="http://placehold.it/56x70" alt="Название товара" class="pull-left"> -->
                                                            <div class="pull-left">
                                                                <p><?php echo $_product->post_title; ?></p>
                                                                <p><?php echo $price; ?>&nbsp;<strong>x <?php echo $count; ?></strong></p>
                                                            </div>
                                                            <!-- <a href="" class="trash"><i class="fa fa-trash-o pull-left"></i></a> -->
                                                        </div>
                                                    <?php } ?>
                                                    <div class="total pull-left">
                                                        <a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="btn-read pull-right">В корзину</a>
                                                        <a href="<?php site_url() ?>/checkout" class="btn-read pull-right">Заказать</a>
                                                    </div>
                                                <?php else : ?>
                                                    <p class="woocommerce-mini-cart__empty-message"><?php _e( 'No products in the cart.', 'woocommerce' ); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
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
	do_action( 'storefront_before_content' ); ?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
