<?php
if (!isset($content_width)) {
    $content_width = 800;
}

if (!class_exists('Book765')) {
    class Book765 {
        /**
         * Instance of this theme
         */
        public static $instance;
        /**
         * Initialize Theme
         */
        public static function init() {
            self::$instance = new self();
        }
        /**
         * Constructor of this class
         */
        private function __construct() {
            add_action('after_setup_theme', array(
                $this, 'after_setup_theme'));
            add_action('widgets_init', array($this, 'widgets_init'));
        }
        /**
         * Setup theme
         */
        public function after_setup_theme() {
            load_theme_textdomain('book765',
                get_template_directory() . '/languages');
            add_theme_support('automatic-feed-links');
            add_theme_support('html5', array(
                'comment-list', 'comment-form', 'search-form',
                'gallery', 'caption'));
            add_theme_support('post-thumbnails');
            register_nav_menus(array(
                'primary' => __('Primary Menu', 'book765'),
                'secondary' => __('Secondary menu', 'book765')
            ));
            add_theme_support('title-tag');
        }
        /**
         * Setup widget
         */
        public function widgets_init() {
            register_sidebar(array(
                'name' => __('Primary Sidebar', 'book765'),
                'id' => 'sidebar-1',
                'description' => __('Primary sidebar content', 'book765')
            ));
            register_sidebar(array(
                'name' => __('Secondary Sidebar', 'book765'),
                'id' => 'sidebar-2',
                'description' => __('Secondary sidebar content', 'book765')
            ));
        }
    }
}

Book765::init();