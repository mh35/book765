<div class="sidebar-wrap">
    <div id="sidebar" class="sidebar-content">
    <?php if (is_active_sidebar('sidebar-1')) {
        ?>
        <ul class="sidebar-list">
        <?php dynamic_sidebar('sidebar-1'); ?>
        </ul>
        <?php
    } ?>
    </div>
</div>