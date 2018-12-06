<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package storefront
 */

?>
<section>
    <div class="second-page-container color-scheme-white-90">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <?php
                        /**
                         * Functions hooked in to storefront_page add_action
                         *
                         * @hooked storefront_page_header          - 10
                         * @hooked storefront_page_content         - 20
                         */
                        do_action( 'storefront_page' );
                        ?>
                    </article><!-- #post-## -->
                </div>
            </div>
        </div>
    </div>
</section>