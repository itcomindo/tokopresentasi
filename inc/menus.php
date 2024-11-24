<?php

/**
 *
 * Menu functions
 * @package tps
 */

defined('ABSPATH') || die('No script kiddies please!');


// Register menus, Header, Fotter 1, Footer 2, Footer 3 with no translation.

function tps_register_menus()
{
    register_nav_menus(
        array(
            'header' => 'Header Menu',
            'footer-1' => 'Footer 1 Menu',
            'footer-2' => 'Footer 2 Menu',
            'footer-3' => 'Footer 3 Menu',
            'sidebar' => 'Sidebar Menu',

        )
    );
}
add_action('init', 'tps_register_menus');



/**
 * Displays a WordPress navigation menu.
 *
 * @param string $menu The theme location identifier for the menu.
 * @param string $container_id The ID attribute for the container element.
 * @param string $menu_class Additional classes to add to the menu.
 */
function tps_display_menu($menu, $container_id, $menu_class)
{
    wp_nav_menu(
        array(
            'theme_location' => $menu,
            'container' => 'nav',
            'container_id' => $container_id,
            'menu_class' => 'list-no-style ' . $menu_class,
        )
    );
}
