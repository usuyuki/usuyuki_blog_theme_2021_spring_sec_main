<?php get_header(); ?>
<div class="100vh">
    <h1 class="text-center text-3xl kiwi-maru my-4">お探しのページは<br class="md:hidden">見つかりません！</h1>
    <h3 class="text-center text-2xl kiwi-maru">404 Not found</h3>
    <?php $random=rand(1, 10);
    if($random %2 ==0): ?>
    <img src="<?php
echo get_template_directory_uri();
?>/img/404/6056ea822900a54ca998b1c3_35.png" alt="404のための画像" class="mx-auto object-fill md:h-1/4 md:w-1/4">
    <?php else:?>
    <img src="<?php
echo get_template_directory_uri();
?>/img/404/6065505970e2a264108f93e8_54.png" alt="404のための画像" class="mx-auto object-fill md:h-1/4 md:w-1/4">
    <?php endif;?>
    <div>
        <div class="flex justify-center">

            <p>
                <a class="text-center p-4 kiwi-maru" href="<?php echo home_url( '/' ) ?>"><i
                        class="fas fa-home"></i><br>ホームへ</a>
            </p>
        </div>
    </div>
    <h2 class="text-center kiwi-maru text-2xl my-8 mx-2">ジャンルごとの最新記事です。<br class="md:hidden">よかったらどうぞ。</h2>
    <main class="gird grid-cols-1 md:gird-cols-2 md:mx-24 mx-4 py-12">

        <div class="mx-4">
            <div class="genre-title">
                <h5 class="kiwi-maru text-xl my-2"><i class="fas fa-map-marker-alt"></i>旅</h5>
            </div>
            <p class="my-3">心をたまには洗いたくなります。</p>
            <div>
                <?php $args=array(
                'numberposts'=>3,
                'category_name'=>"travel",
            // 'post_type'=>'work',
            // 'orderby' => 'meta_value',
            // 'meta_key' => 'work_start', //ACFのフィールド名
            'order' => 'DESC'

            );
            $customPost=get_posts($args);
            if($customPost):
                foreach($customPost as $post):
                    // setup_postdata($post):
            ?>
                <article>
                    <a class="h4 text-center my-2" href="<?php echo get_permalink(); ?>">
                        ・<?php the_title(); ?></a>
                </article>
                <?php endforeach;
        endif; ?>

            </div>
            <div class="my-4">
                <a class="ml-4 my-2 border-2 border-gray-600 py-2"
                    href="<?php  echo esc_url( home_url( '/' ) )?>/category/travel">もっと見る</a>
            </div>
        </div>
        <div class="mx-4">
            <div class="genre-title">
                <h5 class="kiwi-maru text-xl my-2">宇都宮</h5>
            </div>
            <p class="my-3">とかいなか宇都宮</p>
            <div>
                <?php $args=array(
                'numberposts'=>3,
                'category_name'=>"utunomiya",
            // 'post_type'=>'work',
            // 'orderby' => 'meta_value',
            // 'meta_key' => 'work_start', //ACFのフィールド名
            'order' => 'DESC'

            );
            $customPost=get_posts($args);
            if($customPost):
                foreach($customPost as $post):
                    // setup_postdata($post):
            ?>
                <article>
                    <a class="h4 text-center my-2" href="<?php echo get_permalink(); ?>">
                        ・<?php the_title(); ?></a>
                </article>
                <?php endforeach;
        endif; ?>

            </div>
            <div class="my-4">
                <a class="ml-4 my-2 border-2 border-gray-600 py-2"
                    href="<?php  echo esc_url( home_url( '/' ) )?>/category/utunomiya">もっと見る</a>
            </div>
        </div>
        <div class="mx-4">
            <div class="genre-title">
                <h5 class="kiwi-maru text-xl my-2"><i class="fas fa-home"></i>生活向上</h5>
            </div>
            <p class="my-3">よりよいモダンな暮らしを求めて。</p>
            <div>
                <?php $args=array(
                'numberposts'=>3,
                'category_name'=>"life",
            // 'post_type'=>'work',
            // 'orderby' => 'meta_value',
            // 'meta_key' => 'work_start', //ACFのフィールド名
            'order' => 'DESC'

            );
            $customPost=get_posts($args);
            if($customPost):
                foreach($customPost as $post):
                    // setup_postdata($post):
            ?>
                <article>
                    <a class="h4 text-center my-2" href="<?php echo get_permalink(); ?>">
                        ・<?php the_title(); ?></a>
                </article>
                <?php endforeach;
        endif; ?>

            </div>
            <div class="my-4">
                <a class="ml-4 my-2 border-2 border-gray-600 py-2"
                    href="<?php  echo esc_url( home_url( '/' ) )?>/category/utunomiya">もっと見る</a>
            </div>
        </div>
        <div class="mx-4">
            <div class="genre-title">
                <h5 class="kiwi-maru text-xl my-2"><i class="fas fa-laptop-code"></i>プログラミング</h5>
            </div>
            <p class="my-3">ただの趣味です。</p>
            <div>
                <?php $args=array(
                'numberposts'=>3,
                'category_name'=>"programing",
            // 'post_type'=>'work',
            // 'orderby' => 'meta_value',
            // 'meta_key' => 'work_start', //ACFのフィールド名
            'order' => 'DESC'

            );
            $customPost=get_posts($args);
            if($customPost):
                foreach($customPost as $post):
                    // setup_postdata($post):
            ?>
                <article>
                    <a class="h4 text-center my-2" href="<?php echo get_permalink(); ?>">
                        ・<?php the_title(); ?></a>
                </article>
                <?php endforeach;
        endif; ?>

            </div>
            <div class="my-4">
                <a class="ml-4 my-2 border-2 border-gray-600 py-2"
                    href="<?php  echo esc_url( home_url( '/' ) )?>/category/utunomiya">もっと見る</a>
            </div>
        </div>
    </main>
</div>
<?php get_footer(); ?>