<?php get_header(); ?>
<div class="h-auto pb-16" style="background-image:url('<?php
echo get_template_directory_uri();
?>/img/index_main.jpg')">
    <h1 class="text-center pt-12 text-5xl text-center font-bold h-auto">
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
?>/img/logo/icon_small.jpg" alt="うすゆき" class=" object-fill h-24 w-24 rounded-full"
                style="filter:drop-shadow(4px 4px 4px black)">
        </div>

    </div>
    <div class="flex justify-center items-center">
        <a class="mx-4" href="https://twitter.com/usuyuki26">
            <i class="fab fa-2x fa-twitter"></i>
        </a>
        <a class="mx-4" href="https://github.com/Usuyuki">
            <i class="fab fa-2x fa-github"></i>
        </a>
        <a class="mx-4" href="https://www.youtube.com/channel/UCI4-1pvH-0XdwfKZe4WBPhQ">
            <i class="fab fa-2x fa-youtube"></i>
        </a>
        <a class="mx-4" href="https://portfolio.usuyuki.net/">
            <img src="<?php
echo get_template_directory_uri();
?>/img/logo/portfolio_favicon.png" alt="ポートフォリオ" class=" object-fill h-12 w-12 rounded-full">
        </a>
    </div>


    <div class="flex justify-center flex-wrap ">
        <div class="my-12  pt-8 pb-12 px-12 top-blog-exp">
            <div class=" border-b-2 border-black h-auto">

                <h3 class="text-center text-2xl pb-2 kiwi-maru font-bold">このブログについて！</h3>
            </div>
            <div class="mt-4 mx-auto ">
                <h4 class="font-bold text-xl"><i class="fab fa-quinscape"></i>なんのブログ？</h4>
                <p class="kiwi-maru">普通の理系大学生が綴るブログです。特定のジャンルではなく、書きたいことを書きます。</p>
            </div>
            <div class="mt-4 mx-auto ">
                <h4 class="font-bold text-xl"><i class="fab fa-quinscape"></i>なにがしたいの？</h4>
                <p class="kiwi-maru">自分でもわかりません。</p>
            </div>
            <div class="mt-4 mx-auto ">
                <h4 class="font-bold text-xl"><i class="fab fa-quinscape"></i>だれ？</h4>
                <p class="kiwi-maru">宇都宮大学に通う理系大学生です。珈琲が好きです。</p>
            </div>
        </div>
    </div>
    <div class="box mx-auto"><i class="fas fa-snowflake"></i></div>
    <div>
        <div class="circle-anime">

        </div>
    </div>
</div>
<div>
    <h2 class="text-center text-2xl kiwi-maru">最新の記事</h2>
</div>

<?php get_footer(); ?>