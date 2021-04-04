<?php $cat = get_the_category();
        $cat_name = $cat[0]->cat_name; // カテゴリー名
        $cat_slug = $cat[0]->category_nicename; // カテゴリースラッグ
        $cat_link=home_url( '/' )."category/".$cat_slug?>
<article class="text-center article-card article-card-arufa my-4 mx-4">
    <a class="card-border-tegaki p-2 " href="<?php echo $cat_link?>"><?php echo $cat_name?></a>
    <a href="<?php echo get_permalink(); ?>">
        <div class="text-center rounded-2xl mx-auto card-image ">

            <?php echo get_the_post_thumbnail( $post->id, "thumbnail" ); ?>
        </div>
    </a>

    <a href="<?php echo get_permalink(); ?>">
        <h4 class="my-4 text-lg font-bold text-center"><?php echo get_the_title(); ?></h4>
    </a>

    <div class="mx-4 my-4">
        <?php echo the_excerpt(); ?>
    </div>


    <div class="my-4">

        <?php echo get_the_date(); ?>
    </div>

</article>