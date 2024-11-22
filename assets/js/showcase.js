window.addEventListener('DOMContentLoaded', (event) => {
    jQuery(function () {
        //JQuery start below.



        function showCase() {
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
        }
        showCase();

        function removePadding() {
            jQuery('#slides .items .next').on('click', function () {
                jQuery('#slides .items').css('padding-left', '0');
            });

            function checkPreviousDisabled() {
                if (jQuery('#slides .items .previous').is('[disabled]')) {
                    jQuery('#slides .items').css('padding-left', '20rem');
                }
            }

            // Jalankan pemeriksaan setiap kali elemen sebelumnya diklik atau pada awal load
            jQuery('.items .previous').on('click', checkPreviousDisabled);
            checkPreviousDisabled();
        }
        removePadding();






        //JQuery end above.
    });
});