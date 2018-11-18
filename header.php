<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<a class="screen-reader-text skip-link" href="#content"><?php
_e('Skip to content', 'book765'); ?></a>
<header id="page-header" class="page-header">
<?php if (is_front_page()) {
    ?>
    <h1 class="site-name"><?php bloginfo('name'); ?></h1>
    <?php
} else {
    ?>
    <p class="site-name"><a href="<?php echo home_url('/'); ?>"><?php
    bloginfo('name'); ?></a></p>
    <?php
} ?>
<nav id="site-navigation" class="site-navigation">
<?php wp_nav_menu(array(
    'theme_location' => 'primary',
    'depth' => 1
)); ?>
</nav>
</header>
<div class="main-wrap clearfix">
<div class="main-content-wrap">
<main id="content" class="main-content">