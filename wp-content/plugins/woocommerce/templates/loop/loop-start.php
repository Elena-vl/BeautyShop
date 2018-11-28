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
<section>
    <div class="second-page-container">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="header-for-light">
                        <h1 class="wow fadeInRight animated" data-wow-duration="1s"><span><?php woocommerce_page_title(); ?></span></h1>
                    </div>
                    <ul class="products columns-<?php echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?>">