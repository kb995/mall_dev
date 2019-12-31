<?php get_header(); ?>

<section class="contents clear">
    <div class="archive-posts">
        <h1 class="archive-title">
            「 <?php the_search_query(); ?> 」の検索結果
        </h1>

        <?php
            if(have_posts() && get_search_query()):
                 while(have_posts()):
                    the_post();
                    get_template_part('content-archive');
                endwhile;
            else: ?>
        <p class="result-empty">該当する結果はありませんでした。</p>
        <?php endif; ?>
    </div>

    <!-- sidebar -->
    <?php get_sidebar(); ?>

</section>


<!-- footer -->
<?php get_footer(); ?>

