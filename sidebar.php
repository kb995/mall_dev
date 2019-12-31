<section id="sidebar">
    <!-- RSS -->
    <div class="rss-link">
        <?php the_feed_link("RSS"); ?>
    </div>
    <!-- サイドバー -->
    <div class="sidebar-wrapper">
        <?php dynamic_sidebar('primary-widget-area'); ?>
    </div>
</section>