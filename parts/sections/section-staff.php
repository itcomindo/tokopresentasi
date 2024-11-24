<?php

/**
 *
 * Section Staff File.
 * @package  tps
 */

defined('ABSPATH') || die('No script kiddies please!');

function tps_staff()
{
    $staffs = carbon_get_theme_option('staffs');
    if ($staffs) {
?>
        <div class="group">
            <?php
            foreach ($staffs as $staff) {
                $staff_image = $staff['staff_image'];
                $staff_name = $staff['staff_name'];
                $staff_position = $staff['staff_position'];
            ?>
                <div class="item">
                    <img src="<?php echo esc_html($staff_image); ?>" alt="<?php echo esc_html($staff_name); ?>">
                    <div class="box"><span><?php echo esc_html($staff_name); ?></span><span><?php echo esc_html($staff_position); ?></span></div>
                </div>
            <?php
            }
            ?>
        </div>
    <?php
    } else {
    ?>
        <div class="group">
            <div class="item">
                <img src="<?php echo THEME_URI . '/assets/images/staff-1.png'; ?>" alt="">
            </div>
            <div class="item">
                <img src="<?php echo THEME_URI . '/assets/images/staff-2.png'; ?>" alt="">
            </div>
            <div class="item">

                <img src="<?php echo THEME_URI . '/assets/images/staff-3.png'; ?>" alt="">
            </div>
            <div class="item">
                <img src="<?php echo THEME_URI . '/assets/images/staff-4.png'; ?>" alt="">
            </div>

            <div class="item">
                <img src="<?php echo THEME_URI . '/assets/images/staff-5.png'; ?>" alt="">
            </div>

            <div class="item">
                <img src="<?php echo THEME_URI . '/assets/images/staff-6.png'; ?>" alt="">
            </div>
        </div>
<?php
    }
}

?>
<div id="staff" class="section">
    <div class="inner-section">
        <div class="container">
            <div class="wrapper">
                <div class="groups">
                    <?php tps_staff(); ?>
                </div>
            </div>
        </div>
    </div>
</div>