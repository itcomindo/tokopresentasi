window.addEventListener('DOMContentLoaded', () => {
    jQuery(function () {
        gsap.registerPlugin(ScrollTrigger);

        function changeBodyClass(toggle) {
            if (toggle) {
                jQuery('body').removeClass('dark');
            } else {
                jQuery('body').addClass('dark');
            }
        }
        ScrollTrigger.create({
            // markers: true,
            trigger: "#counter",
            start: "top+=10rem center",
            end: "bottom+=10rem center",
            onEnter: () => changeBodyClass(true),
            onLeave: () => changeBodyClass(false),
            onEnterBack: () => changeBodyClass(true),
            onLeaveBack: () => changeBodyClass(false)
        });

        ScrollTrigger.refresh();



        function animPhoto() {
            function checkScroll() {
                const scrollTop = jQuery(window).scrollTop();

                if (scrollTop >= 300) {
                    gsap.to('.anim', {
                        y: 10,
                        duration: 1,
                        yoyo: true,
                        repeat: -1
                    });
                } else {
                    gsap.to('.anim', {
                        y: 0,
                        duration: 1
                    });
                }
            }

            jQuery(window).on('scroll', checkScroll);

            checkScroll();
        }

        animPhoto();


        animPhoto();










    });
});
