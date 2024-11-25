<?php

/**
 *
 * Template Name: Showcase Page
 * Description: A Page Template for showcase page
 * @package tps
 */

defined('ABSPATH') || die('No script kiddies please!');

get_header();
?>
<section id="the-page" class="section first">
    <div class="inner-section">
        <div class="container">
            <div class="wrapper">
                <h1 id="showcase-head" class="head head-section"><?php echo esc_html(get_theme_mod('showcase-head', 'Hire Your Whole Design & Dev Team With a Few Clicks')); ?></h1>
                <p id="showcase-text" class="text-section"><?php echo esc_html(get_theme_mod('showcase-text', 'Hire Your Whole Design & Dev Team With a Few Clicks')); ?></p>
                <div class="photo">
                    <img src="<?php echo THEME_URI . '/assets/images/uc.png'; ?>" alt="Underconstruction">
                </div>

            </div>
        </div>
    </div>
</section>
<?php
get_footer();
