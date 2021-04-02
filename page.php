<?php
/*
Template Name: 固定ページ基本
Template Post Type: page
*/
?>
<?php get_header(); ?>

<div id="template-page">

    <!-- タイトルの読み込み -->
    <div class="entry-header">
        <h2 class="pagetitle"><?php the_title();?></h2>
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

</div>

<?php get_footer(); ?>