window.addEventListener('DOMContentLoaded', (event) => {
    jQuery(function () {
        //JQuery start below.

        function group1() {
            var $carousel = jQuery('.groups');
            var scrollSpeed = 1;
            var scrollPos = $carousel[0].scrollWidth / 2;
            $carousel.append($carousel.html());

            // Fungsi animasi
            function smoothScroll() {
                scrollPos -= scrollSpeed;
                if (scrollPos <= 0) {
                    scrollPos = $carousel[0].scrollWidth / 2;
                }
                $carousel.scrollLeft(scrollPos);
                requestAnimationFrame(smoothScroll);
            }

            smoothScroll(); // Mulai animasi
        }
        group1();
        // Carousel Group 1 End.


        //append box name on element .groups .group .item start.
        function appendBoxName() {
            jQuery('.groups .group .item').each(function () {
                var $boxName = '<div class="box"><span>Jojon</span><span>Web Developer</span></div>';
                jQuery(this).append($boxName);
            });
        }
        appendBoxName();
        //append box name on element .groups .group .item end.











        //JQuery end above.
    });
});