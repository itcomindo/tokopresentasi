<?php

/**
 *
 * Assets
 *
 * @package bb
 */

defined('ABSPATH') || die('No script kiddies please!');

// Disable phpcs for this file.
// phpcs:disable

/**
 * Enqueues theme stylesheets and libraries.
 *
 * This function enqueues the following stylesheets:
 * - Font Awesome from a CDN.
 * - Global CSS from the theme's assets directory.
 *
 * @return void
 */
function mm_load_stylesheet_and_libs()
{
	// Load Font-awesome.
	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css', array(), '6.6.0', null);
	// Load global css.
	wp_enqueue_style('global-css', get_template_directory_uri() . '/assets/css/global.min.css', array(), THEME_VERSION);
}
add_action('wp_enqueue_scripts', 'mm_load_stylesheet_and_libs', 1);

/**
 * Enqueues theme stylesheets and libraries.
 *
 * This function enqueues the following stylesheets:
 * - Font Awesome from a CDN.
 * - Global CSS from the theme's assets directory.
 *
 * @return void
 */
function mm_load_scripts_and_libs()
{
	wp_deregister_script('jquery');

	// register jquery.
	wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '3.7.1', null, true);

	wp_enqueue_script('jquery');


	if (is_front_page() || is_page_template('talent-page.php')) {

		// GSAP Core.
		wp_enqueue_script('gsap-core', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array(), '3.12.5', true);

		// GSAP ScrollTrigger.
		wp_enqueue_script('gsap-scrolltrigger', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', array(), '3.12.5', true);
	}




	//Find-this.js.
	wp_enqueue_script('find-this-js', get_template_directory_uri() . '/assets/js/find-images.min.js', array(), THEME_VERSION, true);

	//Find Links.js.
	wp_enqueue_script('find-links-js', get_template_directory_uri() . '/assets/js/find-links.min.js', array(), THEME_VERSION, true);

	// Load global js.
	wp_enqueue_script('global-js', get_template_directory_uri() . '/assets/js/global.min.js', array('jquery'), THEME_VERSION, true);

	if (is_front_page()) {

		// Load flickity js.
		wp_enqueue_script('flickity-js', get_template_directory_uri() . '/assets/js/flickity.min.js', array('jquery'), THEME_VERSION, true);



		//infinite-scroll.js.
		wp_enqueue_script('infinite-js', get_template_directory_uri() . '/assets/js/infinite-scroll.min.js', array('jquery'), THEME_VERSION, true);

		//job-carousel.min.js.
		wp_enqueue_script('job-carousel-js', get_template_directory_uri() . '/assets/js/job-carousel.min.js', array('jquery'), THEME_VERSION, true);

		//showcase.min.js.
		wp_enqueue_script('showcase-js', get_template_directory_uri() . '/assets/js/showcase.min.js', array('jquery'), THEME_VERSION, true);

		//talent.min.js.
		wp_enqueue_script('talent-js', get_template_directory_uri() . '/assets/js/talent.min.js', array('jquery'), THEME_VERSION, true);

		// X.js.
		wp_enqueue_script('x-js', get_template_directory_uri() . '/assets/js/x.min.js', array('jquery'), THEME_VERSION, true);
	}






	// if page is talent-page.php.
	if (is_page_template('talent-page.php')) {
		//Talent.js.
		wp_enqueue_script('talent-js', get_template_directory_uri() . '/assets/js/talent-page.min.js', array(), THEME_VERSION, true);
	}
}
add_action('wp_enqueue_scripts', 'mm_load_scripts_and_libs', 1);



/**
 * Adds the defer attribute to specific script tags.
 *
 * This function checks if the script handle is in the list of scripts to defer.
 * If it is, it adds the defer attribute to the script tag.
 *
 * @param string $tag The HTML script tag.
 * @param string $handle The script handle.
 * @return string The modified or unmodified script tag.
 */
function mm_add_defer_attribute($tag, $handle)
{
	$scripts_to_defer = array(
		'jquery',
		'boxicons',
		'global-js',
		'flickity',
		'front-page-js',
	);
	if (in_array($handle, $scripts_to_defer, true)) {
		return str_replace('src=', 'defer src=', $tag);
	}

	return $tag;
}

// Uncomment the line below to enable defer attribute for specific scripts.
// add_filter( 'script_loader_tag', 'mm_add_defer_attribute', 10, 2 );.




function tps_logo()
{
	$logo = THEME_URI . '/assets/images/naga.webp';
	return $logo;
}
