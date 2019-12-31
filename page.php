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

</section>

<!-- footer -->
<?php get_footer(); ?>

