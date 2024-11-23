<?php

/**
 *
 * Front Page File.
 * @package  tps
 */

defined('ABSPATH') || die('No script kiddies please!');

get_header();

get_template_part('parts/sections/section', 'hero');
get_template_part('parts/sections/section', 'staff');
get_template_part('parts/sections/section', 'teaser');
get_template_part('parts/sections/section', 'issue');
get_template_part('parts/sections/section', 'cards');
tps_testimonial('testi-1', 'testi-person-1.png');
get_template_part('parts/sections/section', 'talent');
get_template_part('parts/sections/section', 'built');
tps_testimonial('testi-2', 'testi-person-2.png');
get_template_part('parts/sections/section', 'showcase');
get_template_part('parts/sections/section', 'what');
tps_testimonial('testi-3', 'testi-person-3.png');
get_template_part('parts/sections/section', 'logo-clients');
get_template_part('parts/sections/section', 'offer-strips');
get_template_part('parts/sections/section', 'cta');

get_footer();
