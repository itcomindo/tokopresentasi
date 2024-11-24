<?php

/**
 *
 * theme Options
 * @package tps
 */

defined('ABSPATH') || die('No script kiddies please!');

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function tps_theme_options()
{
    $options_container = Container::make('theme_options', 'Theme Options')
        ->add_tab('Home', tps_tab_home());
}
add_action('carbon_fields_register_fields', 'tps_theme_options');
