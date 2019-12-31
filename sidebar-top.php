<section id="sidebar">
    <!-- RSS -->
    <div class="rss-link">
        <?php the_feed_link("RSS"); ?>
    </div>

    <div class="sidebar-wrapper">
    <?php
        $sidebar_cat_list = array(
        'event' => 2,
        'malls' => 2,
        );

        foreach ($sidebar_cat_list as $sidebar_cat_name => $sidebar_cat_num) :
            $sidebar_posts = new WP_Query('posts_per_page=' . $sidebar_cat_num . '&category_name=' . $sidebar_cat_name);
    ?>
    <aside>
        <h1>
            <?php echo esc_html(get_category_by_slug($sidebar_cat_name)->name); ?>
        </h1>
        <ul>
            <?php
                if($sidebar_posts->have_posts()) :
                    while($sidebar_posts->have_posts()) :
                        $sidebar_posts->the_post();
            ?>
            <li>
                <time datetime="<?php the_time('Y-m-d'); ?>">
                    <?php the_time(get_option('date_format')); ?>
                </time>
                <h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <a class="category-thumbnail" href="<?php the_permalink(); ?>">
                </a>
                <?php the_excerpt(); ?>
            </li>
            <?php
                endwhile;
            endif;
            ?>
        </ul>
    </aside>
    <?php
            wp_reset_query();
        endforeach;
    ?>
    </div>
</section>