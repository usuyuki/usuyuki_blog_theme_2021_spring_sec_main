</main>

<footer class="border-t-2 mt-24 border-gray-400 ">


    <!-- functions.phpで設定したウィジェット（フッター用）の読み込み -->
    <div id="footerwidget">
        <?php dynamic_sidebar('footerwidget'); ?>
    </div>
    <a class="text-left p-4 bg-gray-600 text-white hover:text-black kiwi-maru" href="#page_top">ページトップへ<i
            class="fas fa-arrow-up"></i></a>
    <div class="flex justify-center">

        <p>
            <a class="text-center p-4 kiwi-maru" href="<?php echo home_url( '/' ) ?>"><i
                    class="fas fa-home"></i><br>ホーム</a>
        </p>
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
<?php wp_footer(); 
//wp_footerの中でwo_footer読み込んでいて、なにこれ？ってなるけど、これであっているらしい。?>
</body>

</html>