<?php
/**
 * Template used to display post content on single pages.
 *
 * @package storefront
 */

?>

<!--<article id="post---><?php //the_ID(); ?><!--" --><?php //post_class(); ?>

	<?php
	do_action( 'storefront_single_post_top' );

	/**
	 * Functions hooked into storefront_single_post add_action
	 *
	 * @hooked storefront_post_header          - 10
	 * @hooked storefront_post_meta            - 20
	 * @hooked storefront_post_content         - 30
	 */
//	do_action( 'storefront_single_post' );

	/**
	 * Functions hooked in to storefront_single_post_bottom action
	 *
	 * @hooked storefront_post_nav         - 10
	 * @hooked storefront_display_comments - 20
	 */
//	do_action( 'storefront_single_post_bottom' );
	?>

<!--</article>-->
<!-- #post-## -->
<section>
    <div class="second-page-container color-scheme-white-90">

        <div class="container">
            <div class="row">

                <div class="col-md-9">
<!--                    <div class="block-breadcrumb">-->
<!--                        <ul class="breadcrumb">-->
<!--                            <li><a href="#">Home</a></li>-->
<!--                            <li><a href="#">Pages</a></li>-->
<!--                            <li class="active">Blog content</li>-->
<!--                        </ul>-->
<!--                    </div>-->
                    <div class="block-blog">
                        <?php if(file_exists(the_post_thumbnail_url())) {?>
                            <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="" title="">
                        <?php } ?>
                        <div class="block">
                            <div class="header-for-light">
<!--                                <h1 class="wow fadeInRight animated" data-wow-duration="1s">Blog <span>Content</span></h1>-->
                                <h1 class="wow fadeInRight animated" data-wow-duration="1s"><?=get_the_title()?></h1>

                            </div>
                            <p>
                                <?=the_content() ?>
                            </p>
                            <div class="block">
                                <div class="header-for-light">
                                    <h4 class="wow fadeInRight animated" data-wow-duration="1s">Похожие <span>записи</span></h4>
                                </div>

                                <div class="row">
                                    <?php
//                                    if (have_posts() ) : query_posts('cat=68');
//                                        while (have_posts()) : the_post();
//                                            get_template_part( 'blog_content');
//                                        endwhile;
//                                    endif;
                                    ?>
                                </div>
                                <!--отзывы клиентов-->
                                <?php do_action( 'storefront_single_post_bottom' );?>
                            </div>

<!--                            <div class="block-form box-border">-->
<!--                                <div class="header-for-light">-->
<!--                                    <h4 class="wow fadeInRight animated" data-wow-duration="1s">Оставить <span>отзыв</span></h4>-->
<!--                                </div>-->
<!--                                <form method="post" action="#">-->
<!--                                    <div class="row">-->
<!--                                        <div class="col-md-6">-->
<!--                                            <div class="form-group">-->
<!--                                                <label for="inputFirstName" class="control-label">Name:<span class="text-error">*</span></label>-->
<!--                                                <div>-->
<!--                                                    <input type="text" class="form-control" id="inputFirstName">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!---->
<!--                                        </div>-->
<!--                                        <div class="col-md-6">-->
<!--                                            <div class="form-group">-->
<!--                                                <label for="inputLastName" class="control-label">Email:<span class="text-error">*</span></label>-->
<!--                                                <div>-->
<!--                                                    <input type="email" class="form-control" id="inputLastName">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="col-md-12">-->
<!--                                            <div class="form-group">-->
<!--                                                <label for="inputSubject" class="control-label">Subject:<span class="text-error">*</span></label>-->
<!--                                                <div>-->
<!--                                                    <input type="text" class="form-control" id="inputSubject">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="col-md-12">-->
<!--                                            <div class="form-group">-->
<!--                                                <label for="inputText" class="control-label">Text:<span class="text-error">*</span></label>-->
<!--                                                <div>-->
<!--                                                    <textarea class="form-control" id="inputText"></textarea>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <hr>-->
<!--                                    <input type="submit" class="btn-default-1" value="Submit">-->
<!--                                </form>-->
<!--                            </div>-->
                        </div>
                    </div>
                </div>
                <!--                боковушка-->
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
                    <?php wp_reset_postdata(); ?>

                    <div class="banner">
                        <a href="#">
                            <img src="http://placehold.it/900x1200" class="img-responsive" alt="">
                        </a>
                    </div>
                    <article class="banner">
                        <a href="#">
                            <img src="http://placehold.it/900x677" class="img-responsive" alt="">
                        </a>
                    </article>
                </aside>

            </div>
        </div>
    </div>

</section>