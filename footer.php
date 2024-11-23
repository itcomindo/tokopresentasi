<?php

/**
 *
 * Footer File.
 * @package  tps
 */

defined('ABSPATH') || die('No script kiddies please!');

wp_footer();
?>

</main>


<?php
get_template_part('parts/sections/section', 'footer');
if (function_exists('tps_is_devmode') && ! tps_is_devmode()) {
?>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/67408b0f2480f5b4f5a27a12/1ida1udec';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
<?php
}
?>

</body>

</html>