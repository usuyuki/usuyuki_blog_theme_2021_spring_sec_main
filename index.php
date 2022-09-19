<?php get_header(); ?>

<!-- テンプレート中に保存している画像の読み込み -->
<div class="topimage">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/topimg.jpg">
</div>

<!-- 指定カテゴリの最新記事読み込み -->
<?php
//読み込みたい内容の指定
$newarrival = get_posts(array(
	'posts_per_page' => 6, // 表示件数指定
	'category' => 1, // カテゴリID指定
	'has_password' => false, // パスワード保護の記事を除外
));

//記事データがある場合の処理
if ($newarrival) :
?>
<ul class="newarrival_list">
    <?php
		//記事データを一つづつ表示処理
		foreach ($newarrival as $post) :
			setup_postdata($newarrival);
		?>
    <li><a href="<?php echo get_permalink(); ?>"><?php the_time('Y/m/d'); ?> <?php echo $post->post_title; ?></a></li>
    <?php endforeach; ?>
</ul>
<?php
//記事データがない場合の処理
else :
?>
<div class="newarrival_nodata">
    <p>記事がありません</p>
</div>
<?php
endif;
wp_reset_postdata();
?>

<?php get_footer(); ?>