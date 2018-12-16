<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>

<!--	<div id="primary" class="content-area">-->
<!--		<main id="main" class="site-main" role="main">-->

			<?php
			/**
			 * Functions hooked in to homepage action
			 *
			 * @hooked storefront_homepage_content      - 10
			 * @hooked storefront_product_categories    - 20
			 * @hooked storefront_recent_products       - 30
			 * @hooked storefront_featured_products     - 40
			 * @hooked storefront_popular_products      - 50
			 * @hooked storefront_on_sale_products      - 60
			 * @hooked storefront_best_selling_products - 70
			 */
//			do_action( 'homepage' ); ?>
<section>
    <div class="revolution-container">
        <div class="revolution">
            <ul class="list-unstyled">	<!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                    <!-- MAIN IMAGE -->
                    <img src="<?php get_site_url() ?>/wp-content/uploads/img/bg1.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->
                    <div class="tp-caption skewfromrightshort customout"
                         data-x="20"
                         data-y="160"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="300"
                         data-easing="Power4.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="on"
                         style="z-index: 4">
                        <img src="<?php get_site_url() ?>/wp-content/uploads/img/preview/slider/1.png" alt="">
                    </div>
                    <div class="tp-caption skewfromrightshort customout"
                         data-x="20"
                         data-y="224"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="500"
                         data-easing="Power4.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="on"
                         style="z-index: 4">
                        <img src="<?php get_site_url() ?>/wp-content/uploads/img/preview/slider/1-2.png" alt="">
                    </div>
                    <div class="tp-caption skewfromrightshort customout"
                         data-x="20"
                         data-y="335"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="700"
                         data-easing="Power4.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="on"
                         style="z-index: 4">
                        <img src="<?php get_site_url() ?>/wp-content/uploads/img/preview/slider/1-1.png" alt="">
                    </div>
                    <div class="tp-caption customin customout hidden-xs"
                         data-x="20"
                         data-y="430"
                         data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="1000"
                         data-easing="Power4.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="on"
                         style="z-index: 2">
<!--                                    <a href="#" class="btn-home">Каталог</a>-->
                    </div>
                    <div class="tp-caption customin customout hidden-xs"
                         data-x="145"
                         data-y="430"
                         data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="1200"
                         data-easing="Power4.easeOut"
                   а      data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="on"
                         style="z-index: 2">
<!--                                    <a href="#" class="btn-home">О магазине</a>-->
                    </div>
                </li>
                <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                    <!-- MAIN IMAGE -->
                    <img src="<?php get_site_url() ?>/wp-content/uploads/img/bg2.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->
                    <div class="tp-caption skewfromrightshort customout"
                         data-x="20"
                         data-y="204"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="500"
                         data-easing="Power4.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="on"
                         style="z-index: 2">
                        <img src="<?php get_site_url() ?>/wp-content/uploads/img/preview/slider/1-2.png" alt="">
                    </div>
                    <div class="tp-caption skewfromrightshort customout"
                         data-x="20"
                         data-y="315"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="700"
                         data-easing="Power4.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="on"
                         style="z-index: 2">
                        <img src="<?php get_site_url() ?>/wp-content/uploads/img/preview/slider/1-1.png" alt="">
                    </div>
                    <div class="tp-caption customin customout hidden-xs"
                         data-x="20"
                         data-y="410"
                         data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="1000"
                         data-easing="Power4.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="on"
                         style="z-index: 3">
                        <a href="#" class="btn-home">Каталог</a>
                    </div>
                    <div class="tp-caption customin customout hidden-xs"
                         data-x="145"
                         data-y="410"
                         data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="1200"
                         data-easing="Power4.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="on"
                         style="z-index: 4">
                        <a href="#" class="btn-home">О магазине</a>
                    </div>


                </li>
            </ul>
            <div class="revolutiontimer"></div>
        </div>
    </div>
</section>

<section>
    <div>
        <div class="container">
            <div class="row">
                <aside class="col-md-3">
                    <!-- вывод категорий -->
                    <div class="main-category-block ">
                            <div class="main-category-title">
                                <i class="fa fa-list"></i> Каталог
                            </div>
                            <div class="main-category-items">
                                <div class="widget-block">

                                    <?php
                                    $args = array(
                                        'taxonomy' => 'product_cat',
                                        'orderby'	=> 'count',
                                        'order'		=> 'DESC',
                                        'hide_empty' => false,
                                        'parent'	 => 0,
                                        'exclude' => array(15,26),
                                    );

                                    $product_categories = get_terms( $args );

                                    $count = count($product_categories);
                                    if ( $count > 0 )
                                    {
                                        echo '<ul class="list-unstyled ul-side-category">';
                                        foreach ( $product_categories as $product_category )
                                        {
                                            $args = array(
                                                'taxonomy' => 'product_cat',
                                                'orderby'	=> 'count',
                                                'order'		=> 'DESC',
                                                'hide_empty' => false,
                                                'parent'	 => $product_category->term_id,
                                            );
                                            $product_sub_categories = get_terms( $args );
                                            $product_category_link = '';
                                            if (empty($product_sub_categories))
                                            {
                                                $product_category_link = get_term_link( $product_category );
                                            }
                                            echo '<li><a	href="'.$product_category_link.'"><i class="fa fa-angle-right"></i> '.$product_category->name . '</a>';
                                            if (!empty($product_sub_categories))
                                            {
                                                echo '<ul class="sub-category">';
                                                foreach ( $product_sub_categories as $product_sub_category )
                                                {
                                                    echo '<li><a href="' . get_term_link( $product_sub_category ) . '">'.$product_sub_category->name . '</a></li>';
                                                }
                                                echo "</ul>";
                                            }
                                            echo "</li>";
                                        }
                                        echo "</ul>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

                    <div class="widget-title">
                        <i class="fa fa-thumbs-up"></i> Товар дня
                    </div>
                    <article class="product light last-sale">
                        <figure class="figure-hover-overlay">
                            <?php the_widget( 'berocket_products_of_day_widget'); ?>
                        </figure>
                    </article>

                    <div class="widget-title">
                        <i class="fa fa-comments"></i> Последние новости
                    </div>
                    <?php
                    if (have_posts() ) : query_posts('cat=68');
                        while (have_posts()) : the_post();
                            ?>
                            <div class="widget-block">
                                <div class="row">
                                    <div class="col-md-4 col-sm-2 col-xs-4">
                                        <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="" title="">
                                    </div>
                                    <div class="col-md-8 col-sm-10 col-xs-8">
                                        <div class="block-name">
                                            <a href="<?php echo get_the_permalink() ?>" class="product-name"><?php the_title(); ?></a>
                                        </div>
                                        <!--                                                    <p class="description">--><?php //the_content(); ?><!--</p>-->
                                        <p class="description"><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                    endif;
                    wp_reset_query();
                    ?>

                </aside>

                <aside class="col-md-9">

                    <div class="banner">
                        <img src="<?php get_site_url() ?>/wp-content/uploads/img/action.jpg" class="img-responsive" alt="">
                    </div>

                    <?php
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'post_type'   => 'product',
                            'include'     => array(),
                            'exclude'     => array(),
                            'suppress_filters' => true // подавление работы фильтров изменения SQL запроса
                        ) );
                    ?>
                    <div class="block-product-tab">
                        <div class="tab-bg"></div>
                        <div class="toolbar-for-light" id="nav-tabs2">
                            <a href="javascript:;" data-role="prev" class="prev"><i class="fa fa-angle-left"></i></a>
                            <a href="javascript:;" data-role="next" class="next"><i class="fa fa-angle-right"></i></a>
                        </div>
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#new" data-toggle="tab">Новинки</a><div class="header-bottom-line"></div></li>
                            <li><a href="#featured" data-toggle="tab" class="disabled">Избранные товары</a><div class="header-bottom-line"></div></li>

                            <li><a href="#new2" data-toggle="tab" class="disabled">Эксклюзивные товары</a><div class="header-bottom-line"></div></li>
                            <li><a href="#featured2" data-toggle="tab" class="disabled">Хиты продаж</a><div class="header-bottom-line"></div></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active animated fadeIn" id="new">
                                <div id="owl-new2"  class="owl-carousel">
                                    <?php  foreach( $posts as $post ){
                                        if(has_term('new' , 'product_tag')){ ?>
                                            <div class="text-center">
                                                <div class="product light">
                                                    <figure class="figure-hover-overlay">
                                                        <a href="<?php the_permalink(); ?>"	class="figure-href"></a>
                                                        <?php
                                                        $product = wc_get_product( $post->ID );
                                                        $post_thumbnail_id = $product->get_image_id();
                                                        $thumbnail_size = apply_filters( 'woocommerce_gallery_thumbnail_size', array( $gallery_thumbnail['width'], $gallery_thumbnail['height'] ) );
                                                        $thumbnail_src = wp_get_attachment_image_src( $post_thumbnail_id, 'full');
                                                        echo '<img src="' . esc_url( $thumbnail_src[0] ) . '" class="img-responsive" alt="" />';
                                                        ?>
                                                    </figure>
                                                    <div class="product-caption">
                                                        <div class="block-name">
                                                            <a href="<?php the_permalink(); ?>" class="product-name"><?php the_title(); ?></a>
                                                            <?php
                                                            if (empty($product->sale_price))
                                                                echo '<p class="product-price">₽'. $product->regular_price .'</p>';
                                                            else
                                                                echo '<p class="product-price"><span>₽'.$product->regular_price.'</span> ₽'.$product->sale_price.'</p>';
                                                            ?>
                                                        </div>
                                                        <div class="product-cart">
                                                            <?php woocommerce_template_loop_add_to_cart(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }
                                    } ?>
                                </div>
                            </div>

                            <div class="tab-pane animated fadeIn" id="featured">
                                <div id="owl-featured2"  class="owl-carousel">
                                    <?php  foreach( $posts as $post ){
                                        if(has_term('chosens' , 'product_tag')){ ?>
                                            <div class="text-center">
                                                <div class="product light">
                                                    <figure class="figure-hover-overlay">
                                                        <a href="<?php the_permalink(); ?>"	class="figure-href"></a>
                                                        <?php
                                                        $product = wc_get_product( $post->ID );
                                                        $post_thumbnail_id = $product->get_image_id();
                                                        $thumbnail_size = apply_filters( 'woocommerce_gallery_thumbnail_size', array( $gallery_thumbnail['width'], $gallery_thumbnail['height'] ) );
                                                        $thumbnail_src = wp_get_attachment_image_src( $post_thumbnail_id, 'full');
                                                        echo '<img src="' . esc_url( $thumbnail_src[0] ) . '" class="img-responsive" alt="" />';
                                                        ?>
                                                    </figure>
                                                    <div class="product-caption">
                                                        <div class="block-name">
                                                            <a href="<?php the_permalink(); ?>" class="product-name"><?php the_title(); ?></a>
                                                            <?php
                                                            if (empty($product->sale_price))
                                                                echo '<p class="product-price">₽'. $product->regular_price .'</p>';
                                                            else
                                                                echo '<p class="product-price"><span>₽'.$product->regular_price.'</span> ₽'.$product->sale_price.'</p>';
                                                            ?>
                                                        </div>
                                                        <div class="product-cart">
                                                            <?php woocommerce_template_loop_add_to_cart(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }
                                    } ?>
                                </div>
                            </div>

                            <div class="tab-pane animated fadeIn" id="new2">
                                <div id="owl-new"  class="owl-carousel">
                                    <?php  foreach( $posts as $post ){
                                        if(has_term('exclusive' , 'product_tag')){ ?>
                                            <div class="text-center">
                                                <div class="product light">
                                                    <figure class="figure-hover-overlay">
                                                        <a href="<?php the_permalink(); ?>"	class="figure-href"></a>
                                                        <?php
                                                        $product = wc_get_product( $post->ID );
                                                        $post_thumbnail_id = $product->get_image_id();
                                                        $thumbnail_size = apply_filters( 'woocommerce_gallery_thumbnail_size', array( $gallery_thumbnail['width'], $gallery_thumbnail['height'] ) );
                                                        $thumbnail_src = wp_get_attachment_image_src( $post_thumbnail_id, 'full');
                                                        echo '<img src="' . esc_url( $thumbnail_src[0] ) . '" class="img-responsive" alt="" />';
                                                        ?>
                                                    </figure>
                                                    <div class="product-caption">
                                                        <div class="block-name">
                                                            <a href="<?php the_permalink(); ?>" class="product-name"><?php the_title(); ?></a>
                                                            <?php
                                                            if (empty($product->sale_price))
                                                                echo '<p class="product-price">₽'. $product->regular_price .'</p>';
                                                            else
                                                                echo '<p class="product-price"><span>₽'.$product->regular_price.'</span> ₽'.$product->sale_price.'</p>';
                                                            ?>
                                                        </div>
                                                        <div class="product-cart">
                                                            <?php woocommerce_template_loop_add_to_cart(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }
                                    } ?>
                                </div>
                            </div>

                            <div class="tab-pane animated fadeIn" id="featured2">
                                <div id="owl-featured"  class="owl-carousel">
                                    <?php  foreach( $posts as $post ){
                                        if(has_term('hit' , 'product_tag')){ ?>
                                            <div class="text-center">
                                                <div class="product light">
                                                    <figure class="figure-hover-overlay">
                                                        <a href="<?php the_permalink(); ?>"	class="figure-href"></a>
                                                        <?php
                                                        $product = wc_get_product( $post->ID );
                                                        $post_thumbnail_id = $product->get_image_id();
                                                        $thumbnail_size = apply_filters( 'woocommerce_gallery_thumbnail_size', array( $gallery_thumbnail['width'], $gallery_thumbnail['height'] ) );
                                                        $thumbnail_src = wp_get_attachment_image_src( $post_thumbnail_id, 'full');
                                                        echo '<img src="' . esc_url( $thumbnail_src[0] ) . '" class="img-responsive" alt="" />';
                                                        ?>
                                                    </figure>
                                                    <div class="product-caption">
                                                        <div class="block-name">
                                                            <a href="<?php the_permalink(); ?>" class="product-name"><?php the_title(); ?></a>
                                                            <?php
                                                            if (empty($product->sale_price))
                                                                echo '<p class="product-price">₽'. $product->regular_price .'</p>';
                                                            else
                                                                echo '<p class="product-price"><span>₽'.$product->regular_price.'</span> ₽'.$product->sale_price.'</p>';
                                                            ?>
                                                        </div>
                                                        <div class="product-cart">
                                                            <?php woocommerce_template_loop_add_to_cart(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }
                                    } ?>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Отзывы покупателей -->
                    <div class="block">
                        <div class="header-for-light">
                            <h4 class="wow fadeInRight animated" data-wow-duration="1s">Отзывы <span>покупателей</span></h4>
                        </div>
                        <ul class="media-list list-unstyled">
                            <?php
                            comments_template('', true);
                            ?>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<section class="partners">
    <div class="block color-scheme-dark-90">
        <div class="container">
            <div class="header-for-dark">
                <h1 class="wow fadeInRight animated" data-wow-duration="2s">Известные <span>бренды</span></h1>
            </div>
            <div id="owl-partners"	class="owl-carousel">
                <?php
                $args = array(
                    'taxonomy' => 'product_cat',
                    'orderby'	=> 'count',
                    'order'		=> 'DESC',
                    'hide_empty' => false,
                    'parent'	 => 26,
                );
                $product_sub_categories = get_terms( $args );
                $product_category_link = '';

                if (!empty($product_sub_categories))
                {
                    foreach ( $product_sub_categories as $product_sub_category )
                    {
                        global $wp_query;
                        $thumbnail_id = get_woocommerce_term_meta( $product_sub_category->term_id, 'thumbnail_id', true );
                        $thumbnail_size = apply_filters( 'woocommerce_gallery_thumbnail_size', array( $gallery_thumbnail['width'], $gallery_thumbnail['height'] ) );
                        $image = wp_get_attachment_image_src( $thumbnail_id, $thumbnail_size );
                        echo '<div class="partner"><a href="' . get_term_link( $product_sub_category ) . '"><img src="' . $image[0] . '" class="img-responsive" alt=""></a></div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <article class="payment-service">
                        <!-- <a href="#"></a> -->
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <!--                                            <i class="fa --><?php //echo carbon_get_theme_option( 'feature_1_icon' ); ?><!--"></i>-->
                            </div>
                            <div class="col-md-8">
                                <!--                                            <h3 class="color-active">--><?php //echo carbon_get_theme_option( 'feature_1_title' ); ?><!--</h3>-->
                                <!--                                            <p>--><?php //echo carbon_get_theme_option( 'feature_1_subtitle' ); ?><!--</p>-->
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="payment-service">
                        <!-- <a href="#"></a> -->
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <!--                                            <i class="fa --><?php //echo carbon_get_theme_option( 'feature_2_icon' ); ?><!--"></i>-->
                            </div>
                            <div class="col-md-8">
                                <!--                                            <h3 class="color-active">--><?php //echo carbon_get_theme_option( 'feature_2_title' ); ?><!--</h3>-->
                                <!--                                            <p>--><?php //echo carbon_get_theme_option( 'feature_2_subtitle' ); ?><!--</p>-->
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="payment-service">
                        <!-- <a href="#"></a> -->
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <!--                                            <i class="fa --><?php //echo carbon_get_theme_option( 'feature_3_icon' ); ?><!--"></i>-->
                            </div>
                            <div class="col-md-8">
                                <!--                                            <h3 class="color-active">--><?php //echo carbon_get_theme_option( 'feature_3_title' ); ?><!--</h3>-->
                                <!--                                            <p>--><?php //echo carbon_get_theme_option( 'feature_3_subtitle' ); ?><!--</p>-->
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
