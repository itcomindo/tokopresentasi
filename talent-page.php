<?php

/**
 *
 * Template Name: Talent Page
 * Description: A Page Template for talent page
 * @package tps
 */

defined('ABSPATH') || die('No script kiddies please!');

get_header();

function timg($file_name)
{
    $url = THEME_URI . '/assets/images/talent/';
    $img = $url . $file_name;
    $img = '<img src="' . $img . '" alt="' . $file_name . '">';
    return $img;
}



?>
<section id="the-page" class="section first dark">
    <div class="inner-section">
        <div class="container">
            <div class="wrapper">

                <div class="top">
                    <h1 class="head head-section">Great Designers & Developers Don't Grow on Trees.<br><span class="highlight">They Grow at Brand.</span></h1>
                    <p class="text-section">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos iusto enim consequuntur cum veritatis veniam quae commodi ratione ad odio. Voluptatum quia in atque natus.</p>
                </div>
                <div class="bot">
                    <div class="photo">
                        <img class="ft" src="<?php echo THEME_URI . '/assets/images/talent/talent(18).png'; ?>" alt="talent">
                    </div>
                    <div id="masonry" class="groups">
                        <!-- group 1 -->
                        <div id="group-one" class="group left">
                            <!-- item 1 -->
                            <div class="grid-item el1">
                                <?php echo timg('tsvg(13).svg'); ?>
                            </div>

                            <!-- item 2 -->
                            <div class="grid-item el2">
                                <?php echo timg('tsvg(12).svg'); ?>
                            </div>

                            <!-- item 3 -->
                            <div class="grid-item el3">
                                <?php echo timg('tpng(1).png'); ?>
                            </div>

                            <!-- item 4 -->
                            <div class="grid-item el4">
                                <?php echo timg('tpng(2).png'); ?>
                            </div>

                            <!-- item 5 -->
                            <div class="grid-item el5">
                                <?php echo timg('tpng(3).png'); ?>
                            </div>

                            <!-- item 6 -->
                            <div class="grid-item el6">
                                <?php echo timg('tpng(4).png'); ?>
                            </div>

                            <!-- item 7 -->
                            <div class="grid-item el7">
                                <?php echo timg('tpng(5).png'); ?>
                            </div>

                            <!-- item 8 -->
                            <div class="grid-item el8">
                                <?php echo timg('tsvg(7).svg'); ?>
                            </div>

                            <!-- item 9 -->
                            <div class="grid-item el9">
                                <?php echo timg('tpng(6).png'); ?>
                            </div>

                            <!-- item 10 -->
                            <div class="grid-item el10 anim">
                                <?php echo timg('tsvg(1).svg'); ?>
                            </div>

                        </div>
                        <div id="group-two" class="group mid">
                            <!-- item 1 -->
                            <div class="grid-item el1 anim">
                                <?php echo timg('tsvg(5).svg'); ?>
                            </div>

                            <!-- item 2 -->
                            <div class="grid-item el2">
                                <?php echo timg('tpng(10).png'); ?>
                            </div>

                            <!-- item 3 -->
                            <div class="grid-item el3">
                                <?php echo timg('tpng(6).png'); ?>
                            </div>

                            <!-- item 4 -->
                            <div class="grid-item el4">
                                <?php echo timg('tpng(7).png'); ?>
                            </div>

                            <!-- item 5 -->
                            <div class="grid-item el5">
                                <?php echo timg('tpng(11).png'); ?>
                            </div>
                        </div>
                        <div id="group-three" class="group right">
                            <!-- item 1 -->
                            <div class="grid-item el1">
                                <?php echo timg('tpng(3).png'); ?>
                            </div>

                            <!-- item 2 -->
                            <div class="grid-item el2">
                                <?php echo timg('tsvg(11).svg'); ?>
                            </div>

                            <!-- item 3 -->
                            <div class="grid-item el3">
                                <?php echo timg('tsvg(10).svg'); ?>
                            </div>

                            <!-- item 4 -->
                            <div class="grid-item el4">
                                <?php echo timg('tpng(14).png'); ?>
                            </div>

                            <!-- item 5 -->
                            <div class="grid-item el5 anim">
                                <?php echo timg('tsvg(9).svg'); ?>
                            </div>
                        </div>
                        <div id="group-four" class="group right">
                            <!-- item 1 -->
                            <div class="grid-item el1 anim">
                                <?php echo timg('tsvg(6).svg'); ?>
                            </div>

                            <!-- item 2 -->
                            <div class="grid-item el2">
                                <?php echo timg('tpng(1).png'); ?>
                            </div>

                            <!-- item 3 -->
                            <div class="grid-item el3">
                                <?php echo timg('tpng(16).png'); ?>
                            </div>

                            <!-- item 4 -->
                            <div class="grid-item el4">
                                <?php echo timg('tsvg(2).svg'); ?>
                            </div>

                            <!-- item 5 -->
                            <div class="grid-item el5">
                                <?php echo timg('tpng(3).png'); ?>
                            </div>

                            <!-- item 6 -->
                            <div class="grid-item el6">
                                <?php echo timg('tpng(4).png'); ?>
                            </div>

                            <!-- item 7 -->
                            <div class="grid-item el7">
                                <?php echo timg('tpng(5).png'); ?>
                            </div>

                            <!-- item 8 -->
                            <div class="grid-item el8">
                                <?php echo timg('tsvg(14).svg'); ?>
                            </div>

                            <!-- item 9 -->
                            <div class="grid-item el9">
                                <?php echo timg('tpng(6).png'); ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<div id="counter" class="section section-high">
    <div class="inner-section">
        <div class="container">
            <div class="wrapper">
                <div class="items">
                    <div class="left">
                        <span class="num head head-section">1.000+</span>
                        <span class="text">Professional in Talent Pool</span>
                    </div>
                    <div class="mid">
                        <span class="num head head-section">1.000+</span>
                        <span class="text">Professional in Talent Pool</span>
                    </div>
                    <div class="right">
                        <span class="num head head-section">1.000+</span>
                        <span class="text">Professional in Talent Pool</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
