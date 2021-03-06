<?php get_header(); ?>
<h1 class="search-title"><?php printf(__('Search result for %s',
    'book765'), get_query_var('s')); ?></h1>
<?php if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if (is_singular()) {
            ?>
            <h1 class="post-title"><?php the_title(); ?></h1>
            <?php
        } else {
            ?>
            <h2 class="post-title">
                <a href="<?php the_permalink();
                ?>"><?php the_title(); ?></a>
            </h2>
            <?php
        } ?>
        <div class="post-content"><?php the_content(); ?></div>
        </article>
        <?php
    }
} ?>
<?php get_footer(); ?>