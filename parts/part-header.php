<?php

/**
 *
 * Silence is golden
 */

defined('ABSPATH') || die('No script kiddies please!');

?>
<!-- Header Start -->
<div id="header" class="section">
    <div class="inner-section">
        <div class="container">
            <div class="wrapper">
                <div class="items">
                    <div class="left">
                        <div class="logo">
                            <a href="/" title="showcase"><img src="<?php echo tps_logo(); ?>" alt="Showcase" title="Showcase"></a>
                        </div>
                    </div>
                    <div class="mid">
                        <?php
                        tps_display_menu('header', 'header-menu', 'horizontal');
                        ?>
                    </div>
                    <div class="right">
                        <div class="inner">
                            <a href="#" class="fl btn light normal">Apply as a Talent</a>
                            <a href="#" class="fl btn dark normal">Book a Call</a>
                        </div>
                        <?php
                        get_template_part('parts/part', 'bars');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->