<?php
/*
Template Name: シングル基本(普通の投稿で利用)
Template Post Type: post
*/
?>
<?php get_header(); ?>
<div class="md:grid grid-cols-3">
    <div>

    </div>
    <div id="template-single">

        <!-- タイトルなど基本情報の読み込み -->
        <div class="entry-header">
            <div class="flex items-center w-full blurBg"
                style="height:50vh;background-image:url(<?php the_post_thumbnail_url( 'large' ); ?>)">


                <div style="background-color:rgba(0,0,0,.7)">
                    <!--タイトル-->
                    <h1 class="text-white text-center text-2xl font-bold kiwi-maru my-4 px-12">
                        <?php the_title();?></h1>
                    <!--投稿日-->
                    <p class="text-right text-white mr-4">
                        <?php echo mysql2date('Y年n月j日', $post->post_date); ?></p>
                    <p class="my-4 text-center">
                        <?php
$categories = get_the_category();
//選択したカテゴリ全て表示
foreach($categories as $category){
	echo '<a class="card-border-tegaki-for-single mx-auto" href="'.get_category_link($category->term_id).'">'.$category->name.'</a>';
}
/* // 最初の一つだけ表示する場合はこちら //
echo '<a href="'.get_category_link($categories[0]->term_id).'">'.$categories[0]->name.'</a>';
*/
?>
                </div>


            </div>


            <!--投稿カテゴリ-->

            </p>


        </div>

        <!-- 本文の読み込み -->
        <div class="entry-content">
            <?php
if(have_posts()){
	while(have_posts()){
		the_post();
		the_content();
	}
} ?>
        </div>

        <!-- 前後の記事リンク -->
        <?php if( get_previous_post()|| get_next_post()): ?>
        <div class="entry-pager">
            <?php
	//前の記事へ
	previous_post_link('%link', '<span>%title</span>', TRUE, '');
	
	//次の記事へ
	next_post_link('%link', '<span>%title</span>', TRUE, '');
	?>
        </div>
        <?php endif; ?>

    </div>
    <div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>