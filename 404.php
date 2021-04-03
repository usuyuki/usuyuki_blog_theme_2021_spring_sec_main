<?php get_header(); ?>
<div class="100vh">
    <h2 class="text-center text-3xl">お探しのページは見つかりません！</h2>
    <h3 class="text-center text-2xl">404 Not found</h3>
    <?php $random=rand(1, 10);
    if($random %2 ==0): ?>
    <img src="<?php
echo get_template_directory_uri();
?>/img/404/6056ea822900a54ca998b1c3_35.png" alt="404のための画像" class="text-center object-fill h-24 w-24 rounded-2xl">
    <?php else:?>
    <img src="<?php
echo get_template_directory_uri();
?>/img/404/6065505970e2a264108f93e8_54.png" alt="404のための画像" class="text-center object-fill h-24 w-24 rounded-2xl">
    <?php endif;?>

</div>
<?php get_footer(); ?>