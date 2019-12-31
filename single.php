<?php get_header(); ?>

<section class="contents clear">
<?php 
    if(have_posts()):
        while(have_posts()):
            the_post();
            get_template_part('content');

        endwhile;
    endif;
?>

<!-- sidebar -->
<?php get_sidebar(); ?>

<?php if(is_single()): ?>
    <nav class="adjacent-post-links">
        <ul>
            <li class="previous">
                <?php previous_post_link('%link', '＜＜　%title', true); ?>
            </li> 
            <li class="next">
                <?php next_post_link('%link', '%title　＞＞', true); ?>
            </li> 
        </ul>
    </nav>
<?php endif; ?>


<?php
// コメント表示
 if (in_category('column')) :
    comments_template('', true);
  endif;
?>

</section>


<!-- footer -->
<?php get_footer(); ?>

