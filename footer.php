</main>

<footer>


    <main class="index-grid mx-24 py-12">
        <div>
            <div class="genre-title">
                <h1><i class="fas fa-map-marker-alt"></i>旅</h1>
            </div>
            <p>心をたまには洗いたくなります。</p>
            <div>
                <?php $args=array(
                'numberposts'=>3,
                'category_name'=>"travel",
            // 'post_type'=>'work',
            // 'orderby' => 'meta_value',
            // 'meta_key' => 'work_start', //ACFのフィールド名
            'order' => 'DESC'

            );
            $customPost=get_posts($args);
            if($customPost):
                foreach($customPost as $post):
                    // setup_postdata($post):
            ?>
                <article>
                    <a class="h4 text-center my-2" href="<?php echo get_permalink(); ?>">
                        "<?php the_title(); ?>"</a>
                </article>
                <?php endforeach;
        endif; ?>

            </div>
            <div>
                <a href="<?php  echo esc_url( home_url( '/' ) )?>/category/travel">もっと見る</a>
            </div>
        </div>
        <div>
            <div class="genre-title">
                <h1>宇都宮</h1>
            </div>
            <p>とかいなか宇都宮</p>
            <div>
                <?php $args=array(
                'numberposts'=>3,
                'category_name'=>"utunomiya",
            // 'post_type'=>'work',
            // 'orderby' => 'meta_value',
            // 'meta_key' => 'work_start', //ACFのフィールド名
            'order' => 'DESC'

            );
            $customPost=get_posts($args);
            if($customPost):
                foreach($customPost as $post):
                    // setup_postdata($post):
            ?>
                <article>
                    <a class="h4 text-center my-2" href="<?php echo get_permalink(); ?>">
                        "<?php the_title(); ?>"</a>
                </article>
                <?php endforeach;
        endif; ?>

            </div>
            <div>
                <a href="<?php  echo esc_url( home_url( '/' ) )?>/category/utunomiya">もっと見る</a>
            </div>
        </div>
        <div>
            <div class="genre-title">
                <h1><i class="fas fa-home"></i>生活向上</h1>
            </div>
            <p>よりよいモダンな暮らしを求めて。</p>
            <div>
                <?php $args=array(
                'numberposts'=>3,
                'category_name'=>"life",
            // 'post_type'=>'work',
            // 'orderby' => 'meta_value',
            // 'meta_key' => 'work_start', //ACFのフィールド名
            'order' => 'DESC'

            );
            $customPost=get_posts($args);
            if($customPost):
                foreach($customPost as $post):
                    // setup_postdata($post):
            ?>
                <article>
                    <a class="h4 text-center my-2" href="<?php echo get_permalink(); ?>">
                        "<?php the_title(); ?>"</a>
                </article>
                <?php endforeach;
        endif; ?>

            </div>
            <div>
                <a href="<?php  echo esc_url( home_url( '/' ) )?>/category/utunomiya">もっと見る</a>
            </div>
        </div>
        <div>
            <div class="genre-title">
                <h1><i class="fas fa-home"></i>プログラミング</h1>
            </div>
            <p>ただの趣味です。</p>
            <div>
                <?php $args=array(
                'numberposts'=>3,
                'category_name'=>"programing",
            // 'post_type'=>'work',
            // 'orderby' => 'meta_value',
            // 'meta_key' => 'work_start', //ACFのフィールド名
            'order' => 'DESC'

            );
            $customPost=get_posts($args);
            if($customPost):
                foreach($customPost as $post):
                    // setup_postdata($post):
            ?>
                <article>
                    <a class="h4 text-center my-2" href="<?php echo get_permalink(); ?>">
                        "<?php the_title(); ?>"</a>
                </article>
                <?php endforeach;
        endif; ?>

            </div>
            <div>
                <a href="<?php  echo esc_url( home_url( '/' ) )?>/category/utunomiya">もっと見る</a>
            </div>
        </div>
    </main>
    <!-- functions.phpで設定したウィジェット（フッター用）の読み込み -->
    <div id="footerwidget">
        <?php dynamic_sidebar('footerwidget'); ?>
    </div>

    <!-- functions.phpで設定したメニューの読み込み -->
    <nav id="menu-footer">
        <?php wp_nav_menu(
	array (
		'theme_location' => 'footer'
	)
); ?>
    </nav>

    <p class="copyright">&copy; <?php echo date('Y');?> <?php echo get_bloginfo('name');?>.</p>
</footer>


<?php wp_footer(); 
//wp_footerの中でwo_footer読み込んでいて、なにこれ？ってなるけど、これであっているらしい。?>
</body>

</html>