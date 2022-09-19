<?php get_header(); ?>
<div class="h-auto pb-16"
    style="background-image:url('<?php
                                                        echo get_template_directory_uri();
                                                        ?>/img/index_main.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;">
    <h1 class="text-center pt-12 text-3xl md:text-5xl text-center font-bold h-auto norepeact">
        <span class="char1">う</span>
        <span class="char2">す</span>
        <span class="char3">ゆ</span>
        <span class="char4">き</span>
        <span class="char5">ぶ</span>
        <span class="char6">ろ</span>
        <span class="char7">ぐ</span>
    </h1>




    <div class="flex justify-center items-center my-12">

        <div>
            <img src="<?php
                        echo get_template_directory_uri();
                        ?>/img/logo/うすゆきブログfavicon.png" alt="うすゆき" class=" object-fill h-24 w-24 rounded-full"
                style="filter:drop-shadow(4px 4px 4px black)">
        </div>

    </div>
    <div class="flex justify-center items-center">
        <a target="_blank" rel="noopener" class="mx-4" href="https://twitter.com/usuyuki26">
            <i class="fab fa-2x fa-twitter"></i>
        </a>
        <a target="_blank" rel="noopener" class="mx-4" href="https://github.com/Usuyuki">
            <i class="fab fa-2x fa-github"></i>
        </a>
        <a target="_blank" rel="noopener" class="mx-4" href="https://www.youtube.com/channel/UCI4-1pvH-0XdwfKZe4WBPhQ">
            <i class="fab fa-2x fa-youtube"></i>
        </a>
        <a target="_blank" rel="noopener" class="mx-4" href="https://pf.usuyuki.net/">
            <img src="<?php
                        echo get_template_directory_uri();
                        ?>/img/logo/portfolio_favicon.png" alt="ポートフォリオ" class=" object-fill h-12 w-12 rounded-full">
        </a>
    </div>


    <div class="flex justify-center flex-wrap ">
        <div class="my-12  pt-8 pb-12 px-12 top-blog-exp">
            <div class=" border-b-2 border-black h-auto">

                <h3 class="text-center text-3xl pb-2 kiwi-maru font-bold">このブログに<br class="md:hidden">ついて！</h3>
            </div>
            <div class="mt-4 mx-auto ">
                <h4 class="font-bold text-xl"><i class="fab fa-quinscape"></i>なんのブログ？</h4>
                <p class="kiwi-maru">普通の理系大学生が綴るブログです。特定のジャンルではなく、書きたいことを書きます。</p>
            </div>
            <div class="mt-4 mx-auto ">
                <h4 class="font-bold text-xl"><i class="fab fa-quinscape"></i>なにがしたいの？</h4>
                <p class="kiwi-maru">
                    理系の授業の殆どは証明や計算ばかりで意見や主観の介在余地なんてありません。だからこそ個人の主観入りまくりのものが作りたくてブログを書いています。<br>広告導入の予定もありません。つまりただの趣味です。
                </p>
            </div>
            <div class="mt-4 mx-auto ">
                <h4 class="font-bold text-xl"><i class="fab fa-quinscape"></i>だれ？</h4>
                <p class="kiwi-maru">宇都宮大学に通う理系大学生です。珈琲が好きです。</p>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-end mt-4">
        <h2 class="pickup-heading kiwi-maru start-large">Pickup記事↓</h2>

    </div>

    <div class="flex justify-center wrap mt-8 flex-wrap">
        <?php $args = array(
            'posts_per_page' => -1,
            'has_password' => false,
            'meta_query' => array(
                array(
                    'key' => 'post_pickup',
                    'value' => true
                ),
            ),
        );
        $customPost = get_posts($args);
        if ($customPost) :
            foreach ($customPost as $post) :
        ?>

        <?php
                get_template_part('template/article/article_pickup_card');
                ?>
        <?php endforeach;
        endif; ?>

    </div>
</div>
<div class="">
    <div class="circle-anime1 h-4 w-4 bg-green-500 rounded-full inline-block mt-4">

    </div>


    <!-- <h2 class="text-center text-3xl kiwi-maru h2-bou mb-8 start-large">趣向</h2> -->
    <p class="text-center kiwi-maru">ここは雑多ブログです。</p>
    <p class="text-center kiwi-maru"><a target="_blank" rel="noopener"
            href="https://neo.usuyuki.net">neo.usuyuki.net</a>にも書いています。
    </p>
    <h2 class="text-center text-3xl kiwi-maru h2-bou mb-8 start-large">最新の記事</h2>

    <div class="flex justify-center wrap mt-8 flex-wrap">
        <?php $args = array(
            'numberposts' => 10,

            // 'post_type'=>'work',
            // 'orderby' => 'meta_value',
            // 'meta_key' => 'work_start', //ACFのフィールド名
            'has_password' => false,
            'order' => 'DESC'

        );
        $customPost = get_posts($args);
        if ($customPost) :
            foreach ($customPost as $post) :
                // setup_postdata($post):
        ?>

        <?php
                if (wp_is_mobile()) {
                    get_template_part('template/article/article_card_sp');
                } else {
                    get_template_part('template/article/article_card_pc');
                }
                ?>
        <?php endforeach;
        endif; ?>

    </div>
    <div class="mx-auto text-center my-8">
        <a class="btn-motto" href="<?php echo home_url('/allposts') ?>">もっと見る！</a>
    </div>

    <div class="circle-anime2 h-4 w-4 bg-blue-500 rounded-full inline-block">

    </div>
</div>
<h2 class="text-center text-3xl kiwi-maru h2-bou my-12 start-large">カテゴリー別の記事</h2>

<!-- ジャンルかたまりここから -->
<?php
$slugs = ["programing", "travel", "life",];
$names = ["プログラミング", "旅", "生活向上",];
$counter = 0;
?>
<?php foreach ($slugs as $slug) : ?>
<div class="flex justify-center">

    <h3 class="text-center text-3xl two-square kiwi-maru h2-bou inline mt-20"><?php echo $names[$counter]; ?></h3>
</div>
<div class="flex justify-center wrap mt-8 flex-wrap">
    <?php $args = array(
            'numberposts' => 4,

            'category_name' => $slug,
            // 'orderby' => 'meta_value',
            // 'meta_key' => 'work_start', //ACFのフィールド名
            'order' => 'DESC',
            'has_password' => false,

        );
        $customPost = get_posts($args);
        if ($customPost) :
            foreach ($customPost as $post) :
                // setup_postdata($post):
        ?>

    <?php
                if (wp_is_mobile()) {
                    get_template_part('template/article/article_card_sp');
                } else {
                    get_template_part('template/article/article_card_pc');
                }
                ?>
    <?php endforeach;
        endif; ?>

</div>
<div class="mx-auto text-center my-8">
    <a class="btn-motto" href="<?php echo home_url('/category/') ?><?php echo $slug ?>">もっと見る！</a>
</div>
<div class="w-1/2 mx-auto " style="border:1px dashed black;"></div>
<?php $counter += 1;
endforeach; ?>
<div>
    <div class="flex justify-center">
        <h3 class="text-center text-3xl two-square kiwi-maru h2-bou inline mt-20">プログラミング系記事について</h3>
    </div>
    <p class="text-center mx-2 my-4">プログラミング系はQiitaやZennに投稿すること多めです。下記ロゴからアクセスいただけます。</p>
    <div class="flex justify-center">
        <div class="mx-2">
            <a target="_blank" rel="noopener" class="mx-4" href="https://qiita.com/Usuyuki">
                <img src="<?php
                            echo get_template_directory_uri();
                            ?>/img/logo/qiita-logo.png" alt="qiita" class=" object-fill  h-auto" style="width:300px">
            </a>
        </div>
        <div class="mx-2 flex items-center">
            <a target="_blank" rel="noopener" class="mx-4 " href="https://zenn.dev/usuyuki">
                <img src="<?php
                            echo get_template_directory_uri();
                            ?>/img/logo/zenn-logo.png" alt="qiita" class=" object-fill h-auto" style="width:300px">
            </a>
        </div>
    </div>
</div>
<div>
    <div class="flex justify-center">
        <h3 class="text-center text-3xl two-square kiwi-maru h2-bou inline mt-20">昔の記事について</h3>
    </div>
    <p class="text-center mx-2 my-4">主に本サイト開設前や軽い内容はnoteに掲載しています。</p>
    <div class="flex justify-center">
        <div class="mx-2">
            <a target="_blank" rel="noopener" class="mx-4" href="https://note.com/usuyuki26/">
                <img src="<?php
                            echo get_template_directory_uri();
                            ?>/img/logo/note-logo.png" alt="note" class=" object-fill  h-auto" style="width:300px">
            </a>
        </div>
    </div>
</div>
</div>
<div>
    <div class="flex justify-center">
        <h3 class="text-center text-3xl two-square kiwi-maru h2-bou inline mt-20">制作物について</h3>
    </div>
    <p class="text-center mx-2 my-4">制作物はブログではなく、ポートフォリオに投稿しています！</p>
    <div class="flex justify-center">
        <div class="mx-2">
            <a target="_blank" rel="noopener" class="mx-4" href="https://pf.usuyuki.net">
                <img src="<?php
                            echo get_template_directory_uri();
                            ?>/img/logo/portfolio_title20201027.png" alt="ポートフォリオ" class=" object-fill  h-auto"
                    style="width:300px">
            </a>
        </div>
    </div>
</div>
<!-- ジャンルかたまりここまで -->



<?php get_footer(); ?>