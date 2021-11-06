<html>

<head>
    <title><?php wp_title('｜', true, 'right'); ?></title>
    <meta name="robots" content="index, follow">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">

    <!--ファビコンやブックマークアイコンの指定-->
    <link rel="SHORTCUT ICON" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png" />
    <meta name="thumbnail" content="<?php echo get_template_directory_uri(); ?>/metathum.jpg" />


    <!-- tailwind読み込み -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <!-- googleフォント読み込みKiwi Maru -->
    <!-- 高速化のため、googlefontの読み込みはjsで遅延読み込みに変更。 -->


    <!-- Font Awesome読み込み -->
    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">

    <!--Google Analyticsここから-->
    <!-- うすゆきブログトラッキングコード -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180837698-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-180837698-1');
    </script>

    <!--Google Analyticsここまで-->
    <?php wp_head(); ?>
</head>

<body>

    <header class="main-head " id="page_top">
        <div style="max-width:1200px" class="flex justify-around mx-auto">

            <div class="flex items-center md:w-1/3 md:ml-4  md:block mt-2">

                <a class="text-center md:p-4 kiwi-maru" href="<?php echo home_url( '/' ) ?>"><i
                        class="fas fa-home"></i><br>ホーム</a>

            </div>
            <h1 class="site_title md:w-1/3 hidden md:block">
                <a href="<?php echo get_home_url();?>"> <img src="<?php
echo get_template_directory_uri();
?>/img/usuyukilogo2021spring.png" alt="うすゆきブログ" class="mx-auto py-2" style="height:60px"></a>
            </h1>
            <div class="w-1/3 flex md:justify-end justify-center items-center">
                <?php get_search_form(); ?>
            </div>

        </div>
    </header>

    <main>