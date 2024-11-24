<?php

/**
 *
 * Customizer Home Hero
 * @package tps
 */

defined('ABSPATH') || die('No script kiddies please!');



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
