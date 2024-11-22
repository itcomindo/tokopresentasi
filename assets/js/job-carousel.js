window.addEventListener('DOMContentLoaded', (event) => {
    jQuery(function () {
        //JQuery start below.



        function jobCarousel() {
            var $carousel = jQuery('.jobs');
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
        jobCarousel();




        // Carousel Group 1 End.





        //JQuery end above.
    });
});