<?php get_header(); ?>

<section class="contents clear">
    <div class="content">

<!-- News -->
<section class="news">
    <h1 class="section-title">新着ニュース</h1>
    <?php 
        $news_posts = new WP_Query('posts_per_page=2&categoy_name=information');
        if($news_posts->have_posts()):
            while($news_posts->have_posts()):
                $news_posts->the_post();
    ?>
        <div class="news-line">
            <h1 class="news-title">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h1>
            <time class="entry-date" datetime="<?php the_time('Y-m-d'); ?>">
                <?php the_time(get_option('date_format')); ?>
            </time>
            <div class="news-text">
                <?php the_short_excerpt(); ?>
            </div>
        </div><!-- news-line -->
    <?php
        endwhile;
                endif;
                wp_reset_postdata();
    ?>
</section><!-- news -->

<!-- Mall -->
<section class="malls clear">
    <h1 class="section-title">
        モール開発
    </h1>
    <?php
        $mall_posts = new WP_Query('posts_per_page=4&post_type=page&post_parent=43');
        if($mall_posts->have_posts()):
            while ($mall_posts->have_posts()):
                $mall_posts->the_post();
    ?>

    <article class="mall-article">
        <h1 class="mall-title">
            <?php the_title(); ?>
        </h1>
        <p class="mall-img">
            <?php the_post_thumbnail('mall_thumbnail', array('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?>
        </p>
        <div class="mall-text">
            <?php the_middle_excerpt(); ?>
        </div>
        <div class="link">
            <a href="<?php the_permalink(); ?>">
                >> 詳しく見る
            </a>
        </div>
    </article>

    <?php
            endwhile;
        endif;
        wp_reset_postdata();
    ?>
</section>

<!-- column -->
<section class="column clear">
    <h1 class="column-title">
        新着コラム
        <a class="link" href="<?php echo get_term_link('column', 'category'); ?>">コラム一覧</a>
    </h1>
    <?php
        $column_posts = new WP_Query('posts_per_page=4&category_name=column');
        if($column_posts->have_posts()):
            while ($column_posts->have_posts()):
                $column_posts->the_post();
    ?>

    <article class="column-article clear">
        <p class="column-left">
            <?php the_post_thumbnail('small_thumbnail', array('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?>
        </p>

        <div class="column-right">
            <h1>
                <?php the_title(); ?>
            </h1>
            <time datetime="<?php the_time(); ?>">
                <?php the_time(get_option('date_format')); ?>
            </time>
            <?php the_middle_excerpt(); ?>
            <div class="link">
                <a href="<?php the_permalink() ?>">
                    続きを読む
                </a>
            </div>
        </div>
    </article>

    <?php
        endwhile;
    endif;
    wp_reset_postdata();
    ?>
</section>


</div><!-- content -->

<!-- sidebar -->
<?php get_sidebar('top'); ?>

</section>

<!-- footer -->
<?php get_footer(); ?>
