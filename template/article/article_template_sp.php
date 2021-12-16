<?php $cat = get_the_category();
        $cat_name = $cat[0]->cat_name; // カテゴリー名
        $cat_slug = $cat[0]->category_nicename; // カテゴリースラッグ
        $cat_link=home_url( '/' )."category/".$cat_slug?>
<article class="w-full border-gray-800 rounded-2xl border-2 text-center my-2 mx-2 p-2" style="background-color:#FFF9E7">
    <a href="<?php echo get_permalink(); ?>" class="flex ">
        <div class="flex items-center justify-center card-image-sp">
            <?php echo get_the_post_thumbnail( $post->id, "thumbnail" ); ?>
        </div>
        <div class="mx-4">
            <h4 class="my-4 text-lg font-bold text-center"><?php echo get_the_title(); ?></h4>
            <p class="text-sm"><i class="fas fa-tags"></i> <?php echo $cat_name?></p>
            <p class="text-xs"><i class="fas fa-clock"></i> <?php echo get_the_date(); ?></p>
        </div>
    </a>
</article>