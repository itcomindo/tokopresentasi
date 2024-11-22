<?php

/**
 *
 * Section Testimonial File.
 * @package  tps
 */

defined('ABSPATH') || die('No script kiddies please!');



/**
 * Testimonial Section.
 * 
 * @param string $element_id is id of element e.g testimonial.
 * @param string $photo_name is file name of photo e.g testi-person-1.png. 
 */
function tps_testimonial($photo_name = 'testi-person-1.png')
{
?>
    <section class="testimonial section section-high">
        <div class="inner-section">
            <div class="container">
                <div class="wrapper">
                    <div class="left">
                        <div class="photo">
                            <img src="<?php echo THEME_URI . '/assets/images/' . $photo_name; ?>" alt="Testimonial">
                        </div>
                    </div>
                    <div class="right">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quasi molestias doloribus distinctio rem deleniti consequuntur debitis exercitationem harum molestiae? Vero odio nobis iste quidem.</h3>
                        <div class="icons">
                            <div class="icon">
                                <img
                                    src="<?php echo THEME_URI . '/assets/images/stars.svg'; ?>"
                                    alt="icons">
                            </div>
                            <small>Tech Lead, Synlighet</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
