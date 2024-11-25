window.addEventListener('DOMContentLoaded', (event) => {
    jQuery(function () {
        //JQuery start below.

        function group1() {
            var $carousel = jQuery('#staff .groups');
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

        //GSAP Start.
        gsap.registerPlugin(ScrollTrigger);
        function gsap1() {
            gsap.to('#issues', {
                background: '#121212',
                scrollTrigger: {
                    trigger: '#teaser',
                    start: 'bottom+=5rem center',
                    end: 'bottom+=5rem center',
                    toggleActions: 'play none reverse none',
                }
            });
            ScrollTrigger.create({
                trigger: '#issues',
                start: 'bottom+=100 top',
                onLeave: () => gsap.to('#issues', { background: '' }),
                onEnterBack: () => gsap.to('#issues', { background: '#121212' }),
            });
        }
        gsap1();


        function gsap2() {
            gsap.to('#testi-1', {
                background: '#121212',
                scrollTrigger: {
                    trigger: '#cards',
                    start: 'bottom+=5rem center',
                    end: 'bottom+=5rem center',
                    toggleActions: 'play none reverse none',
                }
            });
            ScrollTrigger.create({
                trigger: '#cards',
                start: 'bottom+=100 top',
                onLeave: () => gsap.to('#testi-1', { background: '' }),
                onEnterBack: () => gsap.to('#testi-1', { background: '#121212' }),
            });
        }
        gsap2();


        //GSAP End.

        //append box name on element .groups .group .item start.
        function appendBoxName() {
            jQuery('.groups .group .item').each(function () {
                var $boxName = '<div class="box"><span>Jojon</span><span>Web Developer</span></div>';
                jQuery(this).append($boxName);
            });
        }
        // appendBoxName();
        //append box name on element .groups .group .item end.




        //JQuery end above.
    });
});