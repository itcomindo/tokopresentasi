<?php

/**
 *
 * Functions and definitions
 * @package  tps
 */

defined('ABSPATH') || die('No script kiddies please!');

// Disable gutenberg.
add_filter('use_block_editor_for_post', '__return_false', 10);


add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
// support for elementor.
add_theme_support('elementor');

// Define the assets path.
define('THEME_PATH', get_template_directory_uri());

// Define theme URI.
define('THEME_URI', get_template_directory_uri());

// Define theme version.
define('THEME_VERSION', wp_get_theme()->get('Version'));


// Call Themes Files.
require_once get_template_directory() . '/assets/assets.php';
require_once get_template_directory() . '/parts/parts.php';
