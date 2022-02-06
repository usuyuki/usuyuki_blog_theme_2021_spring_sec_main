<?php get_header(); ?>

<!-- タイトルの読み込み -->
<div class="entry-header flex justify-center mt-16 mb-8">
    <h1 class="text-center text-3xl two-square kiwi-maru h2-bou inline "><?php echo single_term_title('', false);?>
    </h1>
</div>
<?php if(category_description()):?>
<div class="entry-header flex justify-center items-center  mt-4 mb-16">
    <p class="text-xl kiwi-maru mx-4">
        <?php echo category_description(); ?>
    </p>
</div>
<?php endif;?>


<!-- 本文の読み込み -->
<div class="entry-content flex justify-center flex-wrap">
    <?php if(have_posts()): //記事がある場合 ?>
    <?php
//記事データがある間、1記事分ずつ指定の内容を出力させる（1ページ分の表示記事数は管理画面＞設定＞表示設定から変更できます）
while(have_posts()){
	the_post();
    if(wp_is_mobile()){
        get_template_part( 'template/article/article_card_sp' ); 

    }else{
        get_template_part( 'template/article/article_card_pc' ); 
    }
}
?>

    <?php else: //記事が無い場合 ?>
    <p>記事がありません。</p>
    <?php endif; ?>
</div>
<?php
//ページネーションの表示
$pagination = get_the_posts_pagination();
//そのまま書き出すとデカデカと「投稿ナビゲーション」と表示されるのでそれを消したものを出力
$pagination = preg_replace('/\<h2(.*?)\<\/h2\>/', '', $pagination);
echo $pagination;
?>

<?php get_footer(); ?>