<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!--                    <ul class="products columns---><?php //echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?><!--">-->
<?php get_header(); // подключаем header.php ?>
    <section>
        <div class="second-page-container">
            <div class="container">
                <div class="row">

                    <div class="col-md-9">
                        <!-- <div class="block-breadcrumb">
                            <ul class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li class="active">Products grid</li>
                            </ul>
                        </div> -->

                        <div class="header-for-light">
                            <h1 class="wow fadeInRight animated" data-wow-duration="1s"><span><?php the_title() ?></h1>

                        </div>
                        <!-- <div class="block-products-modes color-scheme-2">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="product-view-mode">
                                        <a href="products-grid.html" class="active"><i class="fa fa-th-large"></i></a>
                                        <a href="products-list.html"><i class="fa fa-th-list"></i></a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                    <div class="row">
                                        <div class="col-md-3 col-md-offset-1">
                                            <label class="pull-right">Sort by</label>
                                        </div>
                                        <div class="col-md-5">
                                            <select name="sort-type" class="form-control">
                                                <option value="position:asc">--</option>
                                                <option value="price:asc"	selected="selected">Price: Lowest first</option>
                                                <option value="price:desc">Price: Highest first</option>
                                                <option value="name:asc">Product Name: A to Z</option>
                                                <option value="name:desc">Product Name: Z to A</option>
                                                <option value="quantity:desc">In stock</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select name="products-per-page" class="form-control">
                                                <option value="10" selected="selected">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="100">100</option>
                                                <option value="all">All</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <?php
                            global $post;
                            // $category = get_queried_object()->term_id;
                            $category = get_queried_object()->slug;
                            $args	 = array(
                                'post_type'		 => 'product',
                                // 'posts_per_page' => 3,
                                'product_cat'	 => $category,
                            );
                            $loop	 = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post();
                                global $product;
                                ?>
                                <div class="col-xs-12 col-sm-6 col-md-4 text-center mb-25">
                                    <article class="product light">
                                        <figure class="figure-hover-overlay">
                                            <a href="#"	class="figure-href"></a>
                                            <?php
                                            $post_thumbnail_id = $product->get_image_id();
                                            $thumbnail_size = apply_filters( 'woocommerce_gallery_thumbnail_size', array( $gallery_thumbnail['width'], $gallery_thumbnail['height'] ) );
                                            $thumbnail_src = wp_get_attachment_image_src( $post_thumbnail_id, 'full');
//                                            echo '<img src="' . esc_url( $thumbnail_src[0] ) . '" class="img-overlay img-responsive" alt="" />';
                                            echo '<img src="' . esc_url( $thumbnail_src[0] ) . '" class="img-responsive" alt="" />';
                                            ?>
                                        </figure>
                                        <div class="product-caption">
                                            <div class="block-name">
                                                <a href="<?php echo get_the_permalink(); ?>" title="<?=$product->name?>" class="product-name"><?php echo wp_trim_words($product->name,5); ?></a>
                                                <?php
                                                if (empty($product->sale_price))
                                                    echo '<p class="product-price">₽'. $product->regular_price .'</p>';
                                                else
                                                    echo '<p class="product-price"><span>₽'.$product->regular_price.'</span> ₽'.$product->sale_price.'</p>';
                                                ?>

                                            </div>
                                            <div class="product-cart">

                                                <?php woocommerce_template_loop_add_to_cart(); ?>

                                                <!-- <a href=""><i class="fa fa-shopping-cart"></i> </a> -->
                                            </div>
                                            <!-- <div class="product-rating">
                                                <div class="stars">
                                                    <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                                                </div>
                                                <a href="" class="review">8 Reviews</a>
                                            </div> -->
                                            <p class="description"><?php the_excerpt() ?></p>
                                        </div>
                                    </article>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>

                    </div>
                    <aside class="col-md-3">

                        <div class="main-category-block ">
                            <div class="main-category-title">
                                <i class="fa fa-list"></i> Каталог

                            </div>
                        </div>
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
                                            echo '<li><a	href="' . get_term_link( $product_sub_category ) . '">'.$product_sub_category->name . '</a></li>';
                                        }
                                        echo "</ul>";
                                    }
                                    echo "</li>";
                                }
                                echo "</ul>";
                            }
                            ?>
                        </div>
<!--                        <div class="widget-title">-->
<!--                            <i class="fa fa-thumbs-up"></i> Лучшая цена-->
<!--                        </div>-->
                        <div class="product light last-sale">
                            <div class="widget-block">
                                <figure class="figure-hover-overlay">
                                    <?php the_widget( 'berocket_products_of_day_widget'); ?>
                                </figure>
                            </div>
                        </div>
                        <div class="widget-title">
                            <i class="fa fa-thumbs-up"></i> Бестселлеры
                        </div>
                        <?php

                        $args	 = array(
                            'post_type'		 => 'product',
                            'posts_per_page' => 2,
                            'product_cat'	 => $term_slug,

                            'tax_query'		 => array(
                                array(
                                    'taxonomy'	 => 'product_visibility',
                                    'field'		 => 'name',
                                    'terms'		 => 'exclude-from-catalog',
                                    'operator'	 => 'NOT IN',
                                ),
                            ),
                        );
                        $loop	 = new WP_Query( $args );

                        while ( $loop->have_posts() ) : $loop->the_post();
                            global $product;
                            //новинки
                            if( has_term(85 , 'product_tag') ){
                                ?>
                                <div class="widget-block">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <?php
                                            $post_thumbnail_id = $product->get_image_id();
                                            $thumbnail_size = apply_filters( 'woocommerce_gallery_thumbnail_size', array( $gallery_thumbnail['width'], $gallery_thumbnail['height'] ) );
                                            $thumbnail_src = wp_get_attachment_image_src( $post_thumbnail_id, $thumbnail_size );
                                            $html='<img src="' . esc_url( $thumbnail_src[0] ) . '" class="img-responsive" alt="" />';
                                            echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id );
                                            ?>
                                            <!-- <img class="img-responsive" src="http://placehold.it/400x500.jpg" alt="" title="">	  -->
                                        </div>
                                        <div class="col-md-8">
                                            <div class="block-name">
                                                <a href="<?php echo get_the_permalink(); ?>" class="product-name"><?php echo $product->name; ?></a>
                                                <p class="product-price"><span>₽<?php echo $product->regular_price; ?></span> ₽<?php echo $product->regular_price; ?></p>
                                            </div>
                                            <div class="product-rating">
                                                <div class="stars">
                                                    <span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span>
                                                </div>
                                                <a href="" class="review">8 Reviews</a>
                                            </div>
                                            <p class="description"><?php echo $product->description; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php }; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </aside>

                </div>
            </div>
        </div>
    </section>
<?php get_footer(); // подключаем footer.php
exit;?>