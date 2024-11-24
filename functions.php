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
// Call Yano Customizer.
require_once get_template_directory() . '/yano-customizer/yano-customizer.php';



// Append meta name description to the head.
function tps_meta_description()
{
    echo '<meta name="description" content="Affordable Recuiting & Delivery Platform for Top Remote Talent Around the world">';
}
add_action('wp_head', 'tps_meta_description', 1);


// Yano Customizer.
if (class_exists('Yano_Customizer')) {
    $yano_customizer = new Yano_Customizer();
    customizer_fields();
}


function customizer_hero()
{
    // Panel.
    Yano::panel('yano_panel_hero', array(
        'title' => 'Hero Section',
        'Description' => 'This is the hero section of the website',
        'priority' => 1,
    ));

    // Section.
    Yano::section('yano_section_hero', array(
        'title' => 'Hero Section',
        'Description' => 'This is the hero section of the website',
        'priority' => 1,
        'panel' => 'yano_panel_hero',
    ));

    // Hero Head, Text Field.
    Yano::field('text', [
        'id'          => 'hero-head',
        'label'       => 'Head Hero',
        'description' => 'Write your website hero head',
        'section'     => 'yano_section_hero',
        'priority'    => 1,
        'placeholder' => 'Write your hero head here',
        'default'     => 'Hire Your Whole Design & Dev Team With a Few Clicks',
    ]);

    // Hero Text, Textarea Field with max length of 200.
    Yano::field('textarea', [
        'id'          => 'hero-text',
        'label'       => 'Text Hero',
        'description' => 'Write your website hero text',
        'section'     => 'yano_section_hero',
        'priority'    => 2,
        'placeholder' => 'Write your hero text here',
        'default'     => 'Get on-demand access to your own team of designers, developers & project managers without the hassle of managing full-time employees.',
        'max_length'  => 200,
    ]);
}
add_action('customize_register', 'customizer_hero');
