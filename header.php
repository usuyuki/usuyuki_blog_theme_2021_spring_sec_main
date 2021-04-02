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
    <!-- font-family: 'Kiwi Maru', serif; -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet">


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

    <header class="main-head">
        <h1 class="site_title">
            <a href="<?php echo get_home_url();?>"> <img src="<?php
echo get_template_directory_uri();
?>/img/usuyukilogo2021spring.png" alt="うすゆきブログ" class="mx-auto py-2" style="height:60px"></a>
        </h1>


    </header>

    <main>