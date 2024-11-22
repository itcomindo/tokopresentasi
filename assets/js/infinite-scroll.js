window.addEventListener('DOMContentLoaded', (event) => {
    jQuery(function () {
        //JQuery start below.

        //infiniteVerticalSlide start.
        function infiniteVerticalSlide() {
            var container = jQuery('#issues .right');
            var itemHeight = container.find('span').first().outerHeight(); // Tinggi satu elemen

            function slide() {
                // Ambil elemen pertama dengan class active
                var activeItem = container.find('span.active');

                // Lakukan animasi translate Y ke atas pada elemen aktif
                activeItem.animate(
                    { transform: 'translateY(-' + itemHeight + 'px)' },
                    500, // Durasi animasi
                    'swing',
                    function () {
                        // Setelah animasi selesai, reset posisi elemen
                        activeItem.removeClass('active').css('transform', 'translateY(0)');
                        container.append(activeItem); // Pindahkan ke elemen terakhir

                        // Tambahkan class active ke elemen berikutnya
                        var nextItem = container.find('span').first();
                        nextItem.addClass('active');
                    }
                );
            }

            // Jalankan loop infinite
            setInterval(slide, 2000); // Interval pergantian
        }
        infiniteVerticalSlide();
        //infiniteVerticalSlide end.



        //JQuery end above.
    });
});