<?php

// ====== CSS/JSの読み込み
function my_script_init() {
    // 1,スタイル・スクリプトの名前 2,リンク 3,事前に読み込む 4,バージョン 5,メディア属性(all)
    // wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('style-scss', get_template_directory_uri() . '/css/6-load/load.css', array(), '1.0', 'all');
    wp_enqueue_script('drop-down-menu', get_template_directory_uri() . '/js/drop-down-menu.js', array( 'jquery' ), '1.0', true);

    if(is_front_page()) {
        wp_enqueue_style('swiper-css', get_template_directory_uri() . '/css/5-plugin/swiper.css', array(), '1.0', 'all');
        wp_enqueue_script('swiper-js', get_template_directory_uri() . '/js/swiper.js', array(), '1.0', 'all');
    }
}

add_action('wp_enqueue_scripts', 'my_script_init');


// ====== カスタムメニュー
register_nav_menus(
    // 外部ファイルでの指定名 => 管理画面上でメニューの指定名
    array(
        'place_global' => 'グローバル',
        'place_sub' => 'サブ',
    )
);


// ====== カスタムヘッダー
add_theme_support('custom-header',
array(
    'header-text' => false,
    'default-image' => get_template_directory_uri().'/img/screenshot.jpg',
    )
);

// ウィジェット
register_sidebar(array(
    'name' => 'サイドバーウィジェット',
    'id' => 'primary-widget-area',
    'description' => 'サイドバーウィジェットエリア',
    'before_widget' => '<aside id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>',
  ));


// ===== アイキャッチ画像設定
add_theme_support('post-thumbnails');

// アイキャッチ画像サイズ設定
set_post_thumbnail_size(90, 90 ,true);

// サイドバー用画像サイズ設定
add_image_size('small_thumbnail', 61, 61, false);

// アーカイブ用画像サイズ設定
add_image_size('large_thumbnail', 120, 120, true);

// サブページヘッダー用画像サイズ設定
// add_image_size('category_image', 658, 113, true);

// モールイメージ用画像サイズ設定
add_image_size('mall_thumbnail', 302, 123, true);


// ===== 抜粋文
function cms_excerpt_more() {
    return ' ...';
  }
  add_filter('excerpt_more', 'cms_excerpt_more');

// 45文字抜粋
function the_short_excerpt() {
    add_filter('excerpt_mblength', 'short_excerpt_length', 11);
    the_excerpt();
    remove_filter('excerpt_mblength', 'short_excerpt_length', 11);
  }

  function short_excerpt_length() {
    return 45;
  }

// 80文字抜粋文
  function the_middle_excerpt() {
    add_filter('excerpt_mblength', 'middle_excerpt_length', 11);
    the_excerpt();
    remove_filter('excerpt_mblength', 'middle_excerpt_length', 11);
  }

  function middle_excerpt_length() {
    return 80;
  }