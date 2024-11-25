window.addEventListener('DOMContentLoaded', (event) => {
    jQuery(function () {
        //JQuery start below.

        // Call header menu start.
        function callHeaderMenu() {
            var $screenWidth = jQuery(window).width();
            if ($screenWidth < 841) {
                jQuery('.trigger').on('click', function (e) {
                    e.stopPropagation();
                    jQuery(this).toggleClass('active');
                    jQuery('#header .mid').toggleClass('active');
                    jQuery('#header .inner-section .container .wrapper .items .mid nav .inner').addClass('active');
                });

                // Menutup menu jika klik elemen #header .mid
                jQuery('#header .mid').on('click', function (e) {
                    e.stopPropagation();
                    jQuery('.trigger').removeClass('active');
                    jQuery(this).removeClass('active');
                    jQuery('#header .inner-section .container .wrapper .items .mid nav .inner').removeClass('active');
                });

                // Menutup menu jika klik sembarang tempat di luar menu
                jQuery(document).on('click', function () {
                    jQuery('.trigger').removeClass('active');
                    jQuery('#header .mid').removeClass('active');
                    jQuery('#header .inner-section .container .wrapper .items .mid nav .inner').removeClass('active');
                });
            }
        }
        callHeaderMenu();

        // Call header menu end.

        // move header inner to nav start.
        function moveHeaderInner() {
            $screenWidth = jQuery(window).width();
            if ($screenWidth < 641) {
                jQuery('#header .inner').insertAfter('#header ul.horizontal');
            } else {
                jQuery('#header .inner').insertBefore('#header .bars');
            }
        }
        moveHeaderInner();
        // move header inner to nav end.








        jQuery(window).resize(function () {
            moveHeaderInner();
        });
        //JQuery end above.
    });
});