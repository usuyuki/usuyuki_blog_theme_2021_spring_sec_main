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


<?php wp_footer(); 
//wp_footerの中でwo_footer読み込んでいて、なにこれ？ってなるけど、これであっているらしい。?>
</body>

</html>