<?php
/**
 * The loop template file.
 *
 * Included on pages like index.php, archive.php and search.php to display a loop of posts
 * Learn more: https://codex.wordpress.org/The_Loop
 *
 * @package storefront
 */

do_action( 'storefront_loop_before' );

?>
    <section>
        <div class="second-page-container">

            <div class="container">
                <div class="row">
                    <div class="col-md-9">
<!--                        <div class="block-breadcrumb">-->
<!--                            <ul class="breadcrumb">-->
<!--                                <li><a href="#">Home</a></li>-->
<!--                                <li><a href="#">Pages</a></li>-->
<!--                                <li class="active">Blog items</li>-->
<!--                            </ul>-->
<!--                        </div>-->
                        <div class="block">
                            <div class="header-for-light">
                                <h1 class="wow fadeInRight animated" data-wow-duration="1s"><span>Блог</span></h1>
                            </div>
                            <div class="row">
                                <?php
                                while ( have_posts() ) : the_post();

                                    /**
                                     * Include the Post-Format-specific template for the content.
                                     * If you want to override this in a child theme, then include a file
                                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                     */
                                    get_template_part( 'blog_content', get_post_format() );

                                endwhile;

                                /**
                                 * Functions hooked in to storefront_paging_nav action
                                 *
                                 * @hooked storefront_paging_nav - 10
                                 */
                                do_action( 'storefront_loop_after' );
                                ?>
                            </div>
                        </div>
                    </div>

                    <aside class="col-md-3">
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

                        <div class="product light last-sale">
                            <figure class="figure-hover-overlay">
                                <?php the_widget( 'berocket_products_of_day_widget'); ?>
                            </figure>
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
                            //Бестселлеры
                            if( has_term(55 , 'product_tag') ){
                                ?>
                                <div class="widget-block">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <?php
                                            $post_thumbnail_id = $product->get_image_id();
                                            $thumbnail_size = apply_filters( 'woocommerce_gallery_thumbnail_size', array( $gallery_thumbnail['width'], $gallery_thumbnail['height'] ) );
                                            $thumbnail_src = wp_get_attachment_image_src( $post_thumbnail_id, $thumbnail_size );
                                            $html='<img src="' . esc_url( $thumbnail_src[0] ) . '" class="img-responsive" alt="" ></img>';
                                            echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id );
                                            ?>
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
                </div>
            </div>
        </div>
    </section>
