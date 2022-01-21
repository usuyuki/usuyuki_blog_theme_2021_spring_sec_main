<?php
/* ---------------------------------------
テーマ内でよく使う処理
--------------------------------------- */
//wp_head()で出力される内容にCSS読み込み設定を記述します。複数のスタイルシートを設定したい場合など、都度HTMLの<head>〜</head>に記述しなくてよく管理上便利です。
function register_stylesheet() { 
 wp_register_style('style', get_stylesheet_directory_uri().'/style.css');
}
function add_stylesheet() { 
 register_stylesheet();
 wp_enqueue_style('style', '', array(), '1.0', false);
}
add_action('wp_enqueue_scripts', 'add_stylesheet');


/* ---------------------------------------
ウィジェットの有効化・設定
--------------------------------------- */
//ウィジェットを作成し、管理画面で設定できるようにします。
//また、各ウィジェットをくくるHTMLタグなども指定できます。
//表示にはテーマテンプレート内でdynamic_sidebar()に設定したidを指定します。
function theme_slug_widgets_init() {
register_sidebar(array(
	 'name' => 'サイドナビ',
	 'id' => 'sidenavi' ,
	 'before_widget' => '<div class="side_widget">',
	 'after_widget' => '</div>',
	 'before_title' => '<h2 class="side-widget-title">',
	 'after_title' => '</h2>'
));
register_sidebar(array(
	 'name' => 'フッター',
	 'id' => 'footerwidget' ,
	 'before_widget' => '<div class="footer_widget">',
	 'after_widget' => '</div>',
	 'before_title' => '<h2 class="footer_widget_title">',
	 'after_title' => '</h2>'
));
register_sidebar(array(
	 'name' => 'サイド目次',
	 'id' => 'side-table-of-content' ,
	 'before_widget' => '<div class="">',
	 'after_widget' => '</div>',
	 'before_title' => '<h2 class="side-toc-title">',
	 'after_title' => '</h2>'
));
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );

/* ---------------------------------------
メニューの設定
--------------------------------------- */
//'ロケーションID名' => '管理画面での表示名' となっています。
//ヘッダー用・フッター用の2箇所に設定するメニュー例です。管理画面＞外観＞メニューでメニューを作成後、メニューの位置で下記の設定が選択できるようになっています。
//表示にはテーマテンプレート内でwp_nav_menu()に設定したロケーションIDを指定します。
function menu_setup() {  
  register_nav_menus( array(
    'global' => 'グローバルメニュー',
    'footer' => 'フッターメニュー'
  ) );
}
add_action( 'after_setup_theme', 'menu_setup' );

/* ---------------------------------------
ショートコードの設定
--------------------------------------- */
//サイトアドレスURLを取得
//テスト環境と本番環境が異なる場合など画像URLをこちらで設定しておくと後で書き換え不要で便利
function shortcode_url() {
    return get_home_url();
}
add_shortcode('url', 'shortcode_url');

//wordpressアドレスURLを取得
//サイトアドレスと別の場合、こちらも設定しておくと便利
function shortcode_siteurl() {
    return site_url();
}
add_shortcode('site_url', 'shortcode_siteurl');

//テーマのURLを取得
//テーマ内にある画像の出力等したい場合、都度フルパスを書く必要がなくなるため便利
function shortcode_templateurl() {
    return get_stylesheet_directory_uri();
}
add_shortcode('thema_url', 'shortcode_templateurl');

/* ---------------------------------------
管理画面内の設定
--------------------------------------- */
//プロフィール欄HTMLタグ有効
remove_filter('pre_user_description', 'wp_filter_kses');

// カテゴリ説明文HTML有効
remove_filter( 'pre_term_description', 'wp_filter_kses' );

//カテゴリ説明欄HTMLタグ有効
remove_filter( 'pre_term_name', 'wp_filter_kses' );

//the excertの設定
function twpp_change_excerpt_more( $more ) {
	// $html = '<a href="' . esc_url( get_permalink() ) . '">[...続きを読む]</a>';
	$html = '……';
	return $html;
  }
  
  add_filter( 'excerpt_more', 'twpp_change_excerpt_more' );
  function twpp_change_excerpt_length( $length ) {
	return 100; 
  }
  add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );


  // アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');


// apiでサムネ引っ張ってくる
add_action('rest_api_init', 'customize_api_response');
function customize_api_response() {
  // アイキャッチ画像のレスポンスを追加する投稿タイプ
  $post_types = ['post'];

  foreach ($post_types as $post_type) {
    register_rest_field(
      $post_type,
      'thumbnail',
      array(
        'get_callback'  => function ($post) {
          $thumbnail_id = get_post_thumbnail_id($post['id']);

          if ($thumbnail_id) {
            // アイキャッチが設定されていたらurl・width・heightを配列で返す
            $img = wp_get_attachment_image_src($thumbnail_id, 'large');

            return [
              'url' => $img[0],
              'width' => $img[1],
              'height' => $img[2]
            ];
          } else {
            // アイキャッチが設定されていなかったら空の配列を返す
            return [];
          }
        },
        'update_callback' => null,
        'schema'          => null,
      )
    );
  }
}