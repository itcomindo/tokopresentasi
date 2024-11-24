<?php

/**
 *
 * Field Section Staff
 * @package tps
 */

defined('ABSPATH') || die('No script kiddies please!');

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function tps_tab_home()
{
    return array(
        // Separator.
        Field::make('separator', 'staffsep', 'Staff Slider')
            ->set_classes('tpscfsep'),

        // Staff Slider Content.
        Field::make('complex', 'staffs', 'Staff')
            ->add_fields(array(
                // Staff Image.
                Field::make('image', 'staff_image', 'Image')
                    ->set_value_type('url'),

                // Staff Name.
                Field::make('text', 'staff_name', 'Name'),

                // Staff Position.
                Field::make('text', 'staff_position', 'Position'),
            ))
            ->set_collapsed(true)
            ->set_layout('tabbed-horizontal')
            ->set_header_template('
                            <% if (staff_name) { %>
                                <%- staff_name %>
                            <% } else { %>
                                Staff
                            <% } %>
                        '),


    );
}
