<article class="text-center my-4 mx-4 ">
    <div class="flex items-center w-60 h-60 rounded-2xl  blur-pickup"
        style="background-image:url(<?php the_post_thumbnail_url( 'large' ); ?>)">

        <a href="<?php echo get_permalink(); ?>">
            <div class="w-full h-full py-4" style="background-color:rgba(0,0,0,.7)">
                <!--タイトル-->
                <h1 class="text-blog-white text-center text-2xl font-bold kiwi-maru mb-4 mx-4 ">
                    <?php the_title();?>
                </h1>
                <!--投稿日-->
                <div class="my-4 text-blog-white">

                    <i class="fas fa-clock"></i><?php echo get_the_date(); ?>
                </div>
                <!--抜粋-->
                <div class="text-blog-white mx-4">
                    <?php echo the_excerpt(); ?>
                </div>
            </div>
        </a>
    </div>
</article>