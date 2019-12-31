<?php get_header(); ?>

<section class="contents clear">
    <div class="archive-posts">
        <h1 class="archive-title">
        <?php
            if(is_author()) :
                echo esc_html(get_the_author_meta('display_name', get_query_var('author')));
            else :
            single_cat_title();
            endif;
        ?>
        </h1>

        <?php
            if(have_posts()):
                while(have_posts()):
                    the_post();
                    get_template_part('content-archive');
                endwhile;
            endif;
        ?>
    </div>

    <!-- sidebar -->
    <?php get_sidebar(); ?>

</section>


<!-- footer -->
<?php get_footer(); ?>

