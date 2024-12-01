window.addEventListener('DOMContentLoaded', (event) => {
    jQuery(function () {
        //JQuery start below.

        function talentDesktop() {
            var $screenWidth = jQuery(window).width();

            if ($screenWidth > 767) {
                jQuery('#talent .item').on('mouseenter', function () {
                    jQuery(this).addClass('active');
                    jQuery('#talent .item').not(this).removeClass('active');

                    jQuery(this).on('mouseleave', function () {
                        jQuery(this).removeClass('active');
                    });
                });
            } else {
                gsap.registerPlugin(ScrollTrigger);

                var items = jQuery('#talent .item');

                items.each(function (index, element) {
                    ScrollTrigger.create({
                        trigger: element,
                        start: "top+=5rem center",
                        end: "bottom+=5rem center",
                        onEnter: function () {
                            jQuery(element).addClass('active');
                        },
                        onLeave: function () {
                            jQuery(element).removeClass('active');
                        },
                        onEnterBack: function () {
                            jQuery(element).addClass('active');
                        },
                        onLeaveBack: function () {
                            jQuery(element).removeClass('active');
                        }
                    });
                });
            }
        }
        talentDesktop();


        //Sticky Process Start.
        function stickyProcess() {
            jQuery('#process .left').stickybits();
            console.log('Sticky Process');
        }
        stickyProcess();
        //Sticky Process End.








        jQuery(window).resize(function () {
            talentDesktop();
        });








        //JQuery end above.
    });
});