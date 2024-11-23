<?php

/**
 *
 * Functions and definitions
 * @package  tps
 */

defined('ABSPATH') || die('No script kiddies please!');

/**
 * Check if the current environment is development mode or on production
 * development mode is when the server is localhost
 * output: boolean
 */
function tps_is_devmode()
{
    if (isset($_SERVER['REMOTE_ADDR']) && in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'), true)) {
        return true;
    }
    return false;
}



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



// Append meta name description to the head.
function tps_meta_description()
{
    echo '<meta name="description" content="Affordable Recuiting & Delivery Platform for Top Remote Talent Around the world">';
}
add_action('wp_head', 'tps_meta_description', 1);
