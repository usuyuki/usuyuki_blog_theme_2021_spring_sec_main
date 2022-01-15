<div class="side-menu">


    <h2 class="side-widget-title kiwi-maru pt-2 mt-0 md:pt-12">メニュー</h2>
    <div class="flex justify-center flex-wrap">
        <div class="my-2 ">
            <a class="text-center p-4 kiwi-maru flex flex-wrap w-28 justify-center" href="#page_top">
                <i class="fas w-28 fa-arrow-up"></i>
                <span>ページ先頭へ</span>
            </a>
        </div>
        <div class="my-2 ">
            <a class="text-center p-4 kiwi-maru flex flex-wrap w-28 justify-center"
                href="<?php echo home_url( '/' ) ?>">
                <i class="fas w-28 fa-home"></i>
                <span>ホーム</span>
            </a>
        </div>
    </div>

    <h2 class="side-widget-title kiwi-maru">カテゴリー</h2>
    <?php 

$side_categories=[
    ['programing','プログラミング'],
    ['travel','旅'],
    ['life','生活向上'],
    ['souvenir','お土産'],
    ]
    ?>
    <ul class="side-category-list">
        <?php foreach($side_categories as $side_category):?>
        <li>
            <a class="" href="<?php echo home_url( '/category/') ?><?php echo $side_category[0] ?>">
                <?php echo $side_category[1] ?>
            </a>
        </li>
        <?php endforeach;?>
    </ul>
    <h2 class="side-widget-title kiwi-maru">月別</h2>
    <ul class="side-monthly-list">
        <?php wp_get_archives( 'post_type=post&type=monthly&show_post_count=1' ); ?>
    </ul>
    <h2 class="side-widget-title kiwi-maru">AboutMe</h2>
    <div>
        <p class="text-center text-xl kiwi-maru mt-4">うすゆき
        </p>
        <div class="grid grid-cols-2 h-auto my-4">
            <div>
                <img src="https://pbs.twimg.com/profile_images/1314755394569297920/VnBJHt-o_400x400.jpg" alt="うすゆき"
                    class=" object-fill mx-auto  h-26 w-26 rounded-2xl ">
            </div>
            <div class="mx-2 flex items-center">
                <p>宇都宮大学工学部2年。珈琲が好きです。
                </p>
            </div>
        </div>

        <div class="flex justify-center items-center">
            <a target="_blank" rel="noopener" class="mx-2" href="https://twitter.com/usuyuki26">
                <i class="fab fa-lg fa-twitter"></i>
            </a>
            <a target="_blank" rel="noopener" class="mx-2" href="https://github.com/Usuyuki">
                <i class="fab fa-lg fa-github"></i>
            </a>
            <a target="_blank" rel="noopener" class="mx-2"
                href="https://www.youtube.com/channel/UCI4-1pvH-0XdwfKZe4WBPhQ">
                <i class="fab fa-lg fa-youtube"></i>
            </a>
            <a target="_blank" rel="noopener" class="mx-2" href="https://pf.usuyuki.net/">
                <img src="https://portfolio.usuyuki.net/wp-content/uploads/2020/10/cropped-favicon.png" alt="ポートフォリオ"
                    class=" object-fill h-6 w-6 rounded-full">
            </a>
        </div>

    </div>
</div>