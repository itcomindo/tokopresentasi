<?php

/**
 *
 * Section Hero File.
 * @package  tps
 */

defined('ABSPATH') || die('No script kiddies please!');

?>






<section id="hero" class="section">
    <div class="inner-section">
        <div class="container">
            <div class="wrapper">
                <div class="items">
                    <div class="top col">
                        <h1 id="hero-head" class="head head-section lw50mw75sw100">
                            <?php echo esc_html(get_theme_mod('hero-head', 'Hire Your Whole Design & Dev Team With a Few Clicks')); ?>
                        </h1>
                    </div>
                    <div class="mid col">
                        <p id="hero-text"><?php echo esc_html(get_theme_mod('hero-text', 'Get on-demand access to your own team of designers, developers & project managers without the hassle of managing full-time employees')); ?></p>
                        <div class="buttons">
                            <a href="#" class="fl btn dark border medium borad-7">Book a Discovery Call</a>
                            <a href="#" class="fl btn light border medium borad-7">See Previous Work</a>
                        </div>
                    </div>
                    <div class="bot col">
                        <ul class="list-no-style">
                            <li><i class="fa-solid fa-check"></i> Unlimited design & dev requests</li>
                            <li><i class="fa-solid fa-check"></i> Monthly flat-rate</li>
                            <li><i class="fa-solid fa-check"></i> No Contract. Cancel anytime</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>