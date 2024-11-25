<?php

/**
 *
 * Customizer Home Hero
 * @package tps
 */

defined('ABSPATH') || die('No script kiddies please!');



function customizer_showcase()
{
    // Panel.
    Yano::panel('showcase', array(
        'title' => 'Showcase Page',
        'Description' => 'Edit Showcase Page',
        'priority' => 1,
    ));

    // Section.
    Yano::section('showcase-hero', array(
        'title' => 'Showcase Hero',
        'Description' => 'Edit Showcase Page',
        'priority' => 1,
        'panel' => 'showcase',
    ));

    // Hero Head, Text Field.
    Yano::field('text', [
        'id'          => 'showcase-head',
        'label'       => 'Showcase Hero Head',
        'description' => 'Write your website showcase head',
        'section'     => 'showcase-hero',
        'priority'    => 1,
        'placeholder' => 'Write your hero head here',
        'default'     => 'Under Construction',
    ]);

    // Hero Text, Textarea Field with max length of 200.
    Yano::field('textarea', [
        'id'          => 'showcase-text',
        'label'       => 'Showcase Text',
        'description' => 'Write your website hero text',
        'section'     => 'showcase-hero',
        'priority'    => 2,
        'placeholder' => 'Write your hero text here',
        'default'     => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, quaerat? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut, fugit!.',
        'max_length'  => 300,
    ]);
}
add_action('customize_register', 'customizer_showcase');
