<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
    <?php
        global $page, $paged;
        // 検索ページ
        // 検索結果「」 | サイトタイトル |
        // その他
        // ページタイトル | サイトタイトル
        if(is_search()):
            wp_title('', true, 'left');
            echo ' | ';
        else:
            wp_title('|', true, 'right');
        endif;

        bloginfo('name');

        // フロント :
        // サイトタイトル | キャッチフレーズ
        if(is_front_page()):
            echo ' | ';
            bloginfo('description');
        endif;
        // マルチページ
        // サイトタイトル | ◯ ページ
        if($paged >= 2 || $page >= 2) :
            echo ' | ' . sprintf('%sページ', max($paged, $page));
        endif;
    ?>
</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="clear">
        <h1 class="site-logo">
            <a href="<?php echo home_url(); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </h1>
        <!-- <aside class="widget_search"> -->
            <?php echo get_search_form(); ?>
        <!-- </aside> -->

        <!-- グローバルメニュー -->
        <?php
        wp_nav_menu(array(
            'container' => 'nav',
            'container_id' => 'global-nav',
            'theme_location' => 'place_global',
        ));

        ?>
        <!-- パンくずメニュー -->
        <?php
            if(!is_front_page() && function_exists('bread_crumb')) :
                bread_crumb('navi_element=nav&elm_id=bread-crumb');
            endif;
        ?>
    </header>

<!-- mv -->
<?php if(is_front_page()): ?>
    <div class="swiper-container mv clear">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/mv/krisztina-papp-_wkrWd5o8sA-unsplash.jpg" alt="Swiper01"></div>
            <div class="swiper-slide"><img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/mv/marcin-kempa-3sLosN6dPoQ-unsplash.jpg" alt="Swiper02"></div>
            <div class="swiper-slide"><img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/mv/michael-weidemann-oGhTfu1UrOY-unsplash.jpg" alt="Swiper03"></div>
        </div>
        <!-- 送りボタン -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <!-- ページネーション -->
        <div class="swiper-pagination"></div>
    </div>
<?php endif; ?>

<!-- スマホ用 mv -->
<div class="mv_sp"></div>
<!-- タブレット用 mv -->
<div class="mv_tab"></div>
