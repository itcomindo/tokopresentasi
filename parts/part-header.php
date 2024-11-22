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
                            <a href="/"><img src="<?php echo tps_logo(); ?>" alt="Showcase" title="Showcase"></a>
                        </div>
                    </div>
                    <div class="mid">
                        <nav id="header-menu">
                            <ul class="list-no-style horizontal">
                                <li><a href="#">Showcase</a></li>
                                <li><a href="#">Talent</a></li>
                                <li><a href="#">Scope</a></li>
                                <li><a href="#">Pricing</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="right">
                        <div class="inner">
                            <a href="#" class="btn light normal">Apply as a Talent</a>
                            <a href="#" class="btn dark normal">Book a Call</a>
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