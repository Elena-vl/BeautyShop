<article class="col-md-4 text-center">
    <div class="blog">
        <figure class="figure-hover-overlay">
<!--            <a href="#"  class="figure-href"></a>-->
<!--            <i class="fa fa-comment"></i><a href="" class="blog-link"> 10 </a>-->
            <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="" title="">
            <span class="bar"></span>
        </figure>
        <div class="blog-caption">
            <h3><a href="<?php echo get_the_permalink()?>" class="blog-name"><?php the_title();?></a></h3>
            <p class="post-information">
<!--                <span><i class="fa fa-user"></i> By Admin</span>-->
                <span><i class="fa fa-clock-o"></i> <?php storefront_posted_on();?></span>
            </p>
            <p>
                <?php the_excerpt();?>
            </p>
            <?php comments_popup_link( __( 'Leave a comment', 'storefront' ), __( '1 Comment', 'storefront' ), __( '% Comments', 'storefront' ) ); ?>
<!--            <a href="--><?php //the_excerpt();?><!--" class="btn-read">Read more</a>-->
        </div>
    </div>
</article>