window.addEventListener('DOMContentLoaded', (event) => {
    jQuery(function () {
        //JQuery start below.



        function showCase() {

            var $screenwidth = jQuery(window).width();
            if ($screenwidth > 1025) {
                jQuery('#slides .items').flickity({
                    // options
                    cellAlign: 'left',
                    contain: true,
                    wrapAround: false,
                    autoPlay: false,
                    prevNextButtons: true,
                    pageDots: false,
                    draggable: false,
                });
            } else {
                jQuery('#slides .items').flickity({
                    // options
                    cellAlign: 'center',
                    contain: true,
                    wrapAround: false,
                    autoPlay: false,
                    prevNextButtons: false,
                    pageDots: true,
                    draggable: true,
                });
            }
        }
        showCase();

        function removePadding() {

            var $screenwidth = jQuery(window).width();

            if ($screenwidth > 1024) {
                jQuery('#slides .items .next').on('click', function () {
                    jQuery('#slides .items').css('padding-left', '0');
                });

                function checkPreviousDisabled() {
                    if (jQuery('#slides .items .previous').is('[disabled]')) {
                        jQuery('#slides .items').css('padding-left', '20rem');
                    }
                }
            } else {
                jQuery('#slides .items').css('padding-left', '0');
            }
            // Jalankan pemeriksaan setiap kali elemen sebelumnya diklik atau pada awal load
            jQuery('.items .previous').on('click', checkPreviousDisabled);
            checkPreviousDisabled();
        }
        removePadding();


        jQuery(window).resize(function () {
            showCase();
            removePadding();
        });






        //JQuery end above.
    });
});