<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

<!--		</div>-->
<!-- .col-full -->
<!--	</div>-->
<!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

<!--	<footer id="colophon" class="site-footer" role="contentinfo">-->
<!--		<div class="col-full">-->

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
//			do_action( 'storefront_footer' );
			?>

<!--		</div>-->
        <!-- .col-full -->
<!--	</footer>-->
<!-- #colophon -->
<footer id="footer-block">
    <!-- <div class="social">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="socials">
                        <a href="#"><i class="fa fa-skype"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <form class="form-horizontal">
                        <input type="text" class="input form-control" placeholder="Newsletter">
                        <button type="submit"> Sign up <i class="fa fa-angle-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
    <div class="footer-information">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="header-footer">
                        <h3>ВКонтакте</h3>
                    </div>
                    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?159"></script>
                    <!-- VK Widget -->
                    <div id="vk_groups"></div>
                    <script type="text/javascript">
                        VK.Widgets.Group("vk_groups", {mode: 3, color3: 'EB2C33'}, -305056477);
                    </script>
                </div>
                <div class="col-md-4">
                    <div class="header-footer">
                        <h3>Instagram</h3>
                    </div>
                    <iframe src="//widget.instagramm.ru/?imageW=3&imageH=2&thumbnail_size=74&type=0&typetext=56beautyshop&head_show=1&profile_show=1&shadow_show=1&bg=255,255,255,1&opacity=true&head_bg=46729b&subscribe_bg=eb2c33&border_color=c3c3c3&head_title=" allowtransparency="true" frameborder="0" scrolling="no" style="border:none;overflow:hidden;width:260px;height:313px;"></iframe>
                </div>
                <!-- <div class="col-md-3">
                    <div class="header-footer">
                        <h3>I want ...</h3>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                    <div class="want">
                        <form class="form-horizonta">
                            <textarea class="form-control" placeholder="I want ..."></textarea>
                            <button type="submit"> Send us <i class="fa fa-angle-right"></i></button>
                        </form>
                    </div>
                </div> -->
                <div class="col-md-4">
                    <div class="header-footer">
                        <h3>Контакты</h3>
                    </div>
                    <p><strong>Телефон: +7 (922) 829-91-15</strong><br><strong>Email:</strong> beautyshop56@mail.ru</p>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copy color-scheme-1">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="index.html" class="logo-copy pull-left"></a>
                </div>
                <div class="col-md-4">
                    <p class="text-center">
                        БЬЮТИ-ШОП.РФ © 2018 | Все права защищены.<br>
                        <a href="http://netolab.ru" target="_blank">Создание и продвижение сайта - NETOLAB</a>
                    </p>
                </div>
                <div class="col-md-4">
                    <ul class="footer-payments pull-right">
                        <li>
                            <a href="https://www.tinkoff.ru/" target="_blank">
                                <img src="/wp-content/uploads/2018/11/tinkoff.png" class="img-fluid" style="width: 60px;" alt="payment" />
                            </a>
                        </li>
                        <li><img src="/wp-content/uploads/2018/11/mir.png" class="img-fluid" style="width: 60px;" alt="payment" /></li>
                        <li><img src="/wp-content/uploads/2018/11/mastercard.png" class="img-fluid" style="height: 30px;" alt="payment" /></li>
                        <li><img src="/wp-content/uploads/2018/11/visa.png" class="img-fluid" style="width: 60px;" alt="payment" /></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
