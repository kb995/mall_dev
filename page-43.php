<?php get_header(); ?>

<section class="contents clear">
    <section class="malls page-mall clear">
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
                <?php the_excerpt(); ?>
            </div>
            <div class="link">
                <a href="<?php the_permalink(); ?>">
                    詳しく見る
                </a>
            </div>
        </article>

        <?php
                endwhile;
            endif;
            wp_reset_postdata();
        ?>
    </section>

<!-- sidebar -->
<?php get_sidebar(); ?>

</section>

<!-- footer -->
<?php get_footer(); ?>

