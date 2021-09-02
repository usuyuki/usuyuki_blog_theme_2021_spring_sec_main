<!-- sidebar -->

<aside id="sidebar" class="ml-16 w-1/2">
    <h2 class="side_widget_title">カテゴリー</h2>
    <?php 

$side_categories=[
    ['programing','プログラミング'],
    ['travel','旅'],
    ['life','生活向上'],
    ['souvenir','お土産'],
]
?>
    <?php foreach($side_categories as $side_category):?>
    <p><a class=""
            href="<?php echo home_url( '/category/') ?><?php echo $side_category[0] ?>"><?php echo $side_category[1] ?></a>
    </p>
    <?php endforeach;?>
    <?php dynamic_sidebar( 'sidenavi' ); ?>
</aside>