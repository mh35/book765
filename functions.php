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
            add_action('wp_enqueue_scripts', array(
                $this, 'wp_enqueue_scripts'));
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
        /**
         * Enqueue scripts and styles
         */
        public function wp_enqueue_scripts() {
            wp_enqueue_style('normalize', get_template_directory_uri() .
                '/normalize.css', array(), '8.0.1');
            wp_enqueue_style('theme-css', get_stylesheet_uri(),
                array(), '1.0');
            wp_enqueue_script('jquery');
        }
    }
}

Book765::init();