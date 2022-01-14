</main>

<footer class="border-t-2 mt-24 border-gray-400 ">


    <!-- functions.phpで設定したウィジェット（フッター用）の読み込み -->
    <div id="footerwidget">
        <?php dynamic_sidebar('footerwidget'); ?>
    </div>
    <a class="text-left p-4 bg-gray-600 text-white hover:text-black kiwi-maru" href="#page_top">ページ先頭へ<i
            class="fas w-24 fa-arrow-up"></i></a>
    <div class="flex justify-center items-start my-4 mx-4 flex-wrap">
        <div class="my-2 mx-2">
            <a class="text-center p-4 kiwi-maru flex flex-wrap w-24 justify-center"
                href="<?php echo home_url( '/' ) ?>">
                <i class="fas w-24 fa-home"></i>
                <span>ホーム</span>
            </a>
        </div>
        <div class="my-2 mx-2">
            <a class="text-center p-4 kiwi-maru flex flex-wrap w-24 justify-center"
                href="<?php echo home_url( '/category/programing/' ) ?>">
                <i class="fas w-24 fa-code"></i>
                <span>プログラミング</span>
            </a>
        </div>
        <div class="my-2 mx-2">
            <a class="text-center p-4 kiwi-maru flex flex-wrap w-24 justify-center"
                href="<?php echo home_url( '/category/travel/' ) ?>">
                <i class="fas w-24 fa-route"></i>
                <span>旅</span>
            </a>

        </div>
        <div class="my-2 mx-2">
            <a class="text-center p-4 kiwi-maru flex flex-wrap w-24 justify-center"
                href="<?php echo home_url( '/category/life/'  ) ?>">
                <i class="fas w-24 fa-bed"></i>
                <span>生活向上</span>
            </a>

        </div>
    </div>


    <p class="copyright text-center py-8 kiwi-maru ">&copy; <?php echo date('Y');?>usuyuki</p>
</footer>

<script>
//Google font の遅延読み込み
//複数ならgoogle: { families: ['Montserrat:400,600', 'Noto+Sans+JP'] }みたいにつなげるだけ
//参考→https://mogumogu-design.com/googlefont-yomikomi/
window.WebFontConfig = {
    google: {
        families: ['Kiwi+Maru']
    },
    active: function() {
        sessionStorage.fonts = true;
    }
};
(function() {
    var wf = document.createElement('script');
    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
})();
</script>

<script>
// コンソール上に画像表示
console.log("%c ",
    'background: url(<?php echo get_template_directory_uri();?>/img/usuyukilogo2021spring.png); background-size: 100% 100%; padding: 128px 200px'
);
</script>

<?php wp_footer(); 
//wp_footerの中でwo_footer読み込んでいて、なにこれ？ってなるけど、これであっているらしい。?>
</body>

</html>