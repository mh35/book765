</main>
</div>
<?php get_sidebar(); ?>
</div>
<div class="page-footer-wrap">
<footer id="page-footer" class="page-footer">
    <nav id="footer-navigation" class="footer-navigation">
    <?php wp_nav_menu(array(
        'theme_location' => 'secondary',
        'depth' => 1
    )); ?>
    </nav>
    <?php if (is_active_sidebar('sidebar-2')) {
        ?>
        <ul class="footer-sidebar"><?php dynamic_sidebar(
            'sidebar-2'); ?></ul>
        <?php
    } ?>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>