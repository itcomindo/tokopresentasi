<?php

/**
 *
 * Header File.
 * @package  tps
 */

defined('ABSPATH') || die('No script kiddies please!');
?>
<!DOCTYPE html>
<html lang="en-US" class="no-js" itemscope itemtype="https://schema.org/WebPage">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="googlebot" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <!-- preconnect to cdnjs -->
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php

    get_template_part('parts/part', 'header');


    wp_body_open();
    ?>
    <main>