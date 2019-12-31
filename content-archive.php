<article class="content archive clear" <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('large_thumbnail', array('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?>
    </a>

    <header class="a-header">
        <h1 class="a-title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h1>
        <time class="a-time" datetime="<?php the_time('Y-m-d'); ?>">
            <?php the_time(get_option('date_format')); ?>
        </time>
        <?php if(!is_search()): ?>
            <span class="a-author">
                <?php the_author_posts_link(); ?>
            </span>
        <?php endif; ?>
    </header>
    <section class="a-content">
            <?php the_excerpt(); ?>
    </section>
</article>