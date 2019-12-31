<article class="content">
    <header class="content-header">
        <h1 class="content-title">
            <?php the_title(); ?>
        </h1>
        <?php
            if(is_single() && in_category('column')):
                get_template_part('social-buttons');
            endif;
        ?>
    </header>
    <section class="content-entry">
        <?php the_content(); ?>

        <?php if(is_single()): ?>
            <ul class="alignright">
                <li>
                    <time datetime="<?php the_time('Y-m-d'); ?>">
                        <?php the_time(get_option('date_format')); ?>
                    </time> 
                </li>
                <li>
                    <?php the_author_posts_link(); ?>
                </li>
            </ul>
        <?php endif; ?>
        <?php
            if(is_single() && in_category('column')):
                get_template_part('social-buttons');
            endif;
        ?>
    </section>
</article>